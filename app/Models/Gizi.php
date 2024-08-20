<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gizi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = "pengukuran_gizi";
    public function bayi()
    {
        return $this->belongsTo(Bayi::class);
    }
}
