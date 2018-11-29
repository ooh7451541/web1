<?php
  unlink('data/'.basename($_POST['id']));
  header('Location: /proj/history.php');
?>
