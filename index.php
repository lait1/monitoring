<?php
// require_once 'app/controllers/controller.php';
// require_once 'app/views/view.php';
// require_once 'app/models/model_link.php';
// require_once 'app/models/model_tracker.php';
// require_once 'app/core/database.php';
// require_once 'app/core/route.php';
// require_once 'app/core/simple_html_dom.php';

spl_autoload_register(function($class) {
	// $path = str_replace ( '_' , DIRECTORY_SEPARATOR, $class ) ;
 //    require_once $path . '.php';
	 include str_replace('\\', '/', $class) . '.php';
});

app\core\Route::start();
