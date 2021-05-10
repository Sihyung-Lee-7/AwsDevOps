<?php

$uploaddir = '/tmp/';

if (count($_FILES)) {
  $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

  echo '<pre>';
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) { echo "file is valid, and wa successfully uploaded.\n";
 } else {
     echo "Possible file upload attack!\n";
 }

 echo 'Here is some more debugging info:';
 print_r($_FILES);

 print "<\pre>";
}

?>
