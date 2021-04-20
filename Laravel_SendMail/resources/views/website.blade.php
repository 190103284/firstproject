<!DOCTYPE html>
<html lang="ru">
<head>
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

.item-1 {
  background-image: url("http://sibremstroi.ru/wp-content/uploads/2021/01/kupit-dom-fahverk-v-spb.jpg");
}

.item-2 {
  background-image: url("https://i.pinimg.com/originals/79/95/73/7995730a0e61de6d6ecfe58fda0bceb2.jpg");
}

.item-3 {
  background-image: url("https://i.pinimg.com/originals/96/d9/63/96d96380b2be07bc818f60a60131edaf.jpg");
}

.item-4 {
  background-image: url("https://avatars.mds.yandex.net/get-zen_doc/100325/pub_5e4bca30e9c3ad18fb31e967_5e4bcda695ed5c05adb31408/scale_1200");
}

.item-5 {
  background-image: url("https://i.pinimg.com/originals/68/8e/32/688e32cd90dbb711edc5812f7d05975d.jpg");
}

	</style>
	











	<style >
		.contain {
  width:1350px;
  
  margin-top: 5px;
  margin-left: 115px;

  display:inline-block;
}

.panel .pad {
  padding: 0 15px; 
}
.panel.flip .action {
  display: inline-block;
}

.panel {
	
  width: 225px;
  height: 350px;
  margin:17px;
  padding-right: 25px;
  margin-top: 100px;
  position:relative;
  display: inline-block;
  -webkit-perspective: 600px;
  -moz-perspective: 600px;
}
.panel .front {
  z-index: 900;
  width: inherit;
  height: inherit;
  background-color: #a0c4ff;  
  -moz-box-shadow: 0 1px 15px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 15px rgba(0,0,0,0.1);
  box-shadow: 0 1px 15px rgba(0,0,0,0.1);
  
  -webkit-transform: rotateX(0deg) rotateY(0deg);
  -webkit-transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
  
  -moz-transform: rotateX(0deg) rotateY(0deg);
  -moz-transform-style: preserve-3d;
  -moz-backface-visibility: hidden;
  
  -o-transform: rotateX(0deg) rotateY(0deg);
  -o-transform-style: preserve-3d;
  -o-backface-visibility: hidden;
  
  -ms-transform: rotateX(0deg) rotateY(0deg);
  -ms-transform-style: preserve-3d;
  -ms-backface-visibility: hidden;
 
  transform: rotateX(0deg) rotateY(0deg);
  transform-style: preserve-3d;
  backface-visibility: hidden;
  
  -o-transition: all .4s ease-in-out;
  -ms-transition: all .4s ease-in-out;
  -moz-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}
.panel.flip .front {
  z-index: 900;
  background: #fff;
  
  -webkit-transform: rotateY(180deg);
  -moz-transform: rotateY(180deg);
  -o-transform: rotateY(180deg);
  -ms-transform: rotateY(180deg);
  transform: rotateY(180deg);
  
  -moz-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
  -webkit-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
  box-shadow: 0 15px 50px rgba(0,0,0,0.2);
}
  	
.panel .back {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 800;
  width: inherit;
  height: inherit;
  background: #fff;
  border:1px solid #000;
  -webkit-transform: rotateY(-180deg);
  -webkit-transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
  
  -moz-transform: rotateY(-180deg);
  -moz-transform-style: preserve-3d;
  -moz-backface-visibility: hidden;
  
  -o-transform: rotateY(-180deg);
  -o-transform-style: preserve-3d;
  -o-backface-visibility: hidden;
  
  -ms-transform: rotateY(-180deg);
  -ms-transform-style: preserve-3d;
  -ms-backface-visibility: hidden;
  
  transform: rotateY(-180deg);
  transform-style: preserve-3d;
  backface-visibility: hidden;
 
  -o-transition: all .4s ease-in-out;
  -ms-transition: all .4s ease-in-out;
  -moz-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}
		
