<?php
class Cantico {

    protected $titolo="";
    protected $antifona=array(
        "antifona1",
        "antifona2"
    );
    protected $testoBase=array();
    protected $tipo;

    protected $gloria=array(
        array('','*','Gloria al Padre e al Figlio'),
        array('','2','e allo Spirito Santo.'),
        array('','*','Come era nel principio, e ora e sempre,'),
        array('','2','nei secoli dei secoli. Amen.')
    );
        

    protected $actual;
    protected $res;

    //definizione di nuovi metodi in maniera dinamica
    //protected $methods = array();
    //protected $closure = array();

    function __construct($caller,$tipo) {

        $this->actual=$caller->actual;
        $this->tipo=$tipo;

        /*if ($this->tag && $this->tag!="") {
            ob_start();
                include(SITE_ROOT.'/salmi/'.$this->tag.'.php');
            ob_end_clean();
        }

        $this->set_closure();

        //definito in CLOSURE
        $this->load();
        */

        $this->res=new Saltesto();
        $this->res->setProp(1,'2','chg','2c');

        switch ($tipo) {
            case "ZAC":
                $this->titolo="Cantico di Zaccaria (Il Messia e il suo Precursore)";
                $this->testoBase=array(
                    array(
                        array('','*',"Benedetto il Signore Dio d'Israele,"),
                        array('','2',"perché ha visitato e redento i suo popolo"),
                        array('','*',"e ha suscitato per noi una salvezza potente"),
                        array('','2',"nella casa di Davide, suo servo,")
                    ),
                    array(
                        array('','*',"come aveva promesso"),
                        array('','2',"per bocca dei suoi santi profeti d'un tempo:"),
                        array('','*',"salvezza dai nostri nemici,"),
                        array('','2',"e dalle mani di quanti ci odiano.")
                    ),
                    array(
                        array('','*',"Così egli ha concesso misericordia ai nostri padri"),
                        array('','2',"e si è ricordato della sua santa allenaza,"),
                        array('','*',"del giuramento fatto ad Abramo, nostro padre,"),
                        array('','2',"di concederci, liberati dalle mani dei nemici,"),
                        array('','*',"di servirlo senza timore, in santità e giustizia"),
                        array('','2',"al suo cospetto, per tutti i nostri giorni.")
                    ),
                    array(
                        array('','*',"E tu, bambino, sarai chiamato profeta dell'Altissimo"),
                        array('','2',"perché andrai innanzi al Signore a preparargli le strade,"),
                        array('','*',"per dare al suo popolo la conoscenza della salvezza"),
                        array('','2',"nella remissione dei suoi peccati,")
                    ),
                    array(
                        array('','*',"grazie alla bontà misericordiosa del nostro Dio,"),
                        array('','2',"per cui verrà a visitarci dall'alto un sole che sorge,"),
                        array('','*',"per rischiarare quelli che stanno nelle tenebre e nell'ombra della morte"),
                        array('','2',"e dirigere i nostri passi sulla via della pace.")
                    )
                );
            break;
            case "MAG":
                $this->titolo="Cantico della B.V.Maria (Esultanza dell'anima nel Signore)";
                $this->testoBase=array(
                    array(
                        array('','*',"L'anima mia magnifica il Signore"),
                        array('','2',"e il mio spirito esulta in Dio, mio salvatore,"),
                        array('','*',"perché ha guardato l'umiltà della sua serva."),
                        array('','2',"D'ora in poi tutte le generazioni mi chiameranno beata.")
                    ),
                    array(
                        array('','*',"Grandi cose ha fatto in me l'Onnipotente"),
                        array('','2',"e santo è il suo nome:"),
                        array('','*',"di generazione in generazione la sua misericordia"),
                        array('','2',"si stende su quelli che lo temono.")
                    ),
                    array(
                        array('','*',"Ha spiegato la potenza del suo braccio,"),
                        array('','2',"ha disperso i superbi nei pensieri del loro cuore;"),
                        array('','*',"ha rovesciato i potenti dai troni,"),
                        array('','2',"ha innalzato gli umili;"),
                        array('','*',"ha ricolmato di beni gli affamati,"),
                        array('','2',"ha rimandato i ricchi a mani vuote.")
                    ),
                    array(
                        array('','*',"Ha soccorso Israele, suo servo,"),
                        array('','2',"ricordandosi della sua misericordia,"),
                        array('','*',"come aveva promesso ai nostri padri,"),
                        array('','2',"ad Abramo e alla sua discendenza, per sempre.")
                    )
                );
            break;
            case "SIM":
                $this->titolo="Cantico di Simeone (Cristo, luce delle genti e gloria d'Israele)";
                $this->testoBase=array(
                    array(
                        array('','*',"Ora lascia, o Signore, che il tuo servo"),
                        array('','2',"vada in pace secondo la tua parola;")
                    ),
                    array(
                        array('','*',"perché i miei occhi han visto la tua salvezza,"),
                        array('','2',"preparata da te davanti a tutti i popoli,")
                    ),
                    array(
                        array('','*',"luce per illuminare le genti"),
                        array('','2',"e gloria del tuo popolo Israele.")
                    )
                );
            break;
        }

        foreach ($this->testoBase as $k=>$b) {
            $this->res->addBlock($b);
        }

        $this->res->addBlock($this->gloria);

        $this->init();

        $this->build();

        $this->build2();

    }

    /*definisce in maniera dinamica nuovi metodi
    public function __call($methodName, array $args) {

        if (isset($this->methods[$methodName])) {
            return call_user_func_array($this->methods[$methodName], $args);
        }

        else {
            $this->titolo='Errore caricamento ';
            //echo "ERRORE inatteso, contattare l'amministratore";
            return false;
        }
    }

    function set_closure() {
        foreach ($this->closure as $key=>$c) {
            $this->methods[$key] = Closure::bind($c, $this, get_class());
        }
    }

    function setAntifona($a) {
        //la funzione dà per scontato che l'antifona iniziale e finale siano uguali
        $this->antifona[0]=$a;
        $this->antifona[1]=$this->antifona[0]; 
    }

    function TPAntifona() {
        //la funzione dà per scontato che l'antifona iniziale e finale siano uguali
        $this->antifona[0]=$this->antifona[0].' Alleluia.';
        $this->antifona[1]=$this->antifona[0]; 
    }
    */

    function init() {

        if ($this->actual['ora']=='comp' || $this->actual['ora']=='comp1') {
            if ($this->actual['tempo']=='P') {
                $this->antifona=array(
                    "Nella veglia",
                    "salvaci, Signore, nel sonno non ci abbandonare: il cuore vegli con Cristo e il corpo riposi nella pace, alleluia."
                );
            }
            else {
                $this->antifona=array(
                    "Nella veglia",
                    "salvaci, Signore, nel sonno non ci abbandonare: il cuore vegli con Cristo e il corpo riposi nella pace."
                );
            }
        }

        //definisci le antifone del Salterio
        elseif ($this->actual['weekDay']==0) {

            switch($this->actual['settimana']) {

                case 2:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Disse",
                                "il Signore a Noè: ho deciso la fine di ogni uomo: fatti un'arca di legno di cipresso per conservare in vita ogni specie di viventi."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "L'amore di Dio",
                                "è stato riversato nei nostri cuori per mezzo dello Spirito Santo che dimora in noi, alleluia."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Colui che verrà",
                                    "era prima di me: e io non sono degno di levargli i sandali e di servirlo."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Parla, o Signore,",
                                    "il tuo servo ti ascolta."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Nozze benedette,",
                                    "in Cana di galilea, dov'era Gesù con Maria, sua madre!"
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Ecco",
                                    "l'Agnello di Dio, che toglie il peccato del mondo, alleluia."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Andrea,",
                                    "fratello di Simon Pietro, fu tra i primi che seguirono il Signore, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Venuto a mancare il vino,",
                                    "Gesù ordinò di riempire le anfore d'acqua; e l'acqua fu mutata in vino, alleluia."
                                );
                            break;
                        }
                    }
                break;

