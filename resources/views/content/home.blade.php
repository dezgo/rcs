@extends('layouts.app')

@section('head')
<style>
    body {
        background-color: #141313;
        color: white;
        font-size: 14pt;
    }

    .title1 {
        font-size: 20pt;
        color: #97D621;
    }

    .title2 {
        font-size: 20pt;
        color: white;
    }

    .custom-carousel {
        width: 640;
        height: 480;
    }
</style>

<script>
$( document ).ready(function() {
    $( ".menu_btn" ).hover(
        function() {
            var src = $(this).attr("src").match(/[^\.]+/) + "_roll.gif";
            $(this).attr("src", src);
        }, function() {
            var src = $(this).attr("src").replace("_roll.gif", ".gif");
            $(this).attr("src", src);        }
    );
});
</script>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img alt="Aameen Rendering Logo" src="/images/logo.png">
        </div>
        <div class="col-md-8">
            <br>
            <span class="title1">SYDNEY</span>&nbsp;
            <span class="title2">02&nbsp;9794&nbsp;3434</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span class="title1">CANBERRA</span>&nbsp;
            <span class="title2">02&nbsp;6130&nbsp;1855</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="#home"><img class="menu_btn" alt="Home Menu" src="/images/home_btn.gif"></a>
            <a href="#gallery"><img class="menu_btn" alt="Gallery Menu" src="/images/gallery_btn.gif"></a>
            <a href="#portfolio"><img class="menu_btn" alt="Portfolio Menu" src="/images/portfolio_btn.gif"></a>
            <a href="#contact"><img class="menu_btn" alt="Contact Us Menu" src="/images/contact_btn.gif"></a>
        </div>
    </div>
    <br>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width: 640px; height: 480px; margin: 0 auto">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/images/sld1.jpg" alt="Slide 1">
        </div>
        <div class="item">
            <img src="/images/sld2.jpg" alt="Slide 2">
        </div>
        <div class="item">
            <img src="/images/sld3.jpg" alt="Slide 3">
        </div>
        <div class="item">
            <img src="/images/sld4.jpg" alt="Slide 4">
        </div>
        <div class="item">
            <img src="/images/sld5.jpg" alt="Slide 5">
        </div>
        <div class="item">
            <img src="/images/sld6.jpg" alt="Slide 6">
        </div>
        <div class="item">
            <img src="/images/sld7.jpg" alt="Slide 7">
        </div>
        <div class="item">
            <img src="/images/sld8.jpg" alt="Slide 8">
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<br>
    <div class="row">
        <div class="col-md-4">
            Our rendering services can be applied to any type of substrate including:<br>
            <ul>
                <li>Brick walls</li>
                <li>Painted brick walls</li>
                <li>Blocks</li>
                <li>Concretes</li>
                <li>Hebel Power Pane</li>
            </ul>
        </div>
        <div class="col-md-8">
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <h1>WELCOME TO</h1>
            <h1>AAMEEN RENDERING &amp; CONSTRUCTION SERVICES PTY LTD</h1>
            Aameen Rendering &amp; Construction Services Pty Ltd offers high quality services
            and solutions that last.<br>
            <Br>
            Based in Canberra, we provide services in the Australian Capital Territory and
            New South Wales, and with a large team of experienced renderers, we can
            provide rendering services for large construction projects.<br>
            <br>
            We have recently increased our range of rendering services which enables us to
            provide you with the highest quality solutions for any type of rendering project.<br>
            <br>
            Our experienced team has knowledge in various unique fifinishes from basic
            conventional cement render to polymer-modified acrylic including architectural
            finish coatings. We can also provide heritage cement for an antique finish.
        </div>
        <div class="col-md-5">
            <h1>REQUEST A CALL BACK</h1>

        </div>
    </div>
</div>

@endsection
