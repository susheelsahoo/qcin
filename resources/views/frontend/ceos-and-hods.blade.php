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
                                    <a href="{{ route('frontend.chairperson') }}">Chairperson</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.sg') }}">Secretary General</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.ceos-and-hods') }}">Leadership - Boards/Divisions</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://qcin.org/our-leadership">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Leadership - Boards/Divisions</h1>
                <div class="descripton mb-30">
                    <h2>NABCB</h2>
                    <h4 style="text-align:justify;">Mr. Deep Kapuria, Chairperson</h4>
                    <p><img alt="" src="public/uploads/ck-images/1613370832.Mr.%20Deep%20Kapuria.jpg" style="float:left;width:250px;height:250px;margin:10px;" /></p>
                    <p style="text-align:justify;">Mr. Deep Kapuria is the Chairman of The Hi-Tech Group of Companies. Group comprises of The Hi-Tech Gears Ltd, The Hi-Tech Engineering Systems, The Hi-Tech e-Soft &amp; The Hi-Tech Robotic Systemz. The Hi-Tech Gears manufacturing facilities are also located in Canada &amp; US.</p>
                    <p style="text-align:justify;">The group spans a wide spectrum of products and services. Manufacturing includes Powertrain Components, Mobile Robots (Industrial &amp; Defense), ADAS (Advance Driver Assistance System). Services include hi-end engineering, AI, system design etc.</p>
                    <p style="text-align:justify;">He is also the Chairman of ‘Global Innovation &amp; Technical Alliance (GITA)’, a Public Private Partnership (PPP) company promoted jointly by the Technology Development Board (TDB), Department of Science &amp; Technology (DST), Government of India and the Confederation of Indian Industry (CII).</p>
                    <p style="text-align:justify;">Over the last two decades, Mr. Kapuria has held eminent positions in Industry, Industry associations and Government bodies.</p>
                    <p style="text-align:justify;">He has had the privilege to lead the industry to support the policy makers at Trade Talks at various WTO Ministerial and Bi-lateral Trade negotiations.</p>
                    <p style="text-align:justify;">He has been a member on “Trade &amp; Investment” taskforce of B-20 for over a decade.</p>
                    <p style="text-align:justify;">He was recently the Co-Chairman for the Task Force on “Digital Economy &amp; Industry 4.0” at B20 Argentina. He has been a Non-government Member on various Govt. Committees including Make-in-India, Skill Council, MSME Ministry Task Force, Ease of Doing Business, High-level Committee on National Manufacturing Policy etc.</p>
                    <p style="text-align:justify;">Currently Mr. Kapuria is the Chairman of the CII National Committee on Design, the Co-Chair of CII National Council on International Trade Policy &amp; the Chairman of CII Regional Committee on Central Europe.</p>
                    <p style="text-align:justify;">Mr. Kapuria is also the Past President of the ‘Auto Component Manufacturers Association (ACMA)’. He also was Chair of various committees for the Sectoral Association including the ACMA Centre of Technology (ACT).</p>
                    <p style="text-align:justify;">Mr. Deep Kapuria has studied at Mayo College, Ajmer and graduated in Engineering from BITS, Pilani. He is an alumnus of the Harvard Business School, USA.</p>
                    <hr />
                    <h4 style="text-align:justify;">Mr. Rajesh Maheshwari, CEO</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1579590173.ceo_nabcb.jpg" style="width:250px;height:250px;margin:10px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Mr. Maheshwari holds Masters in Chemistry and MBA and has almost 3 decades of experience in quality assurance / management, industrial manufacturing as well as on standards, technical regulations, accreditation &amp; conformity assessment. He has been working in area of accreditation from the initial years of NABL and accreditation systems in India since 1999 and is also an APAC peer evaluator for undertaking peer evaluations of other accreditation bodies.</p>
                    <p style="text-align:justify;">Mr. Maheshwari joined NABCB in 2012 and was responsible for managing Inspection Body Accreditation Program of National Accreditation Board for Certification Bodies (NABCB). He was subsequently promoted to Director (Project Planning &amp; Implementation Division) for Quality Council of India (QCI) wherein he has been responsible for Project Conceptualization, Planning &amp; Management for various projects being executed by QCI, especially for Government. He has earlier worked for National Accreditation Board for Testing &amp; Calibration Laboratories (NABL), then under the Department of Science &amp; Technology (DST) for more than a decade, managing the Testing and Medical Laboratory Accreditation Programs of NABL. Prior to this, had worked in Specialty Chemicals Manufacturing Industry for about a decade. </p>
                    <hr />
                    <h2 style="text-align:justify;">NABET</h2>
                    <h4 style="text-align:justify;">Mr. P. R. Mehta, Chairperson</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1637647814.IMG_7152.jpg" style="width:250px;height:250px;margin:10px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Premendra Raj Mehta is former President of Council of Architecture, India. COA is a statutory Body created by Government of India under the provision of Architects Act 1972, and it is charged with the responsibility to regulate the standards of Education and Practice of Architects, besides registering the Architects. Mr Mehta is currently a member of Technology Sub Mission of Housing for All mission of Government of India.</p>
                    <p style="text-align:justify;">Mr Mehta is former member of Research Council of Central Building Research Institute, Roorkee ( CSIR-CBRI), Lalit Kala Academy and Chairman of All India Board of Architecture, Town Planning &amp; Applied Art Education of AICTE. He has been member of National Board of Accreditation, GATE Committee of Ministry of Education and several other forums concerned with development of higher Education in India. He has also been a member of Expert Committee of Ministry of Commerce on Services.</p>
                    <p style="text-align:justify;">Mr Mehta has represented India at WTO and has participated in several Bilateral and Multilateral negotiations on Market Access for professionals. He has also presented a paper of Recognition of Qualification at WTO, Geneva. He has spoken, as Key Note Speaker, at several national and International forums on subject of Architectural Education, Higher Education, Urban Design and Urban Management, General Agreement on Trade in Services, Professional Practice etc.</p>
                    <p style="text-align:justify;">Extensively travelled, Mr Mehta is in active practice since 1979 and he is the Architect for the Redevelopment of Connaught Place, New Delhi. He holds post graduate qualification in Urban Design and is an Alumnus of School of Planning and Architecture, New Delhi. He has been a Visiting Professor at his alma mater for over two decades.</p>
                    <p style="text-align:justify;">Mr Mehta is also Director of Bhagwan Mahaveer Viklang Sahayata Samiti (BMVSS) known for Jaipur Foot. Over 2 million disabled persons across the globe are the beneficiary of the assistive devices provided by BMVSS, free of cost. Mr Mehta is a recipient of Helen Keller Award for service to Disabled.</p>
                    <h4 style="text-align:justify;">Dr. Manish Kumar, CEO</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1579590238.nabetceo.png" style="width:250px;height:250px;margin:10px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Dr. Manish Kumar working as Chief Executive Officer (CEO) in National Accreditation Board for Education and Training (NABET), Quality Council of India (QCI), New Delhi is Post Graduate in Engineering, Law &amp; Management. He has served for 26 years in various capacity. He started his career as faculty in Haryana Government, Technical Education Department and subsequently serve as Joint Secretary in State Board of Technical Education, Haryana; Assistant Director AICTE; Joint Secretary CBSE; Registrar, National Institute of Technology, Hamirpur and Malaviya National Institute of Technology, Jaipur, State University of Visual &amp; Performing Arts, Rohtak, Punjab Engineering College (Deemed to be University), Chandigarh<br />
                        National Accreditation Board for Education and Training (NABET), a statutory board of Quality Council of India (QCI), an autonomous body set-up by Ministry of Commerce and Industry (MoCI), GoI. DIPP is nodal ministry for QCI.<br />
                        NABET has 4 divisions namely as: Formal Education Excellence Division (FEED), Environment Impact Assessment (EIA), LEAN Manufacturing and Skill Training &amp; Certification (STC).
                    </p>
                    <hr />
                    <h2 style="text-align:justify;">NABH</h2>
                    <h4 style="text-align:justify;">Dr. Brijendra Kumar Rao, Chairperson</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1579590275.Chairman%20nabh.jpg" style="width:250px;height:250px;margin:10px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Dr. Brijendra Kumar Rao was nominated as the Chairperson, National Accreditation Board for Hospitals and Healthcare Providers (NABH) from Jan 2018-Jan 2020.</p>
                    <p style="text-align:justify;">Born on March 24, 1954, Dr. Rao received his Bachelor of Medicine and Bachelor of Surgery degree (MBBS) from Maulana Azad Medical College, University of Delhi in 1975 followed by Doctor of Medicine degree (MD) in Anesthesiology.</p>
                    <p style="text-align:justify;">Dr. Rao started his career as a Consultant Anesthesiologist in Sir Ganga Ram Hospital in 1983 and has been a member of the hospital’s Board of Management from 1996 till date. He has been the Chairperson, Board of Management of Sir Ganga Ram Hospital from 2006-2011. Sir Ganga Ram Hospital is a leading multi-specialty tertiary care hospital in New Delhi with over 1000 beds under its fold.</p>
                    <p style="text-align:justify;">Currently Dr. Rao is the Chairperson, Department of Critical Care and Emergency Medicine of Sir Ganga Ram Hospital. Dr. Rao is a teacher, guide and researcher in the field of Critical Care Medicine and has richly contributed to the scientific literature through his articles, chapters and publications. He has travelled widely and has been a faculty in numerous national and international conferences and workshops on Trauma &amp; Critical Care.</p>
                    <p style="text-align:justify;">He has also received an International Fellowship by American Respiratory Care Foundation and American Association for Respiratory Care, Dallas, USA in 1993 in recognition of his contribution in promoting the respiratory care practices in India.</p>
                    <p style="text-align:justify;">He was a Member of Post-Graduation and Ethics committees of Medical Council of India. Subsequently Dr. Rao served as a member of the Board of Governors, Medical Council of India (2013) and Legal &amp; Financial Advisor to the President, Medical Council of India (2014). Dr. Rao also served for over 7 years as an External Expert on the Technical Advisory Committee, Govt. of NCR Delhi. In the past, Dr. Rao is former president of International Trauma Anesthesia &amp; Critical Care Society (Indian Chapter).</p>
                    <p style="text-align:justify;">For his distinguished services in medial field the Hon’ble President of India awarded him Padma Bhushan, the third highest national award, in April 2009.</p>
                    <p style="text-align:justify;">Dr Rao is the Chairperson, ASSOCHAM National Council on Healthcare &amp; Hospitals since 2007 and has been representing ASSOCHAM in NABH board meetings since 2011.</p>
                    <p style="text-align:justify;"> </p>
                    <h4 style="text-align:justify;">Dr. Atul Mohan Kochhar, CEO</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1587388897.Untitled.png" style="width:296px;height:250px;float:left;margin:10px;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Dr.Atul Mohan Kochhar obtained his MBBS and MD (Dermatology) from the prestigious Delhi University. He was awarded the University Gold medal for excellence in the field of Dermatology, Venereology and Leprology. He is also a Diplomate of National Board (DNB- Dermatology and Venereology), a Member of the National Academy of Medical Sciences and a Fellow of the American Academy of Dermatology.</p>
                    <p style="text-align:justify;">He worked since 2003, as a Professor &amp; Consultant in the Department of Dermatology &amp; STD, Lok Nayak Hospital and Maulana Azad Medical College and, New Delhi.</p>
                    <p style="text-align:justify;">Over the years he has held various Organizational positions viz. the President, Secretary, Vice President, and Executive member of the IADVL –Delhi State branch and has successfully organized as Organizing Secretary various conferences of IADVL – at State and National Level. He is the recipient of various state and national awards including the prestigious Sardari Lal Memorial Award for the year 2015. He is the current President – Society for Pediatric Dermatology and Founder Secretary -<em>Scientific Cosmetological Society</em>. He has More than 70 publications, 4 books and many chapters and multimedia to his credit.</p>
                    <p style="text-align:justify;">An active practicing clinician, with a passion for quality in healthcare, a Principal Assessor with NABH since 2016, he has since December 2019, taken over as the Chief Executive Officer of the National Accreditation Board for Hospitals and Healthcare providers of India. Quality, promotion of patient safety and taking Best healthcare practices to the ‘poorest of the poor ’ are his mission in life.</p>
                    <hr />
                    <h2 style="text-align:justify;">NABL</h2>
                    <h4 style="text-align:justify;">Dr. R K Kotnala, Chairperson</h4>
                    <p style="text-align:justify;"><br />
                        <img alt="" src="public/uploads/ck-images/1609483352.maxresdefault.jpg" style="width:250px;height:250px;float:left;border-width:1px;border-style:solid;" />Dr. Kotnala has got 35 yrs experience as Scientist and is currently Raja Ramanna Fellow at NPL, Chief Scientist (Ex) &amp; Head (former), Environmental Sciences and Biomedical Metrology Division; Materials Engineering &amp; Physics Division of National Physical Laboratory. <br />
                        Fellow National Academy of Sciences India; NASI &amp; IGU having 35 yrs. experience as Scientist is presently Advisor on magnetic measurements on Indian Neutrino Observatory (INO), Mega multinational project 4 times bigger than CERN Neutrino project, Rs 15 Billion, as Raja Ramanna Fellow. Which is one of the highest distinguished honour to a Scientist by the Department of Atomic Energy. Held positions as Chief Scientist &amp; Divisional Head of Environmental Sciences &amp; Biomedical Metrology and Materials Engineering &amp; Physics, National Physical Laboratory. <br />
                        Dr.Kotnala obtained Ph.D on Silicon Solar Cell from Indian Institute of Technology,IIT Delhi.A close interaction to support &gt;132 industries and provided them industrial solutions based on ISO:17025 Quality system. Interaction with 19 Universities &amp; 8 IITs. Published over 491 research papers in SCI peer reviewed journals.&gt;1210 citations in 2019 only, besides 12 US/ Indian patents, +11 industrial consultancies + 4 books and 8 chapters in international books. In 2020; 800 citations in 5 months only. <br />
                        Research interests: Environmental Science, Hydroelectric Cell, Solar Cell, Metrology, Spintronic, Multiferroics, Microwave absorptive, Nano-ferrite &amp; Humidity Sensor. Published 491 papers includes Physical Review Letters, 2008, PRB 2009, Angewandte Chemie Int 2012, J Mat Science A, Sensors &amp; Actuators Chem B, Nanoscale, Int J of Hydrogen Energy, Int J of Energy Research, Renewable Energy, Energy &amp; Fuels, Solar Cell Materials, ACS Applied Materials &amp; Interfaces, J Physical Chemistry C, Applied Physics Lett, J Appl Phys, J Alloys &amp; Compounds etc<br />
                        Awards: Recipient of Renewable Energy India by UBM, REI Award 2018, Asia’s largest Renewable Energy congregation organizers. Fellow National Science Academy of Sciences, India 2015; Outstanding Academician Recognition 2013-APAM, Asia Pacific Academy of Materials, Office of Naval Research (ONR), Washington, USA awarded a prestigious project on multiferroics for development of electromagnetic sensors in 2011. MRSI Medal Award 2008, JSPS Japan Visiting Scientist 1989-90 and others.<br />

                    </p>
                    <h4 style="text-align:justify;">Mr. N Venkateswaran, CEO</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1609499931.1.jpg" style="width:250px;height:250px;margin:10px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Mr. N Venkateswaran has completed Bachelor of Engineering (B.E.) from Madurai Kamaraj University and Master of Science (M.S.) in Quality Management from BITS Pilani. <br />
                        Mr. Venkateswaran has about 25 years of working experience with 9 years in Industry and 16 years in NABL.<br />
                        Mr. Venkateswaran is a member of many international committees like ISO WG 44, ISO WG 56, ISO WG 57, ISO TC 212 etc. He is also member of APAC PT Committee, Technical Committee etc in APAC Region and member of ILAC Accreditation Committee, Arrangement Committee, Laboratory Committee etc in ILAC Region. <br />
                        Mr. Venkateswaran is a well renowned faculty for ISO/IEC 17011, ISO/IEC 17025, ISO/IEC 17043 and ISO/IEC 17034 standards in India and have done number of training programs on the same.<br />
                        Mr. Venkateswaran has initiated the concept of Laboratory Conclave and PTP / RMP Conclave in India.<br />
                        Mr. Venkateswaran has conducted number of NABL Audits as Lead Assessor. He is an APAC Evaluator and participated in evaluation of Accreditation Bodies in other economies. <br />
                        Mr. Venkateswaran has been appointed as Chief Executive Officer (CEO), National Accreditation Board for Testing and Calibration Laboratories (NABL) from 31 May 2019.
                    </p>
                    <hr />
                    <h2 style="text-align:justify;">NBQP</h2>
                    <h4 style="text-align:justify;">Mr. Sunil Mathur, Chairperson</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1610457234.Screenshot%202021-01-12%20184330.png" style="width:250px;height:218px;margin:10px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Sunil Mathur is the Managing Director and Chief Executive Officer of Siemens Limited, India since 2014. In this role he is responsible for Siemens in South Asia. He is currently a Member of the Global Leadership Team of Siemens and a Member of the Board of Siemens Healthcare Private Limited in India and Chairman of the Board of Siemens Gamesa Renewable Energy Private Limited in India. Prior to 2014 he was the Executive Director and Chief Financial Officer of Siemens Limited from 2008 and was responsible also for South Asia. During his stint as Chief Financial Officer of Siemens Limited, he was a Member of the Global Finance Management Team. He has been with Siemens for over 30 years, holding several Senior Management positions in Germany, where he worked in the Power Generation Division as also as Chief Financial Officer of a Global Business Unit in the Industrial Automation Division of the Company. He has worked in Germany, United Kingdom and the United States, apart from India. Sunil Mathur is on the National Councils of the Confederation of Indian Industry (CII) &amp; Federation of Indian Chambers of Commerce &amp; Industry (FICCI), and is Chairman of the CII Smart Manufacturing Council &amp; Chairman of CII Western Region. He is Past President of Indo-German Chamber of Commerce and Bombay Chamber of Commerce &amp; Industry.</p>
                    <p style="text-align:justify;"> </p>
                    <h4 style="text-align:justify;">Mr. C K Biswas, CEO</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1579590397.CEO%20NBQP.jpg" style="width:250px;height:250px;margin:10px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Champak Kumar Biswas, is the CEO of NBQP Board (a constituent board of QCI), since April 2015. A 1985 batch B.Tech Mechanical Engineering Graduate, with over 30 years of experience in the field of Supply Chain Management, Quality Management including Systems/Process/Products/ Services/ Export Quality, TQM/Business Excellence, Environmental Management Systems including Resource/Energy Conservation, mainly in the Automotive sector, FMCG and Infrastructure sector.</p>
                    <p style="text-align:justify;">He has a holistic experience on developing systems, procedures, inspection standards, and in conducting auditing, training etc., at OEM’s and its associates. He adopted a comprehensive approach towards building a Quality Culture in line with the best practices of the Japanese industries, through two decades of hard core experience with Maruti Suzuki India Limited, and other MNC’s. He is leading a young team of Quality enthusiasts at NBQP to promote the concepts of Quality across sectors, including MSME’s, pan-India through Awareness/Training programs, Quality Improvement Projects, Award Schemes, Publications and Events such as Quality Conclaves and Competitions.</p>
                    <p dir="ltr" style="text-align:justify;"> </p>
                    <hr />
                    <h2 style="text-align:justify;">PADD</h2>
                    <h4 style="text-align:justify;">Dr. Manish Pande, Director &amp; Head</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1579590426.HOD_PADD.jpg" style="width:250px;height:250px;margin:10px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Dr. Manish Pande is Head PAD Division at QCI, leading flagship governmental and intergovernmental initiatives such as the India National Platform on Private Sustainability Standards, Voluntary Certification Scheme for Medical Plant Produce (VCSMPP), National GLP Cell (with the National GLP Compliance Monitoring Authority – NGCMA), etc. along with a host of other voluntary schemes administered under QCI. He was responsible for the international implementation of the Yoga Professional Certification Scheme. With a progressive experience of over 20 years in the field of conformity assessment, he has been responsible for design and implementation of various private, voluntary and international standards along with providing technical support, assistance, and stakeholder management with numerous industry associations, and governmental and intergovernmental bodies.</p>
                    <p style="text-align:justify;">Dr. Pande is an expert member of various technical committees and working groups of Schemes that are run by the Government of India and its associate bodies. He has conducted several audits for agriculture based standards such as Organic as per NPOP (India), NOP (USDA - USA), EU; Good Agriculture Practices (GAP), Round Table on Responsible Soy and forestry standards such as FSC and PEFC. In the past, he has worked with the Worldwide Fund (WWF) for Nature – India, SGS – a Swiss based MNC, and as independent consultant with the UNCTAD, FAO, and SAARC. He holds a Ph.D. in forestry from the Forest Research Institute, and has received a Gold Medal for Masters in Forestry.</p>
                    <hr />
                    <h2 style="text-align:justify;">PPID</h2>
                    <h4 style="text-align:justify;">Mr Anil Relia, Head</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1579590517.Anil%20relia.jpg" style="width:250px;height:250px;margin:10px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Mr. Anil Relia is a graduate in Electrical Engineering and has done his M.Tech in Power Systems from IIT Delhi. Before moving to the Department of Science and Technology in 1988, he has worked in the Project Engineering and Contracts Management for 10 years in GEC and NTPC.</p>
                    <p style="text-align:justify;">At DST, he was responsible for nurturing the National Program on Laboratory Accreditation (NABL). After formation of NABL as an autonomous body in 1998, he moved to NABL.</p>
                    <p style="text-align:justify;">He has served as CEO/Head of NABL for 9 years and was instrumental in seeking the APAC (earlier APLAC) Mutual Recognition Arrangement status of NABL in 2000. He has served in the APLAC Board of Management (2012-2016) and a trained APAC Evaluator since 2006.</p>
                    <p style="text-align:justify;">After superannuating in 2019, he is serving as Principal Advisor at QCI and In-charge Project Planning and Implementation Division. In his current role, he is responsible for providing direction to Managers in planning and executing assigned projects and work with them to support new business development opportunities.</p>
                    <p style="text-align:justify;"> </p>
                    <hr />
                    <h2 style="text-align:justify;">ZED</h2>
                    <h4 style="text-align:justify;">Dr. A. Raj, Senior Director &amp; Head</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1609824640.raj.jpg" style="width:250px;height:250px;margin:10px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Dr. A. Raj has been employed with the Quality Council of India since 2015 and is currently posted as a Senior Director &amp; Head of the ZED Division and leads a team of young professionals and experts.</p>
                    <p style="text-align:justify;">Raj’s professional career spans over twenty-eight years based on a PhD from Bundelkhand University, Master’s from Punjab Technical University, Graduation from University of Delhi and a Graduate Diploma from NCHMCT. </p>
                    <p style="text-align:justify;">He has worked with leading international hospitality organisations and Universities in India and comes with experience in the fields of Hospitality Management, Planning &amp; Administration, Business Management and Learning &amp; Development. </p>
                    <p style="text-align:justify;">Raj has represented QCI at several international platforms and forums and has presented papers at ASQ (Texas, USA), ARSO (South Africa, Ethiopia, Kenya, Burkina Faso), EoQ (Slovenia &amp; Portugal), ICQEM (Spain), CSQ (Canada) amongst others. At the national level Raj has presented &amp; showcased QCI initiatives at multiple forums &amp; panel discussions including conclaves, investment summits, industry events of various State Governments apart from Capacity Building of Bankers of India on ZED under the Reserve Bank of India (RBI) initiative, reputed National Industry Chambers like CII, FICCI etc, as well as at Supply Chain meetings of large Enterprises and OEMs. </p>
                    <p style="text-align:justify;">Raj is also a voracious trainer and has been intensely involved in training and development activities. To augment this, he has conducted various Capacity Building programmes/webinars for the Hospitality Industry under the SAATHI initiative of Ministry of Tourism and for multiple sectors under the WASH Scheme of QCI amongst others.<br />

                    </p>
                    <hr />
                    <h2 style="text-align:justify;">TCB</h2>
                    <h4 style="text-align:justify;">Mr. Alok Jain, Director &amp; Head</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1610450880.alok%20sir.jpg" style="width:250px;height:250px;margin:10px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Mr. Alok Jain is a Mechanical Engineer with Post graduation in Industrial engineering from Aligarh Muslim University. Having an experience of more than 25 years in Quality Assurance, Quality Management, TQM, Training &amp; Capacity Building, International Relationship etc. he is empaneled as an evaluator with International Organizations like APLAC (now Asia Pacific Accreditation Cooperation), AFRAC (African Accreditation Cooperation), ARAC (Arab Accreditation Cooperation), SADCA (Southern African Development Community Cooperation in Accreditation, IAF (International Accreditation Forum) and ILAC (International Accreditation Cooperation). He has conducted evaluation of the Accreditation Bodies of Philippines, Korea, Thailand, USA, Malaysia, New Zealand, Japan, China, Russia, Kyrgyzstan, UAE, Algeria, Botswana, Mauritius etc. </p>
                    <p style="text-align:justify;">His area of competence in the field of accreditation includes ISO/IEC 17011, ISO/IEC 17025, ISO/IEC 17020, ISO/IEC 17021, ISO/IEC 17043, ISO/IEC 17065 etc. </p>
                    <p style="text-align:justify;">Adding to his repertoire of skills, he has directed various capacity building and promotional activities in Ethiopia, Kingdom of Saudi Arabia, Qatar, Iran, Nepal, Sri Lanka, Myanmar with the support of World Bank, UNIDO, PTB etc. on various accreditation standards including ISO 15189. Furthermore, he has represented India in the field of Accreditation at various international meetings. </p>
                    <p style="text-align:justify;">Before taking on the responsibility as Head of Training and Capacity (TCB) Cell, Mr Jain has worked with QCI Board ‘NABL’ for about 20 years after spending considerable time in automotive sector where he was liable to execute tasks related to Total Quality Management (TQM), Six Sigma, Quality Management System, Product certification etc. </p>
                    <hr />
                    <h2 style="text-align:justify;">RACB</h2>
                    <h4 style="text-align:justify;">Mr. Sunil K. Mishra, Joint Director &amp; Head</h4>
                    <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1610450505.111.jpg" style="width:250px;height:250px;margin:10px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Dr. S. K. Mishra is currently working in the capacity of Head (Research and Capacity Building Division) at Quality Council of India. Dr. Mishra did his Ph.D. in Materials Technology from IIT BHU and having 24 years of experience in multi-disciplinary fields from Industry, Private University to Central University Services. He received specialized research training by Shibaura Mechatronics, Fuji Films and Hitachi, Japan on hi-tech manufacturing and research equipment. He has been instrumental in design and development of new technologies, academic and research programs, incubation, research centres, in-house R&amp;D recognition, technology transfer, faculty development, workshops, conferences, collaborative research under MoUs, along with editing and publishing journals, proceedings, research papers, patents, books as an editor/author. Dr. Mishra has 7 patents to his credit and more than 100 research papers in International Journal and Proceedings of conferences. He has more than thousand research citations with H-Index 15. He has guided 21 students for their Ph.D. , M.Tech. and B. Tech, author of two books, several reports and articles, one technology transfer. He has delivered several invited talks and is reviewer of six numbers of reputed international journals He has been awarded as TePP Innovator, R&amp;D excellence award, MSME incubatee and by ICDD (International Centre for Diffraction data), USA for his significant contributions in the field of powder diffraction file. He has investigated 7 high value research projects funded by various agencies and extended two numbers of consultancy projects. </p>
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