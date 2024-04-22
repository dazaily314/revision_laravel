<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <div>
            <form action="{{route('commends.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" placeholder="name"/><br/>
                <input type="number" name="prix" placeholder="prix"/><br/>
                <input type="file" name ="image" placeholder="image"><br/>
                <select name="client_id">
                    @foreach($clients as $client)
                        <option value="{{$client->id}}">{{$client->name}}</option>
                    @endforeach
                </select><br/>
                <button type="submit">submit</button>
            </form>
        </div>
    </center>   
</body>
</html>


