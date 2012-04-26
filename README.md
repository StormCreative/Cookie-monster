#Cookie monster

A responsive module to prompt users to agree to the storing of cookies.

`code ib hger`

###Files
- Cookie.php - source file
- Cookie.min.php - minified file
- Cookie_functions.php

To use, place the files within the includes file ( Assets/Includes ) and place the Cookie.php just below the body tag like so:

`<body>     
<?php include 'Assets/Includes/Cookie.php' ?>`

Wrap anything that relies on a session to be set, for example showing an 'add' button for a shopping cart:

`if ( checkCookie ( FALSE ) === TRUE )`

 