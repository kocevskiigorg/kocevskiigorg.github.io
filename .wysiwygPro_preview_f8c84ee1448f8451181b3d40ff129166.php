<?php
if ($_GET['randomId'] != "6tdgvhTENxJPcZuAoX5JL52646c3k6Yicx4ctGW3ObOaVBSe92UYwWzSEE3SH6ug") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>