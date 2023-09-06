<?php 
    include './db.php';
    $sql = "SELECT * FROM booking WHERE payment_status = '0'";
    $query = $con->query($sql);

    echo "$query->num_rows";

?>