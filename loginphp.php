<?php
session_start();
/*
include 'connect.php';

function felhasznalo_belepes($felhasznalonev, $jelszo)
{

    $conn = getbd();
    $success = false;
    $result = mysqli_query($conn, "SELECT userfelhasznalonev, userjelszo FROM USER WHERE userfelhasznalonev = '$felhasznalonev'");
    if ($result->num_rows == 0) {
        echo "Nincs ilyen felhasználó!";
    } else {
        $user = $result->fetch_assoc();

        if ($jelszo == $user['userjelszo']) {
            echo "A belepes sikeres!";
            $success = true;
        } else {
            echo "Hibas jelszo!";
        }
    }

    mysqli_close($conn);
    return $success;
}
*/

$l_felhasznalonev = $_POST['felhnev'];
$l_jelszo = $_POST['jelszo'];
$success = false;

echo $l_felhasznalonev;
echo "\n";

if (isset($l_felhasznalonev) && isset($l_jelszo)) {

    //SQL INJECTION

    if (strlen($l_felhasznalonev) == 0) {
        //Session üzenetkezelés jön ide
        echo "A felhasználónév nem lehet üres!";
    } elseif (strlen($l_felhasznalonev) > 20) {
        echo "A felhasználónév nem lehet 20 karakternél hosszabb!";
    } elseif (strlen($l_jelszo) == 0) {
        echo "A jelszo nem lehet üres!";
    }elseif(strlen($l_jelszo)<6){
        echo "A jelszó legalább 6 karekter hosszú";
    } elseif (strlen($l_jelszo) > 20) {
        echo "A jelszó túl hosszú!";
    } else {

        echo "Sikeres belépés";
        /*$l_jelszo = md5($l_jelszo);

        $success = felhasznalo_belepes($l_felhasznalonev, $l_jelszo);
        if ($success == true) {
            $_SESSION['message'] = "Sikeres belépés!";
            $_SESSION['user']=$l_felhasznalonev;
            if(useradmin)
                header('Location: ../login.php');

        }
        */
    }

}
