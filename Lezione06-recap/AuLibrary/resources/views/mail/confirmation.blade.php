<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation Mail</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>
                    Benvenuto {{$name}},
                    la tua mail è stata inviata con successo
                </h2>
                <h3>Riassunto della tua mail:</h3>
                <h4>
                    L'utente: {{$name}} {{$email}}
                    Scrive: {{$feedbackMessage}}
                </h4>
            </div>
        </div>
    </div>
</body>
</html>