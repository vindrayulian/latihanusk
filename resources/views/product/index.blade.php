@extends('layout.master')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <span class="font-weight-bold">Table Product</span>
        </div>
        <div class="card-content">
            <table class="table table-striped">
                <thead>
                    <tr class="table-dark">
                        <td>No</td>
                        <td>Namaa</td>
                        <td>Kelas</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Vindra Arya Yulian</td>
                        <td>XII RPL 1</td>
                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Vindra Arya Yulian</td>
                        <td>XII RPL 1</td>
                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td><tr>
                        <td>1</td>
                        <td>Vindra Arya Yulian</td>
                        <td>XII RPL 1</td>
                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
