<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<style>
    .no-scroll {
        overflow: hidden;
        position: fixed;
    }
</style>

<body style="no-scroll">
    <div style="no-scroll">

        <div class="cont">
            <div class="card text mb-3 col">
                <div class="card-body">
                    <img src="{{ asset('img/svg/user.svg') }}" alt="">
                    <span class="text">Clientes</span>
                </div>
            </div>
            <div class="card text mb-3 col">
                <div class="card-body">
                    <img src="{{ asset('img/svg/renew.svg') }}" alt="">
                    <span class="text">Renovados</span>
                </div>
            </div>
            <div class="card text mb-3 col">
                <div class="card-body">
                    <img src="{{ asset('img/svg/cancel.svg') }}" alt="">
                    <span class="text">Cancelados</span>
                </div>
            </div>
            <div class="card text mb-3 col">
                <div class="card-body">
                    <img src="{{ asset('img/svg/pause.svg') }}" alt="">
                    <span class="text">Pausados</span>
                </div>
            </div>
        </div>
        <div>

        </div>
        <div style="margin-top: 15px;" class="dblog">
            <div>
                <h3><B>Noticias Blog</B></h3>
            </div>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="carousel-image-overlay">
                            <img src="{{ asset('img/Recurso 1@2x.png') }}" class=" " alt="...">
                            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <div class="carousel-image-overlay">
                            <img src="{{ asset('img/Recurso 1@2x.png') }}" class=" " alt="...">
                            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="10000">
                        <div class="carousel-image-overlay">
                            <img src="{{ asset('img/Recurso 1@2x.png') }}" class=" " alt="...">
                            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div>

            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script>
    // Configuración del carrusel para que se mueva automáticamente
    const carousel = document.querySelector('#carouselExampleControls');
    const carouselInstance = new bootstrap.Carousel(carousel, {
        interval: 5000, // Cambia el valor a la cantidad de milisegundos que desees
        wrap: true
    });
</script>

</html>
