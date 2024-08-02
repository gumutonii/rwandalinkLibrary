<?php include 'php/connection.php'; ?>

<div class="row">
                  <div class="col-md-6">
                  <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">First Name</label>
                    
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="text"
                      
                      class="form-control"
                      name="s_fname"
                      placeholder="Enter your First Name"
                      autofocus
                    />
                  </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="s_lname"
                    placeholder="Enter your Last Name"
                    autofocus
                  />
                </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                  <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Gender</label>
                    
                  </div>
                  <select class="form-control" name="s_gender">
                    <option selected="disabled">Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Department</label>
                  <input
                    type="text"
                    class="form-control"
                    
                    name="d_id"
                    placeholder="Enter your Last Name"
                    autofocus
                  />
                </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                  <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Option</label>
                    
                  </div>
                  <select class="form-control" name="o_id">
                    <option selected="disabled">Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Year of Study</label>
                  <input
                    type="text"
                    class="form-control"
                    
                    name="y_id"
                    placeholder="Enter your Last Name"
                    autofocus
                  />
                </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                  <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Program</label>
                    
                  </div>
                  <select class="form-control" name="program">
                    <option selected="disabled">Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Academic Year</label>
                  <input
                    type="text"
                    class="form-control"
                    
                    name="academic_year"
                    placeholder="Enter your Last Name"
                    autofocus
                  />
                </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    
                  </div>
                  <input
                      type="password"
                      
                      class="form-control"
                      name="s_password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                  </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 ">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Confirm Password</label>
                    
                  </div>
                  <input
                      type="password"
                      
                      class="form-control"
                      name="c_password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                  </div>
                  </div>
                </div>
              
                
                
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit" name="student_login">Sign in</button>
                </div>
                <a href="login.php">Login</a>