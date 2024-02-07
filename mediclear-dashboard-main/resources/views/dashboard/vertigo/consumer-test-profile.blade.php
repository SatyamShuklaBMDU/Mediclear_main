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
    @media (max-width: 992px) {
        .container1 ul li {
            width: 35%;
            height: 150px;
            line-height: 150px;
        }
    }

    /*  */
</style>
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
    @elseif ($feature == 'hearing')
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
<div class="accordion px-4 mb-2" id="accordionExample">
    <h1 class="text-start report-examina mt-3 mb-3 text-success"> Report Examination Sheet </h1>
    <div class="accordion-item">
        <h2 class="accordion-header " id="headingThree">
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
                                            @if ($data->gender == 'male') checked @disabled(true) @disabled(true) @endif
                                            value="male" />

                                        <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="female"
                                            @if ($data->gender == 'female') checked @disabled(true) @disabled(true) @endif />
                                        <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="others"
                                            @if ($data->gender == 'others') checked @disabled(true) @disabled(true) @endif />
                                        <label class="form-check-label" for="inlineCheckbox3">Others
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- question Ans field start -->
                            <div class="questions">
                                <h4 class="text-success my-3">
                                    To be filled by the candidate before Medical Examination :
                                </h4>
                                <p>
                                    A. When you are "dizzy" do you experience any of the following
                                    symptoms ? (check yes or no)
                                </p>
                                <div class="row choice">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6 d-flex">
                                        <div class="text-success"><strong>Yes</strong> </div>
                                        <div class="ml-4 text-danger"><strong>No</strong></div>
                                    </div>
                                </div>
                                <!-- question start  -->
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p> 1. Light-headness or swimmimg sensation in the head?</p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->light_hedness_or_swim_sensation_in_the_head == 'yes') checked @disabled(true) @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                @if ($data->light_hedness_or_swim_sensation_in_the_head == 'no') checked @disabled(true) @disabled(true) @endif
                                                value="option1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>2. Blacking out or loss of conciousness?</p>

                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->blacking_out_or_loss_of_consciousness == 'yes') checked @disabled(true) @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->blacking_out_or_loss_of_consciousness == 'no') checked @disabled(true) @disabled(true) @endif />
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
                                                @if ($data->object_spinning_or_turning_around_you == 'yes') checked @disabled(true) @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->object_spinning_or_turning_around_you == 'no') checked @disabled(true) @disabled(true) @endif />
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>4. Nausea or vomiting?
                                        </p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->nausea_or_vomiting == 'yes') checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->nausea_or_vomiting == 'no') checked  @disabled(true) @endif />
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
                                                @if ($data->tingling_in_your_fingers_toes_around_your_mouth == 'yes') checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->tingling_in_your_fingers_toes_around_your_mouth == 'no') checked  @disabled(true) @endif />
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>
                                            6. Does changes of position make you dizzy?
                                        </p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->does_changes_of_position_make_you_dizzy == 'yes') checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->does_changes_of_position_make_you_dizzy == 'no') checked  @disabled(true) @endif />
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <p>
                                            7. When you are dizzy must support yourself when standing?
                                        </p>
                                    </div>
                                    <div class="col-4 d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->when_you_are_dizzy_must_support_yourself_when_standing == 'yes') checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if ($data->when_you_are_dizzy_must_support_yourself_when_standing == 'no') checked @disabled(true) @endif />
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
                                $postMedicalHistory = json_decode(json_decode($data->post_mediacal_history_disease, true)); @endphp
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
                                                value="option1"
                                                @if (in_array(1, $postMedicalHistory)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2"
                                                @if (in_array(2, $postMedicalHistory)) checked  @disabled(true) @endif />
                                            <label class="form-check-label" for="inlineCheckbox2">Hypertension</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Kidney
                                                disease</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(3, $postMedicalHistory)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Thyroid
                                                disease</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(4, $postMedicalHistory)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Migrain
                                                headaches</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(5, $postMedicalHistory)) checked  @disabled(true) @endif />
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
                                    $defficulting_in_hearing = json_decode(json_decode($data->defficulting_in_hearing, true)); @endphp
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
                                                value="option1"
                                                @if (in_array(1, $defficulting_in_hearing)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">

                                            <label class="form-check-label" for="inlineCheckbox2">No</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2"
                                                @if (in_array(2, $defficulting_in_hearing)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Left ears</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(3, $defficulting_in_hearing)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Both ears</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(4, $defficulting_in_hearing)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Right ear</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(5, $defficulting_in_hearing)) checked @disabled(true)   @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">associated with
                                                attack</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(6, $defficulting_in_hearing)) checked  @disabled(true) @endif />
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
                                                value="option1"
                                                @if (in_array(1, $noise_in_ears)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox2">No</label>

                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2"
                                                @if (in_array(2, $noise_in_ears)) checked  @disabled(true) @endif />

                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Left ear</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(3, $noise_in_ears)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Both ears</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(4, $noise_in_ears)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Right ear</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(5, $noise_in_ears)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">associated with
                                                attack</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(6, $noise_in_ears)) checked  @disabled(true) @endif />
                                        </div>
                                    </div>
                                    @if (!isset($data->fullness_or_stuffiness_in_your_ears))
                                        @php $fullness_or_stuffiness_in_your_ears=[]; @endphp
                                    @endif

                                    @if (gettype($data->fullness_or_stuffiness_in_your_ears) == 'array')
                                        @php
                                        $fullness_or_stuffiness_in_your_ears = $data->fullness_or_stuffiness_in_your_ears; @endphp
                                    @endif

                                    @if (gettype($data->fullness_or_stuffiness_in_your_ears) == 'string')
                                        @php
                                        $fullness_or_stuffiness_in_your_ears = json_decode($data->fullness_or_stuffiness_in_your_ears, true); @endphp
                                    @endif

                                    @if (gettype(json_decode($data->fullness_or_stuffiness_in_your_ears, true)) == 'string')
                                        @php
                                        $fullness_or_stuffiness_in_your_ears = json_decode(json_decode($data->fullness_or_stuffiness_in_your_ears, true)); @endphp
                                    @endif
                                    <p>c. Fullness or stuffiness in your ears ?</p>
                                    <div class="objective-option">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1"
                                                @if (in_array(1, $fullness_or_stuffiness_in_your_ears)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox2">No</label>

                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2"
                                                @if (in_array(2, $fullness_or_stuffiness_in_your_ears)) checked  @disabled(true) @endif />

                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Left ear</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(3, $fullness_or_stuffiness_in_your_ears)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Both ears</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(4, $fullness_or_stuffiness_in_your_ears)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">Right ear</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(5, $fullness_or_stuffiness_in_your_ears)) checked  @disabled(true) @endif />
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">associated with
                                                attack</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3"
                                                @if (in_array(6, $fullness_or_stuffiness_in_your_ears)) checked  @disabled(true) @endif />
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
                                            value="option1"
                                            @if (in_array(1, $complaints)) checked  @disabled(true) @endif />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">2. Vertigo</div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1"
                                            @if (in_array(2, $complaints)) checked  @disabled(true) @endif />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">3. Nausea</div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1"
                                            @if (in_array(3, $complaints)) checked  @disabled(true) @endif />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">4. Seizure Disorder (Epilespy)</div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1"
                                            @if (in_array(4, $complaints)) checked  @disabled(true) @endif />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">5. Acrophobia</div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1"
                                            @if (in_array(5, $complaints)) checked @disabled(true) @endif />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">6. Assthama / COPD</div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1"
                                            @if (in_array(6, $complaints)) checked @disabled(true) @endif />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-6">
                                        7. tingling in your fingers, toes or around your mouth?
                                    </div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1"
                                            @if (in_array(7, $complaints)) checked @disabled(true) @endif />
                                    </div>
                                </div>
                                <!-- buttons -->

                                <div class="col-md-6 text-center">
                                    <label for="file" class="file text-center"><span class="image text-dark"><img
                                                src="{{ url('/sign/' . $data->consumer_sign_image_name) }}"
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
                        <!-- form close -->
                    </div>
                    <!-- containe close -->
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
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-dark" id="bp" onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            <button class="btn btn-warning" id="bp_test_again">Please Test Again</button>
                            &nbsp;&nbsp;
                            <button onclick="generatePDF()"><i class="fa fa-print text-success"
                                    style="font-size:36px"></i></button>
                        </div>
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
                                            $percentage = 18;
                                            $color = 'pink';
                                        } elseif ($count == 2) {
                                            $percentage = 35;
                                            $color = 'orange';
                                        } elseif ($count == 3) {
                                            $percentage = 50;
                                            $color = 'yellow';
                                        } elseif ($count == 4) {
                                            $percentage = 68;
                                            $color = 'skyblue';
                                        } elseif ($count == 5) {
                                            $percentage = 75;
                                            $color = 'blue';
                                        } elseif ($count == 6) {
                                            $percentage = 100;
                                            $color = 'green';
                                        } elseif ($count == 0) {
                                            $percentage = 0;
                                            $color = 'red';
                                        }
                                    @endphp
                                    <div class="single-chart" id="eyeblindness">
                                        <svg viewBox="0 0 36 36" class="circular-chart {{ $color }}">
                                            <path class="circle-bg"
                                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                            <path class="circle" stroke-dasharray="{{ $percentage }}, 100"
                                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
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
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" id="eyecheckup"
                                onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            <button class="btn btn-danger" id="eyecheckup_test_again">Please test again</button>
                            &nbsp;&nbsp;
                            <button onclick="eyegeneratePDF()" class="btn btn-danger  btn-sm"><i class="fa fa-print"
                                    style="font-size:36px"></i></button>
                        </div>
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
                aria-controls="collapsesix" id="eyecheckupbutton">
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
                                            $percentage = 18;
                                            $color = 'pink';
                                        } elseif ($count == 2) {
                                            $percentage = 35;
                                            $color = 'orange';
                                        } elseif ($count == 3) {
                                            $percentage = 50;
                                            $color = 'yellow';
                                        } elseif ($count == 4) {
                                            $percentage = 68;
                                            $color = 'skyblue';
                                        } elseif ($count == 5) {
                                            $percentage = 75;
                                            $color = 'blue';
                                        } elseif ($count == 6) {
                                            $percentage = 100;
                                            $color = 'green';
                                        } elseif ($count == 0) {
                                            $percentage = 0;
                                            $color = 'red';
                                        }
                                    @endphp
                                    <div class="single-chart" id="eyedistance">
                                        <svg viewBox="0 0 36 36" class="circular-chart {{ $color }}">
                                            <path class="circle-bg"
                                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                            <path class="circle" stroke-dasharray="{{ $percentage }}, 100"
                                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
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
                            <div class="form-group" id="eyedistance_test_remark_result" style="display:none">
                                <label for="exampleFormControlTextarea1">Unfit Remark</label>
                                <textarea class="form-control" id="eyedistanceunfitRemark" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" id="eyedistance"
                                onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            <button class="btn btn-danger" id="eyedistance_test_again">Please test again</button>
                            &nbsp;&nbsp;
                            <button onclick="eyedistancepdf()" class="btn btn-danger  btn-sm"><i class="fa fa-print"
                                    style="font-size:36px"></i></button>
                        </div>
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
                aria-controls="collapseHearing" id="hearingbutton">
                Check For Hearing Test
            </button>
        </h2>
        <div id="collapseHearing" class="accordion-collapse collapse" aria-labelledby="headingHearing"
            data-bs-parent="#HearingContainer">
            <div class="accordion-body">
                <!-- Hearing Test content -->
                <div class="container" id="hearingTestContent">
                    <input type="hidden" id="certificationnumber" value="{{ $data->certification_number }}" />
                    <input type="hidden" id="consumerid" value="{{ request()->get('id') }}" />
                    <p class="text-success pt-3 pb-3"><strong> Consumer Certificate Number --
                            {{ $data->certification_number }}</strong></p>
                    {{-- @if (isset($TestData['hearingtest'])) --}}
                    <!-- Chart Canvas -->
                    <canvas id="hearingChartCanvas" width="1000" height="300"></canvas>
                    {{-- @endif --}}
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
                                <textarea class="form-control" id="hearingunfitRemark" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-dark" id="hearing" onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            <button class="btn btn-warning" id="hearing_test_again">Please Test Again</button>
                            &nbsp;&nbsp;
                            <button onclick="generateHearingtestPDF()"><i class="fa fa-print text-success"
                                    style="font-size:36px"></i></button>
                        </div>
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
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" id="rt" onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            <button class="btn btn-danger" id="rt_test_again">Please test again</button>
                            &nbsp;&nbsp;
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- end Rombergtest --}}
{{-- ----------------------flatfoottest------------------------------------------------ --}}
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
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" id="flatfoot" onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            <button class="btn btn-danger" id="flatfoot_test_again">Please test again</button>
                            &nbsp;&nbsp;
                            <button onclick="flatfootgeneratePDF()" class="btn btn-danger  btn-sm"><i
                                    class="fa fa-print" style="font-size:36px"></i></button>

                        </div>
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
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" id="bppv" onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            <button class="btn btn-danger" id="bppv_test_again">Please test again</button>
                            &nbsp;&nbsp;


                        </div>
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
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary" id="fukuda" onclick="saveResult(this)">Submit</button>
                            &nbsp;&nbsp;
                            <button class="btn btn-danger" id="fukuda_test_again">Please test again</button>
                            &nbsp;&nbsp;
                        </div>
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
                                        <input class="form-check-input" type="checkbox" id="overallfit" value="1" disabled />
                                        <label class="form-check-label" for="inlineCheckbox1">FIT</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="overallunfit" value="0" disabled />
                                        <label class="form-check-label" for="inlineCheckbox2">UNFIT</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="temporaeilyunfit" value="-1" disabled />
                                        <label class="form-check-label" for="inlineCheckbox3">Temorarily UNFIT</label>
                                    </div>
                                </div>
                                <input type="hidden" id="doctorId" />
                                <div class="container1">
                                    <div class="col-m"
                                    <ul>
                                        <li class="text-center">
                                            <div class="title" id="">REGISTRATION NUMBER</div>
                                            <div class="col-md-6" id="doctorregistration">
                                            </div>
                                        </li>

                                        <li class="text-center">
                                            <div class="title">SIGNATURE OF DOCTOR</div>
                                            <div class="col-md-6" id="doctorsign">
                                            </div>
                                        </li>
                                        <li class="text-center">
                                            <div class="title">SEAL OF DOCTOR</div>
                                            <div class="col-md-6" id="doctorseal">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="container">
                                    <div class="main">
                                        <label for="">Assign Doctor Credential </label>
                                        <select class="form-select" aria-label="Default select example"
                                            style="margin-right:40px;margin-bottom:10px;" id="companyProfile"
                                            name="company_id">
                                            @if (isset($doctordata))
                                                <option selected disabled>Select Doctors</option>
                                                @foreach ($doctordata as $k => $doctor)
                                                    <option value={{ $doctor->id }}><strong>Doctor Name</strong>
                                                        &nbsp; &nbsp;
                                                        {{ $doctor->name }}
                                                        &nbsp; &nbsp;<strong>Registration Number</strong> &nbsp;
                                                        &nbsp;{{ $doctor->registration_number }}
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
<button type="button mt-4 mb-4" class="btn btn-dark ml-4 " data-toggle="modal" data-target="#exampleModalLong">
    Consumer Examination Report
