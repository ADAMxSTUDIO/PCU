@extends('layouts.index')

@section('title', 'Nouveau Traitement')
@section('links')
   <link rel="stylesheet" href="css/treatments/create.css" />
@endsection

@section('content')
    <section class="container-fluid bg-light" style="padding: 40px 100px 10px !important">
        <h1 class="mb-3 text-primary" style="font-size: 1.6em">Ajouter un nouveau traitement</h1>
        <form action="{{ route('treatment.store') }}" method="POST" class="mt-3">
            @csrf
            @method('POST')
            {{-- Patient field --}}
            <div class="form-group mb-3">
                <label for="patient">Patient</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="patient">Tous les patients</label>
                    </div>
                    <select class="custom-select @error('patient') is-invalid @enderror" id="patient" name="patient" value="{{ old('patient') }}" required autofocus>
                        <option selected disabled>Sélectionner le patient qui a pris ce traitement...</option>
                        <optgroup label="(IDCS/IDREG) - Nom & Prénom">
                            @forelse ($patients as $patient)
                                <option value="{{ $patient->id }}">{{ "($patient->IDCS/$patient->IDREG) - $patient->lastname $patient->firstname" }}</option>
                            @empty
                                <option class="alert alert-danger">Oops! Un problème est survenu, veuillez s'assurer que vous avez déjà des utilisateurs enregistrés ou contacter l'équipe développeuse</option>
                            @endforelse
                        </optgroup>
                    </select>
                    {{-- Patient error --}}
                    @error('patient')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <small id="usersCreate" class="form-text text-muted ml-3">Notez, Vous devez trouver juste les patients qui'ont déjà un compte actif. Si ce n'est pas le cas, vous devez d'abord l'enregistré d'après'<a href="{{ route('user.create', ['roles' => $roles]) }}"> ici!</a></small>
            </div>

            {{-- Agent field --}}
            <div class="form-group">
                <label for="agent">Nom du résponsable/agent</label>
                <input type="text" class="form-control @error('agent') is-invalid @enderror" id="agent" name="agent" placeholder="Mr. VotreNom" value="{{ old('agent') }}" required />
                {{-- Agent error --}}
                @error('agent')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            {{-- Details field --}}
            <div class="form-group">
                <label for="details">Détails du traitement</label>
                <textarea class="form-control @error('details') is-invalid @enderror" id="details" name="details" rows="5" placeholder="Notez les détails du traitement que ce patient ci-dessus a pris..." required>{{ old('details') }}</textarea>
                {{-- Details error --}}
                @error('details')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            {{-- Submit btn --}}
            <button type="submit" class="btn btn-success">VALIDER</button>
        </form>
    </section>
@endsection