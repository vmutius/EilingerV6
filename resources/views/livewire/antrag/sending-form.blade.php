<div wire:init="completeApplication">
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
                <td>1</td>
                <td>Bewerber</td>
                <td>
                    <span id="boot-icon" {!! $userNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Adresse</td>
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
                <td>4</td>
                <td>Ausbildung</td>
                <td>
                    <span id="boot-icon" {!! $educationNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Auszahlung</td>
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
                <td>8</td>
                <td>Kosten</td>
                <td>
                    <span id="boot-icon" {!! $costNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Finanzierung</td>
                <td>
                    <span id="boot-icon" {!! $financingNoDraft
                        ? 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"'
                        : 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Bemerkung und Beilagen</td>
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
