<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class DevInfo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'project_id',
        'dev_method',
        'platform',
        'type',
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    public function projects():BelongsTo{

        return $this->belongsTo(Project::class,'project_id');
    }
}
