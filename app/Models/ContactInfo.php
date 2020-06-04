<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ContactInfo extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "tbl_contact_info";

    protected $primaryKey = 'id';

    protected $fillable = [
        'id','type','description','symbol'
    ];
    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
    
    public function getTeAttribute($value)
    {
       die(); 
        if($value == "1"){
            
            $data = "tel";
        }
        else if($value == "2"){
            
            
            $data = "email";
        }
        else if($value == "3"){
            
            
            $data = "address";
        }
        
        return $data;
    }

   

}
