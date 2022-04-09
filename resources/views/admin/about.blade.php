@extends('layouts.admin')

@php
$activeNav = 'about';
@endphp
@section('content')
  <div x-data="{ id: null, title: '', description: '', image: '' }">
    <main class="mt-5">
      {{-- alerts --}}
      <div>
        {{-- success --}}
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif

        {{-- errors --}}
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
      </div>

      {{-- title --}}
      <div class="d-flex justify-content-between">
        <h2> About us </h2>

        @if (isset($about) && count($about) === 0)
          <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
        @endif
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
          @if (isset($about))
            @foreach ($about as $about)
              <tr>
                <th scope="row">{{ $about->id }}</th>

                <td> {{ $about->title }}</td>

                <td>
                  <div style="width: 100px">
                    <img class="img-thumbnail img-fluid" src="{{ asset('assets/images/' . $about->image) }}" alt="image">
                  </div>
                </td>

                <td>{{ $about->description }}</td>

                <td>
                  <div class="d-flex gap-2">
                    <button
                      @click="id = {{ $about->id }}; title = '{{ $about->title }}'; description = '{{ $about->description }}'"
                      class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                  </div>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </main>

    {{-- add  modal --}}
    <div class="modal fade" id="addModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New about</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">

            {{-- form --}}
            <form method="POST" class="needs-validation row" enctype="multipart/form-data">
              @csrf

              {{-- title --}}
              <div class="mb-3">
                <label for="name-input-id" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="name-input-id" placeholder="">
              </div>

              {{-- image --}}
              <div class="mb-3">
                <label for="about-image" class="form-label">image</label>
                <input name="image" class="form-control" type="file" id="about-image">
              </div>

              {{-- description --}}
              <div class="mb-3">
                <label for="description-textarea" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description-textarea" rows="3"></textarea>
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
            <p>Are you sure to delete this item</p>
          </div>
          <form class="modal-footer" method="POST" x-bind:action="'/admin/about/' + id">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </div>
    </div>

    {{-- edit  modal --}}
    <div class="modal fade" id="editModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">edit about</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">

            {{-- form --}}
            <form class="needs-validation row" method="POST" :action="'/admin/about/' + id" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              {{-- title --}}
              <div class="mb-3">
                <label for="title-input-edit" class="form-label">Name</label>
                <input name="title" type="text" x-bind:value="title" class="form-control" id="title-input-edit"
                  placeholder="">
              </div>

              {{-- image --}}
              <div class="mb-3">
                <label for="about-image" class="form-label">image</label>
                <input name="image" x-bind:value="image" class="form-control" type="file" id="about-image">
              </div>

              {{-- description --}}
              <div class="mb-3">
                <label for="description-textarea" class="form-label">Description</label>
                <textarea name="description" class="form-control" x-bind:value="description" id="description-textarea"
                  rows="3"></textarea>
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
  </div>
@endsection
