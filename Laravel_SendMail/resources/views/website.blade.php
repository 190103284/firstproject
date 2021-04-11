<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Send Email</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> Save Information </title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<meta charset="utf-8">
	<title>Home design and interior</title>
	<link rel="stylesheet" type="text/css" href="projects.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cardo:ital@1&family=Open+Sans:wght@600&family=Raleway:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="projects.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<style>
  body{
  margin:0;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  color:black;
  background-color:#edf6f9;

}
*,
*:before,
*:after{
  box-sizing: border-box;
}
h1,h2,h3,h4,h5,h6{
  margin:0;
}
p{
  margin:0 0 10px;
}
/*Container ======================= */
.container{
  width: 100%;
  max-width: 1300px;
  margin:0 auto;

}
/*Header ======================= */
.header{
  width: 100%;
  height: 100px;
position: absolute;
top: 0;
left: 0;
z-index: 1000;
}
.header.fixed{
  height: auto;
  position: fixed;
  background-color: #aed9e0;
}
.header.fixed.header__inner{
padding-top:15px;
padding-bottom: 15px;
border-bottom: 0;
  }
.header__logo{
  
  font-size: 40px;
  color: #fff;

}
.header__inner{
  display: flex;
  justify-content: space-between;
  align-items: center;
padding: 25px 0;
  border-bottom: 1.5px solid #515369;
}
/*Header ======================= */
.nav{
  display: flex;
font-size: 13px;
font-weight: 700;
text-transform: uppercase;
}
.nav__link{
  margin-left: 50px;
color: #fff;
text-decoration: none;
opacity: 0.75;
font-size: 20px;
transition: opacity .0s linear;
}
.nav__link:first-child{
  margin-left: 0;
}
.nav__link:hover{
  opacity: 1;
  text-decoration: underline;
}
.burger{
  display: none;
  border: 0;
  background: none;
  cursor: pointer;
  padding: 15px 3px;
}
.burger__item{
  display: block;
  width: 30px;
  height: 3px;
  background-color: red;
  font-size: 0;
 color: transparent;
  position: relative;

  }
  .burger__item:before,
  .burger__item:after{
    content: "";
    width: 100%;
    height: 100%;
    background-color: #fff;
    position: absolute;
    left: 0;
    z-index: 1;
    border: 0;
  }
  .burger__item:before{
    top: -8px;
  }
  .burger__item:after{
    bottom: -8px;
  }
  






/*Intro ======================= */
 .intro{
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-top: 90px;
  height: 965px;
  background: url("https://cdn.shopify.com/s/files/1/0014/7996/6818/articles/blog-12.jpg?v=1535345362");
  background-position: center;
background-repeat: no-repeat;
background-size: cover;
 }
 .intro__title{
  margin: 0;
  font-family: 'Open Sans', sans-serif;
  font-size: 65px;
  color: #fff;
  font-weight: 700;
  text-transform: uppercase;
  text-align: center;
  margin:0 0 30px;
 }
 .intro__inner{
  width: 100%;
  max-width: 970px;
  margin: 0 auto;
  text-align: center;
 }
 .intro__subti{
  font-size: 25px;
  margin-bottom: 60px;
  line-height: 1.5;
  color: #fff ;
  font-weight: 500;
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
 /*Features ======================*/
 .features{
  display: flex;
  margin: 120px 0;
flex-wrap: wrap;
padding-top:-10px;

 }
 .features__item{
  width:33.33333%;
  text-align: center;
padding: 0 40px;
margin: 25px 0;
 }
 .features__icon{
  width:90px;
  height:90px;
  margin-bottom: 20px;
 }
 .features__icon1{
  width:120px;
  height:120px;
  margin-bottom: 10px;
  margin-top: -15px;
 }
 
 

 .features__tit{
  margin-bottom: 15px;
  font-size: 20px;
  color:black;
  font-weight: 700;
  text-transform: uppercase;
 }
 .features__text{
  font-size: 16px;
  line-height: 1.5;
  color: black;
 }


.video{
  margin-left: 60px;
  background:url("");

}
p{
width: 550px;
margin-left: 20px;
}
.text{
  margin-left: 100px;
  width: 620px;

}
.cont{
  margin-top: 100px;
  background-color: #219ebc;
  width: 1517px;
  height: 600px;
}
.map{
  padding-top:40px;
  padding-left: 900px;
}

.texxt{
  margin-right: -750px;
  margin-top: -450px;
  padding-right: -450px;
  padding-top: -50px;
}






















  /*MEDIA QUERY*
  ========================*/
  @media(max-width: 1050px){
.intro__title{
  font-size: 45px;
}
.burger{
  display: block;
}

}
@media(max-width: 767px){
.intro{
  height:auto;
  padding-top: 130px;
  padding-bottom: 300px;
}
.intro__title{
  font-size: 20px;
  padding-top: 130px;
}
.intro__subti{
  font-size: 18px;
  margin-bottom: 30px;
}
.nav{
  display: none;
  flex-direction: column;
  width: 100%;
  text-align: right;
  position: absolute;
top: 100%;
right: 0;
background-color:#A9CCE3;
}
.nav.show{
  display: flex;
}
.nav__link{
  padding: 9px 15px;
}
}
</style>
<style>
	
p{
	margin-top: 25px;
margin-bottom: 25px;
color:  solid black;
}
img {
  width: 100%;
}

.container {
  /*max-width: 1450px;*/
  margin:auto;
  overflow: hidden;
  padding: 0 2rem;
}

.navbar {
  font-size: 1.2rem;
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;
}
.but{
	font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  margin-left: 1px;
}
.but:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.navbar .container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 2rem;
}



