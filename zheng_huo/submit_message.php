<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $message = $_POST['message'];
  $filename = 'messages.txt'; // 指定保存留言的文件名
  $file = fopen($filename, 'a'); // 打开文件并以追加方式写入
  fwrite($file, $message . PHP_EOL); // 写入留言信息
  fclose($file); // 关闭文件句柄
  // 提示用户提交成功
  echo "<script>alert('提交成功！'); window.history.go(-1);</script>";
  exit();
}
?>