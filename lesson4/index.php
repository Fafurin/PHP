<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>4-th homework</title>
</head>
<body>

<?php
  define(IMG, "img/");
  $images = scandir(IMG); 
  foreach($images as $image){
    if(is_file(IMG . $image)){
?>
    <a href="<?php echo (IMG . $image);?>" target="_blank">
        <img src="<?php echo (IMG . $image);?>" alt="" width = 200px>
    </a>
<?php
  }}
?>

<form name="upload" action="index.php" method="POST" ENCTYPE="multipart/form-data"> 
<span>Выберите файл для загрузки:</span> 
<input type="file" name="userfile" accept="image/*">
<input type="submit" name="upload" value="Загрузить">

<?php
  $apendimg = date('HisYmd').'.jpg'; 
  $uploadfile = IMG . "$apendimg"; 
  
  if(($_FILES['userfile']['type'] == 'image/gif' || 
      $_FILES['userfile']['type'] == 'image/jpeg' || 
      $_FILES['userfile']['type'] == 'image/png') && 
      ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=1024000)) { 
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
    echo "Файл загружен";
  } else { 
  echo "Размер файла не должен превышать 1Мб";
  } 
?> 
</form>
<script>
  
</script>
</body>
</html>