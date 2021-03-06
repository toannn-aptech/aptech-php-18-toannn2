<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{asset('./favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>ArticleCategory - Clean Blog Bootstrap</title>
  
    <!-- Bootstrap core CSS -->
    <link href="{{asset('./css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('./css/styles.css')}}" rel="stylesheet">
  
    <!-- Custom fonts for this template -->
    <link href="{{asset('./css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  
    <!-- Custom styles for this template -->
    <link href="{{asset('./css/clean-blog.min.css')}}" rel="stylesheet">

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item d-flex">
              <form action="{{route('articles.index')}}" method="get">
                  <button class="btn btn-primary rounded-0 font-weight-bold">Article Home</button>
                </form>
                <form action="{{route('categories.index')}}" method="get">
                    <button class="btn btn-primary rounded-0 font-weight-bold">Category Home</button>
                  </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Sample Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<!-- Page Header -->
  @include('layout.header')
  <hr>

  <!-- Main Content -->
@section('content') @show
  <hr>

  <!-- Footer -->
  @include('layout.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('./js/jquery.min.js')}}"></script>
  <script src="{{asset('./js/bootstrap.bundle.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
</body>
</html>

