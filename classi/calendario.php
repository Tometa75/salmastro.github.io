<?php

class Calendario {

	//l'anno liturgico si intende da gennaio 01 alla prima di avvento esclusa
	//il battesimo di gesù coincide con la prima domenica del tempo ordinario
	//RE (Cristo Re), corrisponde alla 34 domenica del tempo ordinario
	protected $info=array(
		"today"=>"",
		"anno"=>"",
		"capo"=>"",
		"battesimo"=>"",
		"ceneri"=>"",
		"qua1"=>"",
		"palme"=>"",
		"pasqua"=>"",
		"angelo"=>"",
		"ascensione"=>"",
		"pentecoste"=>"",
		"trinita"=>"",
		"corpus"=>"",
		"cuore"=>"",
		"re"=>"",
		"avv1"=>"",
		"natale"=>"",
		"fine"=>"",
		"annoLit"=>"",
		"pari"=>false
	);

	protected $map=array();

	protected $anni=array('A','B','C');
	protected $rifAnno=1999;

	//sono le feste nazionali x il calendario
	protected $festa=array(
		"0101"=>"Maria Santissima Madre di Dio",
		"0106"=>"Epifania del Signore",
		"0425"=>"Festa della liberazione",
		"0501"=>"Festa dei lavoratori",
		"0602"=>"Festa della Repubblica",
		"0815"=>"Assunzione della Beata Vergine Maria",
		"0912"=>"Santissimo nome di Maria",
		"0914"=>"Esaltazione della Santa Croce",
		"1101"=>"Solennità di tutti i Santi",
		"1102"=>"Commemorazione dei defunti",
		"1208"=>"Immacolata Concezione",
		"1225"=>"Natale del Signore",
		"1226"=>"Santo Stefano",
		"1229"=>"Festa della Sacra Famiglia"
	);

