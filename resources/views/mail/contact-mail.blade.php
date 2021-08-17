<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="display-3">You have a contact message from resturant</h1>
    <p>Subject of message: {{$data['subject']}}</p>
    <p>Name: {{$data['name']}}</p>
    <p>Email to reply: {{$data['email']}}</p>
    <p>Message: {{$data['message']}}</p>
</body>
</html>
