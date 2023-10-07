<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 30 Supplica fiduciosa nell'afflizione";

    //compieta venerdì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Nascondimi",
            "al riparo del tuo volto: nelle tue mani sono i miei giorni, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Nascondimi",
            "al riparo del tuo volto: nelle tue mani sono i miei giorni."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"In te, Signore, mi sono rifugiato,"),
                array('','*',"mai sarò deluso;"),
                array('','2',"per la tua giustizi salvami."),
                array('','*',"Porgi a me l'orecchio,"),
                array('','2',"vieni presto a liberarmi."),
                array('','*',"Sii per me la rupe che mi accoglie,"),
                array('','2',"la cinta di riparo che mi salva.")
            ),
            array(
                array('','*',"Tu sei la mia roccia e il mio baluardo,"),
                array('','2',"per il tuo nome dirigi i miei passi."),
                array('','*',"Scioglimi dal laccio che mi hanno teso,"),
                array('','2',"perché sei tu la mia difesa.")
            ),
            array(
                array('','*',"Mi affido alle tue mani;"),
                array('','2',"tu mi riscatti, Signore, Dio fedele."),
                array('','*',"Tu detesti chi serve idoli falsi,"),
                array('','2',"ma io ho fede nel Signore.")
            ),
            array(
                array('','+',"Esulterò di gioia per la tua grazia,"),
                array('','*',"perché hai guardato alla mia miseria,"),
                array('','2',"hai conosciuto le mie angosce;"),
                array('','*',"non mi hai consegnato nelle mani del nemico,"),
                array('','2',"hai guidato al largo i miei passi.")
            ),
            array(
                array('','+',"Abbi pietà di me, Signore, sono nell'affanno;"),
                array('','*',"per il pianto si struggono i miei occhi,"),
                array('','2',"la mia anima e le mie viscere."),
                array('','*',"Si consuma nel dolore la mia vita,"),
                array('','2',"i miei anni passano nel gemito;"),
                array('','*',"inaridisce per la pena il mio vigore,"),
                array('','2',"si idissolvono tutte le mie ossa.")
            ),
            array(
                array('','+',"Sono l'obbrobrio dei miei nemici, il disgusto dei miei vicini,"),
                array('','*',"l'orrore dei miei conoscenti;"),
                array('','2',"chi mi vede per strada i fugge."),
                array('','*',"Sono caduto in oblio come un morto,"),
                array('','2',"sono divenuto un rifiuto.")
            ),
            array(
                array('','*',"Se odo la calunnia di molti,"),
                array('','2',"il terrore mi circonda:"),
                array('','*',"quando insieme contro di me congiurano,"),
                array('','2',"tramano di togliermi la vita.")
            ),
            array(
                array('','+',"Ma io confido in te, Signore;"),
                array('','*',"dico: « Tu sei il mio Dio,"),
                array('','2',"nelle tue mani sono i miei giorni »."),
                array('','*',"Liberami dalla mano dei miei nemici,"),
                array('','2',"dalla stretta dei miei persecutori:"),
                array('','*',"fa' splendere il tuo volto sul tuo servo,"),
                array('','2',"salvami per la tua misericordia.")
            )
        )
    );

}
?>