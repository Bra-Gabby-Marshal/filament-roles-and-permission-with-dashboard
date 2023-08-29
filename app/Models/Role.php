<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as ModelsRole; // Do this *gave the role an allias as ModelsRole*

class Role extends ModelsRole // Do this
{
    use HasFactory;
}