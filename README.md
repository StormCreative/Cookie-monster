#Cookie monster

A responsive module to prompt users to agree to the storing of cookies. Use in the overall header or on every page - for sites that run on Sessions immediately use checkCookie so that it takes them immediately back to the home page to be prompted. 

###Files
- Cookie.php - source file
- Cookie.min.php - minified file
- Cookie_functions.php

###Usage
Place the files within the includes file ( Assets/Includes ) and place the Cookie.php just below the body tag like so:

`<body>     
<?php include 'Assets/Includes/Cookie.php' ?>`

Wrap anything that relies on a session to be set, for example showing an 'add' button for a shopping cart:

`if ( checkCookie ( FALSE ) === TRUE )`

And then FALSE if it is the reverse.

Use checkCookie on any page that sets cookies or sessions immediately, so they are taken to the home page to be asked.

 