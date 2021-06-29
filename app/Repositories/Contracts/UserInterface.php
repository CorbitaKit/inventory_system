<?php
	
	namespace App\Repositories\Contracts;
	
	interface UserInterface{

		public function store($data);


		public function find($id);

		public function update($id,$data);

		public function destroy($id);
	}





?>