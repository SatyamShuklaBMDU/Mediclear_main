@include('include.sidebar')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        /* background-color: #c7c7cd !important; */
        background-color: #f8f9fc !important;
    }

    .accordion-body {
        font-family: 'Poppins', sans-serif;
    }

    a.bg-light:focus,
    a.bg-light:hover,
    button.bg-light:focus,
    button.bg-light:hover {
        background-color: rgb(25 135 84) !important;
        color: white !important;
        box-shadow: none;
    }

    .report-examina {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
    }

    .accordion-item h2 {
        font-family: 'Poppins', sans-serif;
    }

    form {
        margin-top: 10px;
        border: 2px solid #ffff;
        padding: 60px;
        border-radius: 10px;
    }

    .text-black {
        color: black;
        font-size: 20px;
        font-weight: 600;
    }

    body {
        font-family: "Montserrat", sans-serif !important;
    }

    .check-box {
        font-size: 25px;
        color: #5a5c69;
    }

    .form-check-input {
        border: 1px solid #5a5c69 !important;
    }


    /* file upload css */
    #file {
        display: none;
    }

    .file {
        height: 150px;
        width: 150px;
        background-color: #ffff;
        border-radius: 10px;
        border: 1px solid dashed #3333;
        text-align: center;
    }

    .image {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 150px;
    }

    /* eye test */
    .flex-wrapper {
        display: flex;
        flex-flow: row nowrap;
    }

    .single-chart {
        width: 100%;
        justify-content: space-around;
    }

    .circular-chart {
        display: block;
        margin: 10px auto;
        max-width: 80%;
        max-height: 250px;
    }

    .circle-bg {
        fill: none;
        stroke: #eee;
        stroke-width: 3.8;
    }

    .circle {
        fill: none;
        stroke-width: 2.8;
        stroke-linecap: round;
        animation: progress 1s ease-out forwards;
    }

    @keyframes progress {
        0% {
            stroke-dasharray: 0 100;
        }
    }

    .circular-chart.orange .circle {
        stroke: #ff9f00;
    }

    .circular-chart.green .circle {
        stroke: #4CC790;
    }

    .circular-chart.blue .circle {
        stroke: #3c9ee5;
    }

    .circular-chart.red .circle {
        stroke: #e5533c;
    }

    .circular-chart.pink .circle {
        stroke: #e53ca4;
    }

    .circular-chart.yellow .circle {
        stroke: #e5dd3c;
    }

    .circular-chart.skyblue .circle {
        stroke: #3c7ae5;
    }

    .percentage {
        fill: #666;
        font-family: sans-serif;
        font-size: 0.5em;
        text-anchor: middle;
    }

    .border2 {
        padding: 2px 20px;
        border: 1px solid black;
        border-radius: 3px;
    }




    .border1 {
        border: 1px solid black;
        border-radius: 3px;
        height: 10vh;
        width: 25vh;


    }

    .form-check-input {
        border: 1px solid #5a5c69 !important;
    }

    /*  */
    body {
        background-image: none;
    }

    .table,
    th {
        font-size: 15px !important;
        font-family: 'Poppins', sans-serif !important;
    }

    .dt-button {
        background-color: #1cc88a !important;
        background-image: linear-gradient(180deg, #1cc88a 10%, #13855c 100%) !important;
        background-size: cover !important;
        color: #fff !important;
        border: none !important;
    }

    .content-wrapper {
        margin-left: 210px;
        font-size: 19px;
    }

    /*
    .btn {
        background-color: #1cc88a;
    }
    .btn:hover {
        background-color: #01796F !important;

    } */
    .sidebar-right-trigger {
        display: none;
    }

    @media(max-width:34em) {
        .main {
            min-width: 150px;
            width: auto;
        }
    }

    select {
        display: none !important;
    }

    .dropdown-select {
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#40FFFFFF', endColorstr='#00FFFFFF', GradientType=0);
        background-color: #fff;
        border-radius: 6px;
        border: solid 1px #eee;
        box-shadow: 0px 2px 5px 0px rgba(155, 155, 155, 0.5);
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        float: left;
        font-size: 14px;
        font-weight: normal;
        height: 42px;
        line-height: 40px;
        outline: none;
        padding-left: 18px;
        padding-right: 30px;
        position: relative;
        text-align: left !important;
        transition: all 0.2s ease-in-out;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        white-space: nowrap;
        width: auto;

    }

    .dropdown-select:focus {
        background-color: #fff;
    }

    .dropdown-select:hover {
        background-color: #fff;
    }

    .dropdown-select:active,
    .dropdown-select.open {
        background-color: #fff !important;
        border-color: #bbb;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
    }

    .dropdown-select:after {
        height: 0;
        width: 0;
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 4px solid #777;
        -webkit-transform: origin(50% 20%);
        transform: origin(50% 20%);
        transition: all 0.125s ease-in-out;
        content: '';
        display: block;
        margin-top: -2px;
        pointer-events: none;
        position: absolute;
        right: 10px;
        top: 50%;
    }

    .dropdown-select.open:after {
        -webkit-transform: rotate(-180deg);
        transform: rotate(-180deg);
    }

    .dropdown-select.open .list {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
        pointer-events: auto;
    }

    .dropdown-select.open .option {
        cursor: pointer;
    }

    .dropdown-select.wide {
        width: 100%;
    }

    .dropdown-select.wide .list {
        left: 0 !important;
        right: 0 !important;
        top: -213px;
    }

    .dropdown-select .list {
        box-sizing: border-box;
        transition: all 0.15s cubic-bezier(0.25, 0, 0.25, 1.75), opacity 0.1s linear;
        -webkit-transform: scale(0.75);
        transform: scale(0.75);
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.09);
        background-color: #fff;
        border-radius: 6px;
        margin-top: 4px;
        padding: 3px 0;
        opacity: 0;
        overflow: hidden;
        pointer-events: none;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 999;
        max-height: 250px;
        overflow: auto;
        border: 1px solid #ddd;
    }

    .dropdown-select .list:hover .option:not(:hover) {
        background-color: transparent !important;
    }

    .dropdown-select .dd-search {
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0.5rem;
    }

    .dropdown-select .dd-searchbox {
        width: 90%;
        padding: 0.5rem;
        border: 1px solid #999;
        border-color: #999;
        border-radius: 4px;
        outline: none;
    }

    .dropdown-select .dd-searchbox:focus {
        border-color: #12CBC4;
    }

    .dropdown-select .list ul {
        padding: 0;
    }

    .dropdown-select .option {
        cursor: default;
        font-weight: 400;
        line-height: 40px;
        outline: none;
        padding-left: 18px;
        padding-right: 29px;
        text-align: left;
        transition: all 0.2s;
        list-style: none;
    }

    .dropdown-select .option:hover,
    .dropdown-select .option:focus {
        background-color: #f6f6f6 !important;
    }

    .dropdown-select .option.selected {
        font-weight: 600;
        color: #12cbc4;
    }

    .dropdown-select .option.selected:focus {
        background: #f6f6f6;
    }

    .dropdown-select a {
        color: #aaa;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
    }

    .dropdown-select a:hover {
        color: #666;
    }

    .form-check-input {
        border: 1px solid #5a5c69 !important;
    }

    .yellow {
        width: 400px;
        background-color: yellow;
    }

    /* boxes css */
    .container1 {
        width: 95%;
        overflow: hidden;
        /* background-color: #5a5c69; */
        /* border: 1px solid black; */
        margin: 20px auto;
        padding: 20px 0;
    }

    .container1 ul {
        padding: 0px;
        margin: 0px;
    }

    .container1 ul li {
        list-style-type: none;
        float: left;
        width: 20%;
        height: 200px;
        /* background-color: red; */
        border: 2px solid black;
        margin: 40px 30px 0px 40px;
        line-height: 200px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: normal;
    }

    .container1 ul li .title {
        width: 100%;
        height: 50px;
        line-height: 50px;
        /* background-color: white; */
        text-align: center;
        border: 2px solid rgb(135, 127, 127);
    }

    /* input[type="checkbox"] {
        transform: scale(2);
        border-radius: 0px !important;
        border: 0.5px solid black !important;
        outline: none !important;
    } */
    .footer {
        border: 2px solid black;
    }

    /* css for responsive */
    @media (max-width: 1000px) {
        .container1 ul li {
            width: 35%;
            height: 150px;
            line-height: 150px;
        }
    }

    * {
        font-family: 'Poppins', sans-serif;
    }

    .hearing-graph {
        border-left: 1px solid #0000004d;
        border-bottom: 1px solid #0000004d;
        padding: 5px 15px 0px;
        box-shadow: 0px 7px 6px 0px #00000014;
    }

    /*  */
    .checked-blue {
        position: relative;
    }

    .checked-blue::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        /* Adjust the height as needed */
        background-color: blue;
        bottom: 0;
        left: 0;
    }

    .form-check-inline {
        margin-bottom: 36px !important;
    }
</style>
@if (session('message'))
    <script>
        alert('{{ session('message') }}');
    </script>
@endif
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<a class="btn btn-success ml-4 mb-2" href="{{ url()->previous() }}" role="button">Go Back</a>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
<input type="hidden" value="{{ request()->get('id') }}" id="consumerId" />
@php $companyName="NA"; @endphp
@foreach ($corporateCompanyBatchName as $company)
    @php
        $companyName = $company->name;
    @endphp
