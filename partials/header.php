<!-- Header -->
<div class="container">
    <div class="header row">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <?php if (!empty($site_name)): ?>
                        <h1 id="site-name">
                          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
                        </h1>
                    <?php endif; ?>
                    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
                        <div class="nav-collapse collapse">
                          <!-- <nav role="navigation"> -->
                            <?php if (!empty($primary_nav)): ?>
                              <?php print render($primary_nav); ?>
                            <?php endif; ?>
                            <?php if (!empty($page['navigation'])): ?>
                              <?php print render($page['navigation']); ?>
                            <?php endif; ?>
                            <?php if (!empty($secondary_nav)): ?>
                              <?php print render($secondary_nav); ?>
                            <?php endif; ?>
                          <!-- </nav> -->
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
