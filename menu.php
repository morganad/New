<div>

	<div id="header">
	
		<div class="recherche_p">
			<form action="/search" id="searchthis" method="get">
				<input id="search" name="q" type="text" placeholder="Rechercher" />
				<input id="search-btn" type="submit" value="Rechercher" />
			</form>
		</div>
		<div class="connexion">
			<form method="post" action="profil.php">
				<input type="email" name="email" id="email" placeholder="EMAIL@EXEMPLE.COM" required>
				<input type="password" name="pass" id="pass" placeholder="MOT DE PASSE" required>
				<input class ="bouton" type="submit" value="Se connecter"/>
			</form>
		</div>
		<a href="panier.php">
			<img src="panier.png" alt="Panier" class="panier"/>
		</a>
	</div>
	
	<a href="accueil.php">
		<img src="logo.jpg" alt="Logo" class="logo"/>
	</a>

	<ul id="menu">
		<li tabindex="0"><a href="accueil.php">ACCUEIL</a></li>
		<li tabindex="0"><a href="boutique.php">BOUTIQUE</a>
			<ul>
				<li>Lampe </a></li>
				<li>Literie </a></li>
				<li>Bougie </a></li>
			</ul>
		</li>
		<li tabindex="0"><a href="panier.php">MON PANIER</a>
		</li>
		<li tabindex="0">CONNEXION
		<ul>
			<li><a href="connexion.php">Se connecter </a></li>
			<li><a href="inscription.php">S'inscrire </a></li>
		</ul>
	</ul>
	
</div>