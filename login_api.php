<?php
/***************************************************
 * 會員登入行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.從資料庫取得資料
 * 4.比對表單資料和資料庫資料是否一致
 * 5.根據比對的結果決定畫面的行為
  ***************************************************/

$acc=$_POST['acc'];
$px=$_POST['pw'];

echo "acc=".$acc;
echo "<br>";
echo "pw=".$pw;

$dsn="mysql:host=localhost;charset=itf8;dbname=mydb";
$pdo=new PDO($dsn,'root',"");

$sql="select *from user where acc='$acc'&& pw='$pw'";

$data=$pdo->query($sql)->fetch();

print_r($data);


if($acc==$date['acc']) &&$pw=$date['pw']}{
  echo "登入成功";
  }else{
  echo"登入失敗";
  }

?>