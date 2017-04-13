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
    <style>
      .form_container{
        position:relative;
        display:block;
      }
      .form_container form{
        /*background:orange;*/
        position:inherit;
        display:block;
        line-height:15px;
        padding: 30px 0;
      }
      .form_container input{
        display:inline;
        width:44.5%;
        height:2em;
        margin:5px;
        font-size:1em;
        padding: 0 8px;
        margin: 5px;
      }

      .form_container input[placeholder], .form_container textarea[placeholder], {
       color:#3A2C84!important;
      }

      ::-webkit-input-placeholder { /* WebKit, Blink, Edge */color:#3A2C84!important;}
      :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:#3A2C84!important;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:#3A2C84!important;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:#3A2C84!important;
}
      ::-webkit-textarea-placeholder { /* WebKit, Blink, Edge */color:#3A2C84!important;}
      :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:#3A2C84!important;
   opacity:  1;
   font-size:1em;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:#3A2C84!important;
   opacity:  1;
   font-size:1em;
}
:-ms-textarea-placeholder { /* Internet Explorer 10-11 */
   color:#3A2C84!important;
   font-size:1em;
}

      .form_container textarea{
        width:95%;
        display:inline;
        height:4em;
        font-size:1em;
        margin:5px;
        padding:0 5px;
      }
      .form_container .round_purple{
        border:solid thin #3A2C84;
        border-radius:5px;
        color:#3A2C84;
        background:transparent;
      }
      .form_container button{
          background:#3A2C84;
          color:#F6B818;
          border-radius:5px;
          padding:5px 100px;
          border:none;
          font-size:1em;
          margin:20px auto;
          display:block;
      }
    </style>

    <div class="form_container">
      <form action="#">
        <input class="round_purple" type="text" name="name" placeholder="Nombre" > </input>
        <input class="round_purple" type="text" name="email" placeholder="Email" > </input>
        <input class="round_purple" type="text" name="cel" placeholder="Cel"> </input>
        <input class="round_purple" type="text" name="empresa" placeholder="Empresa"> </input>
        <textarea class="round_purple" placeholder="Mensaje"></textarea>
        <button type="submit" value="Submit">Enviar</button>
      </form>
    </div>


<script>

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