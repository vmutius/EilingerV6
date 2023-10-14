<form wire:submit.prevent="saveEducation">
    <div class="content-header mb-3">
        <h3 class="mb-0">Ausbildung</h3>
        <div class="d-flex justify-content-between">
            <div>
                <small>für welche Beiträge verlangt werden</small>
            </div>

        </div>
        <div class="row g-3">

            <x-notification />

            <div class="col-sm-6">
                <label class="form-label" for="education">Ausbildung *</label>
                <select wire:model.lazy="education.education" name="education" class="form-select">
                    <option selected value="">-- Wählen Sie eine Option --</option>
                    @foreach (\App\Enums\Education::cases() as $education)
                        <option value="{{ $education->value }}">{{ $education->value }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('education.education'){{ $message }}@enderror</span>

            </div>
            <div class="col-sm-6">
                <label class="form-label" for="name">Bezeichnung und Ort der Ausbildungsstätte *</label>
                <input wire:model.lazy="education.name" type="text" class="form-control" />
                <span class="text-danger">@error('education.name'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="final">beabsichtigter Abschluss als *</label>
                <input wire:model.lazy="education.final" type="text" class="form-control" />
                <span class="text-danger">@error('education.final'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="grade">Abschluss *</label>
                <select wire:model.lazy="education.grade" name="grade" class="form-select">
                    <option selected value="">-- Wählen Sie eine Option --</option>
                    @foreach (App\Enums\Grade::cases() as $grade)
                        <option value="{{ $grade->value }}">{{ $grade->value }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('education.grade'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-6"> 
                <label class="form-label" for="ects_points">ECTS-Punkte für das kommende Semester gemäss Beleg *</label>
                <input wire:model.lazy="education.ects_points" type="text" id="ects_points" class="form-control" />
                <span class="text-danger">@error('education.ects_points'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="time">Pensum *</label>
                <select wire:model.lazy="education.time" class="form-select">
                    <option selected value="">-- Wählen Sie eine Option --</option>
                    @foreach (App\Enums\Time::cases() as $time)
                        <option value="{{ $time->value }}">{{ $time->name }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('education.time'){{ $message }}@enderror</span>
            </div>


            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success">
                    <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
                </button>
            </div>
        </div>
</form>
