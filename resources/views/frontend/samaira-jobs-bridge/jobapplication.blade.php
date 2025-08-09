<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now - Samaira Jobs Bridge</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-jobs/logo.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-jobs.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/samaira-main.css">

</head>

<body>

    <!-- Top Header Section Start -->
    <x-layouts.header />
    <!-- Top Header Section End -->

    <!-- Navbar Start -->
    <x-layouts.navbar>

        <x-slot name="nav">

        </x-slot>
    </x-layouts.navbar>
    <!-- Navbar End -->

    <!-- Job Application Section Start -->
    <section class="job-application-section">
        <div class="container">
            <div class="job-application-card">
                <!-- Job Header -->
                <div class="job-header">

                    <h1 class="job-title">{{ $work->title }}</h1>
                    <p class="mb-0">{{ $work->subtitle }}</p>
                </div>

                <!-- Job Details -->
                <div class="job-details">


                    <!-- Job Description -->
                    <div class="job-description">
                        <h4>Application Deadline : {{ \Carbon\Carbon::parse($work->deadline)->format('d M Y') }}</h4>
                    </div>
                    <div class="job-description">
                        <h4>Work Description</h4>
                        {!! $work->discription !!}
                    </div>

                    <!-- Application Form -->
                    <div class="application-form">
                        <h4 class="text-center mb-4">Apply for this Job</h4>

                        <form action="{{ route('job.store.apply') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="job_work_id" value="{{ $work->id }}">
                            <!-- Personal Information -->
                            <div class="form-section">
                                <h5>Personal Information</h5>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Full Name *</label>
                                        <input type="text" class="form-control" placeholder="Enter your full name"
                                            name="name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Phone Number *</label>
                                        <input type="tel" class="form-control" placeholder="Enter your phone number"
                                            name="number" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email Address *</label>
                                        <input type="email" class="form-control" placeholder="Enter your email"
                                            name="email" required>
                                    </div>
                                </div>
                            </div>
                            <!-- File Uploads -->
                            <div class="form-section">
                                <h5>CV & Samples</h5>
                                <div class="file-upload-area">
                                    <div class="file-upload-icon">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                    </div>
                                    <h6>Upload Your CV</h6>
                                    <p class="text-muted">Drag and drop files here or click to browse</p>
                                    <input type="file" class="form-control" name="file"
                                        accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.zip">
                                    <small class="text-muted">Accepted formats: PDF, DOC, DOCX, JPG, PNG, ZIP (Max
                                        10MB)</small>
                                </div>
                            </div>

                            <!-- Submit Buttons -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-apply-job">
                                    <i class="fas fa-paper-plane me-2"></i>Submit Application
                                </button>
                                <a href="{{ route('page.job') }}" class="btn btn-back">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Jobs
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Job Application Section End -->

    <!-- Custom Footer Section Start -->
    <x-layouts.footer />
    <!-- Custom Footer Section End -->

    <!-- jQuery -->
    <script src="{{ asset('assets/frontassets/') }}/js/jquery-3.7.1.min.js"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/bootstrap.bundle.min.js"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/popper.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/samaira-new-index.js"></script>

    <script>
        // File upload functionality
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.querySelector('input[type="file"]');
            const uploadArea = document.querySelector('.file-upload-area');

            // Drag and drop functionality
            uploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                uploadArea.style.background = '#e3f2fd';
                uploadArea.style.borderColor = '#764ba2';
            });

            uploadArea.addEventListener('dragleave', function(e) {
                e.preventDefault();
                uploadArea.style.background = '#f8f9fa';
                uploadArea.style.borderColor = '#667eea';
            });

            uploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                uploadArea.style.background = '#f8f9fa';
                uploadArea.style.borderColor = '#667eea';

                const files = e.dataTransfer.files;
                fileInput.files = files;

                // Show selected files
                if (files.length > 0) {
                    const fileList = Array.from(files).map(file => file.name).join(', ');
                    uploadArea.querySelector('p').textContent = `Selected: ${fileList}`;
                }
            });

            // File input change
            fileInput.addEventListener('change', function() {
                if (this.files.length > 0) {
                    const fileList = Array.from(this.files).map(file => file.name).join(', ');
                    uploadArea.querySelector('p').textContent = `Selected: ${fileList}`;
                }
            });

        });
    </script>
</body>

</html>
