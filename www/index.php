<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Lattice: trellis graphics for R</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link id="doc_style" rel="stylesheet" href="style.css" type="text/css" />
<script language="JavaScript" type="text/javascript" src="Nifty/niftycube.js"></script> 
<script language="JavaScript" type="text/javascript" src="setup.js"></script>
</head>
<body onload="setup();">

<?php

include('./header.php');
include('./navigation.php');

?>

<div id="bodyText">


  <!-- <h1>About</h1> -->

  <p> The lattice add-on package is an implementation of Trellis
  graphics for R. It is a powerful and elegant high-level data
  visualization system with an emphasis on multivariate data. It is
  designed to meet most typical graphics needs with minimal tuning,
  but can also be easily extended to handle most nonstandard
  requirements.  </p>

  <p> <a
  href="http://cm.bell-labs.com/cm/ms/departments/sia/project/trellis/"
  >Trellis Graphics</a>, originally developed for S and S-PLUS at the
  Bell Labs, is a framework for data visualization developed by
  R. A. Becker, W. S. Cleveland, et al, extending ideas presented in
  Cleveland’s 1993 book <a
  href="http://www.stat.purdue.edu/~wsc/visualizing.html" >Visualizing
  Data</a>. The Lattice API is based on the original design in S, but
  extends it in many ways.  </p>

  
  <h2>Installation</h2>

  <p>The lattice package is usually installed along with R. You can
  start using it after loading it by typing</p>
  <div class="code">
  <code>&gt; library(package = "lattice")</code>
  </div>
  <p>in your R session. </p>

  <p>The latest released version of lattice, which may be more recent
  than the version that came with R, is available from <a
  href="http://cran.r-project.org/web/packages/lattice/" >CRAN</a>.
  The latest development snapshot is available at <a
  href="https://github.com/deepayan/lattice"
  >GitHub</a></p>

  <h2>LatticeExtra</h2>

  <p>If you find lattice useful, you may also be interested in the <a
  href="http://latticeextra.r-forge.r-project.org/" >latticeExtra</a>
  package, which supplements and extends the capabilties of
  lattice. </p>
  
</div>

  
<?php
include('./footer.php');
?>


</body>
</html>