.section-a .container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 3rem;
  align-items: center;
  justify-content: center;
}

.section-a h1 {
  font-size: 4rem;
  margin-left: -50px;
  color: var(--primary-color);
}



.section-footer .container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 1rem;
}

.section-footer h2 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

.section-footer h3 {
  margin-bottom: 0.7rem;
}

.section-footer a {
  line-height: 1.9;
  color: #ccc;
}

.section-footer a > i {
  color: #555;
  margin-right: 0.5rem;
}

.email-form {
  width: 100%;
  display: inline-block;
  background-color: #555;
  position: relative;
  border-radius: 20px;
  line-height: 0;
  margin-top: 1rem;
}

/* // .form-control-wrap {
// 	position: relative;
// 	display: inline-block;
// 	width: 100%;
// } */

.email-form .form-control {
  display: inline-block;
  border: 0;
  outline: 0;
  font-size: 1rem;
  color: #ddd;
  background-color: transparent;
  font-family: inherit;
  margin: 0;
  padding: 0 3rem 0 1.5rem;
  width: 100%;
  height: 45px;
  border-radius: 20px;
}

.email-form .submit {
  display: inline-block;
  position: absolute;
  top: 0;
  right: 0;
  width: 45px;
  height: 45px;
  background-color: #eee;
  font-size: 1rem;
  text-align: center;
  margin: 0;
  padding: 0;
  outline: 0;
  border: 0;
  color: #333;
  cursor: pointer;
  border-radius: 0 20px 20px 0;
}

.btn {
  display: inline-block;
  background: var(--primary-color);
  color: #fff;
  padding: 0.8rem 1.5rem;
  border: none;
  cursor: pointer;
  font-size: 1.1rem;
  border-radius: 30px;
}

.btn:hover {
  background: var(--secondary-color);
}

.overlay {
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: var(--overlay-color);
}