	//sonoi le feste per il Breviaro
	//F=festa, S=solennità, M=Memoria, R=ricorrenza, X=nota
	protected $ricorrenza=array(
		"0102"=>array(
			"0102a"=>array(
				"titolo"=>"Ferie prima dell'Epifania",
				"tipo"=>"F"
			),
			"0102b"=>array(
				"titolo"=>"Santi Basiglio Magno e Gregorio Nazianzeno (Vescovi e Dottori della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0103"=>array(
			"0103a"=>array(
				"titolo"=>"Ferie prima dell'Epifania",
				"tipo"=>"F"
			),
			"0103b"=>array(
				"titolo"=>"Santissimo nome di Gesù",
				"tipo"=>"X"
			)
		),
		"0104"=>array(
			"0104a"=>array(
				"titolo"=>"Ferie prima dell'Epifania",
				"tipo"=>"F"
			)
		),
		"0105"=>array(
			"0105a"=>array(
				"titolo"=>"Ferie prima dell'Epifania",
				"tipo"=>"F"
			)
		),
		"0106"=>array(
			"EPI"=>array(
				"titolo"=>"Epifania del Signore",
				"tipo"=>"S"
			)
		),
		"0107"=>array(
			"0107a"=>array(
				"titolo"=>"San Raimondo di Pegñafort (Sacerdote)",
				"tipo"=>"R"
			)
		),
		"0110"=>array(
			"0110a"=>array(
				"titolo"=>"San Gregorio di Nissa (Vescovo)",
				"tipo"=>"R"
			)
		),
		"0113"=>array(
			"0113a"=>array(
				"titolo"=>"Sant'Ilario (Vescovo e dottore della Chiesa)",
				"tipo"=>"R"
			)
		),
		"0115"=>array(
			"0115a"=>array(
				"titolo"=>"Santi Mauro e Placido (Discepoli del N.S.P. Benedetto)",
				"tipo"=>"F"
			)
		),
		"0117"=>array(
			"0117a"=>array(
				"titolo"=>"Sant'Antonio (Abate)",
				"tipo"=>"M"
			)
		),
		"0120"=>array(
			"0120a"=>array(
				"titolo"=>"San Fabiano (Papa e martire)",
				"tipo"=>"R"
			),
			"0120b"=>array(
				"titolo"=>"San Sebastiano (Martire)",
				"tipo"=>"R"
			)
		),
		"0121"=>array(
			"0121a"=>array(
				"titolo"=>"Sant'Agnese (Vergine e martire)",
				"tipo"=>"M"
			)
		),
		"0122"=>array(
			"0122a"=>array(
				"titolo"=>"San Vincenzo (Diacono e martire)",
				"tipo"=>"R"
			)
		),
		"0124"=>array(
			"0124a"=>array(
				"titolo"=>"San Francesco di Sales (Vescovo e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0125"=>array(
			"0125a"=>array(
				"titolo"=>"Conversione di San Paolo apostolo",
				"tipo"=>"F"
			)
		),
		"0126"=>array(
			"0126a"=>array(
				"titolo"=>"Santi Roberto, Alberico e Stefano (Abati di Citeaux)",
				"tipo"=>"R"
			)
		),
		"0127"=>array(
			"0127a"=>array(
				"titolo"=>"Santi Timoteo e Tito (Vescovi)",
				"tipo"=>"R"
			),
			"0127b"=>array(
				"titolo"=>"Sant'Angela Merici (Vergine)",
				"tipo"=>"R"
			)
		),
		"0128"=>array(
			"0128a"=>array(
				"titolo"=>"San Tommaso d'Aquino (Sacerdote e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0131"=>array(
			"0131a"=>array(
				"titolo"=>"San Giovanni Bosco (Sacerdote)",
				"tipo"=>"M"
			)
		),
		"0202"=>array(
			"0202a"=>array(
				"titolo"=>"Presentazione del Signore",
				"tipo"=>"F"
			)
		),
		"0203"=>array(
			"0203a"=>array(
				"titolo"=>"Sant'Ansgario - Oscar (Vescovo)",
				"tipo"=>"R"
			),
			"0203b"=>array(
				"titolo"=>"San Biagio (Vescovo e martire)",
				"tipo"=>"R"
			)
		),
		"0205"=>array(
			"0205a"=>array(
				"titolo"=>"Sant'Agata (Vergine e martire)",
				"tipo"=>"M"
			)
		),
		"0206"=>array(
			"0206a"=>array(
				"titolo"=>"San Paolo Miki e compagni (martiri)",
				"tipo"=>"M"
			)
		),
		"0208"=>array(
			"0208a"=>array(
				"titolo"=>"San Girolamo Emiliani",
				"tipo"=>"R"
			)
		),
		"0210"=>array(
			"0210a"=>array(
				"titolo"=>"Santa Scolastica (Vergine)",
				"tipo"=>"S"
			)
		),
		"0211"=>array(
			"0211a"=>array(
				"titolo"=>"San Benedetto di Aniano (Abate)",
				"tipo"=>"R"
			),
			"0211b"=>array(
				"titolo"=>"Beata Vergine Maria di Lourdes",
				"tipo"=>"R"
			)
		),
		"0214"=>array(
			"0214a"=>array(
				"titolo"=>"San Cirillo (Monaco) e Metodio (Vescovo) - Patroni D'Europa",
				"tipo"=>"F"
			)
		),
		"0217"=>array(
			"0217a"=>array(
				"titolo"=>"Sette santi fondatori dell'ordine dei servi della B.V. Maria",
				"tipo"=>"R"
			)
		),
		"0221"=>array(
			"0221a"=>array(
				"titolo"=>"San Pier Damiani (Vescovo e dorttore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0222"=>array(
			"0222a"=>array(
				"titolo"=>"Cattedra di San Pietro apostolo",
				"tipo"=>"F"
			)
		),
		"0223"=>array(
			"0223a"=>array(
				"titolo"=>"San Policarpo (Vescovo e martire)",
				"tipo"=>"M"
			)
		),
		"0304"=>array(
			"0304a"=>array(
				"titolo"=>"San Casimiro",
				"tipo"=>"R"
			)
		),
		"0307"=>array(
			"0307a"=>array(
				"titolo"=>"Sante Perpetua e Felicita (Martiri)",
				"tipo"=>"M"
			)
		),
		"0308"=>array(
			"0308a"=>array(
				"titolo"=>"San Giovanni di Dio (Religioso)",
				"tipo"=>"R"
			)
		),
		"0309"=>array(
			"0309a"=>array(
				"titolo"=>"Santa Francersca romana (Religiosa)",
				"tipo"=>"M"
			)
		),
		"0317"=>array(
			"0317a"=>array(
				"titolo"=>"San Patrizio (Vescovo)",
				"tipo"=>"R"
			)
		),
		"0318"=>array(
			"0318a"=>array(
				"titolo"=>"San Cirillo di Gerusalemme (Vescovo e dottore della Chiesa)",
				"tipo"=>"R"
			)
		),
		"0319"=>array(
			"0319a"=>array(
				"titolo"=>"San Giuseppe sposo della B.V. Maria",
				"tipo"=>"S"
			)
		),
		"0321"=>array(
			"0321a"=>array(
				"titolo"=>"Transito del N.S. Padre Benedetto Abate",
				"tipo"=>"F"
			)
		),
		"0323"=>array(
			"0323a"=>array(
				"titolo"=>"San Turibio di Mongrovejo (Vescovo)",
				"tipo"=>"R"
			)
		),
		"0325"=>array(
			"0325a"=>array(
				"titolo"=>"Annunciazione del Signore",
				"tipo"=>"S"
			)
		),
		"0402"=>array(
			"0402a"=>array(
				"titolo"=>"San Francesco da Paola (Eremita)",
				"tipo"=>"R"
			)
		),
		"0404"=>array(
			"0404a"=>array(
				"titolo"=>"Sant'Isidoro (Vescovo e dottore della Chiesa)",
				"tipo"=>"R"
			)
		),
		"0405"=>array(
			"0405a"=>array(
				"titolo"=>"San Vincenzo Ferrer (Sacerdote)",
				"tipo"=>"R"
			)
		),
		"0407"=>array(
			"0407a"=>array(
				"titolo"=>"San Giovanni Battista de la Salle (Sacerdote)",
				"tipo"=>"M"
			)
		),
		"0411"=>array(
			"0411a"=>array(
				"titolo"=>"Santo Stanislao (Vescovo e martire)",
				"tipo"=>"M"
			)
		),
		"0413"=>array(
			"0413a"=>array(
				"titolo"=>"San Martino I (Papa e martire)",
				"tipo"=>"R"
			)
		),
		"0421"=>array(
			"0421a"=>array(
				"titolo"=>"Sant'Anselmo (Vescovo e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0423"=>array(
			"0423a"=>array(
				"titolo"=>"Sant'Adalberto (Vescovo e martire)",
				"tipo"=>"M"
			),
			"0423b"=>array(
				"titolo"=>"San Giorgio (Martire)",
				"tipo"=>"R"
			)
		),
		"0424"=>array(
			"0424a"=>array(
				"titolo"=>"San Fedele da Sigmaringen (Sacerdote e martire)",
				"tipo"=>"R"
			)
		),
		"0425"=>array(
			"0425a"=>array(
				"titolo"=>"San Marco Evangelista",
				"tipo"=>"F"
			),
			"0425b"=>array(
				"titolo"=>"Festa della Liberazione",
				"tipo"=>"X"
			)
		),
		"0428"=>array(
			"0428a"=>array(
				"titolo"=>"San Pietro Chanel (Sacerdote e martire)",
				"tipo"=>"R"
			)
		),
		"0429"=>array(
			"0429a"=>array(
				"titolo"=>"Santa Caterina da Siena (Vergine e dottore della Chiesa) - Patrona d'Italia",
				"tipo"=>"F"
			)
		),
		"0430"=>array(
			"0430a"=>array(
				"titolo"=>"San Pio V (Papa)",
				"tipo"=>"R"
			)
		),
		"0501"=>array(
			"0501a"=>array(
				"titolo"=>"San Giuseppe lavoratore",
				"tipo"=>"R"
			),
			"0501b"=>array(
				"titolo"=>"Festa dei lavoratori",
				"tipo"=>"X"
			)
		),
		"0502"=>array(
			"0502a"=>array(
				"titolo"=>"Sant'Atanasio (Vescovo e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0503"=>array(
			"0503a"=>array(
				"titolo"=>"Santi Filippo e Giacomo apostoli",
				"tipo"=>"F"
			)
		),
		"0511"=>array(
			"0511a"=>array(
				"titolo"=>"Santi Oddone, Maiolo, Odilone, Ugo e Beato Pietro il venerabile (abati di Cluny)",
				"tipo"=>"M"
			)
		),
		"0512"=>array(
			"0512a"=>array(
				"titolo"=>"Santi Nereo e Achilleo (Martiri)",
				"tipo"=>"R"
			),
			"0512b"=>array(
				"titolo"=>"San Pancrazio (Martire)",
				"tipo"=>"R"
			)
		),
		"0514"=>array(
			"0514a"=>array(
				"titolo"=>"San Mattia apostolo",
				"tipo"=>"F"
			)
		),
		"0515"=>array(
			"0515a"=>array(
				"titolo"=>"San Pacomio (Abate)",
				"tipo"=>"M"
			)
		),
		"0518"=>array(
			"0518a"=>array(
				"titolo"=>"San Giovanni I (Papa e martire)",
				"tipo"=>"R"
			)
		),
		"0519"=>array(
			"0519a"=>array(
				"titolo"=>"San Pietro Celestino (Papa ed eremita)",
				"tipo"=>"M"
			)
		),
		"0520"=>array(
			"0520a"=>array(
				"titolo"=>"San Bernardino da Siena (Sacerdote)",
				"tipo"=>"R"
			)
		),
		"0524"=>array(
			"0524a"=>array(
				"titolo"=>"San Gregorio VII (Papa)",
				"tipo"=>"M"
			)
		),
		"0525"=>array(
			"0525a"=>array(
				"titolo"=>"San Beda il venerabile (Sacerdote e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0526"=>array(
			"0526a"=>array(
				"titolo"=>"San Filippo Neri (Sacerdote)",
				"tipo"=>"R"
			),
			"0526b"=>array(
				"titolo"=>"Santa Maria Maddalena de' Pazzi (Vergine)",
				"tipo"=>"R"
			)
		),
		"0527"=>array(
			"0527a"=>array(
				"titolo"=>"Sant'Agostino di Canterbury (Vescovo)",
				"tipo"=>"M"
			)
		),
		"0531"=>array(
			"0531a"=>array(
				"titolo"=>"Visitazione della Beata Vergine Maria",
				"tipo"=>"F"
			)
		),
		"0601"=>array(
			"0601a"=>array(
				"titolo"=>"San Giustino (Martire)",
				"tipo"=>"M"
			)
		),
		"0602"=>array(
			"0602a"=>array(
				"titolo"=>"Santi Marcellino e Pietro (Martiri)",
				"tipo"=>"R"
			),
			"0602b"=>array(
				"titolo"=>"Festa della Repubblica",
				"tipo"=>"X"
			)
		),
		"0603"=>array(
			"0603a"=>array(
				"titolo"=>"San Carlo Lwanga e compagni (martiri)",
				"tipo"=>"M"
			)
		),
		"0605"=>array(
			"0605a"=>array(
				"titolo"=>"San Bonifacio (Vescovo e martire)",
				"tipo"=>"M"
			)
		),
		"0606"=>array(
			"0603a"=>array(
				"titolo"=>"San Norberto (Vescovo)",
				"tipo"=>"R"
			)
		),
		"0609"=>array(
			"0609a"=>array(
				"titolo"=>"Sant'Efrem (Diacono e dottore della Chiesa)",
				"tipo"=>"R"
			)
		),
		"0611"=>array(
			"0611a"=>array(
				"titolo"=>"San Barnaba (Apostolo)",
				"tipo"=>"M"
			)
		),
		"0613"=>array(
			"0613a"=>array(
				"titolo"=>"Sant'Antonio di Padova (Sacerdote e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0619"=>array(
			"0619a"=>array(
				"titolo"=>"San Romualdo (Abate)",
				"tipo"=>"M"
			)
		),
		"0621"=>array(
			"0611a"=>array(
				"titolo"=>"San Luigi Gonzaga (Religioso)",
				"tipo"=>"M"
			)
		),
		"0622"=>array(
			"0622a"=>array(
				"titolo"=>"Santi Giovanni Fisher (Vescovo) e Tommaso More (Martiri)",
				"tipo"=>"R"
			),
			"0622b"=>array(
				"titolo"=>"San Paolino da Nola (Vescovo)",
				"tipo"=>"R"
			)
		),
		"0624"=>array(
			"0624a"=>array(
				"titolo"=>"Natività di San Giovanni Battista",
				"tipo"=>"S"
			)
		),
		"0625"=>array(
			"0611a"=>array(
				"titolo"=>"San Guglielmo (Abate)",
				"tipo"=>"M"
			)
		),
		"0627"=>array(
			"0627a"=>array(
				"titolo"=>"San Cirillo d'Alessandria (Vescovo e dottore della Chiesa)",
				"tipo"=>"R"
			)
		),
		"0628"=>array(
			"0628a"=>array(
				"titolo"=>"Sant'Ireneo (Vescovo e martire)",
				"tipo"=>"M"
			)
		),
		"0629"=>array(
			"0629a"=>array(
				"titolo"=>"Santi Pietro e Paolo apostoli",
				"tipo"=>"S"
			)
		),
		"0630"=>array(
			"0630a"=>array(
				"titolo"=>"Santi primi Martiri della Chiesa di Roma",
				"tipo"=>"R"
			)
		),
		"0703"=>array(
			"0703a"=>array(
				"titolo"=>"San Tommaso apostolo",
				"tipo"=>"F"
			)
		),
		"0704"=>array(
			"0704a"=>array(
				"titolo"=>"Santa Elisabettya di Portogallo",
				"tipo"=>"R"
			)
		),
		"0705"=>array(
			"0705a"=>array(
				"titolo"=>"Sant'Antonio Maria Zaccaria (Sacerdote)",
				"tipo"=>"R"
			)
		),
		"0706"=>array(
			"0706a"=>array(
				"titolo"=>"Santa Maria Goretti (Vergine e martire)",
				"tipo"=>"R"
			)
		),
		"0711"=>array(
			"0711a"=>array(
				"titolo"=>"Nostro Santo Padre Benedetto (Abate) - Patrono d'Europa",
				"tipo"=>"S"
			)
		),
		"0712"=>array(
			"0712a"=>array(
				"titolo"=>"San Giovanni Gualberto (Abate)",
				"tipo"=>"M"
			)
		),
		"0713"=>array(
			"0713a"=>array(
				"titolo"=>"Sant'Enrico",
				"tipo"=>"R"
			)
		),
		"0714"=>array(
			"0714a"=>array(
				"titolo"=>"San Camillo de Lellis (Sacerdote)",
				"tipo"=>"R"
			)
		),
		"0715"=>array(
			"0715a"=>array(
				"titolo"=>"San Bonaventura (Vescovo e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0716"=>array(
			"0716a"=>array(
				"titolo"=>"Beata Vergine Maria del monte Carmelo",
				"tipo"=>"R"
			)
		),
		"0721"=>array(
			"0721a"=>array(
				"titolo"=>"San Lorenzo da Brindisi (Sacerdote e dottore della Chiesa)",
				"tipo"=>"R"
			)
		),
		"0722"=>array(
			"0722a"=>array(
				"titolo"=>"Santa Maria Maddalena",
				"tipo"=>"M"
			)
		),
		"0723"=>array(
			"0723a"=>array(
				"titolo"=>"Santa Brigida (Religiosa)",
				"tipo"=>"R"
			)
		),
		"0725"=>array(
			"0725a"=>array(
				"titolo"=>"San Giacomo apostolo",
				"tipo"=>"F"
			)
		),
		"0729"=>array(
			"0729a"=>array(
				"titolo"=>"Santi Marta, Maria e Lazzaro (Ospiti del Signore)",
				"tipo"=>"M"
			)
		),
		"0730"=>array(
			"0730a"=>array(
				"titolo"=>"San Pietro Crisologo (Vescovo e dottore della Chiesa)",
				"tipo"=>"R"
			)
		),
		"0731"=>array(
			"0731a"=>array(
				"titolo"=>"Sant'Ignazio di Loyola (Sacerdote)",
				"tipo"=>"M"
			)
		),
		"0801"=>array(
			"0801a"=>array(
				"titolo"=>"Sant'Alfonso Maria de' Liguori (Vescovo e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0802"=>array(
			"0802a"=>array(
				"titolo"=>"Sant'Eusebio di Vercelli (Vescovo)",
				"tipo"=>"R"
			)
		),
		"0804"=>array(
			"0804a"=>array(
				"titolo"=>"San Giovanni Maria Vianney (Sacerdote)",
				"tipo"=>"M"
			)
		),
		"0805"=>array(
			"0805a"=>array(
				"titolo"=>"Dedicazione dela Basilica di Santa Maria Maggiore",
				"tipo"=>"R"
			)
		),
		"0806"=>array(
			"0806a"=>array(
				"titolo"=>"Trasfigurazione del Signore",
				"tipo"=>"F"
			)
		),
		"0807"=>array(
			"0807a"=>array(
				"titolo"=>"San Sisto II (Papa) e Compoagni (Martiri)",
				"tipo"=>"R"
			),
			"0807b"=>array(
				"titolo"=>"San Gaetano (Sacerdote)",
				"tipo"=>"R"
			)
		),
		"0808"=>array(
			"0808a"=>array(
				"titolo"=>"San Domenico (Sacerdote)",
				"tipo"=>"M"
			)
		),
		"0810"=>array(
			"0810a"=>array(
				"titolo"=>"San Lorenzo (Diacono e martire)",
				"tipo"=>"F"
			)
		),
		"0811"=>array(
			"0811a"=>array(
				"titolo"=>"Santa Chiara (Vergine)",
				"tipo"=>"M"
			)
		),
		"0813"=>array(
			"0813a"=>array(
				"titolo"=>"Santi Ponziano (Papa) e Ippollito (Sacerdote) martiri",
				"tipo"=>"R"
			)
		),
		"0814"=>array(
			"0814a"=>array(
				"titolo"=>"San Massimiliano Maria Kolbe (Sacerdote e martire)",
				"tipo"=>"M"
			)
		),
		"0815"=>array(
			"0815a"=>array(
				"titolo"=>"Assunzione della Beata Vergine Maria",
				"tipo"=>"S"
			)
		),
		"0816"=>array(
			"0816a"=>array(
				"titolo"=>"San Stefano di Ungheria",
				"tipo"=>"R"
			)
		),
		"0819"=>array(
			"0819a"=>array(
				"titolo"=>"San Bernardo Tolomei (Abate)",
				"tipo"=>"M"
			),
			"0819b"=>array(
				"titolo"=>"San Giovanni EWudes (Sacerdote)",
				"tipo"=>"R"
			)
		),
		"0820"=>array(
			"0820a"=>array(
				"titolo"=>"San Bernardo (Abate e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0821"=>array(
			"0821a"=>array(
				"titolo"=>"San Pio X (Papa)",
				"tipo"=>"M"
			)
		),
		"0822"=>array(
			"0822a"=>array(
				"titolo"=>"Beata Vergine Maria Regina",
				"tipo"=>"R"
			)
		),
		"0823"=>array(
			"0823a"=>array(
				"titolo"=>"Santa Rosa da Lima (Vergine)",
				"tipo"=>"R"
			)
		),
		"0824"=>array(
			"0824a"=>array(
				"titolo"=>"San Bartolomeo apostolo",
				"tipo"=>"F"
			)
		),
		"0825"=>array(
			"0825a"=>array(
				"titolo"=>"San Ludovico",
				"tipo"=>"R"
			),
			"0825b"=>array(
				"titolo"=>"San Giuseppe Calansazio (Sacerdote)",
				"tipo"=>"R"
			)
		),
		"0827"=>array(
			"0820a"=>array(
				"titolo"=>"Santa Monica",
				"tipo"=>"M"
			)
		),
		"0828"=>array(
			"0828a"=>array(
				"titolo"=>"Sant'Agostino (Vescovo e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0829"=>array(
			"0829a"=>array(
				"titolo"=>"Martirio di San Giovanni Battista",
				"tipo"=>"M"
			)
		),
		"0903"=>array(
			"0903a"=>array(
				"titolo"=>"San Gregorio Magno (Papa e dottore della Chiesa)",
				"tipo"=>"F"
			)
		),
		"0908"=>array(
			"0908a"=>array(
				"titolo"=>"Natività della Beata Vergine Maria",
				"tipo"=>"R"
			)
		),
		"0913"=>array(
			"0913a"=>array(
				"titolo"=>"San Giovanni Crisostomo (Vescovo e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"0914"=>array(
			"0914a"=>array(
				"titolo"=>"Esaltazione della Santa Croce",
				"tipo"=>"F"
			)
		),
		"0915"=>array(
			"0915a"=>array(
				"titolo"=>"Beata Vergine Maria addolorata",
				"tipo"=>"M"
			)
		),
		"0916"=>array(
			"0916a"=>array(
				"titolo"=>"Santi Cornelio (Papa) e Cipriano (Vescovo) martiri",
				"tipo"=>"M"
			)
		),
		"0917"=>array(
			"0917a"=>array(
				"titolo"=>"Santa Ildegarde (Vergine)",
				"tipo"=>"R"
			),
			"0917b"=>array(
				"titolo"=>"San Roberto Bellarmino (Vescovo e dottore della Chiesa)",
				"tipo"=>"R"
			)
		),
		"0918"=>array(
			"0918a"=>array(
				"titolo"=>"Beato Vittore III (Papa)",
				"tipo"=>"M"
			)
		),
		"0919"=>array(
			"0919a"=>array(
				"titolo"=>"San Gennaro (Vescovo e martire)",
				"tipo"=>"R"
			)
		),
		"0921"=>array(
			"0921a"=>array(
				"titolo"=>"San Matteo apostolo ed evangelista",
				"tipo"=>"F"
			)
		),
		"0926"=>array(
			"0926a"=>array(
				"titolo"=>"Santi Cosma e Damiano (Martiri)",
				"tipo"=>"R"
			)
		),
		"0927"=>array(
			"0927a"=>array(
				"titolo"=>"San Vincenzo de' Paoli (Sacerdote)",
				"tipo"=>"M"
			)
		),
		"0928"=>array(
			"0928a"=>array(
				"titolo"=>"San Venceslao (Martire)",
				"tipo"=>"R"
			)
		),
		"0929"=>array(
			"0929a"=>array(
				"titolo"=>"San Michele e tutti i Santi Angeli",
				"tipo"=>"F"
			)
		),
		"0930"=>array(
			"0930a"=>array(
				"titolo"=>"San Girolamo (Sacerdote e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"1001"=>array(
			"1001a"=>array(
				"titolo"=>"Santa Teresa di Gesù Bambino (Vergine)",
				"tipo"=>"M"
			)
		),
		"1002"=>array(
			"1002a"=>array(
				"titolo"=>"Santi Angeli custodi",
				"tipo"=>"M"
			)
		),
		"1004"=>array(
			"1004a"=>array(
				"titolo"=>"San Francesco d'Assisi - Patrono d'Italia",
				"tipo"=>"F"
			)
		),
		"1006"=>array(
			"1006a"=>array(
				"titolo"=>"San Bruno (Eremita)",
				"tipo"=>"M"
			)
		),
		"1007"=>array(
			"1007a"=>array(
				"titolo"=>"Beata Vergine Maria del rosario",
				"tipo"=>"M"
			)
		),
		"1008"=>array(
			"1008a"=>array(
				"titolo"=>"Santa Giustina (Vergine e martire)",
				"tipo"=>"M"
			)
		),
		"1009"=>array(
			"1009a"=>array(
				"titolo"=>"San Dionigi (Vescovo) e compagni (Martiri)",
				"tipo"=>"R"
			),
			"1009b"=>array(
				"titolo"=>"San Giovanni Leonardi (Sacerdote)",
				"tipo"=>"R"
			)
		),
		"1014"=>array(
			"1014a"=>array(
				"titolo"=>"San Callisto I (Papa e martire)",
				"tipo"=>"R"
			)
		),
		"1015"=>array(
			"1015a"=>array(
				"titolo"=>"Santa Teresa d'Avila (Vergine e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"1016"=>array(
			"1016a"=>array(
				"titolo"=>"Santa Edvige (Religiosa)",
				"tipo"=>"R"
			),
			"1016b"=>array(
				"titolo"=>"Santa Margherita Maria Alacoque (Vergine)",
				"tipo"=>"R"
			)
		),
		"1017"=>array(
			"1017a"=>array(
				"titolo"=>"Sant'Ignazio di Antiochia (Vescovo e martire)",
				"tipo"=>"M"
			)
		),
		"1018"=>array(
			"1018a"=>array(
				"titolo"=>"San Luca evangelista",
				"tipo"=>"F"
			)
		),
		"1019"=>array(
			"1019a"=>array(
				"titolo"=>"Santi Giovanni de Brebeuf e Isacco Jogues (Sacerdoti) e compagni (martiri)",
				"tipo"=>"R"
			),
			"1019b"=>array(
				"titolo"=>"San Paolo della Croce (Sacerdote)",
				"tipo"=>"R"
			)
		),
		"1023"=>array(
			"1023a"=>array(
				"titolo"=>"San Giovanni da Capestrano (Sacerdote)",
				"tipo"=>"R"
			)
		),
		"1024"=>array(
			"1024a"=>array(
				"titolo"=>"Sant'Antonio Maria Claret (Vescovo)",
				"tipo"=>"R"
			)
		),
		"1028"=>array(
			"1028a"=>array(
				"titolo"=>"Santi Simone e Giuda apostoli",
				"tipo"=>"F"
			)
		),
		"1101"=>array(
			"1101a"=>array(
				"titolo"=>"Tutti i Santi",
				"tipo"=>"S"
			)
		),
		"1102"=>array(
			"1102a"=>array(
				"titolo"=>"Commemorazione di tutti i fedeli defunti",
				"tipo"=>"M"
			)
		),
		"1103"=>array(
			"1103a"=>array(
				"titolo"=>"San Martino de Porres (Religioso)",
				"tipo"=>"R"
			)
		),
		"1104"=>array(
			"1104a"=>array(
				"titolo"=>"San Carlo Borromeo (Vescovo)",
				"tipo"=>"M"
			)
		),
		"1107"=>array(
			"1107a"=>array(
				"titolo"=>"San Willibrordo (Vescovo)",
				"tipo"=>"R"
			)
		),
		"1109"=>array(
			"1109a"=>array(
				"titolo"=>"Dedicazione della Basilica Lateranense",
				"tipo"=>"F"
			)
		),
		"1110"=>array(
			"1110a"=>array(
				"titolo"=>"San Leone Magno (Papa e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"1111"=>array(
			"1111a"=>array(
				"titolo"=>"San Martino di Tours (Vescovo)",
				"tipo"=>"F"
			)
		),
		"1112"=>array(
			"1112a"=>array(
				"titolo"=>"San Teodoro studita (Abate)",
				"tipo"=>"R"
			),
			"1112b"=>array(
				"titolo"=>"San Giosafat (Vescovo e martire)",
				"tipo"=>"R"
			)
		),
		"1113"=>array(
			"1113a"=>array(
				"titolo"=>"Tutti i Santi Monaci",
				"tipo"=>"F"
			)
		),
		"1114"=>array(
			"1114a"=>array(
				"titolo"=>"Commemorazione dei monaci defunti",
				"tipo"=>"M"
			)
		),
		"1115"=>array(
			"1115a"=>array(
				"titolo"=>"Sant'Alberto Magno (Vescovo e dottore della Chiesa)",
				"tipo"=>"R"
			)
		),
		"1116"=>array(
			"1116a"=>array(
				"titolo"=>"Santa Geltrude (Vergine)",
				"tipo"=>"M"
			)
		),
		"1117"=>array(
			"1117a"=>array(
				"titolo"=>"Santa Margherita di Scozia",
				"tipo"=>"R"
			),
			"1117b"=>array(
				"titolo"=>"Santa Elisabetta d'Ungheria (Religiosa)",
				"tipo"=>"R"
			)
		),
		"1118"=>array(
			"1118a"=>array(
				"titolo"=>"Dedicazione delle Basiliche dei Santi Pietro e Paolo apostoli",
				"tipo"=>"R"
			)
		),
		"1119"=>array(
			"1119a"=>array(
				"titolo"=>"Santa Metilde (Vergine)",
				"tipo"=>"R"
			)
		),
		"1120"=>array(
			"1120a"=>array(
				"titolo"=>"Beata Maria Fortunata Viti (Vergine)",
				"tipo"=>"M"
			)
		),
		"1121"=>array(
			"1121a"=>array(
				"titolo"=>"Presentazione della Beata Vergine Maria",
				"tipo"=>"M"
			)
		),
		"1122"=>array(
			"1122a"=>array(
				"titolo"=>"Santa Cecilia (Vergine e martire)",
				"tipo"=>"M"
			)
		),
		"1123"=>array(
			"1123a"=>array(
				"titolo"=>"San Clemente I (Papa e martire)",
				"tipo"=>"R"
			)
		),
		"1124"=>array(
			"1124a"=>array(
				"titolo"=>"San Colombano (Abate)",
				"tipo"=>"M"
			)
		),
		"1126"=>array(
			"1126a"=>array(
				"titolo"=>"San Silvestro (Abate)",
				"tipo"=>"M"
			)
		),
		"1130"=>array(
			"1130a"=>array(
				"titolo"=>"Sant'Andrea apostolo",
				"tipo"=>"F"
			)
		),
		"1203"=>array(
			"1203a"=>array(
				"titolo"=>"San Francesco Saverio (Sacerdote)",
				"tipo"=>"M"
			)
		),
		"1204"=>array(
			"1204a"=>array(
				"titolo"=>"San Giovanni Damasceno (Sacerdote e dottore della Chiesa)",
				"tipo"=>"R"
			)
		),
		"1205"=>array(
			"1205a"=>array(
				"titolo"=>"Beato Placido Riccardi (Monaco e sacerdote)",
				"tipo"=>"M"
			),
			"1205b"=>array(
				"titolo"=>"San Saba (Abate)",
				"tipo"=>"R"
			)
		),
		"1206"=>array(
			"1206a"=>array(
				"titolo"=>"San Nicola (Vescovo)",
				"tipo"=>"R"
			)
		),
		"1207"=>array(
			"1207a"=>array(
				"titolo"=>"Sant'Ambrogio (Vescovo e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"1208"=>array(
			"1208a"=>array(
				"titolo"=>"Immacolata concezione della Beata Vergine Maria",
				"tipo"=>"S"
			)
		),
		"1211"=>array(
			"1211a"=>array(
				"titolo"=>"San Damaso I (Papa)",
				"tipo"=>"R"
			)
		),
		"1212"=>array(
			"1212a"=>array(
				"titolo"=>"Santa Giovanna Francesca de Chantal (Religiosa)",
				"tipo"=>"R"
			)
		),
		"1213"=>array(
			"1213a"=>array(
				"titolo"=>"Santa Lucia (Vergine e martire)",
				"tipo"=>"M"
			)
		),
		"1214"=>array(
			"1214a"=>array(
				"titolo"=>"San Giovanni della Croce (Sacerdote e dottore della Chiesa)",
				"tipo"=>"M"
			)
		),
		"1221"=>array(
			"1221a"=>array(
				"titolo"=>"San Pietro Canisio (Sacerdote e dottore della Chiesa)",
				"tipo"=>"R"
			)
		),
		"1223"=>array(
			"1223a"=>array(
				"titolo"=>"San Giovanni da Kety (Sacerdote)",
				"tipo"=>"R"
			)
		),
		"1226"=>array(
			"1226a"=>array(
				"titolo"=>"Santo Stefano (Promartire)",
				"tipo"=>"F"
			)
		),
		"1227"=>array(
			"1227a"=>array(
				"titolo"=>"San Giovanni (Apostolo ed Evangelista)",
				"tipo"=>"F"
			)
		),
		"1228"=>array(
			"1228a"=>array(
				"titolo"=>"Santi innocenti martiri",
				"tipo"=>"F"
			)
		),
		"1229"=>array(
			"1229a"=>array(
				"titolo"=>"Quinto giorno dell'ottava di Natale",
				"tipo"=>"F"
			),
			"1229b"=>array(
				"titolo"=>"San Tommaso Becket (Vescovo e martire)",
				"tipo"=>"R"
			)
		),
		"1230"=>array(
			"1230a"=>array(
				"titolo"=>"Sesto giorno dell'ottava di Natale",
				"tipo"=>"F"
			)
		),
		"1231"=>array(
			"1231a"=>array(
				"titolo"=>"Settimo giorno dell'ottava di Natale",
				"tipo"=>"F"
			),
			"1231b"=>array(
				"titolo"=>"San Silvestro I (Papa)",
				"tipo"=>"R"
			)
		)
	);

	//fine è escluso dal periodo
	protected $tempi=array(
		array(
			"codice"=>"N",
			"nome"=>"Tempo di Natale",
			"colore"=>"white",
			"fine"=>"battesimo"
		),
		array(
			"codice"=>"O",
			"nome"=>"Tempo Ordinario",
			"colore"=>"#85d985",
			"fine"=>"ceneri"
		),
		array(
			"codice"=>"Q",
			"nome"=>"Tempo di Quaresima",
			"colore"=>"violet",
			"fine"=>"pasqua"
		),
		array(
			"codice"=>"P",
			"nome"=>"Tempo di Pasqua",
			"colore"=>"white",
			"fine"=>"pentecoste"
		),
		array(
			"codice"=>"O",
			"nome"=>"Tempo Ordinario",
			"colore"=>"#85d985",
			"fine"=>"avv1"
		),
		array(
			"codice"=>"A",
			"nome"=>"Tempo di Avvento",
			"colore"=>"violet",
			"fine"=>"natale"
		),
		array(
			"codice"=>"N",
			"nome"=>"Tempo di Natale",
			"colore"=>"white",
			"fine"=>"fine"
		)
	);
	
	function __construct($d) {

		$this->info['today']=$d;
		$this->info['anno']=substr($d,0,4);

		$this->info['capo']=$this->info['anno'].'0101';
		$this->info['natale']=$this->info['anno'].'1225';
		$this->info['fine']=($this->info['anno']+1).'0101';

		$pasqua=$this->pasqua($this->info['anno']);

		$this->info['angelo']=date('Ymd',strtotime("+1 day",$pasqua));
		$this->festa[substr($this->info['angelo'],4,4)]="Lunedì dell'Angelo";
		$this->info['palme']=date('Ymd',strtotime("-7 day",$pasqua));
		$this->festa[substr($this->info['palme'],4,4)]="Domenica delle Palme";
		$this->info['qua1']=date('Ymd',strtotime("-42 day",$pasqua));
		$this->info['ceneri']=date('Ymd',strtotime("-46 day",$pasqua));
		$this->info['ascensione']=date('Ymd',strtotime("+42 day",$pasqua));
		$this->festa[substr($this->info['ascensione'],4,4)]="Ascensione di Gesù";
		$this->info['pentecoste']=date('Ymd',strtotime("+49 day",$pasqua));
		$this->festa[substr($this->info['pentecoste'],4,4)]="Pentecoste";
		$this->info['pasqua']=date('Ymd',$pasqua);
		$this->festa[substr($this->info['pasqua'],4,4)]="Pasqua del Signore";

		$temp=strtotime("+56 day",$pasqua);
		$this->info['trinita']=date('Ymd',$temp);
		//$this->festa[date('md',$temp)]="Solennità della Santissima Trinità";
		$temp=strtotime("+61 day",$pasqua);
		$this->info['cuore']=date('Ymd',$temp);
		$temp=strtotime("+63 day",$pasqua);
		$this->info['corpus']=date('Ymd',$temp);
		//$this->festa[date('md',$temp)]="Santissimo Corpo e Sangue di Cristo";

		$this->info['battesimo']=$this->battesimo($this->info['anno']);
		$this->festa[substr($this->info['battesimo'],4,4)]="Battesimo del Signore";

		$this->info['avv1']=$this->avvento($this->info['anno']);
		$this->info['re']=date('Ymd',strtotime('-7 days',mainFunc::gab_tots($this->info['avv1'])));
		$this->festa[substr($this->info['re'],4,4)]="Solennità di Cristo Re";

		if ( ((int)substr($d,0,4)%2)==0 ) $this->info['pari']=true;

		$this->info['annoLit']=$this->annoLit($this->info['anno']);

		$this->buildMap($this->info['today']);
		
	}

	function getCal() {
		return $this->info;
	}

	function getMap() {
		return $this->map;
	}

	function BuildMap($day) {

		//evento è un momento specifico del periodo come "ceneri", "settimana santa"...
		//settimana ha senso solo per il tempo Ordinario
		$m=array(
			"today"=>$day,
			"tempo"=>$this->getTempo(),
			"anno"=>$this->getAnno(),
			"settimana"=>"",
			"quarto"=>"",
			"weekDay"=>date('w',mainFunc::gab_tots($day)),
			"pari"=>$this->info['pari'],
			"festa"=>array(),
			"evento"=>array(),
			"errore"=>false
		);

		if (!$m['tempo']) {
			$m['errore']=true;
			return $m;
		}

		if ($m['tempo']['codice']=='O') {

			if ($day<$this->info['ceneri']) {
				$rif=mainFunc::gab_tots($this->info['battesimo']);
				$sett=0;
				while ($day>=date('Ymd',$rif)) {
					$sett++;
					$rif=strtotime("+7 days",$rif);
				}
			}
			else {
				$rif=mainFunc::gab_tots($this->info['re']);
				$sett=34;
				while ($day<date('Ymd',$rif)) {
					$sett--;
					$rif=strtotime("-7 days",$rif);
				}
			}

			$m['settimana']=$sett;

			$temp=$sett%4;
			$m['quarto']=($temp==0)?4:$temp;

			//di default la domenica è un evento che potrebbe essere sovrascritto in seguito
			if ($m['weekDay']==0) {
				$m['evento']['D'.$sett]=array(
					"titolo"=>$sett."° Domenica del tempo ordinario",
					"tipo"=>"F"
				);
			}

			if ($day==$this->info['battesimo']) {
				$m['evento']=array();
				$m['evento']['BAT']=array(
					"titolo"=>"Battesimo del Signore",
					"tipo"=>"F"
				);
			}
			elseif ($day==$this->info['pentecoste']) {
				$m['evento']=array();
				$m['evento']['PEN']=array(
					"titolo"=>"Domenica di Pentecoste",
					"tipo"=>"S"
				);
			}
			elseif ($day==$this->info['cuore']) {
				$m['evento']=array();
				$m['evento']['SCG']=array(
					"titolo"=>"Sacratissimo Cuore di Gesù",
					"tipo"=>"S"
				);
			}
			elseif ($day==$this->info['trinita']) {
				$m['evento']=array();
				$m['evento']['TRI']=array(
					"titolo"=>"Solennità della Santissima Trinità",
					"tipo"=>"S"
				);
			}
			elseif ($day==$this->info['corpus']) {
				$m['evento']=array();
				$m['evento']['COD']=array(
					"titolo"=>"Santissimo Corpo e Sangue di Cristo",
					"tipo"=>"S"
				);
			}
			elseif ($day==$this->info['re']) {
				$m['evento']=array();
				$m['evento']['GRE']=array(
					"titolo"=>"Nostro Signore Gesù Cristo Re dell'Universo",
					"tipo"=>"S"
				);
			}
		}

		if ($m['tempo']['codice']=='N') {

			//Natale
			if (substr($day,4,4)=='1225') {
				$m['evento']['NAT']=array(
					"titolo"=>"Natale del Signore",
					"tipo"=>"S"
				);
			}

			//SS Madre di Dio
			if (substr($day,4,4)=='0101') {
				$m['evento']['MSS']=array(
					"titolo"=>"Maria SS. Madre di Dio",
					"tipo"=>"S"
				);
			}

			//seconda domenica dopo natale
			elseif (substr($day,4,4)>='0102' && substr($day,4,4)<='0105' && $m['weekDay']==0) {
				$m['evento']['2DN']=array(
					"titolo"=>"Seconda Domenica dopo Natale",
					"tipo"=>"F"
				);
			}

			//Santa Famiglia 1230 se natale è domenica oppure prima domenica dopo natale
			elseif ( (date('w',mainFunc::gab_tots($this->info['natale']))==0 && substr($day,4,4)=='1230') || (substr($day,4,4)>'1225' && substr($day,4,4)<='1231' && $m['weekDay']==0) ) {
				$m['evento']['SAF']=array(
					"titolo"=>"Santa Famiglia di Gesù Maria e Giuseppe",
					"tipo"=>"F"
				);
			}

			//ferie dopo l'epifania
			elseif (substr($day,4,4)>'0106' && substr($day,4,4)<substr($this->info['battesimo'],4,4)) {

				$m['evento']['F'.substr($day,4,4)]=array(
					"titolo"=>"Ferie dopo l'Epifania",
					"tipo"=>"F"
				);
			}
		}

		///////////////////////////////////////////////////////////////
		if (array_key_exists(substr($day,4,4),$this->ricorrenza)) $m['festa']=$this->ricorrenza[substr($day,4,4)];

		$this->map=$m;
	}

	function getTempo() {

		foreach ($this->tempi as $k=>$t) {
			if ($this->info['today']<$this->info[$t['fine']]) {
				return $t;
			}
		}

		return false;
	}

	function getAnno() {
		if ($this->info['today']<$this->info['avv1']) return $this->info['annoLit'];
		else return $this->annoLit($this->info['anno']+1);
	}

	function battesimo($anno) {

		$d=mainFunc::gab_tots($anno.'0106');

		do {
		
			$d=strtotime('+1 day',$d);
			$n=date("w",$d);

		} while ($n>0);

		return date('Ymd',$d);
	}
	
	function pasqua($year) {
	
		$aM = array(22, 22, 23, 23, 24, 24);
    	$aN = array(2, 2, 3, 4, 5, 5);
	
		$a = $year % 19;
        $b = $year % 4;
        $c = $year % 7;
 
        $aIndex= floor($year/100)-15;
 
        $d = (19 * $a + $aM[$aIndex]) % 30;
        $e = (2 * $b + 4 * $c + 6 * $d + $aN[$aIndex]) % 7;
 
        $day = 22 + $d + $e;
        $month = 3;
 
        if ($day > 31) {
            $month = 4;
            $day -= 31;
        }
 
        /**
         * Eccezioni:
         * - Se la data risultante dalla formula è il 26 aprile, 
         *   allora la Pasqua cadrà il giorno 19 aprile;
         * - Se la data risultante dalla formula è il 25 aprile 
         *   e contemporaneamente d = 28, e = 6 e a > 10, 
         *   allora la Pasqua cadrà il 18 aprile. 
         */
        if ($month == 4 && $day == 26) {
            $day = 19;
        } elseif ($month == 4 && $day == 26 && $d == 28 && $e == 6 && $a > 10) {
            $day = 18;
        } 
 
        //return array('day'=>$day,'month'=>$month);
        return mktime(0,0,0,$month,$day,$year);
	}

	function avvento($anno) {

		$d=mainFunc::gab_tots($anno.'1225');

		do {
		
			$d=strtotime('-1 day',$d);
			$n=date("w",$d);

		} while ($n>0);

		$d=strtotime('-21 days',$d);

		return date('Ymd',$d);

	}

	function annoLit($anno) {

		$rif=$this->rifAnno;
		$pos=0;

		while ($rif<$anno) {

			$rif++;
			$pos++;

			if ($pos>2) $pos=0;

		}

		return $this->anni[$pos];
	}

	function mese($mese) {
		//fornisce la griglia di un mese

		$griglia=array();
	
		//calcolo primo giorno del quadrante (TIMESTAMP)
		$time=mktime(0,0,0,(int)$mese,1,$this->info['anno']);
		$weekday=date("w",$time);
		$index=strtotime("-".$weekday." day",$time);
	
		$am=$this->info['anno'].$mese;
		$check=$am;
		$sett=(int)date("W",$index);
		
		while ($check==$am) {
			
			//definizione giorno
			for($d=0;$d<=6;$d++) {

				$day=$this->newDay($index,$d);
							
				//array delle caratteristiche dei giorni
				$day['griglie']=array();
				$griglia[$sett][$d]=$day;
				
				$index=strtotime("+1 day",$index);
			}
			
			$check=date("Ym",$index);
			$sett++;
		}
		
		return $griglia;
	}

	function newDay($index,$d) {

		$day=array("tag"=>date('Ymd',$index),"wd"=>$d,"festa"=>0,"testo"=>"");
				
		$md=date("md",$index);
		if(array_key_exists($md,$this->festa)) {
			$day["festa"]=1;
			$day["testo"]=$this->festa[$md];
		}
		
		return $day;
	}

	
}

?>