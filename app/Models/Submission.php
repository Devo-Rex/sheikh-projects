<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function invites(){
        $this->belongsTo(Invite::class, 'invite_id', 'id');
    }

    public function submissionAnswers(){
        $this->hasMany(SubmissionAnswer::class);
    }

}
