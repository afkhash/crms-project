<?php

namespace App\Models;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Validation\Rule;
use Redbastie\Crudify\Traits\FillsColumns;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory, FillsColumns;

    public function migration(Blueprint $table)
    {
        $table->id();
        $table->timestamps();
        $table->string('item');
        $table->string('brand');
        $table->integer('quantity');
        $table->string('warehouse');
    }

    public static function definition(Generator $faker)
    {
        return [
            'item' => $faker->bothify('BSOD-#?#'),
            'brand' =>$faker->randomElement($array = array ('Razer','Lenovo','Asus','HP','Apple','Dell')),
            'quantity' =>$faker->numberBetween($min = 1, $max = 999),
            'warehouse' =>$faker->numerify('MDCN######'),

        ];
    }

    public static function rules(Product $product = null)
    {
        return [
            'item' =>['required', 'regex:/^BSOD-\d{3}$/'],
            'brand' =>['required'],
            'quantity' =>['required','numeric','min:0','max:999'],
            'warehouse' => ['required', 'regex:/^MDCN\d{6}$/'],
        ];
    }
    public static function getProductcsv()
    {
        $records = DB::table('products')->select('id','item','brand','quantity','warehouse')->get()->toArray();
        return $records;
    }
}
