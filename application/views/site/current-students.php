<div class="container">
    <div class="page-header">
        <h1>Current Students</h1>
    </div>
    <?php if(count($students)):?>
    <div class="row">
        <?php foreach($students as $student):
            $photo = explode('_', @$student->StdProfilePhoto);?>
        <div class="span3">
            <div class="thumbnail">
                <img src="<?=site_url().'media/students/'.@$photo[1].'/'.@$photo[2].'/'.str_replace('_thumb','',@$student->StdProfilePhoto)?>">
                <div class="caption">
                    <?=$student->StdName?>
                </div>
            </div>
            <dl class="dl-horizontal">
                <dt>Class</dt>
                <dd><?=$student->ClassName?></dd>
                <dt>Blood Group</dt>
                <dd><?=$student->StdBloodGroup?></dd>
            </dl>
        </div>
        <?php endforeach;?>
    </div>
    <?php else:?>
    <div class="empty">
        <p class="text-center">
            We don't have students yet!
        </p>
    </div>
    <?php endif;?>
</div>