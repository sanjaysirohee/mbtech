<?php
include ('head.php');
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Contact Us | MBtech</title>
<meta name="description" content="Visit our website to contact Us. You can contact us by Phone, Email or filling the Contact Us form."/>
<meta name="keywords" content="Contact Us, MBtech"/>
<link rel="canonical" href="http://www.mbtech.in/contact-us.php" />







<style>

.no-image {
    padding-top: 0px;
    
}
.align{
    padding-top:25px;
}
.third-btn{
    margin-top:25px;
    }
.dark-text{
    color:#000;
    }
.modal {
    position: fixed;
    top: 25px !important;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    -webkit-overflow-scrolling: touch;
    outline: 0;
    padding: 60px 350px !important;
}

@media screen and (max-width: 640px)
{


.modal {
   
    padding: 0px 0px !important;
}

}

</style>










</head>




  <?php
  include ('header.php');
  ?>

<div class="content-wrapper">

<!-- Stunning header -->

<div class="stunning-header stunning-header-bg-blue">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Contact Information</h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="index.php">Home</a>
                <i class="seoicon-right-arrow"></i>
            </li>
            <li class="breadcrumbs-item active">
                <span href="#">Contact Information</span>
                <i class="seoicon-right-arrow"></i>
            </li>
        </ul>
    </div>
</div>

<!-- End Stunning header -->

<!-- Overlay Search -->


<div class="overlay_search">
    <div class="container">
        <div class="row">
            <div class="form_search-wrap">
                <form>
                    <input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
                    <a href="#" class="overlay_search-close">
                        <span></span>
                        <span></span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- End Overlay Search -->




<!-- Contacts -->


<div class="container-fluid">
    <div class="row medium-padding80 bg-border-color contacts-shadow">
        <div class="container">
            <div class="row">
                <div class="contacts">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="magic"><a href="https://api.whatsapp.com/send?phone=919873234488&amp;text=Hi , I am interested in website designing for my company , please quote your best." target="_blank"><img src="img/w.png"></a></div>
                        <div class="contacts-item">
                            <img src="img/contact7.png" alt="phone">
                            <div class="content">
                                <a href="#" class="title">Noida(UP), India</a>
                                <p class="sub-title">C-121, Ithum, Sector 62,<br>
Noida - 201301 U.P. India</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="contacts-item">
                            <img src="img/contact8.png" alt="phone">
                            <div class="content">
                                <a href="#" class="title">info@mbtech.in</a>
                                <p class="sub-title">online support</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="contacts-item">
                            <img src="img/contact9.png" alt="phone">
                            <div class="content">
                                <a href="#" class="title">+91 - 987.323.4488</a>
                                <p class="sub-title">Mon-Fri 9AM-6PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Contacts -->


<!-- Google map -->


<div class="section">
    <div id="map"></div>
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 28.589587, lng: 77.314451},
                zoom: 19,
                scrollwheel: false//set to true to enable mouse scrolling while inside the map area
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBESxStZOWN9aMvTdR3Nov66v6TXxpRZMM&callback=initMap"
            async defer></script>

</div>

<!-- End Google map -->


<?php
include ('enquiry.php');
?>





<div class="container">
    <div class="row pt120 pb80">
        <div class="col-lg-12">
            <div class="heading">
                <h4 class="h1 heading-title">Registered Office</h4>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
                <p class="heading-text">401-408 | Pooja Complex
                  22, Veer Savarkar Block | Vikas Marg
                  Delhi - 110092 (India)

                </p>
            </div>
        </div>
    </div>
</div>

</div>

<div id="id01" class="modal">
  
		   <form action="mailform-one.php" class="callus" method="post">
		       <input type="text" name="website" style="display:none">
							<div class="imgcontainer">
							  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
							  
							</div>
							
							<div class="col-md-12">

									<div class="single-query form-group">
									<h1 style="    font-size: 22px;    color: #fff;    text-align: center;    padding-bottom: 10px;    font-weight: 500;">Send Query </h1>
									<input name="username" type="text" placeholder="Your Name" class="keyword-input">

									</div>

									<div class="single-query form-group">

									<input name="mobileno" type="text" placeholder="Phone Number" class="keyword-input">

									</div>


									<div class="single-query form-group">

									<textarea name="message" placeholder="Message" class="form-control"></textarea>

									</div>

									<input name="submit" type="submit" value="submit now" class="btn-blue">

							</div>

			
			
			<div class="container" style="background-color: #000; width: 101%; border-radius: 6px;  padding-left: 140px;">
			  
			</div>
		  </form>



</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




<?php
include ('footer.php');
?>
