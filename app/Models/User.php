<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

use Spatie\Activitylog\Traits\LogsActivity; // ← Importa el trait
use Spatie\Activitylog\LogOptions; // ← Importa LogOptions

class User extends Authenticatable 
{ 
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPermissions, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',

        'avatar',
        'external_id',
        'external_auth'
    ];

    //protected $guarded=[];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

        /**
     * Configuración de Activity Log
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            // Solo registra cambios en estos campos
            ->logOnly(['name', 'email', 'username'])
            
            // Solo guarda si hubo cambios reales (no guarda si editas pero no cambias nada)
            ->logOnlyDirty()
            
            // No crea un log vacío
            ->dontSubmitEmptyLogs()
            
            // Personaliza el mensaje según la acción
            ->setDescriptionForEvent(fn(string $eventName) => match($eventName) {
                'created' => 'Usuario creado',
                'updated' => 'Usuario actualizado',
                'deleted' => 'Usuario eliminado',
                default => "Usuario {$eventName}"
            });
    }
}
