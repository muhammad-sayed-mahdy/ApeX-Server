<?php

use Illuminate\Database\Seeder;

class moderators extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\moderator::class, 10)->create();
    }
}