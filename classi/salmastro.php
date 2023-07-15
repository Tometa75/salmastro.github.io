<?php
require('calendario.php');

class Salmastro {

    protected $info=array(
        "today"=>""
    );

    protected $cal=false;

    function __construct($param) {

        foreach ($this->info as $k=>$i) {
            if (array_key_exists($k,$param)) $this->info[$k]=$param[$k];
        }

        if (!isset($this->info['today']) || $this->info['today']=="") {
            $this->info['today']=date('Ymd');
        }

        $this->cal=new Calendario($this->info['today']);
        
    }

    function build() {

    }

    function draw() {
        echo 'Oggi è: '.$this->info['today'];
    }

}

?>