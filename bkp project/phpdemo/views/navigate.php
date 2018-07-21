<!DO00CTYPE html>
<html lang="en">
<head>
<title>PHP DEMO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<style>

* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

header {
    background-color: #666;
    padding: 2px;
    text-align: center;
    font-size:15 px;
    color: white;
}

nav {
    float: left;
    width: 20%;
     height: auto; 
    background: #ccc;
    padding: 20px;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
nav a {
    color:black;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}

displaydata {
    float: left;
    padding: 8px;
    width: 80%;
    background-color: #c0c0c01a;
    height: auto; 
}

section:after {
    content: "";
    display: table;
    clear: both;
}

footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}


}
</style>

</head>
<body>
<header>
    <?PHP
    include'header.php';
    ?>
</header>

<section>
  <nav>
    <ul>
    <?php
   //echo "Menu Items";
  foreach($data as $key=>$value)

   echo  '<li><a href="#">'.  $value .'</a></li><br/>';
    ?>
    </ul>
  </nav>
  
  <displaydata>
    <h1>This will data Display section</h1>
    <h1>This will data Display section</h1>
 
  </displaydata>
</section>

<footer>
        <?PHP
        include'footer.php';
        ?>
</footer>

</body>
</htmlnclude'footer.php';



?>



