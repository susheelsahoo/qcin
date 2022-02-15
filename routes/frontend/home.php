<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('history', [FrontendController::class, 'history'])->name('history');
Route::get('rules-regulation', [FrontendController::class, 'rules'])->name('rules-regulation');
Route::get('mission', [FrontendController::class, 'mission'])->name('mission');
Route::get('vision', [FrontendController::class, 'vision'])->name('vision');
Route::get('moa', [FrontendController::class, 'moa'])->name('moa');
Route::get('rules-regulation]', [FrontendController::class, 'rules_regulation]'])->name('rules_regulation]');
Route::get('key-objectives', [FrontendController::class, 'keyObjectives'])->name('key-objectives');
Route::get('our-leadership', [FrontendController::class, 'ourLeadership'])->name('our-leadership');
Route::get('chairperson', [FrontendController::class, 'chairperson'])->name('chairperson');
Route::get('sg', [FrontendController::class, 'sg'])->name('sg');
Route::get('ceos-and-hods', [FrontendController::class, 'ceosAndHods'])->name('ceos-and-hods');
Route::get('members', [FrontendController::class, 'members'])->name('members');
Route::get('governance-structure', [FrontendController::class, 'governanceStructure'])->name('governance-structure');
Route::get('administrative-structure', [FrontendController::class, 'administrativeStructure'])->name('administrative-structure');
Route::get('bodies-of-qci', [FrontendController::class, 'bodiesOfQci'])->name('bodies-of-qci');
Route::get('the-governing-council', [FrontendController::class, 'theGoverningCouncil'])->name('the-governing-council');
Route::get('the-governing-body', [FrontendController::class, 'theGoverningBody'])->name('the-governing-body');
Route::get('finance-committee', [FrontendController::class, 'financeCommittee'])->name('finance-committee');
Route::get('qci-secretariat', [FrontendController::class, 'qciSecretariat'])->name('qci-secretariat');
Route::get('special-projects-groups', [FrontendController::class, 'specialProjectsGroups'])->name('special-projects-groups');
Route::get('hr-administration', [FrontendController::class, 'hrAdministration'])->name('hr-administration');
Route::get('boards',[FrontendController::class,'boards'])->name('boards');
Route::get('office-orders-internal-circulars', [FrontendController::class, 'officeOrdersInternalCirculars'])->name('office-orders-internal-circulars');
Route::get('annual-reports', [FrontendController::class, 'annualReports'])->name('annual-reports');
Route::get('finance-and-accounts', [FrontendController::class, 'financeAndAccounts'])->name('finance-and-accounts');
Route::get('rti-cell', [FrontendController::class, 'rtiCell'])->name('rti-cell');
Route::get('ethics-cell', [FrontendController::class, 'ethicsCell'])->name('ethics-cell');
Route::get('icc-for-sexual-harassment', [FrontendController::class, 'iccForSexualHarassment'])->name('icc-for-sexual-harassment');
Route::get('minutes-of-gb', [FrontendController::class, 'minutesOfGb'])->name('minutes-of-gb');
Route::get('minutes-of-gc', [FrontendController::class, 'minutesOfGc'])->name('minutes-of-gc');
Route::get('schemes', [FrontendController::class, 'schemes'])->name('schemes');
Route::get('padd-schemes', [FrontendController::class, 'paddSchemes'])->name('padd-schemes');
Route::get('workplace-assessment-for-safety-and-hygiene', [FrontendController::class, 'workplaceAssessmentForSafetyAndHygiene'])->name('workplace-assessment-for-safety-and-hygiene');
Route::get('projects', [FrontendController::class, 'projects'])->name('projects');
Route::get('ppid-projects', [FrontendController::class, 'ppidProjects'])->name('ppid-projects');
Route::get('padd-projects', [FrontendController::class, 'paddProjects'])->name('padd-projects');
Route::get('events', [FrontendController::class, 'events'])->name('events');
Route::get('conclaves', [FrontendController::class, 'conclaves'])->name('conclaves');
Route::get('national-quality-conclave', [FrontendController::class, 'nationalQualityConclave'])->name('national-quality-conclave');
Route::get('regional-quality-conclave', [FrontendController::class, 'regionalQualityConclave'])->name('regional-quality-conclave');
Route::get('virtual-quality-conclave', [FrontendController::class, 'virtualQualityConclave'])->name('virtual-quality-conclave');
Route::get('workshops', [FrontendController::class, 'workshops'])->name('workshops');
Route::get('webinars', [FrontendController::class, 'webinars'])->name('webinars');
Route::get('training', [FrontendController::class, 'training'])->name('training');
Route::get('icsts', [FrontendController::class, 'icsts'])->name('icsts');
Route::get('other-events', [FrontendController::class, 'otherEvents'])->name('other-events');
Route::get('looking-for-accreditation', [FrontendController::class, 'lookingForAccreditation'])->name('looking-for-accreditation');
Route::get('membership', [FrontendController::class, 'membership'])->name('membership');
Route::get('certifications', [FrontendController::class, 'certifications'])->name('certifications');
Route::get('learning', [FrontendController::class, 'learning'])->name('learning');
Route::get('awards', [FrontendController::class, 'awards'])->name('awards');
Route::get('annual-reports', [FrontendController::class, 'annualReports'])->name('annual-reports');
Route::get('qci-in-news', [FrontendController::class, 'qciInNews'])->name('qci-in-news');
Route::get('qci-magazines', [FrontendController::class, 'qciMagazines'])->name('qci-magazines');
Route::get('quality-best-practices', [FrontendController::class, 'qualityBestPractices'])->name('quality-best-practices');
Route::get('editorial', [FrontendController::class, 'editorial'])->name('editorial');
Route::get('gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('video-gallery', [FrontendController::class, 'videoGallery'])->name('video-gallery');
Route::get('important-notices', [FrontendController::class, 'importantNotices'])->name('important-notices');
Route::get('achievements', [FrontendController::class, 'achievements'])->name('achievements');
Route::get('updates-alerts', [FrontendController::class, 'updatesAlerts'])->name('updates-alerts');
Route::get('media-communications', [FrontendController::class, 'mediaCommunications'])->name('media-communications');
Route::get('work-with-us', [FrontendController::class, 'workWithUs'])->name('work-with-us');
Route::get('careers', [FrontendController::class, 'careers'])->name('careers');
Route::get('tenders', [FrontendController::class, 'tenders'])->name('tenders');
Route::get('reach-us', [FrontendController::class, 'reachUs'])->name('reach-us');
Route::get('important-contacts', [FrontendController::class, 'importantContacts'])->name('important-contacts');
Route::get('faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('monographs', [FrontendController::class, 'monographs'])->name('monographs');
Route::get('update-alerts', [FrontendController::class, 'update-alerts'])->name('update-alerts');
Route::get('careers', [FrontendController::class, 'careers'])->name('careers');
Route::get('mail', [RegisterController::class, 'mail'])->name('mail');

Route::get('monographs', [FrontendController::class, 'monographs'])->name('monographs');
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
    });
});
