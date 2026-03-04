<!-- Small Device Overlay -->
<div
  x-show="sidebarToggle"
  class="fixed inset-0 z-999 bg-black/50 lg:hidden"
  @click="sidebarToggle = false"
  x-transition:enter="transition ease-out duration-300"
  x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in duration-300"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
></div>
