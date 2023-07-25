<x-guest-layout>
   <section class="login-content dark-mode">
      <div class="row m-0 align-items-center bg-dark vh-100">
         <div class="col-md-6">
            <div class="row justify-content-center">
               <div class="col-md-10">
                  <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card" style="background-color: transparent;">
                     <div class="card-body">
                        <a href="{{route('dashboard')}}" class="navbar-brand d-flex align-items-center mb-3">
                           <img src="../images/logo.png" alt="Logo">
                        </a>
                        <h2 class="mb-2 text-center text-white">Iniciar sesión</h2>
                        <p class="text-center text-white">Ingresa para mantenerte conectado.</p>
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Errores de validación -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('login') }}" data-toggle="validator">
                            {{csrf_field()}}
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label for="email" class="form-label text-white">Correo electrónico</label>
                                    <input id="email" type="email" name="email"  value="{{env('IS_DEMO') ? 'admin@example.com' : old('email')}}"   class="form-control"  placeholder="Email" required autofocus>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label for="password" class="form-label text-white">Contraseña</label>
                                    <input class="form-control" type="password" placeholder="********"  name="password" value="{{ env('IS_DEMO') ? 'password' : '' }}" required autocomplete="current-password">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <!-- <input type="checkbox" class="custom-control-input" id="customCheck1"> -->
                                    <label class="form-check-label text-white" for="customCheck1">Recordarme</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <a href="{{route('auth.recoverpw')}}"  class="float-end text-white">¿Olvidaste tu contraseña?</a>
                              </div>
                           </div>
                           <div class="d-flex justify-content-center">
                              <button type="submit" class="btn" style="background-color: #17a2b8; color: white;">{{ __('Iniciar sesión') }}</button>
                              <div style="margin-left: 10px;"></div>
                              <button type="button" class="btn" style="background-color: #17a2b8; color: white;">Huella Digital</button>
                           </div>
                           <p class="text-center my-3 text-white">o inicia sesión con otras cuentas:</p>
                           <div class="d-flex justify-content-center">
                              <ul class="list-group list-group-horizontal list-group-flush">
                                 <li class="list-group-item border-0 pb-0" style="background-color: transparent;">
                                    <a href="#"><img src="{{asset('images/brands/fb.svg')}}" alt="fb"></a>
                                 </li>
                                 <li class="list-group-item border-0 pb-0" style="background-color: transparent;">
                                    <a href="#"><img src="{{asset('images/brands/gm.svg')}}" alt="gm"></a>
                                 </li>
                                 <li class="list-group-item border-0 pb-0" style="background-color: transparent;">
                                    <a href="#"><img src="{{asset('images/brands/im.svg')}}" alt="im"></a>
                                 </li>
                                 <li class="list-group-item border-0 pb-0" style="background-color: transparent;">
                                    <a href="#"><img src="{{asset('images/brands/li.svg')}}" alt="li"></a>
                                 </li>
                              </ul>
                           </div>
                           <p class="mt-3 text-center text-white">
                              ¿No tienes una cuenta? <a href="{{route('auth.signup')}}" class="text-underline" style="color: #17a2b8;">Haz clic aquí para registrarte.</a>
                           </p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sign-bg">
               <svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.05">
                  <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF"/>
                  <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF"/>
                  <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 61.9355 138.545)" fill="#3B8AFF"/>
                  <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857" transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF"/>
                  </g>
               </svg>
            </div>
         </div>
         <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
            <img src="{{asset('images/auth/01.png')}}" class="img-fluid gradient-main animated-scaleX" alt="images">
         </div>
      </div>
   </section>
</x-guest-layout>
