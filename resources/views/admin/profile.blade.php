<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpaceX</title>
    <style>

    
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white ;
  
}

.header {
  overflow: hidden;
  background-color: black;
  padding: 10px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}




.header-right a{
    color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
  * {
  box-sizing: border-box;
}
body {
  line-height: 1.618em;
  background: #ecf0f1;
  color: #444;
}
img {
  max-width: 100%;
  height: auto;
}
.wrapper {
  max-width: 50rem;
  width: 100%;
  margin: 0 auto;
}
.slider {
  background: #fff;
  position: relative;
  margin: 2rem 0;
  overflow: hidden;
  padding-bottom: 2.5rem;
  border: 0.25rem solid #95a5a6;
}
.slider::after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
  content: '';
  display: block;
  background: #34495e;
  height: 3rem;
}
.slide-switch {
  display: none;
}
.slide-label {
  position: absolute;
  bottom: 1rem;
  display: block;
  z-index: 5;
  height: 1rem;
  width: 1rem;
  text-indent: 1rem;
  overflow: hidden;
  background: #2980b9;
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.25s;
}
.slide-label:nth-of-type(1) {
  left: 1rem;
}
.slide-label:nth-of-type(2) {
  left: 2.5rem;
}
.slide-label:nth-of-type(3) {
  left: 4rem;
}
.slide-label:nth-of-type(4) {
  left: 5.5rem;
}
.slide-label:nth-of-type(5) {
  left: 7rem;
}
.padded {
  padding: 1rem 2rem;
}
.slide-content {
  width: 100%;
  background: #fff;
  float: left;
  margin-right: -100%;
}
.slide-switch:checked + .slide-label {
  background: #3498db;
}
.slide-switch:not(:checked) + .slide-label + .slide-content {
  opacity: 0;
  transition: opacity 0.35s;
  pointer-events: none;
}
.slide-switch:checked + .slide-label + .slide-content {
  animation: slide 1s;
}
@keyframes slide {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(0);
  }
}





    </style>
</head>
<body>

<div class="header">
        <img src="logo.png" alt="logo" width="200px">
        <div class="header-right">
          <a class="active" href="profile">Profile</a>
          <a class="active" href="register">Add Account</a>
          <a href="logout">Logout</a>
         
        </div>
      </div>