</button>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" style="
  max-width: 1000px;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <form action="" id="consumer_pdf" class=" shadow-sm" style="border:2px solid #339999;">
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
                                        <label class="form-check-label" for="inlineCheckbox1">to the left?</label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="option2" />
                                        <label class="form-check-label" for="inlineCheckbox2">to the right?</label>
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
                                        <label class="form-check-label" for="inlineCheckbox1">Heart disease</label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1"
                                            @if (in_array(1, $postMedicalHistory)) checked @disabled(true) @endif />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="option2"
                                            @if (in_array(2, $postMedicalHistory)) checked @disabled(true) @endif />
                                        <label class="form-check-label" for="inlineCheckbox2">Hypertension</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineCheckbox3">Kidney disease</label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3"
                                            @if (in_array(3, $postMedicalHistory)) checked @disabled(true) @endif />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineCheckbox3">Thyroid
                                            disease</label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3"
                                            @if (in_array(4, $postMedicalHistory)) checked @disabled(true) @endif />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineCheckbox3">Migrain
                                            headaches</label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3"
                                            @if (in_array(5, $postMedicalHistory)) checked @disabled(true) @endif />
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
                                            @if (in_array(1, $defficulting_in_hearing)) checked @disabled(true) @endif />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="option2"
                                            @if (in_array(2, $defficulting_in_hearing)) checked @disabled(true) @endif />
                                        <label class="form-check-label" for="inlineCheckbox2">Both ears</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineCheckbox3">Right ears</label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3"
                                            @if (in_array(3, $defficulting_in_hearing)) checked @disabled(true) @endif />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineCheckbox3">associated with
                                            attack</label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option4"
                                            @if (in_array(4, $defficulting_in_hearing)) checked @disabled(true) @endif />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineCheckbox3">Migrain
                                            headaches</label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option5"
                                            @if (in_array(5, $defficulting_in_hearing)) checked @disabled(true) @endif />
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
{{-- <div class="container my-5">
    <!-- form start -->
    <form action="" id="verticopdfreport" class="shadow-sm"
        style="border: 2px solid #339999">
        <div class="top-section d-flex justify-content-around">
            <div class="logo">
                <img src="{{ url('public/dashboard/img/logo.png') }}" alt=""
                    width="100" />
            </div>
            <div class="heading">
                <p class="text-center h2" style="color: #0d9494">MEDICLEAR</p>
                <p class="text-center h4" style="color: #339999">
                    An ISO 9001 - 2015 Certified Company<br />
                    Site Office - 90 ,Vasant Complex , Mayur Vihar,Delhi
                </p>
            </div>
            <div class="blank"></div>
        </div>
        <hr style="color: black; height: 12px; border-top: 5px solid black" />
        <!-- table start -->
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Patient Name :</th>
                    <th scope="col">{{ $data->consumer_name }}</th>
                    <th scope="col">Joining Date</th>
                    <th scope="col">NA</th>
                    <th scope="col">Checkup Date</th>
                    <th scope="col">{{ date('d-M-y') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Designation :</th>
                    <td>NA</td>
                    <td>D.O.B / AGE</td>

                    <td>{{ date('d-m-Y', strtotime($data->consumer_dob)) }}</td>
                    <td>valid Till -</td>
                    <td>{{ date('d-M-y', strtotime('+1 year')) }}</td>
                </tr>
                <tr>
                    <th scope="row">Emp Code :</th>
                    <td>NA</td>
                    <td>Gender</td>
                    <td colspan="2" class="text-center">
                        @if ($data->gender == 'male')
                            {{ 'Male' }}
                        @elseif($data->gender == 'female')
                            {{ 'Female' }}
                        @endif
                    </td>
                    <td>..</td>
                    <td>..</td>
                </tr>
                <tr>
                    <th scope="row">Address</th>
                    <td>{{ $data->consumer_location }}</td>
                    <td>Certificate No. :</td>
                    <td>{{ $data->certification_number }}</td>
                    <td>..</td>
                    <td>..</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="6 " class="text-center fw-bold h4">
                        <u>Vertigo Test for Working at Height</u>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--  -->
        <!-- question Ans field start -->
        <div class="questions">
            <p class="h4 text-dark my-3 fw-bold">
                1- Complaint :
            </p>
            <div class="row choice">
                <div class="col-md-6"></div>
                <div class="col-md-6">Yes&nbsp;&nbsp;&nbsp;&nbsp;No</div>
            </div>
            <!-- question start  -->
            <div class="row my-4">
                <div class="col-md-6">
                    a.&nbsp;&nbsp;Giddiness
                </div>
                <div class="col-md-4">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option1"
                        @if (in_array(1, $complaints)) checked @disabled(true) @endif />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option1"
                        @if (in_array(1, $complaints) == false) checked @disabled(true) @endif />
                </div>
            </div>
            <div class="row my-4">
                <div class="col-6">b. &nbsp;&nbsp;Vertigo</div>
                <div class="col-4">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option2"
                        @if (in_array(2, $complaints)) checked @disabled(true) @endif />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option2"
                        @if (in_array(2, $complaints) == false) checked @disabled(true) @endif />
                </div>
            </div>
            <div class="row my-4">
                <div class="col-6">c.&nbsp;&nbsp; Nausea?</div>
                <div class="col-4">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option5"
                        @if (in_array(3, $complaints)) checked @disabled(true) @endif />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option5"
                        @if (in_array(3, $complaints) == false) checked @disabled(true) @endif />
                </div>
            </div>
            <div class="row my-4">
                <div class="col-6">d.&nbsp;&nbsp; Seizure Disorder(Epilespy)?</div>
                <div class="col-4">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option1"
                        @if (in_array(4, $complaints)) checked @disabled(true) @endif />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option6"
                        @if (in_array(4, $complaints) == false) checked @disabled(true) @endif />
                </div>
            </div>
            <div class="row my-4">
                <div class="col-6">
                    e.&nbsp;&nbsp; Acrophobia?
                </div>
                <div class="col-4">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option1"
                        @if (in_array(5, $complaints)) checked @disabled(true) @endif />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option1"
                        @if (in_array(5, $complaints) == false) checked @disabled(true) @endif />
                </div>
            </div>
            <div class="row my-4">
                <div class="col-6">
                    f.&nbsp;&nbsp; Asthama /COPD
                </div>
                <div class="col-4">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option1"
                        @if (in_array(6, $complaints)) checked @disabled(true) @endif />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option1"
                        @if (in_array(6, $complaints) == false) checked @disabled(true) @endif />
                </div>
            </div>
        </div>
        <!--  -->
        <div class="questions">
            <p class="h4 text-dark my-3 fw-bold">
                1- General Examination :
            </p>
            <div class="row choice">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    Normal&nbsp;&nbsp;&nbsp;Abnormal
                </div>
            </div>
        </div>
        <!-- question start  -->
        <div class="row my-4">
            <div class="col-md-6">
                a.&nbsp;&nbsp;Pulse
            </div>
            <div class="col-md-4">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1" />
            </div>
        </div>
        <div class="row my-4">
            <div class="col-6">b. &nbsp;&nbsp;BP</div>
            <div class="col-4">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1"
                    @if (isset($Testresult['bp']) && $Testresult['bp'] == '1') checked @disabled(true) @endif />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1"
                    @if (isset($Testresult['bp']) && $Testresult['bp'] == '0') checked @disabled(true) @endif />
            </div>
        </div>
        <div class="row my-4">
            <div class="col-6">c.&nbsp;&nbsp; Depth Of Vision?</div>
            <div class="col-4">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1"
                    @if (isset($Testresult['eyecheckup']) && $Testresult['eyecheckup'] == '1') checked @disabled(true) @endif />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1"
                    @if (isset($Testresult['eyecheckup']) && $Testresult['eyecheckup'] == '0') checked @disabled(true) @endif />
            </div>
        </div>
        <div class="row my-4">
            <div class="col-6">d.&nbsp;&nbsp; Nystagmus?</div>
            <div class="col-4">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1" />
            </div>
        </div>
        <div class="row my-4">
            <div class="col-6">
                e.&nbsp;&nbsp; Flat Foot
            </div>
            <div class="col-4">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1"
                    @if (isset($Testresult['flatfoot']) && $Testresult['flatfoot'] == '1') checked @disabled(true) @endif />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1"
                    @if (isset($Testresult['flatfoot']) && $Testresult['flatfoot'] == '0') checked @disabled(true) @endif />
            </div>
        </div>
        <div class="row my-4">
            <div class="col-6">
                f.&nbsp;&nbsp; Hearing
            </div>
            <div class="col-4">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1" />
            </div>
        </div>
        <div class="row my-4">
            <div class="col-6">
                g.&nbsp;&nbsp; BPPV(Being Paroxysmal Positional Vertigo)
            </div>
            <div class="col-4">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1"
                    @if (isset($Testresult['bppv']) && $Testresult['bppv'] == '1') checked @disabled(true) @endif />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                    value="option1"
                    @if (isset($Testresult['bppv']) && $Testresult['bppv'] == '0') checked @disabled(true) @endif />
            </div>
        </div>
        <p class="h5 fw-bolder">3. Examination Finding :</p>
        <p class="h5 fw-bolder">a- Romberg Test</p>
        <p>
            A Pass requires the ability to maintain balance while standing with
            shoes off, feet together side by side , eyes closed and arms by
            sides,
        <p class="text-center">sides, for 30 seconds</p>
        </p>
        <div class="form-check form-check-inline d-flex justify-content-evenly">
            <input class="form-check-input"
                @if (isset($Testresult['rt']) && $Testresult['rt'] == '1') checked @disabled(true) @endif
                type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"> Normal</label>
        </div>
        <br>
        <div class="form-check form-check-inline d-flex justify-content-evenly">
            <input class="form-check-input"
                @if (isset($Testresult['rt']) && $Testresult['rt'] == '0') checked @disabled(true) @endif
                type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Abnormal</label>
        </div>
        <br><br>
    </form>
</div> --}}
{{-- ------------------------------ Vertigo Test Report PDF------------------------------------------------------------------------ --}}
<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalVertigo">
    Vertico Test Report
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalVertigo" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalVertigo" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1000px;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="verticopdfreport">
                <div class="container">
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
                                <!-- end 1st table  -->
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
                                            <p>Lower: {{ $bpdatamodal['pre_lower_bp'] }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>Upper: {{ $bpdatamodal['pre_upper_bp'] }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><b>Post</b></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>Lower: {{ $bpdatamodal['post_lower_bp'] }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>Upper: {{ $bpdatamodal['post_upper_bp'] }}</p>
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
                                                    value="fit" disabled id="fitRadio">
                                                <label for="fitRadio">
                                                    Fit
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input unfit" type="radio"
                                                    name="bpunfit" id="unfitRadio" disabled value="unfit">
                                                <label for="unfitRadio">
                                                    Unfit
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"><h6 class="mt-4 d-flex"><b class="text-success">Remark: </b>
                                    <p id="bpremarkmodal">
                                        @if(isset($testremarks) && isset($testremarks['bp']))
                                            {{$testremarks['bp']}}
                                        @endif
                                    </p></h6></div>
                                    <div class="second-step">
                                        {{-- 2nd step start here --}}
                                        <h2 class="text-success text-center">Step 2 :Hearing Checkup</h2>
                                        <p class="text-success ">For the Hearing
                                            Checkup.............................................................................................................................................................................................
                                        </p>
                                        <div class="col-md-12 p-3 shadow-lg bg-light">
                                            <div class="hearing-graph">
                                                <canvas id="modalHearingChartCanvas" width="1000"
                                                    height="300"></canvas>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <p><b class="text-success">I.</b> Procedure</p>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                            <input type="radio" disabled id="modalfithearing"
                                                            name="hearingfit" value="fit"
                                                            class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                            </label>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                            <input type="radio" disabled id="modalunfithearing"
                                                                name="hearingunfit" value="unfit"
                                                                class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                        </div>
                                                        <p id="hearingremarkInModal" class="text-danger"> 
                                                            <span class="text-dark">Remark: </span>@if(isset($testremarks) && isset($testremarks['hearingtest']))
                                                            {{$testremarks['hearingtest']}}
                                                        @endif</p>
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
                                                <svg id="eyeblindnessmodal" viewBox="0 0 36 36" class="circular-chart {{ $color }}">
                                                    <path class="circle-bg"
                                                        d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                    <path class="circle" stroke-dasharray="{{ $percentage }}, 100"
                                                        d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                    <text x="18" y="20.35" class="percentage">{{ $percentage }}%</text>
                                                </svg>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <p><b class="text-success">I.</b> Procedure</p>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                            <input type="radio" disabled
                                                            id="modalfiteyeblindness" name="eyeblindnessfit"
                                                            value="fit" class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                            </label>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">    
                                                            <input type="radio" disabled
                                                            id="modalunfiteyeblindness"
                                                            name="eyeblindnessunfit" value="unfit"
                                                            class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                        </div>
                                                        <span id="eyeremarkInModal" class="text-danger">
                                                            <span class="text-dark">Remark: </span> @if(isset($testremarks) && isset($testremarks['eyecheckup']))
                                                                {{$testremarks['eyecheckup']}}
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
                                            <div class="eye-distance-percentage">
                                                <svg id="eyedistancemodal" viewBox="0 0 36 36" class="circular-chart {{ $color }}">
                                                    <path class="circle-bg"
                                                        d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                    <path class="circle" stroke-dasharray="{{ $percentage }}, 100"
                                                        d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                    <text x="18" y="20.35" class="percentage">{{ $percentage }}%</text>
                                                </svg>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <p><b class="text-success">I.</b> Procedure</p>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                            <input type="radio" disabled
                                                            id="modalfiteyedistance" name="eyedistancefit"
                                                            value="fit" class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                            </label>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                            <input type="radio" disabled
                                                            id="modalunfiteyedistance"
                                                            name="eyedistanceunfit" value="unfit"
                                                            class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                        </div>
                                                        <p id="eyedistanceremarkInModal" class="text-danger">
                                                            <span class="text-dark">Remark: </span>@if(isset($testremarks) && isset($testremarks['eyedistance']))
                                                                {{$testremarks['eyedistance']}}
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
                                        <p> For the Romberg test, you’ll be asked to stand with your feet together. Then, you’ll close your eyes. Your doctor will assess how much you sway or fall to determine what’s causing your vertigo.
                                   <br>
                                         Record Vedio -
                                         <ul> 
                                           <li>15 Sec - stand on one feet (left) (with closed eyes) </li>
                                           <li>15 Sec - stand on one feet (Right) (with closed eyes) </li>
                                           <li> 30 sec - stand on both feet (with closed eyes)</li>
                                         </ul>
                                         <br>
                                        <span class="text-success"> Remark - Based on vedio doctor confirm FIT or UNFIT</span>
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
                                                            value="fit" id="rtfit" class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                            </label>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                            <input type="radio" id="rtunfit" disabled name="rtfootunfit"
                                                            value="unfit" class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                        </div><p id="rtfootremark" class="text-danger">
                                                            <span class="text-dark">Remark: </span>@if(isset($testremarks) && isset($testremarks['rt']))
                                                                {{$testremarks['rt']}}
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- hello there  -->
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <p><b class="text-success">II.</b>Stand on One Feet<b
                                                                class="text-danger">(Right)</b></p>
                                                        {{-- <div class="col-md-6">
                                                            <label class="fit">
                                                                Fit
                                                                <input type="radio" name="rightfoot"
                                                                    value="fit" class="fit">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div> --}}
                                                        {{-- <div class="col-md-6">
                                                            <label class="fit">
                                                                Unfit
                                                                <input type="radio" name="rightfoot"
                                                                    value="unfit" class="unfit">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                                <!-- hello there  -->
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <p><b class="text-success">II.</b>Stand on both Feet<b
                                                                class="text-danger">(Closed Eyes)</b></p>
                                                        {{-- <div class="col-md-6">
                                                            <label class="fit">
                                                                Fit
                                                                <input type="radio" name="bothfoot"
                                                                    value="fit" class="fit">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="unfit">
                                                                Unfit
                                                                <input type="radio" name="bothfoot"
                                                                    value="unfit" class="unfit">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div> --}}
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
                                                            value="fit" id="flatfit" class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                            </label>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                            <input type="radio" disabled name="flatunfit"
                                                            value="unfit" id="flatUnfit" class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                        </div><p id="flatremark" class="text-danger d-flex">
                                                            <span class="text-dark">Remark: </span>@if(isset($testremarks) && isset($testremarks['flatfoot']))
                                                                {{$testremarks['flatfoot']}}
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
                                    <p>Your healthcare provider will turn your head 45 degrees to one side. Then, you’ll quickly lie on your back, with your head off the side of the table, and maintain the 45-degree head turn for at least 30 seconds. Your doctor will inspect your eyes and ask if you feel dizzy. The procedure is then repeated on the other side.
                                    </p>
                                    <p> You should know that this test could trigger unpleasant bouts of vertigo. If you develop symptoms during this test, your doctor will determine that you do indeed have vertigo.</p>
                                        <div class="col-md-12 p-3 shadow-lg bg-light">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <p><b class="text-success">I.</b>Procedure</p>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                            <input type="radio" disabled name="bppvfit"
                                                            value="fit" class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                        </label>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                            <input type="radio" disabled name="bppvunfit"
                                                            value="unfit" class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                        </div><p id="bppvremark" class="text-danger">
                                                            <span class="text-dark">Remark: </span>@if(isset($testremarks) && isset($testremarks['bppv']))
                                                                {{$testremarks['bppv']}}
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
                                        <p>The Fukuda-Unterberger test requires you to march with your eyes closed. Your physician will look at how your body strays from the midline to identify which side of your body is affected by vertigo.
                                            <br>
                                            Record Vedio -
                                            <ul> 
                                               <li>straight line drawn and tell them to walk with closed eyes and record the vedio</li>
                                               <br>
                                               <span class="text-success"> Remark -  Based on vedio doctor confirm FIT or UNFIT</span>
                                            </p>
                                        <div class="col-md-12 p-3 shadow-lg bg-light">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <p><b class="text-success">I.</b> Procedure</p>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                            <input type="radio" disabled name="fukudafit"
                                                            value="fit" class="form-check-input fit">
                                                            <label class="fit">
                                                                Fit
                                                        </label>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                            <input type="radio" disabled name="fukudaunfit"
                                                            value="unfit" class="form-check-input unfit">
                                                            <label class="fit">
                                                                Unfit
                                                            </label>
                                                        </div>
                                                        </div><p id="fukudaremark" class="text-danger">
                                                            <span class="text-dark">Remark: </span>@if(isset($testremarks) && isset($testremarks['fukuda']))
                                                                {{$testremarks['fukuda']}}
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
                        </div>
                        <!--**********end container************ -->
                    </div>
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
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 1000px;" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-holder shadow-lg  p-3 pb-0">
                                    <!-- form start -->
                                    <form action="" class="shadow-sm">
                                    <div class="top-section d-flex justify-content-around">
                                        <div class="logo" id="qrcolum">
                                            <img src="{{asset('assets/img/logo.png')}}" alt="" width="100" />
                                        </div>
                                        <div class="heading">
                                            <h1 class="text-center" style="font-size: 30px;">
                                            MEDICLEAR</h1>
                                            <p class="text-center" style="color: #4daf92">
                                            <b> An ISO 9001 - 2015 Certified Company
                                            <br>  Site Office - 90 ,Vasant Complex , Mayur Vihar,Delhi</b>
                                            </p>
                                        </div>
                                        <div class="blank"></div>
                                    </div>
                                    
                                        <p class="h3 text-dark text-center my-3">
                                        <u>Certification Of Vertigo Examination</u>
                                        </p>
                                    <table
                                        class="table table-striped border-dark table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">1</th>
                                                <th scope="col">Certification No.</th>
                                                <th scope="col">{{ $data->certification_number }}</th>
                                                <th scope="col">Checkup Date</th>
                                                <th scope="col">{{ date('d-M-y') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Name</td>
                                                <td>{{ $data->consumer_name }}</td>
                                                <td>Valid Till-</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Company</td>
                                                <td></td>
                                                <td rowspan="4" colspan="2" class="text-center" id="qrcolum">
                                                    @php
                                                        $blurredAadhar = 'xxxx-xxxx-' . substr($data->consumer_addhar_number, -4);
                                                        $consumerQrData = 'Name:' . $data->consumer_name . ' ' . 'AdharNumber:' . $blurredAadhar;
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
                                    <p class="h4 text-center text-dark">This is to be certify that Mr.........</p>
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
                                    @foreach ($AssignDoctor as $doc)
                                    <div class="container d-flex justify-content-around">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" disabled value="option1" @if ($doc->doctor_final_result == '1') checked @disabled(true) @disabled(true) @endif />
                                            <label class="form-check-label" for="inlineCheckbox1">Fit</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" disabled value="option2" @if ($doc->doctor_final_result == '0') checked @disabled(true) @endif />
                                            <label class="form-check-label" for="inlineCheckbox2">Unfit</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" disabled value="option3" @if ($doc->doctor_final_result == '-1') checked @disabled(true) @endif />
                                            <label class="form-check-label" for="inlineCheckbox3">Temorarily Unfit</label>
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
                                                    <img src="{{ asset('images/' . $doc->doctorsign) }}" width="100px" class="img-fluid" alt="wkcicb">
                                                </div>
                                            </li>
                                            <li class="text-center">
                                                <div class="title">Seal Of Doctor</div>
                                                <div class="col-md-6" id="doctorseal">
                                                    <img src="{{ asset('images/' . $doc->doctorseal) }}" width="100px" class="img-fluid" alt="N/A">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- form footer -->
                                    <div
                                        class="footer d-flex justify-content-center align-items-center">
                                        <p class="h6 text-success">
                                        <b>Note:</b>   To verify the Medical Certification scan QR Code or email Us at
                                            <span class="text-danger">everify@mediclear.in</span>
                                        </p>
                                    </div>
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

                    <button type="button" class="btn btn-primary" onclick="docotorFinalReportPDF()">Save PDF</button>
                </div>
                @endforeach
            </div>
        </div>
</div>
<script>
    // $('#corporateProfile').change(function() {
    //     console.log('helllo');
    //     var selectedValue = $(this).val();
    //     console.log('Selected Value: ' + selectedValue);
    // });
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
                    ` <img src="{{ url('public/images/') }}/${sign}"  width="100px" class="img-fluid"  alt="">`;
                var sealHTML =
                    ` <img src="{{ url('public/images/') }}/${seal}" width="100px" class="img-fluid"  alt="">`;
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
{{-- ---------------------------------------------------------------------------------------------- --}}
</div>
</div>
{{-- <div class="container my-5">
    <!-- form start -->
    <form action="" class="shadow-sm" id="doctorreportfinal"
        style="border: 2px solid #339999">

        <div class="top-section d-flex justify-content-around">
            <div class="logo">
                <img src="{{ url('public/dashboard/img/logo.png') }}" alt=""
                    width="100" />
            </div>
            <div class="heading">
                <p class="text-center h2" style="color: #0d9494">MEDICLEAR</p>
                <p class="text-center h4" style="color: #339999">
                    An ISO 9001 - 2015 Certified Company<br />
                    Site Office - 90 ,Vasant Complex , Mayur Vihar,Delhi
                </p>
            </div>
            <div class="blank"></div>
        </div>

        <hr style="color: black; height: 12px; border-top: 5px solid black" />
        <u>
            <p class="h3 text-dark text-center my-5">
                CERTIFICATION OF VERTIGO EXAMINATION
            </p>
        </u>
        <!-- table start -->
        <table class="table table-striped border-dark table-bordered"
            style="background-color: aliceblue">
            <thead>
                <tr>
                    <th scope="col">1</th>
                    <th scope="col">Certification No.</th>
                    <th scope="col">{{ $data->certification_number }}</th>
                    <th scope="col">{{ date('d-M-y') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">2</th>
                    <td>Name</td>
                    <td>{{ $data->consumer_name }}</td>
                    <td>Valid Till-</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Company</td>
                    <td>NA</td>
                    <td rowspan="4" colspan="2" class="text-center" id="qrcolum">
                        @php
                            $blurredAadhar = 'xxxx-xxxx-' . substr($data->consumer_addhar_number, -4);
                            $consumerQrData = 'Name:' . $data->consumer_name . ' ' . 'AdharNumber:' . $blurredAadhar;
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
        <p class="h4 text-center text-dark">This is to be certify that Mr.</p>
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
        <!-- checkboxes -->
        @foreach ($AssignDoctor as $doc)
            <div class="container d-flex justify-content-around">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        value="option1"
                        @if ($doc->doctor_final_result == '1') checked @disabled(true) @disabled(true) @endif />
                    <label class="form-check-label" for="inlineCheckbox1">FIT</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input"
                        @if ($doc->doctor_final_result == '0') checked @disabled(true) @endif
                        type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">UNFIT</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input"
                        @if ($doc->doctor_final_result == '-1') checked @disabled(true) @endif
                        type="checkbox" id="inlineCheckbox3" value="option3" />
                    <label class="form-check-label" for="inlineCheckbox3">Temorarily UNFIT
                    </label>
                </div>
            </div>
                            <!-- 3 boxes start   $('#doctorsign').html(signHTML);
                $('#doctorseal').html(sealHTML);
                $('#doctorregistration').html(registrationHTML); -->
            <div class="container1">
                <ul>
                    <li class="text-center">
                        <div class="title" id="">REGISTRATION NUMBER</div>
                        <div class="col-md-6" id="doctorregistration">
                            {{ $doc->doctorregistration }}
                        </div>
                    </li>
                    <li class="text-center">
                        <div class="title">SIGNATURE OF DOCTOR</div>
                        <div class="col-md-6" id="doctorsign">
                            <img src="{{ url('public/images/' . $doc->doctorsign) }}"
                                width="100px" class="img-fluid" alt="">
                        </div>
                    </li>
                    <li class="text-center">
                        <div class="title">SEAL OF DOCTOR</div>
                        <div class="col-md-6" id="doctorseal">
                            <img src="{{ url('public//images/' . $doc->doctorseal) }}"
                                width="100px" class="img-fluid" alt="">
                        </div>
                    </li>
                </ul>
            </div>
            <!-- form footer -->
            <div class="footer d-flex justify-content-center align-items-center text-white"
                style="background-color: #418787">
                <p class="h5">
                    To verify the Medical Certification scan QR Code or email Us at
                    <span class="text-danger">everify@mediclear.in</span>
                </p>
            </div>
    </form>
</div> --}}
{{-- @if (isset($TestData) && json_decode($TestData, true) != [])
@php
if(isset($TestData['bp'])){

$bpdata= json_decode($TestData['bp'],true);
}
if(isset($TestData['eyecheckup'])){

$eyecheckupdata= json_decode($TestData['eyecheckup'],true);
}

@endphp

@else
@php
$bpdata=[];
$bpdata['pre_lower_bp']="0";
$bpdata['pre_upper_bp']="0";
$bpdata['post_lower_bp']="0";
$bpdata['post_upper_bp']="0";
@endphp

@endif --}}
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
        }
        if (isset($TestData['hearingtest'])) {
            $hrdata = json_decode($TestData['hearingtest'], true);
        }
        if (isset($TestData['eyecheckup'])) {
            $eyecheckupdata = json_decode($TestData['eyecheckup'], true);
        }
    @endphp
@endif
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>
<script>
    function downloadPDF() {
        const pdf = new jsPDF();
        const modalContent = document.getElementById('verticopdfreport').innerHTML;
        pdf.html(modalContent, {
            callback: function () {
                pdf.save('modal_content.pdf');
            }
        });
    }
</script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        @if($bpUnfitChecked)
            $('#unfitRadio').prop('checked', true);
        @elseif($bpfitChecked)
            $('#fitRadio').prop('checked', true);
        @endif
        @if($hearingUnfitChecked)
            $('#modalunfithearing').prop('checked', true);
        @elseif($hearingfitChecked)
            $('#modalfithearing').prop('checked', true);
        @endif
        @if($eyedistanceUnfitChecked)
            $('#eyedistancefit').prop('checked', true);
        @elseif($eyedistancefitChecked)
            $('#eyedistanceunfit').prop('checked', true);
        @endif
        @if($eyecheckupUnfitChecked)
            $('#eyeblindnessfit').prop('checked', true);
        @elseif($eyecheckupfitChecked)
            $('#eyeblindnessunfit').prop('checked', true);
        @endif
        @if($bppvUnfitChecked)
            $('#bppvunfit').prop('checked', true);
        @elseif($bppvfitChecked)
            $('#bppvfit').prop('checked', true);
        @endif
        @if($fukudaUnfitChecked)
            $('#fukudaunfit').prop('checked', true);
        @elseif($fukudaUnfitChecked)
            $('#fukudafit').prop('checked', true);
        @endif
        @if($rtunfitChecked)
            $('#rtunfit').prop('checked', true);
        @elseif($rtfitChecked)
            $('#rtfit').prop('checked', true);
        @endif
        @if($flatfootUnfitChecked)
            $('#flatUnfit').prop('checked', true);
        @elseif($flatfootfitChecked)
            $('#flatfit').prop('checked', true);
        @endif
    });
</script>
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
            $("#eyedistance_test_remark_result").show();
            $("#eyedistancecheckboxfit").prop("checked", false);
        } else {
            $("#eyedistance_test_remark_result").hide();
            $("#eyedistancecheckboxfit").prop("checked", true);
        }
    });
    $("#eyedistancecheckboxfit").click(function() {
        $("#eyedistancecheckboxunfit").prop("checked", false);
        $("#eyedistance_test_remark_result").hide();
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
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('hearingChartCanvas').getContext('2d');
        var labels = ['125', '250', '500', '1000', '2000', '3000', '4000', '6000', '8000', '10000'];
        var hrdata = @json($hrdata);

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Right Ear',
                    data: hrdata['right_ear_problem'].split(',').map(Number),
                    borderColor: 'red',
                    backgroundColor: 'transparent',
                    pointRadius: 3
                }, {
                    label: 'Left Ear',
                    data: hrdata['left_ear_problem'].split(',').map(Number),
                    borderColor: 'blue',
                    backgroundColor: 'transparent',
                    pointRadius: 3
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        id: 'YLeft',
                        position: 'left',
                    }]
                }
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('modalHearingChartCanvas').getContext('2d');
        var labels = ['125', '250', '500', '1000', '2000', '3000', '4000', '6000', '8000', '10000'];
        var hrdata = @json($hrdata);

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Right Ear',
                    data: hrdata['right_ear_problem'].split(',').map(Number),
                    borderColor: 'red',
                    backgroundColor: 'transparent',
                    pointRadius: 3
                }, {
                    label: 'Left Ear',
                    data: hrdata['left_ear_problem'].split(',').map(Number),
                    borderColor: 'blue',
                    backgroundColor: 'transparent',
                    pointRadius: 3
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        id: 'YLeft',
                        position: 'left',
                    }]
                }
            }
        });
    });
    // var originalChart = document.getElementById('eyeblindness');
    // var clonedChart = originalChart.cloneNode(true);
    // var distanceChart = document.getElementById('eyedistance');
    // var cloneddistanceChart = originalChart.cloneNode(true);
    // var modalContent = document.querySelector('.eye-percentage');
    // var modaldistanceContent = document.querySelector('.eye-distance-percentage');
    // modalContent.appendChild(clonedChart);
    // modaldistanceContent.appendChild(cloneddistanceChart);
