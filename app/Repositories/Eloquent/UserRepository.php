<?php
	
	namespace App\Repositories\Eloquent;
	use App\Repositories\Contracts\UserInterface;
	use App\User;
	use Illuminate\Support\Facades\Hash;

	class UserRepository implements UserInterface{

		private $model;

		public function __construct(User $user){
			$this->model = $user;
		}


		public function store($data){
			$user = new User;

			$user->name = ucfirst($data->firstname).' '.ucfirst($data->lastname);
			$user->email = $data->email;
			$user->password = Hash::make($data->password);

			$user->save();

			return $user;
		}

		public function find($id){
			return $this->model->findOrFail($id);
		}

		public function update($id,$data){
			$user = $this->model->findOrFail($id);

			$user->update($data);

			return $user;
		}

		public function destroy($id){
			$this->model->find($id)->delete();
		}
	} 



?>