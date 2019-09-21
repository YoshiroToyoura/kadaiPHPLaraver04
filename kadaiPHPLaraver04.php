<?php

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($i) {
 return $i * 2 ;
}
echo sum (5);

?>

<?php

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function f($a,$b) {
  return $a + $b ;
}
echo f(1,2);

?>

<?php

/*
3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) 
を渡すとその要素をすべてかけた結果を返す関数を作成してください。
*/


?>

<?php

/*
4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array 
という関数を実装しようとしています。途中の部分を完成させてください。
*/

function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a) {
    
    
  }
  return $max_number;
}

?>

<?php

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//・strip_tags

$str = "<h1>strip_tags関数</h1>"
  . "<p>取り除く</p>";
echo strip_tags($str) ."\n";


//・array_push

$sports = ['baseball','soccer','tennis'];
 array_push ($sports,'rugby','surfing');
 echo $sports[3];


//・array_merge

$sports1 = ['ゴルフ','ロッククライミング','水泳'];
$sports2 = ['剣道','ボクシング','陸上'];
$sports3 = ['柔道','空手','卓球'];
 
$sports = array_merge($sports1,$sports2,$sports3);
 echo $sports [7];
 
 
//・time, mktime

$date = time();
 echo $date;
 
echo date("Y/m/d H:i:s",mktime(15,56,24,9,21,2019));

//・date

date_default_timezone_set('Asia/Tokyo');
 echo date("Y/m/d H:i:s") . "\n";
 
 ?>
 