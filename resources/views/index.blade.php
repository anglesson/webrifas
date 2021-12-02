@extends('layouts.template')

@section('content')    
<!-- Section - Dashboard -->
<section>
    <h5>Dashboard</h5>
    <a href="{{route('rifa.list')}}" style="text-decoration: none">
        <div class="card">
            <h2>{{ $totalDeRifas }}</h2>
            <p>Rifas cadastradas</p>
        </div>
    </a>
    <footer>
        <a href="{{ route('rifa.create') }}" class="button-link"> Criar Rifa </a>
    </footer>
</section>
<!-- End Section - Dashboard -->
@endsection