@endforeach
<div class="accordion px-4 mb-2" id="accordionExample">
    <h1 class="text-start report-examina mt-3 mb-3 text-success"> Report Examination Sheet </h1>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed bg-light text-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Vertigo Report Examination Sheet
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                @foreach ($examnationDetailsBeforeMedicalTest as $k => $data)
                    <div class="container">
                        <form class="shadow-sm p-0">
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <p><label for="name" class="form-label">Name</label></p>
                                    <p><label for="inputCompany" class="form-label mt-2">Company</label></p>
                                    <p><label for="inputLocation" class="form-label mt-2">Location</label> </p>
                                    <p><label for="input-Phone Number" class="form-label mt-2">Phone Number</label></p>
                                    <p><label for="input-DOB" class="form-label mt-2">DOB</label></p>
                                    <p><label for="inputAadhar" class="form-label mt-2">Aadhar No.</label></p>
                                    <p><label for="inputEmail4" class="form-label mt-2">Address</label></p>
                                    <p></p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text" id="consumerName">{{ $data->consumer_name }}</p>
                                    <p class="name-company mt-4" id="companyName">{{ $companyName }}</p>
                                    <p class="name-company mt-4" id="consumerLocation">{{ $data->consumer_location }}
                                    </p>
                                    <p class="name-company mt-4" id="consumerMobileNumber">{{ $data->consumer_mob_no }}
                                    </p>
                                    <p class="name-company mt-4" id="consumerDOB">
                                        {{ date('F j, Y', strtotime($data->consumer_dob)) }}</p>
                                    <p class="name-company mt-4" id="consumerAddress">{{ $data->consumer_address }}</p>
                                    <p class="name-company mt-4" id="consumerAadharNumber">
                                        {{ $data->consumer_addhar_number }}</p>
                                </div>
                                <div class="col-md-6 text-center">
                                    <label for="file" class="file text-center border"><span
                                            class="image text-dark"><img
                                                src="{{ url('public/images/' . $data->consumer_profile_image_name) }}"
                                                width="100px" /></span></label>
                                    <input type="file" id="file" />
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="col-md-12 my-2">Gender</div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="male"
                                            {{ $data->gender == 'male' ? 'checked disabled' : 'disabled' }} />
                                        <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="female"
                                            {{ $data->gender == 'female' ? 'checked disabled' : 'disabled' }} />
                                        <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="others"
                                            {{ $data->gender == 'others' ? 'checked disabled' : 'disabled' }} />
                                        <label class="form-check-label" for="inlineCheckbox3">Others</label>
                                    </div>
                                </div>
                            </div>
                            <!-- question Ans field start -->
                            <div class="questions">
                                <h4 class="text-success my-3">
                                    To be filled by the candidate before Medical Examination :
                                </h4>
                                <p>
                                    A. When you are "dizzy" do you experience any of the following symptoms? (check yes
                                    or no)
                                </p>
                                <div class="row choice">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6 d-flex">
                                        <div class="text-success"><strong>Yes</strong></div>
                                        <div class="ml-4 text-danger"><strong>No</strong></div>
                                    </div>
                                </div>
                                <!-- question start  -->
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p> 1. Light-headedness or swimming sensation in the head?</p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <div class="form-check-label"
                                                style="color: {{ $data->light_hedness_or_swim_sensation_in_the_head == 'yes' ? 'green' : 'red' }};font-weight: bold;">
                                                {{ $data->light_hedness_or_swim_sensation_in_the_head == 'yes' ? 'Yes' : 'No' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>2. Blacking out or loss of consciousness?</p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <div class="form-check-label"
                                                style="color: {{ $data->blacking_out_or_loss_of_consciousness == 'yes' ? 'green' : 'red' }};font-weight: bold;">
                                                {{ $data->blacking_out_or_loss_of_consciousness == 'yes' ? 'Yes' : 'No' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>3. Object spinning or turning around you?</p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <div class="form-check-label"
                                                style="color: {{ $data->object_spinning_or_turning_around_you == 'yes' ? 'green' : 'red' }};font-weight: bold;">
                                                {{ $data->object_spinning_or_turning_around_you == 'yes' ? 'Yes' : 'No' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>4. Nausea or vomiting?</p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <div class="form-check-label"
                                                style="color: {{ $data->nausea_or_vomiting == 'yes' ? 'green' : 'red' }};font-weight: bold;">
                                                {{ $data->nausea_or_vomiting == 'yes' ? 'Yes' : 'No' }} </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>5. Tingling in your fingers, toes or around your mouth?</p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <div class="form-check-label"
                                                style="color: {{ $data->tingling_in_your_fingers_toes_around_your_mouth == 'yes' ? 'green' : 'red' }};font-weight: bold;">
                                                {{ $data->tingling_in_your_fingers_toes_around_your_mouth == 'yes' ? 'Yes' : 'No' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>6. Does changes of position make you dizzy?</p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <div class="form-check-label"
                                                style="color: {{ $data->does_changes_of_position_make_you_dizzy == 'yes' ? 'green' : 'red' }};font-weight: bold;">
                                                {{ $data->does_changes_of_position_make_you_dizzy == 'yes' ? 'Yes' : 'No' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>7. When you are dizzy must support yourself when standing?</p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <div class="form-check-label"
                                                style="color: {{ $data->when_you_are_dizzy_must_support_yourself_when_standing == 'yes' ? 'green' : 'red' }};font-weight: bold;">
                                                {{ $data->when_you_are_dizzy_must_support_yourself_when_standing == 'yes' ? 'Yes' : 'No' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if (!isset($data->post_mediacal_history_disease))
                                @php $postMedicalHistory=[]; @endphp
                            @endif
                            @if (gettype($data->post_mediacal_history_disease) == 'array')
                                @php $postMedicalHistory=$data->post_mediacal_history_disease;@endphp
                            @endif
                            @if (gettype($data->post_mediacal_history_disease) == 'string')
                                @php $postMedicalHistory=json_decode($data->post_mediacal_history_disease,true); @endphp
                            @endif
                            @if (gettype(json_decode($data->post_mediacal_history_disease, true)) == 'string')
                                @php
                                    $postMedicalHistory = json_decode(
                                        json_decode($data->post_mediacal_history_disease, true),
                                ); @endphp
                            @endif
                            <!-- past medical section start -->
                            <div class="past-medical History">
                                <div class="1">
                                    <p class="text-black">Past Medical History :</p>
                                    <p>
                                        1. Do you have a History of any of the following ? please check
                                        all that apply
                                    </p>
                                    <div class="objective-option">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox1">Heart
                                                disease</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1" disabled
                                                @if (isset($postMedicalHistory) && is_array($postMedicalHistory)) @if (in_array(1, $postMedicalHistory)) checked @disabled(true) @endif
                                            @else $postMedicalHistory=[]; @endif
                                            />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox2">Hypertension</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2" disabled
                                                @if (isset($postMedicalHistory) && is_array($postMedicalHistory)) @if (in_array(2, $postMedicalHistory)) checked @disabled(true) @endif
                                            @else $postMedicalHistory=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Kidney
                                                disease</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($postMedicalHistory) && is_array($postMedicalHistory)) @if (in_array(3, $postMedicalHistory)) checked @disabled(true) @endif
                                            @else $postMedicalHistory=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Thyroid
                                                disease</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($postMedicalHistory) && is_array($postMedicalHistory)) @if (in_array(4, $postMedicalHistory)) checked @disabled(true) @endif
                                            @else $postMedicalHistory=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Migrain
                                                headaches</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($postMedicalHistory) && is_array($postMedicalHistory)) @if (in_array(5, $postMedicalHistory)) checked @disabled(true) @endif
                                            @else $postMedicalHistory=[]; @endif />
                                        </div>
                                    </div>
                                </div>
                                @if (!isset($data->defficulting_in_hearing))
                                    @php $defficulting_in_hearing=[]; @endphp
                                @endif
                                @if (gettype($data->defficulting_in_hearing) == 'array')
                                    @php $defficulting_in_hearing=$data->defficulting_in_hearing;@endphp
                                @endif
                                @if (gettype($data->defficulting_in_hearing) == 'string')
                                    @php $defficulting_in_hearing=json_decode($data->defficulting_in_hearing,true); @endphp
                                @endif
                                @if (gettype(json_decode($data->defficulting_in_hearing, true)) == 'string')
                                    @php
                                        $defficulting_in_hearing = json_decode(
                                            json_decode($data->defficulting_in_hearing, true),
                                    ); @endphp
                                @endif
                                <div class="2 my-4">
                                    <p>
                                        2. Do you have a History of any of the following symptoms? please
                                        check all that apply
                                    </p>
                                    <p>a. Difficulty in hearing ?</p>
                                    <div class="objective-option">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1" disabled
                                                @if (isset($defficulting_in_hearing) && is_array($defficulting_in_hearing)) @if (in_array(1, $defficulting_in_hearing)) checked @disabled(true) @endif
                                            @else $defficulting_in_hearing=[]; @endif
                                            />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2" disabled
                                                @if (isset($defficulting_in_hearing) && is_array($defficulting_in_hearing)) @if (in_array(2, $defficulting_in_hearing)) checked @disabled(true) @endif
                                            @else $defficulting_in_hearing=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Left ears</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($defficulting_in_hearing) && is_array($defficulting_in_hearing)) @if (in_array(3, $defficulting_in_hearing)) checked @disabled(true) @endif
                                            @else $defficulting_in_hearing=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Both ears</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($defficulting_in_hearing) && is_array($defficulting_in_hearing)) @if (in_array(4, $defficulting_in_hearing)) checked @disabled(true) @endif
                                            @else $defficulting_in_hearing=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Right ear</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($defficulting_in_hearing) && is_array($defficulting_in_hearing)) @if (in_array(5, $defficulting_in_hearing)) checked @disabled(true) @endif
                                            @else $defficulting_in_hearing=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">associated with
                                                attack</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($defficulting_in_hearing) && is_array($defficulting_in_hearing)) @if (in_array(6, $defficulting_in_hearing)) checked @disabled(true) @endif
                                            @else $defficulting_in_hearing=[]; @endif />
                                        </div>
                                    </div>
                                    @if (!isset($data->noise_in_ears))
                                        @php $noise_in_ears=[]; @endphp
                                    @endif
                                    @if (gettype($data->noise_in_ears) == 'array')
                                        @php $noise_in_ears=$data->defficulting_in_hearing;@endphp
                                    @endif
                                    @if (gettype($data->noise_in_ears) == 'string')
                                        @php $noise_in_ears=json_decode($data->noise_in_ears,true); @endphp
                                    @endif
                                    @if (gettype(json_decode($data->noise_in_ears, true)) == 'string')
                                        @php $noise_in_ears=json_decode(json_decode($data->noise_in_ears,true));@endphp
                                    @endif
                                    <p>b. Noise in ears ?</p>
                                    <div class="objective-option">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1" disabled
                                                @if (isset($noise_in_ears) && is_array($noise_in_ears)) @if (in_array(1, $noise_in_ears)) checked @disabled(true) @endif
                                            @else $noise_in_ears=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2" disabled
                                                @if (isset($noise_in_ears) && is_array($noise_in_ears)) @if (in_array(2, $noise_in_ears)) checked @disabled(true) @endif
                                            @else $noise_in_ears=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Left ear</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($noise_in_ears) && is_array($noise_in_ears)) @if (in_array(3, $noise_in_ears)) checked @disabled(true) @endif
                                            @else $noise_in_ears=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Both ears</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($noise_in_ears) && is_array($noise_in_ears)) @if (in_array(4, $noise_in_ears)) checked @disabled(true) @endif
                                            @else $noise_in_ears=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Right ear</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($noise_in_ears) && is_array($noise_in_ears)) @if (in_array(5, $noise_in_ears)) checked @disabled(true) @endif
                                            @else $noise_in_ears=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">associated with
                                                attack</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($noise_in_ears) && is_array($noise_in_ears)) @if (in_array(6, $noise_in_ears)) checked @disabled(true) @endif
                                            @else $noise_in_ears=[]; @endif />
                                        </div>
                                    </div>
                                    @if (!isset($data->fullness_or_stuffiness_in_your_ears))
                                        @php $fullness_or_stuffiness_in_your_ears=[]; @endphp
                                    @endif

                                    @if (gettype($data->fullness_or_stuffiness_in_your_ears) == 'array')
                                        @php
                                            $fullness_or_stuffiness_in_your_ears =
                                            $data->fullness_or_stuffiness_in_your_ears; @endphp
                                    @endif

                                    @if (gettype($data->fullness_or_stuffiness_in_your_ears) == 'string')
                                        @php
                                            $fullness_or_stuffiness_in_your_ears = json_decode(
                                                $data->fullness_or_stuffiness_in_your_ears,
                                                true,
                                        ); @endphp
                                    @endif

                                    @if (gettype(json_decode($data->fullness_or_stuffiness_in_your_ears, true)) == 'string')
                                        @php
                                            $fullness_or_stuffiness_in_your_ears = json_decode(
                                                json_decode($data->fullness_or_stuffiness_in_your_ears, true),
                                        ); @endphp
                                    @endif
                                    <p>c. Fullness or stuffiness in your ears ?</p>
                                    <div class="objective-option">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1" disabled
                                                @if (isset($fullness_or_stuffiness_in_your_ears) && is_array($fullness_or_stuffiness_in_your_ears)) @if (in_array(1, $fullness_or_stuffiness_in_your_ears)) checked @disabled(true) @endif
                                            @else $fullness_or_stuffiness_in_your_ears=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2" disabled
                                                @if (isset($fullness_or_stuffiness_in_your_ears) && is_array($fullness_or_stuffiness_in_your_ears)) @if (in_array(2, $fullness_or_stuffiness_in_your_ears)) checked @disabled(true) @endif
                                            @else $fullness_or_stuffiness_in_your_ears=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Left ear</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($fullness_or_stuffiness_in_your_ears) && is_array($fullness_or_stuffiness_in_your_ears)) @if (in_array(3, $fullness_or_stuffiness_in_your_ears)) checked @disabled(true) @endif
                                            @else $fullness_or_stuffiness_in_your_ears=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Both ears</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($fullness_or_stuffiness_in_your_ears) && is_array($fullness_or_stuffiness_in_your_ears)) @if (in_array(4, $fullness_or_stuffiness_in_your_ears)) checked @disabled(true) @endif
                                            @else $fullness_or_stuffiness_in_your_ears=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Right ear</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($fullness_or_stuffiness_in_your_ears) && is_array($fullness_or_stuffiness_in_your_ears)) @if (in_array(5, $fullness_or_stuffiness_in_your_ears)) checked @disabled(true) @endif
                                            @else $fullness_or_stuffiness_in_your_ears=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">associated with
                                                attack</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled
                                                @if (isset($fullness_or_stuffiness_in_your_ears) && is_array($fullness_or_stuffiness_in_your_ears)) @if (in_array(6, $fullness_or_stuffiness_in_your_ears)) checked @disabled(true) @endif
                                            @else $fullness_or_stuffiness_in_your_ears=[]; @endif />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (!isset($data->complaint))
                                @php $complaints=[]; @endphp
                            @endif
                            @if (gettype($data->complaint) == 'array')
                                @php $complaints=$data->complaint;@endphp
                            @endif
                            @if (gettype($data->complaint) == 'string')
                                @php $complaints=json_decode($data->complaint,true);@endphp
                            @endif
                            @if (gettype(json_decode($data->complaint, true)) == 'string')
                                @php $complaints=json_decode(json_decode($data->complaint,true));@endphp
                            @endif
                            @if (json_decode(json_decode($data->complaint)) == '[]')
                                @php $complaints=[]; @endphp
                            @endif
                            @if (gettype(json_decode(json_decode($data->complaint, true))) == 'string')
                                @php $complaints=json_decode(json_decode(json_decode($data->complaint,true))) @endphp
                            @endif
                            <!-- Complaint section start -->
                            <div class="complaints">
                                <p class="text-black my-3">Complaints :</p>
                                <div class="row my-4">
                                    <div class="col-6">1. Giddiness</div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1" disabled
                                            @if (isset($complaints) && is_array($complaints)) @if (in_array(1, $complaints)) checked @disabled(true) @endif
                                        @else $complaints=[]; @endif />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">2. Vertigo</div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1" disabled
                                            @if (isset($complaints) && is_array($complaints)) @if (in_array(2, $complaints)) checked @disabled(true) @endif
                                        @else $complaints=[]; @endif />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">3. Nausea</div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1" disabled
                                            @if (isset($complaints) && is_array($complaints)) @if (in_array(3, $complaints)) checked @disabled(true) @endif
                                        @else $complaints=[]; @endif />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">4. Seizure Disorder (Epilespy)</div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1" disabled
                                            @if (isset($complaints) && is_array($complaints)) @if (in_array(4, $complaints)) checked @disabled(true) @endif
                                        @else $complaints=[]; @endif />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">5. Acrophobia</div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1" disabled
                                            @if (isset($complaints) && is_array($complaints)) @if (in_array(5, $complaints)) checked @disabled(true) @endif
                                        @else $complaints=[]; @endif />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">6. Assthama / COPD</div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1" disabled
                                            @if (isset($complaints) && is_array($complaints)) @if (in_array(6, $complaints)) checked @disabled(true) @endif
                                        @else $complaints=[]; @endif />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">
                                        7. tingling in your fingers, toes or around your mouth?
                                    </div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1" disabled
                                            @if (isset($complaints) && is_array($complaints)) @if (in_array(7, $complaints)) checked @disabled(true) @endif
                                        @else $complaints=[]; @endif />
                                    </div>
                                </div>
                                <!-- buttons -->
                                <div class="col-md-6 text-center">
                                    <label for="file" class="file text-center"><span class="image text-dark"><img
                                                src="{{ url('public/sign/' . $data->consumer_sign_image_name) }}"
                                                width="100px" /></span></label>
                                    <input type="file" id="file" />
                                </div>
                                <!--<div class="row g-3 my-5 buttons">-->
                                <!--    <div class="col-md-4">-->
                                <!--        <button class="btn btn-success" type="submit">Sign Here</button>-->
                                <!--    </div>-->
                                <!--    <div class="col-md-2"></div>-->
                                <!--    <div class="col-md-4">-->
                                <!--        <span class="text-success fw-bolder h5">-->
                                <!--            <label for="">Upload Sign</label>-->
                                <!--            <input type="file" /></span>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
{{-- ///accordionExample --}}
<div class="accordion px-4 mb-2" id="bpcontainer">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed"
                @if (isset($TestData['bp'])) @else style="background-color:#e5533c;color:#f8f9fc" @endif
                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                aria-controls="collapseFour" id="bpbutton">
                Check For Blood Pressure
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="container" id="graph">
                    <input type="hidden" id="certificationnumber" value="{{ $data->certification_number }}" />
                    <input type="hidden" id="consumerid" value="{{ request()->get('id') }}" />
                    <p class="text-success pt-3 pb-3"><strong> Consumer Certificate Number --
                            {{ $data->certification_number }}</strong></p>
                    <div class="row">
                        @if (isset($TestData['bp']))
                            {{-- <div class="col-md-6" id="chartgraph">
                                    <canvas id="bpCanvasChart" width="1000" height="1000"></canvas>
                                    {{-- <div id="pre-bp-chart-container" style="height: 400px;"></div> --}}
                            {{-- </div> --}}
                            <canvas id="bpCanvasChart" width="1000" height="300"></canvas>
                            {{-- <div class="col-md-6">
                                    <div id="post-bp-chart-container" style="height: 400px;"></div>
                                </div> --}}
                        @endif
                    </div>
                </div>
                {{-- <div id="c_pre-bp-chart-container" style="height: 400px;"></div> --}}
                @if (isset($TestData['bp']))
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="bpcheckboxfit"
                                        value="1">
                                    <label class="form-check-label" for="checkbox1">Fit</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="bpcheckboxunfit"
                                        value="0">
                                    <label class="form-check-label" for="checkbox2">Unfit</label>
                                </div>
                            </div>
                            <div class="form-group" id="bp_test_remark_result" style="display:none">
                                <label for="exampleFormControlTextarea1">Unfit Remark</label>
                                <textarea class="form-control" id="bpunfitRemark" rows="3"></textarea>
                            </div>
                        </div>
                        <form id="yourFormId" action="{{ route('test_again') }}" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-dark" id="bp" type="button" onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            @csrf <!-- Add this line if you're using CSRF protection -->
                             <input type="hidden" id="" name="mediId" value="{{$medical_id}}">
                             <input type="hidden" name="featureId" value="bp">
                            <button class="btn btn-danger" type="submit" id="bp_test_again">Please test again</button>
                            &nbsp;&nbsp;
                            <button onclick="generatePDF()" type="button"><i class="fa fa-print text-success"
                                    style="font-size:36px"></i></button>
                        </div>
                            </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- -----------------------eyescheckup----------------------------- --}}
<div class="accordion px-4 mb-2" id="eyecontainer">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed"
                @if (isset($TestData['eyecheckup'])) @else style="background-color:#e5533c;color:#f8f9fc" @endif
                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                aria-controls="collapseFive" id="eyecheckupbutton">
                Check For Eye Color Blindness Test
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="container" id="eyegraph">
                    <strong> Consumer Certificate Number -- {{ $data->certification_number }}</strong>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6">
                            {{-- @if (isset($TestData['eyecheckup'])) --}}
                            <div id="eye-checkup-chart-container" style="height:280px;">
                                <div class="flex-wrapper">
                                    @php
                                        if (isset($TestData['eyecheckup'])) {
                                            $eyecheckupdata = json_decode($TestData['eyecheckup'], true);
                                            $count = 0;
                                            foreach ($eyecheckupdata as $value) {
                                                if ($value == 'true') {
                                                    $count++;
                                                }
                                            }
                                        } else {
                                            $count = null;
                                        }
                                        if ($count == 1) {
                                            $percentage = 10;
                                            $color = 'Pink';
                                        } elseif ($count == 2) {
                                            $percentage = 20;
                                            $color = 'Orange';
                                        } elseif ($count == 3) {
                                            $percentage = 30;
                                            $color = 'Yellow';
                                        } elseif ($count == 4) {
                                            $percentage = 40;
                                            $color = 'SkyBlue';
                                        } elseif ($count == 5) {
                                            $percentage = 50;
                                            $color = 'Blue';
                                        } elseif ($count == 6) {
                                            $percentage = 60;
                                            $color = 'Aqua';
                                        } elseif ($count == 7) {
                                            $percentage = 70;
                                            $color = 'Cyan';
                                        } elseif ($count == 8) {
                                            $percentage = 80;
                                            $color = 'MediumPurple';
                                        } elseif ($count == 9) {
                                            $percentage = 90;
                                            $color = 'Teal';
                                        } elseif ($count == 10) {
                                            $percentage = 100;
                                            $color = 'LimeGreen';
                                        } elseif ($count == 0) {
                                            $percentage = 0;
                                            $color = 'Red';
                                        }
                                    @endphp
                                    <div class="single-chart" id="eyeblindness">
                                        <svg viewBox="0 0 36 36" class="circular-chart"
                                            style="fill: transparent; width: 100%; height: 100%;">
                                            <path class="circle-bg"
                                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                            <path class="circle" stroke-dasharray="{{ $percentage }}, 100"
                                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                                style="stroke: {{ $color }}; stroke-linecap: round; stroke-width: 2;" />
                                            <text x="18" y="20.35" class="percentage">{{ $percentage }}%</text>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            {{-- @endif --}}
                        </div>

                    </div>
                </div>
                {{-- <div id="c_pre-bp-chart-container" style="height: 400px;"></div> --}}
                @if (isset($TestData['eyecheckup']))
                    <div class="container">
                        <div class="row d-flex justify-content-center mb-2">
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="eyecheckupcheckboxfit"
                                        value="1">
                                    <label class="form-check-label" for="checkbox1">Fit</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="eyecheckupcheckboxunfit"
                                        value="0">
                                    <label class="form-check-label" for="checkbox2">Unfit</label>
                                </div>
                            </div>
                            <div class="form-group" id="eyecheckup_test_remark_result" style="display:none">
                                <label for="exampleFormControlTextarea1">Unfit Remark</label>
                                <textarea class="form-control" id="eyecheckupunfitRemark" rows="3"></textarea>
                            </div>
                        </div>
                            <form id="yourFormId" action="{{ route('test_again') }}" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" id="eyecheckup" type="button"
                                onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            @csrf <!-- Add this line if you're using CSRF protection -->
                             <input type="hidden" id="" name="mediId" value="{{$medical_id}}">
                             <input type="hidden" name="featureId" value="eyecheckup">
                            <button class="btn btn-danger" type="submit" id="eyecheckup_test_again">Please test again</button>
                            &nbsp;&nbsp;
                            <button onclick="eyegeneratePDF()" class="btn btn-danger btn-sm" type="button"><i class="fa fa-print"
                                    style="font-size:36px"></i></button>
                        </div>
                            </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- end chekup --}}
{{-- eye distance check --}}
<div class="accordion px-4 mb-2" id="eyedistancecontainer">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingsix">
            <button class="accordion-button collapsed"
                @if (isset($TestData['eyedistance'])) @else style="background-color:#e5533c;color:#f8f9fc" @endif
                type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false"
                aria-controls="collapsesix" id="eyedistancebutton">
                Check For Eye Distance Test
            </button>
        </h2>
        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="container" id="eyedistancegraph">
                    <strong> Consumer Certificate Number -- {{ $data->certification_number }}</strong>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6">
                            {{-- @if (isset($TestData['eyedistance'])) --}}
                            <div id="eye-checkup-chart-container" style="height:280px;">
                                <div class="flex-wrapper">
                                    @php
                                        if (isset($TestData['eyedistance'])) {
                                            $eyedistancedata = json_decode($TestData['eyedistance'], true);
                                            $count = 0;
                                            foreach ($eyedistancedata as $value) {
                                                if ($value == 'true') {
                                                    $count++;
                                                }
                                            }
                                        } else {
                                            $count = null;
                                        }
                                        if ($count == 1) {
                                            $distancepercentage = 12.5;
                                            $distancecolor = 'Pink';
                                        } elseif ($count == 2) {
                                            $distancepercentage = 25;
                                            $distancecolor = 'Orange';
                                        } elseif ($count == 3) {
                                            $distancepercentage = 37.5;
                                            $distancecolor = 'Yellow';
                                        } elseif ($count == 4) {
                                            $distancepercentage = 50;
                                            $distancecolor = 'SkyBlue';
                                        } elseif ($count == 5) {
                                            $distancepercentage = 62.5;
                                            $distancecolor = 'Blue';
                                        } elseif ($count == 6) {
                                            $distancepercentage = 75;
                                            $distancecolor = 'Aqua';
                                        } elseif ($count == 7) {
                                            $distancepercentage = 87.5;
                                            $distancecolor = 'Cyan';
                                        } elseif ($count == 8) {
                                            $distancepercentage = 100;
                                            $distancecolor = 'green';
                                        } elseif ($count == 0) {
                                            $distancepercentage = 0;
                                            $distancecolor = 'Red';
                                        }
                                    @endphp
                                    <div class="single-chart" id="eyedistance">
                                        <svg id="lefteye" viewBox="0 0 36 36" class="circular-chart"
                                            style="fill: transparent; width: 100%; height: 100%;">
                                            <path class="circle-bg"
                                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                            <path class="circle" stroke-dasharray="{{ $distancepercentage }}, 100"
                                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                                style="stroke: {{ $distancecolor }}; stroke-linecap: round; stroke-width: 2;" />
                                            <text x="18" y="20.35"
                                                class="percentage">{{ $distancepercentage }}%</text>
                                        </svg>
                                        <label for="lefteye">Left Eye.</label>
                                    </div>
                                </div>
                            </div>
                            {{-- @endif --}}
                        </div>
                        <div class="col-md-6">
                            {{-- @if (isset($TestData['eyedistance'])) --}}
                            <div id="eye-checkup-chart-container" style="height:280px;">
                                <div class="flex-wrapper">
                                    @php
                                        if (isset($TestData['righteyedistance'])) {
                                            $eyedistancedata = json_decode($TestData['righteyedistance'], true);
                                            $count = 0;
                                            foreach ($eyedistancedata as $value) {
                                                if ($value == 'true') {
                                                    $count++;
                                                }
                                            }
                                        } else {
                                            $count = null;
                                        }
                                        if ($count == 1) {
                                            $rightdistancepercentage = 12.5;
                                            $rightdistancecolor = 'Pink';
                                        } elseif ($count == 2) {
                                            $rightdistancepercentage = 25;
                                            $rightdistancecolor = 'Orange';
                                        } elseif ($count == 3) {
                                            $rightdistancepercentage = 37.5;
                                            $rightdistancecolor = 'Yellow';
                                        } elseif ($count == 4) {
                                            $rightdistancepercentage = 50;
                                            $rightdistancecolor = 'SkyBlue';
                                        } elseif ($count == 5) {
                                            $rightdistancepercentage = 62.5;
                                            $rightdistancecolor = 'Blue';
                                        } elseif ($count == 6) {
                                            $rightdistancepercentage = 75;
                                            $rightdistancecolor = 'Aqua';
                                        } elseif ($count == 7) {
                                            $rightdistancepercentage = 87.5;
                                            $rightdistancecolor = 'Cyan';
                                        } elseif ($count == 8) {
                                            $rightdistancepercentage = 100;
                                            $rightdistancecolor = 'green';
                                        } elseif ($count == 0) {
                                            $rightdistancepercentage = 0;
                                            $rightdistancecolor = 'Red';
                                        }
                                    @endphp
                                    <div class="single-chart" id="eyedistance">
                                        <svg id="righteye" viewBox="0 0 36 36" class="circular-chart"
                                            style="fill: transparent; width: 100%; height: 100%;">
                                            <path class="circle-bg"
                                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                            <path class="circle" stroke-dasharray="{{ $rightdistancepercentage }}, 100"
                                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                                style="stroke: {{ $rightdistancecolor }}; stroke-linecap: round; stroke-width: 2;" />
                                            <text x="18" y="20.35"
                                                class="percentage">{{ $rightdistancepercentage }}%</text>
                                        </svg>
                                        <label for="righteye">Right Eye.</label>
                                    </div>
                                </div>
                            </div>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
                {{-- <div id="c_pre-bp-chart-container" style="height: 400px;"></div> --}}
                @if (isset($TestData['eyedistance']))
                    <div class="container">
                        <div class="row d-flex justify-content-center mb-2">
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="eyedistancecheckboxfit"
                                        value="1">
                                    <label class="form-check-label" for="checkbox1">Fit</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="eyedistancecheckboxunfit"
                                        value="0">
                                    <label class="form-check-label" for="checkbox2">Unfit</label>
                                </div>
                            </div>
                            <div class="form-group" id="eyedistance_test_remark_result">
                                <label for="exampleFormControlTextarea1">Unfit Remark</label>
                                <textarea class="form-control" id="eyedistanceunfitRemark" rows="3"></textarea>
                            </div>
                        </div>
                        <form id="yourFormId" action="{{ route('test_again') }}" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" id="eyedistance" type="button"
                                onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            @csrf <!-- Add this line if you're using CSRF protection -->
                             <input type="hidden" id="" name="mediId" value="{{$medical_id}}">
                             <input type="hidden" name="featureId" value="eyedistance">
                            <button class="btn btn-danger" type="submit" id="eyedistance_test_again">Please test again</button>
                            &nbsp;&nbsp;
                            <button onclick="eyedistancepdf()" class="btn btn-danger btn-sm" type="button"><i class="fa fa-print"
                                    style="font-size:36px"></i></button>
                        </div>
                            </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- eye distance end --}}
{{-- Hearing Test Report --}}
<div class="accordion px-4 mb-2" id="HearingContainer">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingHearing">
            <button class="accordion-button collapsed"
                @if (isset($TestData['hearingtest'])) @else style="background-color:#e5533c;color:#f8f9fc" @endif
                type="button" data-bs-toggle="collapse" data-bs-target="#collapseHearing" aria-expanded="false"
                aria-controls="collapseHearing" id="hearingtestbutton">
                Check For Hearing Test
            </button>
        </h2>
        <div id="collapseHearing" class="accordion-collapse collapse" aria-labelledby="headingHearing"
            data-bs-parent="#HearingContainer">
            <div class="accordion-body">
                <!-- Hearing Test content -->
                <div class="container" id="hearingTestContent">
                    <input type="hidden" id="certificationnumber" value="{{ $data->certification_number }}" />
                    @if (request()->get('id'))
                        <input type="hidden" id="consumerid" value="{{ request()->get('id') }}" />
                    @endif
                    {{-- <?php echo $TestData['hearingtest']; ?> --}}
                    <p class="text-success pt-3 pb-3"><strong> Consumer Certificate Number --
                            {{ $data->certification_number }}</strong></p>
                    <div class="row" id="radiobuttongraph">
                        <div class="text-center mb-3">
                            <span class="badge badge-primary mr-2">Left Ear</span>
                            <span class="badge badge-danger">Right Ear</span>
                        </div>
                        <div class="col-sm-1">
                            <div class="farq-points" style="text-align:right;float:left;">
                                <p class="text-danger">
                                <div class="my-2" style="padding-left:65px;">10</div>
                                <div class="my-4 p-1">20</div>
                                <div class="my-4 p-2">30</div>
                                <div class="my-3 p-1">40</div>
                                <div class="my-4 p-2">50</div>
                                <div class="my-3 p-2">60</div>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <div class="hearing-graph">
                                <form class="p-0">
                                    <div class="container">
                                        <div class="row" style="margin-right: -40rem !important;">
                                            <div class="col-md-1" style="margin-left:1.5rem;">
                                                <div class="row" id="firstcolumngraph">
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="1"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="2"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="3"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="4"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="5"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="6"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="row" id="secondcolumngraph">
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="1"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="2"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="3"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="4"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="5"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="6"></div>

                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="row" id="thirdcolumngraph">
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="1"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="2"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="3"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="4"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="5"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="6"></div>

                                                </div>

                                            </div>
                                            <div class="col-md-1">
                                                <div class="row" id="fourthcolumngraph">
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="1"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="2"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="3"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="4"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="5"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="6"></div>

                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="row" id="fifthcolumngraph">
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="1"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="2"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="3"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="4"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="5"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="6"></div>

                                                </div>

                                            </div>
                                            <div class="col-md-1">
                                                <div class="row" id="sixcolumngraph">
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="1"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="2"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="3"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="4"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="5"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="6"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="row" id="sevencolumngraph">
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="1"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="2"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="3"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="4"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="5"></div>
                                                    <div class="col-md-12 form-check form-check-inline"><input
                                                            type="radio" class="form-check-input" name="field1"
                                                            id="field1Option1" value="6"></div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>


                            </div>
                            <!-- Repeat the above structure for each field -->
                            </form>
                            <!-- radio end -->
                        </div>
                        <div class="bootom points">
                            <p class="text-success">
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;250
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;1000
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2000
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;4000&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6000
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;8000
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @if (isset($TestData['hearingtest']))
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="hearingtestcheckboxfit"
                                    value="1">
                                <label class="form-check-label" for="checkbox1">Fit</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="hearingtestcheckboxunfit"
                                    value="0">
                                <label class="form-check-label" for="checkbox2">Unfit</label>
                            </div>
                        </div>
                        <div class="form-group" id="hearing_test_remark_result" style="display:none">
                            <label for="exampleFormControlTextarea1">Unfit Remark</label>
                            <textarea class="form-control" id="hearingtestunfitRemark" rows="3"></textarea>
                        </div>
                    </div>
                    <form id="yourFormId" action="{{ route('test_again') }}" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" id="hearingtest" type="button"
                                onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            @csrf <!-- Add this line if you're using CSRF protection -->
                             <input type="hidden" id="" name="mediId" value="{{$medical_id}}">
                             <input type="hidden" name="featureId" value="hearingtest">
                            <button class="btn btn-danger" type="submit" id="hearingtest_test_again">Please test again</button>
                            &nbsp;&nbsp;
                            <button onclick="generateHearingtestPDF()" type="button" class="btn btn-danger  btn-sm"><i class="fa fa-print"
                                    style="font-size:36px"></i></button>
                        </div>
                            </form>
                </div>
            @endif
        </div>
    </div>
