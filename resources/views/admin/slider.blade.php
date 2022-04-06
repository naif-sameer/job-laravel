@extends('layouts.admin')

@php
$activeNav = 'slider';
@endphp

@section('content')
  <main class="mt-5">
    {{-- title --}}
    <div class="d-flex justify-content-between">
      <h2> Slider </h2>

      <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
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
            <div class="d-flex gap-2">
              <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>

              <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
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
          <h5 class="modal-title" id="exampleModalLabel">New Slider</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">

          {{-- form --}}
          <form class="needs-validation row">
            {{-- title --}}
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Title</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>

            {{-- image --}}
            <div class="mb-3">
              <label for="slider-image" class="form-label">Slider image</label>
              <input class="form-control" type="file" id="slider-image">
            </div>

            {{-- description --}}
            <div class="mb-3">
              <label for="description-textarea" class="form-label">Description</label>
              <textarea class="form-control" id="description-textarea" rows="3"></textarea>
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

  {{-- delete modal --}}
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalTitle">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>This is a vertically centered modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>

  {{-- edit  modal --}}
  <div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">edit Slider</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">

          {{-- form --}}
          <form class="needs-validation row">
            {{-- title --}}
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Title</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>

            {{-- image --}}
            <div class="mb-3">
              <label for="slider-image" class="form-label">Slider image</label>
              <input class="form-control" type="file" id="slider-image">
            </div>

            {{-- description --}}
            <div class="mb-3">
              <label for="description-textarea" class="form-label">Description</label>
              <textarea class="form-control" id="description-textarea" rows="3"></textarea>
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
