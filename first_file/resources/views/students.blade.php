<div>
    <h1>Students list</h1>
    {{--{{print_r($data)}}--}}
    <table  border='1'>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach($data as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->batch}}</td>
        </tr>
        @endforeach
    </table>
    
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
