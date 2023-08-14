<?php

class Orazione {

    protected $info=array(
        "titolo"=>"Orazione",
        "testo"=>false
    );

    protected $ending=array('','',"Per il nostro Signore Gesù Cristo, tuo Figlio che è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.");

    protected $orazioni=array(
        "comp_S"=>array(
            array(
                array('','',"Visita, o Padre, la nostra casa e tieni lontano le insidie del nemico; vengano i santi angeli a custodirci nella pace, e la tua benedizione rimanga sempre con noi."),
                array('','',"Per Cristo nostro Signore")
            )
        ),
        "lodi_1_1"=>array(
            array(
                array('','',"Ispira le nostre azioni, Signore, e accompagnale con il tuo aiuto: perché ogni nosra attività abbia da te il suo inizio e in te il suo compimento."),
                array('ending')
            )
        ),
        "lodi_1_2"=>array(
            array(
                array('','',"Signore Dio nostro, che ci hai dato la grazia di giungere a questo giorno, accompagnaci oggi con la tua protezione, perché non deviamo mai verso il peccato e in pensieri, parole e opere aderiamo sempre alla tua volontà."),
                array('ending')
            )
        ),
        "lodi_1_3"=>array(
            array(
                array('','',"Signore Dio, re del cielo e della terra, guida, santifica e custodisci il nostro corpo e il nostro spirito, sentimenti, parole e opere, nell'ampore della tua legge, a servizio della tua volontà, perché oggi e sempre con il tiuo aiuto procediamo sicuri nella via della salvezza."),
                array('ending')
            )
        ),
        "lodi_1_4"=>array(
            array(
                array('','',"O Dio, che hai affidato all'uomo l'opera della creazione e hai posto al suo servizio le immense energie del cosmo, fa' che oggi collaboriamo a un mondo più giusto e fraterno a lode della tua gloria."),
                array('ending')
            )
        ),
        "terza_1"=>array(
            array(
                array('','',"O Dio nostro Padre, che al lavoro solidale di tutti gli uomini hai affidato il compito di promuovere sempre nuove conquiste, donaci di collaborare all'opera della creazione con adesione filiale al tuo volere in spirito di vera fraternità."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "sesta_1"=>array(
            array(
                array('','',"O Dio, che sei il padrone della vigna e della messe, e assegni a ciascuno il suo lavoro e la giusta ricompensa, aiutaci aportare il peso della nostra giornata accettando serenamente la tua volontà."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "nona_1"=>array(
            array(
                array('','',"O Dio, che ci chiami a celebrare la tua lode nell'ora stessa in cui gli apostoli salivano al tempio, accogli la nostra preghiera nel nome del tuo Figlio e dona la tua salvezza a coloro che lo invocano."),
                array('','',"Egli vive e regna nei secoli dei secoli.")
            )
        ),
        "ves_1_1"=>array(
            array(
                array('','',"Ti magnifichi, o Signore, il nostro servizio di lode; tu che per la nostra salvezza hai volto lo sguardo all'umiltà della Vergine Maria, degnasti di innalzarci alla pienezza della tua redenzione."),
                array('ending')
            )
        ),
        "ves_1_2"=>array(
            array(
                array('','',"Dio onnipotente, che hai sostenuto i tuoi fedeli nella fatica di questo giorno, accogli la preghiera della sera come sacrifidio di lode per i tuoi doni."),
                array('ending')
            )
        ),
        "ves_1_3"=>array(
            array(
                array('','',"O Dio, eterna luce e giorno senza tramonto, guarda i tuoi figli raccolti nella lode della sera: illumina le tenebre della notte e perdona le colpe dei tuoi figli."),
                array('ending')
            )
        ),
        "ves_1_4"=>array(
            array(
                array('','',"Confortaci, o Dio, con la presenza del figlio tuo, e ravviva  la nostra fede, perché sappiamo riconoscerlo, come i discepoli a Emmaus, alla mensa della parola e del pane."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "comp_1"=>array(
            array(
                array('','',"Donaci, o Padre, un sonno ristoratore e fa' che i germi di bene, seminati nei solchi di questa giornata, producano una messe abbondante."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "lodi_2_1"=>array(
            array(
                array('','',"Accogli con bontà, o Signore, la preghiera mattutina della tua Chiesa e illumina con il tuo amore la profondità del nostro spirito, perché siano liberi dalle suggestioni del male coloro che hai chiamati allo splendore della tua luce."),
                array('ending')
            )
        ),
        "lodi_2_2"=>array(
            array(
                array('','',"O Dio, che hai mandato a noi la luce vera che guida tutti gli uomini alla salvezza, donaci la forza dello Spirito, perchè possiamo preparare davni aL Figkio tuo la via della giustizia e dell pace."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_2_3"=>array(
            array(
                array('','',"O Dio, creatore e Signore di tutte le cose, donaci di iniziare lietamente questo giorno e nel concluderlo nel generoso servizio tuo e dei nostri fratelli."),
                array('ending')
            )
        ),
        "lodi_2_4"=>array(
            array(
                array('','',"Accresci in noi, o Dio, il dono della fede, perché sia perfetta la nostra lode e porti alla tua Chiesa frutti di vita nuova."),
                array('ending')
            )
        ),
        "terza_2"=>array(
            array(
                array('','',"Dio potente ed eterno, che all'ora terza hai effuso sugli apostoli il tuo Spirito Paraclito, dona anche a noi la fiamma viva del tuo amore, perché ti rendiamo buona estimonianza davanti a tutti gli uomini."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "sesta_2"=>array(
            array(
                array('','',"O Dio, che hai rielato all'apostolo Pietro la volontà di riunire tutti i popoli nell'unica Chiesa, benedici il niostro lavoro quotidiano e fa' che serva al tuo disegno universale di salvezza."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "nona_2"=>array(
            array(
                array('','',"O Dio, che nandasti il tuo angelo al centurione Cornelio per indicargli la via della salvezza, donaci di collaborare alla renìdenzione di tutti gli uomini, perché riuniti nella tua Chiesa, possiamo giungere fino a te nella gloria."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "ves_2_1"=>array(
            array(
                array('','',"Ti rendiamo grazie, Dio onnipotente, che ci hai guidati attraverso le fatiche di questo giorno; fa' che le niostre mani alzate nella preghiera vespertina siano un sacrificio a te gradito."),
                array('ending')
            )
        ),
        "ves_2_2"=>array(
            array(
                array('','',"O Dio, a cui appartiene il giorno e la notte, fa' he il sole della giustizia nion tramonti mai nel nostro spirito, perché possiamo giungere alla luce gloriosa del tuo regno."),
                array('ending')
            )
        ),
        "ves_2_3"=>array(
            array(
                array('','',"Salga a te, Dio onnipotente, la nostra lode della sera e scenda su di noi la tua benedizione, perché oggi e sempre possiamo gustare il dono della tua salvezza."),
                array('ending')
            )
        ),
        "ves_2_4"=>array(
            array(
                array('','',"Raccolti alla tua presenza, o Dio, invochiamo la tua misericordia: fa' che risuoni sempre nel nostro spirito la divina liturgia che celebriamo con le nostre voci."),
                array('ending')
            )
        ),
        "comp_2"=>array(
            array(
                array('','',"Illumina questa notte, o Signore, perché dopo un sonno tranquillo ci risvegliamo alla luce del nuovo giorno, per camminare lieti nel tuo nome."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "lodi_3_1"=>array(
            array(
                array('','',"O Dio, nostra salvezza, che ci hai fatto figli della luce, guidaci nel nostro cammino, perché diventiamo operatori di verità e testimoni del tuo Vangelo."),
                array('ending')
            )
        ),
        "lodi_3_2"=>array(
            array(
                array('','',"Risplende su di noi, Signore, la luce della tua sapienza, perché liberi da ogni compromesso col peccato camminiamo sempre nella via dei tuoi comandamenti."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_3_3"=>array(
            array(
                array('','',"Illumina, Signore, i nostri sensi con la luce del tuo Spirito, perchùè possiamo sempre essere fedeli a te, che con la tua sapoenza ci hai creati e con la tua provvidenza ci guidi."),
                array('ending')
            )
        ),
        "lodi_3_4"=>array(
            array(
                array('','',"Ricordati, o Dio, della tua alleanza, rinnovata sulla croce col sangue dell'Agnello, e fa' che il tuo popolo, libero da ogni colpa, oprogradisca sempre nella via della salvezza."),
                array('ending')
            )
        ),
        "terza_3"=>array(
            array(
                array('','',"Signiore, §Pa dre santo, Dio fedele, che hai mandato lo Spirito Santo promesso dal tuo Figlio, per riunire l'umanità dispersa a causa del peccato, donaci di essere nel mondo operatori di unità e di pace."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "sesta_3"=>array(
            array(
                array('','',"O Dio grande e misericordioso, che ci doni una sosta nella fatica quotidiana, didtie ìni la nostra debolezza, e aiutaci a èprtare a termine il lavoro che abbiamo iniziato."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "nona_3"=>array(
            array(
                array('','',"Signore Gesù Cristo, che per la salvezza di tutti gli uomini hai steso le braccia sulla croce, accogli l'offerta delle nostre azioni e fa' che tutta la nostra vita sia segno e testimonianza della tua redenzione."),
                array('','',"Tu che vivi e regni nei secoli dei secoli.")
            )
        ),
        "ves_3_1"=>array(
            array(
                array('','',"Accogli, o Dio, le nostre preghiere, e donaci notte e giorno la tua protezione, perché nelle vicende della vita siamo sorretti dalla forza immutabile del tuo amore."),
                array('ending')
            )
        ),
        "ves_3_2"=>array(
            array(
                array('','',"Santo è il tuo nome, Signore, e la tua misericordia è benedetta nei secoli; guarda con benevolenza il tuo popolo in preghiera e fa' che la sua lode si unisca alla liturgia dei santi nel cielo."),
                array('ending')
            )
        ),
        "ves_3_3"=>array(
            array(
                array('','',"Salga a te, o Dio misericordioso, la voce della tua Chiesa e fa' che il tuo popolo, libero dalla schiavitù del pecato, ti serva per amore e viva sicuro nella tua protezione."),
                array('ending')
            )
        ),
        "ves_3_4"=>array(
            array(
                array('','',"O Dio misericordioso, che colmi dei tuoi beni coloro che hanno fame e sete di giustizia, ricordati della tua famiglia raccolta in preghiera e trasforma lanostra povertà nella ricdhezza del tuo amore."),
                array('ending')
            )
        ),
        "comp_3"=>array(
            array(
                array('','',"Signore Gesù Cristo, mite e umile di cuore, che rendi soave il giogo e lieve il peso dei tuoi fedeli, accogli i propositi e le opere di questa giornata e fa' che il riposo della notte ci renda più generosi nel tuo servizio."),
                array('','',"Tu che vivi e regni nei secoli dei secoli.")
            )
        ),"lodi_4_1"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, esaudidci le èreghiere della tua Chiesa che al mattino, a mezzogiorno e alla sera celebra le tue lodi; disperdi dal nostro cuore le tenebre del male, perché procediamo sicuri verso Cristo, vera luce che non tramonta."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_4_2"=>array(
            array(
                array('','',"O Dio, vera luce e sorgente della luce, ascolta la nostra preghiera del mattino e fa' che meditando con perseveranza la tua legge, viviamo sempre illuminati dallo splendore della tua verità."),
                array('ending')
            )
        ),
        "lodi_4_3"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, guarda benigno i popoli ancora immersi nell'ombra della morte, fa' risplendere su di essi il sole di giustizia, che ci ah visitato sorgendo dall'alto, Gesù Cristo nostro Signore."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_4_4"=>array(
            array(
                array('','',"Donaci, o Dio, una profonda conoscenza del tuo mistero di salvezza, perché senza timore, liberati sall'oppressione dei nostri nemici, ti serviamo in santità e giustizia tutti i nostri giorni."),
                array('ending')
            )
        ),
        "terza_4"=>array(
            array(
                array('','',"O Dio, che all'ora terza hai effuso lo Spirito Santo sugli apostoli, riuniti in preghiera, concedi anche a noi di partecipare al dono della sua grazia."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "sesta_4"=>array(
            array(
                array('','',"O Dio onnipotente ed eterrno, in cui non è oscurità né tenebre, fa' risplendere su di noi la tua luce, perché illuminati dalla tua parola, camminiamo verso te con cuore generoso e fedele."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "nona_4"=>array(
            array(
                array('','',"Ascolta, o Dio, le niostre preghiere, e donaci di imitare la passione del tuo Figlio per portare con serena fortezza la nostra croce quotidiana."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "ves_4_1"=>array(
            array(
                array('','',"O Dio, che illumini ka notte più oscura e dopo le tenebre fai sorgere nel mondo la luce, donaci di trascorrere quasta notte lontano dalle insidie del maligno, perché all'alba del nuovo giorno èpssoamo cnatare con la Chiesa le tue lodi."),
                array('ending')
            )
        ),
        "ves_4_2"=>array(
            array(
                array('','',"Accogli, Signore misericordioso, la nostra lode della sera: fa' che il nostro cuore non si stanchi mai di meditare la tua legge, perché otteniamo il premio promesso ai tuoi fedeli nella vita eterna."),
                array('ending')
            )
        ),
        "ves_4_3"=>array(
            array(
                array('','',"Accogli, Signore, al tramonto di questo giorno, il nopstro umile ringraziamento, e nella tua misericordia dimentica le colpe da noi commesse per la fragilità della condizione umana."),
                array('ending')
            )
        ),
        "ves_4_4"=>array(
            array(
                array('','',"Accogli, o Dio, la nostra preghiera al tramonto di questo giorno e fa' che seguendo con perseveranza l'esempio del tuo Figlio, raccogliamo frutti di giustizia e di pace."),
                array('','',"Egli è Dio e vive e regna con te nei decoli dei secoli.")
            )
        ),
        "comp_4"=>array(
            array(
                array('','',"Signore Dio noistro, donaci un sonno tranquillo, perché ristorati dalle fatiche del giorno, ci dedichiamo corpo e anima al tuo servizio."),
                array('','',"Per Cristo nostro Signore.")
            )
        )
        
    );

    protected $proprio=array(
        
    );

    protected $litio;
    protected $actual;

    function __construct($caller) {

        $this->litio=$caller;
        $this->actual=$caller->actual;      
        $this->actual['orazione']="";
        $this->actual['proprio']="";

        $this->info['testo']=new Saltesto();
        $this->info['testo']->addEnding($this->ending);

        $this->build();
    }

    function build() {

        //di default attribuisco il salterio
        if ($this->actual['weekDay']!=0) {
            if ($this->actual['ora']=='terza') $this->actual['orazione']='terza_'.$this->actual['weekDay'];
            elseif ($this->actual['ora']=='sesta') $this->actual['orazione']='sesta_'.$this->actual['weekDay'];
            elseif ($this->actual['ora']=='nona') $this->actual['orazione']='nona_'.$this->actual['weekDay'];
            elseif ($this->actual['ora']=='comp' || $this->actual['ora']=='comp2') {
                if ($this->actual['fesCode']!="" && $this->actual['festa'][$this->actual['fesCode']]['tipo']=='S') {
                    $this->actual['orazione']='comp_S';
                }
                else {
                    $this->actual['orazione']='comp_'.$this->actual['weekDay'];
                }

            }
            else $this->actual['orazione']=$this->actual['ora'].'_'.$this->actual['weekDay'].'_'.$this->actual['quarto'];
        }

        if ($this->actual['tempo']=='O') {

            //domeniche
        }

        /*

        

            //di base corrisponde al salterio

            //Presentazione del Signore
            if ($this->actual['evCode']=='0202a') {
                if ($this->actual['ora']=='ves2') $this->actual['proprio']='ves_0202a';
                elseif ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) $this->actual['proprio']='ves_0202a';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='lodi_1';
            }
            //santa Scolastica
            elseif ($this->actual['evCode']=='0210a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1651';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1661';
            }
            //San Giuseppe sposo della B.V. Maria
            elseif ($this->actual['evCode']=='0319a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0319a';
            }
            //Transito S. Benedetto
            elseif ($this->actual['evCode']=='0321a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1622';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1631';
            }
            //Annunciazione del Signore
            elseif ($this->actual['evCode']=='0325a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p10';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0325a';
            }
            //Natività di San Giovanni Battista
            elseif ($this->actual['evCode']=='0624a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_0624a';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0624a';
            }
            //Santi Pietro e Paolo apostoli
            elseif ($this->actual['evCode']=='0629a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1527';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0629a';
            }
            //Nostro Santo Padre Benedetto (Abate) - Patrono d'Europa
            elseif ($this->actual['evCode']=='0711a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1622';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1631';
            }
            //Trasfigurazione del Signore
            elseif ($this->actual['evCode']=='0806a') {
                if ($this->actual['ora']=='ves2') $this->actual['proprio']='ves_0914a';
                elseif ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) $this->actual['proprio']='ves_0914a';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='ves_5';
            }
            //Assunzione della Beata Vergine Maria
            elseif ($this->actual['evCode']=='0815a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_0815a';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1498';
            }
            //Esaltazione della Santa Croce
            elseif ($this->actual['evCode']=='0914a') {
                if ($this->actual['ora']=='ves2') $this->actual['proprio']='ves_PAL';
                elseif ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) $this->actual['proprio']='ves_PAL';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='lodi_1';
            }
            //Tutti i Santi
            elseif ($this->actual['evCode']=='1101a') {
                //l'inno indicato è p1682 ma è uguale a quello a p1631
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='lodi') $this->actual['inno']='p1631';
            }
            //Battesimo del Signore
            elseif ($this->actual['evCode']=='BAT') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_BAT';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='ves_BAT';
            }
            //Pentecoste
            elseif ($this->actual['evCode']=='PEN') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_PEN';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_PEN';
            }
            //Sacratissimo cuore di Gesù
            elseif ($this->actual['evCode']=='SCG') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_SCG';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='ves_5';
            }
            //Ss. Trinità
            elseif ($this->actual['evCode']=='TRI') {               
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='lodi') $this->actual['proprio']='lodi_TRI';
                elseif ($this->actual['ora']=='ves1') $this->actual['proprio']='ves1_TRI';
            }
            //Corpus Domini
            elseif ($this->actual['evCode']=='COD') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_COD';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='ves_SS4';
            }
            //Nostro Signore Gesù Cristo Re dell'Universo
            elseif ($this->actual['evCode']=='GRE') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_GRE';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_GRE';
            }
        }

        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='A') {

            if (substr($this->actual['today'],4,4)<'1217') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') $this->actual['inno']='p9';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p16';
            }
            else {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') $this->actual['inno']='p10';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p17';
            }

            if ($this->actual['evCode']=='1208a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') $this->actual['inno']='p1502';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1498';
            }
            
        }

        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='N') {

            if ($this->actual['evCode']=='NAT') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_NAT';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_NAT';
            }
            elseif ($this->actual['evCode']=='SAF') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_SAF';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0319a';
            }
            elseif ($this->actual['evCode']=='MSS') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1502';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1498';
            }
            elseif ($this->actual['evCode']=='2DN') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_NAT';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_NAT';
            }
            elseif ($this->actual['evCode']>='F0102' && $this->actual['evCode']<='F0105') {
                if ($this->actual['ora']=='ves') $this->actual['proprio']='ves_NAT';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_NAT';
            }
            elseif ($this->actual['evCode']=='EPI') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_EPI';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_EPI';
            }
            elseif ($this->actual['evCode']>='F0107') {
                if ($this->actual['ora']=='ves') $this->actual['proprio']='ves_EPI';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_EPI';
            }
        }

        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='Q') {

            if ($this->actual['weekDay']==0) {
                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2') {
                    if ($this->actual['evCode']=='PAL') $this->actual['proprio']='ves_PAL';
                    else $this->actual['proprio']='ves_QU0';
                }
                elseif ($this->actual['ora']=='lodi') {
                    if ($this->actual['evCode']=='PAL') $this->actual['inno']='ves_5';
                    else $this->actual['proprio']='lodi_QU0';
                }
            }
            else {
                if ($this->actual['ora']=='lodi') {
                    if (substr($this->actual['evCode'],0,2)=='SS') $this->actual['inno']='ves_5';
                    else $this->actual['proprio']='lodi_QU0';
                }
                elseif ($this->actual['ora']=='ves') {
                    if (substr($this->actual['evCode'],0,2)=='SS') $this->actual['proprio']='ves_PAL';
                    else $this->actual['proprio']='ves_QU1';
                }
            }

            if ($this->actual['ora']=='terza') $this->actual['proprio']='terza_QU0';
            elseif ($this->actual['ora']=='sesta') $this->actual['proprio']='sesta_QU0';
            elseif ($this->actual['ora']=='nona') $this->actual['proprio']='nona_QU0';

            if ($this->actual['evCode']=='PAL') {
                if ($this->actual['ora']=='terza' || $this->actual['ora']=='sesta' || $this->actual['ora']=='nona') {
                    $this->actual['proprio']='terza_PAL';
                }
            }

            if ($this->actual['evCode']=='SS4' && $this->actual['ora']=='ves') $this->actual['proprio']='ves_SS4';

            if ($this->actual['evCode']=='SS5' || $this->actual['evCode']=='SS6') {
                if ($this->actual['ora']=='lodi') $this->actual['inno']='ves_5';
                elseif ($this->actual['ora']=='terza') $this->actual['proprio']='terza_SS5';
                elseif ($this->actual['ora']=='sesta') $this->actual['proprio']='sesta_SS5';
                elseif ($this->actual['ora']=='nona') $this->actual['proprio']='nona_SS5';
                elseif ($this->actual['ora']=='ves') $this->actual['proprio']='ves_PAL';
            }

            //santa Scolastica
            if ($this->actual['evCode']=='0210a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1651';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1661';
            }
            //San Giuseppe sposo della B.V. Maria
            elseif ($this->actual['evCode']=='0319a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0319a';
            }
            //Annunciazione del Signore
            elseif ($this->actual['evCode']=='0325a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p10';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0325a';
            }

        }
        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='P') {
            //!!!!!! in MAP, l'indice ASC indica la data dell'ascensione !!!!!!!!
            if (substr($this->actual['today'],4,4)<substr($this->actual['ASC'],4,4)) {
                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves') $this->actual['proprio']='ves_P01';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_P01';
            }
            elseif (substr($this->actual['today'],4,4)==substr($this->actual['ASC'],4,4)) {
                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves') $this->actual['proprio']='lodi_P02';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_P01';
            }
            else {
                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves') $this->actual['proprio']='ves_PEN';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_P02';
            }

            //Annunciazione del Signore
            if ($this->actual['evCode']=='0325a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p10';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0325a';
            }
        }

        //----------------------------------------------------------------------------
        //FESTE
        if ($this->actual['fesCode']=='1226a') {
            if ($this->actual['ora']=='lodi') {
                $this->actual['inno']='p1574';
                $this->actual['proprio']='';
            }
            elseif ($this->actual['ora']=='ves') {
                $this->actual['proprio']='ves_NAT';
            }
        }
        elseif ($this->actual['fesCode']=='1227a') {
            if ($this->actual['ora']=='lodi') {
                $this->actual['inno']='p1523';
                $this->actual['proprio']='';
            }
            elseif ($this->actual['ora']=='ves') {
                $this->actual['proprio']='ves_NAT';
            }
        }
        elseif ($this->actual['fesCode']=='1228a') {
            if ($this->actual['ora']=='lodi') {
                $this->actual['proprio']='lodi_1228a';
            }
            elseif ($this->actual['ora']=='ves') {
                $this->actual['proprio']='ves_NAT';
            }
        }
        elseif ($this->actual['fesCode']=='1229a' || $this->actual['fesCode']=='1230a') {
            if ($this->actual['ora']=='lodi') {
                $this->actual['proprio']='lodi_NAT';
            }
            elseif ($this->actual['ora']=='ves') {
                $this->actual['proprio']='ves_NAT';
            }
        }
        elseif ($this->actual['fesCode']=='1231a') {
            if ($this->actual['ora']=='lodi') {
                $this->actual['proprio']='lodi_NAT';
            }
        }

        //###################################
        //pastori,dottori,martiri,martire,monaci,religiosi,religiose,santi,sante,dedica,apostoli,BVM,SG,MIC,ANG,DEF
        if ($this->actual['fesCode']!='') {

            if ( isset($this->actual['festa'][$this->actual['fesCode']]) );

            $f=$this->actual['festa'][$this->actual['fesCode']];

            if (isset($f['comune'])) {

                switch ($f['comune']) {

                    case 'dedica':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune di una dedicazione)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1474';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune di una dedicazione)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1651';
                        }
                    break;

                    case 'BVM':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune della B.V.Maria)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1498';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune della B.V.Maria)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1502';
                        }
                    break;

                    case 'apostoli':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune degli apostoli)');
                            $this->actual['proprio']='';
                            if ($this->actual['tempo']=='Q') $this->actual['inno']='p1513';
                            elseif ($this->actual['tempo']=='P') $this->actual['inno']='p1524';
                            else $this->actual['inno']='p1523';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune degli apostoli)');
                            $this->actual['proprio']='';
                            if ($this->actual['tempo']=='P') $this->actual['inno']='p1528';
                            else $this->actual['inno']='p1527';
                        }
                    break;

                    case 'martiri':
                        if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune dei martiri)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1553';
                        }
                    break;

                    case 'martire':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune di un martire)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1574';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune di un martire)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1553';
                        }
                    break;

                    case 'pastori':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune dei pastori)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1631';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune dei pastori)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1609';
                        }
                    break;

                    case 'dottori':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune dei dottori della Chiesa)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1604';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune dei dottori della Chiesa)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1594';
                        }
                    break;

                    case 'monaci':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune dei monaci)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1631';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune dei monaci)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1609';
                        }
                    break;

                    case 'vergini':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune delle vergini)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1661';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune delle vergini)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1651';
                        }
                    break;

                    case 'santi':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune dei santi)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1631';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune dei santi)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1609';
                        }
                    break;

                    case 'religiosi':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune dei religiosi)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1683';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune dei religiosi)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1683';
                        }
                    break;

                    case 'sante':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune delle sante)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1705';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune delle sante)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1709';
                        }
                    break;

                    case 'religiose':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune delle religiose)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1705';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune delle religiose)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1709';
                        }
                    break;

                    case 'DEF':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(ufficio dei defunti)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1731';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(ufficio dei defunti)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1731';
                        }
                    break;

                    case 'ANG':
                        if ($this->actual['ora']=='lodi') {
                            $this->actual['proprio']='lodi_ANG';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->actual['proprio']='ves_ANG';
                        }
                    break;

                    case 'SFA':
                        if ($this->actual['ora']=='lodi') {
                            $this->actual['proprio']='lodi_SFA';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->actual['proprio']='ves_SFA';
                        }
                    break;

                    case 'SG':
                        if ($this->actual['ora']=='lodi') {
                            $this->actual['proprio']='lodi_0319a';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->actual['proprio']='lodi_0319a';
                        }
                    break;

                    case 'MIC':
                        if ($this->actual['ora']=='lodi') {
                            $this->actual['proprio']='lodi_MIC';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->actual['proprio']='ves_MIC';
                        }
                    break;
                }
            }

        }
        */
        //###################################
        //----------------------------------------------------------------------------

        if ($this->actual['proprio']!='') {
            if (isset($this->proprio[$this->actual['proprio']])) {
                foreach ($this->proprio[$this->actual['proprio']] as $k=>$t) {
                    $this->info['testo']->addBlock($t);
                }
            }
        }
        else {
            if (isset($this->orazioni[$this->actual['orazione']])) {
                foreach ($this->orazioni[$this->actual['orazione']] as $k=>$t) {
                    $this->info['testo']->addBlock($t);
                }
            }
        }
    }

    function draw() {

        echo '<div class="salResBlockTitle" >';
            echo $this->info['titolo'];
            //echo '<div>'.json_encode($this->actual).'</div>';
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            if ($this->info['testo']) {
                echo $this->info['testo']->draw();
            }
        echo '</div>';
    }
    
}

?>