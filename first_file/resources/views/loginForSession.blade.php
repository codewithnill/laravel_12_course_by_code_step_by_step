<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h1>Login</h1>
    <form action="login-session" method="post">
        @csrf
        <input type="text" name="user" placeholder="enter name"> <br>
        <input type="password" name="password" placeholder="enter password"> <br>
        <button>Login</button>
    </form>
</div>
