<h2>ja</h2>
<?php
session_start();

print_r($_SESSION);

 if ($_SESSION["login"] == "true"){
    echo "hoi";
} else {
        echo "nope";
    }
 ?>