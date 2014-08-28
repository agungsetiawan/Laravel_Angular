<?php

class CommentTableSeeder extends Seeder{

	public function run(){

		// DB::table('comments')->delete();

		DB::table('comments')->truncate();

		Comment::create(array(
			'author'=>'Agung Setiawan',
			'text'=>'The awesomeness of Laravel'
		));

		Comment::create(array(
			'author'=>'Hauril Nisfari',
			'text'=>'PHP coding is fun again'
		));

		Comment::create(array(
			'author'=>'Akhtar',
			'text'=>'Great framework btw'
		));

	}
}