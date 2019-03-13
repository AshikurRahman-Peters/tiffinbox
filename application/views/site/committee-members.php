<div class="container">
    <div class="page-header">
        <h1>Committee Members</h1>
    </div>
    <?php if(count($teachers)):?>
        <div class="row">
            <?php foreach($teachers as $teacher):?>
                <div class="span3">
                    <div class="thumbnail">
                        <img src="<?=$teacher->EmployeePhoto?>">
                        <div class="caption">
                            <?=$teacher->EmployeeName?>
                        </div>
                    </div>
                    <dl class="dl-horizontal">
                        <dt>Blood Group</dt>
                        <dd><?=$teacher->EmployeeBloodGroup?></dd>
                    </dl>
                </div>
            <?php endforeach;?>
        </div>
    <?php else:?>
        <div class="empty">
            <p class="text-center">
                We don't have committee members yet!
            </p>
        </div>
    <?php endif;?>
</div>