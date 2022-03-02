<?php
function deleteBericht($id, $filename) 
{

    $sql = "DELETE FROM berichten WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        unlink($filename);
        header("Location: show_berichten_admin.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