                case 3:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Il Padre",
                                "della nostra fede, il grande Abramo, offrì in olocausto un ariete sull'altare invece del figlio."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Come sono belli",
                                "sui monti i piedi del messaggero di lieti annunzi che annunzia la pace, messaggero di bene che dicde a Sion: Regna il tuo Dio!"
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Convertitevi,",
                                    "dice il Signore: il regno dei cieli è vicino, alleluia."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Convertitevi,",
                                    "e credete al Vamgelo, dice il Signore."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Lo Spirito del Signore",
                                    "è sopra di me: mi ha mandato ad annunziare ai poveri un lieto messaggio."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Seguitemi,",
                                    "dice il Signore, farò di voi pescatori di uomini."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Avete abbandonato",
                                    "ogni cosa per seguirmi: avrete cento volte tanto, e la vita eterna."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Ti ho fatto,",
                                    "luce dei popoli, perché tu porti la mia salvezza sino ai confini della terra."
                                );
                            break;
                        }
                    }
                break;

                case 4:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Giacobbe",
                                "vide in sogno una scala la cui cima raggiungeva il cielo, ed angeli che scendevano, e disse: Questo luogo è veramente sacro, alleluia."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Offriamo i nostri corpi",
                                "come sacrificio vivente, santo e gradito a Dio; portiamo sempre nel nostro corpo la morte di Gesù, perché anche la sua vita si manifesti in noi."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Gesù,",
                                    "vedendo le folle, salì sulla montagna e le ammaestrava dicendo: Beati i poveri in spirito, perché di essi è il regno dei cieli."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Da molti infermi,",
                                    "uscivano demoni gridando: Tu sei il Figlio di Dio. Ma egli sgridandoli non li faceva parlare, poiché sapevano che era il Cristo."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Tutti",
                                    "erano presi da stupore ascoltando le parole di Cristo."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Beati voi,",
                                    "quando vi insulteranno e vi perseguiteranno a causa del Figlio dell'uomo: rallegratevi ed esultate perché grande è la vostra ricompensa nei cieli."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Un grande profeta",
                                    "è sorto in mezzo a noi: Dio ha visitato il suo popolo."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "In verità vi dico:",
                                    "nessun profeta è ascoltato nella sua patria."
                                );
                            break;
                        }
                    }
                break;

                case 5:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Il popolo",
                                "gridò al Faraone per avere il pane, e il Faraone rispose: Andate da Giuseppe."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Io ho piantato,",
                                "Apollo ha irrigato, ma è Dio che ha fatto crescere."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Voi",
                                    "siete luce del mondo : risplendano davanti agli uonmini le vostre opere buone, per la gloria del Padre."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Quanti",
                                    "avevano dei malati, li portavano a Gesù, ed egli li guariva."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Gesù",
                                    "salì sulla barca e, sedutosi, insegnava alle turbe, alleluia."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "La tua luce",
                                    "sorgerà come l'aurora, davanti a te camminerà la tua giustizia e la gloria del Signore ti seguirà."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Da molti infermi",
                                    "uscivano demoni gridando: Tu sei il Figlio di Dio. Ma egli sgridandoli non li faceva parlare, poiché sapevano che era il Cristo."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Tutta la notte",
                                    "abbiamo faticato senza prendere nulla, ma sulla tua parola, Signore, getteremo le reti."
                                );
                            break;
                        }
                    }
                break;

                case 6:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Dio è amore,",
                                "e chi rimane nell'amore rimane in Dio e Dio in lui."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Tutto",
                                "viene da te, o Dio, per la tua parola tutto vive in te, gloria a te nei secoli."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Avete inteso",
                                    "che fu detto agli antichi: Non uccidere; chi avrà ucciso sarà posto a giudizio."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Sceso Gesù",
                                    "dal monte, un lebbroso gli si prostrò davanti dicendo: Signore, se vuoi, puoi sanarmi. E gesù stese la mano e lo toccò dicendo: Lo voglio, sii sanato."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Gesù,",
                                    "vedendo le folle, salì sulla montagna e le ammaestrava dicendo: Beati i poveri in spirito, perché di essi è il regno dei cieli."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Se vuoi",
                                    "che la tua offerta sia gradita al Signore, riconciliati prima con il tuo fratello e poi torna ad offrire il tuo dono."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Signore,",
                                    "se vuoi puoi sanarmi. E Gesù disse: Lo voglio, sii sanato."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Beati voi,",
                                    "quando vi insulterano e vi perseguiteranno a causa del Figlio dell'uomo: rallegratevi ed esultate perché grande è la vostra ricompensa nei cieli."
                                );
                            break;
                        }
                    }
                break;

                case 7:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Siamo saldi",
                                "nella prova: nostra forza è la giustizia di Dio."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Rimangano in voi",
                                "la fede, la speranza e la carità: ma di tutte più grande è la carità."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Da questo",
                                    "sapranno che siete miei discepoli: se avrete amore gli uni per gli altri."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Perchè sappiate",
                                    "che il Figlio dell'uomo ha sulla terra il potere di rimettere i peccati: Alzati, dice al paralitico, prendi il tuo letto e va' a casa tua, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Amate e perdonate",
                                    "come il Padre vostro, dice il Signore."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Amate e perdonate",
                                    "come il Padre vostro, dice il Signore."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Il paralitico",
                                    "si alzò, prese il suo lettuccio, e se ne andò glorificando il Signore: a quella vista la folla, meravigliata, si mise a lodare Iddio."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Non condannate,",
                                    "e non sarete condannati, dice il Signore: come giudicate, così sarete giudicati."
                                );
                            break;
                        }
                    }
                break;

                case 8:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Tre volte",
                                "sono stato percosso con le verghe, una volta sono st<to lapidato, tre volte ho fatto naufragio per il nome di Cristo."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "La grazia di Dio",
                                "in me non fu vana, la grazia di Dio non mi abbandona."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Non angustiatevi",
                                    "dicendo: Che mangeremo, che berremo? Il Padre vostro sa che cosa vi è necessario."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "In verità vi dico:",
                                    "Voi piangerete e vi rattristerete, ma il mondo si rallegrerà; voi sarete afflitti, ma la vostra afflizione si cambierà in gioia, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Guardatevi",
                                    "dai falsi profeti, che vengono a voi in veste di pecore, ma dentro sono lupi rapaci: li riconoscerete dai loro frutti."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Cercate prima",
                                    "il regno di Dio e la sua giustizia: ogni altra cosa vi sarà donata, alleluia."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "La vostra tristezza",
                                    "si cambierà in gioia, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Un albero buono",
                                    "non dà frutti cattivi, né un albero cattivo, frutti buoni. Ogni albero che non dà buon frutto sarà tagliato e gettato nel fuoco."
                                );
                            break;
                        }
                    }
                break;

                case 9:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Colui",
                                "che ha fatto di Pietro un apostolo dei circoncisi, ha fatto di me l'apostolo delle genti: e la grazia che ho ricevuto da Cristo Signore, mi è stata riconosciuta."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Non condannate,",
                                "e non sarete condannati, dice il Signore: come giudicate, così sarete giudicati."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Non chiunque dice:",
                                    "Signore, Signore, entrerà nel regno dei cieli, ma chi fa la volontà del Padre mio che è nei cieli."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Il sabato",
                                    "è stato fatto per l'uomo, e non l'uomo per il sabato."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Ti rendo grazie,",
                                    "Signore, perché mi hai esaudito."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Un uomo saggio",
                                    "ha costruito la sua casa sulla roccia."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Tu sei",
                                    "il mio Dio, e ti ringrazio: il mio Dio, e ti esalto."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "O Signore,",
                                    "non sono degno che tu entri nella mia casa, ma di' soltanto una parola e il mio servo sarà guarito."
                                );
                            break;
                        }
                    }
                break;

                case 10:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Dio",
                                "mi è testimone del profondo affetto che ho per tutti voi nell'amore di Cristo Gesù, e prego che la vostra carità si arricchisca sempre di più."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Va' da coloro,",
                                "a cui ti manderò, dice il Signore: non temere, e annunxia ciò che io ti ordinerò."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Amore voglio,",
                                    "non sacrificio: non sono venuto a chiamare i giusti, ma i peccatori."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Dio",
                                    "disse al serpente: Porrò inimicizia fra te e la donna, fra la tua stirpe e la sua: questa ti schiaccerà il capo, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Alle porte di Naim",
                                    "Gesù conforta una madre vedova: Donna, non piangere."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Non ricordare,",
                                    "Signore, le mie colpe, né quelle dei miai padri: non punirmi per i miei peccati."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Se io scaccio i demoni",
                                    "con la forza di Dio, il suo regno è venuto tra voi, dice il Signore."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Un grande profeta",
                                    "è sorto in mezzo a noi: Dio ha visitato il suo popolo."
                                );
                            break;
                        }
                    }
                break;

                case 11:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "La forza invincibile",
                                "del tuo amore, Signore, sia per noi come un muro di difesa, e ci protegga sempre la potenza del tuo braccio."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Il giovane Samuele",
                                "serviva il Signore sotto la guida di Eli. La parola del Signore non era frequente in quei giorni."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Pregate",
                                    "il padrone della messe che mandi operai nella sua messe."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Il regno dei cieli",
                                    "è come un granello di senapa, che è il più piccolo di tutti i semi, ma una volta cresciuto diviene più grande di tutti gli ortaggi."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Una donna,",
                                    "nota in città per la sua vita dissoluta, venne ai piedi di Gesù; piangendo cominciò a bagnarli di lacrime, li asciugava con i suoi capelli, li baciava e li cospargeva di olio profumato."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Gesù,",
                                    "chiamati a sé i dodici, diede loro autorità su tutti i demoni e il potere di curare le malattie, li mandò a predicare il regno di Dio e a sanare gli infermi, alleluia."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Nascosto",
                                    "in un pugno di farina, il lievito la fermenta e la fa crescere. Così è il regno dei cieli."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Una donna,",
                                    "nota in città per la sua vita dissoluta, venne ai piedi di Gesù; piangendo cominciò a bagnarli di lacrime, li asciugava con i suoi capelli, li baciava e li cospargeva di olio profumato."
                                );
                            break;
                        }
                    }
                break;

                case 12:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Cristo,",
                                "nuovo sole del mondo, è Re di luce, di giustizia e di pace."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Parla, o Signore,",
                                "il tuo servo ti ascolta."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Anche i vostri capelli",
                                    "sono contati, non abbiate timore: voi valete più di molti passeri."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Salito Gesù",
                                    "su una barca, ecco scatenarsi nel mare una violenta tempesta: Salvaci, Signore, siamo perduti!"
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Era necessario",
                                    "che il Cristo patisse per risorgere dai mirti, alleluia."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Chi mi riconoscerà",
                                    "davanti agli uomini, anch'io lo riconoscerò davanti al Padre mio."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Salvaci, Signore,",
                                    "siamo perduti: comanda, e tornerà la bonaccia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Chi vuol venire",
                                    "dietro a me, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua."
                                );
                            break;
                        }
                    }
                break;

                case 13:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Nel tuo amore",
                                "fa' grazia a Sion, rialza le mura di Gerusalemme."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Tutto Israele,",
                                "da Dan fino a Bersabea, seppe che Samuele era stato costituito profeta del Signore."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Chi odia",
                                    "la sua vita in questo mondo, la conserva per la vita eterna."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "La donna",
                                    "diceva tra sè: Se riuscirò anche solo a toccare il suo mantello, sarò salva."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Avete abbandonato",
                                    "ogni cosa per seguirmi: avrete cento volte tanto, e la vita eterna."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Chi vuol venire",
                                    "dietro a me, rinneghi se stesso, prenda la sua corce ogni giorno e mi segua."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Gesù",
                                    "si voltò e vedendola disse: Abbi fiducia, figlia, la tua fede ti ha salvato, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Le volpi",
                                    "hanno tane e nidi gli uccelli del cielo: il Figlio dell'uomo invece non ha dove reclinare il capo."
                                );
                            break;
                        }
                    }
                break;

                case 14:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Ascolta figlio,",
                                "la parola di tuo padre, ricorda gli insgnamenti di tua madre: conservali nel tuo cuore."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Davide",
                                "ebbe il sopravvento sul Filisteo, con la fionda e con la pietra, nel nome del Signore."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Venite a me,",
                                    "voi tutti che siete affaticati e oppressi, e io vi ristorerò."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Molti",
                                    "si stupivano di Cristo: Chi gli ha dato tanta sapienza?"
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Pregate",
                                    "il padrone della messe che mandi operai nella sua messe."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Imparate da me,",
                                    "mite ed umile di cuore."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "In verità vi dico:",
                                    "Nessun profeta è ascoltato nella sua patria."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Nostra gloria",
                                    "è la croce del Signore Gesù, alleluia."
                                );
                            break;
                        }
                    }
                break;

                case 15:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "In tutti questi eventi",
                                "Giobbe non disse nulla di insensato contro Dio, e non peccò."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "O monti di Gelboe,",
                                "non più riìugiada né pioggia su di voi, perché qui fu abbattuto lo scudo degli eroi, lo scudo di Saul, quasi non fosse il consacrato. Perché caddero in battaglia gli eroi? Gionata è stato ucciso sulle sue alture: Saul e Gionata, amabili e gentili, né in vita né in morte furono divisi."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Il seme",
                                    "è la parola di Dio, Cristo è il seminatore: chi lo accoglie, vive in eterno."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Chiamati a sé",
                                    "i dodici apostoli, Gesù diede loro potere e autorità su tutti i demoni, e li mandò ad annunziare il regno di Dio e a guarire gli infermi, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Maestro",
                                    "che devo fare per possedere la vita eterna? Gesù gli disse: Che cosa è scritto nella legge? Amerai il Signore Dio tuo con tutto il tuo cuore."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "A coi è dato,",
                                    "conoscere i misteri del regno di Dio; agli altri invece per mezzo di parabole."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "I discepoli partirono;",
                                    "predicavano la conversione alle genti; ungevano con olio molti infermi e li guarivano."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Un uomo",
                                    "scendeva da Gerusalemme a Gerico e s'imbattè nei briganti che lo spogliarono, lo percossero e se ne andarono, lasciandolo gravemente ferito."
                                );
                            break;
                        }
                    }
                break;

                case 16:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Giobbe",
                                "sopportò ogni cosa con pazienza e disse: Se abbiamo accolto dalla mano del Signore i beni, perché non sopporteremo i mali? In tutti questi eventi Giobbe non disse nulla di insensato contro Dio, e non peccò."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Il sacerdote Zadok",
                                "e il profeta Nathan conscrarono re Salomone in Ghicon; quindi risalirono esultanti e acclamarono: Viva il re in eterno!"
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Signore,",
                                    "non hai seminato del buon seme nel tuo campo? da dove viene dunque la zizzania? Un nemico ha fatto questo."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Io sono",
                                    "il buon Pastore: sono la via, la verità e la vita. Conosco i miei ed essi conoscono me, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Il seme",
                                    "è la parola di Dio, Cristo è il seminatore: chi lo accoglie, vive in eterno."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Cogliete prima,",
                                    "la zizzania e legatla in fastelli per bruciarla; il grano invece riponetelo nel mio granaio, dice il Signore."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Il mio gregge",
                                    "riconosce la mia voce: e io, il Signore, conosco tutte le mie pecore."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Coloro",
                                    "che ricevono la parole di Dio in un cuore ben disposto, portano frutto con perseveranza."
                                );
                            break;
                        }
                    }
                break;

                case 17:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Liberami, Signore,",
                                "prendimi vicino a te: non temerò chi mi combatte."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Desideravo",
                                "edificarti un tempio e tu, Signore, hai esaudito la mia preghiera."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Il regno dei cieli",
                                    "è simile a un mercante in cerca di perle preziose; trovata una perla di grande valore, vende tutti i suoi averi e la compra."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Gesù",
                                    "vide una grande folla e disse a Filippo: Dove compreremo il pane perché tutti abbiano da mangiare? Diceva così per metterlo alla prova: egli infatti sapeva bene quello che stava per fare."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Chiedete",
                                    "e vi sarà dato; cercate e troverete; bussate e vi sarà aperto, alleluia."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Trovata,",
                                    "una perla preziosa, vende tutti i suoi averi e la compra."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "La gente,",
                                    "visto il miracolo che Gesù aveva compiuto, diceva tra sé: Questi è davvero il profeta che deve venire nel mondo, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Chiedete",
                                    "e vi sarà dato, affinché la vostra gioia sia piena: il Padre stesso vi ama, perché mi avete amato e avete creduto, alleluia."
                                );
                            break;
                        }
                    }
                break;

                case 18:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Il Signore",
                                "saziò cinquemila uomini con cinque pani e due pesci."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Ecco",
                                "io mando il mio messaggero a prepare la via davanti a te."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Molta folla",
                                    "era con Gesù, ed egli, chiamati a sé i discepoli, disse: Ho compassione di questa folla: già da tre giorni mi seguono e non hanno da mangiare."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Procuratevi",
                                    "un cibo che non si corrompe, ma che dura per la vita eterna."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Chi vuole",
                                    "essere ricco cerchi le ricchezze più vere."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Ho comopassione",
                                    "di questa folla: già da tre giorni mi seguono e non hanno da mangiare; se li rimando digiuni verranno meno per via."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Pane di Dio",
                                    "è colui che scende dal cielo e dà la vita al mondo, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Procuratevi",
                                    "tesori in cielo, dove né tignola, né ruggine consumano."
                                );
                            break;
                        }
                    }
                break;

                case 19:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Rallegrati,",
                                "esulta, santa città di Dio: a te viene il tuo Re. Non temere: la tua salvezza è vicina."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Mentre il Signore",
                                "traeva Elia nel turbine verso il cielo , Eliseo lo vide e si mise a invocarlo: Padre mio, padre mio."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Per la violenza del vento",
                                    "Pietro s'impaurì e, cominciando ad affondare, gridò: Signore, salvami!"
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Io sono",
                                    "il pane vivo disceso dal cielo: chi mangia di questo pane vivrà in eterno."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Beato quel servo",
                                    "che il padrone, al suo ritorno, troverà vigilante."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Salvaci,",
                                    "Cristo Salvatore, per la forza della croce. Tu che hai salvato Pietro dalle acque, abbi pietà di noi!"
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Io sono",
                                    "il poane vivo deisceso dal cielo: chi mangia di questo pane vivrà in eterno; il pane che io darò è la mia carne per la vita del mondo."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Siate pronti",
                                    "con le lampade acccese, aspettando il Signore che viene."
                                );
                            break;
                        }
                    }
                break;

                case 20:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Non angustiatevi",
                                "dicendo: Che mangeremo, che berremo? Il Padre vostro sa che cosa vi è necessario."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Sono stati scelti",
                                "nel Cristo prima della creazione del mondo, per essere santi e immaolati davanti a Dio nella carità."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Gesù",
                                    "si diresse verso le parti di Tiro e Sidone: ed ecco una donna cananea, che veniva da quelle regioni, si mise a gridare: Pietà di me, Signore, Figlio di Davide."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Io sono",
                                    "il pane vivo deisceso dal cielo: chi mangia di questo pane vivrà in eterno."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Perseverate,",
                                    "e salverete la vostra vita."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "O donna,",
                                    "davvero grande è la tua fede! Ti sia fatto come desideri."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "La mia carne",
                                    "è vero cibo, il mio sangue è vera bevanda. Chi mangia la mia carne e beve il mio sangue rimane in me, e io in lui."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Ho portato sulla terra",
                                    "il fuoco dell'amore: come vorrei che divampasse in tutto il mondo!"
                                );
                            break;
                        }
                    }
                break;

                case 21:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Sforziamoci",
                                "di vivere con sobrietà, giustizia e pietà in questo mondo, nell'attesa della beata speranza dell'incontro col Signore."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Il Signore",
                                "ci ha sccelti a lode e gloria della sua grazia: Riempi, Signore, i nostri cuori del tuo Santo Spirito."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Tu sei Pietro,",
                                    "e su questa pietra edificherò la mia Chiesa."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Io sono la via,",
                                    "la verità e la vita: nessuno viene al Padre se non per me, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Verranno a te",
                                    "quelli che ti disprezzavano, e si prostreranno ai tuoi piedi."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Tutto ciò",
                                    "che avrai legato sulla terra sarà legato anche nei cieli, e tutto ciò che avrai sciolto sulla terra sarà sciolto anche nei cieli, dice il Signore a Simon Pietro."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Chi segue me",
                                    "non cammina nelle tenebre, ma avrà la luce della vita, dice il Signore."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Molti",
                                    "verranno da oriente e da occidente, e siederanno con Abramo vostro padre alla tavola del regno."
                                );
                            break;
                        }
                    }
                break;

                case 22:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "So bene",
                                "a chi ho creduto, e sono convinto che egli, giudice giusto, è capace di conservare fino a quel giorno il deposito che mi è stato affidato."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Preparati,",
                                "o Israele, ad incontrare il Signore."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Offriamo i nostri corpi",
                                    "come sacrificio vivente, santo e gradito a Dio; portiamo sempre nel nostro corpo la morte di Gesù, perché anche la sua vita si manifesti in noi."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Il Signore",
                                    "apra il vostro cuore alla sua legge e ai suoi comandi, e vi conceda la pace."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Siamo venuti",
                                    "al monte santo, alla città del Dio vivente."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Chi vuol venire",
                                    "dietro a me, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Ascoltate",
                                    "e comprendete le tradizioni che il Signore vi ha dato."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Quando",
                                    "sei invitato a nozze, va' a sederti all'ultimo posto, perché chi ti ha invitato ti dica: Amico, sali più su: e ne avrai onore agli occhi di tutti i commensali, alleluia."
                                );
                            break;
                        }
                    }
                break;

                case 23:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Ed ecco",
                                "una voce dal cielo che disse: Questi è il Figlio mio prediletto, nel quale mi sono compiaciuto. Ascoltatelo!"
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Ecco,",
                                "metto le mie parole sulla tua bocca, e ti costituisco sopra i popoli e sopra i regni."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Se due di voi",
                                    "si accorderanno per domandare qualunque cosa, il Padre mio ve la concederà, dice il Signore."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Ha fatto bene",
                                    "ogni cosa: fa udire i sordi e fa parlare i muti."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Chi odia",
                                    "la sua vita in questo mondo, la conserva per la vita eterna."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Dove",
                                    "due o tre sono riuniti nel mio nome, io sono in mezzo a loro, dice il Signore."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Ha fatto bene",
                                    "ogni cosa: fa udire i sordi e fa parlare i muti."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Chi vuol venire",
                                    "dietro a me, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua."
                                );
                            break;
                        }
                    }
                break;

                case 24:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Signore,",
                                "Re onnipotente, tutte le cose dipendono falla tua parola: nessuno può resistere alla tua volontà."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Per il grande amore",
                                "con il quale ci ha amati, Dio mandò il suo Figlio in una carne simile a quella del peccato."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Disse",
                                    "il padrone al servo: Rendimi quello che mi devi, il servo, gettandosi a terra, lo supplicava dicendo: Abbi pazienza con me e ti renderò tutto."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Non ho sottratto",
                                    "la mia faccia agli insulti e agli sputi."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Chi di voi",
                                    "se ha cento pecore e ne perde una, non lascia le novantanove nel deserto e va in cerca di quella perduta, finché non la ritrova?"
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Servo malvagio!",
                                    "Io ti ho condonato tutto il debito perché mi avevi supplicato. Non dovevi dunque anche tu aver pietà del tuo compagno, come io ho avuto pietà di te?"
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Chi vuol venire",
                                    "dietro a me, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Quale donna",
                                    "se ha dieci dramme e ne perde una, non accende la lucerna e spazza la casa e cerca attentamente finché non la ritrova?"
                                );
                            break;
                        }
                    }
                break;

                case 25:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Non ricordare,",
                                "Signore, le mie colpe, non punirmi per i miei peccati."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Vidi il Signore",
                                "seduto su un trono alto ed elevato; tutta la terra era piena della sua gloria e i lembi del suo manto riempivano il tempio."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Il regno dei cieli",
                                    "è simile a un padrone che uscì all'alba per cercare operai per la sua vigna."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Il Figlio dell'uomo",
                                    "sarà consegnato ai pagani per essere schernito, flagellato e crocifisso."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Disse",
                                    "il padrone al suo fattore: Cosa sento dire di te? rendi conto della tua amministrazione."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Il padrone",
                                    "disse agli operai: Perché ve ne state tutto il giorno in ozio? Perché nessuno ci ha assunto. Andate anche voi nella mia vigna, e vi darò ciò che è giusto."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Il primo tra voi",
                                    "serva i fratelli, perché chi si esalta sarà umiliato, dice il Signore."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Che farò ora",
                                    "che il padrone mi toglie l'amministrazione? Zappare? non ne ho la forza. Mendicare? mi vergogno. So io cosa farò, perché quando mi sarà tolta l'amministrazione qualcuno mi accolga in casa sua."
                                );
                            break;
                        }
                    }
                break;

                case 26:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Signore Dio,",
                                "tu hai dato la salvezza per mano di una donna: ascolta la peghiera dei tuoi servi."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Ricordati,",
                                "te ne prego, Signore, che ho camminato davanti a te con fedeltà e cuore integro, e che ho compiuto quello che è bene ai tuoi occhi."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Non chiunque dice:",
                                    "Signore, signore, entrerà nel regno dei cieli, ma chi fa la volontà del Padre mio che è nei cieli."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Chi non raccoglie",
                                    "con me, disperde: e chi non è con me, è contro di me."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Figlio,",
                                    "nella vita godevi i tuoi beni, mentre Lazzaro soffriva: ora lui è nella gioia, e tu nei tormenti."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Convertitevi,",
                                    "dice il Signore: il regno dei cieli è vicino, alleluia."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Se cercate",
                                    "di giungere al culmine del vero onore, correte con impegno verso la patria celeste."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Una goccia d'acqua",
                                    "chiese quel ricco, che a Lazzaro aveva negato le briciole di pane."
                                );
                            break;
                        }
                    }
                break;

                case 27:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Ogni sapienza",
                                "viene dal Signore ed è con lui da sempre e per sempre."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Vedi, Signore,",
                                "la mia oppressione: il mio nemico trionfa."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "I malvagi",
                                    "saranno perduti; il Signore consegnerà la sua vigna ad altri che gli daranno i frutti a suo tempo."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Lasciate",
                                    "che i piccoli vengano a me: a loro appartiene il regno di Dio."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "O donna,",
                                    "davvero grande è la tua fede! ti sia fatto come desideri."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Chi è da Dio,",
                                    "ascolta la parola di Dio; voi non l'ascoltate, perché non siete da Dio."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Procuratevi",
                                    "tesori in cielo, dove né tignola né ruggine consumano."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Gesù",
                                    "si fermò, comandò che gli conducessero il cieco e gli disse: Che vuoi che io faccia per te? Signore, che io veda! Gesù gli disse: Vedi! la tua fede ti ha salvato. E subito vide e lo seguì, glorificando Dio."
                                );
                            break;
                        }
                    }
                break;

                case 28:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Ho posto",
                                "la mia dimora nel cielo, il mio trono su una colonna di nubi."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "La mano del Signore",
                                "è su di me: toccò la mia bocca e mi fece profeta per le nazioni."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Dite agli invitati:",
                                    "Ecco, ho preparato il mio banchetto, venite alle nozze, alleluia."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Avete abbandonato",
                                    "ogni cosa per seguirmi: avrete cento volte tanto, e la vita eterna."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Entrando Gesù",
                                    "in un villaggio, gli vennero incontro dieci lebbrosi, e, fermatisi a distanza, gli gridarono: Gesù Maestro, abbi pietà di noi!"
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Entrò il re",
                                    "per vedere i commensali, e vide un uomo che non indossava l'abito di nozze, e gli disse: Amico, come mai sei entrato senza la veste nuziale?"
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Non angustiatevi",
                                    "dicendo: Che mangeremo, che berremo? Il Padre vostro sa che cosa vi è necessario."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Uno dei lebbrosi,",
                                    "guarito da Gesù, ritornò da lui acclamando: Gloria a Dio! alleluia."
                                );
                            break;
                        }
                    }
                break;

                case 29:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Ricompensa, Signore,",
                                "quelli che sperano in te; i tuoi profeti siano degni di fede."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Dio",
                                "verrà dall'alto, e splenderà come il sole."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Maestro,",
                                    "sappiamo che sei veritiero e insegni con verità la via di Dio."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "È stato offerto",
                                    "perché lo ha voluto; è lui che ha portato le nostre colpe."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Quando",
                                    "il Figlio dell'uomo verrà, troverà ancora fede sulla terra?"
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Rendete a Cesare",
                                    "quello che è di Cesare, e a Dio quello che è di Dio."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Chi mi vuol servire,",
                                    "mi segua: e dove sono io, là sarà anche il mio servo."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Finora",
                                    "non avete chiesto nulla nel mio nome: chiedete ed otterrete, alleluia."
                                );
                            break;
                        }
                    }
                break;

                case 30:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Pregai",
                                "e mi fu elargita la prudenza, implorai e venne in me lo spirito di sapienza."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Il mio cuore",
                                "si fonde come cera, tremano tutte le mie ossa."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Questo",
                                    "è il comandamento più grande: Ama il Signore tuo Dio con tutto il cuore, alleluia."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Figlio di Davide,",
                                    "abbi pietà di me! Che vui che io faccia per te? Signore, che io veda!"
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "In fondo al tempio,",
                                    "con gli occhi bassi, il pubblicano si batteva il petto: O Dio, pietà di me peccatore!"
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Maestro,",
                                    "che devo fare per possedere la vita eterna? Gesù gli disse: Che cosa è scritto nella legge? Amerai il Signore Dio tuo con tutto il tuo cuore."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Gesù",
                                    "si fermò, comandò che gli conducessero il cieco e gli disse: Che vuoi che io faccia per te? Signore, che io veda! Gesù gli disse: Vedi! la tua fede ti ha salvato. E subito vide e lo seguì, glorificando Dio."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Questi",
                                    "tornò a casa sua giustificato, a differenza dell'altro: perché chi si esalta sarà umiliato, e chi si umilia sarà esaltato."
                                );
                            break;
                        }
                    }
                break;

                case 31:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Hai nutrito",
                                "il tuo popolo con il cibo degli angeli, gli hai dato pane dal cielo, alleluia."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Vedi, Signore,",
                                "la mia oppressione: il mio nemico trionfa."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Uno solo",
                                    "è il vostro Maestro, che è nei cieli: Cristo Signore."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Questo",
                                    "è il comandamento più grande: Ama il Signore tuo Dio con tutto il cuore, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Zaccheo,",
                                    "scendi subito, oggi devo fermarmi a casa tua. Scese e accolse il Signore con grande gioia. Oggi la salvezza è entrata in questa casa, alleluia."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Voi",
                                    "siete tutti fratelli: uno solo è il vostro Padre, che è nei cieli, uno solo il vostro Maestro: Cristo."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Maestro,",
                                    "che devo fare per possedere la vita eterna? Gesù gli disse: Che cosa è scritto nella legge? Amerai il Signore Dio tuo con tutto il tuo cuore."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Ho altre pecore",
                                    "che non sono di questo ovile: anche queste io devo condurre; ascolteranno la mia voce e siu avrà un solo gregge e un solo pastore."
                                );
                            break;
                        }
                    }
                break;

                case 32:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Quando",
                                "vedrete innalzato nel luogo santo l'abominio della desolazione di cui parlò il profeta Daniele, cercate di intendere il senso delle scritture."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Guardatevi",
                                "dai falsi profeti, che vengono a voi in veste di pecore, ma dentro sono lupi rapaci: li riconoscerete dai loro frutti."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Vergini sagge,",
                                    "preparate le lampade; viene lo Sposo, andategli incontro."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Quella povera vedova",
                                    "ha gettato nel tesoro più di tutti gli altri, poiché vi ha messo tutto quello che aveva."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Ti rendo grazie,",
                                    "Signore, perché mi hai esaudito."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "A mezzanotte",
                                    "si leva un grido: Ecco lo Sposo, andategli incontro."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Io sono",
                                    "il Dio dei vostri padri, dice il Signore; ho visto la miseria del mio popolo, ho udito il suo grido, e sono sceso a liberarlo."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Il vostro Dio",
                                    "è Dio dei vivi, non dei morti: tutti vivono per lui, alleluia."
                                );
                            break;
                        }
                    }
                break;

                case 33:
                    if ($this->actual['ora']=="ves1") {
                        if($this->actual['pari']) {
                            $this->antifona=array(
                                "Tu sorreggi",
                                "i cieli, o Signore, e scruti il fondo degli abissi; soppesi i monti e tieni la terra nella tua mano: ascoltaci, Signore, nel nostro lamento."
                            );
                        }
                        else {
                            $this->antifona=array(
                                "Io sono",
                                "il buon Pastore: conduco al pascolo le mie pecore, e per loro do la mia vita, alleluia."
                            );
                        }
                    }
                    elseif ($this->actual['ora']=="lodi") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Signore,",
                                    "mi hai dato cinque talenti; ne ho guadagnati altri cinque."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "Vedranno",
                                    "il Figlio dell'uomo venire con grande potenza e gloria, alleluia."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Perseverate,",
                                    "e salverete la vostra vita."
                                );
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                        switch($this->actual['anno']) {
                            case 'A':
                                $this->antifona=array(
                                    "Bene,",
                                    "servo buono: sei stato fedele nel poco, entra nella gioia del tuo Signore, alleluia."
                                );
                            break;
                            case 'B':
                                $this->antifona=array(
                                    "In verità vi dico:",
                                    "Non passerà questa generazione prima che tutto questo accada: il cielo e la terra passeranno, ma le mie parole non passeranno, dice il Signore."
                                );
                            break;
                            case 'C':
                                $this->antifona=array(
                                    "Vi consegneranno",
                                    "ai sinedri, vi flagelleranno nelle loro sinagoghe, e sarete condotti, per causa mia, davanti a governatori e re, per dare testimonianza a loro e alle genti."
                                );
                            break;
                        }
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==1) {
            if ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Benedetto",
                    "il Signore! Ha visitato e redento il suo popolo."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "Con tutta l'anima",
                    "glorifico il Signore: umile e povera egli mi ha guardata."
                );
            }
        }

        elseif ($this->actual['weekDay']==2) {
            if ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "O Signore,",
                    "hai suscitato una salvezza potente, nella casa di Davide tuo servo."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "Il mio spirito",
                    "esulta in Dio, mio salvatore."
                );
            }
        }

        elseif ($this->actual['weekDay']==3) {
            if ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Concedi misericordia,",
                    "Signore, ricorda la tua alleanza con Abramo."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "Ha fatto di me",
                    "cose grandi colui che è potente, e Santo è il suo nome."
                );
            }
        }

        elseif ($this->actual['weekDay']==4) {
            if ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Dà al tuo popolo,",
                    "Signore, la conoscenza della salvezza e il perdono dei peccati."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "Il Signore",
                    "ha rovesciato i potenti dai troni, ha innalzato gli umili."
                );
            }
        }

        elseif ($this->actual['weekDay']==5) {
            if ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Per la grande bontà",
                    "del nostro Dio, ci ha visitato il sole che sorge dall'alto."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "Ricordati,",
                    "o Dio, del tuo amore, come hai promesso ai nostri padri."
                );
            }
        }

        elseif ($this->actual['weekDay']==6) {
            if ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Illumina, Signore,",
                    "quelli che stanno nelle tenebre, e guida i nostri passi nella via della pace."
                );
            }
        }
    }

    //################################################################################
    //################################################################################

    function build() {

        if ($this->actual['tempo']=='A') {

            if ($this->actual['settimana']==1) {
                switch($this->actual['weekDay']) {
                    case 0:
                        if ($this->actual['ora']=="ves1") {
                            $this->antifona=array(
                                "Ecco",
                                "venire da lontano il Signore: il suo splendore riempie l'universo."
                            );
                        }
                        elseif ($this->actual['ora']=="lodi") {
                            switch($this->actual['anno']) {
                                case 'A':
                                    $this->antifona=array(
                                        "Convertitevi,",
                                        "dice il Signore: il regno dei cieli è vicino, alleluia."
                                    );
                                break;
                                case 'B':
                                    $this->antifona=array(
                                        "Beato quel servo",
                                        "che il padrone, al suo ritorno, troverà vigilante."
                                    );
                                break;
                                case 'C':
                                    $this->antifona=array(
                                        "Alzatevi",
                                        "e levate il capo: la vostra redenzione è vicina."
                                    );
                                break;
                            }
                        }
                        elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                            switch($this->actual['anno']) {
                                case 'A':
                                    $this->antifona=array(
                                        "Lo Spirito Santo",
                                        "scenderà su di te, Maria: non temere, concepirai nel tuo grembo il Figlio di Dio, alleluia."
                                    );
                                break;
                                case 'B':
                                    $this->antifona=array(
                                        "Vigilate:",
                                        "il Signore nostrto è vicino."
                                    );
                                break;
                                case 'C':
                                    $this->antifona=array(
                                        "Maria,",
                                        "non temere, hai trovato grazia presso Dio: concepirai e darai alla luce un figlio, alleluia."
                                    );
                                break;
                            }
                        }
                    break;

                    case 1:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Alza gli occhi,",
                                "Gerusalemme, vedi la potenza del tuo Re: ecco, il Salvatore viene a liberarti."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "L'angelo del Signore",
                                "portò l'annunzio a Maria: e la Vergine cocepì dallo Spirito Santo, alleluia."
                            );
                        }
                    break;

                    case 2:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Spunterà",
                                "un germoglio dal tronco di Iesse: la terra sarà piena della gioia del Signore, ogni uomo vedrà la salvezza di Dio."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Cercate il Signore,",
                                "ora che si fa trovare; invocatelo, ora che è vicino, alleluia."
                            );
                        }
                    break;

                    case 3:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Egli",
                                "è il mio Dio e lo voglio lodare, è il Diodi mio padre e lo voglio esaltare!"
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Dal cielo,",
                                "verrà il Signore, il Dominatore: nelle sue mani il potere e la gloria."
                            );
                        }
                    break;

                    case 4:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Aspetto il Signore,",
                                "egli mi salverà; spero in lui, ora che è vicino, alleluia."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Benedetta",
                                "sei tu fra le donne, e benedetto il frutto del tuo seno."
                            );
                        }
                    break;

                    case 5:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Verrà",
                                "dalla casa di Davide Dio fatto uomo, e regnerà su di noi, alleluia."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Ho chiamato",
                                "dall'Egitto mio Figlio: verrà a salvare il suo popolo."
                            );
                        }
                    break;

                    case 6:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Fiumi d'acqua viva",
                                "sgorgheranno da Gerusalemme, e il Signore regnerà su tutta la terra."
                            );
                        }
                    break;
                }
            }

            elseif ($this->actual['settimana']==2) {
                switch($this->actual['weekDay']) {
                    case 0:
                        if ($this->actual['ora']=="ves1") {
                            $this->antifona=array(
                                "Vieni, Signore,",
                                "a visitarci nella pace: con cuore nuovo faremo festa per te."
                            );
                        }
                        elseif ($this->actual['ora']=="lodi") {
                            switch($this->actual['anno']) {
                                case 'A':
                                    $this->antifona=array(
                                        "Ecco,",
                                        "io mando il mio messaggero a preparare la via davanti a te."
                                    );
                                break;
                                case 'B':
                                    $this->antifona=array(
                                        "Nel deserto",
                                        "una voce grida: Preparate la via del Signore, appianate la strada per il nostro Dio."
                                    );
                                break;
                                case 'C':
                                    $this->antifona=array(
                                        "Nel deserto",
                                        "una voce grida: Preparate la via del Signore, appianate la strada per il nostro Dio."
                                    );
                                break;
                            }
                        }
                        elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                            switch($this->actual['anno']) {
                                case 'A':
                                    $this->antifona=array(
                                        "Nel deserto",
                                        "una voce grida: Preparate la via del Signore, appianate la strada per il nostro Dio."
                                    );
                                break;
                                case 'B':
                                    $this->antifona=array(
                                        "Verrà",
                                        "uno più forte di me; io non sono degno di levargli i sandali e di servirlo."
                                    );
                                break;
                                case 'C':
                                    $this->antifona=array(
                                        "Te beata,",
                                        "o Maria, che hai creduto: in te si compie la parola del Signore, alleluia."
                                    );
                                break;
                            }
                        }
                    break;

                    case 1:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Convertitevi,",
                                "dice il Signore: il regno dei cieli è vicino, alleluia."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Ecco,",
                                "viene il Re, il Signore del mondo: spezzerà il giogo della nostra schiavitù."
                            );
                        }
                    break;

                    case 2:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Esulta di gioia,",
                                "figlia di Sion, dice il Signore: ecco, io vengo ad abitare in mezzo a te."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "In Sion",
                                "darò la salvezza, stabilirò in Gerusalemme la mia gloria, alleluia."
                            );
                        }
                    break;

                    case 3:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Sul trono di Davide",
                                "il Messia regnerà in eterno, alleluia."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Sarai rinnovata,",
                                "città di Dio; vedrai il Giusto che viene in te."
                            );
                        }
                    break;

                    case 4:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Tra i nati di di donna",
                                "non è sorto uno più grande di Giovanni Battista."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Viene",
                                "la tua luce, Gerusalemme: su di te risplende la gloria del Signore."
                            );
                        }
                    break;

                    case 5:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "A chi è sfiduciato,",
                                "dite: Coraggio! Viene il Signore nostro Dio."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Attingerete con gioia",
                                "alle sorgenti della salvezza."
                            );
                        }
                    break;

                    case 6:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Alto",
                                "fra i popoli, Dio eleverà il suo vessillo, e raccoglierà i dispersi d'Israele."
                            );
                        }
                    break;
                }
            }

            elseif ($this->actual['settimana']==3) {
                switch($this->actual['weekDay']) {
                    case 0:
                        if ($this->actual['ora']=="ves1") {
                            $this->antifona=array(
                                "O Angelo di Dio,",
                                "come avverrà questo poiché non conosco uomo? Ascolta, Maria: Lo Spirito Santo verrà su di te e la potenza dell'Altissimo ti adombrerà."
                            );
                        }
                        elseif ($this->actual['ora']=="lodi") {
                            switch($this->actual['anno']) {
                                case 'A':
                                    $this->antifona=array(
                                        "Giovanni",
                                        "dal carcere, conosciute le opere del Cristo, mandò a chiedergli: Sei tu il Messia che deve venire?"
                                    );
                                break;
                                case 'B':
                                    $this->antifona=array(
                                        "Lo Spirito del Signore",
                                        "è sopra di me: mi ha mandato ad annunziare ai poveri un lieto messaggio."
                                    );
                                break;
                                case 'C':
                                    $this->antifona=array(
                                        "Viviamo",
                                        "con giustizia e con fede, aspettando la beata speranza e la venuta del Signore."
                                    );
                                break;
                            }
                        }
                        elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                            switch($this->actual['anno']) {
                                case 'A':
                                    $this->antifona=array(
                                        "Sei tu",
                                        "colui che deve venire, o dobbiamo attendere un altro? Dite a Giovanni quello che vedete: I ciechi ritrovano la luce, risorgono i morti, il Vangelo è annunziato ai poveri, alleluia."
                                    );
                                break;
                                case 'B':
                                    $this->antifona=array(
                                        "Nel deserto",
                                        "una voce grida: Preparate la via del Signore, appianante la strada per il nostro Dio."
                                    );
                                break;
                                case 'C':
                                    $this->antifona=array(
                                        "Verrà",
                                        "uno più forte di me; io non sono degno di levargli i sandali e di servirlo."
                                    );
                                break;
                            }
                        }
                    break;

                    case 1:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Dal cielo",
                                "verrà il Signore, il Dominatore: nelle sue mani il potere e la gloria."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Tutti i secoli",
                                "mi diranno beata: Dio ha guardato la sua umile serva."
                            );
                        }
                    break;

                    case 2:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Destati",
                                "e sorgi, Gerusalemme: spezza il giogo che ti fa schiava, figlia di Sion."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Prima",
                                "che andassero a vivere insieme, Maria si trovò incinta per opera dello Spirito Santo, alleluia."
                            );
                        }
                    break;

                    case 3:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Coraggio,",
                                "mio popolo, dice il Signore, il tuo Dio."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Sei tu, Signore,",
                                "colui che aspettiamo: tu vieni a salvare il tuo popolo."
                            );
                        }
                    break;

                    case 4:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "Alzati,",
                                "sorgi, braccio del Signore, rivesti la tua forza invincibile."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Rallegratevi",
                                "con Gerusalemme: tutti voi che l'amate, trasalite di gioia!"
                            );
                        }
                    break;

                    case 5:
                        if ($this->actual['ora']=="lodi") {
                            $this->antifona=array(
                                "La parola del Signore",
                                "è attesa come la pioggia; come rugiada scenderà su di noi il nostro Dio."
                            );
                        }
                        elseif ($this->actual['ora']=="ves") {
                            $this->antifona=array(
                                "Questa",
                                "è la testimonianza di Giovanni: Colui che viene dopo di me, era prima di me."
                            );
                        }
                    break;
                }
            }

            ////////////////

            if (substr($this->actual['today'],4,4)=='1217') {
                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Vigilate:",
                        "il Signore nostro è vicino."
                    );
                }
                elseif ($this->actual['ora']=="ves") {
                    $this->antifona=array(
                        "O sapienza,",
                        "che esci dalla bocca dell'Altissimo, ti stendi fino ai confini del mondo, e tutto disponi con soavità e con forza: vieni, insegnaci la via della saggezza."
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1218') {
                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Maria,",
                        "madre di Gesù, sposa di Giuseppe, prima che andassero a vivere insieme si trovò incinta per opera dello Spirito Santo."
                    );
                }
                elseif ($this->actual['ora']=="ves") {
                    $this->antifona=array(
                        "O Signore,",
                        "guida della casa d'Israele, che sei apparso a Mosè nel fuoco del roveto, e sul monte Sinai gli hai dato la legge: vieni a liberarci con braccio potente."
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1219') {
                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Camminerà",
                        "davanti al Cristo, con lo spirito e la potenza di Elia, a preparare al Signore un popolo santo."
                    );
                }
                elseif ($this->actual['ora']=="ves") {
                    $this->antifona=array(
                        "O germoglio di Iesse,",
                        "che ti innalzi come segno per i popoli: tacciono davanti a te i re della terra, e le nazioni t'invocano: vieni a liberarci, non tardare."
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1220') {
                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "L'angelo Gabriele",
                        "fu inviato alla sposa di Giuseppe, la Vergine Maria."
                    );
                }
                elseif ($this->actual['ora']=="ves") {
                    $this->antifona=array(
                        "O Chiave di Davide,",
                        "scettro della casa d'Israele, che apri, e nessuno può chiudere, chiudi, e nessuno può aprire: vieni, libera l'uomo prigioniero che giace nelle tenebre e nell'ombra della morte."
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1221') {
                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Non abbiate timore:",
                        "il quinto giorno il Signore verrà."
                    );
                }
                elseif ($this->actual['ora']=="ves") {
                    $this->antifona=array(
                        "O Astro che sorgi,",
                        "splendore di luce eterna, sole di giustizia: vieni, illumina chi giace nelle tenebre e nell'ombra della morte."
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1222') {
                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Ho udito",
                        "il tuo saluto, e nel mio grembo il bambino ha trasalito di gioia, alleluia."
                    );
                }
                elseif ($this->actual['ora']=="ves") {
                    $this->antifona=array(
                        "O Re delle genti,",
                        "atteso da tutte le nazioni, pietra angolare che riunisci i popoli in uno, vieni, e salva l'uomo che hai formato dalla terra."
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1223') {
                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Ora",
                        "si compiono tutte le parole che l'angelo ha detto a Maria."
                    );
                }
                elseif ($this->actual['ora']=="ves") {
                    $this->antifona=array(
                        "O Emanuele,",
                        "nostro re e legislatore, speranza e salvezza dei popoli: vieni e salvaci, o Signore nostro Dio."
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1224') {
                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Sorgerà",
                        "come il sole il Salvatore del mondo, come rugiada sull'erba scenderà nel seno della Vergine, alleluia."
                    );
                }
            }   
        }

        if ($this->actual['tempo']=='N') {

            if (substr($this->actual['today'],4,4)=='1225') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Quando",
                        "sorgerà il sole, vedrete il Re dei re: come lo sposo dalla stanza nuziale egli viene dal Padre."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Gloria a Dio",
                        "nell'alto dei cieli, e pace in terra agli uomini che egli ama, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Oggi",
                        "Cristo è nato, è apparso il Salvatore; oggi sulla terra cantano gli angeli, si allietano gli arcangeli; oggi esualtano i giusti, acclamando: Gloria a Dio nell'alto dei cieli, alleluia."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='1226') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Stefano,",
                        "pieno di grazia e di fortezza, faceva grandi prodigi fra il popolo."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Mentre il silenzio",
                        "avvolgeva ogni cosa e la notte era a metà del suo corso, la tua Parola onnipotente, o Signore, venne dal tuo trono regale, alleluia."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='1227') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Ecco Giovanni,",
                        "che durante la cena posò il capo sul petto del Signore: apostolo beato, a lui fu rivelato il mistero di Dio."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Per mezzo tuo,",
                        "Vergine Maria, si compie la parola dei profeti che annunaziava Cristo Signore: vergine hai concepito, vergine hai generato."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='1228') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Bambini innocenti,",
                        "furono uccisi per Cristo; piccoli lattanti, trucidati dal re; seguono l'Agnello immacolato e cantano in eterno: Gloria a te, Signore!"
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Vergine santa",
                        "e immacolata, hai generato per noi il Figlio di Dio: tenero bambino, lo hai nutrito. Adoriamo tutti il Cristo salvatore."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='1229') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Simeone",
                        "prese il bambino tra le braccia, rese grazie e benedisse il Signore."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "È venuta",
                        "la pienezza dei tempi: Dio manda il suo Figlio sulla terra, nato da donna, nato sotto la legge, per riscattare coloro che sono sotto la legge."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='1230') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Gesù",
                        "tornò a Nazareth: era docile e obbediente a Giuseppe e a Maria."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Gesù",
                        "cresceva in età, sapienza e grazia davanti a Dio e agli uomini."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='1231') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Il coro degli angeli",
                        "lodava Dio e cantava: Gloria a Dio nell'alto dei cieli, e pace in terra agli uomini che egli ama, alleluia."
                    );
                }
            }


            if ($this->actual['evCode']=='SAF') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Mentre il silenzio",
                        "avvolgeva ogni cosa e la notte era a metà del suo corso, la tua Parola onnipotente, o Signore, venne dal tuo trono regale, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Da Giacobbe",
                                "nacque Giuseppe, sposo di Maria; da lei è nato Gesù, chiamato il Cristo."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Il vecchio",
                                "portava il bambino, e il bambino sosteneva il vecchio. Maria sempre vergine adorava il suo Dio, il figlio da lei generato."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Il fanciullo Gesù,",
                                "rimase a Gerusalemme, e i suoi genitori non se ne accorsero credendolo nella carovana: e lo cercavano tra i parenti e i conoscenti."
                            );
                        break;
                    }
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Figlio,",
                                "perchè ci hai fatto così? Ecco, tuo padre ed io, angosciati, ti cercavamo."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "I genitori",
                                "portarono il bambino Gesù nel tempio: Simeone lo prese tra le braccia e benedisse Dio dicendo: Ora lascia, o Signore, che il tuo servo se ne vada in pace."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Figlio,",
                                "perché hai fatto questo? Con ansia tuo padre ed io ti abbiamo cercato. Perché cercarmi? Non sapevate che devo dedicarmi alle opere del Padre mio?"
                            );
                        break;
                    }
                }
            }

            if ($this->actual['evCode']=='MSS') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Per il grande amore",
                        "con il quale ci ha amati, Dio mandò il suo Figlio in una carne simile a quella del peccato, nato da donna, nato sotto la legge, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Meraviglioso mistero!",
                        "Oggi tutto si rinnova; Dio si è fatto uomo: immutato nella sua divinità ha assunto la nostra umanità."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Ineffabile mistero!",
                        "Il grembo intatto di una vergine diviene tempio di Dio; colui che da essa prende carne rimane incontaminato. Verranno tutti i popoli e diranno: Gloria a te, Signore!"
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='0102') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Colui che verrà,",
                        "era prima di me: e io non sono degno di levargli i sandali e servirlo."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Gridate giulivi",
                        "ed esultate, abitanti di Sion, perché grande in mezzo a voi è il Santo d'Israele."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='0103') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Dio",
                        "ha dato a Cristo il trono di Davide: regnerà sul suo popolo per sempre."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Dio",
                        "ha tanto amato il mondo, che ha dato il suo unico Figlio: chi crede in lui non muore, ma ha la vita eterna, alleluia."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='0104') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Nella sua misericordia",
                        "il nostro Dio ci ha visitati dall'alto come sole che sorge."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Maria",
                        "ci ha dato il Salvatore. Giovanni lo vide ed esclamò: Ecco l'Agnello di Dio, ecco colui che toglie il peccato dal mondo, alleluia."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='0105') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Rallegratevi",
                        "con Gerusalemme: tutti voi che l'amate, trasalite di gioia!"
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Il Signore",
                        "innalzerà un segno fra le nazioni e radunerà i dispersi d'Israele."
                    );
                }
            }

            if ($this->actual['evCode']=='2DN') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Per voi",
                        "Chi è il Cristo? Se è figlio di Davide; perché Davide, ispirato dalla Spirito, lo chiama Signore?"
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Vergine",
                        "sempre fedele, hai dato al mondo il Verbo incarnato; te, intatta dopo il parto, acclamiamo: Benedetta fra le donne!"
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Ineffabile mistero!",
                        "Il grembo intatto di una vergine diviene tempio di Dio; colui che da essa prende carne rimane incontaminato. Verranno tutti i popoli e diranno: Gloria a te, Signore!"
                    );
                }
            }

            if ($this->actual['evCode']=='EPI') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "All'apparire della stella,",
                        "dissero i magi: Questo è il segno del gran Re: andiamo a cercarlo, portiamogli in dono oro, incenso e mirra."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Oggi",
                        "la Chiesa, lavata dalla colpa nel fiume Giordano, si unisce a Cristo, suo Sposo; accorrono i magi con doni alle nozze regali e l'acqua cambiata in vino rallegra la mensa, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Tre prodigi",
                        "celebriamo in questo giorno santo: oggi la stella ha guidato i magi al presepio, oggi l'acqua è cambiata in vino alle nozze, oggi Cristo è battezzato da Giovanni nel Giordano per la nostra salvezza, alleluia."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='0107') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Dall'oriente",
                        "vennero i magi a Betlemme per adorare il Signore, e offrirono doni preziosi: oro al grande Re; incenso al vero Dio; mirra a colui che doveva morire, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Grande",
                        "fu la gioia dei magi al vedere la stella: entrati nella casa, offrirono al Signore oro, incenso e mirra."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='0108') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Tre doni",
                        "offrono i magi al Signore, al Figlio di Dio, al gran Re: oro, incenso e mirra, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Luce da luce",
                        "sei apparso o Cristo: a te i magi offrono doni, alleluia."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='0109') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Abbiamo visto",
                        "la tua stella in Oriente: siamo venuti con doni per adorare il Signore."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Erode",
                        "interroga i magi: Quale segno avete visto per il Re che è nato? Abbiamo visto una stella lucente: il suo splendore rischiara la terra."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='0110') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Da lontano",
                        "verranno tutte le nazioni, portando i loro doni, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Dalla terra di Saba",
                        "tutti verranno, portando oro e incenso, e canteranno le lodi del Signore, alleluia."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='0111') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Verranno a te",
                        "quelli che ti disprezzavano, e si prostreranno ai tuoi piedi."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Avvertiti in sogno",
                        "da un angelo, per un'altra via i magi tornarono al loro paese."
                    );
                }
            }

            if (substr($this->actual['today'],4,4)=='0112') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Ci fu uno sposalizio",
                        "a Cana di Galilea, e c'era la madre di Gesù."
                    );
                }
            }
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='Q') {

            if ($this->actual['evCode']=='CEN') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Quando digiunate,",
                        "non mostratevi tristi, come gli ipocriti."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Quando fai l'elemosina,",
                        "non sappia la tua sinistra quello che fa la tua destra."
                    );
                }
            }

            elseif ($this->actual['evCode']=='QC4') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Chi vuole",
                        "essere mio discepolo, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Chi perde",
                        "la propria vita per me, la troverà in eterno, dice il Signore."
                    );
                }
            }

            elseif ($this->actual['evCode']=='QC5') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Mi cercano",
                        "ogni giorno, e vogliono conoscere le mie vie."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Tu, quando preghi,",
                        "entra nella tua stanza e, chiusa la porta, prega il Padre tuo nel segreto."
                    );
                }
            }

            elseif ($this->actual['evCode']=='QC6') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Accumulatevi",
                        "tesori nel cielo, dove tignola e ruggine non consumano."
                    );
                }
            }

            elseif ($this->actual['evCode']=='QU1') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Non di solo pane",
                        "vive l'uomo, ma di ogni parola che esce dalla bocca di Dio."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Guidato dallo Spirito,",
                        "tentato dal demonio, per quaranta giorni Gesù digiunava nel deserto."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Ecco",
                        "il tempo della grazia, ecco i giorni della salvezza: in questi giorni presentiamoci come ministri di Dio, con molta fermezza, nelle veglie, nei digiuni e in un amore sincero."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q11') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Venite,",
                        "benedetti dal Padre mio, ricevete l'eredità del regno preparato per voi dall'inizio del mondo."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Quello che avete fatto",
                        "al più piccolo dei miei fratelli, l'avete fatto a me, dice il Signore."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q12') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Il Signore",
                        "esaudisca le vostre preghiere e vi sia propizio: non vi abbandoni nell'ora dell'avversità."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Tu, quando preghi,",
                        "entra nella tua stanza e, chiusa la porta, prega il Padre tuo nel segreto."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q13') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Questo popolo infedele",
                        "pretende un segno: non avrà altro segno che quello di Giona."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Tre giorni",
                        "e tre notti Giona rimase nel ventre del pesce: così il Figlio dell'uomo nel cuore della terra."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q14') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Se due di voi",
                        "si accorderanno per domandare qualunque cosa, il Padre mio ve la concederà, dice il Signore."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Chiedete",
                        "e vi sarà dato; cercate e troverete: bussate e vi sarà aperto."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q15') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Avete inteso",
                        "che fu detto agli antichi: Non uccidere; chi avrà ucciso sarà sottoposto a giudizio."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Se vuoi",
                        "che la tua offerta sia gradita al Signore, riconciliati prima con il tuo fratello, e poi torna ad offrire il tuo dono."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q16') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Questo",
                        "è il mio comandamento: che vi amiate gli uni gli altri, come io vi ho amati."
                    );
                }
            }

            elseif ($this->actual['evCode']=='QU2') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Risuona",
                        "dal cielo una voce: Questi è il Figlio mio prediletto, in lui mi sono compiaciuto. Ascoltatelo!"
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Gesù",
                        "prese con sé i discepoli, salì sulla montagna e si trasfigurò davanti a loro."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Di questa visione",
                        "non parlate a nessuno, finché il Figlio dell'uomo non sia risorto dai morti."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q21') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Amate e perdonate",
                        "come il Padre vostro, dice il Signore."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Non condannate,",
                        "e non sarete condannati, dice il Signore: come giudicate, così sarete giudicati."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q22') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Uno solo",
                        "è il vostro Maestro, che è nei cieli: Cristo Signore."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Voi",
                        "siete tutti fratelli: uno solo è il vostro Padre, che è nei cieli, uno solo il vostro Maestro: Cristo."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q23') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Si rende forse",
                        "male per bene? Poiché mi hanno scavato una fossa."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Il Figlio dell'uomo",
                        "sarà tradito, torturato e ucciso: ma il terzo giorno risorgerà."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q24') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Figlio,",
                        "nella vita godevi i tuoi beni, mentre Lazzaro soffriva: ora kui è nella gioia, e tu nei tormenti."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Una goccia d'acqua",
                        "chiese quel ricco, che a Lazzaro aveva negato le briciole di pane."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q25') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "I malvagi",
                        "saranno perduti; il Signore consegnerà la sua vigna ad altri che gli daranno i frutti a suo tempo."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Cercavano",
                        "di prendere Gesù, ma non osavano: per il popolo egli era un profeta."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q26') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Padre,",
                        "ho peccato contro di te: non merito di chiamarmi tuo figlio!"
                    );
                }
            }

            elseif ($this->actual['evCode']=='QU3') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Il Signore",
                        "apra il vostro cuore alla sua legge e ai suoi comandi, e vi conceda la pace."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Chi beve",
                                "dell'acqua che io gli darò, non avrà mai più sete."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Portate via di qui",
                                "queste cose, dice il Signore, e non fate della casa del Padre mio un luogo di mercato."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Io sono",
                                "il Dio dei vostri padri, dice il Signore; ho visto la miseria del mio popolo, ho udito il suo grido, e sono sceso a liberarlo."
                            );
                        break;
                    }  
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Signore,",
                                "vedo che sei un profeta: i nostri padri hanno adorato su questo monte."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Distruggete",
                                "questo tempio, e in tre giorni lo ricostruirò, dice il Signore; egli parlava del tempio del suo corpo."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Non ricordare,",
                                "Signore, le mie colpe, né quelle dei miei padri: non punirmi per i miei peccati."
                            );
                        break;
                    } 
                }
            }

            elseif ($this->actual['evCode']=='Q31') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "In verità vi dico:",
                        "Nessun profeta è ascoltato nella sua patria."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Gesù,",
                        "rifiutato dai suoi, passò in mezzo a loro e si allontanò."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q32') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Umili e pentiti",
                        "accoglici, Signore: ti sia gradito il nostro sacrificio che oggi si compie dinanzi a te."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Disse",
                        "il padrone al servo: Rendimi quello che mi devi. Il servo, gettandosi a terra, lo supplicava dicendo: Abbi pazienza con me e ti renderò tutto."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q33') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "In verità vi dico:",
                        "Non passerà questa generazione prima che tutto questo accada: il cielo e la terra passeranno, ma le mie parole non passeranno, dice il Signore."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Coloro",
                        "che ricevano al parola di Dio in un cuore ben disposto, portano frutto con perseveranza."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q34') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Se io scaccio i demoni",
                        "con la forza di Dio, il suo regno è venuto tra voi, dice il Signore."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Beato il grembo",
                        "che ti ha portato, e il seno che ti ha nutrito. Sì, ma soprattutto beato chi ascolta e custodisce la parola di Dio."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q35') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Questo",
                        "è il comandamento più grande: Ama il Signore tuo Dio con tutto il cuore."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Maestro,",
                        "che devo fare per possedere la vita eterna? Gesù gli disse: Che cosa è scritto nella legge? Amerai il Signore Dio tuo con tutto il tuo cuore."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q36') {

                if ($this->actual['ora']=="lodi") {
                    
                    $this->antifona=array(
                        "In fondo al tempio,",
                        "con gli occhi bassi, il pubblicano si batteva il petto: O Dio, pietà di me peccatore!"
                    );
                }
            }

            elseif ($this->actual['evCode']=='QU4') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Questi",
                        "tornò a casa sua giustificato, a differenza dell'altro: perché chi si esalta sarà umiliato, e chi si umilia sarà esaltato."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Maestro,",
                                "ha peccato quest'uomo per nascere cieco? Rispose Gesù: Né lui ha peccato né i suoi genitori, ma è così perché si manifestassero le opere di Dio in lui."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Dio",
                                "ha tanto amato il mondo, che ha dato il suo unico Figlio: chi crede in lui non muore, ma ha la vita eterna."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Andrò",
                                "da mio padre e gli dirò: Padre, trattami come uno dei tuoi servi."
                            );
                        break;
                    }  
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Quell'uomo",
                                "che si chiama Gesù fece del fango con la saliva e mi spalmò gli occhi, e ora ci vedo."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Chi segue me",
                                "non cammina nelle tenebre, ma avrà la luce della vita, dice il Signore."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Il Padre",
                                "ordinò ai servi: Portate qui l'abito più bello e rivestitelo, mettetegli l'anello al dito e i calzari ai piedi."
                            );
                        break;
                    } 
                }
            }

            elseif ($this->actual['evCode']=='Q41') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Un ufficiale del re",
                        "supplicava il Signore: Vieni a guarire mio figlio ammalato."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Gesù",
                        "aveva detto: Tuo figklio vive. Il padre conobbe l'ora e credette, lui e tutta la sua casa."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q42') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Colui",
                        "che mi ha guarito ha detto: Prendi il tuo lettuccio e va' in pace."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Il paralitico",
                        "si alzò, prese il suo lettuccio, e se ne andò glorificando il Signore."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q43') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Io non cerco",
                        "la mia gloria: vi è chi la cerca e giudica."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "In verità,",
                        "in verità vi dico: Chi osserva la mia parola, non vedrà la morte in eterno."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q44') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Questa",
                        "è la testimonianza di Giovanni: Colui che viene dopo di me, era prima di me."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Chi è da Dio,",
                        "ascolta la parola di Dio; voi non l'ascoltate, perché non siete da Dio."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q45') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Dissero gli empi:",
                        "Opprimiamo il giusto: egli è contro le nostre opere."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Nessuno",
                        "poteva arrestare Gesù: la sua ora non era venuta."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q46') {

                if ($this->actual['ora']=="lodi") {
                    
                    $this->antifona=array(
                        "A te affido",
                        "la mia causa, Signore, mio Dio, difensore della mia vita."
                    );
                }
            }

            elseif ($this->actual['evCode']=='QU5') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Cercavano",
                        "di pendere Gesù, ma non osavano: per il popolo egli era un profeta."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Lazzaro,",
                                "l'amico nostro, dorme: andiamo a svegliarlo dal sonno."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Chi odia",
                                "la sua vita in questo mondo, la conserva per la via eterna."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Gesù,",
                                "chinatosi, cominciò a scrivere per terra: Chi di voi è senza peccato, scagli la prima pietra."
                            );
                        break;
                    }  
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Signore,",
                                "se tu fossi stato qui, Lazzaro non sarebbe morto; ora è già da quattro giorni nel sepolcro."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Chi mi vuol servire,",
                                "mi segua: e dove sono io, là sarà anche il mio servo."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Donna,",
                                "io non ti condanno: va' in pace, e non peccare più."
                            );
                        break;
                    } 
                }
            }

            elseif ($this->actual['evCode']=='Q51') {

                if ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Gesù,",
                                "chinatosi, cominciò a scrivere per terra: Chi di voi è senza peccato, scagli la prima pietra."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Gesù,",
                                "chinatosi, cominciò a scrivere per terra: Chi di voi è senza peccato, scagli la prima pietra."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Chi segue me",
                                "non cammina nelle tenebre, ma avrà la luce della vita, dice il Signore."
                            );
                        break;
                    } 
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Donna,",
                                "io non ti condanno: va' in pace, e non peccare più."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Donna,",
                                "io non ti condanno: va' in pace, e non peccare più."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Non io soltanto",
                                "testimonio per me, ma anche il Padre che mi ha mandato."
                            );
                        break;
                    } 
                }
            }

            elseif ($this->actual['evCode']=='Q52') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Io sono",
                        "proprio ciò che vi dico."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Chi mi ha mandato",
                        "è con me; non mi lascia mai solo, perché faccio sempre quello che gli piace."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q53') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Nessuno",
                        "poteva arrestare Gesù: la sua ora non era venuta."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Perché",
                        "volete uccidere l'uomo che vi ha detto la verità."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q54') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Chi è da Dio,",
                        "ascolta la parola di Dio; voi non l'ascoltate, perché non siete da Dio."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Abramo",
                        "vostro padre, esultò nella speranza di vedere il mio giorno; lo vide e ne gioì."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q55') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Molte opere buone",
                        "ho compiuto sotto i vostri occhi: per quale di esse volete lapidarmi?."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Si avvicinava",
                        "la festa dei Giudei e i capi del popolo cercavano come uccidere Gesù, ma temevano il popolo."
                    );
                }
            }

            elseif ($this->actual['evCode']=='Q56') {

                if ($this->actual['ora']=="lodi") {
                    
                    $this->antifona=array(
                        "I capi dei sacerdoti",
                        "tennero consiglio per uccidere Gesù; e dicevano: Non durante la festa perché non avvengano tumulti nel popolo."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PAL') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Padre giusto,",
                        "il mondo non ti ha conosciuto; ma io ti ho conosciuto, perché tu mi hai mandato."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Una grande folla,",
                        "venuta per la festa, acclamava: Benedetto colui che viene nel nome del Signore! Osanna nell'alto dei cieli!"
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "È scritto:",
                        "Ucciderò il Pastore, e il gregge sarà disperso. Ma, risorto da morte, vi precederò in Galilea: là mi vedrete, dice il Signore."
                    );
                }
            }

            elseif ($this->actual['evCode']=='SS1') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Padre giusto,",
                        "il mondo non ti ha conosciuto; ma io ti ho conosciuto, perché tu mi hai mandato."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Maria",
                        "unse i piedi di Gesù, li asciugò con i suoi capelli, e tutta la casa si riempì del profumo dell'unguento."
                    );
                }
            }

            elseif ($this->actual['evCode']=='SS2') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Glorificami, Padre,",
                        "davanti a te con la gloria che era mia prima dell'inizio del mondo."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Questo potere",
                        "mi ha dato il Padre: io do la mia vita, e la riprendo."
                    );
                }
            }

            elseif ($this->actual['evCode']=='SS3') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Il traditore",
                        "aveva dato loro questo segnale: Colui che bacerò, è lui: catturatelo."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Dice il Maestro:",
                        "Il mio tempo è vicino, farò la Pasqua da te con i miei discepoli."
                    );
                }
            }

            elseif ($this->actual['evCode']=='SS4') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Quanto ho desiderato",
                        "mangiare questa Pasqua con voi, prima di patire!"
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Nell'ultima cena",
                        "Gesù prese il pane, lo benedisse, lo spezzò e lo diede ai suoi discepoli."
                    );
                }
            }

            elseif ($this->actual['evCode']=='SS5') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Sopra la sua testa",
                        "era scritta l'accusa: Gesù Nazareno, re dei Giudei."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Gesù,",
                        "preso l'aceto, disse: Tutto è compiuto. E, chinato il capo, spirò."
                    );
                }
            }

            elseif ($this->actual['evCode']=='SS6') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Le pie donne,",
                        "sedute vicino al sepolcro, piangevano il Signore."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "I capi dei sacerdoti",
                        "e dei farisei assicurarono il sepolcro, sigillando la porta e mettendo la guardia."
                    );
                }
            }
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='P') {

            if ($this->actual['evCode']=='PAS') {

                if ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Passato il sabato,",
                                "all'alba del primo giorno della settimana, Maria di Magdala e l'altra Maria andarono a vedere il sepolcro, alleluia."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Il mattino di Pasqua,",
                                "appena sorto il sole, le donne vennero al sepolcro, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Correvano",
                                "tutti e due assieme, ma l'altro discepolo precedette Pietro, e giunse per primo al sepolcro, alleluia."
                            );
                        break;
                    }
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Maria Maddalena",
                                "e l'altra Maria vanno alla tomba per onorare il corpo sepolto, ma non trovano il Signore, alleluia."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Videro",
                                "che il masso era stato rotolato via benché fosse molto grande, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Era necessario",
                                "che il Cristo patisse per risorgere dai morti, alleluia."
                            );
                        break;
                    }
                }
            }

            elseif ($this->actual['evCode']=='PA11') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Presto,",
                        "andate, dite ai discepoli: Il Signore è risorto, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Uno spirito",
                        "non ha carne e ossa, come vedete che ho io: dunque, credete! Alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA12') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Maria in pianto,",
                        "stava fuori, vicino al sepolcro: vide due angeli vestiti di bianco, seduti, e il sudario che era stato sul capo di Gesù, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Hanno portato via",
                        "il mio Signore, e non so dove lo hanno deposto: se l'hai portato via tu, dimmi dove lo hai posto, alleluia: e io andrò a prenderlo, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA13') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "In tutte le Scritture,",
                        "da Mosè sino ai profeti, Gesù spiegava ai discepoli il mistero della Pasqua, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Entrarono in casa:",
                        "durante la cena Gesù prese il pane, rese grazie, lo spezzò e lo diede ai discepoli, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA14') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Gesù,",
                        "apparve in mezzo ai suoi discepoli e disse: Pace a voi, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Guardate le mie mani,",
                        "guardate i miei piedi, sono io, il Signore, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA15') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Per la terza volta",
                        "Gesù risorto apparve ai discepoli, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Disse Gesù,",
                        "ai suoi discepoli: Portate qui del pesce che avete preso ora. Simon Pietro salì sulla barca e trasse a terra la rete piena di grossi pesci, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA16') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Risorto",
                        "il mattino di Pasqua, Gesù apparve prima a Maria Maddalena, alleluia."
                    );
                }
            }
            
            elseif ($this->actual['evCode']=='PA2') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "L'ottavo giorno,",
                        "a porte chiuse, Gesù entrò e disse: Pace a voi, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Tocca",
                        "con la mano il segno dei chiodi: non essere incredulo, abbi fede, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Tu hai veduto,",
                        "Tommaso, e hai creduto; beato chi non vede, eppure crede, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA21') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Ho messo",
                        "il mio dito nel posto dei chiodi, e la mia mano nel suo costato, ho detto: Signore mio e Dio mio! Alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Vi precederò in Galilea",
                        "dove mi vedrete, come vi ho detto, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA22') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Arde il mio cuore:",
                        "voglio vedere il mio Signore, e non so dove lo hanno posto, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Non ardeva",
                        "il nostro cuore, mentre Gesù parlava con noi lungo la strada? Alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA23') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Dio",
                        "ha tanto amato il mondo, che ha dato il suo unico Figlio: chi crede in lui non muore, ma ha la vita eterna, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Chi fa la verità,",
                        "viene alla luce, e appariranno le sue opere di figlio di Dio, alleluia."
                    );
                }
            }
            
            elseif ($this->actual['evCode']=='PA24') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Stolti",
                        "e tardi di cuore nel credere a tutto ciò che fu detto dai profeti! Alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Che discorsi,",
                        "andate facendo fra voi lungo il cammino? E perché siete tristi? Alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA25') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Gesù",
                        "prese i pani, rese grazie, e li distribuì a tutti i presenti, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Patì la dura croce",
                        "colui che vinse l'inferno: ora è rivestito di forza, risorto nella gloria, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA26') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "In verità,",
                        "in verità vi dico: Chi osserva la mia parola, non vedrà la morte in eterno, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA3') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Rimani con noi,",
                        "Signore: ormai si fa sera e il giorno declina, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Tu solo",
                                "sei così forestiero, da non sapere di Gesù, di come lo hanno fatto condannare a morte? Alleluia."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Questi",
                                "sono i discorsi che vi ho fatto quando ero ancora con voi, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Gettate la rete",
                                "a destra della barca, e troverete, alleluia."
                            );
                        break;
                    }
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "I due discepoli",
                                "insistettero, dicendo: Resta con noi, Signore, poiché si fa sera, alleluia."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Era necessario",
                                "che il Cristo patisse per risorgere dai morti, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Disse Gesù,",
                                "ai suoi discepoli: Portate qui del pesce che avete preso ora. Simon Pietro salì sulla barca e trasse a terra la rete piena di grossi pesci, alleluia."
                            );
                        break;
                    }
                }
            }

            elseif ($this->actual['evCode']=='PA31') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Procuratevi",
                        "un cibo che non si corrompe, ma che dura per la vita eterna, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "I discepoli",
                        "offrirono al Signore del pesce arrostito e un favo di miele, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA32') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Vedo",
                        "i cieli aperti, e Gesù alla destra della potenza di Dio, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Pane di Dio",
                        "è colui che scende dal cielo e dà la vita al mondo, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA33') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Il pane di Cristo",
                        "è pregno di delizie: anche i grandi della terra ne hanno fame, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Quelli",
                        "che il Padre mi dà, verranno a me; e chi viene a me non lo respingerò, alleluia."
                    );
                }
            }
            
            elseif ($this->actual['evCode']=='PA34') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Io sono",
                        "il pane vivo desceso dal cielo, dice il Signore, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Io sono",
                        "il pane vivo disceso dal cielo: chi amngia di questo pane vivrà in eterno; il pane che io darò è la mia carne per la vita del mondo, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA35') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Io sono",
                        "il pane vivo disceso dal cielo: chi amngia di questo pane vivrà in eterno, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Cristo,",
                        "che fu crocifisso, è risorto dai morti; egli ci ha liberati, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA36') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Benedite il Signore,",
                        "camminate nella giustizia davanti a lui, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA4') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Signore,",
                        "da chi andremo? Tu hai parole di vita eterna; noi abbiamo creduto e conosciuto che tu sei il Cristo, il Figlio di Dio, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Io sono",
                                "il buon Pastore: sono la via, la verità e la vita. Conosco i miei e loro conoscono me, alleluia."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Il buon Pastore",
                                "dà la vita per le sue pecore, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Il mio gregge",
                                "riconosce la mia voce: e io, il Signore, conosco tutte le mie pecore, alleluia."
                            );
                        break;
                    }
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Io sono la porta,",
                                "dice il Signore: chi passa per me, sarà salvo; entrerà e uscirà e troverà pascolo, alleluia."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Io sono",
                                "il buon Pastore: conduco al pascolo le mie pecore, e per loro do la mia vita, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Ho altre pecore",
                                "che non sono di questo ovile: anche queste io devo condurre; ascolteranno la mia voce e si avrà un solo gregge e un solo pastore, alleluia."
                            );
                        break;
                    }
                }
            }

            elseif ($this->actual['evCode']=='PA41') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Io sono",
                        "il buon Pastore: conduco al pascolo le mie pecore, e per loro do la mia vita, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Come il Padre",
                        "conosce me, io conosco il Padre: per il mio gregge do la mia vita, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA42') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Il mio gregge",
                        "riconosce la mia voce: e io, il Signore, conosco tutte le mie pecore, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Io sono la porta,",
                        "dice il Signore: chi passa per me, sarà salvo; entrerà e uscirà e troverà pascolo, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA43') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Gli undici discepoli",
                        "videro il Signore in Galilea, e lo adorarono, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Dio",
                        "ha mandato il suo Figlio non a condannare, ma a salvare il mondo, alleluia."
                    );
                }
            }
            
            elseif ($this->actual['evCode']=='PA44') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Il Padre stesso",
                        "vi ama, perché mi avete amato e avete creduto, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Ogni potere",
                        "mi è stato dato in cielo e sulla terra, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA45') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Vado",
                        "a prepararvi un posto, e vi prenderò con me: dove sono io sarete anche voi, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Il buon Pastore,",
                        "dà la vita per le sue pecore, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA46') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Se conoscete me,",
                        "conoscerete anche il Padre mio; ora lo conoscete e lo avete veduto, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA5') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Io sono la via,",
                        "la verità e la vita: nessuno viene al Padre se non per me, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Non si turbi",
                                "il vostro cuore e non abbiate timore: credete in Dio e credete anche in me: nella casa del Padre mio vi sono molte dimore, alleluia."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Se rimanete in me,",
                                "e le mie parole rimangono in voi, domanderete e tutto vi sarà dato, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Vi do",
                                "un comandamento nuovo: Ametevi, come io ho amato voi, alleluia."
                            );
                        break;
                    }
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Da tanto tempo",
                                "sono con voi, e tu, Filippo, non mi conosci ancora? Chi ha visto me, ha visto il Padre mio, alleluia."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Se rimanete in me,",
                                "e le mie parole rimangono in voi, domanderete e tutto vi sarà dato, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Da questo",
                                "sapranno che siete miei discepoli: se avrete amore gli uni per gli altri, alleluia."
                            );
                        break;
                    }
                }
            }

            elseif ($this->actual['evCode']=='PA51') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Chi mi ama,",
                        "ossergerà la mia parola: il Padre mio lo amerà, e abiteremo in lui, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Lo Spirito Santo,",
                        "che il Padre manderà nel mio nome, sarà vostro maestro: vi ricorderà ogni mia parola, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA52') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Vi lascio la pace,",
                        "alleluia, vi do la mia pace, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Vado",
                        "a Colui che mi ha mandato; ma perché vi ho detto queste cose, la tristezza ha riempito il vostro cuore, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA53') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Rimanete",
                        "nel mio amore; chi rimane in me e io in lui, porta molto frutto, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Se rimanete in me,",
                        "e le mie parole rimangono in voi, domanderete e tutto vi sarà dato, alleluia."
                    );
                }
            }
            
            elseif ($this->actual['evCode']=='PA54') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "La tristezza",
                        "ha riempito il vostro cuore, ma nessuno potrà togliervi la vostra gioia, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Ogni potere",
                        "mi è stato dato in cielo e sulla terra, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA55') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Questo",
                        "è il mio comandamento; che vi amiate gli uni gli altri, come io vi ho amati, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Non c'è",
                        "amore più grande che dare la vita per i propri amici, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA56') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Sei grande,",
                        "Signore, mirabile nella potenza, invincibile, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA6') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Pregherò",
                        "il Padre mio, ed egli vi darà un altro Consolatore, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Se mi amate,",
                                "osservate i miei comandamenti, alleluia."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Sarete miei amici,",
                                "se farete quello che vi comando, dice il Signore, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Chimi ama,",
                                "osserverà la mia parola: il Padre mio lo amerà, e abiteremo in lui, alleluia."
                            );
                        break;
                    }
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Io vado",
                                "ma non vi lascio soli, alleluia: tornerò a voi, alleluia, e sarete nella gioia, alleluia."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Se rimanete in me,",
                                "e le mie parole rimangono in voi, domanderete e tutto vi sarà dato, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Lo Spirito Santo,",
                                "che il Padre manderà nel mio nome, sarà vostro maestro: vi ricorderà ogni mia parola, alleluia."
                            );
                        break;
                    }
                }
            }

            elseif ($this->actual['evCode']=='PA61') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Quando",
                        "verrà il Paraclito che io manderò, lo Spirito di verità che procede dal Padre, darà testimonianza di me, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Vi ho detto",
                        "queste cose, perché, quando giungerà l'ora, ricordiate che ve ne ho parlato, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA62') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Vado,",
                        "a Colui che mi ha mandato, e nessuno di voi mi domanda: Dove vai? Alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Vi dico la verità:",
                        "È meglio per voi che io vada; se non andrò, non verrà il Paraclito, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA63') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Molte cose",
                        "ho ancora da dirvi: non potete comprenderle ora; quando verrà lo Spirito, vi insegnerà tutta la verità, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Quando",
                        "sarà venuto a voi il Consolatore, lo Spirito di verità, egli convincerà il mondo quanto al peccato, alla giustizia e al giudizio, alleluia."
                    );
                }
            }
            
            elseif ($this->actual['evCode']=='PA64') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Un poco,",
                        "e non mi vedrete; ancora un poco, e mi rivedrete: io vado al Padre, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "La vostra tristezza",
                        "si cambierà in gioia, e nessuno ve le toglierà, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA65') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "In verità vi dico:",
                        "Voi piangerete e vi rattristerete, ma il mondo si rallegrerà; voi sarete afflitti, ma la vostra afflizione si cambierà in gioia, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Io vi rivedrò",
                        "e il vostro cuore si rallegrerà, e nessuno potrà togliervi la vostra gioia, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA66') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Chiedete",
                        "e vi sarà dato, affinché la vostra gioia sia piena: il Padre stesso vi ama, perché mi avete amato e avete creduto, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA7') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Io vado,",
                        "ma non vi lascio soli, alleluia: tornerò a voi, alleluia, e sarete nella gioia, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "È venuta l'ora:",
                                "Padre, glorifica il tuo Figlio con la gloria che aveva presso di te, prima che il mondo fosse, alleluia."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Padre santo,",
                                "custodisci nel tuo nome coloro che mi hai dato, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Ecco,",
                                "vedo i cieli aperti, e il Figlio dell'uomo che sta alla destra di Dio, alleluia."
                            );
                        break;
                    }
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Padre,",
                                "ho rivelato il tuo nome a quelli che mi hai dato; prego per loro, non per il mondo, ora che vengo a te, alleluia."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "L'amore di Dio",
                                "è stato riversato nei nostri cuori per mezzo dello Spirito Santo che dimora in noi, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Beati",
                                "coloro che lavano le loro vesti nel sangue dell'Agnello, alleluia."
                            );
                        break;
                    }
                }
            }

            elseif ($this->actual['evCode']=='PA71') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Lo Spirito",
                        "non parlerà sa se stesso, ma vi dirà tutto ciò che ascolta, e vi annuncerà le cose che verranno, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Vado",
                        "a Colui che mi ha mandato; ma perché vi ho detto queste cose, la tristezza ha riempito il vostro cuore, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA72') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "È venuta l'ora:",
                        "Padre, glorifica il tuo Figlio con la gloria che aveva presso di te, prima che il mondo fosse, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Padre,",
                        "ho rivelato il tuo nome a quelli che mi hai dato; prego per loro, non per il mondo, ora che vengo a te, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA73') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Il Padre stesso",
                        "vi ama, perché mi avete amato e avete creduto, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Finora",
                        "non avete chiesto nulla nel mio nome: chiedete ed otterrete, alleluia."
                    );
                }
            }
            
            elseif ($this->actual['evCode']=='PA74') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Andate,",
                        "evangelizzate i popoli, battezzate nel nome del Padre e del Figlio e dello Spirito Santo, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Quando",
                        "verrà il Paraclito che io manderò, lo Spirito di verità che procede dal Padre, darà testimonianza di me, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA75') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Il buon Pastore",
                        "dà la vita per le sue pecore, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Dove due o tre",
                        "sono riuniti nel mio nome, io sono in mezzo a loro, dice il Signore, alleluia."
                    );
                }
            }

            elseif ($this->actual['evCode']=='PA76') {

                if ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Nel giorno più solenne",
                        "della festa dei tabernacoli, Gesù, levatosi in piedi, esclamò ad alta voce: Chi ha sete, venga a me e beva! Alleluia."
                    );
                }
            }

