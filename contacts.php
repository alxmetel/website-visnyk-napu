<?php $page_title = "Контакти"; ?>
<?php include("includes/header.php");?>
<?php include("includes/navigation.html");?>

<section class="content">
  <div id="contacts">
    <div class="row">
      <div class="col-sm-6">
        <div id="contact-info">
          <h3>Контакти</h3>
          <ul class="contact-list">
            <li class="phones"><i class="fa fa-phone"></i><a href="tel:0442061561">(044) 206-15-61</a><span> (044) 206-15-61</span></li>
            <li class="phones"><i class="fa fa-phone"></i><a href="tel:0505041074">(050) 504-10-74</a><span> (050) 504-10-74</span></li>
            <li class="phones"><i class="fa fa-phone"></i><a href="tel:0683557611">(068) 355-76-11</a><span> (068) 355-76-11</span></li>
            <br>
            <li><i class="fa fa-envelope"></i><a href="mailto:visnyk.napu@ukr.net"> visnyk.napu@ukr.net</a></li>
            <br>
            <li><i class="fa fa-map-marker"></i> вул. Мельникова, 81-б, м. Київ, 04050</li>
            <br>
            <div id="social-contacts">
              <a href="https://www.facebook.com/spj.napu" target="_blank"><img class="social-icons" src="images/social/facebook.png" alt="Facebook"></a>
              <a href="https://twitter.com/SPJ_NAPU" target="_blank"><img class="social-icons" src="images/social/twitter.png" alt="Twitter"></a>
              <a href="https://ua.linkedin.com/in/spjnapu" target="_blank"><img class="social-icons" src="images/social/linkedin.png" alt="LinkedIn"></a>
            </div>
          </ul>
        </div>
      </div>
      <div class="col-sm-6">
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>

<?php include("includes/footer.html");?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFNGVA0-bq9EFcNc8ANMkxwwDHvlXWXQA&callback=initMap"></script>