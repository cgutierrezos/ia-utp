@extends('templates.template2')

@section('title', 'IA - UTP')

@section('body')

	@include('templates.nav2')


	<div id='main' class='wrapper style1'>
		<div class='container'>
			<section>
				<div class="table-wrapper">
				
					<h3>Tabla de Rutas Guardadas</h3>
					<table>
						<thead>
							<tr>
								<th>Inicio</th>
								<th>Destino</th>
								<th>Valor</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($edges as $key => $edge)
								<tr>
									<td><?php echo App\node::find($edge->nodei_id)->name ?></td>
									<td><?php echo App\node::find($edge->nodef_id)->name ?></td>
									<td><?php echo $edge->value ?></td>
									<td>
										<ul class="actions small">
											<li><a href="/animaciones/grafo/edge/destroy/<?php echo $edge->id?>" class="button special small" ><span>X</span></a></li>
										</ul>
									</td>
								</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<td>
									<ul class="actions small">
										<li><a href="/animaciones/ruta-corta/<?php echo $grafo ?>" class="button special small" ><span>Animar Grafo</span></a></li>
									</ul>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</section>
			
						
			<section>
				<h3>Ingreso Nueva Ruta</h3>
				<form method="post" action="/animaciones/grafo/update/<?php echo $grafo ?>">
					<div class="row uniform 50%">
						<div class="6u 12u$(xsmall)">
							<input type="text" name="inicio" id="inicio" value="" placeholder="Inicio">
						</div>
						<div class="6u$ 12u$(xsmall)">
							<input type="text" name="fin" id="fin" value="" placeholder="Fin">
						</div>
						<div class="12u$">
							<input type="text" name="valor" id="valor" value="" placeholder="Valor">
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