<div class="container">
<?php echo $this->session->flashdata('created'); ?>
<?php echo $this->session->flashdata('buildyearerror'); ?>
    <h1 class="title"><?= $title ?></h1>

    <br />

    <section class="content container-fluid">
        <table class="table table-bordered">

        <a  type="button" class="btn btn-success" href=<?php echo base_url('ships/create'); ?>><span class="glyphicon glyphicon-plus"></span> Create</a>
        <br />

        <tr>
            <td class="bold">IMO Number</td>
            <td class="bold">Ship Name</td>
            <td class="bold">Build Year</td>
            <td class="bold">Max Capacity (in Kilograms)</td>
            <td class="bold">View</td>
            <td class="bold">Edit</td>
            <td class="bold">Delete</td>
        </tr>

        <?php foreach ($ships as $ship): ?>
            
        <tr>
            <td><?php echo $ship['imo_number']; ?></td>
            <td><?php echo $ship['name']; ?></td>
            <td><?php echo $ship['build_year']; ?></td>
            <td><?php echo $ship['max_capacity']; ?></td>
            <td><a href="<?php echo site_url('ships/view/'.$ship['id']); ?>"><span class="glyphicon glyphicon-eye-open"></span></a></td>
            <td><a href="<?php echo site_url('ships/edit/'.$ship['id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
            <td><a href="<?php echo site_url('ships/delete/'.$ship['id']); ?>" onClick="return confirm('Are you sure you want to delete this ship?')"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>
</div>