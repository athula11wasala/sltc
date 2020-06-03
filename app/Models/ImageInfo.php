<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageInfo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "tbl_image_info";

    protected $primaryKey = 'id';

    protected $fillable = [
        'id','src','hyp_info'
    ];
    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

   

}
