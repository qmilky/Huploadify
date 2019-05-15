<?php
// 字符串按要求的字符编码来转换
// iconv ( string $in_charset , string $out_charset , string $str ) : string
// 将字符串 str 从 in_charset 转换编码到 out_charset。
//$filename = iconv('UTF-8', 'GBK', $_POST['file']);
//$filename = mb_convert_encoding( $_POST['file'], 'UTF-8', 'GBK');
$filename =  $_POST['file'];
//file_put_contents('./log.php', var_export([$filename,$_POST['file'],555555], true), FILE_APPEND);
if ($filename) {
    file_put_contents('uploads/'.$filename,file_get_contents($_FILES["file"]["tmp_name"]),FILE_APPEND);
}

echo $filename;
?>