<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header class="header">

        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div class="header-content container">
            <div class="header-txt">
                <h1>Clinica de Cristian Jurado</h1>
                <p>
                En la Clínica de Cristian Jurado, nos esforzamos por ofrecer un enfoque integral para la salud y el bienestar. Nuestro equipo multidisciplinario trabaja en estrecha colaboración para brindar un cuidado personalizado y centrado en el paciente. Desde el momento en que entra por nuestras puertas, nuestro objetivo es garantizar que reciba la atención médica que se merece.
                </p>
                <a href="#" class="btn-1">informacion</a>
            </div>
            <div class="header-img">
                <img src="images/left.png" alt="error">
            </div>
        <div>

        </div>

    </header>

    <section class="about container">
        <div class="about-img">
            <img src="images/about.png" alt="sierror">
        </div>
        <div class="about-txt">
            <h2>Nosostros</h2>
            <p>
            En la Clínica de Cristian Jurado, nos dedicamos a proporcionar atención médica de la más alta calidad a nuestros pacientes. Con un equipo de profesionales altamente calificados y tecnología de vanguardia, nos esforzamos por ofrecer un ambiente cálido y acogedor donde nuestros pacientes se sientan seguros y bien atendidos.


            <br>
            <p>
            Nuestra clínica ofrece una amplia gama de servicios médicos, que incluyen atención primaria, especialidades médicas, servicios de laboratorio y diagnóstico, así como atención preventiva y de bienestar. Desde consultas médicas de rutina hasta tratamientos especializados, estamos comprometidos a satisfacer las necesidades de salud de toda nuestra comunidad.
            </p>
        </div>

    </section>

    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Pediatria</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>Ginecologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>Dermatologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>Cardiologia</h3>
            </div>

        </div>

    </main>


    <section class="formulario">

        <form method="post" autocomplete="off"> 

            <h2>Agenda Consulta</h2>

            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="Nombre" placeholder="Ingresa tu nombre y apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Ingresa tu numero celular">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Ingresa tu correo electronico">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta" ></textarea>
                </div>

                <input type="submit" name="send" class="btn" onClick="myFunction()">
            </div>

        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">

            <div class="link">
                <a href="#" class="logo">Logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>

        </div>

    </footer>

    <?php
        include("send.php");
    ?>

    <script>
        function myFunction(){
            window.location.href="http://localhost/pagina"
        }
    </script>
    
</body>
</html>