<div>
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
                    <span id="boot-icon" {!! $userDraft
                        ? 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"'
                        : 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Adresse</td>
                <td>
                    <span id="boot-icon" {!! $addressDraft
                        ? 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"'
                        : 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Abweichende Adresse</td>
                <td>
                    <span id="boot-icon" {!! $abweichendeAddressDraft
                        ? 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"'
                        : 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Ausbildung</td>
                <td>
                    <span id="boot-icon" {!! $educationDraft
                        ? 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"'
                        : 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Auszahlung</td>
                <td>
                    <span id="boot-icon" {!! $accountDraft
                        ? 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"'
                        : 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Eltern</td>
                <td>
                    <span id="boot-icon" {!! $parentsDraft
                        ? 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"'
                        : 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Geschwister</td>
                <td>
                    <span id="boot-icon" {!! $siblingDraft
                        ? 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"'
                        : 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Kosten</td>
                <td>
                    <span id="boot-icon" {!! $costDraft
                        ? 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"'
                        : 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Finanzierung</td>
                <td>
                    <span id="boot-icon" {!! $financingDraft
                        ? 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"'
                        : 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"' !!}>
                    </span>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Bemerkung und Beilagen</td>
                <td>
                    <span id="boot-icon" {!! $enclosureDraft
                        ? 'class="bi bi-x-circle" style="color: rgb(255, 0, 0);"'
                        : 'class="bi bi-check-circle" style="color: rgb(0, 128, 55);"' !!}>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
