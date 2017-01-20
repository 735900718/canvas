<?php
  header('Content-Type:application/json;charset=UTF-8');
  $conn=mysqli_connect('127.0.0.1','root','','tarena',3306);
  $sql="SET NAMES UTF8";
  mysqli_query($conn,$sql);
  @$stuName=$_REQUEST['stuName'] or die('{"code":"2","msg":"stuName request"}');
  @$chinese=$_REQUEST['chinese'] or die('{"code":"2","msg":"chinese request"}');
  @$math=$_REQUEST['math'] or die('{"code":"2","msg":"math request"}');

  $sql="INSERT INTO score VALUES(NULL,'$stuName','$chinese','$math')";
  $result=mysqli_query($conn,$sql);
  if($result===false){
    echo '{"code":"2","msg":"INSERT ERR","err":"'.$sql.'"}';
  }else{
    echo '{"code":"1","msg":"INSERT SUCC"}';
  }
?>