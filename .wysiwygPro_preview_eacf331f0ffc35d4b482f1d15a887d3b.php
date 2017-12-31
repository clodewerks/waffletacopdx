<?php
if ($_GET['randomId'] != "9_d9wwKF95GpVRNCaQUNZEAAZ1rEphOyydQjAXVzj25FD7dCzKjWDfiljjTQyXMC") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
