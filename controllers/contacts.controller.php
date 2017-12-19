<?php // Контроллер контактной формы.

class ContactsController extends Controller
{
	/**
	 * ContactsController constructor.
	 * Передаём массив с данными.
	 * Получаем экземпляр класса Message.
	 *
	 * @param array $data
	 */
	public function __construct( array $data = [] ) {
		parent::__construct( $data );
		$this->model = new Message();
	}

	/**
	 * Default метод.
	 * Сообщаем пользователю об успешной отправке сообщения через форму.
	 */
	public function index()
	{
		if ($_POST) {
			if ($this->model->save($_POST)) {
				Session::setFlash('Thank you! Your message was sent successfully!');
			}
		}
	}
}