<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
     protected $fillable =[
    'title',
    'content',
    'featured_image',
    'user_id',
    'category_id',
    ];

    public static function boot()
    {

    	parent::boot();

    	static::creating(function($model) {
    		$model->user_id =auth()-user()->id;
    		return true;
    	});

}
public function user()
{
	return $this->belongsTo('app\user');
}
	
public function category()
{
	return $this->belongsTo('app\category');
}
