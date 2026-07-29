<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <h1>Add new user</h1>

    <!-- {{session('message')}} -->
    @if(session('message'))
        <span class="success-message">{{ session('message') }}</span>
    @endif

    @if(session('name'))
        <span class="success-message">{{ session('name') }}</span>
    @endif

    {{session()->keep(['name'])}}

    <form action="user-flash-session" method="post">
        @csrf
        <input type="text" name="username" placeholder="Name"><br><br>
        <input type="text" name="email" placeholder="Email"><br><br>
        <input type="text" name="password" placeholder="Phone"><br><br>
        <button type="submit">Add User</button>
    </form>
</div>

<style>
    .success-message {
        color: green;
        font-weight: bold;
    }
</style>
