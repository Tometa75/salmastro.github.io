<?php
class Saltesto {

    protected $head="";
    protected $testo=array();
    protected $label=array();

    protected $prop=array(false,false);

    function __construct() {
        
    }

    function addBlock($b) {
        $this->testo[]=$b;
    }

    function addHead($txt) {
        $this->head=$txt;
    }

    function addLabel($l,$a) {
        $this->label[$l]=$a;
    }

    function setProp($index,$se,$op,$txt) {
        $this->prop[$index]=array(
            "se"=>$se,
            "op"=>$op,
            "txt"=>$txt
        );
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

        echo '<div class="salTextBlock" style="font-size:1em;" >'.$this->head.'</div>';

        foreach ($this->testo as $k=>$b) {

            echo '<div class="salTextBlock" >';

                foreach ($b as $x=>$t) {

                    if ($this->prop[0]) {
                        if ($this->prop[0]['se']=='' || strpos($t[0],$this->prop[0]['se'],0)!==false) {
                            if ($this->prop[0]['op']=='add') $t[0].=$this->prop[0]['txt'];
                            elseif ($this->prop[0]['op']=='chg') $t[0]=$this->prop[0]['txt'];
                        }
                    }
                    if ($this->prop[1]) {
                        if ($this->prop[1]['se']=='' || strpos($t[1],$this->prop[1]['se'],0)!==false) {
                            if ($this->prop[1]['op']=='add') $t[1].=$this->prop[1]['txt'];
                            elseif ($this->prop[1]['op']=='chg') $t[1]=$this->prop[1]['txt'];
                        }
                    }

                    ///////////////////////////////////////////////////

                    if (count($t)==1 && $t[0]!='') $t=$this->label[$t[0]];
                    //echo '<div>'.json_encode($t).'</div>';

                    echo '<div class="salTextBody" style="';
                        if ($t[1]!='') {
                            if (strpos($t[1],'2',0)!==false) echo 'padding-left:30px;';
                            if (strpos($t[1],'c',0)!==false) echo 'color:#916803;';
                        }
                    echo '">';

                        if ($t[0]!='') {
                            echo '<img class="salTextCapo" src="'.SITE_URL.'/img/';
                                if ($t[0]=='ris') echo 'r.png';
                                elseif($t[0]=='ebd' || $t[0]=='sac') echo 'v.png';
                            echo '" />';
                        }

                        echo $t[2];

                        if ($t[1]!='') {
                            if (strpos($t[1],'*',0)!==false) echo '<img class="salTextEnd" src="'.SITE_URL.'/img/asterisk.png" />';
                            if (strpos($t[1],'+',0)!==false) echo '<img class="salTextEnd" src="'.SITE_URL.'/img/cross.png" />';
                        }
                    //else {
                        echo '</div>';
                    //}

                }

            echo '</div>';
        }

    }

}
?>