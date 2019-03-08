<html lang="fr">
    <head>
		<title>PB7ACEESIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    
    </head>

    <body>
    <?php include('nav.php'); ?>
    <div id="refresh">
	<h1>Statuts système et données utile</h1>
			<div>
				<p id="abreuvoir"></p>
				<p id="pondoir"></p>
				<p id="nourriture"></p>
				<p id="ventilo"></p>
				<p id="radiateur"></p>
				<p id="Cniveau"></p>
				<p id="Chumidite"></p>
				<p id="Ccamera"></p>
				<p id="Ctemp"></p>
			</div>

	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="bootstrap-notify.js"></script>
    <script>
    $(document).ready(function(){
        setInterval(function() {
            $("#abreuvoir").load("abreuvoir.php");
			$("#pondoir").load("pondoir.php");
			$("#nourriture").load("nourriture.php");
			$("#ventilo").load("ventilo.php");
			$("#radiateur").load("radiateur.php");
			$("#Cniveau").load("Cniveau.php");
			$("#Ccamera").load("Ccamera.php");
			$("#Chumidite").load("Chumidite.php");
            $("#Ctemp").load("Ctemp.php");
        }, 1000);
    });
    </script>
    
  </body>

</html>
