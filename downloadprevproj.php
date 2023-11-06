<?php
if (isset($_GET['proj']))
{
    include_once "prevproj.php";
    $project= new prevproj();
    $project-> setprojno($_GET["proj"]);
    $log= $project-> checkbyprojno();
    if($row=mysqli_fetch_assoc($log))
    {
        $file= 'files/previous projects/'.$row['filename'];
        if (file_exists($file))
        {
            header ('Content-Description: file transfer');
            header ('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header ('Expires: 0');
            header ('Cache-Control: must-revalidate');
            header ('Pragma: public');
            header ('Content-Length: '.filesize($file));
            readfile($file);
            exit;
        }
    }
    else
        header('location: pagenotfound.php');
}
?>