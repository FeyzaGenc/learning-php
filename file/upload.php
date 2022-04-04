<?php
$target_dir="uploads/";//dosyanın yerleştirileceği dizin
$target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);//yüklenecek dosyanın yolu
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file, PATHINFO_EXTENSION));//dosyanın dosya uzantısını tutar
//resim dosyasının geçerli bir resim olup olmadığını kontrol eder
if(isset($_POST["submit"]))
{
    $check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check!==false)
    {
        echo "file is an image -".$check["mime"].".";
        $uploadOk=1;
    }
    else
    {
        echo "file is not an image.";
        $uploadOk=0;
    }
}
//dosyanın olup olmadığını kontrol etme
if(file_exists($target_file))
{
    echo "sorry file already exists.";
    $uploadOk=0;
}
//dosya boyutunu sınırlama
if($_FILES["fileToUpload"]["size"]>500000)
{
    echo "sorry your file is too large.";
    $uploadOk=0;
}
//dosyanın türünü sınırlama
if($imageFileType!="jpg"&&$imageFileType!="png"&&$imageFileType!="jpeg"&&$imageFileType!="gif")
{
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk=0;
}
//son olarak uploadOk 0 ayarlanırsa 
if ($uploadOk == 0)
{
    echo "Sorry, your file was not uploaded.";
} 
//son değeri 1 ise dosyayı yükler
else 
{
    //seçilen dosya yüklendiyse
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } 
    //dosya yüklenemedi
    else 
    {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  ?>
