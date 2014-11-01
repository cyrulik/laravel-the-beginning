<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'character';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
