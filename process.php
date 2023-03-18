<?php include 'connect.php'; ?>

<?php

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $psw_re = $_POST['psw_re'];

    mysqli_query($connect, "INSERT INTO member (first_name, last_name, email, psw, psw_re)
                            VALUES ('$first_name', '$last_name', '$email', '$psw', '$psw_re')");
    

    if (mysqli_affected_rows($connect) > 0) {
        echo '<p>Register</p>';
        echo '<a href = "index.html">Back to Homepage</a>';
    }else {
        echo 'Member not added';
        echo mysqli_error($connect);
    }
?>