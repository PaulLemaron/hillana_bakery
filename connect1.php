<?php
$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$email = $_POST['email'];
$areaode = $_POST['areaCode'];
$phone = $_POST['phone'];
$Order = $_POST['Order'];



// Database connection
$conn = new mysqli('localhost','root','','hillanabakery');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into bakery(firstName, lastName,email,areaCode,phone,Order) values(?, ?, ?, ?, ?,?)");
    $stmt->bind_param("sssiis", $firstName,$lastName,$email,$areaCode,$phone,$Order);
    $execval = $stmt->execute();
    echo $execval;
    echo "Order sent...";
    $stmt->close();
    $conn->close();
}
?>