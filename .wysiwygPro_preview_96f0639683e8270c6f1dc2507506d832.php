<?php
if ($_GET['randomId'] != "wjFeDXAq_npJb510F14Abo8q0UDDCi4emw9h_Oa4MRbPJmhxx0jR3A1rUd2z92Vz") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>