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
    </div>
  <div id="zoekfunctie" class="col-md-3"><?php if ($page['zoek']): ?>
<?php print render($page['zoek']); ?>
<?php endif; ?>
</div>
  <div id="bestezoo" class="col-md-2"><img src="<?php print base_path() . path_to_theme(); ?>/images/2014.png" alt="beste zoo" ></div>
</div>

<div class="container" id="wereld">
    <div class="row" id="inhoud">
  
<?php if ($page['zijbalk']) { ?>      
<div id="links" class="col-md-9">
<?php } else { ?>
<div id="links" class="col-md-12">
<?php } ?>
 
        
        <a id="main-content"></a>          
        <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>           <?php print render($title_prefix); ?>           
        <?php if ($title): ?>            
        <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>           <?php endif; ?>           
        <?php print render($title_suffix); ?>          
         <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>           <?php print render($tabs2); ?>           
        <?php print $messages; ?>           
        <?php print render($page['help']); ?>           
        <?php if ($action_links): ?><ul class="action-links">
        <?php print render($action_links); ?></ul>
        <?php endif; ?>           
        <div class="clearfix">            
        <?php print render($page['content']); ?></div>

</div>

	<?php if ($page['zijbalk']): ?>
<div id="rechts" class="col-md-3">
    <?php print render($page['zijbalk']); ?>
</div>
    <?php endif; ?>


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