</div>
</div>
{{-- ------------------------Rombergtest----------------------------------- --}}
@php
    if (isset($TestData['rt'])) {
        $rtcheckupdata = json_decode($TestData['rt'], true);
    }
@endphp
<div class="accordion px-4 mb-2 " id="rombergtestcontainer">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed"
                @if (isset($TestData['rt'])) @else style="background-color:#e5533c;color:#f8f9fc" @endif
                type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                aria-controls="collapseSix" id="rtbutton">
                Check For Romberg Test
            </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="container" id="rombergtestcontainer">
                    <strong> Consumer Certificate Number -- {{ $data->certification_number }}</strong>
                    <div class="row">
                        <div class="col">
                            <div id="rombergtestcontainer-checkup-chart-container">
                                <div class="container">
                                    <div class="row justify-content-md-center">
                                        @if (isset($rtcheckupdata['both_legs']) && $rtcheckupdata['both_legs'] != [])
                                            <div class="col-sm">
                                                <div class="embed-responsive embed-responsive-16by9 mb-2">
                                                    <iframe class="embed-responsive-item" width="200px"
                                                        height="300px"
                                                        src="{{ asset('public/videos/' . $rtcheckupdata['both_legs']) }}"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <p class="text-center"><strong>Both Legs</strong></p>
                                            </div>
                                        @endif
                                        @if (isset($rtcheckupdata['left_leg']) && $rtcheckupdata['left_leg'] != [])
                                            <div class="col-sm">
                                                <div class="embed-responsive embed-responsive-16by9 mb-2">
                                                    <iframe class="embed-responsive-item"
                                                        src="{{ asset('public/videos/' . $rtcheckupdata['left_leg']) }}"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <p class="text-center"><strong>Left Legs</strong></p>
                                            </div>
                                        @endif
                                        @if (isset($rtcheckupdata['right_leg']) && $rtcheckupdata['right_leg'] != [])
                                            <div class="col-sm">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item"
                                                        src="{{ asset('public/videos/' . $rtcheckupdata['right_leg']) }}"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <p class="text-center"><strong>Right Legs</strong></p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div id="c_pre-bp-chart-container" style="height: 400px;"></div> --}}
                @if (isset($rtcheckupdata))
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="rtcheckboxfit"
                                        value="1">
                                    <label class="form-check-label" for="checkbox1">Fit</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="rtcheckboxunfit"
                                        value="0">
                                    <label class="form-check-label" for="checkbox2">Unfit</label>
                                </div>
                            </div>
                            <div class="form-group" id="rt_test_remark_result" style="display:none">
                                <label for="exampleFormControlTextarea1">Unfit Remark</label>
                                <textarea class="form-control" id="rtunfitRemark" rows="3"></textarea>
                            </div>
                        </div>
                        <form id="yourFormId" action="{{ route('test_again') }}" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            @csrf <!-- Add this line if you're using CSRF protection -->
                            <button class="btn btn-primary" id="rt" type="button"
                                onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                             <input type="hidden" id="" name="mediId" value="{{$medical_id}}">
                             <input type="hidden" name="featureId" value="rt">
                            <button class="btn btn-danger" type="submit" id="rt_test_again">Please test again</button>
                            &nbsp;&nbsp;
                        </div>
                            </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- end Rombergtest --}}
{{-- ----------------------flatfoottest----------------------------- --}}
@php
    if (isset($TestData['flatfoot'])) {
        $flatfootcheckupdata = json_decode($TestData['flatfoot'], true);
    }
