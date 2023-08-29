<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as ModelsPermission; // Do this *gave the permission an allias as ModelsPermission*
class Permission extends ModelsPermission // Do this
{
    use HasFactory;
}
