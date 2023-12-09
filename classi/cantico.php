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
        //definisci le antifone del Salterio
        if ($this->actual['weekDay']==0) {

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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                                    "la verità e la vita: nessuno viene al Padre se non  per me, alleluia."
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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
                    elseif ($this->actual['ora']=="ves2") {
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