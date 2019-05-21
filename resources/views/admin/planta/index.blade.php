@extends('adminlte::page')

@section('title', 'Plantas')

@section('content_header')
    <h1>Plantas <small>Listagem de Plantas</small></h1>
@stop

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				
				<!-- /.box-header -->
				<div class="box-header with-border">
					<div class="btn-group">
						<a class="btn btn-block btn-info " href="{{ route('planta.add.get')}}" role="button" title="Adicionar">
							Adicionar <i class="fa fa-plus"></i>
						</a>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					@if (session()->has('sucesso'))
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Sucesso!</h4>
						{{ session('sucesso') }}
					</div>
					@endif
					@if (session()->has('erro'))
					<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Erro!</h4>
						{{ session('erro') }}
					</div>
					@endif
					<div class="box-body table-responsive no-padding">
						<table class="table table-bordered text-center">
							<tbody>
								<tr>
									<th style="min-width: 10px !important;vertical-align:middle;" class="align-middle">#</th>
									<th style="vertical-align:middle;" class="align-middle">Nome Científico</th>
									<th style="vertical-align:middle;" class="align-middle">Nome Popular</th>
									<th style="vertical-align:middle;" style="width: 40px;" class="align-middle">Ações</th>
								</tr>
								@foreach($plantas as $planta)
								<tr>
									<td style="vertical-align:middle;" class="align-middle">{{ $planta->id }}</td>
									<td style="vertical-align:middle;" class="align-middle">{{ $planta->nome_cientifico }}</td>
									<td style="vertical-align:middle;" class="align-middle">{{ $planta->nome_popular }}</td>
									<td style="vertical-align:middle;" class="text-center align-middle">
										<div style="display:block;min-width:50px !important;">
										<form class="delete" action="{{ route('planta.delete', $planta->id)}}" method="POST">	
											<a class="btn btn-info btn-xs" style="" href="{{ route('planta.find_by_id.get', $planta->id)}}" role="button" title="Ver"><i class="fa fa-eye"></i></a>
											<!-- <a class="btn btn-danger btn-ms" href="{{ route('planta.delete', $planta->id)}}" role="button" title="Excluir" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i></a> -->
											<!-- <button type="button" class="btn btn-danger btn-ms" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i></button> -->										
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger btn-xs .delete" title="Excluir"><i class="fa fa-trash"></i></button>
											</form>
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">
					{{ $plantas->links() }}
				</div>
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div style="max-width: 96%; margin: auto; height: 100%;">
			<div class="vertical-alignment-helper">
				<div class="modal-dialog vertical-align-center">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

							</button>
							<h4 class="modal-title" id="myModalLabel">Modal title</h4>

						</div>
						<div class="modal-body">...</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('custom_js')
	<script>
		$(".delete").on("submit", function(){
			return confirm("Desejar realmente Excluir?");
		});
	</script>
@append