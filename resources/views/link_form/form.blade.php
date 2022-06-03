@extends('layout')



@section('content')
<section id="register">
    <div class="container">
        <div class="row">
                <div class="showcase-form card">
                    <h2 class="text-center my-1">Register Your Card</h2>
                     <form>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-control">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-control">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-control">
                                    <input type="tel" name="phone" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-control">
                                    <input type="text" name="agent" placeholder="Agent Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-control">
                                    <input type="text" name="agent-code" placeholder="Agent Code" required>
                                </div>
                            </div>
                        
                        </div>
                      
                        <div class="form-control">
                        <select class="form-select form-select-lg" required>
                          <option selected disabled value="">Select Card-Category</option>
                          <option value="1">Amazon Gift Card</option>
                          <option value="2">Ebay Gift Card</option>
                          <option value="3">Amazon Ecode</option>
                        </select>
                        </div>
                        <div class="form-control">
                            <select class="form-select form-select-lg" required>
                              <option selected disabled value="">Select Number Of Card You Want To Sell</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                            </select>
                            </div>
                        <div class="form-control">
                          <input type="text" name="card-type" placeholder="Card-Pin" required>
                        </div>
                          <div class="row">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="/form_next" value="Submit" class="btn btn-primary">Next</a>  
                            </div>
                        </div>
     
                    </form>
                </div>
        </div>
    </div>
  </section>
@endsection