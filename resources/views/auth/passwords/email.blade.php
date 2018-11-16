@extends('layouts.app')

@section('content')
<div class="inner-banner">
 <div class="container">
<h3>Forgot your password?</h3>
</div>
</div>



<!--Start Part-1-->

<section id="part_1" style="min-height:590px">

<div class="container">
<div class="login-box">
<div class="login-area">
<div class="login-main">
<h3>Password for</h3>
<div class="accent-bg"></div>
<div class="login-form">
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
  @if ($message = Session::get('failed'))
      <div class="alert alert-danger">
          <p>{{ $message }}</p>
      </div>
  @endif
<form class="form-horizontal" role="form" method="POST"  action="/forgetpassword">
<label>Your Email:</label>
<div class="login-field">
<input type="email" name="email" class="form-control" placeholder="Email">
@if ($errors->has('email'))
    <span class="color:#fff">{{ $errors->first('email') }}</span>
@endif
</div>
<button class="btn login-btn">Send</button>
</form>

</div>
<div class="button-area">

<span>You remember password?</span> <a class="page-scroll" href="/login">Sign in</a>
</div>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</section>

<!--Start Part-2-->


<script>
$(document).ready(function(){
$(".same").click(function(){
 var sliderid = $(this).attr("id");

  var n = sliderid.split('-');
var indid = (n[1]);

$( ".openSlide" ).slideUp( "fast", function() {
$( ".tabActive" ).removeClass( "tabActive" );

});

$( "#1stslide-" + indid ).slideDown( "fast", function() {
$( "#atab-" + indid ).removeClass( "tabinActive").addClass("tabActive");

});



});
});
</script>
<script type="text/javascript">
  $(function(){
    SyntaxHighlighter.all();
  });
  $(window).load(function(){
    $('.flexslider').flexslider({
      animation: "fade",
      start: function(slider){
        $('body').removeClass('loading');
      }
    });

  $('ul.nav li.dropdown').hover(function() {
$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
  });
</script>




@endsection
