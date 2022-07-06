@extends('layout.main')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Participant</h5>

                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Semester</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="semester" id="1"
                                            value="1" checked>
                                        <label class="form-check-label" for="1">
                                            1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="semester" id="3"
                                            value="3">
                                        <label class="form-check-label" for="3">
                                            3
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="semester" id="5"
                                            value="5">
                                        <label class="form-check-label" for="5">
                                            5
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="semester" id="7"
                                            value="7">
                                        <label class="form-check-label" for="7">
                                            7
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Division</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="division" id="jaringan"
                                            value="jaringan" checked>
                                        <label class="form-check-label" for="jaringan">
                                            Networking
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="division" id="administrasi"
                                            value="administrasi">
                                        <label class="form-check-label" for="administrasi">
                                            Administration
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="division" id="developer"
                                            value="developer">
                                        <label class="form-check-label" for="developer">
                                            Developer
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="row mb-3">
                                {{-- afi, saa, iqt, pba, tbi, pai, hes, pm, ei, mnj, hi, ilkom, ti, agro, tip, kkk --}}
                                <legend class="col-form-label col-sm-2 pt-0">Prodi</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="afi"
                                            value="afi" checked>
                                        <label class="form-check-label" for="afi">
                                            AFI
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="saa"
                                            value="saa">
                                        <label class="form-check-label" for="saa">
                                            SAA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="iqt"
                                            value="iqt">
                                        <label class="form-check-label" for="iqt">
                                            IQT
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="pba"
                                            value="pba">
                                        <label class="form-check-label" for="pba">
                                            PBA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="tbi"
                                            value="tbi">
                                        <label class="form-check-label" for="tbi">
                                            TBI
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="pai"
                                            value="pai">
                                        <label class="form-check-label" for="pai">
                                            P.A.I
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="hes"
                                            value="hes">
                                        <label class="form-check-label" for="hes">
                                            HES
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="pm"
                                            value="pm">
                                        <label class="form-check-label" for="pm">
                                            PM
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="ei"
                                            value="ei">
                                        <label class="form-check-label" for="ei">
                                            EI
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="mnj"
                                            value="mnj">
                                        <label class="form-check-label" for="mnj">
                                            MNJ
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="hi"
                                            value="hi">
                                        <label class="form-check-label" for="hi">
                                            HI
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="ilkom"
                                            value="ilkom">
                                        <label class="form-check-label" for="ilkom">
                                            Ilkom
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="ti"
                                            value="ti">
                                        <label class="form-check-label" for="ti">
                                            TI
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="agro"
                                            value="agro">
                                        <label class="form-check-label" for="agro">
                                            Agro
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="tip"
                                            value="tip">
                                        <label class="form-check-label" for="tip">
                                            TIP
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="prodi" id="kkk"
                                            value="kkk">
                                        <label class="form-check-label" for="kkk">
                                            KKK
                                        </label>
                                    </div>
                                </div>
                            </fieldset>

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
