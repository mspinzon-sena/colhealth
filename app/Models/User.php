<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Appointment;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'cedula',
        'celular',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'pivot'
    ];
    public function specialties(){
        return $this->belongsToMany(Specialty::class)->withTimestamps();
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Mostrar por ROL
    public function scopePatients($query){
        return $query->where('role','paciente');
    }
    public function scopeDoctors($query){
        return $query->where('role','doctor');
    }

    public function asDoctorAppointments(){           //revisar el desempeño doctor
        return $this->hasMany(Appointment::class, 'doctor_id');
    }

    public function attendedAppointments(){
        return $this->asDoctorAppointments()->where('status','Atendida');
    }
    public function cancellAppointments(){
        return $this->asDoctorAppointments()->where('status','Cancelada');
    }

    public function asPatientAppointments(){           //revisar el desempeño doctor
        return $this->hasMany(Appointment::class, 'patient_id');
    }
}
