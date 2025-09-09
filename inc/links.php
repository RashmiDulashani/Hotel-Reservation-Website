<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<!-- Link Custom CSS File -->
<link rel="stylesheet" href="CSS/common.css?v=<?= time() ?>">


<?php

    session_start();
    
    require("admin/inc/db_config.php");
    require("admin/inc/essentials.php");

    $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
    $setting_q = "SELECT * FROM `setting` WHERE `sr_no`=?";
    $values = [1];
    $contact_r = mysqli_fetch_assoc(select($contact_q, $values, "i"));
    $setting_r = mysqli_fetch_assoc(select($setting_q, $values, "i"));
?>

