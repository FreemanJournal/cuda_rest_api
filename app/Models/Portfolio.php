<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolios';
    protected $primaryKey='id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $dateFormet = 'U';
}
