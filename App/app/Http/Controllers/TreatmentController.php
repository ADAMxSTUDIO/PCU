<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\TreatmentRequest;
use Session,Redirect;

class TreatmentController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatments = Treatment::paginate(10);
        return view('treatments.index', compact('treatments'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Treatment::create([
            'patient_id' => $request->input('patient'),
            'treated_by' => $request->input('agent'),
            'details' => $request->input('details'),
        ]);

        Session::flash('treatStoreSuccess', 'Le traitement a été enregistré avec succès');
        return Redirect::to('/Treatement_Show');
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
        // Update query
        $treatment->update([
            'isClosed' => true,
        ]);

        Session::flash('treatUpdateSuccess', 'Le traitement a été modifié avec succès');
        return redirect('/Treatement_Show');
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
};