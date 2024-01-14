@extends('layout.navbar')

@section('navbar')
<style>
    body{
        background-color: #f9f6f2;
    }
    .hero-section{
        background-size: cover;
        width: 100%;
    }

    .hero-section .container{
        height: 100vh;
        z-index: 1;
        position: relative;
    }

    h1{
        font-size: 1.5em;
    }

    h2{
        font-size: 1.3em;
    }
</style>
  <section class="hero-section" >
    <div class="container d-flex align-items-center justify-content-center fs-1 text-dark flex-column">
      <h1>Selamat Datang dan Selamat Berbelanja</h1>
      <h2>di Toko <strong>Kami</strong></h2>
    </div>
  </section>


@endsection
