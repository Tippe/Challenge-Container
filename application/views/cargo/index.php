<div class="container">
<?php echo $this->session->flashdata('created'); ?>
    <h1 class="title"><?= $title ?></h1>

    <br />

    <section class="content container-fluid">
        <table class="table table-bordered">

        <a  type="button" class="btn btn-success" href=<?php echo base_url('cargo/create'); ?>><span class="glyphicon glyphicon-plus"></span> Create</a>
        <br />

        <tr>
            <td class="bold">Container Type</td>
            <td class="bold">Amount</td>
            <td class="bold">Weight</td>
            <td class="bold">View</td>
            <td class="bold">Edit</td>
            <td class="bold">Delete</td>
        </tr>

        <?php foreach ($cargo as $carg): ?>
            
        <tr>
            <td><?php echo $carg['container_type']; ?></td>
            <td><?php echo $carg['amount']; ?></td>
            <td><?php echo $carg['weight']; ?></td>
            <td><a href="<?php echo site_url('ships/view/'.$carg['id']); ?>"><span class="glyphicon glyphicon-eye-open"></span></a></td>
            <td><a href="<?php echo site_url('ships/edit/'.$carg['id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
            <td><a href="<?php echo site_url('ships/delete/'.$carg['id']); ?>" onClick="return confirm('Are you sure you want to delete this cargo?')"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>
</div>