@extends('templates.template2')

@section('title', 'IA - UTP')

@section('body')

	@include('templates.nav2')


	<div id='main' class='wrapper style1'>
		<div class='container'>
			<section>
				<div class="table-wrapper">
				
					<h3>Tabla de Grafos Guardados</h3>
					<table>
						<thead>
							<tr>
								<th>Id</th>
								<th>Nombre</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($grafos as $key => $grafo)
								<tr>
									<td><?php echo $grafo->id ?></td>
									<td><?php echo $grafo->name ?></td>
									<td>
										<ul class="actions small">
											<li><a href="/animaciones/grafo/edit/<?php echo $grafo->id?>" class="button small" ><span>Editar</span></a></li>

											<li><a href="/animaciones/grafo/destroy/<?php echo $grafo->id?>" class="button special small" ><span>Eliminar</span></a></li>
										</ul>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</section>
			
						
			<section>
				<h3>Ingreso Nuevo Grafo</h3>
				<form method="post" action="/animaciones/grafo/store">
					<div class="row uniform 50%">
						<div class="6u 12u$(xsmall)">
							<input type="text" name="nombre" id="nombre" value="" placeholder="Nombre del Grafo">
						</div>
						<div class="12u$">
							<ul class="actions">
								<li><input type="submit" value="Guardar" class="special"></li>
							</ul>
						</div>
					</div>
				</form>
			</section>
		</div>
	</div>
	

@endsection