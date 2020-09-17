<?php
if(isset($_POST['enc'])){
    $pass = $_POST['pass'];
    
    //encrpt input
    $encrypted = hash('sha256',$pass);
}

?>

<style>
    body{
        font-family: Arial, Verdana;
        font-size:19px;
        background-image: linear-gradient(to right, red , blue);
        color:#fff;
    }
    form{
        width:50%;
        margin:40px auto;
        height:200px;
        padding:20px;
    }
    input[type="text"], input[type="submit"]{
        width:100%;
        padding:20px;
        margin:20px 0;
        font-size: 18px;
        border:none;
        border-radius: 5px;
    }
    input[type="submit"]{
        background:green;
        color:#fff;

    }
</style>
<form method="post" action="">
    <h3><?php if(isset($encrypted)){ echo $encrypted;} ?></h3>
    <label>ENCRYPT TEXT TO SHA256</label>
    <input type="text" name="pass" >
    
    <input type="submit" name="enc" value="ENCRYPT">
</form>
