<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $message = $_POST['message'];
  $filename = 'messages.txt'; 
  $file = fopen($filename, 'a'); 
  fwrite($file, $message . PHP_EOL); 
  fclose($file); 
  
  echo "<script>alert('提交成功！'); window.history.go(-1);</script>";
  exit();
}
?>
