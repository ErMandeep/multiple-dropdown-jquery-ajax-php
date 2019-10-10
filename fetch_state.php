<?php



require("configure.php");
$state_id = ($_REQUEST["ProvinceID"] <> "") ? trim($_REQUEST["ProvinceID"]) : "";
if ($state_id <> "") {
    $sql = "SELECT * FROM City WHERE ProvinceID = :cid ORDER BY City_Name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":cid", trim($state_id));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
    if (count($results) > 0) {
        ?>
        <label>City: 
            <select name="state" onchange="showCity(this);">
                <option value="">Please Select</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["CityID"]; ?>"><?php echo $rs["City_Name"]; ?></option>
                <?php } ?>
            </select>
        </label>
        <?php
    }
}
?>