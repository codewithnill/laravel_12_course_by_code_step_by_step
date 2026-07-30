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
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->created_at }}</td>
                <td>
                    <a href="{{ 'delete/'.$student->id }}">Delete</a></td>


            
                {{--
                    This link builds a URL for editing a specific student.
                    It concatenates the route prefix "edit/" with the current student’s id,
                    so for student id 5 it becomes "edit/5".

                    The `$student->id` value identifies which student record to edit.
                --}}
            </tr>
            @endforeach
        </tbody>



    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>
