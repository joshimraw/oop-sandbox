<?php
	// Load config file
	require_once 'config/config.php';

	// Load Helpers
	require_once 'helpers/url_helper.php';
	require_once 'helpers/session_helper.php';

	// Autoload Core Librabies
	spl_autoload_register(function($className){
		require_once 'lib/' .$className. '.php';
	});

