<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Person extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'persons';

    public $keyType = 'string';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'name',
        'cpf',
        'rg',
        'birthdate',
        'gender',
        'phone',
        'email',
        'branch_id',
    ];

    /**
     * Get the Branch that owns the Person.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    /**
     * Get the Addresses for the Person.
     */
    public function address(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    /**
     * Get the TimeClockRecords for the Person.
     */
    public function timeClockRecords(): HasMany
    {
        return $this->hasMany(TimeClockRecord::class);
    }
}
