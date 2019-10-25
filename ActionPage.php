<?php 
$strJson = "{\"success\":false}";

try{
    $file = $_FILES["RemoteFile"];
    
    $fileName = $_POST["fileName"];
    
    if ($fileName == "" || $fileName == null) 
    $fileName = $file["name"];
    
    $filePath = dirname(__FILE__) . "\\UploadedImages\\" . $fileName;
    
    if(trim($file["type"]) == "application/octet-stream"){
        move_uploaded_file($file["tmp_name"] , $filePath);
    }
    
    else{
        $file_contents = base64_decode(str_replace(' ', '+', file_get_contents($file['tmp_name'])));
        
        file_put_contents($filePath, $file_contents);
        
    }
    $strJson = "{\"success\":true, \"fileName\":\"" . $fileName . "\"}";
}
catch(Exception $ex){
    $strJson = "{\"success\":false, \"error\": \"" . ex.Message.Replace("\\", "\\\\") . "\"}";
}
// Response.Clear();

header("Content-Type: application/json; charset=utf-8");

echo $strJson;

?>