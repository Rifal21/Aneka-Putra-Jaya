@extends('dashboard.layouts.main')

@section('container')
<h1 class="text-3xl text-black pb-6">Selamat Datang {{ auth()->user()->name }}</h1>
@endsection