<div class="wrapper">

  <div class="slider">

    <!-- Works with as many slides as are added in-->

    <input type="radio" name="slide-switches" id="slide_text" checked class="slide-switch">
    <label for="slide_text" class="slide-label">Slide Text</label>
    <div class="slide-content padded">
      <h1>The author Of Travels</h1>
      <p>The author of these Travels, Mr. Lemuel Gulliver, is my ancient and intimate friend; there is likewise some relation between us on the mother’s side.  About three years ago, Mr. Gulliver growing weary of the concourse of curious people coming to him at his house in Redriff, made a small purchase of land, with a convenient house, near Newark, in Nottinghamshire, his native country; where he now lives retired, yet in good esteem among his neighbours.</p>
      <p>	Although Mr. Gulliver was born in Nottinghamshire, where his father dwelt, yet I have heard him say his family came from Oxfordshire; to confirm which, I have observed in the churchyard at Banbury in that county, several tombs and monuments of the Gullivers.</p>
      <p>	Before he quitted Redriff, he left the custody of the following papers in my hands, with the liberty to dispose of them as I should think fit.  I have carefully perused them three times.</p>
    </div>

    <input type="radio" name="slide-switches" id="slide_image" class="slide-switch">
    <label for="slide_image" class="slide-label">Slide Image</label>
    <div class="slide-content">
      <img src="resources/logo.png">
    </div>

    <input type="radio" name="slide-switches" id="slide_video" class="slide-switch">
    <label for="slide_video" class="slide-label">Slide Video</label>
    <div class="slide-content">
      <iframe width="100%" height="420" src="https://www.youtube.com/watch?v=0zyKuv2GaQM" frameborder="0" allowfullscreen></iframe>
    </div>

  </div>

 //

 <div class="wrapper">
  <div class="row row-features">
    <div class="block-wrap h50 mob-auto">
      <div class="block">
        <div class="new-feature-slider">
          <div id="slider-1" class="feature-slide active">
            <div class="block-wrap w50 new-feature-image-wrap mob-auto">
              <div class="block">
                <div class="feature-slide-image">
                  <div class="" style="background-image:url('http://www.williamsjettenders.com/wp-content/uploads/2015/10/features41.jpg');">
                    <img src="http://www.williamsjettenders.com/wp-content/uploads/2015/10/features41.jpg">
                  </div>
                </div>
              </div>
            </div>
            <div class="block-wrap w50 center-content mob-auto">
              <div class="block">
                <div class="content-centered overview-text">
                  <h2 class="fakeh1">Cleaner, more powerful engine</h2>
                  <span class="divider-wave blue-wave"></span>
                  <p></p>
                  <p>Get improved power, torque and fuel efficiency with the next-generation Textron 850MPE engine. It performs better and is also cleaner, thanks to a catalytic converter, making it one of the cleanest marine engines in the world. Available
                    in a choice of power outputs, there’s also a power reduction switch for jet tender newcomers who want to take it easy at first.</p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div id="slider-2" class="feature-slide">
            <div class="block-wrap w50 new-feature-image-wrap mob-auto">
              <div class="block">
                <div class="feature-slide-image">
                  <div class="" style="background-image:url('http://www.williamsjettenders.com/wp-content/uploads/2015/08/325-image3.jpg');">
                    <img src="http://www.williamsjettenders.com/wp-content/uploads/2015/08/325-image3.jpg">
                  </div>
                </div>
              </div>
            </div>
            <div class="block-wrap w50 center-content mob-auto">
              <div class="block">
                <div class="content-centered overview-text">
                  <h2 class="fakeh1">High Performance</h2>
                  <span class="divider-wave blue-wave"></span>
                  <p></p>
                  <p>Turbojets are known for outperforming almost all comparable craft on the water, whether it is pulling a waterskier, cruising along the coast or whipping in and out of tight corners. With top speeds of up to 53 mph/85 kph, jumping aboard
                    a Turbojet and firing up the engine is a thrill you will never tire of.</p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div id="slider-3" class="feature-slide">
            <div class="block-wrap w50 new-feature-image-wrap mob-auto">
              <div class="block">
                <div class="feature-slide-image">
                  <div class="" style="background-image:url('http://www.williamsjettenders.com/wp-content/uploads/2015/08/445-image2.jpg');">
                    <img src="http://www.williamsjettenders.com/wp-content/uploads/2015/08/445-image2.jpg">
                  </div>
                </div>
              </div>
            </div>
            <div class="block-wrap w50 center-content mob-auto">
              <div class="block">
                <div class="content-centered overview-text">
                  <h2 class="fakeh1">Supreme Stability &amp; Buoyancy</h2>
                  <span class="divider-wave blue-wave"></span>
                  <p></p>
                  <p>The Turbojet design places the helmsman at the stern of the craft in the most secure position for maximum control. By utilising a centrally mounted engine and an inflatable tube, which is positioned close to the water, the Turbojet is
                    supremely stable whether static or running at speed. This makes for easy and comfortable passenger boarding and a safe, enjoyable ride at high speed. What’s more, due to the inherent hull buoyancy, the tender will float even without
                    the inflatable tube.
                  </p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div id="slider-4" class="feature-slide">
            <div class="block-wrap w50 new-feature-image-wrap mob-auto">
              <div class="block">
                <div class="feature-slide-image">
                  <div class="" style="background-image:url('http://www.williamsjettenders.com/wp-content/uploads/2015/10/features32.jpg');">
                    <img src="http://www.williamsjettenders.com/wp-content/uploads/2015/10/features32.jpg">
                  </div>
                </div>
              </div>
            </div>
            <div class="block-wrap w50 center-content mob-auto">
              <div class="block">
                <div class="content-centered overview-text">
                  <h2 class="fakeh1">More torque, less maintenance jet pumps</h2>
                  <span class="divider-wave blue-wave"></span>
                  <p></p>
                  <p>Our purpose-made jet pumps are not only more efficient, they are also incredibly safe, as there are no exposed moving parts. With stainless steel impeller and double-coated pumps, they provide excellent protection against corrosion,
                    giving you long life with minimal maintenance.</p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div id="slider-5" class="feature-slide">
            <div class="block-wrap w50 new-feature-image-wrap mob-auto">
              <div class="block">
                <div class="feature-slide-image">
                  <div class="" style="background-image:url('http://www.williamsjettenders.com/wp-content/uploads/2015/10/features51.jpg');">
                    <img src="http://www.williamsjettenders.com/wp-content/uploads/2015/10/features51.jpg">
                  </div>
                </div>
              </div>
            </div>
            <div class="block-wrap w50 center-content mob-auto">
              <div class="block">
                <div class="content-centered overview-text">
                  <h2 class="fakeh1">Manoeuvrability in all conditions</h2>
                  <span class="divider-wave blue-wave"></span>
                  <p></p>
                  <p>Get pinpoint accuracy at both high and low speeds. The unique Turbojet hull, control system and jet pump make getting in and out of tight spots an easy task. Drive up to a yacht or handle confined spaces with utmost confidence. At the
                    other end of the scale, you can open up the throttle for superior high-speed straightline tracking and precision controlled turns.</p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div id="slider-6" class="feature-slide">
            <div class="block-wrap w50 new-feature-image-wrap mob-auto">
              <div class="block">
                <div class="feature-slide-image">
                  <div class="" style="background-image:url('http://www.williamsjettenders.com/wp-content/uploads/2015/08/325-image2.jpg');">
                    <img src="http://www.williamsjettenders.com/wp-content/uploads/2015/08/325-image2.jpg">
                  </div>
                </div>
              </div>
            </div>
            <div class="block-wrap w50 center-content mob-auto">
              <div class="block">
                <div class="content-centered overview-text">
                  <h2 class="fakeh1">Clear Instrumentation</h2>
                  <span class="divider-wave blue-wave"></span>
                  <p></p>
                  <p>Have peace of mind with instrumentation to keep you informed of what’s going on above and below the water. As well as standard instruments, you can specify optional extras such as depth sounder, vhf radio and chartplotter. You can even
                    opt to have a removable steering wheel to make storage easier and as an effective anti-theft device.</p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div id="slider-7" class="feature-slide">
            <div class="block-wrap w50 new-feature-image-wrap mob-auto">
              <div class="block">
                <div class="feature-slide-image">
                  <div class="" style="background-image:url('http://www.williamsjettenders.com/wp-content/uploads/2015/10/features61.jpg');">
                    <img src="http://www.williamsjettenders.com/wp-content/uploads/2015/10/features61.jpg">
                  </div>
                </div>
              </div>
            </div>
            <div class="block-wrap w50 center-content mob-auto">
              <div class="block">
                <div class="content-centered overview-text">
                  <h2 class="fakeh1">Sitting comfortably</h2>
                  <span class="divider-wave blue-wave"></span>
                  <p></p>
                  <p>The seating on a Turbojet is not only comfortable, it has been designed to keep you drier and more secure. With a commanding helm position from the stern, you can keep an eye on your passengers, and seat between three and seven adults.</p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div id="slider-8" class="feature-slide">
            <div class="block-wrap w50 new-feature-image-wrap mob-auto">
              <div class="block">
                <div class="feature-slide-image">
                  <div class="" style="background-image:url('http://www.williamsjettenders.com/wp-content/uploads/2015/07/285-image1.jpg');">
                    <img src="http://www.williamsjettenders.com/wp-content/uploads/2015/07/285-image1.jpg">
                  </div>
                </div>
              </div>
            </div>
            <div class="block-wrap w50 center-content mob-auto">
              <div class="block">
                <div class="content-centered overview-text">
                  <h2 class="fakeh1">Easily replaceable tubes</h2>
                  <span class="divider-wave blue-wave"></span>
                  <p></p>
                  <p>The inflatable tubes on all Williams tenders have been designed to be removed and replaced, quickly and easily. So you can get back on the water with minimal fuss. </p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="controls new-feature-controls">
          <span class="control button-prev"></span>
          <span class="control button-next"></span>
        </div>
      </div>
    </div>
  </div>
</div> 

</div>




</body>
</html>