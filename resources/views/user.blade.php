<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table > thead , tbody > tr > td , th{
        padding : 15px !important;
    }
</style>
<body>



<table border="1" style="padding: 5px;text-align: center">
    <thead>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>age</th>
        <th>uni</th>
    </tr>
    </thead>
    <tbody>

{{--        {{print_r(json_decode(json_encode($allUser) , true))}}--}}
    @foreach(json_decode(json_encode($allUser) , true) as $item)

        <tr>
            <td>
                <a href="{{route('single', $item['id'])}}">{{$item['name']}}</a>
            </td>
            <td>
                {{$item['email']}}
            </td>
            <td>
                {{$item['age']}}
            </td>
            <td>
                {{$item['uni']}}
            </td>

        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
