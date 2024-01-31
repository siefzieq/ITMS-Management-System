<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadDeveloper extends Model
{
    use HasFactory;
    use SoftDeletes;

    //protected $fillable = ['name','email', 'mobile','updated_at', 'created_at','deleted_at'];

    public function project():HasOne{

        return $this->hasOne(Project::class,'lead_id');
    }
}
