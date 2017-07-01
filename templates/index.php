<?php
if(isset($_POST['a'])) {
	if($_POST['a'] == "loggedin") {
		echo('<div class="alert alert-success" role="alert">Du bist erfolgreich angemeldet!</div>');
	}
}
if($loggedin_tester == "1") {
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
		<img class="forum_img" hight="100px" weight="100px" src="/assets/img/yt.png" /> Erstellung des Servers Playlist:<br>
        
      </li>
	  <li class="list-group-item">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL4eFbT-Uv_-mlTE3jDBHLY4-NyGAVDvMa" frameborder="0" allowfullscreen></iframe>
      </li>
      <li class="list-group-item">
        <img class="forum_img" src="" />
        Du m&ouml;chtest den Betamodus verlassen? <a href="?p=members"> Profil</a>	
      </li>
      	<li class="list-group-item">
        	<img class="forum_img" src="" />
        	Joine noch Heute unseren Discord Server!	
      	</li>
      	<li class="list-group-item">
        		<iframe src="https://discordapp.com/widget?id=329628824889327617&theme=bright" width="350" height="500" allowtransparency="true" frameborder="0">
			 </iframe>
      	</li>
    </ul>
  </div>
</div>






<?php } else { ?>
<div class="card">
  <div class="card-header">
    Willkommen!
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" src="" />
        Dies ist die Offizielle Webside vom Inkompetentes Netzwerk!
      </li>
	<li class="list-group-item">
		<img class="forum_img" hight="100px" weight="100px" src="/assets/img/yt.png" /> Erstellung des Servers Playlist:<br>
        
     	</li>
	  	<li class="list-group-item">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL4eFbT-Uv_-mlTE3jDBHLY4-NyGAVDvMa" frameborder="0" allowfullscreen></iframe>
     	</li>
      	<li class="list-group-item">
        	<img class="forum_img" src="" />
        	Joine noch Heute unseren Discord Server!	
      	</li>
      	<li class="list-group-item">
        		<iframe src="https://discordapp.com/widget?id=329628824889327617&theme=bright" width="350" height="500" allowtransparency="true" frameborder="0">
			 </iframe>
      	</li>
   </ul>
  </div>
</div>
<?php } ?>
