<?php
require_once 'config.php';
$page = 'barChart';
$page_title = 'Bar Chart';
include_once 'includes/head.php';
?>
<body
  x-data="{ page: 'barChart', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
          <div x-data="{ pageName: 'Bar Chart'}">
            <?php include_once 'includes/breadcrumb.php'; ?>
          </div>
          <!-- Breadcrumb End -->

          <div class="space-y-6">
            <div class="bg-white border border-gray-200 rounded-2xl dark:border-gray-800 dark:bg-white/[0.03]">
              <div class="px-6 py-5">
                <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                  Bar Chart 1
                </h3>
              </div>
              <div class="p-5 border-t border-gray-100 dark:border-gray-800 sm:p-6">
                <!-- ====== Bar Chart One Start -->
                <div class="max-w-full overflow-x-auto custom-scrollbar">
                  <div id="chartOne" class="min-w-[1000px]"></div>
                </div>
                <!-- ====== Bar Chart One End -->
              </div>
            </div>
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
