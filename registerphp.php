<?php
/*
include 'connect.php';

function felhasznalo_felvitel($felhasznalonev, $nev, $jelszo, $email)
{

    $conn = getbd();
    $success = false;
    $stmt = mysqli_prepare($conn, "INSERT INTO USER(userfelhasznalonev,userteljesnev,userjelszo,useremail) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $felhasznalonev, $nev, $jelszo, $email);
    $sikeres = mysqli_stmt_execute($stmt);
    mysqli_close($conn);
    return $sikeres;

}
//Duplikált felhasználó ellenőrzés
function felhasznalo_duplikalt($regfelhnev){
    $conn = getbd();
    $sql = mysqli_query($conn,"SELECT * FROM USER WHERE userfelhasznalonev='$regfelhnev'");

    if (mysqli_num_rows($sql) == 0) {
        return true;
    }
    return false;
    mysqli_close($conn);
}

//Duplikált email ellenőrzése
function email_duplikalt($regemail){
    $conn = getbd();
    $sql = mysqli_query($conn,"SELECT * FROM USER WHERE useremail='$regemail'");

    if (mysqli_num_rows($sql) == 0) {
        return true;
    }
    return false;

}
*/


$r_felhasznalonev = $_POST['felhnev'];
$r_jelszo = $_POST['jelszo'];
$r_jelszo2 = $_POST['jelszo2'];
$r_email = $_POST['email'];
$r_vezeteknev = $_POST['vezeteknev'];
$r_keresztnev = $_POST['keresztnev'];
$r_iranyitoszam = $_POST['iranyitoszam'];
$r_telepules = $_POST['telepules'];
$r_utca = $_POST['utca'];
$r_hazszam = $_POST['hazszam'];
$r_telefonszam = $_POST['telefonszam'];

if (isset($r_felhasznalonev) && isset($r_jelszo) &&
    isset($r_jelszo2) && isset($r_email) && isset($r_vezeteknev)
    && isset($r_keresztnev) && isset($r_iranyitoszam) && isset($r_telepules)
    && isset($r_utca) && isset($r_hazszam) && isset($r_telefonszam)) {

    //input kezelés

    if ($r_jelszo !== $r_jelszo2) {
        echo "A ket jelszonak egyeznie kell!";
    } elseif (strlen($r_jelszo) < 6) {
        echo "A jelszo nem lehet 6 karakternél rövidebb!";
    } elseif (strlen($r_jelszo) >= 20) {
        echo "A jelszo nem lehet hosszabb 20 karakternél!";
    } elseif(strlen($r_felhasznalonev)<6 || strlen($r_felhasznalonev)> 20 ){
        echo "A felhasználónévnek legalább 6 karakterből kell állnia, de maximum 20 karaktert tartalmazhat!";
    } elseif(!ctype_alnum($r_felhasznalonev)){
        echo "A felhasználónév nem tartalmazhat speciális karaktereket. Elfogadott Karakterek: A-Z 0-9";
    } elseif(strlen($r_email) == 0){
        echo "Az E-mail cím nem lehet üres!";
    } else if(!filter_var($r_email, FILTER_VALIDATE_EMAIL)){
        echo "Az E-mail cím formátuma helytelen!";
    } else if(strlen($r_vezeteknev) == 0 || strlen($r_vezeteknev) > 20){
        echo "A vezetéknév nem lehet üres és nem lehet hosszabb, mint 20 karakter";
    } else if(!ctype_alpha($r_vezeteknev)){
        echo "A vezetéknév csak betűket tartalmazhat, más speciális karaktert nem!";
    } else if(strlen($r_keresztnev) == 0 || strlen($r_vezeteknev) > 20){
        echo "A keresztnév nem lehet üres és nem lehet hosszabb, mint 20 karakter";
    } else if(!ctype_alpha($r_keresztnev)) {
        echo "A keresztnév csak betűket tartalmazhat, más speciális karaktert nem!";
    } else if(strlen($r_iranyitoszam)==0 || strlen($r_iranyitoszam)>4){
        echo "Az irányítószám 0-4 karakter közötti szám lehet!";
    } else if(strlen($r_telepules) == 0 || strlen($r_telepules) > 20){
        echo "A település nem lehet üres és nem lehet hosszabb, mint 20 karakter";
    } else if(strlen($r_utca)==0 || strlen($r_utca)>20){
        echo "Az utca neve nem lehet üres és nem lehet hosszabb, mint 20 karakter";
    } else if(strlen($r_hazszam) == 0 || strlen($r_hazszam) > 20){
        echo "A házszám nem lehet üres és nem lehet hosszabb, mint 10 karakter";
    }else if(strlen($r_telefonszam) == 0 || strlen($r_telefonszam) > 14) {
        echo "A házszám nem lehet üres és nem lehet hosszabb, mint 14 karakter";
    }

    else {

       /* $r_regjelszo = md5($r_regjelszo);

        felhasznalo_felvitel($r_regfelhasznalonev, $r_regnev, $r_regjelszo, $r_regemail);
        $success = true;
       */
        echo "Sikeres regisztráció \n";
        echo "Lépj vissza a bejelentkezéshez és jelentkezz be!";



    }


}



