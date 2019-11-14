{include file='header.tpl'}

<h1>Accuponcture Chinoise</h1>



<div class="form_recherche">
<form method="GET" action="?action=recherche">
  <label for="id_category">Catégorie :</label>
  <select id="id_category">
    <option>...</option>


  </select>

  <label for="id_meridien">Méridien :
  <div>
    {html_options name=meridien options=$meridiens} 
  </div>
  </label>




  <div>
    Caractéristiques :
    <input type="checkbox" name="plein" value="plein">plein</input>
    <input type="checkbox" name="chaud" value="chaud">chaud</input>
    <input type="checkbox" name="vide" value="vide">vide</input>
    <input type="checkbox" name="froid" value="froid">froid</input>
    <input type="checkbox" name="interne" value="interne">interne</input>
    <input type="checkbox" name="externe" value="externe">interne</input>
  </div>

  <input type="submit" value="Rechercher">
  
</form>
</div>

<div>
  <h2>Pathologies</h2>
  <ul>
  {foreach from=$patho item=item key=key}
      <li class="patho">{$item.idP} : {$item.desc}</li>
  {/foreach}
  </ul>
  <div>
  

</body>
</html>
