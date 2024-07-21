<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    protected $table ='shipments';
    protected $primaryKey ='id';
    protected $fillable =[
    'shipment_number',
    'shipment_date',
    'shipment_hour',
    'producer_grower_id',
    'producer_id',
        'client_id',
        'contract',
        'partner_id',
        'season_id',
        'driver',
        'transport',
        'refrigerated_box',
        'pallets_total',
        'download_flag',
];
}
