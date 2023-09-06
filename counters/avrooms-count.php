<?php 
    include './db.php';
    $sql = "SELECT * FROM room WHERE status IS NULL AND deleteStatus = '0'";
    $query = $con->query($sql);

    echo "$query->num_rows";

?>