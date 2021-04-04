<!DOCTYPE html>
 
<html>
<head>
    <link href="styles/style2.css" rel="stylesheet" type="text/css">   
</head>

<body>
    <div>
        <a href="index.php">Home</a>
    </div>
    
 <section>
        <h2>Upload a file</h2>
     <form method="post" action="upload.php" enctype="multipart/form-data">
    
    <input type="file" name="fileToUpload">
         
    
    <br>
         
    <input type="submit" name="submit" value="upload">
    
     </form>

     
</section>     
   

</body>
    
</html>
