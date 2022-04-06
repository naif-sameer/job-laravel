@extends('layouts.admin')

@php
$activeNav = 'about';
@endphp
@section('content')
  <main class="mt-5">
    {{-- title --}}
    <div>
      <h2> About us </h2>
    </div>

    {{-- table --}}
    <table class="mt-4 table">
      <thead>
        <tr class="text-capitalize">
          <th scope="col">id</th>
          <th scope="col">title</th>
          <th scope="col">image</th>
          <th scope="col">description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>New operation system is coming</td>
          <td class="w-25">
            <img class="img-thumbnail img-fluid" src="{{ asset('assets/images/ads/1.jpg') }}" alt="table image">
          </td>
          <td>New operation system is coming.....................................</td>

          <td>
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </main>


  {{-- edit  modal --}}
  <div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">edit about</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">

          {{-- form --}}
          <form class="needs-validation row">
            {{-- title --}}
            <div class="mb-3">
              <label for="edit-input-title" class="form-label">Title</label>
              <input type="text" class="form-control" id="edit-input-title" placeholder="">
            </div>

            {{-- image --}}
            <div class="mb-3">
              <label for="about-image" class="form-label">about image</label>
              <input class="form-control" type="file" id="about-image">
            </div>

            {{-- description --}}
            <div class="mb-3">
              <label for="edit-description-textarea" class="form-label">Description</label>
              <textarea class="form-control" id="edit-description-textarea" rows="3"></textarea>
            </div>

            {{-- actions --}}
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">edit</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
