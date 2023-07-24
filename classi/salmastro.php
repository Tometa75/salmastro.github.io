<?php
require_once('calendario.php');
require_once('core/calendario/calnav.php');

class Salmastro {

    protected $info=array(
        "today"=>""
    );

    protected $map=array();

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
        $this->map=$this->cal->getMap();

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
            "background-color"=>"#f2d29f",
            "font-size"=>"1.4em"
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

            echo '<div class="salHeadLine" style="">';
                echo '<img style="position:relative;width:60px;height:25px;margin-left:10px;" src="'.SITE_URL.'/img/medaglia.png" />';
                echo 'Liturgia delle ore benedettina';
            echo '</div>';

            echo '<div class="salHeadBlock" style="background-image:url(\''.SITE_URL.'/img/sfondoHead.png\')">';
                
                echo '<div style="position:relative;display:inline-block;vertical-align:top;width:35%;" >';

                    echo '<div style="position:relative;">';
                        $this->calnav->draw();
                    echo '</div>';

                    echo '<div style="position:relative;text-align:center;">';

                        echo '<div class="tempodiv" style="';
                            echo 'background-color:'.$this->map['tempo']['colore'].';';
                        echo '" >';
                            echo $this->map['tempo']['nome'];
                            if ($this->map['tempo']['codice']=='O') {
                                echo ' ( Settimana: '.$this->map['settimana'].' - ';
                                switch ($this->map['quarto']) {
                                    case 1: echo 'I';break;
                                    case 2: echo 'II';break;
                                    case 3: echo 'III';break;
                                    case 4: echo 'IV';break;
                                }
                                echo ' )';
                            }
                        echo '</div>';

                    echo '</div>';

                echo '</div>';

                echo '<div style="position:relative;display:inline-block;vertical-align:top;width:45%;font-weight:bold;font-size: 1.2em;padding: 3px;padding-left: 10px;box-sizing:border-box;" >';
                    echo 'Anno: '.$this->map['anno'];
                echo '</div>';

            echo '</div>';

        echo '</div>';
    }

}

?>