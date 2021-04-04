<?php

function printAllFiles(){
    include "connection.php";
    $query="SELECT * FROM task";
    $result=mysqli_query($conn,$query);
    
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            
            $id=$row['ID'];
            $ext=$row['Extension'];
            $filename=$row['filePath'];
            $status=$row['Status'];
             echo'
        <div class="file">
            <div class="status">'.$status.' </div>
            <div  class="file_type '.$row['Extension'].'"></div>
            <p class="file_name">'.$filename.'</p>
        </div>
        ';
            
         
            echo"<br>";
        }
}else{
        echo'<div id="empty_message">No file has been uploaded yet</div>';
    }
mysqli_close($conn);
}
function showNonPrinted(){

    include "connection.php";
    $query="SELECT * FROM task WHERE Status='Not printed'";
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            
            $id=$row['ID'];
            $ext=$row['Extension'];
            $filename=$row['filePath'];
            $status=$row['Status'];
             echo'
        <div class="file">
            <div class="status">'.$status.' </div>
            <div  class="file_type '.$row['Extension'].'"></div>
            <p class="file_name">'.$filename.'</p>
        </div>
        ';
        
         echo'
        <form method="post" action="processForm.php" name="myForm">
            <div class="buttons"><span>Mark as</span>
                <input type="hidden" value="'.$row['ID'].'"  name="stat">
                <input type="submit"name="updateNonPrinted" value="Printed">
            
            </form>

        </div>
        ';
            
            echo"<br>";
        }
}
    else{
        echo'<div id="empty_message">No file is uploaded yet</div>';
    }
    
    mysqli_close($conn);
}

function showPrinted(){
    
    include"connection.php";
    
    $query="SELECT * FROM task WHERE Status='Printed'";
    
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            
            $id=$row['ID'];
            $ext=$row['Extension'];
            $filename=$row['filePath'];
            $status=$row['Status'];
             echo'
        <div class="file">
            <div class="status">'.$status.' </div>
            <div class="file_type '.$row['Extension'].'"></div>
            <p class="file_name">'.$filename.'</p>
        </div>';
            
             echo'
        <form method="post" action="processForm.php" name="myForm">
            <div class="buttons"><span>Mark as</span>
                <input type="hidden" value="'.$row['ID'].'"  name="stat">
                <input type="submit"name="updatePrinted" value="Done">
            
            </form>

        </div>
        ';
            echo"<br>";
    
}
        
    }else{
            echo'<div id="empty_message">No file is printed yet</div>';
        }
    
    mysqli_close($conn);
}

function showDone(){
    
     include"connection.php";
    
    $query="SELECT * FROM task WHERE Status='Done'";
    
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            
            $id=$row['ID'];
            $ext=$row['Extension'];
            $filename=$row['filePath'];
            $status=$row['Status'];
             echo'
        <div class="file">
            <div class="status">'.$status.' </div>
            <div class="file_type '.$row['Extension'].'"></div>
            <p class="file_name">'.$filename.'</p>
        </div>';
            
               echo'<a href="download.php?file='.$filename.'"><button class="buttons">Download</button></a>';
            
           
   
            echo"<br>";
}
    }else{
            echo'<div id="empty_message">No file is done yet</div>';
        }
}

?>