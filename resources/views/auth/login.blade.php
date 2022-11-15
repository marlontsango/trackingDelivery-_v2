    <x-guest-layout>
    <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Welcome back,</div>
                                            <span>Please sign in to your account below.</span>
                                        </h4>

                                               <x-auth-session-status class="mb-4" :status="session('status')" />
                                        <!--         Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-row">
            <div class="col-md-12">
                <div class="position-relative form-group">
                    <input name="email" id="exampleEmail" placeholder="Email here..." type="email" name="email" :value="old('email')"  class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="position-relative form-group">
                    <input name="password" type="password" id="examplePassword" placeholder="Password here..."  name="password" required  class="form-control">
                </div>
            </div>
        </div>
        <div class="modal-footer clearfix">

            <div class="float-left">
                <button type="submit" class="btn btn-primary btn-lg"> Login</button>
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

    </x-guest-layout>




