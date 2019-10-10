<?php


require("configure.php");
$ProvinceID = ($_REQUEST["ProvinceID"] <> "") ? trim($_REQUEST["ProvinceID"]) : "";
if ($ProvinceID <> "") {
    $sql = "SELECT * FROM Museum WHERE ProvinceID = :sid ORDER BY Address";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":sid", trim($ProvinceID));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
     if (count($results) > 0) {
        ?>
        <label><b>Museum: 
         
                <?php foreach ($results as $rs) { 

     echo $rs["Address"];
                }?>




        </b></label>
        <?php
    }
}
?>