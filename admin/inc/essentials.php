<?php

    // Frontend Purpose Data

    define("SITE_URL", "http://127.0.0.1/Hotel Reservation Website/");
    define("ABOUT_IMG_PATH", SITE_URL."Images/About/");
    define("CAROUSEL_IMG_PATH", SITE_URL."Images/Carousel/");

    // Backend Upload Process needs this Data

    define("UPLOAD_IMAGE_PATH", $_SERVER["DOCUMENT_ROOT"]."/Hotel Reservation Website/Images/");
    define("ABOUT_FOLDER", "About/");
    define("CAROUSEL_FOLDER", "Carousel/");

    function adminLogin()
     {
        session_start();
        // If the user tries to access a protected page without logging in, they get sent back to the login page immediately.
        if(!(isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"] == true)) {
            echo "<script>window.location.href='index.php';</script>";
            exit;
        }
    }

    function redirect($url) {
        echo "<script>window.location.href='$url';</script>";
        exit;
    }

    function alert($type, $msg) {
        $bs_class = ($type == "success") ? "alert-success" : "alert-danger";  // If $type is "success", it uses Bootstrap’s alert-success class (green alert). Otherwise, it uses alert-danger (red alert) for errors.

        echo <<<ALERT
            <div class="alert alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">$msg</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ALERT;
        }

    function uploadImage($image, $folder) {
        $valid_mime = ["image/jpeg", "image/png", "image/webp"];
        $img_mime = $image["type"];

        if(!in_array($img_mime, $valid_mime)) {
            return "inv_img";  // Invalid Image Mime or Format
        }
        else if ($image["size"]/(1024*1024)>2) {
            return "inv_size";  // Invalid Size Greater than 2MB
        }
        else {
            $ext = pathinfo($image["name"], PATHINFO_EXTENSION);
            $rname = "IMG_".random_int(11111,99999).".$ext";
            $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
            if(move_uploaded_file($image["tmp_name"], $img_path)) {
                return $rname;
            }
            else {
                return "upd_failed";
            }
        }
    }

    function deleteImage($image, $folder)
    {
        if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)) {
            return true;
        }
        else {
            return false;
        }
    }

?>