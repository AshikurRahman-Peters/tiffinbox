<div class="container">
    <div class="page-header">
        <h1>Contact</h1>
    </div>
    <?php if($messages = $this->session->flashdata('messages')): ?>
        <?php foreach($messages as $message):?>
            <div class="row">
                <?php foreach($message as $key=>$value) :?>
                    <!--Print Wrong Alert Message: -->
                    <div class="alert-block span12 alert-<?=$key?> no-margin">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="icon-remove red"></i>
                        </button>
                        <?php echo $value; ?>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endforeach;?>
    <?php endif; ?>
    <div id="map-canvas"></div>
    <div class="row">
        <div class="span6">
            <?php echo form_open('site/contact');?>
                <fieldset>
                    <h3>Get in Touch</h3>

                    <input name="name" class="input-xxlarge" type="text" placeholder="Name" />
                    <input name="email" class="input-xxlarge" type="text" type="email" placeholder="Email" required/>

                    <textarea name="message"  class="input-xxlarge"  rows="10"  placeholder="Your Message"></textarea>
                    <br>
                    <button type="submit" class="btn">Submit</button>
                </fieldset>
            <?php echo form_close();?>
  		</div>
  		<div class="span6">
  			<h3>Address</h3>
  			<address>
                <strong><?=$infos[0]->institute_name?></strong><br>
                <?=$infos[0]->institute_name?><br>
                <abbr title="Phone">P:</abbr> <?=$infos[0]->contact_no?>
            </address>

            <address>
                <strong>Support</strong><br>
                <a href="mailto:#"><?=$infos[0]->contact_us_email?></a>
            </address>
  		</div>
    </div>
</div>
<!--GOOGLE MAP-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
    var geocoder;
    var map;
    function initialize() {
        var mapOptions = {
            zoom: 8,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        geocoder = new google.maps.Geocoder();
        geocoder.geocode( { 'address': '<?=$infos[0]->address?>'}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>