<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class buyerModel extends Model
{
    // use HasFactory;
     protected $collection = "buyer";
}
