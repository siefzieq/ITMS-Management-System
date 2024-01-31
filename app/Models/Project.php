<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'project_title',
        'order_id',
        'type',
        'PIC',
        'project_start',
        'project_end',
        'project_duration',
        'project_status',
        'lead_id',
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function progress():HasOne{

        return $this->hasOne(ProgressReport::class);
    }

    public function devInfo():HasOne{

        return $this->hasOne(DevInfo::class);

    }

    public function LeadDeveloper():BelongsTo{

        return $this->belongsTo(LeadDeveloper::class,'lead_id');
    }

    public function developers():BelongsToMany{

        return $this->belongsToMany(Developer::class,'project_developer');
    }



}
