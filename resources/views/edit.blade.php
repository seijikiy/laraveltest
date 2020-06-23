@extends('layouts.index')
@section('content')
    <div class="head" style="height: 100vh">
        <div class="m-auto pt-5" style="width: 480px;">


            <div style="height: 550px; border-radius: 35px; background-color: #F0EFEF" >


                <div class="d-flex justify-content-center ">
                    <h4 class="font pt-5 pb-4" style="color: #7B7B7B">Edit a new Product</h4>
                </div>

                <form action="{{action('ProductController@update', $product)}}" method="post"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}


                    <div class="d-flex justify-content-center ">
                        <input class="w-75 shadow pb-2 font pl-2" type="text" name="name" maxlength="64"
                               value="{{$product->name}}"
                               style="border:none; border-radius: 4px" required></div>


                    <div class="d-flex mt-4 justify-content-center">
                    <textarea class=" w-75 pt-2 shadow font pl-2" type="text" name="description"
                              placeholder="Description"
                              style="border:none;  border-radius: 4px; height: 100px; resize: none"
                              required>{{$product->description}}</textarea>
                    </div>


                    <div class="row mt-4 ">
                        <select class="form-control border-0 shadow mt-2" id="exampleFormControlSelect1"
                                style="width: 150px; margin-left: 75px"
                                name="category">
                            <option>Classic</option>
                            <option>Sports car</option>
                            <option>Luxury vehicle</option>
                            <option>Van</option>
                            <option>Truck</option>
                        </select>
                        <div style="margin-left: 37px">
                            <p class="font m-3" style="color: #7B7B7B;">Price</p></div>

                        <input class="shadow font p-1 text-center mt-2" type="number" min="0.01" step="0.01"
                               max="2500.00" placeholder="0.00" name="price"
                               style="border:none; border-radius: 4px; width: 100px; height: 40px;"
                               value="{{$product->price}}"
                               required></div>

                    <div class="form-group d-flex justify-content-center mt-3">
                        <img src="/storage/image/{{$product->image}}" width="126px" height="84px" class="mr-3 shadow">
                        <input type="file" name="image" style="width: 220px">
                    </div>


                    <div class="d-flex justify-content-center " style="margin-top: 10px">

                        <div class="  m-3">
                            <a href="/your-products"><p style="color: dimgray; "><strong>GO BACK</strong></p></a>
                        </div>
                        <div class="mt-2 ml-5">
                            <button type="submit" name="submit" onclick="return confirm('Are you sure you want to edit this Product?')"
                                    class="btn  font  rounded-pill text-white font-weight-bold "
                                    style="background-color: #28AD47; width: 178px">Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>


@endsection
