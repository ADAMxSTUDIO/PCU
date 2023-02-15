@extends('layouts.index')

@section('title', 'Liste d\'utilisateurs')
@section('links')
    <link rel="stylesheet" href="css/index.css" />
@endsection

@section('content')
    <section>
        <h1>Liste d'utilisateurs</h1>
        @php
            use App\Models\Role;
            use Illuminate\Support\Facades\DB;
        @endphp

        {{-- Search bar --}}
        <div class="search">
            <i id="search-icon" class="fa-solid fa-magnifying-glass"></i>
            <i id="reset-icon" class="fa-sharp fa-solid fa-circle-xmark"></i>
            <input type="text" name="search" id="search" class="" placeholder="Rechercher par nom, prénom, nom , type, date d'emploi, nom d'util..." />
            <div id="search-results">
                <div>Aucun utilisateur n'est trouvé</div>
            </div>
        </div>
        

        {{-- User cards --}}
        <div class="user-cards">
            @forelse($users as $user)
                    <div class="user-card">
                        <div class="profile-pic">
                            <img src={{ $user->profile }} alt="la photo de profile d'utilidsateur" title="la photo de profile d'utilidsateur" />
                        </div>
                        <div class="card-content">
                            <div class="content-ids">
                                <span class="role">{{ Role::findOrFail($user->hasRole)->label }}</span>
                                <span class="date">{{ $user->created_at->format('d.m.Y') }}</span>
                            </div>
                            <div class="content-infos">
                                <h3 class="first"><span class="last">{{ $user->lastname }} </span>{{ $user->firstname }}</h3>
                                <span class="username">{{ $user->email }}</span>
                            </div>
                        </div>
                        <div class="action">
                            <a href={{ route('user.show', ['user' => $user->id]) }} class="btn btn-success">Plus d'infos</a>
                        </div>
                    </div>
                @empty
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                              </symbol>
                        </svg>
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        Oops!!</h4>
                    <p class="text-danger">Aucun utilisateur n'est trouvé, veuillez ajouter des nouveaux utilisateurs ou contacter l'équipe développeuse pour plus d'infos.</p>
                </div> 
            @endforelse
        </div>
        {{ $users->links() }}
    </section>
    
{{-- @endsection --}}
<script type="text/javascript" src="js/index.js"></script>
@endsection