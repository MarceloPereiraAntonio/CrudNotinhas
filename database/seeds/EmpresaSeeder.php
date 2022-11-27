<?php

use App\Models\EmpresaModel;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EmpresaModel::class, 1200)->create();
    }
}
