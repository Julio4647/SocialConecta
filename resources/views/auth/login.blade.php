<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/login.css')}}">
</head>
<body>
<section class="vh-100 fixed-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <div class="video-container video-wrapper">
                    
                    <img class="w-100 h-100" src="https://lirp.cdn-website.com/bae3e0e8/dms3rep/multi/opt/ShtLas8RKGMj17JHxvDg_Oficina+-+69952.v2.0000000-1920w.jpg" alt="">
                    <div class="overlay">
                    <img src="{{asset('img/Recurso 1@2x.png')}}" alt="Imagen" class="center imgs">
                    </div>
                </div>
    
            </div>
            <div class="col-sm-6 text-black">
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    <form class="mx-auto text-center" style="width: 23rem;" action="{{ route('login.action') }}" method="POST" >
                        @csrf
                        @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="text1 ">
                            <h5 class="fw-normal letras" style="letter-spacing: 1px;">¡Hola, que bueno verte de nuevo!</h5>
                            <h5 class="letras"><B>Iniciar sesión</B></h5>
                        </div>
                        <div class="form-outline mb-4">
                            <input name="email" type="email" id="inputEmail" class="form-control form-control-lg letras" placeholder="Email" />
                        </div>
                        <div class="form-outline mb-4">
                            <input name="password" type="password" id="inputPassword" class="form-control form-control-lg letras" placeholder="Contraseña" />
                        </div>
                        <div class="pt-3 mb-4">
                            <button class="btn button btn-lg btn-block w-100 letras letras-button" type="submit" >Iniciar sesión</button>
                        </div>
                        <div style="text-align: left;">
                            <p class="small mb-5 pb-lg-2"><a class="text-muted letras letras-reset" href="{{ route('resetPassword')}}">¿Olvidaste tu contraseña?</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>