<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="cont">
        <div class="card text  mb-3">
            <div class="card-body">
                <img src="{{asset('img/svg/user.svg')}}" alt="">
                <span class="text">Clientes</span>
            </div>
        </div>
        <div class="card text  mb-3">
            <div class="card-body">
                <img src="{{asset('img/svg/renew.svg')}}" alt="">
                <span class="text">Renovados</span>
            </div>
        </div>
        <div class="card text  mb-3">
            <div class="card-body">
                <img src="{{asset('img/svg/cancel.svg')}}" alt="">
                <span class="text">Cancelados</span>
            </div>
        </div>
        <div class="card text  mb-3">
            <div class="card-body">
                <img src="{{asset('img/svg/pause.svg')}}" alt="">
                <span class="text">Pausados</span>
            </div>
        </div>
    </div>
    <div>

    </div>

    <div>
        <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="car carousel-item active">
                    <div class="mb-3 position-relative">
                        <div class="color-box">
                            <div class="overlay-t">
                                <h5><B>Lo ultimo para el 2023</B></h5>
                                <p>¿Ya estas listo para este 2023 y todo lo que depara en materia tecnologia?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="car carousel-item">
                    <div class="mb-3 position-relative">
                        <div class="color-box">
                            <div class="overlay-t">
                                <h3>Título del texto</h3>
                                <p>Texto descriptivo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="car carousel-item">
                    <div class="mb-3 position-relative">
                        <div class="color-box">
                            <div class="overlay-t">
                                <h3>Título del texto</h3>
                                <p>Texto descriptivo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="2"></li>
            </ol>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    // Configuración del carrusel para que se mueva automáticamente
    const carousel = document.querySelector('#carouselExampleControls');
    const carouselInstance = new bootstrap.Carousel(carousel, {
        interval: 5000, // Cambia el valor a la cantidad de milisegundos que desees
        wrap: true
    });
</script>

</html>