

<!-- User modal -->
<!-- Modal -->
<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Add User</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="user_action.php?action=add" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="modal-body">
                <div class="col-lg-12">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="username" class=" form-control-label">User name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="username" name="username" placeholder="User name"
                                    class="form-control">
                                <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="email-input" class=" form-control-label">Email</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="email" id="email-input" name="email-input" placeholder="Enter Email"
                                    class="form-control">
                                <small class="help-block form-text">Please enter your email</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="password-input" class=" form-control-label">Password</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="password" id="password-input" name="password-input" placeholder="Password"
                                    class="form-control">
                                <small class="help-block form-text">Please enter a complex password</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="password-input" class=" form-control-label">First Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="password" id="password-input" name="password-input" placeholder="First Name"
                                    class="form-control">
                                <small class="help-block form-text">Please enter a complex password</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="password-input" class=" form-control-label">Last Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="password" id="password-input" name="password-input" placeholder="Last Name"
                                    class="form-control">
                                <small class="help-block form-text">Please enter a complex password</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Status</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="select" id="select" class="form-control">
                                    <option value="0">Please select</option>
                                    <option value="1">Student</option>
                                    <option value="2">Teacher</option>
                                    <option value="3">Staff</option>
                                    <option value="4">CEO</option>
                                    <option value="5">Alumni</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Corse</label>
                            </div>
                            <div class="col col-md-9">
                                <div class="form-check-inline form-check">
                                    <label for="inline-checkbox1" class="form-check-label ">
                                        <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1"
                                            value="option1" class="form-check-input">English
                                    </label>
                                    <label for="inline-checkbox2" class="form-check-label ">
                                        <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2"
                                            value="option2" class="form-check-input">Web Basic
                                    </label>
                                    <label for="inline-checkbox2" class="form-check-label ">
                                        <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2"
                                            value="option2" class="form-check-input">Web Design
                                    </label>
                                    <label for="inline-checkbox2" class="form-check-label ">
                                        <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2"
                                            value="option2" class="form-check-input">Web Develop
                                    </label>
                                    <label for="inline-checkbox2" class="form-check-label ">
                                        <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2"
                                            value="option2" class="form-check-input">Ruby on Rails
                                    </label>
                                    <label for="inline-checkbox2" class="form-check-label ">
                                        <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2"
                                            value="option2" class="form-check-input">AI
                                    </label>
                                    <label for="inline-checkbox3" class="form-check-label ">
                                        <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3"
                                            value="option3" class="form-check-input">none
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="file-input" class=" form-control-label">File input</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="file-input" name="file-input" class="form-control-file">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Website URL</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="url" id="text-input" name="url"　value="http://" 
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">FaceBook URL</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="text-input" placeholder="url"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">twitter URL</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="url" id="text-input" name="url"　value="http://" 
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Instagram URL</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="text-input" placeholder="url"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">github URL</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="text-input" placeholder="url"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">memo</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..."
                                    class="form-control"></textarea>
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