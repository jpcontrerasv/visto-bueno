
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery-notes_js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery-notes_js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery-notes_js/jquery-notes_1.0.8.js"></script>

	<script type="text/javascript">
   
	$(function() {
		$('.jquery-note_1-1').jQueryNotes({
		operator: '<?php bloginfo('template_url'); ?>/jquery-notes_php/notes.php',
		allowDelete: true,
		allowLink: false,
		allowAuthor: false,
		});
	});
    </script>
    
    
  </body>
</html>