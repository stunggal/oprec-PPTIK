@extends('layout.main')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">General Form Elements</h5>

                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Event</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Responsible</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Place</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Departement</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="departemen" id="gridRadios1"
                                            value="jaringan" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Networking
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="departemen" id="gridRadios2"
                                            value="administrasi">
                                        <label class="form-check-label" for="gridRadios2">
                                            Administration
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="departemen" id="gridRadios3"
                                            value="developer">
                                        <label class="form-check-label" for="gridRadios3">
                                            Developer
                                        </label>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Participants</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            name="peserta1" value="1" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch
                                            checkbox input</label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            name="peserta1" value="1" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch
                                            checkbox input</label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            name="peserta1" value="1" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch
                                            checkbox input</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Submit Button</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
