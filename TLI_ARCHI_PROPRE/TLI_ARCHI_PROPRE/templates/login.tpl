{include file='header.tpl'}
<div class="form">

    <h2>Identification</h2>

<form action="?action=logUser" name="login" method="post" accept-charset="utf-8" required autofocus>

      <input type="text" name="login" placeholder="Utilisateur" required/>
      <input type="password" name="password" placeholder="Mot de passe" required />
      <input class="button" type="submit" value="Connexion" method="post"/>

	  <p>Pas encore inscrit ? <a href="?action=register"><u>Cliquez ici !</u></a></p>
    </form>
	{if (!empty($errorMessage))}
		<div id="error_message">
		    {$errorMessage}
		</div>
		{/if}


  </div>
  







</body>



</html>
