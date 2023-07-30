<?php
class Saltesto {

    protected $testo=array();

    function __construct() {
        
    }

    function addBlock($b) {
        $this->testo[]=$b;
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

        foreach ($this->testo as $k=>$b) {

            echo '<div class="salTextBlock" >';

                foreach ($b as $x=>$t) {
                    echo '<div class="salTextBody" style="';
                        if ($t[1]!='') {
                            if ($t[1]=='2') echo 'padding-left:30px;';
                        }
                    echo '">';

                        if ($t[0]!='') {
                            echo '<img class="salTextCapo" src="'.SITE_URL.'/img/';
                                if ($t[0]=='ris') echo 'r.png';
                                elseif($t[0]=='ebd' || $t[0]=='sac') echo 'v.png';
                            echo '" />';
                        }

                        echo $t[2];
                    echo '</div>';
                }

            echo '</div>';
        }

    }

}
?>