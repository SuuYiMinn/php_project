<?php

// print_r($_POST);

if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
}
if (!isset($_POST["updateProfileDone"])) {
    header("Location: ../View/errors/error.php");
}
$meshopname = $_POST["meshopname"];
$meemail = $_POST["meemail"];
$mephone = $_POST["mephone"];
$meregion = $_POST["meregion"];
$metownship = $_POST["metownship"];
$meaddress = $_POST["meaddress"];

// get merchant profile
$meprofile = $_FILES["meprofile"]["name"];

$meprofiletmp = $_FILES["meprofile"]["tmp_name"];


include "../Model/model.php";
// move_uploaded_file($meprofiletmp, "../../Storage/products/" . $meprofile);

if ( move_uploaded_file($meprofiletmp, "../../Storage/products/" . $meprofile)){


    $sql = $pdo->prepare(
    
        " UPDATE  m_merchants SET
        me_shop_name = :meshopname,
        me_email = :meemail,
        me_phone = :mephone,
        me_address = :meaddress,
       me_township = :metownship,
       me_region = :meregion,
       me_profile = :meprofile


       
    WHERE id = 1 
    "

    );
    // $sql->bindValue(":id", "1");
    $sql->bindValue(":meshopname", $meshopname);
    $sql->bindValue(":meprofile", "/Storage/products/" . $meprofile);
    $sql->bindValue(":mephone", $mephone);
    $sql->bindValue(":meemail", $meemail);
    $sql->bindValue(":meaddress", $meaddress);
    $sql->bindValue(":metownship", $metownship);
    $sql->bindValue(":meregion", $meregion);
    // $sql->bindValue(":createdate", date("Y-m-d"));

    $sql->execute();
    header("Location: ../View/Profile/profile.php");
} else {
   
    // header("Location: ../View/errors/error.php");
}
