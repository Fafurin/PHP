<form enctype="multipart/form-data" method="post" action="calcs.php">
  <input type="number" name="operand1">
  <input type="number" name="operand2">
  <select name="operation">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input type="submit" value="=">
</form>

<form enctype="multipart/form-data" method="post" action="calcs.php">
  <input type="number" name="operand1">
  <input type="number" name="operand2">
  <input type="submit" name="operation" value="+">
  <input type="submit" name="operation" value="-">
  <input type="submit" name="operation" value="*">
  <input type="submit" name="operation" value="/">
</form> 

<?php
  switch($_POST['operation']){
    case '+':
      echo ($_POST['operand1'] + $_POST['operand2']);
      break;
    case '-':
      echo ($_POST['operand1'] - $_POST['operand2']);
      break;
    case '*':
      echo ($_POST['operand1'] * $_POST['operand2']);
      break;        
    case '/':
      if ($_POST['operand2'] == 0) {
        echo("You can't divide by zero!");
        break;
      } else echo ($_POST['operand1'] / $_POST['operand2']);
        break;
  }