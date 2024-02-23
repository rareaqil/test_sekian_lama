<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{!! asset('public/css/images/morich.gif') !!}"/>
    <title>Kopi Valley</title>
    @include('layout.css_global')
  </head>
  <body>
    <div class="wrapper bg-light">
      <div class="main-wrapper bg-light">
        <div class="container min-vh-100 d-flex align-items-center justify-content-center bg-light">
          <div class="card bg-white" style="min-width: 50%">
            <div class="card-body">
              <div class="d-grid">
                <div class="d-inline-flex justify-content-center">
                  <!-- <img src="{!! asset('public/css/images/morich.gif') !!}" class="img-fluid"> -->
                </div>
                <div class="d-flex flex-column pb-5">
                  <div class="p-0">
                    <h2 class="title">Coffee Valley</h2>
                  </div>
                  <div class="p-0">
                    <span>Taste the love in every cup!</span>
                  </div>
                  <div class="p-0">
                    <span>One Alewife Center 3rd Floor</span>
                  </div>
                  <div class="p-0">
                    <span>Cambridge, MA 02140</span>
                  </div>
                </div>
                <form action="login">
                  @csrf
                  <div class="d-flex flex-row gap-2 pt-1">
                    <div class="col-4">
                      <span style="vertical-align: middle;">User ID</span>
                    </div>
                    <div class="col-8">
                      <input id="username" name="username" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="d-flex flex-row gap-2 pt-1">
                    <div class="col-4">
                      <span style="vertical-align: middle;">Password</span>
                    </div>
                    <div class="col-8">
                    <input id="password" name="password" type="password" class="form-control" autocomplete="false">
                    </div>
                  </div>
                  <div class="d-flex flex-row align-self-center">
                    <div class="p-1">
                      <span id="loginErrorMessage" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="d-flex flex-row-reverse pt-1">
                    <input type="submit" class="btn btn-light" value="Login">
                  </div>
                </form>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>