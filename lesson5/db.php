<?php
  $link = mysqli_connect('localhost', 'root', '', 'DB');
  if(!$link){
    die('there is no connection to the database');
  }

