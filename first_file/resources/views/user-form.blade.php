<div>
    <h2>Add new user</h2>
    <form action="add-user" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" name="username" placeholder="Enter user name">
        </div>

        <div class="input-wrapper">
            <input type="text" name="email" placeholder="Enter user email">
        </div>

        <div class="input-wrapper">
            <input type="text" name="city" placeholder="Enter user city">
        </div>

        <div class="input-wrapper">
            <button>Add new user</button>
        </div>
    </form>
    <!-- Well begun is half done. - Aristotle -->
</div>

<style>
    input{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }

    .input-wrapper{
        magin: 10px;
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


