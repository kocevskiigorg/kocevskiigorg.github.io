<?php
if ($_GET['randomId'] != "vzDeQWsPG_6ZCWorHgwXFwRjJH4Y6d5tEEFoYTQ25ovwxHLhaWZd6xse6pY8YUuh") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>