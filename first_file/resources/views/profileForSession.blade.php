<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <h1>Profile</h1>
    <!-- <h3>{{ session('user') }}</h3> -->

    @if(session('user'))
        <h3>Welcome, {{ session('user') }}!</h3>
    @else
        <h3>No user logged in.</h3>
    @endif
</div>
