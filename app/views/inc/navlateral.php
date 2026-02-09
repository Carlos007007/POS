<!-- NavLateral -->
<section class="full-width navLateral scroll" id="navLateral">
    <div class="full-width navLateral-body">
        <div class="full-width navLateral-body-logo has-text-centered tittles is-uppercase">
            Sistema de ventas 
        </div>
        <figure class="full-width" style="height: 77px;">
            <div class="navLateral-body-cl">
                <img class="is-rounded img-responsive" src="<?php echo APP_URL; ?>app/views/fotos/default.png">
            </div>
            <figcaption class="navLateral-body-cr pt-3">
                <span>
                    Nombre de usuario<br>
                    <small>(Cargo)</small>
                </span>
            </figcaption>
        </figure>
        <div class="full-width tittles navLateral-body-tittle-menu has-text-centered is-uppercase">
            <i class="fas fa-th-large fa-fw"></i> &nbsp; SISTEMA DE VENTAS
        </div>
        <nav class="full-width">
            <ul class="full-width list-unstyle menu-principal">

                <li class="full-width">
                    <a href="<?php echo APP_URL; ?>dashboard/" class="full-width">
                        <div class="navLateral-body-cl">
                            <i class="fab fa-dashcube fa-fw"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            Inicio
                        </div>
                    </a>
                </li>

                <li class="full-width divider-menu-h"></li>

                <li class="full-width">
                    <a href="#" class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="fas fa-cash-register fa-fw"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            CAJAS
                        </div>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-cash-register fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Nueva caja
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-clipboard-list fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Lista de cajas
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="full-width divider-menu-h"></li>

                <li class="full-width">
                    <a href="#" class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="fas fa-users fa-fw"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            USUARIOS
                        </div>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a href="<?php echo APP_URL; ?>userNew/" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-cash-register fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Nuevo usuario
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="<?php echo APP_URL; ?>userList/" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-clipboard-list fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Lista de usuarios
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="full-width divider-menu-h"></li>

                <li class="full-width">
                    <a href="#" class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="fas fa-address-book fa-fw"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            CLIENTES
                        </div>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-male fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Nuevo cliente
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-clipboard-list fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Lista de clientes
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="full-width divider-menu-h"></li>

                <li class="full-width">
                    <a href="#" class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="fas fa-tags fa-fw"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            CATEGORIAS
                        </div>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-tag fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Nueva categoría
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-clipboard-list fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Lista de categorías
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="full-width divider-menu-h"></li>

                <li class="full-width">
                    <a href="#" class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="fas fa-cubes fa-fw"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            PRODUCTOS
                        </div>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-box fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Nuevo producto
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-clipboard-list fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Lista de productos
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-boxes fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Productos por categoría
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="full-width divider-menu-h"></li>

                <li class="full-width">
                    <a href="#" class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="fas fa-shopping-cart fa-fw"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            VENTAS
                        </div>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-cart-plus fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Nueva venta
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-clipboard-list fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Lista de ventas
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="full-width divider-menu-h"></li>

                <li class="full-width">
                    <a href="#" class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="far fa-file-pdf fa-fw"></i> 
                        </div>
                        <div class="navLateral-body-cr">
                            REPORTES
                        </div>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-hand-holding-usd fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Reporte general de ventas
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-box-open fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Reporte general de inventario
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="full-width divider-menu-h"></li>

                <li class="full-width">
                    <a href="#" class="full-width btn-subMenu">
                        <div class="navLateral-body-cl">
                            <i class="fas fa-cogs fa-fw"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            CONFIGURACIONES
                        </div>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                    <ul class="full-width menu-principal sub-menu-options">
                        <li class="full-width">
                            <a href="#" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-store-alt fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Datos de empresa
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="<?php echo APP_URL; ?>userUpdate/" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-user-tie fa-fw"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Mi cuenta
                                </div>
                            </a>
                        </li>
                        <li class="full-width">
                            <a href="<?php echo APP_URL; ?>userPhoto/" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-camera"></i>
                                </div>
                                <div class="navLateral-body-cr">
                                    Mi foto
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="full-width divider-menu-h"></li>

                <li class="full-width mt-5">
                    <a href="#" class="full-width btn-exit" >
                        <div class="navLateral-body-cl">
                            <i class="fas fa-power-off"></i>
                        </div>
                        <div class="navLateral-body-cr">
                            Cerrar sesión
                        </div>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</section> <!-- Fin NavLateral -->