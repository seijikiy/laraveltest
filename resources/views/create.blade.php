<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class=" modal-dialog" role="document">
        <div class="modal-content">
            <div class="d-flex justify-content-center ">
                <h4 class="font py-5" style="color: #7B7B7B">Create a new Product</h4>
            </div>


            <form action="submit" method="post" enctype="multipart/form-data">
                @csrf


                <div class="d-flex justify-content-center ">
                    <input class="w-75 shadow py-2 font pl-2" type="text" name="name" maxlength="64"
                           placeholder="Product Name"
                           style="border:none; border-radius: 4px" required></div>


                <div class="d-flex mt-4 justify-content-center">
                        <textarea class=" w-75 pt-2 shadow font pl-2" type="text" name="description"
                                  placeholder="Description"
                                  style="border:none;  border-radius: 4px; height: 100px; resize: none"
                                  required></textarea>
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
                           required></div>
                <div class="form-group d-flex justify-content-center mt-4">
                    <input type="file" name="image" style="width: 220px">
                </div>

                <div class="d-flex justify-content-center pb-3" style="margin-top: 30px">

                    <div class="m-3">
                        <button class="btn btn-secondary rounded-pill" data-dismiss="modal">Close</button>
                    </div>
                    <div class="m-3">

                        <button type="submit"
                                class="btn  font  rounded-pill text-white font-weight-bold "
                                style="background-color: #28AD47; width: 178px">Save
                        </button>
                    </div>
                </div>


            </form>
        </div>

    </div>
</div>




<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>



