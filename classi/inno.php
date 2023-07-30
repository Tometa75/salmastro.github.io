<?php

class Inno {

    protected $info=array(
        "titolo"=>"Inno",
        "testo"=>false
    );

    protected $litio;

    function __construct($caller) {

        $this->litio=$caller;

        $this->info['testo']=new Saltesto();
    }

    function draw() {

        echo '<div class="salResBlockTitle" >';
            echo $this->info['titolo'];
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            if ($this->info['testo']) {
                echo $this->info['testo']->draw();
            }
        echo '</div>';
    }
    
}

?>