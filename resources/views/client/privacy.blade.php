@extends('layouts.app',['title'=>'Privacy Policy'])
@section('content')
<div class="section">
    <div
        class="hero page-inner overlay"
        style="background-image: url('/storage/client/images/hero_bg_1.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Privacy Policy</h1>

                    <nav
                        aria-label="breadcrumb"
                        data-aos="fade-up"
                        data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li
                                class="breadcrumb-item active text-white-50"
                                aria-current="page">
                                Privacy Policy
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mb-2">Privacy Policy</h2>
                <p>
                    This Privacy Policy describes how your personal information is collected, used, and shared when you visit or make a purchase from our website.
                </p>
                <h3 class="mb-2">Personal Information We Collect</h3>
                <p>When you visit our website, we automatically collect certain information about your device, including information about your web browser, IP address, time zone, and some of the cookies that are installed on your device. Additionally, as you browse our website, we collect information about the individual web pages or products that you view, what websites or search terms referred you to our website, and information about how you interact with our website. We refer to this automatically-collected information as “Device Information”.
                </p>
                <p>We collect Device Information using the following technologies:</p>
                <ul>
                    <li>Cookies are small text files that are placed on your computer, mobile device or other device when you visit a website, containing information about your preferences.</li>
                    <li>Web beacons, tags, and pixels are electronic files used to record information about how you navigate and interact with our website, and to monitor website traffic.</li>
                </ul>
                <p>
                    Additionally, when you book visits or attempt to list property through the website, we collect certain information from you, including your name, email address and phone number. We refer to this information as “Authentication Information”.
                </p>
                <h3 class="mb-2">How Do We Use Your Personal Information?</h3>
                <p>We use the Device Information that we collect to help us screen for potential risk and fraud (in particular, your IP address), and more generally to improve and optimize our website (for example, by generating analytics about how our customers browse and interact with the website, and to assess the success of our marketing and advertising campaigns).</p>
                <p>
                    We use the Authentication Information that we collect only to fulfill your request for booking or listing property. We do not share this information with third parties, except as necessary to provide the services you have requested.
                </p>
                <h3 class="mb-2">Sharing Your Personal Information</h3>
                <p>We share your Personal Information with third parties to help us use your Personal Information, as described above. We use Google Analytics to help us understand how our customers use the site--you can read more about how Google uses your Personal Information here: https://policies.google.com/privacy?hl=en. You can also opt-out of Google Analytics here: https://tools.google.com/dlpage/gaoptout.</p>
                <p>Finally, we may also share your Personal Information to comply with applicable laws and regulations, to respond to a subpoena, search warrant or other lawful request for information we receive, or to otherwise protect our rights.</p>
                <h3 class="mb-2">Do Not Sell My Personal Information</h3>
                <p>We do not sell your Personal Information.</p>
                <h3 class="mb-2">Your Rights</h3>
                <!-- Kenyan rights -->
                <p>
                    Under the Kenya Data Privacy Act, you have the following rights regarding your Personal Data:
                </p>
                <ol>
                    <li><b>Right to Be Informed:</b> The right to be clearly informed about the processing of your Personal Data (which this Policy serves to do).</li>
                    <li><b>Right of Access:</b> The right to request and receive a copy of the Personal Data we hold about you.</li>
                    <li><b>Right to Rectification:</b> The right to request the correction of any incomplete or inaccurate data we hold about you.</li>
                    <li><b>Right to Object/Restrict:</b> The right to object to the processing of your Personal Data, including for direct marketing purposes.</li>
                    <li><b>Right to Erasure (Deletion):</b> The right to request the deletion of your Personal Data where there is no lawful reason for us to continue processing it (subject to legal retention requirements).</li>
                    <li><b>Right to Data Portability:</b> The right to request your Personal Data in a structured, commonly used, and machine-readable format.</li>
                    <li><b>Right to Withdraw Consent:</b> The right to withdraw your consent to processing at any time, which will not affect the lawfulness of processing carried out before the withdrawal.</li>
                    <li><b>Right to Complain:</b> The right to lodge a complaint with the Data Protection Authority if you believe your rights have been violated.</li>
                </ol>
                <p>To exercise any of these rights, please contact us at the Privacy Email provided in Section 1. We will respond to your request within the period prescribed by the Data Privacy Act.
                </p>
                <!-- European -->
                <p>If you are a European resident, you have the right to access personal information we hold about you and to ask that your personal information be corrected, updated, or deleted. If you would like to exercise this right, please contact us through the contact information below.</p>
                <p>Additionally, if you are a European resident we note that we are processing your information in order to fulfill contracts we might have with you (for example if you make an order through the Site), or otherwise to pursue our legitimate business interests listed above. Additionally, please note that your information will be transferred outside of Europe, including to Canada and the United States.</p>
                <h3 class="mb-2">Data Retention</h3>
                <p>When you place an order through the Site, we will maintain your Order Information for our records unless and until you ask us to delete this information.</p>
                <h3 class="mb-2">Changes to this Policy</h3>
                <p>We reserve the right to amend this Policy at any time. We will notify you of any material changes via email or through the App before the changes take effect. Your continued use of the website after the effective date of the revised Policy constitutes your acceptance of the new terms.</p>
                <h3 class="mb-2">Contact Us</h3>
                <p>If you would like to access, review, update or delete any personal information we hold about you, please contact us at <a href="mailto:info@urbanlink.co.ke">info@urbanlink.co.ke</a>.</p>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
    });
</script>
@endsection