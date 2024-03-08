@php
    $session = Session();
    $nombre = $session->get('nombre');
@endphp

<div style="background-image: url('https://media.istockphoto.com/id/1403848173/es/vector/patr%C3%B3n-de-chat-en-l%C3%ADnea-vectorial-fondo-de-chat-en-l%C3%ADnea-sin-interrupciones.jpg?s=612x612&w=0&k=20&c=XUQwqGsD4vGUHZpeCgXxc0QSFIT32K2kE_XaVX77k6U='); background-size: 700px; background-position: center; height: 100vh; margin: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; color: white;">

    
    <div style="background-color: rgba(0, 0, 0, 0.7); padding: 20px; border-radius: 10px; text-align: center;">

        <h1>Mensajes del chat. Bienvenido {{ $nombre }}</h1>

        <div id="contenedorMensajes"></div>

      
        <div style="margin-top: 20px;">
            <input type="text" id="textoUsuario" name="textoUsuario" style="padding: 10px; border-radius: 5px; border: none; margin-right: 10px; width: 300px;">
            <button onclick="enviarMensaje()" style="padding: 10px 20px; border-radius: 5px; background-color: #4CAF50; border: none; color: white; cursor: pointer;">Enviar</button>
            <button onclick="mostrarMensajes()" style="padding: 10px 20px; border-radius: 5px; background-color: #008CBA; border: none; color: white; cursor: pointer;">Actualizar mensajes</button>
        </div>

    
        <form action="{{ url('/logout') }}" method="post" style="margin-top: 20px;">
            @csrf
            <button type="submit" style="padding: 10px 20px; border-radius: 5px; background-color: #f44336; border: none; color: white; cursor: pointer;">Cerrar Sesión</button>
        </form>
    </div>

   
    <script>
        setInterval(mostrarMensajes, 5000); 
    </script>
</div>
