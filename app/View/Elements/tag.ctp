<?php
	//debug($tag['TagOption']);
	//debug($tag['TagOption']['TagOptionIcon']);
if (!empty($tag['TagOption']['TagOptionIcon'])) {

		
		$opts['escape'] = false;
		$icon = (!empty($tag['TagOption']['TagOptionIcon']['name'])) ? $this->TwitterBootstrap->icon($tag['TagOption']['TagOptionIcon']['name'], 'white') : "";
		$type = (!empty($tag['TagOption']['TagOptionType']['name'])) ? $tag['TagOption']['TagOptionType']['name'] : 'default';
		$url = array('controller'=>'tags', 'action'=>'view', $tag['id']);
		
		echo $this->Html->link($this->TwitterBootstrap->label($icon . __($tag['name']), $type), $url, $opts);
	} 
	
?>