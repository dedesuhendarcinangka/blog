<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
		'title',
		'author_id',
		'publisher_id',
		'year'
		];
		
		public function author()
		{
		return $this->belongsTo('App\Author');
		}
		public function publisher()
		{
		return $this->belongsTo('App\Publisher');
		}
}
