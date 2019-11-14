{include file='header.tpl'}

<form class="form" action="?action=AddUser" method="POST">
  <h2>Inscription</h2>

		<div>
			<label for="nom" class="floatLabel">Nom</label>
			<input id="nom" name="nom" required type="text" method="POST">
		</div>

		 <div>
			<label for="prenom" class="floatLabel">Prénom</label>
			<input id="prenom" name="prenom" required type="text" method="POST">
		 </div>

		<div>
			<label for="Email" class="floatLabel">Mail</label>
			<input id="Email" name="email" type="text" required placeholder="prénom.nom">
		</div>
		<div>
			<label for="password" class="floatLabel">Mot de passe</label>
			<input id="password" name="password" type="password" required>

		</div>
		<div>
			<label for="confirm_password" class="floatLabel">Confirmer le mot de passse</label>
			<input id="confirm_password" name="confirm_password" type="password" required >
		</div>
		<div>
			<div class="boutoninscrip">
			     <button type="submit" class="btn btn-success" method="POST">Créer mon compte</button>
			</div>
		</div>
</form>






</body>

</html>
