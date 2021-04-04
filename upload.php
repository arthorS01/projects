<?php

include "connection.php";
include "functions.php";

$message=null;
$uploadOk=1;


if(isset($_POST['submit'])){
    
    $target_dir="uploads/";
    $target_file=$target_dir.basename($_FILES['fileToUpload']['name']);
    $file_name=basename($_FILES['fileToUpload']['name']);
    $fileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if(file_exists($target_file)){
        $message="sorry file already exisit";
        $uploadOk=0;
    }
    
    if($uploadOk==1){
       if( move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)){
        
        $query="INSERT INTO task(filePath,Extension,Status)  VALUES('$file_name','$fileType','not printed')";
        $successful=mysqli_query($conn,$query);
        if($successful){
           $message="The file ".$file_name." has been uploded";
        }
    }
    else{
        $message="sorry file could not be uploaded";    
    }
}
}

include "user.php";
?>