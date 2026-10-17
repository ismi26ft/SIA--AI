<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AiRecommendation extends Model
{
    protected $table = 'ai_recommendations';

    protected $guarded = [];

    protected $casts = [
        'confidence' => 'decimal:2',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function learningAnalysis()
    {
        return $this->belongsTo(LearningAnalysis::class, 'analysis_id');
    }
}
