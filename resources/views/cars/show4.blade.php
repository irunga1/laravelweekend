<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <title> {{$tittle}} </title>
</head>
<body>
<h1> {{$tittle}}</h1>
@if(count($info) >0)
	<h2>Cantidad de Vehiculos {{count($info)}}</h2>
	<ul>
	@foreach($info as $data)
		<li>{{$data['id']}}</li>
		<li>{{$data['make']}}</li>
		<li>{{$data['model']}}</li>
		<li>{{$data['produced_on']}}</li>
		<hr />
	@endforeach
	</ul>
@else
	<h2>No hay registros</h2>
@endif	

</body>
</html>