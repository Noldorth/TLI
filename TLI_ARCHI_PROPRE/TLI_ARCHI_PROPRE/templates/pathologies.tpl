{include file='header.tpl'}


<div class="form_recherche">
<form method="GET" action="?action=recherche">
  <label for="id_category">Catégorie :</label>
  <select id="id_category">
    <option>...</option>


  </select>

  <label for="id_meridien">Méridien :</label>
  <select id="id_meridien">
    <option>...</option>
  </select>

  <div>
    Type pathologie :
    <input type="checkbox" name="meridien" value="Méridien">Méridien</input>
    <input type="checkbox" name="organe" value="Organe/Viscère">Organe/Viscère</input>
    <input type="checkbox" name="tendino-musculaires" value="Tendino-musculaire">Tendino-musculaire</input>
    <input type="checkbox" name="branches" value="branches">Branches (voies lu)</input>
    <input type="checkbox" name="merveilleux" value="merveilleux">Merveilleux vaisceaux</input>
  </div>

  <div><select>
    <option value="">Volvo</option>
    <option value="">Saab</option>
    <option value="">Mercedes</option>
    <option value="">Audi</option>
  </select>
</div>
  <input type="submit" value="Rechercher">

</form>
</id>
</body>
</html>
