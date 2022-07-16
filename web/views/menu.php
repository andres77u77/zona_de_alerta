<ul class="menu-inner py-1">
            <!-- Dashboard -->

  <li class="menu-item <?php if(NOMBRE_MENU == 'index.php'){echo 'active';} ?>">
    <a href="index.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Dashboard</div>
    </a>
  </li>

  <!-- Layouts -->
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-layout"></i>
      <div data-i18n="Layouts">Usuarios</div>
    </a>

    <ul class="menu-sub">
      <li class="menu-item <?php if(NOMBRE_MENU == 'Gestionar_Usuarios.php'){echo 'active';} ?>">
        <a href="Gestionar_Usuarios.php" class="menu-link">
          <div data-i18n="Without menu">Gestionar Usuarios</div>
        </a>
      </li>
      <li class="menu-item <?php if(NOMBRE_MENU == 'Gestionar_Notificaciones.php'){echo 'active';} ?>" style="display: none;">
        <a href="Gestionar_Notificaciones.php" class="menu-link">
          <div data-i18n="Without menu">Configurar Notificaciones</div>
        </a>
       </li>
    </ul>
  </li>

  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Zona de Alerta</span>
  </li>
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-dock-top"></i>
      <div data-i18n="Account Settings">Temperatura</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item" style="display:none;">
        <a href="#" class="menu-link">
          <div data-i18n="Account">Control</div>
        </a>
      </li>
      <li class="menu-item" style="display:none;">
        <a href="#" class="menu-link">
          <div data-i18n="Notifications">Reportes</div>
        </a>
      </li>
      <li class="menu-item  <?php if(NOMBRE_MENU == 'Notificaciones_Temp.php'){echo 'active';} ?>">
        <a href="Notificaciones_Temp.php" class="menu-link">
          <div data-i18n="Connections">Alertas</div>
        </a>
      </li>
    </ul>
  </li>
  <li class="menu-item" style="display:none;">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
      <div data-i18n="Authentications">Deteccion</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item">
        <a href="#" class="menu-link" target="_blank">
          <div data-i18n="Basic">Control</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-link" target="_blank">
          <div data-i18n="Basic">Reportes</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-link" target="_blank">
          <div data-i18n="Basic">Notificaciones</div>
        </a>
      </li>
    </ul>
  </li>
</ul>