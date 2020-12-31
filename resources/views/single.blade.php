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

        <h1>name :</h1> <span>{{json_decode(json_encode($data) , true)['name']}}</span>
        <h1>age :</h1> <span>{{json_decode(json_encode($data) , true)['age']}}</span>
        <h1>univercity :</h1> <span>{{json_decode(json_encode($data) , true)['univercity']}}</span>
        <h1>email :</h1> <span>{{json_decode(json_encode($data) , true)['email']}}</span>


</body>
</html>
