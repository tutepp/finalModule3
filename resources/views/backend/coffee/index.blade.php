@extends('layout.index')
@section('tittle','Trang Chủ')
@section('backend')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h3 class="h3 mb-2 text-gray-800">Danh sach tac gia</h3>
        <p class="mb-4">
            <a href="{{asset('coffee/create')}}">
                <button type="button" class="btn btn-primary">Thêm san pham</button>
            </a>
        </p>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($coffees as $key => $coffee )
                    <div class="col">

                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

                            <div class="card-body">
                                <p class="card-text">{{ $coffee->name }}</p>
                                <p class="card-text">{{ $coffee->price }}</p>
                                <p class="card-text">{{ $coffee->desctiption}}</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-danger"  onclick="return confirm('Ban co xoa khong?')">Delete</button>
                                        <button type="button" class="btn btn-sm btn-success" >Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        </main>

    </div>
@endsection
