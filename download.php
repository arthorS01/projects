<?php
 if(!empty($_GET['file'])){
                
     $filename=basename($_GET['file']);
                $filepath="uploads/".$filename;
                if(!empty($filename) && file_exists($filepath)){
                    
                    //define headers
                    header("Cache-Control: public");
                    header("Content-Description: File Transfer");
                    header("Content-Disposition: attachecment; filename=$filename");
                    header("Content-Type: applicatin/zip");
                    header("Conternt-Transfer-Encoding: binary");
                    
                    readfile($filepath);
                    exit;
                    
                }
     }


?>