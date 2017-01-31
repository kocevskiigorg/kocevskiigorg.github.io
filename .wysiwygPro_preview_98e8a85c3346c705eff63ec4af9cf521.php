<?php
if ($_GET['randomId'] != "n02_lfmby2IlkxC8pj2cuKKpTFN4rFOl02Vo79Rx7oUAAxkHTNiZByXuHtnoBr0M") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>