<!DOCTYPE html>
<html>

<head>


    <!-- Title Page-->
    <title>Add staff | Admin Panel</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
	
</head>
<body style = "background: marginta">
<body>
    <header>
    
        
        <nav>
        <img src="mudatexlog.png" class="avatar">
            <ul id="navli">
            <li><a class="homeblack" href="aloginwel.php"><b>DASHBOARD</b></a></li>
            <li><a class="homered" href="addemp.php"><b><i>ADD STAFF</i></b></a></li>
				<li><a class="homeblack" href="viewemp.php"><b>VIEW STAFF</b></a></li>
			
			
				<li><a class="homeblack" href="change_password.php"><b>CHANGE PASSWORD</b></a></li>
				
				<li><a class="homeblack" href="alogin.html"><b>LOG OUT</b></a></li>

                
            </ul>
        
        </nav>
    </header>
    <div class="divider"></div>
    
 
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"><i>Registration Info:</i></h2>
                    <form action="process/addempprocess.php" method="POST" enctype="multipart/form-data">

<div class="input-group">
<b>
                           <input class="input--style-2" type="text area" placeholder="Staff ID" name="staff_id" required="required">
                        </div>
                                                <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="First Name" name="firstname" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lastname" required="required">
                                </div>
                            </div>
                            
                        </div>





                        <div class="input-group">
                            
                            
                                                                                                       
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="employmentStatus">
                                            <option disabled="disabled" selected="selected" ><b>Employment Status</b></option>
                                            <option value="Active">Active</option>
                                            <option value="Not_active">Not active</option>
                                          
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                        </div>
                        <p><i>Date Of Birth:</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="BIRTHDATE" name="birthday" required="required">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                          
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><i>Contact:</p>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Contact Number" name="contact" required="required" >
                        </div>

                        

                        <p><i>Address:</p>
                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="address" required="required">
                        </div>
                        <p><i>Guarantor/Contact:</p>
                        <div class="input-group">
                            <input class="input--style-1" type="text area" placeholder="guarantor" name="guarantor" required="required">
                        </div>
                        <div class="col-2">
                        <div class="input-group">
                            
                                                                                                                                  
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="branch">
                                    <option disabled="disabled" selected="selected">Branch</option>
                                    <option value="Abuja Branch">Abuja Branch</option>
                                    <option value="Adamawa Branch">Adamawa Branch</option>
                                    <option value="Kaduna Branch">Kaduna Branch </option>
                                    <option value="Katsina Branch">Katsina Branch </option>
                                    <option value="Ibrahim Taiwo Rd.(Head Office)">Ibrahim Taiwo Rd.(Head Office)</option>
                                    <option value="SabonGari Branch kano">SabonGari Branch kano</option>
                                    <option value="Hamdala House">Hamdala House</option>
                                    <option value="Amana House">Amana House</option>
                                            <option value="Sabonruwa Branch">Sabon Ruwa Branch</option>
                                    <option value="Sokoto Branch">Sokoto Branch</option>
                                    <option value="Rufaida House,Gwarzo Rd, kano">Rufaida House,Gwarzo Rd, kano</option>
                                    
                                  
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            </div>
                            
                        <div class="col-1">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="dept">
                                            <option disabled="disabled" selected="selected">Section</option>
                                            <option value="Account">Account</option>
                                            <option value="Store">Store</option>
                                            <option value="Admin">Admin</option>
                                            <option value="E-Commerce/IT">E-Commerce/IT</option>
                            
                                            <option value="Fashion/Cosmetics">Fashion/Cosmetics</option>
                                            <option value="Lace/Material">Lace/Material</option>
                                            <option value="Textile">Textile</option>
                                            <option value="Jewelleries">Jewelleries</option>
                                            
                                            <option value="Men Shoe/collection">Men's Shoe/collection</option>
                                            <option value="Children Wears">Children Wears</option>
                                            <option value="Shadda">Shadda</option>  
                                            <option value="Shoes/Bags">Shoes/Bags</option> 
                                            <option value="Abaya">Abaya</option>  
                                            <option value="Furnitures">Furnitures</option>  
                                            <option value="Curtains">Curtains</option>   
                                            <option value="Highclass">Highclass</option> 
                                            <option value="Veils">Veils</option>   
                                            <option value="Other">Other</option>
                                     
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-1">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="position">
                                            <option disabled="disabled" selected="selected">Position</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Manager">Secretary</option>
                                            <option value="Manager">Auditor</option>
                                            <option value="Manager">Human Resource</option>
                                            <option value="Manager">Customer Care</option>
                                            <option value="Head">Head</option>
                                            <option value="Cashier">Cashier</option>
                                            <option value="Sales Rep">Sales Rep</option>
                                            <option value="Cleaner">Cleaner</option>
                                            <option value="Technician">Technician</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <p><i>Salary:</p>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Salary" name="salary">
                        </div>
                        <p4<i>Remark:</p4>
                        <div class="input-group">
                            <input class="input--style-1" type="text area" placeholder="Remark" name="remark" required="required">
                        </div>
                        <div class="input-group">
						<p1>upload staff photo</P1>
                            <input class="input--style-1" type="file" placeholder="file" name="photo">
                        </div>






                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
