<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="index.html">
</head>
<body>
    
    <div class="kotak_login"> 
        <p class="tulisan_login">Silahkan Login</p>
        <form action="ceklogin.php" method="post" role="form">
            <label>Nama</label>
            <input type="text" name="nama" class="form_login" placeholder="nama" autocomplete="off" >
           
            <label>Email</label>
            <input type="text" name="email" class="form_login" placeholder="email" autocomplete="off" >
            <label>Password</label>
            <input type="text" name="password" class="form_login" placeholder="password" autocomplete="off" >
            <input type="submit" class="tombol_login" value="Login">
            <input type="submit" class="tombol_back" value="Back" >
        </form>
    </div>

</body>
</html>