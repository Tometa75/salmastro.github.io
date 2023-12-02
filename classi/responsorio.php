<?php

class Responsorio {

    protected $actual;
    protected $tipo="";
    protected $info=array();
    protected $res=array(
        "titolo"=>"Responsorio breve",
        "testo"=>false
    );

    function __construct($caller,$tipo) {

        $this->actual=$caller->actual;
        $this->tipo=$tipo;

        if ($tipo=='RBB') $this->res['titolo']="";

        $this->init();
        $this->build();
    }

    function init() {

        if ($this->actual['weekDay']==0) {
            switch ($this->actual['ora']) {
                case 'ves1': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Quanto sono grandi"),
                            array('ebd','','Le hai fatte con bontà e sapienza'),
                            array('*','2','le tue opere, Signore!')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Dal sorgere del sole fino al tramonto"),
                            array('ebd','',"L'immensa sua gloria supera i cieli:"),
                            array('*','2','lodate il nome del Signore.')
                        );
                    }
                break;
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Cristo, Figlio del Dio vivo,"),
                            array('ebd','','Tu che siedi alla destra del Padre,'),
                            array('*','2','abbi pietà di noi.')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Ti rendiamo grazie, Signore,"),
                            array('ebd','',"Raccontiamo i tuoi prodigi,"),
                            array('*','2','invochiamo il tuo nome.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Volgi il mio cuore alle tue parole,"),
                                array('ris','',"fammi vivere nella tua via."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Canterò per sempre l'amore del Signore,"),
                                array('ris','',"annunzierò la tua fedeltà nei secoli."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"In te Signore, è la sorgente della vita,"),
                                array('ris','',"nella tua luce vediamo la luce."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"L'anima mia desidera la case del Signore,"),
                                array('ris','',"il mio cuore e la mia carne esultano nel Dio vivente."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"La tua parola, Signore, è per sempre,"),
                                array('ris','',"la tua fedeltà per ogni generazione."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Il mio grido giunga a te, Signore:"),
                                array('ris','',"rendimi saggio con la tua parola."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Anima mia, benedici il Signore:"),
                                array('ris','',"egli ti salva dalla morte."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Signore, chi abiterà nella tua tenda?"),
                                array('ris','',"Chi vive con giustizia e dice il vero."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Grido a te con tutto il cuore, rispondimi:"),
                                array('ris','',"custodirò i tuoi precetti, Signore."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Il Signore è mia luce e mia salvezza,"),
                                array('ris','',"il Signore difende la mia vita."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Il Signore guidava il suo popolo nella speranza:"),
                                array('ris','',"lo ha fatto entrare nella sua terra santa."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Ti amo, Signore, mia forza,"),
                                array('ris','',"mio scudo, mia roccia di salvezza."),
                            );
                        break;
                    }
                break;
                case 'ves2': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Benedetto sei tu, Signore,"),
                            array('ebd','','A te la lode e la gloria nei secoli,'),
                            array('*','2',"nell'alto dei cieli.")
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Grande è il Signore,"),
                            array('ebd','',"La sua sapienza non ha confini,"),
                            array('*','2',"mirabile la sua potenza.")
                        );
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==1) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Da sempre e per sempre"),
                            array('ebd','','Egli solo ha fatto prodigi:'),
                            array('*','2','benedetto il Signore!')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Esultate, giusti, nel Signore,"),
                            array('ebd','',"Cantate al Signore un canto nuovo,"),
                            array('*','2','ai santi si addice la lode.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Tu sei il mio aiuto: non lasciarmi!"),
                                array('ris','',"Non abbandonarmi, Dio mia salvezza!"),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Crea in me, o Dio, un cuore puro,"),
                                array('ris','',"non allontanarmi dal tuo volto."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"L'occhio del Signore sui giusti,"),
                                array('ris','',"l'orecchio di lui al loro grido."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Beata la nazione che ha Dio per Signore,"),
                                array('ris','',"il popolo, che ha scelto come suo erede."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Benedirò il Signore in ogni tempo,"),
                                array('ris','',"sulla mia bocca sempre la sua lode."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"In Dio la mia salvezza e la mia gloria:"),
                                array('ris','',"è lui la mia difesa."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"O Dio, ritorna a darci la vita:"),
                                array('ris','',"e il tuo popolo si rallegri in te."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Dio di misericordia e di grazia,"),
                                array('ris','',"lento all'ira e grande nell'amore."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Riscattami, Signore, pietà di me:"),
                                array('ris','',"nell'assemblea benedirò il tuo nome."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Il Signore è il mio pastore: non manco di nulla;"),
                                array('ris','',"in pascoli erbosi mi fa riposare."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Inneggiate al Signore, suoi fedeli,"),
                                array('ris','',"ricordate il suo santo nome."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Ricordati, o Dio, del tuo amore,"),
                                array('ris','',"della tua fedeltà che è da sempre."),
                            );
                        break;
                    }
                break;
                case 'ves': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Risanami, Signore:"),
                            array('ebd','','Io ho detto: Mio Dio, fammi grazia,'),
                            array('*','2',"ho peccato contro di te.")
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Salga a te, Signore,"),
                            array('ebd','',"Come profumo d'incenso"),
                            array('*','2',"la mia preghiera.")
                        );
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==2) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Dio, mia roccia di salvezza,"),
                            array('ebd','','Mio scudo, mia difesa,'),
                            array('*','2','in te la mia speranza.')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Ascolta la mia voce, Signore:"),
                            array('ebd','',"Precedo l'aurora e grido aiuto:,"),
                            array('*','2','spero sulla tua parola.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Cammina nell'innocenza, e confida nel Signore:"),
                                array('ris','',"egli ti colmerà dei suoi beni."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"La salvezza del Signore è vicina a chi lo teme,"),
                                array('ris','',"la sua gloria abiterà la nostra terra."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Nella giustizia Dio giudica il mondo,"),
                                array('ris','',"nel diritto egli giudica i popoli."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Felice chi ha il cuore buono e generoso:"),
                                array('ris','',"il giusto sarà benedetto per sempre."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"A te piace, o Dio, la sincerità del cuore,"),
                                array('ris','',"e nell'intimo mi insegni la sapienza."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Padre santo, nel tuo amore veglia su di noi:"),
                                array('ris','',"e con te vivremo in unità perfetta."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Il desiderio degli umili tu ascolti, Signore:"),
                                array('ris','',"tendi il tuo orecchio, conferma il nostro cuore."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"La tua parola è lampada ai miei passi"),
                                array('ris','',"e luce alla mia strada."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Trattami, o Dio, secondo il tuo amore,"),
                                array('ris','',"insegnami i tuoi comandamenti."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Radunaci, Signore, da tutte le nazioni,"),
                                array('ris','',"per rendere grazie al tuo santo nome."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Dio libera chi non trova aiuto,"),
                                array('ris','',"egli salva la vita dei suoi poveri."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Dio manda sulla terra la sua parola,"),
                                array('ris','',"il suo messaggio corre veloce."),
                            );
                        break;
                    }
                break;
                case 'ves': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"La tua parola, Signore,"),
                            array('ebd','','La tua fedeltà per ogni generazione:'),
                            array('*','2',"rimane in eterno.")
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Mi colmerai di gioia, Signore,"),
                            array('ebd','',"Festa senza fine"),
                            array('*','2',"alla tua presenza.")
                        );
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==3) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Verso la tua parola"),
                            array('ebd','','Fammi vivere nella tua via,'),
                            array('*','2','guida il mio cuore.')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Benedirò il Signore"),
                            array('ebd','',"Sulla mia bocca sempre la sua lode"),
                            array('*','2','in ogni tempo.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Additami, Signore, le tue vie,"),
                                array('ris','',"insegnami i tuoi sentieri."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Il Signore è giusto, ama la giustizia:"),
                                array('ris','',"i buoni contempleranno il suo volto."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Gioia e allegrezza per quelli che ti cercano;"),
                                array('ris','',"dicano sempre: Grande è il Signore!"),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"È giusto lodare il Signore,"),
                                array('ris','',"cantare salmi per te, o Altissimo."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"I tuoi sacerdoti si vestano di giustizia"),
                                array('ris','',"e i tuoi fedeli cantino di gioia."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Chi è come te, Dio dell'universo?"),
                                array('ris','',"Sei forte, Signore, fedele alla parola."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Sopra di noi la tua grazia, o Dio:"),
                                array('ris','',"in te la nostra speranza."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"A te offro un sacrificio di grazie,"),
                                array('ris','',"e grido il tuo nome, Signore."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Gli occhi del Signore su quelli che lo temono,"),
                                array('ris','',"su quelli che sperano nel suo amore."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Scrutami, o Dio, e vedi il mio cuore;"),
                                array('ris','',"guidami nella via della vita."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"I miti possederanno la terra,"),
                                array('ris','',"e godranno di una grande pace."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Signore, mia parte di beni e mio calice,"),
                                array('ris','',"nelle tue mani è la mia vita."),
                            );
                        break;
                    }
                break;
                case 'ves': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Signore, mia salvezza,"),
                            array('ebd','','Non abbandonarmi con i peccatori,'),
                            array('*','2',"abbi pietà di me.")
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Come la pupilla dell'occhio"),
                            array('ebd','',"Nascondici all'ombra delle tue ali,"),
                            array('*','2',"difendici, Signore.")
                        );
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==4) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Con tutto il cuore ti cerco:"),
                            array('ebd','','Custodirò la tua parola:'),
                            array('*','2','rispondimi, Signore.')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Al sorgere del giorno"),
                            array('ebd','',"Tu sei il mio aiuto:"),
                            array('*','2','mi ricordo di te, Signore.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Opere del Signore, benedite il Signore!"),
                                array('ris','',"A lui, la lode e la gloria nei secoli!"),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Signore, corro la via dei tuoi comandi,"),
                                array('ris','',"poiché tu allarghi il mio cuore."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"O Dio, rinnova i tuoi prodigi,"),
                                array('ris','',"manifesta la tua forza fra le genti."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Sostieni l'uomo giusto, Signore,"),
                                array('ris','',"tu che scruti i cuori e i pensieri."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Splendore e maestà dinanzi a Dio,"),
                                array('ris','',"forza e bellezza nel suo santuario."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Buono sei tu, Signore, e fonte di ogni bene:"),
                                array('ris','',"insegnami il tuo volere."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Il Signore è vicino a quanti lo invocano;"),
                                array('ris','',"egli ascolta il loro grido."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Confida nel Signore, fa' il bene:"),
                                array('ris','',"abiterai felice nella tua terra."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"I cieli proclamano la gloria di Dio,"),
                                array('ris','',"l'opera delle sue mani annunzia il firmamento."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Insegnami la via da percorrere, Signore:"),
                                array('ris','',"mi guidi il tuo spirito buono per una terra piana."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Ti rendo grazie, Signore: mi hai esaudito,"),
                                array('ris','',"sei tu la mia salvezza."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Io spero nel Signore,"),
                                array('ris','',"l'anima mia spera nella sua parola."),
                            );
                        break;
                    }
                break;
                case 'ves': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Ci nutri, Signore,"),
                            array('ebd','','Ci sazi con miele della roccia,'),
                            array('*','2',"con fiore di frumento.")
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Il Signore è il mio pastore:"),
                            array('ebd','',"In pascoli erbosi mi fa riposare:"),
                            array('*','2',"non manco di nulla.")
                        );
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==5) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Al mattino, o Dio,"),
                            array('ebd','','Insegnami la via da seguire,'),
                            array('*','2','fammi conoscere il tuo amore.')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Invocherò l'Altissimo:"),
                            array('ebd','',"Dal cielo manderà la sua salvezza:"),
                            array('*','2','da lui ogni mio bene.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"I sentieri del Signore sono verità e grazia"),
                                array('ris','',"per chi osserva il suo patto e la sua legge."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Con la tua parola sostienimi, e avrò la vita:"),
                                array('ris','',"non deludermi nella mia speranza."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"In Dio gioisce il nostro cuore,"),
                                array('ris','',"confidiamo nel suo santo nome."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"La grazia del Signore è da sempre e per sempre"),
                                array('ris','',"per il popolo che custodisce l'alleanza."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Sono affranto e sfinito, Signore:"),
                                array('ris','',"per la tua parola fammi vivere."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Presso il Signore è l'amore,"),
                                array('ris','',"e grande è la sua redenzione."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"I decreti del Signore sono giusti, rallegrano il cuore;"),
                                array('ris','',"il comando del Signore è limpido, illumina gli occhi."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Rendete grazie al Signore: egli è buono,"),
                                array('ris','',"eterna è la sua misericordia."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Buono e pietoso è il Signore,"),
                                array('ris','',"lento all'ira e grande nell'amore."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Mi hai liberato, Signore, dalla morte:"),
                                array('ris','',"camminerò alla tua presenza nella terra dei viventi."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Sulla terra si conosca la tua via,"),
                                array('ris','',"la tua salvezza, in tutte le nazioni."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Guarda, o Dio, nostro scudo,"),
                                array('ris','',"guarda il volto del tuo Cristo."),
                            );
                        break;
                    }
                break;
                case 'ves': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Cristo ci ama,"),
                            array('ebd','','Ha fatto di noi un regno, e sacerdoti per il nostro Dio,'),
                            array('*','2',"ci ha liberati con il suo sangue.")
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Cristo è morto per i nostri peccati"),
                            array('ebd','',"Messo a morte nella carne, ma reso vivo nello spirito"),
                            array('*','2',"per ricondurci al Padre.")
                        );
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==6) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Io grido al Signore:"),
                            array('ebd','','Mio bene nella terra dei viventi,'),
                            array('*','2','sei tu il mio rifugio.')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Esultano le mie labbra"),
                            array('ebd','',"La mia lingua proclama la tua giustizia"),
                            array('*','2','cantando le tue lodi.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Insegnami i tuoi sentieri,"),
                                array('ris','',"guidami nella tua verità, o Signore."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Il timore di Dio è puro, rimane per sempre;"),
                                array('ris','',"i giudizi del Signore sono fedeli e giusti."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Il sacrificio di lode è gradito a Dio;"),
                                array('ris','',"chi cammina nella retta via avrà salvezza."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Venite, e vedete le opere del Signore,"),
                                array('ris','',"santo e sublime fra tutte le nazioni."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Perdona, Signore, le mie colpe nascoste,"),
                                array('ris','',"dall'orgoglio salva il tuo servo."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Guidami, o Dio, sulla tua strada:"),
                                array('ris','',"i tuoi precetti mi sono cari."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"È bello che i fratelli vivano insieme:"),
                                array('ris','',"il Signore li ricolma di benedizioni."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Il Signore ama il suo popolo,"),
                                array('ris','',"agli umili dona la vittoria."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Grandi sono le tue opere, o Signore,"),
                                array('ris','',"profondi i tuoi pensieri!"),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Mia eredità per sempre le tue parole:"),
                                array('ris','',"sono gioia per il mio cuore."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Nei tuoi decreti, Signore, è la mia gioia;"),
                                array('ris','',"non dimentico la tua parola."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Ti esalto, mio Dio, mio re,"),
                                array('ris','',"benedico il tuo nome per sempre."),
                            );
                        break;
                    }
                break;
            }
        }
        
        if ($this->actual['ora']=='comp' || $this->actual['ora']=='comp1') {

            if ($this->actual['tempo']=='P') {
                $this->info=array(
                    array('ris','',"Signore, nelle tue mani affido il mio spirito."),
                    array('ebd','','Dio di verità tu mi hai redento.'),
                    array('*','2','Alleluia, alleluia.')
                );
            }
            else {
                $this->info=array(
                    array('ris','',"Signore,"),
                    array('ebd','','Dio di verità tu mi hai redento:'),
                    array('*','2',"nelle tue mani affido il mio spirito.")
                );
            }
        }
    }

    function build() {

        //////////////////////////////////////////////////////////////////////////
        //modifica responsorio breve in base al TEMPO LITURGICO

        if ($this->actual['tempo']=='A') {

            if ($this->actual['weekDay']==0) {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Cristo, Figlio del Dio vivo,"),
                        array('ebd','','Tu che vieni nel mondo,'),
                        array('*','2',"abbi pietà di noi.")
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Mostraci, Signore,"),
                        array('ebd','','E donaci la tua salvezza,'),
                        array('*','2',"la tua misericordia.")
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)<'1224') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Gerusalemme, città di Dio,"),
                        array('ebd','','In te apparirà la sua gloria,'),
                        array('*','2',"su di te sorgerà il Signore.")
                    );
                }
                if($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Le nazioni temeranno il tuo nome, Signore;"),
                            array('ris','',"la tua gloria, tutti i re della terra."),
                        );
                }
                if($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Per la tua benevolenza, Signore, ricordati di noi,"),
                            array('ris','',"vieni a visitarci con la tua salvezza."),
                        );
                }
                if($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Vieni, Signore, non tardare:"),
                            array('ris','',"libera dal peccato il tuo popolo."),
                        );
                }

                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Vieni a liberarci, Signore,"),
                        array('ebd','','Mostraci il tuo volto, e saremo salvi,'),
                        array('*','2',"Dio dell'universo.")
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1224') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Domani"),
                        array('ebd','','Regnerà su di noi il Salvatore del mondo:'),
                        array('*','2',"la terra sarà liberata dal peccato.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Le nazioni temeranno il tuo nome, Signore;"),
                            array('ris','',"la tua gloria, tutti i re della terra."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Per la tua benevolenza, Signore, ricordati di noi,"),
                            array('ris','',"vieni a visitarci con la tua salvezza."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Vieni, Signore, non tardare:"),
                            array('ris','',"libera dal peccato il tuo popolo."),
                        );
                }   
            }    
        }
        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='N') {

            if (substr($this->actual['today'],4,4)=='1225') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Oggi lo saprete:"),
                        array('ebd','','Col nuovo giorno vedrete la sua gloria:'),
                        array('*','2',"il Signore viene.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore manifestò la sua salvezza,"),
                        array('ebd','','Alle nazioni rivelò la sua giustizia.'),
                        array('*','2',"alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore si è ricordato del suo amore, alleluia,"),
                            array('ris','',"della sua fedeltà alla casa di Israele, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I confini della terra hanno veduto, alleluia,"),
                            array('ris','',"la salvezza del nostro Dio, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Amore e fedeltà s'incontrano, alleluia,"),
                            array('ris','',"pace e giustizia si abbracciano, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='SAF') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne,"),
                        array('ebd','','Dalla sua pienezza tutti abbiamo ricevuto:'),
                        array('*','2',"è venuto ad abitare in mezzo a noi.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Cristo, Figlio del Dio vivo,"),
                        array('ebd','','Tu che fosti obbediente a Giuseppe e a Maria,'),
                        array('*','2',"abbi pietà di noi.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore ci insergnerà le sue vie,"),
                            array('ris','',"e cammineremo per i suoi sentieri."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Povertà e fatica, sin dalla mia giovinezza,"),
                            array('ris','',"dopo l'umiliazione sono stato esaltato."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Tutti i tuoi figli saranno discepoli del Signore,"),
                            array('ris','',"grande sarà la loro pace."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Cristo fu in tutto simile ai fratelli,"),
                        array('ebd','','Apparso sulla terra, abitò tra gli uomini'),
                        array('*','2',"per rivelare l'amore di Dio.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='2DN') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne,"),
                        array('ebd','','Dalla sua pienezza tutti abbiamo ricevuto:'),
                        array('*','2',"è venuto ad abitare in mezzo a noi.")
                    );
                }
                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore manifestò la sua salvezza."),
                        array('ebd','','Alle nazioni rivelò la sua giustizia.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore si è ricordato del suo amore, alleluia,"),
                            array('ris','',"della sua fedeltà alla casa di Israele, alleuia."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I confini della terra hanno veduto, alleluia,"),
                            array('ris','',"la salvezza del nosgtro Dio, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Amore e fedeltà s'incontrano, alleluia,"),
                            array('ris','',"pace e giustizia si abbracciano, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='1226a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Mia forza,"),
                        array('ebd','','È lui la mia salvezza:'),
                        array('*','2',"mio canto è il Signore.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore l'ha rivestito di gioia,"),
                            array('ris','',"gli ha posto sul capo una splendida corona."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Confido in Dio, non ho timore:"),
                            array('ris','',"chi potrà farmi del male?"),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Torneranno nella gioia del raccolto,"),
                            array('ris','',"canteranno i prodigi del Signore."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='1227a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Li ha posti come capi"),
                        array('ebd','','Faranno ricordare il tuo nome, Signore,'),
                        array('*','2',"in mezzo al tuo popolo.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Nel mondo intero si è diffuso il loro annunzio,"),
                            array('ris','',"ai confini della terra la loro parola."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Hanno custodito gli insegnamenti di Cristo,"),
                            array('ris','',"sono testimoni delle sue parole."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Gioite ed esultate, dice il Signore:"),
                            array('ris','',"i vostri nomi sono scritti nel cielo."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='1228a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"I santi martiri"),
                        array('ebd','','La loro ricompensa è il Signore:'),
                        array('*','2',"vivono in eterno.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore li ha rivestiti di gioia,"),
                            array('ris','',"ha posto sul loro capo una splendida corona."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I santi vivono in eterno:"),
                            array('ris','',"la loro ricompensa è il Signore."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Esultano i santi nella gloria,"),
                            array('ris','',"nella casa di Dio cantano di gioia."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='1229a' || $this->actual['evCode']=='1230a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore manifestò la sua salvezza."),
                        array('ebd','','Alle nazioni rivelò la sua giustizia.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore si è ricordato del suo amore, alleluia,"),
                            array('ris','',"della sua fedeltà alla casa di Israele, alleuia."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I confini della terra hanno veduto, alleluia,"),
                            array('ris','',"la salvezza del nosgtro Dio, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Amore e fedeltà s'incontrano, alleluia,"),
                            array('ris','',"pace e giustizia si abbracciano, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='1231a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore manifestò la sua salvezza."),
                        array('ebd','','Alle nazioni rivelò la sua giustizia.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore si è ricordato del suo amore, alleluia,"),
                            array('ris','',"della sua fedeltà alla casa di Israele, alleuia."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I confini della terra hanno veduto, alleluia,"),
                            array('ris','',"la salvezza del nosgtro Dio, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Amore e fedeltà s'incontrano, alleluia,"),
                            array('ris','',"pace e giustizia si abbracciano, alleluia."),
                        );
                }
            }

            elseif ($this->actual['evCode']=='MSS') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore manifestò la sua salvezza."),
                        array('ebd','','Alle nazioni rivelò la sua giustizia.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore si è ricordato del suo amore, alleluia,"),
                            array('ris','',"della sua fedeltà alla casa di Israele, alleuia."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I confini della terra hanno veduto, alleluia,"),
                            array('ris','',"la salvezza del nosgtro Dio, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Amore e fedeltà s'incontrano, alleluia,"),
                            array('ris','',"pace e giustizia si abbracciano, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='F0102' || $this->actual['evCode']=='F0103' || $this->actual['evCode']=='F0104' || $this->actual['evCode']=='F0105') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore manifestò la sua salvezza."),
                        array('ebd','','Alle nazioni rivelò la sua giustizia.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore si è ricordato del suo amore, alleluia,"),
                            array('ris','',"della sua fedeltà alla casa di Israele, alleuia."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I confini della terra hanno veduto, alleluia,"),
                            array('ris','',"la salvezza del nosgtro Dio, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Amore e fedeltà s'incontrano, alleluia,"),
                            array('ris','',"pace e giustizia si abbracciano, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='EPI') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Adoreranno il Signore"),
                        array('ebd','','Lo serviranno tutti i popoli,'),
                        array('*','2',"tutti i re della terra.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Dio è apparso sulla terra"),
                            array('ris','',"e ha vissuto con gli uomini."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I popoli vedranno al tua giustizia;"),
                            array('ris','',"tutti i re, la tua gloria."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"O popoli, benedite il nostro Dio,"),
                            array('ris','',"fate risuonare la sua lode."),
                        );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"In lui saranno benedetti"),
                        array('ebd','','Daranno gloria al suo nome'),
                        array('*','2',"tutti i popoli della terra.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='F0107' || $this->actual['evCode']=='F0108' || $this->actual['evCode']=='F0109' || $this->actual['evCode']=='F0110' || $this->actual['evCode']=='F0111' || $this->actual['evCode']=='F0112') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Adoreranno il Signore"),
                        array('ebd','','Lo serviranno tutti i popoli,'),
                        array('*','2',"tutti i re della terra.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Dio è apparso sulla terra"),
                            array('ris','',"e ha vissuto con gli uomini."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I popoli vedranno al tua giustizia;"),
                            array('ris','',"tutti i re, la tua gloria."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"O popoli, benedite il nostro Dio,"),
                            array('ris','',"fate risuonare la sua lode."),
                        );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"In lui saranno benedetti"),
                        array('ebd','','Daranno gloria al suo nome'),
                        array('*','2',"tutti i popoli della terra.")
                    );
                }
            }
        }

        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='Q') {

            if ($this->actual['evCode']=='PAL') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Con il tuo sangue, Signore,"),
                        array('ebd','','Da ogni popolo e razza, da ogni lingua e nazione'),
                        array('*','2',"tu ci hai redenti.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"È stato offerto in sacrificio, perché lo ha voluto:"),
                            array('ris','',"e non ha aperto bocca."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Egli ha portato la nostra debolezza,"),
                            array('ris','',"si è addossato le nostre iniquità."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Veneriamo la croce, innalzata per noi:"),
                            array('ris','',"adoriamo il segno della nostra salvezza."),
                        );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Noi ti adoriamo e"),
                        array('ebd','','Con la tua croce hai redento il mondo:'),
                        array('*','2',"ti benediciamo, o Cristo.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='SS1' || $this->actual['evCode']=='SS2' || $this->actual['evCode']=='SS3') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Con il tuo sangue, Signore,"),
                        array('ebd','','Da ogni popolo e razza, da ogni lingua e nazione'),
                        array('*','2',"tu ci hai redenti.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"È stato offerto in sacrificio perché lo ha voluto:"),
                        array('ris','',"e non ha aperto bocca."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Egli ha portato la nostra debolezza,"),
                        array('ris','',"si è addossato le nostre iniquità."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Veneriamo la croce, innalzata per noi:"),
                        array('ris','',"adoriamo il segno della nostra salvezza."),
                    );
                } 
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Contro di te abbiamo peccato:"),
                        array('ebd','','Ascolta, Cristo, la nostra voce:'),
                        array('*','2',"pietà di noi, Signore!")
                    );
                }
            }

            elseif ($this->actual['evCode']=='SS4') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Con il tuo sangue, Signore,"),
                        array('ebd','','Da ogni popolo e razza, da ogni lingua e nazione'),
                        array('*','2',"tu ci hai redenti.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"È stato offerto in sacrificio perché lo ha voluto:"),
                        array('ris','',"e non ha aperto bocca."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Egli ha portato la nostra debolezza,"),
                        array('ris','',"si è addossato le nostre iniquità."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Veneriamo la croce, innalzata per noi:"),
                        array('ris','',"adoriamo il segno della nostra salvezza."),
                    );
                } 
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte.")
                    );
                }
                elseif($this->actual['ora']=='comp') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte.")
                    );
                }
            }   

            elseif ($this->actual['evCode']=='SS5') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte, e alla morte di croce.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Noi ti adoriamo, o Cristo, e ti benediciamo:"),
                            array('ris','',"con la tua croce hai redento il mondo."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Ricordati di me, Signore,"),
                            array('ris','',"quando sarai nel tuo regno."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Mi hai fatto entrare nelle tenebre"),
                            array('ris','',"come chi è moerto da gran tempo."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte, e alla morte di croce.")
                    );
                }
                elseif($this->actual['ora']=='comp') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte, e alla morte di croce.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='SS6') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte, e alla morte di croce. Per questo Dio lo ha innalzato, e gli ha dato un nome che è sopra ogni altro nome.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Non abbandonarmi nel sepolcro, Signore;"),
                        array('ris','',"non lasciare che il tuo santo veda la corruzine."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Il Signore fa morire e fa vivere,"),
                        array('ris','',"fa scendere agli inferi e risalire."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Deposero il Signore, sigillarono il sepolcro,"),
                        array('ris','',"misero i soldati a custodire la tomba."),
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte, e alla morte di croce. Per questo Dio lo ha innalzato, e gli ha dato un nome che è sopra ogni altro nome.")
                    );
                }
                elseif($this->actual['ora']=='comp') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte, e alla morte di croce. Per questo Dio lo ha innalzato, e gli ha dato un nome che è sopra ogni altro nome.")
                    );
                }
            }

            else {
                if ($this->actual['weekDay']==0) {
                    switch ($this->actual['ora']) {
                        case "ves1":
                            $this->info=array(
                                array('ris','',"Contro di te abbiamo peccato:"),
                                array('ebd','','Ascolta, Cristo, la nostra voce:'),
                                array('*','2',"pietà di noi, Signore!")
                            );
                        break;
                        case "lodi":
                            $this->info=array(
                                array('ris','',"Cristo, Figlio del Dio vivo,"),
                                array('ebd','','Tu che hai sofferto per i nostri peccati,'),
                                array('*','2',"abbi pietà di noi.")
                            );
                        break;
                        case "ves2":
                            $this->info=array(
                                array('ris','',"Contro di te abbiamo peccato:"),
                                array('ebd','','Ascolta, Cristo, la nostra voce:'),
                                array('*','2',"pietà di noi, Signore!")
                            );
                        break;
                    }
                }
                elseif ($this->actual['weekDay']>=1 && $this->actual['weekDay']<=6) {
                    switch ($this->actual['ora']) {
                        case "lodi":
                            $this->info=array(
                                array('ris','',"Egli mi libererà"),
                                array('ebd','','Dalla peste che distrugge,'),
                                array('*','2',"dal laccio del cacciatore.")
                            );
                        break;
                        case "ves":
                            $this->info=array(
                                array('ris','',"Ho peccato contro di te:"),
                                array('ebd','','Io grido: Pietà di me, o Dio,'),
                                array('*','2',"guariscimi, Signore.")
                            );
                        break;
                    }
                }
                /////////////////////////////////////
                if ($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Un cuore puro crea in me, o Signore,"),
                        array('ris','',"rinnova in me uno spirito saldo."),
                    );
                }
                if ($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Dai miei peccati distogli lo sguardo,"),
                        array('ris','',"cancella tutte le mie colpe."),
                    );
                }
                if ($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Un animo pentito tu gradisci, o Dio,"),
                        array('ris','',"non disprezzi un cuore affranto e umiliato."),
                    );
                }
            }
            
        }

        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='P') {

            if ($this->actual['weekDay']==0) {

                if($this->actual['ora']=='ves1') {

                    if ($this->actual['evCode']=='PA2') {
                        $this->info=array(
                            array('ant','',"Questo è il giorno / che ha fatto il Signore, alleluia: rallegriamoci ed esultiamo, alleluia.")
                        );
                    }
                    elseif($this->actual['today']<$this->actual['ASC']) {
                        $this->info=array(
                            array('ris','',"Il Signore è veramente risorto."),
                            array('ebd','','Ed è apparso a Simone.'),
                            array('*','2',"Alleluia, alleluia.")
                        );
                    }
                    else {
                        $this->info=array(
                            array('ris','',"Lo Spirito del Padre sarà con voi."),
                            array('ebd','','Vi insegnerà ogni cosa.'),
                            array('*','2',"Alleluia, alleluia.")
                        );
                    }
                }

                if($this->actual['ora']=='lodi') {

                    if ($this->actual['evCode']=='PA2') {
                        $this->info=array(
                            array('ant','',"Questo è il giorno / che ha fatto il Signore, alleluia: rallegriamoci ed esultiamo, alleluia.")
                        );
                    }
                    else {
                        $this->info=array(
                            array('ris','',"Cristo, Figlio del Dio vivo, abbi pietà di noi."),
                            array('ebd','','Tu che sei risorto dai morti.'),
                            array('*','2',"Alleluia, alleluia.")
                        );
                    }
                }
                elseif($this->actual['ora']=='terza') {

                    if ($this->actual['evCode']=='PA2') {
                        $this->info=array(
                            array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                            array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                        );
                    }
                    else {
                        $this->info=array(
                            array('ebd','',"Il Signore è veramente risorto, alleluia,"),
                            array('ris','',"ed è apparso a Simone, alleluia."),
                        );
                    }
                }
                elseif($this->actual['ora']=='sesta') {
                    
                    if ($this->actual['evCode']=='PA2') {
                        $this->info=array(
                            array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                            array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                        );
                    }
                    else {
                        $this->info=array(
                            array('ebd','',"I discepoli videro il Signore, alleluia,"),
                            array('ris','',"e furono pieni di gioia, alleluia."),
                        );
                    }
                }
                elseif($this->actual['ora']=='nona') {

                    if ($this->actual['evCode']=='PA2') {
                        $this->info=array(
                            array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                            array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                        );
                    }
                    else {
                        $this->info=array(
                            array('ebd','',"Signore, rimani con noi, alleluia,"),
                            array('ris','',"ormai si fa sera, alleluia."),
                        );
                    }
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['evCode']=='PA2') {
                        $this->info=array(
                            array('ant','',"Questo è il giorno / che ha fatto il Signore, alleluia: rallegriamoci ed esultiamo, alleluia.")
                        );
                    }
                    elseif($this->actual['today']<$this->actual['ASC']) {
                        $this->info=array(
                            array('ris','',"Il Signore è veramente risorto."),
                            array('ebd','','Ed è apparso a Simone.'),
                            array('*','2',"Alleluia, alleluia.")
                        );
                    }
                    else {
                        $this->info=array(
                            array('ris','',"Attingete acqua con gioia."),
                            array('ebd','','Alle sorgenti della salvezza.'),
                            array('*','2',"Alleluia, alleluia.")
                        );
                    }
                }
            }

            elseif ($this->actual['weekDay']>=1 && $this->actual['weekDay']<=6) {

                if($this->actual['ora']=='lodi') {

                    if ($this->actual['evCode']=='PA2'.$this->actual['weekDay']) {
                        $this->info=array(
                            array('ant','',"Questo è il giorno / che ha fatto il Signore, alleluia: rallegriamoci ed esultiamo, alleluia.")
                        );
                    }
                    else {
                        $this->info=array(
                            array('ris','',"Cristo è risalito dagli abissi della terra."),
                            array('ebd','',"Ha provato l'angoscia e la morte."),
                            array('*','2',"Alleluia, alleluia.")
                        );
                    }
                }
                elseif($this->actual['ora']=='terza') {

                    if ($this->actual['evCode']=='PA2'.$this->actual['weekDay']) {
                        $this->info=array(
                            array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                            array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                        );
                    }
                    else {
                        $this->info=array(
                            array('ebd','',"Il Signore è veramente risorto, alleluia,"),
                            array('ris','',"ed è apparso a Simone, alleluia."),
                        );
                    }
                }
                elseif($this->actual['ora']=='sesta') {
                    
                    if ($this->actual['evCode']=='PA2'.$this->actual['weekDay']) {
                        $this->info=array(
                            array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                            array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                        );
                    }
                    else {
                        $this->info=array(
                            array('ebd','',"I discepoli videro il Signore, alleluia,"),
                            array('ris','',"e furono pieni di gioia, alleluia."),
                        );
                    }
                }
                elseif($this->actual['ora']=='nona') {

                    if ($this->actual['evCode']=='PA2'.$this->actual['weekDay']) {
                        $this->info=array(
                            array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                            array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                        );
                    }
                    else {
                        $this->info=array(
                            array('ebd','',"Signore, rimani con noi, alleluia,"),
                            array('ris','',"ormai si fa sera, alleluia."),
                        );
                    }
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['evCode']=='PA2'.$this->actual['weekDay']) {
                        $this->info=array(
                            array('ant','',"Questo è il giorno / che ha fatto il Signore, alleluia: rallegriamoci ed esultiamo, alleluia.")
                        );
                    }
                    elseif($this->actual['today']<$this->actual['ASC']) {
                        $this->info=array(
                            array('ris','',"I discepoli videro il Signore."),
                            array('ebd','','E furono pienio di gioia.'),
                            array('*','2',"Alleluia, alleluia.")
                        );
                    }
                    else {
                        $this->info=array(
                            array('ris','',"Lo Spirito del Padre sarà con voi."),
                            array('ebd','','Vi insegnerà ogni cosa.'),
                            array('*','2',"Alleluia, alleluia.")
                        );
                    }
                }
            }

            //////////////////////////////////////////////////////

            if ($this->actual['evCode']=='PAS') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Cristo, Figlio del Dio vivo, abbi pietà di noi."),
                        array('ebd','','Tu che sei risorto dai morti.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                        array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                        array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                        array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Signore è veramente risorto."),
                        array('ebd','','Ed è apparso a Simone.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            if ($this->actual['evCode']=='ASC') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Ascendo al Padre mio e Padre vostro."),
                        array('ebd','','Mio Dio, e Dio vostro.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Ascende Cristo nell'alto dei cieli."),
                        array('ebd','','E guida i prigionieri liberati.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Non si turbi il vostro cuore, alleluia:"),
                        array('ris','',"ora io vado al Padre, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Il Signore è nei cieli, alleluia,"),
                        array('ris','',"ha stabilito il suo trono, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Esaltate Dio, nostro re, alleluia,"),
                        array('ris','',"cantate un inno al Signore, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Ascendo al Padre mio e Padre vostro."),
                        array('ebd','','Mio Dio, e Dio vostro.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }        
        }

        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='O') {

            if ($this->actual['evCode']=='BAT') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Cristo, Figlio del Dio vivo,"),
                        array('ebd','','Tu che oggi ti riveli al mondo,'),
                        array('*','2',"abbi pietà di noi.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"La mia gioia è compiuta:"),
                            array('ris','',"Cristo deve crescere, io diminuire."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Ecco il mio servo, io lo sostengo:"),
                            array('ris','',"colui che ho scelto, è tutta la mia gioia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Porrò il mio spirito sopra di lui,"),
                            array('ris','',"annunzierà la giustizia alle genti."),
                        );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Questi è colui che è venuto"),
                        array('ebd','','Gesù Cristo nostro Signore,'),
                        array('*','2',"con acqua e sangue.")
                    );
                }
            }

            if ($this->actual['evCode']=='PEN') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Tutti furono pieni di Spirito Santo."),
                        array('ebd','','E cantavano le meraviglie di Dio.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"L'amore di Dio è stato riversato nei nostri cuori, alleluia,"),
                        array('ris','',"per mezzo dello Spirito Santo che dimora in noi, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Lo Spirito Santo sarà vostro maestro, alleluia:"),
                        array('ris','',"vi ricorderà ogni mia parola, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"In molte lingue gli apostoli proclamavano, alleluia,"),
                        array('ris','',"le grandi opere di Dio, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Ascendo al Padre mio e Padre vostro."),
                        array('ebd','','Mio Dio, e Dio vostro.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            if ($this->actual['evCode']=='TRI') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"A te lode, a te gloria,"),
                        array('ebd','','A te grazie nei secoli,'),
                        array('*','2',"o Santa Trinità.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Venite alle sue porte nella lode,"),
                        array('ris','',"date gloria al Padre, al Figlio e allo Spirito."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"O beata, benedetta e gloriosa Trinità:"),
                        array('ris','',"Padre e Figlio e Spirito Santo!"),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Benedetto sei tu, Signore nell'alto dei cieli!"),
                        array('ris','',"A te la lode e la gloria nei secoli."),
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"A Dio solo l'onore e la gloria:"),
                        array('ebd','','Benedetto il Padre, il Figlio e lo Spirito Santo:'),
                        array('*','2',"a lui, lode nei secoli.")
                    );
                }
            }

            if ($this->actual['evCode']=='COD') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Ci hai dato il pane, frutto della terra."),
                        array('ebd','','E il vino che rallegra il nostro cuore.'),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Verrò all'altare di Dio, alleluia."),
                        array('ris','',"Riceverò Cristo, che rinnova la mia giovinezza, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Hai dato a noi, Signore, un pane dal cielo, alleluia,"),
                        array('ris','',"che porta in sé ogni dolcezza, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Signore, rimani con noi, alleluia,"),
                        array('ris','',"ormai si fa sera, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Ci ha dato un pane dal cielo."),
                        array('ebd','',"Pane degli angeli, cibo dell'uomo."),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            if ($this->actual['evCode']=='SCG') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Cristo ci ama"),
                        array('ebd','',"Ha fatto di noi un regno, e sacerdoti per il nostro Dio,"),
                        array('*','2',"e ci ha liberati con il suo sangue.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Prendete il mio giogo su di voi,"),
                        array('ebd','','Io sono mite ed umile di cuore:'),
                        array('*','2',"imparate da me.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Attingete acqua con gioia"),
                        array('ris','',"alle sorgenti della salvezza."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Ho sperato conforto, ma invano;"),
                        array('ris','',"consolatori, ma non ne ho trovati."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Per le vostre colpe egli è stato trafitto;"),
                        array('ris','',"e noi per le sue piaghe siamo stati guariti."),
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Cristo per amore ci ha lavati da ogni colpa"),
                        array('ebd','',"Ha fatto di noi un popolo regale, sacerdoti per la gloria del Padre,"),
                        array('*','2',"con il suo sangue.")
                    );
                }
            }

            if ($this->actual['evCode']=='GRE') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"A te gloria e potenza,"),
                        array('ebd','',"A te il dominio su tutto l'universo,"),
                        array('*','2',"a te il regno, Signore.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Cantano i fedeli"),
                        array('ebd','','Dicono le tue imprese,'),
                        array('*','2',"la gloria del tuo regno.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Cristo Signore regna per sempre,"),
                        array('ris','',"benedice il suo popolo nella pace."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Inneggiate al nostro Re, inneggiate,"),
                        array('ris','',"Cristo è il Signore di tutta la terra."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Acclamate al Signore, nostro Re."),
                        array('ris','',"Egli viene a giudicare la terra."),
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il tuo trono, o Dio,"),
                        array('ebd','',"Scettro di giustizia, lo scettro del tuo regno,"),
                        array('*','2',"nei secoli dei secoli.")
                    );
                }
            }
        }

        //////////////////////////////////////////////////////////////////////////////////////////
        if ($this->actual["evCode"]=='0202a') {
            //presentazione del Signore
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Adorate il Signore"),
                    array('ebd','','Date al Signore gloria e potenza'),
                    array('*','2',"nel suo tempio santo.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Il Signore si è ricordato del suo amore,"),
                    array('ris','',"della sua fedeltà per la casa d'Israele.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Tutta la terra ha visto la salvezza di Dio:"),
                    array('ris','',"voi tutti della terra, acclamate al Signore.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Amore e fedeltà si vengono incontro,"),
                    array('ris','',"si abbracciano pace e giustizia.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Il Signore ha manifestato,"),
                    array('ebd','',"Ha rivelato a tutti i popoli il suo amore:"),
                    array('*','2',"la sua salvezza.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0210a') {
            //santa Scolastica
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Quanto è bello e quanto è soave"),
                    array('ebd','','Questa è la cosa che il Signore benedice:'),
                    array('*','2',"che i fratelli vivano insieme.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Scolastica ottenne di più"),
                    array('ris','',"perché amò di più.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Di te ha detto il mio cuore: cercate il suo volto!"),
                    array('ris','',"Il tuo volto, Signore, io ceco.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Beati i puri di cuore,"),
                    array('ris','',"perché vedranno Dio.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Come colomba in volo,"),
                    array('ebd','',"Gioì nell'anima il fratello:"),
                    array('*','2',"apparve l'anima di Scolastica.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0319a') {
            //San Giuseppe sposo di Maria
            if ($this->actual['tempo']=='P') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Dio lo fece signore nella sua casa."),
                        array('ebd','',"Gli affidò i beni più cari."),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Dio lo fece signore nella sua casa, alleluia,"),
                        array('ris','',"gli affidò i beni più cari, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Ricchezza e gioia nella casa del giusto, alleluia:"),
                        array('ris','',"la sua giustizia rimane per sempre, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Grande è la sua gloria per la tua salvezza, alleluia:"),
                        array('ris','',"lo avvolgi di maestà e di onore, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"L'uomo giusto fiorirà come un giglio."),
                        array('ebd','',"Davanti al Signore, in eterno."),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            else {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Dio lo fece signore"),
                        array('ebd','',"Gli affidò i beni più cari,"),
                        array('*','2',"nella sua casa.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Dio lo fece signore nella sua casa,"),
                        array('ris','',"gli affidò i beni più cari.")
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Ricchezza e gioia nella casa del giusto:"),
                        array('ris','',"la sua giustizia rimane per sempre.")
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Grande è la sua gloria per la tua salvezza:"),
                        array('ris','',"lo avvolgi di maestà e di onore.")
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"L'uomo giusto"),
                        array('ebd','',"Davanti al Signore, in eterno,"),
                        array('*','2',"fiorirà come un giglio.")
                    );
                }
            }
        }

        elseif ($this->actual["evCode"]=='0321a') {
            //transito San Benedetto
            if ($this->actual['tempo']=='P') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore l'ha amato e l'ha colmato di onore."),
                        array('ebd','',"L'ha rivestito di gloria."),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Il Signore guida gli umili nella giustizia, alleluia,"),
                        array('ris','',"insegna ai poveri le sue vie, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Beato l'uomo che tu istruisci, Signore, alleluia,"),
                        array('ris','',"e che ammaestri nella tua legge, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Gioiscano quanti in te si rifugiano, Signore, alleluia,"),
                        array('ris','',"esultino senza fine, o Dio, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Santo padre Benedetto, intercedi per noi."),
                        array('ebd','',"Fa che siamo degni delle promesse di Cristo."),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            else {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore l'ha amato"),
                        array('ebd','',"L'ha rivestito di gloria"),
                        array('*','2',"e l'ha colmato di onore.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Il Signore guida gli umili nella giustizia,"),
                        array('ris','',"insegna ai poveri le sue vie.")
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Beato l'uomo che tu istruisci, Signore,"),
                        array('ris','',"e che ammaestri nella tua legge.")
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Gioiscano quanti in te si rifugiano, Signore,"),
                        array('ris','',"esultino senza fine, o Dio.")
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Santo padre Benedetto,"),
                        array('ebd','',"Fa che siamo degni delle promesse di Cristo:"),
                        array('*','2',"intercedi per noi.")
                    );
                }
            }
        }

        elseif ($this->actual["evCode"]=='0325a') {
            //Annunciazione
            if ($this->actual['tempo']=='P') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Un germoglio spunterà da Iesse, una stella da Giacobbe."),
                        array('ebd','',"Dalla Vergine nascerà il Salvatore."),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Ave, Maria, piena di grazia, il Signore è con te."),
                        array('ebd','',"Benedeta tu fra le donne, benedetto il frutto del tuo seno."),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"L'angelo del Signore portò l'annunzio a Maria, alleluia,"),
                        array('ris','',"e concepì dallo Spirito Santo, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Io sono la serva del Signore, alleluia;"),
                        array('ris','',"si compia in me la tua parola, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Il Verbo di Dio si è fatto carne, alleluia;"),
                        array('ris','',"è venuto ad abitare in mezzo a noi, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio, fatto uomo, è venuto ad abitare in mezzo a noi."),
                        array('ebd','',"Egli era in principio presso Dio."),
                        array('*','2',"Alleluia, alleluia.")
                    );
                }
            }

            else {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Un germoglio spunterà da Iesse,"),
                        array('ebd','',"Dalla Vergine nascerà il Salvatore,"),
                        array('*','2',"una stella da Giacobbe.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Ave, Maria, piena di grazia,"),
                        array('ebd','',"Benedeta tu fra le donne, benedetto il frutto del tuo seno:"),
                        array('*','2',"il Signore è con te.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"L'angelo del Signore portò l'annunzio a Maria,"),
                        array('ris','',"e concepì dallo Spirito Santo.")
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Io sono la serva del Signore;"),
                        array('ris','',"si compia in me la tua parola.")
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Il Verbo di Dio si è fatto carne;"),
                        array('ris','',"è venuto ad abitare in mezzo a noi.")
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio, fatto uomo,"),
                        array('ebd','',"Egli era in principio presso Dio:"),
                        array('*','2',"è venuto ad abitare in mezzo a noi.")
                    );
                }
            }
        }

        elseif ($this->actual["evCode"]=='0624a') {
            //Natività di San Giovanni Battista
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Grande agli occhi del Signore,"),
                    array('ebd','','Preparerà al Cristo un popolo ben disposto:'),
                    array('*','2',"sarà pieno di Spirito Santo.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Ho visto lo Spirito discendere su Cristo:"),
                    array('ris','',"egli battezzerà in Spirito Santo.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Dal seno materno il Signore mi ha chiamato:"),
                    array('ris','',"fin dal grembo di mia madre ha pronunciato il mio nome.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Ecco, io metto le mie parole sulla tua bocca:"),
                    array('ris','',"ti costituisco su popoli e regni.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Raddrizzate i sentieri del Signore,"),
                    array('ebd','',"Dopo di me viene uno, che era prima di me:"),
                    array('*','2',"preparate le sue vie.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0629a') {
            //Pietro e Paolo
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Hanno dato la vita"),
                    array('ebd','','Erano lieti di essere insultati'),
                    array('*','2',"per il Signore Gesù.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Nel mondo intero si è diffuso il loro annunzio,"),
                    array('ris','',"ai confini della terra la loro parola.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Hanno custodito gli insegnamenti di Cristo,"),
                    array('ris','',"sono testimoni delle sue parole.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Gioite ed esultate, dice il Signore:"),
                    array('ris','',"i vostri nomi sono scritti nel cielo.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Con grande franchezza"),
                    array('ebd','',"Testimoni della risurrezione di Cristo,"),
                    array('*','2',"annunziarono la parola di Dio.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0711a') {
            //San Benedetto
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Il Signore l'ha amato"),
                    array('ebd','',"L'ha rivestito di gloria"),
                    array('*','2',"e l'ha colmato di onore.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Beato l'uomo che tu istruisci, Signore,"),
                    array('ris','',"e che ammaestri nella tua legge.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Il Signore lo elesse suo servo,"),
                    array('ris','',"perché fosse pastore d'Israele, sua proprietà.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"La legge del suo Dio è nel suo cuore:"),
                    array('ris','',"i suoi passi non vacilleranno.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Santo padre Benedetto,"),
                    array('ebd','',"Fa che siamo degni delle promesse di Cristo:"),
                    array('*','2',"intercedi per noi.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0806a') {
            //Trasfigurazione
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    array('ris','',"Davanti al Padre sei apparso nella gloria."),
                    array('ebd','',"Egli ti ha rivestito di splendore."),
                    array('*','2',"Alleluia, alleluia.")
                );
            }
            elseif($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Signore, l'hai coronato di gloria e di onore."),
                    array('ebd','',"L'hai innalzato di fronte all'universo."),
                    array('*','2',"Alleluia, alleluia.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Tu sei il più bello tra i figli dell'uomo,"),
                    array('ris','',"sulle tue labbra fiorisce la grazia.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Guardate al Signore, e sarete raggianti:"),
                    array('ris','',"non saranno confusi i vostri volti.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"In te, Signore, la fonte della vita:"),
                    array('ris','',"nella tua luce vediamo la luce.")
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Splendore e maestà dinanzi a Dio."),
                    array('ebd','',"Forza e bellezza nel suo santuario."),
                    array('*','2',"Alleluia, alleluia.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0815a') {
            //Assunzione
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    array('ris','',"È festa per gli angeli in cielo:"),
                    array('ebd','',"Lode e onore al nostro Dio:"),
                    array('*','2',"Maria è assunta nella gloria.")
                );
            }
            elseif($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Oggi la Vergine Maria"),
                    array('ebd','',"Trionfa per sempre con Cristo,"),
                    array('*','2',"è accolta nei cieli.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Maria è assunta in cielo: esultano gli angeli,"),
                    array('ris','',"lodano e benedicono il Signore.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"L'umile serva del Signore è innalzata"),
                    array('ris','',"sopra gli angeli e i santi, nel regno dei cieli.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Maria entra nella dimora del cielo,"),
                    array('ris','',"siede con Cristo su un trono di stelle.")
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Maria è innalzata nel regno"),
                    array('ebd','',"Benedetto il Signore che l'ha esaltata"),
                    array('*','2',"sopra gli angeli e i santi.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0914a') {
            //Esaltazione della Santa Croce
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Noi ti adoriamo,"),
                    array('ebd','',"Con la tua croce hai redento il mondo:"),
                    array('*','2',"ti benediciamo, o Cristo.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Noi ti adoriamo, o Cristo, e ti benediciamo:"),
                    array('ris','',"con la tua croce hai redento il mondo.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Tutta la terra ti adori, Signore,"),
                    array('ris','',"inneggi a te, e canti al tuo nome.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Il segno della croce apparirà nel cielo,"),
                    array('ris','',"quando il Signore tornerà per giudicare.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Regna su di te il Signore,"),
                    array('ebd','',"Sul tuo legno lavò le nostre colpe nel sangue,"),
                    array('*','2',"o croce gloriosa.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='1101a') {
            //Tutti i santi
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    array('ris','',"Esultano i giusti"),
                    array('ebd','',"Perfetta letizia, gioia senza fine"),
                    array('*','2',"alla presenza di Dio.")
                );
            }
            elseif($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Siate lieti nel Signore;"),
                    array('ebd','',"Fedeli di Dio gridate di gioia;"),
                    array('*','2',"esultate, o giusti.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Rallegratevi, esultate, voi santi:"),
                    array('ris','',"grande è la vostra ricompensa nei cieli.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Cantate inni al Signore, suoi fedeli,"),
                    array('ris','',"rendete grazie al suo santo nome.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"I giusti loderanno il tuo nome, Signore:"),
                    array('ris','',"i retti abiteranno alla tua presenza.")
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Santi di Dio,"),
                    array('ebd','',"Come sua eredità Dio vi ha scelti:"),
                    array('*','2',"esultate nel Signore.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='1208a') {
            //Immacolata concezione
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Dio, l'Altissimo,"),
                    array('ebd','',"Ha reso immaolata la mia vita;"),
                    array('*','2',"mi ha vestita della sua potenza.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Oggi Maria, concepita immacolata,"),
                    array('ris','',"ha schiacciato la testa all'antico serpente.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Esultano il mio cuore e la mia carne,"),
                    array('ris','',"esultano nel Dio vivente.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Con la tua Immacolata Concezione, Vergine Madre di Dio,"),
                    array('ris','',"un annunzio di gioia è venuto nel mondo.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Da questo, o Dio,"),
                    array('ebd','',"Su di me non trionfa il nemico:"),
                    array('*','2',"so che tu mi ami.")
                );
            }
        }

        //#########################################################################################
        //PROPRIO DEI SANTI
        if ($this->actual['fesCode']!='') {

            foreach($this->actual['festa'] as $k=>$f) {
            
                if ($f['comune']=='dedica') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Nella tua casa, Signore, la santità risplenda."),
                                array('ebd','','Per la durata dei giorni.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Grande è il Signore, e degno di lode."),
                                array('ebd','','Nella sua città, sul suo monte santo.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Amo, Signore, la casa dove tu dimori, alleluia,"),
                                array('ris','',"il luogo dove abita la tua gloria, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Chiedete pace per Gerusalemme, alleluia,"),
                                array('ris','',"sicurezza per chi ama la città di Dio, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Entrate nella casa del Signore, alleluia,"),
                                array('ris','',"con inni di lode varcate le sua porte, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Beato chi vive nella tua casa, Signore."),
                                array('ebd','',"Ti loderà per i secoli dei secoli."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Nella tua casa, Signore, "),
                                array('ebd','','Per la durata dei giorni'),
                                array('*','2',"la santità risplenda.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Grande è il Signore,"),
                                array('ebd','','Nella sua città, sul suo monte santo,'),
                                array('*','2',"e degno di lode.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Amo, Signore, la casa dove tu dimori,"),
                                array('ris','',"il luogo dove abita la tua gloria."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Chiedete pace per Gerusalemme,"),
                                array('ris','',"sicurezza per chi ama la città di Dio."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Entrate nella casa del Signore,"),
                                array('ris','',"con inni di lode varcate le sua porte."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Beato chi vive"),
                                array('ebd','',"Ti loderà per i secoli dei secoli."),
                                array('*','2',"nella tua casa, Signore.")
                            );
                        }
                    }
                }

                elseif ($f['comune']=='BVM') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Il Signore ti ha scelta e ti ha prediletta."),
                                array('ebd','','Nella sua tenda ti ha fatto abitare.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Beato chi ascolta la parola di Dio, alleluia,"),
                                array('ris','',"e la custodisce nel cuore, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Beato il grembo della Vergine Maria, alleluia,"),
                                array('ris','',"che ha portato il Figlio dell'eterno Padre, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Benedetta sei tu fra le donne, alleluia,"),
                                array('ris','',"e benedetto il frutto del tuo seno, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Ave, Maria, piena di grazia, il Signore è con te."),
                                array('ebd','',"Benedetta tu fra le donne, e benedetto il frutto del tuo seno."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Il Signore ti ha scelta"),
                                array('ebd','','Nella sua tenda ti ha fatto abitare,'),
                                array('*','2',"e ti ha prediletta.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Beato chi ascolta la parola di Dio,"),
                                array('ris','',"e la custodisce nel cuore."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Beato il grembo della Vergine Maria,"),
                                array('ris','',"che ha portato il Figlio dell'eterno Padre."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Benedetta sei tu fra le donne,"),
                                array('ris','',"e benedetto il frutto del tuo seno."),
                            );
                        }
                        elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Ave, Maria, piena di grazia,"),
                                array('ebd','',"Benedetta tu fra le donne, e benedetto il frutto del tuo seno,"),
                                array('*','2',"il Signore è con te.")
                            );
                        }
                    }
                }

                if ($f['comune']=='apostoli') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Siete miei discepoli, se vi amate gli uni gli altri."),
                                array('ebd','','Tutti lo riconosceranno.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Li hai posti come capi in mezzo al tuo popolo."),
                                array('ebd','','Faranno ricordare il tuo nome, Signore.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Nel mondo intero si è diffuso il loro annunzio, alleluia,"),
                                array('ris','',"ai confini della terra la loro parola, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Hanno custodito gli insegnamenti di Cristo, alleluia,"),
                                array('ris','',"sono testimoni delle sue parole, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Gioite ed esultate, dice il Signore, alleluia,"),
                                array('ris','',"i vostri nomi sono scritti nel cielo, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Annunziate tra i popoli le meraviglie del Signore."),
                                array('ebd','',"Proclamate in tutte le nazioni."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Siete miei discepoli,"),
                                array('ebd','','Tutti lo riconosceranno:'),
                                array('*','2',"se vi amate gli uni gli altri.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Li hai posti come capi"),
                                array('ebd','','Faranno ricordare il tuo nome, Signore,'),
                                array('*','2',"in mezzo al tuo popolo.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Nel mondo intero si è diffuso il loro annunzio,"),
                                array('ris','',"ai confini della terra la loro parola."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Hanno custodito gli insegnamenti di Cristo,"),
                                array('ris','',"sono testimoni delle sue parole."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Gioite ed esultate, dice il Signore,"),
                                array('ris','',"i vostri nomi sono scritti nel cielo."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Annunziate tra i popoli"),
                                array('ebd','',"Proclamate in tutte le nazioni"),
                                array('*','2',"le meraviglie del Signore.")
                            );
                        }
                    }
                }

                if ($f['comune']=='martiri') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Santi di Dio, esultate nel Signore."),
                                array('ebd','','Dio vi ha scelti come sua eredità.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Felicità per sempre sul loro volto."),
                                array('ebd','','Gioia ed esultanza intorno a loro.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"I santi sperano nel Signore, alleluia:"),
                                array('ris','',"in cui trovano una forza inesauribile, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Per un po siete stati nella prova, alleluia:"),
                                array('ris','',"la vostra sofferenza sarà cambiata in gioia, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Torneranno nella gioia del raccolto, alleluia,"),
                                array('ris','',"canteranno i prodigi del Signore, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"I giusti splenderanno nella gloria di Dio."),
                                array('ebd','',"Saranno nella gioia tutti i suoi fedeli."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"I santi martiri"),
                                array('ebd','','Tormenti e morte non li toccheranno:'),
                                array('*','2',"sono nelle mani di Dio.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"I santi martiri"),
                                array('ebd','','La loro ricompensa è il Signore:'),
                                array('*','2',"vivono in eterno.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"I santi sperano nel Signore:"),
                                array('ris','',"in cui trovano una forza inesauribile."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Per un po siete stati nella prova:"),
                                array('ris','',"la vostra sofferenza sarà cambiata in gioia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Torneranno nella gioia del raccolto,"),
                                array('ris','',"canteranno i prodigi del Signore."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Siate lieti nel Signore;"),
                                array('ebd','',"Fedeli di Dio, gridate di gioia."),
                                array('*','2',"esultate, o giusti.")
                            );
                        }
                    }
                }

                if ($f['comune']=='martire') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Santi di Dio, esultate nel Signore."),
                                array('ebd','','Dio vi ha scelti come sua eredità.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Felicità per sempre sul loro volto."),
                                array('ebd','','Gioia ed esultanza intorno a loro.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore l'ha rivestito di gioia, alleluia,"),
                                array('ris','',"gli ha posto sul capo una splendida corona, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"confido in Dio, non ho timore, alleluia:"),
                                array('ris','',"chi portrà farmi del male? Alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Torneranno nella gioia del raccolto, alleluia,"),
                                array('ris','',"canteranno i prodigi del Signore, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"I giusti splenderanno nella gloria di Dio."),
                                array('ebd','',"Saranno nella gioia tutti i suoi fedeli."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Di gloria e onore"),
                                array('ebd','',"E gli hai dato potere sull'opera delle tue mani:"),
                                array('*','2',"l'hai coronato, Signore.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Mia forza,"),
                                array('ebd','','È lui la mia salvezza:'),
                                array('*','2',"mio canto è il Signore.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore l'ha rivestito di gioia,"),
                                array('ris','',"gli ha posto sul capo una splendida corona."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"confido in Dio, non ho timore:"),
                                array('ris','',"chi portrà farmi del male?"),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Torneranno nella gioia del raccolto,"),
                                array('ris','',"canteranno i prodigi del Signore."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"O Dio, ci hai messo alla prova"),
                                array('ebd','',"Ci hai saggiati nel fuoco, come argento,"),
                                array('*','2',"e ci hai dato sollievo.")
                            );
                        }
                    }
                }

                if ($f['comune']=='pastori') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Sacerdoti del Signore, benedite il Signore!"),
                                array('ebd','','Lodate, Dio, fedeli e umili di cuore.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Li hai posti come sentinelle, vegliano sulla tua Chiesa."),
                                array('ebd','','Giorno e notte annunziano il tuo nome.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore ha scelto il suo servo, alleluia,"),
                                array('ris','',"guida e maestro del suo popolo, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Non mi vergogno del Vangelo, alleluia:"),
                                array('ris','',"è potenza di Dio per la salvezza, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Se il Signore non costruisce la casa, alleluia,"),
                                array('ris','',"i costruttori lavorano invano, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Vero amico dei tuoi fratelli, prega per il tuo popolo."),
                                array('ebd','',"Hai dato la vita per i fratelli."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Sacerdoti del Signore,"),
                                array('ebd','','Lodate, Dio, fedeli e umili di cuore:'),
                                array('*','2',"benedite il Signore!")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Li hai posti come sentinelle,"),
                                array('ebd','','Giorno e notte annunziano il tuo nome,'),
                                array('*','2',"vegliano sulla tua Chiesa.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore ha scelto il suo servo,"),
                                array('ris','',"guida e maestro del suo popolo."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Non mi vergogno del Vangelo:"),
                                array('ris','',"è potenza di Dio per la salvezza."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Se il Signore non costruisce la casa,"),
                                array('ris','',"i costruttori lavorano invano."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Vero amico dei tuoi fratelli,"),
                                array('ebd','',"Hai dato la vita per i fratelli,"),
                                array('*','2',"prega per il tuo popolo.")
                            );
                        }
                    }
                }

                if ($f['comune']=='dottori') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Sulla bocca del giusto parole di sapienza."),
                                array('ebd','','Nel suo cuore la legge di Dio.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"La tua Chiesa, o Dio, canta la sapienza dei santi."),
                                array('ebd','',"L'assemblea ne proclama le lodi."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore ha scelto il suo servo, alleluia,"),
                                array('ris','',"guida e maestro del suo popolo, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Non mi vergogno del Vangelo, alleluia:"),
                                array('ris','',"è potenza di Dio per la salvezza, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Se il Signore non costruisce la casa, alleluia,"),
                                array('ris','',"i costruttori lavorano invano, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Ha detto le parole di Dio, in mezzo all'assemblea."),
                                array('ebd','',"Il Signore gli ha dato sapienza e intelligenza."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Sulla bocca del giusto"),
                                array('ebd','','Nel suo cuore la legge di Dio,'),
                                array('*','2',"parole di sapienza.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"La tua Chiesa, o Dio,"),
                                array('ebd','',"L'assemblea ne proclama le lodi,"),
                                array('*','2',"canta la sapienza dei santi.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore ha scelto il suo servo,"),
                                array('ris','',"guida e maestro del suo popolo."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Non mi vergogno del Vangelo:"),
                                array('ris','',"è potenza di Dio per la salvezza."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Se il Signore non costruisce la casa,"),
                                array('ris','',"i costruttori lavorano invano."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Ha detto le parole di Dio,"),
                                array('ebd','',"Il Signore gli ha dato sapienza e intelligenza"),
                                array('*','2',"in mezzo all'assemblea.")
                            );
                        }
                    }
                }

                if ($f['comune']=='monaci') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Esultano i giusti davanti a Dio."),
                                array('ebd','','E cantano di gioia.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"L'anima mia ha sete di Dio."),
                                array('ebd','',"Il mio cuore anela al Dio vivente."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Rallegratevi, santi tutti, alleluia;"),
                                array('ris','',"la vostra ricompensa è grande in cielo, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Rallegratevi, giusti, nel Signore, alleluia:"),
                                array('ris','',"rendete grazie al suo santo nome, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"I giusti loderanno il tuo nome, Signore, alleluia;"),
                                array('ris','',"e i retti abiteranno alla tua presenza, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Santi di Dio, rallegratevi nel Signore."),
                                array('ebd','',"Dio vi ha scelti come sua eredità."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Esultano i giusti"),
                                array('ebd','','E cantano di gioia'),
                                array('*','2',"davanti a Dio.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"L'anima mia"),
                                array('ebd','',"Il mio cuore anela al Dio vivente,"),
                                array('*','2',"ha sete di Dio.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Rallegratevi, santi tutti;"),
                                array('ris','',"la vostra ricompensa è grande in cielo."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Rallegratevi, giusti, nel Signore:"),
                                array('ris','',"rendete grazie al suo santo nome."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"I giusti loderanno il tuo nome, Signore;"),
                                array('ris','',"e i retti abiteranno alla tua presenza."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Santi di Dio,"),
                                array('ebd','',"Dio vi ha scelti come sua eredità:"),
                                array('*','2',"rallegratevi nel Signore.")
                            );
                        }
                    }
                }

                if ($f['comune']=='vergini') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Il Signore è il mio bene, è lui la mia speranza."),
                                array('ebd','','Egli dona il suo amore a chi lo cerca.'),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Di te ha detto il mio cuore: Io cerco il tuo volto."),
                                array('ebd','',"Non nasconderti a me, Signore."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Ecco la vergine saggia, alleluia:"),
                                array('ris','',"il Signore l'ha trovata vigilante, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Questa è una vergine saggia, alleluia:"),
                                array('ris','',"è nella schiera delle vergini prudenti, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Ho trovato colui che amo, alleluia:"),
                                array('ris','',"lo stringo a me e non lo lascio andare, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Entrano con gioia le vergini alla festa di nozze."),
                                array('ebd','',"Sono introdotte nel palazzo del re."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Il Signore è il mio bene,"),
                                array('ebd','','Egli dona il suo amore a chi lo cerca:'),
                                array('*','2',"è lui la mia speranza.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Di te ha detto il mio cuore:"),
                                array('ebd','',"Non nasconderti a me, Signore:"),
                                array('*','2',"Io cerco il tuo volto.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Ecco la vergine saggia:"),
                                array('ris','',"il Signore l'ha trovata vigilante."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Questa è una vergine saggia:"),
                                array('ris','',"è nella schiera delle vergini prudenti."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Ho trovato colui che amo:"),
                                array('ris','',"lo stringo a me e non lo lascio andare."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Entrano con gioia le vergini"),
                                array('ebd','',"Sono introdotte nel palazzo del re,"),
                                array('*','2',"alla festa di nozze.")
                            );
                        }
                    }
                }

                if ($f['comune']=='santi' || $f['comune']=='religiosi' || $f['comune']=='SFA') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Il Signore l'ha amato e l'ha colmato di onore."),
                                array('ebd','',"L'ha rivestito di gloria."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Il cuore dei santi, nella legge di Dio."),
                                array('ebd','',"Diritto e sicuro è il loro cammino."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore guida i poveri nella giustizia, alleluia,"),
                                array('ris','',"agli umili insegna la sua via, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Beato l'uomo che tu istruisci, Signore, alleluia,"),
                                array('ris','',"e che ammaestri nella tua legge, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Si rallegrino quelli che sperano in te, alleluia:"),
                                array('ris','',"abiterai con loro e saranno felici per sempre, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Il Signore è giusto, ama la giustizia."),
                                array('ebd','',"Guarda i buoni con amore."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Il Signore l'ha amato"),
                                array('ebd','',"L'ha rivestito di gloria"),
                                array('*','2',"e l'ha colmato di onore.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Il cuore dei santi,"),
                                array('ebd','',"Diritto e sicuro è il loro cammino"),
                                array('*','2',"nella legge di Dio.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore guida i poveri nella giustizia,"),
                                array('ris','',"agli umili insegna la sua via."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Beato l'uomo che tu istruisci, Signore,"),
                                array('ris','',"e che ammaestri nella tua legge."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Si rallegrino quelli che sperano in te:"),
                                array('ris','',"abiterai con loro e saranno felici per sempre."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Il Signore è giusto,"),
                                array('ebd','',"Guarda i buoni con amore,"),
                                array('*','2',"ama la giustizia.")
                            );
                        }
                    }
                }

                if ($f['comune']=='sante' || $f['comune']=='religiose') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Esulto e mi rallegro nella tua misericordia."),
                                array('ebd','',"Hai guardato l'umiltà della tua serva."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Dio la sostiene con la luce del suo volto."),
                                array('ebd','',"Non potrà vacillare: Dio è con lei."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Beato chi è integro nella sua via, alleluia,"),
                                array('ris','',"chi cammina nella legge del Signore, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Ho trovato colui che amo, alleluia,"),
                                array('ris','',"lo stringo  me e non lo lascio andare, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Voglio cantare inni a te, Signore, alleluia:"),
                                array('ris','',"agirò con saggezza nella via dell'innocenza, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Il Signore ti ha scelta e ti ha prediletta."),
                                array('ebd','',"Nella tua tenda ti ha fatto abitare."),
                                array('*','2',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Esulto e mi rallegro"),
                                array('ebd','',"Hai guardato l'umiltà della tua serva"),
                                array('*','2',"nella tua misericordia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Dio la sostiene"),
                                array('ebd','',"Non potrà vacillare: Dio è con lei"),
                                array('*','2',"con la luce del suo volto.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Beato chi è integro nella sua via,"),
                                array('ris','',"chi cammina nella legge del Signore."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Ho trovato colui che amo,"),
                                array('ris','',"lo stringo  me e non lo lascio andare."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Voglio cantare inni a te, Signore:"),
                                array('ris','',"agirò con saggezza nella via dell'innocenza."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Il Signore ti ha scelta"),
                                array('ebd','',"Nella tua tenda ti ha fatto abitare,"),
                                array('*','2',"e ti ha prediletta.")
                            );
                        }
                    }
                }

                if ($f['comune']=='DEF') {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Ti esalto Signore."),
                            array('ebd','',"Hai cambiato il mio lamento in canto di gioia."),
                            array('*','2',"Tu mi hai liberato.")
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            array('ebd','',"Perché sei triste, anima mia, e ti agiti in me?"),
                            array('ris','',"Spera in Dio: e un giorno lo potrai lodare."),
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            array('ebd','',"Nell'ombra della morte non avrò paura,"),
                            array('ris','',"perché tu sei con me, Signore."),
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            array('ebd','',"Ascolta, Signore, la mia preghiera:"),
                            array('ris','',"a te ritorna ogni mortale."),
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"In te, Signore, ho sperato."),
                            array('ebd','',"Esulterò di gioia per la tua grazia."),
                            array('*','2',"Non sarò mai deluso.")
                        );
                    }
                }

                //#######################################################################

                if ($this->actual["fesCode"]=='0121a') {
                    //sant'Agnese
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"2Cor 1,3-5",
                            "testo"=>"Sia benedetto Dio, Padre del Signore nostro Gesù Cristo, Padre misericordioso e Dio di ogni consolazione, il quale ci consola in ogni nostra tribolazione perché possiamo anche noi consolare qualli che si trovano in ogni genere di afflizione con la consolazione con cui siamo sonsolati noi stessi da Dio. Infatti, come abbondano le sofferenze di Cristo in noi, così, per mezzo di Cristo, abbonda anche la nostra consolazione."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Pt 4,13-14",
                            "testo"=>"Nella misura in cui partecipate alle sofferenze di Cristo, rallegratevi, perché anche nella rivelazione della sua gloria possiate rallegrarvi ed esultare. Beati voi, se venite insultati per il nome di Cristo, perché lo Spirito della gloria e lo Spirito di Dio riposa su di voi."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0125a') {
                    //conversione San Paolo
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"At 26,16b-18",
                            "testo"=>"Ti sono apparso per costituirti ministro e testimone di quelle cose che hai visto e di quelle per cui ti apparirò ancora. Per questo ti libererò del popolo e dai pagani, ai quali ti mando per aprir loro gli occhi, perché passinmo dalle tenebre alla luce e dal potere di satana a Dio e ottengano la remissione dei peccati e l'eredità in mezzo a coloro che sono stati santificati per la fede in me."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"1Tm 1,12-13",
                            "testo"=>"Rendo grazie a colui che mi ha dato la forza, Cristo Gesù Signore nostro, perché mi ha giudicato degno di fiducia chiamandomi al ministero: io che per l'innanzi ero stato un bestemmiatore, un persecutore e un violento. Ma mi è stata usata misericordia, perché agivo senza saperlo, lontano dalla fede."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Tm 1,14-15",
                            "testo"=>"La grazia del Signore nostro ha sovrabbondato insieme alla fede e alla carità che è in Cristo Gesù. Questa parola è sicura e degna di essere da tutti accolta: Cristo Gesù è venuto nel mondo per salvare i peccatori e di questi il primo sono io."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"1Tm 1,16",
                            "testo"=>"Ho ottenuto misericordia, perché Gesù Cristo ha voluto dimostrare in me, per primo, tutta la sua longanimità, a esempio di quanti avrebbero creduto in lui per avere la vita eterna."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Cor 15,9-10",
                            "testo"=>"Io sono l'infimo degli apostoli, e non sono degno neppure di essere chiamato apostolo, perché ho perseguitato la Chiesa di Dio. Per grazia di Dio però sono quello che sono, e la sua grazia in me non è stata vana; anzi ho faticato più di tutti loro, non io però, ma la grazia di Dio che è con me."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0222a') {
                    //Cattedra San Pietro
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"At 15,7b-9",
                            "testo"=>"Dio ha fatto una scelta, perché i pagani ascoltassero per bocca mia la parola del vangelo e venissero alla fede. E Dio, che conosce i cuori, ha reso testimonianza in loro favore concedendo anche a loro lo Spirito Santo, come anoi; e non ha fatto nessuna discriminazione tra noi e loro, purificandone i cuori con la fede."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Is 22,22",
                            "testo"=>"Gli porrò sulla spalla la chiave della casa di Davide; se egli apre, nessuno chiuderà; se egli chiude, nessuno potrà aprire."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Pt 5,1-2a",
                            "testo"=>"Esorto gli anziani che sono tra voi, quale anziano come loro, testimone delle sofferenze di Cristo e partecipe della gloria che deve manifestarsi: PAscete il gregge di Dio che vi è affidato, sorvegliandolo non per forza ma volentieri secondo Dio."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"2Pt 1,16",
                            "testo"=>"Non per essere andati dietro a favole artificiosamente inventate vi abbiamo fatto conoscere la potenza e la venuta del Signore nostro Gesù Cristo, ma perché siamo stati testimoni oculari della sua grandezza."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Pt 1,3-5",
                            "testo"=>"Sia benedetto Dio e Padre del Signore nostro Gesù Cristo: nella sua grande misericordia egli ci ha rigenerati, mediante la risurrezione di Gesù Cristo dai morti, per una speranza viva, per una eredità che non si corrompe, non si macchia e non marcisce. Essa è conservata nei cieli per voi, che dalla potenza di Dio siete custoditi mediante la fede, per la vostra salvezza, prossima a rivelarsi negli ultimi tempi."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0425a') {
                    //San Marco
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"1Cor 15,1-2a.3-4",
                            "testo"=>"Vi rendo noto, fratelli, il vangelo che vi ho annunziato e che voi avete ricevuto, nel quale restte saldi, e dal quale anche ricevete la salvezza. Vi ho trasmesso dunque, anzitutto, quello che anch'io ho ricevuto: che cioè Cristo morì per i nostri peccati secondo le Scritture, fu sepolto ed è risuscitato il terzo giorno secondo le Scritture."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Rm 1,16-17",
                            "testo"=>"Io non mi vergogno del vangelo, poiché è potenza di Dio per la salvezza di chiunque crede, del Giudeo prima e poi del Greco. È in esso che si rivela la giustizia di Dio di fede in fede, come sta scritto: Il giusto vivrà mediante la fede."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Ts 2,2b-4",
                            "testo"=>"Abbiamo avuto nel nostro Dio il coraggio di annunziarvi il vangelo di Dio in mezzo a molte lotte. E il nostro appello non è stato mosso da volontà di inganno, né da torbidi motivi, né abbiamo usato frode alcuna; ma come Dio ci ha trovati degni di affidarci il vangelo, così lo predichiamo, non cercando di piacere agli uomini, ma a Dio, che prova i nostri cuori."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"2Tm 1,8b-9",
                            "testo"=>"Soffri anche tu insieme a me per il vangelo, aiutato dalla forza di Dio. Egli infatti ci ha salvati e ci ha chiamati con una vocazione santa, non già in base alle nostre opere, ma secondo il suo proposito e la sua grazia; grazia che ci è stata data in Cristo Gesù fin dall'eternità."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Col 1,3-6a",
                            "testo"=>"Noi rendiamo continuamente grazie a Dio, Padre del Signore nostro Gesù Cristo, nelle nostre preghiere per voi, per le nostizie ricevute circa la vostra fede in Cristo Gesù, e la carità che avete verso tutti i santi, in vista della speranza che vi attende nei cieli. Di questa speranza voi avete già udito l'annunzio dalla parola di verità del vangelo che è giunto a voi, come pure in tutto il mondo fruttifica e si sviluppa."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0429a') {
                    //Santa Caterina
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Sap 7,13-14",
                            "testo"=>"Senza frode imparai la sapienza e senza invidia la dono, non nascondo le sue ricchezze. Essa è un tesoro inesauribile per gli uomini; quanti se lo procurano si attirano l'amicizia di Dio, sono a lui raccomandati per i doni del suo insegnamento."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Gc 3,17-18",
                            "testo"=>"La sapienza che viene dall'alto è anzitutto pura; poi pacifica, mite, arrendevole, piena di misericordia e di buoni frutti, senza parzialità, senza ipocrisia. Un frutto di giustizia viene seminato nella pace per coloro che fanno opera di pace."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0511a') {
                    //Oddone....
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Sir 17,6-8",
                            "testo"=>"Dio li riempì di dottrina e d'intelligenza e indicò loro anche il bene e il male. Pose lo sguardo nei loro cuori per mostrar loro la grandezza delle sue opere. Loderanno il suo santo nome per narrare la grandezza delle sue opere."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Pt 5,1-4",
                            "testo"=>"Esorto gli anziani che sono tra voi, quale anziano come loro, testimone delle sofferenze di Cristo e partecipe della gloria che deve manifestarsi: Pascete il gregge di Dio che vi è affidato, sorvegliandolo non per forza ma volentieri, secondo Dio; non per vile interesse, ma di buon animo; non spadroneggiando sulle persone a voi affidate, ma facendovi modelli del gregge. E quando apparirà il pastore supremo, riceverete la corona della gloria che non appassisce."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0531a') {
                    //Visitazione
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Gl 2,27;3,1a",
                            "testo"=>"Voi riconoscewrete che i sono in mezzo ad Israele, e che sono io il Signore vostro Dio, e altro dio non c'è: mai più vergogna per il mio popolo. Dopo questo, io effonderò il mio spirito sopra ogni uomo e diverranno profeti i vostri figli e le vostre figlie."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Gdt 13,31",
                            "testo"=>"Benedetta tu dal tuo Dio, in tutte le tende di Giacobbe; perché in ogni popolo dove si udrà il tuo nome, sarà glorificato per te il Dio d'Israele."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Tb 12,6b",
                            "testo"=>"Benedite Dio e proclamate davanti a tutti i viventi il bene che vi ha fatto, perché sia benedetto e celebrato il suo nome. Fate conoscere a tutti gli uomini le opere di Dio, come è giusto, e non trascurate di ringraziarlo."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Sap 7,27-28",
                            "testo"=>"La sapienza, pur rimanendo in se stessa, tutto rinnova e attraverso le età entrando nelle anime sante, forma amici di Dio e profeti. Nulla infatti Dio ama se non chi vive con la sapienza."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Pt 5,5b-7",
                            "testo"=>"Rivestitevi tutti di umiltà gli uni verso gli altri, perché Dio resiste ai superbi, ma dà grazia agli umili. Umiliatevi dunque sotto la potente mano di Dio, perché vi esalti al tempo opportuno, gettando in lui ogni vostra preoccupazione, perché egli ha cura di voi."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0611a') {
                    //San Barnaba
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"1Cor 15,1-2a.3-4",
                            "testo"=>"Vi rendo noto, fratelli, il vangelo che vi ho annunziato e che voi avete ricevuto, nel quale restte saldi, e dal quale anche ricevete la salvezza. Vi ho trasmesso dunque, anzitutto, quello che anch'io ho ricevuto: che cioè Cristo morì per i nostri peccati secondo le Scritture, fu sepolto ed è risuscitato il terzo giorno secondo le Scritture."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Rm 1,16-17",
                            "testo"=>"Io non mi vergogno del vangelo, poiché è potenza di Dio per la salvezza di chiunque crede, del Giudeo prima e poi del Greco. È in esso che si rivela la giustizia di Dio di fede in fede, come sta scritto: Il giusto vivrà mediante la fede."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Ts 2,2b-4",
                            "testo"=>"Abbiamo avuto nel nostro Dio il coraggio di annunziarvi il vangelo di Dio in mezzo a molte lotte. E il nostro appello non è stato mosso da volontà di inganno, né da torbidi motivi, né abbiamo usato frode alcuna; ma come Dio ci ha trovati degni di affidarci il vangelo, così lo predichiamo, non cercando di piacere agli uomini, ma a Dio, che prova i nostri cuori."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"2Tm 1,8b-9",
                            "testo"=>"Soffri anche tu insieme a me per il vangelo, aiutato dalla forza di Dio. Egli infatti ci ha salvati e ci ha chiamati con una vocazione santa, non già in base alle nostre opere, ma secondo il suo proposito e la sua grazia; grazia che ci è stata data in Cristo Gesù fin dall'eternità."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Col 1,3-6a",
                            "testo"=>"Noi rendiamo continuamente grazie a Dio, Padre del Signore nostro Gesù Cristo, nelle nostre preghiere per voi, per le nostizie ricevute circa la vostra fede in Cristo Gesù, e la carità che avete verso tutti i santi, in vista della speranza che vi attende nei cieli. Di questa speranza voi avete già udito l'annunzio dalla parola di verità del vangelo che è giunto a voi, come pure in tutto il mondo fruttifica e si sviluppa."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0722a') {
                    //Santa Maria Maddalena
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Sap 1,1b-2",
                            "testo"=>"Rettamente pensate del Signore, cercatelo con cuore semplice. Egli infatti si lascia trovare da quanti non lo tentano, si mostra a coloro che non ricusano di credere in lui."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Rm 8,28-30",
                            "testo"=>"Noi sappiamo che tutto concorre al bene di coloro che amano Dio, che sono stati chiamati secondo il suo disegno. Poiché quelli che egli da sempre ha conosciuto li ha anche predestinati ad essere conformi all'immagine del Figlio suo, perché egli sia il primogenito tra molti fratelli; quelli poi che ha predestinati li ha anche chiamati; quelli che ha chiamati li ha anche giustificati; quelli che ha giustificati li ha anche glorificati."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0726a') {
                    //Gioacchino ed Anna
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 55,3",
                            "testo"=>"Porgete l'orecchio e venite a me, ascoltate e voi vivrete. Io stabilirò per voi un'alleanza eterna, i favori assicurati a Davide."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Rm 9,4-5",
                            "testo"=>"Essi sono Israeliti e possiedono l'adozione a figli, la gloria, le alleanze, la legislazione, il culto, le promesse, i patriarchi; da essi proviene Cristo secondo la carne, egli che è sopra ogni cosa, Dio benedetto nei secoli. Amen."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0729a') {
                    //Gioacchino ed Anna
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Ap 3,20",
                            "testo"=>"Ecco, sto alla porta e busso. Se qualcuno ascolta la mia voce e mi apre la porta, io verrò da lui, cenerò con lui ed egli con me."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Ez 37,13-14",
                            "testo"=>"Riconoscerete che io sono il Signore, quando aprirò le vostre tombe e vi risusciterò dai vostri sepolcri; quando farò entrare in voi il mio spirito e rivivrete, saprete che io sono il Signore: l'ho detto e lo farò."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0810a') {
                    //San Lorenzo
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"2Cor 1,3-5",
                            "testo"=>"Sia benedetto Dio, Padre del Signore nostro Gesù Cristo, Padre misericordioso e Dio di ogni consolazione, il quale ci consola in ogni nostra tribolazione perché possiamo anche noi consolare qualli che si trovano in ogni genere di afflizione con la consolazione con cui siamo sonsolati noi stessi da Dio. Infatti, come abbondano le sofferenze di Cristo in noi, così, per mezzo di Cristo, abbonda anche la nostra consolazione."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Pt 4,13-14",
                            "testo"=>"Nella misura in cui partecipate alle sofferenze di Cristo, rallegratevi, perché anche nella rivelazione della sua gloria possiate rallegrarvi ed esultare. Beati voi, se venite insultati per il nome di Cristo, perché lo Spirito della gloria e lo Spirito di Dio riposa su di voi."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0829a') {
                    //Martirio di Giovani battista
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 49,1b-2",
                            "testo"=>"Il Signore dal seno materno mi ha chiamato, fino dal grembo di mia madre ha pronunziato il mio nome. Ha reso la mia bocca come spada affilata, mi ha nascosto all'ombra della sua mano, mi ha reso freccia appuntita, mi ha riposto nella sua faretra."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"At 13,23-25",
                            "testo"=>"Dalla discendenza di Davide, secondo la promessa, Dio trasse per Israele un salvatore, Gesù. Giovanni aveva preparato la sua venuta predicando un battesimo di penitenza a tutto il popolo d'Israele. Diceva Giovanni sul finire della sua missione: Io non sono ciò che voi pensate che io sia! Ecco, viene dopo di me uno, al quale io non sono degno di sciogliere i sandali."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0903a') {
                    //San Gregorio magno
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Sap 8,9a.11-13",
                            "testo"=>"Avendo la sapienza a compagna della vita, sarò trovato acuto in giudizio, sarò ammirato di fronte ai potenti. Se tacerò, resteranno in attesa; se parlerò, mi presteranno attenzione; se prolungherò il discorso, si porteranno la mano alla bocca. Per essa otterrò l'immortalità, e lascerò un ricordo eterno ai miei successori."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Pt 5,1-4",
                            "testo"=>"Esorto gli anziani che sono tra voi, quale anziano come loro, testimone delle sofferenze di Cristo e partecipe della gloria che deve manifestarsi: Pascete il gregge di Dio che vi è affidato, sorvegliandolo non per forza ma volentieri, secondo Dio; non per vile interesse, ma di buon animo; non spadroneggiando sulle persone a voi affidate, ma facendovi modelli del gregge. E quando apparirà il pastore supremo, riceverete la corona della gloria che non appassisce."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0908a') {
                    //Natività della beata Vergine
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 11,1-3a",
                            "testo"=>"Un germoglio spunterà dal tronco di Iesse, un virgulto germoglierà dalle sue radici. Su di lui si poserà lo spirito del Signore, spirito di sapienza e di intelligenza, spirito di consiglio e di fortezza, spirito di conoscenza e di timore del Signore. Si compiacerà del timore del Signore."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Ct 6,10",
                            "testo"=>"Chi è costei che sorge come l'aurora, bella come la luna, fulgida come il sole, terribile come schiere a vessilli spiegati?"
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Gdt 13,24a.25a",
                            "testo"=>"Benedetto il Signore, creatore del cielo e della terra; egli oggi ha reso così grande il tuo nome, che la lode tua non verrà mai meno sulle labbra degli uomini: essi ricorderanno in eterno la potenza del Signore."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Ap 21,3b",
                            "testo"=>"Ecco la dimora di Dio con gli uomini! Egli dimorerà tra di loro ed essi saranno suo popolo ed egli sarà il « Dio-con-loro »."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Rm 9,4-5",
                            "testo"=>"Essi sono Israeliti e possiedono l'adozione a figli, la gloria, le alleanze, la legislazione, il culto, le promesse, i patriarchi; da essi proviene Cristo secondo la carne, egli che è sopra ogni cosa, Dio benedetto nei secoli. Amen."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0915a') {
                    //Natività della beata Vergine
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Col 1,24-25",
                            "testo"=>"Sono lieto delle sofferenze che sopporto per voi e completo nella mia carne quello che manca ai patimenti di Cristo, a favore del suo corpo che è la Chiesa. Di essa sono diventato ministro, secondo la missione affidatami da Dio presso di voi: di realizzare la sua parola."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"2Cor 1,3-5",
                            "testo"=>"Sia benedetto Dio, Padre del Signore nostro Gesù Cristo, Padre misericordioso e Dio di ogni consolazione, il quale ci consola in ogni nostra tribolazione perché possiamo anche noi consolare qualli che si trovano in ogni genere di afflizione con la consolazione con cui siamo sonsolati noi stessi da Dio. Infatti, come abbondano le sofferenze di Cristo in noi, così, per mezzo di Cristo, abbonda anche la nostra consolazione."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Ct 8,6b-7a",
                            "testo"=>"Forte come la morte è l'amore, tenace come gli inferi è la gelosia: le sua vampe son vampe do fuoco, una fiamma del Signore! Le grandi acque non possono spegnera l'amore né i fiumi travolgerlo."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"1Pt 4,13.19",
                            "testo"=>"Nella misura in cui partecipate alle sofferenze di Cristo, rallegratevi, perché anche nella rivelazione della sua gloria possiate rallegrarvi ed esultare. Perciò anche quelli che soffrono secondo il volere di Dio, si mettano nelle mani del loro Creatore fedele e continuino a fare il bene."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"2Tm 2,10-12a",
                            "testo"=>"Sopporto ogni cosa per gli eletti , perché anch'essi raggiungano la salvezza che è in Cristo Gesù, insieme alla gloria eterna. Certa è questa parola: Se moriamo con lui, vivremo anche con lui; se con lui perseveriamo, con lui anche regneremo."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0929a') {
                    //San Michele e tutti gli angeli
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Gen 28,12-13a",
                            "testo"=>"Giacobbe fece un sogno: una scala poggiava sulla terra, mentre la sua cima raggiungeva il cielo; ed ecco gli angeli di Dio salivano e scendevano su di essa. Ecco il Signore gli stava davanti e disse:« Io sono il Signore, il Dio di Abramo tuo padre e il Dio di Isacco »."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Ap 5,11-12",
                            "testo"=>"Intesi le voci di molti angeli intorno al trono e agli esseri viventi e ai vegliardi. Il loro numero era miriadi di miriadi e migliaia di migliaia e dicevano a gran voce: Gloria al nostro Dio."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Ap 1,1-2",
                            "testo"=>"Rivelazione di Gesù Cristo che egli manifestò inviando il suo angelo al suo servo Giovanni. Questi attesta la parola di Dio e la testimonianza di Gesù, riferendo ciò che ha visto."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Ap 12,7-8",
                            "testo"=>"Scoppiò una guerra nel cielo: Michele e i suoi angeli combattevano contro il drago. Il drago combatteva insieme con i suoi angeli, ma non prevalsero e non ci fu più posto per essi in cielo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Ap 1,4b-5",
                            "testo"=>"Grazia a voi e pace da Colui che è, che era e che viene, dai sette spiriti che stanno davanti al suo trono, e da Gesù Cristo, il testimone fedele, il primogenito dei morti e il principe dei re della terra, che ci ama e ci ha liberati dai nostri peccati con il suo sangue."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='1002a') {
                    //Angeli custodi
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Es 23,20-22",
                            "testo"=>"Ecco, io mando un angelo davanti a te per custodirti sul cammino e per farti entrare nel luogo che ho preparato. Abbi rispetto della sua presenza, ascolta la sua voce e non ribellarti a lui; egli infatti non perdonerebbe la tua trasgressione perché il mio nome è in lui. Se tu ascolti la sua voce e fai quanto ti dirò, io sarò il nemico dei tuoi nemici e l'avversario dei tuoi avversari."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"At 5,17-20",
                            "testo"=>"Si alzò il sommo sacerdote con quelli della sua parte, cioè la setta dei sadducei; pieni di livore, fatti arrestare gli apostoli, li fecero gettare nella prigione pubblica. Ma durante la notte un angelo del Signore aprì le porte della prigione, li condusse fuori e disse:« Andate, e mettetevi a predicare al popolo nel tempio tutte queste parole di vita »."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"At 12,7",
                            "testo"=>"Ed ecco gli si presentò un angelo del Signore e una luce sfolgorò nella cella. Egli toccò il fianco di Pietro, lo destò e disse:« Alzati, in fretta! ». E le catene gli caddero dalle mani."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"At 10,3-5",
                            "testo"=>"Un giorno, verso le tre del pomeriggio, Cornelio vide chiaramente in visione un angelo di Dio venirgli incontro e chiamarlo:« Cornelio! ». Egli lo guardò e preso da timore disse:« Che c'è Signore? ». Gli rispose:« Le tue preghiere e le tue elemosine sono salite, in tua memoria, innanzi a Dio. E ora manda degli uomini a Giaffa e fa' venire un certo Simone detto anche Pietro »."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Ap 8,3-4",
                            "testo"=>"Venne un angelo e si fermò all'altare, reggendo un incensiere d'oro. Gli furono dati molti profumi perché gli offrisse insieme con le preghiere di tutti i santi bruciandoli sull'altare d'oro, posto davanti al trono. E dalla mano dell'angelo il fumo degli aromi salì davanti a Dio, insieme con le preghiere dei santi."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='1018a') {
                    //Angeli custodi
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"1Cor 15,1-2a.3-4",
                            "testo"=>"Vi rendo noto, fratelli, il vangelo che vi ho annunziato e che voi avete ricevuto, nel quale restte saldi, e dal quale anche ricevete la salvezza. Vi ho trasmesso dunque, anzitutto, quello che anch'io ho ricevuto: che cioè Cristo morì per i nostri peccati secondo le Scritture, fu sepolto ed è risuscitato il terzo giorno secondo le Scritture."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Col 1,3-6a",
                            "testo"=>"Noi rendiamo continuamente grazie a Dio, Padre del Signore nostro Gesù Cristo, nelle nostre preghiere per voi, per le nostizie ricevute circa la vostra fede in Cristo Gesù, e la carità che avete verso tutti i santi, in vista della speranza che vi attende nei cieli. Di questa speranza voi avete già udito l'annunzio dalla parola di verità del vangelo che è giunto a voi, come pure in tutto il mondo fruttifica e si sviluppa."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='1113a') {
                    //Angeli custodi
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Col 3,15-16",
                            "testo"=>"La pace di Cristo regni nei vostri cuori, perchè ad essa siete stati chiamati in un solo corpo. E siate riconoscenti! La parola di Cristo dimori tra voi abbondantemente; ammaestratevi e ammonitevi con ogni sapienza, cantando a Dio di cuore e con gratitudine salmi, inni e cantici spirituali."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"1Pt 3,10-11",
                            "testo"=>"Chi vuole amare la vita e vedere giorni felici, trattenga la sua lingua dal male e le sue labbra da parole d'inganno; eviti il male e faccia il bene, cerchi la pace e la segua."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Gv 2,15.17",
                            "testo"=>"Non amate il mondo, né le opere del mondo! Se uno ama il mondo, l'amore del Padre non è in lui. Il mondo passa con la sua concupiscenza, ma chi fa la volontà di Dio rimane in eterno."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Col 3,2-4",
                            "testo"=>"Pensate alle cose di lassù, non a quelle della terra. Voi infatti siete morti e la vostra vita è nascosta con Cristo in Dio. Quando si manifesterà Cristo, la vostra vita, allora anche voi sarete manifestati con lui nella gloria."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Pt 3,8.9b",
                            "testo"=>"Siate tutti concordi, partecipi delle gioie e dei dolori degli altri, animati da affetto fraterno, misericordiosi, umili, poiché a questo siete stati chiamati per avere in eredità la benedizione."
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='1116a') {
                    //Angeli custodi
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Ct 3,4b",
                            "testo"=>"Trovai l'amato del mio cuore. Lo strinsi fortemente e non lo lascerò finché non l'abbia condotto in casa di mia madre, nella stanza della mia genetrice."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Ct 8,6a",
                            "testo"=>"Mettimi come sigillo nel tuo cuore, come sigillo sul tuo braccio, perché forte come la morte è l'amore."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Ct 2,13b-14",
                            "testo"=>"Alzati, amica mia, mia bella, e vieni! O mia colomba, che stai nelle fenditure della roccia, nei nascondigli dei dirupi, mostrami il tuo viso, fammi sentire la tua voce, perché la tua voce è soave e il tuo viso leggiadro."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Ap 19,6b-7",
                            "testo"=>"Ha preso possesso del suo regno il Signore, il nostro Dio, l'Onnipotente. Rallegriamoci ed esultiamo, rendiamo a lui gloria, perché sono giunte le nozze dell'Agnello; la sua sposa è pronta."
                        );
                    }
                }

                
            }

        }
            
    }

    function draw() {

        $this->res['testo']= new Saltesto();
        $this->res['testo']->addLabel('glo',array('','',"Gloria al Padre e al Figlio e allo Spirito Santo."));

        $temp=array();
        $m="";

        if ($this->tipo=='RB') {

            if ($this->info[0][0]=='ant') {
                $temp=$this->info;
            }

            else {

                //risposta
                $m=$this->info[0][2].' '.$this->info [2][2];

                $t=$this->info[0];
                $t[2].=' * '.$this->info[2][2];

                $temp[]=$t;
                $temp[]=array('','2',$m);

                ////////////////////////////////////

                $temp[]=$this->info[1];

                ////////////////////////////////////

                $temp[]=$this->info[2];
                $temp[]=array('glo');
                $temp[]=array('','2',$m);
            }
        }
        elseif ($this->tipo=='RBB') {
            $temp=$this->info;
        }

        $this->res['testo']->addBlock($temp);

        echo '<div class="salResBlockTitle" style="margin-top:30px;">';
            echo $this->res['titolo'];
            //echo '<div>'.json_encode($this->actual).'</div>';
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            if ($this->res['testo']) {
                echo $this->res['testo']->draw();
            }
        echo '</div>';
    }
    
}
?>