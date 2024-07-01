<div class="custom-select-wrapper text-center  ">
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <select id="language-switcher" class="custom-select  text-gray-900 bg-gradient-to-r from-[#f5f5f4] via-[#ADEBBE] to-[#74BEC1] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg  px-2 py-2.5 text-center  mb-2" onchange="switchLanguage(this.value)">
   <div> <option   value="en" {{ request()->is('en*') ? 'selected' : '' }}>English</option></div>
   <div><option  value="ar" {{ request()->is('ar*') ? 'selected' : '' }}>العربية</option></div> 
</select>
</div>

