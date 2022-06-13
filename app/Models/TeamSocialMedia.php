<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamSocialMedia extends Model
{
    protected $table = 'team_social_media';
    protected $primaryKey='id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $dateFormet = 'U';
}
