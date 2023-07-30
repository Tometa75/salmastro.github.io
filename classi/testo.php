<?php
class Saltesto {

    protected $testo=array();

    function __construct() {
        
    }

    function addBlock($b) {
        $testo[]=$b;
    }

    /*
    - EBD=ebdomadario , RIS=risposta , SAC=sacerdote , NOTA=indicazione
    - 2=seconda riga (rientrata) , *=prima parte salmo , +=continuazione prima parte salmo
    $b=array(
            array('ebd','','O Dio, vieni a salvarmi.'),
            array('ris','','Signore, vieni preto in mio aiuto.')
        );
        $this->info['testo']->addBlock($b);

        $b=array(
            array('','','Gloria al Padre e al Figlio'),
            array('','2','e allo Spirito Santo.'),
            array('','','Come era nel principio, e ora e sempre,'),
            array('','2','nei secoli dei secoli. Amen.')
        );
    */

    function draw() {

    }

}
?>