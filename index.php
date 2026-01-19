<?php

$profileImage = "xyz.png";
function validimage($profileImage){
    $imgArray = explode('.',$profileImage);
    //  print_r($imgArray);
    if(end($imgArray)== "png" || end($imgArray) =="jpg"){
        print_r("valid Image");
    }
    else{
        print_r("This is not supported types of image");
    }
}

validimage($profileImage);

?>