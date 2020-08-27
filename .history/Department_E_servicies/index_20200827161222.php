<?php include('../include/header.php')?>
<?php include('../include/nav.php')?>
<div class="container mt-5">
    <div class="row">
        <div class="d-flex justify-content-center col-12 mt-5">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-12 mb-3 md-form">
                        <label for="validationCustom012">user name</label>
                        <input type="text" class="form-control" id="validationCustom012" placeholder="First name"
                            value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 mb-3 md-form">
                        <label for="validationCustom022">Password</label>
                        <input type="password" class="form-control" id="validationCustom022" value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                </div>


                <div class="d-flex justify-content-center col-12 mb-2">
                    <button class="btn btn-custom  btn-rounded d-block p-2" type="submit">دخول</button>

                </div>
                <div class="d-flex justify-content-center col-12">
                    <button class="btn btn-custom btn-rounded d-block p-2" type="submit">بوابة الدخول
                        الموحد</button>

                </div>
                <div class="d-flex justify-content-center col-12 ">
                    <button class="btn btn-custom  btn-rounded d-block p-2" type="submit">مستخدم جديد</button>

                </div>
            </form>
        </div>
    </div>
</div>

<?php include('../include/footer.php')?>