<?php

/**
 * Template name: Mobile App Page(hard coded content)
 */
get_header();
$googleAppLink = get_field('google_play_app_link', 'option');
$iosAppLink = get_field('ios_app_store_link', 'option');
?>
<main class="simple-inner-page-main mobile-app">
    <header class="single-page-header page-padding-x">
        <h2 class="heading w-fit-content animated fadeInUp p-0">PRIVACY POLICY <span class="heading yellow-bg">MOBILE APP</span></h2>
        <p class="description animated fadeInUp" data-delay="200"><?= the_field('header_description'); ?></p>
    </header>
    <div class="content-wrapper">
        <header>
            <h2>This information is yours. Here is how it will be used and how you can access it.</h2>
            <h4>Privacy Statement</h4>
            <p>You can use the Europe House App without a user account to access the basic services, such as searching for and accessing information. In this case, the Europe House App will not store any personal data, which you provide as a user of the application.
            <p> But if you create a user account, in addition to the basic services you will also be able to synchronise your devices, save your preferences, rate initiatives, book events and put questions to Europe House. In this case, Europe House App may process your personal data.</p>
            <p>This Privacy Statement sets out the ways in which personal data is used and your rights as a data subject.</p>
            <div class="side-wrapper">
                <ul>
                    <li class="animated fadeInRight" data-delay="200">
                        <a href="" class="img-wrapper">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/google-play.png" alt="Google Play Store" class="full-size-img full-size-img-contain">
                        </a>
                    </li>
                    <li class="animated fadeInRight" data-delay="400">
                        <a href="" class="img-wrapper">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/app-store.png" alt="App Store" class="full-size-img full-size-img-contain">
                        </a>
                    </li>
                </ul>
                <div class="main-img animated fadeInDown" data-delay="200">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/mob-app-img.png" alt="Mobile app image" class="full-size-img">
                </div>
            </div>
        </header>

        <div class="content">
            <h3>Why does the App use personal data?</h3>
            <h4>User account</h4>
            <p>To be able to synchronise your data across several devices and to rate initiatives, book events and put questions to Europe House you need to create an account.
                The account data is classified as personal only if it can be used to identify you.</p>
            <p><strong>There are two ways to create a user account:</strong></p>
            <ul>
                <li>by entering your email address and creating a password,</li>
                <li>or by using your Google, Facebook or Apple ID login details.</li>
            </ul>
            <p>
                If you choose to create a Europe House App account with an email address, the application will use the email address provided to identify your user account. </p>
            <p>


                If you choose to create a Europe House App account using your Google, Facebook or Apple ID login details, the application will send a connection request to your account asking it to link the Europe House App and will collect the email address, name and photo from the associated account. In that case, Google, Facebook or Apple may collect data concerning the connection to your Europe House App account. The connection to the Europe House App account will remain active for 30 days. We recommend that you first read your Google, Facebook or Apple’s privacy policy.

            </p>
            <p>
                The Europe House App uses this data solely to be able to identify you when you log on to the application. Your data will not be passed on to third parties under any circumstances.
                In the settings of the Europe House App account, you can choose whether you want to provide your name.
            </p>
            <div class="boxed-content">
                <div class="col">
                    <h3 class="heading">How long do we retain your personal data?</h3>
                    <p>
                        If your account is inactive for more than a year it will automatically be deleted from our databases.
                        Data relating to questions you have sent to the Europe House office is kept for 90 days and then deleted.
                    </p>
                    <p> All users can view, modify or delete their personal information in the application at any time. Only the email address cannot be changed, as it is this, which links an account to a user.</p>
                </div>
                <div class="col">
                    <h3 class="heading">Who receives your personal data?</h3>
                    <p><strong>The following entities may receive personal data relating to the services provided:</strong></p>
                    <ul>
                        <li>
                            Operating systems (Google, Apple), including when downloading and installing the application associated with the user account of the operating system,
                        </li>
                        <li>
                            Google, Facebook and Apple, if the Europe House App account is created via a Google, Facebook or Apple ID account,
                        </li>
                        <li>Email providers where the Europe House App account is created using an email address,
                        </li>
                        <li>
                            Social media platforms or networks which you select to share content,
                        </li>
                        <li>
                            Authorised Europe House and Delegation of the European Union to the Republic of North Macedonia staff responsible for development, maintenance and support in connection with the Europe House App,
                        </li>
                        <li> The Europe House email submission platform when you submit a question to the Europe House via the dedicated form in the Europe House App.</li>
                    </ul>
                </div>
            </div>
            <div class="inner-container animated fadeInUp">
                <h3 class="heading w-100">What rights do you have concerning your data?</h3>
                <h5 class="w-100">In accordance with Regulation (EU) 2018/1725 (hereinafter: ‘the Regulation’), you can contact the data controller to exercise your rights:</h5>
                <p>To be fully and clearly informed about the processing before it is carried out (Articles 15 and 16 of the Regulation).
                </p>
                <p>To require any data which concerns you to be deleted, or the processing thereof to be restricted, under the conditions laid down in the Regulation (Articles 19 and 20 of the Regulation),</p>
                <p>To object at any time to the processing of data concerning you on grounds relating to your particular situation, under the conditions set out in the Regulation (Article 23 of the Regulation), </p>
                <p>To access your data (Article 17 of the Regulation),</p>
                <p>To receive data concerning you and have that data transmitted to another controller (Article 22 of the Regulation),</p>
                <p>To withdraw at any time your consent to the processing of your personal data presented in this document (Article 7 of the Regulation). Note that the withdrawal of consent shall not affect the lawfulness of processing based on consent before its withdrawal.</p>
                <p>To request the rectification of any data which concerns you that is inaccurate or, taking into account the purposes of the processing, incomplete (Article 18 of the Regulation),</p>
            </div>
            <div class="boxed-listing">
                <div class="single-listing">
                    <h3 class="heading">Location services</h3>
                    <p>The Europe House App provides information about EU initiatives, youth events and activities taking place in any Europe House location in Republic of North Macedonia.</p>
                </div>
                <div class="single-listing">
                    <h3 class="heading">Calendar</h3>
                    <p>You can add events published in the application to your device’s calendar app.</p>
                    <p> To do this you need to allow the Europe House App to access your calendar. Data relating to the event (e.g. the date, place and subject) will be used solely for importing the event into your calendar. We do not subsequently store this data. <br>
                        You can manage permissions to access your calendar at any time in your device’s privacy settings. <br>
                        We recommend that you first read the privacy policy for your Calendar application.</p>
                </div>
                <div class="single-listing">
                    <h3 class="heading">Embedded content from other services</h3>
                    <p>The Europe House App is a space created to raise awareness of the many initiatives EU undertakes, including the youth sector and their ambition to discuss, debate, propose new ideas and challenges, educate and learn within the Europe House premises. As such, the content may include elements which are external to the application, such as websites, videos, podcasts, etc. <br>
                        Although presented in the Europe House App, these external elements are independent and operate autonomously.
                        They may collect data about you, use cookies, embed additional third-party tracking and monitor your interaction with that embedded content. We recommend that you first read their privacy policies.</p>
                </div>
                <div class="single-listing">
                    <h3 class="heading">Sharing Europe House App content on other social media platforms and networks</h3>
                    <p>You can share a link to content in the Europe House App (events or initiatives) on other social media platforms or networks. <br>
                        This functionality can be accessed directly from the content pages. Simply select the social media platform or network on which you want to share the content, as well as the recipient, where applicable. <br>
                        Although presented in the Europe House App, these external elements are independent and operate autonomously. <br>
                        We recommend that you first read the privacy policies of the social media platforms or networks you wish to use.</p>
                </div>
                <div class="single-listing">
                    <h3 class="heading">Europe House’s enquiries</h3>
                    <p>You can send questions to the Europe House office via a dedicated form or an email in the Europe House App. Your questions will be registered and sent to Europe House office for an answer.
                    </p>
                    <p>
                        In this procedure the Europe House App collects and transmits data relating to your questions. We recommend that you first read the European <a href="#">Parliament’s Privacy Statement</a>.
                    </p>
                </div>
                <div class="single-listing">
                    <h3 class="heading">Application web page</h3>
                    <p>A <a href="#">dedicated web page</a> tells you all about Europe House App and includes links to download it from various platforms.
                    </p>
                    <p>
                        This page on the Europe House website may use cookies to provide visitors with an optimal browsing experience. You will first see a message asking for permission to use cookies. We recommend that you first read the European Parliament’s policy on the use of cookies at the following address: <a href="https://www.europarl.europa.eu/portal/en/cookie-policy">https://www.europarl.europa.eu/portal/en/cookie-policy</a>.</p>
                </div>
                <div class="single-listing">
                    <h3 class="heading">Analytics</h3>
                    <p>No statistical tools are used for processing personal data.</p>
                </div>
                <div class="single-listing">
                    <h3 class="heading">Further information</h3>
                    <h4>How do we protect your data?</h4>
                    <p>We are constantly working to ensure that your personal data receives the highest level of security by keeping the application up to date.</p>
                </div>
                <div class="single-listing">
                    <h4>Use of third-party services</h4>
                    <p>The Europe House App also uses certain third-party services which require your permission. First, when you download the application from an app store (Apple or Google), you are asked to consent to its privacy policy.
                        When using the Europe House App, you can decide whether to turn on notifications and whether to use location-based services and your device’s calendar. Note that in your device’s privacy settings you can, at any time, give or withdraw permission for the Citizens’ App to use these services. You can also create Europe House App account using your Facebook login details, in which case Facebook will ask you to accept its privacy policy.


                    </p>
                    <p><strong>We recommend that you first read these services’ privacy policies:</strong></p>
                    <ul>
                        <li>
                            <a href="https://policies.google.com/privacy?hl=enfor">
                                https://policies.google.com/privacy?hl=enfor Google services,
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/legal/privacy/for">
                                https://www.apple.com/legal/privacy/for Apple services,
                            </a>
                        </li>
                        <li>
                            <a href="https://en-gb.facebook.com/privacy/explanationfor">https://en-gb.facebook.com/privacy/explanationfor Facebook services. </a>

                        </li>
                    </ul>
                    <p>We may update our Privacy Policy from time to time. Thus, you are advised to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page.

                    </p>
                    <p>This policy is effective as of 01.09.2020.</p>
                </div>
                <div class="single-listing">
                    <h4>Legal basis for the processing of personal data</h4>
                    <p>
                        The Delegation of the European Union to the Republic of North Macedonia and Europe House are responsible for this processing of personal data. The body responsible for this processing on behalf of the European Parliament is the Delegation of the European Union to the Republic of North Macedonia.
                    </p>
                    <p>
                        You can contact this body at: <a href="mailto:euinfo@euhouse.mk">euinfo@euhouse.mk</a>
                    </p>
                    <p>
                        Right to lodge a complaint with a supervisory authority
                    </p>
                    <p>
                        You have the right to have recourse at any time to the European Parliament’s Data Protection Officer ( <a href="mailto:data-protection@ep.europa.eu">data-protection@ep.europa.eu</a> ) and the European Data Protection Supervisor ( <a href="mailto:edps@edps.europa.eu">edps@edps.europa.eu</a> ).
                    </p>
                </div>
            </div>
            <div class="bottom-decoration">
                <div class="left-side animated fadeInLeft">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/stars-white-bg.svg" alt="Decoration">
                </div>
                <div class="right-side animated fadeInRight">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/stripes-deco.svg" alt="Decoration">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/triangles-deco.svg" alt="Decoration">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/squares-deco.svg" alt="Decoration">
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>