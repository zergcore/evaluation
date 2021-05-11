<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    public function index(){
        $evaluations = Evaluation::all();
        return view('evaluations.index', compact('evaluations'));
    }

    public function create(){
        return view('evaluations.create');
    }

    public function show(Evaluation $evaluation){

        return view('evaluations.show', compact('evaluation'));
    }

    public function store(Request $request){
        $evaluation=new Evaluation();

        $evaluation->name=$request->name;
        $evaluation->stars=$request->rate;
        $evaluation->description=$request->description;
        $evaluation->title=$request->title;

        $evaluation->save();

        return redirect()->route('evaluations.show', $evaluation);
    }

    public function edit(Evaluation $evaluation){

        return view('evaluations.edit', compact('evaluation'));
    }

    public function update(Request $request, Evaluation $evaluation){
        $evaluation->name=$request->name;
        $evaluation->stars=$request->rate;
        $evaluation->description=$request->description;
        $evaluation->title=$request->title;

        $evaluation->save();

        return redirect()->route('evaluations.show', $evaluation);
    }
}