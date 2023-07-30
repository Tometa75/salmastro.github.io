<?php
require_once('preghiera.php');
require_once('inno.php');
require_once('testo.php');

class Litio {

    protected $invitatorio=array(
        "titolo"=>"Invitatorio",
        "st"=>array('P1','S1')
    );

    protected $base=array(
        "lodi"=>array(
            "titolo"=>"Lodi Mattutine",
            "st"=>array('PI','INNO','S1','S2','S3','CA','S5','LB','RB','ZAC','INV','PN','OR','PC'),
            "i"=>'05:00',
            'f'=>'08:30'
        ),
        "terza"=>array(
            "titolo"=>"Ora Terza",
            "st"=>array('PI','INNO','S1','LB','RBB','OR','PC'),
            "i"=>'08:30',
            'f'=>'11:00'
        ),
        "sesta"=>array(
            "titolo"=>"Ora Sesta",
            "st"=>array('PI','INNO','S1','LB','RBB','OR','PC'),
            "i"=>'11:00',
            'f'=>'14:00'
        ),
        "nona"=>array(
            "titolo"=>"Ora Nona",
            "st"=>array('PI','INNO','S1','LB','RBB','OR','PC'),
            "i"=>'14:00',
            'f'=>'17:00'
        ),
        "ves"=>array(
            "titolo"=>"Vespri",
            "st"=>array('PI','INNO','S1','S2','S3','S4','CA','LB','RB','MAG','INV','PN','OR','PC'),
            "i"=>'17:00',
            'f'=>'20:00'
        ),
        "ves1"=>array(
            "titolo"=>"Primi Vespri",
            "st"=>array('PI','INNO','S1','S2','S3','S4','CA','LB','RB','MAG','INV','PN','OR','PC'),
            "i"=>'17:00',
            'f'=>'20:00'
        ),
        "ves2"=>array(
            "titolo"=>"Secondi Vespri",
            "st"=>array('PI','INNO','S1','S2','S3','S4','CA','LB','RB','MAG','INV','PN','OR','PC'),
            "i"=>'17:00',
            'f'=>'20:00'
        ),
        "comp"=>array(
            "titolo"=>"Compieta",
            "st"=>array('PI','SIL','AP','CAP','S1','S2','S3','LB','RB','SIM','OR','PC','BVM'),
            "i"=>'20:00',
            'f'=>'23:59'
        ),
        "comp1"=>array(
            "titolo"=>"Compieta dopo Primi Vespri",
            "st"=>array('PI','SIL','AP','CAP','S1','S2','S3','LB','RB','SIM','OR','PC','BVM'),
            "i"=>'20:00',
            'f'=>'23:59'
        ),

    );

    protected $salterio=array(
        "lodi"=>array(
            array(
                "PI"=>"inizio",
                "INNO"=>array("inno_S_0_1","inno_S_0_2"),
                "S1"=>array("salmo_92"),
                "S2"=>array("salmo_3"),
                "S3"=>array("salmo_29"),
                "CA"=>array("cantico_AT_47","cantico_AT_48"),
                "S5"=>array("salmo_146_147"),
                "LB"=>array("lettura_S_0"),
                "RB"=>array("resp_S_0"),
                "ZAC"=>array("cantico_ZAC"),
                "PN"=>array("padrenostro"),
                "OR"=>array("oraz_S_0"),
                "PC"=>"fine"
            ),
            array(
                "PI"=>"inizio",
                "INNO"=>array("inno_S_1_1"),
                "S1"=>array("salmo_99"),
                "S2"=>array("salmo_62"),
                "S3"=>array("salmo_100"),
                "CA"=>array("cantico_AT_4","cantico_AT_16"),
                "S5"=>array("salmo_134"),
                "LB"=>array("lettura_S_1"),
                "RB"=>array("resp_S_1"),
                "ZAC"=>array("cantico_ZAC"),
                "PN"=>array("padrenostro"),
                "OR"=>array("oraz_S_1"),
                "PC"=>"fine"
            )
        )
    );

