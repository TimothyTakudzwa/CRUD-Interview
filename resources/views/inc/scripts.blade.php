<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
    var t = $('#table_id').DataTable();

    function getMyData(id) {
        selected_element = "#editMe" + id;
        var _self = $(selected_element);
        $("#edit_first_name").val(_self.data("first_name"))
        $("#edit_last_name").val(_self.data("last_name"))
        $("#edit_id").val(_self.data("id"))

        $("#edit_date_of_birth").val(_self.data("dob"))
        $("#edit_age").val(_self.data("age"))
        $("#edit_height").val(_self.data("height"))
        $("#edit_weight").val(_self.data("weight"))
        $("#edit_hair_color").val(_self.data("hair_color"))
        $("#edit_skin_color").val(_self.data("skin_color"))
        $("#modal2").modal('show')

    }


    $(document).ready(function () {
        $("#getRequest").click(function () {


            getUsers();
        });
        $('#ajaxSubmit').click(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var height = $("#height").val();
            var weight = $("#weight").val();
            var hair_color = $("#hair_color").val();
            var skin_color = $("#skin_color").val();
            var date_of_birth = $("#date_of_birth").val();
            var age = $("#age").val();

            var dataString = { _token: '{{csrf_token()}}', first_name: first_name, last_name: last_name, height: height, weight: weight, hair_color: hair_color, skin_color: skin_color, date_of_birth: date_of_birth, age: age }

            $.ajax({
                type: "POST",
                url: "{{ url('/create') }}",
                data: dataString,
                success: function (data) {
                    getUsers();
                    $("#modal1").modal('hide')
                    Swal(
                        'Success',
                        'User Created Succesfully',
                        'success'
                    )
                }
            })
        });
        $('#ajaxUpdate').click(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            var first_name = $("#edit_first_name").val();
            var last_name = $("#edit_last_name").val();
            var height = $("#edit_height").val();
            var weight = $("#edit_weight").val();
            var hair_color = $("#edit_hair_color").val();
            var skin_color = $("#edit_skin_color").val();
            var date_of_birth = $("#edit_date_of_birth").val();
            var age = $("#edit_age").val();
            var id = $("#edit_id").val();

            var dataString = { _token: '{{csrf_token()}}', first_name: first_name, last_name: last_name, id: id, height: height, weight: weight, hair_color: hair_color, skin_color: skin_color, date_of_birth: date_of_birth, age: age }

            $.ajax({
                type: "POST",
                url: "{{ url('/updateuser') }}",
                data: dataString,
                success: function (data) {
                    getUsers();
                    $("#modal2").modal('hide')
                    Swal(
                        'Success',
                        'User Update Succesfully',
                        'success'
                    )
                }
            })
        });
    });
    function deleteUser(id) {
        Swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                send_delete_request(id);
                
            }
        })
    }
    function send_delete_request(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });


        var dataString = { _token: '{{csrf_token()}}', id: id }

        $.ajax({
            type: "POST",
            url: "{{ url('/deleteuser') }}",
            data: dataString,
            success: function (data) {
                getUsers();
                
                Swal(
                    'Deleted!',
                    'User has been deleted.',
                    'success'
                )
            }
        })
   
    }
    function getUsers() {
        t.clear()
        $.ajax({
            type: "GET",
            url: "{{ url('/getresults') }}",
            success: function (data) {
                $.each(data, function (i, item) {
                    t.row.add([item.first_name, item.last_name, item.DOB, item.age, item.height, item.weight, item.hair_color, item.skin_color,
                    '<a href="#" id="editMe' + item.id + '" onclick="getMyData(' + item.id + ')"  data-first_name="' + item.first_name + '"data-last_name="'
                    + item.last_name +
                    '"data-dob="'
                    + item.DOB +
                    '"data-height="'
                    + item.height +
                    '"data-id="'
                    + item.id +
                    '"data-weight="'
                    + item.weight +
                    '"data-hair_color="'
                    + item.hair_color +
                    '"data-skin_color="'
                    + item.skin_color +
                    '" data-age="'
                    + item.age +
                    '">Edit</a> | <a href="#" id="editMe' + item.id + '" onclick="deleteUser(' + item.id + ')">Delete</a>']).draw();
                });

            }
        })
    }

    $("#date_of_birth").change(function () {
        var date = $("#date_of_birth").val();
        console.log(date)
        var today = new Date();
        var birthDate = new Date(date);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        $("#age").val(age);

    });
    $("#edit_date_of_birth").change(function () {
        var date = $("#edit_date_of_birth").val();
        console.log(date)
        var today = new Date();
        var birthDate = new Date(date);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        $("#edit_age").val(age);

    });
</script>