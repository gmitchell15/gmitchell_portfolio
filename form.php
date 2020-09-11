<?php
    
    $name = $_POST['name'];
    $user = $_POST['username'];
    $email = $_POST['email'];
    $browser_choice = $_POST['users_browser'];//Gets the select but nothing is returned

    echo "<p> $name </p>";
    echo "<p> $user</p>";
    echo "<p> $email </p>";
    echo "<p> $browser_choice </p>";

?>
