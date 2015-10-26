<?php

namespace Hado\Helpers;

Class DateTime {
	
	public static function now(){
		return (new \DateTime())->format('Y-m-d H:i:s');
	}
	
	public static function dateDMY($date){

		//if (! $date instanceof DateTime) {
		//	$date = new DateTime($date);
		//}

		$date = new DateTime($date);
		return $date->format('d/m/Y');
	}

	public static function dateTimeDMY($datetime, $glue = 'à'){
		$datetime = new DateTime($datetime);
		return $datetime->format('d/m/Y').' '.$glue.' '.$datetime->format('H:i:s');
	}

	public static function diffHumanFormat($date){

		$now = new DateTime();
		$date = new DateTime($date);

		$diff = $now->diff($date);

		if($diff->invert == 1){
			$prefix = 'Il y a'; 
		}
		else{
			$prefix = 'Dans'; 
		}

		$readableString = self::makeReadableString($diff);
		
		return $prefix.' '.$readableString;
	}

	private static function makeReadableString(DateInterval $dateInterval){
		if($dateInterval->days){
			if($dateInterval->y){
				if($dateInterval->m){
					return $dateInterval->y.' '. ($dateInterval->y > 1? 'ans':'an').' et '.$dateInterval->m.' mois';
				}
				return $dateInterval->y.' '. ($dateInterval->y > 1? 'ans':'an');
			}
			if($dateInterval->m){
				return $dateInterval->m.' mois';
			}
			if($dateInterval->d){
				return $dateInterval->d.' '. ($dateInterval->d > 1? 'jours':'jour');
			}
		}else{
			if($dateInterval->h){
				return $dateInterval->h.' '. ($dateInterval->h > 1? 'heures':'heure');
			} 
			if($dateInterval->i){
				return $dateInterval->i.' '. ($dateInterval->i > 1? 'minutes':'minute');
			}
			if($dateInterval->s){
				return 'quelques secondes';
			}
		}
	}

}