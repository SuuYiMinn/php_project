<?php 

  include "../Model/model.php";


 $sql = $pdo-> prepare(

    "SELECT * FROM m_brand WHERE del_flg = 0"
 );

 $sql -> execute();

 $brand_result = $sql->fetchAll(PDO::FETCH_ASSOC);
?>