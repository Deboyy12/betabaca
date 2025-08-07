<section class="container my-5">
    <header class="mb-4">
        <h2 class="h4 text-dark">{{ __('Update Password') }}</h2>
        <p class="text-muted">{{ __('Pastikan akun Anda menggunakan kata sandi yang panjang dan acak untuk menjaga keamanan.') }}</p>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="update_password_current_password" class="form-label">{{ __('Kata Sandi Saat Ini') }}</label>
            <input id="update_password_current_password" name="current_password" type="password"
                   class="form-control @if($errors->updatePassword->get('current_password')) is-invalid @endif"
                   autocomplete="current-password">
            @if ($errors->updatePassword->get('current_password'))
                <div class="invalid-feedback">
                    {{ $errors->updatePassword->first('current_password') }}
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="update_password_password" class="form-label">{{ __('Password Baru') }}</label>
            <input id="update_password_password" name="password" type="password"
                   class="form-control @if($errors->updatePassword->get('password')) is-invalid @endif"
                   autocomplete="new-password">
            @if ($errors->updatePassword->get('password'))
                <div class="invalid-feedback">
                    {{ $errors->updatePassword->first('password') }}
                </div>
            @endif
        </div>

        <div class="mb-4">
            <label for="update_password_password_confirmation" class="form-label">{{ __('Konfirmasi Password') }}</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                   class="form-control @if($errors->updatePassword->get('password_confirmation')) is-invalid @endif"
                   autocomplete="new-password">
            @if ($errors->updatePassword->get('password_confirmation'))
                <div class="invalid-feedback">
                    {{ $errors->updatePassword->first('password_confirmation') }}
                </div>
            @endif
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">
                {{ __('Simpan') }}
            </button>

            @if (session('status') === 'password-updated')
                <span class="text-success small" id="pwUpdateMsg">{{ __('Tersimpan') }}</span>
            @endif
        </div>
    </form>
</section>

<script>
    // Optional auto-hide for "Saved." message
    setTimeout(() => {
        const msg = document.getElementById('pwUpdateMsg');
        if (msg) msg.style.display = 'none';
    }, 2000);
</script>
