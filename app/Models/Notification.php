<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = ['admin_id', 'type', 'message', 'is_read'];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
