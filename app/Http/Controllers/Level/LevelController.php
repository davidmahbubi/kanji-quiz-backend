<?php

namespace App\Http\Controllers\Level;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Level\Level;
use Exception;

class LevelController extends Controller
{

    /**
     * index method
     * 
     * @return Illuminate\View\View|Illuminate\Contracts\View\Factory
     */
    public function index(Request $request)
    {
        if ($request->expectsJson()) {
            return response()->json([
                'success' => TRUE,
                'message' => 'Get levels list successfull',
                'data' => [
                    'levels' => Level::all(),
                ]
            ]);
        }

        return view('level.index', ['levels' => Level::all()]);
    }

    /**
     * edit method
     * 
     * @param App\Model\Level\Level $level
     * @return Illuminate\View\View|Illuminate\Contracts\View\Factory
     */
    public function edit(Level $level)
    {
        return view('level.edit', ['level' => $level]);
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
            'name' => 'required|string',
            'limit' => 'required|numeric',
            'score' => 'required|numeric',
        ]);
        try {
            Level::create($request->only(['name', 'limit', 'score']));
            return redirect()->route('levelIndex')->with('success', 'Success add new question');
        } catch (Exception $e) {
            return abort(503, $e->getMessage());
        }
    }

    /**
     * update method
     * 
     * @param App\Model\Level\Level $level
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\RedirectResponse|void
     */
    public function update(Level $level, Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'limit' => 'required|numeric',
            'score' => 'required|numeric',
        ]);

        try {
            $level->update($request->only(['name', 'limit', 'score']));
            return redirect()->route('levelEdit', ['level' => $level->id])->with('success', 'Success update question');
        } catch (Exception $e) {
            return abort(503, $e->getMessage());
        }
    }

    /**
     * destroy method
     * 
     * @param App\Model\Level\Level $level
     * @return Illuminate\Http\RedirectResponse|void
     */
    public function destroy(Level $level)
    {
        try {
            $level->delete();
            return redirect()->route('levelIndex')->with('success', 'Success delete new question');
        } catch (Exception $e) {
            return abort(503, $e->getMessage());
        }
    }
}
