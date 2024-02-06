<!-- db using LAMP server -->

<?php
$db = new PDO('mysql:host=172.31.22.43;dbname=MyLan200567763', 'MyLan200567763', 'D4DH4hX6-O');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>