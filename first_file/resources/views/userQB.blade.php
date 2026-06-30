<div>
    <h1>users</h1>
    <table border="1">
        <tr>
            <td>name</td>
            <td>email</td>
            <td>phone</td>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
        </tr>
        @endforeach
    </table>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>
