<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <b>
                    <?php echo $this->Html->image('http://via.placeholder.com/350x100', array('alt' => 'home', 'class' => 'img-responsive')); ?>
                </b>
            </a>
        </div>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <li class="nav-item">
                    <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)">
                        <i class="mdi mdi-menu"></i>
                    </a>
                </li>

                <li class="nav-item m-l-10">
                    <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)">
                        <i class="ti-menu"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark " href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-power-off text-white"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li role="separator" class="divider"></li>
                            <li>
                                <?php
                                    echo $this->Html->link(
                                        '<i class="fa fa-power-off"></i> Logout',
                                        array (
                                            'controller' => 'users',
                                            'action' => 'logout',
                                        ),
                                        array(
                                            'escape' => false
                                        )
                                    );
                                ?>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
