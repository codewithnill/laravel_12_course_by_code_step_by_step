<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
     <h1>User login</h1>
     <form action="users-hr" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name"><br><br>
        <input type="password" name="password" placeholder="Enter your password">
        <button>login</button>
</div>