//////////////////////////////////////////////////////////////////
            if ($this->actual['evCode']=='ASC') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Padre,",
                        "ho rivelato il tuo nome a quelli che mi hai dato; prego per loro, non per il mondo, ora che vengo a te, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Ascendo",
                        "al Padre mio e Padre vostro, Dio mio e Dio vostro, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Re della gloria,",
                        "Signore dell'universo, oggi tu scendi vittorioso nei cieli: non lasciarci soli, manda lo Spirito promesso dal Padre, alleluia."
                    );
                }
            }
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='O') {

            if ($this->actual['evCode']=='BAT') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Ed ecco",
                        "una voce dal cielo che disse: Questi è il Figlio mio prediletto, nel quale mi sono compiaciuto, Ascoltatelo! Alleluia."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Oggi",
                        "la Chiesa, lavata dalla colpa nel fiume Giordano, si unisce a Cristo, suo Sposo; accorrono i magi con doni alle nozze regali e l'acqua cambiata in vino rallegra la mensa, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Tre prodigi",
                        "celebriamo in questo giorno santo: oggi la stella ha guidato i magi al presepio, oggi l'acqua è cambiata in vino alle nozze, oggi Cristo è battezzato da Giovanni nel Giordano per la nostra salvezza, alleluia."
                    );
                }
            }

            if ($this->actual['evCode']=='PEN') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Vieni, Spirito Santo,",
                        "riempi il cuore dei tuoi fedeli, accendi in essi il fuoco del tuo amore: tu che nella varietà delle lingue umane raduni i popoli nell'unica fede, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Ricevete",
                        "lo Spirito Santo: coloro ai quali rimetterete i peccati saranno perdonati, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Oggi",
                        "la Pentecoste è compiuta, alleluia, oggi lo Spirito appare come fuoco ai discepoli, con doni e carismi li manda in tutta la terra per la testimonianza del Vangelo: Chi crederà e sarà battezzato sarà salvo, alleluia."
                    );
                }
            }

            if ($this->actual['evCode']=='TRI') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "A te",
                        "rendiamo grazie, una e vera Trinità, unico e sommo Dio."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Benedetta",
                                "la Santa Trinità, che crea e governa l'universo, benedetta ora e sempre."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Andate,",
                                "evangelizzate i popoli, battezzate nel nome del Padre e del Figlio e dello Spirito Santo, alleluia."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Molte cose",
                                "ho ancora da dirvi: non potete comprenderle ora; quando verrà lo Spirito, vi insegnerà tutta la verità, alleluia."
                            );
                        break;
                    }
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Padre non generato,",
                        "unico Figlio, Spirito Paraclito, Trinità santa e indivisibile, con tutte le forze ti acclamiamo: Gloria nei secoli!"
                    );
                }
            }

            if ($this->actual['evCode']=='COD') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Soave",
                        "è il tuo spirito, Signore: tu sei buono con i tuoi figli, dai loro pane dal cielo, sazi di beni gli affamati, rimandi i ricchi a mani vuote."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Io sono",
                        "il pane vivo disceso dal cielo: chi mangia di questo pane vivrà in eterno, alleluia."
                    );
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Mistero della Cena!",
                        "Ci nutriamo di Cristo, si fa memoria della sua passione, l'anima è ricolma di grazia, ci è donato il pegno della gloria, alleluia."
                    );
                }
            }

            if ($this->actual['evCode']=='SCG') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Ho portato sulla terra",
                        "il fuoco dell'amore: come vorrei che divampasse in tutto il mondo."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "L'amore di Dio",
                                "è stato riversato nei nostri cuori per mezzo dello Spirito Santo, che ci è stato dato."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Questo è avvenuto",
                                "perché si adempisse la Scrittura che dice: Volgeranno lo sguardo a colui che hanno trafitto."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Nella sua bontà misericordiosa,",
                                "Dio venne a visitarci e a redimere il suo popolo, alleluia."
                            );
                        break;
                    }
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Venite a me,",
                                "voi tutti che siete affaticati e oppressi, e io vi ristorerò."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Vedendo",
                                "che Gesù era già morto, non gli spezzarono le gambe; ma uno sei soldati gli colpì il costato con la lancia, e subito ne uscì sangue e acqua."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Chi di voi",
                                "se ha cento pecore e ne perde una, non lascia le novantanove nel deserto e va in cerca di quella perduta, finché non la ritrova? Alleluia."
                            );
                        break;
                    }
                }
            }

            if ($this->actual['evCode']=='GRE') {

                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Dio",
                        "ha dato a Cristo il trono di Davide: regnerà sul suo popolo per sempre."
                    );
                }

                elseif ($this->actual['ora']=="lodi") {
                    switch($this->actual['anno']) {
                        case 'A':
                            $this->antifona=array(
                                "Venite,",
                                "benedetti del Padre mio, ricevete l'eredità del regno preparato per voi dall'inizio del mondo."
                            );
                        break;
                        case 'B':
                            $this->antifona=array(
                                "Cristo",
                                "è il primogenito dei morti, il Re dei re della terra. Ha fatto di noi un regno per Dio, il Padre suo."
                            );
                        break;
                        case 'C':
                            $this->antifona=array(
                                "Ricordati di me,",
                                "Signore, quando sarai nel tuo regno."
                            );
                        break;
                    }
                }

                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Signore dei signori,",
                        "Re dei re è il suo nome: a lui gloria e potenza nei secoli."
                    );
                }
            }

        }
    }

    function build2() {

        if ($this->actual['fesCode']!='') {

            foreach($this->actual['festa'] as $k=>$f) {
            
                if ($f['comune']=='dedica') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Questo",
                                "è il luogo santo che il Signore ha scelto a sua dimora: qui si invoca il suo nome, qui Dio è presente tra noi, aleluia."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Zaccheo,",
                                "scendi subito, oggi devo fermarmi a casa tua. Scese ed accolse il Signore con grande gioia. Oggi la salvezza è entrata in questa casa, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Quanto è terribile",
                                "questo luogo! Questa è proprio la casa di Dio e la porta del cielo, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Questo",
                                "è il luogo santo che il Signore ha scelto a sua dimora: qui si invoca il suo nome, qui Dio è presente tra noi."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Zaccheo,",
                                "scendi subito, oggi devo fermarmi a casa tua. Scese ed accolse il Signore con grande gioia. Oggi la salvezza è entrata in questa casa."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Quanto è terribile",
                                "questo luogo! Questa è proprio la casa di Dio e la porta del cielo."
                            );
                        }
                    }
                }

                elseif ($f['comune']=='BVM') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Lo sguardo del Signore",
                                "si è posato su di me, umile ancella: meraviglie ha operato in me l'Onnipotente, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "La porta del cielo",
                                "chiusa a causa di Eva, ha riaperto a noi la Vergine Maria, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Santa Maria,",
                                "soccorri i misteri, sostieni i pavidi, aiuta i deboli: prega per il popolo di Dio, per il clero, per tutte le religiose: dona il conforto della tua presenza a quanti oggi ti venerano in questa santa celebrazione, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Lo sguardo del Signore",
                                "si è posato su di me, umile ancella: meraviglie ha operato in me l'Onnipotente."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "La porta del cielo",
                                "chiusa a causa di Eva, ha riaperto a noi la Vergine Maria."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Santa Maria,",
                                "soccorri i misteri, sostieni i pavidi, aiuta i deboli: prega per il popolo di Dio, per il clero, per tutte le religiose: dona il conforto della tua presenza a quanti oggi ti venerano in questa santa celebrazione."
                            );
                        }
                    }
                }

                if ($f['comune']=='apostoli') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Non voi",
                                "avete scelto me, ma io ho scelto voi; vi mando perché portiate frutto, e il vostro frutto rimanga, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Santi di Dio,",
                                "rallegratevi nel Signore: Dio vi ha scelti come sua eredità, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Per i tuoi santi,",
                                "o Dio, splende una luce perenne e una vita senza fine, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Non voi",
                                "avete scelto me, ma io ho scelto voi; vi mando perché portiate frutto, e il vostro frutto rimanga."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Avete abbandonato",
                                "ogni cosa per seguirmi: avrete cento volte tanto, e la vita eterna."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Nella nuova creazione,",
                                "quando il Figlio dell'uomo verrà nella gloria, voi regnerete con lui sopra le dodici tribù d'Israele."
                            );
                        }
                    }
                }

                if ($f['comune']=='martiri' || $f['comune']=='martire') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                "titolo"=>"Ap 3,10-12",
                                "testo"=>"Poiché hai osservato con costanza la mia parola, anch'io ti preserverò nell'ora della tentazione che sta per venire nel mondo intero, per mettere alla prova gli abitanti della terra. Verrò presto. Tieni saldo quello che hai, perché nessuno ti tolga la corona. Il vincitore lo porrò come una colonna nel tempio del mio Dio e non ne uscirà mai più. Inciderò su di lui il nome del mio Dio e il nome della città del mio Dio, della nuova Gerusalemme che scende dal cielo, da presso il mio Dio, insieme con il mio nome nuovo."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                "titolo"=>"1Gv 5,3-5",
                                "testo"=>"In questo consiste l'amore di Dio, nell'osservare i suoi comandamenti; e i suoi comandamenti non sono gravosi. Tutto ciò che è nato da Dio vince il mondo; e questa è la vittoria che ha sconfitto il mondo: la nostra fede. E chi è che vince il mondo se non chi crede che Gesù è il Figlio di Dio?"
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                "titolo"=>"Ap 2,10",
                                "testo"=>"Non temere ciò che stai per soffrire: ecco, il diavolo sta per gettare alcuni di voi in carcere, per mettervi alla prova e avrete una tribolazione per dieci giorni. Sii fedele fino alla morte e ti darò la corona della vita."
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                "titolo"=>"Ap 3,21",
                                "testo"=>"Il vincitore lo farò sedere presso di me, sul mio trono, come io ho vinto e mi sono assiso presso il Padre mio sul suo trono."
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                "titolo"=>"Ap 19,7.9",
                                "testo"=>"Rallegriamoci ed esultiamo, rendiamo gloria a Dio, perché son giunte le nozze dell'Agnello. Beati gli invitati al banchetto delle nozze dell'Agnello."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                "titolo"=>"Ap 7,14b-17",
                                "testo"=>"Essi sono coloro che sono passati attraverso la grande tribolazione e hanno lavato le loro vesti rendendole candide col sangue dell'Agnello. Per questo stanno davanti al trono di Dio e gli prestano servizio giorno e notte nel suo santuatìrio; e colui che siede sul trono stenderà la sua tenda sopra di loro. Non avranno più fame, né avranno più sete, né li colpirà il sole, né arsura di sorta, perché l'aGnello che sta in mezzo al trono sarà il loro pastore e li guiderà alle fonti delle acque della vita. E Dio tergerà ogni lacrima dai loro occhi."
                            );
                        }
                    }
                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                "titolo"=>"Rm 8,35.37-39",
                                "testo"=>"Chi ci separerà dall'amore di Cristo? Forse la tribolazione, l'angoscia, la persecuzione, la fame, la nudità, il pericolo, la spada? In tutte queste cose noi siamo più che vincitori per virtù di colui che ci ha amati. Io sono infatti persuaso che né norte nè vita, né angeli né principati, né presente né avvenire, né potenze, né altezza né profondità, né alcuna ltra creatura potrà mai separarci dall'amore di Dio, in Cristo Gesù, nostro Signore."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                "titolo"=>"2Cor 1,3-5",
                                "testo"=>"Sia benedetto Dio, Padre del Signore nostro Gesù Cristo, Padre misericordioso e Dio di ogni consolazione, il quale ci consola in ogni nostra tribolazione perché possiamo anche noi consolare qualli che si trovano in ogni genere di afflizione con la consolazione con cui siamo sonsolati noi stessi da Dio. Infatti, come abbondano le sofferenze di Cristo in noi, così, per mezzo di Cristo, abbonda anche la nostra consolazione."
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                "titolo"=>"1Pt 5,10-11",
                                "testo"=>"Il Dio di ogni grazia, il quale vi ha chiamati alla sua gloria eterna in Cristo, egli stesso vi ristabilirà, dopo una breve sofferenza vi confermerà e renderà forti e saldi. A lui la potenza nei secoli. Amen!"
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                "titolo"=>"Eb 11,33",
                                "testo"=>"I santi in virtù della fede conquistarono regno, esercitarono la giustiziz, conseguirono le promesse in Cristo Gesù nostro Signore."
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                "titolo"=>"Sap 3,1-2a.3b",
                                "testo"=>"Le anime dei giusti sono nelle mani di Dio, nessun tormento le toccherà. Agli occhi degli stolti parve che morissero; ma essi sono nella pace."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                "titolo"=>"1Pt 4,13-14",
                                "testo"=>"Nella misura in cui partecipate alle sofferenze di Cristo, rallegratevi, perché anche nella rivelazione della sua gloria possiate rallegrarvi ed esultare. Beati voi, se venite insultati per il nome di Cristo, perché lo Spirito della gloria e lo Spirito di Dio riposa su di voi."
                            );
                        }
                    }
                }

                if ($f['comune']=='martire') {

                    if ($this->actual['tempo']!='P') {

                        if($this->actual['ora']=='sesta') {
                            $this->info=array(
                                "titolo"=>"Gc 1,12",
                                "testo"=>"Beato l'uomo che sopporta la tentazione, perché una volta superata la prova riceverà la corona della vita che il Signore ha promesso a quelli che lo amano."
                            );
                        }
                    }
                }

                if ($f['comune']=='pastori') {

                    if($this->actual['ora']=='ves1') {
                        $this->info=array(
                            "titolo"=>"1Pt 5,1-4",
                            "testo"=>"Esorto gli anziani che sono tra voi, quale anziano come loro, testimone delle sofferenze di Cristo e partecipe della gloria che deve manifestarsi: Pascete il gregge di Dio che vi è affidato, sorvegliandolo non per forza ma volentieri, secondo Dio; non per vile interesse, ma di buon animo; non spadroneggiando sulle persone a voi affidate, ma facendovi modelli del gregge. E quando apparirà il pastore supremo, riceverete la corona della gloria che non appassisce."
                        );
                    }
                    elseif($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Eb 13,7-9a",
                            "testo"=>"Ricordatevi dei vostri capi, i quali vi hanno annunziato la parola di Dio; considerando attentamente l'esito del loro tenore di vita, imitatene la fede. Gesù Cristo è lo stesso di ieri, oggi e sempre! Non lasciatevi sviare da dottrine varie e peregrine."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"1Tm 4,16",
                            "testo"=>"Vigila su te stesso e sul tuo insegnamento e sii perseverante: così facendo salverai te stesso e coloro che ti ascoltano."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Tm 1,12",
                            "testo"=>"Rendo grazie a colui che mi ha dato la forza, Cristo Gesù Signore nostro, perché mi ha giudicato degno di fiducia chiamandomi al ministero."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"1Tm 3,13",
                            "testo"=>"Coloro che avranno ben servito, si acquisteranno un grado onorifico e una grande sicurezza nella fede in Cristo Gesù."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Ts 2,10-12",
                            "testo"=>"Fratelli, voi siete testimoni, e Dio stesso è testimone, come è stato santo, giusto, irreprensibile il nostro comportamento verso di voi credenti; e sapete anche che, come fa un padre verso i propri figli, abbiamo esortato ciascuno di voi, incoraggiandovi e scongiurandovi a comportarci in maniera degna di quel Dio che vi ha chiamati al suo regno e alla sua gloria."
                        );
                    }
                }

                if ($f['comune']=='dottori') {

                    if($this->actual['ora']=='ves1') {
                        $this->info=array(
                            "titolo"=>"Gc 3,17-18",
                            "testo"=>"La sapienza che viene dall'alto è anzitutto pura; poi pacifica, mite, arrendevole, piena di misericordia e di buoni frutti, senza parzialità, senza ipocrisia. Un frutto di giustizia viene seminato nella pace per coloro che fanno opera di pace."
                        );
                    }
                    elseif($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Sap 7,13-14",
                            "testo"=>"Senza frode imparai la sapienza e senza invidia la dono, non nascondo le sue ricchezze. Essa è un tesoro inesauribile per gli uomini; quanti se lo procurano si attirano l'amicizia di Dio, sono a lui raccomandati per i doni del suo insegnamento."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"1Tm 4,16",
                            "testo"=>"Vigila su te stesso e sul tuo insegnamento e sii perseverante: così facendo salverai te stesso e coloro che ti ascoltano."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Tm 1,12",
                            "testo"=>"Rendo grazie a colui che mi ha dato la forza, Cristo Gesù Signore nostro, perché mi ha giudicato degno di fiducia chiamandomi al ministero."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"1Tm 3,13",
                            "testo"=>"Coloro che avranno ben servito, si acquisteranno un grado onorifico e una grande sicurezza nella fede in Cristo Gesù."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Gc 3,17-18",
                            "testo"=>"La sapienza che viene dall'alto è anzitutto pura; poi pacifica, mite, arrendevole, piena di misericordia e di buoni frutti, senza parzialità, senza ipocrisia. Un frutto di giustizia viene seminato nella pace per coloro che fanno opera di pace."
                        );
                    }
                }

                if ($f['comune']=='monaci') {

                    if($this->actual['ora']=='ves1') {
                        $this->info=array(
                            "titolo"=>"2Cor 4,6-7",
                            "testo"=>"Fratelli, Dio rifulse nei nostri cuori, per far risplendere la conoscenza della gloria divina che rifulge sul volto di Cristo. Però abbiamo questo tesoro in vasi di creta, perché appaia che questa potenza straordinaria viene da Dio e non da noi."
                        );
                    }
                    elseif($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Ef 1,17-18",
                            "testo"=>"Fratelli, il Dio del Signore nostro Gesù Cristo, il Padre della gloria, vi dia uno spirito di sapienza e di rivelazione per una più profonda conoscenza di lui. Possa egli davvero illuminare gli occhi della vostra mente per farvi comprendere a quale speranza vi ha chiamati, quale tesoro di gloria racchiude la sua eredità fra i santi."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Sir 31,8-11",
                            "testo"=>"Beato il ricco, che sio trova senza macchia e che non corre dietro all'oro. Chi è costui? Noi lo proclameremo beato: difatti egli ha compiuto meraviglie in mezzo al suo popolo. Chi ha subito la prova, risultando perfetto? Sarà un titolo di gloria per lui. Chi, potendo trasgredire non ha trasgredito, e potendo compiere il male, non lo ha fatto? Si consolideranno i suoi beni e l'assemblea celebrerà le sue beneficenze."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Sir 39,13-16a",
                            "testo"=>"Ascoltatemi figli santi, crescete come una pianta di rose su un torrente. Come incenso spandete un buon profumo, fate fiorire fiori come il giglio, spargete profumo e intonate un canto di lode; benedite il Signore per tutte le opere sue. Magnificate il suo nome; proclamate le sue lodi con i vostri canti e le vostre cetre; così direte alla vostra lode:« Quanto sono magnifiche tutte le opere del Signore! »."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Pr 4,1-2.20-23",
                            "testo"=>"Ascoltate, o fogli, l'istruzione di un padre e fate attenzione per conoscere la verità, poiché io vi do una buona dottrina; non abbandonate il mio insegnamento. Figlio mio, fa' attenzione alle mie parole, porgi l'orecchio ai miei detti; non perderli mai di vista, custodiscili nel tuo cuore, perché essi sono vita per chi li trova e salute per tutto il suo corpo. Con ogni cura vigila sul cuore perché da esso sgorga la vita."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Sir 44,1-2.7-8.10.12",
                            "testo"=>"Facciamo dunque l'elogio degli uomini illustri, dei nostri antenati per generazione. Il Signore ha profuso in essi la gloria, la sua grandezza è apparsa sin dall'inisio dei secoli. Tutti costoro furono onorati dai contemporanei, furono un vanto ai loro tempi. Di loro alcuni lasciarono un nome, che ancora è ricordato con lode. Questi furono uomini virtuosi i cui meriti non furono dimenticati. La loro discendenza resta fedele alle promesse e i loro figli in grazia dei padri."
                        );
                    }
                }

                if ($f['comune']=='vergini') {

                    if($this->actual['ora']=='ves1') {
                        $this->info=array(
                            "titolo"=>"1Cor 7,32b.34a",
                            "testo"=>"Chi non è sposato si preoccupa delle cose del Signore, come possa piacerea l Signore! Così la donna non sposata, come la vergine, si preoccupa delle cose del Signore, per essere santa nel corpo e nello spirito."
                        );
                    }
                    elseif($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Ct 8,7",
                            "testo"=>"Le grandi acque non possono spegnere l'amore né i fiumi travolgerlo. Se un desse tutte le ricchezze della sua casa in cambio dell'amore, non ne avrebbe che dispregio."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Sap 8,21",
                            "testo"=>"Sapendo che non avrei ottenuta la sapienza se Dio non me l'avesse concessa - ed era proprio dell'intelligenza sapere da chi viene tale dono - mi rivolsi al Signore e lo pregai."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Cor 7,25",
                            "testo"=>"Quanto alle vergini, non ho alcun comando dal Signore, ma do un consiglio, come uno che ha ottenuto misericordia dal Signore e merita fiducia."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Ap 19,6b-7",
                            "testo"=>"Ha preso possesso del suo regno il Signore, il nostro Dio, l'Onnipotente. Rallegriamoci ed esultiamo, rendiamo a lui gloria, perché sono giunte le nozze dell'Agnello; la sua sposa è pronta."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Cor 7,32b.34a",
                            "testo"=>"Chi non è sposato si preoccupa delle cose del Signore, come possa piacerea l Signore! Così la donna non sposata, come la vergine, si preoccupa delle cose del Signore, per essere santa nel corpo e nello spirito."
                        );
                    }
                }

                if ($f['comune']=='santi' || $f['comune']=='religiosi' || $f['comune']=='SFA') {

                    if($this->actual['ora']=='ves1') {
                        $this->info=array(
                            "titolo"=>"Fil 3,7-8",
                            "testo"=>"Quello che poteva essere per me un guadagno, l'ho considerato una perdita a motivo di Cristo. Anzi, tutto ormai io reputo una perdita di fronte alla sublimità della conoscenza di Criato Gesù, mio Signore, per il quale ho lasciato perdere tutte queste cose e le considero come spazzatura, al fine di guadagnare Cristo."
                        );
                    }
                    elseif($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Rm 12,1-2",
                            "testo"=>"Vi esorto, fratelli, per la misericordia di Dio, ad offrire i vostri corpi come sacrificio vivente, santo e gradito a Dio; è questo il vostro culto spirituale. Non conformatevi alla mentalità di questo secolo, ma trasformtevi rinnovando la vostra mente, per poter discernere la voltà di Dio, ciò che è buono, a lui gradito e perfetto."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Gal 6,7b-8",
                            "testo"=>"Ciascuno raccoglierà quello che avrà seminato. Chi semina nella sua carne, dalla carne raccoglierà corruzione; chi semina nello Spirito, dallo Spirito raccoglierà vita eterna."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Cor 9,26-27",
                            "testo"=>"Io corro, ma non come chi è senza meta; faccio il pugilato, ma non come chi batte l'aria, anzi tratto duramente il mio corpo e lo trascino in schiavitù perché non succeda che dopo aver predicato agli altri, venga io stesso squalificato."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Fil 4,8-9b",
                            "testo"=>"Fratelli, tutto quello che è vero, nobile, giusto, puro, amabile, onorato, quello che è virtù e merita lode, tutto questo sia oggetto dei vostri pensieri. E il Dio della pace sarà con voi!"
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Rm 8,28-30",
                            "testo"=>"Noi sappiamo che tutto concorre al bene di coloro che amano Dio, che sono stati chiamati secondo il suo disegno. Poiché quelli che egli da sempre ha conosciuto li ha anche predestinati ad essere conformi all'immagine del Figlio suo, perché egli sia il primogenito tra molti fratelli; quelli poi che ha predestinati li ha anche chiamati; quelli che ha chiamati li ha anche giustificati; quelli che ha giustificati li ha anche glorificati."
                        );
                    }
                }

                if ($f['comune']=='sante' || $f['comune']=='religiose') {

                    if($this->actual['ora']=='ves1') {
                        $this->info=array(
                            "titolo"=>"Fil 3,7-8",
                            "testo"=>"Quello che poteva essere per me un guadagno, l'ho considerato una perdita a motivo di Cristo. Anzi, tutto ormai io reputo una perdita di fronte alla sublimità della conoscenza di Criato Gesù, mio Signore, per il quale ho lasciato perdere tutte queste cose e le considero come spazzatura, al fine di guadagnare Cristo."
                        );
                    }
                    elseif($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Rm 12,1-2",
                            "testo"=>"Vi esorto, fratelli, per la misericordia di Dio, ad offrire i vostri corpi come sacrificio vivente, santo e gradito a Dio; è questo il vostro culto spirituale. Non conformatevi alla mentalità di questo secolo, ma trasformtevi rinnovando la vostra mente, per poter discernere la voltà di Dio, ciò che è buono, a lui gradito e perfetto."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Gal 6,7b-8",
                            "testo"=>"Ciascuno raccoglierà quello che avrà seminato. Chi semina nella sua carne, dalla carne raccoglierà corruzione; chi semina nello Spirito, dallo Spirito raccoglierà vita eterna."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Cor 9,26-27",
                            "testo"=>"Io corro, ma non come chi è senza meta; faccio il pugilato, ma non come chi batte l'aria, anzi tratto duramente il mio corpo e lo trascino in schiavitù perché non succeda che dopo aver predicato agli altri, venga io stesso squalificato."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Fil 4,8-9b",
                            "testo"=>"Fratelli, tutto quello che è vero, nobile, giusto, puro, amabile, onorato, quello che è virtù e merita lode, tutto questo sia oggetto dei vostri pensieri. E il Dio della pace sarà con voi!"
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Rm 8,28-30",
                            "testo"=>"Noi sappiamo che tutto concorre al bene di coloro che amano Dio, che sono stati chiamati secondo il suo disegno. Poiché quelli che egli da sempre ha conosciuto li ha anche predestinati ad essere conformi all'immagine del Figlio suo, perché egli sia il primogenito tra molti fratelli; quelli poi che ha predestinati li ha anche chiamati; quelli che ha chiamati li ha anche giustificati; quelli che ha giustificati li ha anche glorificati."
                        );
                    }
                }

                if ($f['comune']=='DEF') {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"1Ts 4,14",
                            "testo"=>"Noi crediamo che Gesù è morto e risuscitato; così anche quelli che sono morti, Dio li radunerà per mezzo di Gesù insieme con lui."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Gb 19,25-26",
                            "testo"=>"Io lo so che il mio redentore è vivo e che, ultimo, si ergerà sulla polvere! Dopo che questa mia pelle sarà distrutta, senza la mia carne, vedrò Dio."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Sap 1,13-15",
                            "testo"=>"Dio non ha creato la morte e non gode per la rovina dei viventi. Egli infatti ha creato tutto per l'esistenza; le creature del mondo sono sane, in esse non c'è veleno di morte, né gli inferi regnano sulla terra, perché la giustizia è immortale."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Is 25,8",
                            "testo"=>"Dio eliminerà la morte per sempre; il Signore Dio asciugherà le lacrime su ogni volto; farà scomparire da tutto il paese la condizione disonorevole del suo popolo, poiché il Signore ha parlato."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Cor 15,55-57",
                            "testo"=>"Dov'è, o morte, la tua vittoria? Dov'è, o morte, il tuo pungiglione? Il pungiglione della morte è il peccato e la forza del peccato è la legge. Siano rese grazie a Dio che ci dà la vittoria per mezzo del Signore nostro Gesù Cristo."
                        );
                    }
                }
            }
        }

    }


    ///////////////////////////////////////////////////////////////////////////
    function drawAntifona($flag) {
        //true = prima - false = dopo

        echo '<div style="position:relative;margin-top:5px;margin-bottom:10px;font-size:1.1em;" >';
        echo '<div class="salAntifona" >ant.</div>';
            echo '<div class="salAntifona2" >';
                echo $this->antifona[0];
                if ($flag) echo ' / ';
                else echo ' ';
                echo $this->antifona[1];
            echo '</div>';
        echo '</div>';
    }

    function draw() {

        $this->drawAntifona(true);

        echo '<div class="salResBlockTitle" >';
            echo $this->titolo;
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            if ($this->res) {
                echo $this->res->draw();
            }
        echo '</div>';

        $this->drawAntifona(false);
    }

}

?>