<aside class="mt-10">
            <nav>
                <a href="<?=$base?>">
                    <div class="menu-item <?=$activeMenu =='home'?'active':'';?>">
                        <div class="menu-item-icon">
                            <img src="<?=$base?>/assets/images/home-run.png" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Home
                        </div>
                    </div>
                </a>
                <a href="<?=$base?>/perfil.php">
                    <div class="menu-item">
                        <div class="menu-item-icon<?=$activeMenu =='profile'?'active':'';?>">
                            <img src="assets/images/user.png" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Meu Perfil
                        </div>
                    </div>
                </a>
                <a href="<?=$base?>/amigos.php">
                    <div class="menu-item">
                        <div class="menu-item-icon<?=$activeMenu =='friends'?'active':'';?>">
                            <img src="<?=$base?>/assets/images/friends.png" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Amigos
                        </div>
                        <div class="menu-item-badge">
                            
                        </div>
                    </div>
                </a>
                <a href="<?=$base?>/fotos.php">
                    <div class="menu-item">
                        <div class="menu-item-icon<?=$activeMenu =='photos'?'active':'';?>">
                            <img src="<?=$base?>/assets/images/photo.png" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Fotos
                        </div>
                    </div>
                </a>
                <a href="<?=$base?>/config.php">
                     <div class="menu-splitter"></div>
                    <div class="menu-item">
                        <div class="menu-item-icon<?=$activeMenu =='config'?'active':'';?>">
                            <img src="<?=$base?>/assets/images/settings.png" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Configura????es                                
                        </div>
                        
                </a>
                
                
                <a href="<?=$base?>/logout.php">
                    <div class="menu-item">
                        <div class="menu-item-icon">
                            <img src="<?=$base?>/assets/images/power.png" width="16" height="16" />
                        </div>
                        <div class="menu-item-text">
                            Sair
                        </div>
                    </div>
                </a>
            </nav>
        </aside>