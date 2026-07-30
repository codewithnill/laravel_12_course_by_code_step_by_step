<div>
    <h1>Student List</h1>
    <!-- {{print_r($students)}} -->

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->created_at }}</td>
            </tr>
            @endforeach
        </tbody>



    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>
