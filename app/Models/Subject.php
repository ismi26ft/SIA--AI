<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $guarded = [];

    public function assessments()
    {
        return $this->hasMany(Assessment::class, 'subject_id');
    }

    public function learningAnalyses()
    {
        return $this->hasMany(LearningAnalysis::class, 'subject_id');
    }

    public function aiRecommendations()
    {
        return $this->hasMany(AiRecommendation::class, 'subject_id');
    }
}
