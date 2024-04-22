<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>commande</th>
            <th>prix</th>
            <th>image</th>
            <th>client</th>
        </tr>
        @foreach($commends as $commend)
            <tr>
                <td>
                    {{$commend->name}}
                </td>
                <td>
                    {{$commend->prix}}
                </td>
                <td>
                    <img src="{{asset('image/'. $commend->image)}}" alt="mac" width="100">
                </td>
                <td>
                    {{$commend->Client->name}}
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
