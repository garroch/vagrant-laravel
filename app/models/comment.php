<?php

class Comment extends Eloquent {

	public function user()
	{
		return this->belongs_to('User','comment_author');
	}

	public function post()
	{
		return this->belongs_to('Post','post_title');
	}

}