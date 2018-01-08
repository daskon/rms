<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request,[
                        'FullName' => 'required|string|max:40',
                        'AccountName' => 'required|min:6',
                        'image' => 'required|max:1000',
                        'Password' => 'required|between:6,12|regex:/^[A-Za-z0-9@!#\$%\^&\*]+$/',
                        'HomeNo' => 'required|numeric|min:10',
                        'MobileNo' => 'required|numeric|min:10',
                        'EmailId' => 'required|email|unique:candidates',
                        'NIC' => 'required|min:10',
                        'PassportNo' => 'required|min:5'
                    ]);

        $candidate = new Candidate([
                        'FullName' => $request->input('FullName'),
                        'AccountName' => $request->input('AccountName'),
                        'image' => $request->input('image'),
                        'Password' => bcrypt($request->input('Password')),
                        'Sex' => $request->input('Sex'),
                        'HomeNo' => $request->input('HomeNo'),
                        'MobileNo' => $request->input('MobileNo'),
                        'EmailId' => $request->input('EmailId'),
                        'NIC' => $request->input('NIC'),
                        'PassportNo' => $request->input('PassportNo'),
                        'HouseNo' => $request->input('HouseNo'),
                        'StreetName' => $request->input('StreetName'),
                        'City' => $request->input('City'),
                        'GSDivision' => $request->input('GSDivision')
                    ]);

        if ($validatedData){
            $candidate->save();
            return response()->json(['candidate' => $candidate], 201);
        }
        else {
            return response()->json(['validateData' => $validatedData],404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
