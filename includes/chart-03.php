<div
  class="rounded-2xl border border-gray-200 bg-white px-5 pt-5 pb-5 sm:px-6 sm:pt-6 dark:border-gray-800 dark:bg-white/[0.03]"
>
  <div class="mb-6 flex flex-col gap-5 sm:flex-row sm:justify-between">
    <div class="flex items-center justify-between w-full">
      <div class="w-full">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
          Statistics
        </h3>
        <p class="mt-1 text-theme-sm text-gray-500 dark:text-gray-400">
          Target you’ve set for each month
        </p>
      </div>
      <div x-data="{openDropDown: false}" class="relative h-fit">
        <button
          @click="openDropDown = !openDropDown"
          :class="openDropDown ? 'text-gray-700 dark:text-white' : 'text-gray-400 hover:text-gray-700 dark:hover:text-white'"
        >
          <svg
            class="fill-current"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M10.2441 6C10.2441 5.0335 11.0276 4.25 11.9941 4.25H12.0041C12.9706 4.25 13.7541 5.0335 13.7541 6C13.7541 6.9665 12.9706 7.75 12.0041 7.75H11.9941C11.0276 7.75 10.2441 6.9665 10.2441 6ZM10.2441 18C10.2441 17.0335 11.0276 16.25 11.9941 16.25H12.0041C12.9706 16.25 13.7541 17.0335 13.7541 18C13.7541 18.9665 12.9706 19.75 12.0041 19.75H11.9941C11.0276 19.75 10.2441 18.9665 10.2441 18ZM11.9941 10.25C11.0276 10.25 10.2441 11.0335 10.2441 12C10.2441 12.9665 11.0276 13.75 11.9941 13.75H12.0041C12.9706 13.75 13.7541 12.9665 13.7541 12C13.7541 11.0335 12.9706 10.25 12.0041 10.25H11.9941Z"
              fill=""
            />
          </svg>
        </button>
        <div
          x-show="openDropDown"
          @click.outside="openDropDown = false"
          class="absolute right-0 top-full z-40 w-40 space-y-1 rounded-2xl border border-gray-200 bg-white p-2 shadow-theme-lg dark:border-gray-800 dark:bg-gray-dark"
        >
          <button
            class="flex w-full rounded-lg px-3 py-2 text-left text-theme-xs font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300"
          >
            View More
          </button>
          <button
            class="flex w-full rounded-lg px-3 py-2 text-left text-theme-xs font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300"
          >
            Delete
          </button>
        </div>
      </div>
    </div>

    <div class="flex w-full items-start gap-3 sm:justify-end">
      <div
        x-data="{selected: 'overview'}"
        class="inline-flex w-fit items-center gap-0.5 rounded-lg bg-gray-100 p-0.5 dark:bg-gray-900"
      >
        <button
          @click="selected = 'overview'"
          :class="selected === 'overview' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
          class="text-theme-sm rounded-md px-3 py-2 font-medium hover:text-gray-900 dark:hover:text-white"
        >
          Overview
        </button>
        <button
          @click="selected = 'sales'"
          :class="selected === 'sales' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
          class="text-theme-sm rounded-md px-3 py-2 font-medium hover:text-gray-900 dark:hover:text-white"
        >
          Sales
        </button>
        <button
          @click="selected = 'revenue'"
          :class="selected === 'revenue' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
          class="text-theme-sm rounded-md px-3 py-2 font-medium hover:text-gray-900 dark:hover:text-white"
        >
          Revenue
        </button>
      </div>
    </div>
  </div>
  <div class="custom-scrollbar max-w-full overflow-x-auto">
    <div id="chartThree" class="-ml-4 min-w-[700px] pl-2"></div>
  </div>
</div>
