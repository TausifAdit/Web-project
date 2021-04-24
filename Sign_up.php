<?php

if(isset($_POST['signup_submit'])){

    require 'Database_connection.php';

    $sql = "create database if not exits mydatabase";

    $sql = "create table if not exits clients(
        cid int not null primary key, 
        cname varchar(50), 
        cemail varchar(50), 
        cphone int, 
        cpass varchar(50)
    )";

    $clientid = $_POST['cid'];
    $clientname = $_POST['cname'];
    $clientemail = $_POST['cemail'];
    $clientphone = $_POST['cphone'];
    $clientpass = $_POST['cpass'];
    $clientconpass = $_POST['c_conpass'];

    $sql = "INSERT INTO clients(cid, cname, cemail, cphone, cpass) VALUES(?, ?, ?, ?, ?)";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnSoft</title>
    <link rel="stylesheet" href="CSS.css">
</head>
<body>
    <div class="s2">
        <h1>Sign Up</h1>
        <form>
            <input type="text" name="cid" placeholder="Set Your 4 digit Id">
            <br>
            <input type="text" name="cname" placeholder="Set Your Name">
            <br>
            <input type="email" name="cemail" placeholder="Set Your Email">
            <br>
            <input type="tel" name="cphone" placeholder="Set Your Phone Number">
            <br>
            <input type="password" name="cpass" placeholder="Set Your Password">
            <br>
            <input type="password" name="c_conpass" placeholder="Confirm Your Password">
            <br>
            <input type="Submit" name="signup_submit" value="Sign Up" class="Sendbtn">
        </form>
</div>
</body>
</html>