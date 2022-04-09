@extends('layouts.admin')

@php
$activeNav = 'companies';
@endphp

@section('content')
  <div x-data="{ id: null, name: '', description: '', location: '', logo: '' }">

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
        <h2> Companies </h2>

        <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
      </div>

      <table class="mt-4 table">
        <thead>
          <tr class="text-capitalize">
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">logo</th>
            <th scope="col">location</th>
            <th scope="col">description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tbody>
          @if (isset($companies))
            @foreach ($companies as $company)
              <tr>
                <th scope="row">{{ $company->id }}</th>

                <td> {{ $company->name }}</td>

                <td>
                  <div style="width: 100px">
                    <img class="img-thumbnail img-fluid" src="{{ asset('assets/images/' . $company->logo) }}" alt="logo">
                  </div>
                </td>

                <td> {{ $company->location }}</td>

                <td>{{ $company->description }}</td>

                <td>
                  <div class="d-flex gap-2">
                    <button
                      @click="id = {{ $company->id }}; name = '{{ $company->name }}'; description = '{{ $company->description }}'; location = '{{ $company->location }}'; logo = '{{ $company->logo }}'"
                      class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>

                    <button @click="id = {{ $company->id }}" class="btn btn-danger" data-bs-toggle="modal"
                      data-bs-target="#deleteModal">Delete</button>
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
            <h5 class="modal-title" id="exampleModalLabel">New company</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">

            {{-- form --}}
            <form method="POST" class="needs-validation row" enctype="multipart/form-data">
              @csrf

              {{-- name --}}
              <div class="mb-3">
                <label for="name-input-id" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name-input-id" placeholder="">
              </div>

              {{-- logo --}}
              <div class="mb-3">
                <label for="company-logo" class="form-label">logo</label>
                <input name="logo" class="form-control" type="file" id="company-logo">
              </div>

              {{-- location --}}
              <div class="mb-3">
                <label for="input-id-2" class="form-label">Country</label>
                <input name="location" type="text" class="form-control" id="input-id-2" placeholder="">
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
          <form class="modal-footer" method="POST" x-bind:action="'/admin/companies/' + id">
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
            <h5 class="modal-title" id="exampleModalLabel">edit company</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">

            {{-- form --}}
            <form class="needs-validation row" method="POST" :action="'/admin/companies/' + id"
              enctype="multipart/form-data">
              @csrf
              @method('PUT')

              {{-- name --}}
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input name="name" type="text" x-bind:value="name" class="form-control" id="exampleFormControlInput1"
                  placeholder="">
              </div>

              {{-- logo --}}
              <div class="mb-3">
                <label for="company-logo" class="form-label">logo</label>
                <input name="logo" x-bind:value="logo" class="form-control" type="file" id="company-logo">
              </div>

              {{-- location --}}
              <div class="mb-3">
                <label for="company-location" class="form-label">company location</label>
                <input name="location" x-bind:value="location" class="form-control" type="text" id="company-location">
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
