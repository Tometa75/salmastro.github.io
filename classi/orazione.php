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
        "comp1_0"=>array(
            array(
                array('','',"Veglia su di noi in questa notte, o Signore: la tua mano ci ridesti al nuovo giorno perché possiamo celebrare con gioia la risurrezione del tuo Figlio, che vive e regna nei secoli dei secoli."),
            )
        ),
        "comp_0"=>array(
            array(
                array('','',"Salga te, o Padre, la nostra preghiera al termine di questo mondo, memoriale della risurrezione de Signore: la tua grazia ci conceda di riposare in pace, sicuri da ogni male, e di risvegliarci nella gioia, per cantare la tua lode."),
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
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
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
                array('','',"O Dio, che hai mandato a noi la luce vera che guida tutti gli uomini alla salvezza, donaci la forza dello Spirito, perchè possiamo preparare davanti al Figlio tuo la via della giustizia e dell pace."),
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
        ),
        "lodi_4_1"=>array(
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
        ),
        "lodi_5_1"=>array(
            array(
                array('','',"O Dio, che con la luce del tuo Figlio, Parola di verità, disperdi le tenebre dell'ignoranza, accresci in noi il vigore della fede, perché nessuna tentazione possa estinguere quella fiamma che la tua grazia ha acceso nei nostri cuori."),
                array('ending')
            )
        ),
        "lodi_5_2"=>array(
            array(
                array('','',"Accogli, Dio onnipotente, la nostra lode del mattinol e fa' che ci uniamo un giorno al coro dei tuoi santi per cantare in eterno la tua gloria."),
                array('ending')
            )
        ),
        "lodi_5_3"=>array(
            array(
                array('','',"Donaci, o Padre buono, di godere sempre della presenza del Figlio tuo, percgé seguendo lui, nostro pastore e guida, progrediamo nella via dei tuoi comandamenti."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_5_4"=>array(
            array(
                array('','',"Concedi al tuo popolo, o Dio, l'abbondanza dei tuoi doni, perché dia sempre fedele agli impegni del suo Battesimo, e vivia nella prosperità e nella pace in attresa della gioia eterna."),
                array('ending')
            )
        ),
        "terza_5"=>array(
            array(
                array('','',"Signore Gesùà Cristo, che all'ora terza fosti condotto al supplizio della croce per la redenzione del mondo, nella tua bontà perdona le nostre colpe passate e preservaci da quelle future."),
                array('','',"Tu che vivi e regni nei secoli dei secoli.")
            )
        ),
        "sesta_5"=>array(
            array(
                array('','',"Signore Gesù Cristo, che all'ora sesta, mentre le tenebre avvolgevano il mondo, fosti inchiodato sulla croce, vittima innocente per la nostra salvezza, donaci sempre qualla luce, che guida gli uomini sulla via della vita eterna."),
                array('','',"Tu che vivi e regni nei secoli dei secoli.")
            )
        ),
        "nona_5"=>array(
            array(
                array('','',"Signore Gesù Cristo, che al ladrone pentito facesti la grazia di passare dalla crice alla gloria del tuo regno, ricevi l'umile confessione delle nostre colpe e nell'ora della morte apri anche a noi la porta del tuo paradiso."),
                array('','',"Tu che vivi e regni nei secoli dei secoli.")
            )
        ),
        "ves_5_1"=>array(
            array(
                array('','',"Concediai tuoi fedeli, o Signore, la sapienza della croce, paerché illuminati dalla passione del tuo Figlio portiuamo generosamente il suo giogo soave."),
                array('','',"Egli è Dio e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "ves_5_2"=>array(
            array(
                array('','',"O Dio, che hai rivlòeato il mistero della tua sapienza nella follia della croce, donaci di riconoscere nella passione la gloria del tuo Figlio, perché la sua croce sia sempre per noi fonte di speranza e di pace."),
                array('','',"Egli è Dio e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "ves_5_3"=>array(
            array(
                array('','',"Dio Padre onnipotente, che ci hai donato il tuo unico Figlio come prezzo della nostra salvezza, fa' che vivendo in comunione con le sue sofferenze, opartecipiamo un giorno alla gloria della sua risurrezione."),
                array('','',"Egli è Dio e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "ves_5_4"=>array(
            array(
                array('','',"Padre misericordioso, che hai redento il mondo con la passione del tuo figlio, fa' che la tua chiesa si offra a te come sacrificio vivo e santo e sperimanti sempre la pienezzs del tuo amore."),
                array('ending')
            )
        ),
        "comp_5"=>array(
            array(
                array('','',"Donaci, o Padre, di unirci nella fede alla norte e sepoltura del tuo Figlio per risorgere con lui alla vita nuova."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_6_1"=>array(
            array(
                array('','',"Risplenda sempre, o Dio, nei nostriquori la luce del Figlio tuo risorto, perché liberi dalle tenebre del peccato, possiamo giungere alla pienezza della tua gloria."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_6_2"=>array(
            array(
                array('','',"Ti lodi, o Signore la nostra voce, ti lodi il nostro spirito, e poiché il nostro essere è dono del tuo amore, tutta la nostra vita si trasformi in perenne liturgia di lode."),
                array('ending')
            )
        ),
        "lodi_6_3"=>array(
            array(
                array('','',"O Dio, principio e sorgente della nostra salvezza, fa' che tutta la nostra vita sia una testimonianza del tuo amore, perché possiamo un giorno cantare, la tua lode nell'assemblea festosa dei santi."),
                array('ending')
            )
        ),
        "lodi_6_4"=>array(
            array(
                array('','',"O Dio, verla luce e giorno senza tramonto, accogli la lode mattutina del tuo popolo e fa' che il nostro spirito, libero dalle tenebre della colpa, risplenda nel fulgore della tua venuta."),
                array('ending')
            )
        ),
        "terza_6"=>array(
            array(
                array('','',"Dio, Padre onnipotente, dona la luce dello Spirito Santo a questa tua famiglia riunita nel tuo nome, perché sicura dalle insidie del nemico, di allieti sempre nella tua lode."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "sesta_6"=>array(
            array(
                array('','',"O Signore, fiamma di carità, donaci l'ardore del tuo Spirito perché amiamo te sopra ogni cosa e i nostri fratelli nel vicolo del tuo amore."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "nona_6"=>array(
            array(
                array('','',"Ascolta Signore, la nostra preghiera per intrcessione della Beata Vergine Maria, e donaci la tua vera pace, perché in tutti i giorni della nostra vita possiamo dedicarci con gioia al tuo servizio e giungere alla beatitudine del tuo regno."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "sun_1"=>array(
            array(
                array('','',"Ispira nella tua paterna bontà, o Signore, i pensieri e i propositi del tuo popolo in preghiera, perché veda ciò che deve fare e abbia la forza di compiere ciò che ha veduto."),
                array('ending')
            )
        ),
        "sun_2"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che governi il cielo e la terra, ascolta con bontà le preghuere dek tuo popolo e dona ai nostri giorni la tua pace."),
                array('ending')
            )
        ),
        "sun_3"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, guida i nostri atti secondo la tua voklontà, perché nel nome del tuo diletto Figlio portiamo frutti generosi di opore buone."),
                array('ending')
            )
        ),
        "sun_4"=>array(
            array(
                array('','',"Dio grande e misericordioso, concedi a noi tuoi fedeli di adorarti con tutta l'anima e di amare i nistri fratelli nella carità del Cristo."),
                array('','',"Egli è Dio e vive e regna con te nei secoli dei secoli.",)
            )
        ),
        "sun_5"=>array(
            array(
                array('','',"Custodisci sempre con paterna bontà la tua famiglia, Signore, e poiché unico fondamento della nostra speranza è la grazia che viene da te, aiutaci sempre con la tua protezione."),
                array('ending')
            )
        ),
        "sun_6"=>array(
            array(
                array('','',"O Dio, Che hai promesso di essere presente in coloro chje ti amano e con cuore retto e sincero custodiscono la tua parola, rendici degni di diventare tua stabile dimora."),
                array('ending')
            )
        ),
        "sun_7"=>array(
            array(
                array('','',"Il tuo aiuto, Padre misericordioso, ci rnda sempre attenti alla voce dello Spirito, perché possiamo conoscere ciò che è conforme alla tua volontà e attuarlo nelle parole e nelle opere."),
                array('ending')
            )
        ),
        "sun_8"=>array(
            array(
                array('','',"Concedi, Signore, che il corso degli eventi nel mondo si svolga secondo la tua volontà nella giustizia e nella pace, e la tua Chiesa si dedichi con serena fiducia al tuo servizio."),
                array('ending')
            )
        ),
        "sun_9"=>array(
            array(
                array('','',"O Dio, che nella tua provvidenza tutto disponi seconso il tuo disegno di salvezza, allontana da noi ogni male e dona ciò che giova al nostro vero bene."),
                array('ending')
            )
        ),
        "sun_10"=>array(
            array(
                array('','',"O Dio, sorgente di ogni bene, ispiraci propositi giusti e santi e donaci il tuo aiuto, perché possiamo attuarli nella nostra vita."),
                array('ending')
            )
        ),
        "sun_11"=>array(
            array(
                array('','',"O Dio, fortezza di chi spera in te, ascolta benigno le nostre invocazioni, e poiché nella nostra debolezza nulla possizmo senza il tuo aiuto, soccorrici con la tua grazia, perché fedeli ai tuoi comandamenti possiamo piacerti nelle intenzioni e nelle opere."),
                array('ending')
            )
        ),
        "sun_12"=>array(
            array(
                array('','',"Dona al tuo popolo , o Padre, di vivere sempre nella venerazione e nell'amore per il tuo santo nome, poiché tu noin privi mai della tua guida coloro che hai stabilito sulla roccia del tuo amore."),
                array('ending')
            )
        ),
        "sun_13"=>array(
            array(
                array('','',"O Dio, che ci hai resi figli della lucecon il tuo Spirito di adozione, fa' che non ricadiamo nelle tenebre dell'errore, ma che restiamo sempre luminosi nello splendore della verità."),
                array('ending')
            )
        ),
        "sun_14"=>array(
            array(
                array('','',"O Dio, che cion l'umiliazione del tuo Figlio hai risollevato l'umanità dalla sua caduta, sonaci una rinnovata gioia pasquale, perché liberi dall'oppressione della colpa, partecipiamo alla felicità eterna."),
                array('ending')
            )
        ),
        "sun_15"=>array(
            array(
                array('','',"O Dio, che mostri agli erranti la luce della tua verità, perché possano tornare sulla retta via, concedi a tutti coloro che si professano cristiani di respingere ciò che è contrario a quasto nome e di seguire ciò che gli è conforme."),
                array('ending')
            )
        ),
        "sun_16"=>array(
            array(
                array('','',"Sii propizio a noi tuoi fedeli, Signore, e donaci i tespri della tua grazia, perché ardenti di speranza, fede e carità, restiamo sempre fedeli ai tuoi comandamenti."),
                array('ending')
            )
        ),
        "sun_17"=>array(
            array(
                array('','',"O Dio, nostra forza e nostra speranza, senza di te nulla esiste di valido e di santo; effondi su di noi la tua misericordia perché, da te sorretti e guidati, usiamo saggiamente dei beni terreni nella continua ricerca dei beni eterni."),
                array('ending')
            )
        ),
        "sun_18"=>array(
            array(
                array('','',"Mostraci la tua continua benevolenza, o Padre, e assisti il tuo popolo, che ti riconosce suo pastore e guida; rinnova l'opera della tua creazione e custodisci ciò che hai rinnovato."),
                array('ending')
            )
        ),
        "sun_19"=>array(
            array(
                array('','',"Dio onnipotente e d eterno, che ci dai il privilegio di chiamarti Padre, fa' crescere in n oi lo spirito di figli adottivi, perché possiamo entrare nell'eredità che ci hai promesso."),
                array('ending')
            )
        ),
        "sun_20"=>array(
            array(
                array('','',"O Dio, che hai preparato beni invisibili per coloro che ti amano, infondi in noi la dolcezza del tuo amore, perché amandoti in ogni cosa e sopra ogni cosa, otteniamo i beni da te promessi, che superano ogni desiderio."),
                array('ending')
            )
        ),
        "sun_21"=>array(
            array(
                array('','',"O Dio, che unisci in un solo volere le menti dei fedeli, concedi al tuo popolo di amare ciò che comandi e desiderare ciò che prometti, perché tra le vicende del mondo là siano fissi i nostri cuori dove è la vera gioia."),
                array('ending')
            )
        ),
        "sun_22"=>array(
            array(
                array('','',"O Dio, nostro Padre, unaca fonte di ogni dono perfetto, suscita in noi l'amore per te e ravviva la nostra fede, perché si sviluppi in noi il germe del bene e con il tuo aiuto maturi fino alla sua pienezza."),
                array('ending')
            )
        ),
        "sun_23"=>array(
            array(
                array('','',"O Padre, che ci hai donato il salvatore e lo Spirito Santo, guarda con benevolenza i tuoi figli di adozione, perché a tutti i credenti in Cristo sia data la vera libertà e l'eredità eterna."),
                array('ending')
            )
        ),
        "sun_24"=>array(
            array(
                array('','',"O Dio, che hai creato e governi l'universo, fa' che spoerimentiamo la potenza della tua misericordia, per dedicarci con tutte le forze al tuo servizio."),
                array('ending')
            )
        ),
        "sun_25"=>array(
            array(
                array('','',"O Dio, che nell'amore verso di te e verso il prossimo hai posto il fondamento di tutta la legge, fa' che osservando i tuoi comandamenti  meritiamo di entrare nella vita eterna."),
                array('ending')
            )
        ),
        "sun_26"=>array(
            array(
                array('','',"O Dio, che riveli la tua onnipotenza soprattutto con la midericordia e il perdono, continia a effojndere su di noi la tua grazia, perché, camminando verso i beni da te promessi, diventiamo partecipi della felicità eterna."),
                array('ending')
            )
        ),
        "sun_27"=>array(
            array(
                array('','',"O Dio, fonte di ogni bene, che esaudisci le preghiere del tuo popolo al di la di ogni desiderio e di ogni merito, effondi su di noi la tua misericordia: perdona ciò che la coscenza teme e aggiungi ciò che la preghiera nnon osa sperare."),
                array('ending')
            )
        ),
        "sun_28"=>array(
            array(
                array('','',"Ci precede a ci accompagni sempre la tua grazia, Signore, perché, sorretti dal tuo eterno aiuto, non ci stanchiamo mai di operare il bene."),
                array('ending')
            )
        ),
        "sun_29"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, crea in noi un cuore generoso e fedele, perché possiamo sempre servirti con lealtà e purezza di spirito."),
                array('ending')
            )
        ),
        "sun_30"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, accresci in noi la fede, la speranza e la carità, e perché possiamo ottrenere ciò che prpmetti, fa' che amiamo ciò che comandi."),
                array('ending')
            )
        ),
        "sun_31"=>array(
            array(
                array('','',"Dio onnipotente e misericordioso, tu ssolo puoi dare ai tuoi fedeli il dono di servirti in modo lodevole e degno; fa' che camminiamo senza ostascoli verso i beni da te promessi."),
                array('ending')
            )
        ),
        "sun_32"=>array(
            array(
                array('','',"Dio grande e misericordioso, allontana ogni ostacolo nel nostro cammino verso di te, perché, nella serenità del corpo e dello spirito, possiamo dedicarci liberamente al tuo servizio."),
                array('ending')
            )
        ),
        "sun_33"=>array(
            array(
                array('','',"Il tuo aiuto, Signore, ci renda sempre lieti nel tuo servizio, perché solo nella dedizione a te, fonte di ogni bene, possiamo avere felicità piena e duratura."),
                array('ending')
            )
        ),
        "sun_34"=>array(
            array(
                array('','',"Ridesta, Signore, la volontà dei tuoi fedeli perché, collaborando con impegno alla tua opera di salvezza, ottengano in misura sempre più abbondante i doni della tua misericordia."),
                array('ending')
            )
        ),
        "A_1_0"=>array(
            array(
                array('','',"O Dio, nostro Padre, susciata in noi la volontà di andare inconrtro con le buone opere al tuo Cristo che viene, perché egli ci chiami accanto a sé nella gloria a possedere il regno dei cieli."),
                array('ending')
            )
        ),
        "A_1_1"=>array(
            array(
                array('','',"Il tuo aiuto, o Padre, ci renda perseveranti nel bene in attesa del Cristo tuo Figlio; quando egli verrà e busserà alla porta ci trovi vigilanti nella preghiera, operosi nella carità fraterna ed esultanti nella lode."),
                array('ending')
            )
        ),
        "A_1_2"=>array(
            array(
                array('','',"Accogli, o Padre, le preghiere della tua Chiesa e soccorrici nelle fatiche enelle prove della vita; la venuta del Cristo tuo Figlio ci liberi dal male antico che è in noi e ci conforti con la sua presenza."),
                array('ending')
            )
        ),
        "A_1_3"=>array(
            array(
                array('','',"Dio grande e misericordioso, prepara con la tua potenza il nostro cuore a incontrare i Cristo che viene, perché ci trovi degni di partecipare al banchetto della vita e ci serva egli stesso nel suo avvento glorioso."),
                array('ending')
            )
        ),
        "A_1_4"=>array(
            array(
                array('','',"Ridesta la tua potenza, Signore, e con grande forza soccorri i tuoi fedeli; la tua grazia vinca le resistenze del peccato e affretti il momento della salvezza."),
                array('ending')
            )
        ),
        "A_1_5"=>array(
            array(
                array('','',"Ridesta la tua potenza e vieni, Signore: nei pericoli che ci minacciano a causa dei nostri peccati la tua protezione ci liberi, il tuo soccorso ci salvi."),
                array('','',"Tu sei Dio, e vivi e regni con Dio Padre, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A_1_6"=>array(
            array(
                array('','',"O Dio, che hai mandato in quasto mondo il tuo unico Figlio a liberare l'uomo dalla schiavitù del peccato, cincedi a noi, che attnediamo con fede il dono del tuo amore, di raggiungerre il premio della vera libertà."),
                array('ending')
            )
        ),
        "A_2_0"=>array(
            array(
                array('','',"Dio grande e misericordioso, fa' che il nostro impegno nel mondo non ci  ostacoli nel cammino verso il tuo Figlio, ma la sapienza che viene dal cielo ci guidi alla comunione con il Cristo, nostro Salvatore."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A_2_1"=>array(
            array(
                array('','',"Salga a te, o Padre, la preghiera del tuo popolo, perché nell'attesa fervida e operosa si prepari a clebrare con vera fede il grande mistero dell'incarnazione del tuo unico Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A_2_2"=>array(
            array(
                array('','',"O Dio, che hai fatto giungere ai confini della terra il lieto annunzio del Salvartore, fa' che tutti gli uomini accolgano con sincera esultanza la gloria del suo Natale."),
                array('ending')
            )
        ),
        "A_2_3"=>array(
            array(
                array('','',"Dio onnipotente, che ci chiami a preparare la via al Cristo Sognore, fa' che per la debolezza della nostra fede non ci stanchiamo di attendere la consolante presenza del medico celeste."),
                array('ending')
            )
        ),
        "A_2_4"=>array(
            array(
                array('','',"Risveglia, o Dio, la fede del tuo popolo perché prepari le vie del tuo unico Figlio, e per il mistero della sua venuta possa servirti con la santità della vita."),
                array('ending')
            )
        ),
        "A_2_5"=>array(
            array(
                array('','',"Rafforza, o Padre, la nostra vigilanza nell'attesa del tuo Figlio, perché, illuminati dalla sua èarola di salvezza, andiamo incontro a lui con le lampade accese."),
                array('ending')
            )
        ),
        "A_2_6"=>array(
            array(
                array('','',"Sorga in noi, Dio onnipotente, lo splendore della tua gloria, Cristo tuo unico Figlio; la sua venuta vinca le tenebre del male e ci riveli al mondo come figli della luce."),
                array('ending')
            )
        ),
        "A_3_0"=>array(
            array(
                array('','',"Guarda, o Padre, il tuo popolo, che attende cona fede il Natale del Signore, e fa' che giunga a celebrare con rinnovata esultanza il grande mistero della salvezza."),
                array('ending')
            )
        ),
        "A_3_1"=>array(
            array(
                array('','',"Ascolta, o Padre, la nostra preghiera, e con la luce del tuo Figlio che viene a visitarci, rischiara le tenebre del nostro cuore."),
                array('ending')
            )
        ),
        "A_3_2"=>array(
            array(
                array('','',"O Padre, che per mezzo del tuo unico Figlio hai fatto di noi una nuova creaturak guarda all'opera del tuo amore misericordioso, e con la venuta del redentore salvaci dalle conseguenze del peccato."),
                array('ending')
            )
        ),
        "A_3_3"=>array(
            array(
                array('','',"Concedi, Dio onnipotente, che la festa ormai vicina del nostro Redentore ci sostenga nelle fatiche di ogni giorno e ci dia il possesso dei beni eterni."),
                array('ending')
            )
        ),
        "A_3_4"=>array(
            array(
                array('','',"La coscienza della nostra colpa ci rattrista, o Padre, e ci fa sentire indegni di servire a te; donaci la tua gioia e salvaci con la venuta del Redentore."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A_3_5"=>array(
            array(
                array('','',"Ci preceda e ci accompagni sempre la tua grazia, Dio onnipotente; la venuta del tuo unico Figlio, che attendiamo con intenso desiderio, ci ottenga la salvezza per la vita presente e per la futura."),
                array('ending')
            )
        )
    );

    protected $proprio=array(
        "BAT"=>array(
            array(
                array('','',"Padre onnipotente ed eterno, che dopo il battesimo nel fiume Giordano proclamasti il Cristo tuo diletto Figlio, mentra discdendeva su di lui lo Spirito Santo, concedi ai tuoi figli, rinati dall'acqua e dallo Spirito, di vivere sempre nel tuo amore."),
                array('ending')
            )
        ),
        "PEN"=>array(
            array(
                array('','',"O Padre, che nel mistero della Pentecoste sasntifichi la tua Chiesa in ogni popolo e nazione, diffondi fino ai confini della terra i doni dello Spirito Santo, e continua oggi, nella comunità dei credenti, i prodigi che hai operato agli inizi della predecazione del Vangelo."),
                array('ending')
            )
        ),
        "SCG"=>array(
            array(
                array('','',"O Padre, che nel Cuore del tuo dilettissimo Figlio ci dai la gioia di celebrare le grandi opere del tuo amore per noi, fa' ìche da quasta fonte inedauribile attingiamo l'abbondanza dei tuoi doni."),
                array('ending')
            )
        ),
        "TRI"=>array(
            array(
                array('','',"O Dio Padre, che hai mandato nel mondo il tuo Figlio, Parola di verità, e lo Spirito santificatore per rivelare agli uomini il mistero della tua vita, fa' che nalla professione della vera fede riconosciamo la gloria della Trinità e adoriamo l'unico Dio in tre persone."),
                array('ending')
            )
        ),
        "COD"=>array(
            array(
                array('','',"Signiore Gesù Cristo, che nel mirabikle sacramento dellEucaristia ci hai lasciato il memoriale della tua Pasqua, fa' che adoriamo con viva fede il danto mistero del tuo Corpo e del tuo Sangue, per sentire dsempre in noi i benefici della rendenzione."),
                array('','',"Tu sei Dio, e vivi e regni con Dio Padre, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "GRE"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che hai voluto rinnovare tutte le cose in Cristo tuo Figlio Re dell'universo, fa' che ogni creatura, libera dalla schiavitù del peccato, ti serva e ti lodi senza fine."),
                array('ending')
            )
        ),
        "SAF"=>array(
            array(
                array('','',"O Dio, nostro Padre, che nella Santa Famiglia ci hai dato un vero modello di vita, fa' che nelle nostre famiglie fioridcano le stesse virtù e lo stesso amore, perchè, riuniti insieme nella tua casa, possiamo godere la gioia senza fine."),
                array('ending')
            )
        ),
        "MSS"=>array(
            array(
                array('','',"O Dio, che nella verginità feconda di Maria hai donato agli uomini i beni della salvezza eterna, fa' che sperimentiamo la sua intercessione, poiché per mezzo di lei abbiamo ricevuto l'autore della vita, Cristo tuo Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "2DN"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, luce dei credenti, riempi della tua gloria il mondo intero e rivelati a tutti i popoli nello splendore della tua verità."),
                array('ending')
            )
        ),
        "EPI"=>array(
            array(
                array('','',"O Dio, che in questo giorno, con la guida della stella, hai rivelato alle genti il tuo unico Figlio, conduci benigno anche noi, che già ti abbiamo conosciuto per la fede, a contemplare la grandezza della tua gloria."),
                array('ending')
            )
        ),
        "AV4"=>array(
            array(
                array('','',"Infondi nel nostro spirito la tua grazia, o Padre; tu che nell'annunzio dell'angelo ci hai rivelato l'incarnazione del tuo Figlio, per la sua passione e la sua croce guidaci alla gloria della risurrezione."),
                array('ending')
            )
        ),
        "A1217"=>array(
            array(
                array('','',"Dio creatore e redentore, che hai rinnovato il mondo nel tuo Verbo, fatto uomo nel grembo di una Madre sempre vergine, concedi che il tuo unico Figlio, primogenito di una moltitudine di fratelli, ci unisca a sé in comunione di vita."),
                array('ending')
            )
        ),
        "A1218"=>array(
            array(
                array('','',"Oppressi a lungo sotto il giogo del èeccato, aspettiamo o Padre, la nostra redenzione; la nuova nascita del tuo unico Figlio ci liberi dalla schiavitù antica."),
                array('ending')
            )
        ),
        "A1219"=>array(
            array(
                array('','',"O Dio, cha hai rivelato al mondo con il parto della Vergine lo splendore della tua gloria, concedi al tuo popolo di venerare con fede viva e di celebrare con sincero amore il grande mistero dell'incarnazione."),
                array('ending')
            )
        ),
        "A1220"=>array(
            array(
                array('','',"Tu hai voluto, o Padre, che all'annunzio dell'angelo la Vergine immacolata concepisse il tuo Verbo eterno, e avvolta dalla lucd dello Spirito Santo divenisse tempio della nuova alleanza: fa' che aderiamo umilmente al tuo volere, come la vergine si affidò alla tua parola."),
                array('ending')
            )
        ),
        "A1221"=>array(
            array(
                array('','',"Ascolta, o Padre, le preghiere del tuo popolo in attesa del tuo Figlio che viene nell'umiltà della condizione umana: la nostra gioia si compia alla fine dei tempi quando egli verrà nella gloria."),
                array('ending')
            )
        ),
        "A1222"=>array(
            array(
                array('','',"O Dio, che nella venuta del tuo Figlio hai risollevato l'uomo dal dominio del peccato e della morte, concedi a noi, che professiamo la fede nella sua incarnazione, di partecipare alla sua vita immortale."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A1223"=>array(
            array(
                array('','',"Dio onnipotente ed eterrno, è ormai davanti a noi il Natale del tuo Figlio: ci soccorra nella nostra indegnità il Verbo che si è fatto uomo nel seno della Vergine Maria e di è degnato di abitare fra noi."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A1224"=>array(
            array(
                array('','',"Affrèttati, non tardare, Signore Gesù: la tua venuta dia conforto e speranza a coloro che confidano nel tuo amore misericordioso."),
                array('','',"Tu sei Dio, e vivi e regni con Dio Padre, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "ves1_NAT"=>array(
            array(
                array('','',"O Padre, che ogni anno ci fai vivere nella gioia quasta vigilia del Natale, concedi che possiamo guardare senza timore, quando verrà come giudice, il Cristo tuo Figlio che accogliamo in festa come Redentore."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_NAT"=>array(
            array(
                array('','',"Signore, Dio onnipotente, che ci avvolgi della nuova luce del tuo Verbo fatto uomo, fa' che ridplenda nelle nostre opere il mistero della fede che rifulge nel nostro spirito."),
                array('ending')
            )
        ),
        "terza_NAT"=>array(
            array(
                array('','',"O Dio, che in modo mirabile ci hai creati a tua immagine, e in modo più mirabile ci hai rinnovati e redenti, fa' che possiamo condividere la vita divina del tuo Figlio, che oggi ha voluto assumere la nostra natura umana."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "N1226"=>array(
            array(
                array('','',"O Dio grande e misericordioso, la nuova nascita del tuo unico Figlio nella nostra carne mortale ci liberi dalla schiavitù antica, che ci tiene sotto il giogo del peccato."),
                array('ending')
            )
        ),
        "N1229"=>array(
            array(
                array('','',"Dio invisibile ed eterno, che nella venuta del Cristo vera luce ai ridchiarato le nostre tenebre, guarda con bontà quaesta tua famiglia, perché possa celebrare con lode unanime la nascita gloriosa del tuo unico Fignio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "N1231"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che nelòla nascita del tuo Figlio hai stabilito l'inizio e la pienezza della vera fede, accogli anche noi come membra del Cristo, che compendia in sé la salve<zza del mondo."),
                array('ending')
            )
        ),
        "F0102"=>array(
            array(
                array('','',"Rafforza la fede del tuo popolo, o Padre, perché creda e proclami il Cristo tuo unico Figlio, vero Dio, eterno con te nella gloria, e vero uomo nato dalla Vergine Madre; in quasta fede confermaci nelle prove della vita presente e guidaci alla gioia senza fine."),
                array('ending')
            )
        ),
        "F0103"=>array(
            array(
                array('','',"O Dio, tu hai voluto che l'umanità del Salvatore, nella sua mirabile nascita dalla Vergine Maria, non fosse sottoposta alla comune eredità dei nostri padri; fa' nche liberati dal contagio dell'antico male possiamo anche noi far parte delka nuova creazione, inixiata da Cristo tuo Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "F0104"=>array(
            array(
                array('','',"Dio onnipotente, il Salvatore che tu hai mandato, luce nuova all'orizzonte del mondo, sorga ancora e risplenda su tutta la nostra vita."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "F0105"=>array(
            array(
                array('','',"O Dio, che nella nascita del tuo unico Figlio hai dato mirabile principio della nostra redenzione, rafforza la fede del tuo popolo, perché sotto la guida del Cristo giunga alla meta della gloria eterna."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "N0107"=>array(
            array(
                array('','',"Lo splendore della tua gloria illumini, Signore, i nostri cuori, perché attraverso le tenebre di questo mondo possiamo giungere alla luce della tua dimora."),
                array('ending')
            )
        ),
        "N0108"=>array(
            array(
                array('','',"O Padre, il cui unico Figlio si è manifestato nella nostra carne mortale, concedi a noi, che lo abbiamo conosciuto come vero uomo, di essere interiormente rinnovati a sua immagine."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "N0109"=>array(
            array(
                array('','',"O Dio, luce del mondo, concedi a tutte le genti il bene di una pace sicura e fa' risplendere nei nostri cuori quella luce radiosa che illuminò la mente dei nostri padri."),
                array('ending')
            )
        ),
        "N0110"=>array(
            array(
                array('','',"O Dio, che in Cristo tuo Figlio hai rivelato a tutti i popoli la sapienxa eterna, fa' riaplendere su di noi la gloria del nostro Redentore, perchP giungiamo alla luce che non ha tramonto."),
                array('ending')
            )
        ),
        "N0111"=>array(
            array(
                array('','',"Dio onnipotente, manifesta anche a noi il mistero della nascita del Salvatore rivelato ai magi dalla luce della stella, e cresca sempre più nel nostro spirito."),
                array('ending')
            )
        ),
        "N0112"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che nel Natale del Redentore hai fatto di noi una nuova creatura, trasformaci nel Cristo tuo Figlio, che ha congiunto per sempre a sè la nostra umanità."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0102a"=>array(
            array(
                array('','',"O Dio, che hai illuminato la tua Chiesa con l'insegnamento e l'esempio dei santi Basilio e Gregorio Nazianzeno, donaci uno spirito umile e ardente, per conoscere la tua verità e attuarla con un coraggioso programma di vita."),
                array('ending')
            )
        ),
        "0107a"=>array(
            array(
                array('','',"O Dio, che nel tuo sacerdote san Raimondo, pieno di bontà verso i peccatori e i prigionieri, hai dato alla tua Chiesa un modello di vita evangelica, fa' che per sua intercessione siamo liberati dalla schiavitù del peccato per servirti con libertà di figli."),
                array('ending')
            )
        ),
        "0110a"=>array(
            array(
                array('','',"Guardaci con bontà, o Signore Dio, per l'intercessione del santo vescovo Gregorio, che con la lucentezza della vita e della diottrina cantò mirabilmente le tue lodi: concedi che anche noi, dimentichi del passato e protesi verso il futuro, possiamo felicemente giungere al premio della divina chiamata."),
                array('ending')
            )
        ),
        "0113a"=>array(
            array(
                array('','',"Dio onnipotente e misericordioso, concedi al tuo popolo fi donodcere e professare, nella vera fede dei padri, la divinità del Cristo tuo Figlio, di cui il vescovo sant'Ilario fu tenace testimone e maestro."),
                array('ending')
            )
        ),
        "0115a"=>array(
            array(
                array('','',"Noi ti preghiamo, Signore Dio, che dopo averci dato nei santi Mauro e Placido un meraviglioso esempio di vita monastica, tu ci conceda anche di seguirne il cammino e di partecipare con loro al medesimo premio."),
                array('ending')
            )
        ),
        "0117a"=>array(
            array(
                array('','',"O Dio, che hai ispirato a sant'Antonio abate di ritirarsi nel deserto, per servirti in un nuovo modello di vita cristiana, concedi anche a noi per sua intercessione di superare i nostri egoismi per amare te sopra ogni cosa."),
                array('ending')
            )
        ),
        "0120a"=>array(
            array(
                array('','',"O Dio, gloria dei tuoi sacerdoti, concedi a noi tuoi fedeli, oper intercessione del papa e martire Fabiano, di crescere come comunità di fede e di amore."),
                array('ending')
            )
        ),
        "0120b"=>array(
            array(
                array('','',"Donaci, o Padre, il tuo Spirito di fortezza, perché, ammaestrati dal glorioso esempio del tuo mrtire Sebastiano, impariamo a obbedire a te piuttosto che agli uomini."),
                array('ending')
            )
        ),
        "0121a"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che scegli le creature miti e deboli per confondere le potenze del mondo, concedi a noi, che celebriamo la nascita al cielo di sant'Agnese vergine e martire, di imitare la sua eroica costanza nella fede."),
                array('ending')
            )
        ),
        "0122a"=>array(
            array(
                array('','',"O Dio, fonte di ogni bene, donaci la forza del tuo Spirito che animò il diacono e martire Vincenzo, e lo rede invincibile in mezzo ai tormenti, perché anche la nostra fragile umanità sia sostenuta dalla potenza del tuo amore."),
                array('ending')
            )
        ),
        "0124a"=>array(
            array(
                array('','',"O Dio, tu hai voluto he il santo vescovo Francesco di Sales si facesse tutto a tutti nella carità apostolica: concedi anche a noi di testimoniare sempre, nel servizio dei fratelli, la dolcezza del tuo amore."),
                array('ending')
            )
        ),
        "0125a"=>array(
            array(
                array('','',"O Dio, che hai illuminato tutte le genti con la parola dell'apostolo Paolo, concedei anche anoi, che oggi ricordiamo la sua conversione, di essere testimoni della tua verità e di camminare sempre nella via del Vangelo."),
                array('ending')
            )
        ),
        "0126a"=>array(
            array(
                array('','',"Nella esperienza dei tuoi santi, Signore, tu ci offri tedtimonianzas vissuta si consacrazione a te; fa' che formati alla loro scuola, ci impegnamo con la loro stessa fede ad amarti nell'esercizio delle buone opere."),
                array('ending')
            )
        ),
        "0127a"=>array(
            array(
                array('','',"O Dio, nostro Padre, che hai formato alla scuola degli Apostoli i santi vescovi Timòteo e Tito, concedi anche a noi per loro intercessione di vivere in questo mondo con giustizia e con amore di figli, per giungere alla gloria del tuo regno."),
                array('ending')
            )
        ),
        "0127b"=>array(
            array(
                array('','',"O Dio, Padre misericordioso, che in sant'Angela Merici hai dato alla tua Chiesa un modello di carità sapiente e coraggiosa, per il suo esempio e la sua intercessione donaci di comprendere e testimoniare kla forza rinnovatrice del Vangelo."),
                array('ending')
            )
        ),
        "0128a"=>array(
            array(
                array('','',"O Dio, che in san Tommaso d'Aquino hai dato alla tua Chiesa un midello sublime di santità e di dottrina, donaci la luce per comprendere i suoi insegnamenti e la fiorza per imitare i suoi esempi."),
                array('ending')
            )
        ),
        "0131a"=>array(
            array(
                array('','',"O Dio, che in san Giovanni Bosco hai dato alla tua Chiesa un padre e un maestro dei giovani, suscita anche in noi la stessa fiamma di carità a servizio della tua gloria per la salvezza dei fratelli."),
                array('ending')
            )
        ),
        "0202a"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, guarda i tuoi fedeli riuniti nella festa della Presentazione al tempio del tuo unico Figlio fatto uomo, e concedi anche a noi di essere presentati a te pienamente rinnovati nello spirito."),
                array('ending')
            )
        ),
        "0203a"=>array(
            array(
                array('','',"O Dio, che hai inviato ai popoli baltici il santo vescovo Oscar come aoistiki del Vangelo, concedi anche a noi per sua intercessione di camminare sempre nella luce della verità."),
                array('ending')
            )
        ),
        "0203b"=>array(
            array(
                array('','',"Esaudisci, Signore, la tua famiglia, riunita nel ricordo del martire dan Biagio, e donale pace e salute nella vita presente, perché giunga alla gioia dei beni eterni."),
                array('ending')
            )
        ),
        "0205a"=>array(
            array(
                array('','',"Donaci, Signore, la tua misericordia, per intercessione di sant'Agata, che risplende nella Chiesa per la gloria della verginità e del martirio."),
                array('ending')
            )
        ),
        "0206a"=>array(
            array(
                array('','',"O Dio, forza dei martiri, che hai chiamato alla gloria eterna san Paolo Miki e i suoi compagni attraverso i martiria della croce, concedi anche a noi per loro intercessione di testimoniare in vita e in morte la fede del nostro Battesimo."),
                array('ending')
            )
        ),
        "0208a"=>array(
            array(
                array('','',"O Dio, che in san Girolamo Emiliani, sostegno e padre degli orfani, hai dato alla Chiesa un segno della tua predilizione verso i piccoli e i poveri, dinaci di vivere e operare nello spirito di adozione per il quale ci chiamiamo e siamo relamente tuoi figli."),
                array('ending')
            )
        ),
        "0210a"=>array(
            array(
                array('','',"O Dio, che hai rivestito di luminosa innocenza la santa vergine Scolastica, fa' che possiamo anche noi piacerti nella trasparente fedeltà quotidiana della vita monastica, per poter godere di te un giorno nel cielo, con l'esultante coro delle vergini."),
                array('ending')
            )
        ),
        "0211a"=>array(
            array(
                array('','',"O Dio, che rinnovasto la vita monastica con la dottrina e gli esempi del santo abate Benedetto di Aniano, concedici, per sua intercessione, di conservare uno stile di vita in tutto conforma all'insegnamento di Cristo, tuo Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0211b"=>array(
            array(
                array('','',"O Dio, Padre misericordioso, soxxorri la nostra debolezza, e per intercessione di Maria, MNAdre immacolata del tuo Figlio, fa' che risorgiamo dal peccato alla vita nuova."),
                array('ending')
            )
        ),
        "0214a"=>array(
            array(
                array('','',"O Dio, ricco di misericordia, che nella missione apostolica dei santi fratelli Cirillo e Metodio hai donato ai popoli slavi la luce del Vangelo, per la loro comune intercessione fa' che tutti gli uomini accolgano la tua Parola e formino il tuo popolo santo concorde nel testimoniare la vera fede."),
                array('ending')
            )
        ),
        "0217a"=>array(
            array(
                array('','',"Donaci, Signiore, la carità ardente dei Sette Santi Fondatori, che fraternamente uniti nel devoto servizio di Maria Madre di Dio hanno rianimato la fede del popolo cristiano."),
                array('ending')
            )
        ),
        "0221a"=>array(
            array(
                array('','',"Dio onnipotente, che in dan Pier Damiani ci hai dato un maestro e un modello di vita unteramente votata al tuo servizio nella santa Chiesa, fa' che non anteponiamo nulla all'amore del Cristo e camminiamo verso di te nella luce del Vangelo."),
                array('ending')
            )
        ),
        "0222a"=>array(
            array(
                array('','',"Concedi, Dio onnipotente, che tra gli sconvolgimenti del mondo non si turbi la tua Chiesa, che hai fondato sulla roccia con la professione di fede dell'apostolo Pietro."),
                array('ending')
            )
        ),
        "0223a"=>array(
            array(
                array('','',"O Dio, Signore, e Padre di tutti gli uomini, che hai unito alla schiera dei martiri il vescovo san Policarpo, concedi anche anoi per sua intercessione di bere al calice della passione del Cristo e si comunicare alla gloria della risurrezione."),
                array('ending')
            )
        ),
        "0304a"=>array(
            array(
                array('','',"Dio onnipotente, che ci chiami a servirti per regnare con te, fa' che per intercessione di san Casimiro viviamo coastantemente al tuo servizio nella santità e nella giustizia."),
                array('ending')
            )
        ),
        "0307a"=>array(
            array(
                array('','',"O Dio, che hai sostenuto le sante martiri Perpetua e Felicita con ala forza invincibile della tua carità e le hai rese intrepide di fronte ai persecutori, concedi anche a noi, per loro intercessione, di perseverare nella fede e fi crescere nel tuo amore."),
                array('ending')
            )
        ),
        "0308a"=>array(
            array(
                array('','',"Signore, che in san Giovanni di Dio hai fatto risplendere la tua misericordia, concedi anche anoi di esprimere con le opere la sua carità verso i poveri e i malati per essere accolti fra gli eletti nel tuo regno."),
                array('ending')
            )
        ),
        "0309a"=>array(
            array(
                array('','',"O Dio, che in santa Francesca Romana ci hai offerto un modello di santità coniugale e di vita a te consacrata, fa' che in ogni circostanza siamo perseveranti nel tuo servizio e cmminiamo nella luce del tuo volto."),
                array('ending')
            )
        ),
        "0317a"=>array(
            array(
                array('','',"O Dio, che hai inviato ai polli dell'Irlanda il vescovo san Patrizio come apostolo del VAngelo, per sua intercessione concedi alle nostre coimunità di ridcoprire il dìsenso middionario della fede e di annunziare agli uomini le meraviglie del tuo amore."),
                array('ending')
            )
        ),
        "0318a"=>array(
            array(
                array('','',"O Dio, che con l'insegnamento di san Cirillo hai guidato la tua Chiesa a comprendere la profondità dei misteri cristiani, donaci, per sua intercessione, si conoscere te e colui che hai mandato, Gesù Cristo tuo Figlio, per possedere la pienezza della vita."),
                array('ending')
            )
        ),
        "0319a"=>array(
            array(
                array('','',"Dio onnipotente, che hai voluto affidare gli inizi della nostra redenzione alla custidia premurosa di san Giuseppe, per sua intercessione concedi alla tua Chiesa di cooperare fedelmente al compimento dell'opera di salvezza."),
                array('ending')
            )
        ),
        "0321a"=>array(
            array(
                array('','',"O Dio, che nel santo abate Benedetto hai fatto un maestro insigne di perfezione evangelica, ricolmandolo dello Spirito del tuo Figlio, concedi a noi, che celebroamo il suo glorioso transito, di anelare con tutte le forze alla pienezza della carità e della vita eterna."),
                array('ending')
            )
        ),
        "0323a"=>array(
            array(
                array('','',"O Dio, che hai fesondato la tua Chiesa con le fatiche apostoliche del sant vescovo Turibio, suscita nel poplo cridtiano lo stesso ardore missionario per l'annunzio del Vangelo, perhé cresca e si rinnovi sempre nella fede e nella santità della vita."),
                array('ending')
            )
        ),
        "0325a"=>array(
            array(
                array('','',"O Padre, tu hai voluto che il tuo Verbo si facesse uomo nel grmbo della Vergine Maria: concedi a noi, che adoriamo il mistero del nostro Redentore, vero Dio e vero uomo, di essere paertecipi della sua vita immortale."),
                array('ending')
            )
        ),
        "0204a"=>array(
            array(
                array('','',"O Dio, grandezza delgli umili, che hai scelti san Francesco da Paola, minimo tra i fratelli, per innalzarlo ai vertici della santità, e lo hai proosto al tuo popolo come modello e protettore, donaci di seguire il suo esempio, per contividere con lui l'eredità promessa ai miti e umili di cuore."),
                array('ending')
            )
        ),
        "0404a"=>array(
            array(
                array('','',"Guarda, Signore, la tua Chiesa riunita nel devoto ricordo del vescovo san Isidoro: egli che la edificò con la santità e la dottrina lìaiuti cona la sua intercessione presso di te."),
                array('ending')
            )
        ),
        "0405a"=>array(
            array(
                array('','',"O Padre, che hai  suscitato nella Chiesa san Vincenzo Ferrer, predicatore infaticabile del Vangelo, per richiamare gli uomini all'attesa vigilante del giudizio, concedi anche a noi di preparerci alla venuta del tuo Figlio per contemplarlo nella gloria del suo regno."),
                array('ending')
            )
        ),
        "0407a"=>array(
            array(
                array('','',"O Dio, che hai scelto san Giovanni Battista del la Salle per l'educazione cristiana dei giovani, suscita sempre nella tua Chiesa educatori e maestri che s'impegnino generosamente al servizio delle nuove generazioni nella scuola e nella vita."),
                array('ending')
            )
        ),
        "0411a"=>array(
            array(
                array('','',"O Dio, che al santo vescovo Stanislao hai dato la forza di concludere con il martirio il suo servizio pastorale, concedi anche a noi, che lo veneriamo come intercessore, di perseverare, forti nella fede, per tutti i giorni della nostra vita."),
                array('ending')
            )
        ),
        "0413a"=>array(
            array(
                array('','',"Concedi al tuo popolo, Dio onnipotente, di affrontare le lotte e le avversità della vita con lo spirito di fortezza, che rese intrepido il papa san Martino I in mezzo alle minacce e alle sofferenze sostenute per la causa della fede."),
                array('ending')
            )
        ),
        "0421a"=>array(
            array(
                array('','',"O Dio, che hai dato al vescovo sant'anselmo il dono della sapienza per meditare e insegnare le profondità del tuo mistero, illumina il nostro intelletto con la luce della fede, perché ricerchiamo e amiamo sempre più la verità che ci hai rivelato."),
                array('ending')
            )
        ),
        "0423a"=>array(
            array(
                array('','',"O Dio, che hai chiamato il santo vescovo Adalberto al servizion della tua parola e lo hai consacrato a te col martirio, concedici di imitarlo nel diocile ascolto della tua parola e nell'annunziare il tuo Vangelo con le parole e con le opere."),
                array('ending')
            )
        ),
        "0423b"=>array(
            array(
                array('','',"O Dio, che hai unito alla passione del Cristo tuo Figlio il glorioso martire san Giorgio, per sua intercessione sostieni la nostra debolezza, e fa' risplendere su di noi la tua potenza."),
                array('ending')
            )
        ),
        "0424a"=>array(
            array(
                array('','',"O Padre, che al tuo sacerdote, san Fedele, ardente di carità, hai dato la grazia di testimoniare con il sangue l'annunzio missionario del Vangelo, per sua intercessione concedi anche a noi di essere radicati e fondati nell'amore di Cristo, per conoscere la gloria della sua risurrezione."),
                array('ending')
            )
        ),
        "0425a"=>array(
            array(
                array('','',"O Dio, che hai glorificato il tuo evengelista Marco con il dono della predicazione apostolica, fa' che alla scuola del Vangelo, impariamo anche noi a seguire fedelmente il Cristo Signore."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0428a"=>array(
            array(
                array('','',"O Dio, che al tuo sacerdote san Pietro Chanel hai dato la grazia di coronare con il martirio l'annunzio missionario del Vangelo, concedi anche a noi, in questi giorni di gioia pasquale, di vivere pienamente il mistero di Cristo morto e risorto, per divenire testimoni della vita nuova."),
                array('ending')
            )
        ),
        "0429a"=>array(
            array(
                array('','',"O Dio, che in santa Caterina da Siena, ardente del tuo spirito d'amore, hai unito la contemplazione di Cristo crocifisso e il servizio della Chiesa, per sua intercessione concedi a noi tuoi fedeli, partecipi del mistero di Cristo, di esultare nella rivelazione della sua gloria."),
                array('ending')
            )
        ),
        "0430a"=>array(
            array(
                array('','',"O Dio, che hai scelto il Papa san Pio V per la difesa della fede e il rinnovamento del cultio liturgico, concedi anche a noi di partecipare con vera fede e carità ooperosa ai tuoi santi misteri."),
                array('ending')
            )
        ),
        "0624a"=>array(
            array(
                array('','',"O Padre, che hai mandato san Giovanni Battista a preparare a Cristo Signiore un popolo ben sisposto, allieta la tua Chiesa con l'abbondanza dei doni dello Spirito, e guidala sulla vua della salvezza e della pace."),
                array('ending')
            )
        ),
        "0629a"=>array(
            array(
                array('','',"O Dio, che allieti la tua Chiesa cona la solennità dei santi Pietro e Paolo, fa' che al tua Chiesa segua sempre l'insegnamento degli apostoli dai quali ha ricevuto il primo annunzio della fede."),
                array('ending')
            )
        ),
        "0711a"=>array(
            array(
                array('','',"O Dio, che hai scelto san Benedetto abate e lo hai costituito maestro di coloro che dedicano la vita al tuo servizio, concedi anche a noi di non anteporre nulla all'amore del Cristo e di correre con cuore libero e ardente nella via dei tuoi precetti."),
                array('ending')
            )
        ),
        "0806a"=>array(
            array(
                array('','',"O Dio, che nella gloriosa Trasfigurazione del Cristo Signore, ha iconfermato i misteri della fede cona la testimonianza della legge e dei profeti e hai mirabilmente preannunziato la nostra definitiva adozione a tuoi figli, fa' che ascoltiamo la parola del tuo amatissimo Figlio per diventare coeredi della sua vita immortale."),
                array('ending')
            )
        ),
        "0815a"=>array(
            array(
                array('','',"O Dio onnipotente ed eterno, che hai innalzato alla gloria del cielo in corpo ed anima l'immacolata Vergine Maria, madre di Cristo tuo Figlio, fa' che viviamo in questo mondo costantemente rivolti ai beni eterni, per condividere la sua stessa gloria."),
                array('ending')
            )
        ),
        "0914a"=>array(
            array(
                array('','',"O Padre, che ahi voluto salvare gli uomini con la Croce del Cristo tuo Figlio, concedi a noi cha abbiamo conosciuto in terra il suo mistero d'amore, di godere in cielo i frutti della redenzione."),
                array('ending')
            )
        ),
        "1101a"=>array(
            array(
                array('','',"Dio onniportente ed eterno, che doni alla tua Chiesa la gioia di celebrare in un'uniaca festa i meriti e la gloria di tutti i Santi, concedi al tuo popolo, per la comune intercessione di tanti nostri, fratelli l'abbondanza della tua misericordia."),
                array('ending')
            )
        ),
        "1208a"=>array(
            array(
                array('','',"O Padre, che nell'Immacolata Concezione della Vergina hai preparato una degna dimora per il tuo Figlio, e in previsione della morte di lui l'hai preservata da ogni macchia di peccato, concedi anche a noi, per sua intercessione, di venire incontro a te in santità e purezza di spirito."),
                array('ending')
            )
        ),
        "1226a"=>array(
            array(
                array('','',"Donaci, o Padre, di esprimere con la vita il mistero che celebriamo nel giorno natalizio di Santo Stefano primo martire e insegnaci ad amare anche i nostri nemici dull'esempio di colui che morendo pregò per i suoi persecutori."),
                array('ending')
            )
        ),
        "1227a"=>array(
            array(
                array('','',"O Dio, che per mezzo dell'apostolo Giovanni ci hai rivelato le misteriose profondità del tuo Verbo: donaci l'intelligienza penetrtante della Parola di vita, che egli ha fatto risuonare nella tua Chiesa."),
                array('ending')
            )
        ),
        "1228a"=>array(
            array(
                array('','',"Signore nostro Dio, che oggi nei santi Innocenti sei stato gloirificato non a parole, ma col sangue, concedi anche a noi di esprimere nella vita la fede che professiamo con le labbra."),
                array('ending')
            )
        ),
        "1229a"=>array(
            array(
                array('','',"O Dio, che hai dato al vescovo san Tommaso Becket il privilegio di versare il sangua per la giustizia e la libertà della Chiesa, concedi anche anoi di essere prontio, per amore del Cristo, a perdere la vita in questo mondo per ritrovarla nel regno dei cieli."),
                array('ending')
            )
        ),
        "1231a"=>array(
            array(
                array('','',"Assisti, Signore, il tuo popolo che confida nell'intercessione del papa san Silvestro I, perché, nel cammino della vita, goda sempre della tua guida e giunga felicemente alla città dei santi."),
                array('ending')
            )
        )  
    );

    protected $litio;
    protected $actual;

    function __construct($caller) {

        $this->litio=$caller;
        $this->actual=$caller->actual;      
        $this->actual['orazione']="";
        $this->actual['proprio']="";

        $this->info['testo']=new Saltesto();
        $this->info['testo']->addLabel('ending',$this->ending);

        $this->build();
    }

    function build() {

        //di default attribuisco il salterio
        if ($this->actual['weekDay']!=0) {
            if ($this->actual['ora']=='terza') $this->actual['orazione']='terza_'.$this->actual['weekDay'];
            elseif ($this->actual['ora']=='sesta') $this->actual['orazione']='sesta_'.$this->actual['weekDay'];
            elseif ($this->actual['ora']=='nona') $this->actual['orazione']='nona_'.$this->actual['weekDay'];
            elseif ($this->actual['ora']=='comp' || $this->actual['ora']=='comp2') {
                if ( ($this->actual['evCode']!="" && $this->actual['evento'][$this->actual['evCode']]['tipo']=='S') || ($this->actual['fesCode']!="" && $this->actual['festa'][$this->actual['fesCode']]['tipo']=='S')) {
                    $this->actual['orazione']='comp_S';
                }
                else {
                    $this->actual['orazione']='comp_'.$this->actual['weekDay'];
                }
            }
            else $this->actual['orazione']=$this->actual['ora'].'_'.$this->actual['weekDay'].'_'.$this->actual['quarto'];
        }

        //###############################
        //domeniche
        else {
            if ($this->actual['ora']=='comp1') {
                if ( ($this->actual['evCode']!="" && $this->actual['evento'][$this->actual['evCode']]['tipo']=='S') || ($this->actual['fesCode']!="" && $this->actual['festa'][$this->actual['fesCode']]['tipo']=='S')) {
                    $this->actual['orazione']='comp_S';
                }
                else {
                    $this->actual['orazione']='comp1_'.$this->actual['weekDay'];
                }
            }
            elseif ($this->actual['ora']=='comp') {
                if ( ($this->actual['evCode']!="" && $this->actual['evento'][$this->actual['evCode']]['tipo']=='S') || ($this->actual['fesCode']!="" && $this->actual['festa'][$this->actual['fesCode']]['tipo']=='S')) {
                    $this->actual['orazione']='comp_S';
                }
                else {
                    $this->actual['orazione']='comp_'.$this->actual['weekDay'];
                }
            }
            else $this->actual['orazione']='sun_'.$this->actual['settimana'];

        }
        //###############################


        if ($this->actual['tempo']=='O') {

            //presentazione del Signore
            if ($this->actual['evCode']=='0202a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0202a';
            }
            //santa Scolastica
            elseif ($this->actual['evCode']=='0210a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0210a';
            }
            //San Giuseppe sposo della B.V. Maria
            elseif ($this->actual['evCode']=='0319a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0319a';
            }
            //Transito S. Benedetto
            elseif ($this->actual['evCode']=='0321a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0321a';
            }
            //Annunciazione del Signore
            elseif ($this->actual['evCode']=='0325a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0325a';
            }
            //Natività di San Giovanni Battista
            elseif ($this->actual['evCode']=='0624a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0624a';
            }
            //Santi Pietro e Paolo apostoli
            elseif ($this->actual['evCode']=='0629a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0629a';
            }
            //Nostro Santo Padre Benedetto (Abate) - Patrono d'Europa
            elseif ($this->actual['evCode']=='0711a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0711a';
            }
            //Trasfigurazione del Signore
            elseif ($this->actual['evCode']=='0806a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0806a';
            }
            //Assunzione della Beata Vergine Maria
            elseif ($this->actual['evCode']=='0815a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0815a';
            }
            //Esaltazione della Santa Croce
            elseif ($this->actual['evCode']=='0914a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0914a';
            }
            //Tutti i Santi
            elseif ($this->actual['evCode']=='1101a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='1101a';
            }
            //Battesimo del Signore
            elseif ($this->actual['evCode']=='BAT') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='BAT';
            }
            //Pentecoste
            elseif ($this->actual['evCode']=='PEN') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='PEN';
            }
            //Sacratissimo cuore di Gesù
            elseif ($this->actual['evCode']=='SCG') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='SCG';
            }
            //Ss. Trinità
            elseif ($this->actual['evCode']=='TRI') {               
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='TRI';
            }
            //Corpus Domini
            elseif ($this->actual['evCode']=='COD') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='COD';
            }
            //Nostro Signore Gesù Cristo Re dell'Universo
            elseif ($this->actual['evCode']=='GRE') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='GRE';
            }
        }

        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='A') {
            $this->actual['orazione']='A_'.$this->actual['settimana'].'_'.$this->actual['weekDay'];

            if ($this->actual['evCode']=='AV4') $this->actual['proprio']='AV4';
            elseif (substr($this->actual['today'],4,4)=='1217') $this->actual['proprio']='A1217';
            elseif (substr($this->actual['today'],4,4)=='1218') $this->actual['proprio']='A1218';
            elseif (substr($this->actual['today'],4,4)=='1219') $this->actual['proprio']='A1219';
            elseif (substr($this->actual['today'],4,4)=='1220') $this->actual['proprio']='A1220';
            elseif (substr($this->actual['today'],4,4)=='1221') $this->actual['proprio']='A1221';
            elseif (substr($this->actual['today'],4,4)=='1222') $this->actual['proprio']='A1222';
            elseif (substr($this->actual['today'],4,4)=='1223') $this->actual['proprio']='A1223';
            elseif (substr($this->actual['today'],4,4)=='1224') $this->actual['proprio']='A1224';

            elseif ($this->actual['evCode']=='1208a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='1208a';
            }
        }

        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='N') {

            if (substr($this->actual['today'],4,4)=='1225') {
                if ($this->actual['ora']=='ves1') $this->actual['proprio']='ves1_NAT';
                if ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_NAT';
                if ($this->actual['ora']=='terza' || $this->actual['ora']=='sesta' || $this->actual['ora']=='nona') $this->actual['proprio']='terza_NAT';
                if ($this->actual['ora']=='ves2') $this->actual['proprio']='terza_NAT';
            }
            elseif (substr($this->actual['today'],4,4)=='1229') {
                $this->actual['proprio']='N1229';
            }
            elseif (substr($this->actual['today'],4,4)=='1230') {
                $this->actual['proprio']='N1226';
            }
            elseif (substr($this->actual['today'],4,4)=='1231') {
                $this->actual['proprio']='N1231';
            }

            //////////////////////////////////////
            if ($this->actual['evCode']=='1226a') $this->actual['proprio']='1226a';
            elseif ($this->actual['evCode']=='1227a') $this->actual['proprio']='1227a';
            elseif ($this->actual['evCode']=='1228a') $this->actual['proprio']='1228a';

            //////////////////////////////////////
            if (substr($this->actual['today'],4,4)=='1226' && $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') $this->actual['proprio']='N1226';
            if (substr($this->actual['today'],4,4)=='1227' && $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') $this->actual['proprio']='lodi_NAT';
            if (substr($this->actual['today'],4,4)=='1228' && $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') $this->actual['proprio']='terza_NAT';

            if ($this->actual['evCode']=='SAF') $this->actual['proprio']='SAF';
            if ($this->actual['evCode']=='MSS') $this->actual['proprio']='MSS';
            if ($this->actual['evCode']=='2DN') $this->actual['proprio']='2DN';

            if ($this->actual['evCode']=='F0102') $this->actual['proprio']='F0102';
            if ($this->actual['evCode']=='F0103') $this->actual['proprio']='F0103';
            if ($this->actual['evCode']=='F0104') $this->actual['proprio']='F0104';
            if ($this->actual['evCode']=='F0105') $this->actual['proprio']='F0105';
            if ($this->actual['evCode']=='2DN') $this->actual['proprio']='EPI';

            if (substr($this->actual['today'],4,4)>'0106' && substr($this->actual['today'],4,4)<'1225') {
                if (substr($this->actual['today'],4,4)=='0107' || $this->actual['weekDay']==1) $this->actual['proprio']='N0107';
                if (substr($this->actual['today'],4,4)=='0108' || $this->actual['weekDay']==2) $this->actual['proprio']='N0108';
                if (substr($this->actual['today'],4,4)=='0109' || $this->actual['weekDay']==3) $this->actual['proprio']='N0109';
                if (substr($this->actual['today'],4,4)=='0110' || $this->actual['weekDay']==4) $this->actual['proprio']='N0110';
                if (substr($this->actual['today'],4,4)=='0111' || $this->actual['weekDay']==5) $this->actual['proprio']='N0111';
                if (substr($this->actual['today'],4,4)=='0112' || $this->actual['weekDay']==6) $this->actual['proprio']='N0112';
            }

        }

        //////////////////////////////////////////////////////////
        //FESTE
        if ($this->actual['fesCode']!='') $this->actual['proprio']=$this->actual['fesCode'];

        /*

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

        $this->info['testo']->addBlock(array(array('','2',"Amen.")));
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