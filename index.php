<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8" />
 <meta name="description" content="Volume of sphere, PHP" />
 <meta name="keywords" content="math, volume, PHP, sphere" />
 <meta name="author" content="Adrina Peighambarzadeh" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="./css/style.css" />
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
 <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
 <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
 <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
 <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
 <link rel="manifest" href="site.webmanifest" />
 <title>Volume of sphere, PHP</title>
</head>

<body>
 <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
 <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
   <header class="mdl-layout__header">
     <div class="mdl-layout__header-row">
       <span class="mdl-layout-title">Volume of sphere, PHP</span>
     </div>
   </header>
   <main class="mdl-layout__content">
     <div class="right-image">
       <img src="./images/image.png" alt="sphere" width="95%" />
     </div>
     <br />
     <div class="page-content">
       <p>Formula</p>
       <h3>V = (4 / 3) × ℼ × r³</h3>
     </div>
     <form action="answer.php" method="GET">
       The dimensions are:
       <div id="dimensions"></div>
       <div id="volume"></div>
     </form>
     <br />
   </main>
 </div>
</body>

</html>
