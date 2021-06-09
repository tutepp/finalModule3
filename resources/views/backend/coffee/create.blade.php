@extends('layout.index')

@section('backend')
    <div>
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Them san pham</h1>
            </div>
            <div class="error-message">
                @if ($errors->any())
                    @foreach($errors->all() as $nameError)
                        <p style="color:red">{{ $nameError }}</p>
                    @endforeach
                @endif
            </div>
            <p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>
            <div class="form-custom-validation">
            <form class="user" method="post" action="{{route("coffee.store")}}">

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        @csrf
                        <label  for="name">Ten san pham</label>
                        <input type="text" class="form-control form-control-user" name="name"
                               placeholder="Tên san pham">

                    </div>
                    <div class="col-sm-6">
                        <label >Gia tien</label>
                        <input type="text" class="form-control form-control-user"
                               name="price" placeholder="Gia tien">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label >Chon anh</label>
                        <input type="file" class="form-control-user"
                                name="image" placeholder="Tên tác giả">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label >Mo ta</label>
                        <input type="text" class="form-control form-control-user"
                               name="description" placeholder="Mo ta">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-user ">
                        Them san pham
                    </button>
                    <a href="{{asset('coffee')}}" class="btn btn-primary btn-user ">
                        Quay lai
                    </a>
                </div>

            </form>
            </div>
        </div>
    </div>
@endsection
