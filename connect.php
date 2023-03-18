<?php

    $connect = mysqli_connect('localhost', 'root', '', 'addmember');
    if(mysqli_connect_error()) {
        echo 'Failed to connect';
    }

?>