@endphp
<div class="accordion px-4 mb-2" id="flatfoottestcontainer">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSeaven">
            <button class="accordion-button collapsed"
                @if (isset($TestData['flatfoot'])) @else style="background-color:#e5533c;color:#f8f9fc" @endif
                type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeaven" aria-expanded="false"
                aria-controls="collapseSeaven" id="flatfootbutton">
                Check For Flat Foot Test
            </button>
        </h2>
        <div id="collapseSeaven" class="accordion-collapse collapse" aria-labelledby="headingSix"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="container" id="flattestcontainer">
                    <strong> Consumer Certificate Number -- {{ $data->certification_number }}</strong>
                    <div class="row">
                        <div class="col">
                            <div id="flattestcontainer-checkup-chart-container">
                                @if (isset($flatfootcheckupdata))
                                    <div class="container d-flex justify-content-center" id="flatfootimage">
                                        <img src="{{ asset('public/test_images/' . $flatfootcheckupdata['flatfoot']) }}"
                                            class="img-fluid" alt="Responsive image">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div id="c_pre-bp-chart-container" style="height: 400px;"></div> --}}
                @if (isset($flatfootcheckupdata))
                    <div class="container">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="flatfootcheckboxfit"
                                        value="1">
                                    <label class="form-check-label" for="checkbox1">Fit</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="flatfootcheckboxunfit"
                                        value="0">
                                    <label class="form-check-label" for="checkbox2">Unfit</label>
                                </div>
                            </div>
                            <div class="form-group" id="flatfoot_test_remark_result" style="display:none">
                                <label for="exampleFormControlTextarea1">Unfit Remark</label>
                                <textarea class="form-control" id="flatfootunfitRemark" rows="3"></textarea>
                            </div>


                        </div>
                        <form id="yourFormId" action="{{ route('test_again') }}" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            &nbsp;&nbsp;
                            @csrf <!-- Add this line if you're using CSRF protection -->
                             <input type="hidden" id="" name="mediId" value="{{$medical_id}}">
                             <input type="hidden" name="featureId" value="flatfoot">
                            <button class="btn btn-primary" id="flatfoot" type="button"
                                onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            <button class="btn btn-danger" id="flatfoot_test_again">Please test again</button>
                            &nbsp;&nbsp;
                            <button onclick="flatfootgeneratePDF()" type="button" class="btn btn-danger  btn-sm"><i
                                    class="fa fa-print" style="font-size:36px"></i></button>
                        </div>
                            </form>
                    </div>
                @endif

            </div>
        </div>
    </div>

</div>
{{-- ----------------------------------BPPV-------------------------------------------- --}}
@php
    if (isset($TestData['bppv'])) {
        $bppvcheckupdata = json_decode($TestData['bppv'], true);
    }
@endphp
<div class="accordion px-4 mb-2" id="bppvtestcontainer">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingeight">
            <button class="accordion-button collapsed"
                @if (isset($TestData['bppv'])) @else style="background-color:#e5533c;color:#f8f9fc" @endif
                type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false"
                aria-controls="collapseeight" id="bppvbutton">
                Check For BPPV Test
            </button>
        </h2>
        <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingSix"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="container" id="bppvcontainer">
                    <strong> Consumer Certificate Number -- {{ $data->certification_number }}</strong>
                    <div class="row">
                        <div class="col">
                            <div id="bppvcontainer-checkup container">
                                @if (isset($bppvcheckupdata['bppv_video']) && $bppvcheckupdata['bppv_video'] != [])
                                    <div class="col-sm">
                                        <div class="embed-responsive embed-responsive-16by9"
                                            style="width: 60%; left: 16%; top: 10px;">
                                            <iframe class="embed-responsive-item"
                                                src="{{ asset('public/videos/' . $bppvcheckupdata['bppv_video']) }}"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div id="c_pre-bp-chart-container" style="height: 400px;"></div> --}}
                @if (isset($bppvcheckupdata))
                    <div class="container">
                        <div class="row">
                            <div class="col-6  mt-4 d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="bppvcheckboxfit"
                                        value="1">
                                    <label class="form-check-label" for="checkbox1">Fit</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="bppvcheckboxunfit"
                                        value="0">
                                    <label class="form-check-label" for="checkbox2">Unfit</label>
                                </div>
                            </div>
                            <div class="form-group" id="bppv_test_remark_result" style="display:none">
                                <label for="exampleFormControlTextarea1">Unfit Remark</label>
                                <textarea class="form-control" id="bppvunfitRemark" rows="3"></textarea>
                            </div>
                        </div>
                        <form id="yourFormId" action="{{ route('test_again') }}" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" id="bppv" type="button"
                                onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            @csrf <!-- Add this line if you're using CSRF protection -->
                             <input type="hidden" id="" name="mediId" value="{{$medical_id}}">
                             <input type="hidden" name="featureId" value="bppv">
                            <button class="btn btn-danger" type="submit" id="bppv_test_again">Please test again</button>
                        </div>
                            </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- -----------------------------Fukuda-Unterberger Test--------------------------------------- --}}
@php
    if (isset($TestData['fukuda'])) {
        $fukudacheckupdata = json_decode($TestData['fukuda'], true);
    }
@endphp
<div class="accordion px-4 mb-2 " id="fukudatestcontainer">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingnine">
            <button class="accordion-button collapsed" id="fukudabutton"
                @if (isset($TestData['fukuda'])) @else style="background-color:#e5533c;color:#f8f9fc" @endif
                type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false"
                aria-controls="collapsenine">
                Check For Fukuda-Unterberger Test
            </button>
        </h2>
        <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="container" id="fukudacontainer">
                    <strong> Consumer Certificate Number -- {{ $data->certification_number }}</strong>
                    <div class="row">
                        <div class="col">
                            <div id="fukudacontainer-checkup container">
                                @if (isset($fukudacheckupdata['fukuda_video']) && $fukudacheckupdata['fukuda_video'] != [])
                                    <div class="col-sm">
                                        <div class="embed-responsive embed-responsive-16by9"
                                            style="width: 60%; left: 16%; top: 10px;">
                                            <iframe class="embed-responsive-item"
                                                src="{{ asset('public/videos/' . $fukudacheckupdata['fukuda_video']) }}"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div id="c_pre-bp-chart-container" style="height: 400px;"></div> --}}
                @if (isset($fukudacheckupdata))
                    <div class="container">
                        <div class="row">
                            <div class="col-6  mt-4 d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="fukudacheckboxfit"
                                        value="1">
                                    <label class="form-check-label" for="checkbox1">Fit</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="fukudacheckboxunfit"
                                        value="0">
                                    <label class="form-check-label" for="checkbox2">Unfit</label>
                                </div>
                            </div>
                            <div class="form-group" id="fukuda_test_remark_result" style="display:none">
                                <label for="exampleFormControlTextarea1">Unfit Remark</label>
                                <textarea class="form-control" id="fukudaunfitRemark" rows="3"></textarea>
                            </div>
                        </div>
                        <form id="yourFormId" action="{{ route('test_again') }}" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" id="fukuda" type="button"
                                onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            @csrf <!-- Add this line if you're using CSRF protection -->
                             <input type="hidden" id="" name="mediId" value="{{$medical_id}}">
                             <input type="hidden" name="featureId" value="fukuda">
                            <button class="btn btn-danger" type="submit" id="fukuda_test_again">Please test again</button>
                            &nbsp;&nbsp;
                        </div>
                            </form>
                    </div>
                @endif
            </div>
        </div>
    </div>


