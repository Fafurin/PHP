<?php
require_once 'db.php';

$id = $_GET['id'] ?? null;
if($id && is_numeric($id)){
  mysqli_query($link, 'UPDATE images SET viewed=viewed+1 WHERE id=' . $id);
  $result = mysqli_query($link, 'SELECT * FROM images WHERE id=' . $id);
  $image = mysqli_fetch_assoc($result);
  if($image){
    echo '<img src="' . $image['path'] . '">';
    echo '<p> Number of views: ' . $image['viewed'] . '</p>';
  }
  else {
    die("can't find image with id =" . $id);
  }
}

