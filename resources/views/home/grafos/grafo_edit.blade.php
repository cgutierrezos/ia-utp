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
											<li><a href="/animaciones/grafo/edge/destroy/<?php echo $edge->grafo_id ?>/<?php echo $edge->id ?>" class="button special small" ><span>X</span></a></li>
										</ul>
									</td>
								</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<td>
									<form method="get" action="/animaciones/ruta-corta/<?php echo $grafo ?>">
										<div class="row uniform 50%">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="inicio_ruta" id="inicio_ruta" value="" placeholder="Nodo Inicio">
												@if ($errors->has('inicio_ruta'))
					                                <span class="help-block">
					                                    <strong>{{ $errors->first('inicio_ruta') }}</strong>
					                                </span>
					                            @endif
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="fin_ruta" id="fin_ruta" value="" placeholder="Nodo Fin">
												@if ($errors->has('fin_ruta'))
					                                <span class="help-block">
					                                    <strong>{{ $errors->first('fin_ruta') }}</strong>
					                                </span>
					                            @endif
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Animar Grafo" class="special"></li>
												</ul>
											</div>
										</div>
									</form>
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
							@if ($errors->has('inicio'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('inicio') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="6u$ 12u$(xsmall)">
							<input type="text" name="fin" id="fin" value="" placeholder="Fin">
							@if ($errors->has('fin'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fin') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="12u$">
							<input type="text" name="valor" id="valor" value="" placeholder="Valor">
							@if ($errors->has('valor'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('valor') }}</strong>
                                </span>
                            @endif
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