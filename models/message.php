<?php

class Message extends Model
{                                                                          
	/**                                                                    
	 * @param $data                                                        
	 * @param null $id                                                     
	 *                                                                     
	 * @return bool
	 */
	public function save($data, $id = null) {
		if (($data['name'] == '') || ($data['email'] == '') || ($data['messages'] == '')) {
			Session::setFlash('Заполните все поля!');
			return false;
		}

		$id = (int) $id;
		$name = $this->db->escape($data['name']);
		$email = $this->db->escape($data['email']);
		$message = $this->db->escape($data['messages']);

		if (!$id) { // Add new record
			$sql = "
				INSERT INTO messages
					SET name = '{$name}',
						email = '{$email}',
						messages = '{$message}'
			";
		} else { // Update existing record
			$sql = "
				UPDATE messages
					SET name = '{$name}',
						email = '{$email}',
						messages = '{$message}'
					WHERE id = {$id}
			";
		}

		return $this->db->query($sql);
	}
}