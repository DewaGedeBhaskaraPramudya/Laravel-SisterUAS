@extends('backpage.main')
@section('content')
<div class="content">
    <br>
    <form action="/StudentImport" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" class="form-control ml-4">
        <button type="submit"
        class="ml-4 mt-2 inline-flex justify-center rounded-md border border-transparent bg-[#3d68ff] py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
        
      </form>
      
</div>

 @endsection