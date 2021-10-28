<?php
    $link = mysqli_connect('localhost', 'root', '', 'lesson6_db');
    if(!$link){
      die('there is no connection to the database');
    }
    
    if((isset($_POST['name'])) && (isset($_POST['text']))){
      $name = (string)htmlspecialchars(strip_tags($_POST['name']));
      $text = (string)htmlspecialchars(strip_tags($_POST['text']));

      $query = mysqli_query($link, "INSERT INTO `reviews` (`name`, `text`) VALUES ('$name', '$text')");
      $result = mysqli_query($link, 'SELECT * FROM `reviews`');
      
      if($query){
        echo '<p>Отзыв успешно добавлен.</p>';
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    } 
?>

<form enctype="multipart/form-data" method="post" action="index.php">
  <p>Name: <input type="text" name="name" value="" required></p>
  <p><textarea rows="10" cols="45" name="text" placeholder="Введите текст отзыва" required></textarea></p>
  <input type="submit" value="Send">
</form>

<?php
if($result){
  while($row = mysqli_fetch_assoc($result)){
    echo ('<p>' . $row['name'] . " _________ " . $row['date'] . '</p>');
    echo ('<p>' . $row['text'] . '</p>');
  }
}
mysqli_close($link);

