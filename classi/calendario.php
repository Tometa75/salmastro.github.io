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

	//sono le feste nazionali
	protected $festa=array(
		"0101"=>"Maria Santissima Madre di Dio",
		"0103"=>"Santissimo nome di Gesù",
		"0106"=>"Epifania del Signore",
		"0319"=>"Solennità di San Giuseppe",
		"0425"=>"Festa della liberazione",
		"0501"=>"Festa dei lavoratori",
		"0602"=>"Festa della Repubblica",
		"0607"=>"Santissimo Cuore di Gesù",
		"0624"=>"Natività di San Giovanni Battista",
		"0629"=>"Santi Pietro e Paolo Apostoli",
		"0725"=>"San Giacomo",
		"0806"=>"Trasfigurazione del Signore",
		"0815"=>"Assunzione della Beata Vergine Maria",
		"0908"=>"Natività della Beata Vergine Maria",
		"0912"=>"Santissimo nome di Maria",
		"0914"=>"Esaltazione della Santa Croce",
		"1101"=>"Solennità di tutti i Santi",
		"1102"=>"Commemorazione dei defunti",
		"1208"=>"Immacolata Concezione",
		"1225"=>"Natale del Signore",
		"1226"=>"Santo Stefano",
		"1229"=>"Festa della Sacra Famiglia"
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
		$this->festa[date('md',$temp)]="Solennità della Santissima Trinità";
		$temp=strtotime("+63 day",$pasqua);
		$this->festa[date('md',$temp)]="Santissimo Corpo e Sangue di Cristo";

		$this->info['battesimo']=$this->battesimo($this->info['anno']);
		$this->festa[substr($this->info['battesimo'],4,4)]="Battesimo del Signore";

		$this->info['avv1']=$this->avvento($this->info['anno']);
		$this->info['re']=date('Ymd',strtotime('-7 days',mainFunc::gab_tots($this->info['avv1'])));
		$this->festa[substr($this->info['re'],4,4)]="Solennità di Cristo Re";

		if ( ((int)substr($d,0,4)%2)==0 ) $this->info['pari']=true;

		$this->info['annoLit']=$this->annoLit($this->info['anno']);

		$this->buildMap();
		
	}

	function getCal() {
		return $this->info;
	}

	function getMap() {
		return $this->map;
	}

	function BuildMap() {

		//evento è un momento specifico del periodo come "ceneri", "settimana santa"...
		//settimana ha senso solo per il tempo Ordinario
		$m=array(
			"tempo"=>$this->getTempo(),
			"anno"=>$this->getAnno(),
			"settimana"=>"",
			"quarto"=>"",
			"pari"=>$this->info['pari'],
			"festa"=>"",
			"memoria"=>array(),
			"evento"=>"",
			"errore"=>false
		);

		if (!$m['tempo']) {
			$m['errore']=true;
			return $m;
		}

		if ($m['tempo']['codice']=='O') {

			if ($this->info['today']<$this->info['ceneri']) {
				$rif=mainFunc::gab_tots($this->info['battesimo']);
				$sett=0;
				while ($this->info['today']>=date('Ymd',$rif)) {
					$sett++;
					$rif=strtotime("+7 days",$rif);
				}
			}
			else {
				$rif=mainFunc::gab_tots($this->info['re']);
				$sett=34;
				while ($this->info['today']<date('Ymd',$rif)) {
					$sett--;
					$rif=strtotime("-7 days",$rif);
				}
			}

			$m['settimana']=$sett;

			$temp=$sett%4;

			$m['quarto']=($temp==0)?4:$temp;
		}

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