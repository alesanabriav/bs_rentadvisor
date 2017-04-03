	<!--wordpress files-->
	  <?php wp_footer() ?>
	<!-- /wordpress files-->
	<script>
		$.({
			url: '/wp-admin/admin-ajax.php',
			type: 'post',
			data: {
				action: 'store_contact',
				data: {name: 'ale'}
			}
		})
		.done(function(res) {
			console.log(res);
		})
	</script>
</body>
</html>
