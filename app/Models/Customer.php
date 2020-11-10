<?php

namespace App\Models;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Validation\Rule;
use Redbastie\Crudify\Traits\FillsColumns;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory, FillsColumns;

    public function migration(Blueprint $table)
    {
        $table->id();
        $table->timestamps();
        $table->string('item');
        $table->string('representative');
        $table->string('company');
        $table->string('title');
        $table->string('lastname');
        $table->string('firstname');
        $table->string('address');
        $table->string('email');
    }

    public static function definition(Generator $faker)
    {
        return [
            'item' => $faker->randomElement($array = array('BSOD-XGT','BSOD-2F3','BSOD-2GF','BSOD-VG5','BSOD-XX2','BSOD-TH2')),
            'representative' => $faker->randomElement($array = array('OFFICE-A','OFFICE-B','OFFICE-C','OFFICE-D','OFFICE-E','OFFICE-F')),
            'company' => $faker->company,
            'title' => $faker->title,
            'lastname' => $faker->lastName,
            'firstname' => $faker->firstName,
            'address' => $faker->city, 
            'email' => $faker->email,
        ];
    }

    public static function rules(Customer $customer = null)
    {
        return [
     
            'item' =>['required'],
            'representative' =>['required'],
            'company' =>['required'],
            'title' =>['required'],
            'lastname' =>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'firstname' =>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'address' =>['required'],
            'email' =>['required','regex:/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2-8})?$/'],
        ]; 
    }
    public static function getCustomercsv()
    {
        $records = DB::table('customers')->select('id','item','representative','company','title','lastname','firstname','address','email')->get()->toArray();
        return $records;
    }
}
