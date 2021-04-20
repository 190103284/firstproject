<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
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
    background-image: url("background.jpg");
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
.contact-form .form-group {
    margin-bottom: 20px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 40px;
    border-radius: 2px;
}
.contact-form .form-control {
    /*border-color: #e2c705;*/
}
.contact-form .form-control:focus {
    /*border-color: #d8b012;
    box-shadow: 0 0 8px #dcae10;*/
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
<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
				<h1>Send information about you</h1>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ route('emails.send') }}" method="post">
                @csrf
                
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputName">{{__('lang.name')}}</label>
								<input type="text" name="name" class="form-control" placeholder="Enter Name">
                                @error('name')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputEmail">Surname</label>
								<input type="email" name="surname" class="form-control" placeholder="Enter Surname">
                                @error('surname')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
							</div>
						</div>
					</div>            
					<div class="form-group">
						<label for="inputSubject">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter email">
                        @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload your profile photo </label>
    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
					<div class="text-center">
						<button type="submit" class="btn btn-primary"> Send</button>
					</div>            
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>