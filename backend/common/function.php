<?php


function create_folder($folder_name)
{
    // Check if the folder already exists.
    if (!file_exists($folder_name)) {
        // Create the folder.
        mkdir($folder_name, 0777);
    }
}




function uploadFile($upload, $name)
{
    $fileName = " ";
    $SongName = $name;

    if (isset($upload['error'])) {
        if ($upload['error'] == 0) {
            $folderName = "img/";

            $path = $upload['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $fileName = $SongName . rand(10000, 10000000) . "_" . rand(100000, 100000000) . "_" . time();
            $fileName = strtolower(str_replace(" ", "_", $fileName));
            $fileName .= "." . $ext;

            $destination = $folderName . "/" . $fileName;
            $source = $upload['tmp_name'];
            if (move_uploaded_file($source, $destination)) {
                return $fileName;
            } else {
                return $fileName;
            }
        }
    }
    return $fileName;
}

//function to upload programs images 

function uploadProgramImages($upload, $name)
{
    $fileName = " ";
    $SongName = $name;

    if (isset($upload['error'])) {
        if ($upload['error'] == 0) {
            $folderName = "./img/programs/";

            $path = $upload['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $fileName = $SongName . rand(10000, 10000000) . "_" . rand(100000, 100000000) . "_" . time();
            $fileName = strtolower(str_replace(" ", "_", $fileName));
            $fileName .= "." . $ext;

            $destination = $folderName . "/" . $fileName;
            $source = $upload['tmp_name'];
            if (move_uploaded_file($source, $destination)) {
                return $fileName;
            } else {
                return $fileName;
            }
        }
    }
    return $fileName;
}

//function to upload portfolio
function uploadPortfolioImages($upload, $name)
{
    $fileName = " ";
    $SongName = $name;

    if (isset($upload['error'])) {
        if ($upload['error'] == 0) {
            $folderName = "img/portfolio/";

            $path = $upload['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $fileName = $SongName . rand(10000, 10000000) . "_" . rand(100000, 100000000) . "_" . time();
            $fileName = strtolower(str_replace(" ", "_", $fileName));
            $fileName .= "." . $ext;

            $destination = $folderName . "/" . $fileName;
            $source = $upload['tmp_name'];
            if (move_uploaded_file($source, $destination)) {
                return $fileName;
            } else {
                return $fileName;
            }
        }
    }
    return $fileName;
}


//function to upload logo
function uploadLogo($upload, $name)
{
    $fileName = " ";
    $SongName = $name;

    if (isset($upload['error'])) {
        if ($upload['error'] == 0) {
            $folderName = "img/logo/";

            $path = $upload['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $fileName = $SongName . rand(10000, 10000000) . "_" . rand(100000, 100000000) . "_" . time();
            $fileName = strtolower(str_replace(" ", "_", $fileName));
            $fileName .= "." . $ext;

            $destination = $folderName . "/" . $fileName;
            $source = $upload['tmp_name'];
            if (move_uploaded_file($source, $destination)) {
                return $fileName;
            } else {
                return $fileName;
            }
        }
    }
    return $fileName;
}
//function to upload donation
function uploadDonationImages($upload, $name)
{
    $fileName = " ";
    $SongName = $name;

    if (isset($upload['error'])) {
        if ($upload['error'] == 0) {
            $folderName = "img/donation/";

            $path = $upload['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $fileName = $SongName . rand(10000, 10000000) . "_" . rand(100000, 100000000) . "_" . time();
            $fileName = strtolower(str_replace(" ", "_", $fileName));
            $fileName .= "." . $ext;

            $destination = $folderName . $fileName;
            $source = $upload['tmp_name'];
            if (move_uploaded_file($source, $destination)) {
                return $fileName;
            } else {
                return $fileName;
            }
        }
    }
    return $fileName;
}
//function to upload partners
function uploadPartnersImages($upload, $name)
{
    $fileName = " ";
    $SongName = $name;

    if (isset($upload['error'])) {
        if ($upload['error'] == 0) {
            $folderName = "img/partners/";

            $path = $upload['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $fileName = $SongName . rand(10000, 10000000) . "_" . rand(100000, 100000000) . "_" . time();
            $fileName = strtolower(str_replace(" ", "_", $fileName));
            $fileName .= "." . $ext;

            $destination = $folderName . "/" . $fileName;
            $source = $upload['tmp_name'];
            if (move_uploaded_file($source, $destination)) {
                return $fileName;
            } else {
                return $fileName;
            }
        }
    }
    return $fileName;
}
