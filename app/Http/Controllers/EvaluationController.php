<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    public function index(){
        $evaluations = Evaluation::paginate();
        return view('evaluations.index', compact('evaluations'));
    }

    public function create(){
        return view('evaluations.create');
    }

    public function show($id){
        $evaluation=Evaluation::find($id);
        return view('evaluations.show', compact('evaluation'));
    }
}