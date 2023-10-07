<?php
require_once ('salmo.php');

class Salmodia {

    protected $actual;
    protected $salmi=array();
    protected $res=array();

    function __construct($caller) {

        //$this->litio=$caller;
        $this->actual=$caller->actual;

        $this->init();
        $this->build();
    }

    function init() {

        //definizione dei salmi del salterio in base al giorno ed alla settimana
        /*array (
            'posizione' Es: '1' **** se '' significa che il salmo è accodato al precedente
            'S' salmo , 'C' cantico
            'tag' es: '65'
            'parte' es:'1,2,3'
            'G' = gloria / '' = senza gloria
        )*/
        //definizione dei salmi in base a feste ed eventi
        //build dei salmi e definizione delle antifone e delle parti

        if ($this->actual['weekDay']==0) {
            switch ($this->actual['ora']) {
                case 'ves1': 
                    $this->salmi=array(
                        array('1','S','65','','G'),
                        array('2','S','19','','G'),
                        array('3','S','20','','G'),
                        array('4','S','137','','G'),
                        array('5','C','NT11','','G')
                    );
                break;
                case 'comp1': 
                    $this->salmi=array(
                        array('1','S','114','','G'),
                        array('2','S','16','','G'),
                        array('3','S','15','','G')
                    );
                break;
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','92','','G'),
                        array('2','S','3','','G'),
                        array('3','S','29','','G')
                    );

                    if ($this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT47','','G');
                    else $this->salmi[]=array('4','C','AT48','','G');
                    
                    $this->salmi[]=array('5','S','146','','');
                    $this->salmi[]=array('','S','147','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','1,2,3,4','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','117','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','135','','G')
                    );
                break;
                case 'ves2': 
                    $this->salmi=array(
                        array('1','S','112','','G'),
                        array('2','S','113','A','G'),
                        array('3','S','113','B','G'),
                        array('4','S','114','',''),
                        array('','S','115','','G')
                    );

                    if ($this->actual['tempo']=='Q') $this->salmi[]=array('5','C','NT18','','G');
                    else $this->salmi[]=array('5','C','NT22','','G');
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','4','','G'),
                        array('2','S','90','','G'),
                        array('3','S','133','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==1) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','99','','G'),
                        array('2','S','62','','G'),
                        array('3','S','100','','G')
                    );

                    if ($this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT4','','G');
                    else $this->salmi[]=array('4','C','AT16','','G');
                    
                    $this->salmi[]=array('5','S','134','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','5,6,7','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','24','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','119','','G'),
                        array('2','S','120','','G'),
                        array('3','S','121','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','32','','G'),
                        array('2','S','60','A','G'),
                        array('3','S','27','B','G'),
                        array('4','S','47','','G'),
                        array('5','C','NT10','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','33','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==2) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','97','','G'),
                        array('2','S','89','','G'),
                        array('3','S','64','','G')
                    );

                    if ($this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT5','','G');
                    else $this->salmi[]=array('4','C','AT26','','G');
                    
                    $this->salmi[]=array('5','S','116','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','8,9,10','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','41','',''),
                        array('','S','42','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','122','','G'),
                        array('2','S','123','','G'),
                        array('3','S','124','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','74','','G'),
                        array('2','S','139','A','G'),
                        array('3','S','25','B','G'),
                        array('4','S','144','','G'),
                        array('5','C','NT19','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','138','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==3) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','96','','G'),
                        array('2','S','35','','G'),
                        array('3','S','56','','G')
                    );

                    if ($this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT7','','G');
                    else $this->salmi[]=array('4','C','AT3','','G');
                    
                    $this->salmi[]=array('5','S','149','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','11,12,13','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','43','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','125','','G'),
                        array('2','S','126','','G'),
                        array('3','S','127','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','102','','G'),
                        array('2','S','85','A','G'),
                        array('3','S','84','B','G'),
                        array('4','S','86','','G'),
                        array('5','C','NT12','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','31','','G'),
                        array('1','S','61','','G'),
                        array('1','S','132','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==4) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','46','','G'),
                        array('2','S','75','','G'),
                        array('3','S','5','','G')
                    );

                    if ($this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT43','','G');
                    else $this->salmi[]=array('4','C','AT22','','G');
                    
                    $this->salmi[]=array('5','S','148','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','14,15,16','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','54','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','128','','G'),
                        array('2','S','129','','G'),
                        array('3','S','130','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','110','','G'),
                        array('2','S','22','','G'),
                        array('3','S','83','','G'),
                        array('4','S','39','','G'),
                        array('5','C','NT20','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','101','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==5) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','95','','G'),
                        array('2','S','50','','G'),
                        array('3','S','63','','G')
                    );

                    if ($this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT31','','G');
                    else $this->salmi[]=array('4','C','AT52','','G');
                    
                    $this->salmi[]=array('5','S','145','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','17,18,19','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','21','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','10','','G'),
                        array('2','S','11','','G'),
                        array('3','S','12','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','143','','G'),
                        array('2','S','140','A','G'),
                        array('3','S','141','B','G'),
                        array('4','S','26','','G'),
                        array('5','C','NT21','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','30','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==6) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','98','','G'),
                        array('2','S','142','','G'),
                        array('3','S','91','','G')
                    );

                    if ($this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT1','','G');
                    else $this->salmi[]=array('4','C','AT2','','G');
                    
                    $this->salmi[]=array('5','S','150','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','20,21,22','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','34','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','51','','G'),
                        array('2','S','13','','G'),
                        array('3','S','53','','G')
                    );
                break;
            }
        }

        //////////////////////////////////////////////////////////////////////////
        //modifiche in base alla FESTA o al TEMPO LITURGICO

    }

    function build() {

        foreach ($this->salmi as $k=>$s) {
            $this->res[$k]=new Salmo($this->actual,$s);
        }
    }

    function draw() {

        //registra il salmo di riferimento per l'antifona
        $ant="";

        foreach ($this->res as $k=>$r) {

            //se la posizione=='' significa che il salmo è una continuazione
            if ($this->salmi[$k][0]!='') {
                $r->drawAntifona(true);
            }

            $r->drawTitolo();

            $r->drawSalmo();

            //se non c'è il gloria significa che il successivo salmo è agganciato
            if ($this->salmi[$k][4]=='G') {

                if ($ant=="") {
                    $r->drawAntifona(false);
                }
                else {
                    $this->res[$ant]->drawAntifona(false);
                    $ant="";
                }
            }
            else {
                if ($ant=='') $ant=$k;
            }
        }

    }
    
}
?>