<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 24 Preghiera per il perdono e la salvezza';

    //sesta lunedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    elseif ($this->actual['tempo']=='A') {
        $this->antifona[0]=array(
            "L'angelo Gabriele",
            "disse a Maria: Ave, piena di grazia, il signore è con te; tu sei benedetta fra le donne."
        );
    }
    elseif ($this->actual['tempo']=='N') {
        $this->antifona[0]=array(
            "Maria",
            "meditava nel suo cuore gli eventi meravigliosi del suo Figlio."
        );
    }
    elseif ($this->actual['tempo']=='Q') {
        $this->antifona[0]=array(
            "Io sono il Vivente,",
            "dice il Signore: non voglio la morte del peccatore, ma che si converta e viva."
        );
    }
    else {
        $this->antifona[0]=array(
            "Insegnami, Signore,",
            "le tue vie: sono tutte verità e grazia."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Dica Israele che egli è buono:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Lo dica la casa di Aronne:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Lo dica chi teme Dio:"),
                array('','2',"eterna è la sua misericordia.")
            ),
            
        )
    );

}
?>