<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Model\Question\Question;
use App\Model\Level\Level;

class QuestionController extends Controller
{

    /**
     * index method
     * 
     * @return Illuminate\View\View|Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('soal.index', [
            'questions' => Question::all(),
            'levels' => Level::all(),
        ]);
    }

    /**
     * store method
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\RedirectResponse|void
     */
    public function store(Request $request)
    {

        $request->validate([
            'level_id' => 'required|numeric',
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
        ]);

        try {
            Question::create($request->only([
                'level_id', 
                'question', 
                'option_a', 
                'option_b', 
                'option_c', 
                'option_d', 
                'answer'
            ]));
            return redirect()->route('questionIndex')->with('success', 'Berhasil menambah soal baru !');
        } catch (Exception $e) {
            return abort(503, $e->getMessage());
        }
    }

    /**
     * edit method
     * 
     * @param App\Model\Question\Question $question
     * @param Illuminate\Http\Request $request
     * @param Illuminate\Http\Request $request
     */
    public function edit(Question $question, Request $request)
    {
        return view('soal.edit', [
            'question' => $question,
            'levels' => Level::all(),
        ]);
    }

    /**
     * update method
     * 
     * @param App\Model\Question\Question $question
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\RedirectResponse|void
     */
    public function update(Question $question, Request $request)
    {

        $request->validate([
            'level_id' => 'required|numeric',
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
        ]);

        try {

            $question->update($request->only([
                'level_id', 
                'question', 
                'option_a', 
                'option_b', 
                'option_c', 
                'option_d', 
                'answer'
            ]));

            return redirect('admin/soal/' . $question->id . '/edit')->with('success', 'Question updated successfully');

        } catch (Exception $e) {
            return abort(503, $e->getMessage());
        }
    }

    /**
     * destroy method
     * 
     * @param App\Model\Question\Question $question
     * @return Illuminate\Routing\Redirector|Illuminate\Http\RedirectResponse|void
     */
    public function destroy(Question $question)
    {
        try {
            $question->delete();
            return redirect('admin/soal')->with('success', 'Question deleted successfully');
        } catch (Exception $e) {
            return abort(503, $e->getMessage());
        }
    }
}