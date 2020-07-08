
# ReverbnationEventsApi
An easy PHP class, designed to get all music events from reverbnation.com

# Easy Usage:
**//? 1. Require "ReverbnationEvents.php" into project**

````php
<?php
require "ReverbnationEvents.php" ;
````

**//**

**//? 2. Retreives the events for the country code "US"**
````php
$events_data = reverbnationEventsGet([
	'page'=>1, 
	'country'=>'US', 
]) ;
````
Try Some more country codes like: **CA, BR, GH, US, AM** etc.
 
**//**

**//? 3. Use the data retrieved to build your web application, always check if the "return" column is true before you proceed.**

````php
if($events_data['return']===true){
	print_r($events_data) ;

}else{
	//? 'No data retrived' ;
		echo 'Something went wrong' ;
		exit();
	//
}
````

**//**

## Additional parameters or queries:

````php
$events_data = reverbnationEventsGet([
	'page'=>1, 
	'country'=>'US',
	'geo'=>'local',
	'type'=>'today',
	'date'=>''
]) ;
print_r($events_data);
````
# Extra
- *See "**sample1.php**" at project directory.*
- *See "**result_sample.json**" for event data result sample.*

# Say Thank You To
[bigbrotherrhome](fb.me/bigbrotherrhome)
