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
            }

                
        }
        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='N') {

                
        }

        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='Q') {

                
        }

        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='P') {

                
        }

        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='O') {

                
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