@extends('layout')

@section('content')

<section id="showcase">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="showcase-left"></div>
        </div>
        <div class="col-md-6">
          <div class="showcase-right">
            <h1>Welcome Convert Your Gift Card to Cash Now!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <a class="btn btn-default btn-lg showcase-btn">Read More</a>
        </div>
      </div>
    </div>  
  </section>
  
  <section id="service">
        <h2 class="text-center">How It Works</h2>
      <div class="container"> 
        <div class="row g-0">
          <div class="col-md-6">
              <div class="tab-bg tab1">
                 <h2>01</h2>
              <h3>Get More From Life With Creativiy</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis fuga tempore, rerum error voluptatem ratione assumenda,officiis voluptates commodi dolorem qui quidem voluptatibus reprehenderit rem eaque molestiae adipisci dicta veniam.</p>
                <div id="services-02-btn">
                <a class="btn btn-general btn-yellow" href="#services" title="Get In Touch" role="button"> Get In Touch </a>
               </div>
            </div>
          </div>
          <div class="col-md-6">
             <div class="tab-bg tab2">
                  <h2>02</h2>
                 <h3>The Home Of Strategy</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis fuga tempore, rerum error voluptatem ratione assumenda, officiis voluptates commodi dolorem qui quidem voluptatibus reprehenderit rem eaque molestiae adipisci dicta veniam.</p>
             </div>
          </div>
            <div class="col-md-6">
             <div class="tab-bg tab3">
               <h2>03</h2>
                <h3>Design To Play It Safe</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis fuga tempore, rerum error voluptatem ratione assumenda, officiis voluptates commodi dolorem qui quidem voluptatibus reprehenderit rem eaque molestiae adipisci dicta veniam.</p>
             </div>
          </div>
             <div class="col-md-6">
             <div class="tab-bg tab4">
                  <h2>04</h2>
                 <h3>The Home Of Strategy</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis fuga tempore, rerum error voluptatem ratione assumenda, officiis voluptates commodi dolorem qui quidem voluptatibus reprehenderit rem eaque molestiae adipisci dicta veniam.</p>
                  <div id="service-02-btn">
                    <a class="btn btn-general" btn-yellow title="Get In Touch" href="#services" role="button"> Get In Touch </a>
                    </div>
             </div>
          </div>
        </div>
    </div> 
  </section>
  
  <section id="cards-display">
    <div class="content-box">
       <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="card-heading text-center">
                     <h2>WE BUY ALL <span class="heading">CARDS</span></h2>
                </div>
              </div>         
          </div>
          <div class="row">
               <div class="col-md-2">
                    <img src="./images/apple.jpg" class="img-thumbnail shadow-2-strong" alt="image">
                  </div>
                  <div class="col-md-2">
                    <img src="./images/apple.jpg" class="img-thumbnail shadow-2-strong" alt="image">
                  </div>
                  <div class="col-md-2">
                    <img src="./images/apple.jpg" class="img-thumbnail shadow-2-strong" alt="image">
                  </div>
                  <div class="col-md-2">
                    <img src="./images/apple.jpg" class="img-thumbnail shadow-2-strong" alt="image">
                  </div>
                  <div class="col-md-2">
                    <img src="./images/apple.jpg" class="img-thumbnail shadow-2-strong" alt="image">
                  </div>
                  <div class="col-md-2">
                    <img src="./images/apple.jpg" class="img-thumbnail shadow-2-strong" alt="image">
                 </div>
          </div>
    </div>
    </div>
  </section>
@endsection