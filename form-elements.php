<?php
require_once 'config.php';
$page = 'formElements';
$page_title = 'Form Elements';
include_once 'includes/head.php';
?>
<body
  x-data="{ page: 'formElements', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
          <div x-data="{ pageName: 'Form Elements'}">
            <?php include_once 'includes/breadcrumb.php'; ?>
          </div>
          <!-- Breadcrumb End -->

          <?php include_once 'includes/form-elements-content.php'; ?>
        </div>
      </main>
      <!-- ===== Main Content End ===== -->
    </div>
  </div>
  <?php include_once 'includes/footer.php'; ?>
  
  <script>
      function dropdown() {
        return {
          options: [],
          selected: [],
          show: false,
          open() {
            this.show = true;
          },
          close() {
            this.show = false;
          },
          isOpen() {
            return this.show === true;
          },
          select(index, event) {
            if (!this.options[index].selected) {
              this.options[index].selected = true;
              this.options[index].element = event.target;
              this.selected.push(index);
            } else {
              this.selected.splice(this.selected.lastIndexOf(index), 1);
              this.options[index].selected = false;
            }
          },
          remove(index, option) {
            this.options[option].selected = false;
            this.selected.splice(index, 1);
          },
          loadOptions() {
            const options = document.getElementById("select").options;
            for (let i = 0; i < options.length; i++) {
              this.options.push({
                value: options[i].value,
                text: options[i].innerText,
                selected:
                  options[i].getAttribute("selected") != null
                    ? options[i].getAttribute("selected")
                    : false,
              });
            }
          },
          selectedValues() {
            return this.selected.map((option) => {
              return this.options[option].value;
            });
          },
        };
      }
    </script>
</body>
</html>
