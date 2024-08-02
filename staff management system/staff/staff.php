<?php
$id=$_GET["id"];
$name=$_GET["name"];

$conn=new mysqli('localhost','root','','staff');
if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}
$sql="SELECT id,name,qualification,age,phone,experience,address from details WHERE id='$id'&&name='$name'";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<h3>STAFF ID:  ".$row["id"]."</h3><h3>STAFF NAME:".$row["name"]."</h3><h3>QUALIFICATION:".$row["qualification"]."</h3><h3>AGE:".$row["age"]."</h3><h3>MOBILE NUMBER:".$row["phone"]."</h3><h3>EXPERIENCE:".$row["experience"]."</h3><h3>ADDRESS:".$row["address"]."</h3>";
     }
    echo " </body></html>";
}
else{
    echo"Incorrect Staff ID or Staff Name";
}
$conn->close();