.panel.flip .back {
  z-index: 1000;
  background-color: #dad7cd;
  
  -webkit-transform: rotateX(0deg) rotateY(0deg);
  -moz-transform: rotateX(0deg) rotateY(0deg);
  -ms-transform: rotateX(0deg) rotateY(0deg);
  -o-transform: rotateX(0deg) rotateY(0deg);
  transform: rotateX(0deg) rotateY(0deg);
  
  box-shadow: 0 15px 50px rgba(0,0,0,0.2);
  -moz-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
  -webkit-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
}

.frontTitle {
  padding-top:7px;
  text-align:center;
  font-family:'latoregular',arial;
  font-size:18px;
  color:#588157;
  height:45px;
}

.frontLogo {
    width:100%;
    height:200px;
    background-repeat:no-repeat;
    background-position:center center;
}

.isas {
  background-image:url('https://i.ytimg.com/vi/HWpmlwjmvqg/maxresdefault.jpg');
  background-size:165px 150px;
}
.isass {
  background-image:url('https://img77.uenicdn.com/image/upload/v1503675786/category/architect_shutterstock_347420135_architect_design_plan_project_interior_engineer_floor_layout_blueprint_woman.jpg');
  background-size:150px 150px;
}

.boisedigital {
 background-image:url('https://static.dw.com/image/16227207_304.jpg');
      background-size:150px 150px;
  background-position:center center;
}

.dissolve {
 background-image:url('https://assets.ey.com/content/dam/ey-sites/ey-com/en_gl/topics/careers-at-ey/ey-architect-hands-model-v1-0-20190326.jpg');
      background-size:150px 150px;  
}
.dissolvee {
 background-image:url('https://vuconsult.ru/wp-content/uploads/2020/05/597378.jpg');
      background-size:150px 150px;  
}

.frontLocation {
  padding-top:10px;
  text-align:center;
  color:006400;
  font-family:'latoregular',arial;
  font-size:18px;
}

.backTitle {
  padding:10px;
   color:#000;
  font-family:'latohairline',arial;
  font-size:16px;
  font-weight:bold;
}

.backParagraph {
   padding:10px;
  padding-top:0;
   color:#000;
  font-family:'latoregular',arial;
  font-size:14px;
}

.backGoto {
  padding:10px;
  padding-top:0;
  color:#06f;
  font-family:'latoregular',arial;
  font-size:14px;
}

.backGoto a {
  text-decoration:none;
  color:#06f;
  -webkit-transition:0.1s all linear;
  -moz-transition:0.1s all linear;
  -o-transition:0.1s all linear;
  transition:0.1s all linear;
}

.backGoto a:hover {
  text-decoration:underline;
  padding-left:15px;
}
	</style>

<style >
	#background {
  margin-top: 100px;
  margin-bottom: 150px;
  height: auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 30px 0px 10px 0px;
}

#title {
  color: white;
  background-color:red;
  width: 100%;
  text-align: center;
  margin-bottom: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.titlePic {
  height: 50px;
}

#titleWord {
  margin: 0 5px;
  font-size: 4rem;
  font-family: lobster;
  font-weight: 100;
  overflow-wrap: break-words;
}

#gallery {
  background-color: rgb(255,255,255,.3);
  width: 85%;
  padding: 10px 10px 10px 10px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  border-radius: 5px;
}

.photobox {
  color: white;
  width: 33.3333333%;
  height: auto;
  display: flex;
  justify-content: center;
}

.photo {
  width: 97%;
  margin-top: 5px;
  margin-bottom: 5px;
  border-radius: 7%;
  border-color: rgb(255, 228, 222);
  border-width: 1px;
  border-style: solid;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.photo:hover{
  border-color: rgb(255, 253, 136);
  border-width: 3px;
  cursor: pointer;
}

@media (max-width: 600px) {
  .photobox {
    width: 50%;
  }
  #titleWord {
    font-size: 3rem;
  }
}

@media (max-width: 425px) {
  .photobox {
    width: 100%;
  }
  .titlePic {
    display: none;
  }
}

