<?php
    include_once 'config.php';

    // connect to database
    $connection = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
    if (!$connection) {
        die("Can't connect to database");
    }

    // set charset for database
    mysqli_set_charset($connection, "utf8");
?>
