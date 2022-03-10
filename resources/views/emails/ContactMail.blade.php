<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Response Contact Form</title>
</head>
<body>
    <h1>Contact Message </h1>

    <p>Name: {{$details['name'] }}</p>

    <p>Email: {{$details['email'] }}</p>

    <p>Message: {{$details['text'] }}</p>
</body>
</html>