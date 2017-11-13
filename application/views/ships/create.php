<div class="container">
    <div class="row">
        <div class="col-xs-12 .col-md-8-centered well">
            <?php echo form_open('ships/create'); ?>
            <fieldset>
                <legend class="text-center"><h1 class="title"><?php echo $title; ?></h1></legend>
                <!-- IMO Number -->
                <div class="form-group">
                    <div class="row colbox">     
                        <label for="imo_number" class="control-label">IMO Number</label>
                        <input type="text" id="imo_number" class="form-control" name="imo_number" placeholder="IMO Number" value="<?php echo set_value('imo_number') ?>"/>  
                        <span class="text-danger"><?php echo form_error('imo_number'); ?></span>
                    </div>
                </div>
                
                 <!-- Name -->
                <div class="form-group">
                    <div class="row colbox ">     
                        <label for="name" class="control-label">Ship Name</label>
                        <input type="name" id="name" class="form-control" name="name" placeholder="Ship Name"/>   
                        <span class="text-danger"><?php echo form_error('name'); ?></span>
                    </div>
                </div>

                <!-- Build Year -->
                <div class="form-group">
                    <div class="row colbox">   
                        <label for="build_year">Build Year</label>
                        <input type="build_year" id="build_year" class="form-control" name="build_year" placeholder="Build Year"/>   
                        <span class="text-danger"><?php echo form_error('build_year'); ?></span>
                    </div>
                </div>

                <!-- Max Capacity -->
                <div class="form-group">
                    <div class="row colbox">   
                        <label for="max_capacity">Max Capacity (in Kilograms)</label>
                        <input type="max_capacity" id="max_capacity" class="form-control" name="max_capacity" placeholder="Max Capacity"/>   
                        <span class="text-danger"><?php echo form_error('max_capacity'); ?></span>
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