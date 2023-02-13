{{-- @extends('layout')

@section('title', 'Liste d\'utilisateurs')
@section('link') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste d'utilisateurs</title>

    <link rel="stylesheet" href="css/index.css" />
    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
    <script type="text/javascript" src = {{ asset("bootstrap/js/bootstrap.js") }}></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- @endsection --}}
</head>
<body>
    

{{-- @section('content') --}}
    <h1>Liste d'utilisateurs</h1>
    <section>
        @php
            use App\Models\Role;
        @endphp

        {{-- Search bar --}}
        <div class="search">
            <i id="search-icon" class="fa-solid fa-magnifying-glass"></i>
            <i id="reset-icon" class="fa-sharp fa-solid fa-circle-xmark"></i>
            <input type="text" name="search" id="search" class="" placeholder="Rechercher par nom, prénom, nom , type, date d'emploi, nom d'util..." />
            <div id="search-results">
                {{-- <div>Logan11 - Logan Paul ( Agent ) : 02-10-2001</div>
                <div>Logan11 - Logan Paul ( Agent ) : 02-10-2001</div>
                <div>Logan11 - Logan Paul ( Agent ) : 02-10-2001</div> --}}
            </div>
        </div>
        

        {{-- User cards --}}
        <div class="user-cards">
            @forelse($users as $user)
                    <div class="user-card">
                        <div class="profile-pic">
                            <img src={{ $user->profile }} alt="la photo de profile d'utilidsateur" title="la photo de profile d'utilidsateur" />
                        </div>
                        <div class="content">
                            <div class="content-ids">
                                <span class="role">{{ Role::findOrFail($user->hasRole)->label }}</span>
                                <span class="username">{{ $user->username }}</span>
                            </div>
                            <div class="content-infos">
                                <h3 class="first"><span class="last">{{ $user->lastname }} </span>{{ $user->firstname }}</h3>
                                <p class="date">{{ $user->created_at->format('d-m-Y') }}</p>
                            </div>
                        </div>
                        <div class="action">
                            <a href={{ route('user.show', ['user' => $user->id]) }} class="btn btn-success">Plus d'infos</a>
                        </div>
                    </div>
                @empty
            @endforelse
        </div>
    </section>
    {{ $users->links() }}
{{-- @endsection --}}
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>