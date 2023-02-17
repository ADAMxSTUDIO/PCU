<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\TreatmentRequest;

class TreatmentController extends Controller
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
        // fetch all patient-users 
        $patients = User::where('hasRole', 2)->get();
        return view('treatments.create', ['patients' => $patients, 'roles' => Role::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TreatmentRequest  $request
     * @return Response
     */
    public function store(TreatmentRequest $request)
    {
        Treatment::create([
            'patient_id' => $request->input('patient'),
            'treated_by' => $request->input('agent'),
            'details' => $request->input('details'),
        ]);
        return view('treatments.index')->with('treatStoreSuccess', 'Le traitement a été enregistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $treatment)
    {
        return view('treatments.edit', compact('treatment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatment $treatment)
    {
        // validate status radio input
        // $this->validate($request, [
        //     'patient' => 'regex:/^[0-9]+$/',
        //     'status' => 'required|boolean',
        // ],[
        //     'patient' => 'Erreur, un problème est survenu! Re-lance cette page à nouveau.', 
        //     'status'=> 'Erreur, un problème est survenu! Re-lance cette page à nouveau.', 
        // ]);

        // Update query
        Treatment::where('id', $treatment)->update([
            'treated_by' => $request->input('agent'),
            'details' => $request->input('details'),
            'isClosed' => $request->input('status'),
        ]);
        // return view('treatments.index')->with('treatUpdateSuccess', 'Le traitement a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment)
    {
        //
    }
}