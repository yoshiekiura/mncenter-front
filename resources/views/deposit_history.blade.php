@extends('layouts.app')

@section('content')

<div class="inner-banner">
  <div class="container">
    <h3>Deposite Historys</h3>
  </div>
</div>



<!--Start Part-1-->

<section id="part_1" style="min-height:600px">
  <div class="container">

    <div class="mas-table">
      <table width="100%" border="0" class="table table-striped">
        <thead>
          <tr>
            <td>Deposit ID</td>
            <td>Coin</td>
            <td>Amount</td>
            <td>Status</td>
            <td>Deposit Date</td>
          </tr>
        </thead>
        <tbody>
          @if (count($deposits) > 0)
          @foreach ($deposits as $deposit)
          <tr>
            <td>	{{$deposit->id}}  </td>
            <td>  {{$deposit->coin->coin_name}}  </td>
            <td>  {{$deposit->amount}}</td>
            <td>  {{$deposit->status}} </td>
            <td>  {{$deposit->created_at}} </td>
          </tr>
          @endforeach
          @endif
          @if (count($deposits) == 0)
          <div class="row" style="text-align:center;padding-top:20px">
            <span style="font-size:25px">No any deposits yet!</span>
          </div>
          @endif
        </tbody>
      </table>

    </div>

  </div>
  <div class="clearfix"></div>
</section>

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
