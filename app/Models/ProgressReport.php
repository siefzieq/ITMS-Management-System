<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgressReport extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'project_id',
        'progress_date',
        'progress_status',
        'description',
        'updated_at',
        'created_at',
        'deleted_at'
    ];
    public function project():BelongsTo{

        return $this->belongsTo(Project::class);
    }
}
