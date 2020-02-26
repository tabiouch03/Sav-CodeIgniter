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
    </tr>
  </thead>
        <tbody>
            <tr>
                <td style="font-family: 'Noto Sans';" class="shadow p-3 mb-5 bg-white rounded"><?php echo $client['nomClient']; ?></td>
                <td style="font-family: 'Noto Sans';" class="shadow p-3 mb-5 bg-white rounded"><?php echo $client['numClient']; ?></td>
                <td style="font-family: 'Noto Sans';" class="shadow p-3 mb-5 bg-white rounded"><?php echo $client['adresse']; ?></td>
                <td style="font-family: 'Noto Sans';" class="shadow p-3 mb-5 bg-white rounded"><?php echo $client['numTel']; ?></td>
                <td style="font-family: 'Noto Sans';" class="shadow p-3 mb-5 bg-white rounded"><?php echo $client['mail']; ?></td>
            </tr>
        </tbody>
</table>
</div>