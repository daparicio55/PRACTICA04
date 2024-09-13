<?php
$producto1 = [
    'img' => 'resources/img/01.PNG',
    'titulo' => 'Producto 1',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$producto2 = [
    'img' => 'resources/img/02.PNG',
    'titulo' => 'Producto 2',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$producto3 = [
    'img' => 'resources/img/03.PNG',
    'titulo' => 'Producto 3',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
];
$productos = [$producto1, $producto2, $producto3];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <!-- menu de navegacion -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- logo de la marca -->
        <a class="navbar-brand" href="#">
            <img src="resources/img/logo.png" alt="" style="width: 35px;"> IESTP "Perú Japón"
        </a>
    </nav>
    <!-- imagen principal -->
    <section class="border mt-1" style="height: 150px;">
        <h1 class="text-center mt-4">Mis Productos</h1>
    </section>
    <!-- card de productos -->
    <section>
        <div class="container mt-4">
            <div class="row">
                <?php foreach ($productos as $producto) { ?>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <img src="<?php echo $producto['img'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $producto['titulo'] ?></h5>
                                <p class="card-text"><?php echo $producto['descripcion'] ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Ver mas</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>
    <sript src="resources/bootstrap/js/bootstrap.min.js">
        </script>
</body>

</html>