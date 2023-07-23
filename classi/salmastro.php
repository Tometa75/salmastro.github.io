<?php
require_once('calendario.php');
require_once('core/calendario/calnav.php');

class Salmastro {

    protected $info=array(
        "today"=>""
    );

    protected $cal=false;
    protected $calnav=false;

    function __construct($param) {

        foreach ($this->info as $k=>$i) {
            if (array_key_exists($k,$param)) $this->info[$k]=$param[$k];
        }

        if (!isset($this->info['today']) || $this->info['today']=="") {
            $this->info['today']=date('Ymd');
        }

        $this->cal=new Calendario($this->info['today']);

        $config=array(
            "index"=>"salmastro",
            "range_i"=>"19990101",
            "range_f"=>"21001231",
            "tag"=>"d m Y",
            "m1"=>array("giorno","1"),
            "p1"=>array("giorno","1"),
            "now"=>true,
            "disabled"=>false
        );
        $css=array(
            "background-color"=>"white",
            "font-size"=>"1.2em"
        );
    
        $this->calnav=new calnav('D',$this->info['today'],$config,$css,$this->cal);
        
    }

    function build() {

    }

    function draw() {

        $this->drawHead();

        echo '<div>Oggi è: '.$this->info['today'].'</div>';
        echo '<div>'.json_encode($this->cal->getCal()).'</div>';
    }

    function drawHead() {

        echo '<div style="position:relative;width:100%;height:20%;">';

            echo '<div style="position:relative;width:100%;height:25%;font-weight:bold;">';
                echo 'Liturgia delle ore benedettina';
            echo '</div>';

            echo '<div style="position:relative;width:100%;height:75%;border:1px solid black;box-sizing:border-box;padding:3px;border-radius:15px;">';
                
                echo '<div style="position:relative;display:inline-block;vertical-align:top;width:35%;" >';
                    $this->calnav->draw();
                echo '</div>';

            echo '</div>';

        echo '</div>';
    }

}

?>