<?php

class View
{
	protected $data;

	protected $path;

	/**
	 * @return string
	 * @throws Exception
	 */
	protected static function getDefaultViewPath()
	{
		$router = App::getRouter();
		if (!$router) {
			throw new Exception('An Router object was not found.');
		}

		$controller_dir = $router->getController();
		$template_name = $router->getMethodPrefix() . $router->getAction() . '.php';

		return VIEW_PATH.DS.$controller_dir.DS.$template_name;
	}

	/**
	 * View constructor.
	 *
	 * @param array $data
	 * @param null $path
	 *
	 * @throws Exception
	 */
	public function __construct($data = [], $path = null)
	{
		if (!$path) {
			$path = self::getDefaultViewPath();
		}

		if (!file_exists($path)) {
			throw new Exception('Template file is not found in path: ' . $path);
		}

		$this->path = $path;
		$this->data = $data;
	}

	/**
	 * @return string
	 */
	public function render() {
		$data = $this->data;

		ob_start();
		include($this->path);
		$content = ob_get_clean();

		return $content;
	}
}