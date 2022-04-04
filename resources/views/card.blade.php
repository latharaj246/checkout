@extends('templets.master')
@section ('title')
card
@endsection


@section('section')


<style>
    .gradient-custom { background: radial-gradient(50% 123.47% at 50% 50%, #00FF94 0%, #720059
100%), linear-gradient(121.28deg, #669600 0%, #FF0000 100%), linear-gradient(360deg,
#0029FF 0%, #8FFF00 100%), radial-gradient(100% 164.72% at 100% 100%, #6100FF 0%, #00FF57
100%), radial-gradient(100% 148.07% at 0% 0%, #FFF500 0%, #51D500 100%);
background-blend-mode: screen, color-dodge, overlay, difference, normal; }
.btn{
margin-top: 90px;
width: 76px;
height: 49px;
border-top-width: 4px;
    border-right-width: 5px;
    border-bottom-width: 5px;
    border-left-width: 4px;
}

}

</style>
<section class="gradient-custom">
    <div class="container my-5 py-5">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-7 col-lg-5 col-xl-4">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-4">
              <form>
                {{-- @foreach ($data as $item)
                @if($data['child_id']==$child['id']){


                }
                  @endif   --}}
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div class="form-outline">
                  <label class="form-label" for="typeText">Card Number</label>
                  <h3><b>{{$data}}</b></h3>
                </div>
                <img width="30%" src="https://cdn5.vectorstock.com/i/1000x1000/54/19/credit-card-outline-icon-vector-15645419.jpg" alt="">
                   
                </div>
  
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div class="form-outline">
                   
                    <label class="form-label" for="typeName">Cardholder's Name</label>
                    <h3>Latha</h3>
                  </div>
                </div>
  
                <div class="d-flex justify-content-between align-items-center pb-2">
                  <div class="form-outline">
                   
                    <label class="form-label" for="typeExp">Expiration</label>
                    <h3>
                      10-23
                    </h3>
                  </div>
                  <div class="form-outline">
                   
                    <label class="form-label" for="typeText2">Cvv</label>
                    <h4> {{$cvv}}</h4>
                  </div>
                  
                  <br>
                  {{-- <button type="button" class="btn btn-info btn-lg btn-rounded">
                    <i class="fas fa-arrow-right"></i> --}}
                    <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark"><i style='font-size:24px' class='fas'>&#xf35a;</i></button>
                  </button>
                  
                </div>
                {{-- @endforeach --}}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  @endsection

  










  