<div class="container">
    <div class="page-header">
        <!--Carousel
        ==================================================-->

        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <?php if($infos[0]->sliders) : $sliders = unserialize($infos[0]->sliders);?>
                    <?php foreach($sliders as $key => $slider):?>
                        <div class="<?=($key == 0) ? 'active' : null;?> item" style="background-image: url(<?=$slider['image']?>)">
                            <div class="container">
                                <div class="row">

                                    <div class="span12">

                                        <div class="carousel-caption">
                                            <h1><?=$slider['title']?></h1>
                                            <p class="lead"><?=$slider['title']?></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; endif;?>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left " href="#myCarousel" data-slide="prev"><i class="icon-circle-arrow-left"></i></a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="icon-circle-arrow-right"></i></a>
            <!-- /.Carousel nav -->

        </div>
        <!-- /Carousel -->
    </div>
    <div class="row">
        <?php if($infos[0]->principal_word):?>
    	 <div class="span4">
            <h2>Word from Principle</h2><hr>
            <?=$infos[0]->principal_word?>
        </div>
        <?php endif;?>
        <div class="span4">
            <h2>Notices</h2><hr/>
            <?php if($notices) :?>
            <ul>
                <?php foreach($notices as $notice):?>
                    <li>
                        <h3><?=$notice->noticeTitle?></h3>
                        <p><?=$notice->noticeDescription?></p>
                    </li>
                <?php endforeach;?>
            </ul>
            <?php else:?>
            No Notices found!
            <?php endif;?>
        </div>
        <div class="span4">
            <h2>Important Links</h2><hr/>
            <?php if($links) :?>
                <ul>
                    <?php foreach($links as $link):?>
                        <li>
                            <h3><a target="_blank" href="<?=$link->url?>"?><?=$link->title?></a></h3>
                        </li>
                    <?php endforeach;?>
                </ul>
            <?php else:?>
                No link found!
            <?php endif;?>
        </div>
    </div>
</div>