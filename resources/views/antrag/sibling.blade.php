<form wire:submit.prevent="Step6SiblingSubmit">
    <div class="content-header mb-3">
        <h6 class="mb-0">Geschwister</h6>
        <small>Enter Your Account Details.</small>
    </div>
    <div class="row g-3">
        <div class="col-sm-6">
            <label class="form-label" for="username">Username</label>
            <input type="text" id="username" class="form-control" placeholder="johndoe" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="email">Email</label>
            <input type="email" id="email" class="form-control" placeholder="john.doe@email.com"
                aria-label="john.doe" />
        </div>
        <div class="col-sm-6 form-password-toggle">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password2" />
                <span class="input-group-text cursor-pointer" id="password2"><i class="bx bx-hide"></i></span>
            </div>
        </div>
        <div class="col-sm-6 form-password-toggle">
            <label class="form-label" for="confirm-password">Confirm Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="confirm-password" class="form-control"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="confirm-password2" />
                <span class="input-group-text cursor-pointer" id="confirm-password2"><i class="bx bx-hide"></i></span>
            </div>
        </div>

        <div class="col-md-12 text-center">        
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
