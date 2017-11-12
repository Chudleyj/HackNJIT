<?php
 $path = 'data.txt';
 if (isset($_POST['phonenumber'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['phonenumber'];
    fwrite($fh,$string); // Write information to the file
    fwrite($fh,"\n");
    fclose($fh); // Close the file
 }
?>
