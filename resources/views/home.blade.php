<html>
<header>
<title>Ola Mundo</title>
</header>
<body>

<h1>Categories</h1><br/>

<ul>
   @foreach($categories as $category)
    <li>{{ $category->name }}</li>
   @endforeach
</ul>
</body>
</html>