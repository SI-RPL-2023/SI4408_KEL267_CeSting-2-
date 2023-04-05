@extends('navbar')
@section('isihalaman')
<?php 
    use App\Models\Artikel;
    use App\Models\Forum;
    use App\Http\Controllers\ArtikelController;
    $listartikel = Artikel::orderBy('artikel_id') -> get();
?>
@guest
        <div class="container mt-5 mb-5">
            <div class="card row mb-3">
                <center>
                    <img class="rounded-circle" src="{{asset('assets/images/Logo-CeSting-Homepage.png')}}">
                    <h1><span class="font-weight-bold"><br>Selamat datang di CeSting!</span></h1>
                </center>
            </div>
        </div>
    @endguest
@endsection