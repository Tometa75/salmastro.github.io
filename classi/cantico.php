<?php
class Cantico {

    protected $titolo="";
    protected $antifona=array();
    protected $testoBase=array();
    protected $tipo;

    protected $gloria=array(
        array('','*','Gloria al Padre e al Figlio'),
        array('','2','e allo Spirito Santo.'),
        array('','*','Come era nel principio, e ora e sempre,'),
        array('','2','nei secoli dei secoli. Amen.')
    );
        

    protected $actual;
    protected $res;

    //definizione di nuovi metodi in maniera dinamica
    //protected $methods = array();
    //protected $closure = array();

    function __construct($actual,$tipo) {

        $this->actual=$actual;
        $this->tipo=$tipo;

        /*if ($this->tag && $this->tag!="") {
            ob_start();
                include(SITE_ROOT.'/salmi/'.$this->tag.'.php');
            ob_end_clean();
        }

        $this->set_closure();

        //definito in CLOSURE
        $this->load();
        */

        $this->res=new Saltesto();
        $this->res->setProp(1,'2','chg','2c');

        switch ($tipo) {
            case "ZAC":
                $this->titolo="Cantico di Zaccaria (Il Messia e il suo Precursore)";
                $this->testoBase=array(
                    array(
                        array('','*',"Benedetto il Signore Dio d'Israele,"),
                        array('','2',"perché ha visitato e redento i suo popolo"),
                        array('','*',"e ha suscitato per noi una salvezza potente"),
                        array('','2',"nella casa di Davide, suo servo,")
                    ),
                    array(
                        array('','*',"come aveva promesso"),
                        array('','2',"per bocca dei suoi santi profeti d'un tempo:"),
                        array('','*',"salvezza dai nostri nemici,"),
                        array('','2',"e dalle mani di quanti ci odiano.")
                    ),
                    array(
                        array('','*',"Così egli ha concesso misericordia ai nostri padri"),
                        array('','2',"e si è ricordato della sua santa allenaza,"),
                        array('','*',"del giuramento fatto ad Abramo, nostro padre,"),
                        array('','2',"di concederci, liberati dalle mani dei nemici,"),
                        array('','*',"di servirlo senza timore, in santità e giustizia"),
                        array('','2',"al suo cospetto, per tutti i nostri giorni.")
                    ),
                    array(
                        array('','*',"E tu, bambino, sarai chiamato profeta dell'Altissimo"),
                        array('','2',"perché andrai innanzi al Signore a preparargli le strade,"),
                        array('','*',"per dare al suo popolo la conoscenza della salvezza"),
                        array('','2',"nella remissione dei suoi peccati,")
                    ),
                    array(
                        array('','*',"grazie alla bontà misericordiosa del nostro Dio,"),
                        array('','2',"per cui verrà a visitarci dall'alto un sole che sorge,"),
                        array('','*',"per rischiarare quelli che stanno nelle tenebre e nell'ombra della morte"),
                        array('','2',"e dirigere i nostri passi sulla via della pace.")
                    )
                );
            break;
            case "MAG":
                $this->titolo="Cantico della B.V.Maria (Esultanza dell'anima nel Signore)";
                $this->testoBase=array(
                    array(
                        array('','*',"L'anima mia magnifica il Signore"),
                        array('','2',"e il mio spirito esulta in Dio, mio salvatore,"),
                        array('','*',"perché ha guardato l'umiltà della sua serva."),
                        array('','2',"D'ora in poi tutte le generazioni mi chiameranno beata.")
                    ),
                    array(
                        array('','*',"Grandi cose ha fatto in me l'Onnipotente"),
                        array('','2',"e santo è il suo nome:"),
                        array('','*',"di generazione in generazione la sua misericordia"),
                        array('','2',"si stende su quelli che lo temono.")
                    ),
                    array(
                        array('','*',"Ha spiegato la potenza del suo braccio,"),
                        array('','2',"ha disperso i superbi nei pensieri del loro cuore;"),
                        array('','*',"ha rovesciato i potenti dai troni,"),
                        array('','2',"ha innalzato gli umili;"),
                        array('','*',"ha ricolmato di beni gli affamati,"),
                        array('','2',"ha rimandato i ricchi a mani vuote.")
                    ),
                    array(
                        array('','*',"Ha soccorso Israele, suo servo,"),
                        array('','2',"ricordandosi della sua misericordia,"),
                        array('','*',"come aveva promesso ai nostri padri,"),
                        array('','2',"ad Abramo e alla sua discendenza, per sempre.")
                    )
                );
            break;
            case "SIM":
                $this->titolo="Cantico di Simeone (Cristo, luce delle genti e gloria d'Israele)";
                $this->testoBase=array(
                    array(
                        array('','*',"Ora lascia, o Signore, che il tuo servo"),
                        array('','2',"vada in pace secondo la tua parola;")
                    ),
                    array(
                        array('','*',"perché i miei occhi han visto la tua salvezza,"),
                        array('','2',"preparata da te davanti a tutti i popoli,")
                    ),
                    array(
                        array('','*',"luce per illuminare le genti"),
                        array('','2',"e gloria del tuo popolo Israele.")
                    )
                );
            break;
        }

        foreach ($this->testoBase as $k=>$b) {
            $this->res->addBlock($b);
        }

        $this->res->addBlock($this->gloria);

        $this->init();

    }

    /*definisce in maniera dinamica nuovi metodi
    public function __call($methodName, array $args) {

        if (isset($this->methods[$methodName])) {
            return call_user_func_array($this->methods[$methodName], $args);
        }

        else {
            $this->titolo='Errore caricamento ';
            //echo "ERRORE inatteso, contattare l'amministratore";
            return false;
        }
    }

    function set_closure() {
        foreach ($this->closure as $key=>$c) {
            $this->methods[$key] = Closure::bind($c, $this, get_class());
        }
    }

    function setAntifona($a) {
        //la funzione dà per scontato che l'antifona iniziale e finale siano uguali
        $this->antifona[0]=$a;
        $this->antifona[1]=$this->antifona[0]; 
    }

    function TPAntifona() {
        //la funzione dà per scontato che l'antifona iniziale e finale siano uguali
        $this->antifona[0]=$this->antifona[0].' Alleluia.';
        $this->antifona[1]=$this->antifona[0]; 
    }
    */

    function init() {
        //definisci le antifone del Salterio
    }


    ///////////////////////////////////////////////////////////////////////////
    function drawAntifona($flag) {
        //true = prima - false = dopo

        echo '<div style="position:relative;margin-top:5px;margin-bottom:10px;font-size:1.1em;" >';
        echo '<div class="salAntifona" >ant.</div>';
            echo '<div class="salAntifona2" >';
                echo $this->antifona[0];
                if ($flag) echo ' / ';
                else echo ' ';
                echo $this->antifona[1];
            echo '</div>';
        echo '</div>';
    }

    function draw() {

        //$this->drawAntifona(true);

        echo '<div class="salResBlockTitle" >';
            echo $this->titolo;
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            if ($this->res) {
                echo $this->res->draw();
            }
        echo '</div>';

        //$this->drawAntifona(false);
    }

}

?>