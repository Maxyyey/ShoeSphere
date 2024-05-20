<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'buyers';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'buyer_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        // Add other fillable attributes specific to the Buyer model
    ];

    /**
     * Get the user that owns the buyer.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
