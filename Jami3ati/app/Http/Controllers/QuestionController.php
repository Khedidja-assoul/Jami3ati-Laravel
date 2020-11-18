<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class QuestionController extends Controller
{
    public function getQsts(){
        $questions = DB::select('select q.id as questionId, qst, q.datepub  , count(r.id) as nbreponse from question q left join reponse r on q.id = r.idqst group by q.id, qst, q.datepub ;');
        return view('front-end.forum',['questions'=>$questions]);
    }
}
