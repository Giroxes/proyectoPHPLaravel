<?php

class Product extends Eloquent
{
    protected $table = "products";
    protected $fillable = ['name', 'category_id', 'trademark', 'price', 'discount', 'weight', 'length', 'home'];
    
    public function category() {
        return $this->belongsTo('Category','category_id');
    }
}