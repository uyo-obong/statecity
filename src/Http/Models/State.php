<?php

namespace Uyoobonga\StateCity\Http\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['id', 'name', 'code'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
