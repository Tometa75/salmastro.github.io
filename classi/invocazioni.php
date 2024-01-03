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
                                array('','',"Tu allieti i nostri occhi con le meraviglie del creato,"),
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
        if ($this->actual['weekDay']==5) {

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Invochiamo con fede il Cristo, che con la sua santa croce ha redento il mondo:"),
                                array('ris','I',"Mostraci, Signore, la tua misericordia.")
                            ),
                            array(
                                array('','',"O Cristo, sole di giustizia, illumina la nostra vita,"),
                                array('-','',"allontana da noi le oscure suggestioni del male."),
                                array('','',"Ispira i pensieri, le parole e le opere,"),
                                array('-','',"perché in questo giorno possiamo essere graditi alla tua volontà."),
                                array('','',"Distogli lo sguardo dai nostri peccati,"),
                                array('-','',"cancella tutte le nostre colpe."),
                                array('','',"Per la tua croce e la tua risurrezione,"),
                                array('-','',"riempi i nostri cuori della consolazione dello Spirito Santo.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Cristo, Agnello senza macchia, si è offerto al Padre per purificare le ostre coscienze dalle opere del male. A lui diciamo umilmente:"),
                                array('ris','I',"Nella tua volontà è la nostra pace, o Signore.")
                            ),
                            array(
                                array('','',"Dalla tua bontà abbiamo ricevuto questo nuovo giorno,"),
                                array('-','',"fa' che segni l'inizio di una vita nuova."),
                                array('','',"Hai creato il mondo e lo conservi con la tua provvidenza,"),
                                array('-','',"donaci uno sguardo di fede, perché vediamo la tua presenza in ogni cretura."),
                                array('','',"Nel tuo sangue, versato per noi, hai costituito la nuova ed eterna alleanza,"),
                                array('-','',"fa' che osservando la legge dell'amore, restiamo fedeli al tuo patto."),
                                array('','',"Sulla croce hai fatto sgorgare dal tuo costato sangue ed acqua,"),
                                array('-','',"in questo fiume di grazia lava le nostre colpe e allieta la città di Dio.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Volgiamo il nostro sguardo al Cristo, nato, morto e risorto per la nostra salvezza, e diciamo con fiducia:"),
                                array('ris','I',"Salva il tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Benedetto sii tu, o Gesù Salvatore del mondo, che non hai ricusato di subire la passione e la croce per noi,"),
                                array('-','',"e ci hai redenti con il tuo sangue prezioso."),
                                array('','',"Tu che hai promesso fiumi di acqua viva a quanti credono in te,"),
                                array('-','',"effondi il tuo Spirito sull'umanità intera."),
                                array('','',"Hai inviato i tuoi discepoli ad evangelizzare le genti,"),
                                array('-','',"sostieni i missonari del Vangelo perché si estenda in ogni luogo la vittoria della croce."),
                                array('','',"Rivolgi il tuo sguardo di bontà ai malati e ai sofferenti che hai associato alla tua croce,"),
                                array('-','',"sentano il conforto della tua presenza.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Invochiamo la provvidenza del Padre, che veglia su coloro che ha creati e redenti per mezzo del suo Figlio e diciamo:"),
                                array('ris','I',"Conferma ciò che hai operato in noi, Signore.")
                            ),
                            array(
                                array('','',"Dio di misericordia, guidaci sulla via della santità,"),
                                array('-','',"perché cerchiamo sempre ciò che è vero, buono e giusto."),
                                array('','',"Non abbandonarci, o Dio, per il tuo grande amore,"),
                                array('-','',"non dimenticare la tua alleanza."),
                                array('','',"Accogli l'offerta del nostro cuore contrito e umiliato,"),
                                array('-','',"fa' che non siano confusi quelli che si affidano a te."),
                                array('','',"Tu che ci hai resi parecipi della missione profetica del Cristo,"),
                                array('-','',"fa' che annunziamo con le parole e le opere le meraviglie del tuo amore.")
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
                                array('','',"Benedetto Dio, che esaudise i poveri e gli umili e li colma dei suoi beni. A lui rivolgiamo con fede la nostra supplica:"),
                                array('ris','I',"Mostraci, o Padre, la tua misericordia.")
                            ),
                            array(
                                array('','',"Solleva, o Padre tenerissimo, le membra doloranti della tua Chiesa,"),
                                array('-','',"per il sangue di Cristo che consumò il suo sacrificio vespertino sospeso sulla croce."),
                                array('','',"Libera gli oppressi, illumina i ciechi,"),
                                array('-','',"soccorri gli orfani e le vedove."),
                                array('','',"Rivestici della tua armatura,"),
                                array('-','',"perché possiamo resistere agli assalti del maligno."),
                                array('','',"Assisti i tuoi figli, o Signore pietoso, nel momento della morte,"),
                                array('-','',"siano trovati fedeli e partano nella tua grazia da questo mondo."),
                                array('','',"Accogli nella luce della tua dimora i nostri defunti,"),
                                array('-','',"perché possano contemplare in eterno il tuo volto.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Benediciamo Cristo, pastore buono e misericordioso, che ha asciugato le lacrime dei poferi e dei sofferenti. Raccolti nella comune preghiera, invochiamolo:"),
                                array('ris','I',"Pietà del tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Cristo Signore, che consoli gli umili,"),
                                array('-','',"poni dinanzi ai tuoi occhi le lacrime dei poveri."),
                                array('','',"Raccogli, Signore, il gemito dei morenti,"),
                                array('-','',"il tuo santo angelo li visiti e li conforti."),
                                array('','',"I profughi e gli esiliati possano sperimentare la tua provvidenza,"),
                                array('-','',"fa' che ritornino felicemente alla loro patria e siano un giorno cittadini della Gerusalemme celeste."),
                                array('','',"Vinci con il tuo amore coloro che vivono nel peccato,"),
                                array('-','',"fa' che si riconcilino con te e con la tua Chiesa."),
                                array('','',"Accogli nella tua pace i nostri defunti,"),
                                array('-','',"perché godano pienamente i frutti della redenzione.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Nel misterioso disegno della sapienza divina, il Signore Gesù fu consegnato alla morte per i nostri peccati ed è risorto per la nostra santificazione. Adoriamo il nostro Salvatore e con umile fiducia invochiamolo:"),
                                array('ris',"Abbi pietà del tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Esaudisci, Signore, le nostre suppliche e cancella le nostre colpe,"),
                                array('-','',"donaci il perdono e la pace."),
                                array('','',"Tu che per bocca dell'Apostolo hai detto: Dove ha abbondatoil delitto, ha sovrabbondato la grazia,"),
                                array('-','',"lava i nostri innumerevoli peccati nel torrente della tua bontà."),
                                array('','',"Abbiamo molto peccato, Signore, ma confessiamo la tua misericordia senza limiti,"),
                                array('-','',"convertici e la nostra vita sarà trasformata."),
                                array('','',"Preserva il tuo popolo dall'infedeltà all'alleanza,"),
                                array('-','',"perché goda sempre i favori della tua amicizia."),
                                array('','',"Hai aperto il Paradiso al ladrone pentito,"),
                                array('-','',"accogli nella tua casa i nostri fratelli defunti.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Benediciamo il Cristo, principio e fondamento della nostra speranza, e invochiamo il suo nome:"),
                                array('ris','I',"Signore, abbi pietà di noi.")
                            ),
                            array(
                                array('','',"Cristo, guarda la nostra debolezza che ci inclina a cedere,"),
                                array('-','',"sostienici con la tua grazia."),
                                array('','',"Tu conosci quanto è forte per noi la suggestione del male,"),
                                array('-','',"guarisci le nostre anime con la larghezza del tuo perdono."),
                                array('','',"Tu che sei offeso dal peccato e placato dalla penitenza,"),
                                array('-','',"allontana i flagelli della tua ira , che meritiamo a causa delle nostre colpe."),
                                array('','',"Hai perdonato la peccatrice e hai preso sulle tue spalle la pecorella smarrita,"),
                                array('-','',"non privarci mai della tua misericordia."),
                                array('','',"Ci hai aperto le porte del cielo mediante la tua croce,"),
                                array('-','',"accogli in Paradiso tutti coloro che hanno sperato in te.")
                            )
                        );
                    break;
                }
            }
        }
        if ($this->actual['weekDay']==6) {

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Benediciamo il Cristo, che ha voluto farsi in tutto simile ai fratelli, per divenire un sommo sacerdote misericordioso e fedele presso il Padre. A lui rivolgiamo la nostra comune preghiera:"),
                                array('ris','I',"Aprici, Signore, i tesori della tua misericordia.")
                            ),
                            array(
                                array('','',"O sole di giustizia, che ci hai illuminati nel Battesimo,"),
                                array('-','',"sia consacrato a te questo nuovo giorno."),
                                array('','',"In ogni ora proclameremo la tua lode,"),
                                array('-','',"glorificheremo il tuo nome in ogni avvenimento."),
                                array('','',"Tu che avesti come madre Maria, docile alla divina parola,"),
                                array('-','',"guida i nostri passi alla luce del tuo Vangelo."),
                                array('','',"Ravviva in noi, pellegrini sulla terra, l'attesa sicura della vita immortale,"),
                                array('-','',"fa' che pregustiamo fin d'ora la tua beatitudine.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Cristo è presente nelle sue membra, specialmente nei poveri e nei sofferenti. Celebriamo la sua bontà e preghiamo con fede per crescere nel suo amore:"),
                                array('ris','I',"Rendici perfetti nella carità, Signore.")
                            ),
                            array(
                                array('','',"Iniziamo questo nuovo giorno nel ricordo della tua risurrezione,"),
                                array('-','',"estendi a tutti gli uomini, Signore, i benefici della tua salvezza."),
                                array('','',"Fa' che oggi ti rendiamo testimonianza davanti agli uomini,"),
                                array('-','',"per essere degni di unirci all'offerta del tuo sacrificio."),
                                array('','',"Aiutaci a riconoscere il tuo volto nei nostri fratelli,"),
                                array('-','',"e a servirti in ciascuno di essi."),
                                array('','',"Tu che ci unisci a te come tralci alla vite,"),
                                array('-','',"fa' che rimaniamo nel tuo amore, per portare molto frutto a gloria di Dio Padre.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Dio Padre ha voluto innalzare Maria, Madre di Cristo, al di sopra di tutte le creature angeliche e terrestri. Fiduciosi nella sua intercessione, preghiamo:"),
                                array('ris','I',"Guarda la Madre del tuo Figlio e ascoltaci.")
                            ),
                            array(
                                array('','',"Ti rendiamo grazie, Padre immensamente buono, che ci hai dato Maria come madre e modello di vita cristiana,"),
                                array('-','',"per sua intercessione guidaci sulla via della santità."),
                                array('','',"Tu che hai reso Maria attenta alla tua parola e l'hai fatta tua fedele ancella,"),
                                array('-','',"per sua intercessione rendici discepoli e servitori del Figlio tuo."),
                                array('','',"Tu che hai dato a Maria il privilegio di essere madre per opera dello Spirito Santo,"),
                                array('-','',"per sua intercessione concedi a noi i frutti del tuo Spirito."),
                                array('','',"Tu che hai reso intrepida la Vergine Maria presso la croce del tuo Figlio e l'hai rallegrata con l'immensa gioia della risurrezione,"),
                                array('-','',"per sua intercessione consola le nostre pene e ravviva la nostra speranza.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Adoriamo Dio Padre, che nel Cristo, suo Figlio, ha ridato al mondo la speranza e la vita. Animati da questa certezza, diciamo:"),
                                array('ris','I',"Signore, ascolta la nostra preghiera.")
                            ),
                            array(
                                array('','',"Dio, Padre di tutti, che ci hai fatto giungere all'alba del nuovo giorno,"),
                                array('-','',"fa' che viviamo nell'amore del Cristo a lode e gloria del tuo nome."),
                                array('','',"Rafforza in noi la fede, la speranza e la carità,"),
                                array('-','',"che lo Spirito Santo ha seminato nei nostri cuori."),
                                array('','',"Il nostro sguardo sia sempre rivolto a te,"),
                                array('-','',"perché rispondiamo prontamente alla tua chiamata."),
                                array('','',"Salvaci dalle insidie e dalle seduzioni del male,"),
                                array('-','',"difendici da ogni pericolo nel cammino verso la patria del cielo.")
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

            if ($this->actual['weekDay']==0) {

                if ($this->actual['quarto']==1 || $this->actual['quarto']==3) {

                    if ($this->actual['ora']=='ves1') {

                        $this->testo=array(
                            array(
                                array('','',"A Cristo, fonte di vera gioia per tutti coloro che lo attendono, innalziamo la nostra preghiera:"),
                                array('ris','I',"Vieni, Signore, non tardare.")
                            ),
                            array(
                                array('','',"Verbo eterno, che sei prima di tutti i tempi,"),
                                array('-','',"vieni a salvare gli uomini del nostro tempo."),
                                array('','',"Creatore dell'universo e di tutti gli esseri che vi abitano,"),
                                array('-','',"vieni a riscattare l'opera delle tue mani."),
                                array('','',"Dio con noi, che hai voluto assumere la nostra natura mortale,"),
                                array('-','',"vieni a liberarci dal dominio della morte."),
                                array('','',"Salvatore, che sei venuto perché gli uomini abbiano la vita e l'abbiano in abbondanza,"),
                                array('-','',"vieni a comunicarci la tua vita divina."),
                                array('','',"Signore glorioso, che chiami tutti gli uomini nella pace del tuo regno,"),
                                array('-','',"fa' risplendere il tuo volto ai nostri fratelli defunti.")
                            )
                        );
                    }

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Invochiamo con fede Dio nostro Padre, che ci da la grazia di celebrare il mistero dell'Avvento:"),
                                array('ris','I',"Mostraci, Signore, la tua misericordia.")
                            ),
                            array(
                                array('','',"Rinnova, o Dio, tutto il nostro essere: spirito, anima e corpo,"),
                                array('-','',"rendici santi e irreprensibili per la venuta del tuo Figlio."),
                                array('','',"Donaci di trascorrere cristianamente questo giorno,"),
                                array('-','',"e di vivere in questo mondo con giustizia e amore."),
                                array('','',"Concedi a tutti gli uomini di essere rivestiti del Signore Gesù Cristo,"),
                                array('-','',"e pieni dello Spirito Santo."),
                                array('','',"Fa' che siamo costantemente vigilanti,"),
                                array('-','',"in attesa della manifestazione gloriosa del tuo Figlio.")
                            )
                        );
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                        $this->testo=array(
                            array(
                                array('','',"Supplichiamo il nostro Redentore Gesù Cristo, che è via, verità e vita:"),
                                array('ris','I',"Vieni, Signore, e resta con noi.")
                            ),
                            array(
                                array('','',"L'arcangelo Gabriele annunziò la tua venuta,"),
                                array('-','',"Figlio dell'Altissimo, vieni e regna sul tuo popolo."),
                                array('','',"Giovanni il precursore sussultò di gioia per te,"),
                                array('-','',"Santo di Dio, vieni e dona la salvezza al mondo intero."),
                                array('','',"Un angelo rivelò i tuo nome a Giuseppe,"),
                                array('-','',"Gesù Salvatore, vieni e libera il tuo popolo."),
                                array('','',"Il vecchio Simeone attese la tua venuta,"),
                                array('-','',"Luce del mondo, vieni e consola l'umanità."),
                                array('','',"Zaccaria predisse la tua visita redentrice,"),
                                array('-','',"illumina quanti sono nelle tenebre e nell'ombra della morte.")
                            )
                        );
                    }
                }

                if ($this->actual['quarto']==2 || $this->actual['quarto']==4) {

                    if ($this->actual['ora']=='ves1') {

                        $this->testo=array(
                            array(
                                array('','',"Innalziamo la comune preghiera a Cristo Salvatore, nato salla Vergine Maria:"),
                                array('ris','I',"Vieni, Signore Gesù.")
                            ),
                            array(
                                array('','',"Figlio di Dio, che vieni come il vero angelo dell'alleanza,"),
                                array('-','',"fa' che il mondo intero ti riconosca e ti accolga."),
                                array('','',"Verbo di Dio, che ti sei fatto nostro fratello,"),
                                array('-','',"libera l'umanità dalle oscure suggestioni del male."),
                                array('','',"Signore della vita, che hai preso su di te la nostra morte,"),
                                array('-','',"fa' che accettiamo dalle tue mani la sofferenza e la morte."),
                                array('','',"Giudice divino, che dai la giusta ricompensa,"),
                                array('-','',"mostraci la misericordia che non conosce limiti."),
                                array('','',"Cristo Signore, morto per noi sul legno della croce,"),
                                array('-','',"dona il riposo eterno a chi è morto a causa dell'odio e della violenza.")
                            )
                        );
                    }

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Uniti nella preghiera della fede, invochiamo Cristo, giudice dei vivi e dei morti:"),
                                array('ris','I',"Vieni, Signore Gesù.")
                            ),
                            array(
                                array('','',"Cristo, che sei venuto a salvare i peccatori,"),
                                array('-','',"difendici dalle insidie del male."),
                                array('','',"Tu che alla fine dei tempi manifesterai la tua potenza e gloria,"),
                                array('-','',"mostraci fin d'ora la grazia che ci salva."),
                                array('','',"La forza dello Spirito Santo ci aiuti a custodire la tua legge,"),
                                array('-','',"nel generoso servizio di Dio e del prossimo."),
                                array('','',"Aiutaci a vivere con sobrietà e amore in questo mondo,"),
                                array('-','',"in attesa della beata speranza e della rivelazione della tua gloria.")
                            )
                        );
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                        $this->testo=array(
                            array(
                                array('','',"Uniamoci alla santa Chiesa, che attende con fede il Cristo suo sposo e acclamiamo:"),
                                array('ris','I',"Vieni, Signore Gesù.")
                            ),
                            array(
                                array('','',"Verbo eterno, che nell'incarnazione hai rivelato al mondo la tua gloria,"),
                                array('-','',"trasformaci con la tua vita divina."),
                                array('','',"Ti sei rivestito della nostra debolezza,"),
                                array('-','',"infondi in noi la forza del tuo amore."),
                                array('','',"Tu che sei venuto povero e umile per redimerci dal peccato,"),
                                array('-','',"accoglici nell'assemblea dei giusti, quando verrai nella gloria."),
                                array('','',"Tu che governi con sapienza e amore le tue creature,"),
                                array('-','',"fa' che tutti gli uomini promuovano il progresso nella libertà e nella pace."),
                                array('','',"Tu che siedi alla destra del Padre,"),
                                array('-','',"allieta con la visione del tuo volto quelli che solo alla fine conobbero l'amore e la speranza.")
                            )
                        );
                    }
                }
            }

            if ($this->actual['weekDay']==1) {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Preghiamo con fiducia Gesù Cristo, Figlio del Dio vivente, perché ci guidi allo splendore della giustizia e della verità:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Luce eterna, che sorgi all'orizzonte del mondo per disperdere le nostre tenebre,"),
                            array('-','',"risveglia in noi la fede e la speranza."),
                            array('','',"Donaci una giornata prospera e serena,"),
                            array('-','',"fa' che viviamo nella luce della tua presenza."),
                            array('','',"Insegnaci a essere miti e premurosi verso tutti,"),
                            array('-','',"per rendere testimonianza al tuo Vangelo."),
                            array('','',"La tua venuta segni l'inizio di un mondo nuovo,"),
                            array('-','',"e inauguri un regno di giustizia e di pace.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Uniti in preghiera con tutti i nostri fratelli sparsi nel mondo, invochiamo con fede il nostro Redentore:"),
                            array('ris','I',"Vieni, Signore, e salvaci.")
                        ),
                        array(
                            array('','',"Cristo, nostra luce e nostra speranza,"),
                            array('-','',"vieni e salva tutti gli uomini, che hai creato e redento."),
                            array('','',"Verbo generato dal Padre nei secoli eterni,"),
                            array('-','',"insegnaci la via che conduce al Padre."),
                            array('','',"Figlio di Dio, fatto uomo per opera dello Spirito Santo,"),
                            array('-','',"rinnova i nostri cuori con l'effusione dei suoi doni."),
                            array('','',"O Salvatore, che hai assunto la nostra natura mortale nel grembo di Maria Vergine,"),
                            array('-','',"rendi tutti gli uomini partecipi della vita immortale."),
                            array('','',"Signore Gesù, ricordati di tutte le generazioni umane che si sono succedute sulla terra e hanno sperato in te,"),
                            array('-','',"ammettile nel tuo regno di salvezza.")
                        )
                    );
                }
            }

            if ($this->actual['weekDay']==2) {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Preghiamo Dio nostro Padre, che stende la sua mano per salvare il suo popolo:"),
                            array('ris','I',"Venga il tuo regno, o Signore.")
                        ),
                        array(
                            array('','',"Signore, fa' che portiamo frutti di vera conversione,"),
                            array('-','',"per accogliere il tuo regno, che è vicino."),
                            array('','',"Prepara nel nostro cuore la via al tuo Verbo che viene,"),
                            array('-','',"perché si riveli in noi la sua gloria."),
                            array('','',"Abbassa i monti dell'orgoglio,"),
                            array('-','',"colma le valli della debolezza e della sfiducia."),
                            array('','',"Abbatti le barriere dell'odio che dividono le nazioni,"),
                            array('-','',"apri la strada alla concordia e alla pace.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Invochiamo il Verbo eterno, che attraverso la sua umanità ha aperto per noi una via nuova e vivente al santuario del cielo:"),
                            array('ris','I',"Vieni e salvaci, o Signore.")
                        ),
                        array(
                            array('','',"Noi ti attendiamo, pieni di speranza,"),
                            array('-','',"vieni, Signore Gesù."),
                            array('','',"In te abbiamo esistenza, energia e vita, o Signore,"),
                            array('-','',"vieni e rivela a tutti gli uomini la tua presenza."),
                            array('','',"Tu che non sei lontano da ciascuno di noi,"),
                            array('-','',"mostrati a coloro che ti cercano con cuore sincero."),
                            array('','',"Padre dei poveri e consolatore degli infelici,"),
                            array('-','',"dona libertà ai prigionieri, conforto ai sofferenti."),
                            array('','',"Tu che sei il Dio della vita,"),
                            array('-','',"concedi la gioia eterna ai nostri fratelli che oggi sono morti sul lavoro.")
                        )
                    );
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

            
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='Q') {

            
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='P') {

            
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='O') {

            if ($this->actual['evCode']=='BAT') {

                
            }

            if ($this->actual['evCode']=='PEN') {

                
            }

            if ($this->actual['evCode']=='TRI') {

                
            }

            if ($this->actual['evCode']=='COD') {

                
            }

            if ($this->actual['evCode']=='SCG') {

                
            }

            if ($this->actual['evCode']=='GRE') {

                
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

                    
                }

                elseif ($f['comune']=='BVM') {

                    
                }

                elseif ($f['comune']=='apostoli') {

                    
                }

                elseif ($f['comune']=='martiri') {

                    
                }

                elseif ($f['comune']=='martire') {

                    
                }

                elseif ($f['comune']=='pastori') {

                    
                }

                elseif ($f['comune']=='dottori') {

                    
                }

                elseif ($f['comune']=='monaci') {

                    
                }

                elseif ($f['comune']=='vergini') {

                    
                }

                elseif ($f['comune']=='santi' || $f['comune']=='religiosi') {

                    
                }

                elseif ($f['comune']=='sante' || $f['comune']=='religiose') {

                    
                }

                elseif ($f['comune']=='DEF') {

                    
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