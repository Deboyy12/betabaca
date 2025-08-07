<section class="container my-5">
    <header class="mb-4">
        <h2 class="h4 text-dark">{{ __('Hapus Akun') }}</h2>
        <p class="text-muted">
            {{ __('Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen. Sebelum menghapus akun Anda, harap unduh data atau informasi apa pun yang ingin Anda simpan.') }}
        </p>
    </header>

    <!-- Delete Account Button -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
        {{ __('Hapus Akun') }}
    </button>

    <!-- Modal -->
    <div class="modal fade {{ $errors->userDeletion->isEmpty() ? '' : 'show d-block' }}" id="confirmUserDeletionModal"
        tabindex="-1" aria-labelledby="confirmUserDeletionLabel" aria-hidden="true"
        style="{{ $errors->userDeletion->isEmpty() ? '' : 'background-color: rgba(0, 0, 0, 0.5);' }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')

                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmUserDeletionLabel">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            onclick="document.getElementById('confirmUserDeletionModal').classList.remove('show', 'd-block');"></button>
                    </div>

                    <div class="modal-body">
                        <p class="text-muted">
                            {{ __('Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen. Sebelum menghapus akun Anda, harap unduh data atau informasi apa pun yang ingin Anda simpan.') }}
                        </p>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" id="password" name="password"
                                class="form-control @if($errors->userDeletion->get('password')) is-invalid @endif"
                                placeholder="{{ __('Password') }}">
                            @if ($errors->userDeletion->get('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->userDeletion->first('password') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                            onclick="document.getElementById('confirmUserDeletionModal').classList.remove('show', 'd-block');">
                            {{ __('Cancel') }}
                        </button>
                        <button type="submit" class="btn btn-danger">
                            {{ __('Hapus Akun') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>