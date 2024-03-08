<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-image: url('https://media.istockphoto.com/id/1403848173/es/vector/patr%C3%B3n-de-chat-en-l%C3%ADnea-vectorial-fondo-de-chat-en-l%C3%ADnea-sin-interrupciones.jpg?s=612x612&w=0&k=20&c=XUQwqGsD4vGUHZpeCgXxc0QSFIT32K2kE_XaVX77k6U=');
            background-size: 700px;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white; /* Set text color to contrast with the background */
        }

        form {
            background: rgba(0, 0, 0, 0.7); /* Add a semi-transparent background to the form */
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        label, input {
            margin-bottom: 10px;
        }
    </style>
    <title>Acceso a la app de mensajería</title>
</head>
<body>
    <h1>Acceso a la app de mensajería</h1>
    <form action="{{ url('login') }}" method="post">
        @csrf
        <label for="nombre">Nombre de usuario</label>
        <br>
        <input type="text" name="nombre" />
        <br>
       <input type="submit" value="Acceder" style="padding: 10px 20px; border-radius: 5px; background-color: #4CAF50; border: none; color: white; cursor: pointer;">

    </form>
</body>
</html>

</div>