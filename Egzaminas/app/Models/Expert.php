<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Autoservice;
use App\Models\Specialization;

class Expert extends Model
{
    public function autoservice() {
        return $this->hasOne(Autoservice::class, 'autoservice_id');
    }

    public function specialization() {
        return $this->hasOne(Specialization::class, 'specialization_id');
    }

    use HasFactory;
}
