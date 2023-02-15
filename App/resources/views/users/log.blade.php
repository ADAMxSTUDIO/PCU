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
<section>
    @php
        use App\Models\Role;
    @endphp
    <table border="1">
        <tr>
            <th>ID</th>
            <th>IDCS</th>
            <th>IDREG</th>
            <th>Pic</th>
            <th>Email</th>
            <th>Password</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Date d'embauche</th>
        </tr>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->IDCS }}</td>
                <td>{{ $user->IDREG }}</td>
                <td><img src={{ $user->profile }} /></td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ Role::findOrFail($user->hasRole)->label }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
            @empty
            <tr>
                <td>No data found !</td>
            </tr>
        @endforelse
    </table>
    {{ $users->links() }}
</section>
</body>
</html>