{{-- in the action part we dont enter any value here since it creares another problem that means since i use localhost with some path like firstproject/public/ another entry here take to unreachable site path --}}
<form action="">
  <div class="relative border-2 border-gray-100 m-4 rounded-lg">
      <div class="absolute top-4 left-3">
          <i
              class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
          ></i>
      </div>
      <input
          type="text"
          name="search"
          class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
          placeholder="Search any job here ..."
      />
      <div class="absolute top-2 right-2">
          <button
              type="submit"
              class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
              ፈልግ/Search
          </button>
      </div>
  </div>
</form>