    public $map;
    public $vig;
    public $config=array();

    //è l'insieme di oggetti che disegneranno la preghiera
    protected $res=array();

    function __construct($map,$vig,$config) {

        $this->map=$map;
        $this->vig=$vig;
        $this->config=$config;

        $this->map['invitatorio']=$this->invitatorio;
        $this->map['actual']=$this->base;

        //{"today":"20260507","tempo":{"codice":"P","nome":"Tempo di Pasqua","colore":"white","fine":"pentecoste"},"anno":"A","settimana":5,"quarto":"","weekDay":"4","pari":true,"festa":[],"evento":{"PA54":{"titolo":"5\u00b0 settimana di Pasqua - Gioved\u00ec","tipo":"F"}},"rocho":false,"errore":false}

        /*l'evento è sempre solo 1
        $this->vig['tipoEv']="";
        foreach ($this->vig['evento'] as $k=>$e) {
            $this->vig['tipoEv']=$e['tipo'];
        }
        $this->map['tipoEv']="";
        foreach ($this->map['evento'] as $k=>$e) {
            $this->map['tipoEv']=$e['tipo'];
        }*/

        //################################
        //Verifica in base agli eventi se ci sono i PRIMI ed i SECONDI VESPRI
        $this->map['ssvv']=false;
        $this->map['ppvv']=false;

        foreach ($this->vig['evento'] as $k=>$e) {
            if (isset($e['ppvv']) && $e['ppvv']) $this->map['ppvv']=true;
        }
        foreach ($this->map['evento'] as $k=>$e) {
            //if ($k==$this->config['festa'] && isset($e['ppvv']) && $e['ppvv']) $this->map['ssvv']=true;
            if (isset($e['ppvv']) && $e['ppvv']) $this->map['ssvv']=true;
        }

        if ($this->map['weekDay']==0 && !$this->map['ppvv']) $this->map['ssvv']=true;
        //################################

        //se domani è domenica o è una solennità ci sono i Primi Vespri e la compieta1
        //if ($this->vig['weekDay']==0 || (isset($this->vig['ppvv']) && $this->vig['ppvv']) ) {
        if ($this->map['ppvv']) {
            unset($this->map['actual']['ves']);
            unset($this->map['actual']['ves2']);
            unset($this->map['actual']['comp']);
        }
        else {
            unset($this->map['actual']['ves1']);
            unset($this->map['actual']['comp1']);

            //se oggi è domenica o è una solennità ci sono i secondi vespri
            //if ($this->map['weekDay']==0 || (isset($this->map['ssvv']) && $this->map['ssvv'])) {
            if ($this->map['ssvv']) {
                unset($this->map['actual']['ves']);
            }
            else {
                unset($this->map['actual']['ves2']);
            }
        }

        $this->build();
    }

    function build() {

        foreach ($this->map['actual'][$this->config['ora']]['st'] as $k=>$o) {

            switch ($o) {
                case 'PI': $this->res['PI']=new Preghiera('inizio',$this);break;
                case 'INNO': $this->res['INNO']=new Inno($this);break;
                case 'PC': $this->res['PC']=new Preghiera('fine',$this);break;
            }
        }

        /*
        //STEP 1 - attribuzione di COMUNE
        if ($a['tempo']['codice']=='O') {
            foreach ($a['actual'])
            foreach ($this->salterio[$config['ora']][$a['weekDay']] as $k=>$o) {
                if (array_key_exists($k,$this->map['actual'])) {

                }
            }
        }

        //STEP 2 - modifica PROPRIO
        */
    }

