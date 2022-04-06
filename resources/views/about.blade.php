@extends('layouts.main')

@section('container')
<h1 class="mt-5">Halaman home</h1>
<h1><?php echo $nama; ?></h1>
<h1><?= $email; ?></h1>
<img src="img/{{ $image }}" alt="{{ $nama }}" width="200px"> 
<script src="js/script.js"></script>

@endsection
   