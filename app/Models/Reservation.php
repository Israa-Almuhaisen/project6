<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['rejected_reason','time','first_name', 'last_name', 'activity_id','user_id','phoneNumber','email','number_of_guest','res_date','price','status','activity'];

    public function activity()
    {
        return $this->belongsTo(activity::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
