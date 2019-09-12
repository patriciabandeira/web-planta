@extends('adminlte::page')

@section('title', 'Início')

@section('content_header')
    <h1>Início</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ $qtd['plantas'] }}</h3>
                <p>Plantas</p>
            </div>
            <div class="icon">
                <i class="ion ion-leaf"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ $qtd['biomas'] }}</h3>
                <p>Biomas</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-globe"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
</div>

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Boas Vindas</h3>
    </div>
    <div class="box-body">
        Seja bem-vindo ao sistema Mundo das Plantas.
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
         
    </div>
    <!-- /.box-footer-->
</div>
@stop