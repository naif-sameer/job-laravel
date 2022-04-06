@extends('layouts.admin')

@php
$activeNav = 'job';
@endphp

@section('content')
  <main class="mt-5">
    {{-- title --}}
    <div>
      <h2> Jobs </h2>
    </div>

    {{-- table --}}
    <table class="mt-4 table">
      <thead>
        <tr class="text-capitalize">
          <th scope="col">id</th>
          <th scope="col">title</th>
          <th scope="col">description</th>
          <th scope="col">location</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>New operation system is coming</td>
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
          <h5 class="modal-title" id="">add New job</h5>
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
          <h5 class="modal-title" id="">edit job</h5>
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
