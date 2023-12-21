@extends('topadmin')
@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">

                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">Divisi Fauna</h2>
                        </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                <i class="material-icons">&#xE147;</i>
                                <span>Add New Organizations</span>
                            </a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                                <i class="material-icons">&#xE15C;</i>
                                <span>Delete</span>
                            </a>
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Activity</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="option[]"
                                        value="1">
                                    <label for="checkbox1"></label></th>
                            <th>Organization A</th>
                            <th>OrganizationA@gmail.com</th>
                            <th>90r parkdground poland Usa.</th>
                            <th>(78-582552-9)</th>
                            <th>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>


                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox2" name="option[]"
                                        value="1">
                                    <label for="checkbox2"></label></th>
                            <th>Organization B</th>
                            <th>OrganizationB@gmail.com</th>
                            <th>90r ser57, Berlin poland Bermany.</th>
                            <th>(78-5235-2-9)</th>
                            <th>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>


                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox3" name="option[]"
                                        value="1">
                                    <label for="checkbox3"></label></th>
                            <th>Organization C</th>
                            <th>OrganizationC@gmail.com</th>
                            <th>90r ser57, Berlin poland Bermany.</th>
                            <th>(78-239-669)</th>
                            <th>
                                <a href="#edit" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>

                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox4" name="option[]"
                                        value="1">
                                    <label for="checkbox4"></label></th>
                            <th>Organization D</th>
                            <th>OrganizationD@gmail.com</th>
                            <th> B-2 ser57 Nodia East Delhi,India.</th>
                            <th>(78-239-669)</th>
                            <th>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>

                        <tr>
                            <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox5" name="option[]"
                                        value="1">
                                    <label for="checkbox5"></label></th>
                            <th>Organization E</th>
                            <th>OrganizationE@gmail.com</th>
                            <th> B-2 ser57 Nodia East Delhi,India.</th>
                            <th>(78-555-229)</th>
                            <th>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip"
                                        title="Delete">&#xE872;</i>
                                </a>
                            </th>
                        </tr>

                    </tbody>


                </table>

                <div class="clearfix">
                    <div class="hint-text">showing <b>5</b> out of <b>25</b></div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item "><a href="#"class="page-link">1</a></li>
                        <li class="page-item "><a href="#"class="page-link">2</a></li>
                        <li class="page-item active"><a href="#"class="page-link">3</a></li>
                        <li class="page-item "><a href="#"class="page-link">4</a></li>
                        <li class="page-item "><a href="#"class="page-link">5</a></li>
                        <li class="page-item "><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>









            </div>
        </div>


        <!----add-modal start--------->
        <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Employees</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="emil" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success">Add</button>
                    </div>
                </div>
            </div>
        </div>

        <!----edit-modal end--------->





        <!----edit-modal start--------->
        <div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Employees</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="emil" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!----edit-modal end--------->


        <!----delete-modal start--------->
        <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Employees</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this Records</p>
                        <p class="text-warning"><small>this action Cannot be Undone,</small></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!----edit-modal end--------->




    </div>
</div>
@endsection