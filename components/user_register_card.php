<div class="card reg-card image-header p-3">
    <div class="row p-2 d-flex flex-justify-center">
        <p class="title-card">Daftar Akun</p>
    </div>
    <div class="row p-2 d-flex flex-column text-center">
        <form action="" method="POST">
            <div class="mb-3">
                <input type="text" name="name" oninput="this.value = this.value.replace(/\s/g, '')" data-role="input"
                    class="form-control py-2" id="inputUsername" placeholder="Nama Lengkap">
            </div>
            <div class="mb-3">
                <input type="email" name="email" oninput="this.value = this.value.replace(/\s/g, '')" data-role="input"
                    class="form-control py-2" id="inputEmail" placeholder="Alamat Surel">
            </div>
            <div class="mb-3">
                <input type="tel" name="phone" oninput="this.value = this.value.replace(/\s/g, '')" data-role="input"
                    class="form-control py-2" id="phone" placeholder="Nomor Telepon">
            </div>
            <div class="mb-5">
                <input type="password" name="password" oninput="this.value = this.value.replace(/\s/g, '')"
                    class="form-control py-2" id="inputPassword1" placeholder="Kata Sandi">
            </div>
            <div class="mb-5">
                <input type="password" name="confirm_password" oninput="this.value = this.value.replace(/\s/g, '')"
                    class="form-control py-2" id="inputPassword2" placeholder="Konfirmasi Sandi">
            </div>
            <input type="submit" name="user_submit_register" class="btn btn-sm button secondary component-tone mt-5"
                value="Daftar">
        </form>
        <span class="mt-5">Sudah punya akun? <a href="user_login.php">masuk</a></span>
    </div>
</div>