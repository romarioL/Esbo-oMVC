<?php 

namespace lib;

class Router {

	protected $routers = array(
		'site' => 'site',
		'admin' => 'admin',
		'painel' => 'admin'
	);

	private $urlBase = APP_ROOT;

	protected $routeOnRaiz = 'site';

	protected $onRaiz = true;
}