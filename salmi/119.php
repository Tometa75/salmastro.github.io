<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 119 Fervido desiderio di pace';

    //nona lunedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    elseif ($this->actual['tempo']=='A') {
        $this->antifona[0]=array(
            "Maria rispose:",
            "che vuol dire il tuo saluto? È turbato il mio spirito. Io sarò la madre del Re, rimanendo intatta nella mia verginità."
        );
    }
    elseif ($this->actual['tempo']=='N') {
        $this->antifona[0]=array(
            "I miei occhi",
            "hanno visto la salvezza, che hai preparato di fronte a tutti i popoli."
        );
    }
    elseif ($this->actual['tempo']=='Q') {
        $this->antifona[0]=array(
            "Siamo saldi",
            "nella prova: nostra forza è la giustizia di Dio."
        );
    }
    else {
        $this->antifona[0]=array(
            "Signore,",
            "libera la mia vita dalle parole di menzogna."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Lodate il Signore perché è buono:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Lodate il Dio degli dei:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Lodate il Signore dei signori:"),
                array('','2',"eterna è la sua misericordia.")
            ),
            
        )
    );

}
?>