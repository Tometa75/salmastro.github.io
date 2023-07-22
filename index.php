<?php
ini_set('display_errors', 1);
//error_reporting(E_ERROR | E_PARSE);
error_reporting(-1);

include_once ('classi/main_func.php');
include_once ('classi/salmastro.php');

$param=array();

$sal=new Salmastro($param);

?>
<!DOCTYPE html>
<html lang="it">

<html>

<head>
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
   <script type="text/javascript" src="core/calendario/calnav.js?v=<?php echo time(); ?>"></script>
   <link rel="stylesheet" href="core/calendario/calnav.css?v=<?php echo time(); ?>" >
</head>

<body>

    <?php
        $sal->draw();
    ?>

</body>

</html>