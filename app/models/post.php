<?php

class Post extends Eloquent {

	public function user() 
	{
		return this->belongs_to('User','post_author');
	}

	public function comment()
	{
		return this->has_many('Comment');
	}

}