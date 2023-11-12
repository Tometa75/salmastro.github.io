<?php

class Lettura {

    protected $actual;
    protected $info=array(
        "titolo"=>"",
        "testo"=>""
    );
    protected $res=array(
        "titolo"=>"Lettura breve ",
        "testo"=>false
    );

    function __construct($caller) {

        //$this->litio=$caller;
        $this->actual=$caller->actual;

        //TEST
        //$this->res['titolo'].=' '.$this->actual['quarto'].' ';
        /////////////

        $this->init();
        $this->build();
    }

    function init() {

        if ($this->actual['weekDay']==0) {
            switch ($this->actual['ora']) {
                case 'ves1': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Rm 11,33-36",
                                "testo"=>"O profondità della ricchezza, della sapienza e della scienza di Dio! Quanto sono imperscrutabili i suoi giudizi e inaccessibili le sue vie! Infatti, chi mai ha potuto conoscere il pensiero del Signore? O chi mai è stato suo consigliere? O chi gli ha dato qualcosa per primo, sì che abbia a ricevere il contraccambio?"
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Col 1,2b-6",
                                "testo"=>"Grazia a voi e pace da Dio, Padre nostro. Noi rendiamo grazie continuamente grazie a Dio, Padre del Signore nostro Gesù Cristo, nelle nostre preghiere per voi, per le notizie ticevute circa la vostra fede in Cristo Gesù, e la crità che avete verso tutti i santi, in vista della speranza che vi attende nei cieli. Di questa speranza voi avete già udito l'annunzio dalla parola di verità del vangelo che è giunto a voi, come pure in tutto il mondo frutttifica e si svilupppa; così anche fra voi dal giorno in cui avete ascoltato e conosciuto la grazia di Dio nella verità."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Eb 13,20-21",
                                "testo"=>"Il Dio della pace che ha fatto tornare dai morti il Pastore grande dela pecore, in virtù del sangue di un'alleanza eterna, il Signore nostro Gesù, vi renda perfetti in ogni bene, perché possiate compiere la sua volontà, operando in voi ciòche a lui è gradito per mezzo di Gesù Cristo, al quale sia gloria nei secoli dei secoli. Amen."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"2Pt 1,19-21",
                                "testo"=>"Abbiamo conferma migliore della parola dei profeti, alla quale fate bene a volgere l'attenzione, come lampada che brilla in un luogo oscuro, finché non spunti il giorno e la stella del mattino si levi nei vostri cuori. Sappiate anzitutto questo: nessuna scrittura profetica va soggetta a privata spiegazione, poiché non da volontà umana fu recata mai una profezia, ma mossi da Spirito Santo parlarono quegli uomini da parte di Dio."
                            );
                        break;
                    }
                break;
                case 'comp1':
                    $this->info=array(
                        "titolo"=>"Dt 6,4-7",
                        "testo"=>"Ascolta, Israele: il Signore è il nostro Dio, il Signore è uno solo. Tu amerai il Signore tuo Dio con tutto il cuore, con tutta l'anima e con tutte le forze. Questi precetti che oggi ti do, ti stiano fissi nel cuore; li ripeterai ai tuoi figli, ne parlerai quando sarai seduto in casa tua, quando camminerai per via, quando ti coricherai e quando ti alzerai."
                    );   
                break;
                case 'lodi': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Ap 7,10-12",
                                "testo"=>"La salvezza appartiene al nostro Dio seduto sul trono e all'Agnello. Amen! Lode, gloria, sapienza, azione di grazie, onore, potenza e forza al nostro Dio nei sceoli dei secoli. Amen."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Ez 36,25-27",
                                "testo"=>"Così dice il Signore: Vi aspergerò con acqua pura e sarete purificati; io vi purificherò da tutte le vostre sozzure e da tutti i vostri idoli; vi darò un cuore nuovo, metterò dentro di voi uno spirito nuovo, toglierò da voi il cuore di pietra e vi darò un cuore di carne. Porrò il mio spirito dentro di voi e vi farò vivere secondo i miei precetti e vi farò osservare e mettere in pratica le mie leggi."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Ez 37,12b-14",
                                "testo"=>"Dice il Signore Dio: Ecco, io apro i vostri seèolcri, vi risuscito dalle vostre tombe, o popolo mio, e vi riconduco nel paese d'Israele. Riconoscerete che io sono il Signore, quando aprirò le vostre tombe e vi risusciterò dai vostri sepolcri, o popolo mio. Farò entrare in voi il mio spirito e rivivrete; vi farò riposare nel vostro paese; saprete che io sono il Signore. L'ho detto e lo farò. Oracolo del Signore Dio."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"2Tm 2, 8. 12-13",
                                "testo"=>"Ricordati che Gesù Cristo, della stirpe di Davide, è risuscitato dai morti. Certa è questa parola: Se moriamo con lui, vivremo anche con lui:se con lui perseveriamo, con lui anche regneremo; se lo rinneghiamo, anch'egli ci rinnegherà; se noi manchiamo di fede, egli però rimane fedele, perché non può rinnegare se stesso."
                            );
                        break;
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"1Gv 4,16",
                                "testo"=>"Noi abbiamo riconosciuto e creduto all'amore che Dio ha per noi. Dio è amore; chi sta nell'amore dimora in Dio e Dio dimora in lui."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Rm 5,1-2.5",
                                "testo"=>"Giustificati per la fede, noi siamo in pace con Dio per mezzo del Signore nostro Gesù Cristo; per suo mezzo abbiamo anche ottenuto, mediante la fede, di accedere a questa grazia nella quale ci troviamo e ci vantiamo nella speranza della gloria di Dio. La speranza poi non delude, perché l'amore di Dio è stato rivelato nei nostri cuori per mezzo dello Spirito Santo che ci è stato dato."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Rm 8,15-16",
                                "testo"=>"Voi non avete ricevuto uno spirito da schiavi per ricadere nella paura, ma avete ricevuto uno spirito da figli adottivi per mezzo del quale gridiamo: « Abbà, Padre! ». Lo Spirito stesso attesta al nostro spirito che siamo figli di Dio."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"1Cor 6,19-20",
                                "testo"=>"Non sapete che il vostro corpo è tempio dello Spirito Santo che è in voi e che avete da Dio, e che non appartenete a voi stessi? Infatti siete stati comprati a caro prezzo. Glorificate dunque Dio nel vostro corpo!"
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Gal 6,7b-8",
                                "testo"=>"Ciascuno raccoglierà quello che avrà seminato. Chi semina nella sua carne, dalla carne raccoglierà corruzione; chi semina nello Spirito, dallo Spirito raccoglierà vita eterna."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Rm 8-26",
                                "testo"=>"Lo Spirito viene in aiuto alla nostra debolezza, perché nemmeno sappiamo che cosa sia conveniente domandare, ma lo Spirito stesso intercede con insistenza per noi, con gemiti inesprimibili."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Rm 8,22-23",
                                "testo"=>"Sappiamo bene che tutta la creazione geme e soffre fino ad oggi nelle doglie del parto; essa non è la sola, ma anche noi, che possediamo le primizie dello Spirito, gemiamo interiormente aspetando l'adozione a figli, la redenzione del nostro corpo."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Dt 10,12",
                                "testo"=>"Che cosa ti chiede il Signore tuo Dio, se non che tu tema il Signore tuo Dio, che tu cammini per tutte le sue vie, che tu l'ami e serva il Signore tuo Dio con tutto il cuore e con tutta l'anima?"
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Gal 6,9-10",
                                "testo"=>"Non stanchiamoci di fare il bene; se infatti non desistiamo, a duo tempo mieteremo. Poiché dunque ne abbiamo l'occasione, operiamo il bene verso tutti, soprattutto verso i fratelli nella fede."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"2Cor 1,21-22",
                                "testo"=>"È Dio stesso che ci conferma, insieme a voi, in Cristo, e ci ha conferito l'unzione, ci ha impresso il sigillo e ci ha dato la caparra dello Spirito nei nostri cuori."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"2Tm 1,9",
                                "testo"=>"Dio ci ha salvati e ci ha chiamati con una vocazione santa, non già in base alle nostre opere, ma secondo il suo proposito e la sua grazia; grazia che ci è stata data in Cristo Gesù fin dall'eternità."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Ct 8,6b-7a",
                                "testo"=>"Forte come la morte è l'amore, tenace come gli inferi è la gelosia: le sua vampe son vampe do fuoco, una fiamma del Signore! Le grandi acque non possono spegnera l'amore né i fiumi travolgerlo."
                            );
                        break;
                    }
                break;
                case 'ves2': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"2Cor 1,3-4",
                                "testo"=>"Sia benedetto Dio, Padre del Signore nostro Gesù Cristo, Padre misericordioso e Dio di ogni consolazione, il quale ci consola in ogni nostra tribolazione perché possiamo anche noi consolare quelli che si trovano in qualsiasi genere di afflizione con la consolazione con cui siamo consolati noi stessi da Dio."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"2Ts 2,13-14",
                                "testo"=>"Noi dobbiamo rendere sempre grazie a Dio per voi, fratelli amati dal Signore, perché Dio vi ha selti come primizia per la salvezza, attraverso l'opera santificatrice dello Spirito e la fede nella verità, chiamandovi a questo con il nostro vangelo, per il possesso della gloria del Signore nostro Gesù Cristo."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"1Pt 1,3-5",
                                "testo"=>"Sia benedetto Dio e Padre del Signore nostro Gesù Cristo: nella sua grande misericordia egli ci ha rigenerati, mediante la risurrezione di Gesù Cristo dai morti, per una speranza viva, per una eredità che non si corrompe, non si macchia e non marcisce. Essa è conservata nei cieli per voi, che dalla potenza di Dio siete custoditi mediante la fede, per la vostra salvezza, prossima a rivelarsi negli ultimi tempi."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Eb 12,22-24",
                                "testo"=>"Voi vi siete accostati al monte di Sion e alla città del Dio vivente, alla Gerusalemme celeste e a miriadi di angeli, all'adunanza festosa e all'assemblea dei primogeniti iscrittinei cieli, al Dio giudice di tutti e agli spiriti dei giusti portati alla perfezione, al Mediatore della Nuova Alleanza e al sangue dell'aspersione dalla voce più eloquente di quello di Abele."
                            );
                        break;
                    }
                break;
                case 'comp': 
                    $this->info=array(
                        "titolo"=>"Ap 22,4-5",
                        "testo"=>"Gli eletti vedranno la faccia del Signore e porteranno il suo nome sulla fronte. Non vi sarà più notte e non avranno più bisogno di luce di lampada nè di luce di sole, perché il Signore Dio li illuminerà e regneranno nei secoli dei secoli."
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==1) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"2Ts 3,10b-13",
                                "testo"=>"Chi non vuol lavorare, neppure mangi. Sentiamo infatti che alcuni fra di voi vivono disordinatamente, senza far nulla e in continua agitazione. A questi tali ordiniamo, esortandoli nel Signore Gesù Cristo, di mangiare il proprio pane lavorando in pace. Voi, fratelli, non lasciatevi scoraggiare nel fare il bene."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Ger 15,16",
                                "testo"=>"Quando le tue parole mi vennero incontro, le divorai con avidità; la tua parola fu la gioia e la letizia del mio cuore, perché io portavo il tuo nome, Signore, Dio degli eserciti."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Gc 2,12-13",
                                "testo"=>"Parlate e agite come persone che devono essere giudicate secondo una legge di libertà, perché il giudizio sarà senza misericordia contro chi non avrà usato misericordia; la misericordia invece ha sempre la meglio nel giudizio."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Gdt 8,26",
                                "testo"=>"Ricordatevi che i vostri padri furono messi alla prova per vedere se davvero temevano il loro Dio. Ricordate come fu tentato il nostro padre Abramo e proprio come attraverso la prova di molte treibolazioni egli divenne l'amico di Dio. Così pure Isacco, così Giacobbe, così Mosè e tutti qualli che piacquero a Dio furono provati con molte tribolazioni e si mantennero fedeli."
                            );
                        break;
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Rm 13,8.10",
                                "testo"=>"Non abbiate alcun debito con nessuno, se non quello di un amore vicendevole; perché chi ama il suo simile ha adempiuto la legge. L'amore non fa nessun male al prossimo: pieno compimento della legge è l'amore."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Ger 31,33",
                                "testo"=>"Questa sarà l'alleanza che io concluderò con la casa di Israele dopo quei giorni, dice il Signore: Porrò la mia legge nel loro animo, la scriverò sul loro cuore. Allora io sarò il loro Dio ed essi il mio popolo."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"2Cor 13,11",
                                "testo"=>"Fratelli, siate lieti, tendete alla pefezione, fatevi coraggio a vicenda, abbiate gli stessi sentimenti, vivete in pace e il Dio dell'amore e della pace sarà con voi."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Lv 20,26",
                                "testo"=>"Sarete santi per me, poiché io, il Signore, sono santo e vi ho separati dagli altri popoli, perché siete miei."
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Gc 1,19b-20.26",
                                "testo"=>"Sia ognuno pronto ad ascoltare, lento a parlare, lento all'ira. Perché l'ira dell'uomo non compie ciò che è giusto davanti a Dio. Se qualcuno pensa di essere religioso, ma non frena la lingua e inganna così il suo cuore, la sua religione è vana."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Ger 32,40",
                                "testo"=>"Così dice il Signore: Concluderò con essi un'alleanza eterna e non mi allontanerò più da loro per beneficarli; metterò nei loro cuori il mio timore, perché non si distacchino da me."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Rm 6,22",
                                "testo"=>"Ora, liberati dal peccato e fatti servi di Dio, voi raccogliete il frutto che vi porta alla santificazione e come destino avete la vita eterna."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Sap 15,1.3",
                                "testo"=>"Tu, nostro Dio, sei buono e fedele, sei paziente e tutto governi secondo misericordia. Conoscerti, infatti, è giustizia perfetta, conoscere la tua potenza è radice di immortalità."
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"1Pt 1,17b-19",
                                "testo"=>"Comportatevi con timore nel tempo del vostro pellegrinaggio. Voi sapete che non a prezzo di cose corruttibili, come l'argento e l'oro, foste liberati dalla vostra vuota condotta ereditata dai vostri padri, ma con il sangue prezioso di Cristo, come di agnello senza difetti e senza macchia."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Ez 34,31",
                                "testo"=>"Voi, mie pecore, siete il gregge del mio pascolo e io sono il vostro Dio. Oracolo del Signore Dio."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Col 1,21-22",
                                "testo"=>"Voi un tempo eravate stranieri e nemici con la mente intenta alle opere cattive che facevate, ma ora Dio vi ha riconciliati per mezzo della morte del corpo di carne del Cristo, per presentarvi santi, immacolati e irreprensibili al suo cospetto."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Bar 4,21-22",
                                "testo"=>"Figli, gridate a Dio ed egli vi libererà dall'oppressione e dal potere dei vostri nemici. Io, infatti, spero dall'_Etrno la vostra salvezza. Una grande gioia mi viene dal Santo, per la misericordia che presto vi giungerà dall'Eterno vostro salvatore."
                            );
                        break;
                    }
                break;
                case 'ves': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Col 1,9b-11",
                                "testo"=>"Abbiate una piena conoscenza della volotà di Dio con ogni sapienza e intelligenza spirituale, perché possiate compirtarvi in maniera degna del Signore, per piacergli in tutto, portando frutto in ogni opera buona e crescendo nella conoscenza di Dio; rafforzandovi con ogni energia secondo la potenza della sua gloria, per poter essere forti e pazienti in tutto."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"1Ts 2,13",
                                "testo"=>"Noi ringraziamo Dio continuamente, perché, avendo ricevuto da noi la parola divina della predicazione, l'avete accolta non come parola di uomini, ma, come è veramente, quale parola di Dio, che opera in voi che credete."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Gc 4,11-12",
                                "testo"=>"Non sparlate gli uni degli altri, fratelli. Chi sparla del fratello o giudica il fratello, parla contro la legge e giudica la legge. E se tu giudichi la legge, non sei più uno che osserva la legge, ma uno che la giudica. Ora, uno solo è legislatore e giudice, Colui che può salvare e rovinare; ma chi sei tu che ti fai giudice del tuo prossimo?"
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"1Ts 3,12-13",
                                "testo"=>"Il Signore vi faccia crescere e abbondare nell'amore vicendevole e verso tutti, come è il nostro amore verso di voi, per rendere saldi e irreprensibili i vostri cuori nella santità, davanti a Dio Padre nostro, al momento della venuta del Signore nostro Gesù con tutti i suoi santi."
                            );
                        break;
                    }
                break;
                case 'comp': 
                    $this->info=array(
                        "titolo"=>"1Ts 5,9-10",
                        "testo"=>"Dio ci ha destinati all'acquisto della salvezza per mezzo del Signore nostro Gesù Cristo, il quale è morto per noi, perché, sia che vegliamo sia che dormiamo, viviamo insieme con lui."
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==2) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Rm 13,11b-13a",
                                "testo"=>"È ormai tempo di svegliarvi dal sonno, perché la nostra salvezza è più vicina ora di quando diventammo credenti. La notte è avanzata, il giorno è vicino. Gettiamo via perciò leopere delle tenebre r indossiamo le armi della luce. Comportiamoci onestamente, come in pieno giorno."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"1Ts 5,4-5",
                                "testo"=>"Voi, fratelli, non siete nelle tenebre, così che il giorno del Signore possa sorprenndervi come un ladro: voi tutti infatti siete figli della luce e figli del giorno; noi non siamo della notte, né delle tenebre."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"1Gv 4,14-15",
                                "testo"=>"Noi stessi abbiamo veduto e attestiamo che il Padre ha mandato il suo Figlio come salvatore del mondo. Chiunque riconosce che Gesù è il Figlio di Dio, Dio dimora in lui ed egli in Dio."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Is 55,1",
                                "testo"=>"O voi tutti assetati venite all'acqua, chi non ha denaro venga ugualmente; comprate e mangiate, senza denaro e senza spesa, vino e latte."
                            );
                        break;
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Ger 17,7-8",
                                "testo"=>"Benedetto l'uomo che confida nel Signore e il Signore è sua fiducia. Egli è come un albero piantato lungo l'acqua, verso la corrente stende le radici; non teme quando viene il caldo, le sua foglie rimangono verdi; nell'anno della siccità non intristisce, non smette di produrre i suoi frutti."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"1Cor 12,4-6",
                                "testo"=>"Vi sono diversità di carismi, ma uno solo è lo Spirito; vi sono diversità di ministeri, ma uno solo è il Signore; vi sono diversità di operazioni, ma un solo è Dio, che opera tutto in tutti."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Ger 22,3",
                                "testo"=>"Dice il Signore: Praticate il diritto e la giustizia, liberate l'oppresso dalle mani dell'oppressore, non fate violenza e non opprimete il forestiero, l'orfano e la vedova, e non spargete sangue innocente in questo luogo."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"1Gv 3,17-18",
                                "testo"=>"Se uno ha ricchezze di quseto mondo e vedendo il suo fratello in necessità gli chiude il proprio cuore, come dimora in lui l'amore di Dio? Figlioli, non amiamo a parole né con la lingua, ma coi fatti e nella verità."
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Pr 3,13-15",
                                "testo"=>"Beato l'uomo che ha trovato la sapienza e il mortale che ha acquistato la prudenza, perché il suo possesso è preferibile a quello dell'argento e il suo profento a quello dell'oro. Essa è più preziosa delle perle e neppure l'oggetto più caro la eguaglia."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"1Cor 12,12-13",
                                "testo"=>"Come il corpo, pur essendo uno, ha molte membra e tutte le membra, pur essendo molte, sono un corpo solo, così anche Cristo. E in realtà noi tutti siamo stati battezzati in un solo Spirito per formare un solo corpo, Giudei o Greci, schiavi o liberi; e tutti ci siamo abbeverati a un solo Spirito."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Dt 15,7-8",
                                "testo"=>"Se vi sarà qualche tuo fratello bisognoso nella tua città, non indurirai il tuo cuore e non chiuderai lka mano davanti al tuo fratello bisognoso; anzi gli aprirai la mano e gli presterai quanto occorre alla necessità in cui si trova."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Dt 30,11.14",
                                "testo"=>"Questo comando che oggi ti ordino non è troppo alto per te, né troppo lontano da te. Anzi, questa parola è molto vicina a te, è nella tua bocca e nel tuo cuore, perché tu la metta in pratica."
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Gb 5,17-18",
                                "testo"=>"Felice l'uomo che è corretto da Dio: perciò tu non sdegnare la correzione dell'Onnipotente, perché egli fa la piaga e la fascia, ferisce e la sua mano risana."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"1Cor 12,24b-26",
                                "testo"=>"Dio ha composto il corpo, conferendo maggior onore a ciò che ne mancava, perché non vi fosse disunione nel corpo, ma anzi le arie membra avessero cura le une delle altre. Quindi se un membro soffre, tutte le membra soffrono insieme; e su un menbro è onorato, tutte le membra gioiscono con lui."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Pr 22,22-23",
                                "testo"=>"Non depredare il povero, perché egli è povero, e non affliggere il misero in tribunale, perché il Signore difenderà la loro causa e spoglierà della vita coloro che li hanno spogliati."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Is 55,10-11",
                                "testo"=>"Come la pioggia e la neve scendono dal cielo e non vi ritornano senza avere irrigato la terra, senza averla fecondata e fatta germogliare, perché dia il seme al seminatore e pane da mangiare, così sarà della parola uscita dalla mia bocca: non ritornerà a me senza effetto, senza aver operato ciò che desiderò e senza aver compito ciò per cui l'ho mandata."
                            );
                        break;
                    }
                break;
                case 'ves': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"1Gv 3,1a.2",
                                "testo"=>"Quale grande amore ci ha dato il Padre per essere chiamati figli di Dio, e lo siamo realmente! Carissimi, noi fin d'ora siamo figli di Dio, ma ciò che saremo non è stato ancora rivelato. Sappiamo però che quando egli si sarà manifestato, noi saremo simili a lui, perché lo vedremo così come egli è."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Rm 3,23-25a",
                                "testo"=>"Tutti hanno peccato e sono privi della gloria di Dio, ma sono giustificati gratuitamente per la sua grazia, in virtù della redenzione realizzata da Cristo Gesù. Dio lo ha prestabilito a servire come strumento di espiazione per mezzo della fede, nel suo sangue, al fine di manifestare la sua giustizia."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Rm 12,9-12",
                                "testo"=>"La carità non abbia finzioni: fuggite il male con orrore, attaccatevi al bene; amatevi gli uni gli altri con affetto fraterno, gareggiate nello stimarvi a vicenda. Non siate pigri nello zelo; siate invece ferventi nello Spirito, servite il Signore. Siate lieti nella speranza, forti nella tribolazione, perseveranti nella preghiera."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Col 3,16",
                                "testo"=>"La parola di Cristo dimori tra voi abbondantemente; ammaestratevi e ammonitevi con ogni sapienza, cantando a Dio di cuore e con gratitudine salmi, inni e cantici spirituali."
                            );
                        break;
                    }
                break;
                case 'comp': 
                    $this->info=array(
                        "titolo"=>"1Pt 5,8-9a",
                        "testo"=>"Siate temperanti, vigilate. Il vosgro nemico, il diavolo, come leone ruggente va in giro, cercando chi divorare. Resistetegli saldi nella fede."
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==3) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Tb 4,15a.16a.18-19a",
                                "testo"=>"Non fare a nessuno ciò che non piace a te. Dà il tuo pane a chi ha fame e fa parte dei tuoi vestiti agli ignudi. Chiedi il parere ad ogni persona che si saggia e non disprezzare nessun buon consiglio. In ogni circostanza benedici il Signore e domanda che ti sia guida nelle tue vie e che i tuoi sentieri e i tuoi desideri giungano a buon fine."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Rm 8,35-37",
                                "testo"=>"Chi ci separerà dall'amore di Cristo? forse la tribolazione, l'angoscia, la persecuzione, la fame, la nudità, il pericolo, la spada? Ma in tutte quaeste cose noi siamo più che vincitori per virtù di colui che ci ha amati."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Gb 1,21; 2,10b",
                                "testo"=>"Nudo uscii dal seno di mia madre, e nudo vi ritornerò. Il Signore ha dato, il Signore ha tolto; come piacque al Signore, così è avvenuto: sia benedetto il nome del Signore! Se da Dio accettiamo il bene, perché non dovremmo accettare il male?."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Dt 4,39-40a",
                                "testo"=>"Sappi oggi e conserva bene nel tuo cuore che il Signore è Dio lassù nei cieli e quaggiù sulla terra; e non ve n'è altro. Osserva dunque le sue leggi e i suoi comandi che oggi ti do."
                            );
                        break;
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"1Pt 1,13-14",
                                "testo"=>"Dopo aver preparato la vostra mente all'azione, siate vigilanti, fissate ogni speranza in quella grazia che vi sarà data quando Gesù Cristo si rivelerà. Come figli obbedienti, non conformatevi ai desideri d'un tempo, quando eravate nell'ignoranza."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Dt 1,16-17a",
                                "testo"=>"In quel tempo diedi quest'ordine ai vostri giudici: Ascoltate le cause dei vostri fratelli e giudicae con giustizia le quastioni che uno può avere con il fratello o con lo straniero che sta presso di lui. Nei vostri giudizi non avrete riguardi personali, darete ascolto al piccolo come al grande; non temerete alcun uomo, poiché il giudizio appartiene a Dio."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"1Cor 13,4-7",
                                "testo"=>"La cairtà è paziente, è benigna la carità; non è invidiosa la carità, non si vanta, non si gonfia,  non manca di rispetto, non cerca il suo interesse, non si adira, non tiene conto del male ricevuto, non gode dell'ingiustizia, ma si compiace della verità. Tutto copre, tutto crede, tutto spera, tutto sopporta."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"1Cor 10,24.31",
                                "testo"=>"Nessuno cerchi l'utile proprio, ma quello altrui. Sia dunque che mangiate, sia che beviate, sia che facciate qualsiasi altra cosa, fate tutto per la gloria di Dio."
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"1Pt 1,15-16",
                                "testo"=>"Ad immagine del Santo che vi ha chiamati, diventate santi anche voi in tutta la vostra condotta; poiché sta scritto: Voi sarete santi, perché io sono santo."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Is 55,8-9",
                                "testo"=>"I miei pensieri non sono i vostri pensieri, le vostre vie non sono le mie vie, oracolo del Signore. Quanto il cielo sovrasta la terra, tanto le mie vie sovrastano le fostre vie, i miei pensieri sovrastano i vostri pensieri."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"1Cor 13,8-9.13",
                                "testo"=>"La carità non avrà mai fine. Le profezie scompariranno; il dono delle lingue cesserà e la scienza svanirà. La nostra conoscenza è imperfetta e imperfetta la nostra profezia. Queste dunque le tre cose che rimangono: la fede, la speranza e la carità; ma di tutte più grande è la carità!"
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Col 3,17",
                                "testo"=>"Tutto quello che fate in parole ed opere, tutto si compia nel nome del Signore Gesù, rendendo per mezzo di lui grazie a Dio Padre."
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Gc 4,7-8a.10",
                                "testo"=>"Sottomettetevi a Dio; resistete al diavolo, ed egli fuggirà da voi. Avvicinatevi a Dio ed egli si avvicinerà a voi. Umiliatevi davanti al Signore ed egli vi esalterà."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"1Sam 16,7",
                                "testo"=>"Dice il Signore: Non guardate all'aspetto, né alla statura. Io non guardo ciò che guarda l'uomo. L'uomo guarda l'apparenza, il Signore guarda il cuore."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Col 3,14-15",
                                "testo"=>"Al di sopra di tutto vi sia la carità, che è il vincolo della perfezione. E la pace di Cristo regni nei vostri cuori, perché ad essa siete stati chiamati in un solo corpo. E siate riconoscenti!"
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Col 3,23-24",
                                "testo"=>"Qualunque cosa facciate, fatela di cuore come per il Signore e non per gli uomini, sapendo che, come ricompensa, riceverete dal Signore l'eredità. Servite a Cristo Signore."
                            );
                        break;
                    }
                break;
                case 'ves': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Gc 1,22.25",
                                "testo"=>"Siate di quelli che mettono in pratica la parola e non soltanto ascoltatori, illudendo voi stessi. Chi fissa lo sguardo sulla legge perfetta, la legge della libertà, e le resta fedele, non come un ascoltatore smemorato ma come uno che la mette in pratica, questi troverà la sua felicità nel praticarla."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"1Pt 5,5b-7",
                                "testo"=>"Rivestitevi tutti di umiltà gli uni verso gli altri, perché Dio resiste ai superbi, ma dà grazia agli umili. Umiliatevi dunque sotto la potente mano di Dio, perché vi esalti al tempo opportuno, gettando in lui ogni vostra preoccupazione, perché egli ha cura di voi."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Ef 3,20-21",
                                "testo"=>"A colui che in tutto ha potere di fare molto di più di quanto possiamo domandare o pensare, secondo la potenza che già opera in noi, a lui la gloria nella Chiesa e in Cristo Gesù per utte le generazioni, nei secoli dei secoli! Amen."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"1Gv 2,3-6",
                                "testo"=>"Da questo sappiamo di aver conosciuto il Cristo: se osserviamo i suoi comandamenti. Chi dice: « Lo conosco » e non osseva i suoi comandamenti, è bugiardo e la verità non è in lui; ma chi osserva la sua parola, in lui l'amore di Dio è veramente perfetto. Da questo conosciamo di essere in lui. Chi dice di dimorare in Cristo, deve comportarsi come lui si è comportato."
                            );
                        break;
                    }
                break;
                case 'comp': 
                    $this->info=array(
                        "titolo"=>"Ef 4,26-27.31-32",
                        "testo"=>"Non peccate; non tramonti il sole sopra la vostra ira, e non date occasione al diavolo. Scompaia da voi ogni asprezza, sdegno, ira. Siate invece benevoli gli uni verso gli altri, misericordiosi, perdonandovi a vicenda come Dio ha perdonato a voi in Cristo."
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==4) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Is 66,1-2",
                                "testo"=>"Così dice il Signore: Il cielo è il mio trono, la terra lo sgabello dei miei piedi. Quale casa mi potreste costruire? In quale luogo potrei fissare la dimora? Tutte queste cose ha fatto la mia mano ed esse sono mie: oracolo del Signore. Su chi volgerò lo sguardo? Sull'umile e su chi ha lo spirito contrito, su chi teme la mia parola."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Rm 14,17-19",
                                "testo"=>"Il regno di Dio non è questione di cibo o di bevanda, ma è giustixia, pace e gioia nello Spirito Santo: chi serve il Cristo in queste cose, è bene accetto a Dio e stimato dagli uomini. Diamoci dunque alle opere della pace e alla edificazione vicenevole."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"1Pt 4,10-11",
                                "testo"=>"Ciascuno viva secondo la grazia ricevuta, mettendola a servizio degli altri, come buoni amministratori di una muiltiforme grazia di Dio. Chi parla, lo faccia come con parole di Dio; chi esercita un ufficio, lo compia con l'energia ricevuta da Dio, perché in tutto venga glorificato Dio per mezzo di Gesù Cristo, al quale appartiene la gloria e la potenza nei secoli dei secoli. Amen!."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Rm 8,18-21",
                                "testo"=>"Io ritengo che le sofferenze del momento presente non sono paragonabili alla gioia futura che dovrà esser rivelata in noi. La creazione stessa attende con impazienza la rivelazione dei figli di Dio; essa infatti è stata sottomessa alla caducità - non per suo volere, ma per volere di colui che l'ha sottomessa - e nutre la speranza di essere lei pure liberata dalla schiavitù della corruzione, per entrare nella libertà della gloria dei figli di Dio."
                            );
                        break;
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Am 4,13",
                                "testo"=>"Ecco colui che forma i monti e crea i venti, che manifesta ll'uomo qual'è il suo pensiero, che fa l'alba ele tenebre e cammina sulle alture della terra, Signore, Dio degli eserciti è il suo nome."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Gal 5,13-14",
                                "testo"=>"Voi, fratelli, siete stati chiamati a libertà. Purché questa libertà non divenga un pretesto per vivere secondo la carne, ma mediante la carità siate a servizio gli uni degli altri. Tutta la legge trova infatti la sua pienezza in un solo preetto: amerai il prossimo tuo come te stesso."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Sap 19,22",
                                "testo"=>"In tutti i modi, o Signore, hai magnificato e reso glorioso il tuo popolo e non l'hai trascurato, assistendolo in ogni tempo e in ogni luogo."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"1Gv 3,23-24",
                                "testo"=>"Questo è il comandamento di Dio: che crediamo nel nome del Figlio suo Gesù Cristo e ci amiamo gli uni gli altri, secondo il precetto che ci ha dato. Chi osserva i suoi comandamenti dimora in Dio ed egli in lui. E da questo conosciamo che dimora in noi: dallo Spirito che ci ha dato."
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Am 5,8",
                                "testo"=>"Colui che ha fatto le Plèiadi e Orione cambia il buio in chiarore del mattino e stende sul giorno l'oscurità della notte; colui che comanda alle acque del mare e le spande sulla terra, Signore è il suo nome."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Gal 5,16-17",
                                "testo"=>"Camminate secondo lo Spirito e non sarete portati a soddisfare i desideri della carne; la carne infatti ha desideri contrari allo Spirito e lo Spirito ha desideri contrari alla carne; queste cose si oppongono a vicenda, sicché voi non fate quello che vorreste."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Dt 4,7",
                                "testo"=>"Nessuna grande nazione ha la divinità così vicina a sé, come il Signore nostro Dio è vicino a noi ogni volta che lo invochiamo."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Sap 1,1-2",
                                "testo"=>"Amate la giustizia, voi che governate sulla terra, rettamente pensate del Signore, cercatelo con cuore semplice. Egli infatti si lascia trovare da quanti non lo tentano, si mostra a coloro che non ricusano di credere in lui."
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Am 9,6",
                                "testo"=>"Egli costruisce nel cielo il suo soglio e fonda la sua volta sulla terra; egli chiama le acque del mare e le riversa sulla terra; Signore è il suo nome."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Gal 5,22.25",
                                "testo"=>"Il frutto dello Spirito è amore, gioia, pace, pazienza, benevolenza, bontà fedeltà, mitezza, dominio di sé. Se pertanto viviamo dello Spirito, camminiamo anche secondo lo Spirito."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Est 10,3f",
                                "testo"=>"La mia nazione è Israele, quelli cioè che avevano gridato a Dio e furono salvati. Sì, il Signore ha salvato il suo popolo, ci ha liberato da tutti questi mali e Dio ha operato segni e prodigi grandi quali mai erano avvenuti tra le nazioni."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Eb 12,1b-2",
                                "testo"=>"Deposto tutto ciò che è di peso e il peccato che ci intralcia, corriamo con perseferanza nella corsa, tenedo fisso lo sguardo su Gesù, autore e perfezionatore della fede. Egli in cambio della gioia che gli era posta innanzi, si sottopose alla croce, disprezzando l'ignominia, e si è assiso alla destra del trono di Dio."
                            );
                        break;
                    }
                break;
                case 'ves': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"1Pt 1,6-9",
                                "testo"=>"Siete ricolmi di gioia, anche se ora dovete essere per un po' di tempo afflitti da varie prove, perché il valore della vostra fede, molto più preziosa dell'oro, che pur destinato a perire, tuttavia si prova col fuoco, torni a vostra lode, gloria e onore nella manifestazione di Gesù Cristo: voi lo amate, pur senza averlo visto; e ora senza vederlo credete in lui. Perciò esultate di gioia indicibile e gloriosa, mentre conseguite la meta della vostra fede, cioè la salvezza delle anime."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"1Pt 1,22-23",
                                "testo"=>"Dopo aver santificato le vostre anime con l'obbedienza alla verità, per amarvi sinceramente come fratelli, amatevi intensamente, di vero cuore, gli uni gli altri, essendo stati rigenerati non da un seme corruttibile, ma immortale, cioè dalla parola di Dio viva ed eterna."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"1Pt 3,8-9",
                                "testo"=>"Siate tutti concordi, partecipi delle gioie e dei dolori degli altri, animati da affetto fraterno, misericordiosi, umili; non rendete male per male, né ingiuria per ingiuria, ma, al contrario, rispondete benedicendo; poiché a questo siete stati chiamati per avere in eredità la benedizione."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Col 1,23a",
                                "testo"=>"Rimanete fondati e fermi nella fede e non vi lasciate allontanare dalla speranza promessa nel vangelo che avete ascoltato, il quale è stato annunziato ad ogni creatura sotto il cielo."
                            );
                        break;
                    }
                break;
                case 'comp': 
                    $this->info=array(
                        "titolo"=>"1Ts 5,23",
                        "testo"=>"Il Dio della pace vi santifichi fino alla perfezione, e tutto quello che è vostro, spirito, anima e corpo, si conservi irreprensibile per la venuta del Signore nostro Gesù Cristo."
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==5) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Ef 4,29-32",
                                "testo"=>"Nessuna parola cattiva esca più dalla vostra bocca; ma piuttosto parole buone che posaano servire per la necessaria edificazione, giovando a quelli che ascoltano. E non vogliate rattristare lo Spirito Santo di Dio, col quale foste segnati per il giorno della redenzione. Scompaioa da voi ogni asprezza, sdegno, ira, clamore e maldicenza con ogni sorta di malignità. siate invece benevoli gli uni verso gli altri, misericordiosi, perdonandovi a vicenda come Dio ha perdonato a voi in Cristo."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Ef 2,13-16",
                                "testo"=>"Ora, in Cristo Gesù, voi ch eun tempo eravate i lontani siete divntati i vicini grazie al sangue di Cristo. Egli infatti è la nostra pace, colui che ha fatto dei due un popolo solo, abbattedno il muro di separazione che era frammezzo, cioè l'inimicizia, annullando, per mezzo della sua carne, la legge fatta di prescrizioni e di decreti, per crere in sé stesso, dei due, un solo uomo nuovo, facendo la pace, e per riconciliare tutti e due con Dio in un solo corpo, per mezzo della croce, distruggendo in sé stesso l'inimicizia."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"2Cor 12,9b-10",
                                "testo"=>"Mi vanterò ben volentieri delle mie debolezze, perché dimori in me la potenza di Cristo. Perciò mi compiaccio nelle mie infermità, negli oltraggi, nelle neessità, nelle persecuzioni, nelle angosce sofferte per Cristo: quando sono debole, è allora che sono forte."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Gal 2,20",
                                "testo"=>"Sono stto crocifisso con Cristo e non sono più io che vivo, ma Cristo vive in me. Questa vita che vivo nella carne io la vivo nella fede del Figlio di Dio, che mi ha amato e ha dato sé stesso per me."
                            );
                        break;
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Fil 2,2-4",
                                "testo"=>"Rendete piena la mia gioia con l'unione dei vostri spiriti, con la stessa carità, con i medesimi sentimenti. Non fate nulla per spirito di rivalità o per vanagloria, ma ognuno di voi, con tutta umiltà, consideri gli altri superiori a sé stesso. Non cerchi ciascuno il proprio interesse, ma piuttosto quello degli altri."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Dt 1,31b",
                                "testo"=>"Il Signore tuo Dio ti ha portato, come un uomo porta il proprio figlio, per tutto il cammino che hai fatto."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Rm 1,16b-17",
                                "testo"=>"Il vangelo è potenza di Dio per la salvezza di chiunque crede, del Giudeo prima e poi del Greco. È in esso che si rivela la giustizia di Dio di fede in fde, come sta scritto: Il giusto vivrà mediante la fede."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Rm 12,17a.19b-20a.21",
                                "testo"=>"Non rendete a nessuno male per male. Sta scritto infatti: A me la vendetta, sono io che ricambierò, dice il Signore. Al contrario, se il tuo nemico ha fame, dagli da mangiare; se ha sete, dagli da bere. Non lasciarti vincere dal male, ma vinci con il bene il male."
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"2Cor 13,4",
                                "testo"=>"Cristo fu crocifisso per la sua debolezza, ma vive per la potenza di Dio. E anche noi che siamo deboli in lui, saremo vivi con lui per la potenza di Dio."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Bar 4,28-29",
                                "testo"=>"Come pensate di allontanarvi da Dio, così ritornando decuplicate lo zelo per cercarlo, poiché chi vi ha afflitti con tante calamità vi darà anche, con la salvezza, una gioia perenne."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Rm 3,21-22a",
                                "testo"=>"Ora, indipendentemente dalla legge, si è manifestata la giustizia di Dio, testimonita dalla legge e dai profeti; giustizia di Dio per mezzo della fede i Gesù Cristo, per tutt quelli che credono in lui."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"1Gv 3,16",
                                "testo"=>"Da questo abbiamo conosciuto l'amore di Dio: Egli ha dato la sua vita per noi; quindi anche noi dobbiamo dare la vita per i fratelli."
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Col 3,12-13",
                                "testo"=>"Rivestitevi, come eletti di Dio, santi e amati, di sentimenti di misericordia, di bontà, di umiltà, di mansuetudine, di pazienza, sopportandovi a vicenda e perdonandovi scambievolmente, se qualcuno abbia di che lamentrsi nei riguardi degli altri. Come il Signore vi ha perdonato, così fate anche voi."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Sap 1,13-15",
                                "testo"=>"Dio non ha creato la morte e non gode per la rovina dei viventi. Egli infatti ha creto tutto per l'esistenza; le creture del mondo sono sane, in esse non c'è veleno di morte, né gli inferi regnano sulla terra, perché la giustizia è immortale."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Ef 2,8-9",
                                "testo"=>"Per grazia siete salvi mediante la fede; e ciò non viene da voi, ma è dono di Dio; né viene dalle opere, perché nessuno possa vantarsene."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"1Gv 4,9-11",
                                "testo"=>"In questo si è manifestato l'amore di Dio per noi: Dio ha mandato il suo Figlio unigenito nel mondo, perché noi avessimo la vita per lui. In questo sta l'amore: non siamo stati noi ad amare Dio, ma è li che ha amato noi e ha mandato il suo Figlio come vittima di espiazione per i nostri peccati. Carissimi, se Dio ci ha amato, anche noi dobbiamo amarci gli uni gli altri."
                            );
                        break;
                    }
                break;
                case 'ves': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Rm 15,1-3",
                                "testo"=>"Noi che siamo i forti abbiamo il divere di sopportare l'infermità dei deboli, senza compiacere noi stessi. Ciascuno di noi cerchi di compiacere io prossimo nel bene, per edificarlo. Cristo infatti non cercò di piacere a sé stesso, ma come sta scritto: gli insulti di coloro che ti insulatano sono caduti sopra di me."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"1Cor 2,7-10a",
                                "testo"=>"Parliamo di una sapienza divina, misteriosa, che è rimasta nascosta, e che Dio ha preordinato prima dei secoli per la nostra gloria. Nessuno dei dominatori di questo mondo ha potuto conoscerla; se l'avessero conosciuta, non avrebbero crocifisso il Singore della gloria. Sta scritto infatti: Quelle cose che occhio non vide, né orecchio udì, né mai entrarono in cuore di uomo, queste ha preparato Dio per coloro che lo amano. Ma a noi Dio le ha rivelate per mezzo dello Spirito."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Gc 1,2-4",
                                "testo"=>"Considerate perfetta letizia, miei fratelli, quando subite ogni sorta di prove, sapendo che la prova della vostra fede produce la pazienza. E la pazienza completi l'opera su di voi, perché siate perfetti e integri, senza mancare di nulla."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Rm 8,1-2",
                                "testo"=>"Non c'è più nessuna condanna per quelli che sono in Cristo Gesù. Poiché la legge dello Spirito che dà vita in Cristo Gesù ti ha liberato dalla legge del peccato e della morte."
                            );
                        break;
                    }
                break;
                case 'comp': 
                    $this->info=array(
                        "titolo"=>"Ger 14,9b",
                        "testo"=>"Tu sei in mezzo a noi, Signore, e noi siamo chiamati con il tuo nome: non abbandonarci, Signore Dio nostro."
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==6) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"2Pt 1,10-11",
                                "testo"=>"Fratelli, cercate di render sempre più sicura la vostra vocazione e la vostra elezione. Se farete questo non inciamperete mai. Così infatti vi sarà ampiamente aperto l'ingresso nel regno eterno del Signore nostro e salvatore Gesù Cristo."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Rm 12,14-16a",
                                "testo"=>"Benedite coloro che vi perseguitano, benedite e non maledite. Rallegratevi con quelli che sono nella gioia, piangete con quelli che sono nel pianto. Abbiate i medesimi sentimenti gli uni verso gli altri; non aspirate a cose troppo alte, piegatevi invece a quelle umili."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Fil 2,14-15",
                                "testo"=>"Fate tutto senza mornorazioni, e senza critiche, perché siate irreprensibili e semplici, figli di Dio immacolati in mezzo a una generazione perversa e degenere, nella quale dovete splendere come astri nel mondo."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"2Pt 3.13-15a",
                                "testo"=>"Secondo la promessa del Signore, noi aspettiamo nuovi cieli e una terra nuova nei quali avrà stabile dimora la giustizia. Perciò, carissimi, nell'attesa di questi eventi, cercate d'essere senza macchia e irreprensibili davanti a Dio, in pace. La magnanimità ddl Signore nostro giudicatela come salvezza."
                            );
                        break;
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"1Re 8,60-61",
                                "testo"=>"Tutti i popoli della terra sapranno che il Signore è Dio e che non ce n'è altri. Il vostr cuore sarà tutto dedito al Signore nostro Dio, perché cammini secondo i suoi decreti e osservi i suoi comandi."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Dt 8,5b-6",
                                "testo"=>"Come un uomo corregge il figlio, così il Signore tuo Dio corregge te. Osserva i comandi del Signore tuo Dio camminando nelle sue vie e temendolo."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"1Sam 15,22",
                                "testo"=>"Il Signore forse gradisce gli olocausti e i sacrifici come obbedire alla voce del Signore? Ecco, l'obbedire è meglio del sacrificio, l'essere docili è più del grasso degli arieti."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Dn 6,27b-28a",
                                "testo"=>"Il nostro Dio è il Dio vivente, che dura in eterno; il suo regno è tale che non sarà mai distrutto e il suo dominio non conosce fine. Egli salva e libera, fa prodigi e miracoli in cielo e in terra."
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Ger 17,9-10",
                                "testo"=>"Più fallace di ogni altra cosa è il cuore e difficilmente guaribile; chi lo può conoscere? Io, il Signore, scruto la mente e saggio i cuori, per rendere a ciascuno secondo la sua condotta, secondo il frutto delle sue azioni."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"1Re 2,2b-3",
                                "testo"=>"Tu sii forte e mostrati uomo. Osserva le legge del Sigonore tuo Dio, procedendo nelle sue vie ed eseguendo i duoi sttuti, i suoi comandi, i suoi decreti e le sue prescrizioni, perché tu riesca in ogni tua impresa e in ogni tuo progetto."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Gal 5,26; 6,2",
                                "testo"=>"Non cerchiamo la vanagloria, provocandoci e invidiandoci gli uni gli altri. Portate i pesi gli uni degli altri, così adempirete la legge di Cristo."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Rm 15,5-7",
                                "testo"=>"Il Dio della perseveranza e della consolazione vi concede di avere gli uni verso gli altri gli stessi sentimenti ad esempio di Cristo Gesù, perché con un solo animo e una voce sola rendiate gloria a Dio, Padre del Signore nostro Gesù Cristo. Accolgietevi perciò gli uni gli altri come Cristo accolse voi, per la gloria di Dio."
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                "titolo"=>"Sap 7,27; 8,1",
                                "testo"=>"La Sapienza di Dio può tutto; pur rimanendo in sé stessa, tutto rinnova e attraverso le età, entrando nelle anime sante, forma amici di Dio e profeti. Essa si estende da un confinr all'altro con forza, governa con bontà eccellente ogni cosa."
                            );
                        break;
                        case 2:
                            $this->info=array(
                                "titolo"=>"Ger 6,16a",
                                "testo"=>"Fermatevi nelle strade e guardate, informatevi circa i sentieri del passato, dove sta la strada buona e prendetelea, così troverete pace per le anime vostre."
                            );
                        break;
                        case 3:
                            $this->info=array(
                                "titolo"=>"Mi 6,8",
                                "testo"=>"Iomo, ti è steato insegnto ciò che è buono e ciò che richiede il Signore da te: praticare la giustizia, amare la pietà, camminare umilmente con il tuo Dio."
                            );
                        break;
                        case 4:
                            $this->info=array(
                                "titolo"=>"Fil 4,8-9b",
                                "testo"=>"Fratelli, tutto quello che è vero, nobile, giusto, puro, amabile, onorato, quello che è virtù e merita lode, tutto questo sia oggetto dei vostri pensieri. E il Dio della pace sarà con voi!"
                            );
                        break;
                    }
                break;
            }
        }

        /////////////////////////////////////////////////////////////////////////////
        

    }

    function build() {

        //////////////////////////////////////////////////////////////////////////
        //modifica Letture in base al TEMPO LITURGICO

        if ($this->actual['tempo']=='A') {

            if (substr($this->actual['today'],4,4)<'1217') {

                if ($this->actual['weekDay']==0) {

                    if($this->actual['ora']=='ves1') {
                        $this->info=array(
                            "titolo"=>"1Ts 5,23-24",
                            "testo"=>"Il Dio della pace vi santifichi fino alla perfezione, e tutto quello che è vostro, spirito, anima e corpo, si conservi irreprensibile per la venuta del Signore nostro Gesù Cristo. Colui che vi chiama è fedele e farà tutto questo."
                        );
                    }
                    elseif($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Rm 13,11-12",
                            "testo"=>"È ormai tempo di svegliarvi dal sonno, perché la nostra salvezza è più vicina ora di quando diventammo credenti. La notte è avanzata, il giorno è vicino. Gettiamo via perciò le opere delle tenebre e indossiamo le armi della luce."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Rm 13,13-14a",
                            "testo"=>"Comportiamici onestamente, come in pieno giorno: non in mezzo a gozzoviglie e ubriachezze, non fra impurità e licenze, non in contese e gelosie. Rivestitevi invece del Signore Gesù Cristo."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Ts 3,12-13",
                            "testo"=>"Il Signore vi faccia crescere e abbondare nell'amore vicendevole e verso tutti, per rendere saldi e irreprensibili i vostri cuori nella santità, davanti a Dio Padre nostro, al momento della venuta del Signore nostro Gesù con tutti i suoi santi."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"2Ts 1,6.7.10",
                            "testo"=>"È proprio della giustizia di Dio rendere a voi, che ora siete afflitti, sollievo insieme a noi, quando si manifesterà il Signore Gesù dal cielo con gli angeli della sua potenza, quando egli verrà per esser glorificato nei suoi santi ed esser riconosciuto mirabile in tutti quelli che avranno creduto."
                        );
                    }
                    elseif($this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Fil 4,4-5",
                            "testo"=>"Rallegratevi nel Signore, sempre; ve lo ripeto ancora, rallegratevi. La vostra affabilità sia nota a tutti gli uomini. Il Signore è vicino!"
                        );
                    }
                }

                elseif ($this->actual['weekDay']==1) {
                    
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 2,3",
                            "testo"=>"Venite, saliamo sul monte del Signore, al tempio del Dio di Giacobbe, perché ci indichi le sue vie e possiamo camminare per i suoi sentieri. Poiché da Sion uscirà la legge e da Gerusalemme la parola del Signore."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Is 10,20-21",
                            "testo"=>"In quel giorno: il resto di Israele e i superstiti della casa di Giacobbe si appoggeranno sul Signore, sul Santo di Israele, con lealtà. Tornerà il resto, il resto di Giacobbe, al Dio forte."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Is 10,24.27",
                            "testo"=>"Così dice il Signore, dio degli eserciti: « Popolo mio, che abiti in Sion, non temere. In quel giorno sarà tolto il fardello dalla tua spalla e il giogo cesserà di pesare sul tuo collo »."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Is 13,22; 14,1",
                            "testo"=>"L'ora del Signore si avvicina, i suoi giorni non saranno prolungati. Il Signore infatti avrà pietà di Giacobbe e salverà Israele."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Fil 3,20b-21",
                            "testo"=>"Aspettiamo come salvatore il Signore Gesù Cristo, il quale trasfigurerà il nostro misero corpo per conformarlo al suo corpo glorioso, in virtù del potere che ha di sottomettere a sé tutte le cose."
                        );
                    }
                }

                elseif ($this->actual['weekDay']==2) {
                    
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Gen 49,10",
                            "testo"=>"Non sarà tolto lo scettro da Giuda né il bastone del comando tra i suoi piedi, finché verrà colui al quale esso appartiene e a cui è dovuta l'obbdienza dei popoli."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Ger 23,5",
                            "testo"=>"Ecco, verranno giorni - dice il Signore - nei quali susciterò a Davide un germoglio giusto, che regnerà da vero re e sarà saggio ed eserciterà il diritto e la giustizia sulla terra."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Ger 23,6",
                            "testo"=>"Nei suoi giorni Giuda sarà salvato e Israele starà sicuro nella sua dimora; questosarà il nome con cui lo chiameranno: Signore-nostra-giustizia."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Ez 34,15-16",
                            "testo"=>"Io stesso condurrò le mie pecore al pascolo e io le farò riposare. Oracolo del Signore Dio. Andrò in cerca della pecora perduta e ricondurrò all'ovile quella smarrita; fascerò quella feita e curerò quella malata, avrò cura della grassa e della forte; le pascerò con giustizia."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Cor 1,7b-9",
                            "testo"=>"Aspettiamo la manifestazione del Signore nostro Gesù Cristo. Egli ci confermerà sino alla fine, irreprensibili nel giorno del Signore nostro Gesù Cristo: frdele è Dio, dal quale siamo stati chiamati alla comunione del Figlio suo Gersù Cristo, Signore nostro!"
                        );
                    }
                }

                elseif ($this->actual['weekDay']==3) {
                    
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 7,14b-15",
                            "testo"=>"Ecco: la vergine concepirà e partorirà un figlio, che chiamerà Emmanuele. Egli mangerà panna e miele finché non imparerà a rigettare il male e a scegliere il bene."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Is 2,11",
                            "testo"=>"L'uomo abbasserà gli occhi alteri, la superbia umana si piegherà; sarà esaltato il Signore, lui solo, in quel giorno."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Is 12,2",
                            "testo"=>"Ecco, Dio è la mia salvezza; io confiderò, non avrò mai timore, perché mia forza e mio canto è il Signore; egli è stato la mia salvezza."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Dn 9,19",
                            "testo"=>"Signore, ascolta; Signore, perdona; Signore, guarda e agisci senza indugio, per amore di te stesso, mio Dio, poiché il tuo nome è stato invocato sulla tua città e sul tuo popolo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Cor 4,5",
                            "testo"=>"Non vogliate giudicare nulla prima del tempo, finché venga il Signore. Egli metterà in luce i segreti delle tenebre e manifesterà le intenzioni dei cuori; allora ciascuno avrà la sua lode da Dio."
                        );
                    }
                }

                elseif ($this->actual['weekDay']==4) {
                    
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 45,8",
                            "testo"=>"Stillate, cieli, dall'alto e le nubi facciano piovere il Giusto; si apra la terra e produca la salvezza e germigli insieme la giustizia."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Mi 5,3-4a",
                            "testo"=>"Egli starà là e pascerà con la forza del Signore, con la maestà del nome del Signore suo Dio. Abiteranno sicuri, perché egli allora sarà grande fino agli estremi confini della terra. Egli sarà la nostra pace."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Ag 2,6.9",
                            "testo"=>"Ancora un pò di tempo e io scuoterò il cielo e la terra, il mare e la terraferma. La gloria futura di questa casa sarà più grande di quella di una volta, dice il Signore degli eserciti; in questo luogo porrò la pace - oracolo del Signore degli eserciti -."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Ml 3,20",
                            "testo"=>"Per voi, cultori del mio nome, sorgerà con raggi benefici il sole di giustizia e voi uscirete saltellanti come vitelli dal chiuso."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Gc 5,7-8.9b",
                            "testo"=>"Siate pazienti, fratelli, fino alla venuta del Signore. Guardate l'agricoltore: egli aspetta pazientemente il prezionso frutto della terra finché abbia ricevuto le piogge d'autunno e le piogge di primavera. Siate pazienti anche voi, rinfrancate i vostri cuori, perché la venuta del Signore è vicina. Ecco, il giudice è alle porte."
                        );
                    }
                }

                elseif ($this->actual['weekDay']==5) {
                    
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Ger 30,18.21.22",
                            "testo"=>"Così dice il Signore: Il loro capo sarà uno di essi e da essi uscirà il loro comandante; io lo farò avvicinare ed egli si accosterà a me. Voi sarete il mio popolo e io sarò il vostro Dio."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Ger 29,11.13",
                            "testo"=>"Io conosco i progetti che ho fatto a vostro riguardo - dice il Signore - progetti di pace e non di sventura, per concedervi un futuro pieno di speranza. Voi mi cercherete e mi troverete, perché mi cercherete con tutto il cuore."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Ger 30,18-19a",
                            "testo"=>"Così dice il Signore: Ecco restaurerò la sorte delle tende di Giacobbe e avrò compassione delle sue dimore. La città sarà ricostruita sulle sue rovine e il palazzo sorgerà di nuovo al suo posto. Ne usciranno inni di lode, voci di gente festante."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Bar 3,5-6a",
                            "testo"=>"Non ricordare l'iniquità dei nostri padri, ma ricordati ora della tua potenza e del tuo nome, poiché tu sei il Signore nostro Dio."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"2Pt 3,8b-9",
                            "testo"=>"Davanti al Signore un giorno è come mille anni e mille anni come un giorno solo. Il Signore non ritarda nell'adempiere la sua promessa, come certni credono; ma usa pazienza verso di voi, non volendo che alcuno perisca, ma che tutti abbiano modo di pentirsi."
                        );
                    }
                }

                elseif ($this->actual['weekDay']==6) {
                    
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 11,1-2",
                            "testo"=>"Un germoglio spunterà dal tronco di Iesse, un virgulto germoglierà dalle sue radici. Su di lui si poserà lo spirito del Signore, spirito di sapienza e di intelligenza, spirito di consiglio e di fortezza, spirito di conoscenza e di timore del Signore."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Is 4,2",
                            "testo"=>"In quel giorno il germoglio del Signore crescerà in onore e gloria e il frutto della terra sarà a magnificenza e ornamento per gli scampati di Israele."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Is 4,3",
                            "testo"=>"In quel giorno: chiunque sarà rimasto in Sion e chi sarà superstite in Gerusalemme sarà chiamato santo, cioè quanti saranno iscritti per restare in vita in Gerusalemme."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Is 61,11",
                            "testo"=>"Come la terra produce la vegetazione e come un giardino fa germogliare i semi, così il Signore Dio farà germogliare la giustizia e la lode davanti a tutti i popoli."
                        );
                    }
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1217') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 11,1-2",
                        "testo"=>"Un germoglio spunterà dal tronco di Iesse, un virgulto germoglierà dalle sue radici. Su di lui si poserà lo spirito del Signore, spirito di sapienza e di intelligenza, spirito di consiglio e di fortezza, spirito di conoscenza e di timore del Signore."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Is 4,2",
                        "testo"=>"In quel giorno il germoglio del Signore crescerà in onore e gloria e il frutto della terra sarà a magnificenza e ornamento per gli scampati di Israele."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Is 4,3",
                        "testo"=>"In quel giorno: chiunque sarà rimasto in Sion e chi sarà superstite in Gerusalemme sarà chiamato santo, cioè quanti saranno iscritti per restare in vita in Gerusalemme."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Is 61,11",
                        "testo"=>"Come la terra produce la vegetazione e come un giardino fa germogliare i semi, così il Signore Dio farà germogliare la giustizia e la lode davanti a tutti i popoli."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Ts 5,23-24",
                        "testo"=>"Il Dio della pace vi santifichi fino alla perfezione, e tutto quello che è vostro, spirito, anima e corpo, si conservi irreprensibile per la venuta del Signore nostro Gesù Cristo. Colui che vi chiama è fedele e farà tutto questo."
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1218') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Rm 13,11-12",
                        "testo"=>"È ormai tempo di svegliarvi dal sonno, perché la nostra salvezza è più vicina ora di quando diventammo credenti. La notte è avanzata, il giorno è vicino. Gettiamo via perciò leopere delle tenebre r indossiamo le armi della luce."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Rm 13,13-14a",
                        "testo"=>"Comportiamoci onestamente come in pieno giorno: non in mezzo a gozzoviglie e ubriachezze, non fra impurità e licenze, non in contese e gelosie. Rivestitevi invece del Signore Gesù Cristo."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"1Ts 3,12-13",
                        "testo"=>"Il Signore vi faccia crescere e abbondare nell'amore vicendevole e verso tutti, per rendere saldi e irreprensibili i vostri cuori nella santità, davanti a Dio Padre nostro, al momento della venuta del Signore nostro Gesù con tutti i suoi santi."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"2Ts 1,6.7.10",
                        "testo"=>"È proprio della giustizia di Dio rendere a voi, che ora siete afflitti, sollievo insieme a noi, quando si manifesterà il Signore Gesù dal cielo con gli angeli della sua potenza, quando egli verrà per essere glorificato nei suoi santi ed esser riconosciuto mirabile in tutti quelli che avranno creduto."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Fil 4,4-5",
                        "testo"=>"Rallegratevi nel Signore, sempre; ve lo ripeto ancora, rallegratevi. La vostra affabilitù sia nota a tutti gli uomini. Il Signore è vicino!"
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1219') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 2,3",
                        "testo"=>"Venite, saliamo sul monte del Signore, al tempio del Dio di Giacobbe, perché ci indichi le sue vie e possiamo camminare per i suoi sentieri. Poiché da Sion uscirà la legge e da Gerusalemme la parola del Signore."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Is 10,20-21",
                        "testo"=>"In quel giorno: il resto di Israele e i superstiti della casa di Giacobbe si appoggeranno sul Signore, sul Santo di Israele, con lealtà. Tornerà il resto, il resto di Giacobbe, al Dio forte."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Is 10,24.27",
                        "testo"=>"Così dice il Signore, Dio degli eserciti: « Popolo mio, che abiti in Sion, non temere. In quel giorno sarà tolto il fardello dalla tua spalla e il giogo cesserà di pesare sul tuo collo »."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Is 13,22; 14,1",
                        "testo"=>"L'ora del Signore si avvicina, i suoi giorni non saranno prolungati. Il Signore infatti avrà pietà di Giacobbe e salverà Israele."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Fil 3,20b-21",
                        "testo"=>"Aspettiamo come salvatore il Signore Gesù Cristo, il quale trasfigurerà il nostro misero corpo per conformarlo al suo corpo glorioso, in virtù del potere che ha di sottomettere a sé tutte le cose."
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1220') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Gen 49,10",
                        "testo"=>"Non sarà tolto lo scettro da Giuda né il bastone del comando tra i suoi piedi, finché verrà colui a cui esso appartiene e a cui è dovuta l'obbedienza dei popoli."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Ger 23,5",
                        "testo"=>"Ecco, veranno giorni - dice il Signore - nei quali susciterò a Davide un germoglio giusto, che regnerà da vero re e sarà saggio ed eserciterà il diritto e la giustizia sulla terra."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Ger 23,6",
                        "testo"=>"Nei suoi giorni Giuda sarà salvato e Israele sarà sicuro nella sua dimora; questo sarà il nome con cui lo chiameranno; Signore-nostra-giustizia."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Ez 34,15-16",
                        "testo"=>"Io stesso condurrò le mie pecore al pascolo e io le farò riposare. Oracolo del Signore Dio. Andrò in cerca della pecora perduta e ricondurrò all'ovile quella smarrita; fascerò quella feita e curerò quella malata, avrò cura della grassa e della forte; le pascerò con giustizia."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Cor 1,7b-9",
                        "testo"=>"Aspettiamo la manifestazione del Signore nostro Gesù Cristo. Egli ci confermerà sino alla fine, irreprensibili nel giorno del Signore nostro Gesù Cristo: frdele è Dio, dal quale siamo stati chiamati alla comunione del Figlio suo Gersù Cristo, Signore nostro!"
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1221') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 14b-15",
                        "testo"=>"Ecco: la vergine concepirà e partorirà un figlio, che chiamerà Emmanuele. Egli mangerà panna e miele finché non imparerà a rigettare il male e a scegliere il bene."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Is 2,11",
                        "testo"=>"L'uomo abbasserà gli occhi alteri, la superbia umana si piegherà; sarà esaltato il Signore, lui solo, in quel giorno."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Is 12,2",
                        "testo"=>"Ecco, Dio è la mia salvezza; io confiderò, non avrò mai timore, perché mia forza e mio canto è il Signore; egli è stato la mia salvezza."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Dn 9,19",
                        "testo"=>"Signore, ascolta; Signore, perdona; Signore, guarda e agisci senza indugio, per amore di te stesso, mio Dio, poiché il tuo nome è stato invocato sulla tua città e sul tuo popolo."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Cor 4,5",
                        "testo"=>"Non vogliate giudicare nulla prima del tempo, finché venga il Signore. Egli metterà in luce i segreti delle tenebre e manifesterà le intenzioni dei cuori; allora ciascuno avrà la sua lode da Dio."
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1222') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 45,8",
                        "testo"=>"Stillate, cieli, dall'alto e le nubi facciano piovere il Giusto; si apra la terra e produca la salvezza e germogli insieme la giustizia."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Mi 5,3-4a",
                        "testo"=>"Egli starà là e pascerà con la forza del Signore, con la maestà del nome del Signore suo Dio. Abiteranno sicuri, perché egli allora sarà grande fino agli estremi confini della terra. Egli sarà la nostra pace."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Ag 2,6.9",
                        "testo"=>"Ancora un pò di tempo e io scuoterò il cielo e la terra, il mare e la terraferma. La gloria futura di questa casa sarà più grande di quella di una volta, dice il Signore degli eserciti; in questo luogo porrò la pace - oracolo del Signore degli eserciti -."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Ml 3,20",
                        "testo"=>"Per voi, cultori del mio nome, sorgerà con raggi benefici il sole di giustizia e voi uscirete saltellanti come vitelli dal chiuso."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Gc 5,7-8.9b",
                        "testo"=>"Siate pazienti, fratelli, fino alla venuta del Signore. Guardate l'agricoltore: egli aspetta pazientemente il prezionso frutto della terra finché abbia ricevuto le piogge d'autunno e le piogge di primavera. Siate pazienti anche voi, rinfrancate i vostri cuori, perché la venuta del Signore è vicina. Ecco, il giudice è alle porte."
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1223') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Ger 30,18.21.22",
                        "testo"=>"Così dice il Signore: Il loro capo sarà uno di essi e da essi uscirà il loro comandante; io lo farò avvicinare ed egli si accosterà a me. Voi sarete il mio popolo e io il vostro Dio."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Ger 29,11.13",
                        "testo"=>"Io conosco i progetti che ho fatto a vostro riguardo - dice il Signore - progetti di pace e non di sventura, per concedervi un futuro pieno di speranza. Voi mi cercherete e mi troverete, perché mi cercherete con tutto il cuore."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Ger 30,18-19a",
                        "testo"=>"Così dice il Signore: Ecco restaurerò la sorte delle tende di Giacobbe e avrò compassione delle sue dimore. La città sarà ricostruita sulle sue rovine e il palazzo sorgerà di nuovo al suo posto. Ne usciranno inni di lode, voci di gente festante."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Bar 3,5-6a",
                        "testo"=>"Non ricordare l'iniquità dei nostri padri, ma ricordati ora della tua potenza e del tuo nome, poiché tu sei il Signore nostro Dio."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"2Pt 3,8b-9",
                        "testo"=>"Davanti al Signore un giorno è come mille anni e mille anni come un giorno solo. Il Signore non ritarda nell'adempiere la sua promessa, come certni credono; ma usa pazienza verso di voi, non volendo che alcuno perisca, ma che tutti abbiano modo di pentirsi."
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1224') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 11,1-2",
                        "testo"=>"Un germoglio spunterà dal tronco di Iesse, un virgulto germoglierà dalle sue radici. Su di lui si poserà lo spirito del Signore, spirito di sapienza e di intelligenza, spirito di consiglio e di fortezza, spirito di conoscenza e di timore del Signore."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Is 4,2",
                        "testo"=>"In quel giorno il germoglio del Signore crescerà in onore e gloria e il frutto della terra sarà a magnificenza e ornamento per gli scampati di Israele."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Is 4,3",
                        "testo"=>"In quel giorno: chiunque sarà rimasto in Sion e chi sarà superstite in Gerusalemme sarà chiamato santo, cioè quanti saranno iscritti per restare in vita in Gerusalemme."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Is 61,11",
                        "testo"=>"Come la terra produce la vegetazione e come un giardino fa germogliare i semi, così il Signore Dio farà germogliare la giustizia e la lode davanti a tutti i popoli."
                    );
                }
            }    
        }
        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='N') {

            if (substr($this->actual['today'],4,4)=='1225') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        "titolo"=>"Gal 4,4-5",
                        "testo"=>"Quando venne la pienezza del tempo, Dio mandò il suo Figlio, nato da donna, nato sotto la legge, per riscattare coloro che erano sotto la legge, perché ricevessimo l'adozione a figli."
                    );
                }
                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Eb 1,1-2",
                        "testo"=>"Dio, che aveva già parlato nei tempi antichi molte volte e in diversi modi ai padri per mezzo dei profeti, ultimamente, in questi giorni, ha parlato a noi per mezzo del Figlio, che ha costituito erede di tutte le cose e per mezzo del quale ha fatto anche il mondo."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Tt 2,11-12",
                        "testo"=>"È apparsa la grazia di Dio, apportatrice di salvezza per tutti gli uomini, che ci insegna a rinnegare l'empietà e i desideri mondani e a vivere con sobrietà, giustizia e pietà in questo mondo."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"1Gv 4-9",
                        "testo"=>"In questo si è manifestato l'amore di Dio per noi: Dio ha mandato il suo Figlio unigenito nel mondo, perché noi avessimo la vita per lui."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"At 10,36",
                        "testo"=>"Questa è la parola che Dio ha inviato ai figli d'Israele: la buona novella della pace, per mezzo di Gesù Cristo, che è il Signore di tutti."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Gv 1,1-3",
                        "testo"=>"Vi annunziamo ciò che era fin dal principio, ciò che noi abbiamo udito, ciò che noi abbiamo verduto con i nostri occhi, ciò che noi abbiamo contemplato e ciò che le nostre mani hanno toccato, ossi il Verbo della vita. Poiché la vita si è fatta visibile, noi l'abbiamo veduta e di ciò rendiamo testimoinianza e vi annunziamo la vita eterna, che era presso il Padre e si è resa visibile a noi. Quello che abbiamo veduto e udito, noi lo annunziamo anche a voi, perché anche vi siate in comunione con noi. La nostra comunioìne è col Padre e col Figlio suo Gesù Cristo."
                    );
                }
            }

            elseif ($this->actual['evCode']=='SAF') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        "titolo"=>"2Cor 8,9",
                        "testo"=>"Conoscete la grazia del signore nostro Gesù Cristo: da ricco che era, si è fatto povero per voi, perché voi diventaste ricchi per mezzo della sua povetà."
                    );
                }
                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Dt 5,16",
                        "testo"=>"Onora tuo padre e tua madre, come il Signore Dio tuo ti ha comandato, perché la tua vita sia lunga e tu sii felice nel paese che il Signore tuo Dio ti da."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Col 3,12-13",
                        "testo"=>"Rivestitevi, come eletti di Dio, santi e amati, di sentimenti di misericordia, di bontà, di umiltà, di mansuetudine, di pazienza, sopportandovi a vicenda e perdonandovi scambievolmente, se qualcuno abbia di che lamentarsi nei confrnonti degli altri. Come il Signore vi ha perdonato, così fate anche voi."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Col 3,14-15",
                        "testo"=>"Al di sopra di tutto vi sia la carità, che è il vincolo della perfezione. E la pace di Cristo regni nei vostri cuori, perché ad essa siete stati chiamati in un solo corpo. E siate riconoscenti!"
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Col 3,17",
                        "testo"=>"Tutto quello che fate in parole ed opere, tutto si compia nel nome del Signore Gesù, rendendo per mezzo di lui grazie a Dio Padre."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Fil 2,6-7",
                        "testo"=>"Cristo Gesù, pur essendo di natura divina, non considerò un tesoro geloso la sua uguaglianza con Dio; ma spogliò se stesso, assumando la condizione di servo e divenendo simile agli uomini; egli è apparso in forma umana."
                    );
                }
            }

            elseif ($this->actual['evCode']=='2DN') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        "titolo"=>"1Gv 5,20",
                        "testo"=>"Sappiamo che il Figlio di Dio è venuto e ci ha dato l'intelligenza per conoscere il vero Dio e noi siamo nel vero Dio e nel Figlio suo Gesù Cristo: egli è il vero Dio e la vita eterna."
                    );
                }
                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Eb 1,1-2",
                        "testo"=>"Dio, che aveva già parlato nei tempi antichi molte volte e in diversi modi ai padri per mezzo dei profeti, ultimamente, in questi giorni, ha parlato a noi per mezzo del Figlio, che ha costituito erede di tutte le cose e per mezzo del quale ha fatto anche il mondo."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Tt 2,11-12",
                        "testo"=>"È apparsa la grazia di Dio, apportatrice di salvezza per tutti gli uomini, che ci insegna a rinnegare l'empietà e i desideri mondani e a vivere con sobrietà, giustizia e pietà in questo mondo."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"1Gv 4-9",
                        "testo"=>"In questo si è manifestato l'amore di Dio per noi: Dio ha mandato il suo Figlio unigenito nel mondo, perché noi avessimo la vita per lui."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"At 10,36",
                        "testo"=>"Questa è la parola che Dio ha inviato ai figli d'Israele: la buona novella della pace, per mezzo di Gesù Cristo, che è il Signore di tutti."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Gv 1,1-3",
                        "testo"=>"Vi annunziamo ciò che era fin dal principio, ciò che noi abbiamo udito, ciò che noi abbiamo verduto con i nostri occhi, ciò che noi abbiamo contemplato e ciò che le nostre mani hanno toccato, ossi il Verbo della vita. Poiché la vita si è fatta visibile, noi l'abbiamo veduta e di ciò rendiamo testimoinianza e vi annunziamo la vita eterna, che era presso il Padre e si è resa visibile a noi. Quello che abbiamo veduto e udito, noi lo annunziamo anche a voi, perché anche vi siate in comunione con noi. La nostra comunioìne è col Padre e col Figlio suo Gesù Cristo."
                    );
                }
            }

            elseif ($this->actual['evCode']=='1226a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"At 6,2b-5a",
                        "testo"=>"Gli apostoli dissero: « Non è giusto che noi trascuriamo la parola di Dio per il servizio delle mense. Cercate dunque, fratelli, tra di voi sette uomini di buona reputazione, pieni di Spirito e di saggezza, ai quali affideremo quest'incarico. Noi, invece, ci dedicheremo alla preghiera e al ministero della parola ». Piacque questa proposta a tutto il gruppo ed elessero Stefano, uomo pieno di fede e di Spirito Santo."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"1Pt 5,10-11",
                        "testo"=>"Il Dio di ogni grazia, il quale vi ha chiamati alla sua gloria eterna in Cristo, egli stesso vi ristabilirà, dopo una breve sofferenza vi confermerà e vi renderà forti e saldi. A lui la potenza nei secoli. Amen!"
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Gc 1,12",
                        "testo"=>"Beato l'uomo che soopporta la tentazione, perché una volta superata la prova riceverà la  corona della vita che il Signore ha promesso a quelli che lo amano."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Sap 3,1-3",
                        "testo"=>"Le anime dei giusti sono nelle mani di Dio, nessun tormento le toccherà. Agli occhi degli stolti parve che morissero; la loro fine fu ritenuta una sciagura, la loro dipartita da noi una rovina, ma essi sono nella pace."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Gv 1,5b.7",
                        "testo"=>"Dio è luce e in lui non ci sono tenebre. Se camminiamo nella luce, come egli è nella luce, siamo in comunione gli uni con gli altri e il sangue di Gesù, suo Figlio, ci purifica da ogni peccato."
                    );
                }
            }

            elseif ($this->actual['evCode']=='1227a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"At 4,19-20",
                        "testo"=>"Davanti ai capi del sinedrio Pietro e Giovanni replicarono: « Se sia giusto innanzi a Dio obbedire a voi più che a lui, giudicatelio voi stessi; noi non possiamo tacere quello che abbiamo visto e ascoltato! »."
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
                        "titolo"=>"Rm 8,3b-4",
                        "testo"=>"Dio, mandando il proprio Figlio in una carne simile a quella del peccato e in vista del peccato, ha condannato il peccato nella carne, perché la giustizia della legge si adempisse in noi, che non camminiamo secondo la carne ma secondo lo Spirito."
                    );
                }
            }

            elseif ($this->actual['evCode']=='1228a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Ger 31,15",
                        "testo"=>"Così dice il Signore: « Una voce si ode da Rama, lamento e pianto amaro: Rachele piange i suoi figli, rifiuta d'essere consolata perché non sono più »."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Lam 1,16",
                        "testo"=>"Io piango, dal mio occhio scorrono lacrime, perché lontano da me è chi consola, chi potrebbe ridarmi la vita; i miei figli sono desolati, perché il nemico ha prevalso."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Lam 2,11",
                        "testo"=>"Si son consunti per le lacrime i miei occhi, le mie viscere sono sconvolte; mentre vien meno il bambino e il lattante nelle piazze della città."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Ger 31,16a.17a",
                        "testo"=>"Dice il Signore: « Trattieni la voce del pianto, i tuoi occhi dal versare lacrime, perché c'è un compenso per le tue pene, c'è una speranza per la tua discendenza »."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Ef 2,3b-5",
                        "testo"=>"Eravamo per natura meritevoli d'ira, come gli altri. Ma Dio, ricco di misericordia, per il grande amore con il quale ci ha amati, da morti che eravamo per i peccati, ci ha fatti rivivere con Cristo; per grazia infatti siete stati salvati."
                    );
                }
            }

            elseif ($this->actual['evCode']=='1229a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Eb 1,1-2",
                        "testo"=>"Dio, che aveva già parlato nei tempi antichi molte volte e in diversi modi ai padri per mezzo dei profeti, ultimamente, in questi giorni, ha parlato a noi per mezzo del Figlio, che ha costituito erede di tutte le cose e per mezzo del quale ha fatto anche il mondo."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Tt 2,11-12",
                        "testo"=>"È apparsa la grazia di Dio, apportatrice di salvezza per tutti gli uomini, che ci insegna a rinnegare l'empietà e i desideri mondani e a vivere con sobrietà, giustizia e pietà in questo mondo."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"1Gv 4-9",
                        "testo"=>"In questo si è manifestato l'amore di Dio per noi: Dio ha mandato il suo Figlio unigenito nel mondo, perché noi avessimo la vita per lui."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"At 10,36",
                        "testo"=>"Questa è la parola che Dio ha inviato ai figli d'Israele: la buona novella della pace, per mezzo di Gesù Cristo, che è il Signore di tutti."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Gv 1,1-3",
                        "testo"=>"Vi annunziamo ciò che era fin dal principio, ciò che noi abbiamo udito, ciò che noi abbiamo verduto con i nostri occhi, ciò che noi abbiamo contemplato e ciò che le nostre mani hanno toccato, ossi il Verbo della vita. Poiché la vita si è fatta visibile, noi l'abbiamo veduta e di ciò rendiamo testimoinianza e vi annunziamo la vita eterna, che era presso il Padre e si è resa visibile a noi. Quello che abbiamo veduto e udito, noi lo annunziamo anche a voi, perché anche vi siate in comunione con noi. La nostra comunioìne è col Padre e col Figlio suo Gesù Cristo."
                    );
                }
            }

            elseif ($this->actual['evCode']=='1230a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 9,5",
                        "testo"=>"Un bambino è nato per noi, ci è stato dato un figlio. Sulle sue spalle è il segno della sovranità ed è chiamato: Consigliere ammirabile, Dio potente, Padre per sempre, Principe della pace."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Dt 4,7",
                        "testo"=>"Nessuna grande nazione ha la divinità così vicina a sé, come il Signore nostro Dio è vicino a noi ogni volta che lo invochiamo."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Is 12,5-6",
                        "testo"=>"Cantate inni al Signore, perché ha fatto opere grandi, ciò sia noto in tutta la terra. Gridate giulivi ed esultate, abitanti di Sion, perché grande è in mezzo a voi è il Santo di Israele."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Tb 14,8-9",
                        "testo"=>"I popoli abbandoneranno i loro idoli, verranno in Gerusalemme e vi abiteranno; in essa tutti i re della terra esulteranno adorando il re d'Israele."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"2Pt 1,3-4",
                        "testo"=>"Cristo nella sua potenza divina ci ha fatto dono di ogni bene per quanto riguarda la vita e la pietà, mediante la conoscenza di colui che ci ha chiamati con la sua gloria e potenza. Con queste ci ha donato i beni grandissimi e preziosi che erano stati promessi, perché diventaste per loro mezzo partecipi della natura divina, essendo sfuggiti alla corruzione che è nel mondo a causa della concupiscenza."
                    );
                }
            }

            elseif ($this->actual['evCode']=='1231a' || $this->actual['evCode']=='F0108') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 4,2-3",
                        "testo"=>"In quel giorno il germoglio del Signore crescerà in onore e gloria e il frutto della terra sarà a magnificenza e ornamento per gòi scampati di Israele. Chiunque sarà rimasto in Sion e chi sarà superstite in Gerusalemme sarà chiamato santo, cioè quanti saranno iscritti per restare in vita in Gerusalemme."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Is 45,13",
                        "testo"=>"Io l'ho stimolato per la giustizia; spianerò tutte le sue vie. Egli ricostruirà la mia città e rimanderà i miei deportati, senza denaro e senza regali, dice il Signore degli eserciti."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Is 48,20b",
                        "testo"=>"Annunziatelo con voce di gioia, diffondetelo, fatelo giungere fino all'estremità della terra. Dite: « Il Signore ha risattato il suo servo Giacobbe »."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Is 65,1",
                        "testo"=>"Mi feci ricercare da chi non mi interrogava, mi feci trovare da chi non mi cercava. Dissi: « Eccomi, eccomi » a gente che non invocava il mio nome."
                    );
                }
            }

            elseif ($this->actual['evCode']=='MSS') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        "titolo"=>"Gal 4,4-5",
                        "testo"=>"Quando venne la pienezza del tempo, Dio mandò il suo Figlio, nato da donna, nato sotto la legge, per riscattare coloro che erano sotto la legge, perché ricevessimo l'adozione a figli."
                    );
                }
                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Mi 5,2-3a.4a",
                        "testo"=>"Dio li metterà in potere altrui fino a quando colei che deve partorire partorirà; e il resto dei tuoi fratelli ritornerà ai figli d'Israele. Egli starà là e pascerà con la forza del Signore, con la maestà del nome del Signore suo Dio. Egli sarà la nostra pace."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Sof 3,14.15b",
                        "testo"=>"Gioisci figla di Sion, esulta, Israele, e rallegrati con tutto il cuore, figlia di Gerusalemme! Re d'Israele è il Signore in mezzo a te."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Zc 9,9a",
                        "testo"=>"Esulta grandemente, figlia di Sion, giubila, figlia di Gerusalemme! Ecco, a te viene il tuo re."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Bar 5,3-4",
                        "testo"=>"Dio mostrerà il tuo splendore, Gerusalemme, ad ogni creatura sotto il cielo. Sarai chiamata da Dio per sempre: Pace della giustizia e gloria della pietà."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Gal 4,4-5",
                        "testo"=>"Quando venne la pienezza del tempo, Dio mandò il suo Figlio, nato da donna, nato sotto la legge, per riscattare coloro che erano sotto la legge, perché ricevessimo l'adozione a figli."
                    );
                }
            }

            elseif ($this->actual['evCode']=='F0102' || $this->actual['evCode']=='F0109') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 49,8b-9a",
                        "testo"=>"Ti ho formato e posto come alleanza per il popolo, per far risorgere il paese, per farti rioccupare l'eredità devastata, per dire ai prigionieri: Uscite, e a quanti sono nelle tenebre: Venite fuori."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"1Tm 1,15",
                        "testo"=>"Questa parola è sicura e degna di essere da tutti accolta: Cristo Gesù è venuto nel mondo per salvare i peccatori."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Ap 21,23-24",
                        "testo"=>"La città non ha bisogno della luce del sole, né della luce della luna, perché la gloria di Dio la illumina e la sua lampada è l'Agnello. Le nazioni cammineranno alla sua luce e i re della terra a lei porteranno la loro magnificenza."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"1Gv 1,5",
                        "testo"=>"Questo è il messaggio che abbiamo udito da lui e che ora vi annunziamo: Dio è luce e in lui non ci sono tenebre."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Col 1,13-15",
                        "testo"=>"Dio ci ha liberati dal potere delle tenebre e ci ha trasferiti nel regno del suo Figlio diletto, per opera del quale abbiamo la redenzione, la remissione dei peccati. Egli è l'immagine del Dio invisibile, generato prima di ogni creatura."
                    );
                }
            }

            elseif ($this->actual['evCode']=='F0103' || $this->actual['evCode']=='F0110') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 62,11b-12a",
                        "testo"=>"Dite alla figlia di Sion: Ecco, arriva il tuo salvatore; ecco, ha con sè la sua mercede, la sua ricompensa è davanti a lui. Li chiameranno popolo santo, redenti del Signore."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Is 2,3b-4",
                        "testo"=>"Da Sion uscirà la legge e da Gerusalemme la parola del Signore. Egli sarà giudice fra le genti e sarà arbitro fra molti popoli. Forgeranno le loro spade in vomeri, le loro lance in falci; un popolo non alzerà più la spada contro un altro poplo, non si eserciteranno più nell'arte della guerra."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Is 9,1",
                        "testo"=>"Il popolo che camminava nelle tenebre vide una grande luce; su coloro che abitavano la terra tenebrosa una luce rifulse."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Is 60,4b-5",
                        "testo"=>"I tuoi figli, Gerusalemme, vengono da lontano, le tue figlie sono portate in braccio. A quella vista sarai raggiante, palpiterà e si dilaterà il tuo cuore, perché le ricchezze del mare si riverseranno su di te, verranno a te i beni dei popoli."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Gv 1,5b.7",
                        "testo"=>"Dio è luce e in lui non ci sono tenebre. Se camminiamo nella luce, come egli è nella luce, siamo in comunione gli uni con gli altri e il sangue di Gesù, suo Figlio, ci purifica da ogni peccato."
                    );
                }
            }

            elseif ($this->actual['evCode']=='F0104' || $this->actual['evCode']=='F0111') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 45,22-23",
                        "testo"=>"Volgetevi a me e sarete salvi, paesi tutti della terra, perché io sono Dio; non ce n'è un altro. Lo giuro su me stesso, dalla mia bocca esce la verità, una parola irrevocabile: davanti a me si piegherà ogni ginocchio, per me giurerà ogni lingua."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Ger 31,7-8a",
                        "testo"=>"Così dice il Signore: Innalzate canti di gioia per Giacobbe, esultate per la prima delle nazioni, fate usire la vostra lode e dite: Il Signore ha salvato il suo popolo, un resto di Israele. Eccoli riconduco dal paese del settentrione e li raduno dall'estremità della terra."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Ger 31,11-12a",
                        "testo"=>"Il Signore ha redento Giacobbe, lo ha riscattato dalle mani del più forte di lui. Verranno e canteranno inni sull'altura di Sion, affluiranno verso i beni del Signore."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Zc 8,7-8",
                        "testo"=>"Così dice il Signore degli eserciti: Ecco, io salvo il mio popolo dalla terra d'oriente e d'occidente: li ricondurrò ad abitre in Gerusalemme; saranno il mio popolo ed io sarò il loro Dio, nella fedeltà e nella giustizia."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Rm 8,3b-4",
                        "testo"=>"Dio, mandando il proprio Figlio in una carne simile a quella del peccato e in vista del peccato, ha condannato il peccato nella carne, perché la giustizia della legge si adempisse in noi, che non camminiamo secondo la carne ma secondo lo Spirito."
                    );
                }
            }

            elseif ($this->actual['evCode']=='F0105') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Sap 7,26-27",
                        "testo"=>"La sapienza è un rilfesso della luce perenne, uno specchio senza macchia dell'attività di Dio e un'immagine della sua bontà. Sebbene unica, essa può tutto; pur rimanendo in se stessa, tutto rinnova e attraverso le età entrando nelle anime sante, forma amici di Dio e profeti."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Ez 20,41-42a",
                        "testo"=>"Io vi accetterò come soave profumo, quando vi avrò liberati dai popoli e vi avrò radunati dai paesi nei quali foste dispersi: mi mostrerò santo in voi agli occhi delle genti. Allora voi saprete che io sono il Signore."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Ez 34,11-12",
                        "testo"=>"Così dice il Signore: Ecco, io steso cercherò le mie pecore e ne avrò cura. Come un pastore passa in rassegna il suo gregge quando si trova in mezzo alle sua pecore che erano state disperse, così io passerò in rassegna le mie pecore e le radunerò da tutti i luoghi dove erano disperse nei giorni nuvolosi e di caligine."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Mi 2,12",
                        "testo"=>"Certo ti radunerò tutto, o Giacobbe, certo ti raccoglierò, resto di Israele. Li metterò insieme come pecore in un sicuro recinto, come una mandria in mezzo al pascolo."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Gv 5,20",
                        "testo"=>"Sappiamo che il Figlio di Dio è venuto e ci ha dato l'intelligenza per conoscere il vero Dio. E noi siamo nel vero Dio e nel Figlio suo Gesù Cristo: egli è il vero Dio e la vita eterna."
                    );
                }
            }

            elseif ($this->actual['evCode']=='EPI') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        "titolo"=>"2Tm 1,9-10",
                        "testo"=>"Dio ci ha salvati e ci ha chiamati con una vocazione santa, non già in base alle nostre opere, ma secondo il suo proposito e la sua grazia; grazia che ci è stata data in Cristo Gesù fin dall'eternità, ma è stata rivelata solo ora con l'apparizione del Salvatore nostro Cristo Gesù. Egli ha vinto la morte e ha fatto risplendere la vita e l'immortalità per mezzo del vangelo."
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 52,7-10",
                        "testo"=>"Come sono belli sui monti i piedi del messaggero di lieti annunzi che annunzia la pace, messaggero di bene che annunzia la salvezza e che dice a Sion: « Regna il tuo Dio ». Senti? le tue sentinelle alzano la voce, insieme gridano di gioia, poiché vedono con gli occhi il ritorno del Signore in Sion. Prorompete insieme in canti di gioia, rovine di Gerusalemme, perché il Signore ha consolatoil suo popolo, ha riscattato Gerusalemme. Il Signore ha snudato il suo santo braccio davanti a tutti i popoli; tutti i confini della terra vedranno la salvezza del nostro Dio."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Ap 15,4",
                        "testo"=>"Chi non temerà, o Signore, e non glorificherà il tuo nome? Poiché tu solo sei santo. Tutte le genti verranno e si prostreranno danvanti a te."
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
                        "titolo"=>"Zc 2,15",
                        "testo"=>"Nazioni numerose aderiranno in quel giorno al Signore e diverranno suo popolo ed egli dimorerà in mezzo a te e tu saprai che il Signore degli eserciti mi ha inviato a te."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Tt 3,4-5",
                        "testo"=>"Quando si sono manifestati la bontà di Dio, salvatore nostro, e il suo amore per gli uomini, egli ci ha salvati non in virtù di opere di giustizia da noi compiute, ma per sua misericordia mediante un lavacro di rigenerazione e di rinnovamento nello Spirito Santo."
                    );
                }
            }

            elseif ($this->actual['evCode']=='F0107') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 9,5",
                        "testo"=>"Un bambino è nato per noi, ci è stato dato un figlio. Sulle sue spalle è il segno della sovranità ed è chiamato: Consigliere ammirabile, Dio potente, Padre per sempre, Principe della pace."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Dt 4,7",
                        "testo"=>"Nessuna grande nazione ha la divinità così vicina a sé, come il Signore nostro Dio è vicino a noi ogni volta che lo invochiamo."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Is 12,5-6",
                        "testo"=>"Cantate inni al Signore, perché ha fatto opere grandi, ciò sia noto in tutta la terra. Gridate giulivi ed esultate, abitanti di Sion, perché grande è in mezzo a voi è il Santo di Israele."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Tb 14,8-9",
                        "testo"=>"I popoli abbandoneranno i loro idoli, verranno in Gerusalemme e vi abiteranno; in essa tutti i re della terra esulteranno adorando il re d'Israele."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"2Pt 1,3-4",
                        "testo"=>"Cristo nella sua potenza divina ci ha fatto dono di ogni bene per quanto riguarda la vita e la pietà, mediante la conoscenza di colui che ci ha chiamati con la sua gloria e potenza. Con queste ci ha donato i beni grandissimi e preziosi che erano stati promessi, perché diventaste per loro mezzo partecipi della natura divina, essendo sfuggiti alla corruzione che è nel mondo a causa della concupiscenza."
                    );
                }
            }

            elseif ($this->actual['evCode']=='F0112') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Sap 7,26-27",
                        "testo"=>"La sapienza è un rilfesso della luce perenne, uno specchio senza macchia dell'attività di Dio e un'immagine della sua bontà. Sebbene unica, essa può tutto; pur rimanendo in se stessa, tutto rinnova e attraverso le età entrando nelle anime sante, forma amici di Dio e profeti."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Ez 20,41-42a",
                        "testo"=>"Io vi accetterò come soave profumo, quando vi avrò liberati dai popoli e vi avrò radunati dai paesi nei quali foste dispersi: mi mostrerò santo in voi agli occhi delle genti. Allora voi saprete che io sono il Signore."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Ez 34,11-12",
                        "testo"=>"Così dice il Signore: Ecco, io steso cercherò le mie pecore e ne avrò cura. Come un pastore passa in rassegna il suo gregge quando si trova in mezzo alle sua pecore che erano state disperse, così io passerò in rassegna le mie pecore e le radunerò da tutti i luoghi dove erano disperse nei giorni nuvolosi e di caligine."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Mi 2,12",
                        "testo"=>"Certo ti radunerò tutto, o Giacobbe, certo ti raccoglierò, resto di Israele. Li metterò insieme come pecore in un sicuro recinto, come una mandria in mezzo al pascolo."
                    );
                }
            }
            
        }

        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='Q') {

            if ($this->actual['settimana']<5) {

                if ($this->actual['weekDay']==0) {

                    if($this->actual['ora']=='ves1') {
                        $this->info=array(
                            "titolo"=>"2Cor 6,1-4a",
                            "testo"=>"Fratelli, vi esrotiamo a non accogliere invano la grazia di Dio. Egli dice infatti: Al momento favorevole ti ho esaudito e nel giorno della salvezza ti ho soccorso. Ecco ora il momento favorevole, ecco ora il giorno della salvezza! Da parte nostra non diamo motivo di scandalo a nessuno, perché non venga biasimato il nostro ministero; ma in ogni cosa ci presentiamo come ministri di Dio."
                        );
                    }
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Ne 8,9.10",
                            "testo"=>"Questo giorno è consacrato al Signore vostro Dio; non fate lutto e non piangete! Perché questo giorno è consacrato al Signore nostro; non vi rattristate, perché la gioia del Signore è la vostra forza."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"1Ts 4,1.7",
                            "testo"=>"Fratelli, vi preghiamo e supplichiamo nel Signore Gesù: avete appreso da noi come comportarvi in modo da piacere a Dio, e così già vi comportate; cercate di agire sempre così per distinguervi ancora di più. Dio infatti non ci ha chiamati all'impurità, ma alla santificazione."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Is 30,15.18",
                            "testo"=>"Così dice il Signore Dio, il santo di Israele: « Nella conversione e nella calma sta la vostra salvezza, nell'abbandono confidente sta la vostra forza ». Il Signore aspetta per farvi grazia, per questo sorge per aver pietà di voi, perché un Dio giusto è il Signore; beati coloro che sperano in lui!"
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Dt 4,29.30b-31",
                            "testo"=>"Cercherai il Signore tuo Dio e lo troverai, se lo cercerai con tutto il cuore e con tutta l'anima. Tornerai l Signore tuo Dio ed ascolterai la sua voce, poiché il Signore Dio tuo è un Dio misericordioso; non ti abbandonerà e non ti distruggerà, non dimenticherà l'alleanza che ha giurata ai tuoi padri."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Cor 9,24-25",
                            "testo"=>"Non sapete ceh nelle corse allo stadio tutti corrono, ma uno solo conquista il premio? Correte anche voi in modo da conquistarlo! Però ogni atleta è temperante in tutto; essi lo fanno per ottenere una corona corruttibile, noi invece una incorruttibile."
                        );
                    }
                }

                if ($this->actual['weekDay']==1) {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Es 19,4-6a",
                            "testo"=>"Voi stessi avete visto come ho sollevato voi su ali di aquile e vi  ho fatti venire fino a me. Ora, se vorrete ascoltare la mia voce e custodire la mia alleanza, voi sarete per me la proprietà tra tutti i popoli, perché mia è tutta la terra! Voi sarete per me un regno di sacerdoti e una nazione santa."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Sap 11,23-24a",
                            "testo"=>"Tu hai compassione per tutti, Signore, perché tutto tu puoi, non guardi ai peccati degli uomini, in vista del pentimento. Poiché tu ami tutte le cose esistenti e nulla disprezzi di quanto hai creato."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Ez 18,23",
                            "testo"=>"Forse che io ho piacere della morte del malvagio - dice il Signore Dio - o non pittosto che desista dalla sua condotta e viva?"
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Is 58,7",
                            "testo"=>"Dividi il pane con l'affamato, introduci in casa i miseri, senza tetto, vesti chi è nudo, senza distogliere gli occhi da quelli della tua gente."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Rm 12,1-2",
                            "testo"=>"Vi esorto, fratelli, per la misericordia di Dio, ad offrire i vostri corpi come sacrificio vivente, santo e gradito a Dio; è questo il vostro culto spirituale. Non conformatevi alla mentalità di questo secolo, ma trasformtevi rinnovando la vostra mente, per poter discernere la voltà di Dio, ciò che è buono, a lui gradito e perfetto."
                        );
                    }
                }

                if ($this->actual['weekDay']==2) {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Gl 2,12-13",
                            "testo"=>"Ritornate a me con tutto il cuore, con digiuni, con pianti e lamenti. Laceratevi il cuore e non le festi, ritornate al Signore vostro Dio, perché egli è misericordioso e benigno, tardo all'ira e ricco di benevolenza e si impietosisce riguardo la sventura."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Gl 2,17",
                            "testo"=>"Tra il vestibolo e l'altare piangano i sacerdoti, ministri del Signore, e dicano:« Perdona, Signore, al tuo popolo e non esporre la tua eredità al vituperio e alla derisione delle genti »."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Ger 3,25b",
                            "testo"=>"Abbiamo peccato contro il Signore nostro Dio, noi e i nostri padri, dalla nostra giovinezza fino ad oggi; non abbiamo ascoltato la voce del Signore nostro Dio."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Is 58,1-2",
                            "testo"=>"Grida a squarciagola, non avere riguardo; come una tromba alza la voce; dichiara al mio popolo i suoi delitti, alla casa di Giacobbe i suoi peccati. Mi ricercano ogni giorno, bramano di conoscere le mie vie, come un popolo che pratichi la giustizia e non abbia abbandonato il diritto del suo Dio; mi chiedono giudizi giusti, bramano la vicinanza di Dio."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Gc 2,14.17.18b",
                            "testo"=>"Che giova, fratelli miei, se uno dice di avere la fede ma non ha le opere? Forse che quella fede può salvarlo? La fede, se non ha le opere, è morta in sé stessa. Mostrami la tua fede senza le opere, ed io con le mie opere ti mostrerò la mia fede."
                        );
                    }
                }

                if ($this->actual['weekDay']==3) {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Dt 7,6.8-9",
                            "testo"=>"Tu sei un popolo consacrato al Signore tuo Dio; il Signore tuo Dio ti ha scelto per essere il suo popolo privilegiato fra tutti i popoli che sono sulla terra; perché il Signore vi ama e perché ha voluto mantenere il giuramento fatto ai vostri padri, il Signore vi ha fatto uscire con mano potente e via ha riscattati liberandovi dalla condizione servile, dalla mano del faraone, re di Egitto. Riconoscete dunque che il Signore vostro Dio è Dio, il Dio fedele, che mantiene la sua alleanza e benevolenza per mille generazioni, con coloro che l'amano e osservano i suoi comandamenti."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Ez 18,30b-32",
                            "testo"=>"Convertitevi e desistete da tutte le vostre iniquità, e l'iniquità non sarà più causa della vostra rovina. Liberatevi da tutte le iniquità commesse e formatevi un cuore nuovo e uno spirito nuovo. Perché volete morire, o Israeliti? Io non godo della morte di chi muore. Parola del Signore Dio. Convertitevi e vivrete."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Zc 1,3b-4",
                            "testo"=>"Convertitevi a me - oracolo del Signore degli eserciti - e io mi rivolgerò a voi. Non siate come i vostri padri, ai quali i profeti di un tempo andavan gridando: Dice il Signore degli eserciti: Tornate indietro dal vostro cammino perverso e dalle vostre opere malvage. Ma essi non vollero ascoltare e non mi prestarono attenzione, dice il Signore."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Dn 4,24b",
                            "testo"=>"Sconta i tuoi peccati con l'elemosina e le tue iniquità con atti di misericordia verso gli afflitti, e Dio perdonerà le tue colpe."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Fil 2,12b-15",
                            "testo"=>"Attendete alla vostra salvezza con timore e tremore. È Dio infatti che suscita in voi il volere e l'operare secondo i suoi benevoli disegni. Fate tutto senza mormorazioni e senza critiche, perché siate irreprensibili e semplici, figli di Dio immacolati in mezzo a una generazione pòerfersa e degenere, nella quale dovete splendere come astri nel mondo."
                        );
                    }
                }

                if ($this->actual['weekDay']==4) {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"1Re 8,51-53a",
                            "testo"=>"Siamo il tuo popolo e la tua eredità, Signore. Ci hai fatto uscire dall'Egitto, da una fornace per fondere il ferro. Siano attenti i tuoi occhi alla preghiera del tuo servo e del tuo popolo Israele e ascoltali in quanto ti chiedono, perché tu li ha separati da tutti i popoli del paese come tua proprietà."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Is 55,6-7",
                            "testo"=>"Cercate il Signore, mentre si fa trovare, invocatelo, mentre è vicino. L'empio abbandoni la sua via e l'uomo iniquo i suoi pensieri; ritorni al Signore che avrà misericordia di lui e al nostro Dio che largamente perdona."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Dt 30,2-3",
                            "testo"=>"Se ti convertirai al Signore tuo Dio e obbedirai alla sua voce, tu e i tuoi figli, con tutto il cuore e con tutta l'anima, secondo quanto oggi ti comando, allora il Signore tuo farà tornare i tuoi deportati, avrà pietà di te e ti raccoglierà di nuovo da tutti i popoli, in mezzo ai quali il Signore tuo Dio ti aveva disperso."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Eb 10,35-36",
                            "testo"=>"Non abbandonate la vostra fiducia, alla quale è riserfata una grande ricompensa. Avete dolo bidogno di costanza, perché dopo aver fatto la volontà di Dio possiate raggiungere la promessa."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Gc 4,7-8.10",
                            "testo"=>"Sottomettetevi a Dio; resistete al diavolo, ed egli fuggirà da voi. Avvicinatevi a Dio ed egli si avvicinerà a voi. Purificate le vostre mani, o peccatori, e santificate i vostri cuori, o irresoluti. Umiliatevi davanti al Signore ed egli vi esalterà."
                        );
                    }
                }

                if ($this->actual['weekDay']==5) {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 53,11b-12",
                            "testo"=>"Il giusto mio servo giustificherà molti, egli si addosserà la loro iniquità. Perciò io gli darò in premio le moltitudini, dei potenti egli farà bottino, perché ha consegnato se stesso alla morte ed è stato annoverato fra gli empi, mentre egli portava il peccato di molti e intercedeva per i peccatori."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Is 55,3",
                            "testo"=>"Porgete l'orecchio e venite a me, ascoltate e voi vivrete. Io stabilirò per voi un'alleanza eterna, i favori assicurati a Davide."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Ger 3,12b.14a",
                            "testo"=>"Ritornate, dice il Signore. Non vi mostrerò la faccia sdegnata, perché io sono pietoso e non conserverò l'ira per sempre. Ritornate, figli traviati, dice il Signore."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Gc 1,27",
                            "testo"=>"Religione pura e senza macchia davanti a Dio nostro Padre è questa: soccorrere gli orfani e le vedove nelle loro afflizioni e conservarsi puri da questo mondo."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Gc 5,16.19-20",
                            "testo"=>"Confessate i vostri peccati gli uni agli altri e pregate gli uni per gli altri per essere guariti. Molto vale la preghiera del giusto fatta con insistenza. Fratelli miei, se uno di voi si allontana dalla verità e un altro ve lo riconduce, costui sappia che chi riconduce un peccatore dalla sua via di errore, salverà la sua anima dalla morte e coprirà una moltitudine di peccati."
                        );
                    }
                }

                if ($this->actual['weekDay']==6) {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 1,16-18",
                            "testo"=>"Lavatevi, purificatevi, togliete dalla mia vista il male delle vostre azioni. Cessate di fare il male, imparate a fare il bene, ricercate la giustizia, soccorrete l'oppresso, rendete giustizia all'orfano, difendete la causa della vedova. Su, venite e discutiamo, dice il Signore. Anche se i vostri peccati fossero come scarlatto, diventeranno bianchi come neve. Se fossero rossi come porpora, diventeranno come lana."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Ap 3,19-20",
                            "testo"=>"Io tutti quelli che amo li rimprovero e li castigo. Mostrati dunque zelante e ravvediti. Ecco, sto alla porta e busso. Se qualcuno ascolta la mia voce e mi apre la porta, io verrò da lui, cenerò con lui ed egli con me."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Is 44,21-22",
                            "testo"=>"Ricorda che tu sei mio servo. Io ti ho formato, mio servo sei tu; Israele, Non sarai dimenticato da me. Ho dissipato come nube le tue iniquità e i tuoi peccati come una nuvola. Ritorna a me, poiché io ti ho redento."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Gal 6,7b-8",
                            "testo"=>"Non ci si può prendere gioco di Dio. Ciascuno raccoglierà ciò che avrà seminato. Chi semina nella sua carne, dalla carne raccoglierà corruzione; chi semina nello Spirito, dallo Spirito raccoglierà vita eterna."
                        );
                    }
                }
            }

            elseif ($this->actual['settimana']>4) {

                if ($this->actual['weekDay']==0) {

                    if($this->actual['ora']=='ves1') {
                        $this->info=array(
                            "titolo"=>"1Pt 1,18-21",
                            "testo"=>"Voi sapete che non a prezzo di cose corruttibili, come l'argento e l'oro, foste liberati dalla vostra vuota condotta ereditata dai vostri padri, ma con il sangue prezioso di Cristo, com e di agnello senza difetti e senza macchia. Egli fu predestinato già prima della fondazione del mondo, ma si è manifestato negli ultimi tempi per voi. E voi per opera sua credete in Dio, che l'ha risuscitato dai morti e gli ha dato gloria e così la vostra fede e la vostra speranza sono fisse in Dio."
                        );
                    }
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Lv 23,4-7",
                            "testo"=>"Queste sono le solennità del Signore, le sante convocazioni che proclamerete nei tempi stabiliti. Il primo mese, al decimoquarto giorno, al tramonto del sole sarà la Pasqua del Signore; il quindici dello stesso mese sarà la festa degli azzimi in onore del Signore; per setteg iorni mangerete pane senza lievito. Il primo giorno sarà per voi santa convocazione; non farete in esso alcun lavoro servile."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"2Cor 4,10-11",
                            "testo"=>"Portiamo sempre e dovunque nel nostro corpo la morte di Gesù, perché anche la vita di Gesù si manifesti nel nostro corpo. Sempre infatti, noi che siamo vivi, veniamo esposti alla morte a causa di Gesù, perché anche la vita di Gesù sia manifesta nella nostra carne mortale."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Pt 4,13-14",
                            "testo"=>"Nella misura in cui partecipate alle sofferenze di Cristo, rallegratevi, perché anche nella rivelazione della sua gloria possiate rallegrarvi ed esultare. Beati voi, se venite insultati per il nome di Cristo, perché lo Spirito della gloria e lo Spirito di Dio riposa su di voi."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"1Pt 5,10-11",
                            "testo"=>"Il Dio di ogni grazia, il quale vi ha chiamati alla sua gloria eterna in Cristo, egli stesso vi ristabilirà, dopo una bree sofferenza vi confermerà e vi renderà forti e saldi. A lui la potenza nei secoli. Amen!"
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"At 13,26b-30",
                            "testo"=>"Fratelli, a noi è stata mandata questa parola di salvezza. Gli abitanti di Gerusalemme infatti e i loro capi non hanno riconosciuto Gesù, e condannandolo hanno adempiuto le parole dei profeti che si leggono ogni sabato; e pur non avendo trovato in lui nessun motivo di condanna a morte, chiesero a Pilato che fosse ucciso. Dopo aver compiuto tutto quanto era stato scritto di lui, lo deposero dalla corce e lo misero nel sepolcro. Ma Dio lo ha risuscitato dai morti."
                        );
                    }
                }

                if ($this->actual['weekDay']==1) {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Ger 11,19",
                            "testo"=>"Ero come un agnello mansueto che viene portato al macello, non sapevo che essi tramavano contro di me, dicendo:« Abbattiamo l'albero nel suo rigoglio, strappiamolo dalla terra dei viventi; il suo nome non sia più ricordato »."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Ez 33,10b-11a",
                            "testo"=>"I nostri delitti e i nostri peccati sono sopra di noi e in essi noi ci consumiamo! In che modo potremo vivere? Com'è vero ch'io vivo - oracolo del Signore Dio - io non godo della morte dell'empio, ma che l'empio desista dalla sua condotta e viva."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Ger 18,20b",
                            "testo"=>"Ricordati, Signore, quando mi presentavo a te, per parlare in loro favore, per stornare da loro la tua ira."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Ger 31,2.3b-4a",
                            "testo"=>"Così dice il Signore: Ha trovato grazia nel deserto un popolo di scampati alla spada; Israele si avvia a una quieta dimora. Ti ho amato di amore eterno, per questo ti conservo ancora pietà. Ti edificherò di nuovo e tu sarai riedificata, vergine di Israle."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Rm 5,8-9",
                            "testo"=>"Dio dimostra il suo amore verso di noi perché, mentre eravamo ancora peccatori, Cristo è morto per noi. A maggior ragione ora, giustificati per il suo sangue, saremo salvati dall'ira per mezzo di lui."
                        );
                    }
                }

                if ($this->actual['weekDay']==2) {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Zc 12,10-11a",
                            "testo"=>"Riverserò sopra la casa di Davide e sopra gli abitanti di Gerusalemme uno spirito di grazia e di consolazione: guarderanno a colui che hanno trafitto. Ne faranno il lutto come si fa il lutto per un figlio unico. lo piangeranno come si piange il primogenito. In quel giorno grande sarà il lamento in Gerusalemme."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"1Cor 1,18-19",
                            "testo"=>"La parola della croce è stoltezza per quelli che vanno in perdizione, ma per quelli che si salvano, è potenza di Dio. Sta scritto infatti: Distruggerò la sapienza dei sapienti e annullerò l'intelligenza degli intelligenti."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Cor 1,22-24",
                            "testo"=>"I Giudei chiedono i miracoli e i Greci cercano la sapienza, noi predichiamo Cristo crocifisso, scandalo per i Giudei e stoltezza per i pagani; ma per coloro che sono chiamati, sia Giudei che Greci, predichiamo Cristo potenza di Dio e sapienza di Dio."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"1Cor 1,25.27a",
                            "testo"=>"Ciò che è stoltezza di Dio è più sapiente degli uomini, e ciò che è debolezza di Dio è più forte degli uomini. Dio ha scelto ciò che nel mondo è stolto per confondere i sapienti."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Cor 1,27b-30",
                            "testo"=>"Dio ha scelto ciò che nel mondo è debole per confondere i forti, Dio ha scelto ciò che nel mondo è ignobile e disprezzato e ciò che è nulla per ridurre a nulla le cose che sono, perché nessun uomo possa gloriarsi davanti a Dio. Ed è per lui che voi siete in Cristo Gesù il quale per opera di Dio è diventato per noi sapienza, giustizia, santificazione e redenzione."
                        );
                    }
                }

                if ($this->actual['weekDay']==3) {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 50,5-7",
                            "testo"=>"Il Signore Dio mi ha aperto l'orecchio e io non ho opposto resistenza, non mi sono tirato indietro. Ho presentato il dorso ai flagellatori, la guancia a coloro che mi strappavano la barba; non ho sottratto la faccia agli insuti e agli sputi. Il Signore Dio mi assiste, per questo non resto confuso, per questo rendo la mia faccia dura come pietra, sapendo di non restare deluso."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"1Tm 2,4-6",
                            "testo"=>"Dio nostro salvatore vuole che tutti gli uomini siano salvati e arrivino alla conoscenza della verità. Uno solo, infatti, è Dio e uno solo il mediatore fra Dio e gli uomini, l'uomo Cristo Gesù, che ha dato se stesso in riscatto per tutti. Questa testimonianza egli l'ha data nei tempi stabiliti."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Rm 15,3",
                            "testo"=>"Cristo non cercò di piacere a se stesso, ma come sta scritto: Gli insulti di coloro che ti insultano sono caduti sopra di me."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Eb 9,28",
                            "testo"=>"Cristo, dopo essersi offerto una volta per tutte allo scopo di togliere i peccati di molti, apparirà una seconda volta, senza alcuna relazione col peccato, a color che l'aspettano per la loro salvezza."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Ef 4,32;5,2",
                            "testo"=>"Siate benevoli gli uni verso gli altri, misericordiosi, perdonandovi a vicenda come Dio ha perdonato a voi in Cristo. Fatevi dunque imitatori di Dio, quali figli carizzimi, e camminate nella carità, nel modo che anche Cristo vi ha amato e ha dato se stesso per noi, offrendosi a Dio in sacrificio di soave dolore."
                        );
                    }
                }

                if ($this->actual['weekDay']==4) {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Eb 2,9b-10",
                            "testo"=>"Vediamo Gesù coronato di gloria e di onore a causa della morte che ha sofferto, perché per la grazia di Dio egli sperimentasse la morte a vantaggio di tutti. Ed era ben giusto che colui, per il quale e dal quale sono tutte le cose, volendo portare molti figli alla gloria, rendesse perfetto mediante la sofferenza il capo che li guida alla salvezza."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Eb 4,14-15",
                            "testo"=>"Poiché abbiamo un grande sommo sacerdote, che ha attraverdsato i cieli, Gesù Figio di Dio, manteniamo ferma la professione della nostra feded. Infatti non abbiamo un sommo sacerdote che non sappia compatire le nostre infermità, essendo lui stesso provato in ogni cosa, come noi, escluso il peccato."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Eb 7,26-27",
                            "testo"=>"Tale era il sommo sacerdote che ci occorreva: santo, innocente, senza macchia, separato dai peccatori ed elevato sopra i cieli; che non ha bisogno ogni giorno, come gli altri sommi sacerdoti, di offrire sacrifici prima per i propri peccati e poi per quelli del popolo, poiché ha fatto questo una volta per tutte, offrendo se stesso, il Signore nostro Gesù Cristo."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Eb 9,11-12",
                            "testo"=>"Cristo, venuto come sommo sacerdote dei beni futuri, attraverso una tenda più grande e più perfetta, non costruita da mano di uomo, cioè non appartenente a questa creazione, entrò una volta per sempre nel santuario, non con sangue di capri e di vitelli, ma con il proprio sangue, dopo averci ottenuto una redenzione eterna."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"Eb 13,12-15",
                            "testo"=>"Gesù, per santificare il popolo con il proprio sangue, patì fuori della porta della città. Usciamo dunque anche noi dall'accampamento e andiamo verso di lui, portando il suo obbrobrio, perché non abbiamo quaggiù una città stabile, ma cerchiamo quella futura. Per mezzo di lui dunque offriamo a Dio continuamente un sacrificio di lode, cioè il frutto di labbra che confessano il suo nome."
                        );
                    }
                }

                if ($this->actual['weekDay']==5) {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 52,13-15",
                            "testo"=>"Ecco, il mio servo avrà successo, sarà innalzato, onorato, esaltato grandemente. Come molti si stupirono di lui, tanto era sfigurato per essere d'uomo il suo aspetto e diversa la sua forma da quella dei figli dell'uomo, così si meraviglieranno di lui molte genti; i re davanti a lui si chiuderanno la bocca, poiché vedranno un fatto mai ad essi raccontato e comprenderanno ciò che mai avevano udito."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"Is 53,2-3",
                            "testo"=>"È cresciuto come un virgulto davanti a lui e come una radice in tera arida. Non ha apparenza né bellezza per attirare i nostri sguardi, non splendore per potercene compiacere. Disprezzato e reietto dagli uomini, uomo dei dolori che ben conosce il patire, come uno davanti al quale ci si copre la faccia, era disprezzato e non ne avevano alcuna stima."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"Is 53,4-5",
                            "testo"=>"Egli si è caricato delle nostre sofferenze, si è addossato i nostri dolori e noi lo giudicavamo castigato, percosso da Dio e umiliato. Egli è stato trafitto per i nostri delitti, schiacciato per le nostre iniquità. Il castigo che ci dà salvezza si è abbattuto su di lui; per le sue piaghe noi siamo stati guariti."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"Is 53,6-7",
                            "testo"=>"Noi tutti eravamo sperduti come un gregge, ognuno di noi seguiva la sua strada; il Signore fece ricadere su di noi l'iniquità di noi tutti. Maltrattato, si lasciò umiliare e non aprì la sua bocca; era come agnello condotto al macello, come pecora muta di fronte ai suoi tosatori, e non aprì la sua bocca."
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            "titolo"=>"1Pt 2,21b-25a",
                            "testo"=>"Cristo patì per voi, lasciandovi un esempio, perché ne seguiate le orme: egli non commise peccato e non si trovò inganno sulla sua bocca, oltraggiato non rispondeva con oltraggi, e soffrendo non minacciava vendetta, ma rimetteva la sua causa a colui che giudica con giustizia. Egli portò i nostri peccati nel suo corpo sul legno della croce, perché, non vivendo più per il peccato, vivessimo per la giustizia; dalle sue piaghe siete stati guariti."
                        );
                    }
                }

                if ($this->actual['weekDay']==6) {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            "titolo"=>"Is 65,1b-3a",
                            "testo"=>"Dissi:« Eccomi, eccomi » a gente che non incocava il mio nome. Ho teso la mano ogni giorno a un popolo ribelle; essi andavano per una strada non buona, seguendo i loro capricci, un popolo che mi provocava sempre, con sfacciataggine."
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            "titolo"=>"1Gv 1,8-9",
                            "testo"=>"Se diciamo che siamo senza peccato, inganniamo noi stessi e la verità non è in noi. Se riconosciamo i nostri peccati, Dio che è fedele e giusto ci perdonerà i peccati e ci purificherà da ogni colpa."
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            "titolo"=>"1Gv 2,1b-2",
                            "testo"=>"Abbiamo un avvocato presso il Padre: Gesù Cristo giusto. Egli è vittima di espiazione per i nostri peccati; non soltanto per i nostri, ma anche per quelli di tutto il mondo."
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            "titolo"=>"1Gv 2,8b-10",
                            "testo"=>"Le tenebre stanno diradandosi e la vera luce già risplende. Chi dice di essere nella luce e odia suo fratello, è ancora nelle tenebre. Chi ama suo fratello, dimora nella luce e non v'è in lui occasione di inciampo."
                        );
                    }
                }
            }

            if ($this->actual['evCode']=='PAL') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Zc 9,9",
                        "testo"=>"Esulta grandemente figlia di Sion, giubila, figlia di Gerusalemme! Ecco, a te viene il tuo re. Egli è giusto e vittorioso, umile, cavalca un asino, un puledro figlio d'asina."
                    );
                }
            }

            if ($this->actual['evCode']=='SS6') {
                
                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Os 5,15b;6,2",
                        "testo"=>"Così dice il Signore: Ricorreranno a me nella loro angoscia. Venite, ritorniamo al Signore: egli ci ha straziato ed egli ci guarirà. Egli ci ha percosso ed egli ci fascerà. Dopo due giorni ci ridarà la vita e il terzo ci farà rialzare e noi vivremo alla sua presenza."
                    );
                }

                if($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Pt 1,18-21",
                        "testo"=>"Voi sapete che non a prezzo di cose corruttibili, come l'argento e l'oro, foste liberati dalla vostra vuota condotta ereditata dai vostri padri, ma con il sangue prezioso di Cristo, come un agnello senza difetti e senza macchia. Egli fu predestinato già prima della fondazione del mondo, ma si è manifestato negli ultimi tempi per voi. E voi per opera sua credete in Dio, che l'ha risuscitato dai morti e gli ha dato gloria e così la vostra fede e la vostra speranza sono fisse in Dio."
                    );
                }
            }   
        }

        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='P') {

            if ($this->actual['weekDay']==0) {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        "titolo"=>"1Pt 2,9-10",
                        "testo"=>"Voi siete la stirpe eletta, il sacerdozio regale, la nazione santa, il poplo che Dio si è acquistato perché proclami le opere meravigliose di lui che vi ha chiamato dalle tenebre alla sua ammirabile luce; voi ch un tempo eravate non-popolo, ora invece siete il popolo di Dio; voi, un tempo esclusi dalla misericordia, ora invece avete ottenuto misericordia."
                    );
                }
                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"At 10,40-43",
                        "testo"=>"Dio ha risuscitato Gesù il terzo giorno e volle che apparisse, non a tutto il popolo, ma a testimoni prescelti da Dio, a noi, che abbiamo mangiato e bevuto con lui dopo la sua risurrezione dai morti. E ci ha ordinato di annunziare al popolo e di attestare che egli è il giudice dei vivi e dei morti costituito da Dio. Tutti i profeti gli rendono questa testimonianza: chiunque crede in lui ottiene la remissione dei peccati per mezzo del suo nome."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"1Cor 15,3b-5",
                        "testo"=>"Cristo morì per i nostri peccati secondo le Scritture, fu sepolto ed è risuscitato il terzo giorno secondo le Scritture, e apparve a Cefa e quindi ai dodici."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Ef 2,4-6",
                        "testo"=>"Dio, ricco di misericordia, per il grande amore con il quale ci ha amati, da morti che eravamo per i peccati, ci ha fatti rivivere con Cristo: per grazia infatti siete stati salvati. Con lui ci ha anche risuscitati e ci ha fatti sedere nei cieli, in Cristo Gesù."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Rm 6,4",
                        "testo"=>"Per mezzo del battesimo siamo dunque stati sepolti insieme a Cristo nella morte, perché come Cristo fu risuscitato dai morti per mezzo della gloria del Padre, così anche noi possiamo camminare in una vita nuova."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Eb 10,12-14",
                        "testo"=>"Cristo, avendo offerto un solo sacrificio per i peccati una volta per sempre, si è assiso alla destra di Dio, aspettando ormai soltanto ch ei suoi nemici vengano posti sotto i suoi piedi. Poiché con un'unica oblazione egli ha resi perfetti per sempre quelli che vengono santificati."
                    );
                }
            }

            elseif ($this->actual['weekDay']==1) {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Rm 10,8b-10",
                        "testo"=>"Vicino a te è la parola, sulla tua bocca e nel tuo cuore: cioè la parola della fede che noi predichiamo. Poiché se confesserai con la tua bocca che Gesù è il Signore, e crederai con il tuo cuore che Dio lo ha risuscitato dai morti, sarai salvo. Con il cuore infatti si crede per ottenere la giustizia e con la bocca si fa la professione di fede per avere la salvezza."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Ap 1,17c-18",
                        "testo"=>"Vidi il Figlio dell'uomo, che mi disse: Non temere! Io sono il Primo e l'Ultimo e il Vivente. Io eromorto, ma ora vivo per sempre e ho potere sopra la morte e sopra gli inferi."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Col 2,9-10a.12",
                        "testo"=>"È in Cristo che abita corporalmente tutta la pienezza della divinità, e voi avete in lui parte alla sua pienezza. Con lui infatti siete stati sepolti insieme nel battedsimo. In lui siete stati anche insieme risuscitati per la fede nella potenza di Dio, che lo ha risuscitato dai morti."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"2Tm 2,8.11",
                        "testo"=>"Ricordati che Gesù Cristo, della stirpe di Davide, è risuscitato dai morti, secondo il mio vangelo. Certa è questa parola: Se moriamo con lui, vivremo anche con lui."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Eb 8,1b-3a",
                        "testo"=>"Noi abbiamo un sommo sacerdote così grande, che si è assiso alla destra del trono della maestà nei cieli, ministro del santuario e della vera tenda che ha costruito il Signore e non un uomo. Ogni sommo sacerdote infatti viene costituito per offrire doni e sacrifici."
                    );
                }
            }

            elseif ($this->actual['weekDay']==2) {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"At 13,30-33",
                        "testo"=>"Dio ha risuscitato Gesù dai morti ed egli è apparso per molti giorni a quelli che erano saliti con lui dalla Galilea a Gerusalemme, e questi ora sono i suoi testimoni davanti al popolo. E noi vi annunziamo la buona novella che la promessa fatta ai padri si è compiuta, poiché Dio l'ha attuata per noi, loro figli, risuscitando Gesù, come anche sta sritto nel salmo secondo: Mio figlio sei tu, oggi ti ho generato."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Col 3,1-2",
                        "testo"=>"Se siete risorti con Cristo, cercate le cose di lassù, dove si trova Cristo assiso alla destra di Dio; pensate alle cose di lassù, non a quelle della terra."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"1Pt 3,21-22a",
                        "testo"=>"Il battesimo, che ora vi salva, non è rimozine di sporcizia del corpo, ma invocazione di salvezza rivolta a Dio da parte di una buona coscienza, in virtù della risurrezione di Gesù Cristo, il quale è alla destra di Dio."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"At 4,11-12",
                        "testo"=>"Gesù Cristo è la pietra che, scartata da voi, costruttori, è diventata testata d'angolo. In nessun altro c'è salvezza; non vi è infatti altro nome dato agli uomini sotto il cielo nel quale sia stabilito che possiamo essere salvati."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Pt 2,4-5",
                        "testo"=>"Stringendovi al Signore, pietra viva, rigettata dagli uomini, ma scelta e preziosa davanti a Dio, anche voi venite impiegati come pietre vive per la costruzione di un edificio spirituale, per un sacerdozio santo, per offrire sacrifici spirituali graditi a Dio, per mezzo di Gesù Cristo."
                    );
                }
            }

            elseif ($this->actual['weekDay']==3) {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Rm 6,8-11",
                        "testo"=>"Se siamo morti co Cristo, crediamo che anche vivremo con lui, sapendo che Cristo risuscitato dai morti non muore più; la morte non ha più potere su di lui. Per quanto riguarda la sua morte, egli morì al peccato una volta per tutte; ora invece per il fatto che egli vive, vive per Dio. Così anche voi consideratevi morti al peccato, ma viventi per Dio, in Cristo Gesù."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Rm 4,24b-25",
                        "testo"=>"Noi crediamo in colui che ha risuscitato dai morti Gesù nostro Signore, il quale è stato messo a morte per i nostri peccati ed è stato risuscitato per la nostra giustificazione."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"1Gv 5,5-6a",
                        "testo"=>"Chi è che vince il mondo se non chi crede che Gesù è il Figlio di Dio? Questi è colui che è venuto con acqua e sangue, Gesù Cristo; non con acqua soltanto, ma con l'acqua e con il sangue."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Ef 4,23-24",
                        "testo"=>"Dovete rinnovarvi nello spirito della vostra mente e rivestire l'uomo nuovo, creato secondo Dio nella giustizia e nella santità vera."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Eb 7,24-27",
                        "testo"=>"Gesù, poiché resta per sempre, possiede un sacredozio cher non tramonta. Perciò può salvate perfettamente quelli che per mezzo di lui si accostano a Dio, essendo egli sempre vivo per intercedere a loro favore. Tale era infatti il sommo sacerdote che ci occorreva: santo, innocente, senza macchia, separato dai peccatori ed elevato sopra i cieli; egli non ha bisogno ogni giorno, come gli altri sommi sacredoti, di offrirte sacrifici prima per i propri peccati e poi per quelli del popolo, poiché egli ha fatto questo una volta per tutte, offrendo se stesso."
                    );
                }
            }

            elseif ($this->actual['weekDay']==4) {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Rm 8,10-11",
                        "testo"=>"Se Cristo è in voi, il vostro corpo è morto a causa del peccato, ma lo spirito è vita a causa della giustificazione. E se lo Spirito di colui che ha risuscitato Gesù dai morti abita in voi , colui che ha risuscitato Cristo dai morti darà la vita anche ai vostri corpi mortali per mezzo del suo Spirito che aita in voi."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"1Cor 12,13",
                        "testo"=>"Noi tutti siamo stati battezzati in un solo Spirito per formare un solo corpo, Giudei o Greci, schiavi o liberi; e tutti ci siamo abbeverati a un solo Spirito."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Tt 3,5b-7",
                        "testo"=>"Dio ci ha salvati mediante un lavacro di rigenerazione e di rinnovamento nello Spirito Santo, effuso da lui su di noi abbondantemente per mezzo di Gesù Cristo, salvatore nostro, perché giustificati dalla sua grazia diventassimo eredi, secondo la speranza, della vita eterna."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Col 1,12-14",
                        "testo"=>"Ringraziamo con gioia il Padre che ci ha messi in grado di partecipare alla sorte dei santi nella luce. È lui infatti che ci ha liberati dal potere delle tenebre e ci ha trasferiti nel regno del suo Figlio diletto, per opera del quale abbiamo la redenzione, la remissione dei peccati."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Pt 3,18.22",
                        "testo"=>"Cristo è morto una volta per sempre per i peccati, giusto per gli ingiusti, per ricondurvi a Dio; messo a morte nella carne, ma reso vivo nello spirito. Egli è alla destra di Dio, dopo essere salito al cielo e aver ottenuto la sovranità sugli angeli, i Principati e le Potenze."
                    );
                }
            }

            elseif ($this->actual['weekDay']==5) {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"At 5,30-32",
                        "testo"=>"Il Dio dei nostri padri ha risuscitato Gesù, che voi avevate ucciso appendendolo alla croce. Dio lo ha innalzato con la sua destra facendolo capo e salvatore, per dare a Israele la grazia della conversione e il perdono dei peccati. E di questi fatti siamo testimoni noi e lo Spirito Santo, che Dio ha dato a coloro che si sottomettono a lui."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"At 2,32.36",
                        "testo"=>"Dio ha risusitato Gesù e noi tutti ne siamo testimoni. Sappia dunque con certezza tutta la casa di Israele che Dio ha costituito Signore e Cristo quel Gesù che voi avete crocifisso!"
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Gal 3,27-28",
                        "testo"=>"Quanti siete stati battezzati in Cristo, vi siete rivestiti di Cristo. Non c'è più Giudeo né Greco; non c'è più schiavo né libero; non c'è più uomo né donna, poiché tutti voi siete uno in Cristo Gesù."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"1Cor 5,7-8",
                        "testo"=>"Togliete via il lievito vecchio, per essere pasta nuova, poiché siete azzimi. E infatti Cristo, nostra Pasqua, è stato immolato! Celebriamo dunque la festa non con il lievito vecchio, né con il lievito di malizia e di perfersità, ma con azzimi di sincerità e di verità."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Eb 5,8-10",
                        "testo"=>"Cristo, pur essendo Figlio, imparò l'obbedienza dalle cose che patì e, reso perfetto, divenne causa di salvezza eterna per tutti coloro che gli obbediscono, essendo stato proclamato da Dio sommo saerdote alla maniera di Melchisedek."
                    );
                }
            }

            elseif ($this->actual['weekDay']==6) {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Rm 14,7-9",
                        "testo"=>"Nessuno di noi vive per se stesso e nessuno muore per se stesso, perché se noi viviamo, viviamo per il Signore; se noi moriamo, moriamo per il Signore. Sia che viviamo sia che moriamo, siamo dunque del Signore. Per questo infatti Cristo è morto ed è ritornato alla vita: per essere il Signore dei morti e dei vivi."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Rm 5,10-11",
                        "testo"=>"Se quand'eravamo nemici, siamo stati riconciliati con Dio per mezzo della morte del Figlio suo, molto più ora che siamo riconciliati, saremo salvati mediante la sua vita. Non solo, ma ci gloriamo pure in Dio, per mezzo del Signore nostro Gesù Cristo, dal quale ora abbiamo ottenuto la riconciliazione."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"1Cor 15,20-22",
                        "testo"=>"Cristo è risuscitato dai morti, primizia di coloro che sono morti. Poiché se a causa di un uomo venne la morte , a causa di un uomo verrà anche la risurrezione dei morti: e come tutti muoiono in Adamo, così tutti riceveranno la vita in Cristo."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"2Cor 5,14-15",
                        "testo"=>"L'Amore del Cristo ci sospinge, al pensiero che uno è morto per tutti e quindi tutti sono morti. Ed egli è morto per tutti, perché quelli che vivono non vivano più per se stessi, ma per colui che è morto e risuscitato per loro."
                    );
                }
            }

            //////////////////////////////////////////////////////

            if ($this->actual['evCode']=='PAS') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"At 10,40-43",
                        "testo"=>"Dio ha risuscitato Gesù il terzo giorno e volle che apparisse, non a tutto il popolo, ma a testimoni prescelti da Dio, a noi, che abbiamo mangiato e bevuto con lui dopo la sua risurrezione dai morti. E ci ha ordinato di annunziare al popolo e di attestare che egli è il giudice dei vivi e dei morti costituito da Dio. Tutti i profeti gli rendono questa testimonianza: chiunque crede in lui ottiene la remissione dei peccati per mezzo del suo nome."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"1Cor 15,3b-5",
                        "testo"=>"Cristo morì per i nostri peccati secondo le Scritture, fu sepolto ed è risuscitato il terzo giorno secondo le Scritture, e apparve a Cefa e quindi ai dodici."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Ef 2,4-6",
                        "testo"=>"Dio, ricco di misericordia, per il grande amore con il quale ci ha amati, da morti che eravamo per i peccati, ci ha fatti rivivere con Cristo: per grazia infatti siete stati salvati. Con lui ci ha anche risuscitati e ci ha fatti sedere nei cieli, in Cristo Gesù."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Rm 6,4",
                        "testo"=>"Per mezzo del battesimo siamo dunque stati sepolti insieme a Cristo nella morte, perché come Cristo fu risuscitato dai morti per mezzo della gloria del Padre, così anche noi possiamo camminare in una vita nuova."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Eb 10,12-14",
                        "testo"=>"Cristo, avendo offerto un solo sacrificio per i peccati una volta per sempre, si è assiso alla destra di Dio, aspettando ormai soltanto ch ei suoi nemici vengano posti sotto i suoi piedi. Poiché con un'unica oblazione egli ha resi perfetti per sempre quelli che vengono santificati."
                    );
                }
            }

            if ($this->actual['evCode']=='ASC') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        "titolo"=>"Ef 2,4-6",
                        "testo"=>"Dio, ricco di misericordia, per il grande amore con il quale ci ha amati, da morti che eravamo per i peccati, ci ha fatti rivivere con Cristo: per grazia infatti siete stati salvati. Con lui ci ha anche risuscitati e ci ha fatti sedere nei cieli, in Cristo Gesù."
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Eb 10,12-14",
                        "testo"=>"Cristo, avendo offerto un solo sacrificio per i peccati una volta per sempre, si è assiso alla destra di Dio, aspettando ormai soltanto ch ei suoi nemici vengano posti sotto i suoi piedi. Poiché con un'unica oblazione egli ha resi perfetti per sempre quelli che vengono santificati."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Ap 1,17c-18",
                        "testo"=>"Vidi il Figlio dell'uomo, che mi disse: Non temere! Io sono il Primo e l'Ultimo e il Vivente. Io eromorto, ma ora vivo per sempre e ho potere sopra la morte e sopra gli inferi."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Eb 8,1b-3a",
                        "testo"=>"Noi abbiamo un sommo sacerdote così grande, che si è assiso alla destra del trono della maestà nei cieli, ministro del santuario e della vera tenda che ha costruito il Signore e non un uomo. Ogni sommo sacerdote infatti viene costituito per offrire doni e sacrifici."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Col 3,1-2",
                        "testo"=>"Se siete risorti con Cristo, cercate le cose di lassù, dove si trova Cristo assiso alla destra di Dio; pensate alle cose di lassù, non a quelle della terra."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"1Pt 3,18.22",
                        "testo"=>"Cristo è morto una volta per sempre per i peccati, giusto per gli ingiusti, per ricondurvi a Dio; messo a morte nella carne, ma reso vivo nello spirito. Egli è alla destra di Dio, dopo essere salito al cielo e aver ottenuto la sovranità sugli angeli, i Principati e le Potenze."
                    );
                }
            }        
        }

        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='O') {

            if ($this->actual['evCode']=='BAT') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"Is 61,1-2a",
                        "testo"=>"Lo spirito del Signore Dio è su di me perché il Signore mi ha consacrato con l'unzione; mi ha mandato a portare il lieto annunzio ai poveri, a fasciare le piaghe dei cuori spezzati, a proclamare la libertà degli schiavi, la scarcerazione dei prigionieri, a promulgare l'anno di misericordia del Signore."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"Is 11,1-2",
                        "testo"=>"Un germoglio spunterà dal tronco di Iesse, un virgulto germoglierà dalle sue radici. Su di lui si poserà lo spirito del Signore, spirito di sapienza e di intelligenza, spirito di consiglio e di fortezza, spirito di conoscenza e di timore del Signore."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Is 42,1",
                        "testo"=>"Ecco il mio servo che io sostengo, il mio eletto in cui mi compiaccio. Ho posto il mio spirito su di lui; egli porterà il diritto alle nazioni."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"Is 49,6",
                        "testo"=>"Il Signore mi disse: È troppo poco che tu sia mio servo per restaurare le tribù di Giacobbe e ricondurre i superstiti di Israele. Io ti renderò luce delle nazioni perché porti la mia salvezza fino all'estremità della terra."
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"At 10,37-38",
                        "testo"=>"Voi conoscete ciò che è accaduto in tutta la Giudea, incominciando dalla Galilea, dopo il battesimo predicato da Giovanni; cioè come Dio consacrò in Spirito Santo e potenza Gesù di Nazareth, il quale passò benificando e risanando tutti coloro che stavano sotto il potere del diavolo, perché Dio era con lui."
                    );
                }
            }

            if ($this->actual['evCode']=='PEN') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        "titolo"=>"Rm 8,11",
                        "testo"=>"Se lo Spirito di Dio che ha risuscitato Gesù dai morti abita in voi, colui che ha risuscitato Cristo dai morti darà la vita anche ai vostri corpi mortali per mezzo del suo Spirito che abita in voi."
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        "titolo"=>"At 5,30-32",
                        "testo"=>"Il Dio dei nostri padri ha risuscitato Gesù, che voi avevate ucciso appendendolo alla croce. Dio lo ha innalzato con la sua destra facendolo capo e salvatore, per dare a Israele la grazia della conversione e il perdono dei peccati. E di questi fatti siamo testimoni noi e lo Spirito Santo, che Dio ha dato a coloro che si sottomettono a lui."
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        "titolo"=>"1Cor 12,13",
                        "testo"=>"Noi tutti siamo stati battezzati in un solo Spirito per formare un solo corpo, Giudei o Greci, schiavi o liberi; e tutti ci siamo abbeverati a un solo Spirito."
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        "titolo"=>"Tt 3,5b-7",
                        "testo"=>"Dio ci ha salvati mediante un lavacro di rigenerazione e di rinnovamento nello Spirito Santo, effuso da lui su di noi abbondantemente per mezzo di Gesù Cristo, salvatore nostro, perché giustificati dalla sua grazia diventassimo eredi, secondo la speranza, della vita eterna."
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        "titolo"=>"2Cor 1,21-22",
                        "testo"=>"È Dio stesso che ci conferma, insieme a voi, in Cristo, e ci ha conferito l'unzione, ci ha impresso il sigillo e ci ha dato la caparra dello Spirito nei nostri cuori."
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        "titolo"=>"Ef 4,3-6",
                        "testo"=>"Cercate di conservare l'unità dello spirito per mezzo del vincolo della pace. Un solo corpo, un solo spirito, come una sola è la speranza alla quale siete stati chiamati, quella della vostra vocazione; un solo Signore, una sola fede, un solo battesimo. Un solo Dio Padre di tutti, che è al di sopra di tutti, agisce per mezzo di tutti ed è presente in tutti."
                    );
                }
            }
        }

            
    }

    function draw() {

        $this->res['titolo'].='('.$this->info['titolo'].')';
        $this->res['testo']= new Saltesto();
        $this->res['testo']->addBlock(array(
            array('','',$this->info['testo'])
        ));

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