@media (max-width: 325px) {
  #titleWord {
    font-size: 2.5rem;
  }
}
</style>
<style >
		.heading {
  box-sizing: border-box;
  
 margin-top: 140px;
  padding: 0;
margin-bottom: -70px;
  font-family: "PT Sans";
  background-color: none;
  color: #333;
}

.section {
  position: relative;
  width: 900px;
  max-width: 80%;
  border: 2px solid #333;
  border-top: none;
  text-align: center;
  margin: 60px auto;
}

.section h1 {
  position: relative;
  margin-top: -14px;
  display: inline-block;
  letter-spacing: 4px;
}

.top-border{
  position: absolute;
  height: 2px;
  width: 24%;
  background-color: #333;
}

.right {
  right: 0;
}

.left {
  left: 0;
}

@media (max-width: 685px) {
.top-border {	
  width: 18%;
	}
}

.section p {
  width: 61%;
  margin: 20px auto 40px auto;
  line-height: 30px;
  font-size: 15px;
}

.section a {
  outline: 0;
  display: inline-block;
  padding: 20px;
  margin-bottom: 40px;
  width: 440px;
  max-width: 80%;
  background-color: #333;
  color: #fff;
  font-size: 22px;
  letter-spacing: 3px;
  transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -webkit-transition: all 0.3s ease 0s;
}

