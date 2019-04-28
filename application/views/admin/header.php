<header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <a href="<?= base_url();?>account/dashboard" class="btn btn-default btn-image dropdown-toggle" >
                                 Dashboard
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              Products
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/produc-list">
                                        <!--<i class="si si-envelope-open pull-right"></i>-->
                                       All Products
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/product-add">
<!--                                        <i class="si si-user pull-right"></i>-->
                                       Create Product
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              Category
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/category">
                                        <!--<i class="si si-envelope-open pull-right"></i>-->
                                       All Category
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/category-add">
<!--                                        <i class="si si-user pull-right"></i>-->
                                       Create Category
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              Color
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/color">
                                        <!--<i class="si si-envelope-open pull-right"></i>-->
                                       All Color
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/color-add">
<!--                                        <i class="si si-user pull-right"></i>-->
                                       Create Color
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              Size
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/size">
                                        <!--<i class="si si-envelope-open pull-right"></i>-->
                                       All Size
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/size-add">
<!--                                        <i class="si si-user pull-right"></i>-->
                                       Create Size
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              Customer
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/customer-list">
                                        Customer List       
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              Sales
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/sale-list">
                                       All Sales
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?= base_url();?>account/sale-list-shipped">
                                    Shipped Sales
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                   <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                             Slider
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?=base_url();?>account/list-slider">
                                        All Slider
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=base_url();?>account/add-slider">
                                          Add Slider
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
                <ul class="nav-header pull-left">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                             Admin Register
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="<?=base_url();?>account/admin-list">
                                       Admin List
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?=base_url();?>account/new-admin">
                                          Admin Add
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
             
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                              <img alt="Avatar" src="<?php echo base_url(); ?>assets/img/avatars/avatar10.jpg">
                                    Hi, <?php echo $this->session->email; ?> &nbsp;
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                       <a href="<?php echo site_url('admin/login_controllers/logout'); ?>">
                                        <i class="si si-logout pull-right"></i>Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </header>