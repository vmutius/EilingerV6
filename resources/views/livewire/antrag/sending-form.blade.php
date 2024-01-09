<div wire:init="completeApplication">
    <div class="content-header mb-3">
        <h3 class="mb-0">{{  __('sending.title')  }}</h3>
        <div class="d-flex justify-content-between">
            <div>
                <p><small>{{  __('sending.subTitle')  }}</small></p>
            </div>
        </div>
    </div>
    <table class="table table-striped" id="sortTable">
        <thead>
        <tr>
            <th>{{ __('sending.step') }}</th>
            <th>{{ __('sending.data') }}</th>
            <th>{{ __('sending.status') }}</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>1</b></td>
                <td><b>{{ __('sending.applicant') }} *</b></td>
                <td>
                    <span id="boot-icon" {!! $userNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td><b>2</b></td>
                <td><b>{{ __('sending.address') }} *</b></td>
                <td>
                    <span id="boot-icon" {!! $addressNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>{{ __('sending.aboardAddress') }}</td>
                <td>
                    <span id="boot-icon" {!! $abweichendeAddressNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td><b>4</b></td>
                <td><b>{{ __('sending.education') }} *</b></td>
                <td>
                    <span id="boot-icon" {!! $educationNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td><b>5</b></td>
                <td><b>{{ __('sending.account') }} *</b></td>
                <td>
                    <span id="boot-icon" {!! $accountNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>{{ __('sending.parents') }}</td>
                <td>
                    <span id="boot-icon" {!! $parentsNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>{{ __('sending.sibling') }}</td>
                <td>
                    <span id="boot-icon" {!! $siblingNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td><b>8</b></td>
                <td><b>{{ __('sending.cost') }} *</b></td>
                <td>
                    <span id="boot-icon" {!! $costNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td><b>9</b></td>
                <td><b>{{ __('sending.financing') }} *</b></td>
                <td>
                    <span id="boot-icon" {!! $financingNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td><b>10</b></td>
                <td><b>{{ __('sending.remark') }} *</b></td>
                <td>
                    <span id="boot-icon" {!! $enclosureNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
