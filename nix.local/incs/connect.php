<?php

    $connect = mysqli_connect('localhost', 'root','', 'account');

    if (!$connect){
        die('error connect to data base');
    }
