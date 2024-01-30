  @extends('frontend.frontend_dashboard')
   @section('content')
     @section('title')
  Agent Login |  Batic  
@endsection

  


        <!-- ragister-section -->
        <section class="ragister-section centred sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                        <div class="sec-title">
                             
                        </div>
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons centred clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">Agent Login</li>
                                    <li class="tab-btn" data-tab="#tab-2">Agent Register</li>
                                </ul>
                            </div>
    <div class="tabs-content">
        <div class="tab active-tab" id="tab-1">
            <div class="inner-box">
                <h4>Agent Sign in</h4>
                <form action="{{ route('login') }}" method="post" class="default-form">
               @csrf

                    <div class="form-group">
                        <label>Email/Name/Phone </label>
                        <input type="text" name="login" id="login" required="">
                    </div>
                     
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" required="">
                    </div>

                    <div class="form-group message-btn">
                        <button type="submit" class="theme-btn btn-one">Sign in</button>
                    </div>
                </form>
                <div class="othre-text">
                    <p>Have not any account? <a href="signup.html">Register Now</a></p>
                </div>
            </div>
        </div>
        <div class="tab" id="tab-2">
            <div class="inner-box">
                <h4>Agent Register </h4>
               
                <form action="{{ route('agent.register') }}" method="post" class="default-form">
                    @csrf


                    <div class="form-group">

                        <label>Agent Company Name</label>
                        <input type="text" name="name" id="name" required="">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" id="email" required="">
                    </div>

                     <div class="form-group">
                        <label>Agent Phone </label>
                        <input type="text" name="phone" id="phone" required="">
                    </div>


                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" required="">
                    </div>

                     
                    <div class="form-group message-btn">
                        <button type="submit" class="theme-btn btn-one">Register</button>
                    </div>
                </form>
                <div class="othre-text">
                    <p>Have not any account? <a href="signup.html">Register Now</a></p>
                </div>
            </div>
        </div>
    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ragister-section end -->


       

          @endsection