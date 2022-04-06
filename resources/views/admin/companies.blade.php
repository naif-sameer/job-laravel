@extends('layouts.admin')

@php
$activeNav = 'companies';
@endphp

@section('content')
  <main class="mt-5">
    {{-- title --}}
    <div>
      <h2> Companies </h2>
    </div>

    {{-- table --}}
    <table class="mt-4 table">
      <thead>
        <tr class="text-capitalize">
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">logo</th>
          <th scope="col">description</th>
          <th scope="col">location</th>
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
          <td>Yemen </td>

          <td>
            <div class="d-flex gap-2">
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>

              <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </main>

  {{-- add  modal --}}
  <div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">add New Company</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">

          {{-- form --}}
          <form class="needs-validation row">
            {{-- title --}}
            <div class="mb-3">
              <label for="add-input-title" class="form-label">Title</label>
              <input type="text" class="form-control" id="add-input-title" placeholder="">
            </div>

            {{-- image --}}
            <div class="mb-3">
              <label for="Company-image" class="form-label">Company logo</label>
              <input class="form-control" type="file" id="Company-image">
            </div>

            {{-- description --}}
            <div class="mb-3">
              <label for="description-textarea" class="form-label">Description</label>
              <textarea class="form-control" id="description-textarea" rows="3"></textarea>
            </div>

            {{-- location --}}
            <div class="mb-3">
              <label for="add-input-location" class="form-label">location</label>
              <input type="text" class="form-control" id="add-input-location" placeholder="">
            </div>

            {{-- actions --}}
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Add</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- edit  modal --}}
  <div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">edit Company</h5>
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
              <label for="Company-image" class="form-label">Company image</label>
              <input class="form-control" type="file" id="Company-image">
            </div>

            {{-- description --}}
            <div class="mb-3">
              <label for="edit-description-textarea" class="form-label">Description</label>
              <textarea class="form-control" id="edit-description-textarea" rows="3"></textarea>
            </div>

            {{-- location --}}
            <div class="mb-3">
              <label for="edit-input-location" class="form-label">location</label>
              <input type="text" class="form-control" id="edit-input-location" placeholder="">
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
