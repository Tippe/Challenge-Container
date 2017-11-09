<div class="container">

  <h1 class="title"><?= $title ?></h1>

  <br />

  <section class="content container-fluid">
    <table class="table table-bordered">

    <tr>
      <td class="bold">IMO Number</td>
      <td class="bold">Name</td>
      <td class="bold">Build Year</td>
    </tr>
    <tr>
      <td><?php echo $ship['imo_number']; ?></td>
      <td><?php echo $ship['name']; ?></td>
      <td><?php echo $ship['build_year']; ?></td>
    </tr>

    <a type="button" class="btn btn-primary" href=<?php echo base_url('ships/index'); ?>>Back</a>

    </table>
  </section>
</div>