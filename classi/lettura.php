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
                                "titolo"=>"Rm 5,1-2. 5",
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
            
        }

        elseif ($this->actual['weekDay']==2) {
            
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