<?php
session_start();
// print_r($_POST);

if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
}
if (!isset($_POST["brandAdd"])) {
    header("Location: ../View/errors/error.php");
}
$brandName = $_POST["brandName"];
// $subcatname = $_POST["subcatname"];
$pimg1 = $_FILES["bphoto"]["name"];
$pimg1tmp = $_FILES["bphoto"]["tmp_name"];
// print_r($pimg1);
$uploads_dir = "../../Storage/products/";
include "../Model/model.php";
move_uploaded_file($pimg1tmp, "$uploads_dir/$pimg1");
// move_uploaded_file($pimg1tmp, "../../Storage/products/" . $pimg1)

$sql = $pdo->prepare(
    "SELECT * FROM m_brand WHERE brand_name = :brandName"

);
$sql->bindValue(":brandName",$brandName);
$sql->execute();
 
$sameBrand = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($sameBrand) == 0 ){
    
    $sql = $pdo->prepare(
        " INSERT INTO m_brand
    (
        brand_name,
        brand_photo
       
    )
    VALUES
    (
        :brandName,
        :brandPhoto
       
    )
    "

    );
    $sql->bindValue(":brandName", $brandName);
    $sql->bindValue(":brandPhoto", "/Storage/products/" . $pimg1);
    

    $sql->execute();
    // $_SESSION["brandName"] s= $brandName;
    // $sql = $pdo->prepare(
    //     "SELECT * FROM m_category WHERE =:email"
    // );
    // $sql->bindValue(":email",$email);
    // $sql->execute();

    // $resultEmail = $sql->fetchAll(PDO::FETCH_ASSOC);

  
    header("Location: ../View/Products/addProduct.php");
    }else{
        header("Location: ../View/Products/sameBrandAlert.php");
    }

