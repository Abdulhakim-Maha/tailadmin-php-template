<?php
require_once 'config.php';
$page = 'alerts';
$page_title = 'Alerts';
include_once 'includes/head.php';
?>
<body
  x-data="{ page: 'alerts', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
  x-init="
       darkMode = JSON.parse(localStorage.getItem('darkMode'));
       $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
  :class="{'dark bg-gray-900': darkMode === true}"
>
  <?php include_once 'includes/preloader.php'; ?>

  <!-- ===== Page Wrapper Start ===== -->
  <div class="flex h-screen overflow-hidden">
    <!-- ===== Sidebar Start ===== -->
    <?php include_once 'includes/sidebar.php'; ?>
    <!-- ===== Sidebar End ===== -->

    <!-- ===== Content Area Start ===== -->
    <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
      <?php include_once 'includes/overlay.php'; ?>

      <!-- ===== Header Start ===== -->
      <?php include_once 'includes/header.php'; ?>
      <!-- ===== Header End ===== -->

      <!-- ===== Main Content Start ===== -->
      <main>
        <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
          <!-- Breadcrumb Start -->
          <div x-data="{ pageName: 'Alerts'}">
            <?php include_once 'includes/breadcrumb.php'; ?>
          </div>
          <!-- Breadcrumb End -->

          <div class="space-y-5 sm:space-y-6">
            <?php include_once 'includes/alerts-content.php'; ?>
          </div>
        </div>
      </main>
      <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
  </div>
  <!-- ===== Page Wrapper End ===== -->
  <?php include_once 'includes/footer.php'; ?>
</body>
</html>
