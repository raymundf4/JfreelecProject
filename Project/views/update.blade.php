<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
    </head>
    <body>

        <form action="{{URL::to('update')}}" method="post">
            


            <label for="name">Name</label>
            <input type="text" name="name" value="{!!$user->name !!}"><br/>
             <label for="email">Email</label>
            <input type="text" name="email" value="{!!$user->email!!}"><br/>
             <label for="mobile">Mobile</label>
            <input type="text" name="mobile" value="{!!$user->mobile!!}"><br/>

            Gender<br/><input type="radio" name="gender" value="{!!$user->gender!!}">Male<br/>
            <input type="radio" name="gender" value="{!!$user->gender!!}">female<br/>

            <select name="os" id="os">
                <option value="{!!$user->os!!}">Windows</option>
                <option value="{!!$user->os!!}">Linux</option>
                <option value="{!!$user->os!!}">Mac</option>                   
            </select><br/>

            <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
            <input type="submit" name="update" value="Update">
        </form>
       
    </body>
</html>