</div>
{{-- -------------------------------------Consumer Final Report Submit------------------------ --}}
<div class="accordion px-4 mb-2 " id="finalreportcontainer">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingten">
            <input type="hidden" value="{{ $CountRisultGivenByDoctor }}" id="doctorcount" />
            <button class="accordion-button collapsed" id="doctorbutton" onclick="doctorFinalResultSubmit()"
                @if (isset($data->doctor_final_result)) @else @endif type="button" data-bs-toggle="collapse"
                @if ($CountRisultGivenByDoctor == 6) data-bs-target="#collapseten" @else data-bs-target="" @endif
                aria-expanded="false" aria-controls="collapseten">
                Final Submit And Signature Of Doctor
            </button>
        </h2>
        <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="container">
                    <strong> Consumer Certificate Number -- {{ $data->certification_number }}</strong>
                    <div class="row">
                        <div class="col">
                            <div id="doctorsigncontainer-checkup container">
                                <p class="h4 text-center text-dark">This is to be certify that Mr.
                                    {{ $data->consumer_name }}</p>
                                <p class="text-dark">
                                    has been examined by us, We can not discover that he/she has got any
                                    disease, communicable or otherwise, constitutional or bodily deformed
                                    oe Vertigo.
                                </p>
                                <!--info container -->
                                <div class="d-flex justify-content-around my-4">
                                    <p class="h4 text dark">Candidate is hereby declared,</p>
                                    <div class=" text-center">
                                        <p class="h4 text dark">Vertigo Test : Normal</p>
                                    </div>
                                </div>
                                <div class="container d-flex justify-content-around">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="overallfit"
                                            value="1" />
                                        <label class="form-check-label" for="inlineCheckbox1">FIT</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="overallunfit"
                                            value="0" />
                                        <label class="form-check-label" for="inlineCheckbox2">UNFIT</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="temporaeilyunfit"
                                            value="-1" />
                                        <label class="form-check-label" for="inlineCheckbox3">Temorarily
                                            UNFIT</label>
                                    </div>
                                </div>
                                <input type="hidden" id="doctorId" />
                                <div class="container1">
                                    <div class="col-md-12">
                                        <ul>
                                            <li class="text-center">
                                                <div class="title" id="">REGISTRATION NUMBER</div>
                                                <div class="col-md-6" id="doctorregistration"></div>
                                            </li>

                                            <li class="text-center">
                                                <div class="title">SIGNATURE OF DOCTOR</div>
                                                <div class="col-md-6" id="doctorsign"></div>
                                            </li>
                                            <li class="text-center">
                                                <div class="title">SEAL OF DOCTOR</div>
                                                <div class="col-md-6" id="doctorseal"></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="container">
                                        <div class="main">
                                            <label for="">Assign Doctor Credential </label>
                                            <select class="form-select" aria-label="Default select example"
                                                style="margin-right: 40px; margin-bottom: 10px; width: 300px; overflow: hidden;"
                                                id="companyProfile" name="company_id">
                                                @if (isset($doctordata))
                                                    <option selected disabled>Select Doctors</option>
                                                    @foreach ($doctordata as $k => $doctor)
                                                        <option value={{ $doctor->id }}>
                                                            <p><strong>Doctor Name : {{ $doctor->name }}</strong></p>
                                                            <strong>Registration Number :
                                                                {{ $doctor->registration_number }}</strong>
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div id="c_pre-bp-chart-container" style="height: 400px;"></div> --}}
                    <div class="container">
                        <div class="row">
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" id="doctor"
                                onclick="signatureOFDoctor(this)">Submit</button>
                            &nbsp;&nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- -------------------------------------Customer Profile Modal----------------------------- --}}
    <button type="button mt-4 mb-4" class="btn btn-dark ml-4 " data-toggle="modal"
        data-target="#exampleModalLong">
        Consumer Examination Report
    </button>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 1000px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="" id="consumer_pdf" class=" shadow-sm"
                            style="border:2px solid #339999;">
                            <div class="top-section d-flex justify-content-around">
                                <div class="logo">
                                    <img src="{{ url('public/dashboard/img/logo.png') }}" alt=""
                                        width="100" />
                                </div>
                                <div class="heading">
                                    <p class="text-center h3" style="color: #0d9494">MEDICLEAR</p>
                                    <p class="text-center" style="color: #339999">
                                        An ISO 9001 - 2015 Certified Company<br />
                                        Site Office - 90 ,Vasant Complex , Mayur Vihar,Delhi
                                    </p>
                                </div>
                                <div class="blank"></div>
                            </div>
                            <hr style="color:black;height:12px; border-top: 5px solid black;">
                            <!-- table start -->
                            <table class=" table table-striped border-dark table-bordered"
                                style="background-color: aliceblue;">
                                <thead>
                                    <tr>
                                        <th scope="col">1</th>
                                        <th scope="col">Certification No.</th>
                                        <th scope="col"></th>
                                        <th scope="col">Date</th>
                                        <th>{{ date('d-M-y') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Name</td>
                                        <td colspan="2">{{ $data->consumer_name }}</td>
                                        <td rowspan="6">...............<img
                                                src="{{ url('public/images/' . $data->consumer_profile_image_name) }}"
                                                width="100px" alt=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Company</td>
                                        <td colspan="2">NA</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Location</td>
                                        <td colspan="2">{{ $data->consumer_location }}</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Client Account</td>
                                        <td colspan="2">NA</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Gender</td>
                                        <td colspan="2" class="text-center">
                                            @if ($data->gender == 'male')
                                                {{ 'Male' }}
                                            @elseif($data->gender == 'female')
                                                {{ 'Female' }}
                                            @endif
                                        </td>
                                        <!-- <td></td> -->
                                    </tr>
                                    {{-- <tr>
                                    <th scope="row">7</th>
                                    <td>Aadhar</td>
                                    <td colspan="2" class="h4 text-center"> Dizziness Questionnaire</td>
                                    <!-- <td></td> -->
                                </tr> --}}
                                </tbody>
                            </table>
                            <!-- table end -->

                            <!-- questions -->
                            <!-- question Ans field start -->
                            <div class="questions">
                                <p class="text-black my-3">
                                    To be filled by the candidate before Medical Examination :
                                </p>
                                <p>
                                    A. When you are "dizzy" do you experience any of the following
                                    symptoms ? (check yes or no)
                                </p>
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6 d-flex">
                                        <div><strong>Yes</strong> </div>
                                        <div class="ml-4"><strong>No</strong></div>
                                    </div>
                                </div>
                                <!-- question start  -->
                                <div class="row my-2">
                                    <div class="col-md-6">
                                        <p>
                                            1. Light-headness or swimmimg sensation in the head?
                                        </p>
                                    </div>
                                    <div class="col-md-4 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value=""
                                                @if ($data->light_hedness_or_swim_sensation_in_the_head == 'yes') checked @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" disabled type="checkbox"
                                                id="inlineCheckbox1" value="option1"
                                                @if ($data->light_hedness_or_swim_sensation_in_the_head == 'no') checked @disabled(true) @endif />
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>2. Blacking out or loss of conciousness?
                                        </p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->blacking_out_or_loss_of_consciousness == 'yes') checked @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->blacking_out_or_loss_of_consciousness == 'no') checked @disabled(true) @endif />
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>3. Object stunning or tuning around you?
                                        </p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->object_spinning_or_turning_around_you == 'yes') checked @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->object_spinning_or_turning_around_you == 'no') checked @disabled(true) @endif />
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>4. Nausea or vomiting?</p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->nausea_or_vomiting == 'yes') checked @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->nausea_or_vomiting == 'no') checked @disabled(true) @endif />
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>
                                            5. tingling in your fingers, toes or around your mouth?
                                        </p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->tingling_in_your_fingers_toes_around_your_mouth == 'yes') checked @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->tingling_in_your_fingers_toes_around_your_mouth == 'no') checked @disabled(true) @endif />
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>6. Does change of position make you dizzy?</p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->does_changes_of_position_make_you_dizzy == 'yes') checked @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->does_changes_of_position_make_you_dizzy == 'no') checked @disabled(true) @endif />
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>
                                            7. When You are dizzy, must you support yourself when standing?
                                        </p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->when_you_are_dizzy_must_support_yourself_when_standing == 'yes') checked @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->when_you_are_dizzy_must_support_yourself_when_standing == 'no') checked @disabled(true) @endif />
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>8. Tendency to fall?
                                        </p>
                                    </div>
                                    <div class="objective-option mt-3">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox1">to the
                                                left?</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1" />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2" />
                                            <label class="form-check-label" for="inlineCheckbox2">to the
                                                right?</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Forward?</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Backward?</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" />
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="row my-4">
                                    <div class="col-6">9. Loss of Balance while walking ?</div>
                                    <div class="objective-option mt-3">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox1">veering to the
                                                left?</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1" />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2" />
                                            <label class="form-check-label" for="inlineCheckbox2">
                                                veering to the right?</label>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <!--  -->
                            <!-- past medical section start -->
                            <div class="past-medical History">
                                <div class="1">
                                    <p class="text-black">Past Medical History :</p>

                                    <p>
                                        1. Do you have a History of any of the following ? please check
                                        all that apply
                                    </p>
                                    <div class="objective-option">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox1">Heart
                                                disease</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if (isset($postMedicalHistory) && is_array($postMedicalHistory)) @if (in_array(1, $postMedicalHistory)) checked @endif
                                            @else $postMedicalHistory=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2"
                                                @if (isset($postMedicalHistory) && is_array($postMedicalHistory)) @if (in_array(2, $postMedicalHistory)) checked @endif
                                            @else $postMedicalHistory=[]; @endif />
                                            <label class="form-check-label"
                                                for="inlineCheckbox2">Hypertension</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Kidney
                                                disease</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (isset($postMedicalHistory) && is_array($postMedicalHistory)) @if (in_array(3, $postMedicalHistory)) checked @endif
                                            @else $postMedicalHistory=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Thyroid
                                                disease</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (isset($postMedicalHistory) && is_array($postMedicalHistory)) @if (in_array(4, $postMedicalHistory)) checked @endif
                                            @else $postMedicalHistory=[]; @endif/>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Migrain
                                                headaches</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (isset($postMedicalHistory) && is_array($postMedicalHistory)) @if (in_array(5, $postMedicalHistory)) checked @endif
                                            @else $postMedicalHistory=[]; @endif />
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 question -->
                                <div class="2 my-4">
                                    <p>
                                        2. Do you have a History of any of the following symptoms? please
                                        check all that apply
                                    </p>
                                    <p>a. Difficulty in hearing ?</p>
                                    <div class="objective-option">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox1">Left ear</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if (isset($defficulting_in_hearing) && is_array($defficulting_in_hearing)) @if (in_array(1, $defficulting_in_hearing)) checked @disabled(true) @endif
                                            @else $defficulting_in_hearing=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2"
                                                @if (isset($defficulting_in_hearing) && is_array($defficulting_in_hearing)) @if (in_array(2, $defficulting_in_hearing)) checked @disabled(true) @endif
                                            @else $defficulting_in_hearing=[]; @endif/>
                                            <label class="form-check-label" for="inlineCheckbox2">Both ears</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Right ears</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (isset($defficulting_in_hearing) && is_array($defficulting_in_hearing)) @if (in_array(3, $defficulting_in_hearing)) checked @disabled(true) @endif
                                            @else $defficulting_in_hearing=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">associated with
                                                attack</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option4"
                                                @if (isset($defficulting_in_hearing) && is_array($defficulting_in_hearing)) @if (in_array(4, $defficulting_in_hearing)) checked @disabled(true) @endif
                                            @else $defficulting_in_hearing=[]; @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Migrain
                                                headaches</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option5"
                                                @if (isset($defficulting_in_hearing) && is_array($defficulting_in_hearing)) @if (in_array(5, $defficulting_in_hearing)) checked @disabled(true) @endif
                                            @else $defficulting_in_hearing=[]; @endif />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- date signature thumb -->
                            <div class="container d-flex justify-content-around">
                                <div class="date border2 text-center">Date</div>
                                <div class="signature text-center border2">Signature</div>
                                <div class="left-hand-thumb text-center border2">Left-Hand-Thumb</div>
                            </div>
                            <!--  -->
                            <!-- date signature thumb -->
                            <div class="container my-4 d-flex justify-content-around">
                                <div class="date border1">
                                    {{ date('d-M-y') }}
                                </div>
                                {{-- <div class="signature border1" id="doctorsign"></div> --}}
                                <div class="signature  border1" id="">
                                    <img width="90px" height="35px"
                                        style="
                              border: 1px solid;"
                                        src="{{ url('public/sign/' . $data->consumer_sign_image_name) }}" />
                                </div>
                                <div class="left-hand-thumb border1" id=""></div>
                                {{-- <div class="left-hand-thumb border1" id="doctorseal"></div> --}}
                            </div>

                            <!-- form footer -->
                            <div class="footer d-flex justify-content-center align-items-center text-dark"
                                style="background-color: #339999">
                                <p>
                                    To verify the Medical Certification scan QR Code or email Us at
                                    <span class="text-danger">everify@mediclear.in</span>
                                </p>
                            </div>
                        </form>
                    </div>
                    ...
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="consumerfinalPDf()">Save PDF</button>
                </div>
            </div>
        </div>
    </div>
    {{-- ---------------------------------------------------------------------------------------------- --}}
    {{-- ------------------------------ Vertigo Test Report PDF------------------------------------------------------------------------ --}}
    <!-- Button trigger modal -->
    @php
        $testResults = $Testresult->all();
        $bpUnfitChecked = false;
        $bpfitChecked = false;
        $hearingUnfitChecked = false;
        $hearingfitChecked = false;
        $eyedistanceUnfitChecked = false;
        $eyedistancefitChecked = false;
        $eyecheckupUnfitChecked = false;
        $eyecheckupfitChecked = false;
        $bppvUnfitChecked = false;
        $bppvfitChecked = false;
        $fukudaUnfitChecked = false;
        $fukudafitChecked = false;
        $flatfootUnfitChecked = false;
        $flatfootfitChecked = false;
        $rtunfitChecked = false;
        $rtfitChecked = false;
    @endphp
    @foreach ($Testresult as $feature => $test_result)
        @if ($feature == 'bp')
            @if ($test_result == 0)
                @php $bpUnfitChecked = true; @endphp
            @elseif ($test_result == 1)
                @php $bpfitChecked = true; @endphp
            @endif
        @elseif ($feature == 'hearingtest')
            @if ($test_result == 0)
                @php $hearingUnfitChecked = true; @endphp
            @elseif ($test_result == 1)
                @php $hearingfitChecked = true; @endphp
            @endif
        @elseif ($feature == 'eyedistance')
            @if ($test_result == 0)
                @php $eyedistanceUnfitChecked = true; @endphp
            @elseif ($test_result == 1)
                @php $eyedistancefitChecked = true; @endphp
            @endif
        @elseif ($feature == 'eyecheckup')
            @if ($test_result == 0)
                @php $eyecheckupUnfitChecked = true; @endphp
            @elseif ($test_result == 1)
                @php $eyecheckupfitChecked = true; @endphp
            @endif
        @elseif ($feature == 'bppv')
            @if ($test_result == 0)
                @php $bppvUnfitChecked = true; @endphp
            @elseif ($test_result == 1)
                @php $bppvfitChecked = true; @endphp
            @endif
        @elseif ($feature == 'fukuda')
            @if ($test_result == 0)
                @php $fukudaUnfitChecked = true; @endphp
            @elseif ($test_result == 1)
                @php $fukudafitChecked = true; @endphp
            @endif
        @elseif ($feature == 'flatfoot')
            @if ($test_result == 0)
                @php $flatfootUnfitChecked = true; @endphp
            @elseif ($test_result == 1)
                @php $flatfootfitChecked = true; @endphp
            @endif
        @elseif ($feature == 'rt')
            @if ($test_result == 0)
                @php $rtunfitChecked = true; @endphp
            @elseif ($test_result == 1)
                @php $rtfitChecked = true; @endphp
            @endif
        @endif
    @endforeach
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalVertigo">
        Vertico Test Report
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalVertigo" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalVertigo" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 1200px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="verticopdfreport">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-holder shadow-lg my-5 p-3 fist-step">
                                <h1 class="text-center" style="font-size: 30px;">
                                    MEDICLEAR
                                </h1>
                                <p class="text-center" style="color: #4daf92">
                                    <b> An ISO 9001 - 2015 Certified Company
                                        <br> Site Office - 90 ,Vasant Complex , Mayur Vihar,Delhi</b>
                                </p>
                                <table class="table table-striped border-dark table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col-4" style="width: 40%;">{{ $data->consumer_name }}</th>
                                            <th scope="col">Checkup Date</th>
                                            <th>{{ date('d-M-y') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>D.O.B.
                                            </td>
                                            <td>{{ date('d-m-Y', strtotime($data->consumer_dob)) }}</td>
                                            <td>Valid Till-</td>
                                            <td>{{ date('d-M-y', strtotime('+1 year')) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Designation</td>
                                            <td>....</td>
                                            <td colspan="2">....</td>
                                        </tr>
                                        <tr>
                                            <td>Certification</td>
                                            <td>{{ $data->certification_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Emp code</td>
                                            <td>....</td>
                                            <td colspan="2">....</td>
                                        </tr>
                                    </tbody>
                                </table>
                                @php
                                    if (isset($TestData['bp'])) {
                                        $bpdatamodal = json_decode($TestData['bp'], true);
                                    }
                                @endphp
                                <h2 class="text-center text-success">Step 1 : General Information</h2>
                                <div class="form-pre">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b> Pre</b></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>Lower:@php
                                                if (isset($TestData['bp'])) {
                                                    $bpdatamodal['pre_lower_bp'];
                                                } else {
                                                    echo 0;
                                                }
                                            @endphp
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>Upper: @php
                                                if (isset($TestData['bp'])) {
                                                    $bpdatamodal['pre_upper_bp'];
                                                } else {
                                                    echo 0;
                                                }
                                            @endphp</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Post</b></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>Lower: @php
                                                if (isset($TestData['bp'])) {
                                                    $bpdatamodal['post_lower_bp'];
                                                } else {
                                                    echo 0;
                                                }
                                            @endphp</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>Upper: @php
                                                if (isset($TestData['bp'])) {
                                                    $bpdatamodal['post_upper_bp'];
                                                } else {
                                                    echo 0;
                                                }
                                            @endphp</p>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="text-center text-warning"> Blood Pressure Report</h5>
                                <div class="graph-holder shadow-lg">
                                    <canvas id="BpGraphModal" width="1000" height="300"></canvas>
                                </div>
                                <div class="fit mt-2">
                                    <h5 class="text-successmt mt-3">Remark</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input fit" type="radio" name="bpfit"
                                                    value="fit" @if ($bpfitChecked) checked @endif
                                                    disabled id="fitRadio">
                                                <label for="fitRadio">
                                                    Fit
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input unfit" type="radio"
                                                    name="bpunfit" @if ($bpUnfitChecked) checked @endif
                                                    id="unfitRadio" disabled value="unfit">
                                                <label for="unfitRadio">
                                                    Unfit
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h6 class="mt-4 d-flex"><b class="text-success">Remark: </b>
                                            <p id="bpremarkmodal">
                                                @if (isset($testremarks) && isset($testremarks['bp']))
                                                    {{ $testremarks['bp'] }}
                                                @endif
                                            </p>
                                        </h6>
                                    </div>
                                </div>
                                <div class="second-step">
                                    {{-- 2nd step start here --}}
                                    <h2 class="text-success text-center">Step 2 :Hearing Checkup</h2>
                                    <p class="text-success ">For the Hearing
                                        Checkup....................................................................................................................................................
                                    </p>
                                    <div class="col-md-12 shadow-lg bg-light">
                                        <div id="hearingdata">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <p><b class="text-success">I.</b> Procedure</p>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio" disabled id="modalfithearing"
                                                                name="hearingfit"
                                                                @if ($hearingfitChecked) checked @endif
                                                                value="fit" class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio" disabled id="modalunfithearing"
                                                                name="hearingunfit"
                                                                @if ($hearingUnfitChecked) checked @endif
                                                                value="unfit" class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <p id="hearingremarkInModal" class="text-danger">
                                                        <span class="text-dark">Remark: </span>
                                                        @if (isset($testremarks) && isset($testremarks['hearingtest']))
                                                            {{ $testremarks['hearingtest'] }}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- 3rd Step --}}
                                    <h2 class="text-success text-center">Step 3 :Eye Color Blindness Test</h2>
                                    <p class="text-success">For the Color Blindness</p>
                                    <div class="col-md-12 p-3 shadow-lg bg-light">
                                        <div class="eye-percentage">
                                            <svg id="eyeblindnessmodal" viewBox="0 0 36 36" class="circular-chart"
                                                style="fill: transparent; width: 100%; height: 100%;">
                                                <path class="circle-bg"
                                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                <path class="circle" stroke-dasharray="{{ $percentage }}, 100"
                                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                                    style="stroke: {{ $color }}; stroke-linecap: round; stroke-width: 2;" />
                                                <text x="18" y="20.35" class="percentage">{{ $percentage }}%</text>
                                            </svg>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <p><b class="text-success">I.</b> Procedure</p>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio" disabled id="modalfiteyeblindness"
                                                                name="eyeblindnessfit" value="fit"
                                                                @if ($eyecheckupfitChecked) checked @endif
                                                                class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio" disabled
                                                                id="modalunfiteyeblindness" name="eyeblindnessunfit"
                                                                @if ($eyecheckupUnfitChecked) checked @endif
                                                                value="unfit" class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <span id="eyeremarkInModal" class="text-danger">
                                                        <span class="text-dark">Remark: </span>
                                                        @if (isset($testremarks) && isset($testremarks['eyecheckup']))
                                                            {{ $testremarks['eyecheckup'] }}
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- 4th Step --}}
                                    <h2 class="text-success text-center">Step 4 :Eye Color Distance Test</h2>
                                    <p class="text-success ">For the Eye Distance</p>
                                    <div class="col-md-12 p-3 shadow-lg bg-light">
                                        <div class="row">
                                            <div class="col-md-12 d-flex">
                                        <div class="col-md-6">
                                        <div class="eye-distance-percentage">
                                            <svg id="eyedistancemodal" viewBox="0 0 36 36" class="circular-chart"
                                                style="fill: transparent; width: 100%; height: 100%;">
                                                <path class="circle-bg"
                                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                <path class="circle"
                                                    stroke-dasharray="{{ $distancepercentage }}, 100"
                                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                                    style="stroke: {{ $distancecolor }}; stroke-linecap: round; stroke-width: 2;" />
                                                <text x="18" y="20.35"
                                                    class="percentage">{{ $distancepercentage }}%</text>
                                            </svg>
                                            <label for="eyedistancemodal">Left Eye.</label>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="eye-distance-percentage">
                                                <svg id="righteyedistance" viewBox="0 0 36 36" class="circular-chart"
                                                    style="fill: transparent; width: 100%; height: 100%;">
                                                    <path class="circle-bg"
                                                        d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                    <path class="circle" stroke-dasharray="{{ $rightdistancepercentage }}, 100"
                                                        d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                                        style="stroke: {{ $rightdistancecolor }}; stroke-linecap: round; stroke-width: 2;" />
                                                    <text x="18" y="20.35"
                                                        class="percentage">{{ $rightdistancepercentage }}%</text>
                                                </svg>
                                                <label for="righteyedistance">Right Eye.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <p><b class="text-success">I.</b> Procedure</p>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio" disabled id="modalfiteyedistance"
                                                                name="eyedistancefit" value="fit"
                                                                @if ($eyedistancefitChecked) checked @endif
                                                                class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio" disabled
                                                                id="modalunfiteyedistance" name="eyedistanceunfit"
                                                                @if ($eyedistanceUnfitChecked) checked @endif
                                                                value="unfit" class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <p id="eyedistanceremarkInModal" class="text-danger">
                                                        <span class="text-dark">Remark: </span>
                                                        @if (isset($testremarks) && isset($testremarks['eyedistance']))
                                                            {{ $testremarks['eyedistance'] }}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- 5th step here --}}
                                    <h2 class="text-success text-center">Step 5 :Romberg Test </h2>
                                    <h4 class="text-warning"> Procedure</h4>
                                    <p> For the Romberg test, you’ll be asked to stand with your feet together. Then,
                                        you’ll close your eyes. Your doctor will assess how much you sway or fall to
                                        determine what’s causing your vertigo.
                                        <br>
                                        Record Vedio -
                                    <ul>
                                        <li>15 Sec - stand on one feet (left) (with closed eyes) </li>
                                        <li>15 Sec - stand on one feet (Right) (with closed eyes) </li>
                                        <li> 30 sec - stand on both feet (with closed eyes)</li>
                                    </ul>
                                    <br>
                                    <span class="text-success"> Remark - Based on vedio doctor confirm FIT or
                                        UNFIT</span>
                                    </p>
                                    <div class="col-md-12 p-3 shadow-lg bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <p><b class="text-success">I.</b> Stand on One Foot <b
                                                            class="text-danger">(left)</b></p>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio" disabled name="rtfootfit"
                                                                value="fit" id="rtfit"
                                                                @if ($rtfitChecked) checked @endif
                                                                class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio"
                                                                @if ($rtunfitChecked) checked @endif
                                                                id="rtunfit" disabled name="rtfootunfit"
                                                                value="unfit" class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <p id="rtfootremark" class="text-danger">
                                                        <span class="text-dark">Remark: </span>
                                                        @if (isset($testremarks) && isset($testremarks['rt']))
                                                            {{ $testremarks['rt'] }}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- hello there  -->
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <p><b class="text-success">II.</b>Stand on One Feet<b
                                                            class="text-danger">(Right)</b></p>
                                                </div>
                                            </div>
                                            <!-- hello there  -->
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <p><b class="text-success">II.</b>Stand on both Feet<b
                                                            class="text-danger">(Closed Eyes)</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!--************5th step done ************** -->
                                    {{-- ************6th Step Start ************* --}}
                                    <h2 class="text-success text-center">Step 6 :Flat Foot</h2>
                                    <p class="text-success ">For the Flat Foot</p>
                                    <div class="col-md-12 p-3 shadow-lg bg-light">
                                        <div class="flat-foot">
                                            @if (isset($flatfootcheckupdata))
                                                <div class="container d-flex justify-content-center"
                                                    id="flatfootimage">
                                                    <img src="{{ asset('public/test_images/' . $flatfootcheckupdata['flatfoot']) }}"
                                                        class="img-fluid" alt="Responsive image">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <p><b class="text-success">I.</b>Flat Foot</p>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio" disabled name="flatfit"
                                                                value="fit"
                                                                @if ($flatfootfitChecked) checked @endif
                                                                id="flatfit" class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio" disabled name="flatunfit"
                                                                value="unfit" id="flatUnfit"
                                                                @if ($flatfootUnfitChecked) checked @endif
                                                                class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <p id="flatremark" class="text-danger d-flex">
                                                        <span class="text-dark">Remark: </span>
                                                        @if (isset($testremarks) && isset($testremarks['flatfoot']))
                                                            {{ $testremarks['flatfoot'] }}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!--************6th step done ************** -->
                                    <!--************7th step Start ************** -->
                                    <h2 class="text-success text-center">Step 7 :BPPV Procedure</h2>
                                    <p><b class="text-success">I.</b>Procedure</p>
                                    <p>Your healthcare provider will turn your head 45 degrees to one side. Then, you’ll
                                        quickly lie on your back, with your head off the side of the table, and maintain
                                        the 45-degree head turn for at least 30 seconds. Your doctor will inspect your
                                        eyes and ask if you feel dizzy. The procedure is then repeated on the other
                                        side.
                                    </p>
                                    <p> You should know that this test could trigger unpleasant bouts of vertigo. If you
                                        develop symptoms during this test, your doctor will determine that you do indeed
                                        have vertigo.</p>
                                    <div class="col-md-12 p-3 shadow-lg bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <p><b class="text-success">I.</b>Procedure</p>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio" disabled name="bppvfit"
                                                                value="fit"
                                                                @if ($bppvfitChecked) checked @endif
                                                                class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input type="radio" disabled name="bppvunfit"
                                                                value="unfit"
                                                                @if ($bppvUnfitChecked) checked @endif
                                                                class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <p id="bppvremark" class="text-danger">
                                                        <span class="text-dark">Remark: </span>
                                                        @if (isset($testremarks) && isset($testremarks['bppv']))
                                                            {{ $testremarks['bppv'] }}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!--************7th step done ************** -->
                                    {{-- 8th Step Start --}}
                                    <h2 class="text-success text-center">Step 8 :Fukuda-Unterberger </h2>
                                    <p>The Fukuda-Unterberger test requires you to march with your eyes closed. Your
                                        physician will look at how your body strays from the midline to identify which
                                        side of your body is affected by vertigo.
                                        <br>
                                        Record Vedio -
                                    <ul>
                                        <li>straight line drawn and tell them to walk with closed eyes and record the
                                            vedio</li>
                                        <br>
                                        <span class="text-success"> Remark - Based on vedio doctor confirm FIT or
                                            UNFIT</span>
                                        </p>
                                        <div class="col-md-12 p-3 shadow-lg bg-light">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <p><b class="text-success">I.</b> Procedure</p>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <input type="radio" disabled name="fukudafit"
                                                                    value="fit"
                                                                    @if ($fukudafitChecked) checked @endif
                                                                    class="form-check-input fit">
                                                                <label class="fit">
                                                                    Fit
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <input type="radio" disabled name="fukudaunfit"
                                                                    value="unfit"
                                                                    @if ($fukudaUnfitChecked) checked @endif
                                                                    class="form-check-input unfit">
                                                                <label class="fit">
                                                                    Unfit
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <p id="fukudaremark" class="text-danger">
                                                            <span class="text-dark">Remark: </span>
                                                            @if (isset($testremarks) && isset($testremarks['fukuda']))
                                                                {{ $testremarks['fukuda'] }}
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        {{-- 8th Step Done --}}
                                </div>
                            </div>
                            <!--**********end col************ -->
                        </div>
                        <!--**********end row************ -->
                        <!--**********end container************ -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="verticoPDF()" class="btn btn-primary">Save PDF</button>
                </div>
            </div>
        </div>
    </div>
    {{-- ------------------------------------------------------------------------------------------------ --}}
    {{-- -----------------------------------------------consumer final report form3------------------------------------------- --}}
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
        Consumer Final Report
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 1000px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container" id="doctorreportfinal">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-holder shadow-lg  p-3 pb-0">
                                    <!-- form start -->
                                    <form action="" class="shadow-sm">
                                        <div class="top-section d-flex justify-content-around">
                                            <div class="logo" id="qrcolum">
                                                <img src="{{ asset('assets/img/logo.png') }}" alt=""
                                                    width="100" />
                                            </div>
                                            <div class="heading">
                                                <h1 class="text-center" style="font-size: 30px;">
                                                    MEDICLEAR</h1>
                                                <p class="text-center" style="color: #4daf92">
                                                    <b> An ISO 9001 - 2015 Certified Company
                                                        <br> Site Office - 90 ,Vasant Complex , Mayur Vihar,Delhi</b>
                                                </p>
                                            </div>
                                            <div class="blank"></div>
                                        </div>

                                        <p class="h3 text-dark text-center my-3">
                                            <u>Certification Of Vertigo Examination</u>
                                        </p>
                                        @foreach ($AssignDoctor as $doc)
                                            <table class="table table-striped border-dark table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">1</th>
                                                        <th scope="col">Certification No.</th>
                                                        <th scope="col">{{ $data->certification_number }}</th>
                                                        <th scope="col">Checkup Date</th>
                                                        <th scope="col">
                                                            {{ \Carbon\Carbon::parse($doc->doctor_submit_date)->format('d-m-y') }}
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Name</td>
                                                        <td>{{ $data->consumer_name }}</td>
                                                        <td>Valid Till-</td>
                                                        <td>{{ \Carbon\Carbon::parse($doc->doctor_submit_date)->addYear()->subDay()->format('d-m-y') }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Company</td>
                                                        <td>{{ $companyName }}</td>
                                                        <td rowspan="4" colspan="2" class="text-center"
                                                            id="qrcolum">
                                                            @php
                                                                $blurredAadhar ='xxxx-xxxx-' .substr($data->consumer_addhar_number, -4);
                                                                switch ($data->doctor_final_result) {
                                                                    case '1':
                                                                        $resultpatient = "FIT";
                                                                        break;
                                                                    case '0':
                                                                        $resultpatient = "UNFIT";
                                                                        break;
                                                                    case '-1':
                                                                        $resultpatient = "Temporarily UNFIT";
                                                                        break;
                                                                    default:
                                                                        $resultpatient = "Unknown";
                                                                        break;
                                                                }
                                                                $consumerQrData =
                                                                    "Name: " . $data->consumer_name . " || " .
                                                                    "DOB: " . \Carbon\Carbon::parse($data->consumer_dob)->format('d-m-y') . " || " .
                                                                    "Result Date: " . \Carbon\Carbon::parse($doc->doctor_submit_date)->format('d-m-y') . " || " .
                                                                    "Company Name: " . $companyName . " || " .
                                                                    "Valid Date: " . \Carbon\Carbon::parse($doc->doctor_submit_date)->addYear()->subDay()->format('d-m-y') . " || " .
                                                                    "Certification Number: " . $data->certification_number . " || " .
                                                                    "Gender: " . $data->gender . " || " .
                                                                    "Result: " . $resultpatient . " || " .
                                                                    "Addhar Number: " . $blurredAadhar;
                                                            @endphp
                                                            {!! QrCode::size(256)->generate($consumerQrData) !!}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Gender</td>
                                                        <td>
                                                            @if ($data->gender == 'male')
                                                                {{ 'Male' }}
                                                            @elseif($data->gender == 'female')
                                                                {{ 'Female' }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>DOB /AGE</td>
                                                        <td>{{ date('d-m-Y', strtotime($data->consumer_dob)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">6</th>
                                                        <td>Fitness</td>
                                                        <td>Fit</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="h4 text-center text-dark">This is to be certify that Mr.........
                                            </p>
                                            <p class="text-dark">
                                                has been examined by us, We can not discover that he/she has got any
                                                disease, communicable or otherwise, constitutional or bodily deformed
                                                oe Vertigo.
                                            </p>
                                            <!--info container -->
                                            <div class="d-flex justify-content-around my-4">
                                                <p class="h4 text dark">Candidate is hereby declared,</p>
                                                <div class="yellow text-center">
                                                    <p class="h4 text dark">Vertigo Test : Normal</p>
                                                </div>
                                            </div>
                                            <!-- checkboxes -->
                                            <div class="container d-flex justify-content-around">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="inlineCheckbox1" disabled value="option1"
                                                        @if ($doc->doctor_final_result == '1') checked @disabled(true) @disabled(true) @endif />
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox1">Fit</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="inlineCheckbox2" disabled value="option2"
                                                        @if ($doc->doctor_final_result == '0') checked @disabled(true) @endif />
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox2">Unfit</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="inlineCheckbox3" disabled value="option3"
                                                        @if ($doc->doctor_final_result == '-1') checked @disabled(true) @endif />
                                                    <label class="form-check-label" for="inlineCheckbox3">Temorarily
                                                        Unfit</label>
                                                </div>
                                            </div>
                                            <!-- 3 boxes start  -->
                                            <div class="container1">
                                                <ul>
                                                    <li class="text-center">
                                                        <div class="title">Registration Number</div>
                                                        <div class="col-md-6" id="doctorregistration">
                                                            {{ $doc->doctorregistration }}
                                                        </div>
                                                    </li>
                                                    <li class="text-center">
                                                        <div class="title">Signature Of Doctor</div>
                                                        <div class="col-md-6" id="doctorsign">
                                                            <img src="{{ asset('images/' . $doc->doctorsign) }}"
                                                                width="100px" class="img-fluid" alt="wkcicb">
                                                        </div>
                                                    </li>
                                                    <li class="text-center">
                                                        <div class="title">Seal Of Doctor</div>
                                                        <div class="col-md-6" id="doctorseal">
                                                            <img src="{{ asset('images/' . $doc->doctorseal) }}"
                                                                width="100px" class="img-fluid" alt="N/A">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- form footer -->
                                            <div class="footer d-flex justify-content-center align-items-center">
                                                <p class="h6 text-success">
                                                    <b>Note:</b> To verify the Medical Certification scan QR Code or
                                                    email Us at
                                                    <span class="text-danger">everify@mediclear.in</span>
                                                </p>
                                            </div>
                                            .
                                        @endforeach
                                    </form>
                                </div>
                                <!--**********end col************ -->
                            </div>
                            <!--**********end row************ -->
                        </div>
                        <!--**********end container************ -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="docotorFinalReportPDF()">Save
                        PDF</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function create_custom_dropdowns() {
            $('select').each(function(i, select) {
                if (!$(this).next().hasClass('dropdown-select')) {
                    $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') +
                        '" tabindex="0"><span class="current" id="currentselect"></span><div class="list"><ul></ul></div></div>'
                    );
                    var dropdown = $(this).next();
                    var options = $(select).find('option');
                    var selected = $(this).find('option:selected');
                    dropdown.find('.current').html(selected.data('display-text') || selected.text());
                    options.each(function(j, o) {
                        var display = $(o).data('display-text') || '';
                        dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ?
                                'selected' : '') + '" data-value="' + $(o).val() + '"id="' + $(o)
                            .val() +
                            '" data-display-text="' + display + '">' + $(o).text() + '</li>');
                    });
                }
            });
            $('.dropdown-select ul').before(
                '<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>'
            );
        }
        // Event listeners
        // Open/close
        $(document).on('click', '.dropdown-select', function(event) {
            if ($(event.target).hasClass('dd-searchbox')) {
                return;
            }
            $('.dropdown-select').not($(this)).removeClass('open');
            $(this).toggleClass('open');
            if ($(this).hasClass('open')) {
                $(this).find('.option').attr('tabindex', 0);
                $(this).find('.selected').focus();
            } else {
                $(this).find('.option').removeAttr('tabindex');
                $(this).focus();
            }
        });
        // Close when clicking outside
        $(document).on('click', function(event) {
            if ($(event.target).closest('.dropdown-select').length === 0) {
                $('.dropdown-select').removeClass('open');
                $('.dropdown-select .option').removeAttr('tabindex');
            }
            event.stopPropagation();
        });

        function filter() {
            var valThis = $('#txtSearchValue').val();
            $('.dropdown-select ul > li').each(function() {
                var text = $(this).text();
                (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ?
                $(this).show(): $(this).hide();
            });
        };
        // Search
        // Option click
        $(document).on('click', '.dropdown-select .option', function(event) {
            let doctorId = event.target.id;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: "{{ url('doctor-data-based-id') }}",
                data: {
                    id: doctorId
                },
                success: (data) => {
                    let sign = data[0].sign;
                    let seal = data[0].seal_of_doctor;
                    let registration_number = data[0].registration_number;
                    let doctorId = data[0].id;
                    var signHTML =
                        ` <img src="{{ asset('images/') }}/${sign}"  width="100px" class="img-fluid"  alt="">`;
                    var sealHTML =
                        ` <img src="{{ asset('images/') }}/${seal}" width="100px" class="img-fluid"  alt="">`;
                    var registrationHTML =
                        ` ${registration_number}`;
                    console.log(signHTML);
                    console.log(sealHTML);
                    $('#doctorsign').html(signHTML);
                    $('#doctorseal').html(sealHTML);
                    $('#doctorId').val(doctorId);
                    $('#doctorregistration').html(registrationHTML);
                },
                error: (data) => {}
            });
            $(this).closest('.list').find('.selected').removeClass('selected');
            $(this).addClass('selected');
            var text = $(this).data('display-text') || $(this).text();
            $(this).closest('.dropdown-select').find('.current').text(text);
            $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
        });
        // Keyboard events
        $(document).on('keydown', '.dropdown-select', function(event) {
            var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[
                0]);
            // Space or Enter
            //if (event.keyCode == 32 || event.keyCode == 13) {
            if (event.keyCode == 13) {
                if ($(this).hasClass('open')) {
                    focused_option.trigger('click');
                } else {
                    $(this).trigger('click');
                }
                return false;
                // Down
            } else if (event.keyCode == 40) {
                if (!$(this).hasClass('open')) {
                    $(this).trigger('click');
                } else {
                    focused_option.next().focus();
                }
                return false;
                // Up
            } else if (event.keyCode == 38) {
                if (!$(this).hasClass('open')) {
                    $(this).trigger('click');
                } else {
                    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find(
                        '.list .option.selected')[0]);
                    focused_option.prev().focus();
                }
                return false;
                // Esc
            } else if (event.keyCode == 27) {
                if ($(this).hasClass('open')) {
                    $(this).trigger('click');
                }
                return false;
            }
        });

        $(document).ready(function() {
            create_custom_dropdowns();
        });
    </script>
    {{-- ---------------------------------------------------------------------------------------- --}}
