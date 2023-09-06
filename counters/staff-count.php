<?php 
    include './db.php';
    $sql = "SELECT * FROM staff";
    $query = $con->query($sql);

    echo "$query->num_rows";

?>