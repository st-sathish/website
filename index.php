<?php 
  $page = "home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script>
      $(document).ready(function() {
        $('.carousel').carousel({
            fullWidth: true,
            indicators: true
        });
        setTimeout(autoplay, 4500);
        function autoplay() {
            $('.carousel').carousel('next');
            setTimeout(autoplay, 4500);
        }
        // initialize all drop downs
        $('.dropdown-products').dropdown();
        $('.dropdown-services').dropdown();
      })
  </script>
</head>
<body>
  <?php include('nav_bar.php') ?>
  <div class="carousel carousel-slider center" style="height:550px">
    <div class="carousel-item white-text carousel-item-screen-one" href="#one!">
      <div class="row">
        <div class="col m4">
            <h3>Mobile Application Development</h3>
            <div class="row">
              <h6>IoT</h3>
              <h6>Virtual Reality</h3>
            </div>
        </div>
        <div class="col m8">

        </div>
      </div>
    </div>
    <div class="carousel-item amber white-text carousel-item-screen-two" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text carousel-item-screen-three" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text carousel-item-screen-four" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>


  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12">
            <h4 class="center">DevOps Configuration, Web and Mobile App Development Company in Nagercoil</h4>
            <p class="left-align light">We know software development process keep on changing day by day for the business needs. Business people's always need software instantly to grow their eixsting business or new idea. We have team to research and analyse technology to fit for your business and strong development team to bring your application usable instantly. Just tell us "What is your Idea"</p>
        </div>
      </div>
    </div>
  </div>


  <div class="row teal white-text">
    <div class="row">
      <div class="col s12 m12">
          <h3 class="center">How we develop</h3>
      </div>
    </div>
    <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Idea</h5>
            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Paper work</h5>
            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Design & Development</h5>
            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Deployment</h5>
            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Test and Deliver</h5>
            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Maintenance</h5>
            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
    </div>
  </div>

  <div class="row">
      <div class="container">
        <div class="section">
          <div class="row center">
              <h5>Hand's on <b>Experience</b> in Technology, Design Pattern implementation and Frameworks</h5>
          </div>
          <div class="row">
            <img src="assets/images/tech/tech_docker.png" width="100px" height="100px">
            <img src="assets/images/tech/ios.png" width="150px" height="150px">
            <img src="assets/images/tech/java.png" width="100px" height="100px">
            <img src="assets/images/tech/php.png" width="100px" height="100px">
            <img src="assets/images/tech/nodejs.png" width="100px" height="100px">
            <img src="assets/images/tech/tech_jenkins.png" width="100px" height="100px">
            <img src="assets/images/tech/maven.png" width="100px" height="100px">
            <img src="assets/images/tech/gradle.jpeg" width="100px" height="100px">
            <img src="assets/images/tech/meteor.png" width="100px" height="100px">
            <img src="assets/images/tech/android.png" width="100px" height="100px">
            <img src="assets/images/tech/angularjs.png" width="100px" height="100px">
            <img src="assets/images/tech/ansible.png" width="100px" height="100px">
            <img src="assets/images/tech/karaf.png" width="100px" height="100px">
            <img src="assets/images/servers/tomcat.png" width="100px" height="100px">
            <img src="assets/images/containers/felix.png" width="100px" height="100px">
            <img src="assets/images/frameworks/spring-logo.png" width="100px" height="100px">
            <img src="assets/images/frameworks/rx2.png" width="150px" height="150px">
            <img src="assets/images/frameworks/OSGI-logo.png" width="100px" height="100px">
            <img src="assets/images/frameworks/spring-boot-logo.png" width="100px" height="100px">
            <img src="assets/images/frameworks/react.png" width="100px" height="100px">
            <img src="assets/images/brokers/mosquitto-200px.png" width="100px" height="100px">
          </div>
        </div>
      </div>
  </div>
  <!-- mobile app image -->
  <div class="row">
    <div class="col s12 m12">
      <div class="divider"></div>
    </div>
    <div class="section">
      <div class="row">
        <div class="col s6 m6">
            <h4 class="center">Mobile App Development</h4>
            <p class="left-align">Application development for IOS and Android platform</p>
        </div>
        <div class="col s6 m6">
            <img src="assets/images/frameworks/spring-boot-logo.png" width="100px" height="100px">
        </div>
      </div>
    </div>
  </div>
  <!-- Automation Tool to setup your application infrastructure -->
  <div class="row">
    <div class="col s12 m12">
      <div class="divider"></div>
    </div>
    <div class="section">
      <div class="row">
         <div class="col s6 m6">
            <img src="assets/images/ios_computer.png">
        </div>
        <div class="col s6 m6">
            <h4 class="center">Automation Tool</h4>
            <p class="left-align">We understand, Human take bunch of time to do a setup for both development and production infrastructue. Our team assist your business, almost everything is automation for infrastructure setup. All our script will do the automation process on behalf of human. Everything will be ready very quickly.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m12">
      <div class="divider"></div>
    </div>
    <div class="section">
      <div class="row">
        <div class="col s12 m12">
            <h3 class="center">Our time has no value without clients</h3>
            <p class="left-align light">Coming soon</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row white-text teal">
    <div class="col s12 m12">
      <div class="divider"></div>
    </div>
    <div class="section">
      <div class="row">
        <div class="col s12 m12">
            <h3 class="center">Reach Us</h3>
            <p class="left-align light">Coming soon</p>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <?php include('footer.php') ?>
  </body>
</html>
