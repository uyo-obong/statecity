<?php

namespace Uyoobonga\StateCity\Http\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['id', 'state_id', 'name'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
