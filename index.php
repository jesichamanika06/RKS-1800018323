<html>
<head>
    <title>Portal Akademik</title>
    <link rel="stylesheet" type="text/css" href="body.css">
</head>
<body>
    <h1>PORTAL MAHASISWA</h1>
    <h2>UNIVERSITAS AHMAD DAHLAN</h2>    
    <form method="POST" action="login.php">
        <div class="kotak_login">
            <left class="tulisan_login">Login Portal</left> <br><br>
    
        <form>
            <input type="text" name="username" class="form_login" placeholder="Username">

            <input type="text" name="password" class="form_login" placeholder="Password">

            <left>
                <p><input type='checkbox' name='peringatan' value='php' />Ingatkan saya !</p>
            </left>

            <center>
                <input type="submit" class="tombol_login" value="LOGIN">
            <br>
         <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
            }
            else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }
            else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
            }
        }
    ?></center>
        </form>
        
    </div>    
    </form>
</body>
</html>