<?php 
	
	Class CalendarEvent extends AppModel {

		var $belongsTo = array(
			'Color' => array(
				'foreignKey' => 'color_id'
				)
			);
	}

 ?>