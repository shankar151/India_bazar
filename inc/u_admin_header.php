<?php
		$user_name = $_SESSION['user_name'];
?><header class="dashboard-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="dashboard-header-mian">
                                    <div class="author-registration-area">
                                        <div class="dropdown registration">
                                            <div class="user-thumb">
                                                <img src="assets/images/testimonials/1.png" alt="img">
                                            </div>
                                            <button class="dropdown-toggle" type="button" id="authorButton" >Hi <span><?php echo $user_name; ?></span></button>
                                        </div>
                                    </div><!-- /.author-registration-area -->

                                    <div class="user-tools-right">
                                        <div class="currency-area">
                                            <div class="dropdown currency">
                                                <button class="dropdown-toggle" type="button" id="currencyButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD</button>
                                                <div class="dropdown-menu" aria-labelledby="currencyButton">
                                                    <a href="#">USD</a>
                                                    <a href="#">Euro</a>
                                                </div>
                                            </div>
                                        </div><!-- /.currency-area -->
                                        <div class="language-area">
                                            <div class="dropdown language">
                                                <button class="dropdown-toggle" type="button" id="languageButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English</button>
                                                <div class="dropdown-menu" aria-labelledby="languageButton">
                                                    <a href="#">Arabic</a>
                                                    <a href="#">France</a>
                                                    <a href="#">English</a>
                                                </div>
                                            </div>
                                        </div><!-- /.language-area -->
                                        <div class="add-listing-area">
                                            <a class="btn btn-default btn-black" href="dashboard-add-listing.php">add listing <span class="fas fa-caret-right"></span></a>
                                        </div><!--~./ add-listing-area ~-->
                                    </div><!--~~./ user-tools-right ~~-->
                                </div>
                            </div>
                        </div>
                    </div>
                </header>