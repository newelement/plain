<?php $page_title = 'Blog' ?>
<?php include('header.php') ?>
            
            
            <section class="container section">
                <div class="row">
                    
                    <div class="span7">
                        
                        
                        <article class="blog-entry">
                            <header class="blog-header">
                                <h2 class="blog-title"><a href="#">Blog Title</a></h2>
                                <?php
                                $localDate = strtotime("2018-05-26 13:00:00");
                                date_default_timezone_set("UTC");
                                $utcDate = date("Y-d-mTG:i:sz", $localDate);
                                
                                $article_url = 'http://website.com/blog-title';
                                $article_title = 'Blog Title';
                                ?>
                                <p class="blog-date-author"><time pubdate="<?php echo $utcDate ?>">May 26th 2018</time> | <span class="blog-author">By Bob Dobalina</span></p>
                            </header>
                            <div class="blog-content">
                                <p>
                                Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur.
                                </p>
                                <p>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor &hellip;
                                </p>
                            </div>
                            <footer class="blog-footer">
                                <div class="read-more text-right">
                                    <a class="continue-reading-link" href="#">Continue Reading <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="shares">
                                    <div class="twitter-share" data-url="<?php echo $article_url ?>" data-title="<?php echo $article_title ?>"></div>
                                    <div class="facebook-share" data-url="<?php echo $article_url ?>" data-title="<?php echo $article_title ?>"></div>
                                    <div class="googleplus-share" data-url="<?php echo $article_url ?>" data-title="<?php echo $article_title ?>"></div>
                                    <div class="pinterest-share" data-url="<?php echo $article_url ?>" data-title="<?php echo $article_title ?>"></div>
                                </div>
                            </footer>
                        </article> <!-- END .blog-entry -->
                        
                        
                        
                        <article class="blog-entry">
                            <header class="blog-header">
                                <h2 class="blog-title"><a href="#">Blog Title 2</a></h2>
                                <?php
                                $localDate = strtotime("2018-05-26 13:00:00");
                                date_default_timezone_set("UTC");
                                $utcDate = date("Y-d-mTG:i:sz", $localDate);
                                ?>
                                <p class="blog-date-author"><time pubdate="<?php echo $utcDate ?>">May 26th 2018</time> | <span class="blog-author">By Bob Dobalina</span></p>
                            </header>
                            <div class="blog-content">
                                <p>
                                Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur.
                                </p>
                                <p>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor &hellip;
                                </p>
                            </div>
                            <footer class="blog-footer">
                                <div class="read-more text-right">
                                    <a class="continue-reading-link" href="#">Continue Reading <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="shares">
                                    <div class="twitter-share" data-url="<?php echo $article_url ?>" data-title="<?php echo $article_title ?>"></div>
                                    <div class="facebook-share" data-url="<?php echo $article_url ?>" data-title="<?php echo $article_title ?>"></div>
                                    <div class="googleplus-share" data-url="<?php echo $article_url ?>" data-title="<?php echo $article_title ?>"></div>
                                    <div class="pinterest-share" data-url="<?php echo $article_url ?>" data-title="<?php echo $article_title ?>"></div>
                                </div>
                            </footer>
                        </article> <!-- END .blog-entry -->
                        
                        
                        
                        
                    </div><!-- END .span7 -->
        
                    
                    <aside class="span4 pull-right sidebar">
                        <h3>My Sidebar</h3>
                        <p>
                        lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <img src="http://placehold.it/300x200" alt="placeholder" width="300" height="200" class="max-width">
                    </aside><!-- END .sidebar -->
                    
                </div> <!-- END .row -->
            </section><!-- // END .container.section -->
    
            
<?php include('footer.php'); ?>