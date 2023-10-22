<div wire:init="completeApplication">
    <p>Der Antrag kann eingereicht werden, wenn alle Pflichtangaben gemacht sind.</p>
    <table class="table table-striped" id="sortTable">
        <thead>
            <tr>
                <th>Schritt</th>
                <th>Daten</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>1</b></td>
                <td><b>Bewerber *</b></td>
                <td>
                    <span id="boot-icon" {!! $userNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td><b>2</b></td>
                <td><b>Adresse *</b></td>
                <td>
                    <span id="boot-icon" {!! $addressNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Abweichende Adresse</td>
                <td>
                    <span id="boot-icon" {!! $abweichendeAddressNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td><b>4</b></td>
                <td><b>Ausbildung *</b></td>
                <td>
                    <span id="boot-icon" {!! $educationNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td><b>5</b></td>
                <td><b>Auszahlung *</b></td>
                <td>
                    <span id="boot-icon" {!! $accountNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Eltern</td>
                <td>
                    <span id="boot-icon" {!! $parentsNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Geschwister</td>
                <td>
                    <span id="boot-icon" {!! $siblingNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td><b>8</b></td>
                <td><b>Kosten *</b></td>
                <td>
                    <span id="boot-icon" {!! $costNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td><b>9</b></td>
                <td><b>Finanzierung *</b></td>
                <td>
                    <span id="boot-icon" {!! $financingNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td><b>10</b></td>
                <td><b>Bemerkung und Beilagen *</b></td>
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
