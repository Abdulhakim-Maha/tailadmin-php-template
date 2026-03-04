<?php
require_once 'config.php';
$page = 'calendar';
$page_title = 'Calendar';
include_once 'includes/head.php';
?>
<body
  x-data="{ page: 'calendar', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
      <?php include_once 'includes/overlay.php'; ?>
      
      <!-- ===== Header Start ===== -->
      <?php include_once 'includes/header.php'; ?>
      <!-- ===== Header End ===== -->

      <!-- ===== Main Content Start ===== -->
      <main>
        <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
          <!-- Breadcrumb Start -->
          <div x-data="{ pageName: 'Calendar'}">
            <?php include_once 'includes/breadcrumb.php'; ?>
          </div>
          <!-- Breadcrumb End -->

          <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
            <div id="calendar" class="min-h-screen"></div>
          </div>

          <!-- BEGIN MODAL -->
          <?php include_once 'includes/calendar-event-modal.php'; ?>
          <!-- END MODAL -->
        </div>
      </main>
      <!-- ===== Main Content End ===== -->
    </div>
  </div>
  <?php include_once 'includes/footer.php'; ?>
