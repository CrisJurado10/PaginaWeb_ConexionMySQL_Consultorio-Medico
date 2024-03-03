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
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat enim deleniti ipsa voluptas placeat distinctio iste eveniet sequi laboriosam blanditiis, beatae possimus ab rerum natus eum. Quia ducimus praesentium nulla.
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae numquam eos esse, labore minus, facilis voluptates voluptas, expedita doloribus optio sequi ea ut libero accusantium natus delectus laboriosam nisi magni?
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae numquam eos esse, labore minus, facilis voluptates voluptas, expedita doloribus optio sequi ea ut libero accusantium natus delectus laboriosam nisi magni?
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