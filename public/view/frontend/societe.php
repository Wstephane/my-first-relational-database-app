<?php include('frontend/head.php');?>
</head>
<body>
	<h1>Liste societe</h1>
    <a href="forms/add-societe.php">Ajouter</a>
    <table>
        <thead>
        <tr class="row-titles">
            <th>Nom</th>
            <th>Pays</th>
            <th>Nº TVA</th>
            <th>Téléphone</th>
            <th>Type</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <?php include('../../../model/model.php');
            $result = $db->query('SELECT * FROM societe');
            $type_name = array(
                1 => 'Fournisseur',
                2 => 'Client'
                );
                while ($data = $result->fetch())
            {
            ?>
        <tr>
          <td><input name="nom_societe" value="<?=$data["nom_societe"]?>" readonly class="input-read"></td>
          <td><input name="pays_societe" value="<?=$data["pays_societe"]?>" readonly class="input-read"></td>
          <td><input name="tva_societe" value="<?=$data["tva_societe"]?>" readonly class="input-read"></td>
          <td><input name="telephone_societe" value="<?=$data["telephone_societe"]?>" readonly class="input-read"></td>
          <td><input name="types_id_types" value="<?=$type_name[$data['types_id_types']]?>" readonly class="input-read"></td>
          <td><a href="forms/view-societe.php?id=<?=$data["id_societe"]?>"><i class="far fa-eye"></i></a></td>
          <td><a href="forms/edit-societe.php?id=<?=$data["id_societe"]?>"><i class="fas fa-pen"></i></a></td>
          <td><a href="../../../controller/delete.php?id=<?=$data["id_societe"]?>"><i class="far fa-trash-alt"></i></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</body>
</html>