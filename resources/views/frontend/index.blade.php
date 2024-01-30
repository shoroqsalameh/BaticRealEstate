@extends('frontend.frontend_dashboard')
@section('main')

@section('title')
    Batic Real Estate 
@endsection

        <!-- banner-section -->
         @include('frontend.home.banner')
         <!-- banner-section end -->
 

 
<!-- category-section -->
  @include('frontend.home.category')
<!-- category-section end -->


        <!-- feature-section -->
       @include('frontend.home.feature')
        <!-- feature-section end -->


      

        <!-- deals-section -->
       @include('frontend.home.deals')
        <!-- deals-section end -->


       


        


        <!-- place-section -->
        @include('frontend.home.place')
        <!-- place-section end -->


        <!-- team-section -->
         @include('frontend.home.team')
        <!-- team-section end -->


        <!-- cta-section -->
      @include('frontend.home.cta')
        <!-- cta-section end -->


       


     

@endsection
