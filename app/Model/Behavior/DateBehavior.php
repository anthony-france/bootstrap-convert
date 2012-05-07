<?php

class DateBehavior extends ModelBehavior {


	public function afterFind(Model $Model, $results, $primary) {
		$results = $this->dateFormat($Model, $results, 'created');
		$results = $this->dateFormat($Model, $results, 'modified');

		return $results;
	}
	
	
	public function dateFormat(Model $Model, $array, $find) {
		
		foreach($array as $k => $v) {
			if (is_array($v)) {
		
				$array[$k] = $this->dateFormat($Model, $v, $find);
			}
			else {
				
				if ($k == $find) {
					
					$array[$k] = $Model->ago($v);
				}
			}
		}
		return $array;
	}
}

?>