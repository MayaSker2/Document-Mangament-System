<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         try {
            $files = File::all();

            return response()->json([
                'status' => 'success',
                'file' => $files
            ]);
            
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

            $file = File::create ([
                'name'  => $request->name,
                'slogan'=>$request->slogan,
            ]);

            // DB::commit();

            return response()->json([
                'status' => 'success',
                'file' => $file
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
                'file' => $file
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
            'slogan'=>'required|string|max::255',
        ]);
        $newData =[];

        if(isset($request->name)){
            $newData['name'] =  $request->name;
        }
        if(isset($request->name)){
            $newData['slogan'] =  $request->slogan;
        }
        $file->update();

        return response() ->json([
            'status' => 'success',
            'file' => $file
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
            $file->delete();
            return response() ->json([
                'status' => 'success',
            ]);
            
        } catch (\Throwable $th) {
            Log::error($th);
            return $this->customeResponse(null,"Error, There somthing Rong here",500);
        }
    }
}
