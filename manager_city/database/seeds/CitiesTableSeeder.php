<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $dataArray = [];
        for ($i=0;$i<20;$i++){
            array_push($dataArray,[
                'name'=>\Illuminate\Support\Str::random(10),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
        \Illuminate\Support\Facades\DB::table('cities')->insert($dataArray);
    }

}
