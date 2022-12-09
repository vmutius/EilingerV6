<div class="content-header mb-3">
    <h6 class="mb-0">Ausbildung</h6>
    <small>Enter Your Account Details.</small>
</div>
<div class="row g-3">
    <div class="col-sm-6">
        <label class="form-label" for="salutation">Ausbildung</label>
        <select id="education" name="education" class="form-select" >
            <option value="">-- Wählen Sie eine Option --</option>
            @foreach(App\Models\Education::EDUCATION as $key => $label)
                <option value="{{ $key }}">{{ $label }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-6">
        <label class="form-label" for="name">Bezeichnung und Ort der Ausbildungsstätte</label>
        <input type="text" id="name" class="form-control" />
    </div>
    <div class="col-sm-6">
    <label class="form-label" for="final">beabsichtigter Abschluss als</label>
    <input type="text" id="final" class="form-control"/>
    </div>
    <div class="col-sm-6">
        <label class="form-label" for="grade">Abschluss</label>
        <select id="grade" name="grade" class="form-select" >
            <option value="">-- Wählen Sie eine Option --</option>
            @foreach(App\Models\Education::GRADE as $key => $label)
                <option value="{{ $key }}">{{ $label }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-6">
        <label class="form-label" for="ects-points">ECTS-Punkte für das kommende Semester gemäss Beleg</label>
        <input type="text" id="ects-points" class="form-control"/>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="time">Pensum</label>
            <select id="time" name="time" class="form-select" >
                <option value="">-- Wählen Sie eine Option --</option>
                @foreach(App\Models\Education::TIME as $key => $label)
                    <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
    
    
    <div class="col-12 d-flex justify-content-between">
    <button class="btn btn-colour-1 btn-prev">
        <i class="bx bx-chevron-left bx-sm ms-sm-n2 align-middle"></i>
        <span class="align-middle d-sm-inline-block d-none">Previous</span>
    </button>
    <button class="btn btn-colour-1  btn-next">
        <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
        <i class="bx bx-chevron-right bx-sm me-sm-n2 align-middle"></i>
    </button>
    </div>
</div>
