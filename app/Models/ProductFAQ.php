<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFAQ extends Model
{
    protected $table = 'product_f_a_q_s';
    protected $primaryKey='id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $dateFormet = 'U';
}
