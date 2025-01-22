<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <h2>L'utente: {{$name}} {{$email}}</h2>
            <p>Scrive: {{$feedbackMessage}}</p>
        </div>
    </div>
</body>
</html>