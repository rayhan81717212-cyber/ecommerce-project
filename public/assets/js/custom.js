
$(document).ready(function () {
    const steps = $(".step-content");
    const navLinks = $(".nav-pills .nav-link");
    let currentStep = 0;

    function showStep(index) {
        steps.addClass("d-none");
        steps.eq(index).removeClass("d-none");

        navLinks.removeClass("active");
        navLinks.eq(index).addClass("active");
    }

    $(".next-step").click(function () {
        const current = steps.eq(currentStep);
        const inputs = current.find("input, select, textarea");
        let valid = true;

        // Validate required fields
        inputs.each(function () {
            if (!this.checkValidity()) {
                this.reportValidity();
                valid = false;
                return false;
            }
        });

        if (!valid) return;

        // Mark done and go next
        current.find(".step-done").removeClass("d-none");
        navLinks.eq(currentStep).find(".step-done").removeClass("d-none");

        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    });

    $(".prev-step").click(function () {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    });

    // Allow clicking on nav link (optional)
    navLinks.click(function (e) {
        e.preventDefault();
        const index = $(this).parent().index();
        if (index <= currentStep) {
            currentStep = index;
            showStep(currentStep);
        }
    });

    // Initial
    showStep(currentStep);
});


  // Turn all file input elements into ponds
    // Plugin register
    FilePond.registerPlugin(FilePondPluginImagePreview);

    FilePond.create(document.querySelector('.filepond'), {
        allowMultiple: false,
        acceptedFileTypes: ['image/*'],
        labelIdle: `
            <div style="font-size:14px; color:#555;">
                <strong>Drag & Drop</strong> your photo or <span class="filepond--label-action">Browse</span>
            </div>`,
        imagePreviewHeight: 250, 
        styleLoadIndicatorPosition: 'center bottom',
        styleProgressIndicatorPosition: 'center bottom',
        styleButtonRemoveItemPosition: 'right top',
        styleButtonProcessItemPosition: 'right bottom',
        storeAsFile: true,
    });