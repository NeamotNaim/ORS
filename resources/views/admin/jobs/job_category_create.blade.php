@extends('admin/layouts/dashboard')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid pt-7">
        <div class="d-flex flex-wrap flex-column-fluid">
            <div class="container-fluid">
                <div class="d-flex flex-column ">
                   <div id="addJobCategoryModal" class="" aria-hidden="true">

     <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add New Category</h3>
                <a href="/admin/jobs/category"  aria-label="Close" class="btn-close"
                        >
                </a>
            </div>
            <form action="{{route('admin.job.category.store')}}" method="POST">
                @csrf
            <div class="modal-body">
                <div class="alert alert-danger d-none" id="jobCategoryValidationErrorsBox"></div>
                <div class="mb-5">
                    Category name
                    <span class="required"></span>
                </div>
                <div class="mb-4">
                    <input type="text" name="category_name" class="form-input form-control"
                   id="salary">
                </div>
                <div class="mb-5 h-100">
                    Category Description
                    <span class="required"></span>
                </div>
                <div class="mb-4">
                    <textarea type="textarea" name="description" class="form-input form-control"
                   id="description"></textarea>
                </div>
                {{-- <div class="col-xl-6 col-md-6 col-sm-12 mb-5" io-image-input="true">
                    <label for="category_image" class="form-label">
                        {{__('messages.common.category_image').':'}}
                        <span data-bs-toggle="tooltip"
                              data-placement="top"
                              data-bs-original-title="">
                                <i class="fas fa-question-circle ml-1  general-question-mark"></i>
                        </span>
                    </label>
                    <div class="d-block">
                        <div class="image-picker">
                            <div class="image previewImage" id="logoPreview"
                                 style="background-image: url({{ asset('front_web/images/job-categories.png') }})">
                            </div>
                            <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                                  data-placement="top" data-bs-original-title="">
                    <label>
                        <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                        
                    </label>
                </span>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="modal-footer pt-0">
                
                    <button type="submit" id="" class="btn btn-secondary my-0 ms-5 me-0"
                    >Submit</button>
         </div></form>
            
        </div>
    </div>
</div>

                    <!-- Livewire Component wire-end:58kM4BGCH9lzo0UNdGfu -->
                </div>
            </div>
        </div>
    </div>
    

@endsection
