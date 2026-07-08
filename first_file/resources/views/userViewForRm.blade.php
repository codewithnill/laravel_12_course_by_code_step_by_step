<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <h1>User Form</h1>
    <form action="/users-rm" method="post">
        @csrf 
        <input type="text" name="name" placeholder="Enter your name"> <br><br>
        <input type="password" name="password" placeholder="Enter your password"> <br><br>
        <button>Submit</button>
    </form>
</div>
