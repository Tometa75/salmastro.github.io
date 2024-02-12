<?php
class Invito {

    protected $titolo="";
    protected $antifona=array();
    protected $testoBase=array();
    protected $testoRes=array();

    protected $inizio=array(
        array('ebd','','Signore, apri le mie labbra'),
        array('ris','','e la mia bocca proclami la tua lode.')
    );

    protected $gloria=array(
        array('','*','Gloria al Padre e al Figlio'),
        array('','2','e allo Spirito Santo.'),
        array('','*','Come era nel principio, e ora e sempre,'),
        array('','2','nei secoli dei secoli. Amen.')
    );    

    protected $actual;
    protected $head;
    protected $res;

    function __construct($caller) {

        $this->actual=$caller->actual;

        $this->head=new Saltesto();
        $this->res=new Saltesto();
        $this->res->setProp(1,'2','chg','2c');

        $this->head->addBlock($this->inizio);

        $this->init();

        //$this->build();

        //$this->build2();

    }

    function init() {

        switch ($this->actual['weekDay']) {

            case 0:
                $this->antifona="Esultate in Dio, intonate il canto: è il nostro giorno di festa.";
                $this->salmo("80");
            break;
            case 1:
                $this->antifona="Gloria al Signore nel suo tempio: egli siede re per sempre.";
                $this->salmo("28");
            break;
            case 2:
                $this->antifona="Ti lodino, o Dio, i popoli tutti, conoscano la tua salvezza.";
                $this->salmo("66");
            break;
            case 3:
                $this->antifona="Venite, contemplate le opere del Signore: ha fatto portenti sulla terra.";
                $this->salmo("45");
            break;
            case 4:
                $this->antifona="Aprite le porte al Signore: entri il re della gloria.";
                $this->salmo("23");
            break;
            case 5:
                $this->antifona="Quanto è grande il tuo nome, Signore, nei cieli e sulla terra!";
                $this->salmo("8");
            break;
            case 6:
                $this->antifona="Venite, acclamate al Signore, ascoltate oggi la sua voce.";
                $this->salmo("94");
            break;   
        }
        
    }

    //################################################################################
    function salmo($id) {

        switch ($id) {

            case "80":
                $this->titolo="Salmo 80 Solenne rinnovazione dell'Alleanza";
                $this->testoBase=array(
                    array(
                        array('','*',"Esultate in Dio, nostra forza,"),
                        array('','2',"acclamate al Dio di Giacobbe."),
                        array('','*',"Intonate il canto e suonate il timpano,"),
                        array('','2',"la cetra melodiosa con l'arpa."),
                        array('','*',"Suonate la tromba nel plenilunio,"),
                        array('','2',"nostro giorno di festa.")
                    ),
                    array(
                        array('','*',"Questa è una legge per Israele,"),
                        array('','2',"un decreto del Dio di Giacobbe."),
                        array('','*',"Lo ha dato come testimonianza a Giuseppe,"),
                        array('','2',"quando usciva dal paese d'Egitto."),
                        array('','+',"Un linguaggio mai inteso io sento:"),
                        array('','*',"« Ho liberato dal peso la sua spalla,"),
                        array('','2',"le sue mani hanno deposto la cesta."),
                        array('','+',"Hai gridato a me nell'angoscia e io ti ho liberato,"),
                        array('','*',"avvolto nella nube ti ho dato risposta,"),
                        array('','2',"ti ho messo alla prova alle acque di Meriba."),
                    ),
                    array(
                        array('','*',"Ascolta, popolo mio, ti voglio ammonire;"),
                        array('','2',"Israele, se tu mi ascoltassi!"),
                        array('','*',"Non ci sia in mezzo a te un altro dio"),
                        array('','2',"e non prostrarti a un dio straniero."),
                        array('','+',"Sono io il Signore tuo Dio,"),
                        array('','*',"che ti ho fatto uscire dal paese d'Egitto;"),
                        array('','2',"apri la tua bocca, la voglio riempire.")
                    ),
                    array(
                        array('','*',"Ma il mio popolo non ha ascoltato la mia voce,"),
                        array('','2',"Israele non mi ha obbedito."),
                        array('','*',"L'ho abbandonato alla durezza del suo cuore,"),
                        array('','2',"che seguisse il proprio consiglio.")
                    ),
                    array(
                        array('','*',"Se il mio popolo mi ascoltasse,"),
                        array('','2',"se Israele camminasse per le mie vie!"),
                        array('','*',"Subito piegherei i suoi nemici"),
                        array('','2',"e contro i suoi avversari porterei la mia mano."),
                        array('','*',"I nemici del Signore gli sarebbero sottomessi,"),
                        array('','2',"e la loro sorte sarebbe segnata per sempre;"),
                        array('','*',"li nutrirei con fiore di frumento,"),
                        array('','2',"li sazierei con miele di roccia ».")
                    )
                );
            break;

            case "28":
                $this->titolo="Salmo 28 Il Signore proclama solennemente la sua parola";
                $this->testoBase=array(
                    array(
                        array('','*',"Date al Signore, figli di Dio,"),
                        array('','2',"date al Signore gloria e potenza."),
                        array('','*',"Date al Signore la gloria del suo nome,"),
                        array('','2',"prostratevi sl Signore in santi ornamenti.")
                    ),
                    array(
                        array('','+',"Il Signore tuona sulle acque,"),
                        array('','*',"il Dio della gloria scatena il tuono,"),
                        array('','2',"il Signore, sull'immensità delle acque."),
                        array('','*',"Il Signore tuona con forza,"),
                        array('','2',"tuona il Signore con potenza.")
                    ),
                    array(
                        array('','*',"Il tuono del Signore schianta i cedri,"),
                        array('','2',"il Signore schianta i cedri del Libano."),
                        array('','*',"Fa balzare come un vitello il Libano"),
                        array('','2',"e il Sirion come un giovane bufalo.")
                    ),
                    array(
                        array('','+',"Il tuono saetta fiamme di fuoco,"),
                        array('','*',"il tuono scuote la steppa,"),
                        array('','2',"il Signore scuote il deserto di Kades."),
                        array('','+',"Il tuono fa partorire le cerve,"),
                        array('','*',"e spoglia le foreste."),
                        array('','2',"Nel suo tempio tutti dicono: « Gloria! »")
                    ),
                    array(
                        array('','*',"Il Signore è assiso sulla tempesta,"),
                        array('','2',"il Signore siede re per sempre."),
                        array('','*',"Il Signore darà forza al suo popolo,"),
                        array('','2',"benedirà il suo popolo con la pace.")
                    )
                );
            break;

            case "66":
                $this->titolo="Salmo 66 Tutti i popoli glorifichino il Signore";
                $this->testoBase=array(
                    array(
                        array('','*',"Dio abbia pietà di noi e ci benedica,"),
                        array('','2',"su di noi faccia splendere il suo volto;"),
                        array('','*',"perché si conosca sulla terra la sua via,"),
                        array('','2',"fra tutte le genti la sua salvezza.")
                    ),
                    array(
                        array('','*',"Ti lodino i popoli, Dio,"),
                        array('','2',"ti lodino i popoli tutti."),
                        array('','+',"Esultino le genti e si rallegrino,"),
                        array('','*',"perché giudichi i popoli con giustizia,"),
                        array('','2',"governi le nazioni sulla terra.")
                    ),
                    array(
                        array('','*',"Ti lodino i popoli, Dio,"),
                        array('','2',"ti lodino i popoli tutti."),
                        array('','*',"La terra ha dato il suo frutto."),
                        array('','2',"Ci benedica Dio, il nostro Dio,"),
                        array('','*',"ci benedica Dio"),
                        array('','2',"e lo temano tutti i confini della terra.")
                    )
                );
            break;

            case "45":
                $this->titolo="Salmo 45 Dio rifugio e forza del suo popolo";
                $this->testoBase=array(
                    array(
                        array('','*',"Dio è per noi rifugio e forza,"),
                        array('','2',"aiuto sempre vicino nelle angosce."),
                        array('','*',"Perciò non temiamo se trema la terra,"),
                        array('','2',"se crollano i monti nel fondo del mare."),
                        array('','*',"Fremano, si gonfino le sue acque,"),
                        array('','2',"tremino i monti per i suoi flutti."),
                        array('','*',"Il Signore degli eserciti è con noi,"),
                        array('','2',"nostro rifugio è il Dio di Giacobbe.")
                    ),
                    array(
                        array('','*',"Un fiume e i suoi ruscelli rallegrano la città di Dio,"),
                        array('','2',"la santa dimora dell'Altissimo."),
                        array('','*',"Dio sta in essa: non potrà vacillare;"),
                        array('','2',"la soccorrerà Dio, prima del mattino."),
                        array('','*',"Fremettero le genti, i regni si scossero;"),
                        array('','2',"egli tuonò, si sgretolò la terra."),
                        array('','*',"Il Signore degli eserciti è con noi,"),
                        array('','2',"nostro rifugio è il Dio di Giacobbe."),
                    ),
                    array(
                        array('','*',"Venite, vedete le opere del Signore,"),
                        array('','2',"Egli ha fatto portenti sulla terra."),
                        array('','+',"Farà cessare le guerre fino ai confini della terra,"),
                        array('','*',"romperà gli archi e spezzerà le lance,"),
                        array('','2',"brucerà con il fuoco gli scudi."),
                        array('','*',"Fermatevi e sappiate che io sono Dio,"),
                        array('','2',"eccelso fra le genti, eccelso sulla terra."),
                        array('','*',"Il Signore degli eserciti è con noi,"),
                        array('','2',"nostro rifugio è il Dio di Giacobbe.")
                    )
                );
            break;

            case "23":
                $this->titolo="Salmo 23 Il Signore entra nel suo tempio";
                $this->testoBase=array(
                    array(
                        array('','*',"Del Signore è la terra e quanto contiene,"),
                        array('','2',"l'universo e i suoi abitanti."),
                        array('','*',"È lui che l'ha fondata sui mari,"),
                        array('','2',"e sui fiumi l'ha stabilita.")
                    ),
                    array(
                        array('','*',"Chi salirà il monte del Signore,"),
                        array('','2',"chi starà nel suo luogo santo?"),
                        array('','+',"Chi ha mani innocenti e cuore puro,"),
                        array('','*',"chi non pronunzia menzogna,"),
                        array('','2',"chi non giura a danno del suo prossimo.")
                    ),
                    array(
                        array('','*',"Egli otterrà benedizione dal Signore,"),
                        array('','2',"giustizia da Dio sua salvezza."),
                        array('','*',"Ecco la generazione che lo cerca,"),
                        array('','2',"che cerca il tuo volto, Dio di Giacobbe.")
                    ),
                    array(
                        array('','+',"Sollevate, porte, i vostri frontali,"),
                        array('','*',"alzatevi, porte antiche,"),
                        array('','2',"ed entri il re della gloria."),
                        array('','+',"Chi è questo re della gloria?"),
                        array('','*',"Il Signore forte e potente,"),
                        array('','2',"il Signore potente in battaglia.")
                    ),
                    array(
                        array('','+',"Sollevate, porte, i vostri frontali,"),
                        array('','*',"alzatevi, porte antiche,"),
                        array('','2',"ed entri il re della gloria."),
                        array('','*',"Chi è questo re della gloria?"),
                        array('','2',"Il Signore degli eserciti è il re della gloria.")
                    )
                );
            break;

            case "8":
                $this->titolo="Salmo 8 Grandezza del Signore e dignità dell'uomo";
                $this->testoBase=array(
                    array(
                        array('','+',"O Signore, nostro Dio,"),
                        array('','*',"quanto è grande il tuo nome su tutta la terra,"),
                        array('','2',"sopra i cieli si innalza la tua magnificenza."),
                        array('','+',"Con la bocca dei bimbi e dei lattanti"),
                        array('','*',"affermi la tua potenza contro i tuoi avversari,"),
                        array('','2',"per ridurre al silenzio nemici e ribelli.")
                    ),
                    array(
                        array('','*',"Se guardo il tuo cielo, opera delle tue dita,"),
                        array('','2',"la luna e le stelle che tu hai fissate,"),
                        array('','*',"che cosa è l'uomo perché te ne ricordi"),
                        array('','2',"e il figlio dell'uomo perché te ne curi?")
                    ),
                    array(
                        array('','*',"Eppure l'hai fatto poco meno degli angeli,"),
                        array('','2',"di gloria e di onore lo hai coronato:"),
                        array('','*',"gli hai dato potere sulle opere delle tue mani,"),
                        array('','2',"tutto hai posto sotto i sui piedi;")
                    ),
                    array(
                        array('','*',"tutti i greggi e gli armenti,"),
                        array('','2',"tutte le bestie della campagna;"),
                        array('','*',"gli uccelli del cielo e i pesci del mare,"),
                        array('','2',"che percorrono le vie del mare."),
                        array('','*',"O Signore, nostro Dio,"),
                        array('','2',"quanto è grande il tuo nome su tutta la terra!")
                    )
                );
            break;

            case "94":
                $this->titolo="Salmo 94 Invito a lodare Dio";
                $this->testoBase=array(
                    array(
                        array('','*',"Venite, applaudiamo al Signore,"),
                        array('','2',"acclamiamo alla roccia della nostra salvezza."),
                        array('','*',"Accostiamoci a lui per rendergli grazie,"),
                        array('','2',"a lui acclamiamo con canti di gioia.")
                    ),
                    array(
                        array('','*',"Perché grande Dio è il Signore,"),
                        array('','2',"grande re sopra tutti gli dei."),
                        array('','*',"Nella sua mano sono gli abissi della terra,"),
                        array('','2',"sono sue le vette dei monti."),
                        array('','*',"Suo è il mare, egli l'ha fatto,"),
                        array('','2',"le sue mani hanno plasmato la terra.")
                    ),
                    array(
                        array('','*',"Venite, prostràti adoriamo,"),
                        array('','2',"in ginocchio davanti al Signore che ci ha creati."),
                        array('','*',"Egli è il nostro Dio, e noi il popolo del suo pascolo,"),
                        array('','2',"il gregge che egli conduce.")
                    ),
                    array(
                        array('','+',"Ascoltate oggi la sua voce:"),
                        array('','*',"« Non indurite il cuore,"),
                        array('','2',"come a Meriba, come nel giorno di Massa nel deserto,"),
                        array('','*',"dove mi tentarono i vostri padri:"),
                        array('','2',"mi misero alla prova pur avendo visto le mie opere.")
                    ),
                    array(
                        array('','+',"Per quarant'anni mi disgustai di quella generazione"),
                        array('','*',"e dissi: Sono un popolo dal cuore traviato,"),
                        array('','2',"non conoscono le mie vie;"),
                        array('','*',"perciò ho giurato nel mio sdegno:"),
                        array('','2',"Non entreranno nel luogo del mio riposo ».")
                    )
                );
            break;
        }
    }
    //################################################################################

