
<?php
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder{
	public function run(){
		User::create([
			'name'=>'admin',
			'email'=>'paulido92@gmail.com',
			'role'=>'admin',
			'password'=>bcrypt('admin095'),
			'email_verified_at'=>Carbon::now(),
		]);

		User::create([
			'name'=>'Durand',
			'email'=>'durant@email.com',
			'role'=>'user',
			'password'=>bcrypt('durant095'),
			'email_verified_at'=>Carbon::now(),
		]);
	}
	
}