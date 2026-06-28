<div>
    <h1>Users list</h1>
    {{-- 
    {{
        print_r($users);
    }}
    --}}

    <table border='1'>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
        </tr>
        @endforeach
    </table>
    <!-- He who is contented is rich. - Laozi -->
</div>
