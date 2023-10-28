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
                                "testo"=>"Gelice l'uomo che è corretto da Dio: perciò tu non sdegnare la correzione dell'Onnipotente, perché egli fa la piaga e la fascia, ferisce e la sua mano risana."
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
            
        }

        elseif ($this->actual['weekDay']==4) {
            
        }

        elseif ($this->actual['weekDay']==5) {
            
        }

        elseif ($this->actual['weekDay']==6) {
            
        }

        /////////////////////////////////////////////////////////////////////////////
        

    }

    function build() {

        //////////////////////////////////////////////////////////////////////////
        //modifica ANTIFONE in base al TEMPO LITURGICO

        if ($this->actual['tempo']=='A') {

                
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