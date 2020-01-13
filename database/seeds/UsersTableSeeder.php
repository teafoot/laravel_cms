<?php
    
    use App\User;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\Hash;
    
    class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where("email", "pedro@gmail.com")->first();
        
        if (!$user) {
              User::create([
                  "name" => "pedro",
                  "email" => "pedro@gmail.com",
                  "password" => Hash::make("1234"),
                  "role" => "admin"
              ]);
        }
    }
}
