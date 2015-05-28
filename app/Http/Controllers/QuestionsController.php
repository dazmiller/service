<?php namespace App\Http\Controllers;

use App\Question;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class QuestionsController extends Controller {


    /**
     *
     */
    public function __construct()
    {
        $this->middleware('manager');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = Question::all()->sortByDesc('updated_at');

        return view('questions.index', compact('questions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('questions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\CreateQuestionRequest $request)
	{

        $question = Question::create($request->all());

        //required answer
        $answer_description_1 = $request->answer_description_1;
        $answer_is_correct_1 = $request->answer_is_correct_1;
        $question->answers()->create(['description' => $answer_description_1, 'is_correct' => $answer_is_correct_1]);

        // required answer
        $answer_description_2 = $request->answer_description_2;
        $answer_is_correct_2 = $request->answer_is_correct_2;
        $question->answers()->create(['description' => $answer_description_2, 'is_correct' => $answer_is_correct_2]);

        // optional answer
        $answer_description_3 = $request->answer_description_3;
        $answer_is_correct_3 = $request->answer_is_correct_3;
        if (isset($answer_description_3) && isset($answer_is_correct_3)) {
            $question->answers()->create(['description' => $answer_description_3, 'is_correct' => $answer_is_correct_3]);
        }

        // optional answer
        $answer_description_4 = $request->answer_description_4;
        $answer_is_correct_4 = $request->answer_is_correct_4;
        if (isset($answer_description_4) && isset($answer_is_correct_4)) {
            $question->answers()->create(['description' => $answer_description_4, 'is_correct' => $answer_is_correct_4]);
        }



        return redirect('questions');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$question = Question::find($id);

        return view('questions.show', compact('question'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
    	Question::destroy($id);

        // Also need flash message

        return redirect('questions');
	}

}
