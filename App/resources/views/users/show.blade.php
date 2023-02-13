@extends('layout')

@section('title', 'Liste d\'utilisateurs')
@section('link')
    <link rel="stylesheet" href="css/index.css" />
@endsection
@section('content')
<section>
    @php
        use App\Models\Role;
    @endphp
    <table border="1">
        <tr>
            <th>ID</th>
            <th>IDCS</th>
            <th>IDREG</th>
            <th>Profile Picture</th>
            <th>Username</th>
            <th>Password</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Phone</th>
            <th>Role</th>
        </tr>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->IDCS }}</td>
                <td>{{ $user->IDREG }}</td>
                <td><img src={{ $user->profile }} /></td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ Role::findOrFail($user->hasRole)->label }}</td>
            </tr>
            @empty
            <tr>
                <td>No data found !</td>
            </tr>
        @endforelse
    </table>
    {{ $users->links() }}
</section>
@endsection