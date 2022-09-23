
<!-- header -->
<?php include "includes/header.php"; ?>

<!--== BODY CONTNAINER ==-->
<?php include "includes/sidebar.php"; ?>
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add New Record</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
                                <div class="sb2-2-add-blog sb2-2-1">
                                    <h2>Add New Record</h2>
                                    <ul class="nav nav-tabs tab-list">
                                        <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true"><i class="fa fa-info" aria-hidden="true"></i> <span>Detail</span></a>
                                        </li>
                                        <li class=""><a data-toggle="tab" href="#menu1" aria-expanded="false"><i class="fa fa-book" aria-hidden="true"></i> <span>Education Background</span></a>
                                        </li>
                                        <li class=""><a data-toggle="tab" href="#menu2" aria-expanded="false"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Profile Image</span></a>
                                        </li>
                                        <li class=""><a data-toggle="tab" href="#menu3" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i> <span>Associates</span></a>
                                        </li>
                                        <li class=""><a data-toggle="tab" href="#menu4" aria-expanded="false"><i class="fa fa-phone" aria-hidden="true"></i> <span>Contact Info</span></a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade active in">
                                            <div class="box-inn-sp">
                                                <div class="inn-title">
                                                    <h4>Criminal's Information</h4>
                                                </div>
                                                <div class="bor">
                                                    <form>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input id="list-title" type="text" class="validate">
                                                                <label for="list-title" class="">Full Name</label>
                                                            </div>
                                                            <div class="input-field col s12">
                                                                <input id="list-title" type="number" class="validate">
                                                                <label for="list-title">NRC Number</label>
                                                            </div>
                                                            <div class="input-field col s12">
                                                                <input id="list-title" type="date" class="validate">
                                                            </div>
                                                            <div class="input-field col s12">
                                                                <input id="list-title" type="number" class="validate">
                                                                <label for="list-title">Criminal's Address</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <textarea class="materialize-textarea"></textarea>
                                                                <label>Criminals Biography:</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <select>
                                                                    <option value="" disabled selected>Select Gender</option>
                                                                    <option value="1">Male</option>
                                                                    <option value="2">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">
                                            <div class="inn-title">
                                                <h4>Educational Background</h4>
                                            </div>
                                            <div class="bor ad-cou-deta-h4">
                                                <form>
                                                    <h4>Primary School:</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>school 1</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate">
                                                            <label>school 2</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate">
                                                            <label>school 3</label>
                                                        </div>
                                                    </div>
                                                    <h4>Secondary School:</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>school 1</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate">
                                                            <label>school 2</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate">
                                                            <label>school 3</label>
                                                        </div>
                                                    </div>
                                                    <h4>Tertiary Education</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>school 1</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate">
                                                            <label>school 2</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate">
                                                            <label>school 3</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div id="menu2" class="tab-pane fade">
                                            <div class="inn-title">
                                                <h4>Photo of Criminal</h4>
                                            </div>
                                            <div class="bor">
                                                <form action="#">
                                                    <div class="file-field input-field">
                                                        <div class="btn admin-upload-btn">
                                                            <span>File</span>
                                                            <input type="file" multiple="">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload Main Profile Photo">
                                                        </div>
                                                    </div>
                                                    <div class="file-field input-field">
                                                        <div class="btn admin-upload-btn">
                                                            <span>File</span>
                                                            <input type="file" multiple="">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload Side View (right)">
                                                        </div>
                                                    </div>
                                                    <div class="file-field input-field">
                                                        <div class="btn admin-upload-btn">
                                                            <span>File</span>
                                                            <input type="file" multiple="">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload Side View (left)">
                                                        </div>
                                                    </div>
                                                    <div class="file-field input-field">
                                                        <div class="btn admin-upload-btn">
                                                            <span>File</span>
                                                            <input type="file" multiple="">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Finger Prints">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" value="Upload"></i>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div id="menu3" class="tab-pane fade">
                                            <div class="inn-title">
                                                <h4>Associates Or Family Members</h4>
                                            </div>
                                            <div class="bor ad-cou-deta-h4">
                                                <form>
                                                    <h4>Next to Keen:</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <select>
                                                                <option value="" disabled selected>Select Gender</option>
                                                                <option value="1">Mother</option>
                                                                <option value="2">Father</option>
                                                                <option value="2">Aunty</option>
                                                                <option value="2">Uncle</option>
                                                                <option value="2">Grand Monther</option>
                                                                <option value="2">Grand Father</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>Full Name:</label>
                                                        </div>
                                                    </div>
                                                    <h4>Siblings:</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <select>
                                                                <option value="" disabled selected>Select Gender</option>
                                                                <option value="1">Brother</option>
                                                                <option value="2">Sister</option>
                                                                <option value="1">Cousin</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>Full Name:</label>
                                                        </div>
                                                    </div>
                                                    <h4>Spouce:</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <select>
                                                                <option value="" disabled selected>Select Gender</option>
                                                                <option value="1">Wife</option>
                                                                <option value="2">Husband</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>Full Name:</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div id="menu4" class="tab-pane fade">
                                            <div class="inn-title">
                                                <h4>Contact Info</h4>
                                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                            </div>
                                            <div class="bor">
                                                <form>
                                                    <div class="row">
                                                        <div class="input-field col s6">
                                                            <input id="t5-n3" type="number" class="validate">
                                                            <label for="t5-n3">Phone Number 1</label>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <input id="t5-n4" type="number" class="validate">
                                                            <label for="t5-n4">Phone Number 2</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input id="t5-n5" type="email" class="validate">
                                                            <label for="t5-n5">Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <textarea id="t5-n6" class="materialize-textarea"></textarea>
                                                            <label for="t5-n6">Home Address:</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Upload"></i>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<!-- footer -->
<?php include "includes/footer.php"; ?>
