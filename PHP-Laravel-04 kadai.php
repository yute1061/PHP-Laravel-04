<?php

//課題1
function a($i) {
    $result = $i * 2;
    return $result;
}
echo a(50);
echo "\n";

//課題2
echo "\n";
function b($a, $b) {
    $result = $a + $b;
    return $result;
}
echo b(5, 4);
echo "\n";

//課題3
echo "\n";
function c($arr) {
    $result = 1;
    foreach($arr as $value) {
        $result *=  $value;
    }
    return $result;
}
echo c([1,3,5,7,9]);
echo "\n";

//課題4
echo "\n";
function max_array($array) {
    $max_number = $array[0];
    foreach($array as $val) {
        if ($val > $max_number) {
            $max_number = $val;
        }
    }
    return $max_number;
}
echo max_array([3,5,20,7,1,59,9]);
echo "\n";

//課題5
echo "\n";
//strip_tags 文字列からhtml、phpタグを取り除く
$text = "tech boost<p>kadai<h1>text<h2>index</p>mail<h3>file";
echo strip_tags($text, "<p><h1>");
echo "\n";
//array_push 配列の最後に要素を追加する
echo "\n";
$push = ["一","二","三"];
array_push($push,"四","五");
echo "$push[4]";
echo "\n";
//array_merge 複数の配列を結合する
echo "\n";
$merge1 = ["item1","item2","item3"];
$merge2 = ["item4","item5","item6"];
$item_merge = array_merge($merge1, $merge2);
echo "$item_merge[4]";
echo "\n";
//time 現在時刻のUnixタイムスタンプを取得する
//mktime 指定した日時のUnixタイムスタンプを取得する
echo "\n";
echo time();
echo "\n";
echo mktime(0,0,0,9,6,1995);
echo "\n";
//date 引数のUnixタイムスタンプを指定したフォーマットで出力する
echo "\n";
echo date("Y/m/d",time());
echo "\n";
echo date("Y/n/j/H/i/s",mktime(3,34,12,9,6,1995));
echo "\n";