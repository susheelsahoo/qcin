<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\GuestController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\MembersController;
use App\Http\Controllers\Frontend\CertificateController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('about', [GuestController::class, 'about'])->name('about');
Route::get('history', [GuestController::class, 'history'])->name('history');
Route::get('rules-regulation', [GuestController::class, 'rules'])->name('rules-regulation');
Route::get('mission', [GuestController::class, 'mission'])->name('mission');
Route::get('vision', [GuestController::class, 'vision'])->name('vision');
Route::get('moa', [GuestController::class, 'moa'])->name('moa');
Route::get('rules-regulation]', [GuestController::class, 'rules_regulation]'])->name('rules_regulation]');
Route::get('key-objectives', [GuestController::class, 'keyObjectives'])->name('key-objectives');
Route::get('our-leadership', [GuestController::class, 'ourLeadership'])->name('our-leadership');
Route::get('chairperson', [GuestController::class, 'chairperson'])->name('chairperson');
Route::get('sg', [GuestController::class, 'sg'])->name('sg');
Route::get('ceos-and-hods', [GuestController::class, 'ceosAndHods'])->name('ceos-and-hods');
Route::get('members', [GuestController::class, 'members'])->name('members');
Route::get('governance-structure', [GuestController::class, 'governanceStructure'])->name('governance-structure');
Route::get('administrative-structure', [GuestController::class, 'administrativeStructure'])->name('administrative-structure');
Route::get('bodies-of-fqp', [GuestController::class, 'bodiesOfQci'])->name('bodies-of-fqp');
Route::get('the-governing-council', [GuestController::class, 'theGoverningCouncil'])->name('the-governing-council');
Route::get('the-governing-body', [GuestController::class, 'theGoverningBody'])->name('the-governing-body');
Route::get('finance-committee', [GuestController::class, 'financeCommittee'])->name('finance-committee');
Route::get('fqp-secretariat', [GuestController::class, 'fqpSecretariat'])->name('fqp-secretariat');
Route::get('special-projects-groups', [GuestController::class, 'specialProjectsGroups'])->name('special-projects-groups');
Route::get('hr-administration', [GuestController::class, 'hrAdministration'])->name('hr-administration');
Route::get('boards', [GuestController::class, 'boards'])->name('boards');
Route::get('office-orders-internal-circulars', [GuestController::class, 'officeOrdersInternalCirculars'])->name('office-orders-internal-circulars');
Route::get('annual-reports', [GuestController::class, 'annualReports'])->name('annual-reports');
Route::get('finance-and-accounts', [GuestController::class, 'financeAndAccounts'])->name('finance-and-accounts');
Route::get('rti-cell', [GuestController::class, 'rtiCell'])->name('rti-cell');
Route::get('ethics-cell', [GuestController::class, 'ethicsCell'])->name('ethics-cell');
Route::get('icc-for-sexual-harassment', [GuestController::class, 'iccForSexualHarassment'])->name('icc-for-sexual-harassment');
Route::get('minutes-of-gb', [GuestController::class, 'minutesOfGb'])->name('minutes-of-gb');
Route::get('minutes-of-gc', [GuestController::class, 'minutesOfGc'])->name('minutes-of-gc');
Route::get('schemes', [GuestController::class, 'schemes'])->name('schemes');
Route::get('padd-schemes', [GuestController::class, 'paddSchemes'])->name('padd-schemes');
Route::get('workplace-assessment-for-safety-and-hygiene', [GuestController::class, 'workplaceAssessmentForSafetyAndHygiene'])->name('workplace-assessment-for-safety-and-hygiene');
Route::get('projects', [GuestController::class, 'projects'])->name('projects');
Route::get('ppid-projects', [GuestController::class, 'ppidProjects'])->name('ppid-projects');
Route::get('padd-projects', [GuestController::class, 'paddProjects'])->name('padd-projects');
Route::get('events', [GuestController::class, 'events'])->name('events');
Route::get('conclaves', [GuestController::class, 'conclaves'])->name('conclaves');
Route::get('national-quality-conclave', [GuestController::class, 'nationalQualityConclave'])->name('national-quality-conclave');
Route::get('regional-quality-conclave', [GuestController::class, 'regionalQualityConclave'])->name('regional-quality-conclave');
Route::get('virtual-quality-conclave', [GuestController::class, 'virtualQualityConclave'])->name('virtual-quality-conclave');
Route::get('workshops', [GuestController::class, 'workshops'])->name('workshops');
Route::get('webinars', [GuestController::class, 'webinars'])->name('webinars');
Route::get('training', [GuestController::class, 'training'])->name('training');
Route::get('icsts', [GuestController::class, 'icsts'])->name('icsts');
Route::get('other-events', [GuestController::class, 'otherEvents'])->name('other-events');
Route::get('looking-for-accreditation', [GuestController::class, 'lookingForAccreditation'])->name('looking-for-accreditation');
Route::get('membership', [GuestController::class, 'membership'])->name('membership');
Route::get('certifications', [GuestController::class, 'certifications'])->name('certifications');
Route::get('learning', [GuestController::class, 'learning'])->name('learning');
Route::get('awards', [GuestController::class, 'awards'])->name('awards');
Route::get('annual-reports', [GuestController::class, 'annualReports'])->name('annual-reports');
Route::get('fqp-in-news', [GuestController::class, 'fqpInNews'])->name('fqp-in-news');
Route::get('fqp-magazines', [GuestController::class, 'fqpMagazines'])->name('fqp-magazines');
Route::get('quality-best-practices', [GuestController::class, 'qualityBestPractices'])->name('quality-best-practices');
Route::get('editorial', [GuestController::class, 'editorial'])->name('editorial');
Route::get('gallery', [GuestController::class, 'gallery'])->name('gallery');
Route::get('video-gallery', [GuestController::class, 'videoGallery'])->name('video-gallery');
Route::get('important-notices', [GuestController::class, 'importantNotices'])->name('important-notices');
Route::get('achievements', [GuestController::class, 'achievements'])->name('achievements');
Route::get('updates-alerts', [GuestController::class, 'updatesAlerts'])->name('updates-alerts');
Route::get('media-communications', [GuestController::class, 'mediaCommunications'])->name('media-communications');
Route::get('work-with-us', [GuestController::class, 'workWithUs'])->name('work-with-us');
Route::get('careers', [GuestController::class, 'careers'])->name('careers');
Route::get('tenders', [GuestController::class, 'tenders'])->name('tenders');
Route::get('reach-us', [GuestController::class, 'reachUs'])->name('reach-us');
Route::get('important-contacts', [GuestController::class, 'importantContacts'])->name('important-contacts');
Route::get('faq', [GuestController::class, 'faq'])->name('faq');
Route::get('monographs', [GuestController::class, 'monographs'])->name('monographs');
Route::get('update-alerts', [GuestController::class, 'update-alerts'])->name('update-alerts');
Route::get('careers', [GuestController::class, 'careers'])->name('careers');
Route::get('mail', [RegisterController::class, 'mail'])->name('mail');

Route::get('monographs', [GuestController::class, 'monographs'])->name('monographs');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('membership', [MembersController::class, 'index'])->name('membership');
        Route::get('payment', [PaymentController::class, 'index'])->name('payment');
        Route::get('certificate', [CertificateController::class, 'index'])->name('certificate');
    });
});