@media (max-width: 700px) {
  .section-a .container {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .section-a .container div:first-child {
    order: 2;
  }

  .section-a .container div:nth-child(2) {
    order: -1;
  }

  .section-a img {
    width: 80%;
    margin: auto;
  }

  .section-c .gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
  }
  .section-c .gallery a:first-child {
    grid-row: 1/1;
    grid-column: 1/1;
  }

  .section-c .gallery a:nth-child(2) {
    grid-column: 2/4;
    grid-row: 2/2;
  }

  .section-c .gallery a:last-child {
    display: none;
  }

  .section-footer {
    padding: 2rem 0;
  }
  .section-footer .container {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .section-footer div:nth-child(2),
  .section-footer div:nth-child(3) {
    display: none;
  }
}

	</style>
<style >
.gallery-wrap {
  display: flex;
  flex-direction: row;
  width: 100%;
  height: 70vh;
  margin-bottom: 100px;
}

.item {
  flex: 1;
  height: 105%;
  background-position: center;
  background-size: cover;
  background-repeat: none;
  transition: flex 0.8s ease;
}
.item:hover {
  flex: 7;
}
<style>    
body {
    color: #000;
    background-color:#83c5be;
    font-family: "Roboto", sans-serif;
}
.contact-form {
    padding-top: 30px;
    margin: 30px ;
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

<header class="header" id="header">
		<div class="container">
		<div class="header__inner">
		<div class="header__logo">
			<h1 class="header__logo">DOMHOUSE</h1>
		</div>
		<nav class="nav" id="nav">
			<a class="nav__link" href="#" data-scroll="#features" >{{__('website.features')}}</a>
			<a class="nav__link" href="#"data-scroll="#works">{{__('website.works')}}</a>
			<a class="nav__link" href="#"data-scroll="#team">{{__('website.our team')}}</a>
			<a class="nav__link" href="#"data-scroll="#background">{{__('website.interior')}}</a>
			<a class="nav__link" href="#"data-scroll="#reviews">{{__('website.location')}}</a>
			<!--<a class="nav__link" href="#"data-scroll="#download">Download</a>-->
		</nav>
		<button class="burger" type="button" id="nav__toggle">
      <span class="burger__item"></span>
    </button>
	</div>
</div>

	</header>
	<!--Intro-->
	<div class="intro" id="intro">
	
	<div class="container">
		<div class="intro__inner">
		<h1 class="intro__title">{{__('website.Harmony in every stone,
    Elegance in every line')}}</h1>
<h2 class="intro__subti">{{__('website.For your convenience and comfort')}}</h2>

</div>
	</div>
</div>


<!--Features-->
<div class="container">
	<div class="features" id="features">
		<div class="features__item">
			<img class="features__icon" src="https://www.clipartmax.com/png/full/287-2876713_analytics-icon-png-data-analysis.png">
			<h4 class="features__tit">{{__('website.Project')}}</h4>	
			<div class="features__text">{{__('website.Sale of finished projects')}}</div>
	</div>
	<div class="features__item">
			<img class="features__icon1" src="https://img.pngio.com/statistics-mcqs-preparation-the-unipedia-statistical-png-800_800.png">
			<h4 class="features__tit">{{__('website.Modern design')}}</h4>	
			<div class="features__text">{{__('website.Everything you need')}}</div>
	</div>
	<div class="features__item">
			<img class="features__icon" src="https://www.intimediastudio.com/wp-content/uploads/2017/07/aulas-virtuales-icono.png">
			<h4 class="features__tit">{{__('website.Our mission')}}</h4>	
			<div class="features__text">{{__('website.Designing the facades')}}</div></div>
	<div class="features__item">
			<img class="features__icon" src="https://cdn3.iconfinder.com/data/icons/startup-management-flat/256/-_mandate_checklist_management_project-512.png">
			<h4 class="features__tit">{{__('website.Professional expertise')}}</h4>	
			<div class="features__text">{{__('website.Nefa Architects looks')}}</div>
	</div>
	<div class="features__item">
			<img class="features__icon" src="https://www.clipartmax.com/png/full/119-1197277_puzzle-icon-teaser-icon-puzzle-character-angel-tube-station.png">
			<h4 class="features__tit">{{__('website.Our drawings')}}</h4>	
			<div class="features__text">{{__('website.Drawings and projects')}}			</div>
	</div>

	<div class="features__item">
			<img class="features__icon" src="https://cdn4.iconfinder.com/data/icons/seo-103/614/3277_-_Directory_Submission-512.png">
			<h4 class="features__tit">{{__('website.About Us')}}</h4>	
			<div class="features__text">{{__('website.Our group of companies')}}
			</div>
	</div>
</div>
</div>



<!--<form action ="{{ route('emails.send') }} " method="POST" enctype="multipart/form-data">

@csrf

<input type = "text" name="name">
<input type = "file" name="image">
<br>
<input type = "submit" value="Submit">
</form>-->
<!--
<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
<div class="contact-form">
				<h1>Save Information </h1>
            
                <form action="{{ route('addimage') }}" method="post" enctype="multipart/form-data" >
                @csrf

                <div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputName">Name</label>
								<input type="text" name="name" class="form-control" placeholder="Enter Name">
                                
                                <span class="text-danger"></span>
                                </div>
							</div>
                            <div class="col-sm-6">
                               <div class="form-group">
								<label for="inputSurame">Surname</label>
								<input type="text" name="surname" class="form-control" placeholder="Enter Surname">
                                
                                <span class="text-danger"></span>
                            </div>
                            </div>
                            </div>
						
						           
					<div class="form-group">
						       <label for="inputEmail">Email</label>
                               <input type="text" name="email" class="form-control" placeholder="Enter email">
                      
                        <span class="text-danger">  </span>
                    </div>
					
                   <div class="form-group">
                           <label for="image">Upload your profile photo </label>
                           <br>
                           <input type="file" name="image_path
                           " class="form-control" id="image">
                   </div>

					<div class="text-center">
						<button type="submit" class="btn btn-primary"> Save information </button>
					</div>            
				</form>
			</div>
        -->
            
</body>
</html>