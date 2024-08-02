<?php
$id=$_POST["id"];
$name=$_POST["name"];
$qualification=$_POST["qualification"];
$age=$_POST["age"];
$phone=$_POST["phone"];
$experience=$_POST["experience"];
$address=$_POST["address"];
$conn=new mysqli('localhost','root','','staff');
if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}
else{
    $sql=$conn->prepare("insert into details(id,name,qualification,age,phone,experience,address)values(?,?,?,?,?,?,?)");
    $sql->bind_param("sssiiss",$id,$name,$qualification,$age,$phone,$experience,$address);
    $sql->execute();
    echo"Added successfully....";
    $sql->close();
    $conn->close();
}
