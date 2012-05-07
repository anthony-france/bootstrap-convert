<?php

class SettingComponent extends Component {
	
	public function startup(&$controller) {
		$settings['ViewOption'] = array();
		$controller->loadModel('ViewOption');
		$settings = $controller->ViewOption->find('first', array('conditions'=>array('model'=>$controller->name)));
		$controller->set('settings', $settings['ViewOption']);
	}
	
}

?>