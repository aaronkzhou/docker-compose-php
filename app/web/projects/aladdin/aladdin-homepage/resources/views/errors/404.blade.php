@extends(layout.app)
@section('contents')

<section class="sub-bnr" style="background:url(images/sub-bnr-bg-6.jpg) no-repeat;">
    <div class="position-center-center">
      <div class="container">
        <h4>Page Not Found</h4>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">404 Error</li>
        </ol>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- LATEST WORK -->
    <section class="error-page padding-top-100 padding-bottom-100">
      <div class="container"> <img class="img-responsive" src="images/error-img.png" alt="" >
        <h1 class="font-pt"></h1>
        <div class="bgi margin-bottom-100 margin-top-100">
          <h5><span class="primary-color">Sorry,</span> The page Could not be found</h5>
          <p>They were four men living all together yet they were all alone. Today still wanted by the government they survive as soldiers of fortune. Maybe you and me were never.
            I have always wanted to have a neighbor just like you. 
            All of them had hair of gold like their mother the youngest one in curls. </p>
          <a href="#." class="btn margin-top-50 margin-right-10">GO BACK HOME PAGE </a> <a href="#." class="btn margin-top-50 margin-left-10">Previous Page </a> </div>
      </div>
    </section>
  </div>

@endsection