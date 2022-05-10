<?php
class Model_Portfolio extends Model
{
	public function get_data()
	{	
		return array(
			array(
				'Year' => '2022',
				'Site' => 'http://example.com/',
				'Description' => 'Вся информация о нашей компании'
			),
			array(
				'Year' => '2022',
				'Site' => 'https://skillfactory.ru/',
				'Description' => 'Место, где я прохожу обучение'
			),
		);
	}
}
?>