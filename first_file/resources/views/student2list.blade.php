<div>
    <h1>Student List</h1>
    <!-- {{print_r($students)}} -->

    <form action="/search" method="get">
        <input type="text" name="search" placeholder="Search by name" value="{{ $searchTerm ?? '' }}">
        <button type="submit">Search</button>
    </form>

    <form action="delete-multiple-students" method="post">
        @csrf
        <button type="submit">Delete Selected</button>
        <table border="1">
            <thead>
                <tr>
                    <th>Section</th>
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
                    <td><input type="checkbox" name="selectedStudents[]" value="{{ $student->id }}"></td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->created_at }}</td>
                    <td>
                        <a href="{{ 'delete/'.$student->id }}">Delete</a>
                        <a href="{{ 'edit/'.$student->id }}">Edit</a>
                    </td>


                
                    {{--
                        This link builds a URL for editing a specific student.
                        It concatenates the route prefix "edit/" with the current student’s id,
                        so for student id 5 it becomes "edit/5".

                        The `$student->id` value identifies which student record to edit.
                    --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>

    

    {{ $students->links() }} <!-- This generates pagination links for the student list. -->



    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>

<style>
    .w-5.h-5 {
        width: 20px;
    }
</style>
