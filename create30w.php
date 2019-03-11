
<?php
//打开一个文件追加内容(append)方式打开文件
$fp = fopen('./02.txt','a');
//循环写内容
for($i=1;$i<=300000;$i++){
fwrite($fp,'oqzaJs1U8CyDh9_GzATy9GjFyjkA'.$i."\r\n");
}

//关闭文件
fclose($fp);
