<?php
//传入txt文本文件内容，输出展示页面的字符串
function txt2html($contents) {
    $arr = explode("\r\n", $contents);//转换成数组
    foreach ($arr as $key => $val) {
        $num = '<small style="color: #778899">' . ($key+1) . '</small>' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ;
        $arr[$key] = $num.$val;
    }
    $str = nl2br(implode("\r\n", $arr));
    return $str;
}

//传入文件名和页面字符串组成json数组格式
function str2json($filename, $str){
    $jsonArr = [
        'filename' => $filename,
        'content' => $str,
    ];
    return $jsonArr;
}