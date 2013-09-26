<?php

namespace {

require_once dirname(dirname(__DIR__)) .
             DIRECTORY_SEPARATOR . 'Data' .
             DIRECTORY_SEPARATOR . 'Core.link.php';

from('Hoa')
->import('Dispatcher.Basic')
->import('Router.Http');

$dispatcher = new Hoa\Dispatcher\Basic();
$router = new Hoa\Router\Http();

$router->get('r', '/', 'regular', 'index')
	   ->get('i', '/blog', 'blog', 'index');

try {
	$dispatcher->dispatch(
		$router,
		new Hoa\Xyl(
			new Hoa\File\Read('hoa://Application/View/main.xyl'),
			new Hoa\Http\Response(),
			new Hoa\Xyl\Interpreter\Html(),
			$router
		)
	);
}
catch ( Hoa\Router\Exception\NotFound $e ) {
	echo '404';
}
}
