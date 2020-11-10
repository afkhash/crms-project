<?php

namespace App\Models;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Validation\Rule;
use Redbastie\Crudify\Traits\FillsColumns;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory, FillsColumns;

    protected $fillable = ['last_name','first_name','address','email','job','salary','office','reports_to'];

    public function migration(Blueprint $table)
    {
        $table->id();
        $table->timestamps();
        $table->string('last_name');
        $table->string('first_name');
        $table->string('address');
        $table->string('email');
        $table->string('job');
        $table->string('salary');
        $table->string('office');
        $table->string('reports_to');
       
    }

    public static function definition(Generator $faker)
    {
        return [
            'last_name' => $faker->lastName,
            'first_name' => $faker->firstName,
            'address' => $faker->city,
            'email' =>$faker->email,
            'job' =>$faker->randomElement($array = array ('Customer Service Associate','Marketing Manager','Business Analyst','IT Help Desk','Cloud Engineer','Software Engineer')),
            'salary' =>$faker->numberBetween($min = 25000, $max = 90000),
            'office' =>$faker->randomElement($array = array ('OFFICE-A','OFFICE-B','OFFICE-C','OFFICE-D','OFFICE-E','OFFICE-F')),
            'reports_to' =>$faker->randomElement($array = array ('Dr.Cooper','Dr.Hofstadter','Mr.Wolowitz','Dr.Koothrappali','Dr.Farrah-Fowler','Dr.Rostenkowski')),

        ];
    }

    public static function rules(Employee $employee = null)
    {
        return [
            
            'last_name' =>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'first_name' =>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'address' =>['required'],
            'email' =>['required','regex:/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2-8})?$/'],
            'job' =>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'salary' =>['required','numeric','min:20000','max:90000'],
            'office' =>['required'],
            'reports_to' =>['required'],
        ];
    }
    public static function getEmployeecsv()
    {
        $records = DB::table('employees')->select('id','last_name','first_name','address','email','job','salary','office','reports_to')->get()->toArray();
        return $records;
    }
}
