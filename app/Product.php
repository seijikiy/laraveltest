<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

//    protected $guarded = [];

    protected $fillable = [
        'name'

    ];

    // Table Name
    protected $table = 'product';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    //Relationship
    public function user(){
        return $this->belongsTo('App\User');
    }
}

