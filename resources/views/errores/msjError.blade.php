@if(!$errors->isEmpty())
    <div class="alert alert-danger">
    	<p><strong>!Oops</strong>Tienes el siguiente error:</p>
        <ul>
          @foreach($errors->all() as $error)
           	<li>{{ $error }}</li>
          @endforeach
        </ul>
     </div>
@endif

@if(session('mensaje'))
  <div class="alert alert-danger alert-dimissible">
    <p><strong>!Oops</strong>Tienes el siguiente error:</p>
      <li>{{ session('mensaje') }}</li>
  </div>
@endif

@if(session('mensaje2'))
  <div class="alert alert-success alert-dimissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <p class="glyphicon glyphicon-ok"></p>{{ session('mensaje2') }}
  </div>
@endif