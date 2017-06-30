<?php
if(isset($_POST['a'])) {
	if($_POST['a'] == "loggedin") {
		echo('<div class="alert alert-success" role="alert">Du bist erfolgreich angemeldet!</div>');
	}
}
?>

<div class="card">
  <div class="card-header">
    Willkommen Beta Tester!
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" src="" />
        Du hast einen Betazugang bekommen! Falls du Fehler findest dann schreib mir eine <a href="mailto:xxunbemerktxx@yahoo.de"> E-Mail</a>!	
      </li>
	  <li class="list-group-item">
	  <a href="?p=neu">
        <img class="forum_img" hight="100px" weight="100px" src="/assets/img/forum_no_picture.png" />
        Die Webside ist noch im Aufbau!	
      </li>
	  </a>
	  <li class="list-group-item">
		<img class="forum_img" hight="100px" weight="100px" src="/assets/img/yt.png" /> Erstellung des Servers Playlist:<br>
        
      </li>
	  <li class="list-group-item">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL4eFbT-Uv_-mlTE3jDBHLY4-NyGAVDvMa" frameborder="0" allowfullscreen></iframe>
      </li>
    </ul>
  </div>
</div>
