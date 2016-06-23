@extends('layouts.app')

@section('head')
<style>
    body {
        background-color: #141313;
        color: white;
        font-size: 14pt;
    }

    .footer {
        font-size: 12pt;
    }

    .title1 {
        font-size: 15;
    }

    h2, .title1 {
        color: #97D621;
    }

    .title2 {
        font-size: 15;
    }

    div.c-wrapper {
        width: 85%;
        margin: auto;
    }

    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        margin: auto;
    }

    p.gallery {
        padding: 10px 10px 10px 10px;
    }

    img.gallery-image {
        width: 100%;
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
<div class="container" id="home">
    <div class="row">
        <div class="col-md-4">
            <img alt="Aameen Rendering Logo" src="/images/logo.png">
        </div>
        <div class="col-md-8 text-right">
            <br>
            <span class="title1">SYDNEY</span>&nbsp;
            <span class="title2">02&nbsp;9740&nbsp;3434</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span class="title1">CANBERRA</span>&nbsp;
            <span class="title2">02&nbsp;6130&nbsp;1855</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="#home"><img class="menu_btn" alt="Home Menu" src="/images/home_btn.gif"></a>
            <a href="#gallery"><img class="menu_btn" alt="Gallery Menu" src="/images/gallery_btn.gif"></a>
            <a href="#contact"><img class="menu_btn" alt="Contact Us Menu" src="/images/contact_btn.gif"></a>
        </div>
    </div>
    <br>

    <div class="c-wrapper">
    <div id="carousel-rcs" class="carousel slide" data-ride="carousel" style="width: 960; height: 450px; margin: 0 auto">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-rcs" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-rcs" data-slide-to="1"></li>
        <li data-target="#carousel-rcs" data-slide-to="2"></li>
        <li data-target="#carousel-rcs" data-slide-to="3"></li>
        <li data-target="#carousel-rcs" data-slide-to="4"></li>
        <li data-target="#carousel-rcs" data-slide-to="5"></li>
        <li data-target="#carousel-rcs" data-slide-to="6"></li>
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
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-rcs" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-rcs" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>

<br>

    <div class="row">
        <div class="col-md-8">
            <br>
            <img src="/images/surface1_sm.jpg" alt="Surface 1">&nbsp;&nbsp;&nbsp;
            <img src="/images/surface2_sm.jpg" alt="Surface 2">&nbsp;&nbsp;&nbsp;
            <img src="/images/surface3_sm.jpg" alt="Surface 3">&nbsp;&nbsp;&nbsp;
        </div>
        <div class="col-md-4">
            Our rendering services can be applied to any type of substrate including:<br>
            <ul>
                <li>Brick walls</li>
                <li>Painted brick walls</li>
                <li>Blocks</li>
                <li>Concretes</li>
                <li>Hebel Power Panel</li>
                <li>Exsulite</li>
                <li>AFS Logicwall</li>
                <li>Dincel</li>
            </ul>
        </div>
    </div>

<br>

    <div class="row">
        <div class="col-md-7">
            <h2>WELCOME TO</h2>
            <h2>AAMEEN RENDERING &amp; CONSTRUCTION SERVICES PTY LTD</h2>
            Aameen Rendering &amp; Construction Services Pty Ltd offers high quality services
            and solutions that last.<br>
            <Br>
            We provide services in Sydney and the greater New South Wales area
            as well as in the Australian Capital Territory, and with a large team
            of experienced renderers, we can
            provide rendering services for large construction projects.<br>
            <br>
            We have recently increased our range of rendering services which enables us to
            provide you with the highest quality solutions for any type of rendering project.<br>
            <br>
            Our experienced team has knowledge in various unique finishes from basic
            conventional cement render to polymer-modified acrylic including architectural
            finish coatings. We can also provide heritage cement for an antique finish.<br>
            <br>
        </div>
        <div class="col-md-5">
            @if (session('message_success'))
            <div class="alert alert-success" role="alert">
              {{ session('message_success') }}
            </div>
            @else
                @if (session('message_error'))
                <div class="alert alert-danger" role="alert">
                  {{ session('message_error') }}
                </div>
                @endif
              <h2>REQUEST A CALL BACK</h2>
            <br>
            <form method="POST" action="/contact_send" id="frmContact">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                Name*<br>
                <input type="text" id="name" name="name" size="50" class="form-control" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                Email<br>
                <input type="text" id="email" name="email" size="50" class="form-control" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                Telephone<br>
                <input type="text" id="phone" name="phone" size="15" class="form-control" value="{{ old('phone') }}">
                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                Message
                <textarea cols="50" rows="5" id="message" name="message" class="form-control">{{ old('message') }}</textarea>
                @if ($errors->has('message'))
                    <span class="help-block">
                        <strong>{{ $errors->first('message') }}</strong>
                    </span>
                @endif
              </div>

              <input type="submit" class="btn btn-success" value="Send">
            </form>
            @endif

        </div>
    </div>

    <br>
    <h2 id="gallery">GALLERY</h2>
    <div class="row">
        <div class="col-md-4">
            <p class="gallery">
                <img src="/images/gall1_sm.jpg" alt="Gallery Left 1" class="gallery-image"><br>
                <br>
                <img src="/images/gall2_sm.jpg" alt="Gallery Left 2" class="gallery-image"><br>
                <br>
                <img src="/images/gall3_sm.jpg" alt="Gallery Left 3" class="gallery-image"><br>
                <br>
                <img src="/images/gall4_sm.jpg" alt="Gallery Left 4" class="gallery-image"><br>
            </p>
        </div>
        <div class="col-md-4">
            <p class="gallery">
                <img src="/images/galm1_sm.jpg" alt="Gallery Middle 1" class="gallery-image"><br>
                <br>
                <img src="/images/galm2_sm.jpg" alt="Gallery Middle 2" class="gallery-image"><br>
                <br>
                <img src="/images/galm3_sm.jpg" alt="Gallery Middle 3" class="gallery-image"><br>
            </p>
        </div>
        <div class="col-md-4">
            <p class="gallery">
                <img src="/images/galr1_sm.jpg" alt="Gallery Right 1" class="gallery-image"><br>
                <br>
                <img src="/images/galr2_sm.jpg" alt="Gallery Right 2" class="gallery-image"><br>
                <br>
                <img src="/images/galr3_sm.jpg" alt="Gallery Right 3" class="gallery-image"><br>
                <br>
                <img src="/images/galr4_sm.jpg" alt="Gallery Right 4" class="gallery-image"><br>
            </p>
        </div>
        <br>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2 id="contact">CONTACT</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <table>
                <tr>
                    <td class="title1">Email:</td>
                    <td>info@aameenrendering.com.au</td>
                </tr>
                <tr>
                    <td class="title1">Mobile:&nbsp;&nbsp;</td>
                    <td>0430 003 434</td>
                </tr>
            </table>
        </div>
        <div class="col-md-4">
            <div class="title1">
                Canberra
            </div>
            1/42 Essington Street<br>
            Mitchell ACT 2911<br>
            02 6130 1855
        </div>
        <div class="col-md-3">
            <div class="title1">
                Sydney
            </div>
            56 Beauchamp Street<br>
            Wiley Park NSW 2195<br>
            02 9740 3434
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center footer">
            <br><Br><br>
                <a href="#home"><img src="/images/back_to_top_sm.png" alt='Back to top'></a>
                Back to top
                <br>
                <hr>
                <i class="fa fa-copyright" aria-hidden="true"></i>
                Copyright 2016 AAMEEN RENDERING AND CONSTRUCTION SERVICES. All rights
                reserved.<br>Website designed by
                <a href="http://computerwhiz.com.au" target="_blank">Computer Whiz - Canberra</a>
        </div>
    </div>

</div>
<Br>

@endsection
