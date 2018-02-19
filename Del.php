<?php
    require("config.php");
    $result = mysqli_query($conn,"DELETE FROM logs");
    header("location: adminPanel.php");

?>