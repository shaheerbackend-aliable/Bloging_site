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
<div class="blog-single gray-bg">
       
    <div class="container">
            <div class="row align-items-start">

                <div class=" m-15px-tb">
                    <article class="article ">
                        <div class="article-img">
                            <img src="https://www.bootdey.com/image/800x350/87CEFA/000000" title="" alt="">
                        </div>
                        <div class="article-title">
                            <h2>They Now Bade Farewell To The Kind But Unseen People</h2>
                            <div class="media">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                                </div>
                                <div class="media-body">
                                    <label>{{$user->name}}</label>
                                    <span>26 FEB 2020</span>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem. Adipiscing veni amet luctus enim sem libero tellus viverra venenatis aliquam. Commodo natoque quam pulvinar elit.</p>
                            <p>Eget aenean tellus venenatis. Donec odio tempus. Felis arcu pretium metus nullam quam aenean sociis quis sem neque vici libero. Venenatis nullam fringilla pretium magnis aliquam nunc vulputate integer augue ultricies cras. Eget viverra feugiat cras ut. Sit natoque montes tempus ligula eget vitae pede rhoncus maecenas consectetuer commodo condimentum aenean.</p>
                            <h4>What are my payment options?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="blockquote-footer">Someone famous in <cite title="Source Title">Dick Grayson</cite></p>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="nav tag-cloud">
                            <a href="#">Design</a>
                            <a href="#">Development</a>
                            <a href="#">Travel</a>
                            <a href="#">Web Design</a>
                            <a href="#">Marketing</a>
                            <a href="#">Research</a>
                            <a href="#">Managment</a>
                        </div>
                    </article>
                    <div class="contact-form article-comment">
                        <h4>Send Us mail</h4>
                        <form id="contact-form" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Name" id="name" placeholder="Name *" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Email" id="email" placeholder="Email *" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" placeholder="Your message *" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <button class="px-btn theme"><span>Submit</span> <i class="arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                  
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