<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'certificateNumber',
        'courceName',
        'studentFirstname',
        'studentMiddlename',
        'studentLastname',
        'certificateDateEnd',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'isConfirmed',
    ];

    public $timestamps = false;


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
//    protected $casts = [
//        'certificateDateEnd' => 'date',
//    ];

    public $primaryKey = 'certificate_id';
}
