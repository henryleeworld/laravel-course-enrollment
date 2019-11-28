<?php

namespace App;

use App\Scopes\EnrollmentScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enrollment extends Model
{
    use SoftDeletes;

    public $table = 'enrollments';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'status',
        'user_id',
        'course_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATUS_RADIO = [
        'awaiting' => '等待中',
        'accepted' => '被錄取',
        'rejected' => '被拒絕',
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new EnrollmentScope);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
