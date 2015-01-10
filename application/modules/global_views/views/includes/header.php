<nav class="navbar navbar-fixed-top">
	<div class="container">
        <ul class="nav nav-tabs">
            <?php echo $active1;?>
            <li class="apply-top-button">
            	<a data-toggle="modal" data-target="#myModal" href="javascript:;">
            		<i class="fa fa-check"></i>
                	Apply Online
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="container second-nav">
	<section class="logo-content">
    	<div>
        	<a href="<?php echo base_url();?>">
            	<img class="image-responsive" src="assets/css/images/ecalogo.png"/>
            </a>
        	<img class="image-responsive" src="assets/css/images/partner_logo.png"/>
        </div>
    </section>
    <section class="second-nav-content">
    	<ul class="nav nav-tabs">
            <?php echo $active2;?>
        </ul>	
    </section>
</div>