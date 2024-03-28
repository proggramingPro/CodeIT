<?php
 $Username = $_POST['Username'];
 $Email = $_POST['Email'];
 $password = $_POST['password'];


$conn = new mysqli('localhost','root','','CodeIT');
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn=>prepare("insert into registration(Username,Email,password)values(?,?,?)");
    $stmt->bind_param("sss",$Username,$Email,$password);
    $stmt->execute();
    echo"registration Successfuly...";
    $stmt->close();
    $conn->close():
}

?>
