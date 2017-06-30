<script>
$(document).ready(function(){
	window.setTimeout('LOLL();',0);
    $("#fader").hide();
});
		function LOLL() {
		$("#fader").fadeIn(1000);
		
		}
</script>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/"><?php echo($title); if($loggedin_tester == "1") {?> BETA<?php } else { }?></a>

  <div class="collapse navbar-collapse" id="main-navbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Startseite</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="?p=team">Team</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="?p=yt">Youtube</a>
      </li>
    </ul>

    <ul class="navbar-nav">

			<li id="volume_down"><a class="btn-floating blue" ><i class="material-icons" onselectstart="return false;">volume_down</i></a></li>
			<li id="volume_up"><a class="btn-floating blue" ><i class="material-icons" onselectstart="return false;">volume_up</i></a></li>
			<li style="margin-right: 50px;" id="note"><a class="btn-floating blue" ><i class="material-icons" onselectstart="return false;">music_note</i></a>	
			<li style="margin-right: 50px;" id="pause"><a class="btn-floating blue" ><i class="material-icons" onselectstart="return false;">pause_circle_outline</i></a></li>
      
      <?php if($loggedin == "false") { ?>
      <li class="nav-item pull-right">
        <a class="nav-link" href="?p=login">Anmelden</a>
      </li>
      <li class="nav-item pull-right">
        <a class="nav-link" href="?p=register">Registrieren</a>
      </li>
	  <?php } else { ?>
	  <li class="nav-item pull-right">
        <a class="nav-link" href="?p=members"><?php echo($loggedin_username) ?></a>
      </li>
      <li class="nav-item pull-right">
        <a class="nav-link" href="?p=logout">Logout</a>
      </li>
	  <?php } ?>
    </ul>
  </div>
</nav>