</div>
</div>
@php
    if (isset($TestData['bp'])) {
        $bpdata = json_decode($TestData['bp'], true);
    } else {
        $bpdata = [];
        $bpdata['pre_lower_bp'] = '0';
        $bpdata['pre_upper_bp'] = '0';
        $bpdata['post_lower_bp'] = '0';
        $bpdata['post_upper_bp'] = '0';
    }
@endphp
@php
    if (isset($TestData['hearingtest'])) {
        $hrdata = json_decode($TestData['hearingtest'], true);
    } else {
        $hrdata = [];
        $hrdata['left_ear_problem'] = '0';
        $hrdata['left_ear_fixed'] = '0';
        $hrdata['right_ear_problem'] = '0';
        $hrdata['right_ear_fixed'] = '0';
    }
@endphp
{{-- -------------------------------------------------------------------------------------------------- --}}
{{-- -------------------------------------form Modal ------------------------ --}}
{{-- ----------------------------------------------------------------------------- --}}
@endforeach
@if (isset($TestData) && json_decode($TestData, true) != [])
    @php
        if (isset($TestData['bp'])) {
            $bpdata = json_decode($TestData['bp'], true);
        } else {
            $bpdata = [];
            $bpdata['pre_lower_bp'] = '0';
            $bpdata['pre_upper_bp'] = '0';
            $bpdata['post_lower_bp'] = '0';
            $bpdata['post_upper_bp'] = '0';
        }
        if (isset($TestData['hearingtest'])) {
            $hrdata = json_decode($TestData['hearingtest'], true);
        } else {
            $hrdata = [];
            $hrdata['left_ear_problem'] = '0';
            $hrdata['left_ear_fixed'] = '0';
            $hrdata['right_ear_problem'] = '0';
            $hrdata['right_ear_fixed'] = '0';
        }
        if (isset($TestData['eyecheckup'])) {
            $eyecheckupdata = json_decode($TestData['eyecheckup'], true);
        }
    @endphp
