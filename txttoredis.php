<?php
$lines = file_get_contents("./02.txt");//获取文件内容
ini_set('memory_limit','-1');//不要限制mem大小，否则会报错
$line = explode("\r\n",$lines);//转换成数组
//实例化redis
$redis = new Redis();
//链接
$redis->connect('127.0.0.1',6379);
//使用管道
$redis->pipeline();//开启管道
if(!$redis){
        throw new Exception('redis连接失败！',1);
}
$c = 0;
$count = count($line);
$now = time();
for($i=0;$i<$count;$i++){
        $res = $redis->hset('qq'.$i,'text',$line[$i]);
        if($res){
          $c++;
        }
}
$redis->exec();
$time = time()-$now;

echo '成功导入'.$c.'条记录，用时time'.$time;
