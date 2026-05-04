<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('services', 'Home::services');
$routes->get('4m-framework', 'Home::fourM');
$routes->get('hospital-sector', 'Home::hospitalSector');
$routes->get('projects', 'Home::projects');
$routes->get('team', 'Home::team');
$routes->get('contact', 'Home::contact');
$routes->get('privacy-policy', 'Home::privacy');
$routes->get('terms-conditions', 'Home::terms');

// Admin Routes
$routes->get('admin/login', 'Home::adminLogin');
$routes->post('admin/login-submit', 'Home::adminLoginSubmit');
$routes->get('admin/dashboard', 'Home::adminDashboard');
$routes->get('admin/logout', 'Home::logout');
$routes->get('admin/register', 'Home::register');
$routes->post('admin/register-submit', 'Home::registerSubmit');
$routes->get('admin/forgot-password', 'Home::forgotPassword');
$routes->post('admin/forgot-password-submit', 'Home::forgotPasswordSubmit');
$routes->get('admin/reset-password/(:any)', 'Home::resetPassword/$1');
$routes->post('admin/reset-password-submit', 'Home::resetPasswordSubmit');



// Dashboard Routes
$routes->get('admin/pages/home', 'Home::adminHomepage');
$routes->post('admin/update-section', 'Home::adminUpdateSection');
$routes->get('admin/pages/about', 'Home::adminAbout');
$routes->post('admin/about/update-section', 'Home::adminUpdateAboutSection');

// About Geographic Routes
$routes->post('admin/about/geographic/add', 'Home::adminAddAboutGeographic');
$routes->post('admin/about/geographic/edit', 'Home::adminEditAboutGeographic');
$routes->get('admin/about/geographic/delete/(:num)', 'Home::adminDeleteAboutGeographic/$1');

// About Team Routes
$routes->post('admin/about/team/add', 'Home::adminAddAboutTeam');
$routes->post('admin/about/team/edit', 'Home::adminEditAboutTeam');
$routes->get('admin/about/team/delete/(:num)', 'Home::adminDeleteAboutTeam/$1');

// About Advantage Routes
$routes->post('admin/about/advantage/add', 'Home::adminAddAboutAdvantage');
$routes->post('admin/about/advantage/edit', 'Home::adminEditAboutAdvantage');
$routes->get('admin/about/advantage/delete/(:num)', 'Home::adminDeleteAboutAdvantage/$1');

// Services Routes
$routes->get('admin/pages/services', 'Home::adminServices');
$routes->post('admin/services/update-section', 'Home::adminUpdateServicesSection');
$routes->post('admin/services/add', 'Home::adminAddService');
$routes->post('admin/services/edit', 'Home::adminEditService');
$routes->get('admin/services/delete/(:num)', 'Home::adminDeleteService/$1');

// Stats Routes
$routes->post('admin/stats/add', 'Home::adminAddStat');
$routes->post('admin/stats/edit', 'Home::adminEditStat');
$routes->get('admin/stats/delete/(:num)', 'Home::adminDeleteStat/$1');

// Testimonials Routes
$routes->post('admin/testimonials/add', 'Home::adminAddTestimonial');
$routes->post('admin/testimonials/edit', 'Home::adminEditTestimonial');
$routes->get('admin/testimonials/delete/(:num)', 'Home::adminDeleteTestimonial/$1');

// Remaining Placeholder Routes
$routes->get('admin/settings', 'Home::adminSettings');
$routes->post('admin/settings/update-footer', 'Home::updateFooter');
$routes->post('admin/settings/update-social', 'Home::updateSocialLinks');
$routes->post('admin/settings/update-privacy', 'Home::updatePrivacyPolicy');
$routes->post('admin/settings/update-terms', 'Home::updateTerms');
$routes->get('admin/website-settings', 'Home::adminPlaceholder/Website Settings');
// 4M Framework Routes
$routes->get('admin/pages/4m-framework', 'Home::adminFourM');
$routes->post('admin/4m/update-section', 'Home::adminUpdateFourMSection');
$routes->post('admin/4m/pillar/edit', 'Home::adminEditFourMPillar');
$routes->post('admin/4m/highlight/add', 'Home::adminAddFourMHighlight');
$routes->post('admin/4m/highlight/edit', 'Home::adminEditFourMHighlight');
$routes->get('admin/4m/highlight/delete/(:num)', 'Home::adminDeleteFourMHighlight/$1');

// Hospital Sector Routes
$routes->get('admin/pages/hospital-sector', 'Home::adminHospitalSector');
$routes->post('admin/hospital/update-section', 'Home::adminUpdateHospitalSection');
$routes->post('admin/hospital/challenge/add', 'Home::adminAddHospitalChallenge');
$routes->post('admin/hospital/challenge/edit', 'Home::adminEditHospitalChallenge');
$routes->get('admin/hospital/challenge/delete/(:num)', 'Home::adminDeleteHospitalChallenge/$1');
$routes->post('admin/hospital/support/add', 'Home::adminAddHospitalSupport');
$routes->post('admin/hospital/support/edit', 'Home::adminEditHospitalSupport');
$routes->get('admin/hospital/support/delete/(:num)', 'Home::adminDeleteHospitalSupport/$1');
$routes->post('admin/hospital/solution/add', 'Home::adminAddHospitalSolution');
$routes->post('admin/hospital/solution/edit', 'Home::adminEditHospitalSolution');
$routes->get('admin/hospital/solution/delete/(:num)', 'Home::adminDeleteHospitalSolution/$1');
// Project Routes
$routes->get('admin/pages/projects', 'Home::adminProjects');
$routes->post('admin/projects/update-section', 'Home::adminUpdateProjectsSection');
$routes->post('admin/projects/add', 'Home::adminAddProject');
$routes->post('admin/projects/edit', 'Home::adminEditProject');
$routes->get('admin/projects/delete/(:num)', 'Home::adminDeleteProject/$1');

$routes->get('admin/pages/team', 'Home::adminPlaceholder/Team');
$routes->get('admin/pages/testimonials', 'Home::adminPlaceholder/Testimonials');
$routes->get('test-email', 'Home::testEmail');
$routes->post('contact/submit', 'Home::submitContact');

// Admin Contact Routes
$routes->get('admin/contact', 'Home::adminContact');
$routes->post('admin/contact/update', 'Home::updateContactContent');
$routes->get('admin/enquiries', 'Home::getEnquiries');
$routes->get('admin/enquiries/delete/(:num)', 'Home::deleteEnquiry/$1');
$routes->get('admin/enquiries/status/(:num)', 'Home::updateEnquiryStatus/$1');
