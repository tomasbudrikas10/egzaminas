<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Autoservice;
use App\Models\Specialization;
use App\Models\Rating;

class Expert extends Model
{
    public function autoservice() {
        return $this->hasOne(Autoservice::class, 'id', 'autoservice_id');
    }

    public function specialization() {
        return $this->hasOne(Specialization::class, 'id', 'specialization_id');
    }

    public function rating() {
        return $this->hasOne(Rating::class, 'rating_id', 'id');
    }

    use HasFactory;
}
