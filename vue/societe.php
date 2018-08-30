<?php include('head.php')?>
<body>
	<h1>Liste societe</h1>
    <a href="../vue/forms/add-societe.php">Ajouter</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Pays</th>
            <th>Nº TVA</th>
            <th>Téléphone</th>
        </tr>
        </thead>
        <tbody>
            <?php include('../model/model-societe.php');
            $result = $db->query('SELECT * FROM societe');
                while ($data = $result->fetch())
            {
            ?>
        <tr>
          <td><input name="id_societe" value="<?=$data["id_societe"]?>"></td>
          <td><input name="nom_societe" value="<?=$data["nom_societe"]?>"></td>
          <td><input name="pays_societe" value="<?=$data["pays_societe"]?>"></td>
          <td><input name="tva_societe" value="<?=$data["tva_societe"]?>"></td>
          <td><input name="telephone_societe" value="<?=$data["telephone_societe"]?>"></td>
          <td><input name="factures_id_factures" value="<?=$data["factures_id_factures"]?>" type="hidden"></td>
          <td><input name="personnes_id_personnes" value="<?=$data["personnes_id_personnes"]?>" type="hidden"></td>
          <td><a href="update.php?id=<?=$data["id"]?>">Edit</a></td>
          <td>/</td>
          <td><a href="delete.php?id=<?=$data["id"]?>" name="selector[]">Delete</a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</body>
</html>