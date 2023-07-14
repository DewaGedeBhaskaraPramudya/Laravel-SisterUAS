@extends('backpage.main')
@section('content') 
<div class="content">
  <div class="flex justify-start">
    <div class="  bg-blue-800/80 hover:bg-blue-800/90 btn ml-4 rounded-md text-white font-medium tracking-wider transition">
      <a href="/create" class=" px-4" >Add</a>
    </div>
    <div class=" bg-green-500/80 hover:bg-green-500/90  btn  ml-4 rounded-md text-white font-medium tracking-wider transition">
      <a href="/ImportV" class=" px-4" >Import</a>
    </div>
    <div class=" bg-orange-500/80 hover:bg-orange-500/90 btn  ml-4 rounded-md text-white font-medium tracking-wider transition">
      <a href="/Export" class=" px-4" >Export</a>
    </div>
  </div>
    <table class="table-bordered table ml-4 mr-4 mt-4 ">
      <tr>
          <th>Student ID</th>
          <th>Student Name</th>
          <th>Address</th>
          <th>Graduation Year</th>
          <th>School Origin</th>
          <th colspan="2">ACTION</th>
      </tr>
      @foreach ($student as $key=>$value)
          <tr>
              <td>{{ $value->studentID }}</td>
              <td>{{ $value->name }}</td>
              <td>{{ $value->address }}</td>
              <td>{{ $value->gpa }}</td>
              <td>{{ $value->classID }}</td>
              <td> <a href="/edit/{{$value->id}}" class="btn btn-info">Update</a></td>
              <td>
                <form action="/SData/{{ $value->id }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn bg-red-700 text-white " type="submit">Delete</button>
                </form>
              </td>
          </tr>
      @endforeach 
    </table>
    
  </div>
  @endsection