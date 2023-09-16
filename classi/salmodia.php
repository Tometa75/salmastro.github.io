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