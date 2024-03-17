<?php
require_once 'connect.php';
$data=$_GET['statement'];
if($data=="get"){
    
    $id=$_POST['id'];
    $sql="SELECT * FROM `coe140101` WHERE `id`=$id";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
}
if($data=="show"){
    $sql="SELECT * FROM `coe140101`";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
}
if($data=="insert"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $country=$_POST['country'];
    $currency=$_POST['currency'];
    $sql="INSERT INTO `coe140101` (`name`, `email`, `phone`,`country`,`currency`) 
    VALUES ('$name','$email','$phone','$country','$currency')";
    $stmt=$conn->prepare($sql);
    if($stmt->execute()){
        echo "success";
    }else {
        echo "error";
    }
    
}
if($data=="update"){
    $id=$_POST['u_id'];
    $name=$_POST['u_name'];
    $email=$_POST['u_email'];
    $phone=$_POST['u_phone'];
    $country=$_POST['u_country'];
    // $region=$_POST['u_region'];
    $currency=$_POST['u_currency'];
    $sql="UPDATE `coe140101` SET `name`='$name',`email`='$email',`phone`='$phone',`country`='$country',`currency`='$currency'
    WHERE `id`=$id";
    $stmt=$conn->prepare($sql);
    if($stmt->execute()){
        echo "success";
    }else {
        echo "error";
    }
}
if($data=="delete"){
    $id=$_POST['id'];
    $sql="DELETE FROM `coe140101` WHERE `id`=$id";
    $stmt=$conn->prepare($sql);
    if($stmt->execute()){
        echo "success";
    }else {
        echo "error";
    }
}
?>