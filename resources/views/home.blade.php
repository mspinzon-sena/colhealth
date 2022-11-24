@extends('layouts.panel')

@section('title','Inicio')

@section('content')


<div class="container-fluid py-4">
      <div class="row">  
      <div class="row mt-4">
      <div class="col-md-12 mb-6">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bienvenido! ') }}{{ Auth::user()->name }}
                    
                    
                    
                </div>
            </div>
        </div>

@endsection
