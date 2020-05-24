<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;
use Validator;

class IdeasController extends Controller
{
    
    //The Function that will return all the ideas in the database in a JSON format.
    public function index(){
        $ideas = Idea::all();
        return response()->json($ideas); //We sending a response with all the items in a json(ed) format.

    }


    //This is our function to store data to the database
    public function store(Request $request){

        //We can not use the classic Validate Function that we used before because it is an API and we will not be rendering erros in the route 
        $validator = Validator::make($request->all(),[
            'text'=>'required'
        ]);

        if($validator->fails()){
            $response = array('response'=>$validator->messages(),'success'=>false);
            return $response;
        }

        else{
            $idea = new Idea;
            $idea->text = $request->input('text');
            $idea->body = $request->input('body');
            $idea->save();

            return response()->json($idea); 
        }

    }

    //Function to show individual Ideas.
    public function show($id){
        $idea = Idea::find($id);
        return response()->json($idea);
    }


    //We just have to use the PATCH Method it is the same like the Store function instead we do not create we find find with $id and change the data...
    public function update(Request $request, $id){
         
    
    }

    //Function to delete individual Ideas.
    public function destroy($id){

        $idea = Idea::findOrFail($id);
        $idea->delete();

        $response = array('response'=>'Item deleted', 'success'=>true);
        return $response;
        
    }
}
