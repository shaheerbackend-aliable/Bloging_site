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
           @include('user.Content')
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