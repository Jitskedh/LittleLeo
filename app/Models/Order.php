<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
            'product_id',
            'frontFirstName',
            'frontMiddleName',
            'frontLastName',
            'frontDateOfBirth',
            'frontInitials',
            'backFirstName',
            'backMiddleName',
            'backLastName',
            'backDateOfBirth',
            'backWeight',
            'backHeight',
            'backTimeOfBirth',
            'backParents',
            'backOther',
            'backParentsName',
            'backAddress',
            'backAdditionalWishes',
            'FinishOrder',
    ];
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
