@if (count($errors)>0)
  <div class="alert alert-danger">
    <ol>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ol>
  </div>
@endif

@if (session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
@endif

@if (session('error'))
  <div class="alert alert-danger">
    {{session('error')}}
  </div>
@endif
