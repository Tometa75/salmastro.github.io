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