<?php
class Invocazioni {

    protected $testo=array();

    protected $actual;
    protected $res;

    function __construct($caller) {

        $this->actual=$caller->actual;

        $this->res=new Saltesto();

        $this->init();

        //$this->build();

        //$this->build2();

    }

    function init() {

        //definisci le invocazioni del Salterio
        if ($this->actual['weekDay']==0) {

            if ($this->actual['ora']=='ves1') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Eleviamo al Dio uno e trino, Padre e Figlio e Spirito Santo, la nostra lode e la nostra preghiera:"),
                                array('ris','I',"Assisti il tuo popolo, o Signore.")
                            ),
                            array(
                                array('','',"Dio grande e misericordioso, sorga la tua giustizia sulla terra,"),
                                array('-','',"e il tuo popolo vedrà un'era di fraternità e di pace."),
                                array('','',"Venga il tuo regno fra tutte le nazioni,"),
                                array('-','',"e si compia il tuo disegno di salvezza anche per l'antico popolo dell'alleanza."),
                                array('','',"Fa' che le nostre famiglie vivano in serena adesione ai tuoi voleri e in santa armonia,"),
                                array('-','',"per essere il riflesso della tua unità d'amore nel Verbo e nello Spirito."),
                                array('','',"Ricompensa tutti coloro che ci hanno fatto del bene:"),
                                array('-','',"dona loro il cento per uno e la vita eterna."),
                                array('','',"Guarda con bontà quanti sono morti a causa dell'odio, della violenza e della guerra,"),
                                array('-','',"accogli tutti nel riposo eterno.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Dio aiuta e protegge il popolo che ha scelto e lo chiama beatitudine del suo regno. Memori dei suoi benefici, diciamo:"),
                                array('ris','I',"Noi confidiamo in te, Signore.")
                            ),
                            array(
                                array('','',"Noi ti preghiamo, Signore, per il nostro papa ... e per il nostro vescovo ... ,"),
                                array('-','',"guidali e proteggili con il tuo Spirito."),
                                array('','',"Fa' che i nostri fratelli infermi si sentano partecipi della passione di tuo Figlio,"),
                                array('-','',"e ne condividano la grtazia e la consolazione."),
                                array('','',"Guarda con bontà le famiglie senza tetto,"),
                                array('-','',"fa' che abbiano una casa e un posto sicuro nella società."),
                                array('','',"Dona e conserva i frutti della terra e del lavoro,"),
                                array('-','',"perché nessun uomo sia privo del pane quotidiano."),
                                array('','',"Accogli fra le braccia della tua misericordia i nostri defunti,"),
                                array('-','',"concedi loro il riposo eterno.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Memori dell'amore di Cristo, che, con la prodigiosa moltiplicazione dei pani e dei pesci, saziò la fame del suo popolo, diciamo con umile fiducia:"),
                                array('ris','I',"Rinnova per noi, Signore, i prodigi della tua misericordia.")
                            ),
                            array(
                                array('','',"Riconosciamo, Signore, che i benefici ricevuti in questa settimana vengono dalla tua bontà,"),
                                array('-','',"fa' che non trovino in noi un terreno sterile, ma portino frutti di vita eterna."),
                                array('','',"Luce e salvezza delle genti, guida e proteggi i missionari del Vangelo,"),
                                array('-','',"accendi in essi il fuoco del tuo Spirito."),
                                array('','',"Fa' che tutti gli uomini cooperino a creare un mondo nuovo,"),
                                array('-','',"più conforme alle legittime aspirazioni del progresso nella giustizia e nella pace."),
                                array('','',"Medico delle anime e dei corpi, dona sollievo ai malati, conforto ai moribondi,"),
                                array('-','',"visita e rinnova tutti gli uomini con la tua misericordia."),
                                array('','',"Accogli i nostri defunti nella gloriosa schiera dei santi,"),
                                array('-','',"scrivi anche i loro nomi nel libro della vita.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Il Cristo è la gioia di quanti sperano in lui. PEr godere di questo dono invochiamolo con fede:"),
                                array('ris','I',"Guarda il tuo popolo e ascolta la nostra preghiera.")
                            ),
                            array(
                                array('','',"Testimone fedele, primogenito dei morti, che hai lavato nel tuo sangue le nostre anime,"),
                                array('-','',"donaci di celebrare sempre con gratitudine le meraviglie del tuo amore."),
                                array('','',"Illumina e sostieni i missionari del Vangelo,"),
                                array('-','',"perché siano fedeli e coraggiosi ministri del tuo regno."),
                                array('','',"Re della pace, dona il tuo Spirito ai legislatori e ai governanti,"),
                                array('-','',"perché promiovano i bene dei poveri e dei diseredati."),
                                array('','',"Soccorri quelli che sono discriminati a causa della nazionalità, del colore, della condizione sociale, della lingua o della religione,"),
                                array('-','',"fa' che ottengano il riconoscimento dei loro diritti."),
                                array('','',"Accogli nella tua pace i fedeli che si sono addormentati credendo e sperando in te,"),
                                array('-','',"rendili partecipi della tua beatitudine insieme a Maria e a tutti i santi.")
                            )
                        );
                    break;
                }
            }

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Acclamiamo Cristo, sole di giustizia apparso all'orizzonte dell'umanità:"),
                                array('ris','I',"Signiore, tu sei la vita e la salvezza nostra.")
                            ),
                            array(
                                array('','',"Cretore degli astri, noi ti consacriamo le primizie di questo giorno,"),
                                array('-','',"nel ricordo della tua gloriosa risurrezione."),
                                array('','',"Il tuo Spirito ci insegni a compiere la tua volontà,"),
                                array('-','',"e la tua sapienza ci guidi oggi e sempre."),
                                array('','',"Donaci di partecipare con vera fede all'assemblea del tuo popolo,"),
                                array('-','',"intorno alla mensa della tua parola e del tuo corpo."),
                                array('','',"La tua Chiesa ti renda grazie, Signore,"),
                                array('-','',"per i tuoi innumerevoli benefici.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie al Salvatore, che è sceso dal cielo per essere il Dio-con-noi. Acclamiamo:"),
                                array('ris','I',"Re della gloria, sii la nostra luce e la nostra gioia.")
                            ),
                            array(
                                array('','',"Cristo, sole nascente dall'alto, primizia della risurrezione futura,"),
                                array('-','',"donaci la grazia di seguirti sempre per camminare nella via della vita."),
                                array('','',"Rivelaci la tua bontà, che opera in ogni creatura,"),
                                array('-','',"perché possiamo riconoscer in tutto e in tutti la luce della tua gloria."),
                                array('','',"Non permettere che oggi siamo vinti dal male,"),
                                array('-','',"ma aiutaci a vincere il male con il bene."),
                                array('','',"Tu che, battezzato nel giordano, ricevesti l'unzione dello Spirito Santo,"),
                                array('-','',"donaci di essere guidati, oggi e sempre, dalla grazia dello Spirito.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Dio Padre, ha mandato lo Spirito Santo, perché sia in noi sorgente inesauribile di luce. Animati da questa fede diciamo insieme:"),
                                array('ris','I',"Illumina il tuo popolo, o Signore.")
                            ),
                            array(
                                array('','',"Sii benedetto, o Dio, nostra vita,"),
                                array('-','',"che nella tua bontà ci hai guidati all'alba di questo nuovo giorno."),
                                array('','',"Tu che hai illuminato il mondo con al risurrezione del tuo Figlio,"),
                                array('-','',"diffondi la sua luce in tutti gli uomini mediante l'opera della Chiesa."),
                                array('','',"Hai trasformato i discepoli del tuo Figlio con il fuoco della Pentecoste,"),
                                array('-','',"manda ancora lo Spirito nella tua Chiesa, perché ti sia fedele."),
                                array('','',"Luce delle genti, ricordati di quanti sono immersi nelle tenebre dell'errore,"),
                                array('-','',"apri i loro occhi alla luce della fede, perché riconoscano in te l'unico vero Dio.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Apriamo con fiducia il nostro cuore al Dio della potenza e della mosericordia, che ama e conosce le nostre necessità. A lui rivolgiamo la nostra lode e la nostra preghiera:"),
                                array('ris','I',"Noi ti glorifichiamo, Signore, e confidiamo in te.")
                            ),
                            array(
                                array('','',"Benedetto sii tu, Re dell'universo, che ci hai tratto dalle tenebre dell'errore e del peccato alla splendida luce del tuo regno,"),
                                array('-','',"e ci hai chiamati a servirti nella santa Chiesa."),
                                array('','',"Tu che ci hai apeto le braccia della misericordia,"),
                                array('-','',"non permettere che deviamo mai dal sentiero della vita."),
                                array('','',"Concedici di trascorrere in letizia questo giorno,"),
                                array('-','',"in cui celebriamo la risurrezione del tuo Figlio."),
                                array('','',"Dona ai tuoi fedeli, lo spirito di orazione e di lode,"),
                                array('-','',"perchè tutta la nostra vita sia un rendimento di grazie a te.")
                            )
                        );
                    break;
                }
            }
            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Cristo è il nostro capo e noi siamo le sue membra. A lui lode e gloria nei secoli. Acclamiamo:"),
                                array('ris','I',"Venga il tuo regno, Signore.")
                            ),
                            array(
                                array('','',"La tua Chiesa, Signore, sia sacramento vivo ed efficace di unità per il genere umano,"),
                                array('-','',"mistero di salvezza per tutti gli uomini."),
                                array('','',"Assisti il collegio dei vescovi in unione con il nostro papa,"),
                                array('-','',"infondi in loro il tuo Spirito di unità, di amore e di pace."),
                                array('','',"Fa' che i cirstiani siano intimamente uniti a te, capo della Chiesa,"),
                                array('-','',"e diano valida testimonianza al tuo Vangelo."),
                                array('','',"Dona al mondi la pace,"),
                                array('-','',"fa' che si costruisca un ordina nuovo nella giustizia e nella fraternità."),
                                array('','',"Concedi ai nostri fratelli defunti la gloria della risurrezione,"),
                                array('-','',"rendi partecipi anche noi della loro beatitudine.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Lode a Cristo, che vive in eterno per intercedere a nostro favore e può salvare quelli che si accostano al Padre per messo di lui. Animati da questa speranza invochiamo il nostro Salvatore:"),
                                array('ris','I',"Ricordati, Signore, del tuo popolo.")
                            ),
                            array(
                                array('','',"Al tramonto di questo giorno, o sole di giustizia, noi ti preghiamo per tutto il gernere umano,"),
                                array('-','',"fa' che ogni uomo gosa senza fine della tua luce intramontabile."),
                                array('','',"Rendi sempre vivo e attuale il patto di alleanza che hai sigillato con il tuo sangue,"),
                                array('-','',"santifica e rinnova la tua Chiesa, perché sia sempre pura e senza macchia."),
                                array('','',"Ricordati del tuo popolo, Signore,"),
                                array('-','',"benedici la dimora della tua gloria."),
                                array('','',"Dona incolumità e pace a quanti viaggiano in cielo, in terra e in mare,"),
                                array('-','',"fa' che giungano ferlicemente alla meta desiderata."),
                                array('','',"Accogli nella tua casa le anime dei defunti,"),
                                array('-','',"concedi loro il perdono e la gloria eterna.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Dio ha creato e redento il mondo e sempre lo rinnova con l'azione del suo Spirito. Uniti in fraterna esulatanza invichiamo la sua paterna misericordia:"),
                                array('ris','I',"Rinnova, o Dio, i prodigi del tuo amore.")
                            ),
                            array(
                                array('','',"Ti rendiamo grazie, Signore, perché riveli la tua potenza nella creazione,"),
                                array('-','',"e manifesti la tua provvidenza nella storia dell'umanità."),
                                array('','',"Nel nome del tuo Figlio, vincitore della morte e principe della pace,"),
                                array('-','',"liberaci dal dubbio e dall'angoscia, perché ti serviamo sempre nella letizia e nell'amore."),
                                array('','',"Assisti tutti coloro che amano la giustizia,"),
                                array('-','',"perché cooperino lealmente a edificare il mondo nella pace."),
                                array('','',"Soccorri gli oppressi consola i miseri, libera i prigionieri, nutri gli affamati, rafforza i deboli,"),
                                array('-','',"fa' risplendere in tutti la vittoria della croce."),
                                array('','',"Tu che hai glorificato il tuo Figlio dopo l'umiliazione della morte e della sepoltura,"),
                                array('-','',"fa' che i defunti giungano con lui allo splendore della vita eterna.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Pieni di gioia e di gratitudine invochiamo Dio, principio e fonte di ogni bene:"),
                                array('ris','I',"Ascolta, Signore, la nostra preghiera.")
                            ),
                            array(
                                array('','',"Padre e Signore dell'universo, che ahai mandato nel mondo tuo Figlio per riunire i popoli nella lode del tuo nome,"),
                                array('-','',"rafforza la testimonianza della tua Chiesa nel mondo intero."),
                                array('','',"Rendici sempre più docili all'insegnamento degli apostoli,"),
                                array('-','',"perché la nostra vita sia coerente con il credo che professiamo."),
                                array('','',"Tu che sei l'amico dei giusti,"),
                                array('-','',"rendi giustizia a quanti sono oppressi in ogni parte del mondo."),
                                array('','',"Dona la vista ai ciechi e la libertà ai prigionieri,"),
                                array('-','',"rianima gli sfiduciati e proteggi gli esuli."),
                                array('','',"Accogli l'estremo desiderio di coloro che si sono addormentati nel tuo Cristo,"),
                                array('-','',"giungano alla gloria della risurrezione.")
                            )
                        );
                    break;
                }
            }        
        }

        if ($this->actual['weekDay']==1) {

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo Cristo, nostro Signore, pieno di grazia e di Spirito Santo e con fiducia chiediamo:"),
                                array('ris','I',"Donaci il tuo Spirito, Signore.")
                            ),
                            array(
                                array('','',"Concedi a noi di trascorrere questo giorno nella gioia, nella pace e senza peccato,"),
                                array('-','',"perché, giunti a sera, possiamo lodarti con cuore puro e riconoscente."),
                                array('','',"Risplenda su di noi la luce del tuo amore,"),
                                array('-','',"e la tua sapienza isoiri i nostri progetti e le nostre opere."),
                                array('','',"La tua mano ci sostenga nel servizio del bene,"),
                                array('-','',"e ci custodisca nella tua amicizia."),
                                array('','',"Proteggi coloro che si affidano alle nostre preghiere,"),
                                array('-','',"colmali di ogni benedizione nel corpo e nello spirito.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Il Cristo, mediatore della nuova alleanza, ha dato a noi un sacerdozio regale, perché offriamo a Dio una lode perfetta. Ujiti nella preghiera del mattino, invochiamo il nostro Salvatore:"),
                                array('ris','I',"Confermaci, Signore, nel tuo santo servizio.")
                            ),
                            array(
                                array('','',"Cristo, sacerdote eterno, che ci hai resi partecipi della tua comunione di amore al Padre,"),
                                array('-','',"fa' che presentiamo sempre sacrifici spirituali a Dio graditi."),
                                array('','',"Donaci i frutti del tuo Spirito:"),
                                array('-','',"la pazienza, la benignità e la mitezza."),
                                array('','',"Concedici di amare te, per avere in dono te, che sei l'Amore,"),
                                array('-','',"e donaci di bene operare per rendere tutta la vita una lode a te."),
                                array('','',"Fa' che ci dedichiamo al dervizio del fratelli,"),
                                array('-','',"perché abbiano a conseguire più facilmente la salvezza.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Preghiamo Dio nostro Padre, che ha posto gli uomini nel mondo, perché cooperino in unità di intenti al gran disegno della creazione, Diciamo con fede:"),
                                array('ris','I',"Fa' che ti rendiamo gloria, o Signore.")
                            ),
                            array(
                                array('','',"Sii benedetto, o Dio creatore, noi ti ringraziamo per le meraviglie dell'universo,"),
                                array('-','',"e per la vita che ci hai donato."),
                                array('','',"Guarda i tuoi figli che, attraverso le occupazioni quotidiane, partecipano alla tua opera,"),
                                array('-','',"fa' che si conformino alla tua volontà."),
                                array('','',"Il nostro lavoro giovi al bene dei fratelli,"),
                                array('-','',"concedici di edificare con loro e per loro un mondo come a te piace."),
                                array('','',"Dona pace e gioia,"),
                                array('-','',"a noi e a quanti incontreremo oggi sul nostro cammino.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Il Cristo ascolta la voce degli umili che confidano in lui e li salva. Confortati da questa certezza invochiamo il tuo nome:"),
                                array('ris','I',"Tu sei la nostra speranza, Signore.")
                            ),
                            array(
                                array('','',"O Dio ricco di misericordia,"),
                                array('-','',"noi ti ringraziamo per il tuo immenso amore."),
                                array('','',"Tu che agisci sempre nella storia dell'umanità insieme al Padre,"),
                                array('-','',"rinnova gli uomini e le cose con la forza del tuo Spirito."),
                                array('','',"Dona a noi e ai nostri fratelli uno sguardo di fede,"),
                                array('-','',"perché possiamo contemplare sempre le tue meraviglie."),
                                array('','',"Redentore di tutti, che in questo giorno ci chiami a cooperare alla tua opera di salvezza,"),
                                array('-','',"redici segno della tua grazia verso il nostro prossimo.")
                            )
                        );
                    break;
                }
            }
            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Uniti ai nostri fratelli di fede, invochiamo il Signore che ha stretto con il suo popolo un patto di eterna alleanza:"),
                                array('ris','I',"Proteggi, o Signore, la tua famiglia.")
                            ),
                            array(
                                array('','',"Salva il tuo popolo, o Signore,"),
                                array('-','',"benedici la tua eredità."),
                                array('','',"Raccogli nell'unità coloro che si gloriano del nome cristiano,"),
                                array('-','',"perché il mondo creda in colui ceh tu hai inviato, Gesù Cristo nostro Signore."),
                                array('','',"Benedici i nostri familiari, amici e conoscenti,"),
                                array('-','',"diffondi fra di essi il profumo della carità di Cristo."),
                                array('','',"Mostra agli agonizzanti la luce del tuo amore,"),
                                array('-','',"i loro occhi si aprano alla visione della tua gloria."),
                                array('','',"Sii misericordioso verso i nostri fratelli defunti,"),
                                array('-','',"ammettili a godere la beata pace del Paradiso.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Rivolgiamo con fiducia la nostra preghiera a Gesù Cristo, che ama la sua Chiesa, la nutre e la santifica con la parola e i sacramenti:"),
                                array('ris','I',"Esaudisci i desideri del tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Signore Gesù, fa' che tutti gli uomini siano salvi,"),
                                array('-','',"e giungano alla conoscenza perfetta della verità."),
                                array('','',"Proteggi il nostro papa ... e il nostro vescovo ... ,"),
                                array('-','',"sostienili con la potenza del tuo Spirito."),
                                array('','',"Provvedi ai disoccupati e ai senza tetto,"),
                                array('-','',"fa' che ogni uomo abbia ciò che è necessario a una vita dignitosa e sicura."),
                                array('','',"Sii rifugio al povero,"),
                                array('-','',"aiutalo nella sofferenza e nel bisogno."),
                                array('','',"Ti raccomandiamo i sacri ministri, che hai chiamato a te da questa vita,"),
                                array('-','',"fa' che cantino in eterno la tua lode nella liturgia del cielo.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Il Cristo vuole che tutti gli uomini siano salvi. Preghiamo perché si compia il disegno della sua misericordia:"),
                                array('ris','I',"Attira ogni essere a te, Signore.")
                            ),
                            array(
                                array('','',"Benedetto sii tu, Signore, che a prezzo del tuo sangue ci hai riscattato dalla schiavitù del peccato,"),
                                array('-','',"donaci la libertà e la gloria dei tuoi figli."),
                                array('','',"Dona la tua grazia al nostro vescovo ... e a tutti i vescovi della Chiesa,"),
                                array('-','',"perché dispensino i tuoi misteri nella letizia e nel fervore dello spirito."),
                                array('','',"A quanti cercano la verità, concedi la gioia di trovarla,"),
                                array('-','',"e il desiderio di cercarla ancora, dopo averla trovata."),
                                array('','',"Soccorri gli orfani, le vedove, gli emarginati,"),
                                array('-','',"fa' che ti sentano vicino nella necessità e nella sventura."),
                                array('','',"Accogli i defunti nella Gerusalemme del cielo,"),
                                array('-','',"dove con il Padre e con lo Spirito Santo sarai tutto in tutti.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Lo Spirito rende testimonianza al nostro cuore che il Cristo intercede sempre per noi. Sorretti da questa fede diciamo:"),
                                array('ris','I',"O Dio nostro, ascoltaci.")
                            ),
                            array(
                                array('','',"Cristo, sole di giustizia illumina la tua Chiesa,"),
                                array('-','',"perché annunzi alle genti il grande mistero del Dio fatto uomo per la nostra liberazione."),
                                array('','',"Veglia sui sacerdoti e su tutti i ministri della tua Chiesa,"),
                                array('-','',"la loro vita non sia mai in dissonanza con il Vangelo che proclamano ai fratelli."),
                                array('','',"Tu che ci hai acquisato la pace a prezzo del tuo sangue,"),
                                array('-','',"tieni lontano da noi il male della discordia e il flagello della guerra."),
                                array('','',"Aiuta con l'abbondanza delle tue benedizioni gli sposi cristiani,"),
                                array('-','',"perché esprimano nella loro unione il mistero della tua Chiesa."),
                                array('','',"Libera da ogni peccato i nostri defunti,"),
                                array('-','',"siano eternamente felici nella gloria dei santi.")
                            )
                        );
                    break;
                }
            }
        }

        if ($this->actual['weekDay']==2) {

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Cristo, sommo sacerdote della nostra fede, ci ha resi partecipi di una vocazione santa. Eleviamo a lui la nostra lode e acclamiano:"),
                                array('ris','I',"Signore, nostro Dio e nostro Salvatore.")
                            ),
                            array(
                                array('','',"Re glorioso, che nel Battesimo ci hai rivestiti del sacredozio reale,"),
                                array('-','',"rendici degni di offrirti il sacrificio della lode."),
                                array('','',"Concedici di osservare sempre i tuoi comandamenti,"),
                                array('-','',"perché conla tua grazia rimaniamo in te e tu in noi."),
                                array('','',"Infondi in noi il tuo Spirito,"),
                                array('-','',"la tua sapienza ci assista sempre e operi con noi."),
                                array('','',"Fa' che nessuno oggi sia rattristato per causa nostra,"),
                                array('-','',"e che diveniamo operatori di gioia e di pace.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo il Salvatore, che con la sua risurrezione è divenuto luce e vita del mondo. A lui s'innalzi la nostra umile preghiera:"),
                                array('ris','I',"Guidaci, Signore, nelle tue vie.")
                            ),
                            array(
                                array('','',"Con la lode mattutina celebriamo la tua risurrezione, Signore,"),
                                array('-','',"la speranza della tua gloria illumini la nostra giornata."),
                                array('','',"Benedici le nostre aspirazioni e i nostri propositi,"),
                                array('-','',"siano le primizie della nostra offerta."),
                                array('','',"Fa' che oggi cresciamo nel tuo amore,"),
                                array('-','',"e tutto cooperi al bene nostro e di tutti."),
                                array('','',"Fa' che la nostra luce splenda davanti agli uomini,"),
                                array('-','',"perché vedano le nostre opere buone e glorifichino il Padre che è nei cieli.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Adoriamo il Cristo che con il suo sangue, versato sulla croce, ha fatto di noi un popolo nuovo e supplichiamo:"),
                                array('ris','I',"Ricordati del tuo popolo, o Signore.")
                            ),
                            array(
                                array('','',"Cristo re e salvatore, accogli la lode della tua Chiesa all'alba del nuovo giorno,"),
                                array('-','',"insegnale ad unirsi a te in perenne rendimento di grazie."),
                                array('','',"In te poniamo ogni speranza,"),
                                array('-','',"il tuo amore non lasci deluse le nostre attese."),
                                array('','',"Guarda la nostra debolezza e vieni in nostro aiuto,"),
                                array('-','',"perché nulla possiamo senza di te."),
                                array('','',"Non dimenticare i poveri e coloro che vivono nella solitudine e nell'abbandono,"),
                                array('-','',"il nuovo giorno non li opprima sotto il peso della tristezza, ma rechi loro gioia e consolazione.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"In questo nuovo giorno il Signore, donandoci la grazia di cantare le sue lodi, rafforza la speranza che esaudirà la nostra preghiera. Uniti ai fratelli di fede diciamo:"),
                                array('ris','I',"Ascoltaci, Signore, a gloria del tuo nome.")
                            ),
                            array(
                                array('','',"Ti rendiamo grazie, o Dio e Padre d Gesù nostro Salvatore,"),
                                array('-','',"per la conoscenza e la vita immortale che ci hai dato per mezzo del tuo Figlio."),
                                array('','',"Donaci l'umiltà del cuore,"),
                                array('-','',"perché ci rendiamo disponibili all'aiuto fraterno nel timore di Cristo."),
                                array('','',"Manda su di noi il tuo Spirito,"),
                                array('-','',"perché la nostra carità sia autentica e senza ipocrisia."),
                                array('','',"Tu che hai comandato all'uomo il lavoro per dominare il mondo,"),
                                array('-','',"fa' che il nostro lavoro ti glorifichi e santifichi i nostri fratelli.")
                            )
                        );
                    break;
                }
            }
            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Preghiamo Cristo Signore nostro, sempre presente in mezzo al popolo, che si è acquistato a prezzo del suo sangue:"),
                                array('ris','I',"Ascoltaci, Signore, a gloria del tuo nome.")
                            ),
                            array(
                                array('','',"Re delle genti, illumina i popoli e coloro che li guidano,"),
                                array('-','',"perché operino concordamente al bene comune nello spirito del Vangelo."),
                                array('','',"Tu che hai spezzato le antiche catene,"),
                                array('-','',"libera i redenti da ogni forma di schiavitù."),
                                array('','',"Fa' che i nostri giovani si impegnino al servizio del bene,"),
                                array('-','',"corrispondano generosamente alle esigenze della vocazione cristiana."),
                                array('','',"Fa' che la vita dei fanciulli sia modellata sulla tua:"),
                                array('-','',"crescano in sapienza e grazia davanti a Dio e agli uomini."),
                                array('','',"Accogli i nostri fratelli defunti nella pace della tua dimora,"),
                                array('-','',"dove un giorno speriamo di ritrovarci per regnare con te.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Uniti nella liturgia di lode, supplichiamo il Cristo, pastore e guida delle anime, che ama e protegge la sua Chiesa:"),
                                array('ris','I',"Salva il tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Custodisci, Pastore eterno, il nostro vescovo ... ,"),
                                array('-','',"e tutti i pastori della tua Chiaesa."),
                                array('','',"Guarda con amore i nostri fratelli perseguitati ed oppressi,"),
                                array('-','',"affrettati a liberarli dalle loro pene."),
                                array('','',"Provvedi a tutti i poveri del mondo,"),
                                array('-','',"fa' che a nessuno manchi il pane, la casa e il lavoro."),
                                array('','',"Illumina con la tua sapienza le assemblee legislative,"),
                                array('-','',"perché facciano leggi giuste e sagge."),
                                array('','',"Ricordati dei defunti che hai redento a prezzo del tuo sangue,"),
                                array('-','',"ammettili al banchetto delle nozze eterne.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Dio ha costituito il suo popolo sul fondamento della speranza. Con animo lieto e riconoscente acclamiamo:"),
                                array('ris','I',"Tu sei la nostra speranza, Signore.")
                            ),
                            array(
                                array('','',"Ti rendiamo grazie, Padre, perché ci hai donato il tuo Figlio,"),
                                array('-','',"in lui ci hai colmato delle ricchezze della tua parola e della tua scienza."),
                                array('','',"O Dio, che hai in mano i cuori e le intelligenze di tutti gli uomini,"),
                                array('-','',"Illumina i governanti perché ispirino le intenzioni e le opere alla sapienza del Vangelo."),
                                array('','',"Agli artisti affidi la missione di rivlerare lo splendore del tuo volto,"),
                                array('-','',"fa' che le loro opere portino all'umanità un messaggio di pace e di speranza."),
                                array('','',"Sei giusto e non permetti che siamo tentati al di sopra delle nostre forze,"),
                                array('-','',"aiuta i deboli, sostieni i vacillanti, rialza i caduti."),
                                array('','',"Nel Cristo, tuo Figlio, ci hai dato la certezza della risurrezione nell'ultimo giorno,"),
                                array('-','',"accogli nella tua casa i nostri fratelli defunti.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Acclamiamo e invochiamo il Cristo che dà forza e vigore al suo popolo:"),
                                array('ris','I',"Nella tua grande bontà ascoltaci, o Signore.")
                            ),
                            array(
                                array('','',"Cristo, sorgente inesauribile di fortezza,"),
                                array('-','',"sostieni la nostra fede in mezzo alle prove della vita."),
                                array('','',"Illumina e guida con il tuo Spirito i legislatori e i governanti,"),
                                array('-','',"perché promuovano costantemente la giustizia e la pace."),
                                array('','',"Tu che ha sfamato le folle nel deserto,"),
                                array('-','',"insegnaci a condividere le nostre risorse con chi è privo del necessario."),
                                array('','',"Fa' che gli uomini politici non si chiudano nella ricerca egoistica del benessere e del prestigio nazionale,"),
                                array('-','',"ma abbiano a cuore il progresso e l'ascesa di tutti i popoli."),
                                array('','',"Dona vita e risurrezione ai nostri fratelli defunti,"),
                                array('-','',"quando verrai per essere glorificato in tutti i credenti.")
                            )
                        );
                    break;
                }
            }
        }

        if ($this->actual['weekDay']==3) {

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Ringraziamo il Cristo redentore, che si compiace di chiamare fratelli coloro che ha santificato con il suo Spirito e invochiamo:"),
                                array('ris','I',"Conferma nella fede i tuoi fratelli, o Signore.")
                            ),
                            array(
                                array('','',"Benedici questo giorno, che iniziamo nel ricordo della tua risurrezione,"),
                                array('-','',"fa' che sia pieno di opere sante al servizio del tuo amore."),
                                array('','',"Tu che disponi i nostri giorni ad un fine di salvezza e di gioia,"),
                                array('-','',"rinnova oggi il nostro essere e il nosro operare a lode della tua gloria."),
                                array('','',"Insegnaci a riconoscerti in tutti gli uomini,"),
                                array('-','',"e soprattutto nei poveri e sofferenti."),
                                array('','',"Donaci di vivere in pace con tutti,"),
                                array('-','',"e di non rendere a nessuno male per male.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Lodiamo il Cristo, che ha promesso di rimanere con noi tutti i giorni sino alla fine dei secoli e rivolgiamogli la nostra preghiera:"),
                                array('ris','I',"Resta con noi, Signore.")
                            ),
                            array(
                                array('','',"Resta con noi, Singore, durante quaesto giorno,"),
                                array('-','',"non tramonti mai nel nostro spirito il sole della tua grazia."),
                                array('','',"Ti offriamo, Signore, le azioni e le sofferenze di questa giornata,"),
                                array('-','',"promettiamo di servirti sempre con cuore puro e leale."),
                                array('','',"Fa' che viviamo il tempo che ci dai, come un dono della tua bontà,"),
                                array('-','',"per divenire il sale della terra e la luce del mondo."),
                                array('','',"Il tuo Spirito orienti i nostri pensieri e le nmostre parole,"),
                                array('-','',"perché rimaniamo sempre nel tuo amore e nella tua lode.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Riuniti nella lode del mattino, preghiamo il Cristo, che ha dato la vita per la sua Chiesa. Diciamo con fede:"),
                                array('ris','I',"Custodisci la tua Chiesa, o Signore.")
                            ),
                            array(
                                array('','',"Benedetto sii tu, pastore della Chioesa, per la luce e la vita che ci doni in questo giorno,"),
                                array('-','',"concedici di accogliere con gioia e riconoscenza i tuoi benefici."),
                                array('','',"Guarda con bontà il popolo che hai riunito nel tuo nome,"),
                                array('-','',"nessuno perisca di coloro che il Padre ti ha affidati."),
                                array('','',"Guida la tua Chiesa nella via dei tuoi comandamenti,"),
                                array('-','',"il tuo Spirito la renda sempre docile alla tua volontà."),
                                array('','',"Nutri il tuo popolo alla mensa della parola e del pane di vita eterna,"),
                                array('-','',"perché con la forza di questo cibo proceda sicuro verso il monte della tua gloria.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Cristo, splendore della gloria del Padre, è presente in mezzo a noi e ci illumina con la sua parola. Invochiamolo con fiducia e amore:"),
                                array('ris','I',"Re dell'eterna gloria, ascolta la nostra preghiera.")
                            ),
                            array(
                                array('','',"Benedetto sii tu che ci hai chiamato dalle tenebre alla luce del tuo regno,"),
                                array('-','',"compi in noi l'opera che hai iniziato e guidaci alla pienezza della fede."),
                                array('','',"Tu che hai aperto gli occhi ai ciechi e hai dato l'udito ai sordi,"),
                                array('-','',"guarisci la nostra incredulità."),
                                array('','',"Concedi a noi di rimanere sempre nel tuo amore,"),
                                array('-','',"per non essere divisi gli uni dagli altri."),
                                array('','',"Donaci fortezza nella tentazione e costanza nella prova,"),
                                array('-','',"e fa' che ti rendiamo grazie nella prosperità.")
                            )
                        );
                    break;
                }
            }
            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Sia glorificato il nome di Dio Padre, che ha concesso la salvezza al suo popolo e lo circonda di un amore senza limiti. A lui rivolgiamo con fede la nostra preghiera:"),
                                array('ris','I',"Mostraci, Signore, la tua misericordia.")
                            ),
                            array(
                                array('','',"Ricordati, Signore, della tua Chiesa,"),
                                array('-','',"preservala da ogni male e rendila perfetta nel tuo amore."),
                                array('','',"Fa' che tutte le genti conoscano te, unico vero Dio,"),
                                array('-','',"e colui che ha mandato, Gesù Cristo tuo Figlio."),
                                array('','',"Concedi ai nostri parenti ed amici prosperità e salute,"),
                                array('-','',"fa' che godano della tua benedizione sulla terra e nel cielo."),
                                array('','',"Conforta coloro che sono oppressi dalla fatica e dal dolore,"),
                                array('-','',"difendi la dignità dei poveri e degli esclusi."),
                                array('','',"Apri le braccia della tua misericordia ai morti di questo giorno,"),
                                array('-','',"accogli le loro anime nella pace del tuo regno.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Lieti e riconoscenti, preghiamo Dio nosgtro Padre, che gode nel dispensare i suoi benefici:"),
                                array('ris','I',"Colma di grazia e di pace il tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Dio eterno, mille anni per te sono come il giorno che è passato,"),
                                array('-','',"fa' che non dimentichiamo che la nostra vita è come il fiore del campo che spunta al mattino e avvizzisce la sera."),
                                array('','',"Concedi al popolo cristiano la tua manna, perché non muoia di fame,"),
                                array('-','',"e l'acqua via, perché non soffra di sete inestinguibile."),
                                array('','',"Fa' che non perdiamo mai la fede e il senso cristiano della vita,"),
                                array('-','',"perché il nostro tempo, nella fatica e nel riposo, sia tutto orientato alla tua gloria."),
                                array('','',"Concedi a noi una stagione favorevole,"),
                                array('-','',"la terra produca un raccolto abbondante."),
                                array('','',"Dona ai defunti la visione del tuo volto,"),
                                array('-','',"fa' che un giorno possiamo godere con loro la gloria dei beati.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Innalziamo la nostra preghiera a Dio Padre, che ci ha mandato il proprio Figlio, modello e salvatore del suo popolo:"),
                                array('ris','I',"Continua i benefici della tua bontà, o Signore.")
                            ),
                            array(
                                array('','',"Ti rendiamo grazie, o Padre, perché ci hai eletti dall'eternità a far parte del tuo regno,"),
                                array('-','',"e ci hai chiamati a possedere la gloria di Gesù Cristo, nostra primizia."),
                                array('','',"Concedi a coloro che confessano il tuo santo nome la concordia nella verità,"),
                                array('-','',"e la solidarietà nel tuo amore."),
                                array('','',"Creatore dell'universo, il tuo Figlio ha voluto lavorare come artigiano nella casa di Nazareth,"),
                                array('-','',"benedici chi si guadagna il pane con il sudore della fronte."),
                                array('','',"Ricordati di coloro che sono consacrati al servizio dei fratelli,"),
                                array('-','',"perché l'insuccesso o l'incomprensione non li distolgano mai dal loro proposito."),
                                array('','',"Ti preghiamo, o Signore, per i nostri fratelli defunti,"),
                                array('-','',"apri loro le braccia della tua misericordia.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"La misericordia di Dio Padre verso il suo popolo supera la grandezza della terra e dei cieli. Mostriamoci grati a tanto amore e acclamiano:"),
                                array('ris','I',"Si rallegrino quanti sperano in te, Signore.")
                            ),
                            array(
                                array('','',"Signore, hai mandato il tuo Figlio non per giudicare, ma per salvare il mondo,"),
                                array('-','',"fa' che la sua croce porti a noi frutti di vita eterna."),
                                array('','',"Hai costituito i sacerdoti ministri del Cristo e dispensatori dei tuoi misteri,"),
                                array('-','',"concedi loro fedeltà, scienza e carità."),
                                array('','',"Benedici coloro che hai chiamato alla castità perfetta per il regno dei cieli,"),
                                array('-','',"seguano il Cristo tuo Figlio con la generosità dei santi."),
                                array('','',"Tu che hai creato l'uomo e la donna,"),
                                array('-','',"fa' di ogni famiglia una vera comunità fondata sull'amore sincero."),
                                array('','',"Hai distrutto le nostre colpe mediante il sacrificio del tuo Figlio,"),
                                array('-','',"concedi ai defunti il perdono e la pace.")
                            )
                        );
                    break;
                }
            }
        }
        if ($this->actual['weekDay']==4) {

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie al Signore che ci dona la luce di un nuovo giorno e invochiamo la sua benedizione:"),
                                array('ris','I',"Signore benedici e santifica la tua Chiesa.")
                            ),
                            array(
                                array('','',"Ti sei fatto vittima per i nostri peccati,"),
                                array('-','',"gradisci l'offerta dei nostri propositi e delle iniziative di questo giorno."),
                                array('','',"Tu allieti i nostri occhi con le meraviglie del creto,"),
                                array('-','',"sorgi anche nel nostro spirito come sole di giustizia e di verità."),
                                array('','',"Donaci un cuore generoso,"),
                                array('-','',"perché diventiamo segno e testimonianza della tua bontà."),
                                array('','',"Fa' che sperimentiamo fin da questa mattina la tua misericordia,"),
                                array('-','',"e la gioia che tu dai ai tuoi amici sia la nostra fortezza.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Con la libertà dei figli invochiamo Dio Padre che ci ama e ascolta le nostre preghiere:"),
                                array('ris','I',"Illumina i nostri occhi, Signore.")
                            ),
                            array(
                                array('','',"Ti ringraziamo di averci illuminati con lo Spirito che procede da te e dal Figlio tuo,"),
                                array('-','',"fa' che ci saziamo della sua luce per tutta la lunghezza di questa giornata."),
                                array('','',"La sua sapienza ci prenda per mano,"),
                                array('-','',"perché camminiamo nella via della vita."),
                                array('','',"Insegnaci ad affrontare coraggiosamente ogni avversità,"),
                                array('-','',"per servirti sempre con animo generoso."),
                                array('','',"Sii tu l'ispiratore dei nostri pensieri e delle nostre azioni,"),
                                array('-','',"perché collaboriamo docilmente con la tua Provvidenza.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie a Dio che nutre e guida il suo popolo. Uniti nella preghiera del mattino, acclamiamo:"),
                                array('ris','I',"Gloria a te nei secoli, Signore.")
                            ),
                            array(
                                array('','',"Padre clementissimo, ti benediciamo per il tuo immenso amore,"),
                                array('-','',"che risplende nella creazione e ancor più visibilmente nella redenzione."),
                                array('','',"Fin dall'inizio di questo giorno ispiraci il desiderio di servirti,"),
                                array('-','',"perché nei pensieri e nelle opere glorifichiamo sempre il tuo santo nome."),
                                array('','',"Purifica i nostri cuori da ogni desiderio di male,"),
                                array('-','',"perché siamo costantemente orientati alla tua volontà."),
                                array('','',"Apri il nostro cuore alle necessità dei fratelli,"),
                                array('-','',"perché incontrandoci non ci trovino freddi e senza amore verso di loro.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Uniti nella lode divina acclamiamo Dio nostro Padre, che ha salvato il suo popolo e diciamo con fede:"),
                                array('ris','I',"Tu sei la nostra vita, Signore.")
                            ),
                            array(
                                array('','',"Benedetto sii tu, o Padre del Signore nostro Gesù Cristo,"),
                                array('-','',"che ci hai rigenerto a una speranza viva mediante la risurrezione del tuo Figlio."),
                                array('','',"Nel Cristo hai rinnovato l'uomo, creato a tua immagine,"),
                                array('-','',"rendici conformi all'immagine del tuo Figlio."),
                                array('','',"Guarisci l'umanità ferita dall'invidia e dall'odio,"),
                                array('-','',"trasformaci cona la carità che è dono dello Spirito."),
                                array('','',"Da' il lavoro agli operai, il pane agli affamati, agli afflitti la gioia,"),
                                array('-','',"a tutti gli uomini la grazia e la salvezza.")
                            )
                        );
                    break;
                }
            }
            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Preghiamo Dio, fondamento di tuta la nostra speranza:"),
                                array('ris','I',"Benedici i tuoi figli, o Signore.")
                            ),
                            array(
                                array('','',"Signore, nostro Dio, che hai stabilito con il tuo popolo un'alleanza eterna,"),
                                array('-','',"fa' che ricordiamo sempre le grandi opere del tuo amore."),
                                array('','',"Conferma nella carità tutto l'ordine sacerdotale,"),
                                array('-','',"raccogli i tuoi fedeli nell'unità dello Spirito mediante il vincolo della pace."),
                                array('','',"Aiutaci a costruire insieme con te la nostra città terrena,"),
                                array('-','',"perché non fatichiamo invano."),
                                array('','',"Manda operai nella tua messe,"),
                                array('-','',"perché sia glorificato il tuo nome fra tutte le genti."),
                                array('','',"Accogli fra i tuoi santi i nostri parenti e benefattori defunti,"),
                                array('-','',"ammetti un giorno acnhe noi nella gioia eterna.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Ricordiamo con gioia che il nostro Salvatore ha benedetto il suo popolo con ogni benedizione spirituale e pieni di speranza chiediamo:"),
                                array('ris','I',"Benedici la tua Chiesa, Signore.")
                            ),
                            array(
                                array('','',"Custodisci, Dio misericordioso, il nostro papa ... e il nostro vescovo ... ,"),
                                array('-','',"dona loro serenità e salute."),
                                array('','',"Proteggi il nostro paese,"),
                                array('-','',"fa' che progredisca nella giustizia e nella pace."),
                                array('','',"Convoca i tuoi figli intorno alla tua mensa,"),
                                array('-','',"fa' che anime buone e generose ti seguano nella via della castità, povertà e obbedienza."),
                                array('','',"Conferma nel santo proposito le vergini a te consacrate,"),
                                array('-','',"perché ti servano con animo ardente e fedele."),
                                array('','',"Dona il riposo eterno ai nostri defunti,"),
                                array('-','',"fa' che li sentiamo vicini a noi nella comunione dei santi.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"A Cristo, buon pastore, aiuto, guida e conforto del suo popolo, rivolgiamo con fede la nostra preghiera:"),
                                array('ris','I',"Signore, nostro rifugio e nostra forza, ascoltaci.")
                            ),
                            array(
                                array('','',"Benedetto sii tu, Signore, che ci hai chiamati a far parte della tua famiglia,"),
                                array('-','',"conservaci sempre membra vive della tua santa Chiesa."),
                                array('','',"Tu che hai affidato al nostro papa ... la cura pastorale di tutte le Chiese,"),
                                array('-','',"donagli fede indefettibile, speranza viva, carità apostolica."),
                                array('','',"Dona forza di risorgere a quanti hanno abbandonato la fede,"),
                                array('-','',"concedi a tutti il perdono e la pace."),
                                array('','',"Tu che hai conosciuto l'amarezza dell'esilio,"),
                                array('-','',"ricordati di quanti vivono lontani dalla famiglia e dalla patria."),
                                array('','',"A tutti i defunti che hanno sperato in te,"),
                                array('-','',"dona la luce e la pace eterna.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo il Cristo, luce dei popoli e gioia di tutti i viventi e acclamiamo:"),
                                array('ris','I',"Tu sei la nostra vita, Signore.")
                            ),
                            array(
                                array('','',"Luce che non conosce tramonto, Verbo eterno del Padre, Salvatore del mondo,"),
                                array('-','',"illumina i passi dei catecumeni sulla via della verità."),
                                array('','',"Sei l'amore che perdona,"),
                                array('-','',"dimentica le nostre iniquità."),
                                array('','',"Hai dato all'uomo l'intelligenza per esplorare i segreti della natura e per utilizzare le energie del cosmo,"),
                                array('-','',"guida la scienza e la tecnica sulle vie del vero bene dell'umanità per la gloria del tuo nome."),
                                array('','',"Proteggi quanti si sono consacrati al serizio dei fratelli,"),
                                array('-','',"fa' che compiano la loro missione nella libertà e nella pace."),
                                array('','',"Signore, che hai le chiavi della vita e della morte,"),
                                array('-','',"prendi con te nella luce della tua dimora i nostri fratelli defunti.")
                            )
                        );
                    break;
                }
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
                                "o dio, splende una luce perenne e una vita senza fine, alleluia."
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
                                "o dio, splende una luce perenne e una vita senza fine, alleluia."
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
                            "il mattino di Pasqua, Gesù apparve prima a Maria Maddalena, alleuia."
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


    //////////////////////////////////////////////////////////////////////////

    function draw() {

        foreach ($this->testo as $k=>$b) {
            $this->res->addBlock($b);
        }

        echo '<div class="salResBlockTitle" style="margin-top:30px;">';
            echo 'Invocazioni';
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            if ($this->res) {
                echo $this->res->draw();
            }
        echo '</div>';
    }

}

?>