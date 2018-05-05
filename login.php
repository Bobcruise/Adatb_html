<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

</head>


<title>Pluusz</title>

<body bgcolor="#bcc6d6">

<div class="w3-bar w3-red">
    <a href="main.html" class="w3-bar-item w3-button" >Pluusz</a>
    <a href="login.php" class="w3-bar-item w3-button">Bejelentkezés</a>
    <a href="register.php" class="w3-bar-item w3-button">Regisztráció</a>
</div>



<div class="w3-container w3-content">
    <!-- <p class="w3-opacity"><b>Today</b></p> -->



        <h2><center> Lépj be a fiókodba</h2></center>
        <form action="loginphp.php" method="post" enctype="multipart/form-data">
            <div class="midcard">

                <center><input type="text" name="felhnev" maxlength="16" placeholder="Felhasználónév" autofocus tabindex="1"></center>
                <center><input type="password" name="jelszo" placeholder="Jelszo" tabindex="2"></center>
                <center> <input type="submit" name="button" value="Belépés" tabindex="3"></center>
                <br></br>
                <center><h1><a href="register.php">Regisztráció</a><br></center></h1>
            </div>
        </form>






</div>

</body>
</html>
