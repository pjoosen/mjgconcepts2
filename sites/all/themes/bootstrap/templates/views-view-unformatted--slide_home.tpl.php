<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
 



?>
<div id="carousel-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
<div class="slide_caption">
	<div class="inner"></div>
</div>
  
  <ol class="carousel-indicators">
    <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
<div class="carousel-inner">
<?php foreach ($rows as $id => $row): 
//echo $view->render_field('field_description', $view->row_index);
?>
	
<div class="item<?php if ($id == 0) { print ' active'; } ?>"> <?php print $row; ?> </div>
<?php endforeach; ?>
</div>

  <!-- Controls -->
 <!-- <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>-->
</div>




<!--
<?php $view_id = str_replace('_', '-', $view->name . '-' . $view->current_display); ?>
<?php if (!empty($title)): ?>
<h3><?php print $title; ?></h3>
<?php endif; ?>
<div id="<?php print $view_id; ?>" class="carousel slide" data-ride="carousel">
<div class="slide_caption">
<?php foreach ($rows as $id => $row): 
	echo "<div class='slide_caption_item'>" .$view->render_field('field_description', $view->row_index) . "</div>";
 endforeach; ?>
	
</div>
-->
<!-- Indicators -->
<!--
<ol class="carousel-indicators">
<?php foreach ($rows as $id => $row): ?>
<li data-target="#<?php print $view_id; ?>" data-slide-to="<?php print $id; ?>"<?php if ($id == 0) { print ' class="active"'; } ?>></li>
<?php endforeach; ?>
</ol>-->
<!-- Wrapper for slides -->
<!--
<div class="carousel-inner">
<?php foreach ($rows as $id => $row): ?>
	
<div class="item<?php if ($id == 0) { print ' active'; } ?>"> <?php print $row; ?> </div>
<?php endforeach; ?>
</div>-->
<!-- Controls -->
<!--
<a class="left carousel-control" href="#<?php print $view_id; ?>" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
<a class="right carousel-control" href="#<?php print $view_id; ?>" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
</div>-->
