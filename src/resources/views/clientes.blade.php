@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes</div>

                
                @can('admin')
                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                           <h1>Isso Só Admin pode ver - 1!</h1> 
                        </div>
                </div> 
                @endcan


                    
                @if (auth()->user()->can('admin'))
                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                           <h1>Isso Só Admin pode ver - 2!</h1> 
                        </div>
                </div>   
                @else
                <div class="card-body">
                        <div class="alert alert-warning" role="alert">
                           <h2>Vc é usuário e só tem permissão para ver isto!</h2> 
                        </div>
                </div>                
                @endif    
         

                    

                @can('admin')
                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                           <h1>Isso Só Admin pode ver - 3!</h1> 
                        </div>
                </div>
                @endcan




            </div>
        </div>
    </div>
</div>
@endsection
