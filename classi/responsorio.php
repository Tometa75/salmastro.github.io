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
                if($this->actual['ora']=='lodi') {
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
                if($this->actual['ora']=='lodi') {
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
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    "titolo"=>"Eb 10,5-7",
                    "testo"=>"Entrando nel mondo Cristo dice:« Tu non hai voluto né sacrificio né offerta, un corpo invece mi hai preparato. Non hai gradito né olocausti né sacrifici per il peccato. Allora ho detto: Ecco, io vengo - poiché di me sta scritto nel rotolo del libro - per fare, o Dio, la tua volontà »."
                );
            }
            elseif($this->actual['ora']=='lodi') {
                $this->info=array(
                    "titolo"=>"Ml 3,1",
                    "testo"=>"Ecco, io manderò un mio messaggero a preparare la via davanti a me e subito entrerà nel suo tempio il Signore, che voi cercate; l'angelo dell'alleanza, che voi sospirate, ecco viene, dice il Signore."
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    "titolo"=>"Is 8,13a.14",
                    "testo"=>"Il Signore, lui solo ritenete santo. Egli sarà laccio e pietra d'inciampo e scoglio che fa cadere per le due case d'Israele, laccio e trabocchetto per chi abita in Gerusalemme."
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    "titolo"=>"Is 49,6",
                    "testo"=>"Il Signore mi disse: È troppo poco che tu sia mio servo per restaurare le tribù di Giacobbe e ricondurre i superstiti di Israele. Io ti renderò luce delle nazioni perché porti la mia salvezza fino all'estremità della terra."
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    "titolo"=>"Is 12,5-6",
                    "testo"=>"Cantate inni al Signore, perché ha fatto opere grandi, ciò sia noto in tutta la terra. Gridate giulivi ed esultate, abitanti di Sion, perché grande è in mezzo a voi è il Santo di Israele."
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    "titolo"=>"Eb 4,15-16",
                    "testo"=>"Non abbiamo un sommo sacerdote che non sappia compatire le nostre infermità, essendo stato lui stesso provato in ogni cosa, come noi, escluso il peccato. Accostiamoci dunque con piena fiducia al trono della grazia, per ricevere misericordia e trovare grazia ed essere aiutati al momento opportuno."
                );
            }
        }

        elseif ($this->actual["evCode"]=='0210a') {
            //santa Scolastica
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    "titolo"=>"1Gv 3,21-23",
                    "testo"=>"Carissimi, se il nostro cuore non ci rimprovera nulla, abbiamo fiducia in Dio; e qualunque cosa chiediamo la riceviamo da lui perché osserviamo i suoi comandamenti e facciamo quel che è gradito a lui. Questo è il suo comandamento: che crediamo nel nonme del Figlio suo Gesù Cristo e ci amiamo gli uni gli altri, secondo il precetto che ci ha dato."
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    "titolo"=>"1Gv 4,18",
                    "testo"=>"Nell'amore non c'è timore, al contrario l'amore perfetto scaccia il timore, perché il timore suppone un castigo e chi teme non è perfetto nell'amore."
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    "titolo"=>"Is 26,8a.9a",
                    "testo"=>"Nella via dei tuoi giudizi, Signore, noi speriamo in te. La mia anima anela a te di notte, al mattino il mio spirito ti cerca."
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    "titolo"=>"Sir 2,17",
                    "testo"=>"Coloro che temono il Signore tengono pronti i loro cuori e umiliano l'anima loro davanti a lui."
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    "titolo"=>"Ct 2,13b-14",
                    "testo"=>"Alzati, amica mia, mia bella, e vieni! O mia colomba, che stai nelle fenditure della roccia, nei nascondigli dei dirupi, mostrami il tuo viso, fammi sentire la tua voce, perché la tua voce è soave, il tuo viso è leggiadro."
                );
            }
        }

        elseif ($this->actual["evCode"]=='0319a') {
            //San Giuseppe sposo di Maria
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    "titolo"=>"2Sam 7,28-29",
                    "testo"=>"Signore, tu sei Dio, le tue parole sono verità e hai promesso questo bene al tuo servo. Degnati dunque di benedire ora la casa del tuo servo, perché sussista sempre dinanzi a te! Piché tu, Signore, hai parlato e per la tua benedizione la casa del tuo servo sarà benedetta per sempre!."
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    "titolo"=>"Pr 2,7-8",
                    "testo"=>"Dio riserva ai giusti la sua protezione, è scudo a coloro che agiscono con rettitudine, vegliando sui sentieri della giustizia e custodendo le vie dei suoi amici."
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    "titolo"=>"Sap 10,10",
                    "testo"=>"La Sapienza condusse per diritti sentieri il giusto, gli mostrò il regno di Dio e gli diede la conoscenza delle cose sante; gli diede successo nelle sue fatiche e moltiplicò i frutti del suo lavoro."
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    "titolo"=>"Sir 2,15-16",
                    "testo"=>"Coloro che temono il Signore non disobbediscono alle sue parole; e coloro che lo amano seguono le sue vie. Coloro che temono il Signore cercano di piacergli; e coloro che lo amano si saziano della legge."
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    "titolo"=>"Col 3,23-24",
                    "testo"=>"Qualunque coisa facciate, fatela di cuore come per il Signore e non per gli uomini, sapendo che, come ricompensa, riceverete dal Signore l'eredità. Servite a Cristo Signore."
                );
            }
        }

        elseif ($this->actual["evCode"]=='0321a') {
            //transito San Benedetto
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    "titolo"=>"Sir 50,6-7",
                    "testo"=>"Ecco l'uomo di Dio: come un astro mattutino fra le nubi, come la luna nei giorni in cui è piena, come il sole sfolgorante sul tempio dell'Altissimo."
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
                    "titolo"=>"1Cor 9,26-27a",
                    "testo"=>"Io corro, ma non come chi è senza meta; faccio il pugilato, ma non come chi batte l'aria, anzi tratto duramente il mio corpo e lo trascino in schiavitù."
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

        elseif ($this->actual["evCode"]=='0325a') {
            //Annunciazione
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    "titolo"=>"Fil 2,6-8a",
                    "testo"=>"Cristo Gesù, pur essendo di natura divina, non considerò un tesoro geloso la sua uguaglianza con Dio; ma spogliò se stesso, assumendo la condizione di servo e divenendo simile agli uomini; apparso in forma umana, umiliò se stesso."
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    "titolo"=>"Ef 1,9-10",
                    "testo"=>"Dio ci ha fatto conoscere il mistero della sua volontà, secondo quanto nella sua benevolenza aveva in lui prestabilito per realizzarlo nella pienezza dei tempi:il disegno cioè di ricapitolare in Cristo tutte le cose, quelle del cielo come quelle della terra."
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    "titolo"=>"1Gv 4,10",
                    "testo"=>"In questo sta l'amore: non siamo stati noi ad amare Dio, ma è lui che ha amato noi e ha mandato il suo Figlio come vittima di espiazione per i nostri peccati."
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    "titolo"=>"1Tm 2,5-6a",
                    "testo"=>"Uno solo è Dio e uno solo il mediatore fra Dio e gli uomini, l'uomo Cristo Gesù, che ha dato se stesso in riscatto per tutti."
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    "titolo"=>"1Gv 1,1-3a",
                    "testo"=>"Vi annunziamo ciò che era fin dal principio, ciò che noi abbiamo udito, ciò che noi abbiamo verduto con i nostri occhi, ciò che noi abbiamo contemplato e ciò che le nostre mani hanno toccato, ossi il Verbo della vita. Poiché la vita si è fatta visibile, noi l'abbiamo veduta e di ciò rendiamo testimoinianza e vi annunziamo la vita eterna, che era presso il Padre e si è resa visibile a noi. Quello che abbiamo veduto e udito, noi lo annunziamo anche a voi, perché anche vi siate in comunione con noi."
                );
            }
        }

        elseif ($this->actual["evCode"]=='0624a') {
            //Natività di San Giovanni Battista
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    "titolo"=>"Ml 3,23-24",
                    "testo"=>"Ecco, io invierò il profeta Elia prima che giunga il giorno grande e terribile del Signore, perché converta il cuore dei padri verso i figli e il cuore dei figli verso i padri; così che io venedo non colpisca il paese con lo sterminio."
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    "titolo"=>"Is 49,1",
                    "testo"=>"Ascoltatemi, o isole, udite attentamente, nazioni lontane; il Signore dal seno materno mi ha chiamato, fino dal grembo di mia madre ha pronunziato il mio nome."
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    "titolo"=>"Is 49,5a.6b",
                    "testo"=>"Disse il Signore che mi ha plasmato suo servo dal seno materno:« Io ti renderò luce delle nazioni perché porti la mia salvezza fino all'estremità della terra »."
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    "titolo"=>"Is 49,7b",
                    "testo"=>"I re vedranno e si alzeranno in piedi, i principi vedranno e si prostreranno, a causa del Signore che è fedele, a causa del Santo di Israele che ti ha scelto."
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    "titolo"=>"At 13,23-25",
                    "testo"=>"Dalla discendenza di Davide, secondo la promessa, Dio trasse per Israele un salvatore, Gesù. Giovanni aveva preparato la sua venuta predicando un battesimo di penitenza a tutto il popolo d'Israele. Diceva Giovanni sul finire della sua missione: Io non sono ciò che voi pensate che io sia! Ecco, viene dopo di me uno, al quale io non sono degno di sciogliere i sandali."
                );
            }
        }

        elseif ($this->actual["evCode"]=='0629a') {
            //Pietro e Paolo
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    "titolo"=>"Rm 1,1-3a.7",
                    "testo"=>"Paolo, servo di Cristo Gesù, apostolo per vocazione, prescelto per annunziare il vangelo di Dio, che egli aveva promesso per mezzo dei suoi profeti nelle sacre Scritture, riguardo al Figlio suo: a quanti sono in Roma amati da Dio e santi per vocazione, grazia a voi e pace da Dio, Padre nostro, e dal Signore Gesù Cristo."
                );
            }
            elseif($this->actual['ora']=='lodi') {
                $this->info=array(
                    "titolo"=>"1Pt 4,13-14",
                    "testo"=>"Nella misura in cui partecipate alle sofferenze di Cristo, rallegratevi, perché anche nella rivelazione della sua gloria possiate rallegrarvi ed esultare. Beati voi, se venite insultati per il nome di Cristo, perché lo Spirito della gloria e lo Spirito di Dio riposa su di voi."
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    "titolo"=>"At 15,7-9",
                    "testo"=>"Pietro si alzò e disse:« Fratelli, voi sapete che già da molto tempo Dio ha fatto una scelta fra voi, perché i pagani ascoltassero per bocca mia la parola del vangelo e venissero alla fede. E dio, che conosce i cuori, ha reso testimonianza in loro favore concedendo anche a loro lo Spirito Santo, come a noi; e non ha fatto nessuna discriminazione tra noi e loro, purificandone i cuori con la fede »."
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    "titolo"=>"Gal 1,15-16a.17b-18a",
                    "testo"=>"Quando colui che mi scelse fin dal seno di mia madre e mi chiamò con la sua grazia si compiacque di rivelare a me suo Figlio perché lo annunziassi in mezzo ai pagani, mi recai in Arabia e poi ritornai a Damasco. In seguito, dopo tre anni andai a Gerusalemme per consultare Pietro."
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    "titolo"=>"2Cor 4,13-14",
                    "testo"=>"Animati tuttavia da quello stesso spirito di fede di cui sta scritto: Ho creduto, perciò ho parlato, anche noi crediamo e perciò parliamo, convinti che colui che ha risuscitato il Signore Gesù, risusciterà anche noi con Gesù e ci porrà accanto a lui insieme con voi."
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    "titolo"=>"1Cor 15,3-5.8",
                    "testo"=>"Vi ho trasmesso, anzitutto, quello che anch'io ho ricevuto: che cioè Cristo morì per i nostri peccati secondo le Scritture, fu sepolto ed è risuscitato il terzo giorno secondo le Scritture, e che apparve a Cefa e quindi ai dodici. Ultimo fra tutti apparve anche a me."
                );
            }
        }

        elseif ($this->actual["evCode"]=='0711a') {
            //San Benedetto
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    "titolo"=>"Sir 50,6-7",
                    "testo"=>"Ecco l'uomo di Dio: come un astro mattutino fra le nubi, come la luna nei giorni in cui è piena, come il sole sfolgorante sul tempio dell'Altissimo."
                );
            }
            elseif($this->actual['ora']=='lodi') {
                $this->info=array(
                    "titolo"=>"Is 51,1-2",
                    "testo"=>"Ascoltatemi, voi che siete in cerca di giustizia, voi che cercate il Signore; guardate alla roccia da cui siete stati tagliati, alla cava da cui siete stati estratti. Guardate ad Abramo vostro padre: poiché io chiamai lui solo, lo benedissi e lo moltiplicai."
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    "titolo"=>"Sap 18,21",
                    "testo"=>"Un uomo incensurabile si affrettò a difendere i giusti con le armi del suo ministero: la preghiera e il sacrificio espiatorio dell'incenso, mostrando così di essere tuo servitore."
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    "titolo"=>"Sir 50,3-4",
                    "testo"=>"A suo tempo fu scavato il deposito per le acque, un serbatoio ampio come il mare. Premuroso d'impedire la caduta del suo popolo, fortificò la città contro un assedio."
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    "titolo"=>"Sir 24,29b-32",
                    "testo"=>"Ed ecco il mio canale è diventato un fiume, il mio fiume è diventato un mare: farò ancora splendere la mia dottrina come l'aurora; la farò brillare molto lontano. Riverserò ancora l'insegnamento come una profezia, lo lascerò per le generazioni future. Vedete, non ho lavorato solo per me, ma per quanti cercano la sapienza."
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    "titolo"=>"Sir 50,10.12b-13a",
                    "testo"=>"Come un ulivo verdeggiante pieno di frutti e come un cipresso svettante tra le nuvole. Circondato dalla corona dei fratelli, come fronde di cedri nel Libano: lo circondavano come fusti di palme, tutti i figli di Aronne nella loro gloria."
                );
            }
        }

        elseif ($this->actual["evCode"]=='0806a') {
            //Trasfigurazione
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    "titolo"=>"Fil 3,20-21",
                    "testo"=>"La nostra patria è nei cieli e di là aspettiamo come salvatore il Signore Gesù Cristo, il quale trasfigurerà il nostro misero corpo per conformarlo al suo corpo glorioso, in virtù del potere che ha di sottomettere a sé tutte le cose."
                );
            }
            elseif($this->actual['ora']=='lodi') {
                $this->info=array(
                    "titolo"=>"Ap 21,10.23",
                    "testo"=>"L'angelo mi trasportò in spirito su di un monte grande e alto, e mi mostrò la città santa, Gerusalemme, che scendeva dal cielo, da Dio, risplendente della gloria di Dio. La città non ha bisogno della luce del sole, né della luce della luna perché la gloria di Dio la illumina e la sua lampada è l'Agnello."
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    "titolo"=>"Es 19,9a",
                    "testo"=>"Il Signore disse a Mosè:« Ecco, io sto per venire verso di te in una densa nube, perché il popolo senta quando io parlerò con te e credano sempre anche a te »."
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    "titolo"=>"Es 33,9.11a",
                    "testo"=>"Quando Mosè entrava nella tenda scendeva la colonna di nube e restava all'ingresso della tenda. Allora il Signore parlava con Mosè. Così il Signore parlava con Mosè faccia a faccia, come un uomo parla con un altro."
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    "titolo"=>"2Cor 3,18",
                    "testo"=>"Noi tutti, a viso scoperto, riflettendo come in uno specchio la gloria del Signore, veniamo trasformati in quella medesima immagine, di glopria in gloria, secondo l'azione dello Spirito del Signore."
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    "titolo"=>"Rm 8,16-17",
                    "testo"=>"Lo Spirito stesso attesta al nostro spirito che siamo figli di Dio. E se siamo figli, siamo anche eredi: eredi di Dio, coeredi di Cristo, se veramente partecipiamo alle sue sofferenze per partecipare anche alla sua gloria."
                );
            }
        }

        elseif ($this->actual["evCode"]=='0815a') {
            //Assunzione
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    "titolo"=>"Rm 8,30",
                    "testo"=>"Quelli che Dio ha predestinati li ha anche chiamati; quelli che ha chiamati li ha anche giustificati; quelli che ha giustificati li ha anche glorificati."
                );
            }
            elseif($this->actual['ora']=='lodi') {
                $this->info=array(
                    "titolo"=>"Is 61,10",
                    "testo"=>"Io gioisco pienamente nel Signore, la mia anima esulta nel mio Dio, perché mi ha rivestito delle vesti di salvezza, mi ha avvolto con il manto della giustizia, come una sposa che si adorna gi gioielli."
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    "titolo"=>"Gdt 13,22b.23b",
                    "testo"=>"Il Signore con la sua potenza t'ha benedetta, e per tuo mezzo ha annientato i nostri nemici. Benedetta sei tu, figlia, davanti al Dio Altissimo, più di tutte le donne che vivono sulla terra."
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    "titolo"=>"Ap 12,1",
                    "testo"=>"Nel cielo apparve un segno grandioso: una donna vestita di sole, con la luna sotto i suoi piedi e sul suo capo una corona di dodici stelle."
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    "titolo"=>"2Cor 5,1",
                    "testo"=>"Sappiamo che quando verrà disfatto questo corpo, nostra abitazione sulla terra, riceveremo una abitazione da Dio, una dimora eterna, non costruita da mani di uomo, nei cieli."
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    "titolo"=>"1Cor 15,22-23",
                    "testo"=>"Come tutti muoiono in Adamo, così tutti riceveranno la vita in Cristo. Ciascuno però nel suo ordine: prima Cristo, che è la primizia; poi, alla sua venuta, quelli che sono di Cristo."
                );
            }
        }

        elseif ($this->actual["evCode"]=='0914a') {
            //Esaltazione della Santa Croce
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    "titolo"=>"Eb 2,9b-10",
                    "testo"=>"Vediamo Gesù coronato di gloria e di onore a causa della morte che ha sofferto, perché per la grazia di Dio egli sperimentasse la morte a vantaggio di tutti. Ed era ben giusto che colui, per il quale e dal quale sono tutte le cose, volendo portare molti figli alla gloria, rendesse perfetto mediante la sofferenza il capo che li guida alla salvezza."
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    "titolo"=>"Eb 5,7-9",
                    "testo"=>"Cristo nei giorni della sua vita terrena offrì preghiere e suppliche con forti grida e lacrime a colui che poteva liberarlo da morte e fu esaudito per la sua pietà. Pur essendo Figlio, imparò l'obbedienza dalle cose che patì e, reso perfetto, divenne causa di salvezza eterna per tutti  coloro che gli obbediscono."
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    "titolo"=>"Ef 1,7-8",
                    "testo"=>"In Cristo abbiamo la redenzione mediante il suo sangue, la remissione dei peccati secondo la richezza della sua grazia. Egli l'ha abbondantemente riversata su di noi con ogni sapienza e intelligenza."
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    "titolo"=>"1Pt 1,18-19",
                    "testo"=>"Voi sapete che non a prezzo di cose corruttibili, come l'argento e l'oro, foste liberati dalla vostra vuota condotta ereditata dai vostri padri, ma con il sangue prezioso di Cristo, come di agnello senza difetti e senza macchia."
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    "titolo"=>"1Cor 1,23-24",
                    "testo"=>"Noi predichiamo Cristo crocifisso, scandalo per i Giudei, stoltezza per i pagani; ma per coloro che sono chiamati, sia Giudei che Greci, predichiamo Cristo potenza di Dio e sapienza di Dio."
                );
            }
        }

        elseif ($this->actual["evCode"]=='1101a') {
            //Tutti i santi
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    "titolo"=>"Eb 12,22-24",
                    "testo"=>"Voi vi siete accostati al monte di Sion e alla città del Dio vivente, alla Gerusalemme celeste e a miriadi di angeli, all'adunanza festosa e all'assemblea dei primogeniti iscrittinei cieli, al Dio giudice di tutti e agli spiriti dei giusti portati alla perfezione, al Mediatore della Nuova Alleanza e al sangue dell'aspersione dalla voce più eloquente di quello di Abele."
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
                    "titolo"=>"Is 65,18-19",
                    "testo"=>"Si godrà e si gioirà sempre di quello che sto per creare, e farò di Gerusalemme una gioia, del suo popolo un gaudio. Io esulterò di Gerusalemme, godrò del mio popolo. Non si udranno più in essa voci di pianto, grida di angoscia."
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    "titolo"=>"1Pt 1,15-16",
                    "testo"=>"Ad immagine del Santo che vi ha chiamati, diventate santi anche voi in tutta la vostra condotta; poiché sta scritto: Voi sarete santi, perché io sono santo."
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    "titolo"=>"Ap 21,10-11;22,3b-4",
                    "testo"=>"L'angelo mi trasportò in spirito su di un monte grande e alto, e mi mostrò la città santa, Gerusalemme, che scendeva dal cielo, da Dio, risplendere della gloria di Dio. Il suo splendore è simile a quello di una gemma preziozissima, come pietra di diaspro cristallino. Il trono di Dio e dell'Agnello sarà in mezzo a lei e i suoi servi lo adoreranno; vedranno la sua faccia e porteranno il suo nome sulla fronte."
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    "titolo"=>"2Cor 6,16b:7,1",
                    "testo"=>"Noi siamo il tempio del Dio vivente, come Dio stesso ha detto: Abiterò in mezzo a loro e con loro camminerò e sarò il loro Dio, ed essi saranno il mio popolo. In possesso dunque di queste promesse, carissimi, purifichiamoci da ogni macchia della carne e dello spirito, portando a compimento la nostra santificazione, nel timore di Dio."
                );
            }
        }

        elseif ($this->actual["evCode"]=='1208a') {
            //Immacolata concezione
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    "titolo"=>"Rm 8,29a.30",
                    "testo"=>"Quelli che Dio da sempre ha conosciuto li ha anche predestinati ad essere conformi all'immagine del Figlio suo. Quelli poi che ha predestinati li ha anche chiamati; quelli che ha chiamati li ha anche giustificati; quelli che ha giustificati li ha anche glorificati."
                );
            }
            elseif($this->actual['ora']=='lodi') {
                $this->info=array(
                    "titolo"=>"Pt 8,22-24a",
                    "testo"=>"Il Signore mi ha creato all'inizio della sua attività, prima di ogni sua opera, fin d'allora. Dall'eternità sono stata costituita, fin dal principio, dagli inizi della terra. Quando non esistevano gli abissi, io fui generata."
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    "titolo"=>"Ef 1,4",
                    "testo"=>"In Cristo, Dio ci ha scelti prima della creazione del mondo, per essere santi e immacolati al suo cospetto nella carità."
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    "titolo"=>"Ef 1,11-12a",
                    "testo"=>"In Cristo noi siamo stati predestinati secondo il piano di colui che tutto opera efficacemente conforme alla sua volontà, perché noi fossimo a lode della sua gloria."
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    "titolo"=>"Ef 5,25-27",
                    "testo"=>"Cristo ha amato la Chiesa e ha dato se stesso per lei, per renderla santa, al fine di farsi comparire davanti la sua Chiesa tutta gloriosa, senza macchia né ruga o alcunché di simile, ma santa e immacolata."
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    "titolo"=>"Rm 5,20b-21",
                    "testo"=>"Laddove è abbondato il peccato, ha sovrabbondato la grazia, perché come il peccato aveva regnato con la morte, così regni anche la grazia con la giustizia per la vita eterna, per mezzo di Gesù Cristo nostro Signore."
                );
            }
        }

        //#########################################################################################
        //PROPRIO DEI SANTI
        if ($this->actual['fesCode']!='') {

            foreach($this->actual['festa'] as $k=>$f) {
            
                if ($f['comune']=='dedica') {

                    if($this->actual['ora']=='ves1') {
                        $this->info=array(
                            "titolo"=>"Ef 2,19-22",
                            "testo"=>"Voi non siete più stranieri nè ospiti, ma siete concittadini dei santi e familiari di Dio, edificati sopra il findamento degli apostoli e dei profeti, e avendo come pietra angolare lo stesso Cristo Gesù. In lui ogni costruzione cresce ben ordinata per essere tempio santo nel Signore; in lui anche voi insieme con gli altri venite edificati per diventare dimora di Dio per mezzo dello Spirito."
                        );
                    }
                    elseif($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 56,7",
                            "testo"=>"Li condurrò sul mio monte santo e li colmerò di gioia nella mia casa di preghiera. I loro olocausti e i loro sacrifici saliranno graditi sul mio altare, perché il mio tempio si chiamerà casa di preghiera per tutti i popoli."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"1Cor 3,16-17",
                            "testo"=>"Non sapete che siete tempio di Dio e che lo Spirito di Dio abita in voi? Se uno distrugge il tempio di Dio, Dio distruggerà lui. Perché santo è il tempio di Dio, che siete voi."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"2Cor 6,16b",
                            "testo"=>"Noi siamo il tempio del Dio vivente, come Dio stesso ha detto: Abiterò in mezzo a loro e con loro camminerò e sarò il loro Dio, ed essi saranno il mio popolo."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Ger 7,2b.4-5a.7a",
                            "testo"=>"Ascoltate la parola del Signore, voi tutti che attraversate queste porte per prostrarvi al Signore. Non confidate nelle parole menzognere di coloro che dicono: Tempio del Signore, tempio del Signore, tempio del Signore è questo! Poiché se veramente emenderete la vostra condotta e le vostre azioni, io vi farò abitare in questo luogo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Ap 21,2-3.22.27",
                            "testo"=>"Vidi la città santa, la nuova Gerusalemme, scendere dal cielo, da Dio, pronta come una sposa adorna per il suo sposo. Udii allora una voce potente che usciva dal trono: Ecco la dimora di Dio con gli uomini! Egli dimorerà tra di loro ed essi saranno suo popolo ed egli sarà il « Dio-con-loro ». Non vidi alcun tempio in essa perché il Signore Dio, l'Onnipotente, e l'Agnello sono il suo tempio. Non entrerà in essa nulla d'impuro, né chi commette abominio o falsità, ma solo quelli che sono scritti nel libro della vita dell'Agnello."
                        );
                    }
                }

                elseif ($f['comune']=='BVM') {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 61,10",
                            "testo"=>"Io gioisco pienamente nel Signore, la mia anima esulta nel mio Dio, perché mi ha rivestito delle vesti di salvezza, mi ha avvolto con il manto della giustizia, come una sposa che si adorna gi gioielli."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Sof 3,14.15b",
                            "testo"=>"Gioisci, figlia di Dion, esulta, Israele, e rallegrati con tutto il cuore, figlia di Gerusalemme! Re d'Israele è il Signore in mezzo a te."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Zc 9,9a",
                            "testo"=>"Esulta grandemente figlia di Sion, giubila, figlia di Gerusalemme! Ecco, a te viene il tuo re. Egli è giusto e vittorioso."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Gdt 13,31",
                            "testo"=>"Benedetta tu dal tuo Dio, in tutte le tende di Giacobbe; perché in ogni popolo dove si udrà il tuo nome, sarà glorificato per te il Dio d'Israele."
                        );
                    }
                    elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Gal 4,4-5",
                            "testo"=>"Quando venne la pienezza del tempo, Dio mandò il suo Figlio, nato da donna, nato sotto la legge, per riscattare coloro che erano sotto la legge, perché ricevessimo l'adozione a figli."
                        );
                    }
                }

                if ($f['comune']=='apostoli') {

                    if($this->actual['ora']=='ves1') {
                        $this->info=array(
                            "titolo"=>"At 2,42-45",
                            "testo"=>"Tutti erano assidui nell'ascoltare l'insegnamento degli apostoli e nell'unione fraterna, nella frazione del pane e nelle preghiere. Un senso di timore era in tutti e prodigi e segni avvenivano per opera degli apostoli. Tutti coloro che erano diventati credenti stavano insieme e tenevano ogni cosa in comune; chi aveva proprietò e sostanze le vendeva e ne faceva parte a tutti, secondo il bisogno di ciascuno."
                        );
                    }
                    elseif($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Ef 2,19-22",
                            "testo"=>"Voi non siete più stranieri nè ospiti, ma siete concittadini dei santi e familiari di Dio, edificati sopra il findamento degli apostoli e dei profeti, e avendo come pietra angolare lo stesso Cristo Gesù. In lui ogni costruzione cresce ben ordinata per essere tempio santo nel Signore; in lui anche voi insieme con gli altri venite edificati per diventare dimora di Dio per mezzo dello Spirito."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"2Cor 5,19-20",
                            "testo"=>"È stato Dio a riconsiliare a sè il mondo in Cristo, non imputando agli uomini le loro colpe e affidando a noi la parola della riconciliazione. Noi fungiamo quindi da ambasciatori per Cristo, come se Dio esortasse per mezzo nostro. Vi supplichiamo in nome di Cristo: lasciaevi riconciliare con Dio."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"At 5,12a.14",
                            "testo"=>"Molti miracoli e prodigi avvenivano fra il popolo per opera degli apostoli. Intanto andava aumentando il numero degli uomini e delle donne che credevano nel Signore."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"At 5,41-42",
                            "testo"=>"Gli apostoli se ne andarono dal sinedrio lieti di essere stati oltraggiati per amore del nome di Gesù. E ogni giorno, nel tempio e a casa, non cessavano di insegnare e di portare il lieto annunzio che Gesù è il Cristo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Ef 4,11-13",
                            "testo"=>"È Cristo che ha stabilito alcuni come apostoli, altri come profeti, altri come evangelisti, altri come pastori e maestri, per rendere idonei i fratelli a compiere il ministero, al fine di edificare il corpo di Cristo, finché arriviamo tutti all'unità della fede e della conoscenza del Figlio di Dio, allo stato di uomo perfetto, nella misura che conviene alla piena maturità di Cristo."
                        );
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