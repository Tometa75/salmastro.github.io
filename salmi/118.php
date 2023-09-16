<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 118 Meditazione della parola di Dio nella legge';

    //terza domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    elseif ($this->actual['tempo']=='A') {
        $this->antifona[0]=array(
            "I profeti",
            "l'avevano annunziato: il Salvatore nascerà dalla Vergine Maria."
        );
    }
    elseif ($this->actual['tempo']=='N') {
        $this->antifona[0]=array(
            "Giuseppe e Maria",
            "la madre di Gesù, erano pieni di meraviglia per quello che si diceva di lui."
        );
    }
    elseif ($this->actual['tempo']=='Q') {
        $this->antifona[0]=array(
            "Ecco",
            "i giorni della penitenza, tempo di perdono e di salvezza."
        );
    }
    else {
        if ($this->actual['weekDay']==0) {
            $this->antifona[0]=array(
                "Corro",
                "la via dei tuoi precetti, perché hai dilatato il mio cuore."
            );
        }
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        '1'=>array(
            array(
                array('','N',"1 - ALEF"),
                array('','*',"Beato l'uomo di integra condotta,"),
                array('','2',"che cammina nella legge del Signore."),
                array('','*',"Beato chi è fedele ai suoi insegnamenti"),
                array('','2',"e lo cerca con tutto il cuore.")
            )
        ),
        '2'=>array(
            array(
                array('','N',"2 - BET"),
            )
        ),
        '3'=>array(
            array(
                array('','N',"3 - GHIMEL"),
            )
        ),
        '4'=>array(
            array(
                array('','N',"4 - DALET"),
            )
        ),
        '5'=>array(
            array(
                array('','N',"5 - HE"),
            )
        )
    );

}
?>