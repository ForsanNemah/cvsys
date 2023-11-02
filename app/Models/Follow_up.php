<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow_up extends Model
{
    use HasFactory;
    protected $table = 'follow_ups';
    protected $guarded = []; 






    public function User(){

        return $this->belongsTo(User::class);
            }





            public function Status(){

                return $this->belongsTo(Status::class);
                    }


                    public function owner(){

                        return $this->belongsTo(User::class,'owner_id','id');
                            }




}


