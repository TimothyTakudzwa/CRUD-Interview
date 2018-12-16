<div id="modal1" class="modal">
    <div class="modal-header text-center" style="">
        <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-content">
        <form action="/" method="POST" id="createUser">
            <div class="form-group">
                <div class="row  row col-sm-12">
                    <div id="first_name1 " class="col-sm-6">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="Enter First Name">
                    </div>
                    <div id="last_name1" class="col-sm-6">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name">
                    </div>
                </div>
                <div class="row  row col-sm-12">
                    <div id="first_name1" class="col-sm-6">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" value="2016-05-29" name="date" placeholder="Pick Date of Birth">
                    </div>
                    <div id="last_name1" class="col-sm-6">
                        <label>Age</label>
                        <input disabled type="text" class="form-control " id="age" placeholder="Your Age">
                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    </div>
                </div>
            </div>
            <div class="modal-content">

                <div class="row  row col-sm-12">

                    <div id="first_name1 " class="col-sm-3">
                        <label>Height</label>
                        <input type="text" class="form-control" id="height" name="first_name" placeholder="Height in m">
                    </div>
                    <div id="last_name1" class="col-sm-3">
                        <label>Weight</label>
                        <input type="text" class="form-control" id="weight" name="last_name" placeholder="Weight in kg">
                    </div>
                    <div id="first_name1 " class="col-sm-3">
                        <label>Hair Color</label>
                        <input type="text" class="form-control" id="hair_color" name="first_name" placeholder="Hair Color">
                    </div>
                    <div id="last_name1" class="col-sm-3">
                        <label>Skin Color</label>
                        <input type="text" class="form-control" id="skin_color" name="last_name" placeholder="Skin color">
                    </div>
                </div>
            </div>
    </div>

    <div class="modal-footer row col-sm-12">
        <button type="button" class="btn btn-secondary btn-block col" data-dismiss="modal">Close</button>
        <button type="submit" id="ajaxSubmit" class="btn btn-primary btn-block col">Submit Changes</button>
        </form>
    </div>
</div>

<div id="modal2" class="modal">
        <div class="modal-header text-center" style="">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-content">
            <form action="/" method="POST" id="updateUser">
                <div class="form-group">
                    <div class="row  row col-sm-12">
                        <div id="first_name1" class="col-sm-6">
                            <label>First Name</label>
                            <input type="text" required class="form-control" id="edit_first_name" placeholder="Enter First Name">
                        </div>
                        <div id="last_name1" class="col-sm-6">
                            <label>Last Name</label>
                            <input type="text" required class="form-control" id="edit_last_name" placeholder="Enter Last Name">
                        </div>
                    </div>
                    <div class="row  row col-sm-12">
                        <div id="first_name1" class="col-sm-6">
                            <label>Date of Birth</label>
                            <input type="date" required class="form-control" id="edit_date_of_birth" name="date" placeholder="Pick Date of Birth">
                        </div>
                        <div id="last_name1" class="col-sm-6">
                            <label>Age</label>
                            <input disabled type="text" required class="form-control " id="edit_age" placeholder="Your Age">
                            <input type="hidden" id="_token" value="{{ csrf_token() }}">
                        </div>
                    </div>
                </div>
                <div class="modal-content">
    
                    <div class="row  row col-sm-12">
    
                        <div id="first_name1 " class="col-sm-3">
                            <label>Height</label>
                            <input type="text" class="form-control" required id="edit_height" name="first_name" placeholder="Height in m">
                        </div>
                        <div id="last_name1" class="col-sm-3">
                            <label>Weight</label>
                            <input type="text" class="form-control" required id="edit_weight" name="last_name" placeholder="Weight in kg">
                        </div>
                        <div id="first_name1 " class="col-sm-3">
                            <label>Hair Color</label>
                            <input type="text" class="form-control" required id="edit_hair_color" name="first_name" placeholder="Hair Color">
                        </div>
                        <div id="last_name1" class="col-sm-3">
                            <label>Skin Color</label>
                            <input type="text" class="form-control" required id="edit_skin_color" name="last_name" placeholder="Skin color">
                            <input type="hidden" class="form-control" required id="edit_id" name="last_name" placeholder="Skin color">
                        </div>
                    </div>
                </div>
        </div>
    
        <div class="modal-footer row col-sm-12">
            <button type="button" class="btn btn-secondary btn-block col" data-dismiss="modal">Close</button>
            <button type="submit" id="ajaxUpdate" class="btn btn-primary btn-block col">Submit Changes</button>
            </form>
        </div>
    </div>