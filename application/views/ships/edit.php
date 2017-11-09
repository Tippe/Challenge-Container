<div class="container">
    <div class="row">
        <div class="col-xs-12 .col-md-8-centered well">
            <?php echo validation_errors(); ?>
            <?php echo form_open('ships/edit/'.$ship['id']); ?>
            <fieldset>
                <legend class="text-center"><h1 class="title"><?php echo $title; ?></h1></legend>

                <!-- IMO Number -->
                <div class="form-group">
                    <div class="row colbox">     
                        <label for="imo_number" class="control-label">IMO Number</label>
                        <input type="text" id="imo_number" class="form-control" name="imo_number" value="<?php echo $ship['imo_number'] ?>"/>
                    </div>
                </div>
                
                 <!-- Name -->
                <div class="form-group">
                    <div class="row colbox ">     
                        <label for="name" class="control-label">Ship Name</label>
                        <input type="name" id="name" class="form-control" name="name" value="<?php echo $ship['name'] ?>"/>
                    </div>
                </div>

                <!-- Build Year -->
                <div class="form-group">
                    <div class="row colbox">   
                        <label for="build_year">Build Year</label>
                        <input type="build_year" id="build_year" class="form-control" name="build_year" value="<?php echo $ship['build_year'] ?>"/>
                    </div>
                </div>

                <br />

                <!-- submit button -->
                <div class="form-group">
                    <div class="row colbox text-center">
                        <input type="submit" id="submit" name="submit" value="Edit Ship" class="btn btn-primary btn-block"/>
                    </div>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>