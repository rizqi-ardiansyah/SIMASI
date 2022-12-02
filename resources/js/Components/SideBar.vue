<template>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <inertia-link :href="route('admin.dashboard.index')" class="brand-link">
      <img
<<<<<<< HEAD
        :src="'../images/TechNisiLogo.png'"
        alt="TechNisi Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: 0.8"
      />
      <span class="brand-text font-weight-light">TechNisi</span>
=======
        :src="'../images/logoSimasi.png'"
        alt="SIMASI"
        class="brand-image img-circle elevation-3"
        style="opacity: 0.8"
      />
      <span class="brand-text font-weight-light">SIMASI</span>
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
    </inertia-link>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img
            :src="'../images/man.png'"
            class="img-circle elevation-2"
            alt="User Image"
          />
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ $page.props.user.name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <inertia-link
              :href="route('admin.dashboard.index')"
              class="nav-link"
              :class="route().current('admin.dashboard.*') ? 'active' : ' '"
            >
              <i class="nav-icon fas fa-tachometer-alt"></i>
<<<<<<< HEAD
              <p>Dashboard</p>
=======
              <p>Beranda</p>
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
            </inertia-link>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
<<<<<<< HEAD
                Tables
=======
                Fitur
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
<<<<<<< HEAD
              <li class="nav-item" v-if="$page.props.auth.hasRole.superAdmin || $page.props.auth.hasRole.admin">
=======
              <!-- <li class="nav-item" v-if="$page.props.auth.hasRole.admin">
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
                <inertia-link
                  :href="route('admin.admins.index')"
                  class="nav-link"
                  :class="route().current('admin.admins.*') ? 'active' : ' '"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admins</p>
                </inertia-link>
<<<<<<< HEAD
              </li>
              <li
                class="nav-item"
                v-if="
                  $page.props.auth.hasRole.superAdmin || $page.props.auth.hasRole.admin || $page.props.auth.hasRole.user"
=======
              </li> -->
              <li
                class="nav-item"
                v-if="
                  $page.props.auth.hasRole.admin"
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
                 >
                <inertia-link
                  :href="route('admin.users.index')"
                  class="nav-link"
                  :class="route().current('admin.users.*') ? 'active' : ' '"
                >
                  <i class="far fa-circle nav-icon"></i>
<<<<<<< HEAD
                  <p>Users</p>
                </inertia-link>
              </li>
              <li class="nav-item" v-if="$page.props.auth.hasRole.superAdmin || $page.props.auth.hasRole.admin">
=======
                  <p>Admin</p>
                </inertia-link>
              </li>
              <li
                class="nav-item"
                v-if="
                  $page.props.auth.hasRole.admin || $page.props.auth.hasRole.user"
                 >
                <inertia-link
                  :href="route('admin.pengungsi.index')"
                  class="nav-link"
                  :class="route().current('admin.pengungsi.*') ? 'active' : ' '"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengungsi</p>
                </inertia-link>
              </li>
              <li
                class="nav-item"
                v-if="
                  $page.props.auth.hasRole.admin || $page.props.auth.hasRole.user"
                 >
                <inertia-link
                  :href="route('admin.backup.index')"
                  class="nav-link"
                  :class="route().current('admin.backup.*') ? 'active' : ' '"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cadang & pulihkan</p>
                </inertia-link>
              </li>
              <li
                class="nav-item"
                v-if="
                  $page.props.auth.hasRole.admin || $page.props.auth.hasRole.user"
                 >
                <inertia-link
                  :href="route('admin.laporan.index')"
                  class="nav-link"
                  :class="route().current('admin.laporan.*') ? 'active' : ' '"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan</p>
                </inertia-link>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Pengaturan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" v-if="$page.props.auth.hasRole.admin">
                <inertia-link
                  :href="route('admin.bencana.index')"
                  class="nav-link"
                  :class="route().current('admin.bencana.*') ? 'active' : ' '"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Atur bencana</p>
                </inertia-link>
              </li>
              <li class="nav-item" v-if="$page.props.auth.hasRole.admin">
                <inertia-link
                  :href="route('admin.posko.index')"
                  class="nav-link"
                  :class="route().current('admin.posko.*') ? 'active' : ' '"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Atur posko</p>
                </inertia-link>
              </li>
              <li class="nav-item" v-if="$page.props.auth.hasRole.admin">
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
                <inertia-link
                  :href="route('admin.roles.index')"
                  class="nav-link"
                  :class="route().current('admin.roles.*') ? 'active' : ' '"
                >
                  <i class="far fa-circle nav-icon"></i>
<<<<<<< HEAD
                  <p>Roles</p>
                </inertia-link>
              </li>
              <li class="nav-item" v-if="$page.props.auth.hasRole.superAdmin || $page.props.auth.hasRole.admin">
=======
                  <p>Atur peran</p>
                </inertia-link>
              </li>
              <li class="nav-item" v-if="$page.props.auth.hasRole.admin">
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
                <inertia-link
                  :href="route('admin.permissions.index')"
                  class="nav-link"
                  :class="
                    route().current('admin.permissions.*') ? 'active' : ' '
                  "
                >
                  <i class="far fa-circle nav-icon"></i>
<<<<<<< HEAD
                  <p>Permissions</p>
=======
                  <p>Atur akses</p>
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
                </inertia-link>
              </li>
            </ul>
          </li>
<<<<<<< HEAD
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <inertia-link :href="route('dashboard')" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Site</p>
=======
          <li class="nav-header">Lainnya</li>
          <li class="nav-item">
            <inertia-link :href="route('dashboard')" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Jetstream</p>
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
            </inertia-link>
          </li>
          <!-- <li class="nav-item">
            <form @submit.prevent="logout">
             <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
            </form>
          </li> -->
          <li class="nav-item">
            <form @submit.prevent="logout">
              <button type="submit" class="nav-button">
                <i class="nav-icon fas fa-sign-out-alt"></i>
<<<<<<< HEAD
                <p>Logout</p>
=======
                <p>Keluar</p>
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
              </button>
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</template>
<script>
export default {
  methods: {
    logout() {
      this.$inertia.post(route("logout"));
    },
  },
};
</script>
