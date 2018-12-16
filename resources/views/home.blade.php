@include('inc.header')
<button class="btn btn-block btn-primary btn-round" id="getRequest">Get User Data</button>

<div class="row">
    <div class="col s12 m6">
        <div class="card bg-primary darken-1">
            <div class="card-content white-text">
                <span class="card-title">List of All Users</span>
                <table id="table_id" class="display table table-bordered">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date Of Birth</th>
                            <th>Age</th>
                            <th>Height </th>
                            <th>Weight</th>
                            <th>Hair Color</th>
                            <th>Skin Color</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@include('inc.modals')
@include('inc.scripts')


</body>

</html>