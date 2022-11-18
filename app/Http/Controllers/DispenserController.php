<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use App\Models\User;
use App\Models\Status;
use Illuminate\Auth\Events\Failed;
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

    public function drink($qrcode)
    {
        if (Mahasiswa::where('qrcode', $qrcode)->exists()) {
            return response()->json([
                "drink" => true,
                "message" => "Success",
                // nickname
                "nickname" => User::where('NIM', Mahasiswa::where('qrcode', $qrcode)->first()->NIM)->first()->nickname,
            ], 201);}
        else {
            return response()->json([
                "drink" => false,
                "message" => "Invalid QR Code",
                "name" => null,
            ], 404);
        }
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Status::create([
            'NIM' => $request->NIM,
            'water_usage' => $request->water_usage,
        ]);
        return response()->json([
            "message" => "Status record created",
            "NIM" => $request->NIM,
            "water_usage" => $request->water_usage,
        ], 201);   
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
