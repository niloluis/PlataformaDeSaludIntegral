<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Página de Primeros Auxilios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .gray-background {
            background-color: #f5f5f5;
            padding: 20px;
        }
        .image-container {
            float: left;
            margin-right: 20px;
        }
        .nav-link {
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Página de Primeros Auxilios</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="cursos.html">Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="comunidad.html">Comunidad</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aprendizajes.html">Aprendizajes</a>
            </li>
        </ul>
        <?php
        // Verifica si el usuario ha iniciado sesión
        $usuario_autenticado = false;

        if ($usuario_autenticado) {
            echo '<a href="#" class="btn btn-primary ml-2">Cerrar Sesión</a>';
        } else {
            echo '<a href="login.php" class="btn btn-primary ml-2">Iniciar Sesión</a>';
        }
        ?>
    </nav>

    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Bienvenido</h1>
            <p class="lead">En esta página encontrarás información útil sobre primeros auxilios.</p>
            <img src="imagen1.jpg" class="img-fluid" alt="Imagen 1">
            <img src="imagen2.jpg" class="img-fluid" alt="Imagen 2">
            <p>Otros detalles y contenido sobre primeros auxilios aquí.</p>
        </div>
    </div>

    <div class="container-fluid gray-background">
        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-4 image-container">
                        <img src="imagen3.jpg" class="img-fluid" alt="Imagen 3">
                    </div>
                    <div class="col-md-8">
                        <h2>¿Qué son los Primeros Auxilios?</h2>
                        <p>Los primeros auxilios son la asistencia inmediata, limitada y temporal que se brinda a personas que han sufrido un accidente o enfermedad repentina. Su objetivo es preservar la vida, prevenir el agravamiento de la lesión y promover la recuperación.</p>
                        <p>Los primeros auxilios pueden incluir maniobras de reanimación cardiopulmonar (RCP), control de hemorragias, inmovilización de fracturas, y más. Es importante conocer los principios básicos de los primeros auxilios para poder actuar con rapidez y eficacia en situaciones de emergencia.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="container mt-4">
        <section>
            <h2>Categorías de Primeros Auxilios</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="categoria1.jpg" class="card-img-top" alt="Categoria 1">
                        <div class="card-body">
                            <h5 class="card-title">RCP</h5>
                            <p class="card-text">Aprende a realizar reanimación cardiopulmonar (RCP) de manera efectiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="categoria2.jpg" class="card-img-top" alt="Categoria 2">
                        <div class="card-body">
                            <h5 class="card-title">Control de Hemorragias</h5>
                            <p class="card-text">Conoce las técnicas para controlar hemorragias en situaciones de emergencia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="categoria3.jpg" class="card-img-top" alt="Categoria 3">
                        <div class="card-body">
                            <h5 class="card-title">Inmovilización</h5>
                            <p class="card-text">Aprende cómo inmovilizar fracturas y lesiones de manera segura.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container mt-4">
        <section>
            <h2>Tipos de Curso</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="curso1.jpg" class="card-img-top" alt="Curso 1">
                        <div class="card-body">
                            <h5 class="card-title">Curso de RCP</h5>
                            <p class="card-text">Aprende y practica reanimación cardiopulmonar (RCP) en nuestro curso especializado.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="curso2.jpg" class="card-img-top" alt="Curso 2">
                        <div class="card-body">
                            <h5 class="card-title">Curso de Primeros Auxilios Básicos</h5>
                            <p class="card-text">Adquiere conocimientos esenciales en nuestro curso de primeros auxilios básicos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="curso3.jpg" class="card-img-top" alt="Curso 3">
                        <div class="card-body">
                            <h5 class="card-title">Curso de Control de Hemorragias</h5>
                            <p class="card-text">Domina las técnicas de control de hemorragias en situaciones de emergencia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
