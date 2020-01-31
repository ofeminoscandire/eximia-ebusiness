<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = 'e_members';
    
    const CREATED_AT = 'dateposted';
    const UPDATED_AT = 'dateupdated';
}
