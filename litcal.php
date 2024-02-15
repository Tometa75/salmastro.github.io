<?php
include ('baseline.php');
require_once (SITE_ROOT.'/classi/calendario.php');

$param=$_POST['param'];

$cal=new Calendario($param['today']);

$res=array();

$m=array('01'=>"Gennaio",'02'=>"Febbraio",'03'=>"Marzo",'04'=>"Aprile",'05'=>"Maggio",'06'=>"Giugno",'07'=>"Luglio",'08'=>"Agosto",'09'=>"Settembre",'10'=>"Ottobre",'11'=>"Novembre",'12'=>"Dicembre");

foreach($m as $k=>$mese) {
    $res[$k]=$cal->mese($k);
}

/*{"01":
    {"52":[{"tag":"20231231","wd":0,"festa":0,"testo":"","tempo":{"codice":"N","nome":"Tempo di Natale","colore":"white","fine":"battesimo"},"griglie":[]},
    {"tag":"20240101","wd":1,"festa":1,"testo":"Maria Santissima Madre di Dio","tempo":{"codice":"N","nome":"Tempo di Natale","colore":"white","fine":"battesimo"},"griglie":[]},
*/
$anno=substr($param['today'],0,4);
$tag="";

foreach ($res as $k=>$sett) {
    foreach ($sett as $ks=>$ad) {
        foreach ($ad as $kd=>$d) {
            if (substr($d['tag'],0,4)!=$anno) continue;
            if ($d['tag']<=$tag) continue;

            $tag=$d['tag'];

            $map=$cal->buildMap($tag);

            echo '<div style="position:relative;">';

                echo '<div style="position:relative;display:inline-block;vertical-align:top;width:20%;" >';
                    echo '<div>'.mainFunc::gab_todata($d['tag']).'</div>';
                    echo '<div>'.$map['tempo']['nome'].'</div>';
                echo '</div>';

                echo '<div style="position:relative;display:inline-block;vertical-align:top;width:20%;" >';
                    if ($map['settimana']!="") echo '<div>Settimana: '.$map['settimana'].'</div>';
                    echo '<div>'.mainFunc::gab_weektotag($map['weekDay']).'</div>';
                echo '</div>';

                //{"today":"20240101","tempo":{"codice":"N","nome":"Tempo di Natale","colore":"white","fine":"battesimo"},"anno":"B","settimana":"","quarto":"","weekDay":"1","pari":true,"festa":[],"evento":{"MSS":{"titolo":"Maria SS. Madre di Dio","tipo":"S","ppvv":true}},"rocho":false,"ASC":"20240512","errore":false}
                //{"today":"20240102","tempo":{"codice":"N","nome":"Tempo di Natale","colore":"white","fine":"battesimo"},"anno":"B","settimana":"","quarto":"","weekDay":"2","pari":true,"festa":{"0102a":{"titolo":"Santi Basiglio Magno e Gregorio Nazianzeno (Vescovi e Dottori della Chiesa)","tipo":"M","comune":"pastori","mix":1}},"evento":{"F0102":{"titolo":"Ferie prima dell'Epifania","tipo":"F"}},"rocho":false,"ASC":"20240512","errore":false}

                echo '<div style="position:relative;display:inline-block;vertical-align:top;width:60%;" >';

                    foreach ($map['evento'] as $evCode=>$e) {
                        echo '<div>'.$e['titolo'].'</div>';
                    }

                    foreach ($map['festa'] as $fesCode=>$f) {
                        echo '<div>'.$f['titolo'].'</div>';
                    }

                echo '</div>';
            echo '</div>';
        }
    }
}

?>