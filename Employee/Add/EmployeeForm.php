<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Employee Form</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---2-Simple-Registration-Section.css">
</head>

<body>
    
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">EMPLOYEE DETAILS</h3>
                  <form action="AddEmployee.php" method="POST">
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="firstName" name="fname" class="form-control form-control-lg" />
                          <label class="form-label" for="firstName">First Name</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="lastName" name="mname" class="form-control form-control-lg" />
                          <label class="form-label" for="lastName">Middle Name</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
      
                        <div class="form-outline">
                            <input type="text" id="lastName" name="lname" class="form-control form-control-lg" />
                            <label class="form-label" for="lastName">Last Name</label>
                          </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <h6 class="mb-2 pb-1">Gender: </h6>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                            value="Female" checked />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="maleGender"
                            value="MAle" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="email" id="emailAddress" name="email" class="form-control form-control-lg" />
                          <label class="form-label" for="emailAddress">Email</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="tel" id="phoneNumber" name="phno" class="form-control form-control-lg" />
                          <label class="form-label" for="phoneNumber">Phone Number</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
      
                        <select class="select form-control-lg" name="isadmin">
                          <option value="1" disabled>YOU ARE</option>
                          <option value="1">ADMIN</option>
                          <option value="0">NOT AN ADMIN</option>
                        </select>
                        <label class="form-label select-label">Choose option</label>
      
                      </div>

                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="age" name="age" class="form-control form-control-lg" />
                          <label class="form-label" for="age">Age</label>
                        </div>
      
                      </div>

                      
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
        
                          <div class="form-outline">
                            <input type="text" id="firstName" name="uname" class="form-control form-control-lg" />
                            <label class="form-label" for="firstName">USERNAME</label>
                          </div>
        
                        </div>
                        <div class="col-md-6 mb-4">
        
                          <div class="form-outline">
                            <input type="text" id="lastName" name="pass" class="form-control form-control-lg" />
                            <label class="form-label" for="lastName">PASSWORD</label>
                          </div>
        
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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>