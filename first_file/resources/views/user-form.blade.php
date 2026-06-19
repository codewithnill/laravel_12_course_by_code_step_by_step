<div>
    <h2>Add new user</h2>



    @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color: red">
        {{$error}}
    </div>
    @endforeach
    @endif




    <form action="add-user" method="post">
        @csrf
        <div class="input-wrapper">
            <input class="text" type="text" name="username" placeholder="Enter user name">
        </div>

        <div class="input-wrapper">
            <input class="text" type="text" name="email" placeholder="Enter user email">
        </div>

        <div class="input-wrapper">
            <input class="text" type="text" name="city" placeholder="Enter user city">
        </div>

        <div>
            <h5>User skills</h5>
            <input type="checkbox" id="php" name="skill[]" value="php"> 
            <label for="php">PHP</label>
        
            <input type="checkbox" id="node" name="skill[]" value="node"> 
            <label for="node">Node.js</label>
        
            <input type="checkbox" id="java" name="skill[]" value="java"> 
            <label for="java">Java</label>
        </div>

        <div class="input-wrapper">
            <button>Add new user</button>
        </div>
    </form>
    <!-- Well begun is half done. - Aristotle -->
</div>

<style>
    .text{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }

    .input-wrapper{
        magin: 20px;
    }

    button{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: #fff;
        cursor: pointer;
    }
</style>


