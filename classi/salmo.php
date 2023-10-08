<?php
class Salmo {

    protected $pos="";
    protected $tipo="";
    protected $tag="";
    protected $parti="";
    protected $gloria="";

    protected $titolo="";
    protected $antifona=array();
    protected $testoBase=array();

    protected $actual;
    protected $res;
    protected $error=false;

    //definizione di nuovi metodi in maniera dinamica
    protected $methods = array();
    protected $closure = array();

    function __construct($actual,$s) {

        $this->actual=$actual;

        list($this->pos,$this->tipo,$this->tag,$this->parti,$this->gloria)=$s;

        if ($this->tag && $this->tag!="") {
            ob_start();
                include(SITE_ROOT.'/salmi/'.$this->tag.'.php');
            ob_end_clean();
        }

        $this->set_closure();

        //definito in CLOSURE
        $this->load();

        $this->res=new Saltesto();
        //se esiste la propietà '2' all'indice '1' allora diventa '2c'
        $this->res->setProp(1,'2','chg','2c');

        if ($this->parti=='') {
            foreach ($this->testoBase as $parte=>$p) {
                foreach ($p as $k=>$v) {
                    $this->res->addBlock($v);
                }
            }
        }
        else {
            foreach (explode(',',$this->parti) as $k=>$p) {
                if (array_key_exists($p,$this->testoBase)) {
                    foreach ($this->testoBase[$p] as $k=>$v) {
                        $this->res->addBlock($v);
                    }
                }
            }
        }

        if ($this->gloria=='G') {
            $temp=array(
                array('','*','Gloria al Padre e al Figlio'),
                array('','2','e allo Spirito Santo.'),
                array('','*','Come era nel principio, e ora e sempre,'),
                array('','2','nei secoli dei secoli. Amen.')
            );
            $this->res->addBlock($temp);
        }

    }

    //definisce in maniera dinamica nuovi metodi
    public function __call($methodName, array $args) {

        if (isset($this->methods[$methodName])) {
            return call_user_func_array($this->methods[$methodName], $args);
        }

        else {
            $this->titolo='Errore caricamento '.$this->tag;
            //echo "ERRORE inatteso, contattare l'amministratore";
            $this->error=true;
            return false;
        }
    }

    function set_closure() {
        foreach ($this->closure as $key=>$c) {
            $this->methods[$key] = Closure::bind($c, $this, get_class());
        }
    }

    function setAntifona($a) {
        //la funzione dà per scontato che l'antifona iniziale e finale siano uguali
        $this->antifona[0]=$a;
        $this->antifona[1]=$this->antifona[0]; 
    }

    function drawTitolo() {

        echo '<div class="salResBlockTitle" >';
            if ($this->pos=="") echo '<span style="font-size:0.8em;">(di seguito) </span>';
            echo $this->titolo;
        echo '</div>';
    }

    function drawAntifona($flag) {
        //true = prima - false = dopo
        //0 = prima - 1 = dopo (sono quasi sempre uguali ma non sempre)

        $index=($flag)?0:1;

        if ($this->error) return;

        echo '<div style="position:relative;margin-top:5px;margin-bottom:10px;font-size:1.1em;" >';
            echo '<div class="salAntifona" >'.$this->pos.' ant.</div>';
            echo '<div class="salAntifona2" >';
                echo $this->antifona[$index][0];
                if ($flag) echo ' / ';
                else echo ' ';
                echo $this->antifona[$index][1];
            echo '</div>';
        echo '</div>';
    }

    function drawSalmo() {

        if ($this->error) return;

        echo '<div class="salResBlockBody" >';
            if ($this->res) {
                echo $this->res->draw();
            }
        echo '</div>';
    }

}

?>