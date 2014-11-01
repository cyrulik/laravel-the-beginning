<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users_characters';

    /**
     * The attributes available for edition.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'about',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
