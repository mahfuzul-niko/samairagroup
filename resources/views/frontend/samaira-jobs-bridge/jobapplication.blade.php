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
          <div class="job-category">Graphic Design</div>
          <h1 class="job-title">Logo Design Specialist</h1>
          <p class="mb-0">Need a professional logo with writing underneath for our jewellery company</p>
        </div>

        <!-- Job Details -->
        <div class="job-details">
          <!-- Job Information Grid -->
          <div class="job-info-grid">
            <div class="job-info-item">
              <div class="job-info-label">Budget Range</div>
              <div class="job-info-value">$300 - $500</div>
            </div>
            <div class="job-info-item">
              <div class="job-info-label">Project Duration</div>
              <div class="job-info-value">5-7 days</div>
            </div>
            <div class="job-info-item">
              <div class="job-info-label">Experience Level</div>
              <div class="job-info-value">Intermediate</div>
            </div>
            <div class="job-info-item">
              <div class="job-info-label">Project Type</div>
              <div class="job-info-value">One-time Project</div>
            </div>
            <div class="job-info-item">
              <div class="job-info-label">Posted Date</div>
              <div class="job-info-value">December 15, 2024</div>
            </div>
            <div class="job-info-item">
              <div class="job-info-label">Client Location</div>
              <div class="job-info-value">United States</div>
            </div>
          </div>

          <!-- Job Description -->
          <div class="job-description">
            <h4>Project Description</h4>
            <p>We are looking for a talented graphic designer to create a professional logo for our jewellery company. The logo should be elegant, modern, and reflect the premium nature of our brand.</p>
            
            <h5 class="mt-4">Requirements:</h5>
            <ul>
              <li>Professional logo design with company name underneath</li>
              <li>Vector format (AI, EPS, SVG)</li>
              <li>High-resolution versions for print and web</li>
              <li>Color variations (full color, black & white, monochrome)</li>
              <li>Source files included</li>
            </ul>

            <h5 class="mt-4">Required Skills:</h5>
            <div class="skill-tags">
              <span class="skill-tag">Adobe Illustrator</span>
              <span class="skill-tag">Logo Design</span>
              <span class="skill-tag">Brand Identity</span>
              <span class="skill-tag">Typography</span>
              <span class="skill-tag">Vector Graphics</span>
            </div>
          </div>

          <!-- Application Form -->
          <div class="application-form">
            <h4 class="text-center mb-4">Apply for this Job</h4>
            
            <form>
              <!-- Personal Information -->
              <div class="form-section">
                <h5>Personal Information</h5>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Full Name *</label>
                    <input type="text" class="form-control" placeholder="Enter your full name" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Email Address *</label>
                    <input type="email" class="form-control" placeholder="Enter your email" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Phone Number *</label>
                    <input type="tel" class="form-control" placeholder="Enter your phone number" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Country *</label>
                    <select class="form-select" required>
                      <option value="">Select your country</option>
                      <option value="BD">Bangladesh</option>
                      <option value="US">United States</option>
                      <option value="UK">United Kingdom</option>
                      <option value="CA">Canada</option>
                      <option value="AU">Australia</option>
                      <option value="IN">India</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Professional Information -->
              <div class="form-section">
                <h5>Professional Information</h5>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Years of Experience *</label>
                    <select class="form-select" required>
                      <option value="">Select experience level</option>
                      <option value="0-1">0-1 years</option>
                      <option value="1-3">1-3 years</option>
                      <option value="3-5">3-5 years</option>
                      <option value="5+">5+ years</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Your Bid Amount (USD) *</label>
                    <input type="number" class="form-control" placeholder="Enter your bid amount" min="1" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Portfolio URL</label>
                  <input type="url" class="form-control" placeholder="https://your-portfolio.com">
                </div>
              </div>

              <!-- Project Proposal -->
              <div class="form-section">
                <h5>Project Proposal</h5>
                <div class="mb-3">
                  <label class="form-label">Why should we hire you? *</label>
                  <textarea class="form-control" rows="4" placeholder="Describe your approach to this project and why you're the best fit..." required></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label">Timeline for completion *</label>
                  <textarea class="form-control" rows="3" placeholder="How long will it take you to complete this project?" required></textarea>
                </div>
              </div>

              <!-- File Uploads -->
              <div class="form-section">
                <h5>Portfolio & Samples</h5>
                <div class="file-upload-area">
                  <div class="file-upload-icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                  </div>
                  <h6>Upload Your Portfolio</h6>
                  <p class="text-muted">Drag and drop files here or click to browse</p>
                  <input type="file" class="form-control" multiple accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.zip">
                  <small class="text-muted">Accepted formats: PDF, DOC, DOCX, JPG, PNG, ZIP (Max 10MB)</small>
                </div>
              </div>

              <!-- Terms and Conditions -->
              <div class="form-section">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="termsCheck" required>
                  <label class="form-check-label" for="termsCheck">
                    I agree to the <a href="#" class="text-primary">Terms and Conditions</a> and <a href="#" class="text-primary">Privacy Policy</a> *
                  </label>
                </div>
              </div>

              <!-- Submit Buttons -->
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-apply-job">
                  <i class="fas fa-paper-plane me-2"></i>Submit Application
                </button>
                <a href="samaira-job-bridge.html" class="btn btn-back">
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

      // Form submission
      document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show success message
        alert('Your job application has been submitted successfully! We will contact you soon.');
        
        // Reset form
        this.reset();
        uploadArea.querySelector('p').textContent = 'Drag and drop files here or click to browse';
      });
    });
  </script>
</body>

</html> 