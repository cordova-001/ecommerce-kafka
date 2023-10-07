@extends('layout.app')
@section('content')




<div class="container-fluid">
    <div class="nk-content-inner">
      <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
          <div class="nk-block-between">
            <div class="nk-block-head-content">
              <h3 class="nk-block-title page-title">Add Customer</h3>
            </div><!-- .nk-block-head-content -->
          </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->

<div class="nk-block nk-block-lg">
    <div class="card">
      <div class="card-inner">
        <div class="tab-content">
          <div class="tab-pane active" id="tabItem5">
            <h5 class="title">Add A Member </h5>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


            <form class="pt-2" method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                @csrf
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="first-name">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first-name" placeholder="First name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="last-name">Surname</label>
                    <input type="text" name="surname" class="form-control" id="last-name" placeholder="Surname">
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="last-name">Other Name</label>
                      <input type="text" name="other_name" class="form-control" id="last-name" placeholder="Other Name">
                    </div>
                  </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="phone-no">WhatsApp Number</label>
                    <input type="text" name="whatsapp" class="form-control" id="phone-no" maxlength="11" placeholder="WhatsApp">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="address-line2">Zone</label>
                    <input type="text" class="form-control"  readonly name="zone" id="address-line2" value="Abuja">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="address-st">District</label>
                    <input type="text" name="district"  class="form-control" id="address-st" value="Kwara State" readonly>
                  </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="address-l1">Educational Qualification </label>
                      <select class="form-select js-select2" id="gender" name="educational_qualification">
                        <option>SSCE</option>
                        <option>OND</option>
                        <option>HND</option>
                        <option>NCE</option>
                        <option>BSc</option>
                        <option>MSc</option>
                        <option>MBA</option>
                        <option>PhD</option>

                      </select>
                    </div>
                  </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="address-l1">Professional Qualification</label>
                      <select class="form-select js-select2" id="gender" name="professional_qualification">
                        <option>COREN</option>
                        <option>ACCA</option>
                        <option>PMP</option>
                        <option>CCNA</option>
                        <option>MBBS</option>
                        <option>Others</option>
                      </select>
                    </div>
                  </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="address-st"> Profession</label>
                    <input type="text" name="profession" class="form-control" id="address-st" placeholder="Profession">
                  </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="address-l1">Professional Status</label>
                      <select class="form-select js-select2" id="gender" name="professional_status">
                        <option>Associate</option>
                        <option>Fellow</option>
                        <option>Professor</option>
                        <option>Registered</option>
                        <option>None</option>
                        <option>Others</option>
                      </select>
                    </div>
                  </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="last-name">College_professional_group</label>
                      <input type="text" name="college_professional_group" class="form-control" id="last-name" placeholder="College Professional Group">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="address-l1">Artisan Trade</label>
                      <select class="form-select js-select2" id="gender" name="artisan_trade">
                        <option>Mechanic</option>
                        <option>Fashion Designing</option>
                        <option>Transport</option>
                        <option>Electrician</option>
                        <option>Painting</option>
                        <option>Others</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="address-l1"> Artisan Certificate</label>
                      <select class="form-select js-select2" id="gender" name="artisan_certificate">
                        <option>None</option>
                        <option>Yes</option>

                      </select>
                    </div>
                  </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="address-l1">Employment Status</label>
                      <select class="form-select js-select2" id="gender" name="employment_status">
                        <option>Employed</option>
                        <option>Unemployed</option>
                        <option>Self Employed</option>
                      </select>
                    </div>
                  </div>




                <div class="col-md-12">
                  <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                    <li>
                      <button name="create_customer" class="btn btn-primary"> Submit Form</button>
                    </li>

                  </ul>
                </div>
              </div>
            </form>
          </div>
          <!--tab pan -->


        </div>
      </div>
      <!--card inner-->
    </div>
    <!--card-->
  </div>
</div>
          </div>
        </div>

@endsection
