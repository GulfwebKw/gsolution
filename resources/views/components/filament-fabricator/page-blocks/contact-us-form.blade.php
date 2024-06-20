@aware(['page'])
<section class="contact-page-area py-130 rpy-100 rel z-1">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6 offset-xl-3">
                @livewire(\App\Livewire\ContactUsForm::class , [
                    'fields' => $fields,
                    'subject' =>  $page->title,
                    'type' => 'Landing Page Forms',
                    'redTitle' => $redTitle,
                    'attachment_title' => $uploadFile ? $attachment_title : false,
                    'success_message' => $successMessage,
                    'buttonLabel' => $buttonLabel,
                    'title' => $title,
                ])
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Area end -->
