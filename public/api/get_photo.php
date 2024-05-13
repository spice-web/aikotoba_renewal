<?php
$client_secret = "c6eec2554cc055e97168f38f7488714b"; // シークレットキー

$token_refresh_time = 60 * 60 * 24 * 30; // トークン再取得の間隔（30日）
$token_file_path = "../token/token.txt"; // トークンファイルのパス

$photo_data_refresh_time = 60 * 60 * 24; // 写真データ再取得の間隔（1日）
$photo_data_file_path = "./instagram_api.json"; // インスタグラムAPIのファイルパス

// 保持しているトークンを取得
$fl = fopen($token_file_path, "r");
$access_token = fgets($fl);
fclose($fl);

// $token_refresh_time秒経過していたらトークンを再取得
$refresh = 0;
if (!file_exists($token_file_path)) {
  $refresh = 1;
} else {
  $filemtime = filemtime($token_file_path);
  if ((time() - $token_refresh_time) > $filemtime) {
    $refresh = 1;
  }
}
if ($refresh == 1) {
  $url = "https://graph.instagram.com/access_token?grant_type=ig_exchange_token&client_secret=" . $client_secret . "&access_token=" . $access_token;
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($curl);
  curl_close($curl);

  $decode = json_decode($response, true);
  $access_token = $decode["access_token"];

  $fl = fopen($token_file_path, "w");
  fwrite($fl, $access_token);
  fclose($fl);
}

// $photo_file_refresh_timeの期間が過ぎたら写真データを再取得する
$refresh = 0;
if (!file_exists($photo_data_file_path)) {
  $refresh = 1;
} else {
  $filemtime = filemtime($photo_data_file_path);
  if ((time() - $photo_data_refresh_time) > $filemtime) {
    $refresh = 1;
  }
}
if ($refresh == 1) {
  $url = "https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url,thumbnail_url,permalink,timestamp,username&access_token=" . $access_token;
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($curl);
  curl_close($curl);

  $fl = fopen($photo_data_file_path, "w");
  fwrite($fl, $response);
  fclose($fl);
}
