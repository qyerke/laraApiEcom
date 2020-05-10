<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'title' => 'Подтверждение',
        ]);

        Status::create([
            'title' => 'В пути',
        ]);

        Status::create([
            'title' => 'Доставлен',
        ]);
    }
}
