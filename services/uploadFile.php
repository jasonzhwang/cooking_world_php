<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);     // get the suffix of the file
$result = '';   // for returning the result message of upload
$status = 0;    // return 0(fail) or 1(success)
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 40960000) // the size of the file should be smaller than 4MB
    && in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
        $result = $_FILES["file"]["error"];
    }
    else
    {
//        echo "Filename: " . $_FILES["file"]["name"] . "<br>";
//        echo "FileType: " . $_FILES["file"]["type"] . "<br>";
//        echo "FileSize: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//        echo "TmpName: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("../images/" . $_FILES["file"]["name"]))
        {
            $result = $_FILES["file"]["name"] . " exists. ";
        }
        else
        {
            // make the file name as unique as possible
            $file_name = uniqid() .".". $extension;
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].
                "/cooking_world/resource/images/content/" . $file_name)){
                $result = "../resource/images/content/".$file_name;
                $status = 1;
            }else{
                $result = "Fail to upload";
            }
        }
    }
}
else
{
    $result = "Invalid file";
}
echo json_encode(array("result"=>$result,"status"=>$status));
/**
 * Created by PhpStorm.
 * User: Edison
 * Date: 2017/5/15
 * Time: 00:40
 */
?>