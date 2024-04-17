@extends('layouts.app')
@section('title','Add')

@section('content')
<div class="row mt-4">
    <div class="col-4 offset-4">
        <form action="/admin/save" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @if (!empty($author?->id))
            <input type="hidden" name="id" value="{{ $author->id }}"/>
            @endif --}}

            <div class="mb-3">
                <label for="title" class="form-label">Tittle</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Title Movie"/>
            </div>

            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" name="director" class="form-control" placeholder="Enter Name Of Director"/>
            </div>

            <div class="mb-3">
                <label for="time">Duration:</label>
                <input type="number" id="hour" name="hour" min="0" max="23" placeholder="HH" required>:
                <input type="number" id="minute" name="minute" min="0" max="59" placeholder="MM" required>:
                <input type="number" id="second" name="second" min="0" max="59" placeholder="SS" required>
                {{-- <label for="duration" class="form-label">Duration</label>
                <input type="" name="duration" class="form-control" placeholder="Enter Name Of Director"/> --}}
            </div>

            <div class="mb-3">
             <label for="release_date" class="form-label">Release Date</label>
             <input type="date" name="release_date" class="form-control"/>
            </div>

         <div class="mb-3">
            <input type="file" name="photo">
         </div>

         <div class="mb-3">
             <button type="submit" class="btn btn-success">Save</button>
             <a href="/admin" class="btn btn-warning">Cancel</a>
         </div>
         <div class="mt-4">
             @if (!empty(session("error")))
                 {{ session("error", "") }}
             @endif
         </div>
     </form>
 </div>
 </div>
@endsection