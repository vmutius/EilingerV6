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
                    @if ($userDraft === 1)
                        <span id="boot-icon" class="bi bi-x-circle" style="color: rgb(255, 0, 0);"></span>
                    @endif
                    <span id="boot-icon" class="bi bi-check-circle" style="color: rgb(0, 128, 55);"></span>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Adresse</td>
                <td>
                    @if ($addressDraft === 1)
                        <span id="boot-icon" class="bi bi-x-circle" style="color: rgb(255, 0, 0);"></span>
                    @endif
                    <span id="boot-icon" class="bi bi-check-circle" style="color: rgb(0, 128, 55);"></span>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Abweichende Adresse</td>
                <td>
                    @if ($abweichendeAddressDraft === 1)
                        <span id="boot-icon" class="bi bi-x-circle" style="color: rgb(255, 0, 0);"></span>
                    @endif
                    <span id="boot-icon" class="bi bi-check-circle" style="color: rgb(0, 128, 55);"></span>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Ausbildung</td>
                <td>
                    @if ($educationDraft === 1)
                        <span id="boot-icon" class="bi bi-x-circle" style="color: rgb(255, 0, 0);"></span>
                    @endif
                    <span id="boot-icon" class="bi bi-check-circle" style="color: rgb(0, 128, 55);"></span>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Auszahlung</td>
                <td>
                    @if ($abweichendeAddressDraft === 1)
                        <span id="boot-icon" class="bi bi-x-circle" style="color: rgb(255, 0, 0);"></span>
                    @endif
                    <span id="boot-icon" class="bi bi-check-circle" style="color: rgb(0, 128, 55);"></span>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Eltern</td>
                <td>
                    @if ($abweichendeAddressDraft === 1)
                        <span id="boot-icon" class="bi bi-x-circle" style="color: rgb(255, 0, 0);"></span>
                    @endif
                    <span id="boot-icon" class="bi bi-check-circle" style="color: rgb(0, 128, 55);"></span>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Geschwister</td>
                <td>
                    @if ($abweichendeAddressDraft === 1)
                        <span id="boot-icon" class="bi bi-x-circle" style="color: rgb(255, 0, 0);"></span>
                    @endif
                    <span id="boot-icon" class="bi bi-check-circle" style="color: rgb(0, 128, 55);"></span>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Kosten</td>
                <td>
                    @if ($abweichendeAddressDraft === 1)
                        <span id="boot-icon" class="bi bi-x-circle" style="color: rgb(255, 0, 0);"></span>
                    @endif
                    <span id="boot-icon" class="bi bi-check-circle" style="color: rgb(0, 128, 55);"></span>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Finanzierung</td>
                <td>
                    @if ($abweichendeAddressDraft === 1)
                        <span id="boot-icon" class="bi bi-x-circle" style="color: rgb(255, 0, 0);"></span>
                    @endif
                    <span id="boot-icon" class="bi bi-check-circle" style="color: rgb(0, 128, 55);"></span>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Bemerkung und Beilagen</td>
                <td>
                    @if ($abweichendeAddressDraft === 1)
                        <span id="boot-icon" class="bi bi-x-circle" style="color: rgb(255, 0, 0);"></span>
                    @endif
                    <span id="boot-icon" class="bi bi-check-circle" style="color: rgb(0, 128, 55);"></span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
