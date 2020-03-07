<?php
    /**
     * using mysqli_connect for database connection
     */
    $databaseHost = 'localhost';
    $databaseName = 'vietgram';
    $databaseUsername = 'root';
    $databasePassword = '';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    // if (mysqli_connect_errno()){
    //     echo "Error!: " . mysqli_connect_error();
    // }

?>