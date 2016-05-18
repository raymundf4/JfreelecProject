<!DOCTYPE html>
<html>
    <head>
        <title>Crud</title>
    </head>
    <body>

        <form action="store" method="post">
            <label for="name">Name</label>
            <input type="text" name="name"><br/>
             <label for="email">Email</label>
            <input type="text" name="email"><br/>
             <label for="mobile">Mobile</label>
            <input type="text" name="mobile"><br/>

            <input type="radio" name="gender" value="male">Male<br/>
            <input type="radio" name="gender" value="female">female<br/>

            <select name="os" id="os">
                <option value="windows">Windows</option>
                <option value="linux">Linux</option>
                <option value="mac">Mac</option>                   
            </select><br/>

            <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
            <input type="submit" name="submit" value="Submit">
        </form>
       
    </body>
</html>
