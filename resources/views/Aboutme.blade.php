<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="https://res.cloudinary.com/dhgmho4qd/image/upload/v1725843274/logo1_xezyt6.png"
    />
    <title>CONTACTAME</title>
    <!-- FONT AWESOME -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/684e0b1a70.js" crossorigin="anonymous"></script>
    <!-- ANIMATE CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Corben:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Corben:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/aboutme.css" />
  </head>
  <body>
    <nav>
      <h1 class="boton"><a href="/">INICIO</a></h1>
    </nav>
   
    <form action="{{route('aboutme.store')}}" method="POST">
      @csrf
    <section class="contenedor">
      <h1 class="logo">CONTAC<span>TAME</span></h1>
        <div class="contacto-contenedor">
            <article class="formulario">
        <p>
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" />
        </p>
        <p>
          <label>Correo</label>
          <input type="email" name="correo" />
        </p>
        <p>
          <label>Telefono</label>
          <input type="tel" name="telefono" />
        </p>
        <p class="block">
          <label>Mensaje</label>
          <textarea name="Asunto" rows="3"></textarea>
        </p>
        <p class="block">
          <button type="submit">Enviar</button>
        </p>
            </article>
        </div>
    </section>
  </form>
  
        <div class="informacion">
          <h3>Informacion</h3>
          <ul>
            <li><i class="fa-solid fa-location-dot"></i>Colombia</li>
            <li><i class="fa-solid fa-phone"></i>668 665 66</li>
            <li><i class="fa-solid fa-envelope"></i>geruhstories@gmail.com</li>
          </ul>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut iusto
            laborum nam a officia molestias modi, eaque molestiae deleniti in!
          </p>
          <p>Geruh Youtube</p>
        </div>
      </div>
    </section>
    <section class="background">
        <div class="video">
          <video src= "https://res.cloudinary.com/dhgmho4qd/video/upload/v1729563433/back_about_dn8l3j.mp4" autoplay muted loop></video>
        </div>
      </section>
      <footer class="pie">
        <div class="grupo1">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
      </footer>
  </body>
</html>
