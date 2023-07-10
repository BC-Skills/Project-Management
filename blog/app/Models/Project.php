<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Define the table associated with the model
    protected $table = 'projects';

    // Define the fillable attributes
    protected $fillable = ['name', 'status', 'projectmanager_id'];

    // Define the relationship with the project manager
    public function projectManager()
    {
        return $this->belongsTo(ProjectManager::class, 'projectmanager_id');
    }
}
