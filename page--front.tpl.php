<div class="row" id="top">
    <div id="logo" class="col-md-2">Zoo <img src="<?php print base_path() . path_to_theme(); ?>/images/logo.png" alt="Zoo Zolder"> Zolder</div>
    <div id="middentop" class="col-md-5">
                   <div class="navbar navbar-inverse" id="menu">
                      <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      </div>
                      
                      <div id="knoppenbalk" class="collapse navbar-collapse">
                        <?php if ($page['menu']): ?>
						<?php print render($page['menu']); ?>
                        <?php endif; ?>
                      </div>    
                  </div>
    </div><!-- end middentop -->
  <div id="zoekfunctie" class="col-md-3"><?php if ($page['zoek']): ?>
<?php print render($page['zoek']); ?>
<?php endif; ?>
</div>
  <div id="bestezoo" class="col-md-2">beste zoo</div>
</div>
<div id="slideshow" class="row">
	<div id="innerslideshow" class="col-md-12">
    	<div id="taal"><?php if ($page['taal']): ?>
<?php print render($page['taal']); ?>
<?php endif; ?>
</div>
    </div>
<div class="col-md-4 icoon" id="icoonlinks"><img src="<?php print base_path() . path_to_theme(); ?>/images/ontdek.png"></div>
<div class="col-md-4 icoon" id="icoonmidden"><img src="<?php print base_path() . path_to_theme(); ?>/images/plan.png"></div>
<div class="col-md-4 icoon" id="icoonrechts"><img src="<?php print base_path() . path_to_theme(); ?>/images/koop.png"></div>
</div>

<div class="container" id="wereld">
    <div class="row" id="inhoud">
        <div id="links" class="col-md-4"><?php if ($page['links']): ?>
<?php print render($page['links']); ?>
<?php endif; ?>
</div>
        <div id="midden" class="col-md-4"><?php if ($page['midden']): ?>
<?php print render($page['midden']); ?>
<?php endif; ?>
</div>
        <div id="rechts" class="col-md-4"><?php if ($page['rechts']): ?>
<?php print render($page['rechts']); ?>
<?php endif; ?>
</div></div></div>
<div class="container">
    <div class="row" id="fotos">
    	<div class="dier"><img src="<?php print base_path() . path_to_theme(); ?>/images/apen.png"></div>
        <div class="dier"><img src="<?php print base_path() . path_to_theme(); ?>/images/leeuwen.png"></div>
        <div class="dier"><img src="<?php print base_path() . path_to_theme(); ?>/images/luipaarden.png"></div>
        <div class="dier"><img src="<?php print base_path() . path_to_theme(); ?>/images/wasdieren.png"></div>
        <div class="dier"><img src="<?php print base_path() . path_to_theme(); ?>/images/nijlpaarden.png"></div>
        <div class="dier"><img src="<?php print base_path() . path_to_theme(); ?>/images/wolven.png"></div>
        <div class="dier"><img src="<?php print base_path() . path_to_theme(); ?>/images/vogels.png"></div>
        <div class="dier"><img src="<?php print base_path() . path_to_theme(); ?>/images/viesbeest.png"></div>
	</div>
</div>

<div class="container">
    <div class="row" id="oranje">
    	<div class="col-md-4"><img src="<?php print base_path() . path_to_theme(); ?>/images/icoon-links.png"></div>
        <div class="col-md-4"><img src="<?php print base_path() . path_to_theme(); ?>/images/icoon-midden.png"></div>
        <div class="col-md-4"><img src="<?php print base_path() . path_to_theme(); ?>/images/icoon-rechts.png"></div>
        <div class="col-md-12"><img src="<?php print base_path() . path_to_theme(); ?>/images/boek-nu-ticket.png"></div>
	</div>
</div>
<div class="container">
    <div class="row" id="footer">
        <div id="voet1" class="col-md-4"><?php if ($page['voet1']): ?>
<?php print render($page['voet1']); ?>
<?php endif; ?>
</div>
        <div id="voet2" class="col-md-4"><?php if ($page['voet2']): ?>
<?php print render($page['voet2']); ?>
<?php endif; ?>
</div>
        <div id="voet3" class="col-md-4"><?php if ($page['voet3']): ?>
<?php print render($page['voet3']); ?>
<?php endif; ?>
</div>
    </div>
</div>