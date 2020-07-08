<?php
require 'ReverbnationEvents.php' ;

//? Retreives the events for the country code "US"
	$events_data = reverbnationEventsGet([
		'page'=>1, 
		'country'=>'US', 
	]) ;

//

//? Use the data retrieved to build your web application, always check if the "return" column is true before you proceed.

	if($events_data['return']===true){
		print_r($events_data) ;

	}else{
		//? 'No data retrived' ;
			echo 'Something went wrong' ;
			exit();
	}

//


//? "reverbnationEventsGet" function now support five queries, use it at your risk.
	// $events_data = reverbnationEventsGet([
	// 	'page'=>1, 
	// 	'country'=>'CA', 
	// 	'geo'=>'local',
	// 	'type'=>'today',
	// 	'date'=>'',
	// ]) ;