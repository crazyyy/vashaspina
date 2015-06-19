<?php /* Template Name: Home Page */ get_header(); ?>
    <div class="search-wrap">
        <b>Выберите <span>Раздел</span> либо воспользуйтесь <span>Поиском</span></b>
		<form role="search" method="get" class="search" action="<?php bloginfo('url'); ?>/">
            <input type="text" name="s" value="Введите ключевое слово" onfocus="if (this.value=='Введите ключевое слово') {this.value='';}" onblur="if (this.value=='') {this.value='Введите ключевое слово';}" />
            <input type="submit" value="Найти">
        </form>
    </div><!-- search-wrap -->
	
	<ul class="listCats">
		<li><a href="#" title="">Артроз и периартроз</a></li>
		<li><a href="#" title="">Боли</a></li>
		<li><a href="#" title="">Грыжа позвоночника</a></li>
		<li><a href="#" title="">Дорсопатия</a></li>
		<li><a href="#" title="">Другие заболевания</a></li>
		<li><a href="#" title="">Заболевания спинного мозга</a></li>
		<li><a href="#" title="">Заболевания суставов</a></li>
		<li><a href="#" title="">Кифоз</a></li>
		<li><a href="#" title="">Миозит</a></li>
		<li><a href="#" title="">Невралгия</a></li>
		<li><a href="#" title="">Опухоли позвоночника</a></li>
		<li><a href="#" title="">Остеоартроз</a></li>
		<li><a href="#" title="">Остеопороз</a></li>
		<li><a href="#" title="">Остеохондроз</a></li>
		<li><a href="#" title="">Протрузия</a></li>
		<li><a href="#" title="">Радикулит</a></li>
		<li><a href="#" title="">Синдромы</a></li>
		<li><a href="#" title="">Сколиоз</a></li>
		<li><a href="#" title="">Спондилез</a></li>
		<li><a href="#" title="">Спондилолистез</a></li>
		<li><a href="#" title="">Травмы позвоночника</a></li>
		<li><a href="#" title="">Упражнения для спины</a></li>
	</ul><!-- listCats -->

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="singlePost">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div><!-- singlePost -->
	<?php endwhile; ?><?php else: ?>
	<div class="singlePost">
		<h1 class="title"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
	</div><!-- singlePost -->
	<?php endif; ?>
	
</div><!-- content -->
<?php get_footer(); ?>