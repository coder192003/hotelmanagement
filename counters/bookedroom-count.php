<?php 
    include './db.php';
    $sql = "SELECT * FROM room WHERE status = '1'";
    $query = $con->query($sql);

    echo "$query->num_rows";

?>