<x-app-layout>

    @include('admin.adminheader')

    <div class="container-scroller">
        @include('admin.adminnav')

        <!-- partial:partials/_navbar.html -->

        <div class="container m-3">

            <h1 style="color:red;text-align:center;padding:15px">Our Chef</h1>
            <div class="row">
                <div class="col-6 offset-3 text-info bg-light">
                    <h2 class="text-center text-primary py-3">Insert chef Data</h2>

                    <form action="{{ url('/uploadchef') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group  ">
                            <label class="py-2" for="name">
                                <h3>Name:</h3>
                            </label>
                            <input type="text" class="form-control text-info bg-light" placeholder="Enter name"
                                id="title" name="name">
                        </div>
                        <div class="form-group text-info bg-light ">
                            <label class="py-2" for="special">
                                <h3>Speciallist:</h3>
                            </label>
                            <input type="text" class="form-control text-info bg-light" placeholder="Enter speciallist"
                                id="special" name="speciallist">
                        </div>

                        <div class="form-group text-info bg-light ">
                            <label class="py-2" for="image">
                                <h3>Image:</h3>
                            </label>
                            <input type="file" class="form-control text-info bg-light" placeholder="Enter image"
                                id="image" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>




                </div>
            </div>
            {{-- end insert chef data --}}



            <hr>
            {{-- start delete table --}}

            <div class="row">
                <div class="col-6 offset-3 ">
                    <h2 class="text-center text-dark py-3">Delete Chefs Data</h2>
                    <table class=" table table-light">

                        <tr>
                            <th>Name</th>
                            <th>Spciallist</th>

                            <th>image</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->speciallist }}</td>
                                <td><img src="/chefimage/{{ $data->image }}" width=200px height=200px></td>
                                <td><a class="btn btn-danger" href="{{ url('/deletechef', $data->id) }}">Delete</a>
                                </td>


                            </tr>
                        @endforeach

                    </table>
                </div>

            </div>
            {{-- end delete table --}}


        </div>
        @include('admin.adminfooter')


</x-app-layout>
