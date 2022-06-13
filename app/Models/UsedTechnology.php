<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsedTechnology extends Model
{
    protected $table = 'used_technologies';
    protected $primaryKey='id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $dateFormet = 'U';
}
