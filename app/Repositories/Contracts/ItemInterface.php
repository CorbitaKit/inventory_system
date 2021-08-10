<?php

	namespace App\Repositories\Contracts;


	interface ItemInterface{

		public function store(obj $data);

		public function get();
	}

?>