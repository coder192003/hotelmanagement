<?php 
    include './db.php';
    $sql = "SELECT * FROM booking";
    $query = $con->query($sql);

    echo "$query->num_rows";

?>