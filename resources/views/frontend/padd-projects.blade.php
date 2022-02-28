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
                                    <a href="{{ route('frontend.ppid-projects') }}">PPID Projects</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.padd-projects') }}">PADD Projects</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://fqpn.org/projects">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>PADD Projects</h1>
                <div class="descripton mb-30">
                    <p style="text-align:justify;"><strong>1. Voluntary Certification Scheme for Products with Geographical Indication:</strong></p>
                    <p style="text-align:justify;">Geographical Indication (GI) Goods are part of our collective and intellectual heritage of a country that need to be protected and promoted. PADD had submitted a complete Scheme document comprising 15 GI Products as a pilot to the Dept. for Promotion of Industry and Internal Trade, Ministry of Commerce and Industry for promoting the uptake of GI products that are either agri-commodities or manufactured items.</p>
                    <p style="text-align:justify;">Some of the GI goods covered are Nashik Grapes, Nagpur Oranges, Banglar Rosogolla, Kangra Tea, Kashmir Pashmina, Salem Fabric, Varanasi Gulabi Minakari, Bastar Dhokra, etc.</p>
                    <p style="text-align:justify;"><strong>HIGHLIGHTS</strong>: Scheme for Certification of 15 Products with GI in Agriculture, Food and Textiles (Handicrafts) sectors.</p>
                    <p style="text-align:justify;"><strong>2. GLP Cell – National GLP Compliance and Monitoring Authority (NGCMA)</strong></p>
                    <p style="text-align:justify;">National Good Laboratory Practices Compliance Monitoring Authority (NGCMA) entered into a MoU with the Quality Council of India on 31 Dec. 2013 for the effective implementation of Good Laboratory Practices (GLP) certification programme. The National GLP Compliance Monitoring Authority (NGCMA) has been established by the Department of Science &amp; Technology, Government of India to fulfil India’s obligations in this field. For more details, you may visit:<a href="#"> https://dst.gov.in/ngcma </a></p>
                    <p style="text-align:justify;">The PADD assists the GLP program of the NGCMA. Apart from giving them the operational support, PAD Division has undertaken an Impact Analysis of the National GLP Program, India which has been appreciated by Secretary DST and Head, NGCMA.</p>
                    <p style="text-align:justify;">Additionally to fast track the operationalisation of the India GLP Program, an entire new web portal has been designed and implemented to receive all the applications digitally and process it to a stage where the recommendations are placed to the Technical Committee.</p>
                    <p style="text-align:justify;">In order to have error-free coordination, mechanisms such as Regular Joint Coordination Committee meetings and Technical Committee meetings are convened to address issues of all the stakeholders. A series of sensitization workshops amongst the test facilities, government research institutions, and academia are held periodically</p>
                    <ul>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Digitisation of GLP India Programme</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Impact Analysis Study - GLP India Programme</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">FQP Introductory text</a></li>
                    </ul>
                    <p style="text-align:justify;"><strong>3. RPAS - Voluntary Certification Scheme for Remotely Piloted Aircraft Systems (Drones):</strong></p>
                    <p style="text-align:justify;">With Directorate General of Civil Aviation</p>
                    <p style="text-align:justify;">FQP has launched the Certification Scheme for Remotely Piloted Aircraft Systems (RPAS) duly approved by the Directorate General of Civil Aviation (DGCA), Ministry of Civil Aviation, the regulator for RPAS on 17th September 2020.</p>
                    <p style="text-align:justify;">The Scheme has been developed as per the technical requirements laid out in the DGCA RPAS Guidance Manual and the Civil Aviation Requirements (CAR) Section 3 Series X Part I Issue I. The certification ensures that the RPAS adheres to the requirements as per the certification criteria of the RPAS Certification Scheme.</p>
                    <p style="text-align:justify;">The Scheme becomes a prerequisite for any RPAS to obtain license/approval from the DGCA. This involves testing of the hardware and the software embedded to ascertain the safety, security and compliance to No Permission and No Take Off (NPNT) during its flight.</p>
                    <p style="text-align:justify;"><strong>HIGHLIGHTS</strong>: Regulation + requirements for approval of drones for civilian use. 8 pilots underway for grounding the RPAS Scheme</p>
                    <p style="text-align:justify;"><strong>4. National Commission for Protection of Child Rights (NCPCR):</strong></p>
                    <p style="text-align:justify;">FQP was entrusted upon by NCPCR to empanel social audit agencies to ascertain child labour in Indian industry and supply chain. The empanelled audit agencies in turn will be conducting independent assessment studies pertaining to sectors, industries, premises that are prone to child labour in order to establish facts and to mitigate any non-compliance found during the assessment studies. This will ensure the well-being and compliance to all the established norms with respect to protection of child rights in the country.<a href="{{ route('frontend.ncpcr-call-for-proposal') }}" target="_blank" rel="noreferrer noopener"><span style="line-height:108%;">
                                <font face="Arial, serif"><img alt="" src="public/uploads/ck-images/1614249238.Group%2043(1).png" style="float:right;width:300px;height:80px;margin-left:10px;margin-right:10px;" /></font>
                            </span></a></p>
                    <p style="text-align:justify;">The NCPCR being the part of Government is committed to bring the economy back on track by not only ensuring compliance with respect to protection of child rights but also proactively taking up monitoring of vulnerable sectors.</p>
                    <ul>
                        <li><a href="#" target="_blank" rel="noreferrer noopener"><span>EoI_FQP_CHILD RIGHTS</span></a></li>
                        <li><span><span style="background-color:rgb(255,255,255);"><a href="#" target="_blank" rel="noreferrer noopener">RFP_FQP_CHILD RIGHTS</a></span></span><a href="#" target="_blank" rel="noreferrer noopener"><span style="line-height:108%;">
                                    <font face="Arial, serif"> </font>
                                </span></a></li>
                    </ul>
                    <p><strong>Letters to the Industry/ Commodity Boards/ Export Promotion Councils</strong></p>
                    <ul>
                        <li><a href="#">Carpet Export Promotion</a></li>
                        <li><a href="#">Letter to IIFT</a></li>
                        <li><a href="#">Letter to EPCH</a></li>
                        <li><a href="#">Letter to ITPO</a></li>
                        <li><a href="#">Letter to Services Export Promotion Council</a></li>
                        <li><a href="#">Letter to</a><a href="#"> Plastics Export Promotion Council</a></li>
                        <li><a href="#">Letter to</a> <a href="#">woollens export promotion</a></li>
                        <li><a href="#">Letter to</a> <a href="#">leather export council</a></li>
                        <li><a href="#">Letter to coffee board</a> </li>
                        <li><a href="#">Letter to DGFT</a></li>
                        <li><a href="#">Letter to FIEO</a></li>
                    </ul>
                    <h2><a href="#">Media Coverage​</a>​​​​​​</h2>
                    <p style="text-align:justify;"><strong>5. Global Timber Forum – Association Survey for Knowledge:</strong></p>
                    <p style="text-align:justify;">A study was conducted for the Global Timber Forum (GTF) in collaboration with Food and Agriculture Organization (FAO) and World Resources Institute (WRI) to understand the wood-based industry. In-depth interviews were conducted with 10 associations in the wood-based industry to understand the challenges and gaps in the industry in India.</p>
                    <p style="text-align:justify;"><strong>6. International Tropical Timber Organization (ITTO), Japan:</strong></p>
                    <p style="text-align:justify;">ITTO, a Japan-based intergovernmental agency, approached FQP to conduct a pan-India perception survey focused on the furniture industry. The activity involved interaction with government and private associations to understand the current ecosystem for enhancing furniture exports.</p>
                    <p style="text-align:justify;">This is a study to understand on the furniture industry specifically made of wood and those that are categorized as wooden handicraft furniture. </p>
                    <p style="text-align:justify;">The focus is on associations, clusters and consortiums involved in products made of wood raw materials, including logs, sawnwood, mouldings, veneer and plywood specifically covering manufacturing and retailing, and joinery and engineered wood products. </p>
                    <p style="text-align:justify;">The envisaged outcomes would address issues prevailing in the distribution channels and factors affecting competitiveness in this industry including the raw material importers that gives an enhanced insight on trading relationships.</p>
                    <p style="text-align:justify;"><strong>7. Capacity Building cum Sensitization (CB &amp; S) for Voluntary Certification Scheme for Medicinal Plant Produce (VCSMPP):</strong></p>
                    <p style="text-align:justify;">The National Medicinal Plant Board, Ministry of AYUSH granted FQP the CB&amp;S project for the marketing and promotion of the VCSMPP Scheme. Till date we have compiled 40 Package of Practices, conducted over 30 sensitisation workshops and presented the Scheme to the SAARC Agriculture Secretariat of the SAARC for considering its acceptance. </p>
                    <p style="text-align:justify;">The scheme was translated in 12 languages and is available on the FQP website. The 12 languages are Assamese, Bengali, Gujarati, Hindi, Kannada, Malayalam, Marathi, Mizo, Oriya, Punjabi, Tamil, and Telugu.</p>
                    <p style="text-align:justify;"><strong>8. UNFSS - India National Platform on Private Sustainability Standards (INPPSS):</strong></p>
                    <ul>
                        <li style="text-align:justify;">With the Ministry of Commerce and Industry, and the UN Forum on Sustainability Standards (UNFSS).</li>
                        <li style="text-align:justify;">The United Nations Forum on Sustainability Standards (UNFSS) is a joint initiative of five UN agencies (FAO, ITC, UNCTAD, UNEP and UNIDO).</li>
                        <li style="text-align:justify;">In concurrence with the outcome of Standards Conclaves organized in 2014 and 2015, UNFSS and Quality Council of India (FQP) joined hands for setting up the India National Platform on Private Sustainability Standards (PSS).</li>
                        <li style="text-align:justify;">The India National Platform on Private Sustainability Standards (hereafter, the Indian PSS Platform) is a first-of-its-kind initiative in the world for addressing PSS issues in a national context.</li>
                        <li style="text-align:justify;">The Platform is multi-stakeholder in nature and includes members of the Government, statutory agencies, Export Promotion Councils, commodity boards, industry associations, industries, producers, and consumers.</li>
                        <li style="text-align:justify;">Promotional programmes on quality – awareness programmes on ISO standards, quality tools and techniques, building quality culture</li>
                        <li style="text-align:justify;">A survey / study on identification of priority product groups for developing sustainability standards</li>
                        <li style="text-align:justify;">World’s 1st Private Sustainability Std Platform, estd. with M/o Commerce &amp; UN. Organized the International Convention on Sustainable Trade and Standards (ICSTS) in collaboration with the United Nations and Ministry of Commerce &amp; Industry. Participation of 390+ delegates, 72 speakers and representation of across 40 countries, 8 UN agencies, with an overall outreach to 8000+ stakeholders.</li>
                        <li style="text-align:justify;">FQP represented the Platform at the UNCTAD, T4SD of the ITC, UN, and at the National Stakeholder meetings in China, Brazil, Mexico, South Africa, Philippines showcasing the activities undertaken in the sustainability studies.</li>
                    </ul>
                    <p style="text-align:justify;"><strong>HIGHLIGHTS</strong>: Tackles issues arising from private sustainability standards, Works with 9 international partners.</p>
                    <p style="text-align:justify;"><strong>9. National Interpretation for GLOBALG.A.P.:</strong></p>
                    <ul>
                        <li style="text-align:justify;">GLOBALG.A.P., owner of global standard for the certification of agricultural produce, and FQP entered into a MoU in May 2008. FQP constituted a National Technical Working Group (NTWG) - a mechanism to internalise local practices.</li>
                        <li style="text-align:justify;">The national interpretation (NI) guidelines of India for Version 5.3 of GLOBALG.A.P. was accepted by the Technical Committee of GLOBALG.A.P. which is meant to benefit over 10,000 farmers in exports.</li>
                        <li style="text-align:justify;">GRASP (Social Standard of GLOBALG.A.P.) NI documentation too approved by GLOBALG.A.P.</li>
                    </ul>
                    <p style="text-align:justify;"><strong>10. Sustainable Development Goals Mapping and Analysis Program (SDG MAP)</strong></p>
                    <p style="text-align:justify;">Initiated the 'Sustainable Development Goals Mapping and Analysis Programme' (SDG MAP) which aims at organisations - public and private, and standards (with special focus on voluntary/private sustainability standards). The mapping of the UN SDGs to the standard translates the SDGs and the relevant targets under those SDGs into specific business actions applicable for the company by providing justification of the SDGs mapped.</p>
                    <p style="text-align:justify;">The focus is also on identifying priority SDGs that are most relevant to the standard and the company and where there is greatest potential for impact. Thereafter, an impact study is carried out to understand and quantify the impact.</p>
                    <p style="text-align:justify;">PAD Division has completed SDG Mapping of VRIKSH Standard of the Export Promotion Council for Handicrafts (EPCH) and of Trinitea Framework of Solidaridad and ITA by studying the on-ground impact. FQP also submitted the impact study of the VRIKSH standard, bringing forth areas of opportunity and improvement.</p>
                    <p style="text-align:justify;"><strong>11. Benchmarking IndGAP to GLOBALG.A.P.:</strong></p>
                    <ul>
                        <li style="text-align:justify;">The promotion and marketing of IndGAP is undertaken with close engagement with the stakeholders - principally DoC, APEDA and Spices Board.</li>
                        <li style="text-align:justify;">FQP has signed an MoU with APEDA for funding the Benchmarking proposal of IndGAP with GLOBALG.A.P.</li>
                        <li style="text-align:justify;">GLOBALG.A.P. is a globally recognized Scheme that has a set of standards for good agricultural practices (G.A.P.). The standards ensure greater efficiency in production, improves business performance, and benefits farmers, retailers, and consumers throughout the world.</li>
                        <li style="text-align:justify;">APEDA has granted FQP (PADD) a project for benchmarking IndGAP to GLOBALG.A.P.</li>
                        <li style="text-align:justify;">Benchmarking would result in improvement in quality of produce, awareness regarding good agricultural practices and in reduction in the transaction cost for exports.</li>
                    </ul>
                    <p style="text-align:justify;"><strong>12. Implementation of IndGAP Project for strengthening quality and safety in the spices sector:</strong></p>
                    <ul>
                        <li style="text-align:justify;">Spices Board (Ministry of Commerce and Industry, Government of India) is the flagship organization for the development and worldwide promotion of Indian spices.</li>
                        <li style="text-align:justify;">MoU with the Spices Board has been signed for approval for implementing IndGAP project in the spices sector.</li>
                        <li style="text-align:justify;">Spices Board has granted FQP (PADD) a project for implementation of IndGAP for carrying out promotion and marketing of the IndGAP Scheme</li>
                        <li style="text-align:justify;">Project certification in IndGAP for spices would result in overall improvement of quality of produce, awareness regarding good agricultural practice and reduction in the transaction cost for exports.</li>
                    </ul>
                    <p style="text-align:justify;"><strong>13. Study of Voluntary Consumer Organizations (VCOs) in India with Special Focus to Rural Areas and their benchmarking to enhance capacities.</strong></p>
                    <p style="text-align:justify;"><strong>14. FAO SAARC GAP- Development of Standards and Scheme for Good Agriculture practice (GAP) implementation and certification in countries of SAARC:</strong></p>
                    <p style="text-align:justify;">The Food and Agriculture Organisation (FAO) of the UN identified FQP as their technical partner for developing a quality infrastructure on Good Agriculture Practice for all the SAARC member countries. The project was for “Development of Standards and Scheme for Good Agriculture Practice (GAP) Implementation and Certification in countries of SAARC”. The Scheme designed and developed by FQP was accepted and implemented in some select SAARC countries with the assistance of FAO of the UN. The SAARC Agriculture Center (SAC) has taken forward this initiative for improving the food hygiene and safety in the region.</p>
                    <p style="text-align:justify;">The entire Scheme documents comprising technical GAP Standard, the Certification Body criteria, Certification Process and Accreditation / Approval criteria were presented and approved at the concluding workshop organized by FAO.</p>
                    <p style="text-align:justify;"><strong>15. Regional Training SAC Training (SAARC GAP):</strong></p>
                    <p style="text-align:justify;">The SAARC Agriculture Centre approached FQP with a request to conduct SAARC Good Agricultural Practices training for all the SAARC member countries. The SAC aims to engage the Agriculture Ministry of each of the member countries for adaptation or adoption of the SAARC GAP. </p>
                    <p style="text-align:justify;">A regional training workshop was organized by SAC on SAARC GAP from August 27-30, 2019 for exploring the above with the member countries. Dr. S. K. Malhotra, Agriculture Commissioner, GoI was the chief guest of the event.</p>
                    <p style="text-align:justify;"><strong>16. Promotion of Scheme for Evaluation and Certification of YOGA Professionals in Popularizing and Marketing of Yoga:</strong></p>
                    <ul>
                        <li style="text-align:justify;">The Honorable Prime Minister had desired to spread India’s traditional knowledge worldwide with credible systems with specific reference to Yoga that should provide India leadership in assuring quality of Yoga practices across the world. The Ministry of AYUSH in pursuance of the above and in the wake of declaration of International Yoga Day, identified Quality Council of India (FQP) to develop a Scheme for Voluntary Certification of Yoga Professionals recognizing that FQP has expertise in developing such quality frameworks based on international best practices.</li>
                        <li style="text-align:justify;">FQP designed the Scheme for Voluntary certification of Yoga Professional by adopting the principles and requirements laid down in the international standard that was presented to the Ministry of AYUSH and was launched on 22 June 2015.</li>
                        <li style="text-align:justify;">The scheme has been handed over to Ministry of AYUSH after successful grounding by FQP.</li>
                    </ul>
                    <p style="text-align:justify;"><strong>17. Quality Intervention by Certification of Yoga School in Popularizing and Marketing of Yoga by the Quality Council of India:</strong></p>
                    <ul>
                        <li style="text-align:justify;">After having operated the Yoga Professionals’ Certification Scheme since June, 2015, the Steering Committee decided to launch the scheme for certification of Yoga Schools. The Scheme was launched on the 28 March 2016.</li>
                        <li style="text-align:justify;">The Scheme was designed and developed in consultation with the country's top yoga experts from some of the oldest yoga institutions - such as Sri Sri Ravi Shankar, Swami Ramdev, Dr H. R. Nagendra, Prime Minister’s Yoga Guru, Sri O P Tiwari of Kaivalyadham, Hansaji of Yoga Institute, representatives of Sivananda school, Isha Foundation, and Art of Living, and inputs from other organisations.</li>
                        <li style="text-align:justify;">The scheme has been handed over to Ministry of AYUSH after successful grounding by FQP.</li>
                    </ul>
                    <p style="text-align:justify;"><strong>18. International Crops Research Institute for The Semi-Arid Tropics (ICRISAT)</strong>:</p>
                    <p style="text-align:justify;">MoU has been signed with ICRISAT for design and development of certification Scheme on ‘Smart Food’ by Dr. Jacqueline d’Arros Hughes, Director General and Dr. Ravi P. Singh, SG, FQP.</p>
                    <p style="text-align:justify;"><strong>19. United Nations Development Programme (UNDP):</strong></p>
                    <p style="text-align:justify;">The UNDP has approached FQP to help them with the design and development of Scheme for Access and Benefit Sharing as per the National Biodiversity Act 2002.<br />

                    </p>
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