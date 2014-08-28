<?php

class Comment extends Eloquent{

	protected $fillable = array('author','text');

	public static $rules = array(
					'author' => 'required',
					'text' => 'required'
					);
}