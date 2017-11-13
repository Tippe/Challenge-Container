<div class="container">
    <div class="row">
        <div class="col-xs-12 .col-md-8-centered well">
            <?php echo form_open('cargo/create'); ?>
            <fieldset>
                <legend class="text-center"><h1 class="title"><?php echo $title; ?></h1></legend>
                <!-- Container Type -->
                <div class="form-group">
                    <div class="row colbox">     
                        <label for="container_type" class="control-label">Container Type</label>
                        <input type="text" id="container_type" class="form-control" name="container_type" placeholder="Container Type" value="<?php echo form_dropdown('container_type') ?>"/>  
                        <span class="text-danger"><?php echo form_error('container_type'); ?></span>
                    </div>
                </div>
                
                 <!-- Amount -->
                <div class="form-group">
                    <div class="row colbox ">     
                        <label for="amount" class="control-label">Amount</label>
                        <input type="amount" id="amount" class="form-control" name="amount" placeholder="Amount"/>   
                        <span class="text-danger"><?php echo form_error('amount'); ?></span>
                    </div>
                </div>

                <!-- Build Year -->
                <div class="form-group">
                    <div class="row colbox">   
                        <label for="weight">Weight</label>
                        <input type="weight" id="weight" class="form-control" name="weight" placeholder="Weight"/>   
                        <span class="text-danger"><?php echo form_error('weight'); ?></span>
                    </div>
                </div>

                <br>
                <!-- submit button -->
                <div class="form-group">
                    <div class="row colbox text-center">
                        <input type="submit" id="submit" name="submit" value="Create Ship" class="btn btn-primary btn-block"/>
                    </div>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>