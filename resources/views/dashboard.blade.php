<x-layout_admin>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- body content --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Rotator Management System</h5>

                    <div class="ibox-content">

                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="html5buttons">
                                    <div class="dt-buttons btn-group">
                                        <!-- Button Add -->
                                        <button type="button" class="btn btn-outline btn-primary" data-toggle="modal"
                                            data-target="#addModal">
                                            Add
                                        </button>

                                        <!-- Button Edit -->
                                        <button type="button" class="btn btn-outline btn-success" data-toggle="modal"
                                            data-target="#editModal">
                                            Edit
                                        </button>

                                        <!-- Button Delete -->
                                        <button type="button" class="btn btn-outline btn-danger" data-toggle="modal"
                                            data-target="#deleteModal">
                                            Delete
                                        </button>
                                    </div>
                                </div>

                                <!-- Modal Add -->
                                <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                                    aria-labelledby="addModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addModalLabel">Add New Item</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form content for adding -->
                                                <form class="text-center">
                                                    <div class="form-group">
                                                        <label for="itemName">Name </label>
                                                        <input type="text" class="form-control" id="itemName"
                                                            placeholder="Enter name">
                                                    </div>
                                                    <br>
                                                    <br>

                                                    <div class="form-group">
                                                        <label for="itemName">No HP</label>
                                                        <input type="number" class="form-control" id="itemName"
                                                            placeholder="Enter the number">
                                                    </div>
                                                    <!-- Add other fields as needed -->
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Delete -->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this item?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Edit -->
                                <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                                    aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Edit Item</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form content for editing -->
                                                <form class="text-center">
                                                    <div class="form-group">
                                                        <label for="itemName">Name </label>
                                                        <input type="text" class="form-control" id="itemName"
                                                            placeholder="Enter name">
                                                    </div>
                                                    <br>
                                                    <br>

                                                    <div class="form-group">
                                                        <label for="itemName">No HP</label>
                                                        <input type="number" class="form-control" id="itemName"
                                                            placeholder="Enter the number">
                                                    </div>
                                                    <!-- Add other fields as needed -->
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show
                                        <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                            class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div> --}}
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label>
                                        Search:
                                        <div class="input-group">
                                            <input type="search" class="form-control input-sm" placeholder=""
                                                aria-controls="DataTables_Table_0">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary btn-sm">Search</button>
                                            </span>
                                        </div>

                                    </label>
                                </div>

                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                    aria-live="polite">Showing 1 to 25 of 57 entries</div>
                                <table
                                    class="table table-striped table-bordered table-hover dataTables-example dataTable"
                                    id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"
                                    role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Browser: activate to sort column ascending"
                                                style="width: 297.021px;">Select</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Browser: activate to sort column ascending"
                                                style="width: 297.021px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Platform(s): activate to sort column ascending"
                                                style="width: 267.073px;">No HP</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Engine version: activate to sort column ascending"
                                                style="width: 205.552px;">Created At</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="CSS grade: activate to sort column ascending"
                                                style="width: 146.906px;">Updated At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">
                                                <input type="checkbox" name="select_gecko" value="Gecko">
                                            </td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                    </tbody>
                                    {{-- <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Rendering engine</th>
                                            <th rowspan="1" colspan="1">Browser</th>
                                            <th rowspan="1" colspan="1">Platform(s)</th>
                                            <th rowspan="1" colspan="1">Engine version</th>
                                            <th rowspan="1" colspan="1">CSS grade</th>
                                        </tr>
                                    </tfoot> --}}
                                </table>
                                {{-- <div class="dataTables_paginate paging_simple_numbers"
                                    id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled"
                                            id="DataTables_Table_0_previous"><a href="#"
                                                aria-controls="DataTables_Table_0" data-dt-idx="0"
                                                tabindex="0">Previous</a></li>
                                        <li class="paginate_button active"><a href="#"
                                                aria-controls="DataTables_Table_0" data-dt-idx="1"
                                                tabindex="0">1</a></li>
                                        <li class="paginate_button "><a href="#"
                                                aria-controls="DataTables_Table_0" data-dt-idx="2"
                                                tabindex="0">2</a></li>
                                        <li class="paginate_button "><a href="#"
                                                aria-controls="DataTables_Table_0" data-dt-idx="3"
                                                tabindex="0">3</a></li>
                                        <li class="paginate_button next" id="DataTables_Table_0_next"><a
                                                href="#" aria-controls="DataTables_Table_0" data-dt-idx="4"
                                                tabindex="0">Next</a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Link Generator</h5>

                    <div class="ibox-content">
                        <div class="table-responsive text-center">
                            <p>Click button below for generating link</p>
                            <button type="button" class="btn btn-primary btn-lg my-4">Generate Link WA
                                Rotator</button>
                        </div>
                        <p>Generate Link Result : </p>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary">
                                    <i class="fa fa-copy"></i>
                                </button>
                            </span>
                        </div>
                        <hr>
                        <div class="table-responsive text-center">
                            <p>Check Generated Link</p>
                            <button type="button" class="btn btn-primary btn-md my-4">Test</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout_admin>
