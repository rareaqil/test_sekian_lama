<!-- <div class="d-inline"> -->
  <div class="container-fluid justify-content-center">
    <div class="d-flex flex-row align-self-center">
      <div class="col-2 p-1">
        <a class="nav-link text-center @if(Request()->segment(1) == 'home') active @endif" aria-current="page" href="{{ route('home') }}" style="background-color: rgb(120, 7, 7); color: white">Home</a>
      </div>
      <div class="col-2 p-1">
        <a class="nav-link text-center @if(Request()->segment(1) == 'beans') active @endif" href="{{ route('beans.index') }}" style="background-color: rgb(120, 7, 7); color: white">Catalog</a>
      </div>
      <div class="col-2 p-1">
        <a class="nav-link text-center @if(Request()->segment(1) == '#') active @endif" href="#" style="background-color: rgb(120, 7, 7); color: white">Order Status</a>
      </div>
      <div class="col-2 p-1">
        <a class="nav-link text-center @if(Request()->segment(1) == 'distributors') active @endif" href="{{ route('distributors.index') }}" style="background-color: rgb(120, 7, 7); color: white">Distributors</a>
      </div>
      <div class="col-2 p-1">
        <a class="nav-link text-center @if(Request()->segment(1) == 'files') active @endif" href="{{ route('files.index') }}" style="background-color: rgb(120, 7, 7); color: white">Upload</a>
      </div>
      <div class="col-2 p-1">
        <a class="nav-link text-center " href="{{ route('logout') }}" style="background-color: rgb(120, 7, 7); color: white">Logout</a>
      </div>
    </div>
  </div>
<!-- </div> -->