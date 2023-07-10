<?php

namespace App;

class ProjectManager extends User
{
    protected $discriminatorColumn = 'type';
    protected $table = 'users';
    protected $fillable = ['departement'];

    // Define the Project Manager model properties and methods
}
