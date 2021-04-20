<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Send Email</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Mail Send in Laravel Example</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>    
body {
    color: #000;
    background-image: url("https://thepridela-enki-v2.s3.amazonaws.com/wp-content/uploads/2019/06/Screen-Shot-2019-06-24-at-1.55.45-PM.png");
    font-family: "Roboto", sans-serif;
}
.contact-form {
    padding: 50px;
    margin: 30px auto;
}	
.contact-form h1 {
    font-size: 42px;
    font-family: 'Pacifico', sans-serif;
    margin: 0 0 50px;
    text-align: center;
}
a.button {
  display: inline-block;
  color: #fff;
  padding: 12px;
  border-radius: 3px;
  text-decoration: none;
  font-family: Tahoma;
  font-size: 18px;
  line-height: 1;
  font-weight: 100;
}

a.button-red {
  background-color: red;
}

a.button-green {
  background-color: green;
}
.button{
  font-size: 20px;
  border-radius: 5px;
  border: none;
  padding: 14px 40px;
  display: inline-block;
  vertical-align: top;
  text-transform: uppercase;
  background-color: white;
  cursor: pointer;
  color: black;
  margin-left: 30px;

}
.button:hover{
  background-color: #E6E4E4;
}
.contact-form .form-group {
    margin-bottom: 20px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 40px;
    border-radius: 2px;
}

.contact-form .btn-primary, .contact-form .btn-primary:active {
    min-width: 200px;
    color: #EE3D40;
    background: #A7ECE7;
    margin-top: 20px;
    border: none;
}
.contact-form .btn-primary:hover {
    color: #fff; 
}
.contact-form .btn-primary i {
    margin-right: 5px;
}
.contact-form label {
    opacity: 0.9;
}
.contact-form textarea {
    resize: vertical;
}
.bs-example {
    margin: 20px;
}
</style>
</head>
<body>
<!--<form action ="{{ route('emails.send') }} " method="POST" enctype="multipart/form-data">

@csrf

<input type = "text" name="name">
<input type = "file" name="image">
<br>
<input type = "submit" value="Submit">
</form>-->
<!--<a href=""  target="_blank"><button class="button">Back</button></a>-->

<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
<div class="contact-form">
				<h1>{{__('lang.data')}}</h1>
                
                <form action="{{ route('emails.send') }}" method="post" enctype="multipart/form-data" >
                @csrf

                <div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputName">{{__('lang.name')}}</label>
								<input type="text" name="name" class="form-control" placeholder=>
                                
                                <span class="text-danger"></span>
                                </div>
							</div>
                            <div class="col-sm-6">
                               <div class="form-group">
								<label for="inputSurame">{{__('lang.surname')}}</label>
								<input type="text" name="surname" class="form-control" placeholder>
                                
                                <span class="text-danger"></span>
                            </div>
                            </div>
                            </div>
						
						           
					<div class="form-group">
						       <label for="inputEmail">{{__('lang.email')}}</label>
                               <input type="text" name="email" class="form-control" placeholder>
                      
                        <span class="text-danger">  </span>
                    </div>
					
                   <div class="form-group">
                                <label for="exampleFormControlFile1">{{__('lang.upload')}}</label>
                        <br>

                   <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>

					<div class="text-center">
						<button type="submit" class="btn btn-primary">{{__('lang.send')}}</button>
					</div>            
				</form>
			</div>
</body>
</html>