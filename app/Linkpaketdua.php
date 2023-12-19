<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linkpaketdua extends Model
{
    protected $table = 'linkpaketdua';
    protected $fillable = ['marketplase', 'wa'];
}
