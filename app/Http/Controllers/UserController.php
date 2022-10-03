<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function creat($id,Request $request){
        $data = $request->all;

        $model = new User();
        $model->id = $id;
        $model->name = $data['name'];
        $tags="";
        foreach($items as $data['tags']){
            $a= $items+",";
            $tags+=$a;
        }
        $model->tags = $tags;
        $model->save();


        return response()->json(['result','save']);


    }

    public function all($tags){

        $res = User::WhereIn('tags',$tags)->get();

        return $res;
    }
}
