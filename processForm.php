<?php

if(isset($_POST["updateNonPrinted"])){
            include "connection.php";
            
            $status="Printed";
            $id=$_POST["stat"];
         
            $query="UPDATE task SET Status='".$status."' WHERE ID=".$id ;
            $success=mysqli_query($conn,$query);
            if(!$success){
                echo "failed";
            }
            
    include "not_printed.php";
        }

if(isset($_POST["updatePrinted"])){
            include "connection.php";
            
            $status="Done";
            $id=$_POST["stat"];
         
            $query="UPDATE task SET Status='".$status."' WHERE ID=".$id ;
            $success=mysqli_query($conn,$query);
            if(!$success){
                echo "failed";
            }
            
    include "printed.php";
        }

?>