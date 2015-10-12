<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developer's Best Friend' --}}
        @yield('title','Developers Best Friend')
    </title>

    <meta charset='utf-8'>
    <link href="/css/style.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body style="background-color:#650f3c">

  <div class="header">
  <img src="/images/DevFriendLogo.jpg" alt="Developers Friend"/>
  <h2>Here you will find useful Tools to use in your development efforts.</h2>
      <hr/>
    <h3>Lorem Ipsum</h3>
    <p>Lorem Ipsum is dummy text that you can use whilst you are waiting to get the real copy.  This allows you to get a better understanding of how your pages might look with real words.W  With this tool you can choose from 1 to 9 paragraphs of dummy words. </p>
    <form method="get" action="here">
        <p>How many paragraphs?
        <input name="graphs" type="number" size="5" required id="graphs" max="9" min="1" title="graphs" value="1">
        <input type="submit"></p>
    </form>
      <hr/>
      <h3>Faker Data</h3>
    <p>With this tool you can generate dummy data that may be useful in your development efforts to create users.  Choose the number of users and what additional data you would like to include.</p>
    <form>
        <p>How many users?
        <input name="number" type="number" size="5" required id="number" max="9" min="1" title="number" value="1">
        <label><input type="checkbox" name="Extras" value="checkbox" id="Extras_0">Address</label>
        <label><input type="checkbox" name="Extras" value="checkbox" id="Extras_1">Notes</label>
        <br><p>
        </p>
    </form>
</div>
<div class="output">
     <h2>Your Result:</h2>
       <div class="result">


    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>
</div>
<div class="footer">
    <p>&copy; 2015 Linda Horstmyer</p>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
