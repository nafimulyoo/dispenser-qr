<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use App\Models\Status;
use Illuminate\Http\Request;

class DispenserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Status::latest()->first();
        return $status;
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if NIM is not in request, return error
        if (!$request->has('NIM')) {

            Status::create([
                'pH' => $request->pH,
                'TDS' => $request->TDS,
            ]);

            return response()->json([
                'dispense' => 'rejected',
                'message' => 'NIM is required'
            ], 400);
        }

        else {
            if (Mahasiswa::where('NIM', $request->NIM)->exists()) {
                Status::create([
                    'NIM' => $request->NIM,
                    'water_usage' => $request->water_usage,
                    'pH' => $request->pH,
                    'TDS' => $request->TDS,
                ]);
                return response()->json([
                    "dispense" => "accepted",
                    "message" => "status created"
                ], 201);}
            else {

                Status::create([
                    'pH' => $request->pH,
                    'TDS' => $request->TDS,
                ]); 
                
                return response()->json([
                    "dispense" => "rejected",
                    "message" => "NIM not found"
                ], 404);
            }
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
