<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tasks;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tasks::create([
            'title' => "Pay bills",
            'description' => "Pay bills",
            'status' => "Todo",
            'due_date' => "8/01/2021",
        ]);
        Tasks::create([
            'title' => "Meet Ken",
            'description' => "Meet Ken",
            'status' => "Todo",
            'due_date' => "28/06/2020",
        ]);
        Tasks::create([
            'title' => "Buy groceries",
            'description' => "Buy groceries",
            'status' => "Done",
            'due_date' => "17/07/2020",
        ]);
        Tasks::create([
            'title' => "Pay taxes",
            'description' => "Pay taxes",
            'status' => "Todo",
            'due_date' => "17/07/2020",
        ]);
        Tasks::create([
            'title' => "Watch news",
            'description' => "Watch news",
            'status' => "Cancelled",
            'due_date' => "12/12/2020",
        ]);
        Tasks::create([
            'title' => "Arrange a party",
            'description' => "Arrange a party",
            'status' => "Cancelled",
            'due_date' => "24/02/2021",
        ]);
    }
}
