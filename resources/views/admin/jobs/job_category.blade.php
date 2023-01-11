@extends('admin/layouts/dashboard')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid pt-7">
        <div class="d-flex flex-wrap flex-column-fluid">
            <div class="container-fluid">
                <div class="d-flex flex-column ">
                    <div wire:id="58kM4BGCH9lzo0UNdGfu" id="datatable-58kM4BGCH9lzo0UNdGfu">
                        <div>
                        </div>
                        <div wire:offline.class.remove="d-none" class="d-none">
                            <div class="alert alert-danger d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" style="width:1.3em;height:1.3em;" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>

                                <span class="d-inline-block ml-2">You are not connected to the internet.</span>
                            </div>
                        </div>

                        <div class="d-flex flex-column">
                            <div>
                            </div>
                            <div>
                            </div>
                            <div class="d-md-flex justify-content-between mb-3 livewire-search-box">
                                <div class="d-md-flex">

                                    <div class="mb-3 mb-sm-0">
                                        <form class="d-flex position-relative">
                                            <div class="position-relative d-flex width-320">
                                                <span
                                                    class="position-absolute d-flex align-items-center top-0 bottom-0 left-0 text-gray-600 ms-3">
                                                    <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="magnifying-glass"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z">
                                                        </path>
                                                    </svg>
                                                    <!-- <i class="fa-solid fa-magnifying-glass"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <input class="form-control search-box ps-8" wire:model="table.search"
                                                    type="search" placeholder="Search" aria-label="Search">
                                            </div>
                                        </form>
                                    </div>


                                </div>

                                <div class="d-md-flex">


                                    {{-- <div class="ms-0 ms-md-2">
                                        <div class="dropdown d-flex align-items-center me-4 me-md-5">
                                            <button
                                                class="btn btn btn-icon btn-primary text-white dropdown-toggle hide-arrow ps-2 pe-0"
                                                type="button" id="dropdownMenuButton1" data-bs-auto-close="outside"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg class="svg-inline--fa fa-filter" aria-hidden="true" focusable="false"
                                                    data-prefix="fas" data-icon="filter" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M3.853 54.87C10.47 40.9 24.54 32 40 32H472C487.5 32 501.5 40.9 508.1 54.87C514.8 68.84 512.7 85.37 502.1 97.33L320 320.9V448C320 460.1 313.2 471.2 302.3 476.6C291.5 482 278.5 480.9 268.8 473.6L204.8 425.6C196.7 419.6 192 410.1 192 400V320.9L9.042 97.33C-.745 85.37-2.765 68.84 3.854 54.87L3.853 54.87z">
                                                    </path>
                                                </svg><!-- <i class="fas fa-filter"></i> Font Awesome fontawesome.com -->
                                            </button>
                                            <div class="dropdown-menu py-0" aria-labelledby="dropdownMenuButton1">
                                                <div class="text-start border-bottom py-4 px-7">
                                                    <h3 class="text-gray-900 mb-0">Filter Options</h3>
                                                </div>
                                                <div class="p-5">
                                                    <div class="mb-5" wire:key="table-filter-featured_job">
                                                        <label class="form-label" for="table-filter-featured_job">
                                                            Featured Job:
                                                        </label>
                                                        <select wire:model.stop="table.filters.featured_job"
                                                            wire:key="table-filter-featured_job"
                                                            id="table-filter-featured_job"
                                                            class="form-select form-select-solid">
                                                            <option value="">Select Featured Company</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>

                                                    </div>
                                                    <div class="mb-5" wire:key="table-filter-suspended_job">
                                                        <label class="form-label" for="table-filter-suspended_job">
                                                            Suspended Job:
                                                        </label>
                                                        <select wire:model.stop="table.filters.suspended_job"
                                                            wire:key="table-filter-suspended_job"
                                                            id="table-filter-suspended_job"
                                                            class="form-select form-select-solid">
                                                            <option value="">All</option>
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>

                                                    </div>
                                                    <div class="mb-5" wire:key="table-filter-freelancer_job">
                                                        <label class="form-label" for="table-filter-freelancer_job">
                                                            Freelancer Job:
                                                        </label>
                                                        <select wire:model.stop="table.filters.freelancer_job"
                                                            wire:key="table-filter-freelancer_job"
                                                            id="table-filter-freelancer_job"
                                                            class="form-select form-select-solid">
                                                            <option value="">All</option>
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>

                                                    </div>
                                                    <div class="mb-5" wire:key="table-filter-job_status">
                                                        <label class="form-label" for="table-filter-job_status">
                                                            Job Status:
                                                        </label>
                                                        <select wire:model.stop="table.filters.job_status"
                                                            wire:key="table-filter-job_status"
                                                            id="table-filter-job_status"
                                                            class="form-select form-select-solid">
                                                            <option value="">All</option>
                                                            <option value="active">Active</option>
                                                            <option value="expire">Expire</option>
                                                        </select>

                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button class="btn btn-secondary"
                                                            wire:click.prevent="setFilterDefaults"
                                                            x-on:click="open = false">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div  class="menu-item" >
                                        <a href="{{route('admin.jobs.category.create')}}" class="btn btn-primary">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="">
                                    <tr>
                                        <th scope="col" class="" style="width:20%"
                                            wire:key="header-col-0-58kM4BGCH9lzo0UNdGfu">
                                            <div class="d-flex align-items-center" wire:click="sortBy('job_title')"
                                                style="cursor:pointer;">
                                                <span>Name</span>

                                                <span class="relative d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1"
                                                        style="width:1em;height:1em;" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </th>
                                        
                                        <th scope="col" class="text-center"
                                            wire:key="header-col-5-58kM4BGCH9lzo0UNdGfu">
                                            Description
                                        </th>

                                        <th scope="col" class="text-center"
                                            wire:key="header-col-1-58kM4BGCH9lzo0UNdGfu">
                                            Is Featured
                                        </th>

                                        

                                        <th scope="col" class="text-center"
                                            wire:key="header-col-3-58kM4BGCH9lzo0UNdGfu">
                                            <div class="d-flex align-items-center" wire:click="sortBy('created_at')"
                                                style="cursor:pointer;">
                                                <span>Created On</span>

                                                <span class="relative d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1"
                                                        style="width:1em;height:1em;" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </th>

                                        

                                        <th scope="col" class="text-center"
                                            wire:key="header-col-5-58kM4BGCH9lzo0UNdGfu">
                                            Last Changes By
                                        </th>

                                        <th scope="col" class="text-center"
                                            wire:key="header-col-6-58kM4BGCH9lzo0UNdGfu">
                                            Action
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="">
                                    <tr wire:loading.class.delay="" class=""
                                        wire:key="row-0-58kM4BGCH9lzo0UNdGfu">
                                        <td class="" wire:key="cell-0-0-58kM4BGCH9lzo0UNdGfu">
                                            <a class="cursor-pointer text-decoration-none"
                                                href="http://127.0.0.1:8080/admin/jobs/1">
                                                bal
                                            </a>
                                        </td>
                                        <td class="" wire:key="cell-0-5-58kM4BGCH9lzo0UNdGfu">
                                            <span class="badge bg-secondary">Thsi is about it is</span>
                                        </td>

                                         <td class="" wire:key="cell-0-2-58kM4BGCH9lzo0UNdGfu">
                                            <div class="d-flex justify-content-center">
                                                <label
                                                    class="form-check form-switch form-switch-sm justify-content-center">
                                                    <input type="checkbox" name="Is Suspended"
                                                        class="form-check-input isSuspended" data-id="1">
                                                </label>
                                            </div>
                                        </td>

                                        

                                        <td class="" wire:key="cell-0-3-58kM4BGCH9lzo0UNdGfu">
                                            <div class="d-flex">
                                                <span class="badge bg-secondary">
                                                    9th Jan, 2023
                                                </span>
                                            </div>
                                        </td>

                                        <td class="" wire:key="cell-0-4-58kM4BGCH9lzo0UNdGfu">
                                            <div class="d-flex">
                                                <span class="badge bg-light-danger">
                                                    11th Jan, 2023
                                                </span>
                                            </div>
                                        </td>

                                        <td class="text-center" width="15%" wire:key="cell-0-6-58kM4BGCH9lzo0UNdGfu">
                                            <div class="d-flex justify-content-center">
                                                <a href="http://127.0.0.1:8080/admin/jobs/1/edit" title="Edit"
                                                    class="btn px-2 text-primary fs-3 ps-0 edit-btn"
                                                    data-bs-toggle="tooltip">
                                                    <svg class="svg-inline--fa fa-pen-to-square" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="pen-to-square"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z">
                                                        </path>
                                                    </svg>
                                                    <!-- <i class="fa-solid fa-pen-to-square"></i> Font Awesome fontawesome.com -->
                                                </a>
                                                <button type="button" title="Delete" data-id="1"
                                                    class="delete-btn btn px-2 text-danger fs-3 pe-0" id="deleteUser"
                                                    data-bs-toggle="tooltip">
                                                    <svg class="svg-inline--fa fa-trash" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="trash"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                                                        </path>
                                                    </svg>
                                                    <!-- <i class="fa-solid fa-trash"></i> Font Awesome fontawesome.com -->
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                   
                                </tbody>

                            </table>
                        </div>

                        {{-- <div class="d-flex align-items-center flex-xxl-row flex-column mb-5 mt-3">
                            <div
                                class="mb-xxl-0 mb-xl-5 mb-3 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-3 text-gray-600 fs-4 fs-xl-6">Show</span>
                                <select wire:model="perPage" id="perPage"
                                    class="form-select w-auto data-sorting pl-1 pr-5 py-2 border-0">
                                    <option value="10" wire:key="per-page-10-table">10</option>
                                    <option value="25" wire:key="per-page-25-table">25</option>
                                    <option value="50" wire:key="per-page-50-table">50</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12 ms-3 text-gray-600 fs-4">
                                    Showing <strong>2</strong>
                                    results </div>
                            </div>
                        </div> --}}
                    </div>

                    <!-- Livewire Component wire-end:58kM4BGCH9lzo0UNdGfu -->
                </div>
            </div>
        </div>
    </div>
    

@endsection
