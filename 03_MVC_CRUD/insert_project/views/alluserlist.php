  <style>
    body {
      background: #f7f7f7;
    }

    .table {
      border-spacing: 0 0.85rem !important;
    }

    .table .dropdown {
      display: inline-block;
    }

    .table td,
    .table th {
      vertical-align: middle;
      margin-bottom: 10px;
      border: none;
    }

    .table thead tr,
    .table thead th {
      border: none;
      font-size: 12px;
      letter-spacing: 1px;
      text-transform: uppercase;
      background: transparent;
    }

    .table td {
      background: #fff;
    }

    .table td:first-child {
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .table td:last-child {
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
    }

    .avatar {
      width: 2.75rem;
      height: 2.75rem;
      line-height: 3rem;
      border-radius: 50%;
      display: inline-block;
      background: transparent;
      position: relative;
      text-align: center;
      color: #868e96;
      font-weight: 700;
      vertical-align: bottom;
      font-size: 1rem;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .avatar-sm {
      width: 2.5rem;
      height: 2.5rem;
      font-size: 0.83333rem;
      line-height: 1.5;
    }

    .avatar-img {
      width: 100%;
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover;
    }

    .avatar-blue {
      background-color: #c8d9f1;
      color: #467fcf;
    }

    table.dataTable.dtr-inline.collapsed
      > tbody
      > tr[role="row"]
      > td:first-child:before,
    table.dataTable.dtr-inline.collapsed
      > tbody
      > tr[role="row"]
      > th:first-child:before {
      top: 28px;
      left: 14px;
      border: none;
      box-shadow: none;
    }

    table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child,
    table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child {
      padding-left: 48px;
    }

    table.dataTable > tbody > tr.child ul.dtr-details {
      width: 100%;
    }

    table.dataTable > tbody > tr.child span.dtr-title {
      min-width: 50%;
    }

    table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,
    table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,
    table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {
      padding: 0.75rem 1rem 0.125rem;
    }

    div.dataTables_wrapper div.dataTables_length label,
    div.dataTables_wrapper div.dataTables_filter label {
      margin-bottom: 0;
    }

    @media (max-width: 767px) {
      div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        -ms-flex-pack: center !important;
        justify-content: center !important;
        margin-top: 1rem;
      }
    }

    .btn-icon {
      background: #fff;
    }
    .btn-icon .bx {
      font-size: 20px;
    }

    .btn .bx {
      vertical-align: middle;
      font-size: 20px;
    }

    .dropdown-menu {
      padding: 0.25rem 0;
    }

    .dropdown-item {
      padding: 0.5rem 1rem;
    }

    .badge {
      padding: 0.5em 0.75em;
    }

    .badge-success-alt {
      background-color: #d7f2c2;
      color: #7bd235;
    }

    .table a {
      color: #212529;
    }

    .table a:hover,
    .table a:focus {
      text-decoration: none;
    }

    table.dataTable {
      margin-top: 12px !important;
    }

    .icon > .bx {
      display: block;
      min-width: 1.5em;
      min-height: 1.5em;
      text-align: center;
      font-size: 1.0625rem;
    }

    .btn {
      font-size: 0.9375rem;
      font-weight: 500;
      padding: 0.5rem 0.75rem;
    }

    .avatar-blue {
          background-color: #c8d9f1;
          color: #467fcf;
        }

        .avatar-pink {
          background-color: #fcd3e1;
          color: #f66d9b;
        }
        .error {
            color: red;
            font-size: 90%;
            padding-top: 10px;
            margin-bottom: -10px;
            margin-left: 15px;
        }
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>

<body>
      <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">New User</h1>
              <a href="allusers" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-arrow-left fa-sm text-white-50"></i>Back</a>
          </div>
          <div class="row">
              <div class="col-xl-12 col-lg-12">
                  <div class="card shadow mb-4"> 
                      <div class="card-body">
          <div class="container-xxl py-6">
        <div class="container">
          <div class="row g-5">
          </div>
          <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
              <h1 class="display-8 text-center mb-4" style="padding-top: 30px;">User_Details Vala123@</h1>
            <form name="rform" id="rform" onsubmit="event.preventDefault();  validateForm()" method="post">
              <div class="row g-3">
                <div class="col-sm-6"  style="padding-top: 30px;">
                    <div class="form-floating">
                        <input type="text" class="form-control border-0 bg-light" id="gname"  name ="user_name" value="" placeholder="User Name">
                    </div>
                    <div class="error" id="nameErr"></div>
                </div>                      
                <div class="col-sm-6"  style="padding-top: 30px;">
                    <div class="form-floating">
                        <input type="email" class="form-control border-0 bg-light" id="gmail"  value="" name ="email" placeholder="User Email">
                    </div>
                    <div class="error" id="emailErr" ></div>
                </div>
                <div class="col-sm-6"  style="padding-top: 30px;">
                    <div class="form-floating">
                        <input type="number" class="form-control border-0 bg-light" id="contact_number" value=""  name ="contact_number" placeholder="User contact_number">
                    </div>
                    <div class="error" id="mobileErr" ></div>
                </div>
                <div class="col-sm-6"  style="padding-top: 30px;">
                    <div class="form-floating">
                        <input type="date" class="form-control border-0 bg-light" id="dob" name ="date_of_birth"  >
                    </div>
                    <div class="error" id="dobErr"></div>
                </div>
                <div class="col-sm-6"  style="padding-top: 30px;">
                    <div class="form-floating">
                        <input type="password" class="form-control border-0 bg-light" id="Password" name ="Password" placeholder=" Password"  >
                    </div>
                    <div class="error" id="passwordErr" ></div>
                </div>
                <div class="col-sm-6"  style="padding-top: 30px;">
                    <div class="form-floating">
                        <input type="password" class="form-control border-0 bg-light" id="Conf_Password" name ="Confirm_Password" placeholder=" confirm_Password"  >
                    </div>
                    <div class="error" id="Confirm_PasswordErr"></div>
                </div>

                <div class="col-sm-6"  style="padding-top: 30px;">
                        <div class="form-floating">
                            <label class="form-check-label form-control border-0 bg-light">
                                    Gender:
                            </label>
                            <div class="form-check col-sm form-control border-0 bg-light">
                                <input class="form-check-input " type="radio" name="gender" id="gender" checked value="male"  >
                                <label class="form-check-label " for="Male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check col-sm form-control border-0 bg-light">
                                <input class="form-check-input" type="radio" name="gender" id="gender"  value="female"  >
                                <label class="form-check-label" for="Femal">
                                    Femal
                                </label>
                            </div>
                            <div class="error" id="gendererror"></div>
                        </div>
                    </div>
                <div class="col-12"  style="padding-top: 30px;">
                    <button class="btn btn-primary w-100 py-3" type="sumbit" id="adminadd" value="adminadd"  name="adminadd">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
            


<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">List_Of_AllUser</h1>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4"> 
                <div class="card-body">
    <div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            </div>
    <div class="row py-5">
      <div class="col-12">
          <table id="example" class="table table-hover responsive nowrap" style="width:100%">
            <thead>
              <tr>
                <th>USer_Id ID</th>
                <th>USer_Name</th>
                <th>Contact_Number</th>
                <th>Date_Of_Birth</th>
                <th>Gendre</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="data">
            </tbody>
          </table>

          <script>
              function printError(elemId, hintMsg) {
                  document.getElementById(elemId).innerHTML = hintMsg;
              }

              // Defining a function to validate form 
              function validateForm() {

                  // console.log("caled");
                  // return false;

                  // Retrieving the values of form elements 
                  var user_name = document.rform.user_name.value;
                  var email = document.rform.email.value;
                  var contact_number = document.rform.contact_number.value;
                  var date_of_birth = document.rform.date_of_birth.value;
                  var Password = document.rform.Password.value;
                  var Confirm_Password = document.rform.Confirm_Password.value;
                  var Confirm_Password = document.rform.Confirm_Password.value;
                  var gender = document.rform.gender.value;
                  
                  // Defining error variables with a default value
                  var nameErr = emailErr = mobileErr = dobErr = passwordErr = Confirm_PasswordErr = gendererror = true;
          
                  // Validate name
                  if(user_name == "") {
                      printError("nameErr", "Please enter your name");
                  } else {
                      var regex = /^[a-zA-Z\s]+$/;    
                      if(regex.test(user_name) === false) {
                          printError("nameErr", "Please enter a valid name");
                      } else {
                          printError("nameErr", "");
                          nameErr = false;
                      }
                  }
      
                  // Validate email address
                  if(email == "") {
                      printError("emailErr", "Please enter your email address");
                  } else {
                      // Regular expression for basic email validation
                      var regex = /^\S+@\S+\.\S+$/;
                      if(regex.test(email) === false) {
                          printError("emailErr", "Please enter a valid email address");
                      } else{
                          printError("emailErr", "");
                          emailErr = false;
                      }
                  }
      
                  // Validate mobile number
                  if(contact_number == "") {
                      printError("mobileErr", "Please enter your mobile number");
                  } else {
                      var regex = /^[1-9]\d{9}$/;
                      if(regex.test(contact_number) === false) {
                          printError("mobileErr", "Please enter a valid 10 digit mobile number");
                      } else{
                          printError("mobileErr", "");
                          mobileErr = false;
                      }
                  }
      
                  // Validate date_of_birth
                  if(date_of_birth == "") {
                      printError("dobErr", "Please select your date of birth");
                  } else {
                      printError("dobErr", "");
                      dobErr = false;
                  }
      
                  // Validate Password
                  if(Password == "") {
                      printError("passwordErr", "Please enter your password");
                  } else {
                      var minNumberofChars = 6;
                      var maxNumberofChars = 10;
                      
                      if(Password.length < minNumberofChars || Password.length > maxNumberofChars){
                          printError("passwordErr", "password length minimum 6 and max 10");

                      }else{
                          var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                          // var rgepass = strongRegex.test(Password);
                          if(strongRegex.test(Password) == false){
                              printError("passwordErr", "password should contain atleast one number and one special character");
                          }else {
                              printError("passwordErr", "");
                              passwordErr = false;
                      }
                      }
                  }

                  // Validate Confirm_Password
                  if (Confirm_Password == "") {
                      printError("Confirm_PasswordErr", "Please enter your confirmPassword");
                  } else{

                      if(Password == Confirm_Password){
                          printError("Confirm_PasswordErr", "");
                          Confirm_PasswordErr = false;
                      } else{
                          printError("Confirm_PasswordErr", "Please make sure your passwords match.");
                      }
                  }

                  if(gender == "")
                      {
                          printError("gendererror", "Please select your gender.");
                      } else{
                          printError("gendererror", "");
                          gendererror = false;
                      }  
                  
                  // Prevent the form from being submitted if there are any errors
                  if((nameErr || emailErr || mobileErr || dobErr || passwordErr || Confirm_PasswordErr || gendererror) == true) {
                      return false;
                  } else {
                      insert_data(); 
                  }
              };


              function insert_data(){

                  console.log("called");
                  // return false;
                  
                  var result = {};
                  $.each($('#rform').serializeArray(), function () {
                      result[this.name] = this.value;
                  });
                  // console.log(result);
                  // return false;
                  
                  fetch("http://localhost/curd/03_MVC_CRUD/Api/insert",{
                  method: 'POST',
                  headers: {
                  'Accept': 'application/json',
                  'Content-Type': 'application/json'
                  },
                  body: JSON.stringify(result)
                  }).then((response)=>response.json()).then((result)=> {

                      // console.log(result);
                      // return false;

                      if(result['Code'] == 1){
                          alert("insert success")
                          getalldata();

                      }else{
                          alert("insert Error")
                          getalldata();
                      }
                  })
              };

              $(document).ready(function(){
                getalldata();
              });

              function getalldata(){
                fetch("http://localhost/curd/03_MVC_CRUD/Api/getdata").then((returndata)=> returndata.json()).then((response)=>{
                  //   console.log(response);
                  var new_res=response.Data;
                  var htmltable='';
                  var class_name='';

                  new_res.forEach(element =>{
                    var gender = element.gender;

                    // console.log(gender);
                    // return false;
                    
                    if(gender==='male')
                    {
                      class_name="badge badge-success badge-success-alt mt-3";
                    }
                    else
                    {
                      class_name="badge badge-danger badge-danger-alt mt-3";
                    }
                    htmltable+=`
                    <tr>
                      <td>
                        <a href="#">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-blue mr-3">y</div>
                            <!-- <div class=""> -->
                              <p class="font-weight-bold mb-0">${element.email}</p>
                              <!-- </div> -->
                            </div>
                          </a>
                        </td>
                      <td><p class="font-weight-bold mt-3">${element.user_name}</p></td>
                      <td><p class="font-weight-bold mt-3">${element.contact_number}</p></td>
                      <td><p class="font-weight-bold mt-3">${element.date_of_birth}</p></td>
                      <td><p class="${class_name}"> ${element.gender}</p></td>
                      <td>
                          <div class="dropdown">
                                  <a class="dropdown-item"  onclick="editdata(${element.id})"><i class="bx bxs-pencil mr-2"></i> Edit Profile</a>
                                  <a class="dropdown-item text-danger" onclick="deletedata(${element.id})"><i class="bx bxs-trash mr-2"></i> Remove</a>
                          </div>
                      </td>
                    </tr>`
                  });
                  document.getElementById("data").innerHTML = htmltable;
                });
              };

              function editdata(id) {
                // console.log("edit",id);
                let url = "http://localhost/curd/03_MVC_CRUD/Api/editbyid?id="+id;
                var resultdata = "";

                fetch(url).then((response)=>response.json()).then((result)=>{
                  resultdata = result.Data['0'];

                  document.getElementById('gname').value = resultdata.user_name;
                  document.getElementById('gmail').value = resultdata.email;
                  document.getElementById('contact_number').value = resultdata.contact_number;
                  document.getElementById('dob').value = resultdata.date_of_birth;
                  document.getElementById('Password').value = resultdata.Password;
                  document.getElementById('Conf_Password').value = resultdata.Confirm_Password;                  

                  document.getElementById("adminadd").innerHTML = "Update";
                  var myForm = document.getElementById('rform');
                  myForm.setAttribute('onsubmit',`event.preventDefault(); updatedata(${resultdata.id})`);
                })
              };

              function updatedata(id){  
                var result = {};
                $.each($('#rform').serializeArray(), function () {
                    result[this.name] = this.value;
                });
                // console.log(result);
                // return false;
                fetch("http://localhost/curd/03_MVC_CRUD/Api/updatebyid?id="+id,{
                method: 'POST',
                headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
                },
                body: JSON.stringify(result)
                }).then((response)=>response.json()).then((result)=> {

                    if(result != ""){
                      document.getElementById("adminadd").innerHTML = "submit";
                      var myForm = document.getElementById('rform');
                      myForm.setAttribute('onsubmit',`event.preventDefault(); validateForm()`); 
                      // window.location.href="allluser";
                    }
                    getalldata();
                })
              };

              function deletedata(id) {       
                // console.log(id);
                // console.log("deletetododata");
                fetch("http://localhost/curd/03_MVC_CRUD/Api/delete?id="+id,{
                method: 'POST',
                headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
                }}).then((response)=>response.json()).then((result)=> {
                    console.log(result);
                if(result.Code == 1){
                    alert("delete seccussfully");
                }
                getalldata();
                })
              };
              
          </script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      </div>
    </div>
  </div>