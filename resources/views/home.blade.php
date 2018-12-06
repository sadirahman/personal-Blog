@extends('layout.app')

@section('content')
@if (session('Status'))
<div class="alert alert-success">
  {{session('status')}}
</div>
@endif

<!--/header-bottom--></header>
<!--/header-->
<section id="slider"> 
<!--slider-->
<div class="container"> 
  <div class="row"> 
    <div class="col-sm-12"> 
      <div id="slider-carousel" class="carousel slide" data-ride="carousel"> 
        <ol class="carousel-indicators">
        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#slider-carousel" data-slide-to="1"></li>
          <li data-target="#slider-carousel" data-slide-to="2"></li>
          <li data-target="#slider-carousel" data-slide-to="3"></li>
          <li data-target="#slider-carousel" data-slide-to="4"></li>
          <li data-target="#slider-carousel" data-slide-to="5"></li>
          <li data-target="#slider-carousel" data-slide-to="6"></li>
      <li data-target="#slider-carousel" data-slide-to="7"></li>
          <li data-target="#slider-carousel" data-slide-to="8"></li>

        </ol>
        <div class="carousel-inner"> 
          <div class="item active"> 
              <div> <img src="design/image/home-001.jpg" class="girl img-responsive" alt="sea beach tours Bangladesh" /></div>
          </div>
       <div class="item"> 
            <div> <img src="design/image/home-002.jpg" class="girl img-responsive" alt="Bangladesh tours" /> 
            </div>
          </div>
       <div class="item"> 
            <div> <img src="design/image/home-003.jpg" class="girl img-responsive" alt="sompur vihara bangladesh" /> 
            </div>
          </div>
      <div class="item"> 
            <div> <img src="design/image/home-004.jpg" class="girl img-responsive" alt="Village Tour Bangladesh" /> 
            </div>
          </div>
      <div class="item"> 
            <div> <img src="design/image/home-005.jpg" class="girl img-responsive" alt="Sundarban Bangladesh" /> 
            </div>
          </div>
      <div class="item"> 
            <div> <img src="design/imagee/home-006.jpg" class="girl img-responsive" alt="culture tourism" /> 
            </div>
          </div>
      <div class="item"> 
            <div> <img src="design/image/home-007.jpg" class="girl img-responsive" alt="tea plantation Bangladesh" /> 
            </div>
          </div>
      <div class="item"> 
            <div> <img src="design/image/home-008.jpg" class="girl img-responsive" alt="port city tour Bangladesh" /> 
            </div>
          </div>
      <div class="item"> 
            <div> <img src="design/image/home-009.jpg" class="girl img-responsive" alt=" Beach tours Bangladesh" /> 
            </div>
          </div>
        </div>
        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev"> 
        <i class="fa fa-angle-left"></i> </a> <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next"> 
        <i class="fa fa-angle-right"></i> </a> </div>
    </div>
  </div>
</div>
</section> <!--/slider--><section>
<div class="container"> 
<div class="row"> 
  <div class='col-sm-12' style='padding-top:5px; padding-bottom:15px;text-align:justify;color:#333; background-color: #F0F0E9; border: 1px solid #D6D6D0;'> 
        <h1 class="title text-center">Bangladesh Travel Agency</h1>

       Bangladesh has many unique features to offer to its tourists. But need

proper information and useful presentation to explore the tourism of

Bangladesh. We have the world largest mangrove forest Sundarban, home

of Royal Bengal Tiger, UNESCO declared world heritage site, Cox&#39;s Bazar

the world longest (120 km.) natural sea beach, St. Martin the coral island.

Also we have a history, heritage and culture of at least 3000 years old.<br>
        <br>
        Remain of Buddhist civilization at Paharpur, Mahasthanghor, Mainamoti

and Wari Bateshwar are symbol of our glory. Vashu Vihara is the first

complete university of Asia stablished in 7 th century at Mahasthanghor in

Bogra. Panam City, Kantoji Temple, Puthia Temple City, Shatgombuj

Mosque, Choto Shona Mosque etc. are also very famous archaeological

sites of Bangladesh. It’s Hills, Lakes, Ethnic people, Riverine beauty,

evergreen Forests, Tea gardens, Wildlife, Natural beauty, tropical Weather,

Villages and warm hearted, hospitable, friendly People of Bangladesh

always attract the tourists.<br>
        <br>
       Dhaka stablished at 1608 as the capital city of ancient Bengal, now it is

very fast growing modern city and capital of Bangladesh easily accessible

from any corner of the World. Bangladesh has the modern logistics and

infrastructures facilities to receive all kind of tourists from all over the world.<br><br>
So, if you are planning to visit Singapore, Thailand, India, Nepal, Bhutan or

Myanmar you can easily visit and discover this beautiful Bangladesh with

very little extra effort or means. We are eagerly waiting for you to serve our

best with warm heart and hospitable mind.<br>

<strong>Bangladesh travel agency</strong> offer you amazing tour and travel packages at affordable price. You can travel and see all things in different tour category with best tour operator in Bangladesh. 
  </div>
  
@endsection


