<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
        <link rel="stylesheet" href="{{asset('assets/login.css')}}">
    </head>

    <body>
      <section class="h-100 gradient-form" style="background-color: #64c2da;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
                   

                      <div class="text-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9w4LtDtlUe64aMZ7pW-V1z6YcZ6Zsit9EpeKhIe_Hpg&s"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">City Tours</h4>
                      </div>
      
                      <form method="post" action="login">
                        <p>Please login to your account</p>
                        
                        @csrf

                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="email" name="email" id="form2Example11" class="form-control"
                            placeholder="Phone number or email address" />
                          <label class="form-label" for="form2Example11">Username</label>
                        </div>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="password" name="password" id="form2Example22" class="form-control" />
                          <label class="form-label" for="form2Example22">Password</label>
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">INGRESAR
                            </button>
                          <!--<a class="text-muted" href="#!">Forgot password?</a>-->
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Aun no tienes una cuenta?</p>
                          <a href="{{ route('register') }}" class="btn btn-outline-danger" data-mdb-button-init data-mdb-ripple-init>registrarse</a>

                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">We are more than just a company</h4>
                      <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        
    </body>
</html>