    function drawHead() {

        echo '<div class="salBottomHead" style="height:10%;border-bottom:1px solid #777777;background-image:url(\''.SITE_URL.'/img/backBottomHead.png\');" >';
        //echo '<div class="salBottomHead" style="height:10%;border-bottom:1px solid #a4a138;" >';

            echo '<div style="position:relative;display:inline-block;width:20%;vertical-align:top;padding:5px;box-sizing:border-box;">';

                echo '<select id="sal_ora" style="position:relative;width:95%;font-size:1.2em;font-weight:bold;margin-top:5px;text-align:center;background-color:#d4dfee;" >';
                    foreach ($this->map['actual'] as $k=>$a) {
                        echo '<option value="'.$k.'" ';
                            if (isset($this->config['ora']) && $this->config['ora']==$k) echo 'selected';
                        echo '>'.$a['titolo'].'</option>';
                    }
                echo '</select>';

            echo '</div>';

            echo '<div style="position:relative;display:inline-block;width:50%;vertical-align:top;padding:5px;box-sizing:border-box;">';
                 
                echo '<select id="sal_festa" style="position:relative;width:98%;font-size:1em;font-weight:bold;margin-top:5px;text-align:center;background-color:#d4dfee;" >';
                    /*if (count($this->map['evento'])>0) {
                        foreach ($this->map['evento'] as $k=>$f) {
                            echo '<option value="'.$k.'" ';
                                if (isset($this->config['festa']) && $this->config['festa']==$k) echo 'selected';
                            echo '>'.$f['titolo'].'</option>';
                        }
                    }
                    else {
                        echo '<option value="">Scegli una memoria...</option>';
                    }*/

                    echo '<option value="">Scegli una memoria...</option>';

                    foreach ($this->map['festa'] as $k=>$f) {
                        if ($f['tipo']=='X') continue;
                        echo '<option value="'.$k.'" ';
                            if (isset($this->config['festa']) && $this->config['festa']==$k) echo 'selected';
                        echo '>'.$f['titolo'].'</option>';
                    }
                echo '</select>';

            echo '</div>';

            echo '<div style="position:relative;display:inline-block;width:6%;vertical-align:top;padding:5px;box-sizing:border-box;margin-top:5px;">';

                echo '<input id="sal_mix" type="checkbox" '.((isset($this->config['mix']) && $this->config['mix']==1)?'checked':'').'/>';
                echo '<span style="font-size:1.2em;font-weight:bold;margin-left:5px;">Mix</span>'; 

            echo '</div>';

            echo '<div style="position:relative;display:inline-block;width:12%;vertical-align:top;padding:5px;box-sizing:border-box;">';
                
                $temp=array(
                    "solo"=>"Personale",
                    "comune"=>"Comunità",
                    "prete"=>"Sacerdote"
                );

                echo '<select id="sal_contesto" style="position:relative;width:95%;font-size:1em;font-weight:bold;margin-top:5px;text-align:center;background-color:#d4dfee;" >';
                    foreach ($temp as $k=>$f) {
                        echo '<option value="'.$k.'" ';
                            if (isset($this->config['contesto']) && $this->config['contesto']==$k) echo 'selected';
                        echo '>'.$f.'</option>';
                    }
                echo '</select>';

            echo '</div>';

            echo '<div style="position:relative;display:inline-block;width:10%;vertical-align:top;padding:5px;box-sizing:border-box;text-align:center;">';

                echo '<img style="width:40px;height:40px;cursor:pointer;" src="'.SITE_URL.'/img/book.png" onclick="window._salmastro.load();"/>';

            echo '</div>';

        echo '</div>';
        
        echo '<div class="salTestoContainer" style="" >';

            echo '<div id="salTesto" style="" >';
                //echo __DIR__;
            echo '</div>';

        echo '</div>';

    }  

    function draw() {

        foreach ($this->res as $k=>$o) {
            //echo '<div>'.$k.'</div>';
            echo '<div class="salResBlock" >';
                $o->draw();
            echo '</div>';
        }
       
        //echo '<div>'.json_encode($this->map).'</div>';
        //echo '<div>'.json_encode($this->vig).'</div>';
        //echo '<div>'.json_encode($this->map['actual'][$this->config['ora']]).'</div>';
    }

}

?>