@endif
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var preLowerBpModal = "{{ $bpdata['pre_lower_bp'] }}";
        var preLowerBpNumModal = Number(preLowerBpModal);
        var preUpperBpModal = "{{ $bpdata['pre_upper_bp'] }}";
        var preUpperBpNumModal = Number(preUpperBpModal);
        var postLowerBpModal = "{{ $bpdata['post_lower_bp'] }}"
        var postLowerBpNumModal = Number(postLowerBpModal);
        var postUpperBpModal = "{{ $bpdata['post_upper_bp'] }}"
        var postUpperBpNumModal = Number(postUpperBpModal);
        var chartDataPreModal = [preLowerBpNumModal, preUpperBpNumModal];
        var chartDataPostModal = [postLowerBpNumModal, postUpperBpNumModal];
        var modalCanvas = document.getElementById("BpGraphModal");
        var ctxModal = document.getElementById('BpGraphModal').getContext('2d');
        var chartDataModal = {
            labels: ["0", "10", "20", "30", "40", "50", "60"],
            datasets: [{
                    label: `Post Blood Pressure Data(Post Lower BP:${postLowerBpNumModal},Post Upper BP:${postUpperBpNumModal})`,
                    data: chartDataPostModal,
                    yAxisID: 'y-axis-1',
                    borderColor: 'red',
                    borderWidth: 2,
                    fill: false,
                },
                {
                    label: `Pre Blood Pressure Data(Pre Lower BP:${preLowerBpNumModal},Pre Upper BP:${preUpperBpNumModal})`,
                    data: chartDataPreModal,
                    yAxisID: 'y-axis-1',
                    borderColor: 'blue',
                    borderWidth: 2,
                    fill: false,
                },
            ],
        };
        var chartOptionsModal = {
            scales: {
                x: {
                    type: 'linear',
                    position: 'bottom',
                    title: {
                        display: true,
                        text: 'Diastolic',
                    },
                },
                y: {
                    type: 'linear',
                    position: 'left',
                    title: {
                        display: true,
                        text: 'Systolic Post Pressure Data(mm/hg)',
                    },
                    grid: {
                        drawOnChartArea: false,
                    },
                },
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                },
            },
        };
        var modalMultiAxisLineChart = new Chart(ctxModal, {
            type: 'line',
            data: chartDataModal,
            options: chartOptionsModal,
        });
    });
</script>
<script>
    var preLowerBp = "{{ $bpdata['pre_lower_bp'] }}";
    var preLowerBpNum = Number(preLowerBp);
    var preUpperBp = "{{ $bpdata['pre_upper_bp'] }}";
    var preUpperBpNum = Number(preUpperBp);
    var postLowerBp = "{{ $bpdata['post_lower_bp'] }}"
    var postLowerBpNum = Number(postLowerBp);
    var postUpperBp = "{{ $bpdata['post_upper_bp'] }}"
    var postUpperBpNum = Number(postUpperBp);
    var chartDataPre = [preLowerBpNum, preUpperBpNum];
    var chartDataPost = [postLowerBpNum, postUpperBpNum];
    var speedCanvas = document.getElementById("bpCanvasChart");
    var ctx = document.getElementById('bpCanvasChart').getContext('2d');
    var chartData = {
        labels: ["0", "10", "20", "30", "40", "50", "60"],
        datasets: [{
                label: `Post Blood Pressure Data(Post Lower BP:${postLowerBpNum},Post Upper BP:${postUpperBpNum})`,
                data: chartDataPost,
                yAxisID: 'y-axis-1',
                borderColor: 'red',
                borderWidth: 2,
                fill: false,
            },
            {
                label: `Pre Blood Pressure Data(Pre Lower BP:${preLowerBpNum},Pre Upper BP:${preUpperBpNum})`,
                data: chartDataPre,
                yAxisID: 'y-axis-1',
                borderColor: 'blue',
                borderWidth: 2,
                fill: false,
            },
        ],
    };

    var chartOptions = {
        scales: {
            x: {
                type: 'linear',
                position: 'bottom',
                title: {
                    display: true,
                    text: 'Diastolic',
                },
            },
            y: {
                type: 'linear',
                position: 'left',
                title: {
                    display: true,
                    text: 'Systolic Post Pressure Data(mm/hg)',
                },
                grid: {
                    drawOnChartArea: false,
                },
            },
            // y1: {
            //     type: 'linear',
            //     position: 'right',
            //     title: {
            //         display: true,
            //         text: 'Systolic Pre Pressure Data (mm/hg)',
            //     },
            //     grid: {
            //         drawOnChartArea: false,
            //     },
            // },

        },
        plugins: {
            legend: {
                display: true,
                position: 'top',
            },
        },
    };
    var multiAxisLineChart = new Chart(ctx, {
        type: 'line',
        data: chartData,
        options: chartOptions,
    });
</script>
<script>
    $("#bpcheckboxunfit").click(function() {
        if ($("#bpcheckboxunfit").is(":checked ")) {
            $("#bp_test_remark_result").show();
            $("#bpcheckboxfit").prop("checked", false);
        } else {
            $("#bp_test_remark_result").hide();
            $("#checkboxfit").prop("checked", true);
        }
    });
    $("#overallfit").click(function() {
        $("#overallunfit").prop("checked", false);
        $("#temporaeilyunfit").prop("checked", false);
    });
    $("#overallunfit").click(function() {
        $("#overallfit").prop("checked", false);
        $("#temporaeilyunfit").prop("checked", false);
    });
    $("#temporaeilyunfit").click(function() {
        $("#overallfit").prop("checked", false);
        $("#overallunfit").prop("checked", false);
    });
    $("#bpcheckboxfit").click(function() {
        $("#bpcheckboxunfit").prop("checked", false);
        $("#bp_test_remark_result").hide();

    })
    $("#eyecheckupcheckboxunfit").click(function() {
        if ($("#eyecheckupcheckboxunfit").is(":checked ")) {
            $("#eyecheckup_test_remark_result").show();
            $("#eyecheckupcheckboxfit").prop("checked", false);
        } else {
            $("#eyecheckup_test_remark_result").hide();
            $("#eyecheckupcheckboxfit").prop("checked", true);
        }
    });
    $("#eyecheckupcheckboxfit").click(function() {
        $("#eyecheckupcheckboxunfit").prop("checked", false);
        $("#eyecheckup_test_remark_result").hide();
    })
    $("#eyedistancecheckboxunfit").click(function() {
        if ($("#eyedistancecheckboxunfit").is(":checked ")) {
            $("#eyedistancecheckboxfit").prop("checked", false);
        } else {
            $("#eyedistancecheckboxfit").prop("checked", true);
        }
    });
    $("#eyedistancecheckboxfit").click(function() {
        $("#eyedistancecheckboxunfit").prop("checked", false);
    })
    $("#rtcheckboxunfit").click(function() {
        if ($("#rtcheckboxunfit").is(":checked ")) {
            $("#rt_test_remark_result").show();
            $("#rtcheckboxfit").prop("checked", false);
        } else {
            $("#rt_test_remark_result").hide();
            $("#rtcheckboxfit").prop("checked", true);
        }
    });
    $("#rtcheckboxfit").click(function() {
        $("#rtcheckboxunfit").prop("checked", false);
        $("#rt_test_remark_result").hide();
    })
    $("#hearingtestcheckboxunfit").click(function() {
        if ($("#hearingtestcheckboxunfit").is(":checked ")) {
            $("#hearing_test_remark_result").show();
            $("#hearingtestcheckboxfit").prop("checked", false);
        } else {
            $("#hearing_test_remark_result").hide();
            $("#hearingtestcheckboxfit").prop("checked", true);
        }
    });
    $("#hearingtestcheckboxfit").click(function() {
        $("#hearingtestcheckboxunfit").prop("checked", false);
        $("#hearing_test_remark_result").hide();
    })
    $("#flatfootcheckboxunfit").click(function() {
        if ($("#flatfootcheckboxunfit").is(":checked ")) {
            $("#flatfoot_test_remark_result").show();
            $("#flatfootcheckboxfit").prop("checked", false);
        } else {
            $("#flatfoot_test_remark_result").hide();
            $("#flatfootcheckboxfit").prop("checked", true);
        }
    });
    $("#flatfootcheckboxfit").click(function() {
        $("#flatfootcheckboxunfit").prop("checked", false);
        $("#flatfoot_test_remark_result").hide();
    });
    $("#bppvcheckboxunfit").click(function() {
        if ($("#bppvcheckboxunfit").is(":checked ")) {
            $("#bppv_test_remark_result").show();
            $("#bppvcheckboxfit").prop("checked", false);
        } else {
            $("#bppv_test_remark_result").hide();
            $("#bppvcheckboxfit").prop("checked", true);
        }

    });

    $("#bppvcheckboxfit").click(function() {
        $("#bppvcheckboxunfit").prop("checked", false);
        $("#bppv_test_remark_result").hide();

    });



    $("#fukudacheckboxunfit").click(function() {

        if ($("#fukudacheckboxunfit").is(":checked ")) {
            $("#fukuda_test_remark_result").show();
            $("#fukudacheckboxfit").prop("checked", false);

        } else {
            $("#fukuda_test_remark_result").hide();
            $("#fukudacheckboxfit").prop("checked", true);
        }
    });
    $("#fukudacheckboxfit").click(function() {
        $("#fukudacheckboxunfit").prop("checked", false);
        $("#fukuda_test_remark_result").hide();
    })
</script>
<script>
    var leftEarValues = "{{ $hrdata['left_ear_fixed'] }}".split(',');
    var rightEarValues = "{{ $hrdata['right_ear_fixed'] }}".split(',');
    var leftEarValue1 = leftEarValues[0];
    var leftEarValue2 = leftEarValues[1];
    var leftEarValue3 = leftEarValues[2];
    var leftEarValue4 = leftEarValues[3];
    var leftEarValue5 = leftEarValues[4];
    var leftEarValue6 = leftEarValues[5];
    var leftEarValue7 = leftEarValues[6];
    // Repeat the above for the number of elements you have in your array

    var rightEarValue1 = rightEarValues[0];
    var rightEarValue2 = rightEarValues[1];
    var rightEarValue3 = rightEarValues[2];
    var rightEarValue4 = rightEarValues[3];
    var rightEarValue5 = rightEarValues[4];
    var rightEarValue6 = rightEarValues[5];
    var rightEarValue7 = rightEarValues[6];

    function checkFirstColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#firstcolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'blue'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function checkSecondColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#secondcolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'blue'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function checkThirdColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#thirdcolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'blue'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function checkFourthColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#fourthcolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'blue'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function checkFifthColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#fifthcolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'blue'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function checksixColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#sixcolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'blue'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function checksevenColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#sevencolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'blue'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function rightcheckFirstColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#firstcolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'red'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function rightcheckSecondColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#secondcolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'red'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function rightcheckThirdColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#thirdcolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'red'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function rightcheckFourthColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#fourthcolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'red'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function rightcheckFifthColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#fifthcolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'red'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function rightchecksixColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#sixcolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'red'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }

    function rightchecksevenColumnRadioButtons(value) {
        var firstColumnRadioButtons = document.querySelectorAll('#sevencolumngraph input[type="radio"]');
        firstColumnRadioButtons.forEach(function(radioButton) {
            if (radioButton.value === value) {
                radioButton.checked = true; // Check the radio button if its value matches leftEarValue1
                radioButton.style.backgroundColor = 'red'; // Set background color to blue
            } else {
                radioButton.disabled =
                    true; // Disable the radio button if its value doesn't match leftEarValue1
            }
        });
    }
    checkFirstColumnRadioButtons(leftEarValue1);
    checkSecondColumnRadioButtons(leftEarValue2);
    checkThirdColumnRadioButtons(leftEarValue3);
    checkFourthColumnRadioButtons(leftEarValue4);
    checkFifthColumnRadioButtons(leftEarValue5);
    checksixColumnRadioButtons(leftEarValue6);
    checksevenColumnRadioButtons(leftEarValue7);
    rightcheckFirstColumnRadioButtons(rightEarValue1);
    rightcheckSecondColumnRadioButtons(rightEarValue2);
    rightcheckThirdColumnRadioButtons(rightEarValue3);
    rightcheckFourthColumnRadioButtons(rightEarValue4);
    rightcheckFifthColumnRadioButtons(rightEarValue5);
    rightchecksixColumnRadioButtons(rightEarValue6);
    rightchecksevenColumnRadioButtons(rightEarValue7);
</script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/html2canvasmin.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        var sourceElement = $("#radiobuttongraph");
        if (!sourceElement.length) {
            console.error("Source radio button graph element not found!");
            return;
        }
        var clonedElement = sourceElement.clone(true);
        var targetElement = $("#hearingdata");
        if (!targetElement.length) {
            console.error("Target element (div with ID 'hearingdata') not found!");
            return;
        }
        targetElement.append(clonedElement);
    });
