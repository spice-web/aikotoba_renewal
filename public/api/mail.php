<!-- 戻るボタン未実装 -->

<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // トークンの検証
  session_start();
  if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    die('不正なリクエストです。');
  }
  unset($_SESSION['token']);  // トークンの破棄

  // フォームからデータをサニタイズして取得
  $name = sanitize_input($_POST['name']);
  $kana = sanitize_input($_POST['kana']);
  $tel = sanitize_input($_POST['tel']);
  $email = sanitize_email($_POST['email']);
  $content = sanitize_input($_POST['content']);

  //　バリデーション
  $error = array();

  // お名前
  if (empty($data['name'])) {
    $error[] = "「お名前」は必ず入力してください。";
  } elseif (20 < mb_strlen($data['name'])) {
    $error[] = "「お名前」は20文字以内で入力してください。";
  } elseif (!preg_match('/^[ぁ-んァ-ヶー一-龠]+$/u', $data['name'])) {
    $error[] = "「お名前」は全角で入力してください。";
  }

  // よみがな
  if (
    empty($data['kana'])
  ) {
    $error[] = "「よみがな」は必ず入力してください。";
  } elseif (20 < mb_strlen($data['kana'])) {
    $error[] = "「よみがな」は20文字以内で入力してください。";
  } elseif (!preg_match("/^[ぁ-んァ-ヶー]+$/u", $data['kana'])) {
    $error[] = "「よみがな」は全角ひらがなで入力してください。";
  }

  // 電話番号
  if (
    empty($data['tel'])
  ) {
    $error[] = "「電話番号」は必ず入力してください。";
  } elseif (!preg_match("/^0\d{9,10}$/", $data['tel'])) {
    $error[] = "「電話番号」はハイフンなしで入力してください。";
  }


  // メールアドレス
  if (
    empty($data['email'])
  ) {
    $error[] = "「メールアドレス」は必ず入力してください。";
  } elseif (!preg_match('/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email'])) {
    $error[] = "「メールアドレス」は正しい形式で入力してください。";
  }

  // プライバシーポリシー
  if (empty($data["agree"])) {
    $error[] = "「プライバシーポリシー」に同意してください。";
  } elseif ($data['agree'] !== "1") {
    $error[] = "「プライバシーポリシー」に同意してください。";
  }

  // お問い合わせ内容
  if (empty($data['content'])) {
    $error[] = "「お問い合わせ内容」は必ず入力してください。";
  }

  // エラーがあれば表示して終了
  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
    exit;
  }

  //　メールの送信先
  $to = "mito@spice-web.jp";

  // ここにメール機能を追加する
  // 変数とタイムゾーンを初期化
  $header = null;
  $auto_reply_subject = null;
  $auto_reply_text = null;
  // 運営側
  $admin_reply_subject = null;
  $admin_reply_text = null;
  date_default_timezone_set('Asia/Tokyo');

  // へーダー情報を設定
  $header = "MIME-Version: 1.0\n";
  $header .= "From: あいことば療育ラボ横川 <noreply@aaa.com>\n";
  $header .= "Reply-To: あいことば療育ラボ横川 <noreply@aaa.com>\n";

  // 件名を設定
  $auto_reply_subject = 'お問い合わせありがとうございます。';
  // 本文を設定
  $auto_reply_text  = "この度は、お問い合わせいただき誠にありがとうございます。下記内容でお問い合わせを受け付けました。\n\n";
  $auto_reply_text .= "お問い合わせ日時:" . date("Y-m-d H:i") . "\n";
  $auto_reply_text .= "お名前: $name($kana)\n";
  $auto_reply_text .= "電話番号: $tel\n";
  $auto_reply_text .= "メールアドレス： $email\n\n";
  $auto_reply_text .= "お問い合わせ内容: " . nl2br($content) . "\n\n";

  // メール送信
  mb_send_mail($email, $auto_reply_subject, $auto_reply_text, $header);

  // 運営側へ送るメールの件名
  $admin_reply_subject = "お問い合わせを受け付けました";
  // 本文を設定
  $admin_reply_text = "下記内容でお問い合わせがありました。\n\n";
  $admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
  $admin_reply_text .= "お名前：" . $name  . "(" . $kana . ")\n";
  $admin_reply_text .= "電話番号" . $tel . "\n";
  $admin_reply_text .= "メールアドレス：" . $email . "\n\n";
  $admin_reply_text .= "お問い合わせ内容：" . nl2br($clean['content']) . "\n\n";

  // メール送信
  mb_send_mail($to, $admin_reply_subject, $admin_reply_text, $header);

  // 送信結果の表示
  if ($mail_sent) {
    header("Location: complete.php"); // 送信完了ページへリダイレクト
    exit;
  } else {
    echo "メールの送信に失敗しました。もう一度お試しください。";
  }
} else {
  echo "このページには直接アクセスできません。";
}

// 入力されたデータをサニタイズする関数
function sanitize_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// メールアドレスをサニタイズする関数
function sanitize_email($email)
{
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  return $email;
}
