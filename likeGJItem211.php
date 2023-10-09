<?php
if (
    isset($_POST['gameVersion']) &&
    isset($_POST['binaryVersion']) &&
    isset($_POST['gdw']) &&
    isset($_POST['accountID']) &&
    isset($_POST['gjp']) &&
    isset($_POST['uuid']) &&
    isset($_POST['udid']) &&
    isset($_POST['like']) &&
    isset($_POST['itemID']) &&
    isset($_POST['secret']) &&
    isset($_POST['type'])
) {
    include "incl/misc/likeGJItem.php";
} else {
    echo "-1";
}
?>
