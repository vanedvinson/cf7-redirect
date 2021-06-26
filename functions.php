<!-- [dynamichidden dynamichidden-601 id:cfkontaktform "CF7_URL"] -->
<!-- neke izmene -->
add_action('wp_head','woocommerce_js');

function woocommerce_js(){
	?>
	<script type="text/javascript">
		document.addEventListener( 'wpcf7submit', function( event ) {
    		     
            var cfkontaktform =  document.getElementById("cfkontaktform").value;

            if (cfkontaktform == "https://nejchojc-personaltrainer.ch:443/ziele/schmerzfrei/") {
                location = 'https://nejchojc-personaltrainer.ch/schmerzanalyst/vielen-dank/';
            } else{
                location = 'https://nejchojc-personaltrainer.ch/schmerzanalyst-start/vielen-dank/';
            }
        }, false );
    </script>
    <?php
}