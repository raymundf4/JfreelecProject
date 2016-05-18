<!DOCTYPE html>
<html>
    <head>
        <title>Read</title>
        <meta charset="UTF-8">
        <style>
        table,thead,th,tr,td{
            border-collapse: collapse;
            border: 1px solid black;
            padding-left: 1.5em;

        }

        </style>
    </head>
    <body>
        <br><br>
        <h3><button><a href="create">Back to form</a></button></h3>
        <table style="width:100%">
            <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Operating System</th>
            <th>Show</th>
            <th>Update</th>
            <th>Delete</th>
           
            </thead>
            @foreach($user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->os}}</td>
                <td><a href="show/{{$user->id}}">Show</a></td>
                <td><a href="edit/{{$user->id}}">Update</a></td>
                <td><a href="delete/{{$user->id}}">Delete</a></td>

            </tr>
            @endforeach
        </table>     
    </body>
</html>
