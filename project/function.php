<?php

function getPictures()
{
    $readPics = file_get_contents( __DIR__ . "/picture.json" );
    $allPics = json_decode( $readPics, true );
    return $allPics;
}

function putJson($data)
{
    $file = json_encode($data, JSON_PRETTY_PRINT);
            file_put_contents('picture.json', $file);
    // OR
    //file_put_contents(__DIR__ . '/users.json', json_encode($users, JSON_PRETTY_PRINT));
}

/* function validImageFile()
{
   if (isset($_FILES['picture'])) {
     $fileInfo = getimagesize($_FILES['picture']['tmp_name']);
     if ($fileInfo === false) {
       echo 'Invalid image file';
     } else {
       echo 'Valid image file';
     }
    }
} */

function createPicture($data) {
    if ( !empty($_FILES['picture']['name']) ) {
            if (!is_dir(__DIR__ . "/images")) {
                mkdir(__DIR__ . "/images");
            }
            $fileName = $_FILES['picture']['name'];
            $dotPosition = strpos($fileName, '.');
            $name = substr($fileName, 0, $dotPosition);
            $extension = substr($fileName, $dotPosition + 1);
            $newPicsFile = "$name.$extension";
            move_uploaded_file($_FILES['picture']['tmp_name'], __DIR__ . "/images/$newPicsFile");
            $json = getPictures();
            $pictureData = array(
                'id'=> count($json)+1,
                'picture'=> $newPicsFile
            );
            $json[] =$pictureData;
            /* OR
            array_push($json, $pictureData); */
            putJson($json);
    }
}

function deleteUser($id)
{
    $pictures = getPictures();

    foreach ($pictures as $i => $picture) {
        if ($picture['id'] == $id) {
            array_splice($pictures, $i, 1);
        }
    }

    putJson($pictures);
}

/* function getupload($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
} */
?>
