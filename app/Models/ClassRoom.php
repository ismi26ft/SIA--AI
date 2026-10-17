<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassRoom extends Model
{
    protected $table = 'classes';

    protected $guarded = [];

    public function waliKelas(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'wali_kelas_id');
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'class_id');
    }

    public function assessments(): HasMany
    {
        return $this->hasMany(Assessment::class, 'class_id');
    }
}
