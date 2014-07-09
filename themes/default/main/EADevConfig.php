<?php
/*
	EADev Configuration file
	http://ea-dev.com
*/
return array(
	// Server Name
		'serverName'	=> 'Ragnarok Tales',
		
	// Rate my server link
		'rms' 		=> 'http://ratemyserver.net',
		
	// Forums link here
		'forum' 	=> 'http://ragnaroktales.com/forums',
		
	// Facebook page link here.
		'facebook-page' => 'www.facebook.com/RagnarokTales',

	// You tube video link
		'youtube-video'	=> '<iframe width="309" height="245" src="//www.youtube.com/embed/-c8VZx63MmM" frameborder="0" allowfullscreen></iframe>',

	// Server Time ( use http://www.timeanddate.com/ )
		'serverTime'	=>	'<iframe src="http://free.timeanddate.com/clock/i3s2kzjx/n145/fs12/fcff2229/tct/pct" frameborder="0" width="70" height="17" allowTransparency="true"></iframe>',
	
	// RSS settings
		'enablerss'		=> true,						// true/ false	true will show RSS links on index page
		'news' 			=> 'http://ragnaroktales.com/forums/syndication.php?fid=2',		// RSS News link
		
	// Screenshots images
	// Put images inside folder "themes/default/img/ss"	
		'sliders' => array(
			// Image name.extension, description ( Don't forget , ( comma ) )
			'slider.png, Lorem ipsum dolor sit amet consectetur adipiscing elit. Curabitur non tempor nulla Suspendisse potenti. Phasellus et odio nec justo placerat gravida. Nullam eget ligula nulla1',
			'slider.png, Lorem ipsum dolor sit amet consectetur adipiscing elit. Curabitur non tempor nulla Suspendisse potenti. Phasellus et odio nec justo placerat gravida. Nullam eget ligula nulla2',
			'slider.png, Lorem ipsum dolor sit amet consectetur adipiscing elit. Curabitur non tempor nulla Suspendisse potenti. Phasellus et odio nec justo placerat gravida. Nullam eget ligula nulla3',
		),

	// Woe Schd
		'woeSchd'	=>	array(

			'Monday' => '11:00am to 12:pm',
			'Tuesday' => '11:00am to 12:pm',
			'Saturday' => '11:00am to 12:pm',
			'Sunday' => '11:00am to 12:pm',
		),
)
?>