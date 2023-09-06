<?php 
    include './db.php';
    $sql = "SELECT * FROM room WHERE check_in_status = '1'";
    $query = $con->query($sql);

    echo "$query->num_rows";

?>