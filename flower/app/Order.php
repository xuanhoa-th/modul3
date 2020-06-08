<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;

    protected $table = 'orders';
    protected $fillable = ['name' ,'order_Note','phone','address','account_id','status' ];

}