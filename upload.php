<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form class="" action="insert.php" method="post" enctype="multipart/form-data">
        <label for="">Choose Your PDF File</label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="Upload">
 
 
</form>
 
</body>
</html>
 
<?php 
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "pdf";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
    
        $pdf=$_FILES['pdf']['name'];
        $pdf_type=$_FILES['pdf']['type'];
        $pdf_size=$_FILES['pdf']['size'];
        $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
        $pdf_store="pdf/".$pdf;

        move_uploaded_file($pdf_tem_loc,$pdf_store);

        $sql="INSERT INTO pdf_file(pdf) values('$pdf')";
        $query=mysqli_query($conn,$sql);



 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
 
 
?>
