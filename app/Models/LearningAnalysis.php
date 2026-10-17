<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningAnalysis extends Model
{
    protected $table = 'learning_analyses';

    protected $guarded = [];

    protected $casts = [
        'analysis_date' => 'date',
        'average_score' => 'decimal:2',
        'mastery_percentage' => 'decimal:2',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function aiRecommendations()
    {
        return $this->hasMany(AiRecommendation::class, 'analysis_id');
    }
}
