@extends('layouts.auth')
@section('content')
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <a href="/" class="logo float-left">
                <img src="{{ asset('image/logo_d.png') }}" height="60" alt="{{ env('EMPRESA') }}" />
            </a>

            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-end">
                    <h2 class="title text-uppercase font-weight-bold m-0"><i
                            class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Iniciar sesión</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Correo o Usuario</label>
                            <div class="input-group">
                                {{-- <input name="username" type="text" class="form-control form-control-lg" /> --}}
                                {{-- <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                                <input id="email" type="text"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                <span class="input-group-text">
                                    <i class="bx bx-user text-4"></i>
                                </span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="clearfix">
                                <label class="float-left">Contraseña</label>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link float-end" href="{{ route('password.request') }}">
                                        Olvidó su contraseña?
                                    </a>
                                @endif
                            </div>
                            <div class="input-group">
                                {{-- <input name="pwd" type="password" class="form-control form-control-lg" /> --}}
                                <input id="password" type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">
                                <span class="input-group-text">
                                    <i class="bx bx-lock text-4"></i>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">

                            <div class="col-sm-5 text-end">
                                <button type="submit" class="btn btn-primary">
                                    Iniciar sesión
                                </button>
                            </div>
                        </div>
                        <span class="mt-3 mb-3 line-thru text-center text-uppercase">
                            <span><img src="image/logo_dv1.png" style="width: 5%"></span>
                        </span>
                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-3 mb-3">&copy; {{ date('Y') }}. Todos los derechos reservados,
                {{ config('app.name') }}.</p>
        </div>
    </section>
    <!-- end: page -->
@endsection
