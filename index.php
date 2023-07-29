<?php
include ('baseline.php');
include_once ('classi/salmastro.php');

$param=array();

if (isset($_REQUEST['today'])) $param['today']=$_REQUEST['today'];

$sal=new Salmastro($param);
$sal->build();

?>
<!DOCTYPE html>
<html lang="it">

<html>

<head>
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
   <script type="text/javascript" src="core/calendario/calnav.js?v=<?php echo time(); ?>"></script>
   <script type="text/javascript" src="jquery-1.10.2.js"></script>
   <script type="text/javascript" src="code.js?v=<?php echo time(); ?>"></script>
   <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" >
   <link rel="stylesheet" href="core/calendario/calnav.css?v=<?php echo time(); ?>" >
</head>

<body>

    <div id="salmain" style="" >

        <?php
            $sal->draw();
        ?>

    </div>

</body>

</html>