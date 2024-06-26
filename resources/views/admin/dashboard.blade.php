@extends('admin.layout')

@section('content')

<div class="g-3 mb-3 row">
    <div class="col-xxl-3 col-md-6">
        <div class="h-md-100 card">
            <div class="pb-0 card-header">
                <h6 class="mb-0 mt-2">Weekly Sales
                    <span>
                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="question-circle"
                            class="svg-inline--fa fa-question-circle fa-w-16 ms-1 text-400" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="weeklySalesTooltip"
                            style="transform-origin: 0.5em 0.5em;">
                            <g transform="translate(256 256)">
                                <g transform="translate(0, 0)  scale(0.9375, 0.9375)  rotate(0 0 0)">
                                    <path fill="currentColor"
                                        d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"
                                        transform="translate(-256 -256)"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </h6>
            </div>
            <div class="d-flex justify-content-between align-items-end card-body">
                <div>
                    <h2 class="mb-1 text-700 fw-normal lh-1">$47K</h2>
                    <div class="me-2 fs-11 badge badge-subtle-success rounded-pill">+3.5%</div>
                </div>
                <div class="echarts-for-react " _echarts_instance_="ec_1704878202876" size-sensor-id="1"
                    style="height: 60px; width: 8.5rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;">
                    <div
                        style="position: relative; width: 136px; height: 60px; padding: 0px; margin: 0px; border-width: 0px;">
                        <canvas data-zr-dom-id="zr_0" width="272" height="120"
                            style="position: absolute; left: 0px; top: 0px; width: 136px; height: 60px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-6">
        <div class="h-md-100 card">
            <div class="pb-0 card-header">
                <h6 class="mb-0 mt-2">Total Order</h6>
            </div>
            <div class="d-flex justify-content-between align-items-end pt-0 card-body">
                <div>
                    <h2 class="fw-normal text-700 mb-1 lh-1">58.4K</h2>
                    <span class="text-primary fs-11 badge rounded-pill bg-200">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up"
                            class="svg-inline--fa fa-caret-up fa-w-10 me-1" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z">
                            </path>
                        </svg>13.6%
                    </span>
                </div>
                <div class="ps-0 mt-n4">
                    <div class="echarts-for-react " _echarts_instance_="ec_1704878202877" size-sensor-id="2"
                        style="height: 90px; width: 8.5rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;">
                        <div
                            style="position: relative; width: 136px; height: 90px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;">
                            <canvas data-zr-dom-id="zr_0" width="272" height="180"
                                style="position: absolute; left: 0px; top: 0px; width: 136px; height: 90px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                        </div>
                        <div class=""
                            style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; background-color: rgb(249, 250, 253); border-width: 1px; border-radius: 4px; color: rgb(11, 23, 39); font: 14px / 21px sans-serif; padding: 7px 10px; top: 0px; left: 0px; transform: translate3d(1px, 37px, 0px); border-color: rgb(249, 250, 253); pointer-events: none; visibility: hidden; opacity: 0;">
                            <strong>week 7</strong> : 120
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-6">
        <div class="h-md-100 card">
            <div class="card-body">
                <div class="justify-content-between g-0 row">
                    <div class="pe-2 col-xxl col-sm-6 col-5">
                        <h6 class="mt-1">Market Share</h6>
                        <div class="d-flex justify-content-between align-items-center fw-semibold fs-11 mt-3">
                            <p class="mb-1">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle"
                                    class="svg-inline--fa fa-circle fa-w-16 me-2 text-primary" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>Samsung
                            </p>
                            <div class="d-xxl-none">58%</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center fw-semibold fs-11 false">
                            <p class="mb-1">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle"
                                    class="svg-inline--fa fa-circle fa-w-16 me-2 text-info" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>Huawei
                            </p>
                            <div class="d-xxl-none">21%</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center fw-semibold fs-11 false">
                            <p class="mb-1">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle"
                                    class="svg-inline--fa fa-circle fa-w-16 me-2 text-300" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>Apple
                            </p>
                            <div class="d-xxl-none">22%</div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="ps-0">
                            <div class="echarts-for-react " _echarts_instance_="ec_1704878202878" size-sensor-id="3"
                                style="height: 6.625rem; width: 6.625rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;">
                                <div
                                    style="position: relative; width: 106px; height: 106px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                    <canvas data-zr-dom-id="zr_0" width="212" height="212"
                                        style="position: absolute; left: 0px; top: 0px; width: 106px; height: 106px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                </div>
                                <div class=""
                                    style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; background-color: rgb(249, 250, 253); border-width: 1px; border-radius: 4px; color: rgb(11, 23, 39); font: 14px / 21px sans-serif; padding: 7px 10px; top: 0px; left: 0px; transform: translate3d(-109px, 47px, 0px); border-color: rgb(216, 226, 239); pointer-events: none; visibility: hidden; opacity: 0;">
                                    <strong>Samsung:</strong> 57.61%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-6">
        <div class="h-100 card">
            <div class="pb-0 card-header">
                <div class="align-items-center g-2 row">
                    <div class="col">
                        <h6 class="mb-0">Weather</h6>
                    </div>
                    <div class="text-right col-auto">
                        <div class="font-sans-serif btn-reveal-trigger dropdown">
                            <button type="button" id="react-aria4565791148-:r5:" aria-expanded="false"
                                data-boundary="viewport"
                                class="text-600 btn-reveal dropdown-toggle btn btn-reveal btn-sm">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h"
                                    class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-11" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-2 card-body">
                <div class="g-0 h-100 align-items-center row">
                    <div class="d-flex align-items-center col">
                        <img class="me-3"
                            src="data:image/png;base64,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"
                            alt="" height="60">
                        <div>
                            <h6 class="mb-2">New York City</h6>
                            <div class="fs-11 fw-semibold">
                                <div class="text-warning">Sunny</div>Precipitation: 50%
                            </div>
                        </div>
                    </div>
                    <div class="text-center ps-2 col-auto">
                        <div class="fs-5 fw-normal font-sans-serif text-primary mb-1 lh-1">31°</div>
                        <div class="fs-10 text-800">32° / 25°</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="g-3 mb-3 row">
    <div class="col-lg-6">
        <div class="card">
            <div class="bg-body-tertiary card-header">
                <div class="align-items-center g-2 row">
                    <div class="col">
                        <h6 class="mb-0">Running Projects</h6>
                    </div>
                    <div class="text-right col-auto">
                        <select class="me-2 form-select form-select-sm">
                            <option>Working Time</option>
                            <option>Estimated Time</option>
                            <option>Billable Time</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="py-0 card-body">
                <div class="position-relative align-items-center py-2 border-bottom border-200  row">
                    <div class="py-1 col">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-name rounded-circle bg-primary-subtle">
                                    <span class="fs-9 text-primary">F</span>
                                </div>
                            </div>
                            <h6 class="d-flex mb-0 align-items-center">
                                <a class="text-800 stretched-link" href="#!">Falcon</a>
                                <span class="ms-2 text-primary badge rounded-pill bg-200">90%</span>
                            </h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="justify-content-end align-items-center row">
                            <div class="col-auto pe-0">
                                <div class="fs-10 fw-semibold">58:20:00</div>
                            </div>
                            <div class="pe-x1 col-5">
                                <div class="progress" style="height: 5px;">
                                    <div role="progressbar" class="progress-bar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-relative align-items-center py-2 border-bottom border-200  row">
                    <div class="py-1 col">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-name rounded-circle bg-success-subtle">
                                    <span class="fs-9 text-success">R</span>
                                </div>
                            </div>
                            <h6 class="d-flex mb-0 align-items-center">
                                <a class="text-800 stretched-link" href="#!">Reign</a>
                                <span class="ms-2 text-primary badge rounded-pill bg-200">78%</span>
                            </h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="justify-content-end align-items-center row">
                            <div class="col-auto pe-0">
                                <div class="fs-10 fw-semibold">31:50:00</div>
                            </div>
                            <div class="pe-x1 col-5">
                                <div class="progress" style="height: 5px;">
                                    <div role="progressbar" class="progress-bar" aria-valuenow="78"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-relative align-items-center py-2 border-bottom border-200  row">
                    <div class="py-1 col">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-name rounded-circle bg-info-subtle">
                                    <span class="fs-9 text-info">B</span>
                                </div>
                            </div>
                            <h6 class="d-flex mb-0 align-items-center">
                                <a class="text-800 stretched-link" href="#!">Boots4</a>
                                <span class="ms-2 text-primary badge rounded-pill bg-200">79%</span>
                            </h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="justify-content-end align-items-center row">
                            <div class="col-auto pe-0">
                                <div class="fs-10 fw-semibold">25:20:00</div>
                            </div>
                            <div class="pe-x1 col-5">
                                <div class="progress" style="height: 5px;">
                                    <div role="progressbar" class="progress-bar" aria-valuenow="79"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 79%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-relative align-items-center py-2 border-bottom border-200  row">
                    <div class="py-1 col">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-name rounded-circle bg-warning-subtle">
                                    <span class="fs-9 text-warning">R</span>
                                </div>
                            </div>
                            <h6 class="d-flex mb-0 align-items-center">
                                <a class="text-800 stretched-link" href="#!">Raven</a>
                                <span class="ms-2 text-primary badge rounded-pill bg-200">38%</span>
                            </h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="justify-content-end align-items-center row">
                            <div class="col-auto pe-0">
                                <div class="fs-10 fw-semibold">12:50:00</div>
                            </div>
                            <div class="pe-x1 col-5">
                                <div class="progress" style="height: 5px;">
                                    <div role="progressbar" class="progress-bar" aria-valuenow="38"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-relative align-items-center py-2 row">
                    <div class="py-1 col">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl me-3">
                                <div class="avatar-name rounded-circle bg-danger-subtle">
                                    <span class="fs-9 text-danger">S</span>
                                </div>
                            </div>
                            <h6 class="d-flex mb-0 align-items-center">
                                <a class="text-800 stretched-link" href="#!">Slick</a>
                                <span class="ms-2 text-primary badge rounded-pill bg-200">40%</span>
                            </h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="justify-content-end align-items-center row">
                            <div class="col-auto pe-0">
                                <div class="fs-10 fw-semibold">21:20:00</div>
                            </div>
                            <div class="pe-x1 col-5">
                                <div class="progress" style="height: 5px;">
                                    <div role="progressbar" class="progress-bar" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-body-tertiary p-0 card-footer">
                <a role="button" tabindex="0" href="/#!" class="w-100 py-2 btn btn-link btn-sm">Show all
                    projects
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs-11" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="h-100 card">
            <div class="pb-0 card-header">
                <div class="align-items-center g-2 row">
                    <div class="col">
                        <h6 class="mb-0">Total Sales</h6>
                    </div>
                    <div class="text-right col-auto">
                        <div class="d-flex">
                            <select class="me-2 form-select form-select-sm">
                                <option value="0">January</option>
                                <option value="1">February</option>
                                <option value="2">March</option>
                                <option value="3">April</option>
                                <option value="4">May</option>
                                <option value="5">June</option>
                                <option value="6">July</option>
                                <option value="7">August</option>
                                <option value="8">September</option>
                                <option value="9">October</option>
                                <option value="10">November</option>
                                <option value="11">December</option>
                            </select>
                            <div class="font-sans-serif btn-reveal-trigger dropdown">
                                <button type="button" id="react-aria4565791148-:r6:" aria-expanded="false"
                                    data-boundary="viewport"
                                    class="text-600 btn-reveal dropdown-toggle btn btn-reveal btn-sm">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="ellipsis-h" class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-11"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="echarts-for-react " _echarts_instance_="ec_1704878202879" size-sensor-id="4"
                    style="height: 18.4375rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;">
                    <div
                        style="position: relative; width: 381px; height: 295px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                        <canvas data-zr-dom-id="zr_0" width="762" height="590"
                            style="position: absolute; left: 0px; top: 0px; width: 381px; height: 295px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                    </div>
                    <div class=""
                        style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; background-color: rgb(249, 250, 253); border-width: 1px; border-radius: 4px; color: rgb(11, 23, 39); font: 14px / 21px sans-serif; padding: 7px 10px; top: 0px; left: 0px; transform: translate3d(117px, 48px, 0px); border-color: rgb(249, 250, 253); pointer-events: none; visibility: hidden; opacity: 0;">
                        January 15 : 100</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="g-3 mb-3 row">
    <div class="col-xxl-8 col-xl-7 col-lg-6">
        <div class="h-lg-100 card">
            <div class="d-flex align-items-center card-body">
                <div class="w-100">
                    <h6 class="mb-3 text-800">Using Storage
                        <strong class="text-1100">1466 MB</strong>of 2 GB
                    </h6>
                    <div class="shadow-none rounded-4 mb-3 progress" style="height: 10px;">
                        <div role="progressbar"
                            class="overflow-visible position-relative rounded-end rounded-pill border-end border-100 border-2 progress-bar bg-gradient"
                            aria-valuenow="43.82957884427032" aria-valuemin="0" aria-valuemax="100"
                            style="width: 43.83%;"></div>
                        <div role="progressbar"
                            class="overflow-visible position-relative border-end border-100 border-2 rounded-0 progress-bar bg-info"
                            aria-valuenow="18.560235063663075" aria-valuemin="0" aria-valuemax="100"
                            style="width: 18.56%;"></div>
                        <div role="progressbar"
                            class="overflow-visible position-relative border-end border-100 border-2 rounded-0 progress-bar bg-success"
                            aria-valuenow="9.40254652301665" aria-valuemin="0" aria-valuemax="100"
                            style="width: 9.403%;"></div>
                        <div role="progressbar"
                            class="overflow-visible position-relative rounded-start rounded-pill progress-bar bg-200"
                            aria-valuenow="28.207639569049952" aria-valuemin="0" aria-valuemax="100"
                            style="width: 28.208%;"></div>
                    </div>
                    <div class="fs-10 fw-semibold text-500 row">
                        <div class="d-flex align-items-center pe-2 col-sm-auto col-6">
                            <span class="dot bg-primary"></span>
                            <span>Regular</span>
                            <span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block ms-1">(895MB)</span>
                        </div>
                        <div class="d-flex align-items-center pe-2 col-sm-auto col-6">
                            <span class="dot bg-info"></span>
                            <span>System</span>
                            <span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block ms-1">(379MB)</span>
                        </div>
                        <div class="d-flex align-items-center pe-2 col-sm-auto col-6">
                            <span class="dot bg-success"></span>
                            <span>Shared</span>
                            <span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block ms-1">(192MB)</span>
                        </div>
                        <div class="d-flex align-items-center pe-2 col-sm-auto col-6">
                            <span class="dot bg-200"></span>
                            <span>Free</span>
                            <span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block ms-1">(576MB)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4 col-xl-5 col-lg-6">
        <div class="overflow-hidden undefined card">
            <div class="bg-holder p-x1 bg-card"
                style="background-image: url(&quot;/static/media/corner-1.44e8a57bc96a996cd542.png&quot;);"></div>
            <div class="position-relative card-body">
                <h5 class="text-warning">Running out of your space?</h5>
                <p class="fs-10 mb-0">Your storage will be running out soon. Get more
                    <br> space and powerful productivity features.
                </p>
                <a role="button" tabindex="0" href="/#!"
                    class="fs-10 text-warning mt-lg-3 ps-0 btn btn-link">Upgrade storage
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs-11" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="g-3 mb-3 row">
    <div class="col-xl-8 col-lg-7">
        <div class="h-lg-100 overflow-hidden card">
            <div class="p-0  card-body">
                <div class="table-responsive">
                    <table class="mb-0 fs-10 table table-borderless">
                        <thead class="bg-body-tertiary">
                            <tr>
                                <th class="text-900">Best Selling Products</th>
                                <th class="text-900 text-end">Revenue ( $3189)</th>
                                <th class="pe-x1 text-900 text-end" style="width: 8rem;">Revenue (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <img class="rounded-1 border border-200"
                                            src="data:image/png;base64,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"
                                            width="60" alt="Raven Pro">
                                        <div class="ms-3">
                                            <h6 class="mb-1 fw-semibold">
                                                <a class="text-1100 stretched-link" href="/#!">Raven Pro</a>
                                            </h6>
                                            <p class="fw-semibold mb-0 text-500">Landing</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semibold">$1311</td>
                                <td class="align-middle pe-x1">
                                    <div class="d-flex align-items-center">
                                        <div class="progress" style="width: 80px; height: 5px;">
                                            <div role="progressbar" class="progress-bar" aria-valuenow="41"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 41%;"></div>
                                        </div>
                                        <div class="fw-semibold ms-3">41%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <img class="rounded-1 border border-200"
                                            src="data:image/png;base64,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"
                                            width="60" alt="Boots4">
                                        <div class="ms-3">
                                            <h6 class="mb-1 fw-semibold">
                                                <a class="text-1100 stretched-link" href="/#!">Boots4</a>
                                            </h6>
                                            <p class="fw-semibold mb-0 text-500">Portfolio</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semibold">$860</td>
                                <td class="align-middle pe-x1">
                                    <div class="d-flex align-items-center">
                                        <div class="progress" style="width: 80px; height: 5px;">
                                            <div role="progressbar" class="progress-bar" aria-valuenow="27"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 27%;"></div>
                                        </div>
                                        <div class="fw-semibold ms-3">27%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <img class="rounded-1 border border-200"
                                            src="data:image/png;base64,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"
                                            width="60" alt="Falcon">
                                        <div class="ms-3">
                                            <h6 class="mb-1 fw-semibold">
                                                <a class="text-1100 stretched-link" href="/#!">Falcon</a>
                                            </h6>
                                            <p class="fw-semibold mb-0 text-500">Admin</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semibold">$539</td>
                                <td class="align-middle pe-x1">
                                    <div class="d-flex align-items-center">
                                        <div class="progress" style="width: 80px; height: 5px;">
                                            <div role="progressbar" class="progress-bar" aria-valuenow="17"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 17%;"></div>
                                        </div>
                                        <div class="fw-semibold ms-3">17%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <img class="rounded-1 border border-200"
                                            src="data:image/png;base64,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"
                                            width="60" alt="Slick">
                                        <div class="ms-3">
                                            <h6 class="mb-1 fw-semibold">
                                                <a class="text-1100 stretched-link" href="/#!">Slick</a>
                                            </h6>
                                            <p class="fw-semibold mb-0 text-500">Builder</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semibold">$245</td>
                                <td class="align-middle pe-x1">
                                    <div class="d-flex align-items-center">
                                        <div class="progress" style="width: 80px; height: 5px;">
                                            <div role="progressbar" class="progress-bar" aria-valuenow="8"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 8%;"></div>
                                        </div>
                                        <div class="fw-semibold ms-3">8%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="">
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <img class="rounded-1 border border-200"
                                            src="data:image/png;base64,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"
                                            width="60" alt="Reign Pro">
                                        <div class="ms-3">
                                            <h6 class="mb-1 fw-semibold">
                                                <a class="text-1100 stretched-link" href="/#!">Reign Pro</a>
                                            </h6>
                                            <p class="fw-semibold mb-0 text-500">Agency</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-end fw-semibold">$234</td>
                                <td class="align-middle pe-x1">
                                    <div class="d-flex align-items-center">
                                        <div class="progress" style="width: 80px; height: 5px;">
                                            <div role="progressbar" class="progress-bar" aria-valuenow="7"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 7%;"></div>
                                        </div>
                                        <div class="fw-semibold ms-3">7%</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bg-body-tertiary py-2 card-footer">
                <div class="flex-between-center row">
                    <div class="col-auto">
                        <select class="me-2 form-select form-select-sm">
                            <option>Last 7 days</option>
                            <option>Last Month</option>
                            <option>Last Year</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <a role="button" tabindex="0" href="/#!" class="btn btn-falcon-default btn-sm">View
                            All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5">
        <div class="h-lg-100 card">
            <div class="py-2 bg-body-tertiary card-header">
                <div class="align-items-center g-2 row">
                    <div class="col">
                        <h6 class="mb-0">Shared Files</h6>
                    </div>
                    <div class="text-right col-auto">
                        <a class="py-1 fs-10 font-sans-serif" href="/#!">View All</a>
                    </div>
                </div>
            </div>
            <div class="pb-0 card-body">
                <div class="d-flex align-items-center mb-3 hover-actions-trigger">
                    <div class="file-thumbnail">
                        <img class="h-100 w-100 fit-cover rounded-2 border"
                            src="/static/media/5.09ac6a83faf13369156d.jpg" alt="">
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1">
                            <a class="stretched-link text-900 fw-semibold" href="/#!">apple-smart-watch.png</a>
                        </h6>
                        <div class="fs-10">
                            <span class="fw-semibold">Antony</span>
                            <span class="fw-medium text-600 ms-2">Just Now</span>
                        </div>
                        <div class="hover-actions end-0 top-50 translate-middle-y">
                            <a role="button" tabindex="0" href="/static/media/5.09ac6a83faf13369156d.jpg"
                                download="" class="border-300 me-1 text-600 btn btn-tertiary btn-sm">
                                <img src="/static/media/cloud-download.2dc713edfd3b6b850828e9444f69e661.svg"
                                    alt="Download" width="15">
                            </a>
                            <button type="button" class="border-300 text-600 btn btn-tertiary btn-sm">
                                <img src="/static/media/edit-alt.e9942aace693e8a49697955478a4f74c.svg" alt="Edit"
                                    width="15">
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="text-200">
                <div class="d-flex align-items-center mb-3 hover-actions-trigger">
                    <div class="file-thumbnail">
                        <img class="h-100 w-100 fit-cover rounded-2 border"
                            src="/static/media/3.ba98a1ec4092e9f3e1e8.jpg" alt="">
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1">
                            <a class="stretched-link text-900 fw-semibold" href="/#!">iphone.jpg</a>
                        </h6>
                        <div class="fs-10">
                            <span class="fw-semibold">Antony</span>
                            <span class="fw-medium text-600 ms-2">Yesterday at 1:30 PM</span>
                        </div>
                        <div class="hover-actions end-0 top-50 translate-middle-y">
                            <a role="button" tabindex="0" href="/static/media/3.ba98a1ec4092e9f3e1e8.jpg"
                                download="" class="border-300 me-1 text-600 btn btn-tertiary btn-sm">
                                <img src="/static/media/cloud-download.2dc713edfd3b6b850828e9444f69e661.svg"
                                    alt="Download" width="15">
                            </a>
                            <button type="button" class="border-300 text-600 btn btn-tertiary btn-sm">
                                <img src="/static/media/edit-alt.e9942aace693e8a49697955478a4f74c.svg" alt="Edit"
                                    width="15">
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="text-200">
                <div class="d-flex align-items-center mb-3 hover-actions-trigger">
                    <div class="file-thumbnail">
                        <img class="h-100 w-100 fit-cover rounded-2"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAkFBMVEUAAAAse+X4+v5rou1knuzg6/uCsfBWleo6hOe50/dDiegxf+bk7vwtfOXz9/5IjenV5fqryvVbmOtfm+zJ3fm91vdooOxPken9/v/u9f2dwfNBiOjc6vva6PqZv/OOufGHtPGAsO9zqO76/P7o8fw4g+ehxPTD2fh+ru93q+5Rkuqyz/aUvfLR4/mLt/GnyfSCtHegAAAAAXRSTlMAQObYZgAAAzpJREFUeNrtm+1yojAUQO9FK1hAUVSkKiJgXT9q3//tNiTtRqG2lavJzJrzT2cYDoQjUQlcwkuGMx+vZ+bBLbBSFxuy6wGdwsbmTKb047eRwh+g0kFOv33GDj8Ztr9kiB+8Ao0nPv7hAs7p/hN4urAdfuCPgcSB79+CxgLoBkDBLg9iDs0E2g49xjUiRtBQoDNyqTHmvCWoMX9h8AtttVwuk0sCsPeJMVrIaF0ORPB8UQAOIkZ9ArAVMeoTyEMRozYBiPs8xrfbCoxsBo9sHATB4jsBmFNiFAKNMwSOiDHqaROAvbwz6hGAZSVGusDYYfAzG/QYPwlAJmLUUYHAGooYdQnIGLUJwHwtYtQhUI+RLhCPGK3PKVn2GwEYyBiVZig5ihj1CUxbIkZdAjJGbQIQP4sYyQI/T8m8r4d7IWO8X4ZywxBqbHwxTb27AMzK0Q6gxruM8b4CK2REMdRIsaRzd4GAn+v+ZgrQIEbylIxPhzmOXSXi7/vWfTKU9CL8lrsLQGFrFgDr6BIECFMySfE6iZw6blWAXsF1tIzAfyBQdBlt/qmeZVmHKEDP0Ag8oIA3YITIyFar1fIBMzQC2gU2fQaf4488xgNmaAS0XwPaKzAC2gW03w21Z2gEtAuIi1CPgKRjBB5bYNrdOsgYDnpaBLp9+bTQ+1S5gLXFUyaxYoG8hef0C7UCHRS4zw4KdpZKgY2PJe1NDlC8CIeOSgGbH/0ABLF4QiFQJzDCkn3ln6CWOoGUT4RA4rnlKegpE9ghYw4n/EFGV5nAuuwOThkjI1ElYNWfbZrzDlQJ5H6ZIJyyQEaqbAic2hB0lQ2B/Bg4y36r9iI8VN9blIPiKslQ7g9fK/9OtUGJgNzeT6bA8WwseVMoMHexxN7HkAdH8SJTejve4weuj4Kop1QAXvzKhORJ9ZxwvMYT2rH6SWksHziPxnq+F1jjtDUMt8kCQIuAxAgYASNgBIyAETACRsAIGAEjQBBottiNzgQZOWG5H5UIER3CgkcqC2TYhCWfBORPu4erFr0OA7gZAd+/68EvSSvLfomEfeSkpIXPdGyLsvSbjl0QFr/TcY8WXIeXhDMfb4I/CxMPLvAXi0c63okhC7MAAAAASUVORK5CYII="
                            alt="">
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1">
                            <a class="stretched-link text-900 fw-semibold" href="/#!">Falcon v1.8.2</a>
                        </h6>
                        <div class="fs-10">
                            <span class="fw-semibold">Jane</span>
                            <span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span>
                        </div>
                        <div class="hover-actions end-0 top-50 translate-middle-y">
                            <a role="button" tabindex="0"
                                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAkFBMVEUAAAAse+X4+v5rou1knuzg6/uCsfBWleo6hOe50/dDiegxf+bk7vwtfOXz9/5IjenV5fqryvVbmOtfm+zJ3fm91vdooOxPken9/v/u9f2dwfNBiOjc6vva6PqZv/OOufGHtPGAsO9zqO76/P7o8fw4g+ehxPTD2fh+ru93q+5Rkuqyz/aUvfLR4/mLt/GnyfSCtHegAAAAAXRSTlMAQObYZgAAAzpJREFUeNrtm+1yojAUQO9FK1hAUVSkKiJgXT9q3//tNiTtRqG2lavJzJrzT2cYDoQjUQlcwkuGMx+vZ+bBLbBSFxuy6wGdwsbmTKb047eRwh+g0kFOv33GDj8Ztr9kiB+8Ao0nPv7hAs7p/hN4urAdfuCPgcSB79+CxgLoBkDBLg9iDs0E2g49xjUiRtBQoDNyqTHmvCWoMX9h8AtttVwuk0sCsPeJMVrIaF0ORPB8UQAOIkZ9ArAVMeoTyEMRozYBiPs8xrfbCoxsBo9sHATB4jsBmFNiFAKNMwSOiDHqaROAvbwz6hGAZSVGusDYYfAzG/QYPwlAJmLUUYHAGooYdQnIGLUJwHwtYtQhUI+RLhCPGK3PKVn2GwEYyBiVZig5ihj1CUxbIkZdAjJGbQIQP4sYyQI/T8m8r4d7IWO8X4ZywxBqbHwxTb27AMzK0Q6gxruM8b4CK2REMdRIsaRzd4GAn+v+ZgrQIEbylIxPhzmOXSXi7/vWfTKU9CL8lrsLQGFrFgDr6BIECFMySfE6iZw6blWAXsF1tIzAfyBQdBlt/qmeZVmHKEDP0Ag8oIA3YITIyFar1fIBMzQC2gU2fQaf4488xgNmaAS0XwPaKzAC2gW03w21Z2gEtAuIi1CPgKRjBB5bYNrdOsgYDnpaBLp9+bTQ+1S5gLXFUyaxYoG8hef0C7UCHRS4zw4KdpZKgY2PJe1NDlC8CIeOSgGbH/0ABLF4QiFQJzDCkn3ln6CWOoGUT4RA4rnlKegpE9ghYw4n/EFGV5nAuuwOThkjI1ElYNWfbZrzDlQJ5H6ZIJyyQEaqbAic2hB0lQ2B/Bg4y36r9iI8VN9blIPiKslQ7g9fK/9OtUGJgNzeT6bA8WwseVMoMHexxN7HkAdH8SJTejve4weuj4Kop1QAXvzKhORJ9ZxwvMYT2rH6SWksHziPxnq+F1jjtDUMt8kCQIuAxAgYASNgBIyAETACRsAIGAEjQBBottiNzgQZOWG5H5UIER3CgkcqC2TYhCWfBORPu4erFr0OA7gZAd+/68EvSSvLfomEfeSkpIXPdGyLsvSbjl0QFr/TcY8WXIeXhDMfb4I/CxMPLvAXi0c63okhC7MAAAAASUVORK5CYII="
                                download="" class="border-300 me-1 text-600 btn btn-tertiary btn-sm">
                                <img src="/static/media/cloud-download.2dc713edfd3b6b850828e9444f69e661.svg"
                                    alt="Download" width="15">
                            </a>
                            <button type="button" class="border-300 text-600 btn btn-tertiary btn-sm">
                                <img src="/static/media/edit-alt.e9942aace693e8a49697955478a4f74c.svg" alt="Edit"
                                    width="15">
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="text-200">
                <div class="d-flex align-items-center mb-3 hover-actions-trigger">
                    <div class="file-thumbnail">
                        <img class="h-100 w-100 fit-cover rounded-2 border"
                            src="/static/media/2.2001c1c3eac44ebd6423.jpg" alt="">
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1">
                            <a class="stretched-link text-900 fw-semibold" href="/#!">iMac.jpg</a>
                        </h6>
                        <div class="fs-10">
                            <span class="fw-semibold">Rowen</span>
                            <span class="fw-medium text-600 ms-2">23 Sep at 6:10 PM</span>
                        </div>
                        <div class="hover-actions end-0 top-50 translate-middle-y">
                            <a role="button" tabindex="0" href="/static/media/2.2001c1c3eac44ebd6423.jpg"
                                download="" class="border-300 me-1 text-600 btn btn-tertiary btn-sm">
                                <img src="/static/media/cloud-download.2dc713edfd3b6b850828e9444f69e661.svg"
                                    alt="Download" width="15">
                            </a>
                            <button type="button" class="border-300 text-600 btn btn-tertiary btn-sm">
                                <img src="/static/media/edit-alt.e9942aace693e8a49697955478a4f74c.svg" alt="Edit"
                                    width="15">
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="text-200">
                <div class="d-flex align-items-center mb-3 hover-actions-trigger">
                    <div class="file-thumbnail">
                        <img class="h-100 w-100 fit-cover rounded-2"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAe1BMVEUAAAAse+X0+P79/v/x9v1knuy50/aAsO86hOedwfPj7fxIjejV5fpqou1vpe2nyPT5/P6ryvWvzfWItfH3+v600PY0gOba6PvK3vnn8PyRuvJWletLj+lBiOjR4vmjxvRfm+vt9P3e6vt2qe5tpO3F2/i20vaZv/JOkOm2XJUnAAAAAXRSTlMAQObYZgAAAi1JREFUeNrt28tyqkAQgOFpEEERwcP97i05ef8nTIosepGIMwxdXWX6X+vUp+Vou2j1oCFtezCs26q1Kj1Y1Emt07aAhcVqjXLAON6DQwG8gvN0UDheNyZFqwmq6RjPUWYdYS1BOr1+Ry0E2As6PMMYEKwhmD6C9TJA7NkLsukEdxngX2YvcKwAKolgKuYCoIALgAIuAAq4ACjgAqCAC4ACLgAKuAAo4AKggAuAAi4ACrgAKOACoIALgAIuAAq4ACggB9weDEI4I9EBcJhu1IyAGBBP03wyJ6AF7Kfn/Vd2AgQs/Ue3c+cEpIAKprom3/4oD1BABlApPO+dEuBGzwE9JUAl/nOBQwHAqpYJgF13fuT9nh3APlcAAhCAAAQgAAEIQAACEIAArAH53dPsnlMAcjAoJwBEJoA7AcA3AfgEgH0I2oU1AUBl1VazKnvNaygAAdSnnWanmgJwCEC7oCQA3MCgGwHgaAI4EgDeTABvBAA1pL5m6fCa11AAAlCXvWYXEsDmDNqdNwSAFAxKucfyiAAwmgBGAoDbdIFmXeO+5jUUgACYAe6uDR93zskBMcxXUQMio69/hh+jmBpwaWGuKKEGKPd6eFz9B66hAAQgAAEI4M8AMipAMh2cLV12s6+Gr4rF6372neCrj6ULj/Y5IQ6O5iuf9jkejs7P+n5oP5ab1SrH/vtlaWHLAogqSt3FZ6LeDVa/CSpym+V3+6JSmTQ0bQ+r1bfNoH7vE3jrMEBZCsOeAAAAAElFTkSuQmCC"
                            alt="">
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1">
                            <a class="stretched-link text-900 fw-semibold" href="/#!">functions.php</a>
                        </h6>
                        <div class="fs-10">
                            <span class="fw-semibold">John</span>
                            <span class="fw-medium text-600 ms-2">1 Oct at 4:30 PM</span>
                        </div>
                        <div class="hover-actions end-0 top-50 translate-middle-y">
                            <a role="button" tabindex="0"
                                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAe1BMVEUAAAAse+X0+P79/v/x9v1knuy50/aAsO86hOedwfPj7fxIjejV5fpqou1vpe2nyPT5/P6ryvWvzfWItfH3+v600PY0gOba6PvK3vnn8PyRuvJWletLj+lBiOjR4vmjxvRfm+vt9P3e6vt2qe5tpO3F2/i20vaZv/JOkOm2XJUnAAAAAXRSTlMAQObYZgAAAi1JREFUeNrt28tyqkAQgOFpEEERwcP97i05ef8nTIosepGIMwxdXWX6X+vUp+Vou2j1oCFtezCs26q1Kj1Y1Emt07aAhcVqjXLAON6DQwG8gvN0UDheNyZFqwmq6RjPUWYdYS1BOr1+Ry0E2As6PMMYEKwhmD6C9TJA7NkLsukEdxngX2YvcKwAKolgKuYCoIALgAIuAAq4ACjgAqCAC4ACLgAKuAAo4AKggAuAAi4ACrgAKOACoIALgAIuAAq4ACggB9weDEI4I9EBcJhu1IyAGBBP03wyJ6AF7Kfn/Vd2AgQs/Ue3c+cEpIAKprom3/4oD1BABlApPO+dEuBGzwE9JUAl/nOBQwHAqpYJgF13fuT9nh3APlcAAhCAAAQgAAEIQAACEIAArAH53dPsnlMAcjAoJwBEJoA7AcA3AfgEgH0I2oU1AUBl1VazKnvNaygAAdSnnWanmgJwCEC7oCQA3MCgGwHgaAI4EgDeTABvBAA1pL5m6fCa11AAAlCXvWYXEsDmDNqdNwSAFAxKucfyiAAwmgBGAoDbdIFmXeO+5jUUgACYAe6uDR93zskBMcxXUQMio69/hh+jmBpwaWGuKKEGKPd6eFz9B66hAAQgAAEI4M8AMipAMh2cLV12s6+Gr4rF6372neCrj6ULj/Y5IQ6O5iuf9jkejs7P+n5oP5ab1SrH/vtlaWHLAogqSt3FZ6LeDVa/CSpym+V3+6JSmTQ0bQ+r1bfNoH7vE3jrMEBZCsOeAAAAAElFTkSuQmCC"
                                download="" class="border-300 me-1 text-600 btn btn-tertiary btn-sm">
                                <img src="/static/media/cloud-download.2dc713edfd3b6b850828e9444f69e661.svg"
                                    alt="Download" width="15">
                            </a>
                            <button type="button" class="border-300 text-600 btn btn-tertiary btn-sm">
                                <img src="/static/media/edit-alt.e9942aace693e8a49697955478a4f74c.svg" alt="Edit"
                                    width="15">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="g-3 row">
    <div class="col-xxl-3 col-sm-6">
        <div class="h-100 card">
            <div class="py-2 bg-body-tertiary card-header">
                <div class="align-items-center g-2 row">
                    <div class="col">
                        <h6 class="mb-0">Active Users</h6>
                    </div>
                    <div class="text-right col-auto">
                        <div class="font-sans-serif btn-reveal-trigger dropdown">
                            <button type="button" id="react-aria4565791148-:r7:" aria-expanded="false"
                                data-boundary="viewport"
                                class="text-600 btn-reveal dropdown-toggle btn btn-reveal btn-sm">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h"
                                    class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-11" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2 card-body">
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-online">
                        <img class="rounded-circle " src="/static/media/1.f7d5569cf13ddcf4df82.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 fw-semibold">
                            <a class="text-900 stretched-link" href="/user/profile">Emma Watson</a>
                        </h6>
                        <p class="text-500 fs-11 mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-online">
                        <img class="rounded-circle " src="/static/media/2.20b1aba341d608286e8d.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 fw-semibold">
                            <a class="text-900 stretched-link" href="/user/profile">Antony Hopkins</a>
                        </h6>
                        <p class="text-500 fs-11 mb-0">Moderator</p>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-away">
                        <img class="rounded-circle " src="/static/media/3.b3477e97bffc3dc7e37d.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 fw-semibold">
                            <a class="text-900 stretched-link" href="/user/profile">Anna Karinina</a>
                        </h6>
                        <p class="text-500 fs-11 mb-0">Editor</p>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-offline">
                        <img class="rounded-circle " src="/static/media/4.482e0311a04c21d39072.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 fw-semibold">
                            <a class="text-900 stretched-link" href="/user/profile">John Lee</a>
                        </h6>
                        <p class="text-500 fs-11 mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-offline">
                        <img class="rounded-circle " src="/static/media/5.3fdcffd48a030bc32c64.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 fw-semibold">
                            <a class="text-900 stretched-link" href="/user/profile">Rowen Atkinson</a>
                        </h6>
                        <p class="text-500 fs-11 mb-0">Editor</p>
                    </div>
                </div>
            </div>
            <div class="bg-body-tertiary p-0 card-footer">
                <a role="button" tabindex="0" href="/social/followers" class="w-100 py-2 btn btn-link btn-sm">All
                    active users
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs-11" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="order-xxl-1 col-xxl-3 col-sm-6">
        <div class="h-100 card">
            <div class="py-2 bg-body-tertiary card-header">
                <div class="align-items-center g-2 row">
                    <div class="col">
                        <h6 class="mb-0">Bandwidth Saved</h6>
                    </div>
                    <div class="text-right col-auto">
                        <div class="font-sans-serif btn-reveal-trigger dropdown">
                            <button type="button" id="react-aria4565791148-:r8:" aria-expanded="false"
                                data-boundary="viewport"
                                class="text-600 btn-reveal dropdown-toggle btn btn-reveal btn-sm">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h"
                                    class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-11" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column align-items-between h-100 card-body">
                <div class="echarts-for-react " _echarts_instance_="ec_1704878202880" size-sensor-id="5"
                    style="height: 10.3rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                    <div
                        style="position: relative; width: 381px; height: 165px; padding: 0px; margin: 0px; border-width: 0px;">
                        <canvas data-zr-dom-id="zr_0" width="762" height="330"
                            style="position: absolute; left: 0px; top: 0px; width: 381px; height: 165px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <h6 class="fs-9 mb-1">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check"
                            class="svg-inline--fa fa-check fa-w-16 text-success me-1" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            style="transform-origin: 0.5em 0.5em;">
                            <g transform="translate(256 256)">
                                <g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)">
                                    <path fill="currentColor"
                                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                                        transform="translate(-256 -256)"></path>
                                </g>
                            </g>
                        </svg>35.75 GB saved
                    </h6>
                    <p class="fs-10 mb-0">38.44 GB total bandwidth</p>
                </div>
            </div>
            <div class="bg-body-tertiary py-2 card-footer">
                <div class="flex-between-center row">
                    <div class="col-auto">
                        <select class="me-2 form-select form-select-sm">
                            <option>Last 6 Months</option>
                            <option>Last Year</option>
                            <option>Last 2 Year</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <a class="fs-10 font-sans-serif" href="/#!">Help</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6">
        <div class="h-100 card">
            <div class="py-2 bg-body-tertiary card-header">
                <div class="align-items-center g-2 row">
                    <div class="col">
                        <h6 class="mb-0">Top Products</h6>
                    </div>
                    <div class="text-right col-auto">
                        <div class="d-flex">
                            <a role="button" tabindex="0" href="/#!" class="me-2 btn btn-link btn-sm">View
                                Details</a>
                            <div class="font-sans-serif btn-reveal-trigger dropdown">
                                <button type="button" id="react-aria4565791148-:r9:" aria-expanded="false"
                                    data-boundary="viewport"
                                    class="text-600 btn-reveal dropdown-toggle btn btn-reveal btn-sm">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="ellipsis-h" class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-11"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-100 card-body">
                <div class="echarts-for-react " _echarts_instance_="ec_1704878202881" size-sensor-id="6"
                    style="height: 100%; min-height: 17.75rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;">
                    <div
                        style="position: relative; width: 818px; height: 284px; padding: 0px; margin: 0px; border-width: 0px;">
                        <canvas data-zr-dom-id="zr_0" width="1636" height="568"
                            style="position: absolute; left: 0px; top: 0px; width: 818px; height: 284px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>
    </div>a
</div>
@endsection