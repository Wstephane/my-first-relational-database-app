<?php include('head.php')?>
<body>
	<h1>Liste de Facture</h1>
    <a href="forms/add-facture.php">Ajouter</a>
    <table>
        <thead>
        <tr>
            <th>Numéro</th>
            <th>Date</th>
            <th>Objet</th>
            <th>Société</th>
            <th>Personnes</th>
        </tr>
        </thead>
        <tbody>
            <?php include('../../../model/model.php');?>
        <tr>
          <td><input name="numero_facture" value="<?=$data["numero_facture"]?>"></td>
          <td><input name="date_facture" value="<?=$data["date_facture"]?>"></td>
          <td><input name="objet_facture" value="<?=$data["objet_facture"]?>"></td>
          <td><input name="societe_id_societe" value="<?=$data["societe_id_societe"]?>"></td>
          <td><input name="personnes_id_personnes" value="<?=$data['personnes_id_personnes']?>"></td>
          <td><a href="forms/edit-facture.php?id=<?=$data["id_facture"]?>"><i class="fas fa-pen"></i></a></td>
          <td><a href="../../../controller/delete.php?id=<?=$data["id_facture"]?>"><i class="far fa-trash-alt"></i></a></td>
        </tr>
      </tbody>
    </table>
</body>
</html>