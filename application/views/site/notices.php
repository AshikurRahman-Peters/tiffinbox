<div class="container">
    <div class="page-header">
        <h1>Notices</h1>
    </div>
    <?php if(count($notices)):?>
            <?php foreach($notices as $notice):?>
                <h2><?=$notice->noticeTitle?></h2>
                <p><?=$notice->noticeDescription?></p>
            <?php endforeach;?>
    <?php else:?>
        <div class="empty">
            <p class="text-center">
                We don't have notices yet!
            </p>
        </div>
    <?php endif;?>
</div>