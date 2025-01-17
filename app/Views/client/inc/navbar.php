<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler text-light d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon d-flex align-items-center justify-content-center" style="font-size: 1.4em;"><i class="bi bi-list"></i></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (session('is_logged')) { ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=base_url().route_to('client_home')?>">Home</a>
                    </li>
                <?php } ?>
                <?php if (session('is_logged') && '["ROLE_ADMIN"]' == session('user')->role) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url().route_to('admin_panel_user_index')?>">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url().route_to('admin_panel_video_index')?>">Videos</a>
                    </li>
                <?php } ?>
                <?php if (session('is_logged')) { ?>
                    <li class="nav-item dropdown">
                        <div class="d-flex align-items-center">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?=session('user')->name?>
                            </a>
                            <ul class="dropdown-menu" style="left: -85px;">
                                <li><a class="dropdown-item" href="<?=base_url().route_to('client_profile')?>">Editar perfil</a></li>
                                <li><a class="dropdown-item" href="<?=base_url().route_to('logout')?>">Cerrar sesión</a></li>
                            </ul>
                            <div class="profile-img" style='background-image: url(<?=base_url().'/media/users/'.session('user')->image?>)'></div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>