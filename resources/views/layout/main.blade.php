
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog - Laravel Task</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
    @include('includes.css')
  </head>

  <body>

    @include('includes.masterhead')
    
<div class="container">
<div class="row">

    @yield('content')
    @if(Auth::check())
    @include('includes.sidebar')
    @endif

</div><!-- /.row -->
</div><!-- /.container -->

   @include('includes.footer')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   @include('includes.script')
  </body>
</html>
