<?php
//error_reporting(E_ERROR | E_PARSE);
error_reporting(-1);

include ('classi/salmastro.php');

$param=array();

$sal=new Salmastro($param);

?>

<html>

<head>
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
</head>

<body>

    <?php
        $sal->draw();
    ?>

</body>

</html>