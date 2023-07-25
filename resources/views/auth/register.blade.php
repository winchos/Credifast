<x-guest-layout>
   <section class="login-content">
      <div class="row m-0 align-items-center bg-dark vh-100">            
         <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
            <img src="{{asset('images/auth/05.png')}}" class="img-fluid gradient-main animated-scaleX" alt="images">
         </div>
         <div class="col-md-6">           
            <div class="row justify-content-center">
               <div class="col-md-10">
                  <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0 bg-transparent">
                     <div class="card-body">
                        <a href="{{route('dashboard')}}" class="navbar-brand d-flex align-items-center mb-3">
                           <img src="../images/logo.png" alt="Logo">
                        </a>
                        <h2 class="mb-2 text-center">Registrarse</h2>
                        <p class="text-center">Crea tu cuenta de {{env('APP_NAME')}}.</p>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                    <!-- Errores de validación -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{route('register')}}" data-toggle="validator">
                        {{csrf_field()}}
                       <div class="row">
                          <div class="col-lg-6">
                             <div class="form-group">
                                <label for="full-name" class="form-label">Nombre completo</label>
                                <input id="name"  name="first_name" value="{{old('first_name')}}" class="form-control" type="text" placeholder=" "  required autofocus >
                             </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="form-group">
                                <label for="last-name" class="form-label">Apellido</label>
                                <input class="form-control" type="text" name="last_name" placeholder=" " value="{{old('last_name')}}" required>
                             </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="form-group">
                                   <label>Email <span class="text-danger">*</span></label>
                                   <input class="form-control" type="email" placeholder=" " id="email"  name="email" value="{{old('email')}}" required>
                             </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="form-group">
                                <label for="phone" class="form-label">Teléfono</label>
                                <input class="form-control" type="text" name="phone_number" placeholder=" ">
                             </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="form-group">
                                <label for="password" class="form-label">Contraseña</label>
                                <input class="form-control" type="password" placeholder=" " id="password" name="password" required autocomplete="new-password" >
                             </div>
                          </div>
                          <div class="col-lg-6">
                             <div class="form-group">
                                <label for="confirm-password" class="form-label">Confirmar contraseña</label>
                                <input id="password_confirmation" class="form-control" type="password" placeholder=" " name="password_confirmation" required >
                             </div>
                          </div>
                          <div class="d-flex justify-content-center">
                             <div class="form-check mb-3">
                                <label class="form-check-label" for="customCheck1">Acepto los términos de uso</label>
                                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                             </div>
                          </div>
                       </div>
                       <div class="d-flex justify-content-center">
                          <button type="submit" class="btn btn-primary"> {{ __('Registrarse') }}</button>
                       </div>
                       <p class="text-center my-3">¿O iniciar sesión con otras cuentas?</p>
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
                       <p class="mt-3 text-center">
                          ¿Ya tienes una cuenta?  <a href="{{route('auth.signin')}}" class="text-underline">Iniciar sesión</a>
                       </p>
                    </form>
                 </div>
              </div> 
           </div>
        </div>    
        <div class="sign-bg sign-bg-right">
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
  </div>
   </section>
</x-guest-layout>
