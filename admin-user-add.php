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
            <li class="active-bre"><a href="#"> Add new user</a>
            </li>
        </ul>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Add New System User Informations</h4>
                    </div>
                    <div class="tab-inn">
                        <form>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" value="" class="validate" required>
                                    <label class="">First name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" value="" class="validate" required>
                                    <label class="">Last name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="number" value="" class="validate" required>
                                    <label class="">Phone number</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="email" class="validate" value="" required>
                                    <label class="">Email is</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Assign Role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Editor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="password" value="" class="validate">
                                    <label class="">Password</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="password" value="" class="validate">
                                    <label class="">Confirm Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="" class="validate">
                                    <label>User id</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="file-field input-field col s12">
                                    <div class="btn admin-upload-btn">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Profile image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input"></i>
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

<!-- header -->
<?php include "includes/footer.php"; ?>