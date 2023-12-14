@extends('layout.main')


@section('title', 'Home')



@section('content')
  

@endsection



<!DOCTYPE html>
<html>
<head>
<style>

p {
  text-indent: 20px;
}

/* First part of the body specification (Michael Angelo's picture): Beginnig */
.munch-destaque-image {
  background: url(munch-destaque.jpg) no-repeat center; 
  background-size: cover;
  height: 638px;
  width: 1200px;
  
}

.munch-destaque-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

h1 {
  color: white;
  text-shadow: 2px 2px 4px yellow;
}

h2 {
  color: purple;
  text-shadow: 2px 2px 4px purple;
}


</style>
</head>
<body>


<div class="row">
  <div class="leftcolumn">
  <div class="munch-destaque-image">
  <div class="munch-destaque-text">
    <h1 style="font-size:50px">Obras em Leilão</h1>
    <h2 style="font-size:30px">A plataforma mais segura de leilões online</h2>

  </div>
</div>



</body>
</html>