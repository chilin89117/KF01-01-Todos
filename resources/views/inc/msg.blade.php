@if (count($errors)>0)
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <ol>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ol>
</div>
@endif

@if (session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{session('success')}}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{session('error')}}
</div>
@endif
