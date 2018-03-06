<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = [
        'student_no',
	'survey_taken'
    ];


}
