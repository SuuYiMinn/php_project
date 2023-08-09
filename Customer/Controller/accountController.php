
<?php 




if($_GET != null){

    $code = $_GET["code"];

    include "../Model/model.php";
 
   $sql = $pdo->prepare(
     
     "SELECT * FROM m_customers WHERE code = :code"
 );
 
 $sql -> bindValue(":code",$code);
 $sql -> execute();
 $accountresult = $sql->fetchAll(PDO::FETCH_ASSOC);
}else{
    $code = null;
    $accountresult = null;
}
?>
 




