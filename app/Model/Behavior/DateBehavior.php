<?php

class DateBehavior extends ModelBehavior {


	public function afterFind(Model $Model, $results, $primary) {
		$results = $this->dateFormat($Model, $results, 'created');
		$results = $this->dateFormat($Model, $results, 'modified');

		return $results;
	}
	
	
	public function dateFormat(Model $Model, $array, $field) {
		
		foreach($array as $k => $v) {
			if (is_array($v)) {
		
				$array[$k] = $this->dateFormat($Model, $v, $field);
			}
			else {
				
				if ($k == $field) {
					
					$array[$k.'-formated'] = $Model->ago($v); 
				}
			}
		}
		return $array;
	}
}

?>