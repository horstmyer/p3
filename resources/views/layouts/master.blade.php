<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developer's Best Friend' --}}
        @yield('title','Developers Best Friend')
    </title>

    <meta charset='utf-8'>
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body style="background-color:#650f3c">

    <header style="margin:auto; width:1200px">
      <img
      src='/images/DevFriendLogo.jpg'
      alt='Developers Best Friend Logo' width="322"
      style='width:500px'
      align='left'>

      <h2 style="color:#FFFFFF">Here you will find useful Tools to use in your development efforts.</h2>
      <hr/>
      <p style="color:#FFFFFF">Lorem Ipsum is dummy text that you can use whilst you are waiting to get the real copy.  This allows you to get a better understanding of how your pages might look with real words.W  With this tool you can choose from 1 to 9 paragraphs of dummy words. </p>
      <hr/>
      <p style="color:#FFFFFF">With this tool you can generate dummy data that may be useful in your development efforts to create users.  Choose the number of users and what additional data you would like to include.</p>
      <p><a href="*.*">Lorem Ipsum Generator</a>
      ||
      <a href="*.*">Dummy Data Generator</a></p>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
