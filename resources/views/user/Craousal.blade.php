<div id="slider">
    <div class="slide" style="background:dodgerBlue;">
      <img src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg" >
    </div>

    <div class="slide" style="background:coral;">
       <img src="https://wallpapercave.com/wp/wp2634222.jpg" >
    </div>

    <div class="slide" style="background:crimson;">
      <img src="https://wallpaperaccess.com/full/1154341.jpg" >
    </div>

    <div class="slide" style="background: #6edf10;">
      <img src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg" >
    </div>

    <!--Controlling arrows-->
    <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i>
  </span>
    <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i>
  </span>
  </div>
    <div id="dots-con">
   <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
   </div>



   <script type="text/javascript">
var slides = document.querySelectorAll(".slide");
var dots = document.querySelectorAll(".dot");
var index = 0;


function prevSlide(n){
  index+=n;
  console.log("prevSlide is called");
  changeSlide();
}

function nextSlide(n){
  index+=n;
  changeSlide();
}

changeSlide();

function changeSlide(){

  if(index>slides.length-1)
    index=0;

  if(index<0)
    index=slides.length-1;



    for(let i=0;i<slides.length;i++){
      slides[i].style.display = "none";

      dots[i].classList.remove("active");


    }

    slides[index].style.display = "block";
    dots[index].classList.add("active");



}
</script>