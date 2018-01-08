<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employers')->insert([
            'CompanyName' => 'Application Management Inc',
            'CompanyType' => 'Staffing and Recruiting',
            'CPerson' => 'Melissa Eisler',
            'Designation' => 'IT Recruiter',
            'AccountName' => 'eisler',
            'Password' => bcrypt('12345'),
            'OfficeNo' => '0603454567',
            'MobileNo' => '0645677786',
            'FaxNo' => '34555675',
            'EmailId' => str_random(10).'@gmail.com',
            'CRNo' => '567R35',
            'MailboxNo' => '23/4',
            'StreetName' => 'Calgary, Canada',
            'City' => 'Alberta'
        ]);

        DB::table('employers')->insert([
            'CompanyName' => 'DXC Technology',
            'CompanyType' => 'Information Technology Service',
            'CPerson' => 'BB Nguyen',
            'Designation' => 'Java Developer',
            'AccountName' => 'nuguyen',
            'Password' => bcrypt('34455'),
            'OfficeNo' => '454356667',
            'MobileNo' => '434456677',
            'FaxNo' => '33455566',
            'EmailId' => str_random(10).'@gmail.com',
            'CRNo' => '222R34',
            'MailboxNo' => '33',
            'StreetName' => 'Tx',
            'City' => 'El Paso'
        ]);
    }
}
