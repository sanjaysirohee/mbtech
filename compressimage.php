<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
if(isset($_POST['upload'])){
        extract($_POST);
$error=array();
$extension=array("jpeg","jpg","png","gif");
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
    $file_name=$_FILES["files"]["name"][$key];
    $file_tmp=$_FILES["files"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

    if(in_array($ext,$extension)) {
        if(!file_exists("pro/".$file_name)) {
      $path  = "pro/".$file_name   ;  
 compressImage($file_tmp,$path ,10); 
            
            //move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"productimage/".$txtGalleryName."/".$file_name);
        }
    }
    else {
        array_push($error,"$file_name, ");
    }
}
 
  }
  
  // Compress image
  function compressImage($source, $destination, $quality) {  
    $info = getimagesize($source);
    if ($info['mime'] == 'image/jpeg') 
      $image = imagecreatefromjpeg($source);  
    elseif ($info['mime'] == 'image/gif') 
      $image = imagecreatefromgif($source);  
    elseif ($info['mime'] == 'image/png') 
      $image = imagecreatefrompng($source);  
    imagejpeg($image, $destination, $quality);    
  }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<body>
 <form method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Add Cover Image * <br><span style="color:red"> Size less than (736 px X  1081px)</span></label>
                                        <input type="file" name="files[]" class="form-control" multiple required>
                                    </div>
                                </div>
                            <input type="submit" value="upload" name="upload" style="padding: 9px; margin-bottom: 17px; float: right;">
						    </form>

</body>

</html>