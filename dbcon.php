<?php

$server= 'localhost';
$user= 'root';
$password= '';
$db= 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

if($con){
    ?>
    <script>
        alert("connection Successful");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("No Connection");
    </script>
    <?php
}


?>