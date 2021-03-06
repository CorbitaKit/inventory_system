<?php
	
	namespace App\Repositories\Eloquent;
	use App\Repositories\Contracts\UserInterface;
	use App\User;
	use Illuminate\Support\Facades\Hash;

	class UserRepository implements UserInterface{

		private $model;

		public function __construct(User $user){
			$this->model = new User;
		}


		public function store($data){
			
			return $this->model->create([
				'name'  => ucfirst($data->firstname).' '.ucfirst($data->lastname),
				'email' => $data->email,
				'password' => Hash::make($data->password),
				'role_id' => $data->role_id

			]);
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
			return $this->model->findOrFail($id);
		}

		public function get(){
			$users = $this->model->with('role')->get();

			return $users;
		}

		public function getWhere($user_id){
			$user = $this->model->with('role')->where('id',$user_id)->first();

			return $user;
		}
	} 



?>