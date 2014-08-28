<?php

class CommentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Comment::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return "create";
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$validator=Validator::make(Input::all(),Comment::$rules);

		if($validator->fails())
		{
			return Response::json("Error",404);
		}

		Comment::create(array(
			'author'=>Input::get('author'),
			'text'=>Input::get('text')
		));

		return Response::json(array('success'=>true));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$comment=Comment::find($id);

		if(is_null($comment))
		{
			return Response::json("Resource Not Found",404);
		}

		return Response::json($comment);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'Edit '.$id;
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$comment=Comment::find($id);

		if(is_null($comment))
		{
			return Response::json("Resource Not Found",404);
		}

		$validator=Validator::make(Input::all(),Comment::$rules);

		if($validator->fails())
		{
			return Response::json("Error",404);
		}

        $comment->author = Input::get('author');
        $comment->text = Input::get('text');
	    $comment->save();
	   return Response::json(array('success'=>true));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$comment=Comment::find($id);

		if(is_null($comment))
		{
			return Response::json("Resource Not Found",404);
		}

		Comment::destroy($id);

		return Response::json(array('success'=>true));
	}


}
