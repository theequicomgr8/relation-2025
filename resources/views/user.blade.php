<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
 <div class="container">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Role</th>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->concatenated_roles }}</td>
        </tr>
        @endforeach 
    </table>
 </div>   
</body>
</html>