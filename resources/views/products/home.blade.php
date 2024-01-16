@extends('layout.navbar')

@section('content')
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
    .hero-section{
        margin-top: -140px
    }
</style>
  <section class="hero-section" >
    <div class="container d-flex align-items-center justify-content-center fs-1 text-dark flex-column">
      <h1>Selamat Datang</h1>
      <h2>di Apotek <strong>Saranjana</strong></h2>
    </div>
  </section>


@endsection
