<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['requestor','mobile', 'BU','project_title','summary','updated_at', 'created_at','deleted_at'];


    public function project():HasMany
    {
        return $this->hasMany(Project::class,'order_id' );
    }
}
