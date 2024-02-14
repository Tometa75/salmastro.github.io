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

            if (substr($this->actual['today'],4,4)>='1217' && substr($this->actual['today'],4,4)<='1223') {
                $this->antifona="Vicino è il Signore: venite, adoriamo.";
            }
            elseif (substr($this->actual['today'],4,4)=='1224') {
                $this->antifona="Oggi saprete che il Signore viene: col nuovo giorno vedrete la sua gloria.";
            }
            else {
                $this->antifona="Venite, adoriamo il Signore che viene per noi.";
            }
        }

        if ($this->actual['tempo']=='N') {

            if (substr($this->actual['today'],4,4)=='1225') {
                $this->antifona="Cristo è nato per noi: venite, adoriamo.";
                $this->salmo("94");  
            }

            elseif (substr($this->actual['today'],4,4)=='1226') {
                $this->antifona="Cristo Signore, nato per noi, ha dato a Stefano la corona di gloria: venite, adoriamo.";
                $this->salmo("94");
            }

            elseif (substr($this->actual['today'],4,4)=='1227') {
                $this->antifona="Venite, adoriamo Cristo, Re e Signore degli apostoli.";
                $this->salmo("94");
            }

            elseif (substr($this->actual['today'],4,4)=='1228') {
                $this->antifona="Cristo Signore, nato per noi, ai santi Innocenti ha dato la corona del martirio: venite, adoriamo.";
                $this->salmo("94");
            }

            elseif (substr($this->actual['today'],4,4)=='1229') {
                $this->antifona="Cristo è nato per noi: venite, adoriamo.";
                $this->salmo("94");
            }

            elseif (substr($this->actual['today'],4,4)=='1230') {
                $this->antifona="Cristo è nato per noi: venite, adoriamo.";
                $this->salmo("94");
            }

            elseif (substr($this->actual['today'],4,4)=='1231') {
                $this->antifona="Cristo è nato per noi: venite, adoriamo.";
                $this->salmo("94");
            }

            ////////////////////////////////////

            if ($this->actual['evCode']=='SAF') {
                $this->antifona="Cristo, Figlio di Dio, fu obbediente a Maria e a Giuseppe: venite, adoriamo.";
                $this->salmo("94");
            }

            if ($this->actual['evCode']=='MSS') {
                $this->antifona="Celebriamo la Vergine Maria, Madre di Dio: adoriamo il suo Figlio, Cristo Signore.";
                $this->salmo("94");
            }

            if (substr($this->actual['today'],4,4)>='0102' && substr($this->actual['today'],4,4)<='0105') {
                $this->antifona="Cristo è nato per noi: venite, adoriamo.";
            }

            if ($this->actual['evCode']=='2DN') {
                $this->antifona="Cristo è nato per noi: venite, adoriamo.";
                $this->salmo("80");
            }

            if ($this->actual['evCode']=='EPI') {
                $this->antifona="Venite, adoriamo il Signore apparso tra noi.";
                $this->salmo("94");
            }

            if (substr($this->actual['today'],4,4)>='0107' && substr($this->actual['today'],4,4)<='0112') {
                $this->antifona="Venite, adoriamo il Signore apparso tra noi.";
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='Q') {

            $this->antifona="Venite, adoriamo Cristo Signore: per noi ha sofferto tentazione e morte.";

            if ($this->actual['evCode']=='SS5') {
                $this->antifona="Venite, adoriamo Cristo, il Figlio di Dio: con il suo sangue ci ha redenti.";
                $this->salmo("94");
            }

            elseif ($this->actual['evCode']=='SS6') {
                $this->antifona="Venite, adoriamo il Signore, crocifisso e sepolto per noi.";
                $this->salmo("94");
            }
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='P') {

            if ($this->actual['today']<$this->actual['ASC']) {
                $this->antifona="Il Signore è veramente risorto, alleluia.";
            }
            else {
                $this->antifona="Adoriamo Cristo Signore, che manda il suo Spirito, alleluia.";
            }

            if ($this->actual['evCode']=='PAS') {
                $this->antifona="Il Signore è veramente risorto, alleluia.";
                $this->salmo("94");
            }

            if (substr($this->actual['evCode'],0,3)=='PA1') {
                $this->antifona="Il Signore è veramente risorto, alleluia.";
                $this->salmo("94");
            }
 
            if ($this->actual['evCode']=='PA2') {
                $this->antifona="Il Signore è veramente risorto, alleluia.";
                $this->salmo("94");
            }

            //////////////////////////////////////////////////////////////////

            if ($this->actual['evCode']=='ASC') {
                $this->antifona="Venite, adoriamo Cristo Signore, che ascende nei cieli, alleluia.";
                $this->salmo("94");
            }
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='O') {

            if ($this->actual['evCode']=='BAT') {
                $this->antifona="Venite, adoriamo il Figlio prediletto: in lui il Padre si compiace.";
                $this->salmo("94");
            }

            if ($this->actual['evCode']=='PEN') {
                $this->antifona="Alleluia. Lo Spirito del Signore pervade l'universo: venite, adoriamo, alleluia.";
                $this->salmo("94");
            }

            if ($this->actual['evCode']=='TRI') {
                $this->antifona="Venite, adoriamo l'unico vero Dio: Padre e Figlio e Spirito Santo.";
                $this->salmo("94");
            }

            if ($this->actual['evCode']=='COD') {
                $this->antifona="Adoriamo Cristo Signore, Pane della vita.";
                $this->salmo("94");
            }

            if ($this->actual['evCode']=='SCG') {
                $this->antifona="Adoriamo il Cuore di Cristo ferito per i nostri peccati.";
                $this->salmo("94");
            }

            if ($this->actual['evCode']=='GRE') {
                $this->antifona="Venite, adoriamo il Re dei re, Cristo Signore.";
                $this->salmo("94");
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
                        $this->antifona="Chiesa, sposa di Cristo, acclama il tuo Signore, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Chiesa, sposa di Cristo, acclama il tuo Signore.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='BVM') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo il Cristo Signore, figlio della Vergine Maria, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo il Cristo Signore, figlio della Vergine Maria.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='apostoli') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo Cristo, Re e Signore degli apostoli, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo Cristo, Re e Signore degli apostoli.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='martiri' || $f['comune']=='martire') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Esultino i santi nel Signore, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo il Re dei martiri, Cristo Signore.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='pastori') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo il Pastore supremo, Cristo Signore, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo il Pastore supremo, Cristo Signore.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='dottori') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo Cristo Signore, fonte di ogni sapienza, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo Cristo Signore, fonte di ogni sapienza.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='monaci') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo Cristo, obbediente fino alla morte, modello di vita per tutti i monaci, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo Cristo, obbediente fino alla morte, modello di vita per tutti i monaci.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='vergini') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo Cristo, gioia e corona delle vergini, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo Cristo, gioia e corona delle vergini.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='santi' || $f['comune']=='religiosi') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo il Signore: la sua gloria risplende nei santi, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo il Signore: la sua gloria risplende nei santi.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='sante' || $f['comune']=='religiose') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo il Signore mirabile nelle sue sante, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo il Signore mirabile nelle sue sante.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='DEF') {

                    $this->antifona="Venite, adoriamo il Signore: per lui tutti vivono.";
                        $this->salmo("94");
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