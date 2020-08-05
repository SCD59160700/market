<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<a href="testadm.php?act=edit" ></a>
    <?php
    $act = $_GET['act'];
    if ($act == 'edit') {
        include('tadmEdit.php');
    } else {
        include('table2.php');
    }
    ?>

</body>

</html>