@extends('layouts.master')

@section('content')


<div class="main-container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="float-left">All Posts</h2>

            <div class="float-right">
                <a class="btn btn-success" href="{{route('posts.create')}}">Create</a>
                <a class="btn btn-success" href="">Trashed</a>
            </div>

        </div>
        <div class="card-body">


<form action="">
    <div class="form-group">
        <label for="">Image</label>
        <input type="file" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Description</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
    </div>
</form>


            {{--


      <table class="table table-striped">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Publish Date</th>
                        <th scope="col">Actions</th>


                    </tr>

                </thead>

                <tbody>


                    <th scope="row">1</th>
                    <td>
                        <img src="https://picsum.photos/200" alt="">
                    </td>
                    <td>Lorem Title</td>
                    <td>Lorem Description</td>
                    <td>Lorem Category</td>
                    <td>01/04/1980</td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>

                </tbody>

            </table>
    --}}

        </div>

    </div>
</div>





@endsection
