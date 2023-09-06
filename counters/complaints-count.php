<?php 
    include './db.php';
    $sql = "SELECT * FROM complaint";
    $query = $con->query($sql);

    echo "$query->num_rows";

?>