@extends('cars.master')
@section('content1')
<h1> {{$tittle}} </h1>


@if(count($info1) == 0 )
	<h1>no info</h1>
@else()
<ul class ='list-group'>
	@foreach($info1 as $data)
		<li class='list-group-item'>Nombre:{{$data['name']}}</li> 
		<li class='list-group-item'>Edad:{{$data['age']}} </li>
		<li class='list-group-item'>Cantidad de lenguajes:{{count($data['langs'] )}} </li>
		@if( count($data['langs'])>0 )
			<li class='list-group-item'>Lenguajes:@foreach($data['langs'] as $lang )
				{{$lang}},
			@endforeach	</li>
		
		@else
			<li class='list-group-item'>No hay Lenguajes</li>
		@endif	
		
		<br />
	@endforeach
</ul>
@endif
@stop


