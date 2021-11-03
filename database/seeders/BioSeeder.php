<?php

namespace Database\Seeders;

use App\Models\Bio;
use App\Models\User;
use Illuminate\Database\Seeder;

class BioSeeder extends Seeder
{
    public function run()
    {
        User::all()->each(function (User $user) {
            Bio::factory()->count(10)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
