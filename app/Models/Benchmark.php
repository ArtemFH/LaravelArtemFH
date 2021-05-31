<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;

class Benchmark extends Model
{
    use HasFactory;

    protected $table = 'benchmarks';

    protected $fillable = [
        'user_id',
        'score',
        'image',
        'nomination_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nomination()
    {
        return $this->belongsTo(Nomination::class);
    }

    public function getImageAttribute()
    {
        return URL::to('/') . '/storage/' . $this->attributes['image'];
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }
}
