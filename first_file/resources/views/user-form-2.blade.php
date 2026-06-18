<div>
    <h2>Add new user</h2>

    <form action="adduser2" method="post">
        @csrf
        
        <div>
            <h5>User skills</h5>
            <input type="checkbox" id="php" name="skill[]" value="php"> 
            <label for="php">PHP</label>
        
            <input type="checkbox" id="node" name="skill[]" value="node"> 
            <label for="node">Node.js</label>
        
            <input type="checkbox" id="java" name="skill[]" value="java"> 
            <label for="java">Java</label>
        </div>


        <div>
            <h5>Gender</h5>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>

            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div>

        <div>
            <h5>City</h5>
            <select name="city" id="city">
                <option value="dhaka">Dhaka</option>
                <option value="chittagong">Chittagong</option>
                <option value="khulna">Khulna</option>
            </select>
        </div>


        <div>
            <h5>Age</h5>
            <input type="range" name="age" min="18" max="100" placeholder="Enter your age">
        </div>


        <button>Add new user</button>

    </form>

    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
