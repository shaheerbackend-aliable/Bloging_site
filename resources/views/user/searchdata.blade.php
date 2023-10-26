<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.scss')
    <link rel="stylesheet" href="blog.scss" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	
  <link rel="stylesheet" href="css/ionicons.min.css">

 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>

@include('user.Navbar')
@include('user.search')
<div class="blog-single gray-bg">
       
    <div class="container">
    <div class="blog-single gray-bg">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8 m-15px-tb">
                @forelse($list as $content)
                <article class="article">
                    <div class="article-img">
                        <img src="/post/{{$content->image}}" title="" alt="">
                    </div>
                    <div class="article-title">
                        <h6><a href="#"></a></h6>
                        <h2>{{$content->heading}}</h2>
                        <div class="media">
                            <div class="avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                            </div>
                            <div class="media-body">
                                <label>{{$user->name}}</label>
                                <span>{{$content->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="nav tag-cloud">
                        <button class="btn"><a href="{{Route('user.blogdetail',$content->id)}}" style="text-decoration:none;">Read More</a></button>

                    </div>
                </article>
                @empty
                <div style="color: Red;">
                    <p>No Data Found</p>
                </div>
                @endforelse
                <!-- contact us -->
                @if(auth()->user())
                @include('user.contact')
                @else

                @endif
                <!-- End contact us -->
            </div>
            <div class="col-lg-4 m-15px-tb blog-aside py-3">
                <!-- Author -->
                <div class="card">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$user->name}}</h5>
                        <p class="card-text">Hi!! Myself {{$user->name}}.This is my personal bloging site where I post my blogs so if you like it then Please register for more updates.</p>
                    </div>
                </div>

                <!-- End Author -->
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
<!-- Footer -->
@include('user.Footer')
<!-- Footer -->
  
<!-- </div> -->
<!-- End of .container -->

<!-- ----------end footer============= -->



 
    <script>
  // Function to smoothly scroll to the target element
  function scrollToElement(targetElement) {
    window.scrollTo({
      behavior: 'smooth',
      top: targetElement.offsetTop,
    });
  }

  const contactUsLink = document.querySelector('a[href="#footer"]');
  if (contactUsLink) {
    contactUsLink.addEventListener('click', function (e) {
      e.preventDefault();
      const footerElement = document.getElementById('footer');
      if (footerElement) {
        scrollToElement(footerElement);
      }
    });
  }
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/f558cc5ba9.js" crossorigin="anonymous"></script>
    
</body>
</html>