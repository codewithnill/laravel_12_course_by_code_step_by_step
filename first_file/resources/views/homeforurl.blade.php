<div>
    <h1>Home page</h1>
    <a href="/aforurl">About page</a>

    <br><br>


    {{URL::current()}}
    <!-- or -->
    {{url()->current()}}
    <br>


    {{URL::full()}} 
    <!-- or -->
    {{url()->full()}}
    <!-- displays full when i write localhost:8000/home?name=abc -->
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>
