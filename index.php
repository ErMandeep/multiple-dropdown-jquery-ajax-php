<?php


require("configure.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="http://www.thesoftwareguy.in/favicon.ico" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Multiple dropdown with jquery ajax and php">
        <meta name="keywords" content="Multiple dropdown with jquery ajax and php">
        <meta name="author" content="Shahrukh Khan">
        <title>Multiple dropdown with jquery ajax and php - thesoftwareguy</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <style>
            select {
                padding:3px;
                border-radius:5px;
                background: #f8f8f8;
                color:#000;
                border:1px solid #EB028F;
                outline:none;
                display: inline-block;
                width:250px;
                cursor:pointer;
                text-align:left;
                font:inherit;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <div id="body">
                <div class="height20"></div>
                <article>
                    <table style="margin:0 auto;width:50%" >
                        <tr>
                            <td align="center" height="50">
                                <?php
                                $sql = "SELECT * FROM Province ORDER BY Province_Name";
                                try {
                                    $stmt = $DB->prepare($sql);
                                    $stmt->execute();
                                    $results = $stmt->fetchAll();
                                } catch (Exception $ex) {
                                    echo($ex->getMessage());
                                }
                                ?>
                                <label>Privince:
                                    <select name="country" onChange="showState(this);">
                                        <option value="">Please Select</option>
                                        <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["ProvinceID"]; ?>"><?php echo $rs["Province_Name"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" height="50"><div id="output1"></div> </td>
                        </tr>
                        <tr>
                            <td align="center" height="50"><div id="output2"></div> </td>
                        </tr>
                    </table> 
                


                </article>
                <div class="height10"></div>
              
            </div>
        </div>
        <script src="jquery-1.9.0.min.js"></script>
        <script>
                    function showState(sel) {
                        var ProvinceID = sel.options[sel.selectedIndex].value;
console.log(sel.options[sel.selectedIndex].value);
                        $("#output1").html("");
                        $("#output2").html("");
                        if (ProvinceID.length > 0) {

                            $.ajax({
                                type: "POST",
                                url: "fetch_state.php",
                                data: "ProvinceID=" + ProvinceID,
                                cache: false,
                                beforeSend: function() {
                                    $('#output1').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#output1").html(html);
                                    console.log(html);
                                }
                            });
                        }
                    }

                    function showCity(sel) {
                        var ProvinceID = sel.options[sel.selectedIndex].value;
                        console.log(sel+"ProvinceID");
                        if (ProvinceID.length > 0) {
                            $.ajax({
                                type: "POST",
                                url: "fetch_city.php",
                                data: "ProvinceID=" + ProvinceID,
                                cache: false,
                                beforeSend: function() {
                                    $('#output2').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#output2").html(html);
                                    console.log(html);
                                }
                            });
                        } else {
                            $("#output2").html("");
                            console.log("empty");
                        }
                    }



                  
        </script>
    </body>
</html>
