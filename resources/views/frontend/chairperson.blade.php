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
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-2" style="width:100%">
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
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
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
                <h1>Chairperson</h1>
                <div class="descripton mb-30">
                    <p style="margin-top:0.49cm;margin-bottom:0.49cm;text-align:justify;"><span style="background:#ffffff;"><span style="line-height:0.61cm;"><span><span>
                                        <font face="Times New Roman, serif">
                                            <font size="3">
                                                <font style="font-size:12pt;">
                                                    <font color="#000000">
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Adil Zainulbhai is the Chairman of the Quality Council of India since 2014. He is also the Chairman of Network 18 and TV18 and is currently on the Boards of Reliance Industries Ltd., Larsen &amp; Toubro Ltd., and Cipla. </font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </font>
                                        </font>
                                    </span></span></span></span></p>
                    <p style="margin-top:0.49cm;margin-bottom:0.49cm;text-align:justify;"><img alt="" class="chairmen-images" src="public/uploads/ck-images/1579591002.Adil_Zainulbhai.jpg" style="width:400px;height:300px;border-width:0px;border-style:solid;margin:5px;float:left;" /></p>
                    <p><span style="background:#ffffff;"><span style="line-height:0.61cm;"><span><span>
                                        <font face="Times New Roman, serif">
                                            <font size="3">
                                                <font style="font-size:12pt;">
                                                    <font color="#000000">
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">As Chairman of QCI, Mr. Zainulbhai works closely with senior government leaders to drive process transformation and enhance efficiency of government programmes and initiatives. He has worked with over 23 ministries and has been closely involved in key projects of the Government of India such as ‘Make in India’, ’Start-up India’, ‘Swachh Bharat’, and ‘Government e Marketplace’.</font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </font>
                                        </font>
                                    </span></span></span></span></p>
                    <p><span style="background:#ffffff;"><span style="line-height:0.61cm;"><span><span>
                                        <font face="Times New Roman, serif">
                                            <font size="3">
                                                <font style="font-size:12pt;">
                                                    <font color="#000000">
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Mr. Zainulbhai has been principally responsible for nurturing a culture of professionalism, entrepreneurship and agility in QCI. Under his leadership, QCI has witnessed a new phase of growth and expansion.</font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </font>
                                        </font>
                                    </span></span></span></span></p>
                    <p><span style="background:#ffffff;"><span style="line-height:0.61cm;"><span><span>
                                        <font face="Times New Roman, serif">
                                            <font size="3">
                                                <font style="font-size:12pt;">
                                                    <font color="#000000">
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Recently, the Government of India has appointed Mr. Zainulbhai as the Chairman of the Capacity Building Commission, which will play a central role in government’s National Programme for Civil Services Capacity Building (NPCSCB), also known as “Mission Karmayogi.” This appointment is a recognition of his unwavered commitment to support the government in bringing transformational change. </font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </font>
                                        </font>
                                    </span></span></span></span></p>
                    <p><span style="background:#ffffff;"><span style="line-height:0.61cm;"><span><span>
                                        <font face="Times New Roman, serif">
                                            <font size="3">
                                                <font style="font-size:12pt;">
                                                    <font color="#000000">
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Known as one of the world’s foremost management consultants, Mr. Zainulbhai retired as the Chairman of McKinsey India after a thirty-four-year career. Prior to returning to India in 2004, he led the Washington office of McKinsey and founded the Minneapolis office helping clients across sectors as diverse as telecommunications, consumer electronics, energy, banking, infrastructure, and healthcare.</font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </font>
                                        </font>
                                    </span></span></span></span></p>
                    <p><span style="background:#ffffff;"><span style="line-height:0.61cm;"><span><span>
                                        <font face="Times New Roman, serif">
                                            <font size="3">
                                                <font style="font-size:12pt;">
                                                    <font color="#000000">
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">In 2013, Mr. Zainulbhai co-edited the book, ‘Reimagining India’ which featured 60 authors including prominent businessmen, academics, economists, authors and journalists. </font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </font>
                                        </font>
                                    </span></span></span></span></p>
                    <p><span style="background:#ffffff;"><span style="line-height:0.61cm;"><span><span>
                                        <font face="Times New Roman, serif">
                                            <font size="3">
                                                <font style="font-size:12pt;">
                                                    <font color="#000000">
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">In personal capacity, Mr. Zainulbhai, is very active in community and social causes. He is a Board member on the Piramal Swasthya, Piramal Foundation, and Anant National University. </font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </font>
                                        </font>
                                    </span></span></span></span></p>
                    <p><span style="background:#ffffff;"><span style="line-height:0.61cm;"><span><span>
                                        <font face="Times New Roman, serif">
                                            <font size="3">
                                                <font style="font-size:12pt;">
                                                    <font color="#000000">
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">A native of Mumbai, Mr. Zainulbhai holds an engineering degree from the Indian Institute of Technology, Mumbai, and an MBA from Harvard Business School. In his spare time, he enjoys sailing in Mumbai harbour. </font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </font>
                                            </font>
                                        </font>
                                    </span></span></span></span></p>
                    <p style="margin-bottom:0.35cm;text-align:justify;"><br />

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