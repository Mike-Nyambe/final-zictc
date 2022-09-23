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
            <li class="active-bre"><a href="#"> Dashboard</a>
            </li>
            <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Profile Setting</h4>
                    </div>
                    <div class="tab-inn">
                        <form>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="first_name" type="text" value="" class="validate" required>
                                    <label for="first_name" class="">First Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" value="" class="validate"
                                        required>
                                    <label for="last_name" class="">Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="phone" type="number" value="" class="validate" required>
                                    <label for="phone">Phone number</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="validate" value="" required>
                                    <label for="cphone" class="">Email is</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="password" type="password" value="srtg24356" class="validate">
                                    <label for="password" class="">Password</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="password1" type="password" value="sdfgh56dfg" class="validate">
                                    <label for="password1" class="">Confirm Password</label>
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