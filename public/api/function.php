<?php
// トークンを生成する関数
function generateToken()
{
  return bin2hex(random_bytes(32)); // ランダムなトークンを生成
}
