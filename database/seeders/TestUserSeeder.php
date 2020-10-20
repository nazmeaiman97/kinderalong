<?php

namespace Database\Seeders;

use App\Models\Guardian;
use Illuminate\Database\Seeder;
use App\Models\Kid;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        User::factory()
            ->times(10)
            ->hasGuardians(2)
            ->create();

        Kid::factory()->count(10)->create();

        for ($i = 1; $i <= 9; $i++) {

            for ($y = 1; $y <= $i + 1; $y++) {

                $kid =   Kid::find($i);
                $guardian =   Guardian::find($y);

                DB::table('guardian_kid')->insert([
                    'kid_id' => $kid->id,
                    'guardian_id' => $guardian->id,
                ]);
            }
        }
    }
}
