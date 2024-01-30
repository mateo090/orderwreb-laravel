<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activity';
    protected $fillable = [
        'description',
        'hours',
        'technician_id',
        'type_id'
    ];

    /**
     * SE DEBE COLOCAR EL NOMBRE DE LA FK YA QUE ÉSTA HACE REFERECNIA AL
     * CAMPO DOCUMENT DE TECHNICIAN Y POR LLAMARSE DIFERENTE A 'ID'
     * DEBE ESPECIFICARSE MANUALMENTE
     */
    public function technician()
    {
        return $this->belongsTo(Technician::class, 'technician_id');
    }

    public function type_activity()
    {
        return $this->belongsTo(TypeActivity::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_activity',
                                    'order_id', 'activity_id');
    }
}
