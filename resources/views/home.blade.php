@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Início</div>

                <div class="panel-body">
<section class="content">
	<div class="row">
		
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<p>Siem</p>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="{{url('siem')}}" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<p>Escola</p>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="{{url('escola')}}" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
			</div>
            
		</div>

         
        <div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<p>Funcionários</p>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="{{url('funcionario')}}" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>

        <div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<p>Ocupação</p>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="{{url('ocupacao')}}" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
			</div>
            
		</div>
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<p>Pessoa</p>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="{{url('pessoa')}}" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
       
	</div>
</section>                </div>
            </div>
        </div>
    </div>
</div>
@endsection
