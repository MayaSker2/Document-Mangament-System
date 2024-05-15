<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
       $document=Document::where('id',$request->document_id)->first(); 
       $document->comments()->create([
        'comment'=>$request->comment,
       ]);
    }
    public function index()
    {
            $comments = Comment::all();

            return response()->json([
                'status' => 'success',
                'comment' => $comments
            ]);
        
    }
}
