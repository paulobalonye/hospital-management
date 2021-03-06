<div class="row">
    <!--  form area -->
    <div class="col-sm-12"> 

       <div  class="panel panel-default thumbnail">
        <?php
        if($this->permission->method('section','read')->access() || $this->permission->method('section','update')->access() || $this->permission->method('section','delete')->access()){
        ?>
        <div class="panel-heading no-print">
            <div class="btn-group"> 
                <a class="btn btn-primary" href="<?php echo base_url("website/section/") ?>"> <i class="fa fa-list"></i>  <?php echo display('section') ?> </a>  
            </div>
        </div> 
        <?php } ?>


        <?php
        if($this->permission->method('section','create')->access()){
        ?>
            <div class="panel-body  panel-form">
                <div class="row">
                    <div class="col-md-9 col-sm-12">

                        <?= form_open_multipart('website/section/create_language/'.$section->id,'class="form-inner"') ?>
                            
                            <?= form_hidden('id', $section->id);?>
                            <?= form_hidden('section_id', $section->section_id);?>

                           <div class="form-group row">
                                <label for="language" class="col-sm-3"><?php echo display('content_language') ?> <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <div class="form-check">
                                        <?php foreach ($languageList as $value) {?>
                                        <label class="radio-inline">
                                            <?php echo form_radio('language', lcfirst($value), (!empty($section->language)?lcfirst($value)==$section->language:lcfirst($value)=='english')).' ' .$value;?>
                                        </label>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-xs-3 col-form-label"><?php echo display('section_name') ?> <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="name"  type="text" class="form-control" id="name" value="<?= $section->name ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-xs-3 col-form-label"><?php echo display('title') ?> </label>
                                <div class="col-xs-9">
                                    <input name="title"  type="text" class="form-control" id="title" placeholder="<?php echo display('title') ?>" value="<?= $section->title ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-xs-3 col-form-label"><?php echo display('subtitle_description') ?></label>
                                <div class="col-xs-9">
                                    <textarea name="description" class="form-control"  placeholder="<?php echo display('subtitle_description') ?>" rows="7"><?= $section->description ?></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <div class="ui buttons">
                                        <button type="reset" class="ui button"><?php echo display('reset') ?></button>
                                        <div class="or"></div>
                                        <button class="ui positive button"><?php echo display('save') ?></button>
                                    </div>
                                </div>
                            </div>

                        <?= form_close() ?>

                    </div>
                </div>
            </div>
            <?php 
            }
             else{
             ?>
                <div class="col-sm-12">
                   <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <h4><?php echo display('you_do_not_have_permission_to_access_please_contact_with_administrator');?>.</h4>
                       </div>
                       </div>
                     </div>
                    </div>
             <?php
             }
             ?>

        </div>
    </div>

</div>