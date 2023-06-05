<style>
         .error {
            color: red;
            font-size: 90%;
            padding-top: 10px;
            margin-bottom: -10px;
            margin-left: 15px;
        }
    </style>
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
                                <input type="text" class="form-control border-0 bg-light" id="gname" name ="user_name" placeholder="User Name">
                            </div>
                            <div class="error" id="nameErr"></div>
                        </div>                      
                        <div class="col-sm-6"  style="padding-top: 30px;">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0 bg-light" id="gmail" name ="email" placeholder="User Email">
                            </div>
                            <div class="error" id="emailErr" ></div>
                        </div>
                        <div class="col-sm-6"  style="padding-top: 30px;">
                            <div class="form-floating">
                                <input type="number" class="form-control border-0 bg-light" id="contact_number" name ="contact_number" placeholder="User contact_number">
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
                                        <input class="form-check-input " type="radio" name="gender" id="gender" value="male"  >
                                        <label class="form-check-label " for="Male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check col-sm form-control border-0 bg-light">
                                        <input class="form-check-input" type="radio" name="gender" id="gender"  value="female" >
                                        <label class="form-check-label" for="Femal">
                                            Femal
                                        </label>
                                    </div>
                                    <div class="error" id="gendererror"></div>
                                </div>
                            </div>
                        <div class="col-12"  style="padding-top: 30px;">
                            <button class="btn btn-primary w-100 py-3" type="sumbit" value="adminadd"  name="adminadd">Submit</button>
                        </div>
                        </div>
                        </form>
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
                                        window.location.href="admindashboard"
                                    }else{
                                        alert("insert Error")
                                        window.location.href="adduser"
                                    }
                                })
                            };
                        </script>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>

