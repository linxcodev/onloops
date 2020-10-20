<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
  use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'content'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
    ];

    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }

    public function getCreatedAtAttribute($date)
    {
    return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d, M Y H:i');
  }
}
