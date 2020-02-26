<div class="container">
<h1 style="font-family: 'Odibee Sans'; font-size: 56px;" class="text-center mt-5"><?php echo $title;?></h1>
<table class="table mt-5">
<thead>
    <tr>
      <th style="font-family: 'Noto Sans';" class="bg-primary text-white" scope="col">Nom Client</th>
      <th style="font-family: 'Noto Sans';" class="bg-primary text-white" scope="col">N° Client</th>
      <th style="font-family: 'Noto Sans';" class="bg-primary text-white" scope="col">Adresse</th>
      <th style="font-family: 'Noto Sans';" class="bg-primary text-white" scope="col">N° Telephone</th>
      <th style="font-family: 'Noto Sans';" class="bg-primary text-white" scope="col">Adresse Mail</th>
      <th style="font-family: 'Noto Sans';" class="bg-primary text-white text-center" scope="col">Action</th>
    </tr>
  </thead>
    <?php foreach ($clients as $client): ?>

        <tbody>
            <tr>
                <td style="font-family: 'Noto Sans';" class="shadow p-3 mb-5 bg-white rounded"><?php echo $client['nomClient']; ?></td>
                <td style="font-family: 'Noto Sans';" class="shadow p-3 mb-5 bg-white rounded"><?php echo $client['numClient']; ?></td>
                <td style="font-family: 'Noto Sans';" class="shadow p-3 mb-5 bg-white rounded"><?php echo $client['adresse']; ?></td>
                <td style="font-family: 'Noto Sans';" class="shadow p-3 mb-5 bg-white rounded"><?php echo $client['numTel']; ?></td>
                <td style="font-family: 'Noto Sans';" class="shadow p-3 mb-5 bg-white rounded"><?php echo $client['mail']; ?></td>
                <td class="text-center">
                <a href="<?php echo site_url("client/client/" . $client['clientId']); ?>"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
                <a href="<?php echo site_url("client/update"); ?>"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
            </tr>
        </tbody>


    <?php endforeach; ?>
</table>
<a href="<?php echo site_url("client/create"); ?>"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i>Ajouter un client</button></a>


</div>