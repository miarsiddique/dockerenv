<?php

class UserModel
{
	
	public function __construct()
	{
		try {
			$this->conn = new PDO("mysql:host=mysql;port=3306;dbname=MVC","root", "root");
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (\PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function user()
	{
		$qr = "select * from users where id = 1";
		$stmt = $this->conn->prepare($qr);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function about()
	{
		$arr = [
			'compant_name' => 'Eccommerce Site',
			'address' => 'New Sundernager Ludhiana',
			'phone_num' => 987456321,
		];

		return $arr;
	}

	public function contactUs()
	{
		$arr = [
			'email' => 'abc@gmail.com',
			'phone_num' => 7896541251,
		];

		return $arr;
	}
}