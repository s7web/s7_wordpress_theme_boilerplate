<?php 

/* 
   EXAMPLE OF  REGISTER META BOX WITH REPEATER FIELDS
*/
function s7design_meta_boxes_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function s7design_meta_boxes_add_meta_box() {
	add_meta_box(
		's7design_meta_boxes-s7design-meta-boxes',
		__( 'Repeater Custom Fields', 's7design_meta_boxes' ),
		's7design_meta_boxes_html',
		'post',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 's7design_meta_boxes_add_meta_box' );

function s7design_meta_boxes_html( $post) {
	wp_nonce_field( '_s7design_meta_boxes_nonce', 's7design_meta_boxes_nonce' ); ?>

	<?php  
	$names =  s7design_meta_boxes_get_meta( 's7design_meta_boxes_add_name' );
	$descriptions =  s7design_meta_boxes_get_meta( 's7design_meta_boxes_add_description' );

	// Settings that we'll pass to wp_editor
	$args = array (
		  'tinymce' => false,
		  'quicktags' => true,
	);

	?>
		<div class="form-apend">
	<?php 
	if(is_array($names) && count($names) !== 0)  {
		foreach($names as $key => $name) {
			?>
			<div>
                <p>
                    <label for="s7design_meta_boxes_add_name"><?php _e( 'Add Name', 's7design_meta_boxes' ); ?></label><br>
                    <input style="min-width:300px; margin-right:10px;" type="text" name="s7design_meta_boxes_add_name[]" value="<?php echo $name; ?>">
                </p>
                    <p>
                    <label for="s7design_meta_boxes_add_description"><?php _e( 'Add Description', 's7design_meta_boxes' ); ?></label><br>
                    <?php wp_editor( $descriptions[$key], "s7design_meta_boxes_add_description[]", $args ); ?>
                </p>
            
                <span onclick="removeItem(this)" data-remove="<?php echo  $key; ?>" style="padding:6px 9px; border:1px solid #ccc; height:20px; margin-left:6px; margin-top:32px;" >X</span>
			</div><hr />
		<?php
		}
		}  else {
			?> 
			<p>
				<label for="s7design_meta_boxes_add_name"><?php _e( 'Add Name', 's7design_meta_boxes' ); ?></label><br>
				<input type="text" name="s7design_meta_boxes_add_name[]"  value="">
			</p>	<p>
				<label for="s7design_meta_boxes_add_description"><?php _e( 'Add Description', 's7design_meta_boxes' ); ?></label><br>
				<?php wp_editor( '', 's7design_meta_boxes_add_description[]', $args ); ?>
			</p>
            <span class="remove-item" onclick="removeItem(this)" style="padding:6px 9px; border:1px solid #ccc; height:20px; margin-left:6px; margin-top:26px;" >X</span>
			<?php
			
	}
	?>
	</div>
	
	 <button id="append-fields">Add new</button>

	 <script>
		
	  jQuery('#append-fields').click(function(e) {
		  e.preventDefault()
		//window.send_to_editor = function(html) {
			const resForm = jQuery('.form-apend');
			const res = jQuery('.empty-name-form').css({display:'block'});
			resForm.append(`	
			<div>
			<p>
		  <label for="s7design_meta_boxes_add_name"><?php _e( 'Add Name', 's7design_meta_boxes' ); ?></label><br>
		  <input type="text" name="s7design_meta_boxes_add_name[]"  value="">
        </p>
      	<p>
		  <label for="s7design_meta_boxes_add_description"><?php _e( 'Add Description', 's7design_meta_boxes' ); ?></label><br>
		  <?php wp_editor( '', 's7design_meta_boxes_add_description', $args ); ?>
	     </p>
	  
	 
	  <span class="remove-item" onclick="removeItem(this)" style="padding:6px 9px; border:1px solid #ccc; height:20px; margin-left:6px; margin-top:26px;" >X</span>
		
		</div> 
	  `);

	  }); // End on click
	 

	  function removeItem(e) {
		  e.parentNode.remove();
	  }
	
	 </script>
	<?php
	
}

function s7design_meta_boxes_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['s7design_meta_boxes_nonce'] ) || ! wp_verify_nonce( $_POST['s7design_meta_boxes_nonce'], '_s7design_meta_boxes_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;
   

	$name = array_map( 'esc_attr', $_POST['s7design_meta_boxes_add_name'] );
    $description = array_map( 'esc_attr', $_POST['s7design_meta_boxes_add_description'] );
    
    update_post_meta( $post_id, 's7design_meta_boxes_add_name',  $name  );
    update_post_meta( $post_id, 's7design_meta_boxes_add_description', $description );
}
add_action( 'save_post', 's7design_meta_boxes_save' );