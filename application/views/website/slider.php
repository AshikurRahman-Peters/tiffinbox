<div class="page-content">
	<div class="row-fluid">
		<div class="span12 page-header position-relative">
			<!--PAGE CONTENT BEGINS-->
            <h1>
            <i class="icon-hand-right icon-animated-hand-pointer blue"></i>
                Homepage Slider
            </h1>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <!--------------Message---------------------------------->
            <!--check any alert message or not -->
            <?php
                if($this->session->flashdata('status_right')):
            ?>
            <!--Print Success Alert Message: -->
                <div class="alert alert-success no-margin">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="icon-remove red"></i>
                    </button>

                    <i class="icon-ok bigger-120 blue"></i>
                    <?php echo $this->session->flashdata('status_right'); ?>
                </div>
            <?php endif; ?>
            <!--check any alert message or not -->
            <?php if($this->session->flashdata('status_wrong')): ?>
            <!--Print Wrong Alert Message: -->
                <div class="alert span12 alert-danger no-margin">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="icon-remove red"></i>
                    </button>

                    <div class="span1"><i class="icon-warning-sign icon-2x red"></i></div>
                    <div class="span6"><?php echo $this->session->flashdata('status_wrong'); ?></div>
                </div>
            <?php endif; ?>
            <!--------------Message---------------------------------->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
    <div class="row-fluid">
        <!-- start main content -->

        <div class="span7">
            <?php if($infos->sliders) : ?>
                <?php $sliders = unserialize($infos->sliders); for($i=0; $i < count($sliders); $i++) : $slider = $sliders[$i];?>
                    <div class="row-fluid">
                        <div class="pull-left span5 image-control">
                            <img src="<?=$slider['image']?>">
                            <a href="<?=site_url()?>website/remove_slide/<?=$i?>">Delete</a>
                        </div>
                        <h3><?=$slider['title'];?></h3>
                        <p><?=$slider['content'];?></p>
                    </div>
                <?php endfor;?>
            <?php else:?>
                No Slider is configured yet!
            <?php endif;?>
        </div>
        <div class="span5">
            <h2>Add Slider</h2>
            <?=form_open_multipart('website/add_slider');?>
            <div class="control-group">
                <?=form_label('Slider Image','image',[
                    'class'=>'control-label'
                ]);?>
                <div class="controls">
                <?=form_upload([
                    'name'=>'image',
                    'id'=>'image'
                ]);?>
                </div>
            </div>
            <div class="control-group">
                <?=form_label('Title', 'title',[
                    'class'=>'control-label'
                ]);?>
                <div class="controls">
                    <?=form_input([
                        'name'=>'title',
                        'id'=>'title'
                    ]);?>
                </div>
            </div>
            <div class="control-group">
                <?=form_label('Content', 'content', [
                    'class'=>'control-label'
                ]);?>
                <div class="control">
                    <?=form_textarea([
                        'name'=>'content',
                        'id'=>'content'
                    ]);?>
                </div>
            </div>
            <button class="btn btn-primary">Save</button>
            <?=form_close()?>
        </div>
        <!-- main content end -->
    </div>
    <!--PAGE CONTENT ENDS-->
</div><!--/.page-content-->