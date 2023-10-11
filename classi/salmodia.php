<?php
require_once ('salmo.php');

class Salmodia {

    protected $actual;
    protected $salmi=array();
    protected $res=array();

    protected $festivi=array(
        "ves"=>array(
            array('1','S','109','','G'),
            array('2','S','110','','G'),
            array('3','S','111','','G'),
            array('4','S','112','','G'),
            array('5','C','NT11','','G')
        ),
        "lodiD"=>array(
            array('1','S','92','','G'),
            array('2','S','99','','G'),
            array('3','S','62','','G'),
            array('4','C','AT47','','G'),
            array('5','S','150','','G')
        ),
        "lodiP"=>array(
            array('1','S','92','','G'),
            array('2','S','99','','G'),
            array('3','S','62','','G'),
            array('4','C','AT48','','G'),
            array('5','S','150','','G')
        )
    );

    protected $comune=array(
        "BVM"=>array(
            "ves"=>array(
                array('1','S','109','','G'),
                array('2','S','112','','G'),
                array('3','S','121','','G'),
                array('4','S','126','','G'),
                array('5','C','NT10','','G')
            )
        )
    );

    function __construct($caller) {

        //$this->litio=$caller;
        $this->actual=$caller->actual;

        $this->init();
        $this->build();
    }

