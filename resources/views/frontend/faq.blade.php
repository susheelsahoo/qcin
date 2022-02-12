@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
<section class="basic-inner-page">
    <div class="container">
        <div class="inner-grp clearfix">
            <div id="sticky-anchor"></div>
            <div class="left-menu" id="sticky">
                <ul id="test" style="margin-bottom: 20px;" class="nav nav-pills">
                    <div class="accordion my-accord" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-2" style="width:100%">
                                    <a href="{{ route('frontend.himportant-contactsistory') }}">Important Contacts</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.faq') }}">FAQs</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://qcin.org/reach-us">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Frequently Asked Questions</h1>
                <div class="descripton mb-30">
                    <h3 style="text-align:justify;">Q. What is QCI?</h3>
                    <p style="text-align:justify;">A. Quality Council of India is an autonomous body of Department of Industrial Policy and Promotion, Govt. of India which has been created jointly with Indian industry represented by Confederation of Indian Industry (CII), Federation of Indian Chambers of Commerce and Industry (FICCI) &amp; Associated Chambers of Commerce and Industry (ASSOCHAM). The main objectives of QCI are (a) to establish and operate national accreditation structure (b) to monitor and administer the National Quality Campaign</p>
                    <h3 style="text-align:justify;">Q. What is National Quality Campaign?</h3>
                    <p style="text-align:justify;">A. In India awareness on Quality is still at a nascent state. There is need to propagate concepts of quality within all suppliers of products and services especially on quality standards, quality tools and best practices. Equally consumers must be empowered to demand quality. This can only happen when there is large scale quality campaign across the country. The purpose of National Quality Campaign is to educate both suppliers and consumers on modern concepts of quality. The campaign is carried out from funds received from Department of Industrial Policy and Promotion (DIPP), now Department for Promotion of Industries and Internal Trade - DPIIT. The major activities under the campaign are awareness programmes, conduct of surveys, publications, media campaign and specialized training courses. The activities are carried out by Council members and professional bodies.</p>
                    <h3 style="text-align:justify;">Q. Who runs Quality Council of India?</h3>
                    <p style="text-align:justify;">A. All strategic decisions are taken by Council which consists of 38 members representing Government, Apex Level Industry Associations, Quality Professional Bodies, Manufacturing Sector Associations, Service Sector Associations and Consumer Organisations. It is headed by <a href="chairperson{{ route('frontend.history') }}" title="Mr. Adil Zainulbhai, Chairman, QCI">Chair</a><a href="chairperson{{ route('frontend.history') }}">person</a>. Operations are managed by a Secretariat which is headed by <a href="sg{{ route('frontend.history') }}" title="Dr. Ravi P. Singh, Secretary General, QCI">Secretary General</a>.</p>
                    <h3 style="text-align:justify;">Q. What are the activities of QCI?</h3>
                    <p style="text-align:justify;">A. QCI operations are carried out by its constituent boards namely, National Accreditation Board for Certification Bodies (NABCB), National Accreditation Board for Education and Training (NABET), National Accreditation Board for Hospitals Healthcare Providers (NABH), National Board for Quality Promotion (NBQP) and National Accreditation Board for Testing and Calibration Laboratories (NABL). For details of activities of various boards, please logon to the links of respective boards on our website.</p>
                    <h3 style="text-align:justify;">Q. What are the accreditation programmes of QCI?</h3>
                    <p style="text-align:justify;">A. QCI runs accreditation programmes through its Boards. National Accreditation Board for Education &amp; Training (NABET) runs accreditation of schools based on ‘Accreditation Standard for Quality School Governance’. Similarly National Accreditation Board for Hospitals and Healthcare Providers (NABH) runs accreditation of hospitals, nursing homes, blood banks, primary health centre / community health centre based on respective accreditation standards developed by NABH. Details of these programmes are available on NABET and NABH links on our website respectively.</p>
                    <h3 style="text-align:justify;">Q. What benefits does QCI bring to businesses?</h3>
                    <p style="text-align:justify;">A. By providing national accreditation structure QCI facilitates trade and business across the world. By developing accreditation schemes specific to the field of education and healthcare QCI helps organisations in these fields in their journey for excellence. Through its national quality campaign programmes QCI help businesses to upgrade their quality performance.</p>
                    <h3 style="text-align:justify;">Q. Does QCI conduct any training programmes?</h3>
                    <p style="text-align:justify;">A. QCI under its national quality campaign programmes conducts awareness programmes, seminars, and conferences. These are regularly announced on our website.</p>
                    <h3 style="text-align:justify;">Q. What are the publications of QCI?</h3>
                    <p style="text-align:justify;">A. QCI publishes a magazine ‘Quality India’ on a regular basis. Quality India contains articles on trends and practices in quality in various sectors like manufacturing, education, healthcare, public services, etc. QCI also publishes books on emerging issues of quality. The recent publications of QCI are (i) ISO 9001:2008 – Small Changes Big Opportunities, (ii) ISO 9001:2008 – Quality Management Systems; Auditing for Value Addition. If you wish to obtain QCI publications, please contact: Mr Amit Singh, Deputy Director, National Board for Quality Promotion, Quality Council of India, email: <a href="mailto:amit.nbqp@qcin.org">amit.nbqp@qcin.org</a></p>
                    <h3 style="text-align:justify;">Q. Does QCI have any award scheme?</h3>
                    <p style="text-align:justify;">A. QCI operates an unique award scheme named as QCI – D.L. Shah National Awards on Economic of Quality. This award has been instituted with a view to establish that bottomline benefits are achieved through quality initiatives. The Award recognises successful project (case studies) of an organisation that have linked quality initiatives to real term financial gains and competitiveness. The details of this award scheme are available on our website.</p>
                    <h3 style="text-align:justify;">Q. What role government play in QCI’s activities?</h3>
                    <p style="text-align:justify;">A. QCI is an autonomous body under Department of Industrial Policy and Promotion, Ministry of Commerce and Industry. Secretary, Industrial Policy and Promotion is currently the Chairperson of QCI. Representatives from several government departments are Council members of QCI. QCI does enjoy a cooperative relationship with all departments of Government. Department of Industrial Policy and Promotion provides direction to the National Quality Campaign and also encourage other government departments to rely on voluntary standards and conformity assessment systems to help government in fulfilling its mandate for providing solutions to critical quality issues in trade and business.</p>
                    <h3 style="text-align:justify;">Q. Does QCI provide any assistance to Micro, Small and Medium Enterprises (MSME)?</h3>
                    <p style="text-align:justify;">A. QCI does not provide any financial assistance directly to MSMEs. However Ministry of MSME has made it mandatory to use the services of NABET registered consultants and NABCB accredited certification bodies to avail of the subsidy provided to a MSME unit for obtaining ISO 9001/ISO 14001 certification. QCI awareness programme at industrial clusters are aimed for capacity building of MSME.</p>
                    <h3 style="text-align:justify;">Q. Does QCI directly receive any consumer complaints about quality?</h3>
                    <p style="text-align:justify;">A. QCI directly does not receive any consumer complaints regarding any quality problem. However, if any complaint pertains to certification body, then such a complaint can be made to Director, NABCB at the address given in the QCI website.</p>
                    <h3 style="text-align:justify;">Q. Can QCI provide articles on quality for publication?</h3>
                    <p style="text-align:justify;">A. If requested QCI have no restriction for publication of an article which has been printed in Quality India. However, acknowledgement for the same has to be mentioned very clearly and QCI reserves the right for such publication.</p>
                    <h3 style="text-align:justify;">Q. How do I get in touch with QCI?</h3>
                    <p style="text-align:justify;">A. You can contact us through e-mail any time. Our office address is given below:<br />
                        Quality Council of India<br />
                        2nd Floor, Institution of Engineers Building<br />
                        Bahadurshah Zafar Marg<br />
                        New Delhi 110 002, India<br />
                        Tel: +91-11-23379321, 23378056-57<br />
                        Fax: +91-11-23379621
                    </p>
                    <p style="text-align:justify;">If you have a question concerning QCI that is not covered above, please send your enquiry to: <a href="mailto:nbqp@qcin.org">nbqp@qcin.org</a></p>
                    <h4 style="text-align:justify;">For FAQs on NABCB, NABET, NABH &amp; NABL please go to their links provided in our website or click on the following:</h4>
                    <ul>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">NABCB FAQ's</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">NABET FAQ's</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">NABH FAQ's</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">NABL FAQ's</a></li>
                    </ul>
                    <p style="text-align:justify;">We will soon upload more FAQs on ‘Whats and Hows’ of QMS certification processes and how one should go about for getting benefits from an effective QMS.</p>
                    <div class="left_"></div>
                    <div class="descripton1 mb-30"></div>
                    <div class="descripton2 mb-30"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--row-->
@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
@captchaScripts
@endif
@endpush