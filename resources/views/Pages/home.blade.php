@extends('layouts.app')

@section('title', 'Home Page')


@section('content')
       
        <div class="content container pt-5">
                <div class="jumbotron">
                    <h1 class="display-4">Hi Vinoth {{ $user }}</h1>
                    <p class="lead">Welcome to HOME page</p>
                    <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <a class="btn btn-primary btn-lg" href="/home" role="button">Home Page</a>
                </div>
        </div>

        {{-- Comments --}}
        <div class="row mb-4">
                <div class="col-sm-6">
                        <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">USER LOGIN</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-primary">LOGIN</a>
                                </div>
                        </div>
                </div>
                <div class="col-sm-6">
                        <div class="card">
                                <div class="card-body">
                                        <h5 class="card-title">REGISTER</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-primary">REGISTER</a>
                                </div>
                        </div>
                </div>
        </div>  
@endsection