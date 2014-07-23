<?php
/*
	EADev Configuration file
	http://ea-dev.com
*/
return array(
	// Server Name
		'serverName'	=> 'Ragnarok Tales',
		
	// Rate my server link
		'rms' 		=> 'http://ragnaroktales.com/forums/forum/14-ragnarok-tales-on-ratemyservernet/',
		
	// Forums link here
		'forum' 	=> 'http://ragnaroktales.com/forums',
		
	// Facebook page link here.
		'facebook-page' => 'www.facebook.com/RagnarokTales',

	// You tube video link
		'youtube-video'	=> '<iframe width="309" height="245" src="//www.youtube.com/embed/-c8VZx63MmM" frameborder="0" allowfullscreen></iframe>',

	// Server Time ( use http://www.timeanddate.com/ )
		'serverTime'	=>	'<iframe src="http://free.timeanddate.com/clock/i3s2kzjx/n145/fn17/fs11/fc03ba84/tct/pct/ftb" frameborder="0" width="81" height="15" allowTransparency="true"></iframe>',
	
	// RSS settings
		'enablerss'		=> true,						// true/ false	true will show RSS links on index page
		'news' 			=> 'http://ragnaroktales.com/forums/index.php?app=core&module=global&section=rss&type=forums&id=1',		// RSS News link
		
	// Screenshots images
	// Put images inside folder "themes/default/img/ss"	
		'sliders' => array(
			// Image name.extension, description ( Don't forget , ( comma ) )
			'slider.png',
			'slider1.png',

		),

	// Woe Schd
		'woeSchd'	=>	array(

			'Monday' => '11:00am to 12:pm',
			'Wednesday' => '11:00am to 12:pm',
			'Thursday' => '11:00am to 12:pm',
			'Friday' => '11:00am to 12:pm',
			'Saturday' => '11:00am to 12:pm',
			'Sunday' => '11:00am to 12:pm',
		),
)
?>