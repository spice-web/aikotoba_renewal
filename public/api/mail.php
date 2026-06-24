<?php
header("Access-Control-Allow-Origin: https://willsapo.laughlines.jp/");
header("Access-Control-Allow-Headers: Content-Type");


// HTTPリクエストのContent-Typeを確認
$contentType = isset($_SERVER['CONTENT_TYPE']) ? $_SERVER['CONTENT_TYPE'] : '';

// Content-Typeがapplication/jsonかどうかを確認
if (strpos($contentType, 'application/json') !== false) {
  // 受信したJSONデータを取得
  $json_data = file_get_contents('php://input');

  // JSONデータを連想配列にデコード
  $data = json_decode($json_data, true);

  // フォームからデータをサニタイズして取得
  $name = isset($data['name']) ? sanitize_input($data['name']) : '';
  $kana = isset($data['kana']) ? sanitize_input($data['kana']) : '';
  $tel  = isset($data['tel']) ? sanitize_input($data['tel']) : '';
  $email = isset($data['email']) ? sanitize_input($data['email']) : '';
  $content = isset($data['content']) ? sanitize_input($data['content']) : '';


  // バリデーション
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
    $error[] = "「よみがな」は全角カタカナで入力してください。";
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

  // メールの送信先
  $to = "info@willsapo.laughlines.jp, aiwa1201cp@gmail.com";

  // ここにメール機能を追加する
  // 変数とタイムゾーンを初期化
  $header = null;
  $auto_reply_subject = null;
  $auto_reply_text = null;
  // 運営側
  $admin_reply_subject = null;
  $admin_reply_text = null;
  date_default_timezone_set('Asia/Tokyo');

  // 日本語メール用のエンコード設定
  mb_language('Japanese');
  mb_internal_encoding('UTF-8');

  // 差出人の表示名（日本語）はMIMEエンコードしないと各メールソフトで文字化けする
  $from_name = mb_encode_mimeheader('放課後等デイサービス・児童発達支援ウィルサポ');

  // へーダー情報を設定
  $header = "MIME-Version: 1.0\n";
  $header .= "From: {$from_name} <noreply@willsapo.laughlines.jp>\n";
  $header .= "Reply-To: {$from_name} <noreply@willsapo.laughlines.jp>\n";

  // 件名を設定
  $auto_reply_subject = 'お問い合わせありがとうございます。【放課後等デイサービス・児童発達支援ウィルサポ】';
  // 本文を設定
  $auto_reply_text  = "この度は、お問い合わせいただき誠にありがとうございます。\n下記内容でお問い合わせを受け付けました。\n\n";
  $auto_reply_text .= "お問い合わせ日時:" . date("Y-m-d H:i") . "\n";
  $auto_reply_text .= "お名前: $name($kana)\n";
  $auto_reply_text .= "電話番号: $tel\n";
  $auto_reply_text .= "メールアドレス： $email\n\n";
  $auto_reply_text .= "お問い合わせ内容: " . nl2br($content) . "\n\n\n\n";
  $auto_reply_text .= "=============================================\n";
  $auto_reply_text .= "株式会社ラフラインズ\n";
  $auto_reply_text .= "住所：〒734-0023 広島市南区東雲本町1丁目14-16-1\n";
  $auto_reply_text .= "URL：https://laughlines.jp/\n";
  $auto_reply_text .= "TEL：082-236-6375\n";
  $auto_reply_text .= "E-mail：info@laughlines.jp\n\n";
  $auto_reply_text .= "=============================================\n";
  $auto_reply_text .= "放課後等デイサービス・児童発達支援 ウィルサポ\n";
  $auto_reply_text .= "URL：https://willsapo.laughlines.jp/\n";
  $auto_reply_text .= "E-mail：info@willsapo.laughlines.jp\n\n";

  $auto_reply_text .= "ウィルサポキッズ廿日市SSTs\n";
  $auto_reply_text .= "サービス種別: 児童発達支援、放課後等デイサービス\n";
  $auto_reply_text .= "事業所番号: 3452700226\n";
  $auto_reply_text .= "営業時間: 平日 10：00～19：00 / 休日 9：00～18：00\n";
  $auto_reply_text .= "所在地: 広島県廿日市市住吉1-5-26 ローレルコート1階\n";
  $auto_reply_text .= "TEL: 0829-30-8723\n\n";

  $auto_reply_text .= "ウィルサポキャンパス廿日市\n";
  $auto_reply_text .= "サービス種別: 放課後等デイサービス\n";
  $auto_reply_text .= "事業所番号: 3452700234\n";
  $auto_reply_text .= "営業時間: 平日 10：00～19：00 / 休日 9：00～18：00\n";
  $auto_reply_text .= "所在地: 広島県廿日市市住吉1-5-26 ローレルコート2階\n";
  $auto_reply_text .= "TEL: 0829-30-8724\n\n";

 $auto_reply_text .= "ウィルサポ学園\n";
 $auto_reply_text .= "営業時間: 平日 10：00～12：00\n";
 $auto_reply_text .= "所在地: 広島県廿日市市住吉1-5-26 ローレルコート2階\n";
 $auto_reply_text .= "TEL: 0829-30-8724\n\n";

 $auto_reply_text .= "ウィルサポ五日市\n";
 $auto_reply_text .= "放課後等デイサービス・児童発達支援\n";
 $auto_reply_text .= "事業所番号: 3450223015\n";
 $auto_reply_text .= "営業時間: 平日 10：00～19：00 / 休日 9：00～18：00\n";
 $auto_reply_text .= "所在地: 広島県広島市佐伯区五日市駅前3-3-11\n";
 $auto_reply_text .= "TEL: 082-236-7022\n\n";

 $auto_reply_text .= "ウィルサポプラス横川\n";
 $auto_reply_text .= "サービス種別: 重心型放課後等デイサービス\n";
 $auto_reply_text .= "事業所番号: 3450223338\n";
 $auto_reply_text .= "営業時間: 平日 10：00～19：00 / 休日 9：00～18：00\n";
 $auto_reply_text .= "所在地: 広島県広島市西区横川新町12-13\n";
 $auto_reply_text .= "TEL: 082-236-6375\n";

  // メール送信
  $auto_reply_sent = mb_send_mail($email, $auto_reply_subject, $auto_reply_text, $header);

  // 運営側へ送るメールの件名
  $admin_reply_subject = "HPのフォームよりお問い合わせを受け付けました";
  // 本文を設定
  $admin_reply_text = "下記内容でお問い合わせがありました。\n\n";
  $admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
  $admin_reply_text .= "お名前：" . $name  . "(" . $kana . ")\n";
  $admin_reply_text .= "電話番号：" . $tel . "\n";
  $admin_reply_text .= "メールアドレス：" . $email . "\n\n";
  $admin_reply_text .= "お問い合わせ内容：" . nl2br($content) . "\n\n";

  // メール送信
  $admin_reply_sent = mb_send_mail($to, $admin_reply_subject, $admin_reply_text, $header);

  //送信結果の表示
  // 送信結果を通知
  if ($auto_reply_sent && $admin_reply_sent) {
    echo "送信しました";
  } else {
    echo "送信失敗";
  }

  exit();
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
