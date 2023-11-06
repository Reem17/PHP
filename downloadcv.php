<?php
if (isset($_GET['email']))
{
    include_once "professor.php";
    $p= new professor();
    $p-> setemail($_GET["email"]);
    $log= $p-> checkbyemail();
    if($row=mysqli_fetch_assoc($log))
    {
        $file= 'files/cvs/'.$row['cvname'];
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