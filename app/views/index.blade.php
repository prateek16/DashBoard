@extends('layouts.master')

  

@section('content')

<center>
<div class="main">
  <div class="logo">
  	<a href="{{URL::to('/')}}"><img src={{asset('img/logo.jpg')}} alt="Logo"></a>
  </div>	

  <div class="heading">
  	<p class="heading1">Monitoring DashBoard</p>
  </div>

  <div class="block1">
  
<table class="tg">
  <tr>
    <th class="tg-031e"><img class="images" src={{asset('img/1.png')}}  alt=""></th>
    <th class="tg-031e">23,324 Jobs Created (Q1 2017 target 22,346)</th>
    <th class="tg-031e"><img class="images" src={{asset('img/2.png')}} alt=""></th>
    <th class="tg-031e">62,198 sqm Workspace built (target 62,747)</th>
  </tr>
  <tr>
    <td class="tg-031e"><img class="images" src={{asset('img/3.png')}} alt=""></td>
    <td class="tg-031e">4,724 Businesses Assisted (target 4,443)</td>
    <td class="tg-031e"><img class="images" src={{asset('img/4.png')}} alt=""></td>
    <td class="tg-031e">5,497 Homes built (target 6,112)</td>
  </tr>
  <tr>
    <td class="tg-031e"><img class="images" src={{asset('img/5.png')}} alt=""></td>
    <td class="tg-031e">£123.4m Public funding (target £122.3m)</td>
    <td class="tg-031e"><img  class="images" src={{asset('img/6.png')}} alt=""></td>
    <td class="tg-031e">£237.4m Private leverage (target £221.4m)</td>
  </tr>
</table> 	
</div>

<div class="welcome">
	<p class="welcome1">Welcome to the Leicester and Leicestershire Enterprise Partnership Performance Dashboard.  Click on the criteria you wish to investigate or use the free text search to find projects or programmes.</p>


</div>

<div class="elements">
	
	<a href="{{URL::to('/')}}"><img class="img_elem" src={{asset('img/7.png')}} alt="Logo"></a>
	<a href="{{URL::to('/')}}"><img class="img_elem" src={{asset('img/8.png')}} alt="Logo"></a>
	<a href="{{URL::to('/')}}"><img class="img_elem" src={{asset('img/9.png')}} alt="Logo"></a>

</div>

<div class="search">

<p class="search1">Search:  <span>Enter search text here</span></p>                

</div>

</div>
</center>



@stop