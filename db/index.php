<!DOCTYPE html>
<html dir="ltr" data-device="desktop" lang="el">
<head>
	<title>  </title>
	<meta charset="UTF-8">
	<meta name="description" content="Dating Site - Γνωριμίες με γυναίκες στην τηλε-παρέα μας.">
	<meta name="keywords" content="info">
	<meta name="author" content="Pavlos Pseftoyiannis">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
* {
  box-sizing: border-box;
}

body {
    margin: 0;
    color: #3a3a3a;
    font-family: Lato, "Open Sans", sans-serif;
    font-size: 16px;
    min-height: 100%;
}

# userinfo {
    float: left;
    width: 302px;
    padding: 0 0 0 9px
}

 < !--CSS styles-- >
 # photos {
    float: left;
    width: 301px;
    background: url(/static/images / ajax.gif)no - repeat 50 % 192px
}

 # bigphoto {
    width: 300px;
    height: 400px;
    position: relative;
    background - repeat: no - repeat;
    cursor: pointer
}

.lockbig {
    position: absolute;
    right: 0;
    bottom: 0;
    width: 33px;
    height: 40px;
    background: url(/static/images / lockbig.png);
    z - index: 9999;
    display: none
}

.locksmall {
    position: absolute;
    right: 0;
    bottom: 0;
    width: 19px;
    height: 21px;
    background: url(/static/images / locksmall.png);
    z - index: 9999
}

 # bigphoto img {
    width: 300px;
    height: 400px;
    border: none
}

 # thumbnails {
    padding - top: 10px;
    overflow: hidden
}

 # leftarrow {
    width: 12px;
    height: 79px;
    float: left;
    background: url(/static/images / profile / profile.png) - 369px 0 no - repeat;
    margin - top: 1px;
    cursor: pointer
}

 # leftarrow.off {
    background: url(/static/images / profile / profile.png) - 389px 0px no - repeat;
    cursor: default
}

 # thumbs {
    overflow: hidden;
    height: 81px;
    width: 275px;
    float: left;
    position: relative
}

 # thumbs ul {
    list - style: none;
    width: 1000px
}

 # thumbs ul li {
    float: left;
    cursor: pointer;
    height: 79px;
    width: 55px;
    margin - top: 1px;
    background - position: 0 1px;
    background - repeat: no - repeat;
    position: relative;
    padding - top: 1px
}

 # thumbs ul li img {
    width: 55px;
    height: 77px
}

 # thumbs ul li.active {
    width: 49px;
    height: 74px;
    overflow: hidden;
    padding - top: 0
}

 # thumbs ul li.active img {
    margin: -2px - 3px
}

 # rightarrow {
    width: 12px;
    height: 79px;
    float: left;
    background: url(/static/images / profile / profile.png) - 398px 0 no - repeat;
    margin - top: 1px;
    cursor: pointer
}

 # rightarrow.off {
    background: url(/static/images / profile / profile.png) - 378px 0 no - repeat;
    cursor: default
}

 # userinfo {
    float: left;
    width: 302px;
    padding: 0 0 0 9px
}

 # username {
    color:  # 464646;
    font - size: 24px;
    width: 286px;
    position: relative
}

a.popupico {
    background: url(/static/images / profile / profile.png) - 297px - 118px;
    width: 16px;
    height: 15px;
    display: block;
    position: absolute;
    right: -16px;
    top: 0
}

 # username span.online0,  # username span.online1,  # username span.online2 {
    color:  # 32b528;
    font - size: 10px;
    height: 19px;
    padding: 4px 0 0 4px;
    vertical - align: middle;
    white - space: nowrap
}

 # username span.online0 img,  # username span.online1 img,  # username span.online2 img {
    background: url(/static/images / main.png) - 332px - 69px no - repeat;
    height: 16px;
    width: 16px;
    border: none;
    vertical - align: middle;
    margin - bottom: 6px
}
 # username span.online0 img {
    background - position: -348px - 69px
}

 # username span.online1 img {
    background - position: -332px - 69px
}

 # username span.online2 img {
    background - position: -236px - 69px
}

 # balloon {
    background:  # f9f9f9;
    width: 285px;
    padding: 8px;
    border: 1px solid # e9e9e9;
    margin - top: 8px;
    position: relative
}

 # btl {
    background: url(/static/images / profile / profile.png) - 393px - 79px;
    width: 9px;
    height: 9px;
    position: absolute;
    top: -1px;
    left: -1px
}

 # btr {
    background: url(/static/images / profile / profile.png) - 401px - 79px;
    width: 9px;
    height: 9px;
    position: absolute;
    top: -1px;
    right: -1px
}

 # bbl {
    background: url(/static/images / profile / profile.png) - 393px - 87px;
    width: 9px;
    height: 9px;
    position: absolute;
    bottom: -1px;
    left: -1px
}

 # bbr {
    background: url(/static/images / profile / profile.png) - 401px - 87px;
    width: 9px;
    height: 9px;
    position: absolute;
    bottom: -1px;
    right: -1px
}

 # br {
    background: url(/static/images / profile / profile.png) - 383px - 79px;
    width: 10px;
    height: 8px;
    position: absolute;
    top: -8px;
    left: 41px
}

 # useralh {
    position: relative;
    border - bottom: 1px solid # ddd;
    font - size: 12px;
    padding: 14px 0 8px;
    width: 302px;
    margin - bottom: 8px
}

 # useralh div {
    width: 210px;
    display: inline - block;
    line - height: 20px
}

 # useralh a {
    background: url(/static/images / profile / profile.png) - 297px - 59px no - repeat;
    width: 35px;
    margin - right: 5px;
    height: 41px;
    display: block;
    float: right
}

 # useralh a.credits {
    background: url(/static/images / profile / profile.png) - 333px - 59px no - repeat;
    margin - right: 0;
    width: 35px;
    height: 41px
}

 # userprofil {
    font - size: 12px
}

 # userprofil h3 {
    font - size: 16px;
    padding: 7px 0;
    clear: both
}

 # userprofil ul {
    list - style: none
}

 # userprofil ul li {
    padding: 3px 0
}

.buttonw {
    display: inline - block;
    height: 13px;
    padding: 3px 5px;
    color:  # f55724;
    text - decoration: none;
    margin: 0 0 0 10px;
    background:  # f9f9f9;
    border: 1px solid # dcdcdc;
    border - radius: 4px;
    -moz - border - radius: 4px;
    white - space: nowrap
}

 # profilecontent,  # rnd - content {
    padding - top: 30px;
    clear: both
}
 # profiletabs,  # rnd - tabs {
    list - style: none;
    border - bottom: 1px solid # 9c9c9c;
    height: 32px
}
 # profiletabs li,  # rnd - tabs li {
    float: left;
    font - size: 13px;
    height: 32px;
    padding: 0 3px;
    font - weight: 700
}
 # profiletabs li a,  # rnd - tabs li a {
    height: 14px;
    display: block;
    padding: 9px 11px;
    color:  # 9c9c9c
}
 # profiletabs li a: hover,  # rnd - tabs li a: hover {
    text - decoration: none!important
}
 # profiletabs li a: hover span,  # rnd - tabs li a: hover span {
    text - decoration: underline
}
 # profiletabs li.active a,  # rnd - tabs li.active a {
    display: block;
    padding: 7px 9px 0;
    height: 25px
}
 # profiletabs li.active,  # rnd - tabs li.active {
    margin - bottom: -2px;
    border - top: 1px solid # 9c9c9c;
    border - bottom: 3px solid # f5f5f5;
    border - left: 1px solid # 9c9c9c;
    border - right: 1px solid # 9c9c9c;
    border - top - left - radius: 5px;
    border - top - right - radius: 5px;
    position: relative;
    height: 30px
}
 # profiletabs li span,  # rnd - tabs li span {
    text - decoration: none;
    color:  # f55724
}
 # profiletabs li.active span,  # rnd - tabs li.active span {
    color:  # 464646
}
 # profiletabs li.active a: hover,  # rnd - tabs li.active a: hover {
    color:  # 9c9c9c!important
}
 # profiletabs li.active a: hover span,  # rnd - tabs li.active a: hover span {
    text - decoration: none!important
}
 # profiletab {
    clear: both
}
 # rnd - content.rnd - item {
    display: none
}
 # rnd - content # rnd - blog {
    display: block
}
 # rnd - content.rnd - row div {
    vertical - align: top
}
 # rnd - content.rnd - user {
    display: inline - block;
    margin: 15px 15px 0 0;
    width: 75px;
    overflow: hidden;
    text - align: center;
    word - break: break - all
}
 # rnd - content.rnd - text {
    display: inline - block;
    margin: 15px 0;
    width: 518px;
    text - align: justify
}
 # rnd - content.rnd - text.rnd - text - short {
    font - size: 12px
}
 # rnd - content.rnd - text.rnd - time {
    font - family: tahoma,
    arial,
    sans - serif;
    font - size: 10px;
    color:  # afafaf;
    margin - bottom: 5px
}
.profilegallery {
    width: 281px;
    height: 262px;
    float: left;
    padding: 13px 0 0 25px
}
.profilegallery h3 a {
    color:  # f55724;
    font - size: 16px
}
.profilegallery span {
    font - size: 11px
}
.profilegallery span span {
    font - size: 11px;
    color:  # 9c9c9c
}
.profilegallery.gallery6 {
    width: 252px;
    height: 225px;
    margin - top: 10px;
    position: relative;
    display: block;
    cursor: pointer
}
.big1 img, .big2 img, .big3 img {
    width: 93px;
    height: 127px
}
.small1 img, .small2 img, .small3 img {
    width: 40px;
    height: 53px
}
.profilegallery.gallery6 div.big1 {
    position: absolute;
    left: 0;
    top: 71px;
    width: 96px;
    height: 133px;
    background: url(/static/images / profile / profile.png)0 0 no - repeat;
    padding: 2px 0 0 3px
}
.profilegallery.gallery6 div.big2 {
    position: absolute;
    left: 78px;
    top: 0;
    width: 96px;
    height: 133px;
    background: url(/static/images / profile / profile.png) - 99px 0 no - repeat;
    padding: 2px 0 0 3px;
    z - index: 2000
}
.profilegallery.gallery6 div.big3 {
    position: absolute;
    right: 0;
    top: 102px;
    width: 95px;
    height: 118px;
    background: url(/static/images / profile / profile.png) - 198px 0 no - repeat;
    padding: 2px 0 0 3px
}
.profilegallery.gallery6 div.big3 span {
    overflow: hidden;
    width: 93px;
    height: 117px;
    display: block
}
.profilegallery.gallery6 div.small1 {
    position: absolute;
    left: 20px;
    top: 3px;
    width: 43px;
    height: 56px;
    background: url(/static/images / profile / profile.png) - 297px 0 no - repeat;
    padding: 2px 0 0 3px
}
.profilegallery.gallery6 div.small2 {
    position: absolute;
    left: 104px;
    top: 144px;
    width: 43px;
    height: 56px;
    background: url(/static/images / profile / profile.png) - 297px 0 no - repeat;
    padding: 2px 0 0 3px
}
.profilegallery.gallery6 div.small3 {
    position: absolute;
    left: 190px;
    top: 30px;
    width: 43px;
    height: 56px;
    background: url(/static/images / profile / profile.png) - 297px 0 no - repeat;
    padding: 2px 0 0 3px
}
 # photocomment {
    padding: 3px 0 0;
    height: 12px;
    text - align: center
}
.nodata {
    padding: 30px 0 0 10px
}
.secretphnumb {
    font - size: 11px;
    font - weight: 700;
    position: absolute;
    left: 18px;
    top: 28px;
    color:  # b43a39;
    width: 20px;
    height: 11px;
    text - align: center
}
.secretword {
    font - size: 10px;
    position: absolute;
    left: 0;
    top: 50px;
    width: 55px;
    height: 25px;
    text - align: center;
    color:  # 464646
}
.secretsthumbs.active.secretphnumb {
    left: 15px;
    top: 25px
}
.secretsthumbs.active.secretword, .addphoto.active.secretword {
    left: -3px;
    top: 47px
}
.secretsthumbs a: hover {
    text - decoration: none
}


.gwl-logo-logo { 
	display: inline-block; 
	position: relative; 
	z-index: 1; 
	width: 185px; 
	height: 80px; 
	background-repeat: no-repeat; 
	background-color: transparent; 
	background-size: auto 80px; 
}

body.gr_GR .gwl-logo { 
	background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/gwl-logo/gwl_logo_local_header%402X.jpg"); 
}

.container {
  position: relative;
  <!--max-width: 1888px; -->
  margin: 0 auto; 
}

#header-content { 
	width: 970px; 
	position: relative; 
	margin: 0 auto; 
}

#header-content nav { 
	position: absolute; 
	right: 0; 
	top: 0; 
	padding-top: 20px; 
}

#header-content nav > a { 
	text-decoration: none; 
	color: #ffffff; 
	border-bottom: solid transparent 1px; 
	transition: all .1s; 
	margin-left: 16px; 
	font-weight: 400; 
}

#header-content nav > a:not(.lnk-locale):hover { 
	text-decoration: none; 
	border-color: #ffffff; 
}


	.color-changer-2 {
		background-color: hsl(0, 0%, 25%) !important;
	}
	.color-changer-2 * {
		color: hsl(0, 0%, 80%) !important;
		background-color: hsl(0, 0%, 25%) !important;
		border-color: hsl(0, 0%, 35%) !important;
	}
	.color-changer-2 *:before, .color-changer-2 *:after {
		color: hsl(0, 0%, 80%) !important;
		background: hsl(0, 0%, 25%) !important;
		border-color: hsl(0, 0%, 35%) !important;
	}
	.color-changer-2 img {
		visibility: visible !important;
	}
	.color-changer-2 button {
		color: hsl(68, 80%, 80%) !important;
	}

	.color-changer-2 input, .color-changer-2 input *,
	.color-changer-2 textarea, .color-changer-2 textarea *,
	.color-changer-2 pre, .color-changer-2 pre *,
	.color-changer-2 code, .color-changer-2 code * {
		background-color: hsl(0, 0%, 35%) !important;
	}

	.color-changer-2 a, .color-changer-2 a * {
		color: hsl(68, 80%, 80%) !important;
		background-color: hsl(0, 0%, 25%) !important;
	}
	.color-changer-2 a:hover, .color-changer-2 a:hover * {
		color: hsl(108, 100%, 80%) !important;
	}
	.color-changer-2 a:active, .color-changer-2 a:active * {
		color: hsl(28, 100%, 80%) !important;
	}
	.color-changer-2 a:visited, .color-changer-2 a:visited * {
		color: hsl(28, 100%, 80%) !important;
	}


.gwl-logo {
	background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/gwl-logo/gwl-logo.jpg");
}

.container {
    padding-left: 15px;
    padding-right: 15px;
}
			


.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}

img { 
  width: 100%;
  height: auto;
  <!-- opacity: 0.3; -->
}

.div1 .topright {
	border : 2px solid #f97f74;
	border-radius: 8px;
	position: absolute;
	top: 8px;
	right: 16px;
	font-size: 18px;
	width: 94px;
	height: 35px; 
	padding: 8px;
	box-sizing: border-box;
}

.icon-flag-gr_GR {
    background-position: -8px -8px;
}

.icon-flag-en_EN {
	background-position: -8px -8px;
}

.icon-flag {
    display: inline-block;
    width: 17px;
    height: 12px;
    background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/flags/flags%402X.jpg");
    background-size: 300px 300px;
    margin-right: 2px;
}

div.a h2{
	<!-- text-align: center; -->
	color: white;
}


    html, body { height: 100%; background-color: #ffffff; }

    .gwl-logo { background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/gwl-logo/gwl-logo.jpg") !important; }
    .reg-options .f-button { width: 100%; font-size: 14px; border: 0; line-height: 34px; }
    .f-button-facebook { font-weight: normal; }
    .link-login-service-icon { vertical-align: sub; }

    footer { width: 100%; margin-top: -190px; background-color: rgba(0,0,0,.5); height: 220px; padding-top: 40px;
        background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.80) 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.80)));
        background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.80) 100%);
        background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.80) 100%);
        background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.80) 100%);
        background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.80) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#00000000", endColorstr="#a6000000",GradientType=0 );
    }

    h1 { color: #ffffff; padding: 0; margin: 0; font-size: 35px; font-weight: bold; margin-bottom: 6px; }
    h2 { font-size: 42px;  max-width: 620px; }
    p { font-size: 24px; font-weight: 300; max-width: 620px; }
    q { font-style: italic; font-size: 24px; font-weight: 300; }
    q:before { content: "«"; }
    q:after { content: "»"; }
    .page { background-repeat: no-repeat; background-size: cover; background-position: center center; position: relative; min-width: 970px; }
    .page > .content { width: 970px; height: 100%; margin: 0 auto; position: relative; }
    #page1 { height: 100%; min-height: 600px; background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/homeImage.jpg"); }
    #page1 > .content { text-align: center; width: 970px; height: 300px; min-height: 0; position: absolute; margin: auto; top: 0; right: 0; bottom: 0; left: 0; z-index: 1; }
    #page1 h1 { text-shadow: rgba(0,0,0,.9) 0 1px 1px; font-size: 50px; }
    
    #page1 h2 { color: #ffffff; padding: 0; margin-top: 0; margin-bottom: 30px; font-size: 24px; font-weight: 300; max-width: none; text-shadow: rgba(0,0,0,.9) 0 1px 1px; }
    #page1 h2 em { font-style: normal; display: inline-block; background-color: #ffb300; padding: 0 6px; border-radius: 2px; transform: rotate(-2deg); }
    #page1 h3 { color: #ffffff; }
    
    #page1 a.knowmore { position: absolute; bottom: 20px; left: 50%; margin-left: -60px; z-index: 2; }
    #page2 { height: 410px; }
    
    #page3 { height: 3800px; background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/milfs/mood_home_2_1501.jpg"); }
    #list-benefits { position: absolute; right: 0; top: 70px; }
    #list-benefits ul { font-size: 24px; font-weight: 600; margin-bottom: 40px; }
    #list-benefits li { list-style: none; padding-left: 40px; background: transparent url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/check-images/check_green_33x33.png") no-repeat 0 0; margin-bottom: 12px; }
    
    #page1 video { min-width: 100%; min-height: 100%; width: auto; height: auto;  position: absolute; top: 0; left: 0; }
    #page1 #vid-overlay { position: absolute; top: 0; left: 0; min-width: 100%; min-height: 100%; z-index: 1; width: auto; height: auto;  background-color: rgba(0,0,0,.8); }
    
    .slider { position: relative; overflow: hidden; }
    .slider > div { height: calc(100% - 20px); position: relative; left: 0; transition: left .35s ease-in; }
    .slider > div:after { content: ""; display: block; clear: both; }
    .slider > nav { height: 20px; text-align: center; }
    .slider > nav > span { display: inline-block; cursor: pointer; width: 16px; height: 16px; background: transparent url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/nav-dots/slider_nav_dots.png") no-repeat right 0; }
    
    .slider .slide { float: left; height: 100%; position: relative; transition: opacity .5s; }
    .slider.slide1 > div { left: 0; }
    .slider.slide2 > div { left: -100%; }
    .slider.slide3 > div { left: -200%; }
    .slider.slide4 > div { left: -300%; }
    .slider.slide5 > div { left: -400%; }
    
    .slider.slide2 > div > .slide:nth-child(1),
    .slider.slide3 > div > .slide:nth-child(2),
    .slider.slide4 > div > .slide:nth-child(3)
    { opacity: 0; }
    
    .slider.slide1 nav > span:nth-child(1),
    .slider.slide2 nav > span:nth-child(2),
    .slider.slide3 nav > span:nth-child(3),
    .slider.slide4 nav > span:nth-child(4) { background-position: left 0; }
    
    .slider.features { width: 100%; height: 377px; }
    .slider.features > div { width: 3880px; }
    .slider.features .slide { width: 970px; }
    .slider.features p a { text-decoration: none; text-transform: uppercase; font-size: 16px; font-weight: 600; margin-left: 10px; }
    .slider.features p a:hover { text-decoration: underline; }
    
    .slider.testimonials { width: 600px; height: 140px; margin-top: 30px; }
    .slider.testimonials > div { width: 1800px; }
    .slider.testimonials .slide { width: 600px; padding-left: 120px; }
    .slider.testimonials img { position: absolute; top: 0; left: 0; }
    
    a.knowmore { opacity: .8; outline: 0; color: #ffffff; font-weight: 600; display: inline-block; width: 120px; text-decoration: none; padding-bottom: 20px; background: transparent url(/assets/img/arrow_dn_white_15x8.png) no-repeat center 24px; transition: all .15s; }
    a.knowmore:hover { background-position: center 28px; opacity: 1; }
    
    .icon-flag { display: inline-block; width: 17px; height: 12px; background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/flags/flags%402X.jpg"); background-size: 300px 300px; margin-right: 2px; }
    .icon-flag-gr_GR { background-position: -8px -8px; }
    .icon-flag-en_EN { background-position: -38px -8px; }
    
    header { width: 100%; position: absolute; z-index: 98; top: 0; left: 0; }
    header nav ul.list-locale { opacity: 0; transition: all .2s; top: 51px; left: -67px; padding: 12px 16px; border-radius: 4px; background-color: rgba(255,255,255,.9); position: absolute; width: 200px; }
    header nav ul.list-locale.open { opacity: .98; top: 47px; }
    header nav ul.list-locale::before { content: ""; display: block; position: absolute; top: -10px; left: 80px; width: 0; height: 0; border-style: solid; border-width: 0 10px 10px 10px; border-color: transparent transparent rgba(255,255,255,.9) transparent; }
    header nav ul.list-locale .icon-flag { margin-right: 4px; }
    header nav ul.list-locale .active { font-weight: 600; }
    header nav ul.list-locale > li { padding: 2px 0; font-size: 14px; }
    header nav ul.list-locale > li:before {  }
    header nav ul.list-locale > li > a { text-decoration: none; }
    header nav ul.list-locale > li > a:hover { text-decoration: underline !important; }
    
    #header-content { width: 970px; position: relative; margin: 0 auto; }
    #header-content nav { position: absolute; right: 0; top: 0; padding-top: 20px; }
    #header-content nav > a { text-decoration: none; color: #ffffff; border-bottom: solid transparent 1px; transition: all .1s; margin-left: 16px; font-weight: 400; }
    #header-content nav > a:not(.lnk-locale):hover { text-decoration: none; border-color: #ffffff; }
    .nav-item-signin { border: solid #ffffff 2px !important; padding: .3em .6em; border-radius: 3px; }
   
    .btn-signup { display: inline-block; cursor: pointer; border: solid #ffffff 2px; background-color: rgba(255,255,255,.2); border-radius: 4px; color: #ffffff; font-size: 18px; padding: 20px 40px; font-family: Lato; font-weight: 600; text-transform: uppercase; transition: all .2s ease-in; }
    .btn-signup:hover { background-color: rgba(255,255,255,0); }

	#page1 { height: 100%; min-height: 600px; background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/homeImage.jpg"); }
    #page1 > .content { text-align: center; width: 970px; height: 300px; min-height: 0; position: absolute; margin: auto; top: 0; right: 0; bottom: 0; left: 0; z-index: 1; }
    #page1 h1 { text-shadow: rgba(0,0,0,.9) 0 1px 1px; font-size: 50px; }
    
    #page1 h2 { color: #ffffff; padding: 0; margin-top: 0; margin-bottom: 30px; font-size: 24px; font-weight: 300; max-width: none; text-shadow: rgba(0,0,0,.9) 0 1px 1px; }
    #page1 h2 em { font-style: normal; display: inline-block; background-color: #ffb300; padding: 0 6px; border-radius: 2px; transform: rotate(-2deg); }
    #page1 h3 { color: #ffffff; }
    
    #page1 a.knowmore { position: absolute; bottom: 20px; left: 50%; margin-left: -60px; z-index: 2; }
    #page2 { height: 600px; }
    
    #list-benefits { position: absolute; right: 0; top: 70px; }
    #list-benefits ul { font-size: 24px; font-weight: 600; margin-bottom: 40px; }
    #list-benefits li { list-style: none; padding-left: 40px; background: transparent url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/check-images/check_green_33x33.png") no-repeat 0 0; margin-bottom: 12px; }
    
    #page4 { height: 2200px; background-color: #f7f9fa; padding-top: 34px; }
    #page4 h2 { margin-top: 0; }
    #page4 #badges { width: 355px; position: absolute; top: 0; right: 0; }
    #page4 #badges p { font-size: 20px; }
    
    #page5 { <!-- min-height: 500px; --> height: 800px; height: 100%; background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/bg-home-bottom/bg_home_bottom.jpg"); background-position: center top; }
    #page5 > div { text-align: center; }
    #page5 h2 { font-size: 42px; font-weight: 600; max-width: none; }
    #page5 a.top { position: absolute; bottom: 30px; }
    
    #page1 video { min-width: 100%; min-height: 100%; width: auto; height: auto;  position: absolute; top: 0; left: 0; }
    #page1 #vid-overlay { position: absolute; top: 0; left: 0; min-width: 100%; min-height: 100%; z-index: 1; width: auto; height: auto;  background-color: rgba(0,0,0,.8); }

.btn-signup {
	
}

.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}

*, *:after, *:before { box-sizing: border-box; -moz-box-sizing: border-box; }
html { min-height: 100%; }
body { margin: 0; color: #3a3a3a; font-family: Lato, "Open Sans", sans-serif; font-size: 16px; -webkit-font-smoothing: antialiased; min-height: 100%; }
h1 { font-family: Lato, Helvetica, Arial, sans-serif; font-size: 36px; line-height: 120%; font-weight: bolder; color: #586474; margin: 0 0 30px; padding-top: 50px; }
h2 { font-family: Lato, Helvetica, Arial, sans-serif; font-size: 24px; line-height: 120%; font-weight: bolder; color: #586474; }
h3 { font-size: 14px; color: #586474; margin: 2em 0 1em; font-weight: 700; }
h4 { font-size: 14px; color: #586474; font-weight: 600; }
ul { list-style-type: none; margin: 0; padding: 0; }
fieldset { margin: 0; padding: 0; border: 0; }
a, a:visited { text-decoration: underline; color: #0277bd; }
a:hover { text-decoration: none; }
.content { width: 970px; margin: 0 auto; min-height: 800px; position: relative; }
.gwl-logo { display: inline-block; position: relative; z-index: 1; width: 185px; height: 80px; background-repeat: no-repeat; background-color: transparent; background-size: auto 80px; }
body.gr_GR .gwl-logo { background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/gwl-logo/gwl-logo.jpg"); }
body.en_EN .gwl-logo { background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/gwl-logo/gwl-logo.jpg"); }
.reg { vertical-align: text-top; font-size: 50%; font-weight: 300; padding: 0 2px;}

header { width: 970px; margin: 0 auto; position: relative; padding-top: 10px; }
footer { color: #ffffff; height: 202px; width: 1348px; margin: 0 auto; opacity: .9; text-align: center; font-size: 12px; line-height: 26px; }
footer ul li { display: inline-block; color: #ffffff; padding-right: 6px;}
footer ul li:last-child { padding-right: 0;}
footer a { color: #ffffff !important; }

footer .follow { display: inline-block; width: 29px; height: 29px; vertical-align: middle; background-repeat: no-repeat; background-position: center center; background-color: transparent; }
.follow-fb { background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/FollowFacebook/follow_facebook_h20.png"); }

input, button, select, label, textarea { position: relative; z-index: 1; }
input, button, textarea, select { font-family: "Open Sans",sans-serif; font-size: 13px; color: #3a3a3a; }

body.show-login { margin-top: 70px; }
body.show-login #lnkToggleLogin>span { transform: rotate(180deg); -webkit-transform: rotate(180deg); -moz-transform: rotate(180deg); -ms-transform: rotate(180deg); -o-transform: rotate(180deg); }

select,
textarea,
input[type=text],
input[type=password] { border: 1px solid #c4c4c4; border-radius: 2px; padding: 4px 8px; transition: border-color .05s linear 0s; -webkit-transition: border-color .05s linear 0s; }
input[type=text]:focus,
input[type=password]:focus { border-color: #aeaeae; box-shadow: 0 0 3px rgba(34, 112, 185, .3); }
::-webkit-input-placeholder { color: #949494; }
::-moz-placeholder { color: #949494; }
:-ms-input-placeholder { color: #949494; }
input:-moz-placeholder { color: #949494; }

fieldset > div { margin-bottom: 10px; }
.err { opacity: 0; color: #ff0000; font-size: 11px; position: absolute; width: 100%; height: 100%; padding-left: 320px; line-height: 27px; border-left: solid #ff0000 2px; top: 0; left: -10px; z-index: 0;
	transition: opacity .15s linear 0s;
	-webkit-transition: opacity .15s linear 0s;
}
.err a { color: #ff0000; }

body.info { background: #ffffff url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/bg-faded/bg_home2_new_faded.jpg") no-repeat center bottom; background-size: 100% auto; }
body.info .content { font-size: 14px; }
body.info footer { margin-top: 200px; color: inherit; border-top: solid #ffffff 1px; padding-top: 16px; }
body.info footer a { color: #3a3a3a !important; }
body.info footer .follow-fb { background-image: url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/img/FollowFacebook/follow_facebook_h20_inv.png"); }

/* Captcha */
#captcha-wrapper { width: 360px; height: auto; background-color: white; padding: 10px; position: relative; z-index: 1; border: 1px solid #c4c4c4; border-radius: 2px; }
#captcha-wrapper p, #captcha-wrapper .small { font-size: 12px; letter-spacing: normal; }

/* Content tables */
th { font-weight: 400; text-decoration: underline; }
td, th { text-align: left; padding-right: 2em; }

/* Multiple Column Layouts */

.multicol:before, .multicol:after { content: " "; display: table; }
.multicol:after { clear: both; }
.col { float: left; width: 310px; margin-right: 20px; min-height: 1px; }
.col:last-child { margin-right: 0; }
.multicol-2 .col:nth-of-type(1) { width: 640px; }

ul.enum { padding-left: 20px; list-style-type: disc; }
ul.enum li { margin-bottom: 10px; }

.mobile0 { display: none; }

.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

.color-changer-2 {
		background-color: hsl(0, 0%, 25%) !important;
	}
	.color-changer-2 * {
		color: hsl(0, 0%, 80%) !important;
		background-color: hsl(0, 0%, 25%) !important;
		border-color: hsl(0, 0%, 35%) !important;
	}
	.color-changer-2 *:before, .color-changer-2 *:after {
		color: hsl(0, 0%, 80%) !important;
		background: hsl(0, 0%, 25%) !important;
		border-color: hsl(0, 0%, 35%) !important;
	}
	.color-changer-2 img {
		visibility: visible !important;
	}
	.color-changer-2 button {
		color: hsl(68, 80%, 80%) !important;
	}

	.color-changer-2 input, .color-changer-2 input *,
	.color-changer-2 textarea, .color-changer-2 textarea *,
	.color-changer-2 pre, .color-changer-2 pre *,
	.color-changer-2 code, .color-changer-2 code * {
		background-color: hsl(0, 0%, 35%) !important;
	}

	.color-changer-2 a, .color-changer-2 a * {
		color: hsl(68, 80%, 80%) !important;
		background-color: hsl(0, 0%, 25%) !important;
	}
	.color-changer-2 a:hover, .color-changer-2 a:hover * {
		color: hsl(108, 100%, 80%) !important;
	}
	.color-changer-2 a:active, .color-changer-2 a:active * {
		color: hsl(28, 100%, 80%) !important;
	}
	.color-changer-2 a:visited, .color-changer-2 a:visited * {
		color: hsl(28, 100%, 80%) !important;
	}

.topright-avatar {
            position: absolute;
            top: 4px;
            right: 5px;
        }


/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/quicksand/v21/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkM0o58m-wi40.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/quicksand/v21/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkM0o58i-wi40.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/quicksand/v21/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkM0o58a-wg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/quicksand/v21/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkBgv58m-wi40.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/quicksand/v21/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkBgv58i-wi40.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/quicksand/v21/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkBgv58a-wg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
 @ font - face {
    font - family: 'FontAwesome';
    src: url('../fonts/fontawesome-webfont.eot?v=4.7.0');
    src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0')format('embedded-opentype'),
    url('../fonts/fontawesome-webfont.woff2?v=4.7.0')format('woff2'),
    url('../fonts/fontawesome-webfont.woff?v=4.7.0')format('woff'),
    url('../fonts/fontawesome-webfont.ttf?v=4.7.0')format('truetype'),
    url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular')format('svg');
    font - weight: normal;
    font - style: normal
}
.fa {
    display: inline - block;
    font: normal normal normal 14px / 1 FontAwesome;
    font - size: inherit;
    text - rendering: auto;
    -webkit - font - smoothing: antialiased;
    -moz - osx - font - smoothing: grayscale
}
.fa - lg {
    font - size: 1.33333333em;
    line - height: .75em;
    vertical - align: -15 %
}
.fa - 2x {
    font - size: 2em
}
.fa - 3x {
    font - size: 3em
}
.fa - 4x {
    font - size: 4em
}
.fa - 5x {
    font - size: 5em
}
.fa - fw {
    width: 1.28571429em;
    text - align: center
}
.fa - ul {
    padding - left: 0;
    margin - left: 2.14285714em;
    list - style - type: none
}
.fa - ul > li {
    position: relative
}
.fa - li {
    position: absolute;
    left: -2.14285714em;
    width: 2.14285714em;
    top: .14285714em;
    text - align: center
}
.fa - li.fa - lg {
    left: -1.85714286em
}
.fa - border {
    padding: .2em.25em.15em;
    border: solid.08em # eee;
    border - radius: .1em
}
.fa - pull - left {
    float: left
}
.fa - pull - right {
    float: right
}
.fa.fa - pull - left {
    margin - right: .3em
}
.fa.fa - pull - right {
    margin - left: .3em
}
.pull - right {
    float: right
}
.pull - left {
    float: left
}
.fa.pull - left {
    margin - right: .3em
}
.fa.pull - right {
    margin - left: .3em
}
.fa - spin {
    -webkit - animation: fa - spin 2s infinite linear;
    animation: fa - spin 2s infinite linear
}
.fa - pulse {
    -webkit - animation: fa - spin 1s infinite steps(8);
    animation: fa - spin 1s infinite steps(8)
}
 @ -webkit - keyframes fa - spin {
    0 % {
        -webkit - transform: rotate(0deg);
        transform: rotate(0deg)
    }
    100 % {
        -webkit - transform: rotate(359deg);
        transform: rotate(359deg)
    }
}
 @ keyframes fa - spin {
    0 % {
        -webkit - transform: rotate(0deg);
        transform: rotate(0deg)
    }
    100 % {
        -webkit - transform: rotate(359deg);
        transform: rotate(359deg)
    }
}
.fa - rotate - 90 {
    -ms - filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
    -webkit - transform: rotate(90deg);
    -ms - transform: rotate(90deg);
    transform: rotate(90deg)
}
.fa - rotate - 180 {
    -ms - filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
    -webkit - transform: rotate(180deg);
    -ms - transform: rotate(180deg);
    transform: rotate(180deg)
}
.fa - rotate - 270 {
    -ms - filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
    -webkit - transform: rotate(270deg);
    -ms - transform: rotate(270deg);
    transform: rotate(270deg)
}
.fa - flip - horizontal {
    -ms - filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
    -webkit - transform: scale(-1, 1);
    -ms - transform: scale(-1, 1);
    transform: scale(-1, 1)
}
.fa - flip - vertical {
    -ms - filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
    -webkit - transform: scale(1, -1);
    -ms - transform: scale(1, -1);
    transform: scale(1, -1)
}
: root.fa - rotate - 90, : root.fa - rotate - 180, : root.fa - rotate - 270, : root.fa - flip - horizontal, : root.fa - flip - vertical {
    filter: none
}
.fa - stack {
    position: relative;
    display: inline - block;
    width: 2em;
    height: 2em;
    line - height: 2em;
    vertical - align: middle
}
.fa - stack - 1x, .fa - stack - 2x {
    position: absolute;
    left: 0;
    width: 100 % ;
    text - align: center
}
.fa - stack - 1x {
    line - height: inherit
}
.fa - stack - 2x {
    font - size: 2em
}
.fa - inverse {
    color:  # fff
}
.fa - glass: before {
    content: "\f000"
}
.fa - music: before {
    content: "\f001"
}
.fa - search: before {
    content: "\f002"
}
.fa - envelope - o: before {
    content: "\f003"
}
.fa - heart: before {
    content: "\f004"
}
.fa - star: before {
    content: "\f005"
}
.fa - star - o: before {
    content: "\f006"
}
.fa - user: before {
    content: "\f007"
}
.fa - film: before {
    content: "\f008"
}
.fa - th - large: before {
    content: "\f009"
}
.fa - th: before {
    content: "\f00a"
}
.fa - th - list: before {
    content: "\f00b"
}
.fa - check: before {
    content: "\f00c"
}
.fa - remove: before, .fa - close: before, .fa - times: before {
    content: "\f00d"
}
.fa - search - plus: before {
    content: "\f00e"
}
.fa - search - minus: before {
    content: "\f010"
}
.fa - power - off: before {
    content: "\f011"
}
.fa - signal: before {
    content: "\f012"
}
.fa - gear: before, .fa - cog: before {
    content: "\f013"
}
.fa - trash - o: before {
    content: "\f014"
}
.fa - home: before {
    content: "\f015"
}
.fa - file - o: before {
    content: "\f016"
}
.fa - clock - o: before {
    content: "\f017"
}
.fa - road: before {
    content: "\f018"
}
.fa - download: before {
    content: "\f019"
}
.fa - arrow - circle - o - down: before {
    content: "\f01a"
}
.fa - arrow - circle - o - up: before {
    content: "\f01b"
}
.fa - inbox: before {
    content: "\f01c"
}
.fa - play - circle - o: before {
    content: "\f01d"
}
.fa - rotate - right: before, .fa - repeat: before {
    content: "\f01e"
}
.fa - refresh: before {
    content: "\f021"
}
.fa - list - alt: before {
    content: "\f022"
}
.fa - lock: before {
    content: "\f023"
}
.fa - flag: before {
    content: "\f024"
}
.fa - headphones: before {
    content: "\f025"
}
.fa - volume - off: before {
    content: "\f026"
}
.fa - volume - down: before {
    content: "\f027"
}
.fa - volume - up: before {
    content: "\f028"
}
.fa - qrcode: before {
    content: "\f029"
}
.fa - barcode: before {
    content: "\f02a"
}
.fa - tag: before {
    content: "\f02b"
}
.fa - tags: before {
    content: "\f02c"
}
.fa - book: before {
    content: "\f02d"
}
.fa - bookmark: before {
    content: "\f02e"
}
.fa - print: before {
    content: "\f02f"
}
.fa - camera: before {
    content: "\f030"
}
.fa - font: before {
    content: "\f031"
}
.fa - bold: before {
    content: "\f032"
}
.fa - italic: before {
    content: "\f033"
}
.fa - text - height: before {
    content: "\f034"
}
.fa - text - width: before {
    content: "\f035"
}
.fa - align - left: before {
    content: "\f036"
}
.fa - align - center: before {
    content: "\f037"
}
.fa - align - right: before {
    content: "\f038"
}
.fa - align - justify: before {
    content: "\f039"
}
.fa - list: before {
    content: "\f03a"
}
.fa - dedent: before, .fa - outdent: before {
    content: "\f03b"
}
.fa - indent: before {
    content: "\f03c"
}
.fa - video - camera: before {
    content: "\f03d"
}
.fa - photo: before, .fa - image: before, .fa - picture - o: before {
    content: "\f03e"
}
.fa - pencil: before {
    content: "\f040"
}
.fa - map - marker: before {
    content: "\f041"
}
.fa - adjust: before {
    content: "\f042"
}
.fa - tint: before {
    content: "\f043"
}
.fa - edit: before, .fa - pencil - square - o: before {
    content: "\f044"
}
.fa - share - square - o: before {
    content: "\f045"
}
.fa - check - square - o: before {
    content: "\f046"
}
.fa - arrows: before {
    content: "\f047"
}
.fa - step - backward: before {
    content: "\f048"
}
.fa - fast - backward: before {
    content: "\f049"
}
.fa - backward: before {
    content: "\f04a"
}
.fa - play: before {
    content: "\f04b"
}
.fa - pause: before {
    content: "\f04c"
}
.fa - stop: before {
    content: "\f04d"
}
.fa - forward: before {
    content: "\f04e"
}
.fa - fast - forward: before {
    content: "\f050"
}
.fa - step - forward: before {
    content: "\f051"
}
.fa - eject: before {
    content: "\f052"
}
.fa - chevron - left: before {
    content: "\f053"
}
.fa - chevron - right: before {
    content: "\f054"
}
.fa - plus - circle: before {
    content: "\f055"
}
.fa - minus - circle: before {
    content: "\f056"
}
.fa - times - circle: before {
    content: "\f057"
}
.fa - check - circle: before {
    content: "\f058"
}
.fa - question - circle: before {
    content: "\f059"
}
.fa - info - circle: before {
    content: "\f05a"
}
.fa - crosshairs: before {
    content: "\f05b"
}
.fa - times - circle - o: before {
    content: "\f05c"
}
.fa - check - circle - o: before {
    content: "\f05d"
}
.fa - ban: before {
    content: "\f05e"
}
.fa - arrow - left: before {
    content: "\f060"
}
.fa - arrow - right: before {
    content: "\f061"
}
.fa - arrow - up: before {
    content: "\f062"
}
.fa - arrow - down: before {
    content: "\f063"
}
.fa - mail - forward: before, .fa - share: before {
    content: "\f064"
}
.fa - expand: before {
    content: "\f065"
}
.fa - compress: before {
    content: "\f066"
}
.fa - plus: before {
    content: "\f067"
}
.fa - minus: before {
    content: "\f068"
}
.fa - asterisk: before {
    content: "\f069"
}
.fa - exclamation - circle: before {
    content: "\f06a"
}
.fa - gift: before {
    content: "\f06b"
}
.fa - leaf: before {
    content: "\f06c"
}
.fa - fire: before {
    content: "\f06d"
}
.fa - eye: before {
    content: "\f06e"
}
.fa - eye - slash: before {
    content: "\f070"
}
.fa - warning: before, .fa - exclamation - triangle: before {
    content: "\f071"
}
.fa - plane: before {
    content: "\f072"
}
.fa - calendar: before {
    content: "\f073"
}
.fa - random: before {
    content: "\f074"
}
.fa - comment: before {
    content: "\f075"
}
.fa - magnet: before {
    content: "\f076"
}
.fa - chevron - up: before {
    content: "\f077"
}
.fa - chevron - down: before {
    content: "\f078"
}
.fa - retweet: before {
    content: "\f079"
}
.fa - shopping - cart: before {
    content: "\f07a"
}
.fa - folder: before {
    content: "\f07b"
}
.fa - folder - open: before {
    content: "\f07c"
}
.fa - arrows - v: before {
    content: "\f07d"
}
.fa - arrows - h: before {
    content: "\f07e"
}
.fa - bar - chart - o: before, .fa - bar - chart: before {
    content: "\f080"
}
.fa - twitter - square: before {
    content: "\f081"
}
.fa - facebook - square: before {
    content: "\f082"
}
.fa - camera - retro: before {
    content: "\f083"
}
.fa - key: before {
    content: "\f084"
}
.fa - gears: before, .fa - cogs: before {
    content: "\f085"
}
.fa - comments: before {
    content: "\f086"
}
.fa - thumbs - o - up: before {
    content: "\f087"
}
.fa - thumbs - o - down: before {
    content: "\f088"
}
.fa - star - half: before {
    content: "\f089"
}
.fa - heart - o: before {
    content: "\f08a"
}
.fa - sign - out: before {
    content: "\f08b"
}
.fa - linkedin - square: before {
    content: "\f08c"
}
.fa - thumb - tack: before {
    content: "\f08d"
}
.fa - external - link: before {
    content: "\f08e"
}
.fa - sign - in: before {
    content: "\f090"
}
.fa - trophy: before {
    content: "\f091"
}
.fa - github - square: before {
    content: "\f092"
}
.fa - upload: before {
    content: "\f093"
}
.fa - lemon - o: before {
    content: "\f094"
}
.fa - phone: before {
    content: "\f095"
}
.fa - square - o: before {
    content: "\f096"
}
.fa - bookmark - o: before {
    content: "\f097"
}
.fa - phone - square: before {
    content: "\f098"
}
.fa - twitter: before {
    content: "\f099"
}
.fa - facebook - f: before, .fa - facebook: before {
    content: "\f09a"
}
.fa - github: before {
    content: "\f09b"
}
.fa - unlock: before {
    content: "\f09c"
}
.fa - credit - card: before {
    content: "\f09d"
}
.fa - feed: before, .fa - rss: before {
    content: "\f09e"
}
.fa - hdd - o: before {
    content: "\f0a0"
}
.fa - bullhorn: before {
    content: "\f0a1"
}
.fa - bell: before {
    content: "\f0f3"
}
.fa - certificate: before {
    content: "\f0a3"
}
.fa - hand - o - right: before {
    content: "\f0a4"
}
.fa - hand - o - left: before {
    content: "\f0a5"
}
.fa - hand - o - up: before {
    content: "\f0a6"
}
.fa - hand - o - down: before {
    content: "\f0a7"
}
.fa - arrow - circle - left: before {
    content: "\f0a8"
}
.fa - arrow - circle - right: before {
    content: "\f0a9"
}
.fa - arrow - circle - up: before {
    content: "\f0aa"
}
.fa - arrow - circle - down: before {
    content: "\f0ab"
}
.fa - globe: before {
    content: "\f0ac"
}
.fa - wrench: before {
    content: "\f0ad"
}
.fa - tasks: before {
    content: "\f0ae"
}
.fa - filter: before {
    content: "\f0b0"
}
.fa - briefcase: before {
    content: "\f0b1"
}
.fa - arrows - alt: before {
    content: "\f0b2"
}
.fa - group: before, .fa - users: before {
    content: "\f0c0"
}
.fa - chain: before, .fa - link: before {
    content: "\f0c1"
}
.fa - cloud: before {
    content: "\f0c2"
}
.fa - flask: before {
    content: "\f0c3"
}
.fa - cut: before, .fa - scissors: before {
    content: "\f0c4"
}
.fa - copy: before, .fa - files - o: before {
    content: "\f0c5"
}
.fa - paperclip: before {
    content: "\f0c6"
}
.fa - save: before, .fa - floppy - o: before {
    content: "\f0c7"
}
.fa - square: before {
    content: "\f0c8"
}
.fa - navicon: before, .fa - reorder: before, .fa - bars: before {
    content: "\f0c9"
}
.fa - list - ul: before {
    content: "\f0ca"
}
.fa - list - ol: before {
    content: "\f0cb"
}
.fa - strikethrough: before {
    content: "\f0cc"
}
.fa - underline: before {
    content: "\f0cd"
}
.fa - table: before {
    content: "\f0ce"
}
.fa - magic: before {
    content: "\f0d0"
}
.fa - truck: before {
    content: "\f0d1"
}
.fa - pinterest: before {
    content: "\f0d2"
}
.fa - pinterest - square: before {
    content: "\f0d3"
}
.fa - google - plus - square: before {
    content: "\f0d4"
}
.fa - google - plus: before {
    content: "\f0d5"
}
.fa - money: before {
    content: "\f0d6"
}
.fa - caret - down: before {
    content: "\f0d7"
}
.fa - caret - up: before {
    content: "\f0d8"
}
.fa - caret - left: before {
    content: "\f0d9"
}
.fa - caret - right: before {
    content: "\f0da"
}
.fa - columns: before {
    content: "\f0db"
}
.fa - unsorted: before, .fa - sort: before {
    content: "\f0dc"
}
.fa - sort - down: before, .fa - sort - desc: before {
    content: "\f0dd"
}
.fa - sort - up: before, .fa - sort - asc: before {
    content: "\f0de"
}
.fa - envelope: before {
    content: "\f0e0"
}
.fa - linkedin: before {
    content: "\f0e1"
}
.fa - rotate - left: before, .fa - undo: before {
    content: "\f0e2"
}
.fa - legal: before, .fa - gavel: before {
    content: "\f0e3"
}
.fa - dashboard: before, .fa - tachometer: before {
    content: "\f0e4"
}
.fa - comment - o: before {
    content: "\f0e5"
}
.fa - comments - o: before {
    content: "\f0e6"
}
.fa - flash: before, .fa - bolt: before {
    content: "\f0e7"
}
.fa - sitemap: before {
    content: "\f0e8"
}
.fa - umbrella: before {
    content: "\f0e9"
}
.fa - paste: before, .fa - clipboard: before {
    content: "\f0ea"
}
.fa - lightbulb - o: before {
    content: "\f0eb"
}
.fa - exchange: before {
    content: "\f0ec"
}
.fa - cloud - download: before {
    content: "\f0ed"
}
.fa - cloud - upload: before {
    content: "\f0ee"
}
.fa - user - md: before {
    content: "\f0f0"
}
.fa - stethoscope: before {
    content: "\f0f1"
}
.fa - suitcase: before {
    content: "\f0f2"
}
.fa - bell - o: before {
    content: "\f0a2"
}
.fa - coffee: before {
    content: "\f0f4"
}
.fa - cutlery: before {
    content: "\f0f5"
}
.fa - file - text - o: before {
    content: "\f0f6"
}
.fa - building - o: before {
    content: "\f0f7"
}
.fa - hospital - o: before {
    content: "\f0f8"
}
.fa - ambulance: before {
    content: "\f0f9"
}
.fa - medkit: before {
    content: "\f0fa"
}
.fa - fighter - jet: before {
    content: "\f0fb"
}
.fa - beer: before {
    content: "\f0fc"
}
.fa - h - square: before {
    content: "\f0fd"
}
.fa - plus - square: before {
    content: "\f0fe"
}
.fa - angle - double - left: before {
    content: "\f100"
}
.fa - angle - double - right: before {
    content: "\f101"
}
.fa - angle - double - up: before {
    content: "\f102"
}
.fa - angle - double - down: before {
    content: "\f103"
}
.fa - angle - left: before {
    content: "\f104"
}
.fa - angle - right: before {
    content: "\f105"
}
.fa - angle - up: before {
    content: "\f106"
}
.fa - angle - down: before {
    content: "\f107"
}
.fa - desktop: before {
    content: "\f108"
}
.fa - laptop: before {
    content: "\f109"
}
.fa - tablet: before {
    content: "\f10a"
}
.fa - mobile - phone: before, .fa - mobile: before {
    content: "\f10b"
}
.fa - circle - o: before {
    content: "\f10c"
}
.fa - quote - left: before {
    content: "\f10d"
}
.fa - quote - right: before {
    content: "\f10e"
}
.fa - spinner: before {
    content: "\f110"
}
.fa - circle: before {
    content: "\f111"
}
.fa - mail - reply: before, .fa - reply: before {
    content: "\f112"
}
.fa - github - alt: before {
    content: "\f113"
}
.fa - folder - o: before {
    content: "\f114"
}
.fa - folder - open - o: before {
    content: "\f115"
}
.fa - smile - o: before {
    content: "\f118"
}
.fa - frown - o: before {
    content: "\f119"
}
.fa - meh - o: before {
    content: "\f11a"
}
.fa - gamepad: before {
    content: "\f11b"
}
.fa - keyboard - o: before {
    content: "\f11c"
}
.fa - flag - o: before {
    content: "\f11d"
}
.fa - flag - checkered: before {
    content: "\f11e"
}
.fa - terminal: before {
    content: "\f120"
}
.fa - code: before {
    content: "\f121"
}
.fa - mail - reply - all: before, .fa - reply - all: before {
    content: "\f122"
}
.fa - star - half - empty: before, .fa - star - half - full: before, .fa - star - half - o: before {
    content: "\f123"
}
.fa - location - arrow: before {
    content: "\f124"
}
.fa - crop: before {
    content: "\f125"
}
.fa - code - fork: before {
    content: "\f126"
}
.fa - unlink: before, .fa - chain - broken: before {
    content: "\f127"
}
.fa - question: before {
    content: "\f128"
}
.fa - info: before {
    content: "\f129"
}
.fa - exclamation: before {
    content: "\f12a"
}
.fa - superscript: before {
    content: "\f12b"
}
.fa - subscript: before {
    content: "\f12c"
}
.fa - eraser: before {
    content: "\f12d"
}
.fa - puzzle - piece: before {
    content: "\f12e"
}
.fa - microphone: before {
    content: "\f130"
}
.fa - microphone - slash: before {
    content: "\f131"
}
.fa - shield: before {
    content: "\f132"
}
.fa - calendar - o: before {
    content: "\f133"
}
.fa - fire - extinguisher: before {
    content: "\f134"
}
.fa - rocket: before {
    content: "\f135"
}
.fa - maxcdn: before {
    content: "\f136"
}
.fa - chevron - circle - left: before {
    content: "\f137"
}
.fa - chevron - circle - right: before {
    content: "\f138"
}
.fa - chevron - circle - up: before {
    content: "\f139"
}
.fa - chevron - circle - down: before {
    content: "\f13a"
}
.fa - html5: before {
    content: "\f13b"
}
.fa - css3: before {
    content: "\f13c"
}
.fa - anchor: before {
    content: "\f13d"
}
.fa - unlock - alt: before {
    content: "\f13e"
}
.fa - bullseye: before {
    content: "\f140"
}
.fa - ellipsis - h: before {
    content: "\f141"
}
.fa - ellipsis - v: before {
    content: "\f142"
}
.fa - rss - square: before {
    content: "\f143"
}
.fa - play - circle: before {
    content: "\f144"
}
.fa - ticket: before {
    content: "\f145"
}
.fa - minus - square: before {
    content: "\f146"
}
.fa - minus - square - o: before {
    content: "\f147"
}
.fa - level - up: before {
    content: "\f148"
}
.fa - level - down: before {
    content: "\f149"
}
.fa - check - square: before {
    content: "\f14a"
}
.fa - pencil - square: before {
    content: "\f14b"
}
.fa - external - link - square: before {
    content: "\f14c"
}
.fa - share - square: before {
    content: "\f14d"
}
.fa - compass: before {
    content: "\f14e"
}
.fa - toggle - down: before, .fa - caret - square - o - down: before {
    content: "\f150"
}
.fa - toggle - up: before, .fa - caret - square - o - up: before {
    content: "\f151"
}
.fa - toggle - right: before, .fa - caret - square - o - right: before {
    content: "\f152"
}
.fa - euro: before, .fa - eur: before {
    content: "\f153"
}
.fa - gbp: before {
    content: "\f154"
}
.fa - dollar: before, .fa - usd: before {
    content: "\f155"
}
.fa - rupee: before, .fa - inr: before {
    content: "\f156"
}
.fa - cny: before, .fa - rmb: before, .fa - yen: before, .fa - jpy: before {
    content: "\f157"
}
.fa - ruble: before, .fa - rouble: before, .fa - rub: before {
    content: "\f158"
}
.fa - won: before, .fa - krw: before {
    content: "\f159"
}
.fa - bitcoin: before, .fa - btc: before {
    content: "\f15a"
}
.fa - file: before {
    content: "\f15b"
}
.fa - file - text: before {
    content: "\f15c"
}
.fa - sort - alpha - asc: before {
    content: "\f15d"
}
.fa - sort - alpha - desc: before {
    content: "\f15e"
}
.fa - sort - amount - asc: before {
    content: "\f160"
}
.fa - sort - amount - desc: before {
    content: "\f161"
}
.fa - sort - numeric - asc: before {
    content: "\f162"
}
.fa - sort - numeric - desc: before {
    content: "\f163"
}
.fa - thumbs - up: before {
    content: "\f164"
}
.fa - thumbs - down: before {
    content: "\f165"
}
.fa - youtube - square: before {
    content: "\f166"
}
.fa - youtube: before {
    content: "\f167"
}
.fa - xing: before {
    content: "\f168"
}
.fa - xing - square: before {
    content: "\f169"
}
.fa - youtube - play: before {
    content: "\f16a"
}
.fa - dropbox: before {
    content: "\f16b"
}
.fa - stack - overflow: before {
    content: "\f16c"
}
.fa - instagram: before {
    content: "\f16d"
}
.fa - flickr: before {
    content: "\f16e"
}
.fa - adn: before {
    content: "\f170"
}
.fa - bitbucket: before {
    content: "\f171"
}
.fa - bitbucket - square: before {
    content: "\f172"
}
.fa - tumblr: before {
    content: "\f173"
}
.fa - tumblr - square: before {
    content: "\f174"
}
.fa - long - arrow - down: before {
    content: "\f175"
}
.fa - long - arrow - up: before {
    content: "\f176"
}
.fa - long - arrow - left: before {
    content: "\f177"
}
.fa - long - arrow - right: before {
    content: "\f178"
}
.fa - apple: before {
    content: "\f179"
}
.fa - windows: before {
    content: "\f17a"
}
.fa - android: before {
    content: "\f17b"
}
.fa - linux: before {
    content: "\f17c"
}
.fa - dribbble: before {
    content: "\f17d"
}
.fa - skype: before {
    content: "\f17e"
}
.fa - foursquare: before {
    content: "\f180"
}
.fa - trello: before {
    content: "\f181"
}
.fa - female: before {
    content: "\f182"
}
.fa - male: before {
    content: "\f183"
}
.fa - gittip: before, .fa - gratipay: before {
    content: "\f184"
}
.fa - sun - o: before {
    content: "\f185"
}
.fa - moon - o: before {
    content: "\f186"
}
.fa - archive: before {
    content: "\f187"
}
.fa - bug: before {
    content: "\f188"
}
.fa - vk: before {
    content: "\f189"
}
.fa - weibo: before {
    content: "\f18a"
}
.fa - renren: before {
    content: "\f18b"
}
.fa - pagelines: before {
    content: "\f18c"
}
.fa - stack - exchange: before {
    content: "\f18d"
}
.fa - arrow - circle - o - right: before {
    content: "\f18e"
}
.fa - arrow - circle - o - left: before {
    content: "\f190"
}
.fa - toggle - left: before, .fa - caret - square - o - left: before {
    content: "\f191"
}
.fa - dot - circle - o: before {
    content: "\f192"
}
.fa - wheelchair: before {
    content: "\f193"
}
.fa - vimeo - square: before {
    content: "\f194"
}
.fa - turkish - lira: before, .fa - try : before {
        content: "\f195"
    }
.fa - plus - square - o: before {
    content: "\f196"
}
.fa - space - shuttle: before {
    content: "\f197"
}
.fa - slack: before {
    content: "\f198"
}
.fa - envelope - square: before {
    content: "\f199"
}
.fa - wordpress: before {
    content: "\f19a"
}
.fa - openid: before {
    content: "\f19b"
}
.fa - institution: before, .fa - bank: before, .fa - university: before {
    content: "\f19c"
}
.fa - mortar - board: before, .fa - graduation - cap: before {
    content: "\f19d"
}
.fa - yahoo: before {
    content: "\f19e"
}
.fa - google: before {
    content: "\f1a0"
}
.fa - reddit: before {
    content: "\f1a1"
}
.fa - reddit - square: before {
    content: "\f1a2"
}
.fa - stumbleupon - circle: before {
    content: "\f1a3"
}
.fa - stumbleupon: before {
    content: "\f1a4"
}
.fa - delicious: before {
    content: "\f1a5"
}
.fa - digg: before {
    content: "\f1a6"
}
.fa - pied - piper - pp: before {
    content: "\f1a7"
}
.fa - pied - piper - alt: before {
    content: "\f1a8"
}
.fa - drupal: before {
    content: "\f1a9"
}
.fa - joomla: before {
    content: "\f1aa"
}
.fa - language: before {
    content: "\f1ab"
}
.fa - fax: before {
    content: "\f1ac"
}
.fa - building: before {
    content: "\f1ad"
}
.fa - child: before {
    content: "\f1ae"
}
.fa - paw: before {
    content: "\f1b0"
}
.fa - spoon: before {
    content: "\f1b1"
}
.fa - cube: before {
    content: "\f1b2"
}
.fa - cubes: before {
    content: "\f1b3"
}
.fa - behance: before {
    content: "\f1b4"
}
.fa - behance - square: before {
    content: "\f1b5"
}
.fa - steam: before {
    content: "\f1b6"
}
.fa - steam - square: before {
    content: "\f1b7"
}
.fa - recycle: before {
    content: "\f1b8"
}
.fa - automobile: before, .fa - car: before {
    content: "\f1b9"
}
.fa - cab: before, .fa - taxi: before {
    content: "\f1ba"
}
.fa - tree: before {
    content: "\f1bb"
}
.fa - spotify: before {
    content: "\f1bc"
}
.fa - deviantart: before {
    content: "\f1bd"
}
.fa - soundcloud: before {
    content: "\f1be"
}
.fa - database: before {
    content: "\f1c0"
}
.fa - file - pdf - o: before {
    content: "\f1c1"
}
.fa - file - word - o: before {
    content: "\f1c2"
}
.fa - file - excel - o: before {
    content: "\f1c3"
}
.fa - file - powerpoint - o: before {
    content: "\f1c4"
}
.fa - file - photo - o: before, .fa - file - picture - o: before, .fa - file - image - o: before {
    content: "\f1c5"
}
.fa - file - zip - o: before, .fa - file - archive - o: before {
    content: "\f1c6"
}
.fa - file - sound - o: before, .fa - file - audio - o: before {
    content: "\f1c7"
}
.fa - file - movie - o: before, .fa - file - video - o: before {
    content: "\f1c8"
}
.fa - file - code - o: before {
    content: "\f1c9"
}
.fa - vine: before {
    content: "\f1ca"
}
.fa - codepen: before {
    content: "\f1cb"
}
.fa - jsfiddle: before {
    content: "\f1cc"
}
.fa - life - bouy: before, .fa - life - buoy: before, .fa - life - saver: before, .fa - support: before, .fa - life - ring: before {
    content: "\f1cd"
}
.fa - circle - o - notch: before {
    content: "\f1ce"
}
.fa - ra: before, .fa - resistance: before, .fa - rebel: before {
    content: "\f1d0"
}
.fa - ge: before, .fa - empire: before {
    content: "\f1d1"
}
.fa - git - square: before {
    content: "\f1d2"
}
.fa - git: before {
    content: "\f1d3"
}
.fa - y - combinator - square: before, .fa - yc - square: before, .fa - hacker - news: before {
    content: "\f1d4"
}
.fa - tencent - weibo: before {
    content: "\f1d5"
}
.fa - qq: before {
    content: "\f1d6"
}
.fa - wechat: before, .fa - weixin: before {
    content: "\f1d7"
}
.fa - send: before, .fa - paper - plane: before {
    content: "\f1d8"
}
.fa - send - o: before, .fa - paper - plane - o: before {
    content: "\f1d9"
}
.fa - history: before {
    content: "\f1da"
}
.fa - circle - thin: before {
    content: "\f1db"
}
.fa - header: before {
    content: "\f1dc"
}
.fa - paragraph: before {
    content: "\f1dd"
}
.fa - sliders: before {
    content: "\f1de"
}
.fa - share - alt: before {
    content: "\f1e0"
}
.fa - share - alt - square: before {
    content: "\f1e1"
}
.fa - bomb: before {
    content: "\f1e2"
}
.fa - soccer - ball - o: before, .fa - futbol - o: before {
    content: "\f1e3"
}
.fa - tty: before {
    content: "\f1e4"
}
.fa - binoculars: before {
    content: "\f1e5"
}
.fa - plug: before {
    content: "\f1e6"
}
.fa - slideshare: before {
    content: "\f1e7"
}
.fa - twitch: before {
    content: "\f1e8"
}
.fa - yelp: before {
    content: "\f1e9"
}
.fa - newspaper - o: before {
    content: "\f1ea"
}
.fa - wifi: before {
    content: "\f1eb"
}
.fa - calculator: before {
    content: "\f1ec"
}
.fa - paypal: before {
    content: "\f1ed"
}
.fa - google - wallet: before {
    content: "\f1ee"
}
.fa - cc - visa: before {
    content: "\f1f0"
}
.fa - cc - mastercard: before {
    content: "\f1f1"
}
.fa - cc - discover: before {
    content: "\f1f2"
}
.fa - cc - amex: before {
    content: "\f1f3"
}
.fa - cc - paypal: before {
    content: "\f1f4"
}
.fa - cc - stripe: before {
    content: "\f1f5"
}
.fa - bell - slash: before {
    content: "\f1f6"
}
.fa - bell - slash - o: before {
    content: "\f1f7"
}
.fa - trash: before {
    content: "\f1f8"
}
.fa - copyright: before {
    content: "\f1f9"
}
.fa - at: before {
    content: "\f1fa"
}
.fa - eyedropper: before {
    content: "\f1fb"
}
.fa - paint - brush: before {
    content: "\f1fc"
}
.fa - birthday - cake: before {
    content: "\f1fd"
}
.fa - area - chart: before {
    content: "\f1fe"
}
.fa - pie - chart: before {
    content: "\f200"
}
.fa - line - chart: before {
    content: "\f201"
}
.fa - lastfm: before {
    content: "\f202"
}
.fa - lastfm - square: before {
    content: "\f203"
}
.fa - toggle - off: before {
    content: "\f204"
}
.fa - toggle - on: before {
    content: "\f205"
}
.fa - bicycle: before {
    content: "\f206"
}
.fa - bus: before {
    content: "\f207"
}
.fa - ioxhost: before {
    content: "\f208"
}
.fa - angellist: before {
    content: "\f209"
}
.fa - cc: before {
    content: "\f20a"
}
.fa - shekel: before, .fa - sheqel: before, .fa - ils: before {
    content: "\f20b"
}
.fa - meanpath: before {
    content: "\f20c"
}
.fa - buysellads: before {
    content: "\f20d"
}
.fa - connectdevelop: before {
    content: "\f20e"
}
.fa - dashcube: before {
    content: "\f210"
}
.fa - forumbee: before {
    content: "\f211"
}
.fa - leanpub: before {
    content: "\f212"
}
.fa - sellsy: before {
    content: "\f213"
}
.fa - shirtsinbulk: before {
    content: "\f214"
}
.fa - simplybuilt: before {
    content: "\f215"
}
.fa - skyatlas: before {
    content: "\f216"
}
.fa - cart - plus: before {
    content: "\f217"
}
.fa - cart - arrow - down: before {
    content: "\f218"
}
.fa - diamond: before {
    content: "\f219"
}
.fa - ship: before {
    content: "\f21a"
}
.fa - user - secret: before {
    content: "\f21b"
}
.fa - motorcycle: before {
    content: "\f21c"
}
.fa - street - view: before {
    content: "\f21d"
}
.fa - heartbeat: before {
    content: "\f21e"
}
.fa - venus: before {
    content: "\f221"
}
.fa - mars: before {
    content: "\f222"
}
.fa - mercury: before {
    content: "\f223"
}
.fa - intersex: before, .fa - transgender: before {
    content: "\f224"
}
.fa - transgender - alt: before {
    content: "\f225"
}
.fa - venus - double: before {
    content: "\f226"
}
.fa - mars - double: before {
    content: "\f227"
}
.fa - venus - mars: before {
    content: "\f228"
}
.fa - mars - stroke: before {
    content: "\f229"
}
.fa - mars - stroke - v: before {
    content: "\f22a"
}
.fa - mars - stroke - h: before {
    content: "\f22b"
}
.fa - neuter: before {
    content: "\f22c"
}
.fa - genderless: before {
    content: "\f22d"
}
.fa - facebook - official: before {
    content: "\f230"
}
.fa - pinterest - p: before {
    content: "\f231"
}
.fa - whatsapp: before {
    content: "\f232"
}
.fa - server: before {
    content: "\f233"
}
.fa - user - plus: before {
    content: "\f234"
}
.fa - user - times: before {
    content: "\f235"
}
.fa - hotel: before, .fa - bed: before {
    content: "\f236"
}
.fa - viacoin: before {
    content: "\f237"
}
.fa - train: before {
    content: "\f238"
}
.fa - subway: before {
    content: "\f239"
}
.fa - medium: before {
    content: "\f23a"
}
.fa - yc: before, .fa - y - combinator: before {
    content: "\f23b"
}
.fa - optin - monster: before {
    content: "\f23c"
}
.fa - opencart: before {
    content: "\f23d"
}
.fa - expeditedssl: before {
    content: "\f23e"
}
.fa - battery - 4: before, .fa - battery: before, .fa - battery - full: before {
    content: "\f240"
}
.fa - battery - 3: before, .fa - battery - three - quarters: before {
    content: "\f241"
}
.fa - battery - 2: before, .fa - battery - half: before {
    content: "\f242"
}
.fa - battery - 1: before, .fa - battery - quarter: before {
    content: "\f243"
}
.fa - battery - 0: before, .fa - battery - empty: before {
    content: "\f244"
}
.fa - mouse - pointer: before {
    content: "\f245"
}
.fa - i - cursor: before {
    content: "\f246"
}
.fa - object - group: before {
    content: "\f247"
}
.fa - object - ungroup: before {
    content: "\f248"
}
.fa - sticky - note: before {
    content: "\f249"
}
.fa - sticky - note - o: before {
    content: "\f24a"
}
.fa - cc - jcb: before {
    content: "\f24b"
}
.fa - cc - diners - club: before {
    content: "\f24c"
}
.fa - clone: before {
    content: "\f24d"
}
.fa - balance - scale: before {
    content: "\f24e"
}
.fa - hourglass - o: before {
    content: "\f250"
}
.fa - hourglass - 1: before, .fa - hourglass - start: before {
    content: "\f251"
}
.fa - hourglass - 2: before, .fa - hourglass - half: before {
    content: "\f252"
}
.fa - hourglass - 3: before, .fa - hourglass - end: before {
    content: "\f253"
}
.fa - hourglass: before {
    content: "\f254"
}
.fa - hand - grab - o: before, .fa - hand - rock - o: before {
    content: "\f255"
}
.fa - hand - stop - o: before, .fa - hand - paper - o: before {
    content: "\f256"
}
.fa - hand - scissors - o: before {
    content: "\f257"
}
.fa - hand - lizard - o: before {
    content: "\f258"
}
.fa - hand - spock - o: before {
    content: "\f259"
}
.fa - hand - pointer - o: before {
    content: "\f25a"
}
.fa - hand - peace - o: before {
    content: "\f25b"
}
.fa - trademark: before {
    content: "\f25c"
}
.fa - registered: before {
    content: "\f25d"
}
.fa - creative - commons: before {
    content: "\f25e"
}
.fa - gg: before {
    content: "\f260"
}
.fa - gg - circle: before {
    content: "\f261"
}
.fa - tripadvisor: before {
    content: "\f262"
}
.fa - odnoklassniki: before {
    content: "\f263"
}
.fa - odnoklassniki - square: before {
    content: "\f264"
}
.fa - get - pocket: before {
    content: "\f265"
}
.fa - wikipedia - w: before {
    content: "\f266"
}
.fa - safari: before {
    content: "\f267"
}
.fa - chrome: before {
    content: "\f268"
}
.fa - firefox: before {
    content: "\f269"
}
.fa - opera: before {
    content: "\f26a"
}
.fa - internet - explorer: before {
    content: "\f26b"
}
.fa - tv: before, .fa - television: before {
    content: "\f26c"
}
.fa - contao: before {
    content: "\f26d"
}
.fa - 500px: before {
    content: "\f26e"
}
.fa - amazon: before {
    content: "\f270"
}
.fa - calendar - plus - o: before {
    content: "\f271"
}
.fa - calendar - minus - o: before {
    content: "\f272"
}
.fa - calendar - times - o: before {
    content: "\f273"
}
.fa - calendar - check - o: before {
    content: "\f274"
}
.fa - industry: before {
    content: "\f275"
}
.fa - map - pin: before {
    content: "\f276"
}
.fa - map - signs: before {
    content: "\f277"
}
.fa - map - o: before {
    content: "\f278"
}
.fa - map: before {
    content: "\f279"
}
.fa - commenting: before {
    content: "\f27a"
}
.fa - commenting - o: before {
    content: "\f27b"
}
.fa - houzz: before {
    content: "\f27c"
}
.fa - vimeo: before {
    content: "\f27d"
}
.fa - black - tie: before {
    content: "\f27e"
}
.fa - fonticons: before {
    content: "\f280"
}
.fa - reddit - alien: before {
    content: "\f281"
}
.fa - edge: before {
    content: "\f282"
}
.fa - credit - card - alt: before {
    content: "\f283"
}
.fa - codiepie: before {
    content: "\f284"
}
.fa - modx: before {
    content: "\f285"
}
.fa - fort - awesome: before {
    content: "\f286"
}
.fa - usb: before {
    content: "\f287"
}
.fa - product - hunt: before {
    content: "\f288"
}
.fa - mixcloud: before {
    content: "\f289"
}
.fa - scribd: before {
    content: "\f28a"
}
.fa - pause - circle: before {
    content: "\f28b"
}
.fa - pause - circle - o: before {
    content: "\f28c"
}
.fa - stop - circle: before {
    content: "\f28d"
}
.fa - stop - circle - o: before {
    content: "\f28e"
}
.fa - shopping - bag: before {
    content: "\f290"
}
.fa - shopping - basket: before {
    content: "\f291"
}
.fa - hashtag: before {
    content: "\f292"
}
.fa - bluetooth: before {
    content: "\f293"
}
.fa - bluetooth - b: before {
    content: "\f294"
}
.fa - percent: before {
    content: "\f295"
}
.fa - gitlab: before {
    content: "\f296"
}
.fa - wpbeginner: before {
    content: "\f297"
}
.fa - wpforms: before {
    content: "\f298"
}
.fa - envira: before {
    content: "\f299"
}
.fa - universal - access: before {
    content: "\f29a"
}
.fa - wheelchair - alt: before {
    content: "\f29b"
}
.fa - question - circle - o: before {
    content: "\f29c"
}
.fa - blind: before {
    content: "\f29d"
}
.fa - audio - description: before {
    content: "\f29e"
}
.fa - volume - control - phone: before {
    content: "\f2a0"
}
.fa - braille: before {
    content: "\f2a1"
}
.fa - assistive - listening - systems: before {
    content: "\f2a2"
}
.fa - asl - interpreting: before, .fa - american - sign - language - interpreting: before {
    content: "\f2a3"
}
.fa - deafness: before, .fa - hard - of - hearing: before, .fa - deaf: before {
    content: "\f2a4"
}
.fa - glide: before {
    content: "\f2a5"
}
.fa - glide - g: before {
    content: "\f2a6"
}
.fa - signing: before, .fa - sign - language: before {
    content: "\f2a7"
}
.fa - low - vision: before {
    content: "\f2a8"
}
.fa - viadeo: before {
    content: "\f2a9"
}
.fa - viadeo - square: before {
    content: "\f2aa"
}
.fa - snapchat: before {
    content: "\f2ab"
}
.fa - snapchat - ghost: before {
    content: "\f2ac"
}
.fa - snapchat - square: before {
    content: "\f2ad"
}
.fa - pied - piper: before {
    content: "\f2ae"
}
.fa - first - order: before {
    content: "\f2b0"
}
.fa - yoast: before {
    content: "\f2b1"
}
.fa - themeisle: before {
    content: "\f2b2"
}
.fa - google - plus - circle: before, .fa - google - plus - official: before {
    content: "\f2b3"
}
.fa - fa: before, .fa - font - awesome: before {
    content: "\f2b4"
}
.fa - handshake - o: before {
    content: "\f2b5"
}
.fa - envelope - open: before {
    content: "\f2b6"
}
.fa - envelope - open - o: before {
    content: "\f2b7"
}
.fa - linode: before {
    content: "\f2b8"
}
.fa - address - book: before {
    content: "\f2b9"
}
.fa - address - book - o: before {
    content: "\f2ba"
}
.fa - vcard: before, .fa - address - card: before {
    content: "\f2bb"
}
.fa - vcard - o: before, .fa - address - card - o: before {
    content: "\f2bc"
}
.fa - user - circle: before {
    content: "\f2bd"
}
.fa - user - circle - o: before {
    content: "\f2be"
}
.fa - user - o: before {
    content: "\f2c0"
}
.fa - id - badge: before {
    content: "\f2c1"
}
.fa - drivers - license: before, .fa - id - card: before {
    content: "\f2c2"
}
.fa - drivers - license - o: before, .fa - id - card - o: before {
    content: "\f2c3"
}
.fa - quora: before {
    content: "\f2c4"
}
.fa - free - code - camp: before {
    content: "\f2c5"
}
.fa - telegram: before {
    content: "\f2c6"
}
.fa - thermometer - 4: before, .fa - thermometer: before, .fa - thermometer - full: before {
    content: "\f2c7"
}
.fa - thermometer - 3: before, .fa - thermometer - three - quarters: before {
    content: "\f2c8"
}
.fa - thermometer - 2: before, .fa - thermometer - half: before {
    content: "\f2c9"
}
.fa - thermometer - 1: before, .fa - thermometer - quarter: before {
    content: "\f2ca"
}
.fa - thermometer - 0: before, .fa - thermometer - empty: before {
    content: "\f2cb"
}
.fa - shower: before {
    content: "\f2cc"
}
.fa - bathtub: before, .fa - s15: before, .fa - bath: before {
    content: "\f2cd"
}
.fa - podcast: before {
    content: "\f2ce"
}
.fa - window - maximize: before {
    content: "\f2d0"
}
.fa - window - minimize: before {
    content: "\f2d1"
}
.fa - window - restore: before {
    content: "\f2d2"
}
.fa - times - rectangle: before, .fa - window - close: before {
    content: "\f2d3"
}
.fa - times - rectangle - o: before, .fa - window - close - o: before {
    content: "\f2d4"
}
.fa - bandcamp: before {
    content: "\f2d5"
}
.fa - grav: before {
    content: "\f2d6"
}
.fa - etsy: before {
    content: "\f2d7"
}
.fa - imdb: before {
    content: "\f2d8"
}
.fa - ravelry: before {
    content: "\f2d9"
}
.fa - eercast: before {
    content: "\f2da"
}
.fa - microchip: before {
    content: "\f2db"
}
.fa - snowflake - o: before {
    content: "\f2dc"
}
.fa - superpowers: before {
    content: "\f2dd"
}
.fa - wpexplorer: before {
    content: "\f2de"
}
.fa - meetup: before {
    content: "\f2e0"
}
.sr - only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0
}
.sr - only - focusable: active, .sr - only - focusable: focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto
}


/*-----------------------------------------
 [FRAMEWORK STYLE SHEET]
 * Project: Directory Pro - Local Listing & Directory Template
 * Version: v1.1.1
 * Copyright 2017-2020 rn53themes
 * Last Changes: 05/06/2017
 * Author: RN53 Themes
 * Email:      rn53themes@gmail.com
 * Website:    http://www.rn53themes.net 
 -----------------------------------------------*/

.materialize-red {
    background-color: #e51c23 !important;
}
.materialize-red-text {
    color: #e51c23 !important;
}
.materialize-red.lighten-5 {
    background-color: #fdeaeb !important;
}
.materialize-red-text.text-lighten-5 {
    color: #fdeaeb !important;
}
.materialize-red.lighten-4 {
    background-color: #f8c1c3 !important;
}
.materialize-red-text.text-lighten-4 {
    color: #f8c1c3 !important;
}
.materialize-red.lighten-3 {
    background-color: #f3989b !important;
}
.materialize-red-text.text-lighten-3 {
    color: #f3989b !important;
}
.materialize-red.lighten-2 {
    background-color: #ee6e73 !important;
}
.materialize-red-text.text-lighten-2 {
    color: #ee6e73 !important;
}
.materialize-red.lighten-1 {
    background-color: #ea454b !important;
}
.materialize-red-text.text-lighten-1 {
    color: #ea454b !important;
}
.materialize-red.darken-1 {
    background-color: #d0181e !important;
}
.materialize-red-text.text-darken-1 {
    color: #d0181e !important;
}
.materialize-red.darken-2 {
    background-color: #b9151b !important;
}
.materialize-red-text.text-darken-2 {
    color: #b9151b !important;
}
.materialize-red.darken-3 {
    background-color: #a21318 !important;
}
.materialize-red-text.text-darken-3 {
    color: #a21318 !important;
}
.materialize-red.darken-4 {
    background-color: #8b1014 !important;
}
.materialize-red-text.text-darken-4 {
    color: #8b1014 !important;
}
.red {
    background-color: #14addb !important;
}
.red-text {
    color: #F44336 !important;
}
.red.lighten-5 {
    background-color: #FFEBEE !important;
}
.red-text.text-lighten-5 {
    color: #FFEBEE !important;
}
.red.lighten-4 {
    background-color: #FFCDD2 !important;
}
.red-text.text-lighten-4 {
    color: #FFCDD2 !important;
}
.red.lighten-3 {
    background-color: #EF9A9A !important;
}
.red-text.text-lighten-3 {
    color: #EF9A9A !important;
}
.red.lighten-2 {
    background-color: #E57373 !important;
}
.red-text.text-lighten-2 {
    color: #E57373 !important;
}
.red.lighten-1 {
    background-color: #EF5350 !important;
}
.red-text.text-lighten-1 {
    color: #EF5350 !important;
}
.red.darken-1 {
    background-color: #E53935 !important;
}
.red-text.text-darken-1 {
    color: #E53935 !important;
}
.red.darken-2 {
    background-color: #D32F2F !important;
}
.red-text.text-darken-2 {
    color: #D32F2F !important;
}
.red.darken-3 {
    background-color: #C62828 !important;
}
.red-text.text-darken-3 {
    color: #C62828 !important;
}
.red.darken-4 {
    background-color: #B71C1C !important;
}
.red-text.text-darken-4 {
    color: #B71C1C !important;
}
.red.accent-1 {
    background-color: #FF8A80 !important;
}
.red-text.text-accent-1 {
    color: #FF8A80 !important;
}
.red.accent-2 {
    background-color: #FF5252 !important;
}
.red-text.text-accent-2 {
    color: #FF5252 !important;
}
.red.accent-3 {
    background-color: #FF1744 !important;
}
.red-text.text-accent-3 {
    color: #FF1744 !important;
}
.red.accent-4 {
    background-color: #D50000 !important;
}
.red-text.text-accent-4 {
    color: #D50000 !important;
}
.pink {
    background-color: #e91e63 !important;
}
.pink-text {
    color: #e91e63 !important;
}
.pink.lighten-5 {
    background-color: #fce4ec !important;
}
.pink-text.text-lighten-5 {
    color: #fce4ec !important;
}
.pink.lighten-4 {
    background-color: #f8bbd0 !important;
}
.pink-text.text-lighten-4 {
    color: #f8bbd0 !important;
}
.pink.lighten-3 {
    background-color: #f48fb1 !important;
}
.pink-text.text-lighten-3 {
    color: #f48fb1 !important;
}
.pink.lighten-2 {
    background-color: #f06292 !important;
}
.pink-text.text-lighten-2 {
    color: #f06292 !important;
}
.pink.lighten-1 {
    background-color: #ec407a !important;
}
.pink-text.text-lighten-1 {
    color: #ec407a !important;
}
.pink.darken-1 {
    background-color: #d81b60 !important;
}
.pink-text.text-darken-1 {
    color: #d81b60 !important;
}
.pink.darken-2 {
    background-color: #c2185b !important;
}
.pink-text.text-darken-2 {
    color: #c2185b !important;
}
.pink.darken-3 {
    background-color: #ad1457 !important;
}
.pink-text.text-darken-3 {
    color: #ad1457 !important;
}
.pink.darken-4 {
    background-color: #880e4f !important;
}
.pink-text.text-darken-4 {
    color: #880e4f !important;
}
.pink.accent-1 {
    background-color: #ff80ab !important;
}
.pink-text.text-accent-1 {
    color: #ff80ab !important;
}
.pink.accent-2 {
    background-color: #ff4081 !important;
}
.pink-text.text-accent-2 {
    color: #ff4081 !important;
}
.pink.accent-3 {
    background-color: #f50057 !important;
}
.pink-text.text-accent-3 {
    color: #f50057 !important;
}
.pink.accent-4 {
    background-color: #c51162 !important;
}
.pink-text.text-accent-4 {
    color: #c51162 !important;
}
.purple {
    background-color: #9c27b0 !important;
}
.purple-text {
    color: #9c27b0 !important;
}
.purple.lighten-5 {
    background-color: #f3e5f5 !important;
}
.purple-text.text-lighten-5 {
    color: #f3e5f5 !important;
}
.purple.lighten-4 {
    background-color: #e1bee7 !important;
}
.purple-text.text-lighten-4 {
    color: #e1bee7 !important;
}
.purple.lighten-3 {
    background-color: #ce93d8 !important;
}
.purple-text.text-lighten-3 {
    color: #ce93d8 !important;
}
.purple.lighten-2 {
    background-color: #ba68c8 !important;
}
.purple-text.text-lighten-2 {
    color: #ba68c8 !important;
}
.purple.lighten-1 {
    background-color: #ab47bc !important;
}
.purple-text.text-lighten-1 {
    color: #ab47bc !important;
}
.purple.darken-1 {
    background-color: #8e24aa !important;
}
.purple-text.text-darken-1 {
    color: #8e24aa !important;
}
.purple.darken-2 {
    background-color: #7b1fa2 !important;
}
.purple-text.text-darken-2 {
    color: #7b1fa2 !important;
}
.purple.darken-3 {
    background-color: #6a1b9a !important;
}
.purple-text.text-darken-3 {
    color: #6a1b9a !important;
}
.purple.darken-4 {
    background-color: #4a148c !important;
}
.purple-text.text-darken-4 {
    color: #4a148c !important;
}
.purple.accent-1 {
    background-color: #ea80fc !important;
}
.purple-text.text-accent-1 {
    color: #ea80fc !important;
}
.purple.accent-2 {
    background-color: #e040fb !important;
}
.purple-text.text-accent-2 {
    color: #e040fb !important;
}
.purple.accent-3 {
    background-color: #d500f9 !important;
}
.purple-text.text-accent-3 {
    color: #d500f9 !important;
}
.purple.accent-4 {
    background-color: #aa00ff !important;
}
.purple-text.text-accent-4 {
    color: #aa00ff !important;
}
.deep-purple {
    background-color: #673ab7 !important;
}
.deep-purple-text {
    color: #673ab7 !important;
}
.deep-purple.lighten-5 {
    background-color: #ede7f6 !important;
}
.deep-purple-text.text-lighten-5 {
    color: #ede7f6 !important;
}
.deep-purple.lighten-4 {
    background-color: #d1c4e9 !important;
}
.deep-purple-text.text-lighten-4 {
    color: #d1c4e9 !important;
}
.deep-purple.lighten-3 {
    background-color: #b39ddb !important;
}
.deep-purple-text.text-lighten-3 {
    color: #b39ddb !important;
}
.deep-purple.lighten-2 {
    background-color: #9575cd !important;
}
.deep-purple-text.text-lighten-2 {
    color: #9575cd !important;
}
.deep-purple.lighten-1 {
    background-color: #7e57c2 !important;
}
.deep-purple-text.text-lighten-1 {
    color: #7e57c2 !important;
}
.deep-purple.darken-1 {
    background-color: #5e35b1 !important;
}
.deep-purple-text.text-darken-1 {
    color: #5e35b1 !important;
}
.deep-purple.darken-2 {
    background-color: #512da8 !important;
}
.deep-purple-text.text-darken-2 {
    color: #512da8 !important;
}
.deep-purple.darken-3 {
    background-color: #4527a0 !important;
}
.deep-purple-text.text-darken-3 {
    color: #4527a0 !important;
}
.deep-purple.darken-4 {
    background-color: #311b92 !important;
}
.deep-purple-text.text-darken-4 {
    color: #311b92 !important;
}
.deep-purple.accent-1 {
    background-color: #b388ff !important;
}
.deep-purple-text.text-accent-1 {
    color: #b388ff !important;
}
.deep-purple.accent-2 {
    background-color: #7c4dff !important;
}
.deep-purple-text.text-accent-2 {
    color: #7c4dff !important;
}
.deep-purple.accent-3 {
    background-color: #651fff !important;
}
.deep-purple-text.text-accent-3 {
    color: #651fff !important;
}
.deep-purple.accent-4 {
    background-color: #6200ea !important;
}
.deep-purple-text.text-accent-4 {
    color: #6200ea !important;
}
.indigo {
    background-color: #3f51b5 !important;
}
.indigo-text {
    color: #3f51b5 !important;
}
.indigo.lighten-5 {
    background-color: #e8eaf6 !important;
}
.indigo-text.text-lighten-5 {
    color: #e8eaf6 !important;
}
.indigo.lighten-4 {
    background-color: #c5cae9 !important;
}
.indigo-text.text-lighten-4 {
    color: #c5cae9 !important;
}
.indigo.lighten-3 {
    background-color: #9fa8da !important;
}
.indigo-text.text-lighten-3 {
    color: #9fa8da !important;
}
.indigo.lighten-2 {
    background-color: #7986cb !important;
}
.indigo-text.text-lighten-2 {
    color: #7986cb !important;
}
.indigo.lighten-1 {
    background-color: #5c6bc0 !important;
}
.indigo-text.text-lighten-1 {
    color: #5c6bc0 !important;
}
.indigo.darken-1 {
    background-color: #3949ab !important;
}
.indigo-text.text-darken-1 {
    color: #3949ab !important;
}
.indigo.darken-2 {
    background-color: #303f9f !important;
}
.indigo-text.text-darken-2 {
    color: #303f9f !important;
}
.indigo.darken-3 {
    background-color: #283593 !important;
}
.indigo-text.text-darken-3 {
    color: #283593 !important;
}
.indigo.darken-4 {
    background-color: #1a237e !important;
}
.indigo-text.text-darken-4 {
    color: #1a237e !important;
}
.indigo.accent-1 {
    background-color: #8c9eff !important;
}
.indigo-text.text-accent-1 {
    color: #8c9eff !important;
}
.indigo.accent-2 {
    background-color: #536dfe !important;
}
.indigo-text.text-accent-2 {
    color: #536dfe !important;
}
.indigo.accent-3 {
    background-color: #3d5afe !important;
}
.indigo-text.text-accent-3 {
    color: #3d5afe !important;
}
.indigo.accent-4 {
    background-color: #304ffe !important;
}
.indigo-text.text-accent-4 {
    color: #304ffe !important;
}
.blue {
    background-color: #2196F3 !important;
}
.blue-text {
    color: #2196F3 !important;
}
.blue.lighten-5 {
    background-color: #E3F2FD !important;
}
.blue-text.text-lighten-5 {
    color: #E3F2FD !important;
}
.blue.lighten-4 {
    background-color: #BBDEFB !important;
}
.blue-text.text-lighten-4 {
    color: #BBDEFB !important;
}
.blue.lighten-3 {
    background-color: #90CAF9 !important;
}
.blue-text.text-lighten-3 {
    color: #90CAF9 !important;
}
.blue.lighten-2 {
    background-color: #64B5F6 !important;
}
.blue-text.text-lighten-2 {
    color: #64B5F6 !important;
}
.blue.lighten-1 {
    background-color: #42A5F5 !important;
}
.blue-text.text-lighten-1 {
    color: #42A5F5 !important;
}
.blue.darken-1 {
    background-color: #1E88E5 !important;
}
.blue-text.text-darken-1 {
    color: #1E88E5 !important;
}
.blue.darken-2 {
    background-color: #1976D2 !important;
}
.blue-text.text-darken-2 {
    color: #1976D2 !important;
}
.blue.darken-3 {
    background-color: #1565C0 !important;
}
.blue-text.text-darken-3 {
    color: #1565C0 !important;
}
.blue.darken-4 {
    background-color: #0D47A1 !important;
}
.blue-text.text-darken-4 {
    color: #0D47A1 !important;
}
.blue.accent-1 {
    background-color: #82B1FF !important;
}
.blue-text.text-accent-1 {
    color: #82B1FF !important;
}
.blue.accent-2 {
    background-color: #448AFF !important;
}
.blue-text.text-accent-2 {
    color: #448AFF !important;
}
.blue.accent-3 {
    background-color: #2979FF !important;
}
.blue-text.text-accent-3 {
    color: #2979FF !important;
}
.blue.accent-4 {
    background-color: #2962FF !important;
}
.blue-text.text-accent-4 {
    color: #2962FF !important;
}
.light-blue {
    background-color: #03a9f4 !important;
}
.light-blue-text {
    color: #03a9f4 !important;
}
.light-blue.lighten-5 {
    background-color: #e1f5fe !important;
}
.light-blue-text.text-lighten-5 {
    color: #e1f5fe !important;
}
.light-blue.lighten-4 {
    background-color: #b3e5fc !important;
}
.light-blue-text.text-lighten-4 {
    color: #b3e5fc !important;
}
.light-blue.lighten-3 {
    background-color: #81d4fa !important;
}
.light-blue-text.text-lighten-3 {
    color: #81d4fa !important;
}
.light-blue.lighten-2 {
    background-color: #4fc3f7 !important;
}
.light-blue-text.text-lighten-2 {
    color: #4fc3f7 !important;
}
.light-blue.lighten-1 {
    background-color: #29b6f6 !important;
}
.light-blue-text.text-lighten-1 {
    color: #29b6f6 !important;
}
.light-blue.darken-1 {
    background-color: #039be5 !important;
}
.light-blue-text.text-darken-1 {
    color: #039be5 !important;
}
.light-blue.darken-2 {
    background-color: #0288d1 !important;
}
.light-blue-text.text-darken-2 {
    color: #0288d1 !important;
}
.light-blue.darken-3 {
    background-color: #0277bd !important;
}
.light-blue-text.text-darken-3 {
    color: #0277bd !important;
}
.light-blue.darken-4 {
    background-color: #01579b !important;
}
.light-blue-text.text-darken-4 {
    color: #01579b !important;
}
.light-blue.accent-1 {
    background-color: #80d8ff !important;
}
.light-blue-text.text-accent-1 {
    color: #80d8ff !important;
}
.light-blue.accent-2 {
    background-color: #40c4ff !important;
}
.light-blue-text.text-accent-2 {
    color: #40c4ff !important;
}
.light-blue.accent-3 {
    background-color: #00b0ff !important;
}
.light-blue-text.text-accent-3 {
    color: #00b0ff !important;
}
.light-blue.accent-4 {
    background-color: #0091ea !important;
}
.light-blue-text.text-accent-4 {
    color: #0091ea !important;
}
.cyan {
    background-color: #00bcd4 !important;
}
.cyan-text {
    color: #00bcd4 !important;
}
.cyan.lighten-5 {
    background-color: #e0f7fa !important;
}
.cyan-text.text-lighten-5 {
    color: #e0f7fa !important;
}
.cyan.lighten-4 {
    background-color: #b2ebf2 !important;
}
.cyan-text.text-lighten-4 {
    color: #b2ebf2 !important;
}
.cyan.lighten-3 {
    background-color: #80deea !important;
}
.cyan-text.text-lighten-3 {
    color: #80deea !important;
}
.cyan.lighten-2 {
    background-color: #4dd0e1 !important;
}
.cyan-text.text-lighten-2 {
    color: #4dd0e1 !important;
}
.cyan.lighten-1 {
    background-color: #26c6da !important;
}
.cyan-text.text-lighten-1 {
    color: #26c6da !important;
}
.cyan.darken-1 {
    background-color: #00acc1 !important;
}
.cyan-text.text-darken-1 {
    color: #00acc1 !important;
}
.cyan.darken-2 {
    background-color: #0097a7 !important;
}
.cyan-text.text-darken-2 {
    color: #0097a7 !important;
}
.cyan.darken-3 {
    background-color: #00838f !important;
}
.cyan-text.text-darken-3 {
    color: #00838f !important;
}
.cyan.darken-4 {
    background-color: #006064 !important;
}
.cyan-text.text-darken-4 {
    color: #006064 !important;
}
.cyan.accent-1 {
    background-color: #84ffff !important;
}
.cyan-text.text-accent-1 {
    color: #84ffff !important;
}
.cyan.accent-2 {
    background-color: #18ffff !important;
}
.cyan-text.text-accent-2 {
    color: #18ffff !important;
}
.cyan.accent-3 {
    background-color: #00e5ff !important;
}
.cyan-text.text-accent-3 {
    color: #00e5ff !important;
}
.cyan.accent-4 {
    background-color: #00b8d4 !important;
}
.cyan-text.text-accent-4 {
    color: #00b8d4 !important;
}
.teal {
    background-color: #009688 !important;
}
.teal-text {
    color: #009688 !important;
}
.teal.lighten-5 {
    background-color: #e0f2f1 !important;
}
.teal-text.text-lighten-5 {
    color: #e0f2f1 !important;
}
.teal.lighten-4 {
    background-color: #b2dfdb !important;
}
.teal-text.text-lighten-4 {
    color: #b2dfdb !important;
}
.teal.lighten-3 {
    background-color: #80cbc4 !important;
}
.teal-text.text-lighten-3 {
    color: #80cbc4 !important;
}
.teal.lighten-2 {
    background-color: #4db6ac !important;
}
.teal-text.text-lighten-2 {
    color: #4db6ac !important;
}
.teal.lighten-1 {
    background-color: #26a69a !important;
}
.teal-text.text-lighten-1 {
    color: #26a69a !important;
}
.teal.darken-1 {
    background-color: #00897b !important;
}
.teal-text.text-darken-1 {
    color: #00897b !important;
}
.teal.darken-2 {
    background-color: #00796b !important;
}
.teal-text.text-darken-2 {
    color: #00796b !important;
}
.teal.darken-3 {
    background-color: #00695c !important;
}
.teal-text.text-darken-3 {
    color: #00695c !important;
}
.teal.darken-4 {
    background-color: #004d40 !important;
}
.teal-text.text-darken-4 {
    color: #004d40 !important;
}
.teal.accent-1 {
    background-color: #a7ffeb !important;
}
.teal-text.text-accent-1 {
    color: #a7ffeb !important;
}
.teal.accent-2 {
    background-color: #64ffda !important;
}
.teal-text.text-accent-2 {
    color: #64ffda !important;
}
.teal.accent-3 {
    background-color: #1de9b6 !important;
}
.teal-text.text-accent-3 {
    color: #1de9b6 !important;
}
.teal.accent-4 {
    background-color: #00bfa5 !important;
}
.teal-text.text-accent-4 {
    color: #00bfa5 !important;
}
.green {
    background-color: #4CAF50 !important;
}
.green-text {
    color: #4CAF50 !important;
}
.green.lighten-5 {
    background-color: #E8F5E9 !important;
}
.green-text.text-lighten-5 {
    color: #E8F5E9 !important;
}
.green.lighten-4 {
    background-color: #C8E6C9 !important;
}
.green-text.text-lighten-4 {
    color: #C8E6C9 !important;
}
.green.lighten-3 {
    background-color: #A5D6A7 !important;
}
.green-text.text-lighten-3 {
    color: #A5D6A7 !important;
}
.green.lighten-2 {
    background-color: #81C784 !important;
}
.green-text.text-lighten-2 {
    color: #81C784 !important;
}
.green.lighten-1 {
    background-color: #66BB6A !important;
}
.green-text.text-lighten-1 {
    color: #66BB6A !important;
}
.green.darken-1 {
    background-color: #43A047 !important;
}
.green-text.text-darken-1 {
    color: #43A047 !important;
}
.green.darken-2 {
    background-color: #388E3C !important;
}
.green-text.text-darken-2 {
    color: #388E3C !important;
}
.green.darken-3 {
    background-color: #2E7D32 !important;
}
.green-text.text-darken-3 {
    color: #2E7D32 !important;
}
.green.darken-4 {
    background-color: #1B5E20 !important;
}
.green-text.text-darken-4 {
    color: #1B5E20 !important;
}
.green.accent-1 {
    background-color: #B9F6CA !important;
}
.green-text.text-accent-1 {
    color: #B9F6CA !important;
}
.green.accent-2 {
    background-color: #69F0AE !important;
}
.green-text.text-accent-2 {
    color: #69F0AE !important;
}
.green.accent-3 {
    background-color: #00E676 !important;
}
.green-text.text-accent-3 {
    color: #00E676 !important;
}
.green.accent-4 {
    background-color: #00C853 !important;
}
.green-text.text-accent-4 {
    color: #00C853 !important;
}
.light-green {
    background-color: #8bc34a !important;
}
.light-green-text {
    color: #8bc34a !important;
}
.light-green.lighten-5 {
    background-color: #f1f8e9 !important;
}
.light-green-text.text-lighten-5 {
    color: #f1f8e9 !important;
}
.light-green.lighten-4 {
    background-color: #dcedc8 !important;
}
.light-green-text.text-lighten-4 {
    color: #dcedc8 !important;
}
.light-green.lighten-3 {
    background-color: #c5e1a5 !important;
}
.light-green-text.text-lighten-3 {
    color: #c5e1a5 !important;
}
.light-green.lighten-2 {
    background-color: #aed581 !important;
}
.light-green-text.text-lighten-2 {
    color: #aed581 !important;
}
.light-green.lighten-1 {
    background-color: #9ccc65 !important;
}
.light-green-text.text-lighten-1 {
    color: #9ccc65 !important;
}
.light-green.darken-1 {
    background-color: #7cb342 !important;
}
.light-green-text.text-darken-1 {
    color: #7cb342 !important;
}
.light-green.darken-2 {
    background-color: #689f38 !important;
}
.light-green-text.text-darken-2 {
    color: #689f38 !important;
}
.light-green.darken-3 {
    background-color: #558b2f !important;
}
.light-green-text.text-darken-3 {
    color: #558b2f !important;
}
.light-green.darken-4 {
    background-color: #33691e !important;
}
.light-green-text.text-darken-4 {
    color: #33691e !important;
}
.light-green.accent-1 {
    background-color: #ccff90 !important;
}
.light-green-text.text-accent-1 {
    color: #ccff90 !important;
}
.light-green.accent-2 {
    background-color: #b2ff59 !important;
}
.light-green-text.text-accent-2 {
    color: #b2ff59 !important;
}
.light-green.accent-3 {
    background-color: #76ff03 !important;
}
.light-green-text.text-accent-3 {
    color: #76ff03 !important;
}
.light-green.accent-4 {
    background-color: #64dd17 !important;
}
.light-green-text.text-accent-4 {
    color: #64dd17 !important;
}
.lime {
    background-color: #cddc39 !important;
}
.lime-text {
    color: #cddc39 !important;
}
.lime.lighten-5 {
    background-color: #f9fbe7 !important;
}
.lime-text.text-lighten-5 {
    color: #f9fbe7 !important;
}
.lime.lighten-4 {
    background-color: #f0f4c3 !important;
}
.lime-text.text-lighten-4 {
    color: #f0f4c3 !important;
}
.lime.lighten-3 {
    background-color: #e6ee9c !important;
}
.lime-text.text-lighten-3 {
    color: #e6ee9c !important;
}
.lime.lighten-2 {
    background-color: #dce775 !important;
}
.lime-text.text-lighten-2 {
    color: #dce775 !important;
}
.lime.lighten-1 {
    background-color: #d4e157 !important;
}
.lime-text.text-lighten-1 {
    color: #d4e157 !important;
}
.lime.darken-1 {
    background-color: #c0ca33 !important;
}
.lime-text.text-darken-1 {
    color: #c0ca33 !important;
}
.lime.darken-2 {
    background-color: #afb42b !important;
}
.lime-text.text-darken-2 {
    color: #afb42b !important;
}
.lime.darken-3 {
    background-color: #9e9d24 !important;
}
.lime-text.text-darken-3 {
    color: #9e9d24 !important;
}
.lime.darken-4 {
    background-color: #827717 !important;
}
.lime-text.text-darken-4 {
    color: #827717 !important;
}
.lime.accent-1 {
    background-color: #f4ff81 !important;
}
.lime-text.text-accent-1 {
    color: #f4ff81 !important;
}
.lime.accent-2 {
    background-color: #eeff41 !important;
}
.lime-text.text-accent-2 {
    color: #eeff41 !important;
}
.lime.accent-3 {
    background-color: #c6ff00 !important;
}
.lime-text.text-accent-3 {
    color: #c6ff00 !important;
}
.lime.accent-4 {
    background-color: #aeea00 !important;
}
.lime-text.text-accent-4 {
    color: #aeea00 !important;
}
.yellow {
    background-color: #ffeb3b !important;
}
.yellow-text {
    color: #ffeb3b !important;
}
.yellow.lighten-5 {
    background-color: #fffde7 !important;
}
.yellow-text.text-lighten-5 {
    color: #fffde7 !important;
}
.yellow.lighten-4 {
    background-color: #fff9c4 !important;
}
.yellow-text.text-lighten-4 {
    color: #fff9c4 !important;
}
.yellow.lighten-3 {
    background-color: #fff59d !important;
}
.yellow-text.text-lighten-3 {
    color: #fff59d !important;
}
.yellow.lighten-2 {
    background-color: #fff176 !important;
}
.yellow-text.text-lighten-2 {
    color: #fff176 !important;
}
.yellow.lighten-1 {
    background-color: #ffee58 !important;
}
.yellow-text.text-lighten-1 {
    color: #ffee58 !important;
}
.yellow.darken-1 {
    background-color: #fdd835 !important;
}
.yellow-text.text-darken-1 {
    color: #fdd835 !important;
}
.yellow.darken-2 {
    background-color: #fbc02d !important;
}
.yellow-text.text-darken-2 {
    color: #fbc02d !important;
}
.yellow.darken-3 {
    background-color: #f9a825 !important;
}
.yellow-text.text-darken-3 {
    color: #f9a825 !important;
}
.yellow.darken-4 {
    background-color: #f57f17 !important;
}
.yellow-text.text-darken-4 {
    color: #f57f17 !important;
}
.yellow.accent-1 {
    background-color: #ffff8d !important;
}
.yellow-text.text-accent-1 {
    color: #ffff8d !important;
}
.yellow.accent-2 {
    background-color: #ffff00 !important;
}
.yellow-text.text-accent-2 {
    color: #ffff00 !important;
}
.yellow.accent-3 {
    background-color: #ffea00 !important;
}
.yellow-text.text-accent-3 {
    color: #ffea00 !important;
}
.yellow.accent-4 {
    background-color: #ffd600 !important;
}
.yellow-text.text-accent-4 {
    color: #ffd600 !important;
}
.amber {
    background-color: #ffc107 !important;
}
.amber-text {
    color: #ffc107 !important;
}
.amber.lighten-5 {
    background-color: #fff8e1 !important;
}
.amber-text.text-lighten-5 {
    color: #fff8e1 !important;
}
.amber.lighten-4 {
    background-color: #ffecb3 !important;
}
.amber-text.text-lighten-4 {
    color: #ffecb3 !important;
}
.amber.lighten-3 {
    background-color: #ffe082 !important;
}
.amber-text.text-lighten-3 {
    color: #ffe082 !important;
}
.amber.lighten-2 {
    background-color: #ffd54f !important;
}
.amber-text.text-lighten-2 {
    color: #ffd54f !important;
}
.amber.lighten-1 {
    background-color: #ffca28 !important;
}
.amber-text.text-lighten-1 {
    color: #ffca28 !important;
}
.amber.darken-1 {
    background-color: #ffb300 !important;
}
.amber-text.text-darken-1 {
    color: #ffb300 !important;
}
.amber.darken-2 {
    background-color: #ffa000 !important;
}
.amber-text.text-darken-2 {
    color: #ffa000 !important;
}
.amber.darken-3 {
    background-color: #ff8f00 !important;
}
.amber-text.text-darken-3 {
    color: #ff8f00 !important;
}
.amber.darken-4 {
    background-color: #ff6f00 !important;
}
.amber-text.text-darken-4 {
    color: #ff6f00 !important;
}
.amber.accent-1 {
    background-color: #ffe57f !important;
}
.amber-text.text-accent-1 {
    color: #ffe57f !important;
}
.amber.accent-2 {
    background-color: #ffd740 !important;
}
.amber-text.text-accent-2 {
    color: #ffd740 !important;
}
.amber.accent-3 {
    background-color: #ffc400 !important;
}
.amber-text.text-accent-3 {
    color: #ffc400 !important;
}
.amber.accent-4 {
    background-color: #ffab00 !important;
}
.amber-text.text-accent-4 {
    color: #ffab00 !important;
}
.orange {
    background-color: #ff9800 !important;
}
.orange-text {
    color: #ff9800 !important;
}
.orange.lighten-5 {
    background-color: #fff3e0 !important;
}
.orange-text.text-lighten-5 {
    color: #fff3e0 !important;
}
.orange.lighten-4 {
    background-color: #ffe0b2 !important;
}
.orange-text.text-lighten-4 {
    color: #ffe0b2 !important;
}
.orange.lighten-3 {
    background-color: #ffcc80 !important;
}
.orange-text.text-lighten-3 {
    color: #ffcc80 !important;
}
.orange.lighten-2 {
    background-color: #ffb74d !important;
}
.orange-text.text-lighten-2 {
    color: #ffb74d !important;
}
.orange.lighten-1 {
    background-color: #ffa726 !important;
}
.orange-text.text-lighten-1 {
    color: #ffa726 !important;
}
.orange.darken-1 {
    background-color: #fb8c00 !important;
}
.orange-text.text-darken-1 {
    color: #fb8c00 !important;
}
.orange.darken-2 {
    background-color: #f57c00 !important;
}
.orange-text.text-darken-2 {
    color: #f57c00 !important;
}
.orange.darken-3 {
    background-color: #ef6c00 !important;
}
.orange-text.text-darken-3 {
    color: #ef6c00 !important;
}
.orange.darken-4 {
    background-color: #e65100 !important;
}
.orange-text.text-darken-4 {
    color: #e65100 !important;
}
.orange.accent-1 {
    background-color: #ffd180 !important;
}
.orange-text.text-accent-1 {
    color: #ffd180 !important;
}
.orange.accent-2 {
    background-color: #ffab40 !important;
}
.orange-text.text-accent-2 {
    color: #ffab40 !important;
}
.orange.accent-3 {
    background-color: #ff9100 !important;
}
.orange-text.text-accent-3 {
    color: #ff9100 !important;
}
.orange.accent-4 {
    background-color: #ff6d00 !important;
}
.orange-text.text-accent-4 {
    color: #ff6d00 !important;
}
.deep-orange {
    background-color: #ff5722 !important;
}
.deep-orange-text {
    color: #ff5722 !important;
}
.deep-orange.lighten-5 {
    background-color: #fbe9e7 !important;
}
.deep-orange-text.text-lighten-5 {
    color: #fbe9e7 !important;
}
.deep-orange.lighten-4 {
    background-color: #ffccbc !important;
}
.deep-orange-text.text-lighten-4 {
    color: #ffccbc !important;
}
.deep-orange.lighten-3 {
    background-color: #ffab91 !important;
}
.deep-orange-text.text-lighten-3 {
    color: #ffab91 !important;
}
.deep-orange.lighten-2 {
    background-color: #ff8a65 !important;
}
.deep-orange-text.text-lighten-2 {
    color: #ff8a65 !important;
}
.deep-orange.lighten-1 {
    background-color: #ff7043 !important;
}
.deep-orange-text.text-lighten-1 {
    color: #ff7043 !important;
}
.deep-orange.darken-1 {
    background-color: #f4511e !important;
}
.deep-orange-text.text-darken-1 {
    color: #f4511e !important;
}
.deep-orange.darken-2 {
    background-color: #e64a19 !important;
}
.deep-orange-text.text-darken-2 {
    color: #e64a19 !important;
}
.deep-orange.darken-3 {
    background-color: #d84315 !important;
}
.deep-orange-text.text-darken-3 {
    color: #d84315 !important;
}
.deep-orange.darken-4 {
    background-color: #bf360c !important;
}
.deep-orange-text.text-darken-4 {
    color: #bf360c !important;
}
.deep-orange.accent-1 {
    background-color: #ff9e80 !important;
}
.deep-orange-text.text-accent-1 {
    color: #ff9e80 !important;
}
.deep-orange.accent-2 {
    background-color: #ff6e40 !important;
}
.deep-orange-text.text-accent-2 {
    color: #ff6e40 !important;
}
.deep-orange.accent-3 {
    background-color: #ff3d00 !important;
}
.deep-orange-text.text-accent-3 {
    color: #ff3d00 !important;
}
.deep-orange.accent-4 {
    background-color: #dd2c00 !important;
}
.deep-orange-text.text-accent-4 {
    color: #dd2c00 !important;
}
.brown {
    background-color: #795548 !important;
}
.brown-text {
    color: #795548 !important;
}
.brown.lighten-5 {
    background-color: #efebe9 !important;
}
.brown-text.text-lighten-5 {
    color: #efebe9 !important;
}
.brown.lighten-4 {
    background-color: #d7ccc8 !important;
}
.brown-text.text-lighten-4 {
    color: #d7ccc8 !important;
}
.brown.lighten-3 {
    background-color: #bcaaa4 !important;
}
.brown-text.text-lighten-3 {
    color: #bcaaa4 !important;
}
.brown.lighten-2 {
    background-color: #a1887f !important;
}
.brown-text.text-lighten-2 {
    color: #a1887f !important;
}
.brown.lighten-1 {
    background-color: #8d6e63 !important;
}
.brown-text.text-lighten-1 {
    color: #8d6e63 !important;
}
.brown.darken-1 {
    background-color: #6d4c41 !important;
}
.brown-text.text-darken-1 {
    color: #6d4c41 !important;
}
.brown.darken-2 {
    background-color: #5d4037 !important;
}
.brown-text.text-darken-2 {
    color: #5d4037 !important;
}
.brown.darken-3 {
    background-color: #4e342e !important;
}
.brown-text.text-darken-3 {
    color: #4e342e !important;
}
.brown.darken-4 {
    background-color: #3e2723 !important;
}
.brown-text.text-darken-4 {
    color: #3e2723 !important;
}
.blue-grey {
    background-color: #607d8b !important;
}
.blue-grey-text {
    color: #607d8b !important;
}
.blue-grey.lighten-5 {
    background-color: #eceff1 !important;
}
.blue-grey-text.text-lighten-5 {
    color: #eceff1 !important;
}
.blue-grey.lighten-4 {
    background-color: #cfd8dc !important;
}
.blue-grey-text.text-lighten-4 {
    color: #cfd8dc !important;
}
.blue-grey.lighten-3 {
    background-color: #b0bec5 !important;
}
.blue-grey-text.text-lighten-3 {
    color: #b0bec5 !important;
}
.blue-grey.lighten-2 {
    background-color: #90a4ae !important;
}
.blue-grey-text.text-lighten-2 {
    color: #90a4ae !important;
}
.blue-grey.lighten-1 {
    background-color: #78909c !important;
}
.blue-grey-text.text-lighten-1 {
    color: #78909c !important;
}
.blue-grey.darken-1 {
    background-color: #546e7a !important;
}
.blue-grey-text.text-darken-1 {
    color: #546e7a !important;
}
.blue-grey.darken-2 {
    background-color: #455a64 !important;
}
.blue-grey-text.text-darken-2 {
    color: #455a64 !important;
}
.blue-grey.darken-3 {
    background-color: #37474f !important;
}
.blue-grey-text.text-darken-3 {
    color: #37474f !important;
}
.blue-grey.darken-4 {
    background-color: #263238 !important;
}
.blue-grey-text.text-darken-4 {
    color: #263238 !important;
}
.grey {
    background-color: #9e9e9e !important;
}
.grey-text {
    color: #9e9e9e !important;
}
.grey.lighten-5 {
    background-color: #fafafa !important;
}
.grey-text.text-lighten-5 {
    color: #fafafa !important;
}
.grey.lighten-4 {
    background-color: #f5f5f5 !important;
}
.grey-text.text-lighten-4 {
    color: #f5f5f5 !important;
}
.grey.lighten-3 {
    background-color: #eeeeee !important;
}
.grey-text.text-lighten-3 {
    color: #eeeeee !important;
}
.grey.lighten-2 {
    background-color: #e0e0e0 !important;
}
.grey-text.text-lighten-2 {
    color: #e0e0e0 !important;
}
.grey.lighten-1 {
    background-color: #bdbdbd !important;
}
.grey-text.text-lighten-1 {
    color: #bdbdbd !important;
}
.grey.darken-1 {
    background-color: #757575 !important;
}
.grey-text.text-darken-1 {
    color: #757575 !important;
}
.grey.darken-2 {
    background-color: #616161 !important;
}
.grey-text.text-darken-2 {
    color: #616161 !important;
}
.grey.darken-3 {
    background-color: #424242 !important;
}
.grey-text.text-darken-3 {
    color: #424242 !important;
}
.grey.darken-4 {
    background-color: #212121 !important;
}
.grey-text.text-darken-4 {
    color: #212121 !important;
}
.black {
    background-color: #000000 !important;
}
.black-text {
    color: #000000 !important;
}
.white {
    background-color: #FFFFFF !important;
}
.white-text {
    color: #FFFFFF !important;
}
.transparent {
    background-color: transparent !important;
}
.transparent-text {
    color: transparent !important;
}
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
/**
 * 1. Set default font family to sans-serif.
 * 2. Prevent iOS and IE text size adjust after device orientation change,
 *    without disabling user zoom.
 */

html {
    font-family: sans-serif;
    /* 1 */
    
    -ms-text-size-adjust: 100%;
    /* 2 */
    
    -webkit-text-size-adjust: 100%;
    /* 2 */
}
/**
 * Remove default margin.
 */

body {
    margin: 0;
}
/* HTML5 display definitions
   ========================================================================== */
/**
 * Correct `block` display not defined for any HTML5 element in IE 8/9.
 * Correct `block` display not defined for `details` or `summary` in IE 10/11
 * and Firefox.
 * Correct `block` display not defined for `main` in IE 11.
 */

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
    display: block;
}
/**
 * 1. Correct `inline-block` display not defined in IE 8/9.
 * 2. Normalize vertical alignment of `progress` in Chrome, Firefox, and Opera.
 */

audio,
canvas,
progress,
video {
    display: inline-block;
    /* 1 */
    
    vertical-align: baseline;
    /* 2 */
}
/**
 * Prevent modern browsers from displaying `audio` without controls.
 * Remove excess height in iOS 5 devices.
 */

audio:not([controls]) {
    display: none;
    height: 0;
}
/**
 * Address `[hidden]` styling not present in IE 8/9/10.
 * Hide the `template` element in IE 8/9/10/11, Safari, and Firefox < 22.

[hidden],
template {
    display: none;
}
/* Links
   ========================================================================== */
/**
 * Remove the gray background color from active links in IE 10.
 */

a {
    background-color: transparent;
}
/**
 * Improve readability of focused elements when they are also in an
 * active/hover state.
 */

a:active,
a:hover {
    outline: 0;
}
/* Text-level semantics
   ========================================================================== */
/**
 * Address styling not present in IE 8/9/10/11, Safari, and Chrome.
 */

abbr[title] {
    border-bottom: 1px dotted;
}
/**
 * Address style set to `bolder` in Firefox 4+, Safari, and Chrome.
 */

b,
strong {
    font-weight: bold;
}
/**
 * Address styling not present in Safari and Chrome.
 */

dfn {
    font-style: italic;
}
/**
 * Address variable `h1` font-size and margin within `section` and `article`
 * contexts in Firefox 4+, Safari, and Chrome.
 */

h1 {
    font-size: 2em;
    margin: 0.67em 0;
}
/**
 * Address styling not present in IE 8/9.
 */

mark {
    background: #ff0;
    color: #000;
}
/**
 * Address inconsistent and variable font size in all browsers.
 */

small {
    font-size: 80%;
}
/**
 * Prevent `sub` and `sup` affecting `line-height` in all browsers.
 */

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}
sup {
    top: -0.5em;
}
sub {
    bottom: -0.25em;
}
/* Embedded content
   ========================================================================== */
/**
 * Remove border when inside `a` element in IE 8/9/10.
 */

img {
    border: 0;
}
/**
 * Correct overflow not hidden in IE 9/10/11.
 */

svg:not(:root) {
    overflow: hidden;
}
/* Grouping content
   ========================================================================== */
/**
 * Address margin not present in IE 8/9 and Safari.
 */

figure {
    margin: 1em 40px;
}
/**
 * Address differences between Firefox and other browsers.
 */

hr {
    box-sizing: content-box;
    height: 0;
}
/**
 * Contain overflow in all browsers.
 */

pre {
    overflow: auto;
}
/**
 * Address odd `em`-unit font size rendering in all browsers.
 */
/* Forms
   ========================================================================== */
/**
 * Known limitation: by default, Chrome and Safari on OS X allow very limited
 * styling of `select`, unless a `border` property is set.
 */
/**
 * 1. Correct color not being inherited.
 *    Known issue: affects color of disabled elements.
 * 2. Correct font properties not being inherited.
 * 3. Address margins set differently in Firefox 4+, Safari, and Chrome.
 */

button,
input,
optgroup,
select,
textarea {
    color: inherit;
    /* 1 */
    
    font: inherit;
    /* 2 */
    
    margin: 0;
    /* 3 */
}
/**
 * Address `overflow` set to `hidden` in IE 8/9/10/11.
 */

button {
    overflow: visible;
}
/**
 * Address inconsistent `text-transform` inheritance for `button` and `select`.
 * All other form control elements do not inherit `text-transform` values.
 * Correct `button` style inheritance in Firefox, IE 8/9/10/11, and Opera.
 * Correct `select` style inheritance in Firefox.
 */

button,
select {
    text-transform: none;
}
/**
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
 *    and `video` controls.
 * 2. Correct inability to style clickable `input` types in iOS.
 * 3. Improve usability and consistency of cursor style between image-type
 *    `input` and others.
 */

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
    -webkit-appearance: button;
    /* 2 */
    
    cursor: pointer;
    /* 3 */
}
/**
 * Re-set default cursor for disabled elements.
 */

button[disabled],
html input[disabled] {
    cursor: default;
}
/**
 * Remove inner padding and border in Firefox 4+.
 */

button::-moz-focus-inner,
input::-moz-focus-inner {
    border: 0;
    padding: 0;
}
/**
 * Address Firefox 4+ setting `line-height` on `input` using `!important` in
 * the UA stylesheet.
 */

input {
    line-height: normal;
}
/**
 * It's recommended that you don't attempt to style these elements.
 * Firefox's implementation doesn't respect box-sizing, padding, or width.
 *
 * 1. Address box sizing set to `content-box` in IE 8/9/10.
 * 2. Remove excess padding in IE 8/9/10.
 */

input[type="checkbox"],
input[type="radio"] {
    box-sizing: border-box;
    /* 1 */
    
    padding: 0;
    /* 2 */
}
/**
 * Fix the cursor style for Chrome's increment/decrement buttons. For certain
 * `font-size` values of the `input`, it causes the cursor style of the
 * decrement button to change from `default` to `text`.
 */

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    height: auto;
}
/**
 * 1. Address `appearance` set to `searchfield` in Safari and Chrome.
 * 2. Address `box-sizing` set to `border-box` in Safari and Chrome.
 */

input[type="search"] {
    -webkit-appearance: textfield;
    /* 1 */
    
    box-sizing: content-box;
    /* 2 */
}
/**
 * Remove inner padding and search cancel button in Safari and Chrome on OS X.
 * Safari (but not Chrome) clips the cancel button when the search input has
 * padding (and `textfield` appearance).
 */

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}
/**
 * Define consistent border, margin, and padding.
 */

fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
}
/**
 * 1. Correct `color` not being inherited in IE 8/9/10/11.
 * 2. Remove padding so people aren't caught out if they zero out fieldsets.
 */

legend {
    border: 0;
    /* 1 */
    
    padding: 0;
    /* 2 */
}
/**
 * Remove default vertical scrollbar in IE 8/9/10/11.
 */

textarea {
    overflow: auto;
}
/**
 * Don't inherit the `font-weight` (applied by a rule above).
 * NOTE: the default cannot safely be changed in Chrome and Safari on OS X.
 */

optgroup {
    font-weight: bold;
}
/* Tables
   ========================================================================== */
/**
 * Remove most spacing between table cells.
 */

table {
    border-collapse: collapse;
    border-spacing: 0;
}
td,
th {
    padding: 0;
}
html {
    box-sizing: border-box;
}
*,
*:before,
*:after {
    box-sizing: inherit;
}
ul:not(.browser-default) {
    padding-left: 0;
    list-style-type: none;
}
ul:not(.browser-default) li {
    list-style-type: none;
}
a {
    color: #039be5;
    text-decoration: none;
    -webkit-tap-highlight-color: transparent;
}
.valign-wrapper {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}
.clearfix {
    clear: both;
	overflow: auto;
}
.z-depth-0 {
    box-shadow: none !important;
}
.z-depth-1,
nav,
.card-panel,
.card,
.toast,
.btn,
.btn-large,
.btn-floating,
.dropdown-content,
.collapsible,
.side-nav {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
}
.z-depth-1-half,
.btn:hover,
.btn-large:hover,
.btn-floating:hover {
    box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
}
.z-depth-2 {
    box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
}
.z-depth-3 {
    box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.3);
}
.z-depth-4,
.modal {
    box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);
}
.z-depth-5 {
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3);
}
.hoverable {
    transition: box-shadow .25s;
    box-shadow: 0;
}
.hoverable:hover {
    transition: box-shadow .25s;
    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.divider {
    height: 1px;
    overflow: hidden;
    background-color: #e0e0e0;
}
blockquote {
    margin: 20px 0;
    padding-left: 1.5rem;
    border-left: 5px solid #ee6e73;
}
i {
    line-height: inherit;
}
i.left {
    float: left;
    margin-right: 15px;
}
i.right {
    float: right;
    margin-left: 15px;
}
i.tiny {
    font-size: 1rem;
}
i.small {
    font-size: 2rem;
}
i.medium {
    font-size: 4rem;
}
i.large {
    font-size: 6rem;
}
img.responsive-img,
video.responsive-video {
    max-width: 100%;
    height: auto;
}
.pagination li {
    display: inline-block;
    border-radius: 2px;
    text-align: center;
    vertical-align: top;
    height: 30px;
}
.pagination li a {
    color: #444;
    display: inline-block;
    font-size: 1.2rem;
    padding: 0 10px;
    line-height: 30px;
}
.pagination li.active a {
    color: #fff;
}
.pagination li.active {
    background-color: #ee6e73;
}
.pagination li.disabled a {
    cursor: default;
    color: #999;
}
.pagination li i {
    font-size: 24px;
    vertical-align: middle;
}
.pagination li.pages ul li {
    display: inline-block;
    float: none;
}
@media only screen and (max-width: 992px) {
    .pagination {} .pagination li.prev,
    .pagination li.next {
        width: 10%;
    }
    .pagination li.pages {
        width: 80%;
        overflow: hidden;
        white-space: nowrap;
    }
}
.breadcrumb {
    font-size: 18px;
    color: rgba(255, 255, 255, 0.7);
}
.breadcrumb i,
.breadcrumb [class^="mdi-"],
.breadcrumb [class*="mdi-"],
.breadcrumb i.material-icons {
    display: inline-block;
    float: left;
    font-size: 24px;
}
.breadcrumb:before {
    color: rgba(255, 255, 255, 0.7);
    vertical-align: top;
    display: inline-block;
    font-weight: normal;
    font-style: normal;
    font-size: 25px;
    margin: 0 10px 0 8px;
    -webkit-font-smoothing: antialiased;
}
.breadcrumb:first-child:before {
    display: none;
}
.breadcrumb:last-child {
    color: #fff;
}
.parallax-container {
    position: relative;
    overflow: hidden;
    height: 500px;
}
.parallax {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
}
.parallax img {
    display: none;
    position: absolute;
    left: 50%;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}
.pin-top,
.pin-bottom {
    position: relative;
}
.pinned {
    position: fixed !important;
}
/*********************
  Transition Classes
**********************/

ul.staggered-list li {
    opacity: 0;
}
.fade-in {
    opacity: 0;
    -webkit-transform-origin: 0 50%;
    transform-origin: 0 50%;
}
/*********************
  Media Query Classes
**********************/

@media only screen and (max-width: 600px) {
    .hide-on-small-only,
    .hide-on-small-and-down {
        display: none !important;
    }
}
@media only screen and (max-width: 992px) {
    .hide-on-med-and-down {
        display: none !important;
    }
}
@media only screen and (min-width: 601px) {
    .hide-on-med-and-up {
        display: none !important;
    }
}
@media only screen and (min-width: 600px) and (max-width: 992px) {
    .hide-on-med-only {
        display: none !important;
    }
}
@media only screen and (min-width: 993px) {
    .hide-on-large-only {
        display: none !important;
    }
}
@media only screen and (min-width: 993px) {
    .show-on-large {
        display: block !important;
    }
}
@media only screen and (min-width: 600px) and (max-width: 992px) {
    .show-on-medium {
        display: block !important;
    }
}
@media only screen and (max-width: 600px) {
    .show-on-small {
        display: block !important;
    }
}
@media only screen and (min-width: 601px) {
    .show-on-medium-and-up {
        display: block !important;
    }
}
@media only screen and (max-width: 992px) {
    .show-on-medium-and-down {
        display: block !important;
    }
}
@media only screen and (max-width: 600px) {
    .center-on-small-only {
        text-align: center;
    }
}
.page-footer {
    padding-top: 20px;
    background-color: #ee6e73;
}
.page-footer .footer-copyright {
    overflow: hidden;
    min-height: 50px;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 10px 0px;
    color: rgba(255, 255, 255, 0.8);
    background-color: rgba(51, 51, 51, 0.08);
}
table,
th,
td {
    border: none;
}
table {
    width: 100%;
    display: table;
}



table.bordered > thead > tr,
table.bordered > tbody > tr {
    border-bottom: 1px solid #d0d0d0;
}
table.striped > tbody > tr:nth-child(odd) {
    background-color: #f2f2f2;
}
table.striped > tbody > tr > td {
    border-radius: 0;
}
table.highlight > tbody > tr {
    transition: background-color .25s ease;
}
table.highlight > tbody > tr:hover {
    background-color: #f2f2f2;
}
table.centered thead tr th,
table.centered tbody tr td {
    text-align: center;
}
thead {
    border-bottom: 1px solid #d0d0d0;
}
td,
th {
    padding: 15px 5px;
    display: table-cell;
    text-align: left;
    vertical-align: middle;
    border-radius: 2px;
}
@media only screen and (max-width: 992px) {
    table.responsive-table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        display: block;
        position: relative;
        /* sort out borders */
    }
    table.responsive-table td:empty:before {
        content: '\00a0';
    }
    table.responsive-table th,
    table.responsive-table td {
        margin: 0;
        vertical-align: top;
    }
    table.responsive-table th {
        text-align: left;
    }
    table.responsive-table thead {
        display: block;
        float: left;
    }
    table.responsive-table thead tr {
        display: block;
        padding: 0 10px 0 0;
    }
    table.responsive-table thead tr th::before {
        content: "\00a0";
    }
    table.responsive-table tbody {
        display: block;
        width: auto;
        position: relative;
        overflow-x: auto;
        white-space: nowrap;
    }
    table.responsive-table tbody tr {
        display: inline-block;
        vertical-align: top;
    }
    table.responsive-table th {
        display: block;
        text-align: right;
    }
    table.responsive-table td {
        display: block;
        min-height: 1.25em;
        text-align: left;
    }
    table.responsive-table tr {
        padding: 0 10px;
    }
    table.responsive-table thead {
        border: 0;
        border-right: 1px solid #d0d0d0;
    }
    table.responsive-table.bordered th {
        border-bottom: 0;
        border-left: 0;
    }
    table.responsive-table.bordered td {
        border-left: 0;
        border-right: 0;
        border-bottom: 0;
    }
    table.responsive-table.bordered tr {
        border: 0;
    }
    table.responsive-table.bordered tbody tr {
        border-right: 1px solid #d0d0d0;
    }
}
.collection {
    margin: 0.5rem 0 1rem 0;
    border: 1px solid #e0e0e0;
    border-radius: 2px;
    overflow: hidden;
    position: relative;
}
.collection .collection-item {
    background-color: #fff;
    line-height: 1.5rem;
    padding: 10px 20px;
    margin: 0;
    border-bottom: 1px solid #e0e0e0;
}
.collection .collection-item.avatar {
    min-height: 84px;
    padding-left: 72px;
    position: relative;
}
.collection .collection-item.avatar .circle {
    position: absolute;
    width: 42px;
    height: 42px;
    overflow: hidden;
    left: 15px;
    display: inline-block;
    vertical-align: middle;
}
.collection .collection-item.avatar i.circle {
    font-size: 18px;
    line-height: 42px;
    color: #fff;
    background-color: #999;
    text-align: center;
}
.collection .collection-item.avatar .title {
    font-size: 16px;
}
.collection .collection-item.avatar p {
    margin: 0;
}
.collection .collection-item.avatar .secondary-content {
    position: absolute;
    top: 16px;
    right: 16px;
}
.collection .collection-item:last-child {
    border-bottom: none;
}
.collection .collection-item.active {
    background-color: #26a69a;
    color: #eafaf9;
}
.collection .collection-item.active .secondary-content {
    color: #fff;
}
.collection a.collection-item {
    display: block;
    transition: .25s;
    color: #26a69a;
}
.collection a.collection-item:not(.active):hover {
    background-color: #ddd;
}
.collection.with-header .collection-header {
    background-color: #fff;
    border-bottom: 1px solid #e0e0e0;
    padding: 10px 20px;
}
.collection.with-header .collection-item {
    padding-left: 30px;
}
.collection.with-header .collection-item.avatar {
    padding-left: 72px;
}
.secondary-content {
    float: right;
    color: #26a69a;
}
.collapsible .collection {
    margin: 0;
    border: none;
}
.video-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
.video-container iframe,
.video-container object,
.video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.progress {
    position: relative;
    height: 4px;
    display: block;
    width: 100%;
    background-color: #acece6;
    border-radius: 2px;
    margin: 0.5rem 0 1rem 0;
    overflow: hidden;
}
.progress .determinate {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    background-color: #26a69a;
    transition: width .3s linear;
}
.progress .indeterminate {
    background-color: #26a69a;
}
.progress .indeterminate:before {
    content: '';
    position: absolute;
    background-color: inherit;
    top: 0;
    left: 0;
    bottom: 0;
    will-change: left, right;
    -webkit-animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
    animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
}
.progress .indeterminate:after {
    content: '';
    position: absolute;
    background-color: inherit;
    top: 0;
    left: 0;
    bottom: 0;
    will-change: left, right;
    -webkit-animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    -webkit-animation-delay: 1.15s;
    animation-delay: 1.15s;
}
@-webkit-keyframes indeterminate {
    0% {
        left: -35%;
        right: 100%;
    }
    60% {
        left: 100%;
        right: -90%;
    }
    100% {
        left: 100%;
        right: -90%;
    }
}
@keyframes indeterminate {
    0% {
        left: -35%;
        right: 100%;
    }
    60% {
        left: 100%;
        right: -90%;
    }
    100% {
        left: 100%;
        right: -90%;
    }
}
@-webkit-keyframes indeterminate-short {
    0% {
        left: -200%;
        right: 100%;
    }
    60% {
        left: 107%;
        right: -8%;
    }
    100% {
        left: 107%;
        right: -8%;
    }
}
@keyframes indeterminate-short {
    0% {
        left: -200%;
        right: 100%;
    }
    60% {
        left: 107%;
        right: -8%;
    }
    100% {
        left: 107%;
        right: -8%;
    }
}
/*******************
  Utility Classes
*******************/

.hide {
    display: none !important;
}
.left-align {
    text-align: left;
}
.right-align {
    text-align: right;
}
.center,
.center-align {
    text-align: center;
}
.left {
    float: left !important;
}
.right {
    float: right !important;
}
.no-select,
input[type=range],
input[type=range] + .thumb {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.circle {
    border-radius: 50%;
}
.center-block {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.truncate {
    display: block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.no-padding {
    padding: 0 !important;
}
span.badge {
    min-width: 3rem;
    padding: 0 6px;
    margin-left: 14px;
    text-align: center;
    font-size: 1rem;
    line-height: 22px;
    height: 22px;
    color: #757575;
    float: right;
    box-sizing: border-box;
}
span.badge.new {
    font-weight: 300;
    font-size: 0.8rem;
    color: #fff;
    background-color: #26a69a;
    border-radius: 2px;
}
span.badge.new:after {
    content: " new";
}
span.badge[data-badge-caption]::after {
    content: " " attr(data-badge-caption);
}
nav ul a span.badge {
    display: inline-block;
    float: none;
    margin-left: 4px;
    line-height: 22px;
    height: 22px;
}
.collection-item span.badge {
    margin-top: calc(0.75rem - 11px);
}
.collapsible span.badge {
    margin-top: calc(1.5rem - 11px);
}
.side-nav span.badge {
    margin-top: calc(24px - 11px);
}
/* This is needed for some mobile phones to display the Google Icon font properly */

.material-icons {
    text-rendering: optimizeLegibility;
    -webkit-font-feature-settings: 'liga';
    -moz-font-feature-settings: 'liga';
    font-feature-settings: 'liga';
}
.container {} @media only screen and (min-width: 601px) {
    .container {
        width: 85%;
    }
}
@media only screen and (min-width: 993px) {
    .container {
        width: 70%;
    }
}
.container .row {
    margin-left: -0.75rem;
    margin-right: -0.75rem;
}
.section {
    padding-top: 1rem;
    padding-bottom: 1rem;
}
.section.no-pad {
    padding: 0;
}
.section.no-pad-bot {
    padding-bottom: 0;
}
.section.no-pad-top {
    padding-top: 0;
}
.row {} .row:after {
    content: "";
    display: table;
    clear: both;
}
.row .col {
    float: left;
    box-sizing: border-box;
    padding: 0 0.75rem;
    min-height: 1px;
}
.row .col[class*="push-"],
.row .col[class*="pull-"] {
    position: relative;
}
.row .col.s1 {
    width: 8.3333333333%;
    margin-left: auto;
    left: auto;
    right: auto;
}
.row .col.s2 {
    width: 16.6666666667%;
    margin-left: auto;
    left: auto;
    right: auto;
}
.row .col.s3 {
    width: 25%;
    margin-left: auto;
    left: auto;
    right: auto;
}
.row .col.s4 {
    width: 33.3333333333%;
    margin-left: auto;
    left: auto;
    right: auto;
}
.row .col.s5 {
    width: 41.6666666667%;
    margin-left: auto;
    left: auto;
    right: auto;
}
.row .col.s6 {
    width: 50%;
    margin-left: auto;
    left: auto;
    right: auto;
}
.row .col.s7 {
    width: 58.3333333333%;
    margin-left: auto;
    left: auto;
    right: auto;
}
.row .col.s8 {
    width: 66.6666666667%;
    margin-left: auto;
    left: auto;
    right: auto;
}
.row .col.s9 {
    width: 75%;
    margin-left: auto;
    left: auto;
    right: auto;
}
.row .col.s10 {
    width: 83.3333333333%;
    margin-left: auto;
    left: auto;
    right: auto;
}
.row .col.s11 {
    width: 91.6666666667%;
    margin-left: auto;
    left: auto;
    right: auto;
}
.row .col.s12 {
    width: 100%;
    margin-left: auto;
    left: auto;
    right: auto;
}
.row .col.offset-s1 {
    margin-left: 8.3333333333%;
}
.row .col.pull-s1 {
    right: 8.3333333333%;
}
.row .col.push-s1 {
    left: 8.3333333333%;
}
.row .col.offset-s2 {
    margin-left: 16.6666666667%;
}
.row .col.pull-s2 {
    right: 16.6666666667%;
}
.row .col.push-s2 {
    left: 16.6666666667%;
}
.row .col.offset-s3 {
    margin-left: 25%;
}
.row .col.pull-s3 {
    right: 25%;
}
.row .col.push-s3 {
    left: 25%;
}
.row .col.offset-s4 {
    margin-left: 33.3333333333%;
}
.row .col.pull-s4 {
    right: 33.3333333333%;
}
.row .col.push-s4 {
    left: 33.3333333333%;
}
.row .col.offset-s5 {
    margin-left: 41.6666666667%;
}
.row .col.pull-s5 {
    right: 41.6666666667%;
}
.row .col.push-s5 {
    left: 41.6666666667%;
}
.row .col.offset-s6 {
    margin-left: 50%;
}
.row .col.pull-s6 {
    right: 50%;
}
.row .col.push-s6 {
    left: 50%;
}
.row .col.offset-s7 {
    margin-left: 58.3333333333%;
}
.row .col.pull-s7 {
    right: 58.3333333333%;
}
.row .col.push-s7 {
    left: 58.3333333333%;
}
.row .col.offset-s8 {
    margin-left: 66.6666666667%;
}
.row .col.pull-s8 {
    right: 66.6666666667%;
}
.row .col.push-s8 {
    left: 66.6666666667%;
}
.row .col.offset-s9 {
    margin-left: 75%;
}
.row .col.pull-s9 {
    right: 75%;
}
.row .col.push-s9 {
    left: 75%;
}
.row .col.offset-s10 {
    margin-left: 83.3333333333%;
}
.row .col.pull-s10 {
    right: 83.3333333333%;
}
.row .col.push-s10 {
    left: 83.3333333333%;
}
.row .col.offset-s11 {
    margin-left: 91.6666666667%;
}
.row .col.pull-s11 {
    right: 91.6666666667%;
}
.row .col.push-s11 {
    left: 91.6666666667%;
}
.row .col.offset-s12 {
    margin-left: 100%;
}
.row .col.pull-s12 {
    right: 100%;
}
.row .col.push-s12 {
    left: 100%;
}
@media only screen and (min-width: 601px) {
    .row .col.m1 {
        width: 8.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.m2 {
        width: 16.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.m3 {
        width: 25%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.m4 {
        width: 33.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.m5 {
        width: 41.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.m6 {
        width: 50%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.m7 {
        width: 58.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.m8 {
        width: 66.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.m9 {
        width: 75%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.m10 {
        width: 83.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.m11 {
        width: 91.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.m12 {
        width: 100%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.offset-m1 {
        margin-left: 8.3333333333%;
    }
    .row .col.pull-m1 {
        right: 8.3333333333%;
    }
    .row .col.push-m1 {
        left: 8.3333333333%;
    }
    .row .col.offset-m2 {
        margin-left: 16.6666666667%;
    }
    .row .col.pull-m2 {
        right: 16.6666666667%;
    }
    .row .col.push-m2 {
        left: 16.6666666667%;
    }
    .row .col.offset-m3 {
        margin-left: 25%;
    }
    .row .col.pull-m3 {
        right: 25%;
    }
    .row .col.push-m3 {
        left: 25%;
    }
    .row .col.offset-m4 {
        margin-left: 33.3333333333%;
    }
    .row .col.pull-m4 {
        right: 33.3333333333%;
    }
    .row .col.push-m4 {
        left: 33.3333333333%;
    }
    .row .col.offset-m5 {
        margin-left: 41.6666666667%;
    }
    .row .col.pull-m5 {
        right: 41.6666666667%;
    }
    .row .col.push-m5 {
        left: 41.6666666667%;
    }
    .row .col.offset-m6 {
        margin-left: 50%;
    }
    .row .col.pull-m6 {
        right: 50%;
    }
    .row .col.push-m6 {
        left: 50%;
    }
    .row .col.offset-m7 {
        margin-left: 58.3333333333%;
    }
    .row .col.pull-m7 {
        right: 58.3333333333%;
    }
    .row .col.push-m7 {
        left: 58.3333333333%;
    }
    .row .col.offset-m8 {
        margin-left: 66.6666666667%;
    }
    .row .col.pull-m8 {
        right: 66.6666666667%;
    }
    .row .col.push-m8 {
        left: 66.6666666667%;
    }
    .row .col.offset-m9 {
        margin-left: 75%;
    }
    .row .col.pull-m9 {
        right: 75%;
    }
    .row .col.push-m9 {
        left: 75%;
    }
    .row .col.offset-m10 {
        margin-left: 83.3333333333%;
    }
    .row .col.pull-m10 {
        right: 83.3333333333%;
    }
    .row .col.push-m10 {
        left: 83.3333333333%;
    }
    .row .col.offset-m11 {
        margin-left: 91.6666666667%;
    }
    .row .col.pull-m11 {
        right: 91.6666666667%;
    }
    .row .col.push-m11 {
        left: 91.6666666667%;
    }
    .row .col.offset-m12 {
        margin-left: 100%;
    }
    .row .col.pull-m12 {
        right: 100%;
    }
    .row .col.push-m12 {
        left: 100%;
    }
}
@media only screen and (min-width: 993px) {
    .row .col.l1 {
        width: 8.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.l2 {
        width: 16.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.l3 {
        width: 25%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.l4 {
        width: 33.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.l5 {
        width: 41.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.l6 {
        width: 50%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.l7 {
        width: 58.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.l8 {
        width: 66.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.l9 {
        width: 75%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.l10 {
        width: 83.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.l11 {
        width: 91.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.l12 {
        width: 100%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.offset-l1 {
        margin-left: 8.3333333333%;
    }
    .row .col.pull-l1 {
        right: 8.3333333333%;
    }
    .row .col.push-l1 {
        left: 8.3333333333%;
    }
    .row .col.offset-l2 {
        margin-left: 16.6666666667%;
    }
    .row .col.pull-l2 {
        right: 16.6666666667%;
    }
    .row .col.push-l2 {
        left: 16.6666666667%;
    }
    .row .col.offset-l3 {
        margin-left: 25%;
    }
    .row .col.pull-l3 {
        right: 25%;
    }
    .row .col.push-l3 {
        left: 25%;
    }
    .row .col.offset-l4 {
        margin-left: 33.3333333333%;
    }
    .row .col.pull-l4 {
        right: 33.3333333333%;
    }
    .row .col.push-l4 {
        left: 33.3333333333%;
    }
    .row .col.offset-l5 {
        margin-left: 41.6666666667%;
    }
    .row .col.pull-l5 {
        right: 41.6666666667%;
    }
    .row .col.push-l5 {
        left: 41.6666666667%;
    }
    .row .col.offset-l6 {
        margin-left: 50%;
    }
    .row .col.pull-l6 {
        right: 50%;
    }
    .row .col.push-l6 {
        left: 50%;
    }
    .row .col.offset-l7 {
        margin-left: 58.3333333333%;
    }
    .row .col.pull-l7 {
        right: 58.3333333333%;
    }
    .row .col.push-l7 {
        left: 58.3333333333%;
    }
    .row .col.offset-l8 {
        margin-left: 66.6666666667%;
    }
    .row .col.pull-l8 {
        right: 66.6666666667%;
    }
    .row .col.push-l8 {
        left: 66.6666666667%;
    }
    .row .col.offset-l9 {
        margin-left: 75%;
    }
    .row .col.pull-l9 {
        right: 75%;
    }
    .row .col.push-l9 {
        left: 75%;
    }
    .row .col.offset-l10 {
        margin-left: 83.3333333333%;
    }
    .row .col.pull-l10 {
        right: 83.3333333333%;
    }
    .row .col.push-l10 {
        left: 83.3333333333%;
    }
    .row .col.offset-l11 {
        margin-left: 91.6666666667%;
    }
    .row .col.pull-l11 {
        right: 91.6666666667%;
    }
    .row .col.push-l11 {
        left: 91.6666666667%;
    }
    .row .col.offset-l12 {
        margin-left: 100%;
    }
    .row .col.pull-l12 {
        right: 100%;
    }
    .row .col.push-l12 {
        left: 100%;
    }
}
@media only screen and (min-width: 1201px) {
    .row .col.xl1 {
        width: 8.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.xl2 {
        width: 16.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.xl3 {
        width: 25%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.xl4 {
        width: 33.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.xl5 {
        width: 41.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.xl6 {
        width: 50%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.xl7 {
        width: 58.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.xl8 {
        width: 66.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.xl9 {
        width: 75%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.xl10 {
        width: 83.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.xl11 {
        width: 91.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.xl12 {
        width: 100%;
        margin-left: auto;
        left: auto;
        right: auto;
    }
    .row .col.offset-xl1 {
        margin-left: 8.3333333333%;
    }
    .row .col.pull-xl1 {
        right: 8.3333333333%;
    }
    .row .col.push-xl1 {
        left: 8.3333333333%;
    }
    .row .col.offset-xl2 {
        margin-left: 16.6666666667%;
    }
    .row .col.pull-xl2 {
        right: 16.6666666667%;
    }
    .row .col.push-xl2 {
        left: 16.6666666667%;
    }
    .row .col.offset-xl3 {
        margin-left: 25%;
    }
    .row .col.pull-xl3 {
        right: 25%;
    }
    .row .col.push-xl3 {
        left: 25%;
    }
    .row .col.offset-xl4 {
        margin-left: 33.3333333333%;
    }
    .row .col.pull-xl4 {
        right: 33.3333333333%;
    }
    .row .col.push-xl4 {
        left: 33.3333333333%;
    }
    .row .col.offset-xl5 {
        margin-left: 41.6666666667%;
    }
    .row .col.pull-xl5 {
        right: 41.6666666667%;
    }
    .row .col.push-xl5 {
        left: 41.6666666667%;
    }
    .row .col.offset-xl6 {
        margin-left: 50%;
    }
    .row .col.pull-xl6 {
        right: 50%;
    }
    .row .col.push-xl6 {
        left: 50%;
    }
    .row .col.offset-xl7 {
        margin-left: 58.3333333333%;
    }
    .row .col.pull-xl7 {
        right: 58.3333333333%;
    }
    .row .col.push-xl7 {
        left: 58.3333333333%;
    }
    .row .col.offset-xl8 {
        margin-left: 66.6666666667%;
    }
    .row .col.pull-xl8 {
        right: 66.6666666667%;
    }
    .row .col.push-xl8 {
        left: 66.6666666667%;
    }
    .row .col.offset-xl9 {
        margin-left: 75%;
    }
    .row .col.pull-xl9 {
        right: 75%;
    }
    .row .col.push-xl9 {
        left: 75%;
    }
    .row .col.offset-xl10 {
        margin-left: 83.3333333333%;
    }
    .row .col.pull-xl10 {
        right: 83.3333333333%;
    }
    .row .col.push-xl10 {
        left: 83.3333333333%;
    }
    .row .col.offset-xl11 {
        margin-left: 91.6666666667%;
    }
    .row .col.pull-xl11 {
        right: 91.6666666667%;
    }
    .row .col.push-xl11 {
        left: 91.6666666667%;
    }
    .row .col.offset-xl12 {
        margin-left: 100%;
    }
    .row .col.pull-xl12 {
        right: 100%;
    }
    .row .col.push-xl12 {
        left: 100%;
    }
}
nav {
    color: #fff;
    background-color: #ee6e73;
    width: 100%;
    height: 56px;
    line-height: 56px;
}
nav.nav-extended {
    height: auto;
}
nav.nav-extended .nav-wrapper {
    min-height: 56px;
    height: auto;
}
nav.nav-extended .nav-content {
    position: relative;
    line-height: normal;
}
nav a {
    color: #fff;
}
nav i,
nav [class^="mdi-"],
nav [class*="mdi-"],
nav i.material-icons {
    display: block;
    font-size: 24px;
    height: 56px;
    line-height: 56px;
}
nav .nav-wrapper {
    position: relative;
    height: 100%;
}
@media only screen and (min-width: 993px) {
    nav a.button-collapse {
        display: none;
    }
}
nav .button-collapse {
    float: left;
    position: relative;
    z-index: 1;
    height: 56px;
    margin: 0 18px;
}
nav .button-collapse i {
    height: 56px;
    line-height: 56px;
}
nav .brand-logo {
    position: absolute;
    color: #fff;
    display: inline-block;
    font-size: 2.1rem;
    padding: 0;
    white-space: nowrap;
}
nav .brand-logo.center {
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}
@media only screen and (max-width: 992px) {
    nav .brand-logo {
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }
    nav .brand-logo.left,
    nav .brand-logo.right {
        padding: 0;
        -webkit-transform: none;
        transform: none;
    }
    nav .brand-logo.left {
        left: 0.5rem;
    }
    nav .brand-logo.right {
        right: 0.5rem;
        left: auto;
    }
}
nav .brand-logo.right {
    right: 0.5rem;
    padding: 0;
}
nav .brand-logo i,
nav .brand-logo [class^="mdi-"],
nav .brand-logo [class*="mdi-"],
nav .brand-logo i.material-icons {
    float: left;
    margin-right: 15px;
}
nav .nav-title {
    display: inline-block;
    font-size: 32px;
    padding: 28px 0;
}
nav ul {
    margin: 0;
}
nav ul li {
    transition: background-color .3s;
    float: left;
    padding: 0;
}
nav ul li.active {
    background-color: rgba(0, 0, 0, 0.1);
}
nav ul a {
    transition: background-color .3s;
    font-size: 1rem;
    color: #fff;
    display: block;
    padding: 0 15px;
    cursor: pointer;
}
nav ul a.btn,
nav ul a.btn-large,
nav ul a.btn-large,
nav ul a.btn-flat,
nav ul a.btn-floating {
    margin-top: -2px;
    margin-left: 15px;
    margin-right: 15px;
}
nav ul a.btn > .material-icons,
nav ul a.btn-large > .material-icons,
nav ul a.btn-large > .material-icons,
nav ul a.btn-flat > .material-icons,
nav ul a.btn-floating > .material-icons {
    height: inherit;
    line-height: inherit;
}
nav ul a:hover {
    background-color: rgba(0, 0, 0, 0.1);
}
nav ul.left {
    float: left;
}
nav form {
    height: 100%;
}
nav .input-field {
    margin: 0;
    height: 100%;
}
nav .input-field input {
    height: 100%;
    font-size: 1.2rem;
    border: none;
    padding-left: 2rem;
}
nav .input-field input:focus,
nav .input-field input[type=text]:valid,
nav .input-field input[type=password]:valid,
nav .input-field input[type=email]:valid,
nav .input-field input[type=url]:valid,
nav .input-field input[type=date]:valid {
    border: none;
    box-shadow: none;
}
nav .input-field label {
    top: 0;
    left: 0;
}
nav .input-field label i {
    color: rgba(255, 255, 255, 0.7);
    transition: color .3s;
}
nav .input-field label.active i {
    color: #fff;
}
.navbar-fixed {
    position: relative;
    height: 56px;
    z-index: 997;
}
.navbar-fixed nav {
    position: fixed;
}
@media only screen and (min-width: 601px) {
    nav.nav-extended .nav-wrapper {
        min-height: 64px;
    }
    nav,
    nav .nav-wrapper i,
    nav a.button-collapse,
    nav a.button-collapse i {
        height: 64px;
        line-height: 64px;
    }
    .navbar-fixed {
        height: 64px;
    }
}
a {
    text-decoration: none;
}
html {} @media only screen and (min-width: 0) {
    html {
        font-size: 14px;
    }
}
@media only screen and (min-width: 992px) {
    html {
        font-size: 14.5px;
    }
}
@media only screen and (min-width: 1200px) {
    html {
        font-size: 15px;
    }
}
.light,
.page-footer .footer-copyright {
    font-weight: 300;
}
.thin {
    font-weight: 200;
}
.flow-text {
    font-weight: 300;
}
@media only screen and (min-width: 360px) {
    .flow-text {
        font-size: 1.2rem;
    }
}
@media only screen and (min-width: 390px) {
    .flow-text {
        font-size: 1.224rem;
    }
}
@media only screen and (min-width: 420px) {
    .flow-text {
        font-size: 1.248rem;
    }
}
@media only screen and (min-width: 450px) {
    .flow-text {
        font-size: 1.272rem;
    }
}
@media only screen and (min-width: 480px) {
    .flow-text {
        font-size: 1.296rem;
    }
}
@media only screen and (min-width: 510px) {
    .flow-text {
        font-size: 1.32rem;
    }
}
@media only screen and (min-width: 540px) {
    .flow-text {
        font-size: 1.344rem;
    }
}
@media only screen and (min-width: 570px) {
    .flow-text {
        font-size: 1.368rem;
    }
}
@media only screen and (min-width: 600px) {
    .flow-text {
        font-size: 1.392rem;
    }
}
@media only screen and (min-width: 630px) {
    .flow-text {
        font-size: 1.416rem;
    }
}
@media only screen and (min-width: 660px) {
    .flow-text {
        font-size: 1.44rem;
    }
}
@media only screen and (min-width: 690px) {
    .flow-text {
        font-size: 1.464rem;
    }
}
@media only screen and (min-width: 720px) {
    .flow-text {
        font-size: 1.488rem;
    }
}
@media only screen and (min-width: 750px) {
    .flow-text {
        font-size: 1.512rem;
    }
}
@media only screen and (min-width: 780px) {
    .flow-text {
        font-size: 1.536rem;
    }
}
@media only screen and (min-width: 810px) {
    .flow-text {
        font-size: 1.56rem;
    }
}
@media only screen and (min-width: 840px) {
    .flow-text {
        font-size: 1.584rem;
    }
}
@media only screen and (min-width: 870px) {
    .flow-text {
        font-size: 1.608rem;
    }
}
@media only screen and (min-width: 900px) {
    .flow-text {
        font-size: 1.632rem;
    }
}
@media only screen and (min-width: 930px) {
    .flow-text {
        font-size: 1.656rem;
    }
}
@media only screen and (min-width: 960px) {
    .flow-text {
        font-size: 1.68rem;
    }
}
@media only screen and (max-width: 360px) {
    .flow-text {
        font-size: 1.2rem;
    }
}
.scale-transition {
    transition: -webkit-transform 0.3s cubic-bezier(0.53, 0.01, 0.36, 1.63) !important;
    transition: transform 0.3s cubic-bezier(0.53, 0.01, 0.36, 1.63) !important;
    transition: transform 0.3s cubic-bezier(0.53, 0.01, 0.36, 1.63), -webkit-transform 0.3s cubic-bezier(0.53, 0.01, 0.36, 1.63) !important;
}
.scale-transition.scale-out {
    -webkit-transform: scale(0);
    transform: scale(0);
    transition: -webkit-transform .2s !important;
    transition: transform .2s !important;
    transition: transform .2s, -webkit-transform .2s !important;
}
.scale-transition.scale-in {
    -webkit-transform: scale(1);
    transform: scale(1);
}
.card-panel {
    transition: box-shadow .25s;
    padding: 24px;
    margin: 0.5rem 0 1rem 0;
    border-radius: 2px;
    background-color: #fff;
}
.card {
    position: relative;
    margin: 0.5rem 0 1rem 0;
    background-color: #fff;
    transition: box-shadow .25s;
    border-radius: 2px;
}
.card .card-title {
    font-size: 24px;
    font-weight: 300;
}
.card .card-title.activator {
    cursor: pointer;
}
.card.small,
.card.medium,
.card.large {
    position: relative;
}
.card.small .card-image,
.card.medium .card-image,
.card.large .card-image {
    max-height: 60%;
    overflow: hidden;
}
.card.small .card-image + .card-content,
.card.medium .card-image + .card-content,
.card.large .card-image + .card-content {
    max-height: 40%;
}
.card.small .card-content,
.card.medium .card-content,
.card.large .card-content {
    max-height: 100%;
    overflow: hidden;
}
.card.small .card-action,
.card.medium .card-action,
.card.large .card-action {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
}
.card.small {
    height: 300px;
}
.card.medium {
    height: 400px;
}
.card.large {
    height: 500px;
}
.card.horizontal {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}
.card.horizontal.small .card-image,
.card.horizontal.medium .card-image,
.card.horizontal.large .card-image {
    height: 100%;
    max-height: none;
    overflow: visible;
}
.card.horizontal.small .card-image img,
.card.horizontal.medium .card-image img,
.card.horizontal.large .card-image img {
    height: 100%;
}
.card.horizontal .card-image {
    max-width: 50%;
}
.card.horizontal .card-image img {
    border-radius: 2px 0 0 2px;
    max-width: 100%;
    width: auto;
}
.card.horizontal .card-stacked {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    position: relative;
}
.card.horizontal .card-stacked .card-content {
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
}
.card.sticky-action .card-action {
    z-index: 2;
}
.card.sticky-action .card-reveal {
    z-index: 1;
    padding-bottom: 64px;
}
.card .card-image {
    position: relative;
}
.card .card-image img {
    display: block;
    border-radius: 2px 2px 0 0;
    position: relative;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    width: 100%;
}
.card .card-image .card-title {
    color: #fff;
    position: absolute;
    bottom: 0;
    left: 0;
    max-width: 100%;
    padding: 24px;
}
.card .card-content {
    padding: 24px;
    border-radius: 0 0 2px 2px;
}
.card .card-content p {
    margin: 0;
    color: inherit;
}
.card .card-content .card-title {
    display: block;
    line-height: 32px;
    margin-bottom: 8px;
}
.card .card-content .card-title i {
    line-height: 32px;
}
.card .card-action {
    position: relative;
    background-color: inherit;
    border-top: 1px solid rgba(160, 160, 160, 0.2);
    padding: 16px 24px;
}
.card .card-action:last-child {
    border-radius: 0 0 2px 2px;
}
.card .card-action a:not(.btn):not(.btn-large):not(.btn-large):not(.btn-floating) {
    color: #ffab40;
    margin-right: 24px;
    transition: color .3s ease;
    text-transform: uppercase;
}
.card .card-action a:not(.btn):not(.btn-large):not(.btn-large):not(.btn-floating):hover {
    color: #ffd8a6;
}
.card .card-reveal {
    padding: 24px;
    position: absolute;
    background-color: #fff;
    width: 100%;
    overflow-y: auto;
    left: 0;
    top: 100%;
    height: 100%;
    z-index: 3;
    display: none;
}
.card .card-reveal .card-title {
    cursor: pointer;
    display: block;
}
#toast-container {
    display: block;
    position: fixed;
    z-index: 10000;
}
@media only screen and (max-width: 600px) {
    #toast-container {
        min-width: 100%;
        bottom: 0%;
    }
}
@media only screen and (min-width: 601px) and (max-width: 992px) {
    #toast-container {
        left: 5%;
        bottom: 7%;
        max-width: 90%;
    }
}
@media only screen and (min-width: 993px) {
    #toast-container {
        top: 10%;
        right: 7%;
        max-width: 86%;
    }
}
.toast {
    border-radius: 2px;
    top: 35px;
    width: auto;
    clear: both;
    margin-top: 10px;
    position: relative;
    max-width: 100%;
    height: auto;
    min-height: 48px;
    line-height: 1.5em;
    word-break: break-all;
    background-color: #323232;
    padding: 10px 25px;
    font-size: 1.1rem;
    font-weight: 300;
    color: #fff;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
.toast .btn,
.toast .btn-large,
.toast .btn-flat {
    margin: 0;
    margin-left: 3rem;
}
.toast.rounded {
    border-radius: 24px;
}
@media only screen and (max-width: 600px) {
    .toast {
        width: 100%;
        border-radius: 0;
    }
}
@media only screen and (min-width: 601px) and (max-width: 992px) {
    .toast {
        float: left;
    }
}
@media only screen and (min-width: 993px) {
    .toast {
        float: right;
    }
}
.tabs {
    position: relative;
    overflow-x: auto;
    overflow-y: hidden;
    height: 48px;
    width: 100%;
    background-color: #fff;
    margin: 0 auto;
    white-space: nowrap;
}
.tabs.tabs-transparent {
    background-color: transparent;
}
.tabs.tabs-transparent .tab a,
.tabs.tabs-transparent .tab.disabled a,
.tabs.tabs-transparent .tab.disabled a:hover {
    color: rgba(255, 255, 255, 0.7);
}
.tabs.tabs-transparent .tab a:hover,
.tabs.tabs-transparent .tab a.active {
    color: #fff;
}
.tabs.tabs-transparent .indicator {
    background-color: #fff;
}
.tabs.tabs-fixed-width {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}
.tabs.tabs-fixed-width .tab {
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
}
.tabs .tab {
    display: inline-block;
    text-align: center;
    line-height: 48px;
    height: 48px;
    padding: 0;
    margin: 0;
    text-transform: uppercase;
}
.tabs .tab a {
    display: block;
    width: 100%;
    height: 100%;
    padding: 0 24px;
    font-size: 14px;
    text-overflow: ellipsis;
    overflow: hidden;
    transition: color .28s ease;
    font-weight: 700;
    color: #0e76a8;
}
.tabs .tab a:hover,
.tabs .tab a.active {
    background-color: transparent;
    color: #F44336;
}
.tabs .tab.disabled a,
.tabs .tab.disabled a:hover {
    color: rgba(238, 110, 115, 0.7);
    cursor: default;
}
.tabs .indicator {
    position: absolute;
    bottom: 0;
    height: 2px;
    background-color: #f6b2b5;
    will-change: left, right;
}
@media only screen and (max-width: 992px) {
    .tabs {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }
    .tabs .tab {
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }
    .tabs .tab a {
        padding: 0 12px;
    }
}
.material-tooltip {
    padding: 10px 8px;
    font-size: 1rem;
    z-index: 2000;
    background-color: transparent;
    border-radius: 2px;
    color: #fff;
    min-height: 36px;
    line-height: 120%;
    opacity: 0;
    position: absolute;
    text-align: center;
    max-width: calc(100% - 4px);
    overflow: hidden;
    left: 0;
    top: 0;
    pointer-events: none;
    visibility: hidden;
}
.backdrop {
    position: absolute;
    opacity: 0;
    height: 7px;
    width: 14px;
    border-radius: 0 0 50% 50%;
    background-color: #323232;
    z-index: -1;
    -webkit-transform-origin: 50% 0%;
    transform-origin: 50% 0%;
    visibility: hidden;
}
.btn,
.btn-large,
.btn-flat {
    border: none;
    border-radius: 2px;
    display: inline-block;
    height: 36px;
    line-height: 36px;
    padding: 0 2rem;
    text-transform: uppercase;
    vertical-align: middle;
    -webkit-tap-highlight-color: transparent;
}
.btn.disabled,
.disabled.btn-large,
.btn-floating.disabled,
.btn-large.disabled,
.btn-flat.disabled,
.btn:disabled,
.btn-large:disabled,
.btn-floating:disabled,
.btn-large:disabled,
.btn-flat:disabled,
.btn[disabled],
[disabled].btn-large,
.btn-floating[disabled],
.btn-large[disabled],
.btn-flat[disabled] {
    pointer-events: none;
    background-color: #DFDFDF !important;
    box-shadow: none;
    color: #9F9F9F !important;
    cursor: default;
}
.btn.disabled:hover,
.disabled.btn-large:hover,
.btn-floating.disabled:hover,
.btn-large.disabled:hover,
.btn-flat.disabled:hover,
.btn:disabled:hover,
.btn-large:disabled:hover,
.btn-floating:disabled:hover,
.btn-large:disabled:hover,
.btn-flat:disabled:hover,
.btn[disabled]:hover,
[disabled].btn-large:hover,
.btn-floating[disabled]:hover,
.btn-large[disabled]:hover,
.btn-flat[disabled]:hover {
    background-color: #DFDFDF !important;
    color: #9F9F9F !important;
}
.btn,
.btn-large,
.btn-floating,
.btn-large,
.btn-flat {
    font-size: 1rem;
    outline: 0;
}
.btn i,
.btn-large i,
.btn-floating i,
.btn-large i,
.btn-flat i {
    font-size: 1.3rem;
    line-height: inherit;
}
.btn:focus,
.btn-large:focus,
.btn-floating:focus {
    background-color: #11495a;
}
.btn,
.btn-large {
    text-decoration: none;
    text-align: center;
    letter-spacing: .5px;
    transition: .2s ease-out;
    cursor: pointer;
    color: #fff;
    background: #14addb;
    font-weight: 600;
}
.btn:hover,
.btn-large:hover {
    background: #263a78;
    background: linear-gradient(to bottom, #455ca2, #263a78);
    color: #fff;
}
.btn-floating {
    display: inline-block;
    color: #fff;
    position: relative;
    overflow: hidden;
    z-index: 1;
    width: 40px;
    height: 40px;
    line-height: 40px;
    padding: 0;
    background-color: #26a69a;
    border-radius: 50%;
    transition: .3s;
    cursor: pointer;
    vertical-align: middle;
}
.btn-floating:hover {
    background-color: #26a69a;
}
.btn-floating:before {
    border-radius: 0;
}
.btn-floating.btn-large {
    width: 56px;
    height: 56px;
}
.btn-floating.btn-large.halfway-fab {
    bottom: -28px;
}
.btn-floating.btn-large i {
    line-height: 56px;
}
.btn-floating.halfway-fab {
    position: absolute;
    right: 24px;
    bottom: -20px;
}
.btn-floating.halfway-fab.left {
    right: auto;
    left: 24px;
}
.btn-floating i {
    width: inherit;
    display: inline-block;
    text-align: center;
    color: #fff;
    font-size: 1.6rem;
    line-height: 40px;
}
button.btn-floating {
    border: none;
}
.fixed-action-btn {
    position: fixed;
    right: 23px;
    bottom: 23px;
    padding-top: 15px;
    margin-bottom: 0;
    z-index: 998;
}
.fixed-action-btn.active ul {
    visibility: visible;
}
.fixed-action-btn.horizontal {
    padding: 0 0 0 15px;
}
.fixed-action-btn.horizontal ul {
    text-align: right;
    right: 64px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    height: 100%;
    left: auto;
    width: 500px;
    /*width 100% only goes to width of button container */
}
.fixed-action-btn.horizontal ul li {
    display: inline-block;
    margin: 15px 15px 0 0;
}
.fixed-action-btn.toolbar {
    padding: 0;
    height: 56px;
}
.fixed-action-btn.toolbar.active > a i {
    opacity: 0;
}
.fixed-action-btn.toolbar ul {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    top: 0;
    bottom: 0;
}
.fixed-action-btn.toolbar ul li {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    display: inline-block;
    margin: 0;
    height: 100%;
    transition: none;
}
.fixed-action-btn.toolbar ul li a {
    display: block;
    overflow: hidden;
    position: relative;
    width: 100%;
    height: 100%;
    background-color: transparent;
    box-shadow: none;
    color: #fff;
    line-height: 56px;
    z-index: 1;
}
.fixed-action-btn.toolbar ul li a i {
    line-height: inherit;
}
.fixed-action-btn ul {
    left: 0;
    right: 0;
    text-align: center;
    position: absolute;
    bottom: 64px;
    margin: 0;
    visibility: hidden;
}
.fixed-action-btn ul li {
    margin-bottom: 15px;
}
.fixed-action-btn ul a.btn-floating {
    opacity: 0;
}
.fixed-action-btn .fab-backdrop {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    width: 40px;
    height: 40px;
    background-color: #26a69a;
    border-radius: 50%;
    -webkit-transform: scale(0);
    transform: scale(0);
}
.btn-flat {
    box-shadow: none;
    background-color: transparent;
    color: #343434;
    cursor: pointer;
    transition: background-color .2s;
}
.btn-flat:focus,
.btn-flat:active {
    background-color: transparent;
}
.btn-flat:focus,
.btn-flat:hover {
    background-color: rgba(0, 0, 0, 0.1);
    box-shadow: none;
}
.btn-flat:active {
    background-color: rgba(0, 0, 0, 0.2);
}
.btn-flat.disabled {
    background-color: transparent !important;
    color: #b3b3b3 !important;
    cursor: default;
}
.btn-large {
    height: 54px;
    line-height: 54px;
}
.btn-large i {
    font-size: 1.6rem;
}
.btn-block {
    display: block;
}
.dropdown-content {
    background-color: #fff;
    margin: 0;
    display: none;
    min-width: 140px;
    max-height: 350px;
    overflow-y: auto;
    opacity: 0;
    position: absolute;
    z-index: 999;
    will-change: width, height;
}
.dropdown-content li {
    clear: both;
    color: rgba(0, 0, 0, 0.87);
    cursor: pointer;
    min-height: 50px;
    line-height: 25px;
    width: 100%;
    text-align: left;
    text-transform: none;
    padding-bottom: 0px !important;
    padding-top: 5px;
}
.dropdown-content li:hover,
.dropdown-content li.active,
.dropdown-content li.selected {
    background-color: #eee;
}
.dropdown-content li.active.selected {
    background-color: #e1e1e1;
}
.dropdown-content li.divider {
    min-height: 0;
    height: 1px;
    padding: 0px;
}
.dropdown-content li > a,
.dropdown-content li > span {
    font-size: 16px;
    color: #263238;
    display: block;
    line-height: 22px;
    padding: 10px 15px;
}
.dropdown-content li > span > label {
    top: 1px;
    left: 0;
    height: 18px;
}
.dropdown-content li > a > i {
    height: inherit;
    line-height: inherit;
    float: left;
    margin: 0 12px 0 0;
    width: 24px;
}
.input-field.col .dropdown-content [type="checkbox"] + label {
    top: 7px;
    left: 0;
    height: 18px;
}
/*!
 * Waves v0.6.0
 * http://fian.my.id/Waves
 *
 * Copyright 2014 Alfiana E. Sibuea and other contributors
 * Released under the MIT license
 * https://github.com/fians/Waves/blob/master/LICENSE
 */

.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    transition: .3s ease-out;
}
.waves-effect .waves-ripple {
    position: absolute;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    margin-left: -10px;
    opacity: 0;
    background: rgba(0, 0, 0, 0.2);
    transition: all 0.7s ease-out;
    transition-property: opacity, -webkit-transform;
    transition-property: transform, opacity;
    transition-property: transform, opacity, -webkit-transform;
    -webkit-transform: scale(0);
    transform: scale(0);
    pointer-events: none;
}
.waves-effect.waves-light .waves-ripple {
    background-color: rgba(255, 255, 255, 0.45);
}
.waves-effect.waves-red .waves-ripple {
    background-color: rgba(244, 67, 54, 0.7);
}
.waves-effect.waves-yellow .waves-ripple {
    background-color: rgba(255, 235, 59, 0.7);
}
.waves-effect.waves-orange .waves-ripple {
    background-color: rgba(255, 152, 0, 0.7);
}
.waves-effect.waves-purple .waves-ripple {
    background-color: rgba(156, 39, 176, 0.7);
}
.waves-effect.waves-green .waves-ripple {
    background-color: rgba(76, 175, 80, 0.7);
}
.waves-effect.waves-teal .waves-ripple {
    background-color: rgba(0, 150, 136, 0.7);
}
.waves-effect input[type="button"],
.waves-effect input[type="reset"],
.waves-effect input[type="submit"] {
    border: 0;
    font-style: normal;
    font-size: inherit;
    text-transform: inherit;
    background: none;
}
.waves-effect img {
    position: relative;
    z-index: -1;
}
.waves-notransition {
    transition: none !important;
}
.waves-circle {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%);
}
.waves-input-wrapper {
    border-radius: 0.2em;
    vertical-align: bottom;
}
.waves-input-wrapper .waves-button-input {
    position: relative;
    top: 0;
    left: 0;
    z-index: 1;
}
.waves-circle {
    text-align: center;
    width: 2.5em;
    height: 2.5em;
    line-height: 2.5em;
    border-radius: 50%;
    -webkit-mask-image: none;
}
.waves-block {
    display: block;
}
/* Firefox Bug: link not triggered */

.waves-effect .waves-ripple {
    z-index: -1;
}
.modal {} @media only screen and (max-width: 992px) {
    .modal {
        width: 100%;
    }
}
.modal h1,
.modal h2,
.modal h3,
.modal h4 {
    margin-top: 0;
}
.modal .modal-content {} .modal .modal-close {
    cursor: pointer;
}
.modal .modal-footer {
    border-radius: 0 0 2px 2px;
    background-color: #fafafa;
    padding: 4px 6px;
    height: 56px;
    width: 100%;
}
.modal .modal-footer .btn,
.modal .modal-footer .btn-large,
.modal .modal-footer .btn-flat {
    float: right;
    margin: 6px 0;
}
.modal-overlay {
    position: fixed;
    z-index: 999;
    top: -100px;
    left: 0;
    bottom: 0;
    right: 0;
    height: 125%;
    width: 100%;
    background: #000;
    display: none;
    will-change: opacity;
}
.modal.modal-fixed-footer {
    padding: 0;
    height: 70%;
}
.modal.modal-fixed-footer .modal-content {
    position: absolute;
    height: calc(100% - 56px);
    max-height: 100%;
    width: 100%;
    overflow-y: auto;
}
.modal.modal-fixed-footer .modal-footer {
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    position: absolute;
    bottom: 0;
}
.modal.bottom-sheet {
    top: auto;
    bottom: -100%;
    margin: 0;
    width: 100%;
    max-height: 45%;
    border-radius: 0;
    will-change: bottom, opacity;
}
.collapsible {
    margin-top: 25px;
}
.collapsible-header {
    display: block;
    cursor: pointer;
    min-height: 3rem;
    line-height: 3rem;
    padding: 7px 1rem;
    background-color: #fff;
    border-bottom: 1px solid #ddd;
}
.collapsible-header i {
    width: 2rem;
    font-size: 1.6rem;
    line-height: 3rem;
    display: block;
    float: left;
    text-align: center;
    margin-right: 1rem;
}
.collapsible-body {
    display: none;
    box-sizing: border-box;
}
.side-nav .collapsible,
.side-nav.fixed .collapsible {
    border: none;
    box-shadow: none;
}
.side-nav .collapsible li,
.side-nav.fixed .collapsible li {
    padding: 0;
}
.side-nav .collapsible-header,
.side-nav.fixed .collapsible-header {
    background-color: transparent;
    border: none;
    line-height: inherit;
    height: inherit;
    padding: 0 16px;
}
.side-nav .collapsible-header:hover,
.side-nav.fixed .collapsible-header:hover {
    background-color: rgba(0, 0, 0, 0.05);
}
.side-nav .collapsible-header i,
.side-nav.fixed .collapsible-header i {
    line-height: inherit;
}
.side-nav .collapsible-body,
.side-nav.fixed .collapsible-body {
    border: 0;
    background-color: #fff;
}
.side-nav .collapsible-body li a,
.side-nav.fixed .collapsible-body li a {
    padding: 0 23.5px 0 31px;
}
.collapsible.popout {
    border: none;
    box-shadow: none;
}
.collapsible.popout > li {
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    margin: 0 24px;
    transition: margin 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.collapsible.popout > li.active {
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
    margin: 16px 0;
}
.chip {
    display: inline-block;
    height: 32px;
    font-size: 13px;
    font-weight: 500;
    color: rgba(0, 0, 0, 0.6);
    line-height: 32px;
    padding: 0 12px;
    border-radius: 16px;
    background-color: #e4e4e4;
    margin-bottom: 5px;
    margin-right: 5px;
}
.chip > img {
    float: left;
    margin: 0 8px 0 -12px;
    height: 32px;
    width: 32px;
    border-radius: 50%;
}
.chip .close {
    cursor: pointer;
    float: right;
    font-size: 16px;
    line-height: 32px;
    padding-left: 8px;
}
.chips {
    border: none;
    border-bottom: 1px solid #9e9e9e;
    box-shadow: none;
    margin: 0 0 20px 0;
    min-height: 45px;
    outline: none;
    transition: all .3s;
}
.chips.focus {
    border-bottom: 1px solid #26a69a;
    box-shadow: 0 1px 0 0 #26a69a;
}
.chips:hover {
    cursor: text;
}
.chips .chip.selected {
    background-color: #26a69a;
    color: #fff;
}
.chips .input {
    background: none;
    border: 0;
    color: rgba(0, 0, 0, 0.6);
    display: inline-block;
    font-size: 1rem;
    height: 3rem;
    line-height: 32px;
    outline: 0;
    margin: 0;
    padding: 0 !important;
    width: 120px !important;
}
.chips .input:focus {
    border: 0 !important;
    box-shadow: none !important;
}
.chips .autocomplete-content {
    margin-top: 0;
}
.prefix ~ .chips {
    margin-left: 3rem;
    width: 92%;
    width: calc(100% - 3rem);
}
.chips:empty ~ label {
    font-size: 0.8rem;
    -webkit-transform: translateY(-140%);
    transform: translateY(-140%);
}
.materialboxed {
    display: block;
    cursor: -webkit-zoom-in;
    cursor: zoom-in;
    position: relative;
    transition: opacity .4s;
    -webkit-backface-visibility: hidden;
}
.materialboxed:hover:not(.active) {
    opacity: .8;
}
.materialboxed.active {
    cursor: -webkit-zoom-out;
    cursor: zoom-out;
}
#materialbox-overlay {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #292929;
    z-index: 1000;
    will-change: opacity;
}
.materialbox-caption {
    position: fixed;
    display: none;
    color: #fff;
    line-height: 50px;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
    padding: 0% 15%;
    height: 50px;
    z-index: 1000;
    -webkit-font-smoothing: antialiased;
}
select:focus {
    outline: 1px solid #c9f3ef;
}
button:focus {
    outline: none;
    background-color: #2ab7a9;
}
label {
    font-size: 0.8rem;
    color: #9e9e9e;
}
/* Text Inputs + Textarea
   ========================================================================== */
/* Style Placeholders */

::-webkit-input-placeholder {
    color: #d1d1d1;
}
:-moz-placeholder {
    /* Firefox 18- */
    
    color: #d1d1d1;
}
::-moz-placeholder {
    /* Firefox 19+ */
    
    color: #d1d1d1;
}
:-ms-input-placeholder {
    color: #d1d1d1;
}
/* Text inputs */

input:not([type]),
input[type=text],
input[type=password],
input[type=email],
input[type=url],
input[type=time],
input[type=date],
input[type=datetime],
input[type=datetime-local],
input[type=tel],
input[type=number],
input[type=search],
textarea.materialize-textarea {
    background-color: transparent;
    */ border: none;
    /* border-bottom: 1px solid #9e9e9e; */
    
    border-radius: 0;
    outline: none;
    /* height: 3rem; */
    
    width: 100%;
    /* font-size: 1rem; */
    /* margin: 0 0 20px 0; */
    /* padding: 0; */
    
    box-shadow: none;
    transition: all 0.3s;
}
input:not([type]):disabled,
input:not([type])[readonly="readonly"],
input[type=text]:disabled,
input[type=text][readonly="readonly"],
input[type=password]:disabled,
input[type=password][readonly="readonly"],
input[type=email]:disabled,
input[type=email][readonly="readonly"],
input[type=url]:disabled,
input[type=url][readonly="readonly"],
input[type=time]:disabled,
input[type=time][readonly="readonly"],
input[type=date]:disabled,
input[type=date][readonly="readonly"],
input[type=datetime]:disabled,
input[type=datetime][readonly="readonly"],
input[type=datetime-local]:disabled,
input[type=datetime-local][readonly="readonly"],
input[type=tel]:disabled,
input[type=tel][readonly="readonly"],
input[type=number]:disabled,
input[type=number][readonly="readonly"],
input[type=search]:disabled,
input[type=search][readonly="readonly"],
textarea.materialize-textarea:disabled,
textarea.materialize-textarea[readonly="readonly"] {
    color: rgba(0, 0, 0, 0.26);
    border-bottom: 1px dotted rgba(0, 0, 0, 0.26);
}
input:not([type]):disabled + label,
input:not([type])[readonly="readonly"] + label,
input[type=text]:disabled + label,
input[type=text][readonly="readonly"] + label,
input[type=password]:disabled + label,
input[type=password][readonly="readonly"] + label,
input[type=email]:disabled + label,
input[type=email][readonly="readonly"] + label,
input[type=url]:disabled + label,
input[type=url][readonly="readonly"] + label,
input[type=time]:disabled + label,
input[type=time][readonly="readonly"] + label,
input[type=date]:disabled + label,
input[type=date][readonly="readonly"] + label,
input[type=datetime]:disabled + label,
input[type=datetime][readonly="readonly"] + label,
input[type=datetime-local]:disabled + label,
input[type=datetime-local][readonly="readonly"] + label,
input[type=tel]:disabled + label,
input[type=tel][readonly="readonly"] + label,
input[type=number]:disabled + label,
input[type=number][readonly="readonly"] + label,
input[type=search]:disabled + label,
input[type=search][readonly="readonly"] + label,
textarea.materialize-textarea:disabled + label,
textarea.materialize-textarea[readonly="readonly"] + label {
    color: rgba(0, 0, 0, 0.26);
}
input:not([type]):focus:not([readonly]),
input[type=text]:focus:not([readonly]),
input[type=password]:focus:not([readonly]),
input[type=email]:focus:not([readonly]),
input[type=url]:focus:not([readonly]),
input[type=time]:focus:not([readonly]),
input[type=date]:focus:not([readonly]),
input[type=datetime]:focus:not([readonly]),
input[type=datetime-local]:focus:not([readonly]),
input[type=tel]:focus:not([readonly]),
input[type=number]:focus:not([readonly]),
input[type=search]:focus:not([readonly]),
textarea.materialize-textarea:focus:not([readonly]) {} input:not([type]):focus:not([readonly]) + label,
input[type=text]:focus:not([readonly]) + label,
input[type=password]:focus:not([readonly]) + label,
input[type=email]:focus:not([readonly]) + label,
input[type=url]:focus:not([readonly]) + label,
input[type=time]:focus:not([readonly]) + label,
input[type=date]:focus:not([readonly]) + label,
input[type=datetime]:focus:not([readonly]) + label,
input[type=datetime-local]:focus:not([readonly]) + label,
input[type=tel]:focus:not([readonly]) + label,
input[type=number]:focus:not([readonly]) + label,
input[type=search]:focus:not([readonly]) + label,
textarea.materialize-textarea:focus:not([readonly]) + label {
    color: #26a69a;
}
input:not([type]).valid,
input:not([type]):focus.valid,
input[type=text].valid,
input[type=text]:focus.valid,
input[type=password].valid,
input[type=password]:focus.valid,
input[type=email].valid,
input[type=email]:focus.valid,
input[type=url].valid,
input[type=url]:focus.valid,
input[type=time].valid,
input[type=time]:focus.valid,
input[type=date].valid,
input[type=date]:focus.valid,
input[type=datetime].valid,
input[type=datetime]:focus.valid,
input[type=datetime-local].valid,
input[type=datetime-local]:focus.valid,
input[type=tel].valid,
input[type=tel]:focus.valid,
input[type=number].valid,
input[type=number]:focus.valid,
input[type=search].valid,
input[type=search]:focus.valid,
textarea.materialize-textarea.valid,
textarea.materialize-textarea:focus.valid {
    border-bottom: 1px solid #4CAF50;
    box-shadow: 0 1px 0 0 #4CAF50;
}
input:not([type]).valid + label:after,
input:not([type]):focus.valid + label:after,
input[type=text].valid + label:after,
input[type=text]:focus.valid + label:after,
input[type=password].valid + label:after,
input[type=password]:focus.valid + label:after,
input[type=email].valid + label:after,
input[type=email]:focus.valid + label:after,
input[type=url].valid + label:after,
input[type=url]:focus.valid + label:after,
input[type=time].valid + label:after,
input[type=time]:focus.valid + label:after,
input[type=date].valid + label:after,
input[type=date]:focus.valid + label:after,
input[type=datetime].valid + label:after,
input[type=datetime]:focus.valid + label:after,
input[type=datetime-local].valid + label:after,
input[type=datetime-local]:focus.valid + label:after,
input[type=tel].valid + label:after,
input[type=tel]:focus.valid + label:after,
input[type=number].valid + label:after,
input[type=number]:focus.valid + label:after,
input[type=search].valid + label:after,
input[type=search]:focus.valid + label:after,
textarea.materialize-textarea.valid + label:after,
textarea.materialize-textarea:focus.valid + label:after {
    content: attr(data-success);
    color: #4CAF50;
    opacity: 1;
}
input:not([type]).invalid,
input:not([type]):focus.invalid,
input[type=text].invalid,
input[type=text]:focus.invalid,
input[type=password].invalid,
input[type=password]:focus.invalid,
input[type=email].invalid,
input[type=email]:focus.invalid,
input[type=url].invalid,
input[type=url]:focus.invalid,
input[type=time].invalid,
input[type=time]:focus.invalid,
input[type=date].invalid,
input[type=date]:focus.invalid,
input[type=datetime].invalid,
input[type=datetime]:focus.invalid,
input[type=datetime-local].invalid,
input[type=datetime-local]:focus.invalid,
input[type=tel].invalid,
input[type=tel]:focus.invalid,
input[type=number].invalid,
input[type=number]:focus.invalid,
input[type=search].invalid,
input[type=search]:focus.invalid,
textarea.materialize-textarea.invalid,
textarea.materialize-textarea:focus.invalid {
    border-bottom: 1px solid #F44336;
    box-shadow: 0 1px 0 0 #F44336;
}
input:not([type]).invalid + label:after,
input:not([type]):focus.invalid + label:after,
input[type=text].invalid + label:after,
input[type=text]:focus.invalid + label:after,
input[type=password].invalid + label:after,
input[type=password]:focus.invalid + label:after,
input[type=email].invalid + label:after,
input[type=email]:focus.invalid + label:after,
input[type=url].invalid + label:after,
input[type=url]:focus.invalid + label:after,
input[type=time].invalid + label:after,
input[type=time]:focus.invalid + label:after,
input[type=date].invalid + label:after,
input[type=date]:focus.invalid + label:after,
input[type=datetime].invalid + label:after,
input[type=datetime]:focus.invalid + label:after,
input[type=datetime-local].invalid + label:after,
input[type=datetime-local]:focus.invalid + label:after,
input[type=tel].invalid + label:after,
input[type=tel]:focus.invalid + label:after,
input[type=number].invalid + label:after,
input[type=number]:focus.invalid + label:after,
input[type=search].invalid + label:after,
input[type=search]:focus.invalid + label:after,
textarea.materialize-textarea.invalid + label:after,
textarea.materialize-textarea:focus.invalid + label:after {
    content: attr(data-error);
    color: #F44336;
    opacity: 1;
}
input:not([type]).validate + label,
input[type=text].validate + label,
input[type=password].validate + label,
input[type=email].validate + label,
input[type=url].validate + label,
input[type=time].validate + label,
input[type=date].validate + label,
input[type=datetime].validate + label,
input[type=datetime-local].validate + label,
input[type=tel].validate + label,
input[type=number].validate + label,
input[type=search].validate + label,
textarea.materialize-textarea.validate + label {
    width: 100%;
    pointer-events: none;
}
input:not([type]) + label:after,
input[type=text] + label:after,
input[type=password] + label:after,
input[type=email] + label:after,
input[type=url] + label:after,
input[type=time] + label:after,
input[type=date] + label:after,
input[type=datetime] + label:after,
input[type=datetime-local] + label:after,
input[type=tel] + label:after,
input[type=number] + label:after,
input[type=search] + label:after,
textarea.materialize-textarea + label:after {
    display: block;
    content: "";
    position: absolute;
    top: 60px;
    opacity: 0;
    transition: .2s opacity ease-out, .2s color ease-out;
}
.input-field {
    position: relative;
    margin-top: 1rem;
}
.input-field.inline {
    display: inline-block;
    vertical-align: middle;
    margin-left: 5px;
}
.input-field.inline input,
.input-field.inline .select-dropdown {
    margin-bottom: 1rem;
}
.input-field.col label {
    left: 30px;
}
.input-field.col .prefix ~ label,
.input-field.col .prefix ~ .validate ~ label {
    width: calc(100% - 3rem - 1.5rem);
}
.input-field label {
    color: #0e0e0e;
    font-weight: 500;
    position: absolute;
    top: 14px;
    left: 0;
    font-size: 1rem;
    cursor: text;
    transition: .2s ease-out;
    text-align: initial;
    font-size: 14px;
}
.input-field label:not(.label-icon).active {
    font-size: 0.8rem;
    -webkit-transform: translateY(-140%);
    transform: translateY(-140%);
    opacity: 0;	
}
.input-field .prefix {
    position: absolute;
    width: 3rem;
    font-size: 2rem;
    transition: color .2s;
}
.input-field .prefix.active {
    color: #26a69a;
}
.input-field .prefix ~ input,
.input-field .prefix ~ textarea,
.input-field .prefix ~ label,
.input-field .prefix ~ .validate ~ label,
.input-field .prefix ~ .autocomplete-content {
    margin-left: 3rem;
    width: 92%;
    width: calc(100% - 3rem);
}
.input-field .prefix ~ label {
    margin-left: 3rem;
}
@media only screen and (max-width: 992px) {
    .input-field .prefix ~ input {
        width: 86%;
        width: calc(100% - 3rem);
    }
}
@media only screen and (max-width: 600px) {
    .input-field .prefix ~ input {
        width: 80%;
        width: calc(100% - 3rem);
    }
}
/* Search Field */

.input-field input[type=search] {
    display: block;
    line-height: inherit;
    padding-left: 4rem;
    width: calc(100% - 4rem);
}
.input-field input[type=search]:focus {
    background-color: #fff;
    border: 0;
    box-shadow: none;
    color: #444;
}
.input-field input[type=search]:focus + label i,
.input-field input[type=search]:focus ~ .mdi-navigation-close,
.input-field input[type=search]:focus ~ .material-icons {
    color: #444;
}
.input-field input[type=search] + label {
    left: 1rem;
}
.input-field input[type=search] ~ .mdi-navigation-close,
.input-field input[type=search] ~ .material-icons {
    position: absolute;
    top: 0;
    right: 1rem;
    color: transparent;
    cursor: pointer;
    font-size: 2rem;
    transition: .3s color;
}
/* Textarea */

textarea {
    width: 100%;
    height: 3rem;
    background-color: transparent;
}
textarea.materialize-textarea {
    overflow-y: hidden;
    /* prevents scroll bar flash */
    
    padding: .8rem 0 1.6rem 0;
    /* prevents text jump on Enter keypress */
    
    resize: none;
    min-height: 3rem;
}
.hiddendiv {
    display: none;
    white-space: pre-wrap;
    word-wrap: break-word;
    overflow-wrap: break-word;
    /* future version of deprecated 'word-wrap' */
    
    padding-top: 1.2rem;
    /* prevents text jump on Enter keypress */
    
    position: absolute;
    top: 0;
}
/* Autocomplete */

.autocomplete-content {
    margin-top: -2px;
    display: block;
    opacity: 1;
    position: absolute;
    padding: 0px;
    width: 100%;
    box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.43);
}
.autocomplete-content li .highlight {
    color: #444;
}
.autocomplete-content li img {
    height: 40px;
    width: 40px;
    margin: 5px 15px;
	border-radius:0px;
}
/* Radio Buttons
   ========================================================================== */

[type="radio"]:not(:checked),
[type="radio"]:checked {
    position: absolute;
    left: -9999px;
    opacity: 0;
}
[type="radio"]:not(:checked) + label,
[type="radio"]:checked + label {
    position: relative;
    padding-left: 35px;
    cursor: pointer;
    display: inline-block;
    height: 25px;
    line-height: 25px;
    font-size: 1rem;
    transition: .28s ease;
    /* webkit (konqueror) browsers */
    
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
[type="radio"] + label:before,
[type="radio"] + label:after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    margin: 4px;
    width: 16px;
    height: 16px;
    z-index: 0;
    transition: .28s ease;
}
/* Unchecked styles */

[type="radio"]:not(:checked) + label:before,
[type="radio"]:not(:checked) + label:after,
[type="radio"]:checked + label:before,
[type="radio"]:checked + label:after,
[type="radio"].with-gap:checked + label:before,
[type="radio"].with-gap:checked + label:after {
    border-radius: 50%;
}
[type="radio"]:not(:checked) + label:before,
[type="radio"]:not(:checked) + label:after {
    border: 2px solid #5a5a5a;
}
[type="radio"]:not(:checked) + label:after {
    -webkit-transform: scale(0);
    transform: scale(0);
}
/* Checked styles */

[type="radio"]:checked + label:before {
    border: 2px solid transparent;
}
[type="radio"]:checked + label:after,
[type="radio"].with-gap:checked + label:before,
[type="radio"].with-gap:checked + label:after {
    border: 2px solid #14addb;
}
[type="radio"]:checked + label:after,
[type="radio"].with-gap:checked + label:after {
    background-color: #14addb;
}
[type="radio"]:checked + label:after {
    -webkit-transform: scale(1.02);
    transform: scale(1.02);
}
/* Radio With gap */

[type="radio"].with-gap:checked + label:after {
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
}
/* Focused styles */

[type="radio"].tabbed:focus + label:before {
    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
}
/* Disabled Radio With gap */

[type="radio"].with-gap:disabled:checked + label:before {
    border: 2px solid rgba(0, 0, 0, 0.26);
}
[type="radio"].with-gap:disabled:checked + label:after {
    border: none;
    background-color: rgba(0, 0, 0, 0.26);
}
/* Disabled style */

[type="radio"]:disabled:not(:checked) + label:before,
[type="radio"]:disabled:checked + label:before {
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.26);
}
[type="radio"]:disabled + label {
    color: rgba(0, 0, 0, 0.26);
}
[type="radio"]:disabled:not(:checked) + label:before {
    border-color: rgba(0, 0, 0, 0.26);
}
[type="radio"]:disabled:checked + label:after {
    background-color: rgba(0, 0, 0, 0.26);
    border-color: #BDBDBD;
}
/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label,
/* show gold star when clicked */

.rating:not(:checked) > label:hover,
/* hover current star */

.rating:not(:checked) > label:hover ~ label {
    color: #14addb;
}
/* hover previous stars in list */

.rating > input:checked + label:hover,
/* hover current star when changing rating */

.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label,
/* lighten current selection */

.rating > input:checked ~ label:hover ~ label {
    color: #14addb;
}
/* Checkboxes
   ========================================================================== */
/* CUSTOM CSS CHECKBOXES */

form p {
    margin-bottom: 10px;
    text-align: left;
}
form p:last-child {
    margin-bottom: 0;
}
/* Remove default checkbox */

[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
    position: absolute;
    left: -9999px;
    opacity: 0;
}
[type="checkbox"] {
    /* checkbox aspect */
}
[type="checkbox"] + label {
    position: relative;
    padding-left: 35px;
    cursor: pointer;
    display: inline-block;
    height: 25px;
    line-height: 25px;
    font-size: 1rem;
    -webkit-user-select: none;
    /* webkit (safari, chrome) browsers */
    
    -moz-user-select: none;
    /* mozilla browsers */
    
    -khtml-user-select: none;
    /* webkit (konqueror) browsers */
    
    -ms-user-select: none;
    /* IE10+ */
}
[type="checkbox"] + label:before,
[type="checkbox"]:not(.filled-in) + label:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 18px;
    height: 18px;
    z-index: 0;
    border: 2px solid #5a5a5a;
    border-radius: 1px;
    margin-top: 2px;
    transition: .2s;
}
[type="checkbox"]:not(.filled-in) + label:after {
    border: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="checkbox"]:not(:checked):disabled + label:before {
    border: none;
    background-color: rgba(0, 0, 0, 0.26);
}
[type="checkbox"].tabbed:focus + label:after {
    -webkit-transform: scale(1);
    transform: scale(1);
    border: 0;
    border-radius: 50%;
    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: rgba(0, 0, 0, 0.1);
}
[type="checkbox"]:checked + label:before {
    top: -4px;
    left: -5px;
    width: 12px;
    height: 22px;
    border-top: 2px solid transparent;
    border-left: 2px solid transparent;
    border-right: 2px solid #14addb;
    border-bottom: 2px solid #14addb;
    -webkit-transform: rotate(40deg);
    transform: rotate(40deg);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
}
[type="checkbox"]:checked:disabled + label:before {
    border-right: 2px solid rgba(0, 0, 0, 0.26);
    border-bottom: 2px solid rgba(0, 0, 0, 0.26);
}
/* Indeterminate checkbox */

[type="checkbox"]:indeterminate + label:before {
    top: -11px;
    left: -12px;
    width: 10px;
    height: 22px;
    border-top: none;
    border-left: none;
    border-right: 2px solid #26a69a;
    border-bottom: none;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
}
[type="checkbox"]:indeterminate:disabled + label:before {
    border-right: 2px solid rgba(0, 0, 0, 0.26);
    background-color: transparent;
}
[type="checkbox"].filled-in + label:after {
    border-radius: 2px;
}
[type="checkbox"].filled-in + label:before,
[type="checkbox"].filled-in + label:after {
    content: '';
    left: 0;
    position: absolute;
    /* .1s delay is for check animation */
    
    transition: border .25s, background-color .25s, width .20s .1s, height .20s .1s, top .20s .1s, left .20s .1s;
    z-index: 1;
}
[type="checkbox"].filled-in:not(:checked) + label:before {
    width: 0;
    height: 0;
    border: 3px solid transparent;
    left: 6px;
    top: 10px;
    -webkit-transform: rotateZ(37deg);
    transform: rotateZ(37deg);
    -webkit-transform-origin: 20% 40%;
    transform-origin: 100% 100%;
}
[type="checkbox"].filled-in:not(:checked) + label:after {
    height: 20px;
    width: 20px;
    background-color: transparent;
    border: 2px solid #5a5a5a;
    top: 5px;
    z-index: 0;
}
[type="checkbox"].filled-in:checked + label:before {
    top: 5px;
    left: 1px;
    width: 8px;
    height: 13px;
    border-top: 2px solid transparent;
    border-left: 2px solid transparent;
    border-right: 2px solid #fff;
    border-bottom: 2px solid #fff;
    -webkit-transform: rotateZ(37deg);
    transform: rotateZ(37deg);
    -webkit-transform-origin: 100% 100%;
    transform-origin: 100% 100%;
}
[type="checkbox"].filled-in:checked + label:after {
    top: 5px;
    width: 20px;
    height: 20px;
    border: 2px solid #14addb;
    background-color: #14addb;
    z-index: 0;
}
[type="checkbox"].filled-in.tabbed:focus + label:after {
    border-radius: 2px;
    border-color: #5a5a5a;
    background-color: rgba(0, 0, 0, 0.1);
}
[type="checkbox"].filled-in.tabbed:checked:focus + label:after {
    border-radius: 2px;
    background-color: #26a69a;
    border-color: #26a69a;
}
[type="checkbox"].filled-in:disabled:not(:checked) + label:before {
    background-color: transparent;
    border: 2px solid transparent;
}
[type="checkbox"].filled-in:disabled:not(:checked) + label:after {
    border-color: transparent;
    background-color: #BDBDBD;
}
[type="checkbox"].filled-in:disabled:checked + label:before {
    background-color: transparent;
}
[type="checkbox"].filled-in:disabled:checked + label:after {
    background-color: #BDBDBD;
    border-color: #BDBDBD;
}
/* Switch
   ========================================================================== */

.switch,
.switch * {
    -webkit-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -ms-user-select: none;
}
.switch label {
    cursor: pointer;
}
.switch label input[type=checkbox] {
    opacity: 0;
    width: 0;
    height: 0;
}
.switch label input[type=checkbox]:checked + .lever {
    background-color: #95d9ee;
}
.switch label input[type=checkbox]:checked + .lever:after {
    background-color: #14addb;
    left: 24px;
}
.switch label .lever {
    content: "";
    display: inline-block;
    position: relative;
    width: 40px;
    height: 15px;
    background-color: #818181;
    border-radius: 15px;
    margin-right: 10px;
    transition: background 0.3s ease;
    vertical-align: middle;
    margin: 0 16px;
}
.switch label .lever:after {
    content: "";
    position: absolute;
    display: inline-block;
    width: 21px;
    height: 21px;
    background-color: #F1F1F1;
    border-radius: 21px;
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
    left: -5px;
    top: -3px;
    transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease;
}
input[type=checkbox]:checked:not(:disabled) ~ .lever:active::after,
input[type=checkbox]:checked:not(:disabled).tabbed:focus ~ .lever::after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 166, 154, 0.1);
}
input[type=checkbox]:not(:disabled) ~ .lever:active:after,
input[type=checkbox]:not(:disabled).tabbed:focus ~ .lever::after {
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.08);
}
.switch input[type=checkbox][disabled] + .lever {
    cursor: default;
}
.switch label input[type=checkbox][disabled] + .lever:after,
.switch label input[type=checkbox][disabled]:checked + .lever:after {
    background-color: #BDBDBD;
}
/* Select Field
   ========================================================================== */

select {
    display: none;
}
select.browser-default {
    display: block;
}
select {
    background-color: rgba(255, 255, 255, 0.9);
    width: 100%;
    padding: 5px;
    border: 1px solid #f2f2f2;
    border-radius: 2px;
    height: 3rem;
}
.select-label {
    position: absolute;
}
.select-wrapper {
    position: relative;
}
.select-wrapper input.select-dropdown {} .select-wrapper span.caret {
    position: absolute;
    right: 8px;
    top: 0;
    bottom: 0;
    width: 10px;
    height: 10px;
    margin: auto 0;
    font-size: 10px;
    line-height: 10px;
    color: #b1b1b1;
    /* background: #333; */
    z-index: 9;
}
.select-wrapper span.caret.disabled {
    color: rgba(0, 0, 0, 0.26);
}
.select-wrapper + label {
    position: absolute;
    top: -14px;
    font-size: 0.8rem;
}
select:disabled {
    color: rgba(0, 0, 0, 0.3);
}
.select-wrapper input.select-dropdown:disabled {
    color: rgba(0, 0, 0, 0.3);
    cursor: default;
    -webkit-user-select: none;
    /* webkit (safari, chrome) browsers */
    
    -moz-user-select: none;
    /* mozilla browsers */
    
    -ms-user-select: none;
    /* IE10+ */
    
    border-bottom: 1px solid rgba(0, 0, 0, 0.3);
}
.select-wrapper i {
    color: rgba(0, 0, 0, 0.3);
}
.select-dropdown li.disabled,
.select-dropdown li.disabled > span,
.select-dropdown li.optgroup {
    color: rgba(0, 0, 0, 0.3);
    background-color: transparent;
}
.prefix ~ .select-wrapper {
    margin-left: 3rem;
    width: 92%;
    width: calc(100% - 3rem);
}
.prefix ~ label {
    margin-left: 3rem;
}
.select-dropdown li img {
    height: 40px;
    width: 40px;
    margin: 5px 15px;
    float: right;
}
.select-dropdown li.optgroup {
    border-top: 1px solid #eee;
}
.select-dropdown li.optgroup.selected > span {
    color: rgba(0, 0, 0, 0.7);
}
.select-dropdown li.optgroup > span {
    color: rgba(0, 0, 0, 0.4);
}
.select-dropdown li.optgroup ~ li.optgroup-option {
    padding-left: 1rem;
}
/* File Input
   ========================================================================== */

.file-field {
    position: relative;
}
.file-field .file-path-wrapper {
    overflow: hidden;
    padding-left: 10px;
}
.file-field input.file-path {
    width: 100%;
}
.file-field .btn,
.file-field .btn-large {
    float: left;
    height: 3rem;
    line-height: 3rem;
}
.file-field span {
    cursor: pointer;
}
.file-field input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
/* Range
   ========================================================================== */

.range-field {
    position: relative;
}
input[type=range],
input[type=range] + .thumb {
    cursor: pointer;
}
input[type=range] {
    position: relative;
    background-color: transparent;
    border: none;
    outline: none;
    width: 100%;
    margin: 15px 0;
    padding: 0;
}
input[type=range]:focus {
    outline: none;
}
input[type=range] + .thumb {
    position: absolute;
    top: 10px;
    left: 0;
    border: none;
    height: 0;
    width: 0;
    border-radius: 50%;
    background-color: #26a69a;
    margin-left: 7px;
    -webkit-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}
input[type=range] + .thumb .value {
    display: block;
    width: 30px;
    text-align: center;
    color: #26a69a;
    font-size: 0;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
input[type=range] + .thumb.active {
    border-radius: 50% 50% 50% 0;
}
input[type=range] + .thumb.active .value {
    color: #fff;
    margin-left: -1px;
    margin-top: 8px;
    font-size: 10px;
}
input[type=range] {
    -webkit-appearance: none;
}
input[type=range]::-webkit-slider-runnable-track {
    height: 3px;
    background: #c2c0c2;
    border: none;
}
input[type=range]::-webkit-slider-thumb {
    -webkit-appearance: none;
    border: none;
    height: 14px;
    width: 14px;
    border-radius: 50%;
    background-color: #26a69a;
    -webkit-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    margin: -5px 0 0 0;
    transition: .3s;
}
input[type=range]:focus::-webkit-slider-runnable-track {
    background: #ccc;
}
input[type=range] {
    /* fix for FF unable to apply focus style bug  */
    
    border: 1px solid white;
    /*required for proper track sizing in FF*/
}
input[type=range]::-moz-range-track {
    height: 3px;
    background: #ddd;
    border: none;
}
input[type=range]::-moz-range-thumb {
    border: none;
    height: 14px;
    width: 14px;
    border-radius: 50%;
    background: #26a69a;
    margin-top: -5px;
}
input[type=range]:-moz-focusring {
    outline: 1px solid #fff;
    outline-offset: -1px;
}
input[type=range]:focus::-moz-range-track {
    background: #ccc;
}
input[type=range]::-ms-track {
    height: 3px;
    background: transparent;
    border-color: transparent;
    border-width: 6px 0;
    /*remove default tick marks*/
    
    color: transparent;
}
input[type=range]::-ms-fill-lower {
    background: #777;
}
input[type=range]::-ms-fill-upper {
    background: #ddd;
}
input[type=range]::-ms-thumb {
    border: none;
    height: 14px;
    width: 14px;
    border-radius: 50%;
    background: #26a69a;
}
input[type=range]:focus::-ms-fill-lower {
    background: #888;
}
input[type=range]:focus::-ms-fill-upper {
    background: #ccc;
}
/***************
    Nav List
***************/

.table-of-contents.fixed {
    position: fixed;
}
.table-of-contents li {
    padding: 2px 0;
}
.table-of-contents a {
    display: inline-block;
    font-weight: 300;
    color: #757575;
    padding-left: 20px;
    height: 1.5rem;
    line-height: 1.5rem;
    letter-spacing: .4;
    display: inline-block;
}
.table-of-contents a:hover {
    color: #a8a8a8;
    padding-left: 19px;
    border-left: 1px solid #ee6e73;
}
.table-of-contents a.active {
    font-weight: 500;
    padding-left: 18px;
    border-left: 2px solid #ee6e73;
}
.side-nav {
    position: fixed;
    width: 300px;
    left: 0;
    top: 0;
    margin: 0;
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
    height: 100%;
    height: calc(100% + 60px);
    height: -moz-calc(100%);
    padding-bottom: 60px;
    background-color: #fff;
    z-index: 999;
    overflow-y: auto;
    will-change: transform;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform: translateX(-105%);
    transform: translateX(-105%);
}
.side-nav.right-aligned {
    right: 0;
    -webkit-transform: translateX(105%);
    transform: translateX(105%);
    left: auto;
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
}
.side-nav .collapsible {
    margin: 0;
}
.side-nav li {
    float: none;
    line-height: 48px;
}
.side-nav li.active {
    background-color: rgba(0, 0, 0, 0.05);
}
.side-nav li > a {
    color: rgba(0, 0, 0, 0.87);
    display: block;
    font-size: 14px;
    font-weight: 500;
    height: 48px;
    line-height: 48px;
    padding: 0 32px;
}
.side-nav li > a:hover {
    background-color: rgba(0, 0, 0, 0.05);
}
.side-nav li > a.btn,
.side-nav li > a.btn-large,
.side-nav li > a.btn-large,
.side-nav li > a.btn-flat,
.side-nav li > a.btn-floating {
    margin: 10px 15px;
}
.side-nav li > a.btn,
.side-nav li > a.btn-large,
.side-nav li > a.btn-large,
.side-nav li > a.btn-floating {
    color: #fff;
}
.side-nav li > a.btn-flat {
    color: #343434;
}
.side-nav li > a.btn:hover,
.side-nav li > a.btn-large:hover,
.side-nav li > a.btn-large:hover {
    background-color: #2bbbad;
}
.side-nav li > a.btn-floating:hover {
    background-color: #26a69a;
}
.side-nav li > a > i,
.side-nav li > a > [class^="mdi-"],
.side-nav li > a li > a > [class*="mdi-"],
.side-nav li > a > i.material-icons {
    float: left;
    height: 48px;
    line-height: 48px;
    margin: 0 32px 0 0;
    width: 24px;
    color: rgba(0, 0, 0, 0.54);
}
.side-nav .divider {
    margin: 8px 0 0 0;
}
.side-nav .subheader {
    cursor: initial;
    pointer-events: none;
    color: rgba(0, 0, 0, 0.54);
    font-size: 14px;
    font-weight: 500;
    line-height: 48px;
}
.side-nav .subheader:hover {
    background-color: transparent;
}
.side-nav .userView {
    position: relative;
    padding: 32px 32px 0;
    margin-bottom: 8px;
}
.side-nav .userView > a {
    height: auto;
    padding: 0;
}
.side-nav .userView > a:hover {
    background-color: transparent;
}
.side-nav .userView .background {
    overflow: hidden;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
}
.side-nav .userView .circle,
.side-nav .userView .name,
.side-nav .userView .email {
    display: block;
}
.side-nav .userView .circle {
    height: 64px;
    width: 64px;
}
.side-nav .userView .name,
.side-nav .userView .email {
    font-size: 14px;
    line-height: 24px;
}
.side-nav .userView .name {
    margin-top: 16px;
    font-weight: 500;
}
.side-nav .userView .email {
    padding-bottom: 16px;
    font-weight: 400;
}
.drag-target {
    height: 100%;
    width: 10px;
    position: fixed;
    top: 0;
    z-index: 998;
}
.side-nav.fixed {
    left: 0;
    -webkit-transform: translateX(0);
    transform: translateX(0);
    position: fixed;
}
.side-nav.fixed.right-aligned {
    right: 0;
    left: auto;
}
@media only screen and (max-width: 992px) {
    .side-nav.fixed {
        -webkit-transform: translateX(-105%);
        transform: translateX(-105%);
    }
    .side-nav.fixed.right-aligned {
        -webkit-transform: translateX(105%);
        transform: translateX(105%);
    }
    .side-nav a {
        padding: 0 16px;
    }
    .side-nav .userView {
        padding: 16px 16px 0;
    }
}
.side-nav .collapsible-body > ul:not(.collapsible) > li.active,
.side-nav.fixed .collapsible-body > ul:not(.collapsible) > li.active {
    background-color: #ee6e73;
}
.side-nav .collapsible-body > ul:not(.collapsible) > li.active a,
.side-nav.fixed .collapsible-body > ul:not(.collapsible) > li.active a {
    color: #fff;
}
.side-nav .collapsible-body {
    padding: 0;
}
#sidenav-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 120vh;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 997;
    will-change: opacity;
}
/*
    @license
    Copyright (c) 2014 The Polymer Project Authors. All rights reserved.
    This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE.txt
    The complete set of authors may be found at http://polymer.github.io/AUTHORS.txt
    The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS.txt
    Code distributed by Google as part of the polymer project is also
    subject to an additional IP rights grant found at http://polymer.github.io/PATENTS.txt
 */
/**************************/
/* STYLES FOR THE SPINNER */
/**************************/
/*
 * Constants:
 *      STROKEWIDTH = 3px
 *      ARCSIZE     = 270 degrees (amount of circle the arc takes up)
 *      ARCTIME     = 1333ms (time it takes to expand and contract arc)
 *      ARCSTARTROT = 216 degrees (how much the start location of the arc
 *                                should rotate each time, 216 gives us a
 *                                5 pointed star shape (it's 360/5 * 3).
 *                                For a 7 pointed star, we might do
 *                                360/7 * 3 = 154.286)
 *      CONTAINERWIDTH = 28px
 *      SHRINK_TIME = 400ms
 */

.preloader-wrapper {
    display: inline-block;
    position: relative;
    width: 50px;
    height: 50px;
}
.preloader-wrapper.small {
    width: 36px;
    height: 36px;
}
.preloader-wrapper.big {
    width: 64px;
    height: 64px;
}
.preloader-wrapper.active {
    /* duration: 360 * ARCTIME / (ARCSTARTROT + (360-ARCSIZE)) */
    
    -webkit-animation: container-rotate 1568ms linear infinite;
    animation: container-rotate 1568ms linear infinite;
}
@-webkit-keyframes container-rotate {
    to {
        -webkit-transform: rotate(360deg);
    }
}
@keyframes container-rotate {
    to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
.spinner-layer {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    border-color: #26a69a;
}
.spinner-blue,
.spinner-blue-only {
    border-color: #4285f4;
}
.spinner-red,
.spinner-red-only {
    border-color: #db4437;
}
.spinner-yellow,
.spinner-yellow-only {
    border-color: #f4b400;
}
.spinner-green,
.spinner-green-only {
    border-color: #0f9d58;
}
/**
 * IMPORTANT NOTE ABOUT CSS ANIMATION PROPERTIES (keanulee):
 *
 * iOS Safari (tested on iOS 8.1) does not handle animation-delay very well - it doesn't
 * guarantee that the animation will start _exactly_ after that value. So we avoid using
 * animation-delay and instead set custom keyframes for each color (as redundant as it
 * seems).
 *
 * We write out each animation in full (instead of separating animation-name,
 * animation-duration, etc.) because under the polyfill, Safari does not recognize those
 * specific properties properly, treats them as -webkit-animation, and overrides the
 * other animation rules. See https://github.com/Polymer/platform/issues/53.
 */

.active .spinner-layer.spinner-blue {
    /* durations: 4 * ARCTIME */
    
    -webkit-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, blue-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, blue-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
}
.active .spinner-layer.spinner-red {
    /* durations: 4 * ARCTIME */
    
    -webkit-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, red-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, red-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
}
.active .spinner-layer.spinner-yellow {
    /* durations: 4 * ARCTIME */
    
    -webkit-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, yellow-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, yellow-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
}
.active .spinner-layer.spinner-green {
    /* durations: 4 * ARCTIME */
    
    -webkit-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, green-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, green-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
}
.active .spinner-layer,
.active .spinner-layer.spinner-blue-only,
.active .spinner-layer.spinner-red-only,
.active .spinner-layer.spinner-yellow-only,
.active .spinner-layer.spinner-green-only {
    /* durations: 4 * ARCTIME */
    
    opacity: 1;
    -webkit-animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
}
@-webkit-keyframes fill-unfill-rotate {
    12.5% {
        -webkit-transform: rotate(135deg);
    }
    /* 0.5 * ARCSIZE */
    
    25% {
        -webkit-transform: rotate(270deg);
    }
    /* 1   * ARCSIZE */
    
    37.5% {
        -webkit-transform: rotate(405deg);
    }
    /* 1.5 * ARCSIZE */
    
    50% {
        -webkit-transform: rotate(540deg);
    }
    /* 2   * ARCSIZE */
    
    62.5% {
        -webkit-transform: rotate(675deg);
    }
    /* 2.5 * ARCSIZE */
    
    75% {
        -webkit-transform: rotate(810deg);
    }
    /* 3   * ARCSIZE */
    
    87.5% {
        -webkit-transform: rotate(945deg);
    }
    /* 3.5 * ARCSIZE */
    
    to {
        -webkit-transform: rotate(1080deg);
    }
    /* 4   * ARCSIZE */
}
@keyframes fill-unfill-rotate {
    12.5% {
        -webkit-transform: rotate(135deg);
        transform: rotate(135deg);
    }
    /* 0.5 * ARCSIZE */
    
    25% {
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
    }
    /* 1   * ARCSIZE */
    
    37.5% {
        -webkit-transform: rotate(405deg);
        transform: rotate(405deg);
    }
    /* 1.5 * ARCSIZE */
    
    50% {
        -webkit-transform: rotate(540deg);
        transform: rotate(540deg);
    }
    /* 2   * ARCSIZE */
    
    62.5% {
        -webkit-transform: rotate(675deg);
        transform: rotate(675deg);
    }
    /* 2.5 * ARCSIZE */
    
    75% {
        -webkit-transform: rotate(810deg);
        transform: rotate(810deg);
    }
    /* 3   * ARCSIZE */
    
    87.5% {
        -webkit-transform: rotate(945deg);
        transform: rotate(945deg);
    }
    /* 3.5 * ARCSIZE */
    
    to {
        -webkit-transform: rotate(1080deg);
        transform: rotate(1080deg);
    }
    /* 4   * ARCSIZE */
}
@-webkit-keyframes blue-fade-in-out {
    from {
        opacity: 1;
    }
    25% {
        opacity: 1;
    }
    26% {
        opacity: 0;
    }
    89% {
        opacity: 0;
    }
    90% {
        opacity: 1;
    }
    100% {
        opacity: 1;
    }
}
@keyframes blue-fade-in-out {
    from {
        opacity: 1;
    }
    25% {
        opacity: 1;
    }
    26% {
        opacity: 0;
    }
    89% {
        opacity: 0;
    }
    90% {
        opacity: 1;
    }
    100% {
        opacity: 1;
    }
}
@-webkit-keyframes red-fade-in-out {
    from {
        opacity: 0;
    }
    15% {
        opacity: 0;
    }
    25% {
        opacity: 1;
    }
    50% {
        opacity: 1;
    }
    51% {
        opacity: 0;
    }
}
@keyframes red-fade-in-out {
    from {
        opacity: 0;
    }
    15% {
        opacity: 0;
    }
    25% {
        opacity: 1;
    }
    50% {
        opacity: 1;
    }
    51% {
        opacity: 0;
    }
}
@-webkit-keyframes yellow-fade-in-out {
    from {
        opacity: 0;
    }
    40% {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    75% {
        opacity: 1;
    }
    76% {
        opacity: 0;
    }
}
@keyframes yellow-fade-in-out {
    from {
        opacity: 0;
    }
    40% {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    75% {
        opacity: 1;
    }
    76% {
        opacity: 0;
    }
}
@-webkit-keyframes green-fade-in-out {
    from {
        opacity: 0;
    }
    65% {
        opacity: 0;
    }
    75% {
        opacity: 1;
    }
    90% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}
@keyframes green-fade-in-out {
    from {
        opacity: 0;
    }
    65% {
        opacity: 0;
    }
    75% {
        opacity: 1;
    }
    90% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}
/**
 * Patch the gap that appear between the two adjacent div.circle-clipper while the
 * spinner is rotating (appears on Chrome 38, Safari 7.1, and IE 11).
 */

.gap-patch {
    position: absolute;
    top: 0;
    left: 45%;
    width: 10%;
    height: 100%;
    overflow: hidden;
    border-color: inherit;
}
.gap-patch .circle {
    width: 1000%;
    left: -450%;
}
.circle-clipper {
    display: inline-block;
    position: relative;
    width: 50%;
    height: 100%;
    overflow: hidden;
    border-color: inherit;
}
.circle-clipper .circle {
    width: 200%;
    height: 100%;
    border-width: 3px;
    /* STROKEWIDTH */
    
    border-style: solid;
    border-color: inherit;
    border-bottom-color: transparent !important;
    border-radius: 50%;
    -webkit-animation: none;
    animation: none;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
}
.circle-clipper.left .circle {
    left: 0;
    border-right-color: transparent !important;
    -webkit-transform: rotate(129deg);
    transform: rotate(129deg);
}
.circle-clipper.right .circle {
    left: -100%;
    border-left-color: transparent !important;
    -webkit-transform: rotate(-129deg);
    transform: rotate(-129deg);
}
.active .circle-clipper.left .circle {
    /* duration: ARCTIME */
    
    -webkit-animation: left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    animation: left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
}
.active .circle-clipper.right .circle {
    /* duration: ARCTIME */
    
    -webkit-animation: right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
    animation: right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
}
@-webkit-keyframes left-spin {
    from {
        -webkit-transform: rotate(130deg);
    }
    50% {
        -webkit-transform: rotate(-5deg);
    }
    to {
        -webkit-transform: rotate(130deg);
    }
}
@keyframes left-spin {
    from {
        -webkit-transform: rotate(130deg);
        transform: rotate(130deg);
    }
    50% {
        -webkit-transform: rotate(-5deg);
        transform: rotate(-5deg);
    }
    to {
        -webkit-transform: rotate(130deg);
        transform: rotate(130deg);
    }
}
@-webkit-keyframes right-spin {
    from {
        -webkit-transform: rotate(-130deg);
    }
    50% {
        -webkit-transform: rotate(5deg);
    }
    to {
        -webkit-transform: rotate(-130deg);
    }
}
@keyframes right-spin {
    from {
        -webkit-transform: rotate(-130deg);
        transform: rotate(-130deg);
    }
    50% {
        -webkit-transform: rotate(5deg);
        transform: rotate(5deg);
    }
    to {
        -webkit-transform: rotate(-130deg);
        transform: rotate(-130deg);
    }
}
#spinnerContainer.cooldown {
    /* duration: SHRINK_TIME */
    
    -webkit-animation: container-rotate 1568ms linear infinite, fade-out 400ms cubic-bezier(0.4, 0, 0.2, 1);
    animation: container-rotate 1568ms linear infinite, fade-out 400ms cubic-bezier(0.4, 0, 0.2, 1);
}
@-webkit-keyframes fade-out {
    from {
        opacity: 1;
    }
    to {
        opacity: 0;
    }
}
@keyframes fade-out {
    from {
        opacity: 1;
    }
    to {
        opacity: 0;
    }
}
.slider {
    position: relative;
    height: 400px;
    width: 100%;
}
.slider.fullscreen {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}
.slider.fullscreen ul.slides {
    height: 100%;
}
.slider.fullscreen ul.indicators {
    z-index: 2;
    bottom: 30px;
}
.slider .slides {
    background-color: #9e9e9e;
    margin: 0;
    height: 400px;
}
.slider .slides li {
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: inherit;
    overflow: hidden;
}
.slider .slides li img {
    height: 100%;
    width: 100%;
    background-size: cover;
    background-position: center;
}
.slider .slides li .caption {
    color: #fff;
    position: absolute;
    top: 15%;
    left: 15%;
    width: 70%;
    opacity: 0;
}
.slider .slides li .caption p {
    color: #e0e0e0;
}
.slider .slides li.active {
    z-index: 2;
}
.slider .indicators {
    position: absolute;
    text-align: center;
    left: 0;
    right: 0;
    bottom: 0;
    margin: 0;
}
.slider .indicators .indicator-item {
    display: inline-block;
    position: relative;
    cursor: pointer;
    height: 16px;
    width: 16px;
    margin: 0 12px;
    background-color: #e0e0e0;
    transition: background-color .3s;
    border-radius: 50%;
}
.slider .indicators .indicator-item.active {
    background-color: #4CAF50;
}
.carousel {
    overflow: hidden;
    position: relative;
    width: 100%;
    height: 400px;
    -webkit-perspective: 500px;
    perspective: 500px;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
}
.carousel.carousel-slider {
    top: 0;
    left: 0;
    height: 0;
}
.carousel.carousel-slider .carousel-fixed-item {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 20px;
    z-index: 1;
}
.carousel.carousel-slider .carousel-fixed-item.with-indicators {
    bottom: 68px;
}
.carousel.carousel-slider .carousel-item {
    width: 100%;
    height: 100%;
    min-height: 400px;
    position: absolute;
    top: 0;
    left: 0;
}
.carousel.carousel-slider .carousel-item h2 {
    font-size: 24px;
    font-weight: 500;
    line-height: 32px;
}
.carousel.carousel-slider .carousel-item p {
    font-size: 15px;
}
.carousel .carousel-item {
    display: none;
    width: 200px;
    height: 200px;
    position: absolute;
    top: 0;
    left: 0;
}
.carousel .carousel-item > img {
    width: 100%;
}
.carousel .indicators {
    position: absolute;
    text-align: center;
    left: 0;
    right: 0;
    bottom: 0;
    margin: 0;
}
.carousel .indicators .indicator-item {
    display: inline-block;
    position: relative;
    cursor: pointer;
    height: 8px;
    width: 8px;
    margin: 24px 4px;
    background-color: rgba(255, 255, 255, 0.5);
    transition: background-color .3s;
    border-radius: 50%;
}
.carousel .indicators .indicator-item.active {
    background-color: #fff;
}
.carousel.scrolling .carousel-item .materialboxed,
.carousel .carousel-item:not(.active) .materialboxed {
    pointer-events: none;
}
.tap-target-wrapper {
    width: 800px;
    height: 800px;
    position: fixed;
    z-index: 1000;
    visibility: hidden;
    transition: visibility 0s .3s;
}
.tap-target-wrapper.open {
    visibility: visible;
    transition: visibility 0s;
}
.tap-target-wrapper.open .tap-target {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: .95;
    transition: opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1), -webkit-transform 0.3s cubic-bezier(0.42, 0, 0.58, 1);
    transition: transform 0.3s cubic-bezier(0.42, 0, 0.58, 1), opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1);
    transition: transform 0.3s cubic-bezier(0.42, 0, 0.58, 1), opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1), -webkit-transform 0.3s cubic-bezier(0.42, 0, 0.58, 1);
}
.tap-target-wrapper.open .tap-target-wave::before {
    -webkit-transform: scale(1);
    transform: scale(1);
}
.tap-target-wrapper.open .tap-target-wave::after {
    visibility: visible;
    -webkit-animation: pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;
    animation: pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;
    transition: opacity .3s, visibility 0s 1s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s, visibility 0s 1s;
    transition: opacity .3s, transform .3s, visibility 0s 1s, -webkit-transform .3s;
}
.tap-target {
    position: absolute;
    font-size: 1rem;
    border-radius: 50%;
    background-color: #ee6e73;
    box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.14), 0 10px 50px 0 rgba(0, 0, 0, 0.12), 0 30px 10px -20px rgba(0, 0, 0, 0.2);
    width: 100%;
    height: 100%;
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
    transition: opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1), -webkit-transform 0.3s cubic-bezier(0.42, 0, 0.58, 1);
    transition: transform 0.3s cubic-bezier(0.42, 0, 0.58, 1), opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1);
    transition: transform 0.3s cubic-bezier(0.42, 0, 0.58, 1), opacity 0.3s cubic-bezier(0.42, 0, 0.58, 1), -webkit-transform 0.3s cubic-bezier(0.42, 0, 0.58, 1);
}
.tap-target-content {
    position: relative;
    display: table-cell;
}
.tap-target-wave {
    position: absolute;
    border-radius: 50%;
    z-index: 10001;
}
.tap-target-wave::before,
.tap-target-wave::after {
    content: '';
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #ffffff;
}
.tap-target-wave::before {
    -webkit-transform: scale(0);
    transform: scale(0);
    transition: -webkit-transform .3s;
    transition: transform .3s;
    transition: transform .3s, -webkit-transform .3s;
}
.tap-target-wave::after {
    visibility: hidden;
    transition: opacity .3s, visibility 0s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s, visibility 0s;
    transition: opacity .3s, transform .3s, visibility 0s, -webkit-transform .3s;
    z-index: -1;
}
.tap-target-origin {
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    z-index: 10002;
    position: absolute !important;
}
.tap-target-origin:not(.btn):not(.btn-large),
.tap-target-origin:not(.btn):not(.btn-large):hover {
    background: none;
}
@media only screen and (max-width: 600px) {
    .tap-target,
    .tap-target-wrapper {
        width: 600px;
        height: 600px;
    }
}
.pulse {
    overflow: initial;
    position: relative;
}
.pulse::before {
    content: '';
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: inherit;
    border-radius: inherit;
    transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s;
    transition: opacity .3s, transform .3s, -webkit-transform .3s;
    -webkit-animation: pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;
    animation: pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;
    z-index: -1;
}
@-webkit-keyframes pulse-animation {
    0% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    50% {
        opacity: 0;
        -webkit-transform: scale(1.5);
        transform: scale(1.5);
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(1.5);
        transform: scale(1.5);
    }
}
@keyframes pulse-animation {
    0% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    50% {
        opacity: 0;
        -webkit-transform: scale(1.5);
        transform: scale(1.5);
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(1.5);
        transform: scale(1.5);
    }
}
/* ==========================================================================
   $BASE-PICKER
   ========================================================================== */
/**
 * Note: the root picker element should *NOT* be styled more than what's here.
 */

.picker {
    font-size: 16px;
    text-align: left;
    line-height: 1.2;
    color: #000000;
    position: absolute;
    z-index: 10000;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
/**
 * The picker input element.
 */

.picker__input {
    cursor: default;
}
/**
 * When the picker is opened, the input element is "activated".
 */

.picker__input.picker__input--active {
    border-color: #0089ec;
}
/**
 * The holder is the only "scrollable" top-level container element.
 */

.picker__holder {
    width: 100%;
    overflow-y: auto;
    -webkit-overflow-scrolling: touch;
}
/*!
 * Default mobile-first, responsive styling for pickadate.js
 * Demo: http://amsul.github.io/pickadate.js
 */
/**
 * Note: the root picker element should *NOT* be styled more than what's here.
 */
/**
 * Make the holder and frame fullscreen.
 */

.picker__holder,
.picker__frame {
    bottom: 0;
    left: 0;
    right: 0;
    top: 100%;
}
/**
 * The holder should overlay the entire screen.
 */

.picker__holder {
    position: fixed;
    transition: background 0.15s ease-out, top 0s 0.15s;
    -webkit-backface-visibility: hidden;
}
/**
 * The frame that bounds the box contents of the picker.
 */

.picker__frame {
    position: absolute;
    margin: 0 auto;
    min-width: 256px;
    width: 300px;
    max-height: 350px;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    -moz-opacity: 0;
    opacity: 0;
    transition: all 0.15s ease-out;
}
@media (min-height: 28.875em) {
    .picker__frame {
        overflow: visible;
        top: auto;
        bottom: -100%;
        max-height: 80%;
    }
}
@media (min-height: 40.125em) {
    .picker__frame {
        margin-bottom: 7.5%;
    }
}
/**
 * The wrapper sets the stage to vertically align the box contents.
 */

.picker__wrap {
    display: table;
    width: 100%;
    height: 100%;
}
@media (min-height: 28.875em) {
    .picker__wrap {
        display: block;
    }
}
/**
 * The box contains all the picker contents.
 */

.picker__box {
    background: #ffffff;
    display: table-cell;
    vertical-align: middle;
}
@media (min-height: 28.875em) {
    .picker__box {
        display: block;
        border: 1px solid #777777;
        border-top-color: #898989;
        border-bottom-width: 0;
        border-radius: 5px 5px 0 0;
        box-shadow: 0 12px 36px 16px rgba(0, 0, 0, 0.24);
    }
}
/**
 * When the picker opens...
 */

.picker--opened .picker__holder {
    top: 0;
    background: transparent;
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#1E000000,endColorstr=#1E000000)";
    zoom: 1;
    background: rgba(0, 0, 0, 0.32);
    transition: background 0.15s ease-out;
}
.picker--opened .picker__frame {
    top: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    -moz-opacity: 1;
    opacity: 1;
}
@media (min-height: 35.875em) {
    .picker--opened .picker__frame {
        top: 10%;
        bottom: auto;
    }
}
/**
 * For `large` screens, transform into an inline picker.
 */
/* ==========================================================================
   CUSTOM MATERIALIZE STYLES
   ========================================================================== */

.picker__input.picker__input--active {
    border-color: #E3F2FD;
}
.picker__frame {
    margin: 0 auto;
    max-width: 325px;
}
@media (min-height: 38.875em) {
    .picker--opened .picker__frame {
        top: 10%;
        bottom: auto;
    }
}
/* ==========================================================================
   $BASE-DATE-PICKER
   ========================================================================== */
/**
 * The picker box.
 */

.picker__box {
    padding: 0 1em;
}
/**
 * The header containing the month and year stuff.
 */

.picker__header {
    text-align: center;
    position: relative;
    margin-top: .75em;
}
/**
 * The month and year labels.
 */

.picker__month,
.picker__year {
    display: inline-block;
    margin-left: .25em;
    margin-right: .25em;
}
/**
 * The month and year selectors.
 */

.picker__select--month,
.picker__select--year {
    height: 2em;
    padding: 0;
    margin-left: .25em;
    margin-right: .25em;
}
.picker__select--month.browser-default {
    display: inline;
    background-color: #FFFFFF;
    width: 40%;
}
.picker__select--year.browser-default {
    display: inline;
    background-color: #FFFFFF;
    width: 26%;
}
.picker__select--month:focus,
.picker__select--year:focus {
    border-color: rgba(0, 0, 0, 0.05);
}
/**
 * The month navigation buttons.
 */

.picker__nav--prev,
.picker__nav--next {
    position: absolute;
    padding: .5em 1.25em;
    width: 1em;
    height: 1em;
    box-sizing: content-box;
    top: -0.25em;
}
.picker__nav--prev {
    left: -1em;
    padding-right: 1.25em;
}
.picker__nav--next {
    right: -1em;
    padding-left: 1.25em;
}
.picker__nav--disabled,
.picker__nav--disabled:hover,
.picker__nav--disabled:before,
.picker__nav--disabled:before:hover {
    cursor: default;
    background: none;
    border-right-color: #f5f5f5;
    border-left-color: #f5f5f5;
}
/**
 * The calendar table of dates
 */

.picker__table {
    text-align: center;
    border-collapse: collapse;
    border-spacing: 0;
    table-layout: fixed;
    font-size: 1rem;
    width: 100%;
    margin-top: .75em;
    margin-bottom: .5em;
}
.picker__table th,
.picker__table td {
    text-align: center;
}
.picker__table td {
    margin: 0;
    padding: 0;
}
/**
 * The weekday labels
 */

.picker__weekday {
    width: 14.285714286%;
    font-size: .75em;
    padding-bottom: .25em;
    color: #999999;
    font-weight: 500;
    /* Increase the spacing a tad */
}
@media (min-height: 33.875em) {
    .picker__weekday {
        padding-bottom: .5em;
    }
}
/**
 * The days on the calendar
 */

.picker__day--today {
    position: relative;
    color: #595959;
    letter-spacing: -.3;
    padding: .75rem 0;
    font-weight: 400;
    border: 1px solid transparent;
}
.picker__day--disabled:before {
    border-top-color: #aaaaaa;
}
.picker__day--infocus:hover {
    cursor: pointer;
    color: #000;
    font-weight: 500;
}
.picker__day--outfocus {
    display: none;
    padding: .75rem 0;
    color: #fff;
}
.picker__day--outfocus:hover {
    cursor: pointer;
    color: #dddddd;
    font-weight: 500;
}
.picker__day--highlighted:hover,
.picker--focused .picker__day--highlighted {
    cursor: pointer;
}
.picker__day--selected,
.picker__day--selected:hover,
.picker--focused .picker__day--selected {
    border-radius: 50%;
    -webkit-transform: scale(0.75);
    transform: scale(0.75);
    background: #0089ec;
    color: #ffffff;
}
.picker__day--disabled,
.picker__day--disabled:hover,
.picker--focused .picker__day--disabled {
    background: #f5f5f5;
    border-color: #f5f5f5;
    color: #dddddd;
    cursor: default;
}
.picker__day--highlighted.picker__day--disabled,
.picker__day--highlighted.picker__day--disabled:hover {
    background: #bbbbbb;
}
/**
 * The footer containing the "today", "clear", and "close" buttons.
 */

.picker__footer {
    text-align: center;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
.picker__button--today,
.picker__button--clear,
.picker__button--close {
    border: 1px solid #ffffff;
    background: #ffffff;
    font-size: .8em;
    padding: .66em 0;
    font-weight: bold;
    width: 33%;
    display: inline-block;
    vertical-align: bottom;
}
.picker__button--today:hover,
.picker__button--clear:hover,
.picker__button--close:hover {
    cursor: pointer;
    color: #000000;
    background: #b1dcfb;
    border-bottom-color: #b1dcfb;
}
.picker__button--today:focus,
.picker__button--clear:focus,
.picker__button--close:focus {
    background: #b1dcfb;
    border-color: rgba(0, 0, 0, 0.05);
    outline: none;
}
.picker__button--today:before,
.picker__button--clear:before,
.picker__button--close:before {
    position: relative;
    display: inline-block;
    height: 0;
}
.picker__button--today:before,
.picker__button--clear:before {
    content: " ";
    margin-right: .45em;
}
.picker__button--today:before {
    top: -0.05em;
    width: 0;
    border-top: 0.66em solid #0059bc;
    border-left: .66em solid transparent;
}
.picker__button--clear:before {
    top: -0.25em;
    width: .66em;
    border-top: 3px solid #ee2200;
}
.picker__button--close:before {
    content: "\D7";
    top: -0.1em;
    vertical-align: top;
    font-size: 1.1em;
    margin-right: .35em;
    color: #777777;
}
.picker__button--today[disabled],
.picker__button--today[disabled]:hover {
    background: #f5f5f5;
    border-color: #f5f5f5;
    color: #dddddd;
    cursor: default;
}
.picker__button--today[disabled]:before {
    border-top-color: #aaaaaa;
}
/* ==========================================================================
   CUSTOM MATERIALIZE STYLES
   ========================================================================== */

.picker__box {
    border-radius: 2px;
    overflow: hidden;
}
.picker__date-display {
    text-align: center;
    background-color: #26a69a;
    color: #fff;
    padding-bottom: 15px;
    font-weight: 300;
}
.picker__nav--prev:hover,
.picker__nav--next:hover {
    cursor: pointer;
    color: #000000;
    background: #a1ded8;
}
.picker__weekday-display {
    background-color: #1f897f;
    padding: 10px;
    font-weight: 200;
    letter-spacing: .5;
    font-size: 1rem;
    margin-bottom: 15px;
}
.picker__month-display {
    text-transform: uppercase;
    font-size: 2rem;
}
.picker__day-display {
    font-size: 4.5rem;
    font-weight: 400;
}
.picker__year-display {
    font-size: 1.8rem;
    color: rgba(255, 255, 255, 0.4);
}
.picker__box {
    padding: 0;
}
.picker__calendar-container {
    padding: 0 1rem;
}
.picker__calendar-container thead {
    border: none;
}
.picker__table {
    margin-top: 0;
    margin-bottom: .5em;
}
.picker__day--infocus {
    color: #595959;
    letter-spacing: -.3;
    padding: .75rem 0;
    font-weight: 400;
    border: 1px solid transparent;
}
.picker__day.picker__day--today {
    color: #26a69a;
}
.picker__day.picker__day--today.picker__day--selected {
    color: #fff;
}
.picker__weekday {
    font-size: .9rem;
}
.picker__day--selected,
.picker__day--selected:hover,
.picker--focused .picker__day--selected {
    border-radius: 50%;
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
    background-color: #26a69a;
    color: #ffffff;
}
.picker__day--selected.picker__day--outfocus,
.picker__day--selected:hover.picker__day--outfocus,
.picker--focused .picker__day--selected.picker__day--outfocus {
    background-color: #a1ded8;
}
.picker__footer {
    text-align: right;
    padding: 5px 10px;
}
.picker__close,
.picker__today {
    font-size: 1.1rem;
    padding: 0 1rem;
    color: #26a69a;
}
.picker__nav--prev:before,
.picker__nav--next:before {
    content: " ";
    border-top: .5em solid transparent;
    border-bottom: .5em solid transparent;
    border-right: 0.75em solid #676767;
    width: 0;
    height: 0;
    display: block;
    margin: 0 auto;
}
.picker__nav--next:before {
    border-right: 0;
    border-left: 0.75em solid #676767;
}
button.picker__today:focus,
button.picker__clear:focus,
button.picker__close:focus {
    background-color: #a1ded8;
}
/* ==========================================================================
   $BASE-TIME-PICKER
   ========================================================================== */
/**
 * The list of times.
 */

.picker__list {
    list-style: none;
    padding: 0.75em 0 4.2em;
    margin: 0;
}
/**
 * The times on the clock.
 */

.picker__list-item {
    border-bottom: 1px solid #dddddd;
    border-top: 1px solid #dddddd;
    margin-bottom: -1px;
    position: relative;
    background: #ffffff;
    padding: .75em 1.25em;
}
@media (min-height: 46.75em) {
    .picker__list-item {
        padding: .5em 1em;
    }
}
/* Hovered time */

.picker__list-item:hover {
    cursor: pointer;
    color: #000000;
    background: #b1dcfb;
    border-color: #0089ec;
    z-index: 10;
}
/* Highlighted and hovered/focused time */

.picker__list-item--highlighted {
    border-color: #0089ec;
    z-index: 10;
}
.picker__list-item--highlighted:hover,
.picker--focused .picker__list-item--highlighted {
    cursor: pointer;
    color: #000000;
    background: #b1dcfb;
}
/* Selected and hovered/focused time */

.picker__list-item--selected,
.picker__list-item--selected:hover,
.picker--focused .picker__list-item--selected {
    background: #0089ec;
    color: #ffffff;
    z-index: 10;
}
/* Disabled time */

.picker__list-item--disabled,
.picker__list-item--disabled:hover,
.picker--focused .picker__list-item--disabled {
    background: #f5f5f5;
    border-color: #f5f5f5;
    color: #dddddd;
    cursor: default;
    border-color: #dddddd;
    z-index: auto;
}
/**
 * The clear button
 */

.picker--time .picker__button--clear {
    display: block;
    width: 80%;
    margin: 1em auto 0;
    padding: 1em 1.25em;
    background: none;
    border: 0;
    font-weight: 500;
    font-size: .67em;
    text-align: center;
    text-transform: uppercase;
    color: #666;
}
.picker--time .picker__button--clear:hover,
.picker--time .picker__button--clear:focus {
    color: #000000;
    background: #b1dcfb;
    background: #ee2200;
    border-color: #ee2200;
    cursor: pointer;
    color: #ffffff;
    outline: none;
}
.picker--time .picker__button--clear:before {
    top: -0.25em;
    color: #666;
    font-size: 1.25em;
    font-weight: bold;
}
.picker--time .picker__button--clear:hover:before,
.picker--time .picker__button--clear:focus:before {
    color: #ffffff;
}
/* ==========================================================================
   $DEFAULT-TIME-PICKER
   ========================================================================== */
/**
 * The frame the bounds the time picker.
 */

.picker--time .picker__frame {
    min-width: 256px;
    max-width: 320px;
}
/**
 * The picker box.
 */

.picker--time .picker__box {
    font-size: 1em;
    background: #f2f2f2;
    padding: 0;
}
@media (min-height: 40.125em) {
    .picker--time .picker__box {
        margin-bottom: 5em;
    }
}

/*----------------------------------------- [MASTER STYLE SHEET] * Project: Directory Pro - Local Listing & Directory Template * Version: v1.1.1 * Copyright 2017-2020 rn53themes * Last Changes: 05/06/2017 * Author: RN53 Themes * Email: rn53themes@gmail.com * Website: http://www.rn53themes.net -----------------------------------------------*/
/*------------------------------------------------- = Table of Css 1.ALL PAGES COMMON CSS STYLES 2.HOME PAGE BANNER AND SEARCH BOX 3.TOP FIXED MENU 4.LISTING 5.RESPONSIVE SIDE MENU POPUP 6.HOME PAGE: SEARCH BOX 7.RIBBEN 8.MOBILE APP 9.FOOTER 10.PRE LOADING ANIMATION 11.SPECIAL TITLE STYLES 12.INNER PAGE LISTING 13.LISTING SOCIAL SHARE 14.POPUP 15.PREMIUM LISTING 16.STAR RATINGS 17.PRICING TABLE 18.ADD LISTING 19.HOME PAGE: PROJECT COUNT 20.HOME PAGE: POPULAR LISTINGS 21.HOME PAGE: DISCOUNT 22.HOME PAGE: CREATE A ACCOUNT 23.SOCIAL MEDIA LOGIN 24.LISTING LEAD FORM 25.ISTING DETAILS PAGE 26.HOW IT WORK 27.ABOUT US 28.CONTACT US 29.BLOG 30.CUSTOMER REVIEWS 31.ELEMENTS -------------------------------------------------*/
/*-------------------------------------------------*/
/* = All Pages Common CSS Styles 
/*-------------------------------------------------*/
 body {
     color: #73848e;
     font-family: 'Poppins', sans-serif;
     margin: 0px;
     padding: 0px;
     padding-right: 0px !important;
     overflow-x: hidden;
}
 @font-face {
     font-family: 'Material Icons';
     font-style: normal;
     font-weight: 400;
     src: local('Material Icons'), local('MaterialIcons-Regular'), url('../fonts/micon.woff2') format('woff2');
}
 .material-icons {
     font-family: 'Material Icons';
     font-weight: normal;
     font-style: normal;
     font-size: 24px;
     line-height: 1;
     letter-spacing: normal;
     text-transform: none;
     display: inline-block;
     white-space: nowrap;
     word-wrap: normal;
     direction: ltr;
     -webkit-font-feature-settings: 'liga';
     -webkit-font-smoothing: antialiased;
}
 h1, h2, h3, h4, h5, h6 {
     font-family: 'Quicksand', sans-serif;
     color: #2a2b33;
     font-weight: 700;
     margin-top: 0px;
     margin-bottom: 0px;
}
 p, a, li, span, label, tr, td, th, input {
     color: #636363;
     font-size: 15px;
     font-family: 'Poppins', sans-serif;
     font-weight: 400;
}
 small, .small {
     font-size: 13px;
}
 a {
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
     outline: none;
}
 a:hover {
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
/*--=================== dir1 =======================--*/
 .com-padd {
    /* padding-top: 80px;
     */
    /* padding-bottom: 80px;
     */
     padding: 100px 0px;
}
 .com-padd-redu-top {
     padding-top: 0px;
}
 .com-padd-redu-bot {
     padding-bottom: 0px;
}
 .com-padd-redu-bot1 {
     padding-bottom: 70px;
}
 .com-padd-incre-top {
     padding-top: 100px;
}
 .com-padd-incre-bot {
     padding-bottom: 100px;
}
 .com-mar-bot-70 {
     margin-bottom: 70px;
}
 .com-mar-bot-30 {
     margin-bottom: 30px !important;
}
 .dir1-home-head {
     position: relative;
    /* overflow: hidden;
     */
    /* z-index: 99;
     */
}
/*-------------------------------------------------*/
/* = HOME PAGE BANNER AND SEARCH BOX 
/*-------------------------------------------------*/
 #background {
     background-size: cover;
     width: 100%;
     height: 100%;
     -webkit-user-select: none;
     -khtml-user-select: none;
     -moz-user-select: none;
     -o-user-select: none;
     user-select: none;
    /* z-index: 99;
     */
     background: url('../images/banner4.jpg') no-repeat;
     background-size: cover;
}
 #background1 {
     background-size: cover;
     width: 100%;
     height: 100%;
     -webkit-user-select: none;
     -khtml-user-select: none;
     -moz-user-select: none;
     -o-user-select: none;
     user-select: none;
    /* z-index: 99;
     */
     background: url('../images/banner2.jpg') no-repeat;
     background-size: cover;
}
 .dir-ho-tl {
}
 .dir-ho-tl ul {
     padding: 0px;
     margin-bottom: 0px;
}
 .dir-ho-tl ul li {
     display: inline-block;
}
 .dir-ho-tl ul li a {
     color: #fff;
     font-size: 16px;
}
 .dir-ho-tl ul li a img {
     padding: 5px;
    /* box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.8);
     */
     margin-top: 0px;
    /* background: #000;
     */
     margin-top: 5px;
}
 .dir-ho-tr {
}
 .dir-ho-tr ul {
     padding: 0px;
     float: right;
     margin-bottom: 0px;
     margin-top: 19px;
}
 .dir-ho-tr ul li {
     float: left;
     list-style-type: none;
     margin-left: 5px;
    /* padding: 10px;
     */
}
 .dir-ho-tr ul li:nth-child(1) a {
}
 .dir-ho-tr ul li:nth-child(2) a {
}
 .dir-ho-tr ul li:nth-child(3) a {
    /* text-shadow: 0px 1px 0 rgba(23, 23, 23, 0.44);
     */
    /* border-radius: 2px;
     */
     color: #fff;
     background-color: #01a0d8;
     border: 1px solid #039ad0;
     font-weight: 400;
     border-radius: 30px;
     padding: 6px 10px;
}
 .dir-ho-tr ul li:nth-child(3) a i {
     padding-right: 2px;
}
 .dir-ho-tr ul li a {
     color: #fff;
     font-size: 15px;
    /* background: rgba(0, 0, 0, 0.45);
     */
     padding: 2px 8px;
    /* display: inline-block;
     */
     border-radius: 40px;
    /* text-shadow: 0px 1px 0 rgba(23, 23, 23, 0.44);
     */
     cursor: pointer;
    /* text-transform: uppercase;
     */
     font-weight: 400;
}
 .bottomMenu {
     position: fixed;
     top: 0;
     width: 100%;
     height: 60px;
     border-top: 1px solid #151f31;
     background: #151f31;
     z-index: 99;
     transition: all 1s;
     -webkit-box-shadow: 0 1px 3px #960;
     -moz-box-shadow: 0 1px 3px #960;
     box-shadow: 0 0px 10px 2px rgba(0, 0, 0, 0.47);
     border-bottom: 1px solid #111a29;
     background: #141E30;
    /* fallback for old browsers */
     background: -webkit-linear-gradient(to right, #243B55, #141E30);
    /* Chrome 10-25, Safari 5.1-6 */
     background: linear-gradient(to right, #243B55, #141E30);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
     display: none;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .c2-hide {
     display: none;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .c2-show {
     display: block;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
/*-------------------------------------------------*/
/* = TOP FIXED MENU 
/*-------------------------------------------------*/
 .ts-menu {
     position: relative;
}
 .ts-menu-1 {
     float: left;
     width: 8%;
}
 .ts-menu-1 a {
}
 .ts-menu-1 a img {
     width: 57px;
     padding: 5px;
     box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.8);
     margin-top: 0px;
    /* background: rgb(59, 191, 249);
     */
    /* margin-left: 15px;
     */
}
 .ts-menu-2 {
     float: left;
     width: 12%;
     padding: 17px 12px 15px 12px;
     border-left: 1px solid #273244;
    /* border-left-style: groove;
     */
     border-right: 1px solid #273244;
    /* border-right-style: groove;
     */
}
 .ts-menu-2 a {
     vertical-align: middle;
     font-weight: 600;
     color: #ffffff;
     font-size: 16px;
     text-transform: uppercase;
    /* text-shadow: 0px 1px 0 rgba(255, 255, 255, 0.44);
     */
    /* padding: 21px 0px 15px 15px;
     */
     */
     display: -webkit-box;
}
 .ts-menu-2 a i {
     color: #fff;
     padding: 5px;
}
 .ts-menu-3 {
     float: left;
     width: 60%;
     padding: 0px 0px 0px 30px;
}
 .ts-menu-4 {
     float: left;
     width: 20%;
     padding: 10px 0px 0px 1px;
}
 .top-search {
}
 .top-search form {
}
 .top-search form ul {
     padding: 0px;
}
 .top-search form ul li {
     width: 50%;
     float: left;
     display: inline-block;
}
 .top-search form ul li:nth-child(1) {
     width: 90%;
}
 .top-search form ul li:nth-child(1) input {
     padding: 5px 10px;
     line-height: 28px;
     background: #fff;
}
 .top-search form ul li:nth-child(2) {
     width: 10%;
}
 .top-search form ul li input {
     width: 100%;
     padding: 5px;
     border: 0px;
}
 .top-search form ul li input[type="submit"] {
     background: url(../images/search_bg1.png) no-repeat center center #01a0d8;
     color: #eac610;
     font-weight: 600;
     padding: 7px;
     background-size: 24px;
}
 .top-links {
    /* position: relative;
     */
    /* overflow: hidden;
     */
}
 .top-links ul {
     float: right;
     padding-left: 0px;
}
 .top-links ul li {
     display: inline-block;
    /* float: left;
     */
    /* padding: 0px 6px;
     */
}
 .top-links ul li a {
     color: #ffffff;
     font-weight: 500;
     padding: 5px;
     border: 1px solid #1e3069;
     border-radius: 2px;
    /* text-shadow: 0px 1px 0 rgba(255, 255, 255, 0.44);
     */
     font-size: 14px;
     background: #01a0d8;
     border-radius: 2px;
}
 .cat-menu {
     width: 100%;
     background: #ffffff;
     position: absolute;
     overflow: hidden;
     display: none;
     z-index: 99;
     padding: 15px;
     box-shadow: 0px 2px 14px rgba(0, 0, 0, 0.5);
     margin-top: 16px;
     left: 0px;
}
 .top-menu-ani {
     transition: all 0.5s ease;
}
 .cat-menu ul {
     padding: 15px 0px;
     position: relative;
     overflow: hidden;
     margin-bottom: 0px;
}
 .cat-menu ul li {
     width: 100%;
     float: left;
    /* border-right: 1px solid #dedede;
     */
     list-style-type: none;
     background: url(../images/arrow.png) no-repeat center left;
     background-size: 10px;
}
 .cat-menu ul li:nth-child(5) {
     border-right: 0px solid #dedede;
}
 .cat-menu ul li:nth-child(10) {
     border-right: 0px solid #dedede;
}
 .cat-menu ul li:nth-child(15) {
     border-right: 0px solid #dedede;
}
 .cat-menu ul li:nth-child(20) {
     border-right: 0px solid #dedede;
}
 .cat-menu ul li:nth-child(25) {
     border-right: 0px solid #dedede;
}
 .cat-menu ul li:nth-child(30) {
     border-right: 0px solid #dedede;
}
 .cat-menu ul li:nth-child(35) {
     border-right: 0px solid #dedede;
}
 .cat-menu ul li:nth-child(40) {
     border-right: 0px solid #dedede;
}
 .cat-menu ul li a {
     display: block;
     color: #727a7f;
     line-height: 45px;
     font-weight: 400;
     transition: all 0.5s ease;
     padding-left: 20px;
     font-size: 13.5px;
     text-transform: capitalize;
     line-height: 34px;
}
 .cat-menu ul li a:hover {
     transition: all 0.5s ease;
     padding-left: 12px;
}
 .cat-menu ul li a i {
     color: #5f6f71;
}
 .cat-menu {
}
 .cat-menu h4 {
     font-size: 18px;
    /* border-bottom: 1px solid #d6d6d6;
     */
     padding-bottom: 15px;
     color: #2d3c43;
     margin-bottom: 0px;
     padding-left: 15px;
     padding-top: 5px;
}
 .cat-menu h4 span {
     font-size: 18px;
}
 .cat-menu-1 {
    /* display: none;
     */
}
/*-- HEADER --*/
 .com-title {
     text-align: center;
     position: relative;
     overflow: hidden;
     margin-bottom: 50px;
}
 .com-title h2 {
     margin-bottom: 0px;
     padding-bottom: 15px;
     margin-top: 0px;
     font-weight: 600;
     font-size: 42px;
     text-transform: capitalize;
}
 .com-title h2 span {
     font-weight: 600;
     font-size: 42px;
     color: #2a2b33;
}
 .com-title p {
     margin-bottom: 0px;
     font-size: 16px;
     font-weight: 400;
     padding-top: 0px;
     color: #3d5469;
}
 .dz-menu {
     position: relative;
     overflow: hidden;
}
 .dz-menu h4 {
     padding-top: 15px;
     font-size: 14px;
     text-transform: uppercase;
     border-bottom: 1px solid #d6d6d6;
}
 .dz-menu-inn {
     position: relative;
     overflow: hidden;
     float: left;
     width: 16.5%;
}
 .dz-menu-inn ul {
     border-right: 1px solid #d6d6d6;
     padding: 15px;
}
 .lat-menu {
}
 .lat-menu ul {
     border-right: 0px solid #d6d6d6;
}
 .dz-menu-inn ul li {
}
 .dz-menu-inn ul li a {
}
/*-------------------------------------------------------*/
/* LISTING 
/*-------------------------------------------------------*/
 .to-ho-hotel-con-23 {
     position: relative;
     overflow: hidden;
     padding: 20px;
     background: #fff;
}
 .to-ho-hotel-con-2 {
}
 .to-ho-hotel-con-2 h4 {
     margin-top: 0px;
     padding-bottom: 10px;
     margin-bottom: 0px;
}
 .to-ho-hotel-con-3 {
}
 .to-ho-hotel-con-3 ul {
     padding: 0px;
     margin-bottom: 0px;
}
 .to-ho-hotel-con-3 ul li {
     list-style-type: none;
     float: left;
}
 .to-ho-hotel-con-3 ul li {
     padding-top: 10px;
}
 .to-ho-hotel-con-3 ul li span {
     background: #253d52;
     padding: 2px 8px 3px 8px;
     color: #fff;
     border-radius: 1px;
     margin-right: 5px;
}
 .ho-hot-rat-star {
     padding-bottom: 0px !important;
}
 .ho-hot-rat-star i {
     font-size: 14px !important;
     padding-left: 3px;
}
 .ho-hot-rat-star-list {
}
 .ho-hot-rat-star-list i {
     color: #04abc0;
}
 .hot-list-left-part-rat {
     width: 25px;
     height: 25px;
     background-color: #04abc0;
    /* bottom: 8px;
     */
     padding: 4px;
     border-radius: 2px;
     color: #fff;
     font-weight: 600;
     text-align: center;
     font-size: 12px;
     text-shadow: 0px -1px 0 rgba(0, 0, 0, 0.28);
     margin-right: 10px;
}
 .ho-hot-pri {
     font-size: 38px;
     font-weight: 600;
     color: #00bcd4;
     float: right;
}
 .ho-hot-pri-dis {
     font-weight: 400;
     color: #888;
     float: right;
     padding: 0px 5px;
     display: none;
}
 .hot-page2-hli-3 {
     width: 35px;
     height: 35px;
     position: absolute;
     background-color: rgba(255, 197, 37, 0.79);
    /* bottom: 8px;
     */
     padding: 4px;
     margin: 9px 5px;
     right: 5px;
     border-radius: 5px;
}
 .to-ho-hotel-con-4 {
     position: relative;
     overflow: hidden;
     width: 100%;
     padding-top: 14px;
}
 .to-ho-hotel-con-4 a {
     float: left;
     width: 47%;
     text-align: center;
}
 .hom-list-share {
     position: relative;
     overflow: hidden;
     width: 100%;
     padding-top: 12px;
}
 .hom-list-share ul {
     margin-bottom: 0px;
     padding: 0px;
}
 .hom-list-share ul li {
     float: left;
     list-style-type: none;
     display: inline-block;
     width: 25%;
}
 .hom-list-share ul li a {
     display: block;
     border: 1px solid #e6ebec;
     margin: 2px;
     padding: 0px 5px;
     font-size: 12px;
     color: #8a8a8a;
     text-align: center;
}
 .hom-list-share ul li a i {
     padding-right: 5px;
}
 .hom-hot-book-btn {
     margin-right: 3%;
}
 .hom-hot-view-btn {
     margin-left: 3%;
}
 .hom-hot-av-tic {
     position: absolute;
     background-color: rgba(0, 188, 212, 0.82);
     bottom: 15px;
     padding: 3px 8px;
     margin: 0px 0px;
     right: 15px;
     font-weight: 500;
     color: #fff;
     border-radius: 0px;
}
 .hom-hot-av-tic-list {
     left: 10px;
     right: inherit;
     bottom: 10px;
     border-radius: 2px;
     background: #ffc107;
     color: #000;
     font-weight: 600;
     padding: 3px 8px;
     font-size: 13px;
}
 .link-btn {
     background: #1ebef0;
     color: #000;
     font-weight: 600;
     border-radius: 2px;
     padding: 2px 8px;
     text-decoration: none;
     display: inline-block;
     cursor: pointer;
     color: #fff;
    /* font-family: Arial;
     */
     font-size: 14px;
     text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.37);
     transition: all 0.5s ease;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -ms-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
}
 .to-ho-hotel-con-4 a {
     float: left;
     width: 47%;
     text-align: center;
}
 .hom-hot-book-btn {
     margin-right: 3%;
}
/*-------------------------------------------------*/
/* = RESPONSIVE SIDE MENU POPUP 
/*-------------------------------------------------*/
 .mob-right-nav {
     position: fixed;
     right: -270px;
     background: #263238;
     width: 250px;
     padding: 5px 15px 5px 15px;
     height: 100%;
     overflow-y: scroll;
     z-index: 9;
     transition: all 0.5s ease;
     box-shadow: -6px 5px 13px rgba(0, 0, 0, 0.24);
}
 .mob-right-nav:hover {
     overflow-y: scroll;
}
 .mob-right-nav h5 {
     color: #b9b9b9;
     text-transform: uppercase;
     font-weight: 400;
     border-bottom: 1px solid #303b40;
     padding: 12px 0px;
}
 .mob-right-nav ul {
}
 .mob-right-nav ul li {
}
 .mob-right-nav ul li a {
    /* display: block;
     */
    /* border-bottom: 1px solid #e3e3e3;
     */
    /* padding: 7px 0px;
     */
     color: #98999a;
     transition: all 0.5s ease;
    /* background: url('../images/res-menu-air.png') no-repeat left center;
     */
    /* background-size: 10px;
     */
    /* padding-left: 20px;
     */
     display: block;
     font-size: 13.5px;
     padding: 10px 0px;
     border-bottom: 1px solid #303b40;
     padding: 12px 20px;
     text-overflow: ellipsis;
     white-space: nowrap;
     overflow: hidden;
}
 .mob-right-nav ul li a:hover {
     transition: all 0.5s ease;
     color: #2d3c43;
     padding-left: 25px;
}
 .mob-right-nav ul li a i {
     padding-right: 5px;
}
 .mob-right-nav-close {
}
 .mob-right-nav-close i {
     cursor: pointer;
     border: 1px solid #607D8B;
     padding: 5px;
     color: #ffffff;
     border-radius: 25px;
     width: 24px;
     height: 24px;
     text-align: center;
}
 .mob-menu-icon {
}
 .mob-right-nav:hover {
     overflow-y: scroll;
}
 .t-bb {
}
 .dir-home-nav-bot {
     position: relative;
     overflow: hidden;
     width: 100%;
     border-top: 1px solid #d6d6d6;
     border-bottom: 1px solid #d6d6d6;
     padding: 15px;
     font-family: 'Quicksand', sans-serif;
     font-weight: 600;
}
 .dir-home-nav-bot ul {
     margin-bottom: 0px;
}
 .dir-home-nav-bot ul li span {
     display: block;
     font-size: 32px;
     color: #694e45;
     padding-top: 10px;
}
 .dir-home-nav-bot ul li {
     border-right: 0px solid #dedede;
     background: none;
}
 .dir-home-nav-bot ul li:nth-child(1) {
     width: 60%;
}
 .dir-home-nav-bot ul li:nth-child(2) {
     width: 20%;
}
 .dir-home-nav-bot ul li:nth-child(3) {
     width: 20%;
}
 .dir-home-nav-bot ul li a {
     padding-left: 2px;
     font-size: 15px;
     font-weight: 600;
     margin-right: 10px;
     height: inherit;
     padding: 10px;
     color: #fff;
     background: #01a0d8;
     background: linear-gradient(to bottom, #01a0d8, #0485b3);
}
 .dir-home-nav-bot ul li a i {
     color: #fff;
     text-shadow: 0px 1px 0 rgba(255, 255, 255, 0.44);
}
 .dir-ani-btn {
     position: relative;
     background-color: #15b0f6;
     border: none;
     font-size: 28px;
     color: #FFFFFF;
     padding: 2px;
     width: 200px;
     text-align: center;
     -webkit-transition-duration: 0.4s;
    /* Safari */
     transition-duration: 0.4s;
     text-decoration: none;
     overflow: hidden;
     cursor: pointer;
     box-shadow: 0 1px 3px rgba(14, 14, 13, 0.42);
     border-bottom: 1px solid #0793d2;
     color: #fff;
     background-color: #1ebef0;
     border: 1px solid #1ebef0;
     font-weight: 600;
     border-radius: 2px;
     text-shadow: 0px 1px 0 rgba(255, 255, 255, 0.44);
}
 .dir-ani-btn:after {
     content: "";
     background: #90EE90;
     display: block;
     position: absolute;
     padding-top: 300%;
     padding-left: 350%;
     margin-left: -20px!important;
     margin-top: -120%;
     opacity: 0;
     transition: all 0.8s 
}
 .dir-ani-btn:active:after {
     padding: 0;
     margin: 0;
     opacity: 1;
     transition: 0s 
}
/*-------------------------------------------------------*/
/* HOME PAGE: SEARCH BOX 
/*-------------------------------------------------------*/
 .dir-ho-t2l {
}
 .dir-ho-t2l form {
}
 .dir-ho-t2l form ul {
     padding: 10px;
     margin-bottom: 0px;
     position: relative;
    /* overflow: hidden;
     */
     border-radius: 0px;
}
 .dir-ho-t2l form ul li {
     width: 50%;
     float: left;
     display: inline-block;
}
 .dir-ho-t2l form ul li:nth-child(1) {
     width: 60%;
}
 .dir-ho-t2l form ul li:nth-child(1) input {
     padding: 15px 10px 15px 20px;
     line-height: 28px;
     background-size: 10px;
     border-right: 1px solid #eaeaea;
     background-position: 98% 50%;
     background: #fff;
}
 .dir-ho-t2l form ul li:nth-child(2) {
     width: 20%;
}
 .dir-ho-t2l form ul li:nth-child(2) input {
     padding: 15px 35px;
     line-height: 28px;
     background: url(../images/hsicon.png) no-repeat center left #fff;
     background-size: 16px;
     border-right: 1px solid #eaeaea;
     background-position: 8% 52%;
}
 .dir-ho-t2l form ul li:nth-child(3) {
     width: 20%;
}
 .dir-ho-t2l form ul li input {
     width: 100%;
     padding: 5px;
     border: 0px;
     outline: none;
}
 .dir-ho-t2l form ul li input[type="submit"] {
     color: #ffffff;
     font-weight: 600;
     padding: 17px;
     background-size: 30px;
     font-size: 18px;
     background: #01a0d8;
     background: linear-gradient(to bottom, #01a0d8, #0485b3);
     text-transform: uppercase;
}
 .dir-v2-ho-t2l form ul li input[type="submit"] {
     color: #ffffff;
     font-weight: 600;
     padding: 15px;
     background-size: 30px;
     font-size: 18px;
     background: #01a0d8;
     background: linear-gradient(to bottom, #01a0d8, #0485b3);
     text-transform: uppercase;
}
 .dir-v2-ho-t2l form ul li:nth-child(1) {
     width: 80%;
}
 .dir-v2-ho-t2l form ul li:nth-child(2) {
     width: 20%;
}
 .dir-v2-ho-t2l form ul li:nth-child(2) input {
     border-right: 0px solid #eaeaea;
}
 .dir-ho-t-sp {
     padding: 75px 0px 125px 0px;
}
 .dir1-home-head:before {
     content: '';
     position: absolute;
     background: linear-gradient(to top, rgba(0, 0, 0, 0.76) 14%, rgba(0, 0, 0, 0.35) 66%);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
}
 .dir-ho-t-tit {
}
 .dir-ho-t-tit h1 {
     color: #fff;
     padding-bottom: 35px;
     text-shadow: 0px 1px 0 rgba(0, 0, 0, 0.9);
     padding-top: 3%;
     font-size: 60px;
}
 .dir-ho-t-tit-2{
}
 .dir-ho-t-tit-2 h1{
     padding-top: 10%;
}
 .dir-ho-t-tit p {
     color: #fff;
     padding-bottom: 35px;
     text-shadow: 0px 1px 0 rgba(0, 0, 0, 0.9);
    /* padding-top: 10%;
     */
     font-size: 20px;
}
 .home-tab-search {
}
 .home-tab-search ul li a {
     font-size: 16px;
}
 .home-tab-search ul li a i {
     margin-right: 8px;
}
/*-------------------------------------------------*/
/* = RIBBEN 
/*-------------------------------------------------*/
 .dir-ho-t2r {
     padding: 45px 40px;
     position: relative;
     z-index: 999;
     background: rgba(0, 0, 0, 0.32);
}
 .dir-ho-com-head {
     text-align: center;
     padding: 0px 0px 60px 0px;
}
 .dir-ho-com-head h2 {
     font-size: 36px;
}
 .dir-ho-com-head p {
     font-size: 16px;
     margin-bottom: 0px;
     padding-top: 15px;
     color: #989898;
}
 .dir-ho-best-list {
     border: 1px solid #dfdfdf;
     box-shadow: 0px 4px 7px rgba(0, 0, 0, 0.09);
     margin-bottom: 10px;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .dir-ho-best-list:hover {
     background: #ffffff;
     box-shadow: 0px 6px 34px rgba(0, 0, 0, 0.19);
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .dir-ho-best-list-p1 {
     position: relative;
}
 .dir-ho-best-list-p1:before {
     content: '';
     position: absolute;
     background: linear-gradient(to top, rgba(0, 0, 0, 0.72) 14%, rgba(0, 0, 0, 0.08) 35%);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
}
 .dir-ho-best-list-p1 img {
     width: 100%;
     height: 225px;
}
 .dir-ho-best-list-p2 {
     padding: 25px;
}
 .dir-ho-best-list-p2 h4 {
     text-overflow: ellipsis;
     white-space: nowrap;
     overflow: hidden;
     color: #343c42;
     padding-bottom: 10px;
}
 .dir-ho-best-list-p2 p {
     padding-top: 10px;
     padding-bottom: 10px;
}
 .dir-ho-cat {
    /* font-style: italic;
     */
     font-size: 14px;
     color: #7a7a7a;
     text-transform: capitalize;
}
 .dir-ho-best-list a {
}
 .dir-ho-best-list a:hover {
     text-decoration: none;
}
 .dir-ho-best-list-btn {
     border: 1px solid #0793d2;
    /* -webkit-box-shadow: #B7B8B8 0px 1px 0px inset;
     */
     -moz-box-shadow: #B7B8B8 0px 1px 0px inset;
    /* box-shadow: #B7B8B8 0px 1px 0px inset;
     */
     -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
     border-radius: 3px;
     font-size: 12px;
     font-family: arial, helvetica, sans-serif;
     padding: 5px 10px;
     text-decoration: none;
     text-shadow: -1px -1px 0 rgba(177, 177, 177, 0.3);
     font-weight: bold;
     color: #000000;
     background-color: #ffd65e;
     background-image: -webkit-linear-gradient(to bottom, #1bb8ff, #0ba4e9);
     background-image: -webkit-linear-gradient(to bottom, #1bb8ff, #0ba4e9);
     background-image: -moz-linear-gradient(top, #ffd65e, #febf04);
     background-image: -ms-linear-gradient(top, #ffd65e, #febf04);
     background-image: -o-linear-gradient(top, #ffd65e, #febf04);
     background-image: linear-gradient(to bottom, #1bb8ff, #0ba4e9);
}
 .rating-mark {
     position: absolute;
     background: #fdb714;
     padding: 8px;
     font-weight: 600;
     color: #fff;
     right: 10px;
     top: 10px;
     font-size: 16px;
     border-radius: 2px;
}
 .best-mark {
     position: absolute;
     background: #8BC34A;
     padding: 3px 8px;
     font-weight: 600;
     color: #000;
     right: 0px;
    /* top: 10px;
     */
     font-size: 14px;
     border-radius: 0px;
     bottom: 0px;
}
 .dir-ho-dis {
     font-family: 'Montserrat', sans-serif;
     font-size: 52px;
     color: #1cafdb;
     display: inline-block;
     margin-top: 18px;
}
/*-------------------------------------------------*/
/* = MOBILE APP 
/*-------------------------------------------------*/
 .web-app {
     background: url(../images/girls-min.png) bottom center;
    /* background-position: 0px 0px;
     */
     background-size: 100%;
     position: relative;
     overflow: hidden;
    /* padding: 50px 0px 40px 0px;
     */
     background-repeat-y: no-repeat;
}
 .web-app:before {
     content: '';
     position: absolute;
     background: linear-gradient(to top, rgba(255, 255, 255, 0.68) 0%, rgba(255, 255, 255, 0.8) 100%);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
}
 .web-app-img {
}
 .web-app-img img {
     width: 85%;
}
 .web-app-con {
}
 .web-app-con h2 {
     font-weight: 100;
     font-size: 34px;
}
 .web-app-con h2 span {
     font-family: 'Lato', sans-serif;
     text-transform: capitalize;
     font-weight: 600;
     font-size: 42px;
    /* text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.59);
     */
     color: #333333;
}
 .web-app-con p {
     padding-top: 20px;
     font-size: 18px;
     padding-bottom: 10px;
}
 .web-app-con span {
     color: #333;
     font-size: 16px;
     padding-bottom: 15px;
     display: inline-block;
}
 .web-app-con ul {
     padding: 10px 0px;
}
 .web-app-con ul li {
     list-style-type: none;
     font-size: 18px;
     line-height: 34px;
}
 .web-app-con ul li i {
     color: #01a0d8;
     margin-right: 5px;
}
 .web-app-con form {
     position: relative;
     overflow: hidden;
     margin-bottom: 20px;
     margin-top: 8px;
}
 .web-app-con form ul {
     padding: 0px;
     margin: 0px;
}
 .web-app-con form ul li {
     list-style-type: none;
     display: inline-block;
     float: left;
}
 .web-app-con form ul li input {
     width: 100%;
     background: #FFF;
     border: 1px solid #f1f3f5;
     padding: 8px;
     font-size: 15px;
}
 .web-app-con form ul li input[type="submit"] {
     color: #fff;
     border: -1px solid #1ebef0;
     font-weight: 600;
     border-radius: 2px;
     box-sizing: border-box;
     -moz-box-sizing: border-box;
     -webkit-box-sizing: border-box;
     background: #01a0d8;
     background: linear-gradient(to bottom, #01a0d8, #0485b3);
}
 .web-app-con form ul li:nth-child(1) {
     width: 10%;
}
 .web-app-con form ul li:nth-child(2) {
     width: 60%;
}
 .web-app-con form ul li:nth-child(3) {
     width: 30%;
}
 .web-app-con a img {
     width: 150px;
}
/*-------------------------------------------------*/
/* = FOOTER 
/*-------------------------------------------------*/
 footer {
     background: #141f31;
}
 footer {
     color: #9a9a9a;
     font-weight: 300;
     padding: 90px 0 50px;
}
 footer h4, footer .strong {
     color: #636363;
     font-weight: 400;
     font-size: 21px;
}
 footer h4 {
     margin-bottom: 15px;
}
 footer .highlighted {
     color: #a0a0a0;
     font-size: 21px;
    /* font-weight: 600;
     */
     vertical-align: -1px;
}
 footer ul.two-columns li {
     width: 50%;
     float: left;
}
 footer ul.two-columns::after {
     content: "";
     display: table;
     clear: both;
}
 footer ul {
     padding: 0px;
}
 footer ul li {
     list-style-type: none;
     background: url('../images/arr.png') no-repeat center left;
     padding-left: 24px;
     background-size: 9px;
}
 footer ul li a {
     color: #636363;
     font-size: 15px;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 footer ul li a:hover {
     color: #a0a0a0;
     padding-left: 4px;
}
 .foot-sec2 {
}
 .foot-sec2 p {
     font-size: 15px;
}
 .foot-logo {
}
 .foot-logo img {
     width: 100%;
     padding-bottom: 20px;
}
 .foot-sec2 {
     padding-top: 50px;
}
 .foot-social {
}
 .foot-social ul {
     padding: 0px;
}
 .foot-social ul li {
     list-style-type: none;
     float: left;
     padding-right: 10px;
     background: none;
     padding-left: 0px;
}
 .foot-social ul li i {
     font-size: 16px;
     width: 32px;
     height: 32px;
     border: 0px solid #828284;
     border-radius: 50px;
     padding: 7px;
     text-align: center;
     color: #fff;
}
 .foot-social ul li:nth-child(1) i {
     background: #3b5998;
}
 .foot-social ul li:nth-child(2) i {
     background: #dd4b39;
}
 .foot-social ul li:nth-child(3) i {
     background: #1da1f2;
}
 .foot-social ul li:nth-child(4) i {
     background: #0077b5;
}
 .foot-social ul li:nth-child(5) i {
     background: #bb0000;
}
 .foot-social ul li:nth-child(6) i {
     background: #34af23;
}
 .foot-social ul li a:hover {
     padding-left: 0px;
}
 .copy {
     background: #131925;
}
 .copy p {
     margin-bottom: 0px;
     text-align: center;
     padding: 8px;
}
 .copy p a {
     color: #636363;
}
 .dir-foot {
}
 .dir-foot h3 {
     text-transform: uppercase;
     color: #D0D0D0;
     font-weight: 600;
     font-size: 15px;
     border-bottom: 1px #676767;
     border-bottom-style: dashed;
     padding-bottom: 14px;
}
 .dir-foot ul {
     padding: 0px;
}
 .dir-foot ul li {
     list-style-type: none;
     background: url(../images/f_p.png) no-repeat left center;
     padding-left: 15px;
     background-size: 6px;
}
 .dir-foot ul li a {
     text-decoration: none;
     color: #929292;
     font-weight: 600;
     line-height: 32px;
}
 .dir-foot-foll-soc {
     padding: 0px;
     float: right;
}
 .dir-foot-foll-soc li {
     float: left;
     list-style-type: none;
     padding-right: 5px;
}
 .dir-foot-foll-soc li h5 {
     color: #f2be33;
     font-size: 16px;
     font-weight: 500 !important;
     padding-right: 15px;
}
 .dir-foot-foll-soc li h5 span {
     padding-left: 30px;
     color: #7d7d7d;
     font-size: 18px;
     font-weight: 700;
}
 .dir-foot-foll-soc li a {
}
 .dir-foot-foll-soc li a i {
     font-size: 16px;
     width: 32px;
     height: 32px;
     background: #ffc732;
     color: #343c42;
     padding: 8px;
     text-align: center;
     border-radius: 1px;
     text-shadow: 0px 1px 0 rgba(255, 255, 255, 0.44);
}
 .dir-foo2 {
     position: relative;
     overflow: hidden;
}
 .dir-foo-cen {
}
 .dir-foo-cen img {
     float: left;
     padding-right: 15px;
}
 .dir-foo-cen h5 {
     font-size: 24px;
     color: #7d7d7d;
    /* padding-left: 10px;
     */
    /* position: relative;
     */
     margin-top: 14px;
}
/*-------------------------------------------------*/
/* = PRE LOADING ANIMATION 
/*-------------------------------------------------*/
 #preloader {
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     z-index: 9999;
     position: fixed;
     background-color: #fff;
}
 #loading-animation {
     top: 50%;
     left: 50%;
     width: 200px;
     height: 200px;
     position: absolute;
     margin: -100px 0 0 -100px;
     background: url('../images/loading.gif') center center no-repeat;
}
/*-------------------------------------------------*/
/* = SPECIAL TITLE STYLES 
/*-------------------------------------------------*/
 .dir-sp-tit {
}
 .dir-sp-tit h3 {
     padding-bottom: 20px;
}
 .dir-sp-tit h3:before {
     content: "";
     position: absolute;
     left: 38%;
     height: 3px;
     width: 12%;
     border-top: 1px dotted #FF9800;
     border-bottom: 1px dotted #FF9800;
     margin-top: 45px;
}
 .dir-sp-tit h3:after {
     content: "";
     position: absolute;
     left: 51%;
     height: 3px;
     width: 12%;
     border-top: 1px dotted #6f6e6b;
     border-bottom: 1px dotted #6f6e6b;
     margin-top: 45px;
}
 .dir-sp-tit-2 {
}
 .dir-sp-tit-2 h2 {
     padding-bottom: 20px;
}
 .dir-sp-tit-2 h2:before {
     content: "";
     position: absolute;
     left: 38%;
     height: 5px;
     width: 12%;
     border-top: 2px dotted #FF9800;
     border-bottom: 2px dotted #FF9800;
     margin-top: 55px;
}
 .dir-sp-tit-2 h2:after {
     content: "";
     position: absolute;
     left: 51%;
     height: 5px;
     width: 12%;
     border-top: 2px dotted #6f6e6b;
     border-bottom: 2px dotted #6f6e6b;
     margin-top: 55px;
}
/*--============== alter =====================--*/
 .dir-hr1 {
     text-align: center;
     width: 70%;
     margin: 0 auto;
     position: relative;
}
 .dir-hli {
     position: relative;
     overflow: hidden;
}
 .dir-hli a {
     text-decoration: none;
}
 .dir-hli ul {
     padding: 0px;
}
 .dir-hli ul li {
     list-style-type: none;
}
 .dir-hli-1 {
     position: relative;
     overflow: hidden;
}
 .dir-hli-1:before {
     content: '';
     position: absolute;
     background: linear-gradient(to top, rgba(21, 31, 49, 0.63) 0%, rgba(0, 0, 0, 0.08) 35%);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
}
 .dir-hli-1 img {
     width: 100%;
     height: 150px;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
     -webkit-object-fit: cover;
     -moz-object-fit: cover;
     -o-object-fit: cover;
     object-fit: cover;
}
 .dir-hli-1:hover img {
     -moz-transform: scale(1.1);
     -webkit-transform: scale(1.1);
     -o-transform: scale(1.1);
     -ms-transform: scale(1.1);
     transform: scale(1.1);
}
 .dir-hli-3 {
     width: 35px;
     height: 35px;
     position: absolute;
     background-color: rgba(255, 197, 37, 0.79);
    /* bottom: 8px;
     */
     display: none;
     padding: 4px;
     margin: 9px 5px;
     right: 5px;
     border-radius: 5px;
}
 .dir-hli-3 img {
}
 .dir-hli-4 {
}
 .dir-hli-5 {
     box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.15);
     margin-bottom: 30px;
     background: #000000;
}
 .dir-hli-2 {
     padding: 15px;
     background: #ffffff;
}
 .dir-hli-2 h4 {
     color: #273440;
     font-size: 16px;
}
 .dir-hli-2 h4 span {
     float: right;
     font-size: 12px;
     line-height: 20px;
}
/*-------------------------------------------------*/
/* = INNER PAGE LISTING 
/*-------------------------------------------------*/
 .dir-il-top-fix {
     opacity: 1 !important;
     display: block;
}
 .dir-pa-sp-top {
     margin-top: 60px;
}
 .dir-pa-sp-top-bg {
     background: #fff;
}
 .dir-alp {
     background: url(../images/list-p-bg.jpeg) no-repeat center top;
     background-size: cover;
     background-attachment: fixed;
}
 .dir-alp-1 {
     background: #fbf7eb;
     margin-top: 0px;
}
 .dir-alp-tit {
}
 .dir-alp-tit h1 {
     color: #fff;
     padding-top: 35px;
}
 .dir-alp-tit ol {
     background: none;
}
 .dir-alp-tit ol li {
}
 .dir-alp-tit ol li a {
     color: #ffffff;
}
 .breadcrumb > .active {
     color: #20344c !important;
}
 .breadcrumb > li + li:before {
     color: #8a8a8a;
}
 .dir-alp-con {
     position: relative;
     overflow: hidden;
     background: #eaeaea;
     box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.36);
}
 .dir-alp-con-1 {
     background: #ffffff;
}
 .dir-alp-con-left {
     padding-left: 0px !important;
}
 .dir-alp-con-right {
     padding-bottom: 70px;
}
 .dir-alp-con-left-1 {
     background: #20344c;
     color: #fff;
     padding: 25px;
}
 .dir-alp-con-left-1:after, .dir-alp-con-left-1:before {
     top: 72px;
     left: 48%;
     border: solid transparent;
     content: " ";
     height: 0;
     width: 0;
     position: absolute;
     pointer-events: none;
}
 .dir-alp-con-left-1:after {
     border-color: rgba(136, 183, 213, 0);
     border-top-color: #20344c;
     border-width: 9px;
     margin-left: -9px;
}
 .dir-alp-con-left-1 h3 {
     font-size: 20px;
}
 .dir-hom-pre ul li:hover .dir-hom-pre-2 h5 {
     padding-left: 5px;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .list-left-near {
}
 .list-left-near img {
     width: 24px;
     height: 24px;
     border-radius: 28px;
     border: 1px solid #fff;
}
 .list-left-near h5 {
     color: #20344c;
     font-size: 15px;
     text-overflow: ellipsis;
     white-space: pre;
     overflow: hidden;
}
 .list-left-near span {
     color: #949fa9;
     font-size: 13px;
     text-overflow: ellipsis;
     white-space: pre;
     overflow: hidden;
     display: block;
}
 .lln1 {
     width: 10%;
}
 .lln2 {
     width: 80%;
     padding: 0px 15px;
}
 .lln3 {
     width: 10%;
}
 .lln3 span {
     width: 24px;
     height: 24px;
     background: #7dc34a;
     padding: 2px 3px;
     text-align: center;
     color: #fff;
     border-radius: 2px;
     font-weight: 800;
     font-size: 12px;
}
 .dir-hom-pre {
}
 .dir-hom-pre div {
     float: left;
}
 .dir-alp-left-ner-notb {
     border-top: 0px;
}
 .dir-alp-l3 {
}
 .dir-alp-l3 ul {
     padding: 0px;
}
 .dir-alp-l3 ul li {
     list-style-type: none;
     border-bottom: 1px solid #eaeaea;
     padding-top: 8px;
}
 .dir-alp-l3 ul li:nth-child(5) {
}
 .dir-alp-l3 ul li:last-child {
     border-bottom: 0px solid #d4d4d4;
}
 .dir-alp-l3 ul li label {
     display: block;
     font-size: 14.5px !important;
     color: #20344c;
}
 .dir-alp-l-com {
}
 .dir-alp-l-com h4 {
     background: #20344c;
     color: #ffffff;
     padding: 10px 15px;
     text-transform: uppercase;
     font-size: 16px;
}
 .dir-alp-l-com1 form {
     padding-bottom: 8px;
}
 .dir-alp-l-com1 {
     padding: 15px;
     background: #ffffff;
     padding-bottom: 30px;
}
 .dir-alp-l-com1 a {
     margin-top: 5px;
     background: #20344c;
     color: #fff;
     font-weight: 600;
     padding: 5px;
     border-radius: 2px;
     font-size: 12px;
     border: 1px solid #1d2b3c;
}
 .dir-alp-l-com1 a:hover {
     color: #fff;
     background: #14addb;
     border: 1px solid #0885ab;
}
 .dir-alp-l-com1 a i {
     font-size: 10px;
}
 .dir-hom-pre {
     background: #ffffff;
}
 .dir-hom-pre ul {
     margin: 0px;
     padding: 15px;
}
 .dir-hom-pre ul li {
     list-style-type: none;
     position: relative;
     overflow: hidden;
     padding: 10px 0px;
     border-bottom: 1px solid #e4e4e4;
}
 .dir-alp-p3 {
}
 .dir-alp-p3 ul {
}
 .dir-alp-p3 ul li:nth-child(1n+6) {
     display: none;
}
 .dir-alp-p3-btn-h {
     display: none;
}
 .dir-alp-p4-btn-h {
     display: none;
}
 .dir-alp-p4 ul li:nth-child(1n+6) {
     display: none;
}
 .dir-alp-p5-btn-h {
     display: none;
}
 .dir-alp-p5 ul li:nth-child(1n+6) {
     display: none;
}
/*--=============== list ========================--*/
 .dir-lp-rat {
     padding: 6px 6px 15px 8px;
}
 .dir-alp-ri-p2 {
     padding: 15px 0px;
    /* padding-bottom: 25px;
     */
}
 .dir-alp-ri-p2 h3 {
     color: #343c42;
     font-size: 22px;
}
 .dir-alp-ri-p2 ul {
     padding: 0px;
     position: relative;
     overflow: hidden;
     padding-top: 15px;
}
 .dir-alp-ri-p2 ul li {
     list-style-type: none;
     float: left;
     margin-bottom: 8px;
     font-size: 14px;
     padding-left: 30px;
}
 .dir-alp-ri-p2 ul li:nth-child(1) {
     color: #343c42;
     background: url(../images/list-i1.png) no-repeat center left;
     background-size: 18px;
     font-size: 15px;
     font-weight: 600;
}
 .dir-alp-ri-p2 ul li:nth-child(2) {
     color: #979797;
     width: 50%;
     background: url(../images/list-i2.png) no-repeat center left;
     background-size: 18px;
}
 .dir-alp-ri-p2 ul li:nth-child(3) {
     color: #979797;
     width: 50%;
     background: url(../images/list-i3.png) no-repeat center left;
     background-size: 18px;
}
 .dir-alp-ri-p2 p {
     color: #979797;
     padding-bottom: 12px;
}
 .dir-alp-ri-p2 p b {
     padding-right: 5px;
     color: #343c42;
}
 .dir-alp-ri-p2 a {
}
 .dir-alp-quot-btn {
     background: #ffb600;
     color: #000;
     font-weight: 600;
     padding: 5px;
     border-radius: 2px;
     font-size: 12px;
     margin-top: 5px;
     margin-right: 5px;
}
 .dir-alp-quot-free-btn {
     background: #234767;
     color: #fff;
     font-weight: 600;
     padding: 5px;
     border-radius: 2px;
     font-size: 12px;
     margin-top: 5px;
     margin-right: 5px;
}
 .dir-alp-r-list-re-sp {
     padding-left: 0px !important;
     padding-right: 0px !important;
}
 .dir-alp-r-list {
     border: 1px solid #dedede;
     position: relative;
     overflow: hidden;
    /* margin: 5px;
     */
     margin-bottom: 15px;
     background: #ffffff;
     margin-right: 15px;
}
 .dir-alp-r-list:hover {
     background: #ffffff;
     box-shadow: 0px 2px 12px rgba(121, 121, 121, 0.33);
}
 .dir-alp-r-cbb-rat {
     background: #44637d;
     position: absolute;
     padding: 4px 8px;
     right: -1px;
     border-radius: 1px;
     color: #fff;
     top: 0px;
     font-weight: 600;
     font-size: 12px;
}
/*-------------------------------------------------*/
/* = LISTING SOCIAL SHARE 
/*-------------------------------------------------*/
 .sa-list-pre-soci {
     right: 5px;
     position: absolute;
     bottom: 0px;
}
 .sa-list-pre-soci ul {
    /* padding: 4px;
     */
    /* margin-bottom: 8px;
     */
     padding-top: 8px;
     margin-bottom: 0px;
}
 .sa-list-pre-soci ul li {
     float: left;
     margin-right: 5px;
}
 .sa-list-pre-soci ul li a {
}
 .sa-list-pre-soci ul li i {
     width: 24px;
     height: 24px;
     background: #e6e6e6;
     color: #414f5a;
     border-radius: 50%;
     text-align: center;
     padding: 5px;
}
 .sa-sh-icon {
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .sa-hi-icon {
     display: none;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .sa-list-pre-soci ul li i:hover {
     background: #1f4363;
     color: #fff;
}
 .sa-li-desc-left-sp {
     padding-left: 30px !important;
}
 .sa-list-pre-soci ul li {
     background: none !important;
     width: initial !important;
     padding-left: 0px;
}
 .sa-list-pre-soci ul li:last-child i {
     background: #FFC107;
     color: #000;
}
/*-------------------------------------------------*/
/* = POPUP 
/*-------------------------------------------------*/
 .sa-pop-full {
     background-color: #1f4363 !important;
     text-align: center;
     color: #fff;
}
 .sa-pop-full span {
     display: block;
}
 .sa-pop-le {
     float: left;
     width: 30%;
     padding: 50px 10px;
}
 .sa-pop-ri {
     float: left;
     width: 70%;
     background: #fff;
}
 .sa-pop-l0 {
}
 .sa-pop-l0 i {
     font-size: 58px;
     color: #ffffff;
}
 .sa-pop-l1 {
     font-size: 36px;
     color: #ffffff;
     font-weight: 600;
}
 .sa-pop-l2 {
     font-size: 50px;
     line-height: 54px;
     padding: 18px 0px;
     border-top: 2px #ffffff;
     border-top-style: dashed;
     border-bottom: 2px #ffffff;
     border-bottom-style: dashed;
     margin: 15px;
     color: #fff;
}
 .sa-pop-l3 {
     font-size: 18px;
     color: #fdc600;
     font-weight: 600;
}
 .h_signin form p label {
     color: #2b3239;
     text-align: left;
     float: left;
     font-family: sans-serif;
     font-size: 14px;
}
 .h_signin {
     overflow: hidden;
     padding: 20px 40px !important;
}
 .h_signin form p input {
     float: right;
     padding: 5px 34px;
     border-radius: 2px;
     border: 1px solid #D4D4D4;
     width: 100%;
     margin: 4px 0px 14px 0px;
}
 .h_signin form p textarea {
     padding: 5px 34px;
     border-radius: 2px;
     border: 1px solid #D4D4D4;
     width: 100%;
}
 .h_signin form p input[type="submit"] {
     border: 1px solid #dcad04;
    /* -webkit-box-shadow: #B7B8B8 0px 1px 0px inset;
     */
     -moz-box-shadow: #B7B8B8 0px 1px 0px inset;
    /* box-shadow: #B7B8B8 0px 1px 0px inset;
     */
    /* -webkit-border-radius: 3px;
     */
     -moz-border-radius: 3px;
    /* border-radius: 3px;
     */
     font-size: 16px;
     font-family: arial, helvetica, sans-serif;
     padding: 7px 10px 7px 10px;
     text-decoration: none;
     display: inline-block;
    /* text-shadow: -1px -1px 0 rgba(177, 177, 177, 0.3);
     */
     font-weight: 700;
     color: #000000;
     background-color: #fdc600;
    /* background-image: -webkit-gradient(linear, left top, left bottom, from(#ffd65e), to(#febf04));
     */
    /* background-image: -webkit-linear-gradient(top, #ef9f41, #f79623);
     */
     background-image: -moz-linear-gradient(top, #ef9f41, #f79623);
     background-image: -ms-linear-gradient(top, #ef9f41, #f79623);
     background-image: -o-linear-gradient(top, #ef9f41, #f79623);
    /* background-image: linear-gradient(to bottom, #ef9f41, #f79623);
     */
     filter: progid: DXImageTransform.Microsoft.gradient(GradientType=0, startColorstr=#ffd65e, endColorstr=#febf04);
     text-transform: uppercase;
}
/*-------------------------------------------------*/
/* = PREMIUM LISTING 
/*-------------------------------------------------*/
 .dir-pr-p1 {
     background: url(../images/list-p-bg.jpg) no-repeat center center;
     position: relative;
     overflow: hidden;
     padding-top: 100px;
     padding-bottom: 25px;
     background-size: cover;
}
 .dir-pr-p1 ul {
     padding: 0px;
     position: relative;
     overflow: hidden;
     margin-bottom: 0px 
}
 .dir-pr-p1 ul li {
     float: left;
     list-style-type: none;
     width: 100%;
}
 .dir-pr-p1 ul li:nth-child(2) {
     padding-bottom: 15px;
}
 .dir-pr-p1 ul li:nth-child(3) {
     width: 50%;
     color: #fff;
     font-size: 16px;
     background: url(../images/list-pre-i1.png) no-repeat left center;
     background-size: 25px;
     padding-top: 10px;
     padding-bottom: 10px;
     padding-left: 40px;
}
 .dir-pr-p1 ul li:nth-child(4) {
     width: 50%;
}
 .dir-pr-p1 ul li h1 {
     color: #fff;
     padding-bottom: 20px;
}
 .dir-pr-p1-rat {
     position: relative;
     padding: 0px 6px 15px 0px;
}
 .dir-pr-p1-rev {
     float: right;
     position: relative;
     margin-top: 25px;
}
 .dir-pr-p2o {
     background: #1f4363;
}
 .dir-pr-p2 {
}
 .dir-pr-p2 ul {
     margin-bottom: 0px;
     padding: 0px;
}
 .dir-pr-p2 ul li {
     float: left;
     padding: 15px 10px 15px 35px;
     list-style-type: none;
}
 .dir-pr-p2 ul li:nth-child(1) {
     color: #fff;
     font-size: 16px;
     background: url(../images/list-pre-i1.png) no-repeat left center;
     background-size: 25px;
}
 .dir-pr-p2 ul li:nth-child(2) {
     color: #fff;
     font-size: 16px;
     background: url(../images/list-pre-i2.png) no-repeat left center;
     background-size: 25px;
}
 .dir-pr-p2-soc {
     position: relative;
     overflow: hidden;
     float: right;
}
 .dir-pr-p2-soc ul {
     padding: 13px 15px 15px 15px;
     position: relative;
}
 .dir-pr-p2-soc ul li {
     float: left;
     list-style-type: none;
     margin-right: 5px;
}
 .dir-pr-p2-soc ul li h5 {
     color: #fff;
     padding-right: 10px;
     padding-top: 6px;
     text-transform: uppercase;
     font-size: 14px;
}
 .dir-pr-p2-soc ul li i {
     width: 28px;
     height: 28px;
     background: #afc3d6;
     color: #000;
     padding: 8px 6px;
     text-align: center;
     border-radius: 30px;
}
 .dir-p-p1-rev-btn {
     font-size: 14px;
     padding: 8px;
}
/*-- SOCIAL MEDIA COLORES --*/
 .fb1 {
     background: #3b5998;
}
 .gp1 {
     background: #dd4b39;
}
 .tw1 {
     background: #1da1f2;
}
 .li1 {
     background: #0077b5;
}
 .yt1 {
     background: #cd201f;
}
 .wa1 {
     background: #34af23;
}
/*--PREMIUM LISTING--*/
 .dir-pr-p3 {
     position: relative;
     overflow: hidden;
     background: #f3f3f3;
}
 .db-user-left {
     background: #161512;
     border: 1px solid #161512;
     box-shadow: 0px 2px 12px rgba(150, 150, 150, 0.18);
}
 .db-user-img {
}
 .db-user-img img {
     width: 100%;
}
 .db-user-left-menu {
     padding: 15px;
}
 .db-user-left-menu ul {
     padding: 0px;
     margin-bottom: 0px;
}
 .db-user-left-menu ul li {
     display: block;
    /* vertical-align: middle;
     */
     padding: 4px 0px;
}
 .db-user-left-menu ul li a {
     color: #c3c3c3;
     display: block;
     border-bottom: 1px solid #33322d;
    /* line-height: 38px;
     */
     padding: 7px;
     font-size: 15px;
    /* font-weight: 600;
     */
     text-transform: capitalize;
}
 .db-user-left-menu ul li a:hover {
    /* padding-left:10px;
     */
     background: #335c82;
     color: #fff;
    /* border-radius: 59px;
     */
    /* border: 1px solid #4c6275;
     */
     transform: scale(1.1);
}
 .db-user-left-menu ul li:last-child a {
     border-bottom: 0px solid #ebebeb;
}
 .db-left-icon {
     display: inline-block;
     padding-right: 7px;
     vertical-align: sub;
}
 .db-left-icon img {
     width: 20px;
}
 #upload-photo {
     opacity: 0;
     position: absolute;
     z-index: -1;
}
 .db-left-pro-pos {
     position: absolute;
     margin-top: -42px;
     right: 45%;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .db-left-pro-pos i {
     width: 50px !important;
     height: 50px;
     text-align: center;
     background: #0d70b5;
     color: #fff;
     font-size: 34px;
     padding: 6px;
     border-radius: 5px;
     cursor: pointer;
     box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.62);
}
 .db-left-pro-edit {
     width: 32px !important;
}
 .db-user-img:hover .db-left-pro-pos {
     -webkit-transform: scale(1.4);
     -ms-transform: scale(1.4);
     transform: scale(1.4);
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
/*--PREMIM LISTING RIGHT--*/
 .dir-pr-p3-right {
     background: #fff;
     border: 1px solid #dedede;
     box-shadow: 0px 2px 12px rgba(150, 150, 150, 0.18);
     padding: 20px;
}
 .dir-pr-tit-first {
     padding-top: 0px !important;
}
 .dir-pr-tit-first h2 {
}
 .dir-pr-tit {
     padding-top: 25px;
     padding-bottom: 25px;
}
 .dir-pr-tit h2 {
     color: #343c42;
     font-size: 24px;
}
 .dir-pr-tit h2 span {
     font-family: 'Lato', sans-serif;
     color: #9c9d9e;
     font-size: 24px;
}
 .dir-pr-p3-rp1 {
}
 .dir-pr-p3-right p, li {
     font-size: 13px;
     color: #343c42;
     line-height: 24px;
     font-weight: 600;
}
 .dir-pr-p3-rp-com {
     border-bottom: 1px solid #dedede;
     padding-bottom: 30px;
}
 .dir-pr-p3-rp2 {
}
 .dir-pr-p3-rp2 img {
     width: 100%;
}
 .dir-pr-p3-rp3 {
     position: relative;
     overflow: hidden;
}
 .dir-pr-p3-rp3 ul {
     padding: 0px;
     margin-bottom: 0px;
}
 .dir-pr-p3-rp3 ul li {
     background: url(../images/pre-ser-i.png) no-repeat center left;
     background-size: 16px;
     padding-left: 40px;
     float: left;
     list-style-type: none;
    /* margin-bottom: 15px;
     */
    /* width: 25%;
     */
     display: inline-block;
     padding: 10px 10px 10px 30px;
     border: 1px solid #ececec;
     margin: 5px;
     background-position: 5px;
}
/**/
 .cbb3-pr-pr-sli-left-btn {
     position: absolute;
     left: 37px;
    /* top: 50px;
     */
     z-index: 9;
     margin-top: 10%;
     color: #fff;
     background-color: rgba(0, 0, 0, 0.41);
     border-color: #9e9e9e;
     padding: 25px 10px;
     border-radius: 2px;
}
 .cbb3-pr-pr-sli-right-btn {
     position: absolute;
     right: 37px;
    /* top: 50px;
     */
     z-index: 9;
     margin-top: 10%;
     color: #fff;
     background-color: rgba(0, 0, 0, 0.41);
     border-color: #9e9e9e;
     padding: 25px 10px;
     border-radius: 2px;
}
 .dir-pr-ri-pro {
     border: 1px solid #dcdcdc;
}
 .dir-pr-ri-pro-con {
     padding: 15px 10px 20px 10px;
}
 .dir-pr-ri-pro-con h5 {
     font-size: 16px;
     padding-bottom: 12px;
}
 .dir-pr-ri-pro-con p {
     font-size: 13px;
     padding-bottom: 10px;
}
 .dir-pr-ri-p4-pro-enq {
}
/*--PRODUCT POPUP--*/
 .dir-ri-pr-pro-main {
     width: 75%;
     margin: 0 auto;
     margin-top: 5%;
}
 .dir-ri-pr-pro-dec {
     position: relative;
     overflow: hidden;
}
 .dir-ri-pr-pro-dec-left {
     width: 30%;
     float: left;
}
 .dir-ri-pr-pro-dec-left img {
     width: 100%;
}
 .dir-ri-pr-pro-dec-right {
     width: 70%;
     float: left;
     padding: 0px 25px;
}
 .dir-ri-pr-pro-dec-right h3 {
     padding-bottom: 20px;
}
 .dir-ri-pr-pro-dec-right h3 span {
     font-size: 22px;
     color: #333;
     padding-left: 5px;
}
 .dir-ri-pr-pro-dec-right p {
}
 .dir-pr-pro-pop-clo-btn {
     position: absolute;
     right: 5px;
     top: 5px;
     background: #FFC107 !important;
     border-radius: 40px;
     width: 24px;
     height: 24px;
     opacity: 1 !important;
     z-index: 9;
}
 .dir-pr-pro-pop-clo-btn i {
     font-size: 14px;
     text-align: center;
     margin-top: -7px;
     position: absolute;
     margin-left: -5px;
}
 .dir-pr-p3-rp5 {
}
 .dir-pr-p3-rp5 iframe {
     width: 100%;
     height: 300px;
     border: 0px;
}
 .dir-pr-p3-rp6 {
     position: relative;
     overflow: hidden;
}
 .dir-pr-p3-rp6 ul {
     padding: 0px;
}
 .dir-pr-p3-rp6 ul li {
     list-style-type: none;
}
/*-------------------------------------------------*/
/* = STAR RATINGS 
/*-------------------------------------------------*/
 .stars {
     background: url("../images/stars.png") repeat-x 0 0;
     width: 150px;
     position: relative;
     overflow: hidden;
}
 .stars input[type="radio"] {
     position: absolute;
     opacity: 0;
     filter: alpha(opacity=0);
}
 .stars input[type="radio"].star-5:checked ~ span {
     width: 100%;
}
 .stars input[type="radio"].star-4:checked ~ span {
     width: 80%;
}
 .stars input[type="radio"].star-3:checked ~ span {
     width: 60%;
}
 .stars input[type="radio"].star-2:checked ~ span {
     width: 40%;
}
 .stars input[type="radio"].star-1:checked ~ span {
     width: 20%;
}
 .stars label {
     display: block;
     width: 30px;
     height: 30px;
     margin: 0!important;
     padding: 0!important;
     text-indent: -999em;
     float: left;
     position: relative;
     z-index: 10;
     background: transparent!important;
     cursor: pointer;
}
 .stars label:hover ~ span {
     background-position: 0 -30px;
}
 .stars label.star-5:hover ~ span {
     width: 100% !important;
}
 .stars label.star-4:hover ~ span {
     width: 80% !important;
}
 .stars label.star-3:hover ~ span {
     width: 60% !important;
}
 .stars label.star-2:hover ~ span {
     width: 40% !important;
}
 .stars label.star-1:hover ~ span {
     width: 20% !important;
}
 .stars span {
     display: block;
     width: 0;
     position: relative;
     top: 0;
     left: 0;
     height: 30px;
     background: url("../images/stars.png") repeat-x 0 -60px;
     -webkit-transition: -webkit-width 0.5s;
     -moz-transition: -moz-width 0.5s;
     -ms-transition: -ms-width 0.5s;
     -o-transition: -o-width 0.5s;
     transition: width 0.5s;
}
 .sa-list-left-filter-1 {
}
 .sa-list-left-filter-1 ul {
     margin-bottom: 0px !important;
}
 .sa-list-left-filter-1 ul li {
     border-bottom: 0px !important;
     padding: 8px 0px 6px 0px !important;
}
 .stars_1 {
}
 .stars_1 input[type="radio"] {
}
 .stars_1 label {
}
 .l-info-5 {
}
 .l-info-5 li {
     float: left;
     padding: 10px;
     color: #8f8f8f;
}
 .l-info-5 li:nth-child(1) {
     width: 50%;
}
 .l-info-5 li:nth-child(2) {
     width: 50%;
}
 .l-info-5 li:nth-child(3) {
     width: 100%;
}
 .l-info-5 li:nth-child(4) {
     padding: 0px 10px;
}
 .l-info-5 li input {
     width: 100%;
     padding: 5px;
     border: 1px solid #c2c2c2;
    /* padding-left: 14px;
     */
}
 .l-info-5 li textarea {
     resize: none;
     width: 100%;
     padding: 5px;
     border: 1px solid #c2c2c2;
}
 .l-info-5 li input[type="submit"]:hover {
     transition: all 0.5s ease;
     background: #ffc314;
}
/*--== REVIEW ==--*/
 .dir-pr-p3-rp7 {
}
 .dir-pr-p3-rp7-left {
}
 .dir-pr-p3-rp7-left img {
     margin: 0 auto;
     display: table;
     padding-bottom: 10px;
}
 .dir-pr-p3-rp7-right {
}
 .dir-pr-p3-rp7-right h4 {
     padding-bottom: 15px;
}
 .dir-pr-p3-rp7-right span {
     color: #75797b;
     font-size: 14px;
     font-weight: 600;
}
 .dir-pr-p3-rp7-right p {
     line-height: 22px;
     color: #75797b;
     font-size: 14px;
}
 .dir-pr-p3-rp7-1 {
     padding-bottom: 15px;
     position: relative;
     overflow: hidden;
}
 .dir-pr-p7-rat {
     position: relative;
}
 .dir-pr-p3-rp8 {
     background: #1f4363;
     padding-top: 15px;
     padding-bottom: 40px;
     border-top: 1px solid #d4d4d4;
     border-bottom: 1px solid #d4d4d4;
}
 .dir-pr-p3-rp8-img {
}
 .dir-pr-p3-rp8-img img {
     height: inherit;
}
 .dir-pr-p8-rel-list {
     background: #fff;
     border: 0px solid #fff;
}
 .dir-p8-list-tit {
}
 .dir-p8-list-tit h2 {
     color: #fff;
     padding-left: 15px;
}
 .dir-p8-list-tit h2 span {
     color: #afc2d2;
}
/*--=============== OTHER INFO ==================--*/
 .dir-pr-p3-left-2 {
     background: #fff;
     margin-top: 25px;
     border: 1px solid #d6d6d6;
     box-shadow: 0px 2px 12px rgba(150, 150, 150, 0.18);
}
 .dir-pr-p3-left-2 h3 {
     background: #1f4363;
     color: #fff;
     font-size: 20px;
     padding: 15px;
}
 .dir-pr-p3-left-21 {
     padding: 15px;
}
 .dir-pr-p3-left-21 ul {
     padding: 0px;
     margin-bottom: 0px;
}
 .dir-pr-p3-left-21 ul li {
     list-style-type: none;
     padding-bottom: 10px;
     border-bottom: 1px solid #e2e2e2;
     margin-bottom: 10px;
}
 .dir-pr-p3-left-21 ul li:last-child {
     margin-bottom: 0px;
     border-bottom: 0px solid #e2e2e2;
}
 .dir-pr-p3-left-21 ul li span {
     float: right;
     background: #ffc51d;
     color: #000;
     font-weight: 600;
     padding: 0px 8px;
     font-size: 14px;
     display: inline-block;
     border-radius: 2px;
}
 .dir-pr-p8-rp8 {
}
 .dir-pr-p8-rp8 ul {
}
 .dir-pr-p8-rp8 ul li {
     background: url(../images/pre-pro-i.png) no-repeat center left;
     background-position: 5px;
     background-size: 16px;
}
/*-------------------------------------------------*/
/* PRICING TABLE 
/*-------------------------------------------------*/
 .pricing1 {
}
 .list-featu ul {
     padding: 0px;
}
 .list-featu ul li {
     list-style-type: none;
    /* text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.82);
     */
}
 .pricing {
     border: 1px solid #e3e3e3;
     box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.11);
     transition: all 0.5s ease;
     margin-bottom: 20px;
}
 .pricing:hover {
     transform: scale(1.05);
     box-shadow: 0px 2px 40px rgba(0, 0, 0, 0.3);
}
 .pricing li:nth-child(1) {
     background: #19d3e8;
     color: #000;
     text-transform: uppercase;
     font-size: 20px;
     font-weight: 800;
     text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.82);
}
 .pricing li:nth-child(2) {
     background: #05c6db;
     color: #000;
     font-size: 24px;
     padding: 25px 0px;
     font-weight: 600;
     background: -webkit-linear-gradient(to bottom, #03c4da, #19d3e8);
     background: linear-gradient(to bottom, #03c4da, #19d3e8);
     text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.59);
}
 .pricing li:nth-child(2) span {
     font-size: 50px;
     padding-right: 5px;
     padding-top: 14px;
     display: inline-block;
     font-weight: 800;
     color: #000;
     text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.59);
}
 .pricing li + li {
}
 .pricing li {
     padding: 12px;
     text-align: center;
     font-size: 15px;
     color: #444;
}
 .pricing li i {
     font-size: 20px;
}
 .pricing li .fa-times {
     color: #FF5722;
}
 .pricing li .fa-check {
     color: #8BC34A;
}
 .pricing li:last-child a {
}
 .price-start {
}
 .price-start a {
    /* background: #009688;
     */
     padding: 2px;
}
 .list-featu {
     position: relative;
     overflow: hidden;
}
 .pricing-detail {
}
 .pricing-detail li:nth-child(1) {
     font-size: 24px;
     line-height: 128px;
}
 .pricing-detail li {
     padding: 12px;
     font-size: 16px;
     color: #343c42;
     font-weight: 600;
}
 .pricing-detail img {
     width: 100%;
}
 .p-one {
     background: #e5e5e5;
}
 .p-two {
}
 .p-pro {
}
 .p-pro li:nth-child(1) {
     background: #e3e819;
}
 .p-pro li:nth-child(2) {
     background: #d6da07;
    /* fallback for old browsers */
     background: -webkit-linear-gradient(to bottom, #f9f609, #d3d807);
    /* Chrome 10-25, Safari 5.1-6 */
     background: linear-gradient(to bottom, #d9de06, #e3e819);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
 .p-ppro li:nth-child(1) {
     background: #aae819;
}
 .p-ppro li:nth-child(2) {
     background: #9cdd03;
    /* fallback for old browsers */
     background: -webkit-linear-gradient(to bottom, #9adc00, #aae819);
    /* Chrome 10-25, Safari 5.1-6 */
     background: linear-gradient(to bottom, #9adc00, #aae819);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
/*-------------------------------------------------*/
/* = ADD LISTING 
/*-------------------------------------------------*/
 .p-listing {
     padding: 35px 0px;
     position: relative;
     overflow: hidden;
}
 .ak-field {
     overflow: hidden;
}
 .p-listing form {
     padding: 25px;
     border: 1px solid #ccc;
}
 .p-listing form input, select, textarea {
     width: 100%;
     padding: 7px;
     border-radius: 0px;
     border: 1px solid #ccc;
     font-size: 14px !important;
     font-weight: 400;
     color: #333;
}
 .p-listing form textarea {
     resize: none;
     height: 100px;
}
 .p-listing h2 {
     padding-bottom: 20px;
}
 .p-listing h2 span {
     color: #FF9800;
     font-size: 30px;
}
 .p-listing form input[type="submit"] {
     border-radius: 3px;
     border: 1px solid #d7a307;
     font-weight: 600;
}
/*--================================ REGISTER POPUP ======================================== --*/
 .dir-pop-width {
     margin: 0 auto;
     width: 70% !important;
}
 .dir-pop-head {
     background: url('../images/pop_bg.jpg') no-repeat center center;
     background-size: cover;
     padding: 25px 25px 50px 25px !important;
     border-bottom: 0px !important;
}
 .dir-pop-head h4 {
     color: #fff;
     text-align: center;
     text-transform: capitalize;
     font-size: 20px;
}
 .dir-pop-body {
     padding: 35px 50px 20px 50px !important;
     border-bottom: 10px solid #263b57;
}
 .dir-pop-body form {
     background: #fff;
     margin-top: -65px;
     padding: 30px 50px 25px 50px;
     border-radius: 5px;
     box-shadow: 0px 2px 34px rgba(80, 80, 80, 0.3);
     position: relative;
     overflow: hidden;
}
 .dir-pop-tem-row {
     position: relative;
     overflow: hidden;
     margin-bottom: 8px;
}
 .dir-pop-tem-row textarea {
     margin-top: 0px !important;
}
 .dir-pop-com {
}
 .dir-pop-com label {
     color: #000;
     font-weight: 400;
     font-family: 'Lato', sans-serif;
     font-size: 15px;
}
 .dir-pop-com input, textarea, select {
     font-family: 'Lato', sans-serif;
     font-size: 15px;
}
 .dir-pop-foot {
     text-align: center;
     margin-bottom: 0px;
     padding-top: 20px;
}
 .dir-pop-foot a {
}
 .pop-btn {
     outline: none;
     background: #14addb;
     border: 1px solid #14addb;
     color: #fff !important;
     padding: 5px 15px;
     border-radius: 2px;
     font-weight: 700;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .pop-btn:hover {
     background: #14addb;
     border: 1px solid #14addb;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
/*-------------------------------------------------------*/
/* HOME PAGE: PROJECT COUNT 
/*-------------------------------------------------------*/
 .proj {
     margin-top: -50px;
     position: relative;
    /* z-index: 99;
     */
}
 .hom-pro {
     background: #fff;
     text-align: center;
     padding: 25px 20px 27px 20px;
     position: relative;
     overflow: hidden;
     box-shadow: 0px 0px 12px 2px rgba(0, 0, 0, 0.07);
     border-radius: 2px;
}
 .hom-pro:hover {
     background: #f3f2ee;
}
 .hom-pro img {
     padding-bottom: 20px;
}
 .hom-pro h4 {
     padding-bottom: 15px;
}
 .hom-pro p {
     margin-bottom: 0px;
     padding-bottom: 18px;
}
 .hom-pro a {
    /* border: 1px solid #e5e9ec;
     */
     padding: 4px 7px;
     border-radius: 30px;
     color: #253d52;
     font-size: 13px;
     border: 1px dashed #fff;
     box-shadow: 0 0 0 3px #151f31;
     background-color: #3f4550;
     color: #fff;
}
/*-------------------------------------------------------*/
/* HOME PAGE: POPULAR LISTINGS 
/*-------------------------------------------------------*/
 .sec-bg-white {
     background: #fff;
}
 .list-spac {
     margin: 15px;
     padding: 15px 0px;
     margin-bottom: 15px !important;
}
 .list-spac-1 {
     border: 1px solid #e2e2e2;
}
 .home-list-pop {
     position: relative;
     overflow: hidden;
     background: #fdfeff;
     padding: 15px 0px;
     margin-bottom: 30px;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
     box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.07);
     border: 1px solid #f1f2f3;
}
 .home-list-pop:hover {
     -moz-transform: scale(1.02);
     -webkit-transform: scale(1.02);
     -o-transform: scale(1.02);
     transform: scale(1.02);
     box-shadow: 0px 11px 9px -10px rgba(0, 0, 0, 0.52);
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .home-list-pop img {
     width: 100%;
     height: 116px;
     -webkit-object-fit: cover;
     -moz-object-fit: cover;
     -o-object-fit: cover;
     object-fit: cover;
}
 .list-ser-img img{
     width: 100%;
     height: 165px;
     -webkit-object-fit: cover;
     -moz-object-fit: cover;
     -o-object-fit: cover;
     object-fit: cover;
}
 .home-list-pop.list-spac img {
}
 .home-list-pop-desc {
}
 .home-list-pop-desc span {
     text-transform: uppercase;
     font-size: 12px;
}
 .home-list-pop-desc h3 {
     font-size: 20px;
     padding-bottom: 8px;
     color: #000000;
     padding-top: 5px;
}
 .home-list-pop-desc h4 {
     font-size: 14px;
     padding-bottom: 8px;
}
 .home-list-pop-desc p {
     margin-bottom: 0px;
     font-size: 13px;
}
 .home-list-pop-rat {
     position: absolute;
     background: #96c113;
     padding: 4px;
     font-weight: 600;
     color: #fff;
     right: 15px;
     top: 0px;
     font-size: 14px;
     border-radius: 2px;
}
 .home-list-pop-rat span {
}
 .home-list-pop-rat i {
}
 .list-inn-rat {
}
 .list-inn-rev {
}
 .list-inn-links {
}
 .list-number {
     position: relative;
     overflow: hidden;
     width: 100%;
     padding-top: 10px;
}
 .list-number ul {
     padding: 0px;
}
 .list-number ul li {
     display: inline-block;
     float: left;
     width: 50%;
     color: #000000;
     font-size: 12px;
}
 .list-number ul li img {
     width: 18px;
     height: 18px;
     margin-right: 7px;
}
 .list-number ul li:nth-child(1) {
}
 .list-number ul li:nth-child(2) {
}
 .inn-list-pop-desc {
}
 .inn-list-pop-desc h3 {
     font-size: 24px;
}
 .inn-list-pop-desc p {
     font-size: 14px;
}
 .inn-list-pop-desc p b {
     color: #333;
}
 .list-enqu-btn {
     position: relative;
     overflow: hidden;
     width: 100%;
    /* border-top: 1px solid #e6e6e6;
     */
    /* margin-top: 10px;
     */
     padding-top: 10px;
}
 .list-enqu-btn ul {
     padding: 0px;
}
 .list-enqu-btn ul li {
     display: inline-block;
     float: left;
     width: 25%;
     margin: 0px;
}
 .list-enqu-btn ul li a {
     border: 1px solid #eaeaea;
     text-align: center;
     display: block;
     padding: 5px;
     color: #3e4c56;
     box-sizing: border-box;
     margin: 4px;
     border-radius: 2px;
     font-weight: 600;
     font-size: 14px;
}
 .list-enqu-btn ul li a:hover {
     color: #fff;
     background-color: #172437;
     border: 1px solid #172233;
}
 .list-enqu-btn ul li a:hover i {
     margin-right: 10px;
}
 .list-enqu-btn ul li a i {
     margin-right: 5px;
}
 .list-enqu-btn ul li:last-child a {
     background: #F44336;
     border: 1px solid #dc2e21;
     color: #fff;
}
/*-------------------------------------------------------*/
/* HOME PAGE: DISCOUNT 
/*-------------------------------------------------------*/
 .home-dis {
     position: relative;
     overflow: hidden;
     background: #253d52;
     padding: 70px 0px;
}
 .home-dis h2 {
     color: #fff;
     font-size: 46px;
     vertical-align: middle;
     text-align: center;
}
 .home-dis h2 span {
     color: #fdb714;
     font-size: 46px;
     font-family: 'Quicksand', sans-serif;
     font-weight: 600;
}
 .home-dis h2 a {
     padding: 4px 7px;
     border-radius: 30px;
     color: #253d52;
     font-size: 24px;
     border: 1px dashed #fff;
     box-shadow: 0 0 0 3px #ceae0c;
     background-color: #eac610;
     color: #fff;
     vertical-align: middle;
}
 .home-dis:before {
     content: '';
     position: absolute;
     background: url(../images/services/s2.jpeg) no-repeat;
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 50%;
     opacity: 0.2;
}
/*-------------------------------------------------------*/
/* HOME PAGE: CREATE A ACCOUNT 
/*-------------------------------------------------------*/
 .hom-cre-acc-left {
}
 .hom-cre-acc-left h3 {
     font-weight: 100;
     font-size: 34px;
}
 .hom-cre-acc-left h3 span {
     text-transform: capitalize;
     font-weight: 600;
     font-size: 42px;
    /* text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.59);
     */
     color: #333333;
}
 .hom-cre-acc-left h5 {
     font-weight: 700;
     font-size: 20px;
}
 .hom-cre-acc-left p {
     padding-top: 8px;
     font-size: 13px;
}
 .hom-cre-acc-left ul {
     padding: 0px;
     margin-bottom: 0px;
     margin-top: 50px;
}
 .hom-cre-acc-left ul li {
    /* padding-top: 25px;
     */
     padding-bottom: 30px;
     list-style-type: none;
}
 .hom-cre-acc-left ul li img {
     text-align: center;
     float: left;
     width: 50px;
}
 .hom-cre-acc-left ul li div {
     display: block;
     margin-left: 80px;
    /* float: left;
     */
    /* margin-top: 0px;
     */
     margin-top: -10px;
}
 .hom-cre-acc-right {
}
 .hom-cre-acc-right form {
     border: 1px solid #ededed;
     background-color: #f9f9f9;
     padding: 30px;
     box-sizing: border-box;
     padding: 35px 50px 35px 50px;
     background: #eaedef;
}
 .animate-lab {
    /* position: absolute;
     */
     color: #9e9e9e;
     z-index: 9;
    /* padding: 18px 24px;
     */
     font-size: 15px;
     transition: 0.2s ease all;
     -moz-transition: 0.2s ease all;
     -webkit-transition: 0.2s ease all;
    /* margin-top: -61px;
     */
     position: absolute;
     pointer-events: none;
     margin-top: -35px;
     margin-left: 24px;
}
 .hom-cre-acc-right form input:focus ~ label {
}
 .cbox-res {
     width: auto !important;
}
 .hom-cre-acc-right form input:focus {
     outline: none;
}
 .hom-cre-acc-right form input {
     height: 45px;
     position: relative;
     padding: 5px 24px;
     box-sizing: border-box;
     box-shadow: none;
     border: 1px solid #e8e8e8;
     text-indent: 0;
     line-height: 12px;
     -webkit-transition: border-color .4s, color .4s;
     transition: border-color .4s, color .4s;
    /* -webkit-appearance: none;
     */
     width: 100%;
     font-size: 14px;
     background: #fff;
}
 .hom-cre-acc-right form select {
     height: 55px;
     position: relative;
     padding: 15px 24px;
     box-sizing: border-box;
     box-shadow: none;
     border: 1px solid #e8e8e8;
     text-indent: 0;
     line-height: 12px;
     -webkit-transition: border-color .4s, color .4s;
     transition: border-color .4s, color .4s;
    /* -webkit-appearance: none;
     */
     width: 100%;
     font-size: 15px;
     background: #fff;
}
 .hom-cre-acc-right form textarea {
     height: 120px;
     position: relative;
     padding: 15px 24px;
     box-sizing: border-box;
     box-shadow: none;
     border: 1px solid #e8e8e8;
     text-indent: 0;
     line-height: 25px;
     -webkit-transition: border-color .4s, color .4s;
     transition: border-color .4s, color .4s;
    /* -webkit-appearance: none;
     */
     width: 100%;
     font-size: 15px;
     background: #fff;
}
 .hom-cre-acc-right form input[type="submit"] {
     font-size: 20px;
     border: none;
     width: 100%;
     padding: 18px;
     background: #31c6f5;
    /* color: #fff;
     */
    /* text-transform: uppercase;
     */
}
 .hom-cre-acc-right form input[type="submit"]:hover {
     background: #14addb;
}
 .blue-btn {
     color: #fff;
     background-color: #1ebef0;
     border: 1px solid #1ebef0;
     font-weight: 600;
     border-radius: 2px;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .blue-btn:hover {
     background: #14addb;
     border: 1px solid #14addb;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .hom-cre-acc-right form input[type="submit"] {
}
 .hom-cre-acc-right .checkbox {
     padding: 10px 0px;
}
 .hom-cre-acc-right .checkbox label {
}
/*--========================================================--*/
 .sea-drop {
}
 .sea-drop-com {
     background: #fff;
     display: none;
     position: relative;
     z-index: 9999;
     width: 100%;
     box-shadow: 0px 2px 5px 0px rgba(46, 46, 46, 0.2);
     overflow: hidden;
}
 .sea-drop-1 {
     position: absolute;
     width: 58.4%;
}
 .sea-v2-drop-1 {
     position: absolute;
     width: 78%;
}
 .sea-drop-com ul {
     background: #fff !important;
     padding: 0px !important;
}
 .sea-drop-com ul li {
     display: block !important;
     width: 100% !important;
     text-align: left;
     border-bottom: 1px solid #f7f7f7;
}
 .sea-drop-com ul li a:hover {
     background: #ededed;
}
 .sea-drop-com ul li a {
     text-align: left;
     display: block;
     padding: 10px 20px;
     color: #303848;
     text-overflow: ellipsis;
     white-space: pre;
     overflow: hidden;
}
 .sea-drop-com ul li a img {
     margin-right: 10px;
     width: 24px;
}
 .mar-bot-0 {
     margin-bottom: 0px;
}
/*-------------------------------------------------------*/
/* SOCIAL MEDIA LOGIN 
/*-------------------------------------------------------*/
 .soc-login {
     position: relative;
     overflow: hidden;
     border-top: 1px solid #dcdcdc;
     margin-top: 15px;
     padding-top: 15px;
}
 .soc-login h4 {
     text-align: center;
     padding-bottom: 15px;
}
 .soc-login ul {
     padding: 0px;
     margin: 0px;
}
 .soc-login ul li {
     list-style-type: none;
     float: left;
     width: 33.333%;
     padding: 5px;
}
 .soc-login ul li a {
     display: block;
     color: #fff;
     padding: 7px 18px;
     text-align: center;
     border-radius: 2px;
}
 .soc-login ul li:nth-child(1) a {
     background: #3b5998;
}
 .soc-login ul li:nth-child(2) a {
     background: #00aced;
}
 .soc-login ul li:nth-child(3) a {
     background: #d34836;
}
 .soc-login ul li a i {
     padding-right: 5px;
}
 .get-quo {
}
 .get-quo textarea {
     margin-top: 0px !important;
}
 .list-rat-ch {
}
 .list-rat-ch span {
     width: 25px;
     height: 25px;
     background-color: #ffe500;
    /* bottom: 8px;
     */
     padding: 4px;
     border-radius: 2px;
     color: #000;
     font-weight: 600;
     text-align: center;
     font-size: 12px;
     text-shadow: 0px -1px 0 rgba(0, 0, 0, 0.28);
     margin-right: 10px;
}
 .list-rat-ch i {
     color: #000000;
     text-shadow: 0px -1px 0 rgba(0, 0, 0, 0.6);
     border: 1px solid #000;
     padding: 3px 2px 2px 2px;
     text-align: center;
     border-radius: 3px;
     background: #ffe500;
     font-size: 11px;
}
 .full-btn {
     width: 100%;
     font-size: 16px;
}
 .hom-cr-acc-check {
     padding: 15px 8px !important;
}
 .hom-cr-acc-check input {
}
 .hom-cr-acc-check label {
     font-size: 12px;
     font-weight: 500;
     color: #454f54;
     text-shadow: none;
}
/*-------------------------------------------------------*/
/* LISTING LEAD FORM 
/*-------------------------------------------------------*/
 .list-pg-lt {
     width: 65%;
     float: left;
}
 .list-pg-rt {
     width: 35%;
     float: left;
     padding: 0px 0px 0px 20px;
}
 .list-page-enq {
     margin-top: 60px;
     background: url('../images/banner2.jpg') no-repeat;
     background-size: cover;
     position: relative;
}
 .list-page-enq:before {
     content: '';
     position: absolute;
     background: linear-gradient(to top, rgba(32, 52, 76, 0.64) 14%, rgba(0, 0, 0, 0.55) 66%);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
}
 .lpe-com-main {
     position: relative;
     overflow: hidden;
     width: 75%;
     margin: 0 auto;
     padding: 50px 35px;
}
 .lpe-com {
     width: 50%;
     float: left;
}
 .lpe-left {
     padding: 14% 0%;
     color: #fff;
}
 .lpe-left h4 {
     text-transform: uppercase;
}
 .lpe-left h5 {
     font-size: 20px;
}
 .lpe-left h2 {
     font-size: 60px;
}
 .lpe-right {
     text-align: center;
}
 .lpe-right h3 {
     color: #000000;
     font-size: 28px;
}
 .lpe-right p {
     font-size: 14px;
     text-align: center;
     padding-top: 7px;
     margin-bottom: 5px;
}
 .lpe-right form {
     background: #fff;
     padding: 25px;
     border-radius: 4px;
     box-shadow: 0px 16px 40px -10px rgb(0, 0, 0);
     border-bottom: 5px solid #d6c492;
}
 .lpe-right input, textarea {
     height: 45px;
     position: relative;
     padding: 15px 24px;
     box-sizing: border-box;
     box-shadow: none;
     border: 1px solid #e8e8e8;
     text-indent: 0;
     line-height: 12px;
     -webkit-transition: border-color .4s, color .4s;
     transition: border-color .4s, color .4s;
    /* -webkit-appearance: none;
     */
     width: 100%;
     font-size: 14px;
     background: #fff;
}
 .lpe-right label {
     top: 14px;
}
 .lpe-right textarea {
     height: 75px;
}
 .lpe-right input[type="submit"] {
}
 .list-red-btn {
     background: #F44336;
     background: linear-gradient(to top, #ec3123, #f44336);
    /* border: 1px solid #f14033;
     */
     color: #fff;
     height: 45px;
     line-height: 45px;
}
 .list-pagenat {
     margin-bottom: 0px;
     margin-top: 15px;
     margin: 0 auto;
     display: table;
}
/*-------------------------------------------------------*/
/* LISTING DETAILS PAGE 
/*-------------------------------------------------------*/
 .pg-list-1 {
     margin-top: 60px;
     background: url(../images/list-deta/bg.jpg) no-repeat;
     background-size: cover;
     position: relative;
     padding: 250px 0px 70px 0px;
     width: 100%;
     box-sizing: content-box;
}
 .pg-list-prop {
     background: url(../images/list-deta/prop-bg.jpg) no-repeat;
     background-size: cover;
     box-sizing: content-box;
}
 .pg-list-shop {
     background: url(../images/list-deta/shop-bg.jpg) no-repeat;
     background-size: cover;
     box-sizing: content-box;
}
 .pg-list-auto {
     background: url(../images/list-deta/auto-bg.jpg) no-repeat;
     background-size: cover;
     box-sizing: content-box;
}
 .pg-list-1:before {
     content: '';
     position: absolute;
     background: linear-gradient(to top, rgb(21, 31, 50) 14%, rgba(0, 0, 0, 0.14) 66%);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
}
 .pg-list-1-left {
     float: left;
     width: 50%;
     position: relative;
     overflow: hidden;
}
 .pg-list-1-left a {
}
 .pg-list-1-left h3 {
     font-size: 36px;
     color: #fff;
     padding-bottom: 15px;
}
 .pg-list-1-left p {
     color: #b7b7b7;
     font-size: 18px;
}
 .pg-list-1-left h4 {
     color: #b7b7b7;
     padding: 15px 00px;
     font-size: 16px;
}
 .pag-p1-phone {
}
 .pag-p1-phone ul {
}
 .pag-p1-phone ul li {
     color: #dcdcdc;
     font-size: 14px;
     width: 33.33%;
     text-overflow: ellipsis;
     white-space: pre;
     overflow: hidden;
}
 .pag-p1-phone ul li i {
     width: 24px;
     height: 24px;
    /* color: #fff;
     */
     font-size: 18px;
}
 .pg-list-1-right {
     float: left;
     width: 50%;
     padding: 0px 15px;
}
 .pg-list-1-right-p1 {
     padding-top: 165px;
}
 .pg-list-1-right-p1 ul {
}
 .pg-list-1-right-p1 ul li {
}
 .pg-list-1-right-p1 ul li a {
     background: #ffffff;
     border: 1px solid #ffffff;
     color: #162336;
     padding: 12px 12px;
     text-overflow: ellipsis;
     white-space: pre;
     overflow: hidden;
     font-size: 14px;
}
 .pglist-p1 {
}
 .pglist-p2 {
}
 .pglist-p3 {
}
 .pglist-p4 {
}
 .pglist-p5 {
}
 .pglist-p-com {
     margin-bottom: 20px;
}
 .pglist-p-com-ti {
     border-bottom: 1px solid #e2e2e2;
}
 .pglist-p-com-ti h3 {
     padding: 15px 20px;
     background: #fff;
     font-weight: 700;
     font-size: 16px;
     text-transform: uppercase;
}
 .pglist-p-com-ti h3 span {
     color: #8a8d92;
     font-weight: 700;
     font-size: 16px;
     text-transform: uppercase;
     font-family: 'Quicksand', sans-serif;
}
 .list-360 {
}
 .list-360 iframe {
     width: 100%;
     height: 300px;
     border: 0px;
}
 .list-tit-mar-0 {
     padding-top: 0px !important;
}
 .pglist-p-com-ti h3 i {
}
 .list-slider {
}
 .list-slider-nav {
     margin-top: 175%;
     position: absolute;
     background: #ffe500;
     width: 32px;
     height: 32px;
     padding: 5px;
     text-align: center;
     border-radius: 2px;
     color: #000;
}
 .list-slider-nav-rp {
     margin-right: 40px;
     position: initial;
}
 .list-page-com-p {
}
 .list-page-com-p p {
     font-size: 13px;
     color: #2d323c;
     line-height: 24px;
}
/*--==== LISTING SHARE =====--*/
 .share-btn {
     padding-bottom: 10px;
}
 .share-btn ul {
     margin-bottom: 0px;
}
 .share-btn ul li:nth-child(1) a {
     background: #3b5998;
}
 .share-btn ul li:nth-child(2) a {
     background: #00aced;
}
 .share-btn ul li:nth-child(3) a {
     background: #d34836;
}
 .share-btn ul li a {
     padding: 7px;
     color: #fff;
     font-weight: 500;
     font-size: 12px;
     border-radius: 3px;
     text-shadow: none;
}
 .share-btn ul li {
     display: inline-block;
     margin-bottom: 5px;
     margin-right: 1px;
}
 .share-btn ul li i {
     padding-right: 3.75pt;
}
/*--==== LISTING SERVICES =====--*/
 .pg-list-ser {
}
 .pg-list-ser ul {
}
 .pg-list-ser ul li {
     padding: 8px;
}
 .pg-list-ser-p1:before {
     content: '';
     position: absolute;
     background: linear-gradient(to top, rgba(0, 0, 0, 0.71) 14%, rgba(0, 0, 0, 0.32) 66%);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
}
 .pg-list-ser ul li h4 {
}
 .pg-list-ser-p1 {
     position: relative;
     overflow: hidden;
}
 .pg-list-ser-p1:hover img {
     -moz-transform: scale(1.2);
     -webkit-transform: scale(1.2);
     -o-transform: scale(1.2);
     transform: scale(1.2);
}
 .pg-list-ser-p1 img {
     width: 100%;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .pg-list-ser-p2 {
     position: absolute;
    /* text-align: center;
     */
     width: 89.5%;
     margin-top: -35px;
}
 .pg-list-ser-p2 h4 {
     text-align: center;
     color: #fff;
     font-size: 16px;
}
 .list-pg-bg {
     background: #f7f8fa;
}
 .pglist-bg {
     background: #fff;
     border: 1px solid #e2e2e2;
     border-radius: 2px;
}
 .list-pg-inn-sp {
     padding: 20px;
}
 .list-rom-pric {
     font-size: 26px !important;
     background: #fff;
}
 .list-room-type {
     position: relative;
     overflow: hidden;
     width: 100%;
     padding-top: 10px;
}
 .list-room-type ul {
     padding: 0px;
}
 .list-room-type ul li {
     display: inline-block;
     float: left;
     color: #636363;
     font-size: 14px;
}
 .list-room-type ul li img {
     width: 18px;
    /* margin-right: 7px;
     */
    /* border: 1px solid #333;
     */
    /* padding: 3px;
     */
     border-radius: 40px;
}
 .list-room-type ul li:nth-child(1) {
}
 .list-room-type ul li:nth-child(2) {
}
 .list-room-deta {
}
 .list-room-deta h3 {
     font-size: 20px;
     color: #141f31;
     font-weight: 700;
     font-size: 18px;
}
 .list-room-rati {
     padding: 10px 0px 5px 0px;
}
 .list-rom-ami {
}
 .list-rom-ami ul li {
    /* padding-right: 10px;
     */
     padding-bottom: 6px;
     font-family: 'Montserrat', sans-serif;
     font-size: 12px;
     background: #f5f5f5;
     border-radius: 4px;
     margin-right: 5px;
     padding: 4px 8px;
     margin-bottom: 5px;
}
 .list-rom-ami ul li img {
     vertical-align: sub;
     width: 15px;
     height: 15px;
    /* display: none;
     */
}
 .list-room-mar-o {
}
 .lp-ur-all {
     position: relative;
     overflow: hidden;
}
 .lp-ur-all-rat {
     position: relative;
     overflow: hidden;
     border-top: 1px solid #e2e2e2;
     margin-top: 20px;
     padding-top: 20px;
}
 .lp-ur-all-left {
     float: left;
     width: 40%;
     border-right: 4px solid #6b7f8a;
     padding-right: 20px;
}
 .lp-ur-all-left-1 {
     float: left;
     width: 100%;
}
 .lp-ur-all-left-2 {
    /* float: left;
     */
    /* width: 50%;
     */
}
 .lp-ur-all-left-11 {
     float: left;
     width: 50%;
     font-size: 13px;
     padding-right: 14px;
     color: #4d5158;
}
 .lp-ur-all-left-12 {
     float: left;
     width: 50%;
     height: 6px;
     background: #dadada;
     margin-top: 7px;
     border-radius: 0px;
}
 .lp-ur-all-left-13 {
     width: 100%;
     background: #43a047;
     height: 6px;
     border-radius: 0px;
}
 .lp-ur-all-left-Good {
     width: 50%;
     background: #73ca14;
}
 .lp-ur-all-left-satis {
     width: 18%;
     background: #3dbbd0;
}
 .lp-ur-all-left-below {
     width: 20%;
     background: #ca7224;
}
 .lp-ur-all-left-poor {
     width: 5%;
     background: #de382c;
}
 .lp-ur-all-right {
     float: left;
     width: 60%;
     padding: 2px 20px;
}
 .lp-ur-all-right h5 {
     font-family: 'Montserrat', sans-serif;
     font-weight: 500;
     font-size: 18px;
     padding-bottom: 20px;
}
 .lp-ur-all-right p {
}
 .lp-ur-all-right p span {
     background: #55bf15;
     font-size: 34px;
     color: #fff;
     font-weight: 600;
     padding: 8px;
     border-radius: 5px;
     vertical-align: sub;
     margin-right: 15px;
}
 .lp-ur-all-right p span i {
     font-size: 20px;
     vertical-align: text-top;
}
 .lp-ur-all-rat {
}
 .lp-ur-all-rat h5 {
     padding: 15px 0px 5px 0px;
     background: #fff;
     font-weight: 700;
     font-size: 18px;
     text-transform: uppercase;
}
 .lp-ur-all-rat ul {
     margin-bottom: 0px;
}
 .lp-ur-all-rat ul li {
     position: relative;
     overflow: hidden;
     border-bottom: 1px solid #e2e2e2;
     padding-top: 15px;
     padding-bottom: 5px;
}
 .lr-user-wr-img {
     float: left;
    /* width: 10%;
     */
     display: inline-block;
}
 .lr-user-wr-img img {
     width: 42px;
}
 .lr-user-wr-con {
     float: left;
     width: 90%;
     display: inline-block;
     padding: 0px 20px;
}
 .lr-user-wr-con h6 {
     line-height: 36px;
     font-size: 18px;
}
 .lr-user-wr-con p {
     font-size: 13px;
     color: #21344c;
}
 .lr-revi-date {
     font-size: 13px;
     color: #828282;
}
 .lr-user-wr-con h6 span {
     background: #55bf15;
     font-size: 15px;
     color: #fff;
     font-weight: 600;
     padding: 4px 4px;
     border-radius: 4px;
     vertical-align: top;
     margin-left: 6px;
}
 .lr-user-wr-con h6 span i {
     font-size: 10px;
     vertical-align: text-top;
}
 .lr-user-wr-con ul {
     padding: 0px;
     position: relative;
     overflow: hidden;
}
 .lr-user-wr-con ul li {
     list-style-type: none;
     display: inline-block;
     padding-right: 15px;
     padding-top: 0px;
     border: 0px;
}
 .lr-user-wr-con ul li a {
     color: #333;
     font-size: 14px;
}
 .lr-user-wr-con ul li a span {
     padding-right: 7px;
     color: #888;
     font-size: 12px;
}
 .lr-user-wr-con ul li a i {
}
 .list-pg-write-rev {
     position: relative;
     overflow: hidden;
}
 .list-pg-write-rev form input {
     height: 45px;
     position: relative;
     padding: 15px 24px;
     box-sizing: border-box;
     box-shadow: none;
     border: 1px solid #e8e8e8;
     text-indent: 0;
     line-height: 12px;
     -webkit-transition: border-color .4s, color .4s;
     transition: border-color .4s, color .4s;
    /* -webkit-appearance: none;
     */
     width: 100%;
     font-size: 14px;
     background: #fff;
}
 .list-pg-write-rev form label {
     top: 14px;
}
 .list-pg-write-rev form textarea {
     height: 100px;
     position: relative;
     padding: 15px 24px;
     box-sizing: border-box;
     box-shadow: none;
     border: 1px solid #e8e8e8;
     text-indent: 0;
     line-height: 12px;
     -webkit-transition: border-color .4s, color .4s;
     transition: border-color .4s, color .4s;
    /* -webkit-appearance: none;
     */
     width: 100%;
     font-size: 14px;
     background: #fff;
}
 .list-pg-guar {
}
 .list-pg-guar ul {
     margin-bottom: 0px;
}
 .list-pg-guar ul li {
     border-bottom: 1px solid #e2e2e2;
     padding: 12px 0px 5px 0px;
}
 .list-pg-guar ul li:nth-child(1) {
     padding: 5px 0px 5px 0px;
}
 .list-pg-guar ul li:nth-child(3) {
     border-bottom: 0px solid #e2e2e2;
     padding-bottom: 5px;
}
 .list-pg-guar ul li h4 {
     font-size: 16px;
     padding-bottom: 5px;
}
 .list-pg-guar ul li p {
     line-height: 18px;
     font-size: 13px;
}
 .list-pg-guar-img {
     display: inline-block;
     float: left;
     height: 100%;
     margin-right: 15px;
     margin-bottom: 8px;
}
 .list-pg-guar-img img {
}
 .list-pg-btn {
     width: 100%;
     font-size: 14px;
     height: 45px;
     line-height: 45px;
}
 .pglist-p-com-ti-right {
}
 .pglist-p-com-ti-right h3 {
     background: #20334c;
     color: #fff;
     font-size: 15px;
}
 .pglist-p-com-ti-right h3 span {
     color: #c7c7c7;
     font-size: 15px;
}
 .pg-list-user-pro {
     background: url('../images/profile-bg.jpg') no-repeat;
     height: 100px;
     background-size: cover;
}
 .pg-list-user-pro img {
    /* display: table;
     */
    /* margin: 0 auto;
     */
     position: relative;
    /* left: 40%;
     */
     margin-top: 72px;
     margin-left: 41%;
}
 .list-pg-upro {
     text-align: center;
     padding-top: 30px;
}
 .list-pg-upro h5 {
     font-size: 16px;
}
 .list-pg-upro p {
     padding-bottom: 5px;
     font-size: 15px;
}
 .list-pg-upro a {
     background: #f44336;
}
 .list-pg-map {
}
 .list-pg-map iframe {
     height: 180px;
     width: 100%;
     border: 0px;
}
 .list-pg-oth-info {
}
 .list-pg-oth-info ul {
}
 .list-pg-oth-info ul li {
     border-bottom: 1px solid #e2e2e2;
     padding: 10px 0px;
}
 .list-pg-oth-info ul li:last-child {
     border-bottom: 0px solid #e2e2e2;
     padding-bottom: 0px;
}
 .list-pg-oth-info ul li span {
     float: right;
     text-align: right;
     background: #f7f8fa;
    /* color: #fff;
     */
     border-radius: 5px;
     padding: 0px 5px;
     border: 1px solid #e2e2e2;
     font-size: 12px;
}
 .green-bg {
     background: #55bf15 !important;
     color: #fff;
}
 .list-mig-like {
}
 .list-mig-like-com {
     position: relative;
     border-radius: 10px;
     margin-bottom: 20px;
     background: #14addb;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .list-mig-lc-img {
}
 .list-mig-like-com:hover img {
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
     opacity: 0.5;
}
 .list-mig-lc-img img {
     width: 100%;
     border-radius: 5px;
}
 .list-mig-like-com:before {
     content: '';
     position: absolute;
     background: linear-gradient(to top, rgba(0, 0, 0, 0.82) 10%, rgba(84, 84, 84, 0.35) 80%);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
     border-radius: 5px;
}
 .list-mig-lc-con {
     position: absolute;
     width: 100%;
     margin-top: -125px;
     padding: 20px 20px 0px 20px;
     display: block;
}
 .list-mig-lc-con2 {
     margin-top: -90px;
}
 .list-mig-lc-con h5 {
     font-size: 18px;
     color: #fff;
     padding-top: 10px;
     padding-bottom: 5px;
     white-space: nowrap;
     text-overflow: ellipsis;
     overflow: hidden;
}
 .list-mig-lc-con h6 {
     font-size: 14px;
     color: #fff;
     position: absolute;
     top: -20px;
    /* right: 0px;
     */
     border: 1px solid #fff;
     padding: 8px 10px 3px 10px;
     border-radius: 18px;
     margin-bottom: 5px;
     padding-bottom: 10px;
}
 .list-mig-lc-con p {
     color: #c1c1c1;
     font-size: 13px;
}
 .list-mi-pr {
     top: 15px;
}
 .list-ri-spec-tit {
}
 .list-ri-spec-tit h3 {
     padding: 5px 20px 18px 20px;
    /* background: #fff;
     */
     font-weight: 700;
     font-size: 16px;
     text-transform: uppercase;
     text-align: center;
     letter-spacing: 1px;
}
 .list-ri-spec-tit h3 span {
     font-weight: 700;
     font-size: 16px;
}
/*-------------------------------------------------------*/
/* HOW IT WORK 
/*-------------------------------------------------------*/
 .inn-pag-ban {
     position: relative;
     overflow: hidden;
     width: 75%;
     margin: 0 auto;
     padding: 75px 35px;
     color: #fff;
     text-align: center;
}
 .inn-pag-ban h4 {
     font-size: 20px;
}
 .inn-pag-ban h2 {
     font-size: 50px;
}
 .inn-pag-ban h5 {
     font-size: 14px;
}
 .how-com {
     padding-top: 20px;
}
 .how-com ul {
     margin-bottom: 0px;
}
 .how-com ul li {
     position: relative;
     overflow: hidden;
     padding-left: 95px;
     padding-bottom: 30px;
}
 .how-com ul li:last-child {
     padding-bottom: 0px;
}
 .how-com ul li img {
     text-align: center;
     margin-left: -95px;
     position: absolute;
     color: #fff;
}
 .how-com ul li h4 {
     font-size: 18px;
     font-family: 'Montserrat', sans-serif;
     font-weight: 500;
     text-transform: uppercase;
     padding-bottom: 4px;
}
 .how-com ul li p {
     margin-bottom: 0px;
     font-size: 15px;
}
 .inn-page-bg {
     margin-top: 60px;
     background: url(../images/inn-bg.jpg) no-repeat;
     background-size: cover;
     position: relative;
}
 .inn-page-bg:before {
     content: '';
     position: absolute;
     background: linear-gradient(to top, rgba(32, 52, 76, 0.64) 14%, rgba(0, 0, 0, 0.55) 66%);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
}
 .how-border {
     background: #fff;
     border: 1px solid #e2e2e2;
     border-radius: 2px;
     padding: 25px 25px 28px 25px;
}
/*-------------------------------------------------------*/
/* ABOUT US 
/*-------------------------------------------------------*/
 .p-about {
     background: #fff;
}
 .page-about {
}
 .page-about img {
     width: 100%;
}
 .page-about h3 {
}
 .page-about span {
     display: inline-block;
     padding: 20px 0px;
     font-size: 20px;
     font-style: italic;
     font-weight: 200;
     color: #a2a2a2;
}
 .page-about p {
     font-size: 16px;
}
 .page-about a {
     margin-top: 10px;
     width: 200px;
}
 .p-about-count {
     background: #253d52;
     padding: 0px;
     padding: 40px 0px;
}
 .page-about-count {
     text-align: center;
     color: #fff;
     border-right: 1px solid #30485d;
}
 .page-about-count-no-bor {
     border: 0px;
}
 .page-about-count span {
     font-size: 45px;
     color: #FFEB3B;
     text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.62);
}
 .page-about-count h4 {
     font-size: 16px;
     color: #ffffff;
     font-weight: 100;
     text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.62);
     text-transform: uppercase;
     font-weight: 600;
     padding-bottom: 20px;
}
 .page-about-count p {
     color: #aba9a9;
    /* font-weight: 600;
     */
}
/*-------------------------------------------------------*/
/* CONTACT US 
/*-------------------------------------------------------*/
 .con-page {
     background: url(../images/con-bg.jpg) no-repeat left center;
     background-attachment: fixed;
     background-size: 40%;
     position: relative;
     overflow: hidden;
}
 .con-page-ri {
     width: 60%;
     float: right;
     padding: 100px;
     padding-top: 150px;
     background: #f3f3f3;
}
 .con-com {
     border: 1px solid #e0e0e0;
     padding: 25px;
     margin-bottom: 25px;
     background: #fff;
}
 .con-com h4 {
     font-size: 24px;
     padding-bottom: 10px;
     margin-top: 25px;
}
 .con-com p {
     font-size: 16px;
}
 .con-com span img {
     width: 20px;
     margin-right: 15px;
}
 .con-com span {
     font-size: 16px;
     display: block;
     padding-top: 5px;
}
 .foot-soc {
}
 .foot-soc ul {
     padding: 0px;
     display: inline-block;
     position: relative;
     width: 100%;
     margin-bottom: 0px;
     margin-top: 0px;
}
 .foot-soc ul li {
     list-style-type: none;
     float: left;
     margin-right: 5px;
     margin-bottom: 5px;
}
 .foot-soc ul li i {
     width: 32px;
     height: 32px;
     text-align: center;
     color: #ffffff;
     padding: 8px;
}
 .sh1 {
     background: #4c4c4c;
}
 .con-tit-top-o {
     margin-top: 0px !important;
}
 .cpn-pag-form {
    /* margin-top: 20px;
     */
}
 .cpn-pag-form form {
    /* background: #fff;
     */
    /* padding: 25px;
     */
    /* border-radius: 4px;
     */
    /* box-shadow: 0px 16px 40px -10px rgb(0, 0, 0);
     */
    /* border-bottom: 5px solid #d6c492;
     */
}
 .cpn-pag-form form h3 {
    /* color: #FF5722;
     */
    /* font-size: 28px;
     */
    /* text-align:center;
     */
}
 .cpn-pag-form form p {
    /* text-align: center;
     */
     padding-top: 7px;
     margin-bottom: 20px;
}
 .cpn-pag-form form input, textarea {
     height: 45px;
     position: relative;
     padding: 15px 24px;
     box-sizing: border-box;
     box-shadow: none;
     border: 1px solid #e8e8e8;
     text-indent: 0;
     line-height: 12px;
     -webkit-transition: border-color .4s, color .4s;
     transition: border-color .4s, color .4s;
    /* -webkit-appearance: none;
     */
     width: 100%;
     font-size: 14px;
     background: #fff;
}
 .cpn-pag-form form textarea {
     height: 75px;
}
 .con-pag-map iframe {
     width: 100%;
     border: 0px;
     margin-top: 15px;
}
 .con-com-mar-bot-o {
     margin-bottom: 0px !important;
}
 .cpn-pag-form label {
     top: 14px;
}
/*-------------------------------------------------------*/
/* BLOG 
/*-------------------------------------------------------*/
 .blog-single {
     border: 1px solid #e4e4e4;
     padding: 15px 0px;
     margin-bottom: 20px;
}
 .blog-img {
}
 .blog-img img {
     width: 100%;
}
 .page-blog {
}
 .page-blog h3 {
     font-size: 28px;
}
 .page-blog span {
     font-size: 16px;
     padding: 12px 0px;
     display: inline-block;
     color: #888;
}
 .page-blog p {
     padding-bottom: 10px;
}
 .page-blog a {
     width: 200px;
}
 .share-pad-bot {
     padding-bottom: 10px;
}
 .blog-comment {
}
 .blog-comment h3 {
     color: #333;
     font-family: 'Montserrat', sans-serif;
     font-weight: 500;
     font-size: 18px;
     text-transform: uppercase 
}
 .pg-re-rat {
     padding: 1px 0px 0px 61px;
}
 .pg-revi-re {
     position: relative;
     overflow: hidden;
     padding-bottom: 10px;
     padding-top: 5px;
}
 .pg-revi-re img {
     width: 45px;
     height: 45px;
     float: left;
     margin-right: 15px;
}
 .pg-revi-re p {
     color: #333;
     font-family: 'Lato', sans-serif;
     font-weight: 600;
}
 .pg-revi-re p span {
     color: #a0a0a0;
    /* text-transform: capitalize;
     */
     padding-left: 5px;
}
 .span-none {
}
 .span-none span {
     display: none;
}
 .list-grid-rig-pad {
     padding-right: 30px !important;
     padding-top: 30px;
}
/*-------------------------------------------------------*/
/* CUSTOMER REVIEWS 
/*-------------------------------------------------------*/
 .cus-rev {
     border: 1px solid #dcdcdc;
     padding: 20px;
     margin-bottom: 30px;
}
 .cus-rev p:nth-child(2){
}
 .cus-re-com {
     position: relative;
     overflow: hidden;
     border-top: 1px solid #dcdcdc;
     padding-top: 20px;
     margin-top: 20px;
}
 .cus-re-com img {
     width: 45px;
     height: 45px;
     float: left;
     margin-right: 15px;
}
 .cus-re-com h4 {
}
 .cus-re-com span {
}
/*-------------------------------------------------*/
/* PRE LOADING 
/*-------------------------------------------------*/
 #preloader {
     position: fixed;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-color: #fff;
    /* change if the mask should have another color then white */
     z-index: 99999;
    /* makes sure it stays on top */
}
 #status {
     width: 200px;
     height: 200px;
     position: absolute;
     left: 50%;
    /* centers the loading animation horizontally one the screen */
     top: 50%;
    /* centers the loading animation vertically one the screen */
     background-image: url(../images/preloader.gif);
    /* path to your loading animation */
     background-repeat: no-repeat;
     background-position: center;
     margin: -100px 0 0 -100px;
    /* is width and height divided by two */
}
/****** Style Star Rating Widget *****/
 .rating {
     border: none;
     float: left;
     height: 48px;
     overflow: hidden;
}
 .rating > input {
     display: none;
}
 .rating > label:before {
     margin: 5px;
     font-size: 22px;
     font-family: FontAwesome;
     display: inline-block;
     content: "\f005";
     border: 0px !important;
}
 .rating > label:after {
     background: none !important;
     border: 0px !important;
}
 .rating > .half:before {
     content: "\f089";
     position: absolute;
     border: 0px;
}
 .rating > label {
     color: #ddd;
     float: right;
}
 .half {
     display: none !important;
}
/*-------------------------------------------------*/
/* ELEMENTS 
/*-------------------------------------------------*/
 .pg-elem {
     border: 1px solid #e4e4e4;
     padding: 20px;
     position: relative;
     overflow: hidden;
     margin-bottom: 30px;
     background: #fff;
     padding: 25px;
     border-radius: 4px;
     box-shadow: 0px 16px 25px -22px rgb(0, 0, 0);
     border-bottom: 2px solid #d6c492;
}
 .pg-elem h3 {
     padding-bottom: 10px;
}
 .pg-elem span {
}
 .pg-elem-inn {
     margin-top: 20px;
}
 .ele-btn {
}
 .ele-btn a {
     margin-right: 5px;
     margin-bottom: 5px;
}
 .icon-container .icon-preview {
     height: 120px;
     text-align: center;
}
 .icon-container i {
     font-size: 3em;
     margin-bottom: 10px;
}
 .icon-container span {
     display: block;
}
 .pg-ele-tab {
     padding-bottom: 15px;
     margin-bottom: 15px;
}
/*-------------------------------------------------*/
/* = DASHBOARD 
/*-------------------------------------------------*/
/*-------------------------------------------------------*/
/* DASHBOARD 
/*-------------------------------------------------------*/
 .tz {
     position: relative;
     overflow: hidden;
     width: 100%;
     background: #eaedef;
    /* margin-top: 100px;
     */
     padding: 100px 50px;
}
 .tz-l {
     float: left;
     width: 20%;
}
 .tz-2 {
     float: left;
     width: 58%;
     position: relative;
     overflow: hidden;
     background: #fff;
     border: 1px solid #dadada;
    /* margin-bottom: 25px;
     */
     box-shadow: 0px 2px 4px rgba(224, 224, 224, 0.8);
     border-radius: 4px;
     margin-left: 12px;
     margin-right: 12px;
}
 .tz-3 {
     float: left;
     width: 20%;
     position: relative;
     overflow: hidden;
     background: #fff;
     border: 1px solid #dadada;
    /* margin-bottom: 25px;
     */
     box-shadow: 0px 2px 4px rgba(224, 224, 224, 0.8);
     border-radius: 4px;
}
 .tz-l-1 {
     position: relative;
     overflow: hidden;
     background: #fff;
     border: 1px solid #dadada;
    /* margin-bottom: 25px;
     */
     box-shadow: 0px 2px 4px rgba(224, 224, 224, 0.8);
     border-radius: 4px;
}
 .tz-l-1 ul {
     padding: 0px;
}
 .tz-l-1 ul li {
	color: #60676b;
    list-style-type: none;
    text-align: center;
    font-size: 14px;
    font-weight: 500;
}
 .tz-l-1 ul li span {
     display: block;
     font-size: 32px;
     font-weight: 500;
     line-height: 30px;
     color: #21252b;
}
 .tz-l-1 ul li:nth-child(1) {
     width: 100%;
     float: left;
}
 .tz-l-1 ul li:nth-child(1) img {
     width: 100%;
}
 .tz-l-1 ul li:nth-child(2) {
     width: 50%;
     float: left;
     padding: 20px 10px;
    /* text-align: center;
     */
}
 .tz-l-1 ul li:nth-child(3) {
     width: 50%;
     float: left;
     padding: 20px 10px;
}
 .tz-l-2 {
     position: relative;
     overflow: hidden;
     background: #fff;
     border: 1px solid #dadada;
     padding: 20px;
     margin-top: 12px;
     box-shadow: 0px 2px 4px rgba(224, 224, 224, 0.8);
     border-radius: 4px;
}
 .tz-l-2 ul {
     padding: 0px;
}
 .tz-l-2 ul li {
     border-bottom: 1px solid #eaedef;
     list-style-type: none;
}
 .tz-l-2 ul li:last-child {
     border-bottom: 0px solid #dcdcdc;
     padding: 12px 0px 0px 0px;
}
 .tz-l-2 ul li a {
     color: #333;
     padding: 12px 0px;
     display: block;
}
 .tz-l-2 ul li a:hover {
     color: #333;
     padding-left: 8px;
     background: #eaedef;
     padding-left: 12px;
}
 .tz-lma {
     color: #333;
     background: #eaedef;
     padding-left: 12px !important;
}
 .tz-l-2 ul li a img {
     width: 20px;
     margin-right: 8px;
}
 .tz-3 h4 {
     margin: 0px;
     background: #253d52;
     padding: 15px;
     color: #fff;
}
 .tz-3 ul {
     margin-bottom: 0px;
     padding: 20px;
     padding-left: 20px !important;
}
 .tz-3 ul li {
     border-bottom: 1px solid #dcdcdc;
     padding: 12px 0px;
}
 .tz-3 ul li a {
}
 .tz-3 ul li a img {
     float: left;
     width: 28px;
     height: 28px;
     border-radius: 50px;
     margin-right: 10px;
}
 .tz-3 ul li a h5 {
     color: #333;
     font-size: 15px;
     margin-top: 0px;
     text-overflow: ellipsis;
     white-space: pre;
     overflow: hidden;
     text-transform: capitalize;
     margin-bottom: 0px;
}
 .tz-3 ul li a p {
     padding-left: 40px;
     margin-bottom: 0px;
     color: #969595;
     font-size: 12px;
     line-height: 18px;
}
 .tz-3 ul li:last-child {
     border-bottom: 0px solid #dcdcdc;
     padding: 12px 0px 0px 0px;
}
 .tz-2-com {
}
 .tz-2-com h4 {
     margin: 0px;
     background: #253d52;
     padding: 15px;
     color: #fff;
}
 .tz-2-main {
}
 .tz-2-main-com {
     padding: 20px;
     position: relative;
     overflow: hidden;
}
 .tz-2-main-com img {
     display: block;
    /* width: 80px;
     */
     margin: 0 auto;
    /* padding-bottom: 20px;
     */
     border: 1px solid #eaedef;
     padding: 12px;
     border-radius: 5px;
     margin-bottom: 20px;
}
 .tz-2-main-com span {
     font-size: 24px;
     font-weight: 600;
     font-family: 'Quicksand', sans-serif;
}
 .tz-2-main-com h2 {
     color: #14addb;
     font-size: 72px;
}
 .tz-2-main-com ul {
     margin-bottom: 0px;
    /* border-top: 1px solid #eaedef;
     */
     margin-top: 10px;
     padding: 0px;
}
 .tz-2-main-com ul li {
     text-align: left;
     border-bottom: 1px solid #eaedef;
     padding: 12px 0px;
     list-style-type: none;
     background: url('../images/icon/tz-arrow.png') no-repeat center left;
     background-size: 10px;
     text-overflow: ellipsis;
     white-space: inherit;
     overflow: hidden;
}
 .tz-2-main-com ul li a {
    /* text-align: left;
     */
     display: block;
     color: #333;
     font-size: 13.5px;
     padding-left: 14px;
}
 .tz-2-main-com ul li a:hover {
     padding-left: 10px;
}
 .tz-done {
     font-size: 12px !important;
     background: #3e8e41;
     color: #fff;
     padding: 2px 4px;
     border-radius: 3px;
     text-transform: lowercase;
     margin-left: 5px;
}
 .tz-done:hover {
     color: #fff;
}
 .tz-not-done {
     font-size: 12px !important;
     background: #f4a321;
     color: #fff;
     padding: 2px 4px;
     border-radius: 3px;
     text-transform: lowercase;
     margin-left: 5px;
}
 .tz-2-main-1 {
     position: relative;
     overflow: hidden;
     float: left;
     width: 33.3%;
     text-align: center;
}
 .tz-2-main-2 {
     border: 1px solid #eaedef;
     padding: 20px;
}
 .tz-2-main-com-table {
}
 .tz-2-main-com-table th {
     font-weight: 600;
     padding: 10px 4px;
}
 .tz-2-main-com-table tr {
     border-bottom: 1px solid #eaedef;
     line-height: 37px;
     padding: 10px;
}
 .tz-2-main-com-table tr td {
     padding: 16px 4px 13px 4px;
}
 .tz2-form-com {
}
 .tz2-form-com form {
     padding: 35px 50px 35px 50px;
     background: #eaedef;
     margin-top: 15px;
}
 .tz2-form-com form input {
     border: 1px solid #e4e4e4;
     line-height: 44px;
     padding: 0px 25px;
     background: #fff;
     font-size: 14px;
}
 .tz2-form-com form input[type="submit"] {
     padding: 0px;
}
 .tz2-form-com form label {
     font-size: 14px;
     color: #646464;
}
 .tz2-form-pay {
}
 .full-btn {
     height: 45px;
     line-height: 45px;
	 background: #f74d40;
     background: linear-gradient(to top, #F44336, #fb5a4e);
     outline: none;
     font-size: 16px;
     display: block !important;
     color: #fff;
     font-weight: 600;
     font-family: 'Quicksand', sans-serif;
     text-transform: uppercase;
     text-align: center;
}
 .tz-pay-card {
     position: relative;
     overflow: hidden;
     border: 1px solid #eaedef;
     padding: 1px 10px;
}
 .tz-pay-card h5 {
     display: inline-block;
     padding: 10px 5px;
}
 .tz-pay-card img {
     width: 175px;
     border: 0px;
     display: inline-block;
     margin-bottom: 0px;
     float: right;
     padding: 0px;
}
 .tz2-form-pay ul li {
     background: none;
     padding: 5px 0px 12px 0px;
}
 .tz-pay-amount {
     float: right;
     color: #FFC107;
     font-size: 22px;
}
 .tz-down-pdf {
     border: 1px solid #c7c8c9;
     border-radius: 3px;
     padding: 4px 8px;
     color: #333;
}
 .tz-make-pay {
     border: 1px solid #c7c8c9;
     border-radius: 3px;
     padding: 4px 8px;
     color: #333;
}
 .tz-make-pay:hover {
     background: #3e8e41;
     color: #fff;
     border: 1px solid #317d34;
}
 .tz-mak-pay-bot {
     margin-top: 25px;
}
 .tz-mak-pay-bot p {
     color: #969595;
     font-size: 14px;
     line-height: 24px;
     font-weight: 400;
}
 .tz-mak-pay-bot a {
     font-size: 16px;
     text-transform: capitalize;
}
 .tz-mak-pay-bot a:hover {
     color: #fff;
}
 .tz-up-btn {
     display: inline-block;
     padding: 6px 12px;
     margin-bottom: 0;
     font-size: 14px;
     font-weight: normal;
     line-height: 1.42857143;
     text-align: center;
     white-space: nowrap;
     vertical-align: middle;
     -ms-touch-action: manipulation;
     touch-action: manipulation;
     cursor: pointer;
     -webkit-user-select: none;
     -moz-user-select: none;
     -ms-user-select: none;
     user-select: none;
     background-image: none;
     border: 1px solid transparent;
     border-radius: 4px;
     float: left;
     height: 3rem;
     line-height: 3rem;
     height: 45px;
     padding: 10px 25px;
     background: #14addb;
     color: #fff;
}
 .tz-file-upload {
     padding: 0 0.75rem;
}
 .tz-com-p {
}
 .tz-com-p h5 {
     font-size: 20px;
}
 .tz-com-p p {
     color: #969595;
     font-size: 14px;
     line-height: 24px;
     font-weight: 500;
}
 .ds-boar-title {
}
 .ds-boar-title h2 {
     font-size: 32px;
     color: #14addb;
     padding-bottom: 10px;
}
 .ds-boar-title p {
}
 .tz-db-table {
}
 .tz-db-table table {
}
 .tz-db-table table tr {
     color: #969595;
}
 .tz-db-table table tr td {
     font-size: 15px;
     color: #333;
     padding: 14px 14px 14px 0px;
}
 .tz-db-table table tr th {
     font-size: 16px;
     color: #333;
     padding: 14px 14px 14px 0px;
}
 .tz-db-table-bor {
}
 .tz-db-table-bor table tr {
}
 .db-list-com {
     padding: 20px;
     position: relative;
     overflow: hidden;
}
 .db-list-rat {
     background: #ffe500;
     padding: 4px;
     font-weight: 600;
     color: #000;
     right: 15px;
     top: 0px;
     font-size: 14px;
     border-radius: 2px;
}
 .db-list-ststus {
     background: #76cce6;
     padding: 4px;
     font-weight: 600;
     color: #000;
     right: 15px;
     top: 0px;
     font-size: 14px;
     border-radius: 2px;
}
 .db-list-ststus-na {
     background: #e8e8e8;
     padding: 4px;
     font-weight: 600;
     color: #000;
     right: 15px;
     top: 0px;
     font-size: 14px;
     border-radius: 2px;
}
 .db-list-edit {
     background: #e8e8e8;
     padding: 4px;
     font-weight: 600;
     color: #000;
     right: 15px;
     top: 0px;
     font-size: 14px;
     border-radius: 2px;
}
 .db-list-edit:hover {
     background: #76cce6;
}
 .db-mak-pay-bot {
     margin-top: 25px;
}
 .db-mak-pay-bot p {
     color: #969595;
}
 .tz-file-upload {
     padding: 0 0.75rem;
}
 .tz-up-btn {
     display: inline-block;
     padding: 6px 12px;
     margin-bottom: 0;
     font-size: 14px;
     font-weight: normal;
     line-height: 1.42857143;
     text-align: center;
     white-space: nowrap;
     vertical-align: middle;
     -ms-touch-action: manipulation;
     touch-action: manipulation;
     cursor: pointer;
     -webkit-user-select: none;
     -moz-user-select: none;
     -ms-user-select: none;
     user-select: none;
     background-image: none;
     border: 1px solid transparent;
     border-radius: 4px;
     float: left;
     height: 3rem;
     line-height: 3rem;
     height: 45px;
     padding: 8px 25px 10px 25px;
     background: #eac610;
     color: #fff;
}
 .tz-up-btn span {
     color: #fff;
}
 .db-mak-pay-bot a {
     font-size: 14px;
}
 .tz-mess {
}
 .tz-mess ul {
     margin-bottom: 0px;
}
 .tz-mess ul li {
     border-bottom: 1px solid #dcdcdc;
     padding: 30px 0px 10px 0px;
}
 .tz-mess ul li img {
}
 .tz-mess ul li h5 {
     color: #333;
     font-size: 18px;
     vertical-align: top;
}
 .tz-mess ul li h5 img {
     float: left;
     width: 50px;
     height: 50px;
     border-radius: 50px;
     margin-right: 10px;
     margin-right: 22px;
}
 .tz-mess ul li h5 span {
     font-size: 12px;
     color: #fff;
     padding: 0px 5px 2px 5px;
     border-radius: 35px;
     margin-top: 3px;
     position: absolute;
     margin-left: 5px;
}
 .tz-mess ul li p {
     padding-left: 72px;
     padding-top: 15px;
     color: #969595;
}
 .tz-msg-read {
     background: #607D8B;
}
 .tz-msg-un-read {
     background: #4CAF50;
}
 .hid-msg {
     position: relative;
     overflow: hidden;
     margin-left: 72px;
     display: none;
}
 .hid-msg a {
}
 .hid-msg a i {
     border: 1px solid #eaedef;
     padding: 3px 3px;
     border-radius: 5px;
     color: #333;
     margin-right: 12px;
}
 .view-msg {
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .view-msg:hover .hid-msg {
     display: block;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .hide-box {
     display: none;
}
 .hide-box label {
     left: 18px;
     top: 12px;
}
 .tz-revi-star {
}
 .tz-revi-star i {
     font-size: 12px;
     color: #64addb;
     margin-right: 2px;
}
 .switch label {
     cursor: pointer;
     color: #636363;
     font-weight: 500;
}
 .tz-2-main-1 p {
     color: #969595;
     font-size: 16px;
}
/*-------------------------------------------------------*/
/* REGISTER AND LOGIN 
/*-------------------------------------------------------*/
 .tz-register {
     background: url(../images/face.jpg) #e6e6e6;
     position: relative;
     overflow: hidden;
     padding-top: 50px;
}
 .tz-register::before {
     content: '';
     position: absolute;
     background: rgba(33, 48, 59, 0.52);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
     border-radius: 5px;
}
 .tz-login {
     background: url(../images/banner5.jpg) #3F51B5;
     position: relative;
     overflow: hidden;
     padding-top: 50px;
     width: 100%;
     padding-bottom: 50px;
     background-size: cover;
     background-attachment: fixed;
}
 .tz-login::before {
     content: '';
     position: absolute;
     background: rgba(0, 0, 0, 0.21);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
     border-radius: 5px;
}
 .tz-regi-form {
     margin: 0 auto;
     width: 45%;
     background: #fff;
     padding: 60px 50px 70px 50px;
     margin-top: 70px;
     margin-bottom: 70px;
     border-radius: 5px;
     text-align: center;
     position: relative;
     box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.8);
}
 .tz-regi-form input {
     padding: 10px;
     border: 1px solid #c9c9c9;
     height: 45px;
     font-size: 16px;
}
 .tz-regi-form textarea {
     padding: 10px;
     border: 1px solid #c9c9c9;
     height: 100px;
}
 .tz-regi-form input[type="submit"] {
     padding: 0px;
     font-size: 18px !important;
}
 .tz-regi-form label {
}
 .tz-regi-form h4 {
     margin-top: 0px;
     font-size: 42px;
     margin-bottom: 8px;
}
 .tz-regi-form h4 span {
     color: #ff6f6f;
     font-size: 42px;
     font-weight: 600;
}
 .tz-regi-form form {
     position: relative;
     overflow: hidden;
     padding: 20px;
}
 .tz-regi-form p {
     font-size: 18px;
     margin-bottom: 0px;
}
 .tz-regi-form p a {
     color: #2c649e;
     font-size: 18px;
}
 .full-btn {
     width: 100%;
     display: block;
}
 .soc-login {
     position: relative;
     overflow: hidden;
     border-top: 1px solid #dcdcdc;
     margin-top: 15px;
     padding-top: 15px;
}
 .soc-login h4 {
     text-align: center;
     padding-bottom: 15px;
}
 .soc-login ul {
     padding: 0px;
     margin: 0px;
}
 .soc-login ul li {
     list-style-type: none;
     float: left;
     width: 33.333%;
     padding: 5px;
}
 .soc-login ul li a {
     display: block;
     color: #fff;
     padding: 7px 18px;
     text-align: center;
     border-radius: 2px;
}
 .soc-login ul li:nth-child(1) a {
     background: #3b5998;
}
 .soc-login ul li:nth-child(2) a {
     background: #00aced;
}
 .soc-login ul li:nth-child(3) a {
     background: #d34836;
}
 .soc-login ul li a i {
     padding-right: 5px;
}
/*-------------------------------------------------*/
/* = ADMIN PAGES 
/*-------------------------------------------------*/
 .tz-2-admin {
     width: 100%;
     margin: 0px;
}
 .tz-2-main-admin {
     width: 25%;
}
 .sb1 {
     background: #ffffff;
     position: fixed;
     width: 100%;
     top: 0px;
     z-index: 9999;
     box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.22);
}
 .sb1 h3 {
     color: #fff;
     font-weight: 700;
     font-size: 16px;
     text-transform: uppercase;
}
 .sb1-1 {
}
 .sb1-2 {
     float: right;
}
 .sb1-2 button {
     background: #2d3a40;
     border: 0px;
     color: #fff !important;
     font-weight: 600;
     text-transform: uppercase;
     font-size: 12px;
     padding: 20px;
     border-radius: 0px;
}
 .sb2 {
     background: #ffffff;
     margin-top: 59px;
}
 .sb2-1 {
     float: left;
     width: 20%;
     background: #ffffff;
     color: #fff;
     height: 100%;
     position: absolute;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .sb2-1 a {
     color: #494b4b;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .sb2-1 a:hover {
     color: #fff;
     padding-left: 30px;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
     text-decoration: none;
}
 .sb2-12 {
     position: relative;
     overflow: hidden;
     padding: 15px;
     background: #ffffff;
}
 .sb2-12 ul {
     padding: 10px 0px;
     margin: 0px;
     position: relative;
     overflow: hidden;
}
 .sb2-12 ul li {
     float: left;
     display: inline-block;
}
 .sb2-12 ul li:nth-child(1) {
     width: 20%;
}
 .sb2-12 ul li:nth-child(2) {
     width: 70%;
     padding: 0px 7px;
}
 .sb2-12 ul li:nth-child(3) {
     width: 10%;
}
 .sb2-12 ul li img {
     width: 30px;
     border-radius: 50%;
}
 .sb2-12 ul li h5 {
     margin-bottom: 0px;
     margin-top: 0px;
     font-size: 14px;
}
 .sb2-12 ul li h5 span {
     display: block;
     font-size: 12px;
     color: #989fa2;
     padding-top: 3px;
}
 .sb2-13 {
     background: #ffffff;
}
 .sb2-13 ul {
    /* padding: 20px;
     */
     margin-left: 0px;
     padding-left: 0px;
     margin-bottom: 0px;
     box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0), 0 1px 5px 0 rgba(0, 0, 0, 0), 0 3px 1px -2px rgba(0, 0, 0, 0);
     margin-top: 0px;
}
 .sb2-13 ul li {
     list-style-type: none;
    /* border-bottom: 1px solid #303b40;
     */
    /* padding: 3px 20px;
     */
}
 .sb2-13 ul li a {
     display: block;
     font-size: 13.5px;
     padding: 10px 0px;
     border-bottom: 1px solid #e3e8ea;
     padding: 12px 20px;
     background: #ffffff;
}
 .sb2-13 ul li a:after {
     font-family: FontAwesome;
     content: "\f105";
     font-size: 16px;
     display: block;
     position: absolute;
     margin-top: -15px;
     right: 20px;
     font-size: 12px;
     line-height: 1;
     -webkit-font-smoothing: antialiased;
     -moz-osx-font-smoothing: grayscale;
     -webkit-transform: rotate(0deg);
     -ms-transform: rotate(0deg);
     -o-transform: rotate(0deg);
     transform: rotate(0deg);
     -webkit-transition: -webkit-transform .2s ease-in-out;
     -o-transition: -webkit-transform .2s ease-in-out;
     transition: -webkit-transform .2s ease-in-out;
}
 .sb2-13 ul li a:hover:after {
     -webkit-transform: rotate(90deg);
     -ms-transform: rotate(90deg);
     -o-transform: rotate(90deg);
     transform: rotate(90deg);
}
 .sb2-13 ul li a:focus:after {
     -webkit-transform: rotate(90deg);
     -ms-transform: rotate(90deg);
     -o-transform: rotate(90deg);
     transform: rotate(90deg);
}
 .sb2-13 ul li a:hover {
     background: #57666d;
}
 .sb2-13 ul li a:focus {
     background: #57666d;
     color: #fff;
}
 .menu-act {
     background: #57666d;
}
 .sb2-13 ul li a i {
     margin-right: 8px;
     width: 16px;
}
 .sb2-2 {
     float: left;
     width: 80%;
     padding: 40px;
     margin-left: 20%;
     background: #e3e8ea;
}
 .sb2-2-1 {
     background: #fff;
     padding: 25px;
}
 .sb2-2-1 h2 {
     margin-top: 0px;
}
 .sb2-2-1 p {
}
 .sb2-2-1 table {
     width: 100%;
}
 .sb2-2-1 table tr {
}
 .sb2-2-1 table tr th {
}
 .sb2-2-1 table tr td {
}
 .sb2-2-1 table tr td a {
}
 .sb2-2-1-edit {
}
 .sb2-2-1-edit i {
     color: #FF5722;
}
 .sb2-2-add-blog textarea {
     width: 100%;
     display: block;
     border: 1px solid #ccc;
     border-radius: 4px;
     height: 200px;
}
/*-------------------------------------------------------*/
/* 2.LEFT MENU 
/*-------------------------------------------------------*/
 .left-sub-menu {
}
 .left-sub-menu ul {
    /* padding: 0px 0px 10px 40px;
     */
}
 .left-sub-menu ul li {
     list-style-type: none;
}
 .left-sub-menu ul li:last-child {
     border-bottom: 0px solid #303b40;
}
 .left-sub-menu ul li a {
     display: block;
     font-size: 13.5px;
     padding: 10px 48px;
}
 .left-sub-menu ul li a:hover {
     background: none;
     padding-left: 55px;
     color: #494b4b;
}
 .left-sub-menu ul li a:focus {
     background: none;
}
 .left-sub-menu ul li a:after {
     display: none;
}
 .sb2-2-2 {
     position: relative;
     overflow: hidden;
     margin-bottom: 15px;
}
 .sb2-2-2 ul {
     padding: 0px;
     margin-bottom: 0px;
}
 .sb2-2-2 ul li {
     list-style-type: none;
     float: left;
     padding-right: 5px;
}
 .sb2-2-2 ul li a {
     color: #495d65;
     vertical-align: middle;
}
 .sb2-2-2 ul li a i {
     padding-right: 2px;
}
 .active-bre:before {
     content: "/";
     padding: 0 5px;
     color: #333;
}
 .my-acc {
}
 .my-acc:hover {
     background: #4b5a61 !important;
}
 .my-acc:focus {
     background: #4b5a61 !important;
}
/*-------------------------------------------------------*/
/* 8. TAB AND SEARCH 
/*-------------------------------------------------------*/
 .tab-inn {
     padding: 25px;
}
 .tab-posi {
     position: relative;
     overflow: hidden;
}
 .top-menu-sty {
     width: 250px !important;
}
 .my-btn {
     color: #ffffff;
     background: #57666d;
     padding: 21px;
     line-height: 18px;
     font-weight: 700;
}
 .app-search {
     position: relative;
     margin: 12px 15px 8px 5px;
     font-size: 13px;
     color: #626773;
     padding-left: 20px;
     padding-right: 40px;
     background: transparent;
     border: 1px solid rgba(122, 125, 132, 0.15);
     box-shadow: none;
     border-radius: 30px;
     height: 36px;
     font-weight: 600;
     width: 100%;
}
 .app-search input {
     border: 0px !important;
    /* line-height: 7px !important;
     */
     height: 35px !important;
     color: #cecece;
}
 .app-search a {
     position: absolute;
     top: 6px;
     right: 16px;
     color: #7a7d84;
}
 .box-second-inn {
     margin-top: 30px;
}
 .mar-bot-20 {
     margin-bottom: 20px;
}
 .icon-container .icon-preview {
     height: 90px;
     text-align: center;
}
 .icon-container span {
     display: block;
}
 .icon-container i {
     font-size: 3em;
     margin-bottom: 10px;
}
 .tab-pad {
     padding-top: 20px !important;
}
 .tab-col {
     padding: 20px !important;
     color: #000;
}
 .top-not-cen {
     margin: 0 auto;
     display: table;
     padding-top: 5px;
}
 .btn-noti {
     width: 35px;
     height: 23px;
     top: 18px;
     display: initial !important;
     color: #000;
     font-size: 20px;
     margin-right: 20px;
}
 .btn-noti span {
     position: absolute;
     -webkit-transform: translateX(-50%);
     -ms-transform: translateX(-50%);
     transform: translateX(-50%);
     top: -8px;
     height: 14px;
     border-radius: 10px;
     min-width: 15px;
     background: #4CAF50;
     color: #fff;
     line-height: 14px;
     padding: 0px 2px;
     font-size: 11px;
     white-space: nowrap;
     -webkit-transform-origin: -10% center;
     -ms-transform-origin: -10% center;
     transform-origin: -10% center;
     font-family: tahoma;
     box-shadow: 0 0 0 1px #3d793f;
     text-align: center;
}
 .top-user-pro {
     padding: 18px 20px;
     color: #494b4b;
     float: right;
}
 .top-user-pro img {
     width: 25px;
     margin-right: 10px;
     border-radius: 35px;
     border: 2px solid #a1adb3;
}
 .top-user-pro i {
     margin-left: 5px;
}
 .page-back {
     float: right !important;
}
 .page-back a {
     background: #13addb;
     color: #fff !important;
     font-size: 12px;
     padding: 3px 8px;
     border-radius: 25px;
     font-weight: 600;
}
/*-------------------------------------------------------*/
/* 5. INNER PAGE TITLE 
/*-------------------------------------------------------*/
 .inn-title {
     padding: 20px 15px 10px 15px;
     background: #253d52;
}
 .inn-title h4 {
     font-weight: 700;
     padding-bottom: 10px;
     color: #fff;
     background: none;
     padding-left: 0px;
     padding-top: 0px;
}
 .txt-danger {
     color: #ea6c41;
}
 .inn-title p {
    /* padding-bottom: 10px;
     */
     color: #929292;
     margin-bottom: 0px;
     display: none;
}
/*-------------------------------------------------------*/
/* 7.DROPDOWN 
/*-------------------------------------------------------*/
 .drop-down-meta {
     position: absolute;
     right: 30px;
     padding: 3px;
     color: black;
     z-index: 999;
     top: 15px;
     background: #e3e8ea;
     width: 30px;
     height: 30px;
     border-radius: 25px;
}
 .drop-down-meta:hover {
     background: #29a0da;
     color: #fff;
}
 .box-inn-sp {
     background: #fff;
    /* padding: 25px;
     */
     border: 1px solid #e3e8ea;
     margin-bottom: 40px;
}
 .tab-inn {
}
 .tab-inn th {
     font-size: 13px;
     text-transform: uppercase;
}
 .tab-inn td {
     font-size: 14px;
     padding: 15px 8px 12px 8px !important;
}
 .tab-inn table {
     margin-bottom: 0px;
}
 .tab-inn table thead {
     background: #abbaab;
    /* fallback for old browsers */
     background: -webkit-linear-gradient(to bottom, #e3e6e3, #afbcaf);
    /* Chrome 10-25, Safari 5.1-6 */
     background: linear-gradient(to bottom, #e3e6e3, #afbcaf);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
 .split-row {
     width: 100%;
     position: relative;
    /* overflow: hidden;
     */
     display: block;
}
 .table-desi i {
     background: #8BC34A;
     color: #ffffff;
     padding: 5px 6px;
     border-radius: 2px;
     font-size: 13px;
     text-align: center;
     margin-right: 10px;
}
 .txt-success i {
     color: #ffffff;
     margin-right: 10px;
}
 .txt-danger {
     color: #ea6c41;
}
 .table-desi tbody tr td {
     color: #929292;
     padding: 15px 8px 12px 8px !important;
}
 .list-enq-name {
     display: block;
     font-weight: 700;
     color: #263238;
}
 .bot-sp-20 {
     margin-bottom: 20px;
}
 .ad-inn-page {
     margin: 30px 15px;
}
 .ad-mar-to-min {
     margin-top: 40px;
}
 .ad-mar-to-min form {
     margin-top: 0px;
}
 .ad-inn-page thead {
}
 .ad-inn-page th {
     padding: 12px !important;
}
 .ad-inn-page td {
     padding: 15px !important;
}
 .ad-inn-page tr {
}
 .ad-tab-inn {
     padding: 0px;
}
 .ad-inn-page i {
     color: #253d52;
     width: 20px;
     height: 20px;
     border: 1px solid #e3e8ea;
     text-align: center;
     border-radius: 4px;
     font-size: 12px;
     padding: 3px;
}
 .drop-down-meta-inn {
     top: 9px;
     right: 15px;
}
 .admin-pag-na {
     position: relative;
     overflow: hidden;
     padding-bottom: 35px;
}
 .admin-pag-na i {
     border: 0px;
     padding: 0px;
     width: inherit;
     height: inherit;
}
 .ad-noto-text {
}
 .ad-noto-text textarea {
     height: 120px;
     position: relative;
     padding: 15px 24px;
     box-sizing: border-box;
     box-shadow: none;
     border: 1px solid #e8e8e8;
     text-indent: 0;
     line-height: 12px;
     -webkit-transition: border-color .4s, color .4s;
     transition: border-color .4s, color .4s;
    /* -webkit-appearance: none;
     */
     width: 100%;
     font-size: 15px;
     background: #fff;
}
 .atab-menu {
     display: inline-block;
     cursor: pointer;
}
 .logo {
}
 .logo img {
     width: 100%;
}
 .tab-menu {
     display: none;
}
 .btn-close-menu {
     display: none;
     z-index: 999;
     background: #0e76a8;
     color: #fff;
     position: absolute;
     left: 240px;
     padding: 5px 8px;
     border-radius: 2px;
     top: 0px;
}
 .db-mak-sett-save {
     margin-top: 25px;
     padding: 0px 25px 25px 25px;
}
 .list-img {
}
 .list-img img {
     width: 28px;
     height: 28px;
     border-radius: 50px;
}
/*-------------------------------------------------------*/
/* DASHBOARD: INVOICE 
/*-------------------------------------------------------*/
 .invoice {
     position: relative;
     overflow: hidden;
     width: 100%;
     border: 1px solid #eaedef;
}
 .invoice:hover {
     box-shadow: 0px 0px 50px 7px rgba(150, 150, 150, 0.8);
}
 .invoice-1 {
     padding: 50px;
}
 .invoice-1-logo {
     margin-bottom: 60px;
}
 .invoice-1-logo img {
}
 .invoice-1-logo span {
     float: right;
     text-transform: uppercase;
     font-size: 50px;
     font-family: 'Quicksand', sans-serif;
     color: #2a2b33;
     font-weight: 700;
     line-height: 35px;
}
 .invoice-1-add {
     position: relative;
     overflow: hidden;
     margin-bottom: 50px;
}
 .invoice-1-add-left {
     float: left;
     width: 100%;
     margin-bottom: 40px;
}
 .invoice-1-add-left h3 {
}
 .invoice-1-add-left p {
}
 .invoice-1-add-left h5 {
}
 .invoice-1-add-right {
     float: left;
     padding: 20px;
     background: #fdfae9;
     border-radius: 4px;
    /* display: inline-block;
     */
     width: 100%;
}
 .invoice-1-add-right ul {
     margin-bottom: 0px;
}
 .invoice-1-add-right ul li {
}
 .invoice-1-add-right ul li span {
     float: left;
     width: 50%;
     color: #343c42;
}
 .invoice-1-tab {
}
 .invoice-1-tab table {
}
 .invoice-1-tab table th {
     text-transform: uppercase;
}
 .invoice-1-tab table td {
}
 .invo-sub {
     font-family: 'Quicksand', sans-serif;
     font-weight: 700;
     font-size: 24px !important;
}
 .invoice-2 {
     background: #fdfae9;
     padding: 50px;
}
 .invoice-price {
}
 .invoice-price th {
     text-transform: uppercase;
}
 #invo-date {
     font-family: 'Quicksand', sans-serif;
     font-weight: 700;
     font-size: 28px;
}
 #invo-tot {
     font-family: 'Quicksand', sans-serif;
     font-weight: 700;
     font-size: 28px;
     color: #F44336;
}
 .invoice-print {
     padding: 50px;
}
 .invoice-print a {
     margin-right: 10px;
     font-size: 14px;
     background: #20344c;
}
 .tz-invo-full {
     padding: 0px;
}
 .tz-invo-full1 {
     width: 100%;
     margin: 0px;
}
 .db-v2-list-form-inn-tit {
}
 .db-v2-list-form-inn-tit h5 {
     font-weight: 600;
     font-size: 20px;
     padding: 0px 8px;
     margin-top: 40px;
}
 .db-v2-pg-inp {
}
 .db-v2-pg-inp input {
     height: 45px !important;
}
 .v2-db-form-note {
     font-size: 13px;
}
 .v2-mar-top-40 {
     margin-top: 30px;
}
 .cat-v2-hom-list {
}
 .cat-v2-hom-list ul {
     margin-bottom: 0px;
}
 .cat-v2-hom-list ul li {
     float: left;
     width: 20%;
     text-align: center;
}
 .cat-v2-hom-list ul li a {
     background: #eef6f9;
     display: block;
     margin: 10px;
     text-align: center;
     padding: 28px 20px 20px 20px;
     border-radius: 2px;
     color: #273440;
     font-size: 16px;
     font-weight: 600;
     font-family: 'Quicksand', sans-serif;
     border: 1px solid #e8e8e8;
}
 .cat-v2-hom-list ul li a:hover {
     background: #01a0d8;
     color: #fff;
}
 .cat-v2-hom-list ul li a img {
     display: block;
     margin: 0 auto;
     margin-bottom: 10px;
}
/*-------------------------------------------------*/
/* = DROPDOWN MENU 
/*-------------------------------------------------*/
 .v3-top-menu {
     position: fixed;
     top: 0;
     width: 100%;
     height: 60px;
     border-top: 1px solid #ececec;
     background: #ffffff;
     z-index: 99;
     transition: all 1s;
     -webkit-box-shadow: 0 1px 3px #960;
     -moz-box-shadow: 0 1px 3px #960;
     box-shadow: 0 0px 10px 2px rgba(0, 0, 0, 0.47);
     border-bottom: 1px solid #ececec;
}
 .v3-menu {
     padding: 10px 0px;
     position: relative;
}
 .v3-m-1 {
     float: left;
     width: 20%;
}
 .v3-m-1 img {
     width: 85%;
}
 .v3-m-2 {
     float: left;
     width: 60%;
     padding: 5px 20px;
}
 .v3-m-2 ul {
     margin-bottom: 0px;
}
 .v3-m-2 ul li {
     float: left;
}
 .v3-m-2 ul li a {
     color: #333;
     padding: 10px 20px;
}
 .v3-m-3 {
     float: left;
     width: 20%;
}
 .dropdown-content {
     overflow: visible;
}
 #dropdown2 {
     left: 162px !important;
}
 #dropdown3 {
     left: 184px !important;
}
 .ed-sub-menu:after {
     content: "\f107";
     font-family: FontAwesome;
     padding: 5px 5px;
     position: relative;
     top: 0px;
     font-size: 14px;
     font-weight: 900;
}
 .ed-sub-drop-menu:after {
     content: "\f105";
     font-family: FontAwesome;
     padding: 5px 5px;
     position: relative;
     top: -5px;
     font-size: 14px;
     font-weight: 900;
     float: right;
}
 .v3-top-ri {
     padding: 8px 0px;
}
 .v3-top-ri ul {
     margin-bottom: 0px;
     float: right;
}
 .v3-top-ri ul li {
     float: left;
}
 .v3-top-ri ul li a {
     font-size: 15px;
     color: #fff;
     background-color: #01a0d8;
     border: 1px solid #058ab9;
     font-weight: 400;
     border-radius: 4px;
     padding: 6px 10px;
     margin-left: 7px;
}
 .v3-top-ri ul li a i {
     margin-right: 5px;
}
 .v3-add-bus {
}
 .v3-menu-sign {
     background-color: #01a0d8;
}
 .v3-mob-top-menu {
     display: none;
     position: fixed;
     top: 0;
     width: 100%;
     height: 60px;
     border-top: 1px solid #ececec;
     background: #ffffff;
     z-index: 9;
     transition: all 1s;
     -webkit-box-shadow: 0 1px 3px #960;
     -moz-box-shadow: 0 1px 3px #960;
     box-shadow: 0 0px 10px 2px rgba(0, 0, 0, 0.47);
     border-bottom: 1px solid #ececec;
}
 .v3-mob-menu {
}
 .v3-mob-m-1 {
     float: left;
}
 .v3-mob-m-1 img {
}
 .v3-mob-m-2 {
     float: right;
     padding: 8px 15px;
}
 .v3-mob-m-2 ul {
}
 .v3-mob-m-2 ul li {
}
 .v3-mob-m-2 ul li a {
}
 #v3-mob-menu-btn {
     width: auto;
     float: initial;
}
 .v3-list-ql {
     position: fixed;
     top: 60px;
     width: 100%;
     height: 50px;
     background: #151f31;
     z-index: 9;
     transition: all 1s;
     -webkit-box-shadow: 0 1px 3px #960;
     -moz-box-shadow: 0 1px 3px #960;
     box-shadow: 0 0px 10px 2px rgba(0, 0, 0, 0.47);
     background: #fff;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .v3-list-ql-inn {
}
 .v3-list-ql-inn ul {
     margin-bottom: 0px;
}
 .v3-list-ql-inn ul li {
     float: left;
}
 .v3-list-ql-inn ul li a {
     color: #151f31;
     border-right: 1px solid #e0e0e0;
     line-height: 50px;
     display: block;
     padding: 0px 15px;
     font-size: 14px;
     font-weight: 600;
}
 .v3-list-ql-inn ul li a i {
     margin-right: 5px;
}
 .v3-list-ql-inn ul li a:hover {
     background: #01a0d8;
     color: #fff;
}
 .v3-list-ql-inn .active-list a {
     background: #01a0d8;
     color: #fff;
}
/*-------------------------------------------------*/
/* = CHECK OUT 
/*-------------------------------------------------*/
 .list-check-out{
}
 .list-check-out-inn{
     border: 1px solid #dcdcdc;
     margin: 0px;
}
 .list-check-out-inn ul li b{
     color: #000000;
}
 .chec-out-pay{
     border: 1px solid #dcdcdc;
     padding: 20px;
}
 .chec-out-pay h5{
     font-size: 20px;
}
 .chec-out-pay label{
     margin-right: 15px;
}
 .chec-out-pay [type="radio"] + label:before, [type="radio"] + label:after{
     top:12px;
}
 .chec-out-pay label img{
}
/*-------------------------------------------------*/
/* = PRICE LISTR V4 
/*-------------------------------------------------*/
 .v4-pri-bg{
     background: url(../images/banner5.jpg) no-repeat;
     background-size: cover;
     padding-bottom: 100px;
}
 .v4-price-list{
}
 .v4-pril-inn{
     position: relative;
     overflow: hidden;
     border-radius: 5px;
}
 .v4-pril-inn-top{
     background: #222222;
     color: #eee;
     padding: 40px;
     color: #ECF0F1;
     text-align: center;
}
 .v4-pril-inn-top h2{
     font-size: 24px;
     margin-bottom: 20px;
     font-weight: normal;
}
 .v4-pril-inn-top p{
     margin: 0px;
}
 .v4-pril-price{
     margin: 0px;
}
 .v4-pril-price b{
     font-size: 70px;
     line-height: 70px;
     color: #fff;
}
 .v4-pril-curr{
     font-size: 28px;
     line-height: 40px;
     vertical-align: top;
     display: inline-block;
     color: #FBA507;
}
 .v4-pril-mon{
     color: #ccc;
}
 .v4-pril-inn-bot{
    border-top: 0px;
    /* padding-bottom: 5px;
     */
    background: #222222;
    text-align: center;
}
 .v4-pril-inn-bot ul{
     list-style: none;
     list-style-type: none;
     margin: 0px;
     padding: 0px;
     text-align: left;
     margin-bottom: 35px;
}
 .v4-pril-inn-bot ul li{
     color:#fff;
     line-height: 45px;
     padding: 0px 25px;
}
 .v4-pril-inn-bot ul li i{
     margin-right: 15px;
}
 .v4-pril-inn-bot ul li .fa-check{
     color: #ef9d07;
}
 .v4-pril-inn-bot ul li .fa-times{
     color: #7b7b7b;
}
 .v4-pril-inn-bot ul li:nth-child(odd){
     background: #282828;
}
 .v4-pril-inn-bot ul li:nth-child(even){
     background: #2d2d2d;
}
 .v4-pri-best{
     width: 200px;
     position: absolute;
     top: 20px;
     left: -55px;
     text-align: center;
     line-height: 50px;
     letter-spacing: 1px;
     color: #222;
     font-weight: bold;
     transform: rotate(-45deg);
     -webkit-transform: rotate(-45deg);
     -moz-transform: rotate(-45deg);
     background-color: #FBA507;
     font-size: 15px;
}
/*-------------------------------------------------*/
/* HOME PAGE SEARCH BOX 
/*-------------------------------------------------*/
 .tourz-search {
}
 .tourz-search-form {
}
 #select-city {
     background: #fff;
     border: 0px;
     height: 55px;
     border-radius: 2px;
    /* padding: 5px 10px;
     */
     box-sizing: border-box;
     font-size: 14px;
     padding-left: 30px;
}
 #select-search {
     background: url(../images/icon/search.png) no-repeat left center #fff;
     border: 0px;
     height: 55px;
     border-radius: 2px;
     padding: 0px 10px 0px 35px;
     box-sizing: border-box;
     font-size: 14px;
     background-size: 17px;
     background-position-x: 10px;
}
 #top-select-city {
     background: #fff;
     border: 0px;
     height: 38px;
     border-radius: 2px;
     padding: 5px 10px;
     box-sizing: border-box;
     font-size: 14px;
}
 #top-select-search {
     background: url(../images/icon/search.png) no-repeat left center #fff;
     border: 0px;
     height: 38px;
     border-radius: 2px;
     padding: 0px 10px 0px 35px;
     box-sizing: border-box;
     font-size: 14px;
     background-size: 17px;
     background-position-x: 10px;
}
 .tourz-top-sear-btn {
     height: 38px;
     line-height: 38px;
     outline: none;
     display: block !important;
     background: url(../images/search_bg1.png) no-repeat center center #01a0d8;
     color: #eac610;
     font-weight: 600;
     padding: 7px;
     background-size: 24px;
}
 .tourz-top-search-form {
     margin-top: 11px;
}
 .search-hotel-type {
     padding-left: 18px;
}
 .tourz-search-form input[type="submit"] {
     background: none !important;
}
 .tourz-search-1 {
     padding: 150px 0px 100px 0px;
     width: 70%;
     margin: 0 auto;
     text-align: center;
     position: relative;
}
 .tourz-search-1 h1 {
     color: #fff;
     font-size: 50px;
}
 .tourz-search-1 p {
     font-size: 18px;
     color: #fff;
     padding-bottom: 30px;
     margin-bottom: 0px;
}
 .tourz-search-1 form {
}
 .tourz-search-form label {
     text-overflow: ellipsis;
     white-space: pre;
     overflow: hidden;
     right: 15px;
     left: 18px;
     top: 20px;
}
 .tourz-search-form div:nth-child(1) {
     width: 20%;
     float: left;
}
 .tourz-search-form div:nth-child(2) {
     width: 60%;
     float: left;
}
 .tourz-search-form div:nth-child(3) {
     width: 15%;
     float: left;
}
 .tourz-search:before {
     content: '';
     background: #141E30;
     background: linear-gradient(to right, rgba(36, 59, 85, 0.55), rgba(20, 30, 48, 0.82));
     background: linear-gradient(to right, rgba(36, 59, 85, 0.55), rgba(20, 30, 48, 0.82));
     position: absolute;
     bottom: 0px;
     top: 0px;
     left: 0px;
     right: 0px;
}
 .tourz-search-form div {
     margin: 0px 5px;
}
 .tourz-sear-btn {
     height: 55px;
     line-height: 57px;
     outline: none;
     display: block !important;
     color: #fff;
     font-weight: 600;
     font-family: 'Quicksand', sans-serif;
     font-size: 16px;
     background: #01a0d8;
     background: linear-gradient(to bottom, #01a0d8, #0485b3);
     text-transform: uppercase;
}
 .tourz-hom-ser {
     position: relative;
     overflow: hidden;
     width: 100%;
     padding-top: 38px;
     padding-bottom: 5px;
}
 .tourz-hom-ser ul {
     margin-bottom: 0px;
     margin: 0 auto;
     display: table;
     padding: 0px;
}
 .tourz-hom-ser ul li {
     float: left;
     display: inline;
     text-align: center;
     width: 25%;
     padding: 0px 5px;
}
 .tourz-hom-ser ul li a {
     background: #234868;
     width: 90px;
     height: 90px;
     display: block;
     padding: 18px 2px 10px 2px;
     text-align: center;
     color: #fff;
     border-radius: 5px;
     font-family: 'Arimo', sans-serif;
    /* position: relative;
     */
    /* overflow: hidden;
     */
     line-height: 24px;
}
 .tourz-hom-ser ul li a:hover {
     -webkit-transform: scale(1.1);
     transform: scale(1.1);
     background: #1aa5d8;
}
 .tourz-hom-ser ul li a img {
     display: table;
     text-align: center;
     margin: 0 auto;
     padding-bottom: 5px;
     width: 36px;
}
 .tourz-pop-ser-btn {
}
 .tourz-pop-ser-btn img {
}
 .tourz-top-phone {
     border: 1px solid #9a729a;
     border-radius: 50px;
}
 .autocomplete-content ul li a {
     border-bottom: 1px solid #e0e0e0;
}
 .profile-btn {
     border: none;
     height: 30px;
     line-height: 26px;
     color: #fff;
     padding: 2px 10px;
     border-radius: 2px;
     background: #1aa5d8;
     background: linear-gradient(to bottom, #1aa5d8, #1386b1);
     font-family: 'Quicksand', sans-serif;
}
 .profile-btn:hover {
     color: #fff;
}
 .autocomplete-content li img {
     float: left;
     width: 26px !important;
     height: 26px!important;
     left: 0px;
     top: 15px;
}
 .autocomplete-content li {
}
 .tourz-top-search-form label{
     top: 10px;
}
 .tourz-top-search-form div:nth-child(1) {
     width: 20%;
}
 .tourz-top-search-form div:nth-child(2) {
     width: 60%;
}
 .tourz-top-search-form div:nth-child(3) {
     width: 15%;
}
/*-------------------------------------------------------*/
/* EMAIL TEMPLATE 
/*-------------------------------------------------------*/
 .email-tem{
     background: #efefef;
     position: relative;
     overflow: hidden;
}
 .email-tem-inn{
     width: 50%;
     margin: 0 auto;
     padding: 50px;
     background: #ffffff;
    /* margin-top: 50px;
     */
    /* margin-bottom: 50px;
     */
}
 .email-tem-main{
    background: #fdfdfd;
    box-shadow: 0px 10px 24px -10px rgba(0, 0, 0, 0.8);
    margin-bottom: 50px;
    border-radius: 10px;
}
 .email-tem-head{
     width: 100%;
     background: #006df0 url('../images/mail/bg.png') repeat;
     padding: 50px;
     box-sizing: border-box;
     border-radius: 5px 5px 0px 0px;
}
 .email-tem-head h2{
     color: #fff;
     font-size: 32px;
     text-transform: capitalize;
}
 .email-tem-head h2 img{
     float: left;
     padding-right: 25px;
     width: 100px;
}
 .email-tem-body{
     padding: 50px;
}
 .email-tem-body h3{
     margin-bottom: 25px;
}
 .email-tem-body p{
}
 .email-tem-body a{
     background: #006df0;
     color: #fff;
     padding: 12px;
     border-radius: 2px;
     margin-top: 15px;
     position: relative;
     display: inline-block;
}
 .email-tem-foot{
     text-align: center;
}
 .email-tem-foot h4{
}
 .email-tem-foot ul{
     position: relative;
     overflow: hidden;
     margin: 0 auto;
     display: table;
     margin-bottom: 18px;
     margin-top: 25px;
}
 .email-tem-foot ul li{
     float: left;
     display: inline-block;
     padding: 0px 10px;
}
 .email-tem-foot ul li a{
}
 .email-tem-foot ul li a img{
}
 .email-tem-foot p{
     margin-bottom: 0px;
     padding-top: 5px;
     font-size: 13px;
}
 .email-point{
     position: relative;
     overflow: hidden;
     width: 100%;
     border-bottom: 1px solid #e6e6e6;
    /* margin-bottom: 25px;
     */
     padding-bottom: 15px;
     padding-top: 20px;
}
 .email-point-left{
     float: left;
     width: 20%;
}
 .email-point-left img{
     width: 100%;
     padding: 0px 20px 0px 0px;
}
 .email-point-righ{
     float: left;
     width: 80%;
}
 .email-point-righ h4{
     padding-bottom: 10px;
}
 .email-point-righ p{
     font-size: 13px;
     margin-bottom: 15px;
}
 .email-list{
}
 .email-list ul{
     margin-bottom:0px;
}
 .email-list ul li{
     display:block;
     font-size:14px;
}
/*-------------------------------------------------*/
/* = REGISTER LOGIN POPUPS 
/*-------------------------------------------------*/
 .log-in-pop {
     position: relative;
     overflow: hidden;
    /* height: 100%;
     */
    /* bottom: 0px;
     */
     background: #fff;
     width: 60%;
     margin: 0 auto;
     margin-top: 5%;
     margin-bottom: 5%;
}
 .log-in-pop-left {
     float: left;
     width: 40%;
     background: url('../images/login.jpg') no-repeat center center;
     padding: 11% 6%;
     color: #fff;
     height: 100%;
     bottom: 0px;
    /* min-height: 115%;
     */
     background: #728294 url(../images/mail/bg.png) repeat;
}
 .log-in-pop-left::before {
}
 .log-in-pop-left h1 {
     color: #fff;
     font-size: 32px;
}
 .log-in-pop-left h1 span {
     display: block;
     text-overflow: ellipsis;
     overflow: hidden;
     white-space: nowrap;
     text-transform: capitalize;
     color: #fff;
     font-size: 24px;
     font-weight: 600;
     padding: 10px 0px;
}
 .log-in-pop-left p {
     color: #fff;
}
 .log-in-pop-left h4 {
     color: #fff;
     margin-bottom: 15px;
     margin-top: 15px;
     border-top: 1px solid #525f6d;
     padding-top: 15px;
}
 .log-in-pop-left ul {
     margin-bottom: 0px;
}
 .log-in-pop-left ul li {
     margin-bottom: 5px;
}
 .log-in-pop-left ul li a {
     display: block;
     background: #3F51B5;
     color: #fff;
     padding: 12px;
     border-radius: 2px;
     font-family: 'Quicksand', sans-serif;
}
 .log-in-pop-left ul li:nth-child(1) a {
     background: #39579A;
}
 .log-in-pop-left ul li:nth-child(2) a {
     background: #F24033;
}
 .log-in-pop-left ul li:nth-child(3) a {
     background: #24A9E6;
}
 .log-in-pop-left ul li a i {
     padding-right: 7px;
}
 .log-in-pop-right {
     float: left;
     width: 60%;
     padding: 50px;
}
 .log-in-pop-right h4 {
     font-size: 24px;
     margin-bottom: 20px;
}
 .log-in-pop-right p {
}
 .log-in-pop-right a {
     color: #333;
}
 .log-in-pop-right form {
}
 .log-in-pop-right form label {
     font-size: 14px !important;
     font-weight: 200;
     left: 15px;
     top: 14px;
}
 .log-in-pop-right form input {
     border: 1px solid #dfdfdf;
     padding: 8px;
     box-sizing: border-box;
     height: 45px;
     border-radius: 2px;
     font-size: 15px;
     color: #636363;
}
 .log-in-pop-right form textarea {
     border: 1px solid #dfdfdf;
     padding: 8px;
     box-sizing: border-box;
     height: 70px;
     border-radius: 2px;
     font-size: 15px;
     color: #636363;
}
 .log-in-pop-right form input[type="submit"] {
     color: #fff;
     font-size: 14px;
     font-weight: 600;
}
 .padd-top {
     margin-top: 15px;
}
 .log-in-btn {
     background: #f4364f;
     color: #fff;
     padding: 2px 10px;
     font-weight: 600;
}
 .pop-close {
     color: #333;
     width: 24px;
     height: 24px;
     display: inline-block;
     position: absolute;
     top: 15px;
     right: 15px;
}
 .pop-close:hover {
     transform: rotate(180deg);
}
 .pop-close img {
     width: 24px;
}
 .modal-open {
     overflow: inherit !important;
}
 .log-ch-bx {
}
 .log-ch-bx p {
}
 .log-ch-bx p label {
     left: 1px;
     top: 10px;
     color: #727070;
}
 .log-ch-bx p input {
}
/*-------------------------------------------------------*/
/* INDEX 3 STYLES 
/*-------------------------------------------------------*/
 .dir-cat-search{
    width:85%;
}
 .cate-search-form{
}
 .cate-search-form div{
    float: left;
    padding: 0px 5px;
}
 .cate-search-form div:nth-child(1) {
     width: 40%;
}
 .cate-search-form div:nth-child(1) input{
    background:#fff !important;
}
 .cate-search-form div:before{
     font-family: FontAwesome;
     content: "\f002";
     position: absolute;
     font-size: 14px;
     color: #6a6f73;
     margin: 18px 5px 5px 11px;
     font-weight: 300;
}
 .cate-search-form div:nth-child(2):before{
    content: "\f041";
    font-size: 18px;
    margin-top: 17px;
}
 .cate-search-form div:nth-child(3):before{
    content: "\f0ca";
}
 .cate-search-form div input{
    padding-left: 35px;
}
 .cate-search-form div:nth-child(2) {
     width: 20%;
}
 .cate-search-form div:nth-child(3) {
     width: 20%;
}
 .cate-search-form div:nth-child(4) {
     width: 15%;
}
 .cate-search-form .auto-category{
     background: #fff;
     border: 0px;
     height: 55px;
     border-radius: 2px;
    /* padding: 5px 10px;
     */
     box-sizing: border-box;
     font-size: 14px;
}
 .cate-search-form div.input-field label{
     top: 18px;
     left: 38px;
}
 .dir3-home-head{
     width: 100%;
     height: 100%;
     -webkit-user-select: none;
     -khtml-user-select: none;
     -moz-user-select: none;
     -o-user-select: none;
     user-select: none;
    /* z-index: 99;
     */
     background: url(../images/banner6.jpg) no-repeat, #2196f3;
     background-size: cover;
     position: relative;
}
 .dir3-home-head:before {
     content: '';
     position: absolute;
     background: linear-gradient(to top, rgba(0, 0, 0, 0.56) 14%, rgba(0, 0, 0, 0.14) 66%);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
}
 .hom3-top-menu{
     display: block;
     top: -70px;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .top-menu-down{
     top:0px;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 .cate-search-form div input[type="submit"] {
     padding-left: 0px;
}
 .land-packages{
    background: #e9f8fd;
    margin-top: -5px;
    margin-bottom: -5px;
    border-bottom: 1px solid #cfe5ec;
    border-top: 1px solid #cfe5ec;
    padding-top: 50px;
}
 .land-pack{
     position: relative;
     display: table;
     width: 80%;
     margin: 0 auto;
     padding-bottom: 50px;
}
 .land-pack ul{
}
 .land-pack ul li{
     float: left;
     width: 25%;
}
 .land-pack-grid{
    display:inline-block;
    width: 90%;
    position:relative;
    overflow:hidden;
    height: auto;
    box-sizing:border-box;
    background: #141e30;
}
 .land-pack-grid:hover .land-pack-grid-text{
    margin-top: -42px;
    -webkit-transition:all .5s ease;
    -moz-transition:all .5s ease;
    -o-transition:all .5s ease;
    transition:all .5s ease;
}
 .land-pack-grid:hover .land-pack-grid-btn{
    height:40px;
    -webkit-transition:all .5s ease;
    -moz-transition:all .5s ease;
    -o-transition:all .5s ease;
    transition:all .5s ease
}
 .land-pack-grid-img img{
     width: 100%;
     height: 180px;
     -webkit-transition: all .5s ease;
     -moz-transition: all .5s ease;
     -o-transition: all .5s ease;
     transition: all .5s ease;
     -webkit-object-fit: cover;
     -moz-object-fit: cover;
     -o-object-fit: cover;
     object-fit: cover;
     opacity: 0.8;
}
 .land-pack-grid:hover .land-pack-grid-img img{
    -webkit-transform:scale(1.05);
    -moz-transform:scale(1.05);
    transform:scale(1.05)
}
 .land-pack-grid-text{
    position:relative;
    -webkit-transition:all .5s ease;
    -moz-transition:all .5s ease;
    -o-transition:all .5s ease;
    transition:all .5s ease;
    margin-top: -5px;
}
 .land-pack-grid-text h4{
    margin:0;
    background:#fff;
    padding:15px;
    font-size: 15px;
    font-weight:600;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
}
 .land-pack-grid-btn{
     background: #17b599;
     color: #fff !important;
     text-align: center;
     display: block;
     height: 2.5px;
     line-height: 42px;
     box-sizing: border-box;
     -webkit-transition: all .5s ease;
     -moz-transition: all .5s ease;
     -o-transition: all .5s ease;
     transition: all .5s ease;
     text-transform: uppercase;
     text-decoration: none;
     font-weight: 700;
     font-size: 12px;
     letter-spacing: 0.5px;
}
 .land-pack-grid-btn-red{
    background:#df431f
}
 .land-pack-grid-btn-yel{
    background:#f3c438
}
 .land-pack-grid-btn-blu{
    background:#01a0d8
}
 .land-com-form{
     background: #262e3e;
     padding: 30px;
     border-radius: 4px;
     box-shadow: 0 2px 15px -5px rgba(0,0,0,0.76);
}
 .land-com-form h2{
     font-size: 22px;
     text-align: center;
     margin-bottom: 18px;
     color: #fff;
}
 .land-com-form form{
}
 .land-com-form form ul{
}
 .land-com-form form ul li{
     margin-bottom: 15px;
     position: relative;
     list-style-type: none;
}
 .land-com-form form ul li:before{
     font-family: FontAwesome;
     content: "\f002";
     position: absolute;
     font-size: 18px;
     margin-top: 19px;
     margin-left: 10px;
     color: #424a5a;
     font-weight: 300;
     z-index: 1;
}
 .land-com-form form ul li .autocomplete-content li{
    margin-bottom: 0px;
}
 .land-com-form form ul li .autocomplete-content li:before{
    display:none;
}
 .land-com-form form ul li:nth-child(1):before{
    content: "\f007";
}
 .land-com-form form ul li:nth-child(2):before{
    content: "\f095";
}
 .land-com-form form ul li:nth-child(3):before{
    content: "\f0e0";
}
 .land-com-form form ul li:nth-child(4):before{
    content: "\f0ca";
}
 .land-com-form form ul li:nth-child(5):before{
    display:none;
}
 .land-com-form form ul li:nth-child(6):before{
    display:none;
}
 .land-com-form form ul li .input-field label{
     top: 9px;
     left: 55px;
}
 .land-com-form form ul li input{
     width: 100%;
     display: block;
     border: 0;
     border: 1px solid #d4d4d4;
     line-height: 24px;
     font-size: 14px;
     outline: none;
     height: 40px;
     background: #ffffff;
     padding-left: 45px;
     box-sizing: border-box;
     border-radius: 3px;
     color:#1a2a38;
}
 .land-com-form form ul li select{
     width: 100%;
     display: block;
     border: 0;
     border: 1px solid #d4d4d4;
     line-height: 24px;
     font-size: 14px;
     outline: none;
     height: 40px;
     background: #ffffff;
     padding-left: 45px;
     box-sizing: border-box;
     border-radius: 3px;
     color:#1a2a38;
}
 .land-com-form form ul li input[type="submit"]{
     background: #f74d40;
     color: #fff;
     height: 50px;
     line-height: 50px;
     text-transform: uppercase;
     font-weight: 600;
     font-size: 16px;
     text-align: center;
     border-radius: 3px;
     cursor: pointer;
     padding-left: 0;
     background: -webkit-linear-gradient(to top, #3547ab, #3F51B5);
     background: linear-gradient(to top, #F44336, #fb5a4e);
     border: 0px;
     border-bottom: 1px solid #ea3224;
}
 .land-com-form form ul li:nth-child(5):before{
     content: "send";
     margin-left: 207px;
     margin-top: 17px;
     color: #fff;
     font-size: 16px;
     opacity:0;
     -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
 .land-com-form form ul li:nth-child(5):hover:before{
     opacity:1;
     margin-left: 212px;
     -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
 .land-com-form form ul li p{
     margin-bottom: 0px;
     color: #a1aab3;
     font-size: 13px;
     text-align: center;
}
 .land-com-form form ul li p a{
     color: #d4d5d8;
     font-size: 12px;
}
 .land-com-form form ul li:last-child{
    margin-bottom:0px;
}
 .land-3-dwn-full{
    /* position: relative;
     */
     display: inline-block;
     padding: 60px 0px;
}
 .quic-book-ser-full{
     background: #e9f8fd;
     display: inline-block;
     width: 100%;
}
 .quic-book-ser{
}
 .quic-book-ser-inn{
     display: table;
     width: 75%;
     margin: 0 auto;
     max-width: 1020px;
}
 .quic-book-ser-left{
     float: left;
     width: 40%;
}
 .quic-book-ser-right{
     float: left;
     width: 60%;
     padding-left: 70px;
}
 .quic-book-text1{
}
 .quic-book-text1 h3{
     font-weight: 100;
     font-size: 34px;
}
 .quic-book-text1 h3 span{
     text-transform: capitalize;
     font-weight: 600;
     font-size: 42px;
    /* text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.59);
     */
     color: #333333;
     margin-top: 10px;
     display: inline-block;
     margin-bottom: 30px;
}
 .quic-book-text1 p{
}


/*-----------------------------------------
 [FRAMEWORK STYLE SHEET]
 * Project: Directory Pro - Local Listing & Directory Template
 * Version: v1.1.1
 * Copyright 2017-2020 rn53themes
 * Last Changes: 05/06/2017
 * Author: RN53 Themes
 * Email:      rn53themes@gmail.com
 * Website:    http://www.rn53themes.net 
 -----------------------------------------------*/

html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
body {
    margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
    display: block;
}
audio,
canvas,
progress,
video {
    display: inline-block;
    vertical-align: baseline;
}
audio:not([controls]) {
    display: none;
    height: 0;
}
[hidden],
template {
    display: none;
}
a {
    background-color: transparent;
}
a:active,
a:hover {
    outline: 0;
}
abbr[title] {
    border-bottom: 1px dotted;
}
b,
strong {
    font-weight: bold;
}
dfn {
    font-style: italic;
}
h1 {
    font-size: 2em;
}
mark {
    color: #000;
    background: #ff0;
}
small {
    font-size: 80%;
}
sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
}
sup {
    top: -.5em;
}
sub {
    bottom: -.25em;
}
img {
    border: 0;
}
svg:not(:root) {
    overflow: hidden;
}
figure {
    margin: 1em 40px;
}
hr {
    height: 0;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}
pre {
    overflow: auto;
}
code,
kbd,
pre,
samp {
    font-family: monospace, monospace;
    font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
    margin: 0;
    font: inherit;
    color: inherit;
}
button {
    overflow: visible;
}
button,
select {
    text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
button[disabled],
html input[disabled] {
    cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
    padding: 0;
    border: 0;
}
input {
    line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    height: auto;
}
input[type="search"] {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-appearance: textfield;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}
fieldset {
    padding: .35em .625em .75em;
    margin: 0 2px;
    border: 1px solid #c0c0c0;
}
legend {
    padding: 0;
    border: 0;
}
textarea {
    overflow: auto;
    resize: none;
}
optgroup {
    font-weight: bold;
}
table {
    border-spacing: 0;
    border-collapse: collapse;
}
td,
th {
    padding: 0;
}
@media print {
    *,
    *:before,
    *:after {
        color: #000 !important;
        text-shadow: none !important;
        background: transparent !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }
    a,
    a:visited {
        text-decoration: underline;
    }
    a[href]:after {
        content: " (" attr(href) ")";
    }
    abbr[title]:after {
        content: " (" attr(title) ")";
    }
    a[href^="#"]:after,
    a[href^="javascript:"]:after {
        content: "";
    }
    pre,
    blockquote {
        border: 1px solid #999;
        page-break-inside: avoid;
    }
    thead {
        display: table-header-group;
    }
    tr,
    img {
        page-break-inside: avoid;
    }
    img {
        max-width: 100% !important;
    }
    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }
    h2,
    h3 {
        page-break-after: avoid;
    }
    .navbar {
        display: none;
    }
    .btn > .caret,
    .dropup > .btn > .caret {
        border-top-color: #000 !important;
    }
    .label {
        border: 1px solid #000;
    }
    .table {
        border-collapse: collapse !important;
    }
    .table td,
    .table th {
        background-color: #fff !important;
    }
    .table-bordered th,
    .table-bordered td {
        border: 1px solid #ddd !important;
    }
}
@font-face {
    font-family: 'Glyphicons Halflings';
    src: url('../fonts/glyphicons-halflings-regular.eot');
    src: url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
    content: "\2a";
}
.glyphicon-plus:before {
    content: "\2b";
}
.glyphicon-euro:before,
.glyphicon-eur:before {
    content: "\20ac";
}
.glyphicon-minus:before {
    content: "\2212";
}
.glyphicon-cloud:before {
    content: "\2601";
}
.glyphicon-envelope:before {
    content: "\2709";
}
.glyphicon-pencil:before {
    content: "\270f";
}
.glyphicon-glass:before {
    content: "\e001";
}
.glyphicon-music:before {
    content: "\e002";
}
.glyphicon-search:before {
    content: "\e003";
}
.glyphicon-heart:before {
    content: "\e005";
}
.glyphicon-star:before {
    content: "\e006";
}
.glyphicon-star-empty:before {
    content: "\e007";
}
.glyphicon-user:before {
    content: "\e008";
}
.glyphicon-film:before {
    content: "\e009";
}
.glyphicon-th-large:before {
    content: "\e010";
}
.glyphicon-th:before {
    content: "\e011";
}
.glyphicon-th-list:before {
    content: "\e012";
}
.glyphicon-ok:before {
    content: "\e013";
}
.glyphicon-remove:before {
    content: "\e014";
}
.glyphicon-zoom-in:before {
    content: "\e015";
}
.glyphicon-zoom-out:before {
    content: "\e016";
}
.glyphicon-off:before {
    content: "\e017";
}
.glyphicon-signal:before {
    content: "\e018";
}
.glyphicon-cog:before {
    content: "\e019";
}
.glyphicon-trash:before {
    content: "\e020";
}
.glyphicon-home:before {
    content: "\e021";
}
.glyphicon-file:before {
    content: "\e022";
}
.glyphicon-time:before {
    content: "\e023";
}
.glyphicon-road:before {
    content: "\e024";
}
.glyphicon-download-alt:before {
    content: "\e025";
}
.glyphicon-download:before {
    content: "\e026";
}
.glyphicon-upload:before {
    content: "\e027";
}
.glyphicon-inbox:before {
    content: "\e028";
}
.glyphicon-play-circle:before {
    content: "\e029";
}
.glyphicon-repeat:before {
    content: "\e030";
}
.glyphicon-refresh:before {
    content: "\e031";
}
.glyphicon-list-alt:before {
    content: "\e032";
}
.glyphicon-lock:before {
    content: "\e033";
}
.glyphicon-flag:before {
    content: "\e034";
}
.glyphicon-headphones:before {
    content: "\e035";
}
.glyphicon-volume-off:before {
    content: "\e036";
}
.glyphicon-volume-down:before {
    content: "\e037";
}
.glyphicon-volume-up:before {
    content: "\e038";
}
.glyphicon-qrcode:before {
    content: "\e039";
}
.glyphicon-barcode:before {
    content: "\e040";
}
.glyphicon-tag:before {
    content: "\e041";
}
.glyphicon-tags:before {
    content: "\e042";
}
.glyphicon-book:before {
    content: "\e043";
}
.glyphicon-bookmark:before {
    content: "\e044";
}
.glyphicon-print:before {
    content: "\e045";
}
.glyphicon-camera:before {
    content: "\e046";
}
.glyphicon-font:before {
    content: "\e047";
}
.glyphicon-bold:before {
    content: "\e048";
}
.glyphicon-italic:before {
    content: "\e049";
}
.glyphicon-text-height:before {
    content: "\e050";
}
.glyphicon-text-width:before {
    content: "\e051";
}
.glyphicon-align-left:before {
    content: "\e052";
}
.glyphicon-align-center:before {
    content: "\e053";
}
.glyphicon-align-right:before {
    content: "\e054";
}
.glyphicon-align-justify:before {
    content: "\e055";
}
.glyphicon-list:before {
    content: "\e056";
}
.glyphicon-indent-left:before {
    content: "\e057";
}
.glyphicon-indent-right:before {
    content: "\e058";
}
.glyphicon-facetime-video:before {
    content: "\e059";
}
.glyphicon-picture:before {
    content: "\e060";
}
.glyphicon-map-marker:before {
    content: "\e062";
}
.glyphicon-adjust:before {
    content: "\e063";
}
.glyphicon-tint:before {
    content: "\e064";
}
.glyphicon-edit:before {
    content: "\e065";
}
.glyphicon-share:before {
    content: "\e066";
}
.glyphicon-check:before {
    content: "\e067";
}
.glyphicon-move:before {
    content: "\e068";
}
.glyphicon-step-backward:before {
    content: "\e069";
}
.glyphicon-fast-backward:before {
    content: "\e070";
}
.glyphicon-backward:before {
    content: "\e071";
}
.glyphicon-play:before {
    content: "\e072";
}
.glyphicon-pause:before {
    content: "\e073";
}
.glyphicon-stop:before {
    content: "\e074";
}
.glyphicon-forward:before {
    content: "\e075";
}
.glyphicon-fast-forward:before {
    content: "\e076";
}
.glyphicon-step-forward:before {
    content: "\e077";
}
.glyphicon-eject:before {
    content: "\e078";
}
.glyphicon-chevron-left:before {
    content: "\e079";
}
.glyphicon-chevron-right:before {
    content: "\e080";
}
.glyphicon-plus-sign:before {
    content: "\e081";
}
.glyphicon-minus-sign:before {
    content: "\e082";
}
.glyphicon-remove-sign:before {
    content: "\e083";
}
.glyphicon-ok-sign:before {
    content: "\e084";
}
.glyphicon-question-sign:before {
    content: "\e085";
}
.glyphicon-info-sign:before {
    content: "\e086";
}
.glyphicon-screenshot:before {
    content: "\e087";
}
.glyphicon-remove-circle:before {
    content: "\e088";
}
.glyphicon-ok-circle:before {
    content: "\e089";
}
.glyphicon-ban-circle:before {
    content: "\e090";
}
.glyphicon-arrow-left:before {
    content: "\e091";
}
.glyphicon-arrow-right:before {
    content: "\e092";
}
.glyphicon-arrow-up:before {
    content: "\e093";
}
.glyphicon-arrow-down:before {
    content: "\e094";
}
.glyphicon-share-alt:before {
    content: "\e095";
}
.glyphicon-resize-full:before {
    content: "\e096";
}
.glyphicon-resize-small:before {
    content: "\e097";
}
.glyphicon-exclamation-sign:before {
    content: "\e101";
}
.glyphicon-gift:before {
    content: "\e102";
}
.glyphicon-leaf:before {
    content: "\e103";
}
.glyphicon-fire:before {
    content: "\e104";
}
.glyphicon-eye-open:before {
    content: "\e105";
}
.glyphicon-eye-close:before {
    content: "\e106";
}
.glyphicon-warning-sign:before {
    content: "\e107";
}
.glyphicon-plane:before {
    content: "\e108";
}
.glyphicon-calendar:before {
    content: "\e109";
}
.glyphicon-random:before {
    content: "\e110";
}
.glyphicon-comment:before {
    content: "\e111";
}
.glyphicon-magnet:before {
    content: "\e112";
}
.glyphicon-chevron-up:before {
    content: "\e113";
}
.glyphicon-chevron-down:before {
    content: "\e114";
}
.glyphicon-retweet:before {
    content: "\e115";
}
.glyphicon-shopping-cart:before {
    content: "\e116";
}
.glyphicon-folder-close:before {
    content: "\e117";
}
.glyphicon-folder-open:before {
    content: "\e118";
}
.glyphicon-resize-vertical:before {
    content: "\e119";
}
.glyphicon-resize-horizontal:before {
    content: "\e120";
}
.glyphicon-hdd:before {
    content: "\e121";
}
.glyphicon-bullhorn:before {
    content: "\e122";
}
.glyphicon-bell:before {
    content: "\e123";
}
.glyphicon-certificate:before {
    content: "\e124";
}
.glyphicon-thumbs-up:before {
    content: "\e125";
}
.glyphicon-thumbs-down:before {
    content: "\e126";
}
.glyphicon-hand-right:before {
    content: "\e127";
}
.glyphicon-hand-left:before {
    content: "\e128";
}
.glyphicon-hand-up:before {
    content: "\e129";
}
.glyphicon-hand-down:before {
    content: "\e130";
}
.glyphicon-circle-arrow-right:before {
    content: "\e131";
}
.glyphicon-circle-arrow-left:before {
    content: "\e132";
}
.glyphicon-circle-arrow-up:before {
    content: "\e133";
}
.glyphicon-circle-arrow-down:before {
    content: "\e134";
}
.glyphicon-globe:before {
    content: "\e135";
}
.glyphicon-wrench:before {
    content: "\e136";
}
.glyphicon-tasks:before {
    content: "\e137";
}
.glyphicon-filter:before {
    content: "\e138";
}
.glyphicon-briefcase:before {
    content: "\e139";
}
.glyphicon-fullscreen:before {
    content: "\e140";
}
.glyphicon-dashboard:before {
    content: "\e141";
}
.glyphicon-paperclip:before {
    content: "\e142";
}
.glyphicon-heart-empty:before {
    content: "\e143";
}
.glyphicon-link:before {
    content: "\e144";
}
.glyphicon-phone:before {
    content: "\e145";
}
.glyphicon-pushpin:before {
    content: "\e146";
}
.glyphicon-usd:before {
    content: "\e148";
}
.glyphicon-gbp:before {
    content: "\e149";
}
.glyphicon-sort:before {
    content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
    content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
    content: "\e152";
}
.glyphicon-sort-by-order:before {
    content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
    content: "\e154";
}
.glyphicon-sort-by-attributes:before {
    content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
    content: "\e156";
}
.glyphicon-unchecked:before {
    content: "\e157";
}
.glyphicon-expand:before {
    content: "\e158";
}
.glyphicon-collapse-down:before {
    content: "\e159";
}
.glyphicon-collapse-up:before {
    content: "\e160";
}
.glyphicon-log-in:before {
    content: "\e161";
}
.glyphicon-flash:before {
    content: "\e162";
}
.glyphicon-log-out:before {
    content: "\e163";
}
.glyphicon-new-window:before {
    content: "\e164";
}
.glyphicon-record:before {
    content: "\e165";
}
.glyphicon-save:before {
    content: "\e166";
}
.glyphicon-open:before {
    content: "\e167";
}
.glyphicon-saved:before {
    content: "\e168";
}
.glyphicon-import:before {
    content: "\e169";
}
.glyphicon-export:before {
    content: "\e170";
}
.glyphicon-send:before {
    content: "\e171";
}
.glyphicon-floppy-disk:before {
    content: "\e172";
}
.glyphicon-floppy-saved:before {
    content: "\e173";
}
.glyphicon-floppy-remove:before {
    content: "\e174";
}
.glyphicon-floppy-save:before {
    content: "\e175";
}
.glyphicon-floppy-open:before {
    content: "\e176";
}
.glyphicon-credit-card:before {
    content: "\e177";
}
.glyphicon-transfer:before {
    content: "\e178";
}
.glyphicon-cutlery:before {
    content: "\e179";
}
.glyphicon-header:before {
    content: "\e180";
}
.glyphicon-compressed:before {
    content: "\e181";
}
.glyphicon-earphone:before {
    content: "\e182";
}
.glyphicon-phone-alt:before {
    content: "\e183";
}
.glyphicon-tower:before {
    content: "\e184";
}
.glyphicon-stats:before {
    content: "\e185";
}
.glyphicon-sd-video:before {
    content: "\e186";
}
.glyphicon-hd-video:before {
    content: "\e187";
}
.glyphicon-subtitles:before {
    content: "\e188";
}
.glyphicon-sound-stereo:before {
    content: "\e189";
}
.glyphicon-sound-dolby:before {
    content: "\e190";
}
.glyphicon-sound-5-1:before {
    content: "\e191";
}
.glyphicon-sound-6-1:before {
    content: "\e192";
}
.glyphicon-sound-7-1:before {
    content: "\e193";
}
.glyphicon-copyright-mark:before {
    content: "\e194";
}
.glyphicon-registration-mark:before {
    content: "\e195";
}
.glyphicon-cloud-download:before {
    content: "\e197";
}
.glyphicon-cloud-upload:before {
    content: "\e198";
}
.glyphicon-tree-conifer:before {
    content: "\e199";
}
.glyphicon-tree-deciduous:before {
    content: "\e200";
}
.glyphicon-cd:before {
    content: "\e201";
}
.glyphicon-save-file:before {
    content: "\e202";
}
.glyphicon-open-file:before {
    content: "\e203";
}
.glyphicon-level-up:before {
    content: "\e204";
}
.glyphicon-copy:before {
    content: "\e205";
}
.glyphicon-paste:before {
    content: "\e206";
}
.glyphicon-alert:before {
    content: "\e209";
}
.glyphicon-equalizer:before {
    content: "\e210";
}
.glyphicon-king:before {
    content: "\e211";
}
.glyphicon-queen:before {
    content: "\e212";
}
.glyphicon-pawn:before {
    content: "\e213";
}
.glyphicon-bishop:before {
    content: "\e214";
}
.glyphicon-knight:before {
    content: "\e215";
}
.glyphicon-baby-formula:before {
    content: "\e216";
}
.glyphicon-tent:before {
    content: "\26fa";
}
.glyphicon-blackboard:before {
    content: "\e218";
}
.glyphicon-bed:before {
    content: "\e219";
}
.glyphicon-apple:before {
    content: "\f8ff";
}
.glyphicon-erase:before {
    content: "\e221";
}
.glyphicon-hourglass:before {
    content: "\231b";
}
.glyphicon-lamp:before {
    content: "\e223";
}
.glyphicon-duplicate:before {
    content: "\e224";
}
.glyphicon-piggy-bank:before {
    content: "\e225";
}
.glyphicon-scissors:before {
    content: "\e226";
}
.glyphicon-bitcoin:before {
    content: "\e227";
}
.glyphicon-btc:before {
    content: "\e227";
}
.glyphicon-xbt:before {
    content: "\e227";
}
.glyphicon-yen:before {
    content: "\00a5";
}
.glyphicon-jpy:before {
    content: "\00a5";
}
.glyphicon-ruble:before {
    content: "\20bd";
}
.glyphicon-rub:before {
    content: "\20bd";
}
.glyphicon-scale:before {
    content: "\e230";
}
.glyphicon-ice-lolly:before {
    content: "\e231";
}
.glyphicon-ice-lolly-tasted:before {
    content: "\e232";
}
.glyphicon-education:before {
    content: "\e233";
}
.glyphicon-option-horizontal:before {
    content: "\e234";
}
.glyphicon-option-vertical:before {
    content: "\e235";
}
.glyphicon-menu-hamburger:before {
    content: "\e236";
}
.glyphicon-modal-window:before {
    content: "\e237";
}
.glyphicon-oil:before {
    content: "\e238";
}
.glyphicon-grain:before {
    content: "\e239";
}
.glyphicon-sunglasses:before {
    content: "\e240";
}
.glyphicon-text-size:before {
    content: "\e241";
}
.glyphicon-text-color:before {
    content: "\e242";
}
.glyphicon-text-background:before {
    content: "\e243";
}
.glyphicon-object-align-top:before {
    content: "\e244";
}
.glyphicon-object-align-bottom:before {
    content: "\e245";
}
.glyphicon-object-align-horizontal:before {
    content: "\e246";
}
.glyphicon-object-align-left:before {
    content: "\e247";
}
.glyphicon-object-align-vertical:before {
    content: "\e248";
}
.glyphicon-object-align-right:before {
    content: "\e249";
}
.glyphicon-triangle-right:before {
    content: "\e250";
}
.glyphicon-triangle-left:before {
    content: "\e251";
}
.glyphicon-triangle-bottom:before {
    content: "\e252";
}
.glyphicon-triangle-top:before {
    content: "\e253";
}
.glyphicon-console:before {
    content: "\e254";
}
.glyphicon-superscript:before {
    content: "\e255";
}
.glyphicon-subscript:before {
    content: "\e256";
}
.glyphicon-menu-left:before {
    content: "\e257";
}
.glyphicon-menu-right:before {
    content: "\e258";
}
.glyphicon-menu-down:before {
    content: "\e259";
}
.glyphicon-menu-up:before {
    content: "\e260";
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before,
*:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}
input,
button,
select,
textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    outline: none;
}
a {
    color: #337ab7;
    text-decoration: none;
}
a:hover,
a:focus {} a:focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}
figure {
    margin: 0;
}
img {
    vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
    display: block;
    max-width: 100%;
    height: auto;
}
.img-rounded {
    border-radius: 6px;
}
.img-thumbnail {
    display: inline-block;
    max-width: 100%;
    height: auto;
    padding: 4px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.img-circle {
    border-radius: 50%;
}
hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
}
.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto;
}
[role="button"] {
    cursor: pointer;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
    line-height: 1.1;
    color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
    font-weight: normal;
    line-height: 1;
    color: #777;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {} h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
    font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {} h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
    font-size: 75%;
}
h1,
.h1 {
    font-size: 36px;
}
h2,
.h2 {
    font-size: 30px;
}
h3,
.h3 {
    font-size: 24px;
}
h4,
.h4 {
    font-size: 18px;
}
h5,
.h5 {
    font-size: 14px;
}
h6,
.h6 {
    font-size: 12px;
}
p {
    margin: 0 0 10px;
}
.lead {
    margin-bottom: 20px;
    font-size: 16px;
    font-weight: 300;
    line-height: 1.4;
}
@media (min-width: 768px) {
    .lead {
        font-size: 21px;
    }
}
small,
.small {
    font-size: 85%;
}
mark,
.mark {
    padding: .2em;
    background-color: #fcf8e3;
}
.text-left {
    text-align: left;
}
.text-right {
    text-align: right;
}
.text-center {
    text-align: center;
}
.text-justify {
    text-align: justify;
}
.text-nowrap {
    white-space: nowrap;
}
.text-lowercase {
    text-transform: lowercase;
}
.text-uppercase {
    text-transform: uppercase;
}
.text-capitalize {
    text-transform: capitalize;
}
.text-muted {
    color: #777;
}
.text-primary {
    color: #337ab7;
}
a.text-primary:hover,
a.text-primary:focus {
    color: #286090;
}
.text-success {
    color: #3c763d;
}
a.text-success:hover,
a.text-success:focus {
    color: #2b542c;
}
.text-info {
    color: #31708f;
}
a.text-info:hover,
a.text-info:focus {
    color: #245269;
}
.text-warning {
    color: #8a6d3b;
}
a.text-warning:hover,
a.text-warning:focus {
    color: #66512c;
}
.text-danger {
    color: #a94442;
}
a.text-danger:hover,
a.text-danger:focus {
    color: #843534;
}
.bg-primary {
    color: #fff;
    background-color: #337ab7;
}
a.bg-primary:hover,
a.bg-primary:focus {
    background-color: #286090;
}
.bg-success {
    background-color: #dff0d8;
}
a.bg-success:hover,
a.bg-success:focus {
    background-color: #c1e2b3;
}
.bg-info {
    background-color: #d9edf7;
}
a.bg-info:hover,
a.bg-info:focus {
    background-color: #afd9ee;
}
.bg-warning {
    background-color: #fcf8e3;
}
a.bg-warning:hover,
a.bg-warning:focus {
    background-color: #f7ecb5;
}
.bg-danger {
    background-color: #f2dede;
}
a.bg-danger:hover,
a.bg-danger:focus {
    background-color: #e4b9b9;
}
.page-header {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #eee;
}
ul,
ol {
    margin-top: 0;
    margin-bottom: 10px;
}
ul ul,
ol ul,
ul ol,
ol ol {
    margin-bottom: 0;
}
.list-unstyled {
    padding-left: 0;
    list-style: none;
}
.list-inline {
    padding-left: 0;
    margin-left: -5px;
    list-style: none;
}
.list-inline > li {
    display: inline-block;
    padding-right: 5px;
    padding-left: 5px;
}
dl {
    margin-top: 0;
    margin-bottom: 20px;
}
dt,
dd {
    line-height: 1.42857143;
}
dt {
    font-weight: bold;
}
dd {
    margin-left: 0;
}
@media (min-width: 768px) {
    .dl-horizontal dt {
        float: left;
        width: 160px;
        overflow: hidden;
        clear: left;
        text-align: right;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .dl-horizontal dd {
        margin-left: 180px;
    }
}
abbr[title],
abbr[data-original-title] {
    cursor: help;
    border-bottom: 1px dotted #777;
}
.initialism {
    font-size: 90%;
    text-transform: uppercase;
}
blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: 5px solid #eee;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
    margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
    display: block;
    font-size: 80%;
    line-height: 1.42857143;
    color: #777;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
    content: '\2014 \00A0';
}
.blockquote-reverse,
blockquote.pull-right {
    padding-right: 15px;
    padding-left: 0;
    text-align: right;
    border-right: 5px solid #eee;
    border-left: 0;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
    content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
    content: '\00A0 \2014';
}
address {
    margin-bottom: 20px;
    font-style: normal;
    line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
    font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
code {
    padding: 2px 4px;
    font-size: 90%;
    color: #c7254e;
    background-color: #f9f2f4;
    border-radius: 4px;
}
kbd {
    padding: 2px 4px;
    font-size: 90%;
    color: #fff;
    background-color: #333;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
}
kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: bold;
    -webkit-box-shadow: none;
    box-shadow: none;
}
pre {
    display: block;
    padding: 9.5px;
    margin: 0 0 10px;
    font-size: 13px;
    line-height: 1.42857143;
    color: #333;
    word-break: break-all;
    word-wrap: break-word;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 4px;
}
pre code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0;
}
.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll;
}
.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
@media (min-width: 768px) {
    .container {
        width: 750px;
    }
}
@media (min-width: 992px) {
    .container {
        width: 970px;
    }
}
@media (min-width: 1200px) {
    .container {
        width: 1170px;
    }
}
.container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.row {
    margin-right: -15px;
    margin-left: -15px;
}
.col-xs-1,
.col-sm-1,
.col-md-1,
.col-lg-1,
.col-xs-2,
.col-sm-2,
.col-md-2,
.col-lg-2,
.col-xs-3,
.col-sm-3,
.col-md-3,
.col-lg-3,
.col-xs-4,
.col-sm-4,
.col-md-4,
.col-lg-4,
.col-xs-5,
.col-sm-5,
.col-md-5,
.col-lg-5,
.col-xs-6,
.col-sm-6,
.col-md-6,
.col-lg-6,
.col-xs-7,
.col-sm-7,
.col-md-7,
.col-lg-7,
.col-xs-8,
.col-sm-8,
.col-md-8,
.col-lg-8,
.col-xs-9,
.col-sm-9,
.col-md-9,
.col-lg-9,
.col-xs-10,
.col-sm-10,
.col-md-10,
.col-lg-10,
.col-xs-11,
.col-sm-11,
.col-md-11,
.col-lg-11,
.col-xs-12,
.col-sm-12,
.col-md-12,
.col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.col-xs-1,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9,
.col-xs-10,
.col-xs-11,
.col-xs-12 {
    float: left;
}
.col-xs-12 {
    width: 100%;
}
.col-xs-11 {
    width: 91.66666667%;
}
.col-xs-10 {
    width: 83.33333333%;
}
.col-xs-9 {
    width: 75%;
}
.col-xs-8 {
    width: 66.66666667%;
}
.col-xs-7 {
    width: 58.33333333%;
}
.col-xs-6 {
    width: 50%;
}
.col-xs-5 {
    width: 41.66666667%;
}
.col-xs-4 {
    width: 33.33333333%;
}
.col-xs-3 {
    width: 25%;
}
.col-xs-2 {
    width: 16.66666667%;
}
.col-xs-1 {
    width: 8.33333333%;
}
.col-xs-pull-12 {
    right: 100%;
}
.col-xs-pull-11 {
    right: 91.66666667%;
}
.col-xs-pull-10 {
    right: 83.33333333%;
}
.col-xs-pull-9 {
    right: 75%;
}
.col-xs-pull-8 {
    right: 66.66666667%;
}
.col-xs-pull-7 {
    right: 58.33333333%;
}
.col-xs-pull-6 {
    right: 50%;
}
.col-xs-pull-5 {
    right: 41.66666667%;
}
.col-xs-pull-4 {
    right: 33.33333333%;
}
.col-xs-pull-3 {
    right: 25%;
}
.col-xs-pull-2 {
    right: 16.66666667%;
}
.col-xs-pull-1 {
    right: 8.33333333%;
}
.col-xs-pull-0 {
    right: auto;
}
.col-xs-push-12 {
    left: 100%;
}
.col-xs-push-11 {
    left: 91.66666667%;
}
.col-xs-push-10 {
    left: 83.33333333%;
}
.col-xs-push-9 {
    left: 75%;
}
.col-xs-push-8 {
    left: 66.66666667%;
}
.col-xs-push-7 {
    left: 58.33333333%;
}
.col-xs-push-6 {
    left: 50%;
}
.col-xs-push-5 {
    left: 41.66666667%;
}
.col-xs-push-4 {
    left: 33.33333333%;
}
.col-xs-push-3 {
    left: 25%;
}
.col-xs-push-2 {
    left: 16.66666667%;
}
.col-xs-push-1 {
    left: 8.33333333%;
}
.col-xs-push-0 {
    left: auto;
}
.col-xs-offset-12 {
    margin-left: 100%;
}
.col-xs-offset-11 {
    margin-left: 91.66666667%;
}
.col-xs-offset-10 {
    margin-left: 83.33333333%;
}
.col-xs-offset-9 {
    margin-left: 75%;
}
.col-xs-offset-8 {
    margin-left: 66.66666667%;
}
.col-xs-offset-7 {
    margin-left: 58.33333333%;
}
.col-xs-offset-6 {
    margin-left: 50%;
}
.col-xs-offset-5 {
    margin-left: 41.66666667%;
}
.col-xs-offset-4 {
    margin-left: 33.33333333%;
}
.col-xs-offset-3 {
    margin-left: 25%;
}
.col-xs-offset-2 {
    margin-left: 16.66666667%;
}
.col-xs-offset-1 {
    margin-left: 8.33333333%;
}
.col-xs-offset-0 {
    margin-left: 0;
}
@media (min-width: 768px) {
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12 {
        float: left;
    }
    .col-sm-12 {
        width: 100%;
    }
    .col-sm-11 {
        width: 91.66666667%;
    }
    .col-sm-10 {
        width: 83.33333333%;
    }
    .col-sm-9 {
        width: 75%;
    }
    .col-sm-8 {
        width: 66.66666667%;
    }
    .col-sm-7 {
        width: 58.33333333%;
    }
    .col-sm-6 {
        width: 50%;
    }
    .col-sm-5 {
        width: 41.66666667%;
    }
    .col-sm-4 {
        width: 33.33333333%;
    }
    .col-sm-3 {
        width: 25%;
    }
    .col-sm-2 {
        width: 16.66666667%;
    }
    .col-sm-1 {
        width: 8.33333333%;
    }
    .col-sm-pull-12 {
        right: 100%;
    }
    .col-sm-pull-11 {
        right: 91.66666667%;
    }
    .col-sm-pull-10 {
        right: 83.33333333%;
    }
    .col-sm-pull-9 {
        right: 75%;
    }
    .col-sm-pull-8 {
        right: 66.66666667%;
    }
    .col-sm-pull-7 {
        right: 58.33333333%;
    }
    .col-sm-pull-6 {
        right: 50%;
    }
    .col-sm-pull-5 {
        right: 41.66666667%;
    }
    .col-sm-pull-4 {
        right: 33.33333333%;
    }
    .col-sm-pull-3 {
        right: 25%;
    }
    .col-sm-pull-2 {
        right: 16.66666667%;
    }
    .col-sm-pull-1 {
        right: 8.33333333%;
    }
    .col-sm-pull-0 {
        right: auto;
    }
    .col-sm-push-12 {
        left: 100%;
    }
    .col-sm-push-11 {
        left: 91.66666667%;
    }
    .col-sm-push-10 {
        left: 83.33333333%;
    }
    .col-sm-push-9 {
        left: 75%;
    }
    .col-sm-push-8 {
        left: 66.66666667%;
    }
    .col-sm-push-7 {
        left: 58.33333333%;
    }
    .col-sm-push-6 {
        left: 50%;
    }
    .col-sm-push-5 {
        left: 41.66666667%;
    }
    .col-sm-push-4 {
        left: 33.33333333%;
    }
    .col-sm-push-3 {
        left: 25%;
    }
    .col-sm-push-2 {
        left: 16.66666667%;
    }
    .col-sm-push-1 {
        left: 8.33333333%;
    }
    .col-sm-push-0 {
        left: auto;
    }
    .col-sm-offset-12 {
        margin-left: 100%;
    }
    .col-sm-offset-11 {
        margin-left: 91.66666667%;
    }
    .col-sm-offset-10 {
        margin-left: 83.33333333%;
    }
    .col-sm-offset-9 {
        margin-left: 75%;
    }
    .col-sm-offset-8 {
        margin-left: 66.66666667%;
    }
    .col-sm-offset-7 {
        margin-left: 58.33333333%;
    }
    .col-sm-offset-6 {
        margin-left: 50%;
    }
    .col-sm-offset-5 {
        margin-left: 41.66666667%;
    }
    .col-sm-offset-4 {
        margin-left: 33.33333333%;
    }
    .col-sm-offset-3 {
        margin-left: 25%;
    }
    .col-sm-offset-2 {
        margin-left: 16.66666667%;
    }
    .col-sm-offset-1 {
        margin-left: 8.33333333%;
    }
    .col-sm-offset-0 {
        margin-left: 0;
    }
}
@media (min-width: 992px) {
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12 {
        float: left;
    }
    .col-md-12 {
        width: 100%;
    }
    .col-md-11 {
        width: 91.66666667%;
    }
    .col-md-10 {
        width: 83.33333333%;
    }
    .col-md-9 {
        width: 75%;
    }
    .col-md-8 {
        width: 66.66666667%;
    }
    .col-md-7 {
        width: 58.33333333%;
    }
    .col-md-6 {
        width: 50%;
    }
    .col-md-5 {
        width: 41.66666667%;
    }
    .col-md-4 {
        width: 33.33333333%;
    }
    .col-md-3 {
        width: 25%;
    }
    .col-md-2 {
        width: 16.66666667%;
    }
    .col-md-1 {
        width: 8.33333333%;
    }
    .col-md-pull-12 {
        right: 100%;
    }
    .col-md-pull-11 {
        right: 91.66666667%;
    }
    .col-md-pull-10 {
        right: 83.33333333%;
    }
    .col-md-pull-9 {
        right: 75%;
    }
    .col-md-pull-8 {
        right: 66.66666667%;
    }
    .col-md-pull-7 {
        right: 58.33333333%;
    }
    .col-md-pull-6 {
        right: 50%;
    }
    .col-md-pull-5 {
        right: 41.66666667%;
    }
    .col-md-pull-4 {
        right: 33.33333333%;
    }
    .col-md-pull-3 {
        right: 25%;
    }
    .col-md-pull-2 {
        right: 16.66666667%;
    }
    .col-md-pull-1 {
        right: 8.33333333%;
    }
    .col-md-pull-0 {
        right: auto;
    }
    .col-md-push-12 {
        left: 100%;
    }
    .col-md-push-11 {
        left: 91.66666667%;
    }
    .col-md-push-10 {
        left: 83.33333333%;
    }
    .col-md-push-9 {
        left: 75%;
    }
    .col-md-push-8 {
        left: 66.66666667%;
    }
    .col-md-push-7 {
        left: 58.33333333%;
    }
    .col-md-push-6 {
        left: 50%;
    }
    .col-md-push-5 {
        left: 41.66666667%;
    }
    .col-md-push-4 {
        left: 33.33333333%;
    }
    .col-md-push-3 {
        left: 25%;
    }
    .col-md-push-2 {
        left: 16.66666667%;
    }
    .col-md-push-1 {
        left: 8.33333333%;
    }
    .col-md-push-0 {
        left: auto;
    }
    .col-md-offset-12 {
        margin-left: 100%;
    }
    .col-md-offset-11 {
        margin-left: 91.66666667%;
    }
    .col-md-offset-10 {
        margin-left: 83.33333333%;
    }
    .col-md-offset-9 {
        margin-left: 75%;
    }
    .col-md-offset-8 {
        margin-left: 66.66666667%;
    }
    .col-md-offset-7 {
        margin-left: 58.33333333%;
    }
    .col-md-offset-6 {
        margin-left: 50%;
    }
    .col-md-offset-5 {
        margin-left: 41.66666667%;
    }
    .col-md-offset-4 {
        margin-left: 33.33333333%;
    }
    .col-md-offset-3 {
        margin-left: 25%;
    }
    .col-md-offset-2 {
        margin-left: 16.66666667%;
    }
    .col-md-offset-1 {
        margin-left: 8.33333333%;
    }
    .col-md-offset-0 {
        margin-left: 0;
    }
}
@media (min-width: 1200px) {
    .col-lg-1,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12 {
        float: left;
    }
    .col-lg-12 {
        width: 100%;
    }
    .col-lg-11 {
        width: 91.66666667%;
    }
    .col-lg-10 {
        width: 83.33333333%;
    }
    .col-lg-9 {
        width: 75%;
    }
    .col-lg-8 {
        width: 66.66666667%;
    }
    .col-lg-7 {
        width: 58.33333333%;
    }
    .col-lg-6 {
        width: 50%;
    }
    .col-lg-5 {
        width: 41.66666667%;
    }
    .col-lg-4 {
        width: 33.33333333%;
    }
    .col-lg-3 {
        width: 25%;
    }
    .col-lg-2 {
        width: 16.66666667%;
    }
    .col-lg-1 {
        width: 8.33333333%;
    }
    .col-lg-pull-12 {
        right: 100%;
    }
    .col-lg-pull-11 {
        right: 91.66666667%;
    }
    .col-lg-pull-10 {
        right: 83.33333333%;
    }
    .col-lg-pull-9 {
        right: 75%;
    }
    .col-lg-pull-8 {
        right: 66.66666667%;
    }
    .col-lg-pull-7 {
        right: 58.33333333%;
    }
    .col-lg-pull-6 {
        right: 50%;
    }
    .col-lg-pull-5 {
        right: 41.66666667%;
    }
    .col-lg-pull-4 {
        right: 33.33333333%;
    }
    .col-lg-pull-3 {
        right: 25%;
    }
    .col-lg-pull-2 {
        right: 16.66666667%;
    }
    .col-lg-pull-1 {
        right: 8.33333333%;
    }
    .col-lg-pull-0 {
        right: auto;
    }
    .col-lg-push-12 {
        left: 100%;
    }
    .col-lg-push-11 {
        left: 91.66666667%;
    }
    .col-lg-push-10 {
        left: 83.33333333%;
    }
    .col-lg-push-9 {
        left: 75%;
    }
    .col-lg-push-8 {
        left: 66.66666667%;
    }
    .col-lg-push-7 {
        left: 58.33333333%;
    }
    .col-lg-push-6 {
        left: 50%;
    }
    .col-lg-push-5 {
        left: 41.66666667%;
    }
    .col-lg-push-4 {
        left: 33.33333333%;
    }
    .col-lg-push-3 {
        left: 25%;
    }
    .col-lg-push-2 {
        left: 16.66666667%;
    }
    .col-lg-push-1 {
        left: 8.33333333%;
    }
    .col-lg-push-0 {
        left: auto;
    }
    .col-lg-offset-12 {
        margin-left: 100%;
    }
    .col-lg-offset-11 {
        margin-left: 91.66666667%;
    }
    .col-lg-offset-10 {
        margin-left: 83.33333333%;
    }
    .col-lg-offset-9 {
        margin-left: 75%;
    }
    .col-lg-offset-8 {
        margin-left: 66.66666667%;
    }
    .col-lg-offset-7 {
        margin-left: 58.33333333%;
    }
    .col-lg-offset-6 {
        margin-left: 50%;
    }
    .col-lg-offset-5 {
        margin-left: 41.66666667%;
    }
    .col-lg-offset-4 {
        margin-left: 33.33333333%;
    }
    .col-lg-offset-3 {
        margin-left: 25%;
    }
    .col-lg-offset-2 {
        margin-left: 16.66666667%;
    }
    .col-lg-offset-1 {
        margin-left: 8.33333333%;
    }
    .col-lg-offset-0 {
        margin-left: 0;
    }
}
table {
    background-color: transparent;
}
caption {
    padding-top: 8px;
    padding-bottom: 8px;
    color: #777;
    text-align: left;
}
th {
    text-align: left;
}
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
.table > thead > tr > th {
    vertical-align: bottom;
    border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
    border-top: 0;
}
.table > tbody + tbody {
    border-top: 2px solid #ddd;
}
.table .table {
    background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
    padding: 5px;
}
.table-bordered {
    border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
    border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
    border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
    background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover {
    background-color: #f5f5f5;
}
table col[class*="col-"] {
    position: static;
    display: table-column;
    float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
    position: static;
    display: table-cell;
    float: none;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
    background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
    background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
    background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
    background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
    background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
    background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
    background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
    background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
    background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
    background-color: #ebcccc;
}
.table-responsive {
    min-height: .01%;
    overflow-x: auto;
}
@media screen and (max-width: 767px) {
    .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        border: 1px solid #ddd;
    }
    .table-responsive > .table {
        margin-bottom: 0;
    }
    .table-responsive > .table > thead > tr > th,
    .table-responsive > .table > tbody > tr > th,
    .table-responsive > .table > tfoot > tr > th,
    .table-responsive > .table > thead > tr > td,
    .table-responsive > .table > tbody > tr > td,
    .table-responsive > .table > tfoot > tr > td {
        white-space: nowrap;
    }
    .table-responsive > .table-bordered {
        border: 0;
    }
    .table-responsive > .table-bordered > thead > tr > th:first-child,
    .table-responsive > .table-bordered > tbody > tr > th:first-child,
    .table-responsive > .table-bordered > tfoot > tr > th:first-child,
    .table-responsive > .table-bordered > thead > tr > td:first-child,
    .table-responsive > .table-bordered > tbody > tr > td:first-child,
    .table-responsive > .table-bordered > tfoot > tr > td:first-child {
        border-left: 0;
    }
    .table-responsive > .table-bordered > thead > tr > th:last-child,
    .table-responsive > .table-bordered > tbody > tr > th:last-child,
    .table-responsive > .table-bordered > tfoot > tr > th:last-child,
    .table-responsive > .table-bordered > thead > tr > td:last-child,
    .table-responsive > .table-bordered > tbody > tr > td:last-child,
    .table-responsive > .table-bordered > tfoot > tr > td:last-child {
        border-right: 0;
    }
    .table-responsive > .table-bordered > tbody > tr:last-child > th,
    .table-responsive > .table-bordered > tfoot > tr:last-child > th,
    .table-responsive > .table-bordered > tbody > tr:last-child > td,
    .table-responsive > .table-bordered > tfoot > tr:last-child > td {
        border-bottom: 0;
    }
}
fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
}
legend {
    display: block;
    width: 100%;
    padding: 0;
    margin-bottom: 20px;
    font-size: 21px;
    line-height: inherit;
    color: #333;
    border: 0;
    border-bottom: 1px solid #e5e5e5;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;
}
input[type="search"] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
    margin: 4px 0 0;
    margin-top: 1px \9;
    line-height: normal;
}
input[type="file"] {
    display: block;
}
input[type="range"] {
    display: block;
    width: 100%;
}
select[multiple],
select[size] {
    height: auto;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}
output {
    display: block;
    padding-top: 7px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #6B6B6B;
    font-weight: 600;
    background-color: #fff;
    background-image: none;
    border: 1px solid #fff;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    border-radius: 2px;
    border: 1px solid #CCC;
}
.form-control:focus {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
}
.form-control::-moz-placeholder {
    color: #999;
    opacity: 1;
}
.form-control:-ms-input-placeholder {
    color: #999;
}
.form-control::-webkit-input-placeholder {
    color: #999;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
    background-color: #fff;
    opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
    cursor: not-allowed;
}
textarea.form-control {
    height: auto;
    resize: none;
    margin-top: 10px;
}
input[type="search"] {
    -webkit-appearance: none;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
    input[type="date"].form-control,
    input[type="time"].form-control,
    input[type="datetime-local"].form-control,
    input[type="month"].form-control {
        line-height: 34px;
    }
    input[type="date"].input-sm,
    input[type="time"].input-sm,
    input[type="datetime-local"].input-sm,
    input[type="month"].input-sm,
    .input-group-sm input[type="date"],
    .input-group-sm input[type="time"],
    .input-group-sm input[type="datetime-local"],
    .input-group-sm input[type="month"] {
        line-height: 30px;
    }
    input[type="date"].input-lg,
    input[type="time"].input-lg,
    input[type="datetime-local"].input-lg,
    input[type="month"].input-lg,
    .input-group-lg input[type="date"],
    .input-group-lg input[type="time"],
    .input-group-lg input[type="datetime-local"],
    .input-group-lg input[type="month"] {
        line-height: 46px;
    }
}
.form-group {
    margin-bottom: 8px;
}
.radio,
.checkbox {
    position: relative;
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
}
.radio label,
.checkbox label {
    min-height: 20px;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: normal;
    cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
    position: absolute;
    margin-top: 4px \9;
    margin-left: -20px;
}
.radio + .radio,
.checkbox + .checkbox {
    margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
    position: relative;
    display: inline-block;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: normal;
    vertical-align: middle;
    cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
    margin-top: 0;
    margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="checkbox"].disabled,
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"] {
    cursor: not-allowed;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
    cursor: not-allowed;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
    cursor: not-allowed;
}
.form-control-static {
    min-height: 34px;
    padding-top: 7px;
    padding-bottom: 7px;
    margin-bottom: 0;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
    padding-right: 0;
    padding-left: 0;
}
.input-sm {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
}
select.input-sm {
    height: 30px;
    line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
    height: auto;
}
.form-group-sm .form-control {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
}
.form-group-sm select.form-control {
    height: 30px;
    line-height: 30px;
}
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
    height: auto;
}
.form-group-sm .form-control-static {
    height: 30px;
    min-height: 32px;
    padding: 6px 10px;
    font-size: 12px;
    line-height: 1.5;
}
.input-lg {
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;
}
select.input-lg {
    height: 46px;
    line-height: 46px;
}
textarea.input-lg,
select[multiple].input-lg {
    height: auto;
}
.form-group-lg .form-control {
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;
}
.form-group-lg select.form-control {
    height: 46px;
    line-height: 46px;
}
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
    height: auto;
}
.form-group-lg .form-control-static {
    height: 46px;
    min-height: 38px;
    padding: 11px 16px;
    font-size: 18px;
    line-height: 1.3333333;
}
.has-feedback {
    position: relative;
}
.has-feedback .form-control {
    padding-right: 42.5px;
}
.has-success .form-control-feedback {
    color: #3c763d;
}
.form-control-feedback.bv-no-label.glyphicon.glyphicon-ok {
    color: #63B716;
}
.form-control-feedback.bv-no-label.glyphicon.glyphicon-remove {
    color: #FF523F;
}
.form-control-feedback {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    display: block;
    width: 34px;
    height: 34px;
    line-height: 34px;
    text-align: center;
    pointer-events: none;
}
.input-lg + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
    width: 46px;
    height: 46px;
    line-height: 46px;
}
.input-sm + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
    width: 30px;
    height: 30px;
    line-height: 30px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label {
    color: #3c763d;
}
.has-success .form-control {
    border-color: #25B128;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-success .form-control:focus {
    border-color: #2b542c;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #3c763d;
}
.has-success .form-control-feedback {
    color: #25B128;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label {
    color: #8a6d3b;
}
.has-warning .form-control {
    border-color: #8a6d3b;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-warning .form-control:focus {
    border-color: #66512c;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #8a6d3b;
}
.has-warning .form-control-feedback {
    color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label {
    color: #a94442;
}
.has-error .form-control {
    border-color: #a94442;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-error .form-control:focus {
    border-color: #843534;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
    color: #a94442;
    background-color: #f2dede;
    border-color: #a94442;
}
.has-error .form-control-feedback {
    color: #a94442;
}
.has-error .form-control-feedback {
    color: #FF523F;
}
.has-feedback label ~ .form-control-feedback {
    top: 25px;
}
.has-feedback label.sr-only ~ .form-control-feedback {
    top: 0;
}
.help-block {
    display: block;
    margin-top: 5px;
    margin-bottom: 10px;
    color: #FF523F;
}
@media (min-width: 768px) {
    .form-inline .form-group {
        display: inline-block;
        margin-bottom: 0;
        vertical-align: middle;
    }
    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
    }
    .form-inline .form-control-static {
        display: inline-block;
    }
    .form-inline .input-group {
        display: inline-table;
        vertical-align: middle;
    }
    .form-inline .input-group .input-group-addon,
    .form-inline .input-group .input-group-btn,
    .form-inline .input-group .form-control {
        width: auto;
    }
    .form-inline .input-group > .form-control {
        width: 100%;
    }
    .form-inline .control-label {
        margin-bottom: 0;
        vertical-align: middle;
    }
    .form-inline .radio,
    .form-inline .checkbox {
        display: inline-block;
        margin-top: 0;
        margin-bottom: 0;
        vertical-align: middle;
    }
    .form-inline .radio label,
    .form-inline .checkbox label {
        padding-left: 0;
    }
    .form-inline .radio input[type="radio"],
    .form-inline .checkbox input[type="checkbox"] {
        position: relative;
        margin-left: 0;
    }
    .form-inline .has-feedback .form-control-feedback {
        top: 0;
    }
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
    padding-top: 7px;
    margin-top: 0;
    margin-bottom: 0;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
    min-height: 27px;
}
.form-horizontal .form-group {
    margin-right: -15px;
    margin-left: -15px;
}
@media (min-width: 768px) {
    .form-horizontal .control-label {
        padding-top: 7px;
        margin-bottom: 0;
        text-align: left;
        padding-bottom: 7px;
    }
}
.form-horizontal .has-feedback .form-control-feedback {
    right: 15px;
}
@media (min-width: 768px) {
    .form-horizontal .form-group-lg .control-label {
        padding-top: 14.333333px;
        font-size: 18px;
    }
}
@media (min-width: 768px) {
    .form-horizontal .form-group-sm .control-label {
        padding-top: 6px;
        font-size: 12px;
    }
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
    color: #333;
    text-decoration: none;
}
.btn:active,
.btn.active {
    background-image: none;
    outline: 0;
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
    cursor: not-allowed;
    filter: alpha(opacity=65);
    -webkit-box-shadow: none;
    box-shadow: none;
    opacity: .65;
}
a.btn.disabled,
fieldset[disabled] a.btn {
    pointer-events: none;
}
.btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}
.btn-default:focus,
.btn-default.focus {
    color: #333;
    background-color: #e6e6e6;
    border-color: #8c8c8c;
}
.btn-default:hover {
    color: #333;
    background-color: #e6e6e6;
    border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
    color: #333;
    background-color: #e6e6e6;
    border-color: #adadad;
}
.btn-default:active:hover,
.btn-default.active:hover,
.open > .dropdown-toggle.btn-default:hover,
.btn-default:active:focus,
.btn-default.active:focus,
.open > .dropdown-toggle.btn-default:focus,
.btn-default:active.focus,
.btn-default.active.focus,
.open > .dropdown-toggle.btn-default.focus {
    color: #333;
    background-color: #d4d4d4;
    border-color: #8c8c8c;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
    background-image: none;
}
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
    background-color: #fff;
    border-color: #ccc;
}
.btn-default .badge {
    color: #fff;
    background-color: #333;
}
.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}
.btn-primary:focus,
.btn-primary.focus {
    color: #fff;
    background-color: #286090;
    border-color: #122b40;
}
.btn-primary:hover {
    color: #fff;
    background-color: #286090;
    border-color: #204d74;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #286090;
    border-color: #204d74;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
    color: #fff;
    background-color: #204d74;
    border-color: #122b40;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
    background-image: none;
}
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
    background-color: #337ab7;
    border-color: #2e6da4;
}
.btn-primary .badge {
    color: #337ab7;
    background-color: #fff;
}
.btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}
.btn-success:focus,
.btn-success.focus {
    color: #fff;
    background-color: #449d44;
    border-color: #255625;
}
.btn-success:hover {
    color: #fff;
    background-color: #449d44;
    border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
    color: #fff;
    background-color: #449d44;
    border-color: #398439;
}
.btn-success:active:hover,
.btn-success.active:hover,
.open > .dropdown-toggle.btn-success:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open > .dropdown-toggle.btn-success:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open > .dropdown-toggle.btn-success.focus {
    color: #fff;
    background-color: #398439;
    border-color: #255625;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
    background-image: none;
}
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
    background-color: #5cb85c;
    border-color: #4cae4c;
}
.btn-success .badge {
    color: #5cb85c;
    background-color: #fff;
}
.btn-info {
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
}
.btn-info:focus,
.btn-info.focus {
    color: #fff;
    background-color: #31b0d5;
    border-color: #1b6d85;
}
.btn-info:hover {
    color: #fff;
    background-color: #31b0d5;
    border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
    color: #fff;
    background-color: #31b0d5;
    border-color: #269abc;
}
.btn-info:active:hover,
.btn-info.active:hover,
.open > .dropdown-toggle.btn-info:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open > .dropdown-toggle.btn-info:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open > .dropdown-toggle.btn-info.focus {
    color: #fff;
    background-color: #269abc;
    border-color: #1b6d85;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
    background-image: none;
}
.btn-info.disabled,
.btn-info[disabled],
fieldset[disabled] .btn-info,
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active,
.btn-info.disabled.active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info.active {
    background-color: #5bc0de;
    border-color: #46b8da;
}
.btn-info .badge {
    color: #5bc0de;
    background-color: #fff;
}
.btn-warning {
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236;
}
.btn-warning:focus,
.btn-warning.focus {
    color: #fff;
    background-color: #ec971f;
    border-color: #985f0d;
}
.btn-warning:hover {
    color: #fff;
    background-color: #ec971f;
    border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
    color: #fff;
    background-color: #ec971f;
    border-color: #d58512;
}
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .dropdown-toggle.btn-warning:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .dropdown-toggle.btn-warning:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .dropdown-toggle.btn-warning.focus {
    color: #fff;
    background-color: #d58512;
    border-color: #985f0d;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
    background-image: none;
}
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
    background-color: #f0ad4e;
    border-color: #eea236;
}
.btn-warning .badge {
    color: #f0ad4e;
    background-color: #fff;
}
.btn-danger {
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
}
.btn-danger:focus,
.btn-danger.focus {
    color: #fff;
    background-color: #c9302c;
    border-color: #761c19;
}
.btn-danger:hover {
    color: #fff;
    background-color: #c9302c;
    border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
    color: #fff;
    background-color: #c9302c;
    border-color: #ac2925;
}
.btn-danger:active:hover,
.btn-danger.active:hover,
.open > .dropdown-toggle.btn-danger:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open > .dropdown-toggle.btn-danger:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open > .dropdown-toggle.btn-danger.focus {
    color: #fff;
    background-color: #ac2925;
    border-color: #761c19;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
    background-image: none;
}
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
    background-color: #d9534f;
    border-color: #d43f3a;
}
.btn-danger .badge {
    color: #d9534f;
    background-color: #fff;
}
.btn-link {
    font-weight: normal;
    color: #337ab7;
    border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link.active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
    background-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
    border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
    color: #23527c;
    text-decoration: underline;
    background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
    color: #777;
    text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;
}
.btn-sm,
.btn-group-sm > .btn {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
}
.btn-xs,
.btn-group-xs > .btn {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
}
.btn-block {
    display: block;
    width: 100%;
}
.btn-block + .btn-block {
    margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
    width: 100%;
}
.fade {
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    -o-transition: opacity .15s linear;
    transition: opacity .15s linear;
}
.fade.in {
    opacity: 1;
}
.collapse {
    display: none;
}
.collapse.in {
    display: block;
}
tr.collapse.in {
    display: table-row;
}
tbody.collapse.in {
    display: table-row-group;
}
.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    -webkit-transition-timing-function: ease;
    -o-transition-timing-function: ease;
    transition-timing-function: ease;
    -webkit-transition-duration: .35s;
    -o-transition-duration: .35s;
    transition-duration: .35s;
    -webkit-transition-property: height, visibility;
    -o-transition-property: height, visibility;
    transition-property: height, visibility;
}
.caret {
}
.dropup,
.dropdown {
    position: relative;
}
.dropdown-toggle:focus {
    outline: 0;
}
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, .15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}
.dropdown-menu.pull-right {
    right: 0;
    left: auto;
}
.dropdown-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e5e5e5;
}
.dropdown-menu > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
    color: #262626;
    text-decoration: none;
    background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
    color: #fff;
    text-decoration: none;
    background-color: #337ab7;
    outline: 0;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
    color: #777;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
    text-decoration: none;
    cursor: not-allowed;
    background-color: transparent;
    background-image: none;
    filter: progid: DXImageTransform.Microsoft.gradient(enabled false);
}
.open > .dropdown-menu {
    display: block;
}
.open > a {
    outline: 0;
}
.dropdown-menu-right {
    right: 0;
    left: auto;
}
.dropdown-menu-left {
    right: auto;
    left: 0;
}
.dropdown-header {
    display: block;
    padding: 3px 20px;
    font-size: 12px;
    line-height: 1.42857143;
    color: #777;
    white-space: nowrap;
}
.dropdown-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 990;
}
.pull-right > .dropdown-menu {
    right: 0;
    left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
    content: "";
    border-top: 0;
    border-bottom: 4px dashed;
    border-bottom: 4px solid \9;
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-bottom: 2px;
}
@media (min-width: 768px) {
    .navbar-right .dropdown-menu {
        right: 0;
        left: auto;
    }
    .navbar-right .dropdown-menu-left {
        right: auto;
        left: 0;
    }
}
.btn-group,
.btn-group-vertical {
    position: relative;
    display: inline-block;
    vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
    position: relative;
    float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
    z-index: 2;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
    margin-left: -1px;
}
.btn-toolbar {
    margin-left: -5px;
}
.btn-toolbar .btn,
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
    float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
    margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
    border-radius: 0;
}
.btn-group > .btn:first-child {
    margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.btn-group > .btn-group {
    float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
    border-radius: 0;
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
    outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
    padding-right: 8px;
    padding-left: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
    padding-right: 12px;
    padding-left: 12px;
}
.btn-group.open .dropdown-toggle {
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
}
.btn-group.open .dropdown-toggle.btn-link {
    -webkit-box-shadow: none;
    box-shadow: none;
}
.btn .caret {
    margin-left: 0;
}
.btn-lg .caret {
    border-width: 5px 5px 0;
    border-bottom-width: 0;
}
.dropup .btn-lg .caret {
    border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
    display: block;
    float: none;
    width: 100%;
    max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
    float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
    margin-top: -1px;
    margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
    border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-left-radius: 4px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
    border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.btn-group-justified {
    display: table;
    width: 100%;
    table-layout: fixed;
    border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
    display: table-cell;
    float: none;
    width: 1%;
}
.btn-group-justified > .btn-group .btn {
    width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
    left: auto;
}
[data-toggle="buttons"] > .btn input[type="radio"],
[data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
[data-toggle="buttons"] > .btn input[type="checkbox"],
[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}
.input-group {
    position: relative;
    display: table;
    border-collapse: separate;
}
.input-group[class*="col-"] {
    float: none;
    padding-right: 0;
    padding-left: 0;
}
.input-group .form-control {
    position: relative;
    z-index: 2;
    float: left;
    width: 100%;
    margin-bottom: 0;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
    height: 46px;
    line-height: 46px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
    height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
    height: 30px;
    line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
    height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
    display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
    border-radius: 0;
}
.input-group-addon,
.input-group-btn {
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;
}
.input-group-addon {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: normal;
    line-height: 1;
    color: #555;
    text-align: center;
    background-color: #eee;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.input-group-addon.input-sm {
    padding: 5px 10px;
    font-size: 12px;
    border-radius: 3px;
}
.input-group-addon.input-lg {
    padding: 10px 16px;
    font-size: 18px;
    border-radius: 6px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
    margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group-addon:first-child {
    border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.input-group-addon:last-child {
    border-left: 0;
}
.input-group-btn {
    position: relative;
    font-size: 0;
    white-space: nowrap;
}
.input-group-btn > .btn {
    position: relative;
}
.input-group-btn > .btn + .btn {
    margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
    z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
    margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
    z-index: 2;
    margin-left: -1px;
}
.nav {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.nav > li {
    position: relative;
    display: block;
}
.nav > li > a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
    text-decoration: none;
}
.nav > li.disabled > a {
    color: #777;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
    color: #777;
    text-decoration: none;
    cursor: not-allowed;
    background-color: transparent;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
    background-color: #eee;
    border-color: #337ab7;
}
.nav .nav-divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e5e5e5;
}
.nav > li > a > img {
    max-width: none;
}
.nav-tabs {
    /* border-bottom:1px solid #ddd; */
}
.nav-tabs > li {
    float: left;
    margin-bottom: -1px;
}
.nav-tabs > li > a {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
    color: #969696;
}
.nav-tabs > li > a:hover {
    color: #fff;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
    color: #ffffff;
    cursor: default;
    /* border: 1px solid #ddd; */
}
.nav-tabs.nav-justified {
    width: 100%;
    border-bottom: 0;
}
.nav-tabs.nav-justified > li {
    float: none;
}
.nav-tabs.nav-justified > li > a {
    margin-bottom: 5px;
    text-align: center;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
    top: auto;
    left: auto;
}
@media (min-width: 768px) {
    .nav-tabs.nav-justified > li {
        display: table-cell;
        width: 1%;
    }
    .nav-tabs.nav-justified > li > a {
        margin-bottom: 0;
    }
}
.nav-tabs.nav-justified > li > a {
    margin-right: 0;
    border-radius: 4px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
    border: 1px solid #ddd;
}
@media (min-width: 768px) {
    .nav-tabs.nav-justified > li > a {
        border-bottom: 1px solid #ddd;
        border-radius: 4px 4px 0 0;
    }
    .nav-tabs.nav-justified > .active > a,
    .nav-tabs.nav-justified > .active > a:hover,
    .nav-tabs.nav-justified > .active > a:focus {
        border-bottom-color: #fff;
    }
}
.nav-pills > li {
    float: left;
}
.nav-pills > li > a {
    border-radius: 4px;
}
.nav-pills > li + li {
    margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
    color: #fff;
    background-color: #337ab7;
}
.nav-stacked > li {
    float: none;
}
.nav-stacked > li + li {
    margin-top: 2px;
    margin-left: 0;
}
.nav-justified {
    width: 100%;
}
.nav-justified > li {
    float: none;
}
.nav-justified > li > a {
    margin-bottom: 5px;
    text-align: center;
}
.nav-justified > .dropdown .dropdown-menu {
    top: auto;
    left: auto;
}
@media (min-width: 768px) {
    .nav-justified > li {
        display: table-cell;
        width: 1%;
    }
    .nav-justified > li > a {
        margin-bottom: 0;
    }
}
.nav-tabs-justified {
    border-bottom: 0;
}
.nav-tabs-justified > li > a {
    margin-right: 0;
    border-radius: 4px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
    border: 1px solid #ddd;
}
@media (min-width: 768px) {
    .nav-tabs-justified > li > a {
        border-bottom: 1px solid #ddd;
        border-radius: 4px 4px 0 0;
    }
    .nav-tabs-justified > .active > a,
    .nav-tabs-justified > .active > a:hover,
    .nav-tabs-justified > .active > a:focus {
        border-bottom-color: #fff;
    }
}
.tab-content > .tab-pane {
    display: none;
}
.tab-content > .active {
    display: block;
}
.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 1px solid transparent;
}
@media (min-width: 768px) {
    .navbar {
        border-radius: 4px;
    }
}
@media (min-width: 768px) {
    .navbar-header {
        float: left;
    }
}
.navbar-collapse {
    padding-right: 15px;
    padding-left: 15px;
    overflow-x: visible;
    -webkit-overflow-scrolling: touch;
    border-top: 1px solid transparent;
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
}
.navbar-collapse.in {
    overflow-y: auto;
}
@media (min-width: 768px) {
    .navbar-collapse {
        width: auto;
        border-top: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .navbar-collapse.collapse {
        display: block !important;
        height: auto !important;
        padding-bottom: 0;
        overflow: visible !important;
    }
    .navbar-collapse.in {
        overflow-y: visible;
    }
    .navbar-fixed-top .navbar-collapse,
    .navbar-static-top .navbar-collapse,
    .navbar-fixed-bottom .navbar-collapse {
        padding-right: 0;
        padding-left: 0;
    }
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
    max-height: 340px;
}
@media (max-device-width: 480px) and (orientation: landscape) {
    .navbar-fixed-top .navbar-collapse,
    .navbar-fixed-bottom .navbar-collapse {
        max-height: 200px;
    }
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
    margin-right: -15px;
    margin-left: -15px;
}
@media (min-width: 768px) {
    .container > .navbar-header,
    .container-fluid > .navbar-header,
    .container > .navbar-collapse,
    .container-fluid > .navbar-collapse {
        margin-right: 0;
        margin-left: 0;
    }
}
.navbar-static-top {
    z-index: 1000;
    border-width: 0 0 1px;
}
@media (min-width: 768px) {
    .navbar-static-top {
        border-radius: 0;
    }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
    position: fixed;
    right: 0;
    left: 0;
    z-index: 1030;
}
@media (min-width: 768px) {
    .navbar-fixed-top,
    .navbar-fixed-bottom {
        border-radius: 0;
    }
}
.navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px;
}
.navbar-fixed-bottom {
    bottom: 0;
    margin-bottom: 0;
    border-width: 1px 0 0;
}
.navbar-brand {
    float: left;
    height: 50px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
}
.navbar-brand:hover,
.navbar-brand:focus {
    text-decoration: none;
}
.navbar-brand > img {
    display: block;
}
@media (min-width: 768px) {
    .navbar > .container .navbar-brand,
    .navbar > .container-fluid .navbar-brand {
        margin-left: -15px;
    }
}
.navbar-toggle {
    position: relative;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-right: 15px;
    margin-bottom: 8px;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.navbar-toggle:focus {
    outline: 0;
}
.navbar-toggle .icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
    margin-top: 4px;
}
@media (min-width: 768px) {
    .navbar-toggle {
        display: none;
    }
}
.navbar-nav {
    margin: 7.5px -15px;
}
.navbar-nav > li > a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
}
@media (max-width: 767px) {
    .navbar-nav .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .navbar-nav .open .dropdown-menu > li > a,
    .navbar-nav .open .dropdown-menu .dropdown-header {
        padding: 5px 15px 5px 25px;
    }
    .navbar-nav .open .dropdown-menu > li > a {
        line-height: 20px;
    }
    .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar-nav .open .dropdown-menu > li > a:focus {
        background-image: none;
    }
}
@media (min-width: 768px) {
    .navbar-nav {
        float: left;
        margin: 0;
    }
    .navbar-nav > li {
        float: left;
    }
    .navbar-nav > li > a {
        padding-top: 15px;
        padding-bottom: 15px;
    }
}
.navbar-form {
    padding: 10px 15px;
    margin-top: 8px;
    margin-right: -15px;
    margin-bottom: 8px;
    margin-left: -15px;
    border-top: 1px solid transparent;
    border-bottom: 1px solid transparent;
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
}
@media (min-width: 768px) {
    .navbar-form .form-group {
        display: inline-block;
        margin-bottom: 0;
        vertical-align: middle;
    }
    .navbar-form .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
    }
    .navbar-form .form-control-static {
        display: inline-block;
    }
    .navbar-form .input-group {
        display: inline-table;
        vertical-align: middle;
    }
    .navbar-form .input-group .input-group-addon,
    .navbar-form .input-group .input-group-btn,
    .navbar-form .input-group .form-control {
        width: auto;
    }
    .navbar-form .input-group > .form-control {
        width: 100%;
    }
    .navbar-form .control-label {
        margin-bottom: 0;
        vertical-align: middle;
    }
    .navbar-form .radio,
    .navbar-form .checkbox {
        display: inline-block;
        margin-top: 0;
        margin-bottom: 0;
        vertical-align: middle;
    }
    .navbar-form .radio label,
    .navbar-form .checkbox label {
        padding-left: 0;
    }
    .navbar-form .radio input[type="radio"],
    .navbar-form .checkbox input[type="checkbox"] {
        position: relative;
        margin-left: 0;
    }
    .navbar-form .has-feedback .form-control-feedback {
        top: 0;
    }
}
@media (max-width: 767px) {
    .navbar-form .form-group {
        margin-bottom: 5px;
    }
    .navbar-form .form-group:last-child {
        margin-bottom: 0;
    }
}
@media (min-width: 768px) {
    .navbar-form {
        width: auto;
        padding-top: 0;
        padding-bottom: 0;
        margin-right: 0;
        margin-left: 0;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
}
.navbar-nav > li > .dropdown-menu {
    margin-top: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
    margin-bottom: 0;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.navbar-btn {
    margin-top: 8px;
    margin-bottom: 8px;
}
.navbar-btn.btn-sm {
    margin-top: 10px;
    margin-bottom: 10px;
}
.navbar-btn.btn-xs {
    margin-top: 14px;
    margin-bottom: 14px;
}
.navbar-text {
    margin-top: 15px;
    margin-bottom: 15px;
}
@media (min-width: 768px) {
    .navbar-text {
        float: left;
        margin-right: 15px;
        margin-left: 15px;
    }
}
@media (min-width: 768px) {
    .navbar-left {
        float: left !important;
    }
    .navbar-right {
        float: right !important;
        margin-right: -15px;
    }
    .navbar-right ~ .navbar-right {
        margin-right: 0;
    }
}
.navbar-default {
    background-color: #f8f8f8;
    border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
    color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
    color: #5e5e5e;
    background-color: transparent;
}
.navbar-default .navbar-text {
    color: #777;
}
.navbar-default .navbar-nav > li > a {
    color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
    color: #333;
    background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
}
.navbar-default .navbar-toggle {
    border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
    background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
    background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
    border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
    color: #555;
    background-color: #e7e7e7;
}
@media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
        color: #777;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #333;
        background-color: transparent;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
        color: #555;
        background-color: #e7e7e7;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
    .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
        color: #ccc;
        background-color: transparent;
    }
}
.navbar-default .navbar-link {
    color: #777;
}
.navbar-default .navbar-link:hover {
    color: #333;
}
.navbar-default .btn-link {
    color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
    color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
    color: #ccc;
}
.navbar-inverse {
    background-color: #222;
    border-color: #080808;
}
.navbar-inverse .navbar-brand {
    color: #9d9d9d;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
    color: #fff;
    background-color: transparent;
}
.navbar-inverse .navbar-text {
    color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a {
    color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
    color: #fff;
    background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
    color: #fff;
    background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
    color: #444;
    background-color: transparent;
}
.navbar-inverse .navbar-toggle {
    border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
    background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
    background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
    border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
    color: #fff;
    background-color: #080808;
}
@media (max-width: 767px) {
    .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
        border-color: #080808;
    }
    .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
        background-color: #080808;
    }
    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
        color: #9d9d9d;
    }
    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #fff;
        background-color: transparent;
    }
    .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
    .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
    .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
        color: #fff;
        background-color: #080808;
    }
    .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
    .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
    .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
        color: #444;
        background-color: transparent;
    }
}
.navbar-inverse .navbar-link {
    color: #9d9d9d;
}
.navbar-inverse .navbar-link:hover {
    color: #fff;
}
.navbar-inverse .btn-link {
    color: #9d9d9d;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
    color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
    color: #444;
}
.breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #f5f5f5;
    border-radius: 4px;
}
.breadcrumb > li {
    display: inline-block;
}
.breadcrumb > li + li:before {
    padding: 0 5px;
    color: #ccc;
    content: "/\00a0";
}
.breadcrumb > .active {
    color: #E52B2B;
}
.pager {
    padding-left: 0;
    margin: 20px 0;
    text-align: center;
    list-style: none;
}
.pager li {
    display: inline;
}
.pager li > a,
.pager li > span {
    display: inline-block;
    padding: 5px 14px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
    text-decoration: none;
    background-color: #eee;
}
.pager .next > a,
.pager .next > span {
    float: right;
}
.pager .previous > a,
.pager .previous > span {
    float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
    color: #777;
    cursor: not-allowed;
    background-color: #fff;
}
.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
a.label:hover,
a.label:focus {
    color: #fff;
    text-decoration: none;
    cursor: pointer;
}
.label:empty {
    display: none;
}
.btn .label {
    position: relative;
    top: -1px;
}
.label-default {
    background-color: #777;
}
.label-default[href]:hover,
.label-default[href]:focus {
    background-color: #5e5e5e;
}
.label-primary {
    background-color: #337ab7;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
    background-color: #286090;
}
.label-success {
    background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
    background-color: #449d44;
}
.label-info {
    background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
    background-color: #31b0d5;
}
.label-warning {
    background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
    background-color: #ec971f;
}
.label-danger {
    background-color: #d9534f;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
    background-color: #c9302c;
}
.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
}
.badge:empty {
    display: none;
}
.btn .badge {
    position: relative;
    top: -1px;
}
.btn-xs .badge,
.btn-group-xs > .btn .badge {
    top: 0;
    padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
    color: #fff;
    text-decoration: none;
    cursor: pointer;
}
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
    color: #337ab7;
    background-color: #fff;
}
.list-group-item > .badge {
    float: right;
}
.list-group-item > .badge + .badge {
    margin-right: 5px;
}
.nav-pills > li > a > .badge {
    margin-left: 3px;
}
.jumbotron {
    padding-top: 30px;
    padding-bottom: 30px;
    margin-bottom: 30px;
    color: inherit;
    background-color: #eee;
}
.jumbotron h1,
.jumbotron .h1 {
    color: inherit;
}
.jumbotron p {
    margin-bottom: 15px;
    font-size: 21px;
    font-weight: 200;
}
.jumbotron > hr {
    border-top-color: #d5d5d5;
}
.container .jumbotron,
.container-fluid .jumbotron {
    border-radius: 6px;
}
.jumbotron .container {
    max-width: 100%;
}
@media screen and (min-width: 768px) {
    .jumbotron {
        padding-top: 48px;
        padding-bottom: 48px;
    }
    .container .jumbotron,
    .container-fluid .jumbotron {
        padding-right: 60px;
        padding-left: 60px;
    }
    .jumbotron h1,
    .jumbotron .h1 {
        font-size: 63px;
    }
}
.thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
    margin-right: auto;
    margin-left: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
    border-color: #337ab7;
}
.thumbnail .caption {
    padding: 9px;
    color: #333;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.alert h4 {
    margin-top: 0;
    color: inherit;
}
.alert .alert-link {
    font-weight: bold;
}
.alert > p,
.alert > ul {
    margin-bottom: 0;
}
.alert > p + p {
    margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
    padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit;
}
.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.alert-success hr {
    border-top-color: #c9e2b3;
}
.alert-success .alert-link {
    color: #2b542c;
}
.alert-info {
    color: #31708f;
    background-color: #d9edf7;
    border-color: #bce8f1;
}
.alert-info hr {
    border-top-color: #a6e1ec;
}
.alert-info .alert-link {
    color: #245269;
}
.alert-warning {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc;
}
.alert-warning hr {
    border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
    color: #66512c;
}
.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}
.alert-danger hr {
    border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
    color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
    from {
        background-position: 40px 0;
    }
    to {
        background-position: 0 0;
    }
}
@-o-keyframes progress-bar-stripes {
    from {
        background-position: 40px 0;
    }
    to {
        background-position: 0 0;
    }
}
@keyframes progress-bar-stripes {
    from {
        background-position: 40px 0;
    }
    to {
        background-position: 0 0;
    }
}
.progress {
    height: 20px;
    margin-bottom: 20px;
    overflow: hidden;
    background-color: #f5f5f5;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}
.progress-bar {
    float: left;
    width: 0;
    height: 100%;
    font-size: 12px;
    line-height: 20px;
    color: #fff;
    text-align: center;
    background-color: #337ab7;
    -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
    -webkit-transition: width .6s ease;
    -o-transition: width .6s ease;
    transition: width .6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    -webkit-background-size: 40px 40px;
    background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
    -webkit-animation: progress-bar-stripes 2s linear infinite;
    -o-animation: progress-bar-stripes 2s linear infinite;
    animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
    background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
    background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
    background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
    background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.media {
    margin-top: 15px;
}
.media:first-child {
    margin-top: 0;
}
.media,
.media-body {
    overflow: hidden;
    zoom: 1;
}
.media-body {
    width: 10000px;
}
.media-object {
    display: block;
}
.media-object.img-thumbnail {
    max-width: none;
}
.media-right,
.media > .pull-right {
    padding-left: 10px;
}
.media-left,
.media > .pull-left {
    padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
    display: table-cell;
    vertical-align: top;
}
.media-middle {
    vertical-align: middle;
}
.media-bottom {
    vertical-align: bottom;
}
.media-heading {
    margin-top: 0;
    margin-bottom: 5px;
}
.media-list {
    padding-left: 0;
    list-style: none;
}
.list-group {
    padding-left: 0;
    margin-bottom: 20px;
}
.list-group-item {
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid #ddd;
}
.list-group-item:first-child {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}
.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}
a.list-group-item,
button.list-group-item {
    color: #555;
}
a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
    color: #333;
}
a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
    color: #555;
    text-decoration: none;
    background-color: #f5f5f5;
}
button.list-group-item {
    width: 100%;
    text-align: left;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
    color: #777;
    cursor: not-allowed;
    background-color: #eee;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
    color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
    color: #777;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
    z-index: 2;
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
    color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
    color: #c7ddef;
}
.list-group-item-success {
    color: #3c763d;
    background-color: #dff0d8;
}
a.list-group-item-success,
button.list-group-item-success {
    color: #3c763d;
}
a.list-group-item-success .list-group-item-heading,
button.list-group-item-success .list-group-item-heading {
    color: inherit;
}
a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
    color: #3c763d;
    background-color: #d0e9c6;
}
a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
    color: #fff;
    background-color: #3c763d;
    border-color: #3c763d;
}
.list-group-item-info {
    color: #31708f;
    background-color: #d9edf7;
}
a.list-group-item-info,
button.list-group-item-info {
    color: #31708f;
}
a.list-group-item-info .list-group-item-heading,
button.list-group-item-info .list-group-item-heading {
    color: inherit;
}
a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
    color: #31708f;
    background-color: #c4e3f3;
}
a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
    color: #fff;
    background-color: #31708f;
    border-color: #31708f;
}
.list-group-item-warning {
    color: #8a6d3b;
    background-color: #fcf8e3;
}
a.list-group-item-warning,
button.list-group-item-warning {
    color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading,
button.list-group-item-warning .list-group-item-heading {
    color: inherit;
}
a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
    color: #8a6d3b;
    background-color: #faf2cc;
}
a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
    color: #fff;
    background-color: #8a6d3b;
    border-color: #8a6d3b;
}
.list-group-item-danger {
    color: #a94442;
    background-color: #f2dede;
}
a.list-group-item-danger,
button.list-group-item-danger {
    color: #a94442;
}
a.list-group-item-danger .list-group-item-heading,
button.list-group-item-danger .list-group-item-heading {
    color: inherit;
}
a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
    color: #a94442;
    background-color: #ebcccc;
}
a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
    color: #fff;
    background-color: #a94442;
    border-color: #a94442;
}
.list-group-item-heading {
    margin-top: 0;
    margin-bottom: 5px;
}
.list-group-item-text {
    margin-bottom: 0;
    line-height: 1.3;
}
.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}
.panel-body {
    padding: 15px;
}
.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.panel-heading > .dropdown .dropdown-toggle {
    color: inherit;
}
.panel-title {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px;
    color: inherit;
}
.panel-title > a,
.panel-title > small,
.panel-title > .small,
.panel-title > small > a,
.panel-title > .small > a {
    color: inherit;
}
.panel-footer {
    padding: 10px 15px;
    background-color: #f5f5f5;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}
.panel > .list-group,
.panel > .panel-collapse > .list-group {
    margin-bottom: 0;
}
.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
    border-width: 1px 0;
    border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child,
.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
    border-top: 0;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
    border-bottom: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}
.panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.panel-heading + .list-group .list-group-item:first-child {
    border-top-width: 0;
}
.list-group + .panel-footer {
    border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
    margin-bottom: 0;
}
.panel > .table caption,
.panel > .table-responsive > .table caption,
.panel > .panel-collapse > .table caption {
    padding-right: 15px;
    padding-left: 15px;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
    border-top-left-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
    border-top-right-radius: 3px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
    border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
    border-bottom-right-radius: 3px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
    border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
    border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
    border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
    border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
    border-bottom: 0;
}
.panel > .table-responsive {
    margin-bottom: 0;
    border: 0;
}
.panel-group {
    margin-bottom: 20px;
}
.panel-group .panel {
    margin-bottom: 0;
    border-radius: 4px;
}
.panel-group .panel + .panel {
    margin-top: 5px;
}
.panel-group .panel-heading {
    border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body,
.panel-group .panel-heading + .panel-collapse > .list-group {
    border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
    border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
    border-bottom: 1px solid #ddd;
}
.panel-default {
    border-color: #ddd;
}
.panel-default > .panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #ddd;
}
.panel-default > .panel-heading .badge {
    color: #f5f5f5;
    background-color: #333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #ddd;
}
.panel-primary {
    border-color: #337ab7;
}
.panel-primary > .panel-heading {
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #337ab7;
}
.panel-primary > .panel-heading .badge {
    color: #337ab7;
    background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #337ab7;
}
.panel-success {
    border-color: #d6e9c6;
}
.panel-success > .panel-heading {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #d6e9c6;
}
.panel-success > .panel-heading .badge {
    color: #dff0d8;
    background-color: #3c763d;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #d6e9c6;
}
.panel-info {
    border-color: #bce8f1;
}
.panel-info > .panel-heading {
    color: #31708f;
    background-color: #d9edf7;
    border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #bce8f1;
}
.panel-info > .panel-heading .badge {
    color: #d9edf7;
    background-color: #31708f;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #bce8f1;
}
.panel-warning {
    border-color: #faebcc;
}
.panel-warning > .panel-heading {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #faebcc;
}
.panel-warning > .panel-heading .badge {
    color: #fcf8e3;
    background-color: #8a6d3b;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #faebcc;
}
.panel-danger {
    border-color: #ebccd1;
}
.panel-danger > .panel-heading {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #ebccd1;
}
.panel-danger > .panel-heading .badge {
    color: #f2dede;
    background-color: #a94442;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #ebccd1;
}
.embed-responsive {
    position: relative;
    display: block;
    height: 0;
    padding: 0;
    overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}
.embed-responsive-16by9 {
    padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
    padding-bottom: 75%;
}
.well {
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
}
.well blockquote {
    border-color: #ddd;
    border-color: rgba(0, 0, 0, .15);
}
.well-lg {
    padding: 24px;
    border-radius: 6px;
}
.well-sm {
    padding: 9px;
    border-radius: 3px;
}
.close {
    float: right;
    font-size: 21px;
    font-weight: bold;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .2;
}
.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    filter: alpha(opacity=50);
    opacity: .5;
}
button.close {
    -webkit-appearance: none;
    padding: 0;
    cursor: pointer;
    background: transparent;
    border: 0;
}
.modal-open {
    overflow-x: hidden;
}
.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    -webkit-overflow-scrolling: touch;
    outline: 0;
}
.modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform .3s ease-out;
    -o-transition: -o-transform .3s ease-out;
    transition: transform .3s ease-out;
    -webkit-transform: translate(0, -25%);
    -ms-transform: translate(0, -25%);
    -o-transform: translate(0, -25%);
    transform: translate(0, -25%);
}
.modal.in .modal-dialog {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0);
}
.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}
.modal-dialog {
    position: relative;
    width: auto;
    margin: 10px;
}
.modal-content {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
}
.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #000;
}
.modal-backdrop.fade {
    filter: alpha(opacity=0);
    opacity: 0;
}
.modal-backdrop.in {
    filter: alpha(opacity=50);
    opacity: .5;
}
.modal-header {
    min-height: 16.42857143px;
    padding: 15px;
    border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
    margin-top: -2px;
}
.modal-title {
    margin: 0;
    line-height: 1.42857143;
}
.modal-body {
    position: relative;
    padding: 15px;
}
.modal-footer {
    padding: 15px;
    text-align: right;
    border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
    margin-bottom: 0;
    margin-left: 5px;
}
.modal-footer .btn-group .btn + .btn {
    margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
    margin-left: 0;
}
.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll;
}
@media (min-width: 768px) {
    .modal-dialog {
        width: 600px;
        margin: 30px auto;
    }
    .modal-content {
        -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
    }
    .modal-sm {
        width: 300px;
    }
}
@media (min-width: 992px) {
    .modal-lg {
        width: 900px;
    }
}
.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 12px;
    font-style: normal;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
    white-space: normal;
    filter: alpha(opacity=0);
    opacity: 0;
    line-break: auto;
}
.tooltip.in {
    filter: alpha(opacity=90);
    opacity: .9;
}
.tooltip.top {
    padding: 5px 0;
    margin-top: -3px;
}
.tooltip.right {
    padding: 0 5px;
    margin-left: 3px;
}
.tooltip.bottom {
    padding: 5px 0;
    margin-top: 3px;
}
.tooltip.left {
    padding: 0 5px;
    margin-left: -3px;
}
.tooltip-inner {
    max-width: 200px;
    padding: 3px 8px;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: 4px;
}
.tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
}
.tooltip.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 5px 5px 0;
    border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
    right: 5px;
    bottom: 0;
    margin-bottom: -5px;
    border-width: 5px 5px 0;
    border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
    bottom: 0;
    left: 5px;
    margin-bottom: -5px;
    border-width: 5px 5px 0;
    border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
    top: 50%;
    left: 0;
    margin-top: -5px;
    border-width: 5px 5px 5px 0;
    border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
    top: 50%;
    right: 0;
    margin-top: -5px;
    border-width: 5px 0 5px 5px;
    border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
    top: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
    top: 0;
    right: 5px;
    margin-top: -5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
    top: 0;
    left: 5px;
    margin-top: -5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000;
}
.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: none;
    max-width: 276px;
    padding: 1px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-style: normal;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
    white-space: normal;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
    box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
    line-break: auto;
}
.popover.top {
    margin-top: -10px;
}
.popover.right {
    margin-left: 10px;
}
.popover.bottom {
    margin-top: 10px;
}
.popover.left {
    margin-left: -10px;
}
.popover-title {
    padding: 8px 14px;
    margin: 0;
    font-size: 14px;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-radius: 5px 5px 0 0;
}
.popover-content {
    padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
}
.popover > .arrow {
    border-width: 11px;
}
.popover > .arrow:after {
    content: "";
    border-width: 10px;
}
.popover.top > .arrow {
    bottom: -11px;
    left: 50%;
    margin-left: -11px;
    border-top-color: #999;
    border-top-color: rgba(0, 0, 0, .25);
    border-bottom-width: 0;
}
.popover.top > .arrow:after {
    bottom: 1px;
    margin-left: -10px;
    content: " ";
    border-top-color: #fff;
    border-bottom-width: 0;
}
.popover.right > .arrow {
    top: 50%;
    left: -11px;
    margin-top: -11px;
    border-right-color: #999;
    border-right-color: rgba(0, 0, 0, .25);
    border-left-width: 0;
}
.popover.right > .arrow:after {
    bottom: -10px;
    left: 1px;
    content: " ";
    border-right-color: #fff;
    border-left-width: 0;
}
.popover.bottom > .arrow {
    top: -11px;
    left: 50%;
    margin-left: -11px;
    border-top-width: 0;
    border-bottom-color: #999;
    border-bottom-color: rgba(0, 0, 0, .25);
}
.popover.bottom > .arrow:after {
    top: 1px;
    margin-left: -10px;
    content: " ";
    border-top-width: 0;
    border-bottom-color: #fff;
}
.popover.left > .arrow {
    top: 50%;
    right: -11px;
    margin-top: -11px;
    border-right-width: 0;
    border-left-color: #999;
    border-left-color: rgba(0, 0, 0, .25);
}
.popover.left > .arrow:after {
    right: 1px;
    bottom: -10px;
    content: " ";
    border-right-width: 0;
    border-left-color: #fff;
}
.carousel {
    position: relative;
}
.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}
.carousel-inner > .item {
    position: relative;
    display: none;
    -webkit-transition: .6s ease-in-out left;
    -o-transition: .6s ease-in-out left;
    transition: .6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
    line-height: 1;
    width: 100%;
}
@media all and (transform-3d),
(-webkit-transform-3d) {
    .carousel-inner > .item {
        -webkit-transition: -webkit-transform .6s ease-in-out;
        -o-transition: -o-transform .6s ease-in-out;
        transition: transform .6s ease-in-out;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        perspective: 1000px;
    }
    .carousel-inner > .item.next,
    .carousel-inner > .item.active.right {
        left: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
    }
    .carousel-inner > .item.prev,
    .carousel-inner > .item.active.left {
        left: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }
    .carousel-inner > .item.next.left,
    .carousel-inner > .item.prev.right,
    .carousel-inner > .item.active {
        left: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
    display: block;
}
.carousel-inner > .active {
    left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
    position: absolute;
    top: 0;
    width: 100%;
}
.carousel-inner > .next {
    left: 100%;
}
.carousel-inner > .prev {
    left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
    left: 0;
}
.carousel-inner > .active.left {
    left: -100%;
}
.carousel-inner > .active.right {
    left: 100%;
}
.carousel-control {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 15%;
    font-size: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
    filter: alpha(opacity=50);
    opacity: .5;
}
.carousel-control.left {
    background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
    background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
    background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
    background-repeat: repeat-x;
}
.carousel-control.right {
    right: 0;
    left: auto;
    background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
    background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
    background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
    background-repeat: repeat-x;
}
.carousel-control:hover,
.carousel-control:focus {
    color: #fff;
    text-decoration: none;
    filter: alpha(opacity=90);
    outline: 0;
    opacity: .9;
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -10px;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
    left: 50%;
    margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
    right: 50%;
    margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
    width: 20px;
    height: 20px;
    font-family: serif;
    line-height: 1;
}
.carousel-control .icon-prev:before {
    content: '\2039';
}
.carousel-control .icon-next:before {
    content: '\203a';
}
.carousel-indicators {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 15;
    width: 60%;
    padding-left: 0;
    margin-left: -30%;
    text-align: center;
    list-style: none;
}
.carousel-indicators li {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #000 \9;
    background-color: rgba(0, 0, 0, 0);
    border: 1px solid #fff;
    border-radius: 10px;
}
.carousel-indicators .active {
    width: 12px;
    height: 12px;
    margin: 0;
    background-color: #fff;
}
.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
}
.carousel-caption .btn {
    text-shadow: none;
}
@media screen and (min-width: 768px) {
    .carousel-control .glyphicon-chevron-left,
    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-prev,
    .carousel-control .icon-next {
        width: 30px;
        height: 30px;
        margin-top: -15px;
        font-size: 30px;
    }
    .carousel-control .glyphicon-chevron-left,
    .carousel-control .icon-prev {
        margin-left: -15px;
    }
    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next {
        margin-right: -15px;
    }
    .carousel-caption {
        right: 20%;
        left: 20%;
        padding-bottom: 30px;
    }
    .carousel-indicators {
        bottom: 20px;
    }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-footer:before,
.modal-footer:after {
    display: table;
    content: " ";
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-footer:after {
    clear: both;
}
.center-block {
    display: block;
    margin-right: auto;
    margin-left: auto;
}
.pull-right {
    float: right !important;
}
.pull-left {
    float: left !important;
}
.hide {
    display: none !important;
}
.show {
    display: block !important;
}
.invisible {
    visibility: hidden;
}
.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}
.hidden {
    display: none !important;
}
.affix {
    position: fixed;
}
@-ms-viewport {
    width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
    display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
    display: none !important;
}
@media (max-width: 767px) {
    .visible-xs {
        display: block !important;
    }
    table.visible-xs {
        display: table !important;
    }
    tr.visible-xs {
        display: table-row !important;
    }
    th.visible-xs,
    td.visible-xs {
        display: table-cell !important;
    }
}
@media (max-width: 767px) {
    .visible-xs-block {
        display: block !important;
    }
}
@media (max-width: 767px) {
    .visible-xs-inline {
        display: inline !important;
    }
}
@media (max-width: 767px) {
    .visible-xs-inline-block {
        display: inline-block !important;
    }
}
@media (min-width: 768px) and (max-width: 991px) {
    .visible-sm {
        display: block !important;
    }
    table.visible-sm {
        display: table !important;
    }
    tr.visible-sm {
        display: table-row !important;
    }
    th.visible-sm,
    td.visible-sm {
        display: table-cell !important;
    }
}
@media (min-width: 768px) and (max-width: 991px) {
    .visible-sm-block {
        display: block !important;
    }
}
@media (min-width: 768px) and (max-width: 991px) {
    .visible-sm-inline {
        display: inline !important;
    }
}
@media (min-width: 768px) and (max-width: 991px) {
    .visible-sm-inline-block {
        display: inline-block !important;
    }
}
@media (min-width: 992px) and (max-width: 1199px) {
    .visible-md {
        display: block !important;
    }
    table.visible-md {
        display: table !important;
    }
    tr.visible-md {
        display: table-row !important;
    }
    th.visible-md,
    td.visible-md {
        display: table-cell !important;
    }
}
@media (min-width: 992px) and (max-width: 1199px) {
    .visible-md-block {
        display: block !important;
    }
}
@media (min-width: 992px) and (max-width: 1199px) {
    .visible-md-inline {
        display: inline !important;
    }
}
@media (min-width: 992px) and (max-width: 1199px) {
    .visible-md-inline-block {
        display: inline-block !important;
    }
}
@media (min-width: 1200px) {
    .visible-lg {
        display: block !important;
    }
    table.visible-lg {
        display: table !important;
    }
    tr.visible-lg {
        display: table-row !important;
    }
    th.visible-lg,
    td.visible-lg {
        display: table-cell !important;
    }
}
@media (min-width: 1200px) {
    .visible-lg-block {
        display: block !important;
    }
}
@media (min-width: 1200px) {
    .visible-lg-inline {
        display: inline !important;
    }
}
@media (min-width: 1200px) {
    .visible-lg-inline-block {
        display: inline-block !important;
    }
}
@media (max-width: 767px) {
    .hidden-xs {}
}
@media (min-width: 768px) and (max-width: 991px) {
    .hidden-sm {
        display: none !important;
    }
}
@media (min-width: 992px) and (max-width: 1199px) {
    .hidden-md {
        display: none !important;
    }
}
@media (min-width: 1200px) {
    .hidden-lg {
        display: none !important;
    }
}
.visible-print {
    display: none !important;
}
@media print {
    .visible-print {
        display: block !important;
    }
    table.visible-print {
        display: table !important;
    }
    tr.visible-print {
        display: table-row !important;
    }
    th.visible-print,
    td.visible-print {
        display: table-cell !important;
    }
}
.visible-print-block {
    display: none !important;
}
@media print {
    .visible-print-block {
        display: block !important;
    }
}
.visible-print-inline {
    display: none !important;
}
@media print {
    .visible-print-inline {
        display: inline !important;
    }
}
.visible-print-inline-block {
    display: none !important;
}
@media print {
    .visible-print-inline-block {
        display: inline-block !important;
    }
}
@media print {
    .hidden-print {
        display: none !important;
    }
}

/*-----------------------------------------
 [MASTER RESPONSIVE STYLE SHEET]
 * Project: Directory Pro - Local Listing & Directory Template
 * Version: v1.1.1
 * Copyright 2017-2020 rn53themes
 * Last Changes: 05/06/2017
 * Author: RN53 Themes
 * Email:      rn53themes@gmail.com
 * Website:    http://www.rn53themes.net 
 -----------------------------------------------*/
/*-------------------------------------------------------*/
/* When the browser is between 0px and 1330px wide,below css will be applied.
/*-------------------------------------------------------*/

@media screen and (max-width: 1330px) {
    .tz-l {
        width: 30%;
    }
    .tz-2 {
        width: 68%;
        margin-right: 0px;
    }
    .tz-3 {
        width: 100%;
        margin-top: 20px;
    }
    .tz-2-admin {
        width: 100%;
    }
    .tz-invo-full {
        padding: 0px;
    }
    .tz-invo-full1 {
        width: 100%;
        margin: 0px;
    }
}
/*-------------------------------------------------------*/
/* When the browser is between 0px and 1200px wide,below css will be applied.
/*-------------------------------------------------------*/

@media screen and (max-width: 1200px) {
    .ts-menu-2 {
        display: none;
    }
    .ts-menu-4 {
        display: none;
    }
    .ts-menu-1 {
        width: 15%;
    }
    .ts-menu-3 {
        width: 70%;
        padding: 0px;
    }
    .ts-menu-5 {
        width: 15%;
        float: left;
    }
    .ts-menu-5 span {} .ts-menu-5 span i {
		color: #fff;
		padding: 11px;
		background: #01a0d8;
		margin: 10px 9px 9px 30px;
		font-size: 16px;
		cursor: pointer;
		box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.45);
		border-radius: 35px;
    }
    .ts-menu-1 a img {
        margin-left: 18px;
        width: 43px;
        padding: 0px;
        margin: 6px 28px;
    }
    .v3-mob-top-menu {
        display: block;
    }
    .v3-top-menu {
        display: none;
    }
	.email-tem-inn {
		width: 100%;
	}	
}
@media screen and (min-width: 1200px) {
    .ts-menu-5 {
        display: none;
        width: 10%;
    }
}
@media screen and (max-width: 1200px) and (min-width: 992px) {
    .dir-ho-t2r {
        padding: 25px 0px;
    }
}
/*-------------------------------------------------------*/
/* When the browser is between 0px and 992px wide,below css will be applied.
/*-------------------------------------------------------*/

@media screen and (max-width: 992px) {
    .com-padd {
        padding-top: 70px;
        padding-bottom: 70px;
    }
    .mar-bot-red-0 {
        margin-bottom: 0px;
    }
    .mar-bot-red-m30 {
        margin-bottom: -30px;
    }
    .pad-bot-red-40 {
        padding-bottom: 40px;
    }
    .hom-pro {
        margin-bottom: 30px;
    }
    .dir-ho-com-head {
        padding: 50px 0px 50px 0px;
    }
    .com-padd-redu-top {
        padding-top: 0px;
    }
    .com-padd-redu-bot {
        padding-bottom: 0px;
    }
    .dir-ho-best-list-p1 img {
        height: auto;
    }
    .dir-ho-dis {
        font-size: 48px;
        display: block;
        margin-top: 6px;
        padding: 12px;
    }
    .dir-rib-bod a {
        display: initial;
    }
    .sa-home-spec {
        background: linear-gradient(to bottom, #e8e8e8 50%, #1b2629 50%);
    }
    .dir-ho-t-tit h1 {
        padding-top: 0%;
    }
    .dir-ho-best-list {
        margin-bottom: 50px;
    }
    .dir-ho-best-list-sp-redu {
        margin-bottom: 0px;
    }
    .dir-ho-t2l form ul {
        border-radius: 0px;
        margin-bottom: 50px;
    }
    .cbb3-mob-app {
        margin: 0 auto;
        width: 90%;
    }
    .dir-alp-con-left {
        padding-right: 0px !important;
    }
    .dir-alp-r-list {
        padding-bottom: 15px;
    }
    .dir-pr-p2-soc {
        float: left;
        padding-bottom: 20px;
    }
    .dir-ri-pr-pro-dec-left {
        width: 100%;
    }
    .dir-ri-pr-pro-dec-right {
        width: 100%;
    }
    .dir-ri-pr-pro-dec-right h3 {
        padding-top: 25px;
    }
    .dir-hr1 {
        width: 100%;
    }
    .home-list-pop-desc {
        padding-top: 15px;
    }
    .lpe-com {
        width: 100%;
        float: left;
    }
    .lpe-left {
        padding: 0px 0px 50px 0px;
    }
    .pg-list-1 {
        padding: 100px 0px 50px 0px;
    }
    .pg-list-1-left {
        width: 100%;
        padding: 0px 20px;
    }
    .pg-list-1-right {
        width: 100%;
        padding: 0px 20px;
    }
    .pg-list-1-right-p1 {
        padding-top: 50px;
    }
    .list-pg-lt {
        width: 100%;
        float: left;
    }
    .list-pg-rt {
        width: 100%;
        float: left;
        padding: 0px 0px 0px 00px;
    }
    .list-rom-pric {
        top: 10px;
    }
    .how-com-mob-bot-space {
        margin-bottom: 35px;
    }
    .con-page {
        background: url(../images/con-bg.jpg) no-repeat left center;
        background-attachment: fixed;
        background-size: 64%;
    }
    .con-page-ri {
        padding: 70px;
        padding-top: 130px;
    }
    .page-blog h3 {
        padding-top: 20px;
    }
    .list-spac-1 {
        margin: 0px;
    }
    .pg-list-user-pro img {
        margin-left: 45%;
    }
    .tz {
        padding: 50px;
        padding-top: 100px;
    }
    .tz-2-main-1 {
        width: 100%;
    }
    .tz-2-main-2 {
        border-right: 0px solid #eaedef;
        padding: 20px;
        text-align: left;
    }
    .tz-2-main-com span {
        text-align: left;
        display: block;
    }
    .tz-2-main-com img {
        margin: inherit;
    }
    .tab-menu {
        display: inline-block;
        color: #fff;
        background: #0e76a8;
        padding: 5px 8px;
        cursor: pointer;
        font-size: 18px;
        border-radius: 2px;
    }
    .logo img {
        width: 78%;
    }
    .sb1 {
        position: fixed;
        width: 100%;
        top: 0px;
    }
    .tab-hide {
        display: none;
    }
    .sb2-1 {
        width: 240px;
        height: 100%;
        position: fixed;
        top: 0px;
        box-shadow: 10px 50px 100px rgba(0, 0, 0, 0.8);
        z-index: 9999;
        left: -350px;
        overflow: scroll;
    }
    .sb2-2 {
        width: 100%;
        padding: 40px;
        margin-left: 0px;
    }
    .sb1-1 {
        padding: 15px 15px;
    }
    .tz-invo-full {
        padding: 0px;
    }
    .tz-invo-full1 {
        width: 100%;
        margin: 0px;
    }
    .cat-v2-hom-list ul li {
        width: 33.33%;
    }
	.v3-list-ql{
		display:none;
	}	
	.v4-pril-inn {
		margin-bottom: 35px;
	}
	.v4-pril-inn-bot-0 {
		margin-bottom: 0px;
	}	
	.tourz-top-search-form div:nth-child(1) {
		width: 15%;
	}
	.tourz-top-search-form div:nth-child(2) {
		width: 62%;
	}
	.tourz-top-search-form div:nth-child(3) {
		width: 15%;
	}	
	.log-in-pop{
		width:80%;
	}
.cate-search-form div:nth-child(1) {
    width: 100%;
}
.cate-search-form div:nth-child(2) {
    width: 50%;
}
.cate-search-form div:nth-child(3) {
    width: 50%;
}
.cate-search-form div:nth-child(4) {
    width: 100%;
}	
.land-pack{width:100%;}
.land-pack ul li {
    width: 50%;
	    padding: 15px 15px 5px 15px;
}
.land-pack-grid{width:100%}
.quic-book-ser-inn{width:85%;padding:0px 25px;}
}
/*-------------------------------------------------------*/
/* When the browser is between 0px and 767px wide,below css will be applied.
/*-------------------------------------------------------*/

@media screen and (max-width: 767px) {
    .cbb3-mob-app {
        margin: 0 auto;
        width: 80%;
    }
    .dir-mob-app-size {
        width: 80% !important;
    }
    .dir-get-app ul {
        width: 100%;
        padding-left: 0px;
    }
    .dir-get-app ul li:nth-child(2) {
        width: 80%;
    }
    .dir-get-app ul li:nth-child(3) {
        width: 100%;
    }
    .dir-get-app ul li:nth-child(1) {
        width: 20%;
    }
    .dir-ho-t-tit h1 {
        font-size: 28px;
    }
    .dir-ho-tr ul li a {
        font-size: 14px;
    }
    .dir-ho-t2l form ul li:nth-child(2) {
        display: none;
    }
    .dir-ho-t2l form ul li:nth-child(1) {
        width: 75%;
    }
    .dir-ho-t2l form ul li:nth-child(3) {
        width: 25%;
    }
    .dir-v2-ho-t2l form ul li:nth-child(1) {
        width: 80%;
    }
    .dir-v2-ho-t2l form ul li:nth-child(2) {
        width: 20%;
        display: block;
    }
    .dir-ho-t-sp {
        padding: 50px 0px 100px 0px;
    }
    .dir-hr1 {
        text-align: center;
        width: 90%;
		display:block;
    }
    .dir-pr-p1-rev {
        float: left;
        margin-top: 25px;
    }
    .dir-pr-p1 ul li {
        width: 100% !important;
    }
    .dir-pr-p1 ul {
        padding-bottom: 20px;
    }
    .dir-pr-p2 ul li {
        padding: 10px 10px 10px 35px;
    }
    .dir-pr-ri-pro {
        margin-bottom: 25px;
    }
    .dir-ho-tr {
        display: none;
    }
    .dir-ho-tl ul {
        display: table;
        margin: 0 auto;
    }
    .dir-ho-tl {
        padding-top: 35px;
    }
    .hom-pro {
        margin-bottom: 30px;
    }
    .sea-drop-1 {
        width: 96%;
    }
    .ts-menu-5 span i {
        margin: 11px;
    }
    .top-search form ul li:nth-child(1) {
        width: 80%;
    }
    .top-search form ul li:nth-child(2) {
        width: 20%;
    }
    .ts-menu-1 a img {
        width: 40px;
        margin: 10px;
        /* margin-left: 20px; */
        
        display: table;
        /* margin: 0 auto; */
        
        margin-left: auto;
    }
    .lpe-com-main {
        width: 90%;
        padding: 50px 0px;
    }
    .list-enqu-btn ul li {
        width: 50%;
    }
    .list-number ul li {
        width: 100%;
    }
    .carousel {
        height: auto;
    }
    .lp-ur-all-left {
        width: 100%;
        border-right: 0px solid #6b7f8a;
        padding-right: 0px;
    }
    .lp-ur-all-right {
        float: left;
        width: 100%;
        padding: 25px 20px 2px 0px;
    }
    .lp-ur-all-right p span {
        font-size: 20px;
        margin-right: 10px;
    }
    .page-about-count {
        border-bottom: 1px solid #3e5263;
        border-right: 0px solid #3e5263;
        padding-bottom: 20px;
        padding-top: 12px;
    }
    .page-about-count-no-bor {
        border-bottom: 0px solid #3e5263;
        padding-bottom: 10px;
    }
    .con-page-ri {
        width: 100%;
        padding: 50px;
        padding-top: 100px;
    }
    .pricing {
        margin-top: 30px;
    }
    footer h4 {
        margin-top: 24px;
    }
    .foot-sec2 {
        padding-top: 0px;
    }
    .dir-pop-body form {
        padding: 30px 30px 25px 30px;
    }
    .dir-pop-body {
        padding: 35px 30px 20px 30px !important;
        border-bottom: 10px solid #263b57;
    }
    .tz {
        padding: 25px;
        padding-top: 100px;
    }
    .tz-l {
        width: 100%;
    }
    .tz-2 {
        width: 100%;
        margin-right: 0px;
        margin-left: 0px;
        margin-top: 20px;
    }
    .tz-3 {
        width: 100%;
        margin-top: 20px;
    }
    .mob-hide {
        display: none;
    }
    .sb1-1 {
        padding: 10px 15px;
    }
    .hom-cre-acc-right form {
        padding: 12px 25px;
    }
    .tz-regi-form {
        width: 85%;
        padding: 40px;
        margin-bottom: 50px;
        margin-top: 50px;
    }
    .tz-invo-full {
        padding: 0px;
    }
    .tz-invo-full1 {
        width: 100%;
        margin: 0px;
    }
    .cat-v2-hom-list ul li {
        width: 50%;
    }
    .v3-mob-m-2 ul li:nth-child(1) {
        display: none;
    }
    .v3-mob-m-2 ul li:nth-child(2) {
        display: none;
    }
	.tourz-search-form div:nth-child(1) {
		width: 100%;
	}	
	.tourz-search-form div:nth-child(2) {
		width: 100%;
	}	
	.tourz-search-form div:nth-child(3) {
		width: 100%;
	}
	.tourz-search-form div {
		margin-bottom: 15px;
	}
	.tourz-top-search-form div:nth-child(1) {
		display:none;
	}
	.tourz-top-search-form div:nth-child(2) {
		width: 100%;
	}
	.tourz-top-search-form div:nth-child(3) {
		display:none;
	}	
	.log-in-pop-left{
		display:none;
	}
	.log-in-pop-right{
		width:100%;
	}
.quic-book-ser-left {
    width: 100%;
}
.quic-book-ser-right {
    width: 100%;
    padding-left: 0px;
	margin-top:40px;
}
}
/*-------------------------------------------------------*/
/* When the browser is between 0px and 480px wide,below css will be applied.
/*-------------------------------------------------------*/

@media screen and (max-width: 480px) {
    .l_show_rate_l img {
        width: 100%;
    }
    .l_scroll {
        height: 230px;
        overflow: auto;
        width: 100%;
        position: relative !important;
    }
    .affix {
        top: 0px !important;
        position: relative !important;
    }
    .f_sub_mail {
        width: 100%;
    }
    .f_sub_sub {
        margin-top: 10px;
        width: 100%;
    }
    .dir-ho-tr ul li a {
        font-size: 12px !important;
        padding: 7px 5px;
    }
    .dir-ho-t2l form ul li:nth-child(1) {
        width: 100% !important;
    }
    .dir-ho-t2l form ul li:nth-child(3) {
        width: 100% !important;
    }
    .dir-v2-ho-t2l form ul li:nth-child(2) {
        width: 100%;
    }
    .dir-hpb ul li {
        width: 100%;
    }
    .list-enqu-btn ul li {
        width: 100%;
    }
    .lr-user-wr-con {
        width: 85%;
    }
    .soc-login ul li {
        width: 100%;
    }
    .cat-v2-hom-list ul li {
        width: 100%;
    }
	.land-pack ul li {
		width: 100%;
	}
	.land-pack-grid{background:none;}
}
/*-------------------------------------------------------*/
/* When the browser is between 767px and above wide,below css will be applied.
/*-------------------------------------------------------*/

@media screen and (min-width: 767px) {
    .hasimg {} .hasimg img {
        width: 100%;
    }
}

/*!
 * Age verification CSS to go with the JS that can be found at (https://github.com/Herudea/age-verification)
 */

#modal_screen {
	position: fixed;
	top:0;
	left: 0;
	height: 100%;
	width: 100%;
	z-index: 1100;
	background-color: rgba(0,0,0,.95);
}

#modal_screen.nope {
	background-color: #1e0924; 
}

#modal_content {
	position: fixed;
	z-index: 1101;
	margin: 0 auto;
	background-color:#fff;
	border:4px solid #444;
	border-radius: 100%;
	font-size: 12px;
	width:350px; /* if you adjust it from the original 290px, adjust the difference in the width of #modal_content nav too */
	height: 290px; /* if you adjust it from the original 290px, adjust the difference in the width of #modal_content nav too */

	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	-o-box-sizing: border-box;
	box-sizing: border-box;

	background-position: center 2em;
	background-repeat: no-repeat;
	background-size: 90px auto;
	background-image: url('https://s3.eu-central-1.amazonaws.com/assets.safesex.gr/img/logo_footer.png');
}

#modal_content .content_wrapper {
	padding-top: 8em;
	margin:3em auto 0;
	text-align: center;
}

#modal_content h2 {
	margin: 0 0 0 0;
	font:normal 15px/1.3em 'Gill Sans W01 Medium', Helvetica,arial,sans-serif;
}

#modal_content p {
	max-width: 75%;
	margin: 1.2em auto 0;
	font:11px/1.5em "proxima-nova", Helvetica,arial,sans-serif;
}

#modal_content nav {font-size: 16px; display:table; width: 282px; background: #fff; box-shadow: none;}
#modal_content nav ul {display:table-row; width: 100%; margin:0; padding:0;}
#modal_content nav li {display: table-cell; text-align: right; width: auto;}

#modal_content nav:after {
	content: "";
	display: block;
	clear: both;
}

#modal_content nav small {
	display: block;
	text-align: center;
	color: #888;
	margin: 1em 0 0;
}

#modal_content nav a.av_btn {
	display:block;
	text-align:center;
	width: 110px;
	border-radius: 23px;
	margin:1em auto 0;
	text-decoration: none;
	padding:1em;
	color: #fff;
	font:normal .7em/1em 'AmericanTypwrterITCW01- 731031';
	text-transform: none;
	letter-spacing: 0;
}

#modal_content nav .av_go {
	background-color: #7fbf4d;
}

#modal_content nav .av_no {
	background-color: #938d95;
}

#modal_content nav .av_btn:hover {
	background-color: #1e0924;
}

#modal_content #modal_regret_wrapper nav a.av_btn {
	margin-top:0;
	width:395px;
	font-size: 1.2em;
}

@media (min-width: 688px) {
	#modal_content {
		top: 10em;
		top: 30vh;
		left: 30vw;
		width: 90%;
		max-width: 500px;
		height:500px;
		padding:3em;
		border-radius: 100%;
		background-position: center 5em;
		background-size: 310px auto;
		font-size: 16px;
	}

	#modal_content .content_wrapper {
		padding-top: 80px;
		margin:3em auto 0;
		text-align: center;
	}

	#modal_content h2 {
		margin: 0 0 0 0;
		font-size: 1.875em;
	}

	#modal_content p {
		font-size: 1em;
		line-height: 1.9em;
	}

	#modal_content nav {width: 396px;}

	#modal_content nav a.av_btn {
		padding:1em 1em;
		margin:1.6em auto 0;
		font-size: 1.2em;
	}
}


.cc - window {
    opacity: 1;
    transition: opacity 1s ease
}
.cc - window.cc - invisible {
    opacity: 0
}
.cc - animate.cc - revoke {
    transition: transform 1s ease
}
.cc - animate.cc - revoke.cc - top {
    transform: translateY(-2em)
}
.cc - animate.cc - revoke.cc - bottom {
    transform: translateY(2em)
}
.cc - animate.cc - revoke.cc - active.cc - bottom, .cc - animate.cc - revoke.cc - active.cc - top, .cc - revoke: hover {
    transform: translateY(0)
}
.cc - grower {
    max - height: 0;
    overflow: hidden;
    transition: max - height 1s
}
.cc - link, .cc - revoke: hover {
    text - decoration: underline
}
.cc - revoke, .cc - window {
    position: fixed;
    overflow: hidden;
    box - sizing: border - box;
    font - family: Helvetica,
    Calibri,
    Arial,
    sans - serif;
    font - size: 16px;
    line - height: 1.5em;
    display: -ms - flexbox;
    display: flex;
    -ms - flex - wrap: nowrap;
    flex - wrap: nowrap;
    z - index: 9999
}
.cc - window.cc - static {
    position: static
}
.cc - window.cc - floating {
    padding: 2em;
    max - width: 24em;
    -ms - flex - direction: column;
    flex - direction: column
}
.cc - window.cc - banner {
    padding: 1em 1.8em;
    width: 100 % ;
    -ms - flex - direction: row;
    flex - direction: row
}
.cc - revoke {
    padding: .5em
}
.cc - header {
    font - size: 18px;
    font - weight: 700
}
.cc - btn, .cc - close, .cc - link, .cc - revoke {
    cursor: pointer
}
.cc - link {
    opacity: .8;
    display: inline - block;
    padding: .2em
}
.cc - link: hover {
    opacity: 1
}
.cc - link: active, .cc - link: visited {
    color: initial
}
.cc - btn {
    display: block;
    padding: .4em.8em;
    font - size: .9em;
    font - weight: 700;
    border - width: 2px;
    border - style: solid;
    text - align: center;
    white - space: nowrap
}
.cc - highlight.cc - btn: first - child {
    background - color: transparent;
    border - color: transparent
}
.cc - highlight.cc - btn: first - child: focus, .cc - highlight.cc - btn: first - child: hover {
    background - color: transparent;
    text - decoration: underline
}
.cc - close {
    display: block;
    position: absolute;
    top: .5em;
    right: .5em;
    font - size: 1.6em;
    opacity: .9;
    line - height: .75
}
.cc - close: focus, .cc - close: hover {
    opacity: 1
}
.cc - revoke.cc - top {
    top: 0;
    left: 3em;
    border - bottom - left - radius: .5em;
    border - bottom - right - radius: .5em
}
.cc - revoke.cc - bottom {
    bottom: 0;
    left: 3em;
    border - top - left - radius: .5em;
    border - top - right - radius: .5em
}
.cc - revoke.cc - left {
    left: 3em;
    right: unset
}
.cc - revoke.cc - right {
    right: 3em;
    left: unset
}
.cc - top {
    top: 1em
}
.cc - left {
    left: 1em
}
.cc - right {
    right: 1em
}
.cc - bottom {
    bottom: 1em
}
.cc - floating > .cc - link {
    margin - bottom: 1em
}
.cc - floating.cc - message {
    display: block;
    margin - bottom: 1em
}
.cc - window.cc - floating.cc - compliance {
    -ms - flex: 1 0 auto;
    flex: 1 0 auto
}
.cc - window.cc - banner {
    -ms - flex - align: center;
    align - items: center
}
.cc - banner.cc - top {
    left: 0;
    right: 0;
    top: 0
}
.cc - banner.cc - bottom {
    left: 0;
    right: 0;
    bottom: 0
}
.cc - banner.cc - message {
    display: block;
    -ms - flex: 1 1 auto;
    flex: 1 1 auto;
    max - width: 100 % ;
    margin - right: 1em
}
.cc - compliance {
    display: -ms - flexbox;
    display: flex;
    -ms - flex - align: center;
    align - items: center;
    -ms - flex - line - pack: justify;
    align - content: space - between
}
.cc - floating.cc - compliance > .cc - btn {
    -ms - flex: 1;
    flex: 1
}
.cc - btn + .cc - btn {
    margin - left: .5em
}
 @ media print {
    .cc - revoke,
    .cc - window {
        display: none
    }
}
 @ media screen and(max - width: 900px) {
    .cc - btn {
        white - space: normal
    }
}
 @ media screen and(max - width: 414px)and(orientation: portrait), screen and(max - width: 736px)and(orientation: landscape) {
    .cc - window.cc - top {
        top: 0
    }
    .cc - window.cc - bottom {
        bottom: 0
    }
    .cc - window.cc - banner,
    .cc - window.cc - floating,
    .cc - window.cc - left,
    .cc - window.cc - right {
        left: 0;
        right: 0
    }
    .cc - window.cc - banner {
        -ms - flex - direction: column;
        flex - direction: column
    }
    .cc - window.cc - banner.cc - compliance {
        -ms - flex: 1 1 auto;
        flex: 1 1 auto
    }
    .cc - window.cc - floating {
        max - width: none
    }
    .cc - window.cc - message {
        margin - bottom: 1em
    }
    .cc - window.cc - banner {
        -ms - flex - align: unset;
        align - items: unset
    }
    .cc - window.cc - banner.cc - message {
        margin - right: 0
    }
}
.cc - floating.cc - theme - classic {
    padding: 1.2em;
    border - radius: 5px
}
.cc - floating.cc - type - info.cc - theme - classic.cc - compliance {
    text - align: center;
    display: inline;
    -ms - flex: none;
    flex: none
}
.cc - theme - classic.cc - btn {
    border - radius: 5px
}
.cc - theme - classic.cc - btn: last - child {
    min - width: 140px
}
.cc - floating.cc - type - info.cc - theme - classic.cc - btn {
    display: inline - block
}
.cc - theme - edgeless.cc - window {
    padding: 0
}
.cc - floating.cc - theme - edgeless.cc - message {
    margin: 2em 2em 1.5em
}
.cc - banner.cc - theme - edgeless.cc - btn {
    margin: 0;
    padding: .8em 1.8em;
    height: 100 %
}
.cc - banner.cc - theme - edgeless.cc - message {
    margin - left: 1em
}
.cc - floating.cc - theme - edgeless.cc - btn + .cc - btn {
    margin - left: 0
}


/*! jQuery UI - v1.12.1 - 2016-09-14
 * http://jqueryui.com
 * Includes: core.css, accordion.css, autocomplete.css, menu.css, button.css, controlgroup.css, checkboxradio.css, datepicker.css, dialog.css, draggable.css, resizable.css, progressbar.css, selectable.css, selectmenu.css, slider.css, sortable.css, spinner.css, tabs.css, tooltip.css, theme.css
 * To view and modify this theme, visit http://jqueryui.com/themeroller/?bgShadowXPos=&bgOverlayXPos=&bgErrorXPos=&bgHighlightXPos=&bgContentXPos=&bgHeaderXPos=&bgActiveXPos=&bgHoverXPos=&bgDefaultXPos=&bgShadowYPos=&bgOverlayYPos=&bgErrorYPos=&bgHighlightYPos=&bgContentYPos=&bgHeaderYPos=&bgActiveYPos=&bgHoverYPos=&bgDefaultYPos=&bgShadowRepeat=&bgOverlayRepeat=&bgErrorRepeat=&bgHighlightRepeat=&bgContentRepeat=&bgHeaderRepeat=&bgActiveRepeat=&bgHoverRepeat=&bgDefaultRepeat=&iconsHover=url(%22images%2Fui-icons_555555_256x240.png%22)&iconsHighlight=url(%22images%2Fui-icons_777620_256x240.png%22)&iconsHeader=url(%22images%2Fui-icons_444444_256x240.png%22)&iconsError=url(%22images%2Fui-icons_cc0000_256x240.png%22)&iconsDefault=url(%22images%2Fui-icons_777777_256x240.png%22)&iconsContent=url(%22images%2Fui-icons_444444_256x240.png%22)&iconsActive=url(%22images%2Fui-icons_ffffff_256x240.png%22)&bgImgUrlShadow=&bgImgUrlOverlay=&bgImgUrlHover=&bgImgUrlHighlight=&bgImgUrlHeader=&bgImgUrlError=&bgImgUrlDefault=&bgImgUrlContent=&bgImgUrlActive=&opacityFilterShadow=Alpha(Opacity%3D30)&opacityFilterOverlay=Alpha(Opacity%3D30)&opacityShadowPerc=30&opacityOverlayPerc=30&iconColorHover=%23555555&iconColorHighlight=%23777620&iconColorHeader=%23444444&iconColorError=%23cc0000&iconColorDefault=%23777777&iconColorContent=%23444444&iconColorActive=%23ffffff&bgImgOpacityShadow=0&bgImgOpacityOverlay=0&bgImgOpacityError=95&bgImgOpacityHighlight=55&bgImgOpacityContent=75&bgImgOpacityHeader=75&bgImgOpacityActive=65&bgImgOpacityHover=75&bgImgOpacityDefault=75&bgTextureShadow=flat&bgTextureOverlay=flat&bgTextureError=flat&bgTextureHighlight=flat&bgTextureContent=flat&bgTextureHeader=flat&bgTextureActive=flat&bgTextureHover=flat&bgTextureDefault=flat&cornerRadius=3px&fwDefault=normal&ffDefault=Arial%2CHelvetica%2Csans-serif&fsDefault=1em&cornerRadiusShadow=8px&thicknessShadow=5px&offsetLeftShadow=0px&offsetTopShadow=0px&opacityShadow=.3&bgColorShadow=%23666666&opacityOverlay=.3&bgColorOverlay=%23aaaaaa&fcError=%235f3f3f&borderColorError=%23f1a899&bgColorError=%23fddfdf&fcHighlight=%23777620&borderColorHighlight=%23dad55e&bgColorHighlight=%23fffa90&fcContent=%23333333&borderColorContent=%23dddddd&bgColorContent=%23ffffff&fcHeader=%23333333&borderColorHeader=%23dddddd&bgColorHeader=%23e9e9e9&fcActive=%23ffffff&borderColorActive=%23003eff&bgColorActive=%23007fff&fcHover=%232b2b2b&borderColorHover=%23cccccc&bgColorHover=%23ededed&fcDefault=%23454545&borderColorDefault=%23c5c5c5&bgColorDefault=%23f6f6f6
 * Copyright jQuery Foundation and other contributors; Licensed MIT */

.ui - helper - hidden {
    display: none
}
.ui - helper - hidden - accessible {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px
}
.ui - helper - reset {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    line - height: 1.3;
    text - decoration: none;
    font - size: 100 % ;
    list - style: none
}
.ui - helper - clearfix: before, .ui - helper - clearfix: after {
    content: "";
    display: table;
    border - collapse: collapse
}
.ui - helper - clearfix: after {
    clear: both
}
.ui - helper - zfix {
    width: 100 % ;
    height: 100 % ;
    top: 0;
    left: 0;
    position: absolute;
    opacity: 0;
    filter: Alpha(Opacity = 0)
}
.ui - front {
    z - index: 100
}
.ui - state - disabled {
    cursor: default !important;
    pointer - events:
    none
}
.ui - icon {
    display: inline - block;
    vertical - align: middle;
    margin - top:  - .25em;
    position: relative;
    text - indent: -99999px;
    overflow: hidden;
    background - repeat: no - repeat
}
.ui - widget - icon - block {
    left: 50 % ;
    margin - left: -8px;
    display: block
}
.ui - widget - overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100 % ;
    height: 100 %
}
.ui - accordion.ui - accordion - header {
    display: block;
    cursor: pointer;
    position: relative;
    margin: 2px 0 0 0;
    padding: .5em.5em.5em.7em;
    font - size: 100 %
}
.ui - accordion.ui - accordion - content {
    padding: 1em 2.2em;
    border - top: 0;
    overflow: auto
}
.ui - autocomplete {
    position: absolute;
    top: 0;
    left: 0;
    cursor: default
}
.ui - menu {
    list - style: none;
    padding: 0;
    margin: 0;
    display: block;
    outline: 0
}
.ui - menu.ui - menu {
    position: absolute
}
.ui - menu.ui - menu - item {
    margin: 0;
    cursor: pointer;
    list - style - image: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7")
}
.ui - menu.ui - menu - item - wrapper {
    position: relative;
    padding: 3px 1em 3px.4em
}
.ui - menu.ui - menu - divider {
    margin: 5px 0;
    height: 0;
    font - size: 0;
    line - height: 0;
    border - width: 1px 0 0 0
}
.ui - menu.ui - state - focus, .ui - menu.ui - state - active {
    margin: -1px
}
.ui - menu - icons {
    position: relative
}
.ui - menu - icons.ui - menu - item - wrapper {
    padding - left: 2em
}
.ui - menu.ui - icon {
    position: absolute;
    top: 0;
    bottom: 0;
    left: .2em;
    margin: auto 0
}
.ui - menu.ui - menu - icon {
    left: auto;
    right: 0
}
.ui - button {
    padding: .4em 1em;
    display: inline - block;
    position: relative;
    line - height: normal;
    margin - right: .1em;
    cursor: pointer;
    vertical - align: middle;
    text - align: center;
    -webkit - user - select: none;
    -moz - user - select: none;
    -ms - user - select: none;
    user - select: none;
    overflow: visible
}
.ui - button, .ui - button: link, .ui - button: visited, .ui - button: hover, .ui - button: active {
    text - decoration: none
}
.ui - button - icon - only {
    width: 2em;
    box - sizing: border - box;
    text - indent: -9999px;
    white - space: nowrap
}
input.ui - button.ui - button - icon - only {
    text - indent: 0
}
.ui - button - icon - only.ui - icon {
    position: absolute;
    top: 50 % ;
    left: 50 % ;
    margin - top: -8px;
    margin - left: -8px
}
.ui - button.ui - icon - notext.ui - icon {
    padding: 0;
    width: 2.1em;
    height: 2.1em;
    text - indent: -9999px;
    white - space: nowrap
}
input.ui - button.ui - icon - notext.ui - icon {
    width: auto;
    height: auto;
    text - indent: 0;
    white - space: normal;
    padding: .4em 1em
}
input.ui - button::-moz - focus - inner, button.ui - button::-moz - focus - inner {
    border: 0;
    padding: 0
}
.ui - controlgroup {
    vertical - align: middle;
    display: inline - block
}
.ui - controlgroup > .ui - controlgroup - item {
    float: left;
    margin - left: 0;
    margin - right: 0
}
.ui - controlgroup > .ui - controlgroup - item: focus, .ui - controlgroup > .ui - controlgroup - item.ui - visual - focus {
    z - index: 9999
}
.ui - controlgroup - vertical > .ui - controlgroup - item {
    display: block;
    float: none;
    width: 100 % ;
    margin - top: 0;
    margin - bottom: 0;
    text - align: left
}
.ui - controlgroup - vertical.ui - controlgroup - item {
    box - sizing: border - box
}
.ui - controlgroup.ui - controlgroup - label {
    padding: .4em 1em
}
.ui - controlgroup.ui - controlgroup - label span {
    font - size: 80 %
}
.ui - controlgroup - horizontal.ui - controlgroup - label + .ui - controlgroup - item {
    border - left: none
}
.ui - controlgroup - vertical.ui - controlgroup - label + .ui - controlgroup - item {
    border - top: none
}
.ui - controlgroup - horizontal.ui - controlgroup - label.ui - widget - content {
    border - right: none
}
.ui - controlgroup - vertical.ui - controlgroup - label.ui - widget - content {
    border - bottom: none
}
.ui - controlgroup - vertical.ui - spinner - input {
    width: 75 % ;
    width: calc(100 %  - 2.4em)
}
.ui - controlgroup - vertical.ui - spinner.ui - spinner - up {
    border - top - style: solid
}
.ui - checkboxradio - label.ui - icon - background {
    box - shadow: inset 1px 1px 1px # ccc;
    border - radius: .12em;
    border: none
}
.ui - checkboxradio - radio - label.ui - icon - background {
    width: 16px;
    height: 16px;
    border - radius: 1em;
    overflow: visible;
    border: none
}
.ui - checkboxradio - radio - label.ui - checkboxradio - checked.ui - icon, .ui - checkboxradio - radio - label.ui - checkboxradio - checked: hover.ui - icon {
    background - image: none;
    width: 8px;
    height: 8px;
    border - width: 4px;
    border - style: solid
}
.ui - checkboxradio - disabled {
    pointer - events: none
}
.ui - datepicker {
    width: 17em;
    padding: .2em.2em 0;
    display: none
}
.ui - datepicker.ui - datepicker - header {
    position: relative;
    padding: .2em 0
}
.ui - datepicker.ui - datepicker - prev, .ui - datepicker.ui - datepicker - next {
    position: absolute;
    top: 2px;
    width: 1.8em;
    height: 1.8em
}
.ui - datepicker.ui - datepicker - prev - hover, .ui - datepicker.ui - datepicker - next - hover {
    top: 1px
}
.ui - datepicker.ui - datepicker - prev {
    left: 2px
}
.ui - datepicker.ui - datepicker - next {
    right: 2px
}
.ui - datepicker.ui - datepicker - prev - hover {
    left: 1px
}
.ui - datepicker.ui - datepicker - next - hover {
    right: 1px
}
.ui - datepicker.ui - datepicker - prev span, .ui - datepicker.ui - datepicker - next span {
    display: block;
    position: absolute;
    left: 50 % ;
    margin - left: -8px;
    top: 50 % ;
    margin - top: -8px
}
.ui - datepicker.ui - datepicker - title {
    margin: 0 2.3em;
    line - height: 1.8em;
    text - align: center
}
.ui - datepicker.ui - datepicker - title select {
    font - size: 1em;
    margin: 1px 0
}
.ui - datepicker select.ui - datepicker - month, .ui - datepicker select.ui - datepicker - year {
    width: 45 %
}
.ui - datepicker table {
    width: 100 % ;
    font - size: .9em;
    border - collapse: collapse;
    margin: 0 0.4em
}
.ui - datepicker th {
    padding: .7em.3em;
    text - align: center;
    font - weight: bold;
    border: 0
}
.ui - datepicker td {
    border: 0;
    padding: 1px
}
.ui - datepicker td span, .ui - datepicker td a {
    display: block;
    padding: .2em;
    text - align: right;
    text - decoration: none
}
.ui - datepicker.ui - datepicker - buttonpane {
    background - image: none;
    margin: .7em 0 0 0;
    padding: 0.2em;
    border - left: 0;
    border - right: 0;
    border - bottom: 0
}
.ui - datepicker.ui - datepicker - buttonpane button {
    float: right;
    margin: .5em.2em.4em;
    cursor: pointer;
    padding: .2em.6em.3em.6em;
    width: auto;
    overflow: visible
}
.ui - datepicker.ui - datepicker - buttonpane button.ui - datepicker - current {
    float: left
}
.ui - datepicker.ui - datepicker - multi {
    width: auto
}
.ui - datepicker - multi.ui - datepicker - group {
    float: left
}
.ui - datepicker - multi.ui - datepicker - group table {
    width: 95 % ;
    margin: 0 auto.4em
}
.ui - datepicker - multi - 2.ui - datepicker - group {
    width: 50 %
}
.ui - datepicker - multi - 3.ui - datepicker - group {
    width: 33.3 %
}
.ui - datepicker - multi - 4.ui - datepicker - group {
    width: 25 %
}
.ui - datepicker - multi.ui - datepicker - group - last.ui - datepicker - header, .ui - datepicker - multi.ui - datepicker - group - middle.ui - datepicker - header {
    border - left - width: 0
}
.ui - datepicker - multi.ui - datepicker - buttonpane {
    clear: left
}
.ui - datepicker - row - break {
    clear: both;
    width: 100 % ;
    font - size: 0
}
.ui - datepicker - rtl {
    direction: rtl
}
.ui - datepicker - rtl.ui - datepicker - prev {
    right: 2px;
    left: auto
}
.ui - datepicker - rtl.ui - datepicker - next {
    left: 2px;
    right: auto
}
.ui - datepicker - rtl.ui - datepicker - prev: hover {
    right: 1px;
    left: auto
}
.ui - datepicker - rtl.ui - datepicker - next: hover {
    left: 1px;
    right: auto
}
.ui - datepicker - rtl.ui - datepicker - buttonpane {
    clear: right
}
.ui - datepicker - rtl.ui - datepicker - buttonpane button {
    float: left
}
.ui - datepicker - rtl.ui - datepicker - buttonpane button.ui - datepicker - current, .ui - datepicker - rtl.ui - datepicker - group {
    float: right
}
.ui - datepicker - rtl.ui - datepicker - group - last.ui - datepicker - header, .ui - datepicker - rtl.ui - datepicker - group - middle.ui - datepicker - header {
    border - right - width: 0;
    border - left - width: 1px
}
.ui - datepicker.ui - icon {
    display: block;
    text - indent: -99999px;
    overflow: hidden;
    background - repeat: no - repeat;
    left: .5em;
    top: .3em
}
.ui - dialog {
    position: absolute;
    top: 0;
    left: 0;
    padding: .2em;
    outline: 0
}
.ui - dialog.ui - dialog - titlebar {
    padding: .4em 1em;
    position: relative
}
.ui - dialog.ui - dialog - title {
    float: left;
    margin: .1em 0;
    white - space: nowrap;
    width: 90 % ;
    overflow: hidden;
    text - overflow: ellipsis
}
.ui - dialog.ui - dialog - titlebar - close {
    position: absolute;
    right: .3em;
    top: 50 % ;
    width: 20px;
    margin: -10px 0 0 0;
    padding: 1px;
    height: 20px
}
.ui - dialog.ui - dialog - content {
    position: relative;
    border: 0;
    padding: .5em 1em;
    background: none;
    overflow: auto
}
.ui - dialog.ui - dialog - buttonpane {
    text - align: left;
    border - width: 1px 0 0 0;
    background - image: none;
    margin - top: .5em;
    padding: .3em 1em.5em.4em
}
.ui - dialog.ui - dialog - buttonpane.ui - dialog - buttonset {
    float: right
}
.ui - dialog.ui - dialog - buttonpane button {
    margin: .5em.4em.5em 0;
    cursor: pointer
}
.ui - dialog.ui - resizable - n {
    height: 2px;
    top: 0
}
.ui - dialog.ui - resizable - e {
    width: 2px;
    right: 0
}
.ui - dialog.ui - resizable - s {
    height: 2px;
    bottom: 0
}
.ui - dialog.ui - resizable - w {
    width: 2px;
    left: 0
}
.ui - dialog.ui - resizable - se, .ui - dialog.ui - resizable - sw, .ui - dialog.ui - resizable - ne, .ui - dialog.ui - resizable - nw {
    width: 7px;
    height: 7px
}
.ui - dialog.ui - resizable - se {
    right: 0;
    bottom: 0
}
.ui - dialog.ui - resizable - sw {
    left: 0;
    bottom: 0
}
.ui - dialog.ui - resizable - ne {
    right: 0;
    top: 0
}
.ui - dialog.ui - resizable - nw {
    left: 0;
    top: 0
}
.ui - draggable.ui - dialog - titlebar {
    cursor: move
}
.ui - draggable - handle {
    -ms - touch - action: none;
    touch - action: none
}
.ui - resizable {
    position: relative
}
.ui - resizable - handle {
    position: absolute;
    font - size: 0.1px;
    display: block;
    -ms - touch - action: none;
    touch - action: none
}
.ui - resizable - disabled.ui - resizable - handle, .ui - resizable - autohide.ui - resizable - handle {
    display: none
}
.ui - resizable - n {
    cursor: n - resize;
    height: 7px;
    width: 100 % ;
    top: -5px;
    left: 0
}
.ui - resizable - s {
    cursor: s - resize;
    height: 7px;
    width: 100 % ;
    bottom: -5px;
    left: 0
}
.ui - resizable - e {
    cursor: e - resize;
    width: 7px;
    right: -5px;
    top: 0;
    height: 100 %
}
.ui - resizable - w {
    cursor: w - resize;
    width: 7px;
    left: -5px;
    top: 0;
    height: 100 %
}
.ui - resizable - se {
    cursor: se - resize;
    width: 12px;
    height: 12px;
    right: 1px;
    bottom: 1px
}
.ui - resizable - sw {
    cursor: sw - resize;
    width: 9px;
    height: 9px;
    left: -5px;
    bottom: -5px
}
.ui - resizable - nw {
    cursor: nw - resize;
    width: 9px;
    height: 9px;
    left: -5px;
    top: -5px
}
.ui - resizable - ne {
    cursor: ne - resize;
    width: 9px;
    height: 9px;
    right: -5px;
    top: -5px
}
.ui - progressbar {
    height: 2em;
    text - align: left;
    overflow: hidden
}
.ui - progressbar.ui - progressbar - value {
    margin: -1px;
    height: 100 %
}
.ui - progressbar.ui - progressbar - overlay {
    background: url("data:image/gif;base64,R0lGODlhKAAoAIABAAAAAP///yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAQABACwAAAAAKAAoAAACkYwNqXrdC52DS06a7MFZI+4FHBCKoDeWKXqymPqGqxvJrXZbMx7Ttc+w9XgU2FB3lOyQRWET2IFGiU9m1frDVpxZZc6bfHwv4c1YXP6k1Vdy292Fb6UkuvFtXpvWSzA+HycXJHUXiGYIiMg2R6W459gnWGfHNdjIqDWVqemH2ekpObkpOlppWUqZiqr6edqqWQAAIfkECQEAAQAsAAAAACgAKAAAApSMgZnGfaqcg1E2uuzDmmHUBR8Qil95hiPKqWn3aqtLsS18y7G1SzNeowWBENtQd+T1JktP05nzPTdJZlR6vUxNWWjV+vUWhWNkWFwxl9VpZRedYcflIOLafaa28XdsH/ynlcc1uPVDZxQIR0K25+cICCmoqCe5mGhZOfeYSUh5yJcJyrkZWWpaR8doJ2o4NYq62lAAACH5BAkBAAEALAAAAAAoACgAAAKVDI4Yy22ZnINRNqosw0Bv7i1gyHUkFj7oSaWlu3ovC8GxNso5fluz3qLVhBVeT/Lz7ZTHyxL5dDalQWPVOsQWtRnuwXaFTj9jVVh8pma9JjZ4zYSj5ZOyma7uuolffh+IR5aW97cHuBUXKGKXlKjn+DiHWMcYJah4N0lYCMlJOXipGRr5qdgoSTrqWSq6WFl2ypoaUAAAIfkECQEAAQAsAAAAACgAKAAAApaEb6HLgd/iO7FNWtcFWe+ufODGjRfoiJ2akShbueb0wtI50zm02pbvwfWEMWBQ1zKGlLIhskiEPm9R6vRXxV4ZzWT2yHOGpWMyorblKlNp8HmHEb/lCXjcW7bmtXP8Xt229OVWR1fod2eWqNfHuMjXCPkIGNileOiImVmCOEmoSfn3yXlJWmoHGhqp6ilYuWYpmTqKUgAAIfkECQEAAQAsAAAAACgAKAAAApiEH6kb58biQ3FNWtMFWW3eNVcojuFGfqnZqSebuS06w5V80/X02pKe8zFwP6EFWOT1lDFk8rGERh1TTNOocQ61Hm4Xm2VexUHpzjymViHrFbiELsefVrn6XKfnt2Q9G/+Xdie499XHd2g4h7ioOGhXGJboGAnXSBnoBwKYyfioubZJ2Hn0RuRZaflZOil56Zp6iioKSXpUAAAh+QQJAQABACwAAAAAKAAoAAACkoQRqRvnxuI7kU1a1UU5bd5tnSeOZXhmn5lWK3qNTWvRdQxP8qvaC+/yaYQzXO7BMvaUEmJRd3TsiMAgswmNYrSgZdYrTX6tSHGZO73ezuAw2uxuQ+BbeZfMxsexY35+/Qe4J1inV0g4x3WHuMhIl2jXOKT2Q+VU5fgoSUI52VfZyfkJGkha6jmY+aaYdirq+lQAACH5BAkBAAEALAAAAAAoACgAAAKWBIKpYe0L3YNKToqswUlvznigd4wiR4KhZrKt9Upqip61i9E3vMvxRdHlbEFiEXfk9YARYxOZZD6VQ2pUunBmtRXo1Lf8hMVVcNl8JafV38aM2/Fu5V16Bn63r6xt97j09+MXSFi4BniGFae3hzbH9+hYBzkpuUh5aZmHuanZOZgIuvbGiNeomCnaxxap2upaCZsq+1kAACH5BAkBAAEALAAAAAAoACgAAAKXjI8By5zf4kOxTVrXNVlv1X0d8IGZGKLnNpYtm8Lr9cqVeuOSvfOW79D9aDHizNhDJidFZhNydEahOaDH6nomtJjp1tutKoNWkvA6JqfRVLHU/QUfau9l2x7G54d1fl995xcIGAdXqMfBNadoYrhH+Mg2KBlpVpbluCiXmMnZ2Sh4GBqJ+ckIOqqJ6LmKSllZmsoq6wpQAAAh+QQJAQABACwAAAAAKAAoAAAClYx/oLvoxuJDkU1a1YUZbJ59nSd2ZXhWqbRa2/gF8Gu2DY3iqs7yrq+xBYEkYvFSM8aSSObE+ZgRl1BHFZNr7pRCavZ5BW2142hY3AN/zWtsmf12p9XxxFl2lpLn1rseztfXZjdIWIf2s5dItwjYKBgo9yg5pHgzJXTEeGlZuenpyPmpGQoKOWkYmSpaSnqKileI2FAAACH5BAkBAAEALAAAAAAoACgAAAKVjB+gu+jG4kORTVrVhRlsnn2dJ3ZleFaptFrb+CXmO9OozeL5VfP99HvAWhpiUdcwkpBH3825AwYdU8xTqlLGhtCosArKMpvfa1mMRae9VvWZfeB2XfPkeLmm18lUcBj+p5dnN8jXZ3YIGEhYuOUn45aoCDkp16hl5IjYJvjWKcnoGQpqyPlpOhr3aElaqrq56Bq7VAAAOw==");
    height: 100 % ;
    filter: alpha(opacity = 25);
    opacity: 0.25
}
.ui - progressbar - indeterminate.ui - progressbar - value {
    background - image: none
}
.ui - selectable {
    -ms - touch - action: none;
    touch - action: none
}
.ui - selectable - helper {
    position: absolute;
    z - index: 100;
    border: 1px dotted black
}
.ui - selectmenu - menu {
    padding: 0;
    margin: 0;
    position: absolute;
    top: 0;
    left: 0;
    display: none
}
.ui - selectmenu - menu.ui - menu {
    overflow: auto;
    overflow - x: hidden;
    padding - bottom: 1px
}
.ui - selectmenu - menu.ui - menu.ui - selectmenu - optgroup {
    font - size: 1em;
    font - weight: bold;
    line - height: 1.5;
    padding: 2px 0.4em;
    margin: 0.5em 0 0 0;
    height: auto;
    border: 0
}
.ui - selectmenu - open {
    display: block
}
.ui - selectmenu - text {
    display: block;
    margin - right: 20px;
    overflow: hidden;
    text - overflow: ellipsis
}
.ui - selectmenu - button.ui - button {
    text - align: left;
    white - space: nowrap;
    width: 14em
}
.ui - selectmenu - icon.ui - icon {
    float: right;
    margin - top: 0
}
.ui - slider {
    position: relative;
    text - align: left
}
.ui - slider.ui - slider - handle {
    position: absolute;
    z - index: 2;
    width: 1.2em;
    height: 1.2em;
    cursor: default ;
    -ms - touch - action:
    none;
    touch - action: none
}
.ui - slider.ui - slider - range {
    position: absolute;
    z - index: 1;
    font - size: .7em;
    display: block;
    border: 0;
    background - position: 0 0
}
.ui - slider.ui - state - disabled.ui - slider - handle, .ui - slider.ui - state - disabled.ui - slider - range {
    filter: inherit
}
.ui - slider - horizontal {
    height: .8em
}
.ui - slider - horizontal.ui - slider - handle {
    top:  - .3em;
    margin - left:  - .6em
}
.ui - slider - horizontal.ui - slider - range {
    top: 0;
    height: 100 %
}
.ui - slider - horizontal.ui - slider - range - min {
    left: 0
}
.ui - slider - horizontal.ui - slider - range - max {
    right: 0
}
.ui - slider - vertical {
    width: .8em;
    height: 100px
}
.ui - slider - vertical.ui - slider - handle {
    left:  - .3em;
    margin - left: 0;
    margin - bottom:  - .6em
}
.ui - slider - vertical.ui - slider - range {
    left: 0;
    width: 100 %
}
.ui - slider - vertical.ui - slider - range - min {
    bottom: 0
}
.ui - slider - vertical.ui - slider - range - max {
    top: 0
}
.ui - sortable - handle {
    -ms - touch - action: none;
    touch - action: none
}
.ui - spinner {
    position: relative;
    display: inline - block;
    overflow: hidden;
    padding: 0;
    vertical - align: middle
}
.ui - spinner - input {
    border: none;
    background: none;
    color: inherit;
    padding: .222em 0;
    margin: .2em 0;
    vertical - align: middle;
    margin - left: .4em;
    margin - right: 2em
}
.ui - spinner - button {
    width: 1.6em;
    height: 50 % ;
    font - size: .5em;
    padding: 0;
    margin: 0;
    text - align: center;
    position: absolute;
    cursor: default ;
    display:
    block;
    overflow: hidden;
    right: 0
}
.ui - spinner a.ui - spinner - button {
    border - top - style: none;
    border - bottom - style: none;
    border - right - style: none
}
.ui - spinner - up {
    top: 0
}
.ui - spinner - down {
    bottom: 0
}
.ui - tabs {
    position: relative;
    padding: .2em
}
.ui - tabs.ui - tabs - nav {
    margin: 0;
    padding: .2em.2em 0
}
.ui - tabs.ui - tabs - nav li {
    list - style: none;
    float: left;
    position: relative;
    top: 0;
    margin: 1px.2em 0 0;
    border - bottom - width: 0;
    padding: 0;
    white - space: nowrap
}
.ui - tabs.ui - tabs - nav.ui - tabs - anchor {
    float: left;
    padding: .5em 1em;
    text - decoration: none
}
.ui - tabs.ui - tabs - nav li.ui - tabs - active {
    margin - bottom: -1px;
    padding - bottom: 1px
}
.ui - tabs.ui - tabs - nav li.ui - tabs - active.ui - tabs - anchor, .ui - tabs.ui - tabs - nav li.ui - state - disabled.ui - tabs - anchor, .ui - tabs.ui - tabs - nav li.ui - tabs - loading.ui - tabs - anchor {
    cursor: text
}
.ui - tabs - collapsible.ui - tabs - nav li.ui - tabs - active.ui - tabs - anchor {
    cursor: pointer
}
.ui - tabs.ui - tabs - panel {
    display: block;
    border - width: 0;
    padding: 1em 1.4em;
    background: none
}
.ui - tooltip {
    padding: 8px;
    position: absolute;
    z - index: 9999;
    max - width: 300px
}
body.ui - tooltip {
    border - width: 2px
}
.ui - widget {
    font - family: Arial,
    Helvetica,
    sans - serif;
    font - size: 1em
}
.ui - widget.ui - widget {
    font - size: 1em
}
.ui - widget input, .ui - widget select, .ui - widget textarea, .ui - widget button {
    font - family: Arial,
    Helvetica,
    sans - serif;
    font - size: 1em
}
.ui - widget.ui - widget - content {
    border: 1px solid # c5c5c5
}
.ui - widget - content {
    border: 1px solid # ddd;
    background:  # fff;
    color:  # 333
}
.ui - widget - content a {
    color:  # 333
}
.ui - widget - header {
    border: 1px solid # ddd;
    background:  # e9e9e9;
    color:  # 333;
    font - weight: bold
}
.ui - widget - header a {
    color:  # 333
}
.ui - state - default , .ui - widget - content.ui - state - default , .ui - widget - header.ui - state - default , .ui - button, html.ui - button.ui - state - disabled:
hover, html.ui - button.ui - state - disabled:
active {
    border: 1px solid # c5c5c5;
    background:  # f6f6f6;
    font - weight: normal;
    color:  # 454545
}
.ui - state - default a, .ui - state - default a:
link, .ui - state - default a:
visited, a.ui - button, a:
link.ui - button, a:
visited.ui - button, .ui - button {
    color:  # 454545;
    text - decoration: none
}
.ui - state - hover, .ui - widget - content.ui - state - hover, .ui - widget - header.ui - state - hover, .ui - state - focus, .ui - widget - content.ui - state - focus, .ui - widget - header.ui - state - focus, .ui - button: hover, .ui - button: focus {
    border: 1px solid # ccc;
    background:  # ededed;
    font - weight: normal;
    color:  # 2b2b2b
}
.ui - state - hover a, .ui - state - hover a: hover, .ui - state - hover a: link, .ui - state - hover a: visited, .ui - state - focus a, .ui - state - focus a: hover, .ui - state - focus a: link, .ui - state - focus a: visited, a.ui - button: hover, a.ui - button: focus {
    color:  # 2b2b2b;
    text - decoration: none
}
.ui - visual - focus {
    box - shadow: 0 0 3px 1px rgb(94, 158, 214)
}
.ui - state - active, .ui - widget - content.ui - state - active, .ui - widget - header.ui - state - active, a.ui - button: active, .ui - button: active, .ui - button.ui - state - active: hover {
    border: 1px solid # 003eff;
    background:  # 007fff;
    font - weight: normal;
    color:  # fff
}
.ui - icon - background, .ui - state - active.ui - icon - background {
    border:  # 003eff;
    background - color:  # fff
}
.ui - state - active a, .ui - state - active a: link, .ui - state - active a: visited {
    color:  # fff;
    text - decoration: none
}
.ui - state - highlight, .ui - widget - content.ui - state - highlight, .ui - widget - header.ui - state - highlight {
    border: 1px solid # dad55e;
    background:  # fffa90;
    color:  # 777620
}
.ui - state - checked {
    border: 1px solid # dad55e;
    background:  # fffa90
}
.ui - state - highlight a, .ui - widget - content.ui - state - highlight a, .ui - widget - header.ui - state - highlight a {
    color:  # 777620
}
.ui - state - error, .ui - widget - content.ui - state - error, .ui - widget - header.ui - state - error {
    border: 1px solid # f1a899;
    background:  # fddfdf;
    color:  # 5f3f3f
}
.ui - state - error a, .ui - widget - content.ui - state - error a, .ui - widget - header.ui - state - error a {
    color:  # 5f3f3f
}
.ui - state - error - text, .ui - widget - content.ui - state - error - text, .ui - widget - header.ui - state - error - text {
    color:  # 5f3f3f
}
.ui - priority - primary, .ui - widget - content.ui - priority - primary, .ui - widget - header.ui - priority - primary {
    font - weight: bold
}
.ui - priority - secondary, .ui - widget - content.ui - priority - secondary, .ui - widget - header.ui - priority - secondary {
    opacity: .7;
    filter: Alpha(Opacity = 70);
    font - weight: normal
}
.ui - state - disabled, .ui - widget - content.ui - state - disabled, .ui - widget - header.ui - state - disabled {
    opacity: .35;
    filter: Alpha(Opacity = 35);
    background - image: none
}
.ui - state - disabled.ui - icon {
    filter: Alpha(Opacity = 35)
}
.ui - icon {
    width: 16px;
    height: 16px
}
.ui - icon, .ui - widget - content.ui - icon {
    background - image: url("images/ui-icons_444444_256x240.png")
}
.ui - widget - header.ui - icon {
    background - image: url("images/ui-icons_444444_256x240.png")
}
.ui - state - hover.ui - icon, .ui - state - focus.ui - icon, .ui - button: hover.ui - icon, .ui - button: focus.ui - icon {
    background - image: url("images/ui-icons_555555_256x240.png")
}
.ui - state - active.ui - icon, .ui - button: active.ui - icon {
    background - image: url("images/ui-icons_ffffff_256x240.png")
}
.ui - state - highlight.ui - icon, .ui - button.ui - state - highlight.ui - icon {
    background - image: url("images/ui-icons_777620_256x240.png")
}
.ui - state - error.ui - icon, .ui - state - error - text.ui - icon {
    background - image: url("images/ui-icons_cc0000_256x240.png")
}
.ui - button.ui - icon {
    background - image: url("images/ui-icons_777777_256x240.png")
}
.ui - icon - blank {
    background - position: 16px 16px
}
.ui - icon - caret - 1 - n {
    background - position: 0 0
}
.ui - icon - caret - 1 - ne {
    background - position: -16px 0
}
.ui - icon - caret - 1 - e {
    background - position: -32px 0
}
.ui - icon - caret - 1 - se {
    background - position: -48px 0
}
.ui - icon - caret - 1 - s {
    background - position: -65px 0
}
.ui - icon - caret - 1 - sw {
    background - position: -80px 0
}
.ui - icon - caret - 1 - w {
    background - position: -96px 0
}
.ui - icon - caret - 1 - nw {
    background - position: -112px 0
}
.ui - icon - caret - 2 - n - s {
    background - position: -128px 0
}
.ui - icon - caret - 2 - e - w {
    background - position: -144px 0
}
.ui - icon - triangle - 1 - n {
    background - position: 0 - 16px
}
.ui - icon - triangle - 1 - ne {
    background - position: -16px - 16px
}
.ui - icon - triangle - 1 - e {
    background - position: -32px - 16px
}
.ui - icon - triangle - 1 - se {
    background - position: -48px - 16px
}
.ui - icon - triangle - 1 - s {
    background - position: -65px - 16px
}
.ui - icon - triangle - 1 - sw {
    background - position: -80px - 16px
}
.ui - icon - triangle - 1 - w {
    background - position: -96px - 16px
}
.ui - icon - triangle - 1 - nw {
    background - position: -112px - 16px
}
.ui - icon - triangle - 2 - n - s {
    background - position: -128px - 16px
}
.ui - icon - triangle - 2 - e - w {
    background - position: -144px - 16px
}
.ui - icon - arrow - 1 - n {
    background - position: 0 - 32px
}
.ui - icon - arrow - 1 - ne {
    background - position: -16px - 32px
}
.ui - icon - arrow - 1 - e {
    background - position: -32px - 32px
}
.ui - icon - arrow - 1 - se {
    background - position: -48px - 32px
}
.ui - icon - arrow - 1 - s {
    background - position: -65px - 32px
}
.ui - icon - arrow - 1 - sw {
    background - position: -80px - 32px
}
.ui - icon - arrow - 1 - w {
    background - position: -96px - 32px
}
.ui - icon - arrow - 1 - nw {
    background - position: -112px - 32px
}
.ui - icon - arrow - 2 - n - s {
    background - position: -128px - 32px
}
.ui - icon - arrow - 2 - ne - sw {
    background - position: -144px - 32px
}
.ui - icon - arrow - 2 - e - w {
    background - position: -160px - 32px
}
.ui - icon - arrow - 2 - se - nw {
    background - position: -176px - 32px
}
.ui - icon - arrowstop - 1 - n {
    background - position: -192px - 32px
}
.ui - icon - arrowstop - 1 - e {
    background - position: -208px - 32px
}
.ui - icon - arrowstop - 1 - s {
    background - position: -224px - 32px
}
.ui - icon - arrowstop - 1 - w {
    background - position: -240px - 32px
}
.ui - icon - arrowthick - 1 - n {
    background - position: 1px - 48px
}
.ui - icon - arrowthick - 1 - ne {
    background - position: -16px - 48px
}
.ui - icon - arrowthick - 1 - e {
    background - position: -32px - 48px
}
.ui - icon - arrowthick - 1 - se {
    background - position: -48px - 48px
}
.ui - icon - arrowthick - 1 - s {
    background - position: -64px - 48px
}
.ui - icon - arrowthick - 1 - sw {
    background - position: -80px - 48px
}
.ui - icon - arrowthick - 1 - w {
    background - position: -96px - 48px
}
.ui - icon - arrowthick - 1 - nw {
    background - position: -112px - 48px
}
.ui - icon - arrowthick - 2 - n - s {
    background - position: -128px - 48px
}
.ui - icon - arrowthick - 2 - ne - sw {
    background - position: -144px - 48px
}
.ui - icon - arrowthick - 2 - e - w {
    background - position: -160px - 48px
}
.ui - icon - arrowthick - 2 - se - nw {
    background - position: -176px - 48px
}
.ui - icon - arrowthickstop - 1 - n {
    background - position: -192px - 48px
}
.ui - icon - arrowthickstop - 1 - e {
    background - position: -208px - 48px
}
.ui - icon - arrowthickstop - 1 - s {
    background - position: -224px - 48px
}
.ui - icon - arrowthickstop - 1 - w {
    background - position: -240px - 48px
}
.ui - icon - arrowreturnthick - 1 - w {
    background - position: 0 - 64px
}
.ui - icon - arrowreturnthick - 1 - n {
    background - position: -16px - 64px
}
.ui - icon - arrowreturnthick - 1 - e {
    background - position: -32px - 64px
}
.ui - icon - arrowreturnthick - 1 - s {
    background - position: -48px - 64px
}
.ui - icon - arrowreturn - 1 - w {
    background - position: -64px - 64px
}
.ui - icon - arrowreturn - 1 - n {
    background - position: -80px - 64px
}
.ui - icon - arrowreturn - 1 - e {
    background - position: -96px - 64px
}
.ui - icon - arrowreturn - 1 - s {
    background - position: -112px - 64px
}
.ui - icon - arrowrefresh - 1 - w {
    background - position: -128px - 64px
}
.ui - icon - arrowrefresh - 1 - n {
    background - position: -144px - 64px
}
.ui - icon - arrowrefresh - 1 - e {
    background - position: -160px - 64px
}
.ui - icon - arrowrefresh - 1 - s {
    background - position: -176px - 64px
}
.ui - icon - arrow - 4 {
    background - position: 0 - 80px
}
.ui - icon - arrow - 4 - diag {
    background - position: -16px - 80px
}
.ui - icon - extlink {
    background - position: -32px - 80px
}
.ui - icon - newwin {
    background - position: -48px - 80px
}
.ui - icon - refresh {
    background - position: -64px - 80px
}
.ui - icon - shuffle {
    background - position: -80px - 80px
}
.ui - icon - transfer - e - w {
    background - position: -96px - 80px
}
.ui - icon - transferthick - e - w {
    background - position: -112px - 80px
}
.ui - icon - folder - collapsed {
    background - position: 0 - 96px
}
.ui - icon - folder - open {
    background - position: -16px - 96px
}
.ui - icon - document {
    background - position: -32px - 96px
}
.ui - icon - document - b {
    background - position: -48px - 96px
}
.ui - icon - note {
    background - position: -64px - 96px
}
.ui - icon - mail - closed {
    background - position: -80px - 96px
}
.ui - icon - mail - open {
    background - position: -96px - 96px
}
.ui - icon - suitcase {
    background - position: -112px - 96px
}
.ui - icon - comment {
    background - position: -128px - 96px
}
.ui - icon - person {
    background - position: -144px - 96px
}
.ui - icon - print {
    background - position: -160px - 96px
}
.ui - icon - trash {
    background - position: -176px - 96px
}
.ui - icon - locked {
    background - position: -192px - 96px
}
.ui - icon - unlocked {
    background - position: -208px - 96px
}
.ui - icon - bookmark {
    background - position: -224px - 96px
}
.ui - icon - tag {
    background - position: -240px - 96px
}
.ui - icon - home {
    background - position: 0 - 112px
}
.ui - icon - flag {
    background - position: -16px - 112px
}
.ui - icon - calendar {
    background - position: -32px - 112px
}
.ui - icon - cart {
    background - position: -48px - 112px
}
.ui - icon - pencil {
    background - position: -64px - 112px
}
.ui - icon - clock {
    background - position: -80px - 112px
}
.ui - icon - disk {
    background - position: -96px - 112px
}
.ui - icon - calculator {
    background - position: -112px - 112px
}
.ui - icon - zoomin {
    background - position: -128px - 112px
}
.ui - icon - zoomout {
    background - position: -144px - 112px
}
.ui - icon - search {
    background - position: -160px - 112px
}
.ui - icon - wrench {
    background - position: -176px - 112px
}
.ui - icon - gear {
    background - position: -192px - 112px
}
.ui - icon - heart {
    background - position: -208px - 112px
}
.ui - icon - star {
    background - position: -224px - 112px
}
.ui - icon - link {
    background - position: -240px - 112px
}
.ui - icon - cancel {
    background - position: 0 - 128px
}
.ui - icon - plus {
    background - position: -16px - 128px
}
.ui - icon - plusthick {
    background - position: -32px - 128px
}
.ui - icon - minus {
    background - position: -48px - 128px
}
.ui - icon - minusthick {
    background - position: -64px - 128px
}
.ui - icon - close {
    background - position: -80px - 128px
}
.ui - icon - closethick {
    background - position: -96px - 128px
}
.ui - icon - key {
    background - position: -112px - 128px
}
.ui - icon - lightbulb {
    background - position: -128px - 128px
}
.ui - icon - scissors {
    background - position: -144px - 128px
}
.ui - icon - clipboard {
    background - position: -160px - 128px
}
.ui - icon - copy {
    background - position: -176px - 128px
}
.ui - icon - contact {
    background - position: -192px - 128px
}
.ui - icon - image {
    background - position: -208px - 128px
}
.ui - icon - video {
    background - position: -224px - 128px
}
.ui - icon - script {
    background - position: -240px - 128px
}
.ui - icon - alert {
    background - position: 0 - 144px
}
.ui - icon - info {
    background - position: -16px - 144px
}
.ui - icon - notice {
    background - position: -32px - 144px
}
.ui - icon - help {
    background - position: -48px - 144px
}
.ui - icon - check {
    background - position: -64px - 144px
}
.ui - icon - bullet {
    background - position: -80px - 144px
}
.ui - icon - radio - on {
    background - position: -96px - 144px
}
.ui - icon - radio - off {
    background - position: -112px - 144px
}
.ui - icon - pin - w {
    background - position: -128px - 144px
}
.ui - icon - pin - s {
    background - position: -144px - 144px
}
.ui - icon - play {
    background - position: 0 - 160px
}
.ui - icon - pause {
    background - position: -16px - 160px
}
.ui - icon - seek - next {
    background - position: -32px - 160px
}
.ui - icon - seek - prev {
    background - position: -48px - 160px
}
.ui - icon - seek - end {
    background - position: -64px - 160px
}
.ui - icon - seek - start {
    background - position: -80px - 160px
}
.ui - icon - seek - first {
    background - position: -80px - 160px
}
.ui - icon - stop {
    background - position: -96px - 160px
}
.ui - icon - eject {
    background - position: -112px - 160px
}
.ui - icon - volume - off {
    background - position: -128px - 160px
}
.ui - icon - volume - on {
    background - position: -144px - 160px
}
.ui - icon - power {
    background - position: 0 - 176px
}
.ui - icon - signal - diag {
    background - position: -16px - 176px
}
.ui - icon - signal {
    background - position: -32px - 176px
}
.ui - icon - battery - 0 {
    background - position: -48px - 176px
}
.ui - icon - battery - 1 {
    background - position: -64px - 176px
}
.ui - icon - battery - 2 {
    background - position: -80px - 176px
}
.ui - icon - battery - 3 {
    background - position: -96px - 176px
}
.ui - icon - circle - plus {
    background - position: 0 - 192px
}
.ui - icon - circle - minus {
    background - position: -16px - 192px
}
.ui - icon - circle - close {
    background - position: -32px - 192px
}
.ui - icon - circle - triangle - e {
    background - position: -48px - 192px
}
.ui - icon - circle - triangle - s {
    background - position: -64px - 192px
}
.ui - icon - circle - triangle - w {
    background - position: -80px - 192px
}
.ui - icon - circle - triangle - n {
    background - position: -96px - 192px
}
.ui - icon - circle - arrow - e {
    background - position: -112px - 192px
}
.ui - icon - circle - arrow - s {
    background - position: -128px - 192px
}
.ui - icon - circle - arrow - w {
    background - position: -144px - 192px
}
.ui - icon - circle - arrow - n {
    background - position: -160px - 192px
}
.ui - icon - circle - zoomin {
    background - position: -176px - 192px
}
.ui - icon - circle - zoomout {
    background - position: -192px - 192px
}
.ui - icon - circle - check {
    background - position: -208px - 192px
}
.ui - icon - circlesmall - plus {
    background - position: 0 - 208px
}
.ui - icon - circlesmall - minus {
    background - position: -16px - 208px
}
.ui - icon - circlesmall - close {
    background - position: -32px - 208px
}
.ui - icon - squaresmall - plus {
    background - position: -48px - 208px
}
.ui - icon - squaresmall - minus {
    background - position: -64px - 208px
}
.ui - icon - squaresmall - close {
    background - position: -80px - 208px
}
.ui - icon - grip - dotted - vertical {
    background - position: 0 - 224px
}
.ui - icon - grip - dotted - horizontal {
    background - position: -16px - 224px
}
.ui - icon - grip - solid - vertical {
    background - position: -32px - 224px
}
.ui - icon - grip - solid - horizontal {
    background - position: -48px - 224px
}
.ui - icon - gripsmall - diagonal - se {
    background - position: -64px - 224px
}
.ui - icon - grip - diagonal - se {
    background - position: -80px - 224px
}
.ui - corner - all, .ui - corner - top, .ui - corner - left, .ui - corner - tl {
    border - top - left - radius: 3px
}
.ui - corner - all, .ui - corner - top, .ui - corner - right, .ui - corner - tr {
    border - top - right - radius: 3px
}
.ui - corner - all, .ui - corner - bottom, .ui - corner - left, .ui - corner - bl {
    border - bottom - left - radius: 3px
}
.ui - corner - all, .ui - corner - bottom, .ui - corner - right, .ui - corner - br {
    border - bottom - right - radius: 3px
}
.ui - widget - overlay {
    background:  # aaa;
    opacity: .003;
    filter: Alpha(Opacity = .3)
}
.ui - widget - shadow {
    -webkit - box - shadow: 0 0 5px # 666;
    box - shadow: 0 0 5px # 666
}

.dropzone, .dropzone * {
    box - sizing: border - box
}
.dropzone {
    position: relative
}
.dropzone.dz - preview {
    position: relative;
    display: inline - block;
    width: 120px;
    margin: 0.5em
}
.dropzone.dz - preview.dz - progress {
    display: block;
    height: 15px;
    border: 1px solid # aaa
}
.dropzone.dz - preview.dz - progress.dz - upload {
    display: block;
    height: 100 % ;
    width: 0;
    background: green
}
.dropzone.dz - preview.dz - error - message {
    color: red;
    display: none
}
.dropzone.dz - preview.dz - error.dz - error - message, .dropzone.dz - preview.dz - error.dz - error - mark {
    display: block
}
.dropzone.dz - preview.dz - success.dz - success - mark {
    display: block
}
.dropzone.dz - preview.dz - error - mark, .dropzone.dz - preview.dz - success - mark {
    position: absolute;
    display: none;
    left: 30px;
    top: 30px;
    width: 54px;
    height: 58px;
    left: 50 % ;
    margin - left: -27px
}


 @ -webkit - keyframes passing - through {
    0 % {
        opacity: 0;
        -webkit - transform: translateY(40px);
        -moz - transform: translateY(40px);
        -ms - transform: translateY(40px);
        -o - transform: translateY(40px);
        transform: translateY(40px)
    }
    30 % ,
    70 % {
        opacity: 1;
        -webkit - transform: translateY(0px);
        -moz - transform: translateY(0px);
        -ms - transform: translateY(0px);
        -o - transform: translateY(0px);
        transform: translateY(0px)
    }
    100 % {
        opacity: 0;
        -webkit - transform: translateY(-40px);
        -moz - transform: translateY(-40px);
        -ms - transform: translateY(-40px);
        -o - transform: translateY(-40px);
        transform: translateY(-40px)
    }
}
 @ -moz - keyframes passing - through {
    0 % {
        opacity: 0;
        -webkit - transform: translateY(40px);
        -moz - transform: translateY(40px);
        -ms - transform: translateY(40px);
        -o - transform: translateY(40px);
        transform: translateY(40px)
    }
    30 % ,
    70 % {
        opacity: 1;
        -webkit - transform: translateY(0px);
        -moz - transform: translateY(0px);
        -ms - transform: translateY(0px);
        -o - transform: translateY(0px);
        transform: translateY(0px)
    }
    100 % {
        opacity: 0;
        -webkit - transform: translateY(-40px);
        -moz - transform: translateY(-40px);
        -ms - transform: translateY(-40px);
        -o - transform: translateY(-40px);
        transform: translateY(-40px)
    }
}
 @ keyframes passing - through {
    0 % {
        opacity: 0;
        -webkit - transform: translateY(40px);
        -moz - transform: translateY(40px);
        -ms - transform: translateY(40px);
        -o - transform: translateY(40px);
        transform: translateY(40px)
    }
    30 % ,
    70 % {
        opacity: 1;
        -webkit - transform: translateY(0px);
        -moz - transform: translateY(0px);
        -ms - transform: translateY(0px);
        -o - transform: translateY(0px);
        transform: translateY(0px)
    }
    100 % {
        opacity: 0;
        -webkit - transform: translateY(-40px);
        -moz - transform: translateY(-40px);
        -ms - transform: translateY(-40px);
        -o - transform: translateY(-40px);
        transform: translateY(-40px)
    }
}
 @ -webkit - keyframes slide - in {
    0 % {
        opacity: 0;
        -webkit - transform: translateY(40px);
        -moz - transform: translateY(40px);
        -ms - transform: translateY(40px);
        -o - transform: translateY(40px);
        transform: translateY(40px)
    }
    30 % {
        opacity: 1;
        -webkit - transform: translateY(0px);
        -moz - transform: translateY(0px);
        -ms - transform: translateY(0px);
        -o - transform: translateY(0px);
        transform: translateY(0px)
    }
}
 @ -moz - keyframes slide - in {
    0 % {
        opacity: 0;
        -webkit - transform: translateY(40px);
        -moz - transform: translateY(40px);
        -ms - transform: translateY(40px);
        -o - transform: translateY(40px);
        transform: translateY(40px)
    }
    30 % {
        opacity: 1;
        -webkit - transform: translateY(0px);
        -moz - transform: translateY(0px);
        -ms - transform: translateY(0px);
        -o - transform: translateY(0px);
        transform: translateY(0px)
    }
}
 @ keyframes slide - in {
    0 % {
        opacity: 0;
        -webkit - transform: translateY(40px);
        -moz - transform: translateY(40px);
        -ms - transform: translateY(40px);
        -o - transform: translateY(40px);
        transform: translateY(40px)
    }
    30 % {
        opacity: 1;
        -webkit - transform: translateY(0px);
        -moz - transform: translateY(0px);
        -ms - transform: translateY(0px);
        -o - transform: translateY(0px);
        transform: translateY(0px)
    }
}
 @ -webkit - keyframes pulse {
    0 % {
        -webkit - transform: scale(1);
        -moz - transform: scale(1);
        -ms - transform: scale(1);
        -o - transform: scale(1);
        transform: scale(1)
    }
    10 % {
        -webkit - transform: scale(1.1);
        -moz - transform: scale(1.1);
        -ms - transform: scale(1.1);
        -o - transform: scale(1.1);
        transform: scale(1.1)
    }
    20 % {
        -webkit - transform: scale(1);
        -moz - transform: scale(1);
        -ms - transform: scale(1);
        -o - transform: scale(1);
        transform: scale(1)
    }
}
 @ -moz - keyframes pulse {
    0 % {
        -webkit - transform: scale(1);
        -moz - transform: scale(1);
        -ms - transform: scale(1);
        -o - transform: scale(1);
        transform: scale(1)
    }
    10 % {
        -webkit - transform: scale(1.1);
        -moz - transform: scale(1.1);
        -ms - transform: scale(1.1);
        -o - transform: scale(1.1);
        transform: scale(1.1)
    }
    20 % {
        -webkit - transform: scale(1);
        -moz - transform: scale(1);
        -ms - transform: scale(1);
        -o - transform: scale(1);
        transform: scale(1)
    }
}
 @ keyframes pulse {
    0 % {
        -webkit - transform: scale(1);
        -moz - transform: scale(1);
        -ms - transform: scale(1);
        -o - transform: scale(1);
        transform: scale(1)
    }
    10 % {
        -webkit - transform: scale(1.1);
        -moz - transform: scale(1.1);
        -ms - transform: scale(1.1);
        -o - transform: scale(1.1);
        transform: scale(1.1)
    }
    20 % {
        -webkit - transform: scale(1);
        -moz - transform: scale(1);
        -ms - transform: scale(1);
        -o - transform: scale(1);
        transform: scale(1)
    }
}
.dropzone, .dropzone * {
    box - sizing: border - box
}
.dropzone {
    min - height: 150px;
    border: 2px solid rgba(0, 0, 0, 0.3);
    background: white;
    padding: 20px 20px
}
.dropzone.dz - clickable {
    cursor: pointer
}
.dropzone.dz - clickable * {
    cursor: default
}
.dropzone.dz - clickable.dz - message, .dropzone.dz - clickable.dz - message * {
    cursor: pointer
}
.dropzone.dz - started.dz - message {
    display: none
}
.dropzone.dz - drag - hover {
    border - style: solid
}
.dropzone.dz - drag - hover.dz - message {
    opacity: 0.5
}
.dropzone.dz - message {
    text - align: center;
    margin: 2em 0
}
.dropzone.dz - preview {
    position: relative;
    display: inline - block;
    vertical - align: top;
    margin: 16px;
    min - height: 100px
}
.dropzone.dz - preview: hover {
    z - index: 1000
}
.dropzone.dz - preview: hover.dz - details {
    opacity: 1
}
.dropzone.dz - preview.dz - file - preview.dz - image {
    border - radius: 20px;
    background:  # 999;
    background: linear - gradient(to bottom,  # eee,  # ddd)
}
.dropzone.dz - preview.dz - file - preview.dz - details {
    opacity: 1
}
.dropzone.dz - preview.dz - image - preview {
    background: white
}
.dropzone.dz - preview.dz - image - preview.dz - details {
    -webkit - transition: opacity 0.2s linear;
    -moz - transition: opacity 0.2s linear;
    -ms - transition: opacity 0.2s linear;
    -o - transition: opacity 0.2s linear;
    transition: opacity 0.2s linear
}
.dropzone.dz - preview.dz - remove {
    font - size: 14px;
    text - align: center;
    display: block;
    cursor: pointer;
    border: none
}
.dropzone.dz - preview.dz - remove: hover {
    text - decoration: underline
}
.dropzone.dz - preview: hover.dz - details {
    opacity: 1
}
.dropzone.dz - preview.dz - details {
    z - index: 20;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    font - size: 13px;
    min - width: 100 % ;
    max - width: 100 % ;
    padding: 2em 1em;
    text - align: center;
    color: rgba(0, 0, 0, 0.9);
    line - height: 150 %
}
.dropzone.dz - preview.dz - details.dz - size {
    margin - bottom: 1em;
    font - size: 16px
}
.dropzone.dz - preview.dz - details.dz - filename {
    white - space: nowrap
}
.dropzone.dz - preview.dz - details.dz - filename: hover span {
    border: 1px solid rgba(200, 200, 200, 0.8);
    background - color: rgba(255, 255, 255, 0.8)
}
.dropzone.dz - preview.dz - details.dz - filename: not(: hover) {
    overflow: hidden;
    text - overflow: ellipsis
}
.dropzone.dz - preview.dz - details.dz - filename: not(: hover)span {
    border: 1px solid transparent
}
.dropzone.dz - preview.dz - details.dz - filename span, .dropzone.dz - preview.dz - details.dz - size span {
    background - color: rgba(255, 255, 255, 0.4);
    padding: 0 0.4em;
    border - radius: 3px
}
.dropzone.dz - preview: hover.dz - image img {
    -webkit - transform: scale(1.05, 1.05);
    -moz - transform: scale(1.05, 1.05);
    -ms - transform: scale(1.05, 1.05);
    -o - transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
    -webkit - filter: blur(8px);
    filter: blur(8px)
}
.dropzone.dz - preview.dz - image {
    border - radius: 20px;
    overflow: hidden;
    width: 120px;
    height: 120px;
    position: relative;
    display: block;
    z - index: 10
}
.dropzone.dz - preview.dz - image img {
    display: block
}
.dropzone.dz - preview.dz - success.dz - success - mark {
    -webkit - animation: passing - through 3s cubic - bezier(0.77, 0, 0.175, 1);
    -moz - animation: passing - through 3s cubic - bezier(0.77, 0, 0.175, 1);
    -ms - animation: passing - through 3s cubic - bezier(0.77, 0, 0.175, 1);
    -o - animation: passing - through 3s cubic - bezier(0.77, 0, 0.175, 1);
    animation: passing - through 3s cubic - bezier(0.77, 0, 0.175, 1)
}
.dropzone.dz - preview.dz - error.dz - error - mark {
    opacity: 1;
    -webkit - animation: slide - in 3s cubic - bezier(0.77, 0, 0.175, 1);
    -moz - animation: slide - in 3s cubic - bezier(0.77, 0, 0.175, 1);
    -ms - animation: slide - in 3s cubic - bezier(0.77, 0, 0.175, 1);
    -o - animation: slide - in 3s cubic - bezier(0.77, 0, 0.175, 1);
    animation: slide - in 3s cubic - bezier(0.77, 0, 0.175, 1)
}
.dropzone.dz - preview.dz - success - mark, .dropzone.dz - preview.dz - error - mark {
    pointer - events: none;
    opacity: 0;
    z - index: 500;
    position: absolute;
    display: block;
    top: 50 % ;
    left: 50 % ;
    margin - left: -27px;
    margin - top: -27px
}
.dropzone.dz - preview.dz - success - mark svg, .dropzone.dz - preview.dz - error - mark svg {
    display: block;
    width: 54px;
    height: 54px
}
.dropzone.dz - preview.dz - processing.dz - progress {
    opacity: 1;
    -webkit - transition: all 0.2s linear;
    -moz - transition: all 0.2s linear;
    -ms - transition: all 0.2s linear;
    -o - transition: all 0.2s linear;
    transition: all 0.2s linear
}
.dropzone.dz - preview.dz - complete.dz - progress {
    opacity: 0;
    -webkit - transition: opacity 0.4s ease - in;
    -moz - transition: opacity 0.4s ease - in;
    -ms - transition: opacity 0.4s ease - in;
    -o - transition: opacity 0.4s ease - in;
    transition: opacity 0.4s ease - in
}
.dropzone.dz - preview: not(.dz - processing).dz - progress {
    -webkit - animation: pulse 6s ease infinite;
    -moz - animation: pulse 6s ease infinite;
    -ms - animation: pulse 6s ease infinite;
    -o - animation: pulse 6s ease infinite;
    animation: pulse 6s ease infinite
}
.dropzone.dz - preview.dz - progress {
    opacity: 1;
    z - index: 1000;
    pointer - events: none;
    position: absolute;
    height: 16px;
    left: 50 % ;
    top: 50 % ;
    margin - top: -8px;
    width: 80px;
    margin - left: -40px;
    background: rgba(255, 255, 255, 0.9);
    -webkit - transform: scale(1);
    border - radius: 8px;
    overflow: hidden
}
.dropzone.dz - preview.dz - progress.dz - upload {
    background:  # 333;
    background: linear - gradient(to bottom,  # 666,  # 444);
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 0;
    -webkit - transition: width 300ms ease - in - out;
    -moz - transition: width 300ms ease - in - out;
    -ms - transition: width 300ms ease - in - out;
    -o - transition: width 300ms ease - in - out;
    transition: width 300ms ease - in - out
}
.dropzone.dz - preview.dz - error.dz - error - message {
    display: block
}
.dropzone.dz - preview.dz - error: hover.dz - error - message {
    opacity: 1;
    pointer - events: auto
}
.dropzone.dz - preview.dz - error - message {
    pointer - events: none;
    z - index: 1000;
    position: absolute;
    display: block;
    display: none;
    opacity: 0;
    -webkit - transition: opacity 0.3s ease;
    -moz - transition: opacity 0.3s ease;
    -ms - transition: opacity 0.3s ease;
    -o - transition: opacity 0.3s ease;
    transition: opacity 0.3s ease;
    border - radius: 8px;
    font - size: 13px;
    top: 130px;
    left: -10px;
    width: 140px;
    background:  # be2626;
    background: linear - gradient(to bottom,  # be2626,  # a92222);
    padding: 0.5em 1.2em;
    color: white
}
.dropzone.dz - preview.dz - error - message: after {
    content: '';
    position: absolute;
    top: -6px;
    left: 64px;
    width: 0;
    height: 0;
    border - left: 6px solid transparent;
    border - right: 6px solid transparent;
    border - bottom: 6px solid # be2626
}


/*
 * Note that this is toastr v2.1.3, the "latest" version in url has no more maintenance,
 * please go to https://cdnjs.com/libraries/toastr.js and pick a certain version you want to use,
 * make sure you copy the url from the website since the url may change between versions.
 * */
.toast - title {
    font - weight: 700
}
.toast - message {
    -ms - word - wrap: break - word;
    word - wrap: break - word
}
.toast - message a, .toast - message label {
    color:  # FFF
}
.toast - message a: hover {
    color:  # CCC;
    text - decoration: none
}
.toast - close - button {
    position: relative;
    right:  - .3em;
    top:  - .3em;
    float: right;
    font - size: 20px;
    font - weight: 700;
    color:  # FFF;
    -webkit - text - shadow: 0 1px 0 # fff;
    text - shadow: 0 1px 0 # fff;
    opacity: .8;
    -ms - filter: progid: DXImageTransform.Microsoft.Alpha(Opacity = 80);
    filter: alpha(opacity = 80);
    line - height: 1
}
.toast - close - button: focus, .toast - close - button: hover {
    color:  # 000;
    text - decoration: none;
    cursor: pointer;
    opacity: .4;
    -ms - filter: progid: DXImageTransform.Microsoft.Alpha(Opacity = 40);
    filter: alpha(opacity = 40)
}
.rtl.toast - close - button {
    left:  - .3em;
    float: left;
    right: .3em
}
button.toast - close - button {
    padding: 0;
    cursor: pointer;
    background: 0 0;
    border: 0;
    -webkit - appearance: none
}
.toast - top - center {
    top: 0;
    right: 0;
    width: 100 %
}
.toast - bottom - center {
    bottom: 0;
    right: 0;
    width: 100 %
}
.toast - top - full - width {
    top: 0;
    right: 0;
    width: 100 %
}
.toast - bottom - full - width {
    bottom: 0;
    right: 0;
    width: 100 %
}
.toast - top - left {
    top: 12px;
    left: 12px
}
.toast - top - right {
    top: 12px;
    right: 12px
}
.toast - bottom - right {
    right: 12px;
    bottom: 12px
}
.toast - bottom - left {
    bottom: 12px;
    left: 12px
}
 # toast - container {
    position: fixed;
    z - index: 999999;
    pointer - events: none
}
 # toast - container * {
    -moz - box - sizing: border - box;
    -webkit - box - sizing: border - box;
    box - sizing: border - box
}
 # toast - container > div {
    position: relative;
    pointer - events: auto;
    overflow: hidden;
    margin: 0 0 6px;
    padding: 15px 15px 15px 50px;
    width: 300px;
    -moz - border - radius: 3px;
    -webkit - border - radius: 3px;
    border - radius: 3px;
    background - position: 15px center;
    background - repeat: no - repeat;
    -moz - box - shadow: 0 0 12px # 999;
    -webkit - box - shadow: 0 0 12px # 999;
    box - shadow: 0 0 12px # 999;
    color:  # FFF;
    opacity: .8;
    -ms - filter: progid: DXImageTransform.Microsoft.Alpha(Opacity = 80);
    filter: alpha(opacity = 80)
}
 # toast - container > div.rtl {
    direction: rtl;
    padding: 15px 50px 15px 15px;
    background - position: right 15px center
}
 # toast - container > div: hover {
    -moz - box - shadow: 0 0 12px # 000;
    -webkit - box - shadow: 0 0 12px # 000;
    box - shadow: 0 0 12px # 000;
    opacity: 1;
    -ms - filter: progid: DXImageTransform.Microsoft.Alpha(Opacity = 100);
    filter: alpha(opacity = 100);
    cursor: pointer
}
 # toast - container > .toast - info {
    background - image: url(data: image / png; base64, iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3 / 4 + b2ckmwVjJSpKkQ6wAi4gwhT + z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER + nn2KkO + Bb + UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR + EVrx2Ygfdsq6eu55BHYR8hlcki + n + kERUFG8BrA0BwjeAv2M8WLQBtcy + SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU + dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e / kIqlOGoVLwwPevpYHT + 00T + hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII = )!important
}
 # toast - container > .toast - error {
    background - image: url(data: image / png; base64, iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa / SgNBEMZzh0WKCClSCKaIYOED + AAKeQQLG8HWztLCImBrYadgIdY + gIKNYkBFSwu7CAoqCgkkoGBI / E28PdbLZmeDLgzZzcx83 / zZ2SSXC1j9fr + I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10 + 8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8 + J4C7yAoRTWI3w / 4klGRgR4lO7Rpn9 + gvMyWp + uxFh8 + H + ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc / oO + mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB + oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq / S / B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c / HWOXJGsvVg + RA / k2MC / wN6I2YA2Pt8GkAAAAASUVORK5CYII = )!important
}
 # toast - container > .toast - success {
    background - image: url(data: image / png; base64, iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf ///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==)!important}#toast-container>.toast-warning{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=)!important}#toast-container.toast-bottom-center>div,#toast-container.toast-top-center>div{width:300px;margin-left:auto;margin-right:auto}#toast-container.toast-bottom-full-width>div,#toast-container.toast-top-full-width>div{width:96%;margin-left:auto;margin-right:auto}.toast{background-color:#030303}.toast-success{background-color:#51A351}.toast-error{background-color:#BD362F}.toast-info{background-color:#2F96B4}.toast-warning{background-color:#F89406}.toast-progress{position:absolute;left:0;bottom:0;height:4px;background-color:#000;opacity:.4;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=40);filter:alpha(opacity=40)}@media all and (max-width:240px){#toast-container>div{padding:8px 8px 8px 50px;width:11em}#toast-container>div.rtl{padding:8px 50px 8px 8px}#toast-container .toast-close-button{right:-.2em;top:-.2em}#toast-container .rtl .toast-close-button{left:-.2em;right:.2em}}@media all and (min-width:241px) and (max-width:480px){#toast-container>div{padding:8px 8px 8px 50px;width:18em}#toast-container>div.rtl{padding:8px 50px 8px 8px}#toast-container .toast-close-button{right:-.2em;top:-.2em}#toast-container .rtl .toast-close-button{left:-.2em;right:.2em}}@media all and (min-width:481px) and (max-width:768px){#toast-container>div{padding:15px 15px 15px 50px;width:25em}#toast-container>div.rtl{padding:15px 50px 15px 15px}}


/*
File Name: 		skin-purple.css
Description:  You can add your skin-purple CSS here and it will overwrite template styles
*/

.vs-generic-background-purple {
    background-color: #e64682 !important;
}

.vs-generic-color-purple {
    color: #e64682 !important;
}

.vs-generic-color-white tr th{
    color: #fff !important;
}

.vs-generic-color-white {
    color: #fff !important;
}
/*-------------------------------------------------------*/
/* DASHBOARD SIDEBAR SELECTED
/*-------------------------------------------------------*/

.vs-tz-lma {
    background: #e64682 !important;
    color: #fff !important;
    font-size: 17px;
}

/*-------------------------------------------------------*/
/* REGISTER AND LOGIN
/*-------------------------------------------------------*/
.vs-header-selection-1 {
    color: #fff !important;
    background: #e64682;
    border-radius: 40px;
}

.v3-top-ri ul li a {
    background-color: #e64682 !important;
    border: 1px solid #d71d63 !important;
}

.v3-top-ri ul li a:hover {
    background-color: #ac104b !important;
    border: 1px solid #ac104b !important;
}

.vs-hom-pro {
    box-shadow: 0px 0px 12px 2px rgba(157, 30, 30, 0.48);
}

.vs-hom-pro a {
    /* border: 1px solid #e5e9ec;
     */
    padding: 4px 7px;
    border-radius: 30px;
    color: #253d52;
    font-size: 13px;
    border: 1px dashed #fff;
    box-shadow: 0 0 0 3px #f391b6;
    background-color: #e64682;
    color: #fff;
}

.vs-ad-preview-top-buttons {
    background-color: #78cd00 !important;
}


.vs-main-search-button {
    background: linear-gradient(to top, #78cd00, #78cd00) !important;
}

.vs-main-search-button:hover {
    background: linear-gradient(to top, #66ac03, #66ac03) !important;
}


.vs-btn-generic-1 {
    color: #fff;
    background-color: #e64682 !important;
    border-color: #e64682 !important;
    padding-bottom: 32px;
}

.vs-btn-generic-1:hover {
    color: #fff;
    background-color: #ac104b !important;
    border-color: #ac104b !important;
    background: #ac104b !important;
}


.vs-full-btn {
    height: 35px;
    line-height: 35px;
    background: linear-gradient(to top, #78cd00, #78cd00) !important; /*#e64682, #ff5252*/
    border: 1px solid #78cd00 !important;
}

.vs-full-btn:hover {
    height: 35px;
    line-height: 35px;
    background: linear-gradient(to top, #65a904, #65a904) !important;
}

.vs-full-btn-reset {
    height: 35px;
    line-height: 35px;
    background: linear-gradient(to top, #ef2f2f, #e31c1c) !important;
    border: 1px solid #ff0000 !important;
}

.vs-full-btn-reset:hover {
    height: 35px;
    line-height: 35px;
    background: linear-gradient(to top, #991717, #e31c1c) !important;
}

/*-------------------------------------------------------*/
.vs-story-tags {
    font-size: 14.5px !important;
    margin-left: 13px;
    color: #20344c;
    font-weight: bold;
}

.vs-home-list-pop-rat {
    background: #78cd00 !important;
}

.vs-home-list-pop-rat-purple {
    background: #e35f91 !important;
}

.vs-list-read-more-btn ul li:last-child a{
    background: #3a3a3a; /*#e64682*/
    border: 1px solid #131313; /*#ff5252*/
}

.

.vs-font-color-pink {
    color: #e64682 !important;
}

.pagination li.active {
    background-color: #e64682 !important;
}

.list-enqu-btn ul li:last-child a {
    background: #78cd00;
    border: 1px solid #63a505;
    color: #fff;
}

.vs-top-border-card {
    border-top: 2px solid #e64682;
}
/*-------------------------------------------------------*/
/* STORIES TAG FILTER SELECTED
/*-------------------------------------------------------*/
.vs-tag-selected {
    background: #ff5dd294;
    margin-left: 12px;
}

/*-------------------------------------------------------*/
/* BREADCRUMPS
/*-------------------------------------------------------*/

.vs-breadcrump ol li a {
    color: #e64682;
}

/*-------------------------------------------------------*/

.vs-list-number ul li {
    font-size: 13px;
    color: #e64682 !important;
}

.btn-custom {
    background: linear-gradient(to top, #e64682, #e182a6) !important;
    font-size: 11px;
    font-weight: 600;
}

.btn-custom:hover {
    background: linear-gradient(to top, #e91e6a, #e182a6) !important;
}

.special-buttons {
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
    background-color: red;
}

.dir-alp-l-com h4 {
    background: #e64682;
}

#carousel .flex-active-slide img {
    opacity: 1;
    cursor: default;
    border: 2px solid #e64682;
}

.pg-list-user-pro {
    /*background: url('https://s3.eu-central-1.amazonaws.com/assets.safesex.gr/vs/img/ipro2.jpg') no-repeat;*/
    background: linear-gradient(to top, #e64682, #db0b59) !important;
}

.vs-story-btn-color {
    background: #e64682;
    color: #fff !important;
}

.vs-btn-floating {
    background-color: #e64682;
}

.vs-btn-floating:hover {
    background-color: #ac104b;
}

.vs-header-button-message {
    background: #e64682 !important;
    color: #fff !important;
}

.vs-header-button-message:hover {
    background: #ac104b !important;
}

/*-------------------------------------------------------*/
/* ADS LIST
/*-------------------------------------------------------*/

.vs-ad-list h3 {
    background: #e64682 !important;
    color: #fff;
}

/*-------------------------------------------------------*/


.dir1-home-head:before {
    background: linear-gradient(to top, rgba(0, 0, 0, 0.1) 14%, rgba(0, 0, 0, 0) 66%);
}

.web-app:before {
    background: linear-gradient(to top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0.44) 100%);
}


.list-check-out-inn ul li b {
    color: #337ab7;
}

.vs-dash-header  {
    background: #e64682 !important;
    color: #fff;
}

/*-------------------------------------------------------*/
/* CHANGES ON PROFILES SECTION
/*-------------------------------------------------------*/
.list-mig-like-com {
    background: #ff525224;
}

.list-mig-like-com:before {
    background: linear-gradient(to top, rgba(0, 0, 0, 0.17) 10%, rgba(84, 84, 84, 0.04) 80%);
}

.vs-list-mig-lc-con p {
    color: #ffffff;
    font-size: 12px;
    font-weight: 600;
}
/*-------------------------------------------------------*/




/*
File Name: 		custom.css
Description:  You can add your custom CSS here and it will overwrite template styles
*/

/*-------------------------------------------------*/
/* = HOME PAGE BANNER AND SEARCH BOX
/*-------------------------------------------------*/
#background1 {
    background-size: cover;
    width: 100%;
    /*height: 100%;*/
    min-height: 550px;
    top: 40px;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -o-user-select: none;
    user-select: none;
    /* z-index: 99;
     */
    background: url('https://s3.eu-central-1.amazonaws.com/assets.safesex.gr/img/main_tiny_v-1.jpg') no-repeat;
    background-size: cover;
}

.tourz-search-form div:nth-child(1) {
    width: 25%;
    float: left;
}
.tourz-search-form div:nth-child(2) {
    width: 52%;
    float: left;
}
.tourz-search-form div:nth-child(3) {
    width: 18%;
    float: left;
}

@media screen and (max-width: 767px) {
    .tourz-search-form div:nth-child(1) {
        width: 100%;
    }
    .tourz-search-form div:nth-child(2) {
        width: 100%;
    }
    .tourz-search-form div:nth-child(3) {
        width: 100%;
    }
}

@media only screen and (min-width: 993px) {
    #toast-container {
        top: 3%;
        right: 0.2%;
        max-width: 86%;
    }
}

.vs-home-grid-thumb .dir-hli-1 img {
    height: 185px !important;
}

/*-------------------------------------------------*/
/* = MOBILE APP
/*-------------------------------------------------*/
.web-app {
    /*background: url(../images/test7.jpg) bottom center;
     background-position: 0px 0px;
     */
    background-size: 100%;
    position: relative;
    overflow: hidden;
    /* padding: 50px 0px 40px 0px;
     */
    background-repeat-y: no-repeat;
}

/*-------------------------------------------------*/
/* PRE LOADING
/*-------------------------------------------------*/
#status {
    width: 200px;
    height: 200px;
    position: absolute;
    left: 50%;
    /* centers the loading animation horizontally one the screen */
    top: 50%;
    /* centers the loading animation vertically one the screen
    background-image: url(../images/loading-svg-ring-5.gif);*/
    /* path to your loading animation */
    background-repeat: no-repeat;
    background-position: center;
    margin: -100px 0 0 -100px;
    /* is width and height divided by two */
}

/*-------------------------------------------------*/
/* BACKGROUND FOR FRONT PAGE
/*-------------------------------------------------*/
.list-pg-bg {
    background: #ffffff;
}

/*-------------------------------------------------------*/
/* REGISTER AND LOGIN
/*-------------------------------------------------------*/
.tz-register {
    background: url('https://s3.eu-central-1.amazonaws.com/assets.safesex.gr/img/collage_login.jpg') #e6e6e6;
    position: relative;
    overflow: hidden;
    padding-top: 50px;
}

/*-------------------------------------------------------*/
/* DASHBOARD SIDEBAR SELECTED
/*-------------------------------------------------------*/

.vs-tz-lma {
    background: #fd808a;
    font-size: 17px;
}

/*-------------------------------------------------------*/
/* DASHBOARD SELECT BOXES + INPUTS
/*-------------------------------------------------------*/
.hom-cre-acc-right form select {
    border: 1px solid #b6b6b6;
    height: 45px;
    padding: 10px 11px;
}

.hom-cre-acc-right form input {
    border: 1px solid #b6b6b6;
}

.hom-cre-acc-right form textarea {
    border: 1px solid #b6b6b6;
}

/* REGISTER AND LOGIN*/
.tz-2-main-2 {
    border: 1px solid #eaedef;
    padding: 10px;
}

.tz-2-main-com img {
    margin-bottom: 10px;
    padding: 5px;
    margin-bottom: 4px;
}

.tz-2-main-com span {
    font-size: 20px;
}

.tz-2-main-com h2 {
    font-size: 50px;
    font-weight: 600;
}

/*-------------------------------------------------------*/
/* REGISTER AND LOGIN
/*-------------------------------------------------------*/
.vs-header-selection-1 {
    color: #fff !important;
    background: #fd808a;
    border-radius: 40px;
}

.v3-m-2 {
    float: left;
    width: 42%;
    padding: 10px 20px;
}

.v3-m-3 {
    float: left;
    width: 38%;
}

.v3-top-ri ul li a {
    background-color: #fd808a;
    border: 1px solid #ff5252;
}

.v3-top-ri ul li a:hover {
    background-color: #ff5252;
    border: 1px solid #ff5252;
}

.vs-hom-pro {
    box-shadow: 0px 0px 12px 2px rgba(157, 30, 30, 0.48);
}

.vs-hom-pro:hover {
    background: #f3f2ee;
}

.vs-hom-pro a {
    /* border: 1px solid #e5e9ec;
     */
    padding: 4px 7px;
    border-radius: 30px;
    color: #253d52;
    font-size: 13px;
    border: 1px dashed #fff;
    box-shadow: 0 0 0 3px #c88186;
    background-color: #fd808a;
    color: #fff;
}


.vs-main-search-button {
    background: linear-gradient(to top, #fd808a, #ff5252) !important;
}

.vs-main-search-button:hover {
    background: linear-gradient(to top, #f13131, #d51111) !important;
}

.hom-cre-acc-left ul.typeahead__list {
    margin-top :0;
}

.hom-cre-acc-left ul.typeahead__list li {
    padding-bottom :5px;
}

.vs-btn-generic-1 {
    color: #fff;
    background-color: #fd808a;
    border-color: #ff5252;
    padding-bottom: 28px;
}

.vs-btn-generic-1:hover {
    color: #fff;
    background-color: #ff5252;
    border-color: #ff5252;
    background: #ff5252;
}

.backdrop{
    background-color: #e997b6;
}


/*-------------------------------------------------------*/
/* SET VARIOUS MARGINS
/*-------------------------------------------------------*/
.margin-top-5 {
    margin-top: 5px !important;
}

.margin-top-10 {
    margin-top: 10px !important;
}

.margin-top-15 {
    margin-top: 15px !important;
}

.margin-top-20 {
    margin-top: 20px !important;
}

.margin-top-50 {
    margin-top: 50px !important;
}

.margin-top-80 {
    margin-top: 80px !important;
}

.no-margin-bottom {
    margin-bottom: 0 !important;
}
.margin-bottom-5 {
    margin-bottom: 5px !important;
}

.margin-bottom-10 {
    margin-bottom: 10px !important;
}

.margin-bottom-15 {
    margin-bottom: 15px !important;
}

.margin-bottom-20 {
    margin-bottom: 20px !important;
}

.margin-bottom-40 {
    margin-bottom: 40px !important;
}

.margin-bottom-60 {
    margin-bottom: 60px !important;
}

.vs-font-size {
    font-size: 11px !important;
}

.vs-full-btn {
    background: linear-gradient(to top, #787878, #979797) !important; /*#fd808a, #ff5252*/
}

.vs-full-btn:hover {
    background: linear-gradient(to top, #f13131, #d51111) !important;
}

.vs-full-btn-red {
    height: 35px;
    line-height: 35px;
    background: linear-gradient(to top, #cd2f20, #cd232b) !important; /*#e64682, #ff5252*/
    border: 1px solid #cd060b !important;
}

.vs-full-btn-red:hover {
    height: 35px;
    line-height: 35px;
    background: linear-gradient(to top, #a91113, #a90712) !important;
}

.isDisabled {
    pointer-events: none;
    cursor: default;
    text-decoration: none;
    color: black;
}
/*-------------------------------------------------------*/
.vs-story-tags {
    font-size: 14.5px !important;
    margin-left: 13px;
    color: #20344c;
    font-weight: bold;
}

.vs-home-list-pop-rat {
    position: unset;
    letter-spacing: 1.2px;
    background: #ff5252;
}

.vs-list-read-more-btn {
    padding-top: 3px;
}

.vs-list-read-more-btn ul li:last-child a{
    background: #3a3a3a; /*#fd808a*/
    border: 1px solid #131313; /*#ff5252*/
}

.vs-hom-list-share ul li {
    width: 50%;
}

.vs-font-color-white {
    color: #ffffff !important;
}

.vs-font-color-pink {
    color: #e64682 !important;
}

/*-------------------------------------------------------*/
/* HOME PAGE: DISCOUNT
/*-------------------------------------------------------*/
.vs-home-dis {
    position: relative;
    overflow: hidden;
    background: #522552;
    padding: 70px 0px;
}
.vs-home-dis h2 {
    color: #fff;
    font-size: 46px;
    vertical-align: middle;
    text-align: center;
}
.vs-home-dis h2 span {
    color: #fdb714;
    font-size: 46px;
    font-family: 'Quicksand', sans-serif;
    font-weight: 600;
}
.vs-home-dis h2 a {
    padding: 4px 7px;
    border-radius: 30px;
    color: #253d52;
    font-size: 24px;
    border: 1px dashed #fff;
    box-shadow: 0 0 0 3px #ceae0c;
    background-color: #eac610;
    color: #fff;
    vertical-align: middle;
}

/*-------------------------------------------------------*/
/* SOLVE SELECT DROPDOWN SCROLLBAR VISIBLE
/*-------------------------------------------------------*/
.select-dropdown{
    overflow-y: auto !important;
}
/* END SOLVE SELECT DROPDOWN SCROLLBAR VISIBLE */

/*-------------------------------------------------------*/
/* STORIES TAG FILTER SELECTED
/*-------------------------------------------------------*/
.vs-tag-selected {
    background: #ff5dd294;
    margin-left: 12px;
}

/*-------------------------------------------------------*/
/* BREADCRUMPS
/*-------------------------------------------------------*/

.vs-breadcrump ol li a {
    color: #fd808a;
}

.vs-breadcrump h1 {
    padding-top: 5px;
}

/*-------------------------------------------------------*/

.vs-list-number ul li {
    font-size: 13px;
    color: #ff5252;
}

.btn-custom {
    background-color: hsl(0, 100%, 66%) !important;
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff5252", endColorstr="#f36873");
    background-image: -khtml-gradient(linear, left top, left bottom, from(#ff5252), to(#f36873));
    background-image: -moz-linear-gradient(top, #ff5252, #f36873);
    background-image: -ms-linear-gradient(top, #ff5252, #f36873);
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ff5252), color-stop(100%, #f36873));
    background-image: -webkit-linear-gradient(top, #ff5252, #f36873);
    background-image: -o-linear-gradient(top, #ff5252, #f36873);
    background-image: linear-gradient(#ff5252, #f36873);
    border-color: #f36873 #f36873 hsl(0, 100%, 66%);
    color: #fff !important;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.16);
    -webkit-font-smoothing: antialiased;
}

.btn-custom:hover {
    background-color: hsl(0, 82%, 53%) !important;
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#fa4f5c", endColorstr="#c2313c");
    background-image: -khtml-gradient(linear, left top, left bottom, from(#fa4f5c), to(#c2313c));
    background-image: -moz-linear-gradient(top, #fa4f5c, #c2313c);
    background-image: -ms-linear-gradient(top, #fa4f5c, #c2313c);
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fa4f5c), color-stop(100%, #c2313c));
    background-image: -webkit-linear-gradient(top, #fa4f5c, #c2313c);
    background-image: -o-linear-gradient(top, #fa4f5c, #c2313c);
    background-image: linear-gradient(#fa4f5c, #c2313c);
    border-color: #c2313c #c2313c hsl(0, 82%, 53%);
    color: #fff !important;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.33);
    -webkit-font-smoothing: antialiased;
}


.btn-sq-lg {
    width: 150px !important;
    height: 150px !important;
}

.btn-sq {
    width: 100% !important;
    height: 100px !important;
    font-size: 10px;
}

.btn-sq-sm {
    width: 50px !important;
    height: 50px !important;
    font-size: 10px;
}

.btn-sq-xs {
    width: 25px !important;
    height: 25px !important;
    padding:2px;
}


.special-buttons {
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
    background-color: red;
}
.special-buttons my-button {
    width: 100%;
}

.dir-alp-l-com h4 {
    background: #fd808a;
}

.dir-alp-l-com1 {
    padding: 12px;
    padding-bottom: 12px;
}

#carousel .flex-active-slide img {
    opacity: 1;
    cursor: default;
    border: 2px solid #fd808a;
}

.pg-list-user-pro {
    /*background: url('https://s3.eu-central-1.amazonaws.com/assets.safesex.gr/img/ipro2.jpg') no-repeat;*/
    background: linear-gradient(to top, #fa9292, #d51111) !important;;
}

.con-page {
    background: url('https://s3.eu-central-1.amazonaws.com/assets.safesex.gr/img/contact3-min.png') no-repeat left center;
}

.dir-pop-head {
    background: url('https://s3.eu-central-1.amazonaws.com/assets.safesex.gr/img/girl-top1.jpg') no-repeat center center;
    background-size: cover;
    padding: 25px 25px 50px 25px !important;
    border-bottom: 0px !important;
}

.close {
    float: left;
}

.dir-pop-body {
    padding: 5px 15px 20px 15px !important;
    border-bottom: 10px solid #263b57;
}

@media (min-width: 768px) {
    .modal-dialog {
        width: 800px !important;
        margin: 10px auto !important;
    }
}

.list-ser-img img{
    width: 100%;
    height: 100%;
    -webkit-object-fit: cover;
    -moz-object-fit: cover;
    -o-object-fit: cover;
    object-fit: cover;
}

.vs-web-app-con ul li {
    color: #000000;
}

.vs-btn-floating {
    background-color: #FF5252;
}

.vs-btn-floating:hover {
    background-color: #ff3636;
}

.vs-header-button-message {
    top: 0 !important;
    background: #fd808a;
    padding: 4px 10px 3px 10px;
    border-radius: 17%;
    color: #fff;
}

.vs-header-button-message:hover {
    background: #FF5252;
}

.vs-message-unread {
    background: #ccf8cc;
    border-radius: 10px;
}

/*-------------------------------------------------------*/
/* ADS LIST
/*-------------------------------------------------------*/

.vs-ad-list h3 {
    background: #fd808a !important;
    color: #fff;
}

/*-------------------------------------------------------*/

.inn-page-bg {
    margin-top: 60px;
    background: url('https://s3.eu-central-1.amazonaws.com/assets.safesex.gr/img/girl-top1.jpg') no-repeat;
    background-size: cover;
    position: relative;
}

.dir1-home-head:before {
    background: linear-gradient(to top, rgba(0, 0, 0, 0.1) 14%, rgba(0, 0, 0, 0) 66%);
}

.web-app:before {
    background: linear-gradient(to top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0.44) 100%);
}

.vs-list-spac {
    padding: 10px 0px 2px;
    margin-bottom: 6px !important;
}

.list-check-out-inn ul li b {
    color: #337ab7;
}

.pg-list-prop {
    background: url('https://s3.eu-central-1.amazonaws.com/assets.safesex.gr/img/profile.jpg') no-repeat;
    background-size: cover;
    box-sizing: content-box;
}

.vs-pg-list-prop {
    background: url('https://s3.eu-central-1.amazonaws.com/assets.safesex.gr/img/features_tiny_v-1.jpg') no-repeat;
    background-size: cover;
    box-sizing: content-box;
}

.pg-list-1-left h4 {
    color: #ffffff;
    padding: 5px 00px;
    font-size: 16px;
}

.pg-list-1 {
    padding: 45px 0px 70px 0px;
}

.vs-list-enqu-btn ul li {
    width: 33%;
}

.pg-list-1-right h4 {
    color: #fff;
}

.vs-pg-list-1 {
    padding: 100px 0px 255px 0px;
    margin-top: 0;
}

.list-pg-guar ul li:nth-child(3) {
    border-bottom: 1px solid #e2e2e2 !important;
    padding-bottom: 5px;
}

.list-pg-guar ul li:nth-child(5) {
    border-bottom: 0px solid #e2e2e2 !important;
    padding-bottom: 2px;
}

.vs-dash-header  {
    background: #fd808a;
    color: #fff;
}

.tz-l-2 ul li a {
    padding: 9px 0px;
}

.tz-l-2 ul li:last-child {
    border-bottom: 0px solid #dcdcdc;
    padding: 0px 0px 0px 0px;
}

.dir-pr-p3-right p, li {
    line-height: 20px;
}

.tz-l-2 ul li {
    border-bottom: 1px solid #e64682;
}

.tz-db-table table tr td {
    padding: 9px 14px 9px 0px;
}

.tz-db-table table tr th {
    padding: 14px 14px 14px 9px;
}

.tz-l-1 ul li span {
    font-size: 24px;
    line-height: 20px;
}
/*-------------------------------------------------------*/
/* CHANGES ON PROFILES SECTION
/*-------------------------------------------------------*/
.list-mig-like-com {
    background: #ff525224;
}

.list-mig-like-com:before {
    background: linear-gradient(to top, rgba(0, 0, 0, 0.17) 10%, rgba(84, 84, 84, 0.04) 80%);
}

.vs-list-mig-lc-con p {
    color: #ffffff;
    font-size: 12px;
    font-weight: 600;
}
/*-------------------------------------------------------*/

footer {
    color: #9a9a9a;
    font-weight: 300;
    padding: 15px 0 50px;
}

.home-list-pop:hover {
    -moz-transform: scale(1.01);
    -webkit-transform: scale(1.01);
    -o-transform: scale(1.01);
    transform: scale(1.01);
    box-shadow: 0px 11px 9px -10px rgba(0, 0, 0, 0.52);
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
}


.toast-message {
    font-size: 16px !important;
    font-weight: bold;
}

<!-- .right {
  position: absolute;
  right: 0px;
  width: 300px;
  border: 3px solid #73AD21;
  padding: 10px;
} -->

.right {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 500px;
  border: 3px solid #e62f20; 
}

.clearfix {
  <!-- background-color: #eee; -->
  <!-- width: 100%;
  height: 1200px;
  border: 1px dotted black; -->
  <!-- overflow: scroll; -->
  overflow: auto;
}

.nav {
  background-color: white; 
  list-style-type: none;
  text-align: right;
  margin: 0;
  padding: 0;
}

.nav li {
  display: inline-block;
  font-size: 20px;
  padding: 20px;
}


body {color:#000000; background:#fff url("https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/bg.png") repeat-x 0 0; font:12px Tahoma,Verdana,Helvetica,'MS Sans Serif',sans-serif}

td,th {color:#000000; font:12px Tahoma,Verdana,Helvetica,'MS Sans Serif',sans-serif}

input,textarea,option,select {color:#000000; font:1em Tahoma,Verdana,Helvetica,'MS Sans Serif',sans-serif}



/* // ---- typography ---- // */



a {color:#1385dc; text-decoration:underline}

a:hover {text-decoration:none}



a.inactive_photo{

	text-decoration:none;

	font-weight:bold;

	background:none;

}



.fBold {font-weight:bold}



/* -- ---- typography ---- -- */



#minWidth {position:relative; width:1000px; margin:0 auto}



/* // ---- top block ---- // */

.top {padding:0 20px}

	.top .logo {float:left; padding:14px 0 2px 1px; text-align:right; margin-bottom:0px}

	.login-form {float:right; width:500px; font-size:11px; text-align:right; padding-top:10px}

		.login-form .inp-t {width:98px; margin-right:9px}

		.login-form label {font-weight:bold; padding-right:2px}

	.login-form .btn {color:#fff; font-weight:bold; width:54px; height:20px; background:#e0a831 url(../images/btnEnter.png) no-repeat 0 0; border-width:0; vertical-align:bottom}

/* -- ---- top block ---- -- */



/* // ---- navigation block ---- // */

.navigation {height:35px; background:#1bb0d1 url(../images/bgNav.png) repeat-x 0 0; border-bottom:1px solid #00d8ff; padding:0 20px 0 20px}

	.navigation table {width:100%; border-collapse:collapse; border-spacing:0; height:35px}

	.navigation .brd {width:16%; background:url(../images/navBrd.gif) no-repeat 50% 50%}

	.navigation td {padding:0; font-weight:bold; white-space:nowrap; font-size:14px}

	.navigation a {color:#fff}

	.navigation .hr, .navigation .hr a {color:#bcf3ff}

/* -- ---- navigation block ---- -- */





td.error-field {

	font-weight:bold; 

	color:red;

	padding-left:5px;

}



td.error-field-down {

	font-weight:bold; 

	color:red;

	padding-top:0;

	padding-bottom:5px;

}







/* // ---- nav profile block ---- // */

.profile-nav {font-size:12px; font-weight:bold; padding:10px 11px 11px 14px; text-align:center; background:#f6efc5 url(../images/bgProfile.png) repeat-x 0 0}

	.profile-nav a {color:#7c6436}

	.profile-nav li {float:left; position:relative; padding-right:18px}

		.profile-nav li span {position:absolute; left:0; top:1px; height:13px; background-image:url(../images/icons-profile.gif)}

	.profile-nav .ico-profile {padding-left:14px}

		.profile-nav .ico-profile span {width:9px}

	.profile-nav .ico-mess {padding-left:17px}

		.profile-nav .ico-mess span {width:12px; background-position:-9px 0}

	.profile-nav .ico-prop {padding-left:13px}

		.profile-nav .ico-prop span {width:9px; background-position:-21px 0}

	.profile-nav .ico-fav {padding-left:16px}

		.profile-nav .ico-fav span {width:11px; background-position:-30px 0}

	.profile-nav .ico-exit {float:right; padding:0 0 0 14px}

		.profile-nav .ico-exit span {width:9px; background-position:-41px 0}

/* -- ---- nav profile block ---- -- */



/* // ---- middle block ---- // */

.middle {padding:20px 10px 1px 10px}

	.long-col {float:right; width:860px}

	.side-col {float:left; width:201px}

/* -- ---- middle block ---- -- */



/* // ---- middle1 block ---- // */

.middle1 {padding:1px 20px 1px 15px}

	.long-col {float:right; width:760px}

	.side-col {float:left; width:201px}

/* -- ---- middle block ---- -- */



/* // ---- brd block ---- // */

.brd-block {zoom:1}

	.brd-block .brd-hd {position:relative; z-index:91; font-size:1px}

		.brd-block .brd-right {position:relative; float:right}

		.brd-block .brd-left {position:relative; float:left}

		.brd-m, .brdm {zoom:1}

		.brd-top {background-position:0 0}

			.brd-top .brd-left {background-position:0 0}

			.brd-top .brd-right {background-position:100% 0}

		.brd-btm {background-position:0 100%}

			.brd-btm .brd-left {background-position:0 100%}

			.brd-btm .brd-right {background-position:100% 100%}



.simple-brd {padding-bottom:20px}

	.simple-brd .brd-hd {height:1px}

		.simple-brd .brd-hd div {width:5px; height:5px; background-image:url(../images/brdSimple.gif)}

	.simple-brd .brd-top {margin-bottom:-1px}

	.simple-brd .brd-btm {top:-5px; margin-bottom:-1px}

	.simple-brd .brd-m {border:1px solid #b2b2b2; padding:17px 20px}

	

/* -- ---- brd block ---- -- */



/* // ---- most popular ---- // */

.most-popular {padding-bottom:20px}

	.most-popular .brd-hd {background-color:#f5ffea; background-image:url(../images/bgMost.gif); height:8px}

	.most-popular .brd-hd div {width:8px; height:8px; background-image:url(../images/bgMost-corns.gif);}

	.most-popular .brd-m {background:#f5ffea url(../images/bgMost-left.gif) repeat-y 0 0}

		.most-popular .brdm {background:url(../images/bgMost-right.gif) repeat-y 100% 0; padding:0 12px}

	.most-popular dl {position:relative; top:-4px; margin-bottom:-4px; width:100%; overflow:hidden}

		.most-popular dl dt {padding:8px 0 2px}

		.most-popular dl dd {border-bottom:1px dashed #c4db96; margin-bottom:-1px; padding-bottom:10px;}

/* -- ---- most popular ---- -- */



/* // ---- bn places ---- // */

.bn {padding-bottom:20px; text-align:center}

.view-bn {position:relative; width:486px; border:1px solid #b2b2b2; text-align:center; padding:9px 0; margin:0 auto}

	.view-bn small {position:absolute; left:8px; top:-7px; color:#5b5b5b; text-transform:uppercase; background-color:#fff; padding:0 3px}



.view-bn300 {position:relative; width:300px; border:1px solid #b2b2b2; text-align:center; padding:9px 0; margin:0 auto}

	.view-bn300 small {position:absolute; left:8px; top:-7px; color:#5b5b5b; text-transform:uppercase; background-color:#fff; padding:0 3px}



/* -- ---- bn places ---- -- */





/* // ---- view user ---- // */

.view-user {font-size:11px; line-height:15px; padding-bottom:10px}

	.view-user .img-cover {float:left; border:1px solid #b2b2b2; margin:0 10px 0 0}

/* -- ---- view user ---- -- */



h1, .s-title {color:#ff8a00; font-size:25px; font-weight:normal; padding-bottom:15px; text-align:center;}

.btn-a {display:block; font-size:11px; background:#dfa830 url(../images/btn-a-right.png) no-repeat 100% 0; height:20px; border-width:0; margin:0; padding:0; text-decoration:none; text-align:center; text-indent:0}

	.btn-a span, .btn-a input {display:block; background:url(../images/btn-a-left.png) no-repeat 0 0; height:20px; line-height:19px; font-weight:bold; color:#fff; padding:0; margin:0; border-width:0; width:100%}

/* // ---- editor styles ---- // */

.for-editor {}

	.for-editor h1 {padding-bottom:3px; text-align:center;}

	.for-editor p {padding-bottom:15px}

	.for-editor h3 {font-size:1em; font-weight:bold; text-align:center;}

/* -- ---- editor styles ---- -- */



/* // ---- bottom block ---- // */

.bottom-nav {font-size:11px; text-align:center; border-top:1px solid #bee275; background-color:#f5ffea; padding:8px 10px 10px}

	.bottom-nav .brd {color:#a2a2a2; padding:0 20px}

.bottom {color:#838c72; font-size:11px; text-align:center; padding:8px 0}

/* -- ---- bottom block ---- -- */



/* // ---- search block ---- // */

.search-block {color:#333; padding-bottom:10px}

	.search-block .brd-hd {height:1px}

		.search-block .brd-hd div {width:5px; height:5px; background-image:url(../images/bgSearch-corns.gif)}

	.search-block .brd-top {margin-bottom:-1px}

	.search-block .brd-btm {top:-5px; margin-bottom:-1px}

	.search-block .brd-m {border:1px solid #d8cf86; background:#fffffe url(../images/bgSearch.png) repeat-x 0 0; padding:1px 1px}

	.search-block .d-row {padding-bottom:17px}

	.search-block select {margin-right:5px}

	.search-block .inp-t {margin-right:4px}

.line-checks {padding:0 0 17px}

	.line-checks li {position:relative; float:left; padding:0 20px 0 20px}



.pages {padding:0 0 10px; text-align:center; zoom:1}

	.pages a, .pages strong {margin:0 2px}

/* -- ---- search block ---- -- */



/* // ---- mail block ---- // */

.top-block {color:#333; padding-bottom:10px; display: none;}

	.top-block .brd-hd {height:1px}

	.top-block .brd-hd div {width:5px; height:5px; background-image:url(../images/bgSearch-corns.gif)}

	.top-block .brd-top {margin-bottom:-1px}

	.top-block .brd-btm {top:-5px; margin-bottom:-1px}

	.top-block .brd-m {border:1px solid #d8cf86; background:#fffffe url(../images/bgSearch.png) repeat-x 0 0; padding:5px 10px 5px 10px}

	.top-block .d-row {padding-bottom:17px}

	.top-block select {margin-right:5px}

	.top-block .inp-t {margin-right:4px}

/* -- ---- mail block ---- -- */



/* // ---- list results ---- // */

.list-results {color:#333; background:url(../images/brd.gif) repeat-x 0 0; padding-bottom:10px}

	.list-results li {padding:16px 0 16px 108px; background:url(../images/brd.gif) repeat-x 0 100%}

	.list-results .img-cover {position:relative; float:left; left:-108px; margin-right:-110px; border:1px solid #b2b2b2}

	.list-results p {line-height:20px; padding-bottom:6px}

	.i-block {float:right; width:100%}

/* -- ---- list results ---- -- */



/* // ---- list addnav ---- // */

.list-addnav {background-image:none}

	.list-addnav li {float:left; padding:0; background:#1bb1d2 url(../images/addnav-left.png) no-repeat 0 0; height:24px; margin-right:8px; margin-bottom:20px}

		.list-addnav li a {position:relative; display:block; color:#fff; font-size:11px; font-weight:bold; line-height:23px; background:url(../images/addnav-right.png) no-repeat 100% 0; height:24px; padding:0 11px 0 28px; text-decoration:none}

			.list-addnav li.fu-fu {background-color:#18c7bf; background-image:url(../images/addnav-fu-left.png)}

				.list-addnav li.fu-fu a {background-image:url(../images/addnav-fu-right.png)}

		.list-addnav li span {position:absolute; left:10px; top:6px; height:13px; font-size:1px; background-image:url(../images/icons-profile.gif)}

		.list-addnav li .ico-mail {background-position:-50px 0; width:12px}

		.list-addnav li .ico-fav {background-position:-62px 0; width:11px}

		.list-addnav li .ico-details {background-position:-73px 0; width:9px}

		.list-addnav li .ico-fu {background-position:-82px 0; width:11px}

/* -- ---- list addnav ---- -- */



.show-thumb {width:100%; border-collapse:collapse; border-spacing:0; margin-bottom:20px}

	.show-thumb td {padding:0 0 16px 0; background:url(../images/brd.gif) repeat-x 0 100%; vertical-align:bottom}

	.show-thumb td img {border:1px solid #b2b2b2}

	.show-thumb td.img-c {padding:0 10px 16px 0; white-space:nowrap}

	.show-thumb td.view-tools {width:100%}



/* // ---- view profile ---- // */

.view-profile {background:url(../images/brd.gif) repeat-x 0 100%; padding-bottom:1px; margin-bottom:10px}

	.view-profile .img-show {float:left; padding:0 16px 12px 0}

	.view-profile .img-show img {border:1px solid #b2b2b2}

	.profile-tbl {width:100%; border-collapse:collapse; border-spacing:0; margin-bottom:12px}

		.profile-tbl .zb {background-color:#ececec}

		.profile-tbl th {font-weight:bold; text-align:left; padding:5px 10px 6px; vertical-align:top}

		.profile-tbl td {padding:5px 10px 6px; vertical-align:top}

	.view-profile .for-editor {padding:0 10px; line-height:20px}

/* -- ---- view profile ---- -- */



div.sys-msg-error{

	background-color:#FCFCC2;

	color:#FF0000;

	padding-top:7px;

	padding-bottom:7px;	

}

div.sys-msg-notice{

	background-color:#FCFCC2;

	color:#000000;

	padding-top:7px;

	padding-bottom:7px;	

}

span.error-field {

	font-weight:bold;

	color:red;

}



.t-block{

	float:left;

	width:20%;

	min-width:130px;

	max-width:180px;

	}



.id-block{

	float:left;

	}

.pas-block{

	float:left;

	}

.lbut-block{

	}

.rem-block{

	margin: 2px 2px 2px 2px;

	}

.birthday-block{

	float:left;

	width:20%;

	min-width:350px;

	max-width:380px;

	}

.head-photo-block{

	margin: 0px 20px 20px 0px;

	float:left;

	}



.galtop-block{

	float:left;

	margin: 5px 5px 5px 2px;

	}

	

.gal-block{

	float: left;

	min-width: 220px;

	max-width: 280px;

	width: 20%;

	height: 670px;
	
	<!-- display: flex;
	
	justify-content: space-between; -->

	}


#main {
  float: left;

	min-width: 220px;

	max-width: 280px;

	width: 20%;

	height: 670px;
	display: flex;
	justify-content: space-between;
}

#main div {
	min-width: 220px;

	max-width: 280px;

	width: 20%;

	height: 670px;
}



.gal-head td{

	font-size: 12px

	}


.grid-container {
  display: grid;
  grid-column-gap: 21px;
  grid-row-gap: 50px;
  grid-template-columns: auto auto auto;
  background-color: #c70909;
  padding: 10px;
}

.grid-item {
  background-color: white;
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 20px;
  text-align: center;
  float: left;

	min-width: 220px;

	max-width: 280px;

	width: 20%;

	height: 670px;
}



.myphoto-block{

	float: left;

	min-width: 220px;

	max-width: 230px;

	width: 20%;

	}



.login-link {padding-bottom:10px; padding-top:10px; float:right; display:none;}

	.login-link a {font-size:16px; border: 1px solid blue; padding: 2px; text-decoration: none;}



.search_banner_mid { width: 728px; height: 90px;}



















html, body {

  height: 100%;

}

#sendForm {

  display: flex;

  flex-direction: column;

  height: 100%;

}

#head, #controls {

  background-color: #e1eaef;

}

#head .photo {

  width: 60px;

  height: 90px;

  position: absolute;

  background-position: center center;

  background-repeat: no-repeat;

  background-size: 100%;

  border-radius: 10px;

  margin: 5px 20px 0 10px;

  transition: width .5s, height .5s;

}

#head .user {

  height: 80px;

  padding: 20px 0 0 90px;

  transition: padding .5s;

  line-height: 16px;

}

#head .user .name {

  font-size: 200%;

  margin: 0 0 2px;

  line-height: 24px;

}

#head .user .name a {

  color: #333;

  display: inline-block;

  text-decoration: none;

  border-bottom: 1px solid transparent;

}

#head .user .name a:hover {

  border-bottom-color: #333;

}

#head .timezone {

  white-space: nowrap;

  position: relative;

  cursor: help;

  border-bottom: 1px #888 dashed;

}

#head .timezone .popup {

  right: -16px;

}

#head .options {

  position: absolute;

  right: 16px;

  top: 8px;

}

#head .options .toggle {

  display: inline-block;

  cursor: pointer;

  width: 32px;

  height: 32px;

  background-image: url('/83488797/images/chat.png');

  opacity: .6;

  background-position-y: -8px;

}

#head .options .popupContainer:hover .toggle {

  opacity: .8;

}

#head .options .chat .toggle { background-position-x: -104px; }

#head .options .translate .toggle { background-position-x: -152px; }

#head .options .popup {

  right: 0px;

  white-space: nowrap;

  z-index: 10;

  padding: 8px;

}



#head .popup {

  position: absolute;

  pointer-events: none;

  opacity: 0;

  transition: opacity .15s;

  background-color: white;

  border-radius: 8px;

  padding: 2px 8px;

  box-shadow: 1px 1px 4px rgba(0,0,0,.2);

  cursor: default;

  z-index: 10;

}

#head .popupContainer.show .popup {

  pointer-events: all;

  opacity: 1;

}

#head .online > * { display: none; }

#head .online[online='t'] > b { display: inline; }

#head .online[online='f'] > .offline.ready { display: inline; }

#head .offline > span.minute,

#head .offline > span.hour,

#head .offline > span.day,

#head .offline > span > span {

  display: none;

}

#head .offline[p='minute'] > span.minute,

#head .offline[p='hour'] > span.hour,

#head .offline[p='day'] > span.day {

  display: inline;

}

#head .offline[q="0"] > span > span[q="0"],

#head .offline[q="1"] > span > span[q="1"],

#head .offline[q="2"] > span > span[q="2"] {

  display: inline;

}



#msgList {

  flex: 1 1 0;

  overflow-y: scroll;

  background-color: #fefdf8;

  background-image: url(/images/chat-bg2.jpg);

  text-align: center;

  position: relative;

}

#msgList .date {

  display: inline-block;

  background-color: rgba(255, 255, 255, .8);

  padding: 4px 12px;

  border-radius: 12px;

  box-shadow: 1px 1px 3px rgba(0, 0, 0, .2);

  color: #333;

  line-height: 16px;

  margin: 8px 0;

}

#msgList .message {

  padding: 2px 64px 2px 16px;

  text-align: left;

}

#msgList .message.my {

  padding: 2px 16px 2px 64px;

  text-align: right;

}

#msgList .message .baloon {

  background-color: white;

  display: inline-block;

  padding: 4px 5px 8px;

  border-radius: 8px;

  text-align: left;

  position: relative;

  box-shadow: 1px 1px 3px rgba(0,0,0,.2);

}

#msgList .message.my .baloon {

  background-color: #dcf8c6;

}

#msgList .message .text {

  line-height: 20px;

}

#msgList .message .after {

  float: right;

  margin: 8px 2px -6px 4px;

  font-size: 90%;

  color: gray;

}

#msgList .message .text.translated {

  display: none;

  opacity: .8;

  font-style: italic;

}

#msgList .message .after .translate {

  cursor: pointer;

  background-image: url('/83488799/images/chat.png');

  display: inline-block;

  width: 28px;

  background-position: -190px 0px;

  opacity: .5;

  height: 24px;

  margin: -5px -4px -2px -2px;

  vertical-align: top;

  transition: opacity .15s;

}

#msgList .message .after .translate:hover { opacity: .8; }

#msgList .message .after .translate.loading {

  animation: pulse 1s infinite;

}

@keyframes pulse {

  0% { opacity: 1 }

  50% { opacity: .3 }

  100% { opacity: 1 }

}

#msgList .message.isTranslate .text.translated {

  display: inline;

}



#msgList .message .after .read {

  color: #8c949a;

  display: inline-block;

  width: 8px;

}

#msgList .message .after .read::before {

  content: '✓';

}

#msgList .message[status='delivered'][read='1'] .after .read {

  color: #4fc3f7;

}

#msgList .message .after .read::after {

  content: '✓';

  margin: -4px;

}

/*#msgList .message[status='filtered'] .after .read::before,

#msgList .message[status='declined'] .after .read::before {

  content: 'X';

  color: red;

  margin: 0 0 0 2px;

}*/



#msgList ::selection {

  color: white;

  background-color: rgba(0, 120, 215, 0.8);

}

#msgList emoji.em::selection {

  color: transparent;

  background-color: rgba(0, 120, 215, 0.6);

}





#controls {  

}



#controls .message {

  padding: 8px 48px;

}

#message {

  min-height: 20px;

  line-height: 20px;

  max-height: 100px;

  overflow-y: auto;

  padding: 6px 8px;

  border-radius: 8px;

  background-color: white;

  outline: none;

  white-space: pre-wrap;

}

#message .em {

  margin: -5px 1px;

  color: inherit;

  font-size: inherit;

  vertical-align: baseline;

}



#controls span.emoji,

#controls span.send {

  display: block;

  position: absolute;

  text-align: center;

  width: 32px;

  height: 32px;

  bottom: 8px;

  line-height: 32px;

  cursor: pointer;

  background-image: url('/83488797/images/chat.png');

  background-position-y: -8px;

  background-repeat: no-repeat;

  opacity: 0.4;

  transition: opacity .15s;

}

#controls span.emoji {

  left: 8px;

  background-position-x: -56px;

}

#controls span.send {

  font-family: Arial;

  font-weight: bold;

  right: 8px;

  background-position-x: -8px;

}

#controls span.emoji:hover,

#controls span.send:hover {

  opacity: 0.6;

}



#emoji {

  flex-shrink: 0;

  height: 0px;

  font-size: 0;

  transition: height .1s;

  overflow: hidden;

}

#emoji.show {

  height: 104px;

}



#emoji .head {

  list-style-type: none;

  display: block;

  border-bottom: 1px solid #ccc;

  padding: 1px 15px 0;

  background-color: #e1eaef;

}

#emoji .head > li {

  display: inline-block;

  height: 28px;

  width: 48px;

  border-radius: 8px 0 0 0;

  border: 1px solid #ccc;

  border-width: 1px 0 1px 1px;

  margin: 0 0 -1px;

  background-color: white;

  cursor: pointer;

  background-position: center 5px;

  background-repeat: no-repeat;

  transition: box-shadow .15s;

}

#emoji .head > li:hover {

  box-shadow: -1px -1px 1px rgba(0,0,0,.1);

  transition: box-shadow 0s;

}

#emoji .head > li#l { background-image: url(/images/smiles/smile1.gif); background-position-y: 2px; }

#emoji .head > li#a { background-image: url(/images/emoji/1f600.png); }

#emoji .head > li#b { background-image: url(/images/emoji/262f.png); }

#emoji .head > li#c { background-image: url(/images/emoji/1f44d.png); }



#emoji .tabs {

  height: 74px;

  padding: 2px;

  overflow-y: scroll;

}

#emoji .tabs > div {

  display: none;

  padding: 0px 0 8px;

}

#emoji .tabs > div .em {

  cursor: pointer;

  margin: 0;

  padding: 4px;

  background-origin: content-box;

  transition: filter .15s;

}

#emoji .tabs > div .eml {

  cursor: pointer;

  margin: 0;

  padding: 2px 4px;

  display: inline-block;

  vertical-align: middle;

  transition: filter .15s;

}

#emoji .tabs > div .em:hover,

#emoji .tabs > div .eml:hover {

  filter: brightness(110%);

}

.em {

  display: inline-block;

  line-height: 20px;

  width: 20px;

  height: 20px;

  background-position-y: -4px;

  margin: 0 1px;

}

img.em {

  border: 0;

  user-select: text;

  cursor: text;

}

emoji.em {

  color: transparent;

}

img.em.eml {

  width: auto;

  height: auto;

  margin: -4px 1px 0;

  vertical-align: bottom;

}



.ema1 { background-image: url(/images/emoji/em.a1.png); }

.ema2 { background-image: url(/images/emoji/em.a2.png); }

.emb { background-image: url(/images/emoji/em.b.png); }

.emc { background-image: url(/images/emoji/em.c.png); }

.em01 { background-position-x:   -4px; }

.em02 { background-position-x:   -32px; }

.em03 { background-position-x:   -60px; }

.em04 { background-position-x:   -88px; }

.em05 { background-position-x:   -116px; }

.em06 { background-position-x:   -144px; }

.em07 { background-position-x:   -172px; }

.em08 { background-position-x:   -200px; }

.em09 { background-position-x:   -228px; }

.em10 { background-position-x:   -256px; }

.em11 { background-position-x:   -284px; }

.em12 { background-position-x:   -312px; }

.em13 { background-position-x:   -340px; }

.em14 { background-position-x:   -368px; }

.em15 { background-position-x:   -396px; }

.em16 { background-position-x:   -424px; }

.em17 { background-position-x:   -452px; }

.em18 { background-position-x:   -480px; }

.em19 { background-position-x:   -508px; }

.em20 { background-position-x:   -536px; }

.em21 { background-position-x:   -564px; }

.em22 { background-position-x:   -592px; }

.em23 { background-position-x:   -620px; }

.em24 { background-position-x:   -648px; }

.em25 { background-position-x:   -676px; }

.em26 { background-position-x:   -704px; }

.em27 { background-position-x:   -732px; }

.em28 { background-position-x:   -760px; }

.em29 { background-position-x:   -788px; }

.em30 { background-position-x:   -816px; }

.em31 { background-position-x:   -844px; }

.em32 { background-position-x:   -872px; }

.em33 { background-position-x:   -900px; }

.em34 { background-position-x:   -928px; }

.em35 { background-position-x:   -956px; }

.em36 { background-position-x:   -984px; }

.em37 { background-position-x:   -1012px; }

.em38 { background-position-x:   -1040px; }

.em39 { background-position-x:   -1068px; }

.em40 { background-position-x:   -1096px; }



#emoji[tab='l'] .head > li#l,

#emoji[tab='a'] .head > li#a,

#emoji[tab='b'] .head > li#b,

#emoji[tab='c'] .head > li#c {

  border-bottom-color: white;

}

#emoji[tab='l'] .tabs > div#l,

#emoji[tab='a'] .tabs > div#a,

#emoji[tab='b'] .tabs > div#b,

#emoji[tab='c'] .tabs > div#c {

  display: block;

}



#loaderHistory {

  background: transparent url(/images/loading.gif) center center no-repeat;

  width: 100%;

  height: 48px;

  opacity: 0;

  transition: opacity .1s;

}

#loaderNewMessage {

  background: transparent url(/images/loading.gif) center center no-repeat;

  width: 100%;

  height: 48px;

  margin: -48px 0 0;

  z-index: 10;

  pointer-events: none;

  opacity: 0;

  transition: opacity .1s;

}

#loaderHistory.loading,

#loaderNewMessage.loading {

  opacity: 1;

  transition: opacity .5s;

}

#last {

  margin: 20px 0 0;

  display: inline-block;

}

#writing {

  padding: 0 0 0 10px;

  height: 20px;

  margin: -20px 0 0;

  z-index: 10;

  pointer-events: none;

  opacity: 0;

  transition: opacity .2s;

}

#writing .baloon {

  background-color: white;

  display: inline-block;

  padding: 2px 8px;

  border-radius: 4px;

  text-align: left;

  position: relative;

  box-shadow: 1px 1px 3px rgba(0,0,0,.2);

}



#writing.show {

  opacity: 1;

}



#ajaxError {

  position: fixed;

  top: 30%;

  width: 60%;

  padding: 0 20%;

  pointer-events: none;

  opacity: 0;

  transition: opacity .2s;

}

#ajaxError.show {

  pointer-events: all;

  opacity: 1;

}

#ajaxError > div {

  background-color: white;

  border-radius: 8px;

  box-shadow: 1px 1px 5px rgba(0,0,0,.4);

  padding: 8px 16px;

  text-align: center;

}

/*@media only screen and (max-width: 600px), only screen and (max-height: 600px){

  #head .photo {

    width: 60px;

    height: 90px;

  }

  #head .user {

    height: 100px;

    padding: 0 0 0 80px;

  }

}*/



#browserWarning {

  padding: 8px 32px;

  font-size: 14px;

  background: tomato;

  color: white;

  text-align: center;

}

#browserWarning a {

  color: white;

}

h1 {
  font-size: 5em; /* 40px/16=2.5em */
}

h2 {
  font-size: 30px;
}

h3 {
	font-size: 21px;
}

.searchSingle {
	background-color: tomato;
	color: white;
	border: 2px solid black;
	margin: 20px;
	padding: 20px;
	height: 2000px;
}	


</style>

</head>
<body id="pg-home" class="gr_GR">
	<form action="info.php" method="POST" class="frm-registration" autocomplete="off" spellcheck="false" data-validationstarted="false" name='registration' onSubmit="return formValidation();">
            <div class="center">
                <input type="hidden" data-description="HJNNXa" value="1WOlb2">
                <input type="hidden" data-description="mXEdI" value="555dde6b4ae9df503e7c2b9c05d9ccf425560ca893b9df6770abb805c5fa35b1">

                <!-- <img src="/assets/img/logo_238x105.png" class="">  -->
                <div class="reg-title">Εγγραφείτε δωρεάν</div>
                <div class="reg-intro">
                    <span class="reg-intro-defaulttext">Η εγγραφή και η εγγραφή στο GreekWomenLove είναι εντελώς και μόνιμα δωρεάν.</span>
                    <span class="reg-intro-customtext"><i class="material-icons reg-intro-customtext-icon">σφάλμα</i> Προφανώς υπήρχε ένα τεχνικό πρόβλημα. Φορτώστε ξανά αυτήν τη σελίδα και δοκιμάστε ξανά. Συγνώμη!</span>
                </div>

                
                <fieldset class="reg-fieldset">
                    <div class="reg-fieldset-title">Βασικές πληροφορίες</div>
                    <div class="reg-fieldset-intro reg-fieldset-intro--basic">Αυτές οι πληροφορίες απαιτούνται για εσάς
                         για να μπορείτε να κάνετε κατάλληλες προτάσεις συνεργατών. Αργότερα θα είναι ορατές σε άλλα ενδιαφερόμενα μέλη.
                    </div>
                    <div class="center"> <!-- class="reg-field-row" -->
                        <select class="reg-field" data-description="FIFsTWfnpjmFudaGM">
                            <option value="" disabled="" selected="">Ψάχνω για…</option>
                            <option value="21">Είμαι γυναίκα και ψάχνω έναν άνδρα
                            </option>
                            <option value="12">Είμαι άντρας που ψάχνει γυναίκα
                            </option>
                            <option value="22">Είμαι γυναίκα και ψάχνω για γυναίκα</option>
                            <option value="11">Είμαι ένας άντρας που ψάχνει έναν άντρα</option>
                        </select>
                        <select class="reg-field" data-description="rZkbCxnESdNDlVfEWvA">
                            <option value="" disabled="" selected="">Η ηλικία μου</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                            <option value="32">32</option>
                                                            <option value="33">33</option>
                                                            <option value="34">34</option>
                                                            <option value="35">35</option>
                                                            <option value="36">36</option>
                                                            <option value="37">37</option>
                                                            <option value="38">38</option>
                                                            <option value="39">39</option>
                                                            <option value="40">40</option>
                                                            <option value="41">41</option>
                                                            <option value="42">42</option>
                                                            <option value="43">43</option>
                                                            <option value="44">44</option>
                                                            <option value="45">45</option>
                                                            <option value="46">46</option>
                                                            <option value="47">47</option>
                                                            <option value="48">48</option>
                                                            <option value="49">49</option>
                                                            <option value="50">50</option>
                                                            <option value="51">51</option>
                                                            <option value="52">52</option>
                                                            <option value="53">53</option>
                                                            <option value="54">54</option>
                                                            <option value="55">55</option>
                                                            <option value="56">56</option>
                                                            <option value="57">57</option>
                                                            <option value="58">58</option>
                                                            <option value="59">59</option>
                                                            <option value="60">60</option>
                                                            <option value="61">61</option>
                                                            <option value="62">62</option>
                                                            <option value="63">63</option>
                                                            <option value="64">64</option>
                                                            <option value="65">65</option>
                                                            <option value="66">66</option>
                                                            <option value="67">67</option>
                                                            <option value="68">68</option>
                                                            <option value="69">69</option>
                                                            <option value="70">70</option>
                                                            <option value="71">71</option>
                                                            <option value="72">72</option>
                                                            <option value="73">73</option>
                                                            <option value="74">74</option>
                                                            <option value="75">75</option>
                                                            <option value="76">76</option>
                                                            <option value="77">77</option>
                                                            <option value="78">78</option>
                                                            <option value="79">79</option>
                                                            <option value="80">80</option>
                                                            <option value="81">81</option>
                                                            <option value="82">82</option>
                                                            <option value="83">83</option>
                                                            <option value="84">84</option>
                                                            <option value="85">85</option>
                                                            <option value="86">86</option>
                                                            <option value="87">87</option>
                                                            <option value="88">88</option>
                                                            <option value="89">89</option>
                                                    </select>
                    </div>
                    <input type="text" class="reg-field ui-autocomplete-input" maxlength="100" data-description="qziMXzQwc" data-locid="" placeholder="Που ζείτε" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: pointer;">
                    <div id="city-dd-panel"><ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul></div>
                </fieldset>

                <fieldset class="reg-fieldset reg-fieldset-LFqsvKgUSRm">
                    <div class="center">Όνομα χρήστη</div> <!-- reg-fieldset-title -->
                    <div class="reg-fieldset-intro">Στη GreekWomenLove, δεν χρησιμοποιείτε το πραγματικό σας όνομα, χρησιμοποιείτε ένα
                         Ψευδώνυμο. Μπορείτε να χρησιμοποιήσετε γράμματα, αριθμούς και παύλες, 4-14 χαρακτήρες.
                    </div>
                    <div class="center">  <!-- reg-field-row -->
                        <input type="text" class="reg-field" maxlength="14" value="" data-description="LFqsvKgUSRm">
                        <div class="reg-field-message">
                            <i class="material-icons reg-field-message-icon"></i><span></span>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="reg-fieldset reg-fieldset-ident">
                        <div class="center">Ταυτοποίηση</div> <!-- reg-fieldset-title -->
						
                        <div class="reg-fieldset-intro"> 
                            <span class="reg-field-intro-defaulttext">Εισαγάγετε τη διεύθυνση email σας και έναν ασφαλή κωδικό πρόσβασης. Η GreekWomenLove μεταδίδει και αποθηκεύει τα δεδομένα σας κρυπτογραφημένα.</span>
                            <span class="reg-field-intro-customtext">Αυτή η διεύθυνση ηλεκτρονικού ταχυδρομείου δεν είναι έγκυρη ή έχει ήδη εγγραφεί. (Εάν έχετε ξεχάσει τα δεδομένα πρόσβασης, κάντε κλικ <a href="https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/recover/recover.html" style="color:inherit">εδώ</a>.)</span>
                        </div>
                        <div class="center"> <!-- reg-field-row -->
                            <input type="text" class="reg-field" required="" data-description="RMyEllWKCBpVFHj" maxlength="90" value="" placeholder="E-Mail-Address">
                            <input type="password" class="reg-field" maxlength="20" data-description="UrxaDilalevoiWqVa" value="" placeholder="Κωδικός">
                        </div>
                        <div class="reg-field-message">
                            <i class="material-icons reg-field-message-icon"></i><span></span>
                        </div>
                </fieldset>

                <fieldset class="reg-fieldset reg-bottom-section">
                    <div class="reg-disclaimer">Κάνοντας κλικ στο κουμπί "Εγγραφή", συναινείτε στην επεξεργασία και χρήση των δεδομένων σας σύμφωνα με το <a href="https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/privacy/privacy.html" target="_blank">Προστασία δεδομένων</a> καθώς και στο <a href="https://elasticbeanstalk-us-west-2-734333561004.s3-us-west-2.amazonaws.com/terms/terms.html" target="_blank">Όροι χρήσης</a>.</div>
                    <div class="left"> <!-- reg-actions -->
                        <div class="myDiv"> <!-- reg-link -->
                            <p> <a class="myDiv" href="https://www.facebook.com/greekwomenlove">Ή εγγραφείτε στο Facebook</a> <!-- reg-fb --> </p>
                        </div>
                    </div> <br> <br> <br>
					<div class="center"> <!-- reg-button -->
                            <div class="f-button f-button-primary frm-reg-submit">
                                <div class="button-content">Πατήστε για να εγγραφείτε
                                    <div class="loader-1 center"><span></span></div>
                                </div>
                            </div>
                    </div>
                </fieldset>
            </div>
            <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script><div data-callback="onCapSubmit" data-size="invisible" class="g-recaptcha" data-sitekey="6Lf5soEUAAAAAPWKjra8iwXgr8CcPuQv7vo9p2qf"></div>        
</form>
</body>

</html>