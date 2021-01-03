<div class="w-64 min-h-screen bg-red-500 text-white">
  <div class="logo">
    <span class="fad fa-user-cowboy text-5xl pl-2 pr-1 py-5"></span>
    <span class="text-4xl font-vag">Application</span>
  </div>
  <ul class="font-vag text-2xl mt-4">
    <li
      class="hover:bg-red-600 transition duration-300 ease-in-out {{ request()->path() == 'employee' ? 'bg-red-700' : '' }}">
      <a href="/employee" class="w-full inline-block pl-4 py-2">Employee</a>
    </li>
    <li class="hover:bg-red-600 transition duration-300 ease-in-out">
      <a href="#" class="w-full inline-block pl-4 py-2">Transmittal</a>
    </li>
    <li class="hover:bg-red-600 transition duration-300 ease-in-out">
      <a href="#" class="w-full inline-block pl-4 py-2">Charging</a>
    </li>
    <li class="hover:bg-red-600 transition duration-300 ease-in-out">
      <a href="#" class="w-full inline-block pl-4 py-2">Reports</a>
    </li>
  </ul>
</div>
