            @extends('layouts.app')
            @section('main')



            <div>
                <div class="container" style="margin-top:7em">
                    <div class="card-body">
                        <h1 class="text-center mb-5 py-5">Add To Cart</h1>
                        <div class="row">
                            <div class="row">
                                <div class="col-sm-6"style="width:100%">
                                <div class="card">
                                    <div class="card-body" >
                                    <h5 class="card-title">Add Product</h5>
                                    <a href="/add.data" class="btn btn-success shadow mt-3 mb-4">Add +</a>
                                        @csrf
                                                @method('PUT')
                                                @if ($message = Session::get('success', 'Succsess Adding Data'))
                                                <div class="alert alert-success" role="alert">
                                                {{ $message }}
                                                </div>
                                                @endif
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                        <div class="card">
                                        <div class="card-body">
                                            <table class="table">
                                        <thead>
                                            <tr>
                                                <br><br>
                                                <th scope="col">No.</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Catalogue</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Created at</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no= 1;
                                            @endphp
                                            @foreach ( $data as $row )
                                            <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ $row->NamaProduk }}</td>
                                            <td>{{ $row->Catalogue }}</td>
                                            <td>RP. {{ $row->Harga }}</td>
                                            <td> {{ $row->created_at->format('D M Y')  }}</td>
                                            <td>
                                                <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</button>
                                                <a href="/showdata/{{ $row->id }}" class="btn btn-info">Edit</button>
                                            </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                        </div>
                                        </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            </div> --}}









            {{-- 
            <div>
            <div class="container" style="margin-top:7em">
                <div class="card-body">
                    <h1 class="text-center mb-5 py-5">Add To Cart</h1>
                    <div class="row">
                        <div class="card shadow">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <a href="/add.data" class="btn btn-success shadow mt-3">Add Data</a>
                                            <br><br>
                                            @csrf
                                            @method('PUT')
                                            @if ($message = Session::get('success', 'Succsess Adding Data'))
                                            <div class="alert alert-success" role="alert">
                                                {{ $message }}
                                            </div>
                                            @endif
                                            <th scope="col">No.</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Catalogue</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Created at</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no= 1;
                                        @endphp
                                        @foreach ( $data as $row )
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ $row->NamaProduk }}</td>
                                            <td>{{ $row->Catalogue }}</td>
                                            <td>RP. {{ $row->Harga }}</td>
                                            <td> {{ $row->created_at->format('D M Y')  }}</td>
                                            <td>
                                            <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</button>
                                            <a href="/showdata/{{ $row->id }}" class="btn btn-info">Edit</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div> --}}


            @endsection