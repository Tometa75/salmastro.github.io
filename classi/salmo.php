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

    protected $res;
    protected $error=false;

    //definizione di nuovi metodi in maniera dinamica
    protected $methods = array();
    protected $closure = array();

    function __construct($actual,$s) {

        list($this->pos,$this->tipo,$this->tag,$this->parti,$this->gloria)=$s;

        if ($this->tag && $this->tag!="") {
            ob_start();
                include(SITE_ROOT.'/salmi/'.$this->tag.'.php');
            ob_end_clean();
        }

        $this->set_closure();

        $this->load();

        $this->res=new Saltesto();

        if ($this->parti=='') {
            foreach ($this->testoBase as $parte=>$p) {
                $this->res->addBlock($p);
            }
        }
        else {
            foreach (explode(',',$this->parti) as $k=>$p) {
                if (array_key_exists($p,$this->testoBase)) {
                    $this->res->addBlock($this->testoBase[$p]);
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

    function drawTitolo() {

        echo '<div class="salResBlockTitle" >';
            if ($this->pos=="") echo '<span style="font-size:0.8em;">(di seguito) </span>';
            echo $this->titolo;
        echo '</div>';
    }

    function drawAntifona($flag) {
        //true = prima - false = dopo

        if ($this->error) return;

        echo '<div>'.$this->pos.' ant.';
            echo $this->antifona[0];
            if ($flag) echo ' / ';
            echo $this->antifona[1];
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