</script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/html2canvasmin.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
{{-- <script>
    $(document).ready(function () {
    $('#pdfdownload').click(function () { 
        var modalContent = document.getElementById('vertigopdfreport');
        var content = modalContent.innerHTML;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'post',
                    url: "{{ url('consumer-download-pdf') }}",
                    data: {
                        modalContent: content,
                    },success: function(response) {
                        console.log('PDF downloaded successfully');
                    },
                error: function(xhr, status, error) {
                    console.error('Error downloading PDF:', error);
                }
            });
    });
});
</script> --}}
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
            var doctorFinalResult = $(`#overallfit`).val();
        }
        if ($(`#temporaeilyunfit`).is(":checked")) {
            var doctorFinalResult = $(`#overallfit`).val();
        }
        var consumerId = $('#consumerId').val();
        var doctorId = $("#doctorId").val();
        var ResultCount = 6;
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
                        ResultCount: ResultCount

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
        var canvas = document.getElementById('hearingChartCanvas');
        var dataUrl = canvas.toDataURL('image/png');
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
    /////////////////////////////////////////////
    /////////////////vertigo report//////////////////////////////////////////////

    function verticoPDF() {
        var prtContent = document.getElementById("verticopdfreport");
        var hearingcanvas = document.getElementById('modalHearingChartCanvas');
        var bpcanvas = document.getElementById('BpGraphModal');
        var bpdataUrl = bpcanvas.toDataURL('image/png');
        var hearingdataUrl = hearingcanvas.toDataURL('image/png');
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
        Total += '<img src="' + hearingdataUrl + '" style="width:100%;">';
        var WinPrint = window.open('', '', 'left=0,top=0,width=1200,height=1000,toolbar=0,scrollbars=0,status=0');
        var bootstrapCDN = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
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
        if (Number(val) == 6) {
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
    //////////////////////////////////////////////////////////////////////////////////
</script>
@include('include.footer')
