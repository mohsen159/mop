<!--add client -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add a client </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="/operation/client_add.php" method="post" class="was-validated">
                    <div class="mb-3 mt-3">
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>



        </div>
    </div>

</div>
<!--delet client -->
<div class="modal" id="delet">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delet a client </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="delet_client" action="/operation/delet_client.php" method="post" class="was-validated">
                    <div class="mb-3 mt-3">
                        <input type="hidden" class="form-control" id="id" name="id" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: red">Confirm Deletion</button>
                </form>

            </div>
        </div>
    </div>

</div>