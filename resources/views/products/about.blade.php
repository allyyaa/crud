@extends('layout.navbar')
@section('navbar')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fraunces:wght@700&family=Outfit:wght@300;400;600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@400;500;700;900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.section{
    width: 100%;
    display: block;
    margin: auto;
    padding-top: 100px;
}
.content-section{
    float: left;
    width: 55%;
}
.image-section{
    float: right;
    width: 40%;
}
.image-section img{
    width: 100%;
    height: auto;
}
.content-section .title{
    text-transform: uppercase;
    font-size: 28px;
}
.content-section .content h3{
    margin-top: 20px;
    color: #5d5d5d;
    font-size: 21px;
}
.content-section .content p{
    margin-top: 10px;
    font-family: sans-serif;
    font-size: 18px;
    line-height: 1.5;
}
.content-section .content .button a{
    background-color: #3d3d3d;
    padding: 12px 40px;
    text-decoration: none;
    color: #fff;
    font-size: 25px;
    letter-spacing: 1.5px;
}
.content-section .content .button a:hover{
    background-color: #a52a2a;
    color: #fff;
}
.content-section .social{
    margin-top: 40px;

}
.content-section .social i{
   color: #a52a2a;
   font-size: 30px;
   padding: 0px 10px;
}
.content-section .social i:hover{
    color: #3d3d3d;
}
@media screen and (max-width: 768px){
    .container{
        width: 80px;
        display: block;
        margin: auto;
        padding-top: 50px;
    }
    .content-section{
        float: none;
        width: 100%;
        display: block;
        margin: auto;
    }
    .image-section{
        float: none;
        width: 100%;
        display: block;
        margin: auto;
    }
    .image-section img{
        width: 100%;
        height: auto;
        display: block;
        margin: auto;

    }
    .content-section .title{
        text-align: center;
        font-size: 19px;
    }
    .content-section .content .button{
      text-align: center;
    }
    .content-section .content .button a{
        padding: 9px 30px;
    }
    .content-section .content .social{
        text-align: center;
    }
}
</style>

<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>About Us Section</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
      {{--  <link rel="stylesheet" href="{{asset('build/assets/css/tentang.css')}}">  --}}


    </head>
    <body>
      <div class="section">
        <div class="container">
          <div class="content-section">
            <div class="title">
              <h1>Tentang kami</h1>
            </div>
            <div class="content">
              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatum, cumque tempora tenetur iure ratione,
                sapiente soluta iste saepe possimus omnis, maiores deserunt nam corporis minus distinctio a hic laudantium!
                Totam, ut iusto! Iusto tempora praesentium in, doloribus consectetur porro! Non corrupti eius illum ad odit dolores, facilis voluptatibus ducimus quidem praesentium.
              </p>
              <div class="button">
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="social">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="image-section">
            <img src="{{asset('build/assets/img/logo_toko.png')}}" alt="">
          </div>
        </div>

      </div>
    </body>
    </html>
@endsection