.section a:hover {
  background-color: #1D222D;
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

.section a:link, .section a:visited, .section a:link:hover, .section a:visited:hover {
  text-decoration: none;
  color: #fff;
}

@media (max-width: 500px) {
  .top-border {	
    display: none;
  }
  .section {
  border-top: 2px solid #333;
  }
  .section h1 {
    margin: 20px 6px;
  }
}
	</style>
	
	</head>
<body>
	<!--Header-->
	<header class="header" id="header">
		<div class="container">
		<div class="header__inner">
		<div class="header__logo">
			<h1 class="header__logo">DOMHOUSE</h1>
		</div>
		<nav class="nav" id="nav">
			<a class="nav__link" href="#" data-scroll="#features" >{{__('lang.features')}} </a>
			<a class="nav__link" href="#"data-scroll="#works">{{__('lang.works')}}</a>
			<a class="nav__link" href="#"data-scroll="#team">{{__('lang.our team')}}</a>
			<a class="nav__link" href="#"data-scroll="#background">{{__('lang.interior')}}</a>
			<a class="nav__link" href="#"data-scroll="#reviews">{{__('lang.location')}}</a>
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
		<h1 class="intro__title">{{__('lang.Harmony')}}</h1>
<h2 class="intro__subti">{{__('lang.For')}}</h2>
<a href="http://127.0.0.1:8000/emails"  target="_blank"><button class="button">{{__('lang.contact')}}</button></a>
</div>
	</div>
</div>


<!--Features-->
<div class="container">
	<div class="features" id="features">
		<div class="features__item">
			<img class="features__icon" src="https://www.clipartmax.com/png/full/287-2876713_analytics-icon-png-data-analysis.png">
			<h4 class="features__tit">{{__('lang.Project')}}</h4>	
			<div class="features__text">
      {{__('lang.Sale')}}</div>
	</div>
	<div class="features__item">
			<img class="features__icon1" src="https://img.pngio.com/statistics-mcqs-preparation-the-unipedia-statistical-png-800_800.png">
			<h4 class="features__tit">{{__('lang.Modern')}}</h4>	
			<div class="features__text">{{__('lang.Everything')}}
      </div>
	</div>
	<div class="features__item">
			<img class="features__icon" src="https://www.intimediastudio.com/wp-content/uploads/2017/07/aulas-virtuales-icono.png">
			<h4 class="features__tit">{{__('lang.Our')}}</h4>	
			<div class="features__text">
      {{__('lang.Designing')}}</div>
	</div>
	<div class="features__item">
			<img class="features__icon" src="https://cdn3.iconfinder.com/data/icons/startup-management-flat/256/-_mandate_checklist_management_project-512.png">
			<h4 class="features__tit">{{__('lang.Professional')}}</h4>	
			<div class="features__text">
      {{__('lang.Nefa')}}</div>
	</div>
	<div class="features__item">
			<img class="features__icon" src="https://www.clipartmax.com/png/full/119-1197277_puzzle-icon-teaser-icon-puzzle-character-angel-tube-station.png">
			<h4 class="features__tit">{{__('lang.Our drawings')}}</h4>	
			<div class="features__text">
      {{__('lang.Drawings')}}</div>
	</div>

	<div class="features__item">
			<img class="features__icon" src="https://cdn4.iconfinder.com/data/icons/seo-103/614/3277_-_Directory_Submission-512.png">
			<h4 class="features__tit">{{__('lang.About')}}</h4>	
			<div class="features__text">
			{{__('lang.Our group')}}</div>
	</div>
</div>
</div>




<!--Kartinki-Works-->
<div class="gallery-wrap" id="works">
  <div class="item item-1"></div>
  <div class="item item-2"></div>
  <div class="item item-3"></div>
  <div class="item item-4"></div>
  <div class="item item-5"></div>
</div>




<!--Kartinki-Works-->

<div class="heading" id="team">
<div class="section">
  <div class="top-border left"></div>
  <div class="top-border right"></div>
  <h1>{{__('lang.team')}}</h1>
  <p>{{__('lang.experience')}}</p>
   </div>
</div>


<!--Teams-->
<div class="contain">
<div class="hover panel" onmouseover="javascript:this.className += ' flip';" onmouseout="javascript:this.className = 'hover panel';">
  <div class="front">
      <div class="frontTitle">
      {{__('lang.proj')}}
      </div>
      <div class="frontLogo isas">
      </div>
      <div class="frontLocation">
      {{__('lang.Aidana')}}
      </div>
  </div>
  <div class="back">
    <div class="backTitle">{{__('lang.modern')}}</div>
    <div class="backParagraph">
    {{__('lang.owns')}}
    </div>
    
  </div>
</div>

<div class="hover panel" onmouseover="javascript:this.className += ' flip';" onmouseout="javascript:this.className = 'hover panel';">
  <div class="front">
      <div class="frontTitle">
      {{__('lang.BIM')}}
      </div>
      <div class="frontLogo boisedigital">
      </div>
      <div class="frontLocation">
      {{__('lang.Daniyar')}}
      </div>
  </div>
  <div class="back">
    <div class="backTitle">{{__('lang.intern')}}</div>
    <div class="backParagraph">{{__('lang.knows')}}</div>
  </div>
</div>

<div class="hover panel" onmouseover="javascript:this.className += ' flip';" onmouseout="javascript:this.className = 'hover panel';">
  <div class="front">
      <div class="frontTitle">
      {{__('lang.land')}}
      </div>
      <div class="frontLogo dissolve">
      </div>
      <div class="frontLocation">
      {{__('lang.Ardak')}}
      </div>
  </div>
  <div class="back">
    <div class="backTitle">{{__('lang.moscow')}}</div>
    <div class="backParagraph">{{__('lang.care')}}</div>
    </div>
  </div>
<div class="hover panel" onmouseover="javascript:this.className += ' flip';" onmouseout="javascript:this.className = 'hover panel';">
  <div class="front">
      <div class="frontTitle">
      {{__('lang.resident')}}
      </div>
      <div class="frontLogo isass">
      </div>
      <div class="frontLocation">
      {{__('lang.Aizhan')}}
      </div>
  </div>
  <div class="back">
    <div class="backTitle">{{__('lang.interreg')}}</div>
    <div class="backParagraph">
    {{__('lang.the')}}</div>
  </div>
</div>

<div class="hover panel" onmouseover="javascript:this.className += ' flip';" onmouseout="javascript:this.className = 'hover panel';">
  <div class="front">
      <div class="frontTitle">
      {{__('lang.urban')}}
      </div>
      <div class="frontLogo dissolvee">
      </div>
      <div class="frontLocation">
      {{__('lang.Iliyas')}}
      </div>
  </div>
  <div class="back">
    <div class="backTitle">{{__('lang.state')}}</div>
    <div class="backParagraph">
    {{__('lang.able')}}</div>
  </div>
</div>
</div>
<!--/Teams-->





<div id="background" >
  
  <div id="gallery">
    <div class="photobox"><img class="photo" src="https://xn--80ac1bcbgb9aa.xn--p1ai/wp-content/uploads/c/5/d/c5d4dac2bb6324cf87dd1b37ed56710b.jpeg" alt="image1"></div>
    <div class="photobox"><img class="photo" src="https://avatars.mds.yandex.net/get-pdb/25978/b0f78c2d-9ba0-4bc5-8fd9-38fba7756952/s1200" alt="image2"></div>
    <div class="photobox"><img class="photo" src="http://www.archhouse.ru/discont/comfort3-8.jpg" alt="image3"></div>
    <div class="photobox"><img class="photo" src="https://pbs.twimg.com/media/D3fHgG3WsAIhFAr.jpg" alt="image4"></div>
    <div class="photobox"><img class="photo" src="https://homedesigningidea.com/wp-content/uploads/2020/06/100-16-1030x763-1.jpg"></div>
    <div class="photobox"><img class="photo" src="https://i.pinimg.com/originals/f8/13/8c/f8138ca4310761eb206a3eb3d5bb731a.jpg"></div>
    
  </div>
</div>



<div class="cont" id="reviews">
	<div class="map">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac25fd648c17f349563934399f494b732288c5904c6dd745186ff28cd7d11bc08&amp;width=508&amp;height=528&amp;lang=ru_UA&amp;scroll=true" > </script>
</div>
<p class="texxt">
<h2 style="font-family:'Raleway', sans-serif; ">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;{{__('lang.Basic')}} <br><br><br>
	&emsp;&emsp;&emsp;{{__('lang.we')}}</h2>
<br><br>
<h3>&emsp;&emsp;&emsp;&emsp;&emsp; <img src="https://activerain-store.s3.amazonaws.com/image_store/uploads/agents/jadler1/files/location-948510_1280.png" style="width: 24px; height: 24px;">{{__('lang.addr')}} <br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;<img src="https://www.freeiconspng.com/uploads/telephone-icon-png-10.png" style="width: 24px; height: 24px;"> {{__('lang.mobile')}}<br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;<img src="https://image.flaticon.com/icons/svg/262/262830.svg" style="width: 24px; height: 24px;"> {{__('lang.rek')}}<br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;<img src="https://www.ilger.com/images/noreply_email_cos%C3%A8.png" style="width: 24px; height: 24px;">{{__('lang.mail')}}<br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;<img src="https://static.tildacdn.com/tild3138-3430-4663-b634-313639363034/3b833d721f0d9b139881.png" style="width: 20px; height: 20px;">{{__('lang.whats')}}</h3><br><br>
</p>
</div>

<script>
	$(function() {

	
	let header = $("#header");
	let intro=$("#intro");
	let introH;
	let scrollPos = $(window).scrollTop();

$(window).on("scroll resize" , function(){
	introH = intro.innerHeight();
scrollPos = $(this).scrollTop();
	chekScroll(scrollPos,introH);

});
function chekScroll(scrollPos,introH){
	if(scrollPos>introH){
		header.addClass("fixed");
	}else{
		header.removeClass("fixed");
	}
}

$("[data-scroll]").on("click",function(event){
	event.preventDefault();
	let elementId = $(this).data('scroll');
	let elementOffset= $(elementId).offset().top;
	$("html,body").animate({
		scrollTop:elementOffset - 90
	},700);
});


let nav = $("#nav");
let nav__toggle = $("#nav__toggle");
nav__toggle.on("click ", function(event){
	event.preventDefault();
	nav.toggleClass("show");
});
});
</script>
</body>
</html>