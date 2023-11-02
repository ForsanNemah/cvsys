<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Country extends Model
{
    use HasFactory;

    use HasTranslations;
    public $translatable = ['country'];

    protected $guarded = []; 


 
    public function country_relation (){

        return $this->hasMany(Cv::class);

        
            }

}
