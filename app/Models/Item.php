<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Item extends Model
{
    use HasFactory;
    protected $table = 'Item';

    protected $fillable = [
        'id',
        'Notes',
        'ItemType',
        'Caption',
      'FamilyId',
      'SubFamilyId',
      'ItemType',
      'CostPrice',
      'StockVarianceAccount',
      'BarCode',
      'Quantity'
    ];
    
    public $timestamps = false;

    protected $hidden = [
      
        
        'xx_categorie2',
        'xx_categorie3',
        'SubjectToIRPF',
        'xx_Demat',
    ];

    public function family()
    {
        return $this->hasMany(Family::class ,'FamilyId','Id');
    }
    

   

}
