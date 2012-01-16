<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Widget settings
	|--------------------------------------------------------------------------
	|
	| Each widget must have a unique key. This is used to retrieve the settings
	| from the controller.
	|
	*/

	'weather' => array(
		'widget'   => 'weather',
		'class'    => 'small',
		'zip'      => 28056,
		'interval' => 3600,
		'width'    => 'span6',
		'height'   => 'height4'
	),

	'githubissues_laravel' => array(
		'widget'  => 'githubissues',
		'class'   => 'small',
		'user'    => 'laravel',
		'project' => 'laravel',
		'label'   => 'open',
		'width'    => 'span10',
		'height'   => 'height4'
	),

	'githubcommits_laravel' => array(
		'widget'  => 'githubcommits',
		'class'   => 'small',
		'user'    => 'laravel',
		'project' => 'laravel',
		'branch'  => 'skunkworks',
		'width'    => 'span4',
		'height'   => 'height4'
	),

	'githubissues_statusb' => array(
		'widget'  => 'githubissues',
		'class'   => 'small',
		'user'    => 'ericbarnes',
		'project' => 'Status-Board',
		'label'   => 'open',
		'width'    => 'span4',
		'height'   => 'height4'
	),

	'githubcommits_statusb' => array(
		'widget'  => 'githubcommits',
		'class'   => 'small',
		'user'    => 'ericbarnes',
		'project' => 'Status-Board',
		'branch'  => 'develop',
		'width'    => 'span4',
		'height'   => 'height4'
	),

	'twitter_laravel' => array(
		'widget'   => 'twitter',
		'class'    => 'small',
		'search'   => 'laravel',
		'interval' => 300,
		'width'    => 'span4',
		'height'   => 'height4'
	),

	'twitter_helpspot' => array(
		'widget'  => 'twitter',
		'class'   => 'small',
		'search'  => 'helpspot',
		'width'    => 'span4',
		'height'   => 'height4'
	),

	'twitter_ericlbarnes' => array(
		'widget' => 'twitter',
		'class'  => 'small',
		'search' => 'ericlbarnes',
		'width'    => 'span4',
		'height'   => 'height4'
	),

	'stocks' => array(
		'widget'   => 'stocks',
		'class'    => 'small',
		'exchange' => 'NASDAQ',
		'symbol'   => 'GOOG',
		'width'    => 'span4',
		'height'   => 'height4'
	),

	'rss' => array(
		'widget'    => 'rss',
		'url'       => 'http://feeds.theonion.com/theonion/daily',
		'class'     => 'small',
		'site'      => 'The Onion',
		'feedcount' => 5,
		'width'    => 'span4',
		'height'   => 'height4'
	),
/* 
// EXAMPLE Google Analytics widgets
	'analytics' => array(
		'widget'     => 'analytics',
		'class'      => 'medium',
		'email'      => 'jimbob@example.com',
		'password'   => '1tsC0mpl1cat3d!',
		'profile_id' => '111111111',
		'report'     => 'visitors',			// Visitor Graph
		'domain'     => 'www.example.com',
		'interval'   => 60,
	),
	
	'analytics_articles' => array(
		'widget'     => 'analytics',
		'class'      => 'medium',
		'email'      => 'jimbob@example.com',
		'password'   => '1tsC0mpl1cat3d!',
		'profile_id' => '111111111',
		'report'     => 'top_content',		// Top Articles
		'filters'    => array(
			'ga:pagePath!~' => '/$',		// filter out urls ending with "/" to remove sections from the top articles
		),
		'domain'     => 'www.example.com',
		'interval'   => 60,
	),
	
	'analytics_sections' => array(
		'widget'     => 'analytics',
		'class'      => 'medium',
		'email'      => 'jimbob@example.com',
		'password'   => '1tsC0mpl1cat3d!',
		'profile_id' => '111111111',
		'report'     => 'top_sections',		// Top Sections
		'domain'     => 'www.example.com',
		'filters'    => array(
			'ga:pagePath!~' => 'html',		// filter out urls with html
		),
		'interval'   => 60,
	),
	
	'analytics_search' => array(
		'widget'     => 'analytics',
		'class'      => 'medium',
		'email'      => 'jimbob@example.com',
		'password'   => '1tsC0mpl1cat3d!',
		'profile_id' => '111111111',
		'report'     => 'search',			// Top Search Terms
		'domain'     => 'www.example.com',
		'filters'    => array(
			'ga:keyword!~' => array('cat','dog'),		// filter out any search terms with these phrses - usually your brand name
		),
		'interval'   => 60,
	),
 * 
 */
);
