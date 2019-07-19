

<!-- User modal -->
<!-- Modal -->
<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Add Course</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="user_action.php?action=add" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="modal-body">
                <div class="col-lg-12">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="depertment_id" class=" form-control-label">Depertment</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select class="form-control" name="type">
                                    <option value="1">IT</option>
                                    <option value="2">English</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="col-lg-12">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="course_name" class=" form-control-label">Course name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="course_name" name="course_name" placeholder="Course name"
                                    class="form-control">
                                <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div>
                </div>
                <div class="col-lg-12">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="course_description" class=" form-control-label">Course Description</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="course_description" name="course_description" placeholder="Course Description"
                                    class="form-control">
                                <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>