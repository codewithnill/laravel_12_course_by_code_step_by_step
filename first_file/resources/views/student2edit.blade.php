<div>
    <h1>Update student info</h1>
    <form action="" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $student->name }}"> <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $student->email }}"> <br><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ $student->phone }}"> <br><br>
        <button type="submit">Update</button>
        <a href="/list">Cancel</a>
    </form>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div>
