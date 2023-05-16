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
                    <video class="w-100" autoplay muted loop>
                        <source src="https://vid.cdn-website.com/bae3e0e8/videos/ShtLas8RKGMj17JHxvDg_Oficina+-+69952-v.mp4" type="video/mp4">
                    </video>
                    <div class="overlay">
                    <img src="{{asset('img/sc1.png')}}" alt="Imagen" class="center imgs">
                    </div>
                </div>
    
            </div>
            <div class="col-sm-6 text-black">
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    <form class="mx-auto text-center" style="width: 23rem;" action="{{ route('register.save') }}" method="POST" >
                        @csrf
                        <div class="text1">
                            <h5 class="fw-normal" style="letter-spacing: 1px;">¡Hola, que bueno verte de nuevo!</h5>
                            <h5><B>Iniciar sesión</B></h5>
                        </div>
                        <div class="form-outline mb-4">
                            <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror" id="exampleInputName" placeholder="Name">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <input name="last_name" type="text" class="form-control form-control-user @error('lastName')is-invalid @enderror" id="exampleInputLast_name" placeholder="LastName">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <input name="email" type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email" />
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <input name="password" type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Contraseña" />
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <input name="password_confirmation" type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Repeat Password">
                            @error('password_confirmation')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="pt-3 mb-4">
                            <button class="btn button btn-lg btn-block w-100" type="submit" >iniciar sesión</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>