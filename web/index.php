<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>php首页</title>
<link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">
</head>
<body>
<h1>哈哈</h1>
<?php echo('hello world from php')
exec("sh a.sh");
$file = "info.txt";
if(file_exists($file))
{
  echo "当前目录中，文件".$file."存在";
  echo "";
}
else
{
  echo "当前目录中，文件".$file."不存在";
  echo "";
}
?>
</body>
</html>
