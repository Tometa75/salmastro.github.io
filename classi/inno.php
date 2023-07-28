<?php

class Inno {

    protected $map;

    function __construct($map) {
        $this->map=$map;

        //decodifica MAP
        /*{
            "today":"20260507",
            "tempo":{"codice":"P","nome":"Tempo di Pasqua","colore":"white","fine":"pentecoste"},
            "anno":"A",
            "settimana":5,
            "quarto":"",
            "weekDay":"4",
            "pari":true,
            "festa":[],
            "evento":{"PA54":{"titolo":"5\u00b0 settimana di Pasqua - Gioved\u00ec","tipo":"F"}},
            "rocho":false,
            "errore":false
        }*/
        
    }
    
}

?>