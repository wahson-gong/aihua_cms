<?php
ob_start(); //开启ob缓冲
echo "hello,world!";
//php提供的ob缓存，输出缓冲
$str = ob_get_contents(); //获取缓冲区的内容
ob_end_clean(); //清空并关闭缓冲区
echo $str;
