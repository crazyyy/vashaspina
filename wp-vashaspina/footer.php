	</div><!-- main-holder -->
<footer>

	<div class="counters">
		<!-- insert counters code here -->
	</div>

	<?php html5extra_nav(); ?>

    <p class="copyrights">© 2013 Vashaspina.ru | <a href="#" >Карта сайта</a> | <noindex><a rel= "nofollow" href="#"  title="">Обратная связь</a> | <a rel="nofollow" href="#"  title="">О сайте</a></noindex><br /><noindex>Информация на сайте предоставлена исключительно в популярно-ознакомительных целях, не претендует на справочную и медицинскую точность, не является руководством к действию. Не занимайтесь самолечением. Проконсультируйтесь со своим лечащим врачом.<br/>Руководство VashaSpina.ru не несет ответственности за использование размещенной на сайте информации.</noindex></p>
</footer>
	<?php wp_footer(); ?>
	<script>
	jQuery(document).ready(function($){
			$('.current-menu-item a').replaceWith(function() {
			var span = $.trim($(this).text());
			return '<span>' + span + '</span>';
		});
	});
	</script>
</body>
</html>