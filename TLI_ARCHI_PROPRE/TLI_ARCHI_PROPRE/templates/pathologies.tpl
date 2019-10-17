{include file='header.tpl'}


<div class="form_recherche">
<form method="POST" action="?action=recherche">
  <!--<label for="id_category">Catégorie :</label>
  <select id="id_category">
    <option>...</option>


  </select>

  <label for="id_meridien">Méridien :</label>
  <select id="id_meridien">
    <option>...</option>
  </select>

  -->

  <div>
    {html_options name=meridien options=$meridiens}
  
  </div>
  <div>
    {html_options name=typePat options=$typePatho}
    
  </div>
  <div>
    {html_options name=caracteristique options=$caracteristique}
    
  </div>
  <input type="submit" value="Rechercher">
  <div>
  <!--{section name=customer loop=$recherche}
  id: {$recherche[type]}<br />
{/section}-->
  </div>

</form>
</id>
</body>
</html>
