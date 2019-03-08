<head> <link rel="stylesheet" href="style.css"> </head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Projet STI2D PB7ACEESIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a data-switch-contrast aria-hidden class="nav-link" href="#">Mode Sombre</a>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Raspberry
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" data-toggle="modal" data-target="#reboot" href="#">Redemarrer</a>
            <a class="dropdown-item" data-toggle="modal" data-target="#update" href="#">Mettre à jour</a>
          </div>
        </li>
    </ul>
  </div>
</nav>

<!-- Reboot Modal -->
<div class="modal fade" id="reboot" tabindex="-1" role="dialog" aria-labelledby="rebootLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 color="red" class="modal-title" id="rebootLabel">ATTENTION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body alwaysblack">
        Etes-vous sur de vouloir redemarrer le raspberry pi ?
      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary reboot" href="#" data-dismiss="modal" role="button">OUI</a>
        <button type="button" class="btn btn-primary" data-dismiss="modal">NON</button>
      </div>
    </div>
  </div>
</div>

<!-- Update Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="updateLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 color="red" class="modal-title" id="updateLabel">ATTENTION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body alwaysblack">
        <p>Etes-vous sur de vouloir mettre à jour le raspberry pi ?</p>
        <p>Ceci pourrait rendre instable le système</p>
        <p> (cette opération se fera en arrière plan) </p>
      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary update notify" data-dismiss="modal" href="#" role="button">OUI</a>
        <button type="button" class="btn btn-primary" data-dismiss="modal">NON</button>
      </div>
    </div>
  </div>
</div>

<script>
  document.querySelector(".reboot").addEventListener('click', function(){
     $.get('reboot.php');
 });
</script>

<script>
  document.querySelector(".update").addEventListener('click', function(){
     $.get('update.php');
 });
</script>

<script src="bootstrap-notify.js"></script>
<script>
  document.querySelector(".update").addEventListener('click', function(){
    $.notify({
  // options
  message: 'Installation des mises à jours en cours' 
},{
	// settings
  type: 'success'
});
 });
</script>
				  
<script>
  document.querySelector(".reboot").addEventListener('click', function(){
    $.notify({
  // options
  message: 'Redémarrage en cours. Merci de rafraichir manuellement la page dans quelques instants' 
},{
	// settings
  type: 'success'
});
 });
</script>


<script>
    document.querySelector('[data-switch-contrast]').addEventListener('click', function() {
  document.body.classList.toggle('nightmode');
});
    </script>
