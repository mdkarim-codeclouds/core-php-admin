<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=APP_URL.'/'?>">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <!-- <img src="<?=RESOURCES_URL?>/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
                        <h2><?= $_SESSION['user_login_info']['name'] ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
                                <!-- Profile Edit Form -->
                                <form novalidate method="POST">
                                    <input type="hidden" name="form_handler" value="EDIT-ADMIN-PROFILE" />
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="name" type="text" class="form-control" id="fullName" value="<?=isset($_SESSION['old']['name']) ? $_SESSION['old']['name'] : $get_profile_data['name']?>" />
                                            <?php if(isset($_SESSION['errors']['name']) || isset($_SESSION['errors']['not_found'])){ ?>
                                            <div class="invalid-feedback d-block"><?= ( $_SESSION['errors']['name'] ?? $_SESSION['errors']['not_found'] ) ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="email" class="form-control" id="email" value="<?=$get_profile_data['email']?>" readonly />
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->
                            </div>
                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form novalidate method="POST">
                                    <input type="hidden" name="form_handler" value="EDIT-ADMIN-PASSWORD" />
                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control" id="currentPassword">
                                            <?php if(isset($_SESSION['errors']['password']) || isset($_SESSION['errors']['not_found'])){ ?>
                                            <div class="invalid-feedback d-block"><?= ( $_SESSION['errors']['password'] ?? $_SESSION['errors']['not_found'] ) ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                                            <?php if(isset($_SESSION['errors']['newpassword'])){ ?>
                                            <div class="invalid-feedback d-block"><?= ( $_SESSION['errors']['newpassword'] ) ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="confirmPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="confirmpassword" type="password" class="form-control" id="confirmPassword">
                                            <?php if(isset($_SESSION['errors']['confirmpassword'])){ ?>
                                            <div class="invalid-feedback d-block"><?= ( $_SESSION['errors']['confirmpassword'] ) ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
<?php function push_scripts(){ ?>
<script>
    $(document).ready(function(){
        <?php if(!empty($_SESSION['open_tab'])){ ?>
        $('[data-bs-target="#<?=$_SESSION['open_tab']?>"]').trigger('click');
        <?php } ?>
    });
</script>
<?php } ?>