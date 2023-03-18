<?php

    $connect = mysqli_connect('localhost', 'root', '', 'addmember');
    if (mysqli_connect_error($connect)) {
        echo 'Failed to connect';
    }

?>