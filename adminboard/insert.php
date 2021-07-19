<?php
session_start();
require_once('config.php');
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $country =$_POST['country'];
    $phone =$_POST['phone'];
    $email =$_POST['email'];

    $sql = "INSERT into giftcust (name, country, phone, email) VALUES(?, ?, ?, ?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$name, $country, $phone, $email]);
    
        echo 'Successfully added';
}
?>