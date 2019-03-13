<div class="container">
    <div class="page-header">
        <h1>About Us</h1>
    </div>
    <h2>Welcome to <?=$infos[0]->institute_name?></h2>

    <?=$infos[0]->about_us?>

    <?php if(isset($committee_members)) :?>
    <div class="hr-divider"></div>

    <h2>Our Committee Members</h2>
    <ul class="thumbnails personnel">
        <?php foreach($committee_members as $member):?>
        <li class="span4">
            <div class="thumbnail">
                <span class="img-circle profile-image" style="background-image: url('<?=site_url().'assets/images/'.$member['image']?>');"></span>
                <div class="caption">
                    <strong><?=$member['name']?></strong> /
                    <?=$member['designation']?>
                </div>
            </div>
        </li>
        <?php endforeach;?>
    </ul>
    <?php endif;?>
    <div class="row">

    </div>
</div>