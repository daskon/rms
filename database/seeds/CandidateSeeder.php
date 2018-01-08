<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('candidates')->insert([
            'FullName' => 'Asela Nuwan Bandara Daskon',
            'AccountName' => 'dasko',
            'image' ,
            'Password' ,
            'Sex',
            'HomeNo',
            'MobileNo',
            'EmailId',
            'NIC',
            'PassportNo',
            'HouseNo',
            'StreetName',
            'City',
            'GSDivision'
        ]);
    }
}
