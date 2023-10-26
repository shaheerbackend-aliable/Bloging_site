<footer class="footer-09 ">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
        <h2 class="footer-heading d-flex">
          <span class="icon d-flex align-items-center justify-content-center"><i class="fa fa-user"></i></span>
          About
        </h2>
        <div class="block-23 mb-3">
          <ul>
            <li><span class="icon fa fa-map"></span><span class="text">203 Fake St. Mountain View, San Francisco,
                California, USA</span></li>
            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
            <li><a href="#"><span class="icon fa fa-send"></span><span class="text">info@yourdomain.com</span></a>
            </li>
          </ul>
        </div>
        <form action="{{Route('user.subscriber')}}" method="post" class="subscribe-form">
          @csrf
          <div class="form-group d-flex">
            <input type="text" name="email" class="form-control rounded-left" placeholder="Enter email address">
            @if(auth()->user())
            <input type="text" name="user" style="display: none;" value="{{auth()->user()->name}}">
            @endif
            <button type="submit" class="form-control submit rounded-right"><span class="sr-only">Submit</span><i
                class="ion-ios-send"></i></button>
          </div>
        </form>
      </div>
      <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
        <h2 class="footer-heading d-flex align-items-center"><span
            class="icon d-flex align-items-center justify-content-center"><i class="fa fa-sticky-note-o"></i></span>Latest
          News</h2>
          @foreach($desc_data as $data)
        <div class="block-21 mb-4 d-flex">
          <a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
          <div class="text">
            <h3 class="heading">{{$data->heading}}</h3>
            <div class="meta">
              <div><span class="icon-calendar"></span>{{$data->created_at}}</div>
              <div><span class="icon-person"></span>{{$user->name}}</div>
            </div>
          </div>
        </div>
        <div class="block-21 mb-4 d-flex">
          <a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
          <div class="text">
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
            <div class="meta">
              <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
              <div><a href="#"><span class="icon-chat"></span> 19</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
        <h2 class="footer-heading d-flex align-items-center"><span
            class="icon d-flex align-items-center justify-content-center"><i
              class="fa fa-info-circle"></i></span>Information</h2>
        <ul class="list-unstyled text-center">
          <li><a href="#" class="py-1 d-block">About</a></li>
          <li><a href="#" class="py-1 d-block">Products</a></li>
          <li><a href="#" class="py-1 d-block">Blog</a></li>
          <li><a href="#" class="py-1 d-block">Contact</a></li>
          <li><a href="#" class="py-1 d-block">Help &amp; Support</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
        <h2 class="footer-heading d-flex align-items-center"><span
            class="icon d-flex align-items-center justify-content-center"><i
              class="fa fa-user"></i></span>Follow Us</h2>
        <div class="block-24">
          <div class="row no-gutters  ">
            <div class="col-4 col-md-4  p-1 ">
            <div class="col-md-4 d-flex">
          <div class="social-media">
            <p class="mb-0 d-flex">
              <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
            </p>
          </div>
        </div>

          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5 pt-4 border-top ">
      <div class="col-md-6 col-lg-8">
        <p class="copyright text-light">
          Copyright &copy;
          <script>document.write(new Date().getFullYear());</script> All rights reserved.
        </p>
      </div>
      <div class="col-md-6 col-lg-4 text-md-right text-light">
        <p class="copyright text-light">This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#"
          class="hover-text-light"  target="_blank">Acute Dev</a>
        </p>
      </div>
    </div>
  </div>
</footer>