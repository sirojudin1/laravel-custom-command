<?php 
	$controller_namespace = [
		'jarvis' => 'Jarvis'
	];

	$jarvis_root = 'jarvis';

	return [
		'NAMESPACE_CONTROLLER_MAKE_COMMAND' => $controller_namespace['jarvis'],

		'JARVIS_ROOT' => $jarvis_root,
		'JARVIS_WEB_FOLDER' => '\\'.$jarvis_root,
		'JARVIS_API_FOLDER' => '\\'.$jarvis_root.'\api',
		'JARVIS_ADMIN_FOLDER' => '\\'.$jarvis_root.'\admin'
	];
?>