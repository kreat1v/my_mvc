<?php // Default контроллер - контроллер наших страниц.

class PagesController extends Controller
{
	/**
	 * PagesController constructor.
	 * Передаём массив с данными.
	 * Получаем экземпляр класса Page.
	 *
	 * @param array $data
	 */
	public function __construct(array $data = []) {
		parent::__construct($data);
		$this->model = new Page();
	}

	/**
	 * Default метод.
	 * Получаем список имеющихся страниц.
	 */
	public function index()
	{
		$this->data['pages'] = $this->model->getList();
	}

	/**
	 *
	 */
	public function view() {
		$params = App::getRouter()->getParams();

		if (isset($params[0])) {
			$alias = strtolower($params[0]);
			$this->data['page'] = $this->model->getByAlias($alias);
		}
	}
}