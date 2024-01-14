@extends('layout.navbar')

@section('navbar')

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        background-color: #f9f6f2;
    }
    .gambar{
        border-radius: 30px;
        padding: 20px;
        height: 15rem;
    }
    .card{
        border-radius: 30px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(225, 225, 225, 0.1) 0px 0px 0px 1px;
    }
    .card-body{
        padding: 25px;
        margin-top: -15px;
        height: 18rem;
    }
    .d-flex{
        align-items: flex-end;
    }
    .btn-primary{
        border-radius: 50px;
        width: 120px;
    }
    .btn-primary:hover{

        background-color: black;
    }
</style>
    <div class="row mt-3">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('products.create') }}">Tambah Prodak</a>
        </div>
    </div>


    <section class="content">

        <div class="container my-5">
          {{-- <h1 class="text-center">Prodak Toko Kami</h1> --}}
          <div class="row row-cols-1 row-cols-md-3 g-4 py-2">
            @foreach ($products as $product )
          <div class="col">
          <div class="card" style="width: 18rem; ">
            <img src="/images/{{ $product->image }}" class="gambar" name="gambar" id="gambar" alt="...">
            <div class="card-body">

              <h5 class="card-title" name="nama_prodak"><td>{{$product->name}}</td></h5>
              <p class="card-text" name="keterangan"><td>{{$product->detail}}</td></p>
              <div class="d-flex justify-content-around mb-2 ">
                {{--  {{dd($product)}}  --}}
                <form action="{{route('products.destroy',$product->id)}}" method="POST">
                    <a class="btn btn-info" href="{{route(products.show,$product)}}">Show</a>
                    <a class="btn btn-info" href="{{route(products.edit,$product->id)}}">Edit</a>
                </form>
                @csrf
                @method('DELETE')
                {{--  <a href="{{/comments/{comment}('edit-product/'. $product->edit)}} class="btn btn-primary">Edit</a>  --}}
                {{--  <a href="{{/comments/{comment}('hapus-product/'. $product->delete)}}" class="btn btn-primary">Delete</a>  --}}
              </div>
            </div>
          </div>
        </div>
        @endforeach

        </div>



        </div>
      </section>
@endsection