</script>
<script>
    function saveResult(button) {
        var id = button.id;
        var button = `${id}button`;
        if ($(`#${id}checkboxfit`).is(":checked ")) {
            var testResultStatus = $(`#${id}checkboxfit`).val();
            var unfitRemark = $(`#${id}unfitRemark`).val();
        } else {
            var testResultStatus = $(`#${id}checkboxunfit`).val();
            var unfitRemark = $(`#${id}unfitRemark`).val();
        }
        var consumerid = $("#consumerid").val();
        swal.fire({
            title: 'Are you sure?',
            text: "It will permanently submit data of consumer !",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }).then(function(result) {
            if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'post',
                    url: "{{ url('consumer-test-result') }}",
                    data: {
                        testResultStatus: testResultStatus,
                        unfitRemark: unfitRemark,
                        testfeatures: id,
                        consumerid: consumerid,
                    },
                    success: (data) => {
                        $(`#${button}`).css('background-color', '#4CC790');
                        $('#doctorcount').val(Number(data));
                        Swal.fire("Saved!", "", "success");
                    },
                    error: (data) => {}
                });
            } else if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
            }
        })
    }
    function signatureOFDoctor(button) {
        var id = button.id;
        var button = `${id}button`;
        if ($(`#overallfit`).is(":checked")) {
            var doctorFinalResult = $(`#overallfit`).val();
        }
        if ($(`#overallunfit`).is(":checked")) {
            var doctorFinalResult = $(`#overallunfit`).val();
        }
        if ($(`#temporaeilyunfit`).is(":checked")) {
            var doctorFinalResult = $(`#temporaeilyunfit`).val();
        }
        var consumerId = $('#consumerId').val();
        var doctorId = $("#doctorId").val();
        var ResultCount = 8;
        swal.fire({
            title: 'Are you sure?',
            text: "It will permanently submit data of consumer !",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }).then(function(result) {
            // swal(
            //   'Submit!',
            //   'Your data has been submitted.',
            //   'success'
            // );
            if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'post',
                    url: "{{ url('doctor-final-test-result') }}",
                    data: {
                        doctorId: doctorId,
                        doctorFinalResult: doctorFinalResult,
                        consumerId: consumerId,
                        ResultCount: ResultCount,
                    },
                    success: (data) => {
                        $(`#${button}`).css('background-color', '#4CC790');
                        $('#qrcolum').html(data);
                        Swal.fire("Saved!", "", "success");
                    },
                    error: (data) => {
                        console.log(data);
                        let ResultCountErrorMessage = data.responseJSON.message['ResultCount'][0];
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: `${ResultCountErrorMessage}`,
                        });
                    }
                });
            } else if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
            }
        })
    }

    function generateHearingtestPDF() {
        var certificationnumber = document.getElementById('certificationnumber').value;
        var unfitCheckbox = document.getElementById('hearingtestcheckboxunfit');
        var unfitRemark = document.getElementById('hearingunfitRemark').value;
        var fitCheckbox = document.getElementById('hearingtestcheckboxfit');
        var isFitChecked = fitCheckbox.checked;
        var isUnfitChecked = unfitCheckbox.checked;
        var printContent =
            '<style>.checked-blue {color: blue;} .checked-red {color: red;} .unchecked {display: none;} .container {display: flex; flex-direction: column;}</style>';
        printContent += '<h1>' + certificationnumber + '</h1>';
        printContent += '<div class="container">';
        var radioButtons = document.querySelectorAll('#radiobuttongraph input[type="radio"]');
        radioButtons.forEach(function(radioButton) {
            if (radioButton.checked) {
                var colorClass = radioButton.classList.contains('blue-radio') ? 'checked-blue' : 'checked-red';
                var colorClass = radioButton.style.backgroundColor === 'blue' ? 'checked-blue' : 'checked-red';
                printContent += '<div class="form-check form-check-inline mx-4">';
                printContent += '<input class="form-check-input" type="radio" name="' + radioButton.name +
                    '" id="' + radioButton.id + '" value="' + radioButton.value + '" checked>';
                printContent += '<label class="form-check-label ' + colorClass + '" for="' + radioButton.id +
                    '">' + getLabelText(radioButton.id) + '</label>';
                printContent += '</div>';
            }
        });
        if (isFitChecked) {
            printContent += '<p><strong>Fit:</strong> <span class="checked-blue">☑</span></p>';
        } else {
            printContent += '<p><strong>Fit:</strong> <span class="unchecked">☐</span></p>';
        }

        if (isUnfitChecked) {
            printContent += '<p><strong>Unfit:</strong> <span class="checked-red">☑</span></p>';
            printContent += '<p><strong>Unfit Remark:</strong> ' + unfitRemark + '</p>';
        } else {
            printContent += '<p><strong>Unfit:</strong> <span class="unchecked">☐</span></p>';
        }
        printContent += '</div>';
        var WinPrint = window.open('', '', 'left=0,top=0,width=1200,height=1000,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write('<html><head><title>HearingTest ' + certificationnumber + '</title></head><body>');
        WinPrint.document.write(printContent);
        WinPrint.document.write('</body></html>');
        WinPrint.document.close();
        setTimeout(function() {
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }, 1000);
    }

    function getLabelText(radioButtonId) {
        var label = document.querySelector('label[for="' + radioButtonId + '"]');
        return label ? label.innerText : '';
    }

    function generatePDF() {
        var canvas = document.getElementById('bpCanvasChart');
        var dataUrl = canvas.toDataURL('image/png');
        var certificationnumber = document.getElementById('certificationnumber').value;
        var fitCheckbox = document.getElementById('bpcheckboxfit'); // Update with your fit checkbox ID
        var unfitCheckbox = document.getElementById('bpcheckboxunfit'); // Update with your unfit checkbox ID
        var unfitRemark = document.getElementById('bpunfitRemark').value; // Update with your unfit remark ID
        var isFitChecked = fitCheckbox.checked;
        var isUnfitChecked = unfitCheckbox.checked;
        var printContent =
            '<style>.checked {color: blue;} .unchecked {display: none;} .container {display: flex; flex-direction: column;}</style>';
        printContent += '<h1>' + certificationnumber + '</h1>';
        printContent += '<div class="container">';
        printContent += '<img src="' + dataUrl + '" style="width:100%;">';

        if (isFitChecked) {
            printContent += '<p><strong>Fit:</strong> <span class="checked">☑</span></p>';
        } else {
            printContent += '<p><strong>Fit:</strong> <span class="unchecked">☑</span></p>';
        }

        if (isUnfitChecked) {
            printContent += '<p><strong>Unfit:</strong> <span class="checked">☑</span></p>';
            printContent += '<p><strong>Unfit Remark:</strong> ' + unfitRemark + '</p>';
        } else {
            printContent += '<p><strong>Unfit:</strong> <span class="unchecked">☑</span></p>';
        }
        printContent += '</div>';
        var WinPrint = window.open('', '', 'left=0,top=0,width=1200,height=1000,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write('<html><head><title>BP ' + certificationnumber + '</title></head><body>');
        WinPrint.document.write(printContent);
        WinPrint.document.write('</body></html>');
        WinPrint.document.close();
        setTimeout(function() {
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }, 1000);
    }

    function eyegeneratePDF() {
        var body = document.getElementById('page-top').innerHTML;
        var eyegraph = document.getElementById('eyegraph').innerHTML;
        var certificationnumber = document.getElementById('certificationnumber').value;
        var style = `<style>
                        .flex-wrapper {
                            display: flex;
                            flex-flow: row nowrap;
                        }
                        .single-chart {
                            width: 100%;
                            justify-content: space-around;
                        }
                        .circular-chart {
                            display: block;
                            margin: 10px auto;
                            max-width: 80%;
                            max-height: 250px;
                        }
                        .circle-bg {
                            fill: none;
                            stroke: #eee;
                            stroke-width: 3.8;
                        }
                        .circle {
                            fill: none;
                            stroke-width: 2.8;
                            stroke-linecap: round;
                            animation: progress 0s ease-out forwards;
                        }
                        @keyframes progress {
                            0% {
                                stroke-dasharray: 0 100;
                            }
                        }
                        .circular-chart.orange .circle {
                            stroke: #ff9f00;
                        }
                        .circular-chart.green .circle {
                            stroke: #4CC790;
                        }
                        .circular-chart.blue .circle {
                            stroke: #3c9ee5;
                        }
                        .circular-chart.red .circle {
                            stroke: #e5533c;
                        }
                        .circular-chart.pink .circle {
                            stroke: #e53ca4;
                        }
                        .circular-chart.yellow .circle {
                            stroke: #e5dd3c;
                        }
                        .circular-chart.skyblue .circle {
                            stroke: #3c7ae5;
                        }
                        .percentage {
                            fill: #666;
                            font-family: sans-serif;
                            font-size: 0.5em;
                            text-anchor: middle;
                        }
                    </style>`
        var eyePrintHtml = style + eyegraph;
        var WinPrint = window.open('', '', 'left=0,top=0,width=1200,height=1000,toolbar=0,scrollbars=0,status=0');
        var
            boostrapCDN =
            '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">'
        WinPrint.document.write(boostrapCDN)
        WinPrint.document.write('<title>eyechekup</title>')
        WinPrint.document.write(eyePrintHtml);
        WinPrint.document.close();
        setTimeout(function() {
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }, 1000);
    }

    function eyedistancepdf() {
        var body = document.getElementById('page-top').innerHTML;
        var eyedistancegraph = document.getElementById('eyedistancegraph').innerHTML;
        var certificationnumber = document.getElementById('certificationnumber').value;
        // var eyeditancefitCheckbox = document.getElementById('eyedistanceCheckboxfit'); 
        // var eyeditanceunfitCheckbox = document.getElementById('eyedistanceCheckboxunfit'); 
        // var eyeditanceunfitRemark = document.getElementById('eyedistanceunfitremark').value;
        // var isFitChecked = eyeditancefitCheckbox.checked;
        // var isUnfitChecked = eyeditanceunfitCheckbox.checked;
        var style = `<style>
            .flex-wrapper {
                            display: flex;
                            flex-flow: row nowrap;
                        }
                        .single-chart {
                            width: 100%;
                            justify-content: space-around;
                        }
                        .circular-chart {
                            display: block;
                            margin: 10px auto;
                            max-width: 80%;
                            max-height: 250px;
                        }
                        .circle-bg {
                            fill: none;
                            stroke: #eee;
                            stroke-width: 3.8;
                        }
                        .circle {
                            fill: none;
                            stroke-width: 2.8;
                            stroke-linecap: round;
                            animation: progress 0s ease-out forwards;
                        }
                        @keyframes progress {
                            0% {
                                stroke-dasharray: 0 100;
                            }
                        }
                        .circular-chart.orange .circle {
                            stroke: #ff9f00;
                        }
                        .circular-chart.green .circle {
                            stroke: #4CC790;
                        }
                        .circular-chart.blue .circle {
                            stroke: #3c9ee5;
                        }
                        .circular-chart.red .circle {
                            stroke: #e5533c;
                        }
                        .circular-chart.pink .circle {
                            stroke: #e53ca4;
                        }
                        .circular-chart.yellow .circle {
                            stroke: #e5dd3c;
                        }
                        .circular-chart.skyblue .circle {
                            stroke: #3c7ae5;
                        }
                        .percentage {
                            fill: #666;
                            font-family: sans-serif;
                            font-size: 0.5em;
                            text-anchor: middle;
                        }
                    </style>`
        var eyedistanceHTML = style + eyedistancegraph;
        var printContent = '<h1>' + certificationnumber + '</h1>';
        // if (isFitChecked) {
        //     printContent += '<p><strong>Fit:</strong> <span class="checked">☑</span></p>';
        // } else {
        //     printContent += '<p><strong>Fit:</strong> <span class="unchecked">☑</span></p>';
        // }
        // if (isUnfitChecked) {
        //     printContent += '<p><strong>Unfit:</strong> <span class="checked">☑</span></p>';
        //     // printContent += '<p><strong>Unfit Remark:</strong> ' + eyeditanceunfitRemark + '</p>';
        // } else {
        //     printContent += '<p><strong>Unfit:</strong> <span class="unchecked">☑</span></p>';
        // }
        var WinPrint = window.open('', '', 'left=0,top=0,width=1200,height=1000,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write('<html><head><title>EyeDistance ' + certificationnumber + '</title></head><body>');
        WinPrint.document.write(printContent);
        WinPrint.document.write(eyedistanceHTML);
        WinPrint.document.write('</body></html>');
        WinPrint.document.close();
        setTimeout(function() {
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }, 1000);
    }

    function verticoPDF() {
        var prtContent = document.getElementById("verticopdfreport");
        var bpcanvas = document.getElementById('BpGraphModal');
        var bpdataUrl = bpcanvas.toDataURL('image/png');
        var style = `<style>
                            .flex-wrapper {
                                display: flex;
                                flex-flow: row nowrap;
                            }
                            .single-chart {
                                width: 100%;
                                justify-content: space-around;
                            }
                            .circular-chart {
                                display: block;
                                margin: 10px auto;
                                max-width: 80%;
                                max-height: 250px;
                            }
                            .circle-bg {
                                fill: none;
                                stroke: #eee;
                                stroke-width: 3.8;
                            }
                            .circle {
                                fill: none;
                                stroke-width: 2.8;
                                stroke-linecap: round;
                                animation: progress 0s ease-out forwards;
                            }
                            @keyframes progress {
                                0% {
                                    stroke-dasharray: 0 100;
                                }
                            }
                            .circular-chart.orange .circle {
                                stroke: #ff9f00;
                            }
                            .circular-chart.green .circle {
                                stroke: #4CC790;
                            }
                            .circular-chart.blue .circle {
                                stroke: #3c9ee5;
                            }
                            .circular-chart.red .circle {
                                stroke: #e5533c;
                            }
                            .circular-chart.pink .circle {
                                stroke: #e53ca4;
                            }
                            .circular-chart.yellow .circle {
                                stroke: #e5dd3c;
                            }
                            .circular-chart.skyblue .circle {
                                stroke: #3c7ae5;
                            }
                            .percentage {
                                fill: #666;
                                font-family: sans-serif;
                                font-size: 0.5em;
                                text-anchor: middle;
                            }
                        </style>`;
        var Total = style + prtContent.innerHTML;
        Total += '<img src="' + bpdataUrl + '" style="width:100%;">';
        var WinPrint = window.open('', '', 'left=0,top=0,width=1200,height=1000,toolbar=0,scrollbars=0,status=0');
        var bootstrapCDN =
            '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
        WinPrint.document.write(bootstrapCDN);
        WinPrint.document.write(Total);
        WinPrint.document.close();
        setTimeout(function() {
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }, 1000);
    }

    function docotorFinalReportPDF() {
        var prtContent = document.getElementById("doctorreportfinal");
        var WinPrint = window.open('', '', 'left=0,top=0,width=1200,height=1000,toolbar=0,scrollbars=0,status=0');
        var boostrapCDN =
            '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">'
        WinPrint.document.write(boostrapCDN);
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        setTimeout(function() {
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }, 1000);
    }

    function consumerfinalPDf() {
        var prtContent = document.getElementById("consumer_pdf");
        var WinPrint = window.open('', '', 'left=0,top=0,width=1200,height=1000,toolbar=0,scrollbars=0,status=0');
        var
            boostrapCDN =
            '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">'
        WinPrint.document.write(boostrapCDN)
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        setTimeout(function() {
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }, 1000);
        // WinPrint.focus();
        // WinPrint.print();
        // WinPrint.close();
        // var body = document.getElementById('page-top').innerHTML;
        // var consumerReport = document.getElementById('consumer_pdf').innerHTML;
        // var certificationnumber = document.getElementById('certificationnumber').value;
        // document.getElementById('page-top').innerHTML = consumerReport;
        // document.getElementById('site-title').innerHTML = 'consumerreport' + certificationnumber
        // window.print();
        // document.getElementById('page-top').innerHTML = body;
        // document.getElementById('site-title').innerHTML = "Mediclear the Eye Test";
        // location.reload(); class="accordion-collapse collapse"
    }

    function doctorFinalResultSubmit() {
        let val = $('#doctorcount').val();
        if (Number(val) == 8) {
            if ($('#collapseten').attr('class') == 'accordion-collapse collapse') {
                $('#doctorbutton').attr('data-bs-target', '#collapseten');
                $('#collapseten').attr('class', 'accordion-collapse collapse show');
            } else {
                $('#doctorbutton').attr('data-bs-target', '#collapseten');
                $('#collapseten').attr('class', 'accordion-collapse collapse');
            }
        } else {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Please submit all remaing test results of consumer!",
            });
        }
    }
</script>
@include('include.footer')
