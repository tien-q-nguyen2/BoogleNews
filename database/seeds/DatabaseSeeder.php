<?php
// Author: Tien Quang Nguyen
// Date: Nov 6, 2018

use Illuminate\Database\Seeder;

use App\User;
use App\Models\Profile;
use App\Models\Headline;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Factory::create();

        for ($i = 0; $i < 5; $i++) {
            $user = new User();
            $user->email = $faker->email;
            $user->name = $faker->name;
            $user->password = bcrypt('abc123');
            $user->save();

            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->description = $faker->realText($maxNbChars = 100);
            $profile->website = $faker->url;
            $profile->image = 'https://picsum.photos/200/?random'.rand(1, 100);
            $profile->save();

            $numOfHeadlines = rand(2, 5);
            for ($j = 0; $j < $numOfHeadlines; $j++) {
                $headline = new Headline();
                $headline->title = $faker->realText($maxNbChars = 100);
                $headline->image = 'https://picsum.photos/200/?random'.rand(1, 100);
                $headline->user_id = $user->id;
                $headline->save();
            }
        }
    }
}
