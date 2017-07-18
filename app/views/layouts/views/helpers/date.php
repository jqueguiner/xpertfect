<?php
/* /app/views/helpers/link.php (using other helpers) */
class DateHelper extends Helper {

    var $mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
    var $jour = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi','Dimanche');

    function show($datetime,$heure=false) {
		$tmstamp=strtotime($datetime);
		$date=$this->jour[date("N",$tmstamp)-1]." ".date("d",$tmstamp)." ".$this->mois[date("n",$tmstamp)-1]." ".date("Y",$tmstamp);
		if($heure==true){$date.=" à ".date("H i",$tmstamp);}
		return ($date);
    }
    function mois($datetime,$heure=false) {
		$tmstamp=strtotime($datetime);
		$date=$this->mois[date("n",$tmstamp)-1]." ".date("Y",$tmstamp);
		if($heure==true){$date.=" à ".date("H i",$tmstamp);}
		return ($date);
    }
    function jour($datetime,$heure=false) {
		$tmstamp=strtotime($datetime);
		$date=date("d",$tmstamp)." ".$this->mois[date("n",$tmstamp)-1]." ".date("Y",$tmstamp);
		if($heure==true){$date.=" à ".date("H i",$tmstamp);}
		return ($date);
    }
    
    function getMonthsArray($number){
		$fin = date("Y-m-t", mktime(0,0,0,date("m")+$number-1,date("d"),date("Y")));
		$offset = 1;
		$jours = array();
		
		while(date("Y-m-d", mktime(0,0,0,date("m"),$offset,date("Y"))) != $fin) {
		
			$timestamp = mktime(0,0,0,date("m"),$offset,date("Y"));
			$jours[date("Y",$timestamp)][date("m",$timestamp)][date("d",$timestamp)] = date("N",$timestamp);
			$offset++;
		
		}
		
		return $jours;
    }
}
?>
