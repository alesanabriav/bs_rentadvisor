<?php
/**
** 	
**/

add_shortcode( 'bs_form', 'bs_form_sc' );

function bs_form_sc($atts, $content = null) {
	$attributes = [
		'titulo1' => '',
		'titulo2' => '',
        'titulo3' => ''
  ];

  $at = shortcode_atts( $attributes , $atts );

  ob_start();
?>


<!--<div class="form_container">
    <form action="">
    <?php 
    //foreach($at as $titulo){ 
          ?>
        <label><?php //echo($titulo);?></label>
        <input type="text"></input>
    <?php //} ?>
    </form>-->

    <div class="form_container"></div>


<script>
	onLoad(function() {
		//jquery stuff iría acá
	    //var s = skrollr.init();
	});
</script>
<?php

  return ob_get_clean();
}


add_action( 'vc_before_init', 'bs_form_vc' );

  function bs_form_vc() {
		$params = [
			[
        "type" => "textfield",
        "heading" => "Title1",
        "param_name" => "titulo1",
        "value" => ''
			],
      [
        "type" => "textfield",
        "heading" => "Title2",
        "param_name" => "titulo2",
        "value" => ''
			],
			[
        "type" => "textfield",
        "heading" => "Title3",
        "param_name" => "titulo3",
        "value" => ''
      ]
		];

  	vc_map(
      array(
        "name" =>  "BS Form",
        "base" => "bs_form",
        "category" =>  "BS",
        "params" => $params
      ) 
    );
  }