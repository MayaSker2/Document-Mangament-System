<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         try {
            // $documents = Document::all();

            // return response()->json([
            //     'status' => 'success',
            //     'document' => $documents
            // ]);
            $documents = cache::remember('documents',60,function(){
                return Document::all();
            });
            return $documents;
    
            
        } catch (\Throwable $th) {
            Log::error($th);
            return $this->customeResponse(null,"Error, There somthing Rong here",500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         try {
            
        } catch (\Throwable $th) {
            Log::error($th);
            return $this->customeResponse(null,"Error, There somthing Rong here",500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         try {
            // DB::beginTransaction();

            $document = Document::create ([
                'name'  => $request->name,
            ]);

            // DB::commit();

            return response()->json([
                'status' => 'success',
                'document' => $document
            ]);
        } catch (\Throwable $th) {
            // DB::rollback();
            
            Log::error($th);
            return response()->json([
                'status' => 'error',
            ],500);
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         try {
            return response()->json([
                'status' => 'success',
                'document' => $document
            ]);
            
        } catch (\Throwable $th) {
            Log::error($th);
            return $this->customeResponse(null,"Error, There somthing Rong here",500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         try {
            
        } catch (\Throwable $th) {
            Log::error($th);
            return $this->customeResponse(null,"Error, There somthing Rong here",500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         try {
            $request->validate([
            'name'  => 'required|string|max::255',
        ]);
        $newData =[];

        if(isset($request->name)){
            $newData['name'] =  $request->name;
        }
        $document->update();

        return response() ->json([
            'status' => 'success',
            'document' => $document
        ]);
            
        } catch (\Throwable $th) {
            Log::error($th);
            return $this->customeResponse(null,"Error, There somthing Rong here",500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         try {
            $document->delete();
            return response() ->json([
                'status' => 'success',
            ]);
            
        } catch (\Throwable $th) {
            Log::error($th);
            return $this->customeResponse(null,"Error, There somthing Rong here",500);
        }
    }
}
