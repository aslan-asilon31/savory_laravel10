@extends('layouts.backend')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="mx-auto max-w-screen-lg px-4 py-8 sm:px-8">
    <div class="flex items-center justify-between pb-6">
      <div>
        <h2 class="font-semibold text-gray-700">User Accounts</h2>
        <span class="text-xs text-gray-500">View accounts of registered users</span>
      </div>
      <div class="flex items-center flex-row-reverse ">
        {{-- <div class="ml-10 space-x-8 lg:ml-40"> --}}
          <a href="{{ route('user.create') }}" type="buttin" class="flex ml-3 items-center gap-2 rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white focus:outline-none focus:ring hover:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
            </svg>
            Add User
          </a>
          <a type="button" class="flex ml-3 items-center gap-2 rounded-md bg-green-600 px-4 py-2 text-sm font-semibold text-white focus:outline-none focus:ring hover:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
            </svg>
            CSV
          </a>
          <a type="button" class="flex ml-3 items-center gap-2 rounded-md bg-yellow-600 px-4 py-2 text-sm font-semibold text-white focus:outline-none focus:ring hover:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
            </svg>
            Excel
          </a>
          <a type="button" class="flex ml-3 items-center gap-2 rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white focus:outline-none focus:ring hover:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
            </svg>
            PDF
          </a>
          <a type="button" onclick="openModal('mymodalcentered')" class="flex ml-3 items-center gap-2 rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white focus:outline-none focus:ring hover:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
            </svg>
            Upload Image
          </a>

          <!-- Modal toggle -->
        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Toggle modal
        </button>
          
          @include('user._upload_file')

      </div>
    </div>
    <div class="overflow-y-hidden rounded-lg border">
      <div class="overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="bg-blue-600 text-left text-xs font-semibold uppercase tracking-widest text-white">
              <th class="px-5 py-3">ID</th>
              <th class="px-5 py-3">Full Name</th>
              <th class="px-5 py-3">User Role</th>
              <th class="px-5 py-3">Created at</th>
              <th class="px-5 py-3">Status</th>
              <th class="px-5 py-3">Action</th>
            </tr>
          </thead>
          <tbody class="text-gray-500">
            <tr>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">3</p>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-full w-full rounded-full" src="/images/-ytzjgg6lxK1ICPcNfXho.png" alt="" />
                  </div>
                  <div class="ml-3">
                    <p class="whitespace-no-wrap">Besique Monroe</p>
                  </div>
                </div>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">Administrator</p>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">Sep 28, 2022</p>
              </td>
  
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <span class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-900">Active</span>
              </td>

              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <a href="">Edit</a>
              </td>
            </tr>
            <tr>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">7</p>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-full w-full rounded-full" src="/images/ddHJYlQqOzyOKm4CSCY8o.png" alt="" />
                  </div>
                  <div class="ml-3">
                    <p class="whitespace-no-wrap">James Cavier</p>
                  </div>
                </div>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">Author</p>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">Sep 28, 2022</p>
              </td>
  
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <span class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-900">Active</span>
              </td>
            </tr>
            <tr>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">12</p>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-full w-full rounded-full" src="/images/oPf2b7fqx5xa3mo68dYHo.png" alt="" />
                  </div>
                  <div class="ml-3">
                    <p class="whitespace-no-wrap">Elvis Son</p>
                  </div>
                </div>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">Editor</p>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">Sep 28, 2022</p>
              </td>
  
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <span class="rounded-full bg-yellow-200 px-3 py-1 text-xs font-semibold text-yellow-900">Suspended</span>
              </td>
            </tr>
            <tr>
              <td class="bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">66</p>
              </td>
              <td class="bg-white px-5 py-5 text-sm">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-full w-full rounded-full" src="/images/fR71TFZIDTv2jhvKsOMhC.png" alt="" />
                  </div>
                  <div class="ml-3">
                    <p class="whitespace-no-wrap">Dana White</p>
                  </div>
                </div>
              </td>
              <td class="bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">Administrator</p>
              </td>
              <td class="bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">Sep 28, 2022</p>
              </td>
  
              <td class="bg-white px-5 py-5 text-sm">
                <span class="rounded-full bg-red-200 px-3 py-1 text-xs font-semibold text-red-900">Inactive</span>
              </td>
            </tr>
            <tr>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">12</p>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-full w-full rounded-full" src="/images/oPf2b7fqx5xa3mo68dYHo.png" alt="" />
                  </div>
                  <div class="ml-3">
                    <p class="whitespace-no-wrap">Elvis Son</p>
                  </div>
                </div>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">Editor</p>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">Sep 28, 2022</p>
              </td>
  
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <span class="rounded-full bg-yellow-200 px-3 py-1 text-xs font-semibold text-yellow-900">Suspended</span>
              </td>
  
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <a href="">Edit</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="flex flex-col items-center border-t bg-white px-5 py-5 sm:flex-row sm:justify-between">
        <span class="text-xs text-gray-600 sm:text-sm"> Showing 1 to 5 of 12 Entries </span>
        <div class="mt-2 inline-flex sm:mt-0">
          <button class="mr-2 h-12 w-12 rounded-full border text-sm font-semibold text-gray-600 transition duration-150 hover:bg-gray-100">Prev</button>
          <button class="h-12 w-12 rounded-full border text-sm font-semibold text-gray-600 transition duration-150 hover:bg-gray-100">Next</button>
        </div>
      </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
<script>
    function openModal(key) {
        document.getElementById(key).showModal(); 
        document.body.setAttribute('style', 'overflow: hidden;'); 
        document.getElementById(key).children[0].scrollTop = 0; 
        document.getElementById(key).children[0].classList.remove('opacity-0'); 
        document.getElementById(key).children[0].classList.add('opacity-100')
    }

    function modalClose(key) {
        document.getElementById(key).children[0].classList.remove('opacity-100');
        document.getElementById(key).children[0].classList.add('opacity-0');
        setTimeout(function () {
            document.getElementById(key).close();
            document.body.removeAttribute('style');
        }, 100);
    }
</script>
@endsection