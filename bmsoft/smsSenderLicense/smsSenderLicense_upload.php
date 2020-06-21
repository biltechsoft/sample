<?php
    $filepath = $_FILES["file"]["tmp_name"];
    move_uploaded_file($filepath,"smsSenderLicense.txt");
?>