    function init() {

        //definizione dei salmi del salterio in base al giorno ed alla settimana
        /*array (
            'posizione' Es: '1' **** se '' significa che il salmo è accodato al precedente
            'S' salmo , 'C' cantico
            'tag' es: '65'
            'parte' es:'1,2,3'
            'G' = gloria / '' = senza gloria
        )*/
        //definizione dei salmi in base a feste ed eventi
        //build dei salmi e definizione delle antifone e delle parti

        if ($this->actual['weekDay']==0) {
            switch ($this->actual['ora']) {
                case 'ves1': 
                    $this->salmi=array(
                        array('1','S','65','','G'),
                        array('2','S','19','','G'),
                        array('3','S','20','','G'),
                        array('4','S','137','','G'),
                        array('5','C','NT11','','G')
                    );
                break;
                case 'comp1': 
                    $this->salmi=array(
                        array('1','S','114','','G'),
                        array('2','S','16','','G'),
                        array('3','S','15','','G')
                    );
                break;
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','92','','G'),
                        array('2','S','3','','G'),
                        array('3','S','29','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT47','','G');
                    else $this->salmi[]=array('4','C','AT48','','G');
                    
                    $this->salmi[]=array('5','S','146','','');
                    $this->salmi[]=array('','S','147','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','1,2,3,4','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','117','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','135','','G')
                    );
                break;
                case 'ves2': 
                    $this->salmi=array(
                        array('1','S','112','','G'),
                        array('2','S','113A','','G'),
                        array('3','S','113B','','G'),
                        array('4','S','114','',''),
                        array('','S','115','','G')
                    );

                    if ($this->actual['tempo']=='Q') $this->salmi[]=array('5','C','NT18','','G');
                    else $this->salmi[]=array('5','C','NT22','','G');
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','4','','G'),
                        array('2','S','90','','G'),
                        array('3','S','133','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==1) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','99','','G'),
                        array('2','S','62','','G'),
                        array('3','S','100','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT4','','G');
                    else $this->salmi[]=array('4','C','AT16','','G');
                    
                    $this->salmi[]=array('5','S','134','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','5,6,7','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','24','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','119','','G'),
                        array('2','S','120','','G'),
                        array('3','S','121','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','32','','G'),
                        array('2','S','60','','G'),
                        array('3','S','27','','G'),
                        array('4','S','47','','G'),
                        array('5','C','NT10','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','33','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==2) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','97','','G'),
                        array('2','S','89','','G'),
                        array('3','S','64','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT5','','G');
                    else $this->salmi[]=array('4','C','AT26','','G');
                    
                    $this->salmi[]=array('5','S','116','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','8,9,10','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','41','',''),
                        array('','S','42','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','122','','G'),
                        array('2','S','123','','G'),
                        array('3','S','124','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','74','','G'),
                        array('2','S','139','','G'),
                        array('3','S','25','','G'),
                        array('4','S','144','','G'),
                        array('5','C','NT19','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','138','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==3) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','96','','G'),
                        array('2','S','35','','G'),
                        array('3','S','56','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT7','','G');
                    else $this->salmi[]=array('4','C','AT3','','G');
                    
                    $this->salmi[]=array('5','S','149','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','11,12,13','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','43','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','125','','G'),
                        array('2','S','126','','G'),
                        array('3','S','127','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','102','','G'),
                        array('2','S','85','','G'),
                        array('3','S','84','','G'),
                        array('4','S','86','','G'),
                        array('5','C','NT12','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','31','','G'),
                        array('1','S','61','','G'),
                        array('1','S','132','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==4) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','46','','G'),
                        array('2','S','75','','G'),
                        array('3','S','5','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT43','','G');
                    else $this->salmi[]=array('4','C','AT22','','G');
                    
                    $this->salmi[]=array('5','S','148','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','14,15,16','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','54','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','128','','G'),
                        array('2','S','129','','G'),
                        array('3','S','130','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','110','','G'),
                        array('2','S','22','','G'),
                        array('3','S','83','','G'),
                        array('4','S','39','','G'),
                        array('5','C','NT20','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','101','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==5) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','95','','G'),
                        array('2','S','50','','G'),
                        array('3','S','63','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT31','','G');
                    else $this->salmi[]=array('4','C','AT52','','G');
                    
                    $this->salmi[]=array('5','S','145','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','17,18,19','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','21','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','10','','G'),
                        array('2','S','11','','G'),
                        array('3','S','12','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','143','','G'),
                        array('2','S','140','','G'),
                        array('3','S','141','','G'),
                        array('4','S','26','','G'),
                        array('5','C','NT21','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','30','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==6) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','98','','G'),
                        array('2','S','142','','G'),
                        array('3','S','91','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT1','','G');
                    else $this->salmi[]=array('4','C','AT2','','G');
                    
                    $this->salmi[]=array('5','S','150','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','20,21,22','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','34','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','51','','G'),
                        array('2','S','13','','G'),
                        array('3','S','53','','G')
                    );
                break;
            }
        }

        /////////////////////////////////////////////////////////////////////////////
        if (substr($this->actual['today'],4,4)=='1225') {
            if ($this->actual['tempo']=='ves1') $this->salmi=$this->festivi['ves'];
            if ($this->actual['tempo']=='lodi') $this->salmi=$this->festivi['lodiD'];
            if ($this->actual['tempo']=='ves' || $this->actual['tempo']=='ves2' ) {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','129','','G'),
                    array('5','C','NT12','','G')
                );
            }
        }

        elseif ($this->actual['evCode']=='SAF') {
            if ($this->actual['tempo']=='lodi') $this->salmi=$this->festivi['lodiP'];
            if ($this->actual['tempo']=='ves' || $this->actual['tempo']=='ves2' || $this->actual['tempo']=='ves') {
                $this->salmi=$this->comune['BVM']['ves'];
            }
        }

    }

    function build() {

        foreach ($this->salmi as $k=>$s) {
            $this->res[$k]=new Salmo($this->actual,$s);

            //////////////////////////////////////////////////////////////////////////
            //modifica ANTIFONE in base al TEMPO LITURGICO

            if ($this->actual['tempo']=='A') {

                if (substr($this->actual['today'],4,4)>='1224' && $this->actual['ora']=='lodi') {
                    switch ($s[0]) {
                        case 1: $this->res[$k]->setAntifona(array(
                            "Giudea",
                            "e Gerusalemme, non temete: domani sarete liberati e il Signore sarà con voi, alleluia."
                        ));
                        break;
                        case 2: $this->res[$k]->setAntifona(array(
                            "Tu, Betlemme,",
                            "non sei l'ultima borgata di Giudea; da te uscirà un capo, il pastore d'Israele mio popolo."
                        ));
                        break;
                        case 3: $this->res[$k]->setAntifona(array(
                            "Oggi saprete",
                            "che il Signore viene: col nuovo giorno vedrete la sua gloria."
                        ));
                        break;
                        case 4: $this->res[$k]->setAntifona(array(
                            "Viene il Signore:",
                            "corretegli incontro acclamando: Grande è il suo potere, il suo regno non avrà fine; è Dio, il Forte, il Signore, il Principe della pace, alleluia."
                        ));
                        break;
                        case 5: $this->res[$k]->setAntifona(array(
                            "Domani",
                            "verrà la vostra salvezza, dice il Signore, Dio dell'universo."
                        ));
                        break;
                    }
                }

                elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves' || $this->actual['ora']=='lodi') {

                    if ($this->actual['evCode']=='AV1') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Quel giorno",
                                "le montagne stiulleranno vino nuovo, latte e miele scorrerà per le colline, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Rallegrati,",
                                "città di Dio; grida di gioia, Gerusalemme, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ecco,",
                                "il Signore viene e con lui tutti i suoi santi: quel giorno brillerà una grande luce, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Venite alla sorgente,",
                                "voi che avete sete; cercate il Signore: ora si fa trovare, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Ecco,",
                                "verrà il grande Profeta, e rinnoverà Gerusalemme, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['evCode']=='AV2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Verrà",
                                "il Signore sulle nubi del cielo, con grande potenza, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Tu nostra forza,",
                                "città di Dio! Il Salvatore sarà per te muro e baluardo: aprite le porte, il Signore è con noi, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ecco,",
                                "il Signore verrà; se ritarda, attendilo con fiducia: egli non mancherà, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Montagne e colline",
                                "canteranno a Dio, alberi e foreste applaudiranno: viene il Signore, il Dominatore, e regnerà in eterno, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Verrà",
                                "con potenza il Signore, e sarà luce ai nostri occhi, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['evCode']=='AV3') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Viene",
                                "il Signore, non tarderà: farà luce nel segreto delle tenebre, apparirà a tutte le nazioni, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Esulta di gioia,",
                                "Gerusalemme: viene a te il Salvatore, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "In Sion",
                                "darò la salvezza, stabilirò in Gerusalemme la mia gloria, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Montagne e colline",
                                "si abbasseranno, le vie tortuose si faranno dritte. Vieni, Signore, non tardare, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "A chi è sfiduciato,",
                                "dite: Coraggio! Viene il Signore nostro Dio."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['evCode']=='AV4') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Suonate",
                                "la tromba in Sion: il giorno del Signore è vicino, egli viene per salvarci, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Ecco,",
                                "L'Atteso dalle nazioni è vicino, la casa del Signore sarà piena di gloria, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Le vie tortuose",
                                "si faranno dritte, le strade scoscese si appianeranno: vieni, Signore, non tardare, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Viene il Signore:",
                                "corretegli incontro acclamando: Grande è il suo potere, il suo regno non avrà fine; è Dio, il Forte, il Signore, il principe della pace, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Dal trono regale",
                                "dal cielo, Signore, verrà la tua Parola onnipotente, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif (substr($this->actual['today'],4,4)>='1217' && substr($this->actual['today'],4,4)<='1223') {

                        switch ($this->actual['weekDay']) {
                            case 1:
                                switch ($s[0]) {
                                    case 1: $this->res[$k]->setAntifona(array(
                                        "Ecco,",
                                        "viene il Signore, il Re dei re della terra: beato chi è pronto per andargli incontro."
                                    ));
                                    break;
                                    case 2: $this->res[$k]->setAntifona(array(
                                        "Quando",
                                        "il Figlio dell'uomo verrà, troverà ancora fede sulla terra?"
                                    ));
                                    break;
                                    case 3: $this->res[$k]->setAntifona(array(
                                        "È venuta",
                                        "la pienezza dei tempi: Dio manda il suo Figlio sulla terra."
                                    ));
                                    break;
                                    case 4: $this->res[$k]->setAntifona(array(
                                        "Attingerete con gioia",
                                        "alle sorgenti della salvezza."
                                    ));
                                    break;
                                    case 5: $this->res[$k]->setAntifona(array(
                                        "Dal santuario del cielo",
                                        "esce il Signore: viene a salvare il suo popolo."
                                    ));
                                    break;
                                }
                            break;

                            case 2:
                                switch ($s[0]) {
                                    case 1: $this->res[$k]->setAntifona(array(
                                        "O cieli,",
                                        "stillate rugiada: le nubi piovano il Giusto; si apra la terra, e germogli il Salvatore."
                                    ));
                                    break;
                                    case 2: $this->res[$k]->setAntifona(array(
                                        "Manda, Signore,",
                                        "l'Agnello, Dominatore del mondo; venga dal deserto al monte di Sion."
                                    ));
                                    break;
                                    case 3: $this->res[$k]->setAntifona(array(
                                        "Sulla terra",
                                        "si conosca la tua via, la tua salvezza in tutte le nazioni."
                                    ));
                                    break;
                                    case 4: $this->res[$k]->setAntifona(array(
                                        "Ricompensa, Signore,",
                                        "quelli che sperano in te; i tuoi profeti siano degni di fede."
                                    ));
                                    break;
                                    case 5: $this->res[$k]->setAntifona(array(
                                        "Da Mosè",
                                        "fu data la legge: da Gesù Cristo la grazia e la verità."
                                    ));
                                    break;
                                }
                            break;

                            case 3:
                                switch ($s[0]) {
                                    case 1: $this->res[$k]->setAntifona(array(
                                        "I profeti",
                                        "l'avevano annunziato: il Salvatore nascerà dalla Vergine Maria."
                                    ));
                                    break;
                                    case 2: $this->res[$k]->setAntifona(array(
                                        "Lo Spirito del Signore",
                                        "è sopra di me: mi ha mandato ad annunziare ai poveri un lieto messaggio."
                                    ));
                                    break;
                                    case 3: $this->res[$k]->setAntifona(array(
                                        "Per amore di Sion",
                                        "non tacerò, finché non sorga la luce del suo Giusto."
                                    ));
                                    break;
                                    case 4: $this->res[$k]->setAntifona(array(
                                        "Ecco,",
                                        "il Signore viene: starà fra i capi del suo popolo, sul trono di gloria."
                                    ));
                                    break;
                                    case 5: $this->res[$k]->setAntifona(array(
                                        "Date",
                                        "l'annunzio ai popoli: Ecco, Dio viene, il nostro Salvatore."
                                    ));
                                    break;
                                }

                            break;

                            case 4:
                                switch ($s[0]) {
                                    case 1: $this->res[$k]->setAntifona(array(
                                        "Da Sion",
                                        "viene il Signore onnipotente, viene a salvare il suo popolo."
                                    ));
                                    break;
                                    case 2: $this->res[$k]->setAntifona(array(
                                        "Volgiti un poco,",
                                        "Signore, verso di noi, vieni dai tuoi servi, non tardare."
                                    ));
                                    break;
                                    case 3: $this->res[$k]->setAntifona(array(
                                        "Viene da Sion",
                                        "colui che regnerà: il Signore, l'Emmanuele, grande è il suo nome."
                                    ));
                                    break;
                                    case 4: $this->res[$k]->setAntifona(array(
                                        "Egli",
                                        "è il mio Dio e lo voglio lodare, è il Dio di mio padre e lo voglio esaltare!"
                                    ));
                                    break;
                                    case 5: $this->res[$k]->setAntifona(array(
                                        "Il Signore",
                                        "è nostra legge, il Signore è nostro re: egli viene, ci salverà."
                                    ));
                                    break;
                                }
                                
                            break;

                            case 5:
                                switch ($s[0]) {
                                    case 1: $this->res[$k]->setAntifona(array(
                                        "Perseverate,",
                                        "e vedrete su di voi l'aiuto del Signore."
                                    ));
                                    break;
                                    case 2: $this->res[$k]->setAntifona(array(
                                        "A te, Signore,",
                                        "inalzo l'anima mia: vieni a liberarmi; Signore, in te mi rifugio."
                                    ));
                                    break;
                                    case 3: $this->res[$k]->setAntifona(array(
                                        "Vieni, Signore,",
                                        "non tardare: libera il tuo popolo dai suoi peccati."
                                    ));
                                    break;
                                    case 4: $this->res[$k]->setAntifona(array(
                                        "Dio",
                                        "verrà dall'alto, e splenderà come il sole."
                                    ));
                                    break;
                                    case 5: $this->res[$k]->setAntifona(array(
                                        "Rivolgo",
                                        "lo sguardo al Signore, aspetto Dio, mio salvatore."
                                    ));
                                    break;
                                }
                                
                            break;

                            case 6:
                                switch ($s[0]) {
                                    case 1: $this->res[$k]->setAntifona(array(
                                        "Contemplate",
                                        "la gloria del Signore: egli entra nel mondo per salvare i popoli."
                                    ));
                                    break;
                                    case 2: $this->res[$k]->setAntifona(array(
                                        "Grande",
                                        "sarà il suo dominio, e la pace non avrà fine."
                                    ));
                                    break;
                                    case 3: $this->res[$k]->setAntifona(array(
                                        "Io, il Signore,",
                                        "mi avvicino: la mia giustizia non è più lontana, la mia salvezza non tarderà."
                                    ));
                                    break;
                                    case 4: $this->res[$k]->setAntifona(array(
                                        "La parola del Signore",
                                        "è attesa come la pioggia; come rugiada scenderà su di noi il nostro Dio."
                                    ));
                                    break;
                                    case 5: $this->res[$k]->setAntifona(array(
                                        "Preparati,",
                                        "o Israele, ad incontrare il Signore: egli viene."
                                    ));
                                    break;
                                }
                                
                            break;
                        }
                    }
                }
            }

            /////////////////////////////////////////////////////////////////////////
            elseif ($this->actual['tempo']=='N') {

                if (substr($this->actual['today'],4,4)=='1225') {
                    if ($this->actual['tempo']=='ves1') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il Re della pace",
                                "viene nella gloria: tutta la terra desidera il suo volto."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Risplende di gloria",
                                "il Re della pace sopra tutti i re della terra."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il regno di Dio",
                                "è vicino: siate certi, non tarderà."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Alzatevi",
                                "e levate il capo: la vostra redenzione è vicina"
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "È venuta",
                                "la pienezza dei tempi: Dio manda il suo Figlio sulla terra."
                            ));
                            break;
                        }
                    }
                    if ($this->actual['tempo']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Pastori,",
                                "chi avete visto? chi è apparso sulla terra? Abbiamo visto un bambino, e gli angeli che lodavano il Signore, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "La Donna",
                                "ha generato l'eterno Re: onore alla Vergine, gloria alla Madre! Come lei non è stata e non sarà nessuna, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "L'agnelo",
                                "disse ai pastori: Vi annunzio una gioia grande: oggi è nato per voi il Salvatore del mondo, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Il coro degli angeli",
                                "lodava Dio e cantava: Gloria a Dio nell'alto dei cieli, e pace in terra agli uomini che egli ama, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Oggi",
                                "per noi è nato un bambino: Dio, il Forte, è il suo nome, alleluia."
                            ));
                            break;
                        }
                    }
                    if ($this->actual['tempo']=='ves' || $this->actual['tempo']=='ves2' ) {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "A te il regno",
                                "nel giorno della tiua gloria: in splendore e santità Dio ti ha generato prima dell'aurora."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "ha redento il suo popolo: la sua alleanza dura per sempre."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Una luce nelle tenebre",
                                "è sorta per i giusti: il Signore, buono, misericordioso e giusto."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Presso il Signore",
                                "è la misericordia, grande è la sua redenzione."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Cristo,",
                                "nuovo sole del mondo, è Re di luce, di giustizia e di pace."
                            ));
                            break;
                        }
                    }
                }

                elseif  ($this->actual['evCode']=='SAF') {

                    if ($this->actual['tempo']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "L'angelo Gabriele",
                                "fu inviato alla sposa di Giuseppe, la Vergine Maria."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Lo chiamerai Gesù:",
                                "egli infatti salverà il popolo dai suoi peccati, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "gli darà il trono di Davide suo padre, e regnerà in eterno."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Egli è luce",
                                "che illumina le genti, e gloria del tuo popolo, Israele."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "tornò a Nazareth con i suoi, ed era loro sottomesso."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['tempo']=='ves' || $this->actual['tempo']=='ves1' || $this->actual['tempo']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Da Giacobbe",
                                "nacque Giuseppe, sposo di Maria; da lei è nato Gesù, chiamat il Cristo."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Ogni anno,",
                                "per la festa di Pasqua, i genitori di Gesù salivano a Gerusalemme."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "tornò a Nazareth: era docile e obbediente a Giuseppe e a Maria."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "cresceva in età, sapienza e grazia davanti a Dio e agli uomini."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "auando incominciò il suo ministero, aveva circa trent'anni ed era figlio, come si credeva, di Giuseppe, alleluia."
                            ));
                            break;
                        }
                    }
                }
            }
        }
    }

    function draw() {

        //registra il salmo di riferimento per l'antifona
        $ant="";

        foreach ($this->res as $k=>$r) {

            //se la posizione=='' significa che il salmo è una continuazione
            if ($this->salmi[$k][0]!='') {
                $r->drawAntifona(true);
            }

            $r->drawTitolo();

            $r->drawSalmo();

            //se non c'è il gloria significa che il successivo salmo è agganciato
            if ($this->salmi[$k][4]=='G') {

                if ($ant=="") {
                    $r->drawAntifona(false);
                }
                else {
                    $this->res[$ant]->drawAntifona(false);
                    $ant="";
                }
            }
            else {
                if ($ant=='') $ant=$k;
            }
        }

    }
    
}
?>