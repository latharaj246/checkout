@extends('templets.master')
@section ('title')
child
@endsection


@section('section')










<style>
    .gradient-custom {
  /* fallback for old browsers */
  background: #f093fb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 13px;
}
</style>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Child Registration Form</h3>
                  <form method="post" action="/child">
                      @csrf
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="conatainer" style="height: 30px; opacity:0.7; font-weight:bold;">
                          <span class="alert-danger">
                              @error('firstName')
                                  {{ $message }}
                              @enderror
                          </span>
                      </div>
                        <div class="form-outline">
                          <input name="firstName" type="text" id="firstName" class="form-control form-control-lg" />
                          <label class="form-label" for="firstName">First Name</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="conatainer" style="height: 30px; opacity:0.7; font-weight:bold;">
                          <span class="alert-danger">
                              @error('lastName')
                                  {{ $message }}
                              @enderror
                          </span>
                      </div>
                        <div class="form-outline">
                          <input name="lastName" type="text" id="lastName" class="form-control form-control-lg" />
                          <label class="form-label" for="lastName">Last Name</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="conatainer" style="height: 30px; opacity:0.7; font-weight:bold;">
                          <span class="alert-danger">
                              @error('dob')
                                  {{ $message }}
                              @enderror
                          </span>
                      </div>
                        <div class="form-outline datepicker w-100">
                          <input
                            name='dob'
                            type="text"
                            class="form-control form-control-lg"
                            id="birthdayDate"
                          />
                          <label for="birthdayDate" class="form-label">Birthday</label>
                        </div>
      
                      </div>                   
                        
                      
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <div class="conatainer" style="height: 30px; opacity:0.7; font-weight:bold;">
                          <span class="alert-danger">
                              @error('email')
                                  {{ $message }}
                              @enderror
                          </span>
                      </div>
                        <div class="form-outline">
                          <input name='email' type="email" id="emailAddress" class="form-control form-control-lg" />
                          <label class="form-label" for="emailAddress">Email</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <div class="conatainer" style="height: 30px; opacity:0.7; font-weight:bold;">
                          <span class="alert-danger">
                              @error('phone')
                                  {{ $message }}
                              @enderror
                          </span>
                      </div>
                        <div class="form-outline">
                          <input name="phone" type="tel" id="phoneNumber" class="form-control form-control-lg" />
                          <label class="form-label" for="phoneNumber">Phone Number</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-12">
      
                        <div class="conatainer" style="height: 30px; opacity:0.7; font-weight:bold;">
                          <span class="alert-danger">
                              @error('limit')
                                  {{ $message }}
                              @enderror
                          </span>
                      </div>
                         <select  class='select form-control-lg'  name="limit"  placeholder="SELECT  LIMIT" required >
                         <option value="">Select limit</option>
                         <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="2000">2000</option>
                       </select>
                        <label class="form-label select-label">Limit</label>
      
                      </div>
                    </div>
      
                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                    </div>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      @endsection