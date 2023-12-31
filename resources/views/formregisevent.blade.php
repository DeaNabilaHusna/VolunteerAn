<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  {{-- <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Volunteer-an</title>
</head>
<body class="bg-dark">
    @include('partials.navbar')

    <section class="h-100">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Registration Form</h3>
                        <form action="/regisrelawan" method="post">
                          @csrf
          
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="name" id="form3Example1m" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1m">Name</label>
                          </div>
                        </div>
                        <input type="hidden" name="kegiatan_id" value="{{ $kegiatan_id }}">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="alamat" id="form3Example1n" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n">Address</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="text" name="username" id="form3Example8" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example8">Username</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="email" name="email" id="form3Example8" class="form-control form-control-lg" />
                        <label class="form-label-hidden" for="form3Example8">Email</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="password" name="password" id="form3Example8" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example8">Password</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="password" name="password_confirmation" id="form3Example8" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example8">Password Confirmation</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="text" name="notelp" id="form3Example8" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example8">Phone Number</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="date" name="tgllhr_relawan" id="form3Example8" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example8">Date of Birth</label>
                      </div>
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Gender: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="jk_relawan" id="femaleGender"
                            value="0" />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="jk_relawan" id="maleGender"
                            value="1" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>      
                      </div>                   
      
                      <div class="form-outline mb-4">
                        <input type="text" name="pekerjaan_relawan" id="form3Example9" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example9">Job</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example9" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example9">What are your motivations and expectations in joining this event?</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example9" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example9">Why should we accept you as a volunteer?</label>
                      </div>

                    <h6 class="mb-0 me-4">Have you ever participated in volunteer activities before?</h6>
                        <div class="form-check form-check-inline mb-0 me-4">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="yesanswer"
                              value="option1" />
                            <label class="form-check-label" for="yesanswer">Yes</label>
                          </div>
        
                          <div class="form-check form-check-inline mb-0 me-4">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="noanswer"
                              value="option2" />
                            <label class="form-check-label" for="noanswer">No</label>
                          </div> 
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                          <button type="submit" class="btn btn-outline-dark">Submit</button>
                        </div>
                        </form>
                        {{-- <div class="my-3">
                          <div class="loading">Loading</div>
                          <div class="error-message"></div>
                          <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div> --}}

                          <br>
                          <br>

      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="js/main.js"></script>
</body>
</html>