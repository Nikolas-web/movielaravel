@extends('layouts.app')

@section('content')
        <div class="card my-5">
            <div class=" card-body">
                <h1>Add New Movie</h1>           
                    <form action="{{ route('movies.store') }}" method="POST">
                        @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="text" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label>Genre</label>
                        <select name="genre_id" id="genre_id" class="form-control">
                            <option value="1">Horror</option>
                            <option value="2">Lawak</option>
                            <option value="3">Action</option>
                            <option value="4">Kisah Cinta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Rating Star</label>
                        <input type="text" class="form-control" name="rating_star">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="10"></textarea>
                    </div>
                        <button type="submit" class="btn btn-primary mt-2 float-right">Submit</button>
                        <button type="back" class="btn btn-primary mt-2 float-right">Back</button>
                    </form>      
    </div>    
    </div>
@endsection