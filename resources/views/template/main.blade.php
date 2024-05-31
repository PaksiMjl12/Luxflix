<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LuxFlix</title>

  <!--
    - custom css link
  -->
  @if(strpos(request()->url(), '/movie/') !== false)
      <link rel="stylesheet" href="/css/detail.css">
  @endif
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/media_query.css">

  <!--
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
</head>

<body>
  @yield('container')

  <script src="/js/main.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script>
		window.jQuery || document.write('<script src="js/lib/jquery-v3.4.1.js"><\/script>');
	</script>
</body>

</html>