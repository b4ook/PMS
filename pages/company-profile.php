<!DOCTYPE html>
<html>
    
<head>
	<title>Company Profile</title>
	
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			
				
				<div class="d-flex justify-content-center form_container">
					<form>

                   <div class="row">
                        <div class="col-sm-12">
                            <div class="card" style="margin-bottom:10px;">
                            <div class="card-body">
                                <h5 class="card-title" style="margin-top: 20px;margin-bottom:40px;"><b>Company Profile Registration <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="Fill the form below to register your company profile"></i></b></h5>
                                
                                <!-- <button type="submit" class="btn btn-danger" style="margin-left:930px;margin-bottom:10px;">Back</button> -->
                                <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="text" class="col-sm-5 col-form-label">Company Owner <label style="color:red;">*</label></label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" placeholder="Company Owner" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-sm-5 col-form-label">Company Name<label style="color:red;">*</label></label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" placeholder="Company Name" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5 col-form-label">Business Type <label style="color:red;">*</label></label>
                                            <div class="col-sm-7">
                                                <select class="form-control" required>
                                                        <option>IT</option>
                                                        <option>Government</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5 col-form-label">Establishment Date </label>
                                            <div class="col-sm-7">
                                                <input type="date" class="form-control" id="" placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5 col-form-label">Departments </label>
                                            <div class="col-sm-7">
                                                <label for="">
                                                    <input type="number" class="form-control" id="age" min="1" max="5" step="1" value="1" >
                                                </label>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="text" class="col-sm-5 col-form-label">Company Address <label style="color:red;">*</label></label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" placeholder="Company Address" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-sm-5 col-form-label">Company Phone # <label style="color:red;">*</label></label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" placeholder="Company Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-sm-5 col-form-label">Company email <label style="color:red;">*</label></label>
                                            <div class="col-sm-7">
                                                <input class="form-control" type="email" placeholder="Company email" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5 col-form-label">Company Description <label style="color:red;">*</label></label>
                                            <div class="col-sm-7">
                                                <textarea class="form-control" id="" cols="41" rows="5" placeholder="Company Description" required></textarea>
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label">Justification <label style="color:red;">*</label></label>
                                            <div class="col-sm-7">
                                                <textarea class="form-control" id="" cols="41" rows="5" placeholder="Justification" required></textarea>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-primary" style="margin-left:400px;">Submit</button>
                                    <button type="reset" class="btn btn-light" style="margin-left:10px;">Cancel</button>
                                </form>
                            </div>
                            </div>
                        </div>
                      
                    </div>

					</form>
				</div>
		
			</div>
		</div>
	</div>
    <script src="../js/tooltips.js"></script>
</body>
</html>
