<div class="social">
    <div class="container-fluid px-md-5">
      <div class="row justify-content-between">
        <div class="col-md-8 order-md-last">
          <div class="row">
            <div class="col-md-6 text-center">
              <a class="navbar-brand" href="index.html">Logistica <span>Architecture Agency</span></a>
            </div>
            <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
              <form action="{{Route('user.search')}}" method="get" class="searchform order-lg-last">
                @csrf
              <div class="form-group d-flex">
                  <input type="text" class="form-control pl-3" placeholder="Search" name="search"/>
                  <button type="submit" placeholder="" class="form-control search">
                    <span class="fa fa-search"></span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
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