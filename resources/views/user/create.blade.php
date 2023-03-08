@extends('layouts.backend')

@section('content')

<style>
    .dropdown:hover .dropdown-menu {
  display: block;
}
</style>

<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

<div class="my-4 max-w-screen-md border px-4 shadow-xl sm:mx-4 sm:rounded-xl sm:px-4 sm:py-4 md:mx-auto">
    <div class="flex flex-col border-b py-4 sm:flex-row sm:items-start">
      <div class="shrink-0 mr-auto sm:py-3">
        <p class="font-medium">Edit Account</p>
      </div>
      <button class="mr-2 hidden rounded-lg border-2 px-4 py-2 font-medium text-gray-500 sm:inline focus:outline-none focus:ring hover:bg-gray-200">Cancel</button>
      <button class="hidden rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white sm:inline focus:outline-none focus:ring hover:bg-blue-700">Save</button>
    </div>
    <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
      <p class="shrink-0 w-32 font-medium">Name</p>
      <input placeholder="First Name" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
      <input placeholder="Last Name" class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1" />
    </div>
    <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
      <p class="shrink-0 w-32 font-medium">Email</p>
      <input placeholder="your.email@domain.com" class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1" />
    </div>
    <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
      <p class="shrink-0 w-32 font-medium">Password</p>
      <input placeholder="****************" class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 focus:ring-1" />
    </div>
    <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
        
        <div class="dropdown inline-block relative">
            <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
            <span class="mr-1">Roles</span>
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
            </button>
            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
            <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">One</a></li>
            <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Two</a></li>
            <li class=""><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Three is the magic number</a></li>
            </ul>
        </div>

    </div>

    <div class="flex flex-col gap-4 border-b py-4 sm:flex-row">
        
    </div>

    <div class="flex flex-col gap-4 py-4  lg:flex-row">
        
      <div class="flex h-56 w-full flex-col items-center justify-center gap-4 rounded-xl border border-dashed border-gray-300 p-5 text-center">
        <img src="/images/ddHJYlQqOzyOKm4CSCY8o.png" accept="image/*" id="blah" src="#" alt="your image" class="h-16 w-16 rounded-full" />
        <p class="text-sm text-gray-600">Drop your desired image file here to start the upload</p>
        <input type="file" onchange="readURL(this);" class="max-w-full rounded-lg px-2 font-medium text-blue-600 outline-none ring-blue-600 focus:ring-1" />
      </div>
    </div>
    <div class="flex justify-end py-4 sm:hidden">
      <button class="mr-2 rounded-lg border-2 px-4 py-2 font-medium text-gray-500 focus:outline-none focus:ring hover:bg-gray-200">Cancel</button>
      <button class="rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white focus:outline-none focus:ring hover:bg-blue-700">Save</button>
    </div>
  </div>

  <script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
        $('#blah').attr('src', e.target.result).width(150).height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
    }
  </script>
  
@endsection