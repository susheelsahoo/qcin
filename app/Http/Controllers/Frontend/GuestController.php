<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class GuestController.
 */
class GuestController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('frontend.about');
    }
    public function history()
    {
        return view('frontend.history');
    }
    public function rules()
    {
        return view('frontend.rules');
    }
    public function mission()
    {
        return view('frontend.mission');
    }
    public function vision()
    {
        return view('frontend.vision');
    }
    public function moa()
    {
        return view('frontend.moa');
    }
    public function rules_regulation()
    {
        return view('frontend.rules_regulation');
    }
    public function keyObjectives()
    {
        return view('frontend.key-objectives');
    }
    public function ourLeadership()
    {
        return view('frontend.our-leadership');
    }
    public function chairperson()
    {
        return view('frontend.chairperson');
    }
    public function sg()
    {
        return view('frontend.sg');
    }
    public function ceosAndHods()
    {
        return view('frontend.ceos-and-hods');
    }
    public function members()
    {
        return view('frontend.members');
    }
    public function governanceStructure()
    {
        return view('frontend.governance-structure');
    }
    public function administrativeStructure()
    {
        return view('frontend.administrative-structure');
    }
    public function bodiesOfQci()
    {
        return view('frontend.bodies-of-fqp');
    }
    public function theGoverningCouncil()
    {
        return view('frontend.the-governing-council');
    }
    public function theGoverningBody()
    {
        return view('frontend.the-governing-body');
    }
    public function financeCommittee()
    {
        return view('frontend.finance-committee');
    }
    public function fqpSecretariat()
    {
        return view('frontend.fqp-secretariat');
    }
    public function specialProjectsGroups()
    {
        return view('frontend.special-projects-groups');
    }
    public function hrAdministration()
    {
        return view('frontend.hr-administration');
    }
    public function boards()
    {
        return view('frontend.boards');
    }
    public function officeOrdersInternalCirculars()
    {
        return view('frontend.office-orders-internal-circulars');
    }
    public function annualReports()
    {
        return view('frontend.annual-reports');
    }
    public function financeAndAccounts()
    {
        return view('frontend.finance-and-accounts');
    }
    public function rtiCell()
    {
        return view('frontend.rti-cell');
    }
    public function ethicsCell()
    {
        return view('frontend.ethics-cell');
    }
    public function iccForSexualHarassment()
    {
        return view('frontend.icc-for-sexual-harassment');
    }
    public function minutesOfGb()
    {
        return view('frontend.minutes-of-gb');
    }
    public function minutesOfGc()
    {
        return view('frontend.minutes-of-gc');
    }
    public function schemes()
    {
        return view('frontend.schemes');
    }
    public function paddSchemes()
    {
        return view('frontend.padd-schemes');
    }
    public function workplaceAssessmentForSafetyAndHygiene()
    {
        return view('frontend.workplace-assessment-for-safety-and-hygiene');
    }
    public function projects()
    {
        return view('frontend.projects');
    }
    public function ppidProjects()
    {
        return view('frontend.ppid-projects');
    }
    public function paddProjects()
    {
        return view('frontend.padd-projects');
    }
    public function events()
    {
        return view('frontend.events');
    }
    public function conclaves()
    {
        return view('frontend.conclaves');
    }
    public function nationalQualityConclave()
    {
        return view('frontend.national-quality-conclave');
    }
    public function regionalQualityConclave()
    {
        return view('frontend.regional-quality-conclave');
    }
    public function virtualQualityConclave()
    {
        return view('frontend.virtual-quality-conclave');
    }
    public function workshops()
    {
        return view('frontend.workshops');
    }
    public function webinars()
    {
        return view('frontend.webinars');
    }
    public function training()
    {
        return view('frontend.training');
    }
    public function icsts()
    {
        return view('frontend.icsts');
    }
    public function otherEvents()
    {
        return view('frontend.other-events');
    }
    public function lookingForAccreditation()
    {
        return view('frontend.looking-for-accreditation');
    }
    public function membership()
    {
        return view('frontend.membership');
    }
    public function certifications()
    {
        return view('frontend.certifications');
    }
    public function learning()
    {
        return view('frontend.learning');
    }
    public function awards()
    {
        return view('frontend.awards ');
    }
    public function fqpInNews()
    {
        return view('frontend.fqp-in-news');
    }
    public function fqpMagazines()
    {
        return view('frontend.fqp-magazines');
    }
    public function qualityBestPractices()
    {
        return view('frontend.quality-best-practices');
    }
    public function editorial()
    {
        return view('frontend.editorial');
    }
    public function gallery()
    {
        return view('frontend.gallery');
    }
    public function videoGallery()
    {
        return view('frontend.video-gallery');
    }
    public function importantNotices()
    {
        return view('frontend.important-notices');
    }
    public function achievements()
    {
        return view('frontend.achievements');
    }
    public function updatesAlerts()
    {
        return view('frontend.updates-alerts');
    }
    public function mediaCommunications()
    {
        return view('frontend.media-communications');
    }
    public function workWithUs()
    {
        return view('frontend.work-with-us');
    }
    public function careers()
    {
        return view('frontend.careers');
    }
    public function tenders()
    {
        return view('frontend.tenders');
    }
    public function reachUs()
    {
        return view('frontend.reach-us');
    }
    public function importantContacts()
    {
        return view('frontend.important-contacts');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    // public function monographs()
    // {
    //     return view('frontend.monographs');
    // }
    public function updateAlerts()
    {
        return view('frontend.index');
    }
}
