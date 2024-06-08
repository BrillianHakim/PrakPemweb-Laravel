<div class="sidebar">
    <div class="logo-details">
      <i class="bx bx-category"></i>
      <span class="logo_name">HakiemDelivery</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="/pengiriman" class="{{ request()->Is('pengiriman*') ? 'active' : '' }}">
          <i class="bx bx-box"></i>
          <span class="links_name">Pengiriman</span>
        </a>
      </li>
      <li>
        <a href="/penerimaan" class="{{ request()->Is('penerimaan*') ? 'active' : '' }}">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">Penerimaan</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-log-out"></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  