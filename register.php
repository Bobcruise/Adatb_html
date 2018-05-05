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




        <h2><center> Regisztráció</h2></center>
        <form action="registerphp.php" method="post" enctype="multipart/form-data">
            <div class="register">

                <center><input type="text" name="felhnev" maxlength="16" placeholder="Felhasználónév" autofocus tabindex="1"></center>
                <center><input type="password" name="jelszo" placeholder="Jelszó" tabindex="2"></center>
                <center><input type="password" name="jelszo2" maxlength="16" placeholder="Jelszó újra" autofocus tabindex="3"></center>
                <center><input type="text" name="email" placeholder="E-mail cím" tabindex="4"></center>
                <center><input type="text" name="vezeteknev" placeholder="Vezetéknév" tabindex="5"></center>
                <center><input type="text" name="keresztnev" placeholder="Keresztnév" tabindex="6"></center>
                <center><input type="number" name="iranyitoszam" placeholder="Irányítószám" tabindex="7"></center>
                <center><input type="text" name="telepules" placeholder="Település" tabindex="8"></center>
                <center><input type="text" name="utca" placeholder="Utca" tabindex="9"></center>
                <center><input type="text" name="hazszam" placeholder="Házszám" tabindex="10"></center>
                <center><input type="text" name="telefonszam" placeholder="Telefonszám" tabindex="11"></center>
                <br></br>
                <center> <input type="submit" name="button" value="Regisztráció" tabindex="12"></center>



            </div>
        </form>






</div>

</body>
</html>
