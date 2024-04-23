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
            <form action="{{route('commends.update',$commend)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="text" name="name" placeholder="name" value="{{$commend->name}}"/><br/>
                <input type="number" name="prix" placeholder="prix" value="{{$commend->prix}}"/><br/>
                <input type="file" name ="image" placeholder="image"><br/>
                <select name="client_id">
                    @foreach($clients as $client)
                    <option value="{{ $client->id }}" @if($client->name == $selectedClient) selected @endif>{{ $client->name }}</option>
                    @endforeach
                </select><br/>
                <button type="submit">submit</button>
            </form>
        </div>
    </center>   
</body>
</html>



