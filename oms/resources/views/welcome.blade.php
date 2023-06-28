<h1>BLOG POSTS</h1>
    {{-- variable from the Route--}}
    <p>{{$heading}}</p>


    <div style="border: 3px solid rgb(0, 0, 0); margin-bottom: 5px">
        <h2>Register a new student</h2>

        <form action="/registerStudent" method="POST" style="padding-left: 5px">
            @csrf

            <input type="hidden" name="account_type" value="student">

            <label for="account_id">Account ID:</label>
            <input type="text" name="account_id" maxlength="14" required pattern="[0-9]+-[0-9]+-[0-9]+" placeholder="0000-0000-0000"><br><br>
    
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" maxlength="32" required><br><br>
    
            <label for="middle_initial">Middle Initial:</label>
            <input type="text" name="middle_initial" maxlength="1"><br><br>
     
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" maxlength="32" required><br><br>
    
            <label for="email">Email:</label>
            <input type="email" name="email" required placeholder="@bicol-u.edu.ph"><br><br>
    
            <label for="password">Password:</label>
            <input type="password" name="password" value="ojt-  2023" required><br><br>
    
            <label for="course">Course:</label>
            <select name="course">
                <option value="BS Information Technology">BS Information Technology</option>
                <option value="BS Computer Science" selected>BS Computer Science</option>
                <option value="BS Meteorology">BS Meteorology</option>
                <option value="BS Biology">BS Biology</option>
                <option value="BS Chemistry">BS Chemistry</option>
            </select><br><br>

            <label for="block">Block:</label>
            <select name="block">
                <option value="A">A</option>
                <option value="B">B</option>
            </select><br><br>

            <label for="gender">Gender:</label>
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br><br>

            <label for="hrs_remaining">Hours Remaining:</label>
            <input type="number" name="hrs_remaining" value="240" required><br><br>

            <button>REGISTER</button>
        </form>

    </div>
    
    <div style="border: 3px solid rgb(0, 0, 0); margin-bottom: 5px">
        <h2>Register a new admin</h2>

        <form action="/registerAdmin" method="POST" style="padding-left: 5px">
            @csrf

            <input type="hidden" name="account_type" value="admin">

            <label for="account_id">Account ID:</label>
            <input type="text" name="account_id" maxlength="14" required><br><br>
    
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" maxlength="32" required><br><br>
    
            <label for="middle_initial">Middle Initial:</label>
            <input type="text" name="middle_initial" maxlength="1"><br><br>
     
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" maxlength="32" required><br><br>
    
            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>
    
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
    
            <button>REGISTER</button>
        </form>

    </div>

    @unless (count($blog_posts) == 0)
        @foreach ($blog_posts as $post)
            <h2> 
                <a href="/blogpost/{{$post['id']}}">
                {{$post['title']}} 
                </a>
            </h2>
            <p> {{$post['description']}} </p>
        @endforeach
    @else
        <p>There are no blog posts</p>  
    @endunless

   


