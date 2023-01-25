@extends('layouts.default')
@push('styles')
    <link href="{{ asset('assets/css/form.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/js/bundles/multiselect/css/multi-select.css')}}" rel="stylesheet">
@endpush
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li>
                                <h4 class="page-title">Profile</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Your content goes here  -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="m-b-20">
                            <div class="contact-grid">
                                <div class="profile-header bg-dark">
                                    <div class="user-name">{{$prof->nom}}</div>
                                    <div class="name-center">{{$prof->prenom}}</div>
                                </div>

                                {{-- <img src="/image/{{ $prof->image}}" class="user-img" alt=""> --}}
                                <img src="/assets/images/user/userbig3.jpg" class="user-img" alt="">

                                <div>
                                    <p>Matricule : {{$prof->matricule}}</p>
                                </div>
                                <div>
                                    <p>Nom : {{$prof->nom}}</p>
                                </div>
                                <div>
                                    <p>Prénom : {{$prof->prenom}}</p>
                                </div>
                                <div>
                                    <p>Sex : {{$prof->genre}}</p>
                                </div>
                                <div>
                                    <p>Email : {{$prof->email}}</h3>
                                </div>
                                <div>
                                    <p>Nationation : {{$prof->nationalite}}</p>
                                </div>
                                <div>
                                    <p>Date de naissance : {{$prof->dateNaissance}}</p>
                                </div>
                                <div>
                                    <p>Lieu de naissance : {{$prof->lieuNaissance}}</p>
                                </div>
                                <div>
                                    <p>Diplôme : {{$prof->diplome}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item m-l-10">
                                <a class="nav-link active" data-bs-toggle="tab" href="#about">Apropos</a>
                            </li>
                            <li class="nav-item m-l-10">
                                <a class="nav-link" data-bs-toggle="tab" href="#skills">Conpétences</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane body active" id="about">
                                <p class="text-default">
                                    {{-- Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer
                                    took a galley of type and scrambled it to make a type specimen book. It has
                                    survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially
                                    unchanged. --}}
                                </p>
                                <small class="text-muted">Email address: </small>
                                <p>{{$prof->email}}</p>
                                <hr>
                                <small class="text-muted">Phone: </small>
                                <p>(+224) {{$prof->phone}}</p>
                                <hr>
                            </div>
                            <div class="tab-pane body" id="skills">
                                <ul class="list-unstyled">
                                    <li>
                                        <div>Photoshop</div>
                                        <div class="progress skill-progress m-t-20">
                                            <div class="progress-bar l-bg-green width-per-45" role="progressbar"
                                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>Wordpress</div>
                                        <div class="progress skill-progress m-b-20">
                                            <div class="progress-bar l-bg-orange width-per-38" role="progressbar"
                                                aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>HTML 5</div>
                                        <div class="progress skill-progress m-b-20">
                                            <div class="progress-bar l-bg-cyan width-per-39" role="progressbar"
                                                aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>Angular</div>
                                        <div class="progress skill-progress m-b-20">
                                            <div class="progress-bar l-bg-purple width-per-70" role="progressbar"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="profile-tab-box">
                            <div class="p-l-20">
                                <ul class="nav ">
                                    <li class="nav-item tab-all">
                                        <a class="nav-link active show" href="#project" data-bs-toggle="tab">Apropos de moi</a>
                                    </li>
                                    <li class="nav-item tab-all p-l-20">
                                        <a class="nav-link" href="#usersettings" data-bs-toggle="tab">paramettre</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>Apropos</h2>
                                        </div>
                                        <div class="body">
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Nom et Prénom</strong>
                                                    <br>
                                                    <p class="text-muted">{{$prof->nom}} {{$prof->prenom}}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Téléphone</strong>
                                                    <br>
                                                    <p class="text-muted">(+224) {{$prof->phone}}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted">{{$prof->email}}</p>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <strong>Adresse</strong>
                                                    <br>
                                                    <p class="text-muted">{{$prof->adresse}}</p>
                                                </div>
                                            </div>
                                            <p class="m-t-30">
                                                {{$prof->description}}
                                                {{-- Completed my graduation in Arts from the well known and
                                                renowned institution
                                                of India – SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was
                                                affiliated
                                                to M.S. University. I ranker in University exams from the same
                                                university
                                                from 1996-01.</p>
                                            <p>Worked as Professor and Head of the department at Sarda Collage, Rajkot,
                                                Gujarat
                                                from 2003-2015 </p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem
                                                Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                when
                                                an unknown printer took a galley of type and scrambled it to make a
                                                type
                                                specimen book. It has survived not only five centuries, but also the
                                                leap
                                                into electronic typesetting, remaining essentially unchanged. --}}
                                            </p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>Education</h2>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>B.A.,Gujarat University, Ahmedabad,India.</li>
                                                <li>M.A.,Gujarat University, Ahmedabad, India.</li>
                                                <li>P.H.D., Shaurashtra University, Rajkot</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>Experience</h2>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>One year experience as Jr. Professor from April-2009 to march-2010
                                                    at B.
                                                    J. Arts College, Ahmedabad.</li>
                                                <li>Three year experience as Jr. Professor at V.S. Arts &amp; Commerse
                                                    Collage
                                                    from April - 2008 to April - 2011.</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>Conferences, Cources &amp; Workshop Attended</h2>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="timeline" aria-expanded="false">
                        </div>
                        <div role="tabpanel" class="tab-pane" id="usersettings" aria-expanded="false">
                            {{-- <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>Security</strong> Settings</h2>
                                </div>
                                <div class="body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Current Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="New Password">
                                    </div>
                                    <button class="btn btn-info btn-round">Save Changes</button>
                                </div>
                            </div> --}}
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>Account</strong> Settings</h2>
                                </div>
                                <div class="body">
                                    <form action=" {{route('prof.update', $prof)}} " method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                    {{-- <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="matricule">Matricule <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value=" {{$prof->matricule}}">
                                                @error('matricule')
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('matricule') }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="Matricule">Matricule <span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value=" {{$prof->matricule}}" />
                                                    @error('matricule')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <div class="form">
                                                    <label for="nom">Nom <span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value=" {{$prof->nom}}" />
                                                    @error('nom')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="prenom">Prenom <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value=" {{$prof->prenom}}" />
                                                @error('prenom')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="email">Email <span class="text-danger">*</span> :</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value=" {{$prof->email}}" />
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="diplome">Diplome <span class="text-danger">*</span> :</label>
                                                <select  name="diplome" id="diplome">
                                                    <option value="Licence" {{($prof->genre == 'Licence')? 'selected':''}}> Licence </option>
                                                    <option value="Maitrise" {{($prof->genre == 'Maitrise')? 'selected':''}}> Maitrise </option>
                                                    <option value="Master" {{($prof->genre == 'Master')? 'selected':''}}> Master </option>
                                                    <option value="Doctorat" {{($prof->genre == 'Doctorat')? 'selected':''}}> Doctorat </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="phone">Téléphone <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value=" {{$prof->phone}}" />
                                                @error('phone')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="adresse">Adresse <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value=" {{$prof->adresse}}" />
                                                @error('adresse')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6 col-md-12 mt-2">
                                            <div class="form-group default-select select2Style">
                                                <label>Séléctionnez le Sexe</label>
                                                <select name="genre" class="form-control select2" data-placeholder="Séléctionnez le Sexe">
                                                    @foreach (EnumSexe::cases() as $genre)
                                                        <option value="{{ $genre->value }}"
                                                            @selected(old('genre'))>
                                                            {{ $genre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('genre')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="genre">Séléctionez le sexe<span class="text-danger">*</span> :</label>
                                                <select  name="genre" id="genre">
                                                    <option value="Masculin" {{($prof->genre == 'Masculin')? 'selected':''}}> Masculin </option>
                                                    <option value="Feminin" {{($prof->genre == 'Feminin')? 'selected':''}}> Feminin </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="nationalite">Nationalité <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('nationalite') is-invalid @enderror" name="nationalite" value=" {{$prof->nationalite}}" />
                                                @error('nationalite')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 ">
                                            <div class="form-group ">
                                                <div class="form-line">
                                                    <label for="email_address">Date de naissance</label>
                                                    <input id="myDatePicker"  placeholder="Entrez votre date de naissance" name="dateNaissance"
                                                        value="{{$prof->dateNaissance }}" class="flatPicker validate @error('dateNaissance') is-invalid @enderror" >
                                                        <span class="helper-text" data-error="Date de Naissance Invalide"
                                                            data-success="Date de Naissance Valide">
                                                        </span>
                                                    @error('dateNaissance')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="lieuNaissance">Lieu de naissance <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('lieuNaissance') is-invalid @enderror" name="lieuNaissance" value=" {{$prof->lieuNaissance }}" />
                                                @error('lieuNaissance')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="description">description :</label>
                                                <textarea id="description" name="description" class="form-control" value=" {{$prof->description}}" data-length="120"></textarea>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <h2 class="card-inside-title">File Upload</h2>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>Photo</span>
                                                    <input type="file" name="image">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix js-sweetalert">
                                        <div class="col-lg-6 col-md-12">
                                            {{-- <button type="submit" class="btn btn-outline-default btn-border-radius">Enregistré</button> --}}
                                            <button type="submit" class="btn btn-primary waves-effect" data-type="success">Enregistré</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Validation -->


            </div>
            </section>
            @endsection

            @push('scripts')
            <script src="{{ asset('assets/js/form.min.js') }}"></script>
            <script src="{{ asset('assets/js/bundles//multiselect/js/jquery.multi-select.js') }}"></script>
            <script src="{{ asset('assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js') }}"></script>
            <script src="{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}"></script>
            <script src="{{ asset('assets/js/pages/forms/basic-form-elements.js') }}"></script>
            <script src="{{ asset('assets/js/pages/forms/form-validation.js') }}"></script>

            @endpush


