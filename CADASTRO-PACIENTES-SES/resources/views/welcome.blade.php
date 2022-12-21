@extends('layouts.app')

@section('title', 'Home')

@section('main')

    <div class="card" style="margin-top: 1rem; margin-bottom: 1rem">

        <div class="card-header">
            <h1 class="card-title">Home</h1>
        </div>

        <div class="card-body">
            <p class="lead">
                Cras vel lorem laoreet, molestie felis eget, vulputate urna. Aliquam dolor dui, ornare sit amet turpis
                vitae, tempor venenatis ipsum. Suspendisse sit amet ex vehicula, rhoncus enim sed, vestibulum odio. Integer
                aliquet libero sit amet eros viverra, auctor malesuada purus porttitor. Integer non nunc vitae orci
                facilisis sodales. Mauris magna tellus, auctor vitae imperdiet venenatis, maximus tempor sem. Donec egestas
                varius nisi ac finibus. Pellentesque viverra at leo at efficitur.Cras vel lorem laoreet, molestie felis eget, vulputate urna. Aliquam dolor dui, ornare sit amet turpis
                vitae, tempor venenatis ipsum. Suspendisse sit amet ex vehicula, rhoncus enim sed, vestibulum odio. Integer
                aliquet libero sit amet eros viverra, auctor malesuada purus porttitor. Integer non nunc vitae orci
                facilisis sodales. Mauris magna tellus, auctor vitae imperdiet venenatis, maximus tempor sem. Donec egestas
                varius nisi ac finibus. Pellentesque viverra at leo at efficitur.Cras vel lorem laoreet, molestie felis eget, vulputate urna. Aliquam dolor dui, ornare sit amet turpis
                vitae, tempor venenatis ipsum. Suspendisse sit amet ex vehicula, rhoncus enim sed, vestibulum odio. Integer
                aliquet libero sit amet eros viverra, auctor malesuada purus porttitor. Integer non nunc vitae orci
                facilisis sodales. Mauris magna tellus, auctor vitae imperdiet venenatis, maximus tempor sem. Donec egestas
                varius nisi ac finibus. Pellentesque viverra at leo at efficitur.
            </p>
        </div>
        
        <div class="card-footer">
            <a href="{{ route('patients.index') }}" class="btn btn-primary">Pacientes</a>
            <a href="#" class="btn btn-primary">Cidades</a>
        </div>

    </div>
@endsection