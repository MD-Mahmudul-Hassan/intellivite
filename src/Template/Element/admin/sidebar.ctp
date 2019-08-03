        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="http://via.placeholder.com/20x20" alt="user" />
                        <!-- this is blinking heartbit-->
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5>Markarn Doe</h5>

                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">SITE OPTIONS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-human-male"></i><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <?php echo $this->Html->link('List All Users', array(
                                        'controller' => 'users',
                                        'action' => 'index'
                                            )
                                        );
                                    ?>
                                </li>
                                <li><a href="#">Add New User</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-link"></i><span class="hide-menu">Menus</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <?php echo $this->Html->link('List All Menu', array(
                                        'controller' => 'menus',
                                        'action' => 'index'
                                            )
                                        );
                                    ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('Add New Menu', array(
                                        'controller' => 'menus',
                                        'action' => 'add'
                                            )
                                        );
                                    ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('Upload Logo', array(
                                        'controller' => 'logos',
                                        'action' => 'add'
                                            )
                                        );
                                    ?>
                                </li>
                            </ul>
                        </li>
                        <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-hospital"></i><span class="hide-menu">Supplement Types</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <?php echo $this->Html->link('List All Supplement Types', array(
                                        'controller' => 'supplement_types',
                                        'action' => 'index'
                                            )
                                        );
                                    ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('Add New Supplement Type', array(
                                        'controller' => 'supplement_types',
                                        'action' => 'add'
                                            )
                                        );
                                    ?>
                                </li>
                            </ul>
                        </li>
                        <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-water"></i><span class="hide-menu">Supplements</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <?php echo $this->Html->link('List All Supplements', array(
                                        'controller' => 'supplements',
                                        'action' => 'index'
                                            )
                                        );
                                    ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('Add New Supplement', array(
                                        'controller' => 'supplements',
                                        'action' => 'add'
                                            )
                                        );
                                    ?>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-page-variant"></i><span class="hide-menu">Pages</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">List All Pages</a></li>
                                <li><a href="#">Add New Page</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                        <li><a href="#">item 1.3.2</a></li>
                                        <li><a href="#">item 1.3.3</a></li>
                                        <li><a href="#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
