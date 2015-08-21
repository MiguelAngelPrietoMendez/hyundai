<?php
 

 
$enlace = "../src/TERMINOS Y CONDICIONES EON TECH AGOSTO.pdf"; 
header ("Content-Disposition: attachment; filename='TERMINOS Y CONDICIONES EON TECH AGOSTO.pdf'"); 
header ("Content-Type: application/octet-stream"); 
header ("Content-Length: ".filesize($enlace)); 
readfile($enlace); 
exit();
 
?>