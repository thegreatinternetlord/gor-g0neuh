<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gorgone</title>


    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

	<script type="text/javascript">
	  var pays = []; //nouveau tableau
	  pays[0] = ["p0", "Bouygues Telécom"]; //nouveau tableau, on va donc avoir pays[0][0]="p0"
	  pays[1] = ["p1", "Orange"];
	  pays[2] = ["p2", "SFR"];
	   
	  var ville=[];
	  // pays0
	  ville["p0"] = [];
	  ville["p0"][0] = ["p0v0", "74"];

	   
	  //pays1
	  ville["p1"]=[];
	  ville["p1"][0] = ["p1v0", "80"];

	   
	  //pays2
	  ville["p2"] = [];
	  ville["p2"][0] = ["p2v0", "04"];

	   
	   
	  
	  function filltheselect(liste, choix)
	  {switch (liste)
	     {
	     case "listepays":
	        raz("listeville");
	        
	        for (i=0; i<ville[choix].length; i++)
	           {
	           new_option = new Option(ville[choix][i][1],ville[choix][i][0]);
	           document.formu.elements["listeville"].
	   options[document.formu.elements["listeville"].length]=new_option;
	           }
	        for (i=0; i<rue[choix+"v0"].length; i++)
	           {
	           new_option = new Option(rue[choix+"v0"][i][1],rue[choix+"v0"][i][0]);
	           document.formu.elements["listerue"].options[document.formu.
	   elements["listerue"].length]=new_option;
	           }
	        break;
	     case "listeville":
	        raz("listerue");
	        for (i=0; i<rue[choix].length; i++)
	           {
	           new_option = new Option(rue[choix][i][1],rue[choix][i][0]);
	           document.formu.elements["listerue"].options[document.formu.
	   elements["listerue"].length]=new_option;
	           }
	        break;
	     }
	  }
	   
	  function raz(liste)
	  {l=document.formu.elements[liste].length;
	  for (i=l; i>=0; i--)
	     document.formu.elements[liste].options[i]=null;
	  }
  	</script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>GORGONE</h1>
                </a>
            </div>

        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h2>PRESS POWER <span class="text_color">BUTTON</span> </h2>
			<h4></h4>
		</div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /End Section: intro -->


	<!-- platform -->
    <section id="service" class="home-section text-center bg-gray">
		<div id="platform1">
			<p id="logo"><a href=""><img src="img/logo.png"></a></p>
			<p id="setting"><a href="">CMD<img src="img/setting.png"></a></p>

			<form id="operateur" name="formu">
				<h4>1. Choose the operator to fake</h4> 
			  	Ton opérateur 
			  	<select name="listepays" onChange='filltheselect(this.name, this.value)'>
		     		<script language="javascript">
			     		for (i=0; i<pays.length; i++)
			        	document.write("<option value=\"" +pays[i][0]+ "\">" +pays[i][1]);
			    	</script>
		  		</select>

			   	MNC
			  	<select name="listeville" onChange='filltheselect(this.name, this.value)'>
			     	<script language="javascript">
			     		for (i=0; i<ville["p0"].length; i++)
			        	document.write("<option value=\"" +ville["p0"][i][0]+ "\">" +ville["p0"][i][1]);
			     	</script>
			  	</select>
				<br/><br/>
			  	Choose your MNC<input type="text" placeholder="Saisie libre" />
		   	</form>

			<div id="configure">
				<h4>2. Configure the BTS</h4>
				<form action="/ma-page-de-traitement" method="post">
				<p>Name of the BTS (default MNC operator)</p>
				    <div>
				        Curent ARFCN
				        <input type="text" id="arfcn" placeholder="780(DCS)" />
				    </div>
				    <div>
				        Choose your own ARFCN
				        <input type="number" id="own_arfcn" placeholder="560" />
				    </div>
				    
				    <div class="button">
				        <input type="image" src="img/boutton.png">
				    </div>
				</form>
			</div>	

			<div id="action">
				<ul>
					<li><a href=""><img src="img/mail.png"></a></li>
					<li><a href=""><img src="img/help.png"></a></li>
					<li><a href=""><img src="img/delete.png"></a></li>
				</ul>
			</div>

			<div id="">
				<textarea name="textarea" placeholder="contenu"></textarea>
			</div>

		</div>
	</section>
	<!-- End platform -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright 2015 - Gorgone.</p>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>
