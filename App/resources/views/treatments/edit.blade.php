@extends('layouts.index')

@section('title', 'Modifier traitement | Cas Urgent')
@section('links')
   <link rel="stylesheet" href="css/treatments/create.css" />
@endsection

@section('content')
    @php
        use App\Models\User;
        $user = User::find($treatment->patient_id);
    @endphp
    <section class="container-fluid bg-light" style="padding: 40px 100px 10px !important">
        <div class="d-flex justify-content-between">
            <h1 class="mb-3 text-primary" style="font-size: 1.6em">Modifier le traitement</h1>
            <span>Traitement - {{ $treatment->id }}</span>
        </div>
        <form action="{{ route('treatment.update', ['treatment' => $treatment->id]) }}" method="PUT" class="mt-3">
            @csrf
            @method('PUT')
            <div class="row">
                {{-- Patient field --}}
                <div class="form-group col">
                    <label for="patient">Patient</label>
                    <input class="form-control @error('patient') is-invalid @enderror" name="patient" id="patient" type="text" value="{{ "($user->IDCS/$user->IDREG) - $user->lastname $user->firstname" }}" disabled required />
                    {{-- Patient error --}}
                    @error('patient')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Status field --}}
                <div class="form-group col">
                    <label>Statut du traitement</label>
                    <div class="form-group d-flex justify-content-between">
                        <input class="form-control btn btn-success" type="checkbox" name="status"  checked value="open" />
                        <input class="form-control btn btn-danger" type="checkbox" name="status"  value="closed" />
                    </div>
                </div>
            </div>

            {{-- Agent field --}}
            <div class="form-group">
                <label for="agent">Nom du résponsable/agent</label>
                <input type="text" class="form-control @error('agent') is-invalid @enderror" id="agent" name="agent" placeholder="Mr. VotreNom" value="{{ $treatment->treated_by }}" required autofocus />
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
                <textarea class="form-control @error('details') is-invalid @enderror" id="details" name="details" rows="5" placeholder="Notez les détails du traitement que ce patient ci-dessus a pris..." required>{{ $treatment->details }}</textarea>
                {{-- Details error --}}
                @error('details')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            {{-- Submit btn --}}
            <button type="submit" class="btn btn-primary">MODIFIER</button>
        </form>
    </section>
    <script>
        $(function () {
            $('.example-popover').popover({
                container: 'body'
            })
        })
    </script>
@endsection
    