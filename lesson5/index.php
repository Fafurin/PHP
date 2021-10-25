<?php
  require_once 'db.php';
  $result = mysqli_query($link, 'SELECT * FROM images WHERE 1 order by viewed DESC');
  while($row = mysqli_fetch_assoc($result)){
    echo '<a href="/showimages.php?id=' . $row['id'] . '">';
    echo '<img width="200" height="200" src="' . $row['path'] . '">';
    echo '</a>';
  }
  mysqli_close($link);