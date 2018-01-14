<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
		protected $fillable = [
		'title',
		'content',
		'featured_image',
		'user_id',
		'category_id'
		];
		public static function boot()
		{
		parent::boot();
		static::creating(function($model) {
		$model->user_id = Auth()->user()->id;
		return true;
		});
		}
		public function user()
		{
		return $this->belongsTo('App\User');
		}
		public function category()
		{
		return $this->belongsTo('App\Category');
		}
}
