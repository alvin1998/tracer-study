<!DOCTYPE html>
<html lang="id">
    <head>
        <?= view('partials/meta') ?>
        <?php $this->renderSection('meta') ?>
        
        <?= view('partials/stylesheet') ?>
        <?php $this->renderSection('stylesheet') ?>
    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <div class="top-bar py-3 bg-light" id="home-section">
                <div class="container">
                    <div class="row">
                        <div class="col-6 text-left">
                            <ul class="social-media">
                                <li>
                                    <a href="#" class="p-2"><span class="icon-facebook"></span></a>
                                </li>
                                <li>
                                    <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                                </li>
                                <li>
                                    <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                                </li>
                                <li>
                                    <a href="#" class="p-2"><span class="icon-linkedin"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <p class="mb-0 float-right">
                                <span class="mr-3">
                                    <a href="tel://#"> <span class="icon-phone mr-2"></span><span class="d-none d-lg-inline-block">+1 234 5678 9101</span></a>
                                </span>
                                <span>
                                    <a href="#"><span class="icon-envelope mr-2"></span><span class="d-none d-lg-inline-block">info@yourdomain.com</span></a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?= view('partials/heder2') ?>
            <?php $this->renderSection('content') ?>
            <?= view('partials/footer') ?>
        </div>
        <?= view('partials/javascript') ?>
        <?php $this->renderSection('javascript') ?>
    </body>
</html>
