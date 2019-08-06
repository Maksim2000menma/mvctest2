<?php

class Model_Portfolio extends Model
{
	
	public function get_data()
	{	
		
		// Здесь мы просто сэмулируем реальные данные -> дальше будет из бд
		
		return array(
			array(
				'firstname' => 'Максим',
				'lastname' => 'Лях',
				'date' => '08.05.2000'
			),
			array(
				'firstname' => 'Евгений',
				'lastname' => 'Лашковский',
				'date' => '16.12.1999'
			),

		);
	}

}
