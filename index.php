<?php
session_start();
 
$form_error = '';
 
if(isset($_POST['submit'])){
 
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    if($email == 'jesi@gmail.com' AND $password == '1111'){

        $_SESSION['email'] = $email;
        header('Location: app.php');
    }else{
 
        $form_error = '<p>Password atau email yang kamu masukkan salah</p>';
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Portal Akademik</title>
    <link rel="stylesheet" type="text/css" href="body.css">
</head>
<body>
    <h1>PORTAL MAHASISWA</h1>
    <h2>UNIVERSITAS AHMAD DAHLAN</h2>    
    <form method="POST" action="index.php">
        <div class="kotak_login">
            <left class="tulisan_login">Login Portal</left> <br><br>
    
        <form>
            <input type="email" name="email" class="form_login" placeholder="email">

            <input type="password" name="password" class="form_login" placeholder="Password">

            <left>
                <p><input type='checkbox' name='peringatan' value='php' />Ingatkan saya !</p>
            </left>

            <center>
                <input type="submit" name="submit" class="tombol_login" value="login">
            <br>
            </center>
           

        </form>
        
    </div>    
    </form>
</body>
</html>