    function build() {

        if ($this->actual['tempo']=='A') {

            
            

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

        //////////////////////////////////////////////////////////////////////////////////////

        if ($this->actual['evCode']=='0202a') {

            if ($this->actual['ora']=="ves1") {
                $this->antifona=array(
                    "Il vecchio",
                    "portava il bambino, e il bambino sosteneva il vecchio. Maria sempre vergine adorava il suo Dio, il figlio da lei generato."
                );
            }
            elseif ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Portarono",
                    "Gesù nel tempio: Simeone lo prese tra le braccia e benedisse Dio."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "Oggi",
                    "la Vergine Maria viene al tempio per offrire il figlio Gesù; oggi Simeone, pieno di Spirito Santo, accoglie Cristo e benedice Dio."
                );
            }
        }
        elseif ($this->actual['evCode']=='0210a') {

            if ($this->actual['ora']=="ves1") {
                $this->antifona=array(
                    "Esultino tutti i fedeli",
                    "per la gloria di santa Scolastica; gioiscano le schiere delle vergini nella festa di colei che, versando le sue lacrime, fu esaudita dal Signore: molto più ottenne perché più forte era il suo amore."
                );
            }
            elseif ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Grande",
                    "era la santità di Scolastica: la potenza delle sue lacrime turbò la serenità del cielo e fece scaturire torrenti di pioggia."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "Oggi",
                    "la santa vergine Scolastica si è levata verso il cielo in un festoso volo come di colomba. Oggi, insieme al fratello, gode in perpetuo la gioia della vita celeste."
                );
            }
        }
        elseif ($this->actual['evCode']=='0319a') {

            if ($this->actual['tempo']=='P') {
                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Destatosi dal sonno,",
                        "Gesù fece come gli aveva ordinato l'angelo del Signore, e prese con sè Maria, sua sposa, alleluia."
                    );
                }
                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Quando Gesù",
                        "a trent'anni cominciò il suo ministero, era conosciuto come il figlio di Giuseppe, alleluia."
                    );
                }
                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Servo",
                        "fedele e saggio: il Signore gli ha affidato la sua famiglia, alleluia."
                    );
                }
            }
            else {
                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Destatosi dal sonno,",
                        "Gesù fece come gli aveva ordinato l'angelo del Signore, e prese con sè Maria, sua sposa."
                    );
                }
                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Quando Gesù",
                        "a trent'anni cominciò il suo ministero, era conosciuto come il figlio di Giuseppe."
                    );
                }
                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Servo",
                        "fedele e saggio: il Signore gli ha affidato la sua famiglia."
                    );
                }
            }
        }
        elseif ($this->actual['evCode']=='0321a') {

            if ($this->actual['tempo']=='P') {
                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Per la gloria",
                        "del grande padre Benedetto esulti il popolo cristiano, gioiscano le schiere dei monaci celebrandone la festa in terra: della sua presenza si rallegrano i santi in cielo, alleluia."
                    );
                }
                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "O santo patriarca Benedetto,",
                        "padre e guida di monaci, intercedi per la salvezza nostra e di tutto il mondo, alleluia."
                    );
                }
                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Oggi,",
                        "sotto lo sguardo dei discepoli, Benedetto è asceso al cielo verso oriente; oggi, levate le mani nella preghiera, è spirato; nella gloria di Dio, alleluia."
                    );
                }
            }
            else {
                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Per la gloria",
                        "del grande padre Benedetto esulti il popolo cristiano, gioiscano le schiere dei monaci celebrandone la festa in terra: della sua presenza si rallegrano i santi in cielo."
                    );
                }
                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "O santo patriarca Benedetto,",
                        "padre e guida di monaci, intercedi per la salvezza nostra e di tutto il mondo."
                    );
                }
                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "Oggi,",
                        "sotto lo sguardo dei discepoli, Benedetto è asceso al cielo verso oriente; oggi, levate le mani nella preghiera, è spirato; nella gloria di Dio."
                    );
                }
            }
        }
        elseif ($this->actual['evCode']=='0325a') {

            if ($this->actual['tempo']=='P') {
                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Lo Spirito Santo",
                        "scenderà su di te, Maria: su di te stenderà la sua ombra la potenza dell'Altissimo, alleluia."
                    );
                }
                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Per il grande amore",
                        "con il quale ci ha amati, Dio mandò il suo Figlio in una carne simile a quella del peccato, alleluia."
                    );
                }
                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "L'angelo Gabriele",
                        "disse a Maria: Ave piena di grazia, il Signore è con te; tu sei benedetta fra le donne, alleluia."
                    );
                }
            }
            else {
                if ($this->actual['ora']=="ves1") {
                    $this->antifona=array(
                        "Lo Spirito Santo",
                        "scenderà su di te, Maria: su di te stenderà la sua ombra la potenza dell'Altissimo."
                    );
                }
                elseif ($this->actual['ora']=="lodi") {
                    $this->antifona=array(
                        "Per il grande amore",
                        "con il quale ci ha amati, Dio mandò il suo Figlio in una carne simile a quella del peccato."
                    );
                }
                elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                    $this->antifona=array(
                        "L'angelo Gabriele",
                        "disse a Maria: Ave piena di grazia, il Signore è con te; tu sei benedetta fra le donne."
                    );
                }
            }
        }
        elseif ($this->actual['evCode']=='0624a') {

            if ($this->actual['ora']=="ves1") {
                $this->antifona=array(
                    "Nel tempio del Signore,",
                    "a destra dell'altare dell'indenso, l'angelo Gabriele apparve a Zaccaria."
                );
            }
            elseif ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "A Zaccaria",
                    "tornò la parola, e profetò dicendo: Benedetto il Dio di Israele."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "Questo bambino",
                    "è più che un profeta; di lui il Salvatore ha detto: Tra i nati di donna non è sorto uno più grande di Giovanni Battista."
                );
            }
        }
        elseif ($this->actual['evCode']=='0629a') {

            if ($this->actual['ora']=="ves1") {
                $this->antifona=array(
                    "Gloriosi",
                    "apostoli di Cristo! Uniti nella vita, la morte non li ha separati."
                );
            }
            elseif ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Pietro,",
                    "il primo degli apostoli, e Paolo, il maestro delle genti, ci insegnano, Signore, la tua legge."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "Oggi",
                    "Simon Pietro è salito sulla croce, alleluia; oggi colui che tiene le chiavi del regno è andato nella gioia incontro a Cristo. Oggi l'apostolo Paolo, luce delle genti, ha piegato il capo per testimoniare il nome di Cristo, alleluia."
                );
            }
        }
        elseif ($this->actual['evCode']=='0711a') {

            if ($this->actual['ora']=="ves1") {
                $this->antifona=array(
                    "Per la gloria",
                    "del grande padre Benedetto esulti il popolo cristiano, gioiscano le schiere dei monaci celebrandone la festa in terra: della sua presenza si rallegrano i santi in cielo."
                );
            }
            elseif ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "O santo",
                    "patriarca Benedetto, padre e guida di monaci, intercedi per la salvezza nostra e di tutto il mondo."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "O beato padre Benedetto,",
                    "maestro, guida e norma di vita celeste, ora esulti con Cristo nella gloria: pastore santo, proteggi i tuoi figli, rafforzali con la tua peghiera, e dietro a te conducili al cielo per una via luminosa."
                );
            }
        }
        elseif ($this->actual['evCode']=='0806a') {

            if ($this->actual['ora']=="ves1") {
                $this->antifona=array(
                    "Cristo Gesù,",
                    "splendore del Padre e impronta della sua sostanza, che sostiene l'universo con la sua parola e libera dal peccato, oggi sul monte è apparso glorioso."
                );
            }
            elseif ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Risuona",
                    "dal cielo una voce: Questo è il mio Figlo prediletto, in lui mi sono compiaciuto. Ascoltatelo! Alleluia."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "I discepoli,",
                    "udita la voce, caddero a terra, presi da grande timore. Gesù li toccò e disse: Alzatevi, non abbiate paura, alleluia."
                );
            }
        }
        elseif ($this->actual['evCode']=='0815a') {

            if ($this->actual['ora']=="ves1") {
                $this->antifona=array(
                    "Beata,",
                    "o Maria, che hai creduto al Signore: si è compiuta in te la sua parola: intercedi per noi."
                );
            }
            elseif ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Chi è costei,",
                    "che sorge come l'aurora, bella come la luna, fulgida come il sole?"
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "Oggi",
                    "Maria è salita nei cieli: rallegratevi! Con Cristo regna per sempre."
                );
            }
        }
        elseif ($this->actual['evCode']=='0914a') {

            if ($this->actual['ora']=="ves1") {
                $this->antifona=array(
                    "O croce",
                    "che brilli più delle stelle, celebre, amabile. santa più di ogni coda al mondo; tu sola fosti degna di portare il dolce peso del nostro riscatto: salva i tuoi figli, oggi riuniti nella tua lode."
                );
            }
            elseif ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Adoriamo",
                    "la tua croce, Signore; acclamiamo la tua rsurrezione: da questo albero di vita la gioia è venuta nel mondo."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "O croce benedetta!",
                    "Tu sola hai portato il Signore, il Re dei cieli, alleluia."
                );
            }
        }
        elseif ($this->actual['evCode']=='1101a') {

            if ($this->actual['ora']=="ves1") {
                $this->antifona=array(
                    "Regno glorioso,",
                    "dove i santi godono con Cristo e in vesti bianche seguono l'Agnello."
                );
            }
            elseif ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Ti acclama",
                    "il coro degli apostoli e la candida schiera dei martiri, le voci dei profeti si uniscono nella tua lode; la Chiesa dei santi proclama la tua gloria: Santa Trinità, unic Dio!"
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "Angeli,",
                    "arcangeli, troni e dominazioni, principati e potestà e virtù, cherubini e serafini, patriarchi e profeti, santi dottori della legge, apostoli tutti, martiri di Cristo, vergini del Signore, anacoreti e santi tutti, intercedete per noi."
                );
            }
        }
        elseif ($this->actual['evCode']=='1208a') {

            if ($this->actual['ora']=="ves1") {
                $this->antifona=array(
                    "Tutti i secoli",
                    "mi diranno beata: grandi cose ha fatto in me l'Onnipotente, alleluia."
                );
            }
            elseif ($this->actual['ora']=="lodi") {
                $this->antifona=array(
                    "Disse il Signore",
                    "al serpente: Porrò inimicizia fra te e la donna, fra la tua stirpe e la sua: essa ti schiaccerà la testa, alleluia."
                );
            }
            elseif ($this->actual['ora']=="ves" || $this->actual['ora']=="ves2") {
                $this->antifona=array(
                    "Oggi",
                    "è spuntato un germoglio dalla radice di Iesse; oggi Maria è stata concepita senza macchia di peccato; oggi la donna ha schiacciato la testa dell'antico serpente, alleluia."
                );
            }
        }
    }

    function build2() {

        if ($this->actual['fesCode']!='') {

            foreach($this->actual['festa'] as $k=>$f) {

                if ($k!=$this->actual['fesCode']) continue;
            
                if ($f['comune']=='dedica') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Questo",
                                "è il luogo santo che il Signore ha scelto a sua dimora: qui si invoca il suo nome, qui Dio è presente tra noi, alleluia."
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

                elseif ($f['comune']=='apostoli') {

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

                elseif ($f['comune']=='martiri') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Per i tuoi santi,",
                                "o Dio, splende una luce perenne e una vita senza fine, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "I giusti",
                                "si leveranno con grande fierezza di fronte a quanti li tormentarono, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "I tuoi santi,",
                                "Signore, fioriranno come gigli, alleluia: saranno davanti a te come profumo di balsamo, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Vostro",
                                "è il regno dei cieli: avete scrificato la vita per Cristo; lavati nel sangue dell'Agnello, ricevete ora la gloria eterna."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Anche i vostri capelli",
                                "sono contati, non abbiate timore: voi valete più di molti passeri."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Gioia nel cielo",
                                "per gli amici di Dio: hanno seguito le orme di Cristo, hanno versato il sangue per suo amore, con Cristo regneranno senza fine."
                            );
                        }
                    }
                }

                elseif ($f['comune']=='martire') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Per i tuoi santi,",
                                "o Dio, splende una luce perenne e una vita senza fine, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "I giusti",
                                "si leveranno con grande fierezza di fronte a quanti li tormentarono, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Se nella terra",
                                "il seme non muore, rimane solo; se muore, porta molto frutto, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "A te",
                                "il frutto delle tue fatiche, a te la lode della nostra assemblea."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Chi odia",
                                "la sua vita in questo mondo, la conserva per la vita eterna."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Chi vuol venire",
                                "dietro a me, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua."
                            );
                        }
                    }
                }

                elseif ($f['comune']=='pastori') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Sacerdote di Dio,",
                                "esempio di virtù, pastoe buono: intercedi per noi presso il Signore, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Bene,",
                                "servo buono e fedele: sei stato fedele nel poco, ti darò potere su molto, dice il Signore, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Il Signore",
                                "lo ha amato e lo ha colmato di onore: lo ha rivestito di gloria nel regno dei cieli, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Sacerdote di Dio,",
                                "esempio di virtù, pastoe buono: intercedi per noi presso il Signore."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Bene,",
                                "servo buono e fedele: sei stato fedele nel poco, ti darò potere su molto, dice il Signore."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Il Signore",
                                "lo ha amato e lo ha colmato di onore: lo ha rivestito di gloria nel regno dei cieli."
                            );
                        }
                    }
                }

                elseif ($f['comune']=='dottori') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "I popoli",
                                "narrano la sapienza dei santi, e la Chiesa ne proclama le lodi, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "I saggi",
                                "splenderanno come il firmamento, i maestri di sapienza saranno come stelle nel cielo, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Ti ringrazio,",
                                "o Padre, Signore del cielo e della terra: tu hai rivelato ai piccoli il mistero del regno dei cieli, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "I popoli",
                                "narrano la sapienza dei santi, e la Chiesa ne proclama le lodi."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "I saggi",
                                "splenderanno come il firmamento, i maestri di sapienza saranno come stelle nel cielo."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Ti ringrazio,",
                                "o Padre, Signore del cielo e della terra: tu hai rivelato ai piccoli il mistero del regno dei cieli."
                            );
                        }
                    }
                }

                elseif ($f['comune']=='monaci') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Questi",
                                "sono i santi che il Signore ha prediletto, ha dato loro una gloria eterna: della loro dottrina risplende la Chiesa, come la luna splende per il sole, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Voi",
                                "avete abbandonato ogni cosa per seguirmi: avrete cento volte tanto e la via eterna, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Beati voi,",
                                "santi di Dio! Siete divenuti cittadini del cielo: voi contemplate la gloria del Signore, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Questi",
                                "sono i santi che il Signore ha prediletto, ha dato loro una gloria eterna: della loro dottrina risplende la Chiesa, come la luna splende per il sole."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Voi",
                                "avete abbandonato ogni cosa per seguirmi: avrete cento volte tanto e la via eterna."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Beati voi,",
                                "santi di Dio! Siete divenuti cittadini del cielo: voi contemplate la gloria del Signore."
                            );
                        }
                    }
                }

                elseif ($f['comune']=='vergini') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Vieni,",
                                "sposa di Cristo, ricevi la corona che il Signore ti ha preparato, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Ti ho tanto desiderato,",
                                "ora contemplo il tuo volto; ti ho tanto cercato, ora sei mio; con tutto il cuore ti ho amato in terra e ora sono tua per sempre, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Vieni,",
                                "sposa di Cristo, ricevi la corona che il Signore ti ha preparato, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Vieni,",
                                "sposa di Cristo, ricevi la corona che il Signore ti ha preparato."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Ti ho tanto desiderato,",
                                "ora contemplo il tuo volto; ti ho tanto cercato, ora sei mio; con tutto il cuore ti ho amato in terra e ora sono tua per sempre."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Vieni,",
                                "sposa di Cristo, ricevi la corona che il Signore ti ha preparato."
                            );
                        }
                    }
                }

                elseif ($f['comune']=='santi' || $f['comune']=='religiosi') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Chi vuol venire",
                                "dietro a me, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Il Signore",
                                "lo ha santificato nella fedeltà e nella mansuetudine e gli ha manifestato la sua gloria, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Chi segue me",
                                "non cammina nelle tenebre, ma avrà la luce della vita, dice il Signore, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "Chi vuol venire",
                                "dietro a me, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Il Signore",
                                "lo ha santificato nella fedeltà e nella mansuetudine e gli ha manifestato la sua gloria."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Chi segue me",
                                "non cammina nelle tenebre, ma avrà la luce della vita, dice il Signore."
                            );
                        }
                    }
                }

                elseif ($f['comune']=='sante' || $f['comune']=='religiose') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "A te",
                                "il frutto delle tue fatiche, a te la lode della nostra assemblea, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Il regno dei cieli",
                                "è simile a un mercante in cerca di perle preziose; trovata una perla di grande valore, vende tutti i suoi averi e la compra, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Apre",
                                "la sua mano al misero, la stende verso il povero, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->antifona=array(
                                "A te",
                                "il frutto delle tue fatiche, a te la lode della nostra assemblea."
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Il regno dei cieli",
                                "è simile a un mercante in cerca di perle preziose; trovata una perla di grande valore, vende tutti i suoi averi e la compra."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Apre",
                                "la sua mano al misero, la stende verso il povero."
                            );
                        }
                    }
                }

                elseif ($f['comune']=='DEF') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Cristo risorto",
                                "ha illuminato il suo popolo, redento dal suo sangue, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Colui che fu crocifisso",
                                "è risorto dai morti; egli ci ha liberato, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Io sono",
                                "la risurrezine e la vita: chi crede in me anche se muore, vivrà; e chiunque vive e crede in me non morrà in eterno."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Quelli",
                                "che il Pade mi dà, verranno a me; e chi viene a me non lo respingerò."
                            );
                        }
                    }
                }

                ////////////////////////////////////////////////////////////////////////

                if ($k=='0102a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "I saggi",
                            "splenderanno come il firmamento: i maestri di sapienza saranno come stelle nel cielo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Io stesso,",
                            "il Signore, vi condurrò in Sion, e vi darò pastori secondo il mio cuore: essi vi guideranno con saggezza e intelligenza."
                        );
                    }
                }
                elseif ($k=='0115a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "O uomini santi,",
                            "che disprezzando il mondo avete portato il giogo della santa Regola fin dagli anni giovanili: ora godete nel regno di Cristo, perché avete partecipato alla sua passione, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Voi",
                            "avete abbandonato ogni cosa per seguirmi: avrete cento volte tanto e la vita eterna."
                        );
                    }
                }
                elseif ($k=='0117a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Non vi preoccupate,",
                            "dicendo: Che cosa mangeremo? Che cosa berremo? Il Padre vostro celeste sa di che cosa avete bisogno, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Chi vuole",
                            "essere ricco cerchi le ricchezze più vere."
                        );
                    }
                }
                elseif ($k=='0121a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Ti ho tanto desiderato,",
                            "ora contemplo il tuo volto; ti ho tanto cercato, ora sei mio; con tutto il cuore ti ho amato in terra e ora sono tua per sempre, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Le mani al cielo,",
                            "Agnese pregava: Io vengo a te, accoglimi Signore onnipotente; te solo ho amato e cercato."
                        );
                    }
                }
                elseif ($k=='0125a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Anania,",
                            "va' a cercare Saulo: ecco sta pregando. Io l'ho scelto perché annunzi il mio nome a tutti i popoli."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Paolo,",
                            "apostolo del Vangelo e maestro dei popoli, prega per noi Dio che ti ha scelto."
                        );
                    }
                }
                elseif ($k=='0126a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Voi",
                            "avete abbandonato tutto per seguirmi: avrete cento volte tanto e la vita eterna."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Quanto è bello",
                            "e soave che i fratelli vivano insieme!"
                        );
                    }
                }
                elseif ($k=='0127a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Hanno servito",
                            "il Signore per tutta la vita, in santità e giustizia: per questo il Signore li ha rivestiti della stola di gloria."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Viviamo",
                            "con giustizia e con fede, aspettando la beata speranza e la venuta del Signore."
                        );
                    }
                }
                elseif ($k=='0128a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "La sapienza",
                            "nelle piazze fa udire la sua voce: Se qualcuno ama la sapienza, venga a me e la troverà; beato se saprà custodirla."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Ogni sapienza",
                            "viene dal Signore ed è con lui da sempre e per sempre."
                        );
                    }
                }
                elseif ($k=='0203a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Il santo vescovo Ansgario",
                            "portò la luce di Cristo ai popoli scandinavi, ed essi contemplarono l'aurora del sole di giustizia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Come sono belli",
                            "sui monti i piedi del messaggero di lieti annunzi che annunzia la pace, messaggero di bene che dice a Sion: Regna il tuo Dio!"
                        );
                    }
                }
                elseif ($k=='0205a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Agata",
                            "entrava gioiosa nel carcere come a una festa di nozze, chiedendo a Dio di superare la prova."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Signore Gesù Cristo,",
                            "maestro buono, con il tuo aiuto ho superato i tormenti: fa' che giunga alla tua gloria senza fine."
                        );
                    }
                }
                elseif ($k=='0208a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "I loro angeli",
                            "vedono sempre il volto del Padre mio che è nei cieli."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Lasciate,",
                            "che i piccoli vengano a me: a loro appartiene il regno di Dio."
                        );
                    }
                }
                elseif ($k=='0211b') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Aurora",
                            "splendente di salvezza, Vergine Maria: da te è nato il Sole di giustizia che dall'alto ci ha visitato."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Apparve nel cielo",
                            "una donna vestita di sole, con la luna sotto i suoi piedi e sul capo una corona di dodici stelle."
                        );
                    }
                }
                elseif ($k=='0214a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "In santità e giustizia",
                            "servirono il Signore per tutti i loro giorni."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Santi amici di Dio,",
                            "gloria a voi, che avete annunziato il Vangelo di verità."
                        );
                    }
                }
                elseif ($k=='0217a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Quanto è bello",
                            "e soave che i fratelli vivano insieme!"
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Dove i fratelli",
                            "si riuniscono a lodare il Signore, scende come rugiada la sua benedizione."
                        );
                    }
                }
                elseif ($k=='0221a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "I saggi",
                            "splenderanno come il firmamento: i maestri di sapienza saranno come stelle nel cielo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Maestro della fede",
                            "e luce della Chiesa, san Pier Damiani, ha scrutato con amore il mistero di Dio: prega per noi Cristo Signore."
                        );
                    }
                }
                elseif ($k=='0222a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Tutto ciò",
                            "che avrai legato sulla terra sarà legato anche nei cieli, e tutto ciò che avrai sciolto sulla terra sarà sciolto anche nei cieli, dice il Signore a Simon Pietro."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Tu sei",
                            "pastore del gregge di Cristo, e primo degli apostoli: a te sono affidate le chiavi del regno."
                        );
                    }
                }
                elseif ($k=='0223a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Da ottantasei anni",
                            "io servo Cristo, e non mi ha fatto alcun torto: come posso rinnegare il mio re, il mio salvatore?."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Ti benedico,",
                            "Signore onnipotente: mi concedi di bere al calice di Cristo, perché sia accolto fra i tuoi martiri."
                        );
                    }
                }
                elseif ($k=='0304a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Bene,",
                            "servo buono e fedele: sei stato fedele nel poco, ti darò potere su molto, entra nella gloria del tuo Signore."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Disprezzando il mondo",
                            "e le cose terrene, l'uomo giusto, con la parola e con le opere, ha accumulato tesori per il cielo."
                        );
                    }
                }
                elseif ($k=='0307a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Il giorno della vittoria",
                            "spuntò radioso: dal carcere le martiri passarono all'anfiteatro come fosse già il cielo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "State saldi",
                            "nella fede, amatevi gli uni gli altri, e non lasciatevi turbare dai nostri patimenti."
                        );
                    }
                }
                elseif ($k=='0309a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Chi fa la volontà",
                            "del Padre mio, è per me fratello, sorella e madre, dice il Signore."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Avete abbandonato",
                            "ogni cosa per seguirmi: avrete cento volte tanto, e la vita eterna."
                        );
                    }
                }
                elseif ($k=='0317a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Andate,",
                            "evangelizzate i popoli, battezzate nel nome del Padre e del Figlio e dello Spirito Santo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Molti",
                            "verranno da oriente e da occidente, e siederanno con Abramo vostro padre alla tavola del regno."
                        );
                    }
                }
                elseif ($k=='0318a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "I saggi",
                            "splenderanno come il firmamento, i maestri di sapienza saranno come stelle nel cielo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Maestro della fede",
                            "e luce della Chiesa, san Cirillo, ha scrutato con amore il mistero di Dio: prega per noi Cristo Signore."
                        );
                    }
                }
                elseif ($k=='0323a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Sacerdote di Dio,",
                                "esempio di virtù, pastore buono: intercedi per noi presso il Signore, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Come sono belli",
                                "sui monti i piedi del messaggero di lieti annunzi che annunzia la pace, messaggero di bene che dicde a Sion: Regna il tuo Dio! Alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Sacerdote di Dio,",
                                "esempio di virtù, pastore buono: intercedi per noi presso il Signore."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Come sono belli",
                                "sui monti i piedi del messaggero di lieti annunzi che annunzia la pace, messaggero di bene che dicde a Sion: Regna il tuo Dio!"
                            );
                        }
                    }
                }
                elseif ($k=='0402a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Ecco,",
                                "sto alla porta e busso: se uno ascolta la mia voce e mi apre, entrerò, e cenerò con lui, ed egli con me, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Ha venduto",
                                "tutti i suoi beni, stimandoli un nulla, pur di ottenere l'amore di Dio, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Ecco,",
                                "sto alla porta e busso: se uno ascolta la mia voce e mi apre, entrerò, e cenerò con lui, ed egli con me."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Ha venduto",
                                "tutti i suoi beni, stimandoli un nulla, pur di ottenere l'amore di Dio."
                            );
                        }
                    }
                }
                elseif ($k=='0404a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "I saggi",
                                "splenderanno come il firmamento: i maestri di sapienza saranno come stelle nel cielo, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Maestro della fede",
                                "e luce della Chiesa, sant'Isidoro, ha scrutato con amore il mistero di Dio: prega per noi Cristo Signore, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "I saggi",
                                "splenderanno come il firmamento: i maestri di sapienza saranno come stelle nel cielo."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Maestro della fede",
                                "e luce della Chiesa, sant'Isidoro, ha scrutato con amore il mistero di Dio: prega per noi Cristo Signore."
                            );
                        }
                    }
                }
                elseif ($k=='0405a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Non siete voi",
                                "a parlare, ma parla in voi lo Spirito del Padre, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Mi sono fatto",
                                "tutto a tutti, perché tutti siano salvi, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Non siete voi",
                                "a parlare, ma parla in voi lo Spirito del Padre."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Mi sono fatto",
                                "tutto a tutti, perché tutti siano salvi."
                            );
                        }
                    }
                }
                elseif ($k=='0407a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Solo chi ama,",
                                "educa e forma, come fa un padre con i propri figli, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Lasciate",
                                "che i piccoli vengano a me: a loro appartiene il regno di Dio, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Solo chi ama,",
                                "educa e forma, come fa un padre con i propri figli."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Lasciate",
                                "che i piccoli vengano a me: a loro appartiene il regno di Dio."
                            );
                        }
                    }
                }
                elseif ($k=='0411a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Chi odia",
                                "la sua vita in questo mondo, la conserva per la vita eterna, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Nel regno dei cieli",
                                "è la dimora dei santi, nei secoli eterni il loro riposo, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Chi odia",
                                "la sua vita in questo mondo, la conserva per la vita eterna."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Nel regno dei cieli",
                                "è la dimora dei santi, nei secoli eterni il loro riposo."
                            );
                        }
                    }
                }
                elseif ($k=='0413a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Chi odia",
                                "la sua vita in questo mondo, la conserva per la vita eterna, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Nel regno dei cieli",
                                "è la dimora dei santi, nei secoli eterni il loro riposo, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Chi odia",
                                "la sua vita in questo mondo, la conserva per la vita eterna."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Nel regno dei cieli",
                                "è la dimora dei santi, nei secoli eterni il loro riposo."
                            );
                        }
                    }
                }
                elseif ($k=='0421a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Il beato Anselmo",
                                "ammoniva i potenti dicendo: Nulla Dio ama di più sulla terra che la libertà della sua Chiesa, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Maestro della fede",
                                "e luce della Chiesa, sant'Anselmo, hai scrutato con amore il mistero di Dio: prega per noi Cristo Signore, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Il beato Anselmo",
                                "ammoniva i potenti dicendo: Nulla Dio ama di più sulla terra che la libertà della sua Chiesa."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Maestro della fede",
                                "e luce della Chiesa, sant'Anselmo, hai scrutato con amore il mistero di Dio: prega per noi Cristo Signore."
                            );
                        }
                    }
                }
                elseif ($k=='0425a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "I discepoli partirono",
                            "e predicarono in tutto il mondo, mentre il Signore operava insieme a loro e con i prodigi confermava la loro parola, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Sono divenuto",
                            "ministro del Vangelo, in virtù dell'efficacia della potenza di Dio, alleluia."
                        );
                    }
                }
                elseif ($k=='0429a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "O degnissima",
                            "sposa di Cristo, fulgente di profetica luce, ardente di zelo apostolico, adorna della corona delle vergini, ti consumava il fuoco dell'amore divino, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Non sono",
                            "più io che vivo, ma Cristo vive in me; infatti io porto le stigmate di Gesù nel mio corpo, alleluia."
                        );
                    }
                }
                elseif ($k=='0501a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Giuseppe,",
                            "lavoratore santo, benedici il nostro lavoro, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Cristo Signore",
                            "volle vivere nella casa dell'operaio ed essere chiamato suo figlio, alleluia."
                        );
                    }
                }
                elseif ($k=='0503a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Io sono la via,",
                            "la verità e la vita: nessuno viene al Padre se non per me, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Se rimanete in me,",
                            "e le mie parole rimangono in voi, domanderete e tutto vi sarà dato, alleluia."
                        );
                    }
                }
                elseif ($k=='0511a') {
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "I giusti",
                            "risplenderanno, come scintille nella stoppia correrannoqua e là. Governeranno le nazioni e il Signore regnerà per sempre su di loro, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Beati voi,",
                            "santi di Dio! Siete divenuti cittadini del cielo: voi contemplate la gloria del Signore, alleluia."
                        );
                    }
                }
                elseif ($k=='0514a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Uno tra coloro",
                                "che hanno vissuto con il Signore Gesù divenga, insieme a noi testimone della sua risurrezione, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Non voi",
                                "avete scelto me, ma io ho scelto voi; vi mando perché portiate frutto, e il vostro frutto rimanga, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Uno tra coloro",
                                "che hanno vissuto con il Signore Gesù divenga, insieme a noi testimone della sua risurrezione."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Non voi",
                                "avete scelto me, ma io ho scelto voi; vi mando perché portiate frutto, e il vostro frutto rimanga."
                            );
                        }
                    }
                }
                elseif ($k=='0515a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Dove due o tre",
                                "sono riuniti nel mio nome, io sono in mezzo a loro, dice il Signore, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Voi",
                                "siete santi, dice il Signore, e il vostro numero sarà da me moltiplicato, affinché in questa casa preghiate per il mio popolo, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Dove due o tre",
                                "sono riuniti nel mio nome, io sono in mezzo a loro, dice il Signore."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Voi",
                                "siete santi, dice il Signore, e il vostro numero sarà da me moltiplicato, affinché in questa casa preghiate per il mio popolo."
                            );
                        }
                    }
                }
                elseif ($k=='0531a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Con un grido profetico",
                                "Elisabetta accolse Maria: Come mai viene da me la Madre del mio Signore? Alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Tutti i secoli",
                                "mi diranno beata: Dio ha guardato la sua umile serva, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Con un grido profetico",
                                "Elisabetta accolse Maria: Come mai viene da me la Madre del mio Signore?"
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Tutti i secoli",
                                "mi diranno beata: Dio ha guardato la sua umile serva."
                            );
                        }
                    }
                }
                elseif ($k=='0601a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Lodiamo",
                                "il Creatore dell'universo per Gesù Cristo, suo Figlio, e per lo Spirito Santo: egli ci ha dato la vita e tutti i suoi beni, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Nell'anima",
                                "si accese un fuoco improvviso: arse in me l'amore dei profeti e gli amici di Cristo, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Lodiamo",
                                "il Creatore dell'universo per Gesù Cristo, suo Figlio, e per lo Spirito Santo: egli ci ha dato la vita e tutti i suoi beni."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Nell'anima",
                                "si accese un fuoco improvviso: arse in me l'amore dei profeti e gli amici di Cristo."
                            );
                        }
                    }
                }
                elseif ($k=='0605a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Il vescovo",
                                "e martire Bonifacio, legato del Papa, diffuse il Vangelo tra i popoli germanici, e portò aiuto alle chiese dei Franchi, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "La spada dei barbari",
                                "dovette lacerare il codice del santo Vangelo per trafiggere il petto del martire: fu ucciso, ma non vinto, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Il vescovo",
                                "e martire Bonifacio, legato del Papa, diffuse il Vangelo tra i popoli germanici, e portò aiuto alle chiese dei Franchi."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "La spada dei barbari",
                                "dovette lacerare il codice del santo Vangelo per trafiggere il petto del martire: fu ucciso, ma non vinto."
                            );
                        }
                    }
                }
                elseif ($k=='0611a') {
                    if ($this->actual['tempo']=='P') {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Barnaba",
                                "condusse Paolo nella Chiesa di Antiochia e insieme annunziavano ai fratelli la parola del Signore, alleluia."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Barnaba e Paolo",
                                "narravano a tutta l'assemblea i segni e i prodigi compiuti dal Signore in mezzo ai popoli pagani, alleluia."
                            );
                        }
                    }
                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->antifona=array(
                                "Barnaba",
                                "condusse Paolo nella Chiesa di Antiochia e insieme annunziavano ai fratelli la parola del Signore."
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->antifona=array(
                                "Barnaba e Paolo",
                                "narravano a tutta l'assemblea i segni e i prodigi compiuti dal Signore in mezzo ai popoli pagani."
                            );
                        }
                    }
                }
                elseif ($k=='0625a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Con la mente",
                            "sempre rivolta al cielo, puro di anima e di cuore, Guglielmo offriva al suo Signore il scrificio di lode."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Come una cerva",
                            "anela ai corsi d'acqua, così l'anima mia anela a te, o Dio."
                        );
                    }
                }
                elseif ($k=='0628a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Ireneo,",
                            "uomo di pace, fedele nella vita al suo nome, lottò con coraggio per l'unità della Chiesa."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Chi vuol venire",
                            "dietro a me, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua."
                        );
                    }
                }
                elseif ($k=='0630a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Voi",
                            "avete lottato per me sulla terra: io sarò la vostra ricompensa, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Questi",
                            "sono coloro che vengono dalla grande tribolazione e hanno lavato le loro vesti nel sangue dell'Agnello."
                        );
                    }
                }
                elseif ($k=='0703a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Tu hai veduto,",
                            "Tommaso, e hai creduto; beato chi non vede, eppure crede, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Ho messo",
                            "il mio dito nel posto dei chiodi, e la mia mano nel suo costato, e ho detto: Signore mio e Dio mio! Alleluia."
                        );
                    }
                }
                elseif ($k=='0704a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Da questo",
                            "sapranno che siete miei discepoli: se avrete amore gli uni per gli altri."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Quello che avete fatto",
                            "al più piccolo dei miei fratelli, l'avete fatto a me: Venite, benedetti dal Padre mio, ricevete il regno preparato per voi dall'inizio del mondo."
                        );
                    }
                }
                elseif ($k=='0706a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Il Signore",
                            "è il mio aiuto: che cosa potrà farmi l'uomo?"
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Il Signore",
                            "è con me, non ho timore: che cosa può farmi l'uomo?"
                        );
                    }
                }
                elseif ($k=='0712a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Salvezza",
                            "dai nostri nemici e dalle mani di quanti ci odiano, per dirigere i nostri passi sulla via della pace."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "O grande santo,",
                            "sul quale si posò lo Spirito del Signore! Tu sei colui che hai ottenuto una grande liberazione nella Chiesa. Vittorioso ti accosti oggi al monte del Signore."
                        );
                    }
                }
                elseif ($k=='0713a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Bene,",
                            "servo buono e fedele: sei stato fedele nel poco, ti darò potere sul molto, entra nella gloria del tuo Signore."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Disprezzando il mondo",
                            "e le cose terrene, l'uomo giusto, con la parola e con le opere, ha accumulato tesori nel cielo."
                        );
                    }
                }
                elseif ($k=='0714a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Da questo,",
                            "sapranno che siete miei discepoli: se avrete amore gli uni per gli altri."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Quello che avete fatto",
                            "al più piccolo dei miei fratelli, l'avete fatto a me: Venite, benedetti dal Padre mio, ricevete il regno preparato per voi dall'inizio del mondo."
                        );
                    }
                }
                elseif ($k=='0716a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Pregai",
                            "e mi fu elargita la prudenza, implorai e venne in me lo spirito di sapienza."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Maria",
                            "ascoltava ogni parola di Dio e la custodiva, meditandola nel suo cuore."
                        );
                    }
                }
                elseif ($k=='0722a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Risorto",
                            "il mattino di Pasqua, Gesù apparve prima a Maria Maddalena, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Passato il sabato,",
                            "all'alba del primo giorno della settimana, Maria di Magdala e l'altra Maria andarono a vedere il sepolcro, alleluia."
                        );
                    }
                }
                elseif ($k=='0723a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Avete abbandonato",
                            "ogni cosa per seguirmi: avrete cento ovlte tanto, e la vita eterna."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Chi segue me",
                            "non cammina nelle tenebre, ma avrà la luce della vita, dice il Signore."
                        );
                    }
                }
                elseif ($k=='0725a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Gesù",
                            "condusse su un alto monte Pietro, Giacomo e Giovanni, e si trasfigurò davanti a loro."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Chi vorrà essere",
                            "grande tra voi, si farà vostro servo, e chi vorrà essere il primo, sarà lo schiavo di tutti."
                        );
                    }
                }
                elseif ($k=='0726a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Io sono",
                            "il Dio dei vostri padri, dice il Signore; ho visto la miseria del mio popolo, ho udito il suo grido, e sono sceso a liberarlo, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Dalla gloriosa",
                            "stirpe di Iesse è cresciuto un virgulto: splendido e profumato è il suo fiore."
                        );
                    }
                }
                elseif ($k=='0729a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Il nostro amico Lazzaro",
                            "si è addormentato: andiamo a svegliarlo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Io sono",
                            "la risurrezione e la vita: chi crede in me anche se muore, vivrà; e chiunque vive e crede in me non morrà in eterno."
                        );
                    }
                }
                elseif ($k=='0731a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Ho portato sulla terra",
                            "il fuoco dell'amore: come vorrei che divampasse in tutto il mondo!"
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Siate forti",
                            "nella lotta: combattete contro l'antico serpente e riceverete il regno eterno, alleluia."
                        );
                    }
                }
                elseif ($k=='0805a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Santa Madre di Dio,",
                            "Maria sempre vergine, tempio del Signore, santuario dello Spirito, tu sola fra tutte sei piaciuta a Cristo Signore, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "O beata",
                            "Vergine Maria, madre della grazia, speranza del mondo: esaudisci i tuoi figli che ricorrono a te, alleluia."
                        );
                    }
                }
                elseif ($k=='0810a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Chi mi vuol servire,",
                            "mi segua: e dove sono io, là sarà anche il mio servo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Il Padre mio",
                            "innalzerà nella gloria il mio servo fedele."
                        );
                    }
                }
                elseif ($k=='0816a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Bene,",
                            "servo buono e fedele: sei stato fedele nel poco, ti darò potere su molto, entra nella gloria del tuo Signore."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Disprezzando il mondo",
                            "e le cose terrene, l'uomo giusto, con la parola e con le opere, ha accumulato tesori per il cielo."
                        );
                    }
                }
                elseif ($k=='0820a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Illuminato",
                            "dalla luce del Verbo, Bernardo irradia fede e sapienza in tutta la Chiesa."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Maestro ispirato,",
                            "amico dello Sposo, cantore della Vergine, Bernardo fu per i suoi padre dolcissimo."
                        );
                    }
                }
                elseif ($k=='0822a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Nobilissima",
                            "Regina del mondo, Maria sempre vergine, tu hai generato Cristo salvatore."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Te beata",
                            "Vergine Maria, hai creduto alla parola del Signore: con Cristo regni in eterno."
                        );
                    }
                }
                elseif ($k=='0825a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Bene,",
                            "servo buono e fedele: sei stato fedele nel poco, ti darò potere su molto, entra nella gloria del tuo Signore."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Disprezzando il mondo",
                            "e le cose terrene, l'uomo giusto, con la parola e con le opere, ha accumulato tesori per il cielo."
                        );
                    }
                }
                elseif ($k=='0825b') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "I loro angeli",
                            "vedono sempre il volto del Padre mio che è nei cieli."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Lasciate",
                            "che i piccoli vengano a me: a loro appartiene il regno di Dio."
                        );
                    }
                }
                elseif ($k=='0827a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Tu non disprezzi,",
                            "o Dio, il pianto di una madre: tu ascolti la sua incessante preghiera."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Beata Monica,",
                            "amata da Cristo, con la tua vita fedele e generosa hai dato gloria a Dio."
                        );
                    }
                }
                elseif ($k=='0828a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Ci hai fatti per te,",
                            "Signore, e ci doni la gioia di lodarti; il nostro cuore non trova la pace fino a quando non riposa in te."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Tardi",
                            "ti ho amato, bellezza così antica e tanto nuova, tardi ti ho amato! Hai chiamato, hai gridato: hai vinto la mia sordità."
                        );
                    }
                }
                elseif ($k=='0829a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Un soldato,",
                            "mandato da Erode nella prigione, tagliò la testa a Giovanni. I discepoli raccolsero il suo corpo e lo deposero in un sepolcro."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Il re iniquo",
                            "inviò servi malvagi con l'ordine di tagliare la testa a Giovanni il Battista."
                        );
                    }
                }
                elseif ($k=='0903a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Pastore esemplare,",
                            "lasciò norme e testimonianze di vita pastorale."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Fedele",
                            "alla parola che annunziava, Gregorio viveva il mistero di Cristo."
                        );
                    }
                }
                elseif ($k=='0908a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "La tua nascita,",
                            "Vergine Madre di Dio, ha annunziato la gioia al mondo intero: da te è nato il sole di giustizia, Cristo nostro Dio: egli ha tolto la condanna e ha portato la grazia, ha vinto la morte e ci ha donato la vita."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Celebriamo la nascita",
                            "della gloriosa Vergine Maria: meritò l'onore della maternità conservando l'integrità verginale."
                        );
                    }
                }
                elseif ($k=='0915a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Simeone",
                            "disse a Maria: La tua anima sarà trapassata da una spada."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Gesù",
                            "disse alla madre: Donna ecco tuo figlio! E al discepolo che egli amava: Ecco tua madre!"
                        );
                    }
                }
                elseif ($k=='0916a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Gloriosa",
                            "è la mortre che a prezzo di sangue compra la vita immortale."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Chiesa di Cristo,",
                            "madre nostra, il sacrificio dei martiri è la tua gloria."
                        );
                    }
                }
                elseif ($k=='0917a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "La sposa di Cristo",
                            "Ildegarde illuminò la santa Chiesa di Dio con lo splendore della sua dottrina, fonte di salvezza per molti."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "O beata anima!",
                            "Meritò di diventare sede della divina sapienza, che si compiace di stare con gli uomini."
                        );
                    }
                }
                elseif ($k=='0921a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Gesù",
                            "vide Matteo al banco delle imposte. Gli disse: Seguimi. Ed egli si alzò e lo seguì."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Amore voglio,",
                            "non sacrificio: non sono venuto a chiamare i giusti, ma i peccatori."
                        );
                    }
                }
                elseif ($k=='0927a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Vincenzo,",
                            "padre degli orfani, saziò di pane i suoi poveri, e rivestì di salvezza i sacerdoti."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Vincenzo",
                            "portò ai poveri la testimonianza del Vangelo: fu occhio per il cieco, piede per lo zoppo, si fece veramente tutto a tutti."
                        );
                    }
                }
                elseif ($k=='0929a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Questi",
                            "sono tutti spiriti incaricati di un ministero, inviati per servire gli eredi della salvezza."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Angeli,",
                            "arcangeli, troni e dominazioni, principati, potestà e virtù del cielo, lodate il Signore dei cieli, alleluia."
                        );
                    }
                }
                elseif ($k=='1001a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Se non vi convertite,",
                            "e non diventate come bambini, non entrerete nel regno dei cieli."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Rallegratevi:",
                            "i vostri nomi sono scritti in cielo."
                        );
                    }
                }
                elseif ($k=='1002a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Santi angeli,",
                            "nostri custodi, difendeteci nella lotta non lasciateci soccombere nel tremendo giudizio."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Questi",
                            "sono tutti spiriti incaricati di un ministero, inviati per servire gli eredi della salvezza."
                        );
                    }
                }
                elseif ($k=='1004a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Povero",
                            "e umile in terra, Francesco entra ricco nel cielo, accolto da canti di festa."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "La mia gloria",
                            "è la croce del Signore Gesù Cristo: porto impressi nella mia carne i segni del suo amore per me."
                        );
                    }
                }
                elseif ($k=='1007a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Madre beata,",
                            "Vergine santa, gloriosa Regina del mondo: a noi che celebriamo la tua festa dona la gioia della tua protezione."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Maria",
                            "meditava nel suo cuore gli eventi meravigliosi del suo Figlio."
                        );
                    }
                }
                elseif ($k=='1016a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Avete abbandonato",
                            "ogni cosa per seguirmi: avrete cento volte tanto, e la vita eterna."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Chi segue me",
                            "non cammina nelle tenebre, ma avrà la luce della vita, dice il Signore."
                        );
                    }
                }
                elseif ($k=='1017a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Cristo,",
                            "morto per me, Cristo, risorto per me: è lui che cerco e desidero."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Pane di Dio",
                            "sia per me la carne del figlio di Davide: bevanda di salvezza, il sangue di Cristo Gesù, amore inesauribile."
                        );
                    }
                }
                elseif ($k=='1018a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Hai trasmesso all Chiesa,",
                            "il Vangelo di Cristo, sole che sorge dall'alto."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "O beato Luca,",
                            "il tuo Vangelo ci rivela la misericordia di Cristo: tutta la Chiesa ti onora."
                        );
                    }
                }
                elseif ($k=='1019a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Prenderò",
                            "il calice della salvezza e invocherò il nome del Signore."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Prenderò",
                            "il calice della salvezza e offrirò un sacrificio di lode."
                        );
                    }
                }
                elseif ($k=='1103a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Benedetto il Signore!",
                            "Ha preparato la salvezza dei popoli: dalle tenebre li chiama al regno della luce."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Quellio che avete fatto",
                            "al più piccolo dei miei fratelli, l'avete fatto a me: Venite, benedetti dal Padre mio, ricevete il regno preparato per voi dall'inizio del mondo."
                        );
                    }
                }
                elseif ($k=='1110a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Forte",
                            "della parola di Cristo, Pietro sta con fermezza al timone della Cbiesa."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "In tutta la Chiesa",
                            "Pietro proclama ogni giorno: Tu sei il Cristo, il Figlio del Dio vivo."
                        );
                    }
                }
                elseif ($k=='1111a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Beato te,",
                            "Martino, che entri in possesso del Paradiso. Esultano gli angeli, si rallegrano gli arcangeli, il coro dei santi e la schiera delle vergini t'invitano: Resta con noi in eterno!"
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "O beato pastore!",
                            "Ardente di amore per Cristo Re, non temesti le autorità umane. O santissima anima! Anche se non ti colpì la spada del persecutore, meritasti la palma del martirio."
                        );
                    }
                }
                elseif ($k=='1113a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Voi",
                            "avete abbandonato ogni cosa per seguirmi: avrete cento volte tanto e la vita eterna."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Gioia del cielo",
                            "per gli amici di Dio: hanno seguito le orme di Cristo, hanno disprezzato il mondo per suo amore, con Cristo regneranno senza fine."
                        );
                    }
                }
                elseif ($k=='1116a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "O Geltrude,",
                            "degnissima sposa di Cristo, fulgente di profetica luce, ardente di zelo apostolico, adorna della corona delle vergini, ti consumava il fuoco dell'amore divino."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Apparvero",
                            "spiriti celesti, discesi dal cielo in terra, e con dolce canto invitarono Geltrude: Vieni, vergine saggia! Ti attendono le delizie del cielo, alleluia."
                        );
                    }
                }
                elseif ($k=='1117a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Da questo,",
                            "sapranno che siete miei discepoli: se avrete amore gli uni per gli altri."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Quello che avete fatto",
                            "al più piccolo dei miei fratelli, l'avete fatto a me: Venite, benedetti dal Padre mio, ricevete il regno preparato per voi dall'inizio del mondo."
                        );
                    }
                }
                elseif ($k=='1117b') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Da questo,",
                            "sapranno che siete miei discepoli: se avrete amore gli uni per gli altri."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Quello che avete fatto",
                            "al più piccolo dei miei fratelli, l'avete fatto a me: Venite, benedetti dal Padre mio, ricevete il regno preparato per voi dall'inizio del mondo."
                        );
                    }
                }
                elseif ($k=='1118a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Pietro,",
                            "il primo degli apostoli, e Paolo, il maestro delle genti, ci insegnano, Signore, la tua legge."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Il corpo dei santi",
                            "dorme nella pace; il loro nome vive in eterno."
                        );
                    }
                }
                elseif ($k=='1121a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Te beata,",
                            "o Maria, che hai creduto: si compie in te la parola del Signore, alleluia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Santa Madre di Dio,",
                            "Maria sempre vergine, tempio del Signore, santuario dello Spirito, tu sola fra tutte sei piaciuta a Cristo Signore, alleluia."
                        );
                    }
                }
                elseif ($k=='1122a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "All'aurora",
                            "Cecilia esclamò: Soldati di Cristo, gettate via le opere delle tenebre, e rivestite le armi della luce!"
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "La vergine Cecilia",
                            "portava sempre nel cuore il Vangelo di Cristo; giorno e notte non cessava il suo colloquio con Dio."
                        );
                    }
                }
                elseif ($k=='1130a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Andrea,",
                            "fratello di Simon Pietro, fu tra i primi che seguirono il Signore."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Dinanzi alla croce",
                            "Andrea esclamò: O buona croce, così a lungo desiderata, pregustata con tanto amore, io ti vengo incontro sereno e con gioia: anche tu accogli festosa il discepolo di colui che in te fu sospeso per la salvezza del mondo."
                        );
                    }
                }
                elseif ($k=='1203a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Andate,",
                            "evangelizzate i popoli, battezzate nel nome del Padre e del Figlio e dello Spirito Santo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Pregate",
                            "il padrone della messe che mandi operai nella sua messe."
                        );
                    }
                }
                elseif ($k=='1212a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Avete abbandonato",
                            "ogni cosa per seguirmi: avrete cento volte tanto, e la vita eterna."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Chi segue me",
                            "non cammina nelle tenebre, ma avrà la luce della vita, dice il Signore."
                        );
                    }
                }
                elseif ($k=='1213a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Umile serva",
                            "del Signore, ho sacrificato tutto al Dio vivente. Ora non mi resta più nulla e offro me stessa."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Lucia,",
                            "sposa di Cristo, con la tua perseveranza sei giunta alla vita: non hai servito il mondo, ed ora risplendi tra gli angeli; con il tuo sangue hai vinto il nemico."
                        );
                    }
                }
                elseif ($k=='1214a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Chi vuol venire",
                            "dietro a me, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Nostra gloria",
                            "è la croce del Signore Gesù, alleluia."
                        );
                    }
                }
                elseif ($k=='1221a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "I saggi",
                            "splenderanno come il firmamento: i maestri di sapienza saranno come stelle nel cielo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Maestro della fede",
                            "e luce della Chiesa, san Pietro Canisio, hai scrutato con amore il mistero di Dio: prega per noi Cristo Signore."
                        );
                    }
                }
                elseif ($k=='1223a') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Da questo",
                            "sapranno che siete miei discepoli: se avrete amore gli uni per gli altri."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Quello che avete fatto",
                            "al più piccolo dei miei fratelli, l'avete fatto a me: Venite, benedetti dal Padre mio, ricevete il regno preparato per voi dall'inizio del mondo."
                        );
                    }
                }
                elseif ($k=='1229b') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Chi odia",
                            "la sua vita in questo mondo, la conserva per la vita eterna."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->antifona=array(
                            "Nel regno dei cieli",
                            "è la dimora dei santi, nei secoli eterni il loro riposo."
                        );
                    }
                }
                elseif ($k=='1231b') {  
                    if($this->actual['ora']=='lodi') {
                        $this->antifona=array(
                            "Quando fu pontefice,",
                            "non si laciò intimorire dai potenti della terra, ma camminò deciso verso il regno dei cieli."
                        );
                    }
                }
            }
        }

    }


    ///////////////////////////////////////////////////////////////////////////
    function drawAntifona() {
        //true = prima - false = dopo

        echo '<div style="position:relative;margin-top:5px;margin-bottom:10px;font-size:1.1em;" >';
        echo '<div class="salAntifona" >ant.</div>';
            echo '<div class="salAntifona2" >';
                echo $this->antifona;
            echo '</div>';
        echo '</div>';
    }

    function draw() {

        echo '<div class="salResBlockTitle" >';
            echo 'Invitatorio';
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            $this->head->draw();
        echo '</div>';

        $this->drawAntifona();

        echo '<div class="salResBlockTitle" >';
            echo $this->titolo;
        echo '</div>';

        foreach ($this->testoBase as $k=>$s) {

            $this->res->addBlock($s);
            $this->res->addBlock(array(array('ant','I',$this->antifona)));
        }

        $this->res->addBlock($this->gloria);
        $this->res->addBlock(array(array('ant','I',$this->antifona)));

        echo '<div class="salResBlockBody" >';
            if ($this->res) {
                echo $this->res->draw();
            }
        echo '</div>';

    }

}

?>