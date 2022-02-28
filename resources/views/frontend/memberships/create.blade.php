@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
<section class="basic-inner-page">
    <div class="container">
        <div class="inner-grp clearfix">
            <div id="sticky-anchor"></div>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="row mb-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <strong>
                                        <i class="fas fa-tachometer-alt"></i> @lang('navs.frontend.dashboard')
                                    </strong>
                                </div>
                                <!--card-header-->

                                <div class="card-body">
                                    <div class="block">
                                        <div class="container con_bg con_height">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <section id="main-content">
                                                        <div id="page-main">

                                                            <form role="form" action="https://nbqpmembership.fqp.org.in/ngo_membership/insert" method="post" id="Ngo" enctype="multipart/form-data" novalidate="novalidate">
                                                                <input type="hidden" id="add_more_count" value="0">
                                                                <section class="">
                                                                    <h2>Basic Details</h2>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-4">
                                                                            <label>NGO Name<span>*</span></label>
                                                                            <input type="text" class="form-control" placeholder="Name of NGO" name="Name_NGO" value="CENTRE FOR PUBLIC HEALTH AND FOOD SAFETY" onkeypress="return Alphabets(event,this);">
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label>NGO Category<span>*</span></label>
                                                                            <input type="text" class="form-control" placeholder="" name="Ngo_Category" value="All" readonly="">
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label> information about your services<span>*</span></label>
                                                                            <textarea style="height: 50px;" class="form-control" name="Sector_Engaged" placeholder="Provide brief information about your services">Public Health and Food Safety</textarea>
                                                                        </div>

                                                                        <!--<div class="form-group col-md-4">
                                                                                <label>Photo<span>*</span></label>
                                                                                <div class="input-group">
                                                                                <input type="file" name="userfile" id="Photo" class="form-control"/>
                                                                                                </div>
                                                                                <label id="Photo-error" class="error" for="Photo"></label>
                                                                                <input type="hidden" name="userphoto" id="userphoto" value="0"/> 
                                                                                </div>-->
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-4">
                                                                            <label>Contact Person Name<span>*</span></label>
                                                                            <input type="text" class="form-control" placeholder="Contact Person Name" name="Name_Applicant" value="Savita Bhargawa" onkeypress="return onlyAlphabets(event,this);">
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label>Contact Person Number<span>*</span></label>
                                                                            <input type="text" class="form-control numeric" placeholder="Contact Person Number" name="Number_Applicant" value="9891071949" onkeypress="return limitcount2(this,10,event)">
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label>Mobile No.<span>*</span></label>
                                                                            <input type="text" class="form-control numeric" placeholder="Mobile No." name="Mobile" value="9891071949" onkeypress="return limitcount2(this,10,event)">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-4">
                                                                            <label>Region<span></span></label>
                                                                            <select class="form-control" name="Zone" id="Zone">
                                                                                <option value="">Region</option>
                                                                                <!--<option value="East Region" >East Region</option>-->
                                                                                <option value="1">East Region</option>
                                                                                <!--<option value="West Region" >West Region</option>-->
                                                                                <option value="2">West Region</option>
                                                                                <!--<option value="North Region" >North Region</option>-->
                                                                                <option value="3">North Region</option>
                                                                                <!--<option value="South Region" >South Region</option>-->
                                                                                <option value="4" selected="">South Region</option>
                                                                                <!--<option value="Central Region" >Central Region</option>-->
                                                                                <option value="5">Central Region</option>
                                                                                <!--<option value="North East Region" >North East Region</option>-->
                                                                                <option value="6">North East Region</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label>State<span>*</span></label>
                                                                            <select class="form-control" name="State" id="State">
                                                                                <option value="">State</option>
                                                                                <option value="Andaman and Nicobar Islands">
                                                                                    Andaman and Nicobar Islands </option>
                                                                                <option value="Andhra Pradesh">
                                                                                    Andhra Pradesh </option>
                                                                                <option value="Arunachal Pradesh">
                                                                                    Arunachal Pradesh </option>
                                                                                <option value="Assam">
                                                                                    Assam </option>
                                                                                <option value="Bihar">
                                                                                    Bihar </option>
                                                                                <option value="Chandigarh">
                                                                                    Chandigarh </option>
                                                                                <option value="Chhattisgarh">
                                                                                    Chhattisgarh </option>
                                                                                <option value="Dadra and Nagar Haveli">
                                                                                    Dadra and Nagar Haveli </option>
                                                                                <option value="Delhi" selected="">
                                                                                    Delhi </option>
                                                                                <option value="Goa">
                                                                                    Goa </option>
                                                                                <option value="Gujarat">
                                                                                    Gujarat </option>
                                                                                <option value="Haryana">
                                                                                    Haryana </option>
                                                                                <option value="Himachal Pradesh">
                                                                                    Himachal Pradesh </option>
                                                                                <option value="Jammu and Kashmir">
                                                                                    Jammu and Kashmir </option>
                                                                                <option value="Jharkhand">
                                                                                    Jharkhand </option>
                                                                                <option value="Karnataka">
                                                                                    Karnataka </option>
                                                                                <option value="Karnatka">
                                                                                    Karnatka </option>
                                                                                <option value="Kerala">
                                                                                    Kerala </option>
                                                                                <option value="Madhya Pradesh">
                                                                                    Madhya Pradesh </option>
                                                                                <option value="Maharashtra">
                                                                                    Maharashtra </option>
                                                                                <option value="Manipur">
                                                                                    Manipur </option>
                                                                                <option value="Meghalaya">
                                                                                    Meghalaya </option>
                                                                                <option value="Mizoram">
                                                                                    Mizoram </option>
                                                                                <option value="Nagaland">
                                                                                    Nagaland </option>
                                                                                <option value="Odisha">
                                                                                    Odisha </option>
                                                                                <option value="Puducherry">
                                                                                    Puducherry </option>
                                                                                <option value="Punjab">
                                                                                    Punjab </option>
                                                                                <option value="Rajasthan">
                                                                                    Rajasthan </option>
                                                                                <option value="Tamil Nadu">
                                                                                    Tamil Nadu </option>
                                                                                <option value="Telangana">
                                                                                    Telangana </option>
                                                                                <option value="Tripura">
                                                                                    Tripura </option>
                                                                                <option value="Uttar Pradesh">
                                                                                    Uttar Pradesh </option>
                                                                                <option value="Uttarakhand">
                                                                                    Uttarakhand </option>
                                                                                <option value="West Bengal">
                                                                                    West Bengal </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label>City<span>*</span></label>
                                                                            <select class="form-control" name="District" id="City">
                                                                                <option value="">City</option>
                                                                                <option value="Delhi" selected="">
                                                                                    Delhi </option>
                                                                                <option value="New Delhi">
                                                                                    New Delhi </option>
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-4">
                                                                            <label>Pincode<span>*</span></label>
                                                                            <input type="text" class="form-control numeric" placeholder="Pincode" name="Pincode" value="110025" onkeypress="limitcount(this,6,event)">
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <label>STD Code</label>
                                                                                    <input type="text" class="form-control numeric " placeholder="Std Code" name="StdCode" value="011" onkeypress="limitcount(this,4,event)">
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <label>Telephone No.</label>
                                                                                    <input type="text" class="form-control numeric " placeholder="Telephone" name="Telephone" value="64640069" onkeypress="limitcount(this,8,event)">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label>E-mail ID<span>*</span></label>
                                                                            <input type="email" class="form-control" placeholder="Email ID" name="Email" value="info@cphfs.in" readonly="">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label>GST No/ PAN No</label>
                                                                            <input type="text" name="Gst_No" class="form-control" placeholder="GST No/ PAN No" value="">
                                                                        </div>

                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label>NGO Name &amp; Registered Address<span>*</span></label>
                                                                            <textarea style="height: 170px;" class="form-control" placeholder="Address" name="Office_Address">CENTRE FOR PUBLIC HEALTH AND FOOD SAFETY
                                                                                    Corporate Office:

                                                                                    256/6, 1, Ground Floor, Jasola Vihar, Jasola,
                                                                                    New Delhi-110025
                                                                                    Landline No: +91-11-64640069
                                                                                    Mobile No: +91-9891071949
                                                                                    Email Address: info@cphfs.in
                                                                            </textarea>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label>Address for Correspondence<span>*</span></label>
                                                                            <textarea style="height: 170px;" class="form-control" placeholder="Address" name="Office_Address">CENTRE FOR PUBLIC HEALTH AND FOOD SAFETY
                                                                                    Corporate Office:

                                                                                    256/6, 1, Ground Floor, Jasola Vihar, Jasola,
                                                                                    New Delhi-110025
                                                                                    Landline No: +91-11-64640069
                                                                                    Mobile No: +91-9891071949
                                                                                    Email Address: info@cphfs.in
                                                                            </textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="part">
                                                                        <h2>NGO Details </h2>
                                                                        <div class="row">
                                                                            <div class="form-group col-md-6">
                                                                                <label>Location Of NGO where you are providing your servicess</label>
                                                                                <textarea name="Business_Location" style="height: 170px;" class="form-control" placeholder="Location Of NGO">Corporate Office:

                                                                                    256/6, 1, Ground Floor, Jasola Vihar, Jasola,
                                                                                    New Delhi-110025
                                                                                    Landline No: +91-11-64640069
                                                                                    Mobile No: +91-9891071949
                                                                                    Email Address: info@cphfs.in</textarea>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label>Affiliations And Supports<span>*</span></label>
                                                                                <textarea style="height: 170px;" class="form-control" name="Affiliations_Supports" placeholder="Affiliations And Supports">ASSOCIATION OF REGULATORY AFFAIRS PROFESSIONALS
                                                                                    H.No.-313/87, S/F, Street No.-3, Tulsi Nagar, Inderlok, New Delhi-110035
                                                                                    Email id: info@arap.co.in, Mob: 9910988764
                                                                                    Quality Council of India (FQP) Membership No.-CORP/AT/5036</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">

                                                                            <div class="form-group col-md-3">
                                                                                <label>Name of Directors / Partners <span>*</span></label>
                                                                                <input type="text" class="form-control " placeholder="Name of Directors / Partners" name="Name_Directors" value="Dr.Umakant Dubey" onkeypress="return onlyAlphabets(event,this);">
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label>Year of Registration<span>*</span></label>
                                                                                <select class="form-control" id="myval" name="Year_Incorporation">
                                                                                    <option value="">Year of Registration</option>

                                                                                    <option value="2022">2022</option>

                                                                                    <option value="2021">2021</option>

                                                                                    <option value="2020">2020</option>

                                                                                    <option value="2019">2019</option>

                                                                                    <option value="2018">2018</option>

                                                                                    <option value="2017">2017</option>

                                                                                    <option value="2016" selected="">2016</option>

                                                                                    <option value="2015">2015</option>

                                                                                    <option value="2014">2014</option>

                                                                                    <option value="2013">2013</option>

                                                                                    <option value="2012">2012</option>

                                                                                    <option value="2011">2011</option>

                                                                                    <option value="2010">2010</option>

                                                                                    <option value="2009">2009</option>

                                                                                    <option value="2008">2008</option>

                                                                                    <option value="2007">2007</option>

                                                                                    <option value="2006">2006</option>

                                                                                    <option value="2005">2005</option>

                                                                                    <option value="2004">2004</option>

                                                                                    <option value="2003">2003</option>

                                                                                    <option value="2002">2002</option>

                                                                                    <option value="2001">2001</option>

                                                                                    <option value="2000">2000</option>

                                                                                    <option value="1999">1999</option>

                                                                                    <option value="1998">1998</option>

                                                                                    <option value="1997">1997</option>

                                                                                    <option value="1996">1996</option>

                                                                                    <option value="1995">1995</option>

                                                                                    <option value="1994">1994</option>

                                                                                    <option value="1993">1993</option>

                                                                                    <option value="1992">1992</option>

                                                                                    <option value="1991">1991</option>

                                                                                    <option value="1990">1990</option>

                                                                                    <option value="1989">1989</option>

                                                                                    <option value="1988">1988</option>

                                                                                    <option value="1987">1987</option>

                                                                                    <option value="1986">1986</option>

                                                                                    <option value="1985">1985</option>

                                                                                    <option value="1984">1984</option>

                                                                                    <option value="1983">1983</option>

                                                                                    <option value="1982">1982</option>

                                                                                    <option value="1981">1981</option>

                                                                                    <option value="1980">1980</option>

                                                                                    <option value="1979">1979</option>

                                                                                    <option value="1978">1978</option>

                                                                                    <option value="1977">1977</option>

                                                                                    <option value="1976">1976</option>

                                                                                    <option value="1975">1975</option>

                                                                                    <option value="1974">1974</option>

                                                                                    <option value="1973">1973</option>

                                                                                    <option value="1972">1972</option>

                                                                                    <option value="1971">1971</option>

                                                                                    <option value="1970">1970</option>

                                                                                    <option value="1969">1969</option>

                                                                                    <option value="1968">1968</option>

                                                                                    <option value="1967">1967</option>

                                                                                    <option value="1966">1966</option>

                                                                                    <option value="1965">1965</option>

                                                                                    <option value="1964">1964</option>

                                                                                    <option value="1963">1963</option>

                                                                                    <option value="1962">1962</option>

                                                                                    <option value="1961">1961</option>

                                                                                    <option value="1960">1960</option>

                                                                                    <option value="1959">1959</option>

                                                                                    <option value="1958">1958</option>

                                                                                    <option value="1957">1957</option>

                                                                                    <option value="1956">1956</option>

                                                                                    <option value="1955">1955</option>

                                                                                    <option value="1954">1954</option>

                                                                                    <option value="1953">1953</option>

                                                                                    <option value="1952">1952</option>

                                                                                    <option value="1951">1951</option>

                                                                                    <option value="1950">1950</option>

                                                                                    <option value="1949">1949</option>

                                                                                    <option value="1948">1948</option>

                                                                                    <option value="1947">1947</option>

                                                                                    <option value="1946">1946</option>

                                                                                    <option value="1945">1945</option>

                                                                                    <option value="1944">1944</option>

                                                                                    <option value="1943">1943</option>

                                                                                    <option value="1942">1942</option>

                                                                                    <option value="1941">1941</option>

                                                                                    <option value="1940">1940</option>

                                                                                    <option value="1939">1939</option>

                                                                                    <option value="1938">1938</option>

                                                                                    <option value="1937">1937</option>

                                                                                    <option value="1936">1936</option>

                                                                                    <option value="1935">1935</option>

                                                                                    <option value="1934">1934</option>

                                                                                    <option value="1933">1933</option>

                                                                                    <option value="1932">1932</option>

                                                                                    <option value="1931">1931</option>

                                                                                    <option value="1930">1930</option>

                                                                                    <option value="1929">1929</option>

                                                                                    <option value="1928">1928</option>

                                                                                    <option value="1927">1927</option>

                                                                                    <option value="1926">1926</option>

                                                                                    <option value="1925">1925</option>

                                                                                    <option value="1924">1924</option>

                                                                                    <option value="1923">1923</option>

                                                                                    <option value="1922">1922</option>

                                                                                    <option value="1921">1921</option>

                                                                                    <option value="1920">1920</option>

                                                                                    <option value="1919">1919</option>

                                                                                    <option value="1918">1918</option>

                                                                                    <option value="1917">1917</option>

                                                                                    <option value="1916">1916</option>

                                                                                    <option value="1915">1915</option>

                                                                                    <option value="1914">1914</option>

                                                                                    <option value="1913">1913</option>

                                                                                    <option value="1912">1912</option>

                                                                                    <option value="1911">1911</option>

                                                                                    <option value="1910">1910</option>

                                                                                    <option value="1909">1909</option>

                                                                                    <option value="1908">1908</option>

                                                                                    <option value="1907">1907</option>

                                                                                    <option value="1906">1906</option>

                                                                                    <option value="1905">1905</option>

                                                                                    <option value="1904">1904</option>

                                                                                    <option value="1903">1903</option>

                                                                                    <option value="1902">1902</option>

                                                                                    <option value="1901">1901</option>

                                                                                    <option value="1900">1900</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label>Number of Employees </label>
                                                                                <input type="text" class="form-control numeric" placeholder="Number of Employees" name="Permanent_Full_Time_Employees" value="10" onkeypress="limitcount(this,5,event)">
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label>FQP Accreditation or Affiliations<span></span></label>
                                                                                <input type="text" class="form-control" placeholder="FQP Memberships Number" name="Membership_Bodes_Affiliation" value="CORP/NGO/5257/2017 ">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">

                                                                    </div>
                                                                    <div class="part">
                                                                        <h2>Upload Documents</h2>
                                                                        <div class="row">

                                                                            <div class="col-md-4 col-sm-4 form-group">
                                                                                <label>Upload Your FQP Document<span style="color:#F00;"><br>(File size should not exceed 2 MB)</span><span style="color:#F00;"><br>(Upload only pdf,doc,docx file)</span></label>
                                                                                <div class="input-group">
                                                                                    <input type="file" name="fqp_ID" class="form-control" id="fqp_ID">
                                                                                </div>
                                                                                <label id="fqp_ID-error" class="error" for="fqp_ID"></label>

                                                                                <input type="hidden" name="New_fqp_ID" id="New_fqp_ID" value="">
                                                                            </div>
                                                                            <input type="hidden" name="sub_category" value="15">
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <section class="">
                                                                    <!--<span class="participant_details">Participant Details</span>-->
                                                                    <h2>Provide names of personal to whom membership card to be issued.</h2>

                                                                    <div class="NGO_Membership mydiv">

                                                                        <div class="row">
                                                                            <div class="col-md-4 form-group">
                                                                                <label>NGO Member Name</label>
                                                                                <input type="text" name="NGO_Member_Name" class="form-control" value="Savita Bhargawa" placeholder="NGO Member Name" onkeypress="return onlyAlphabets(event,this);">
                                                                            </div>
                                                                            <div class="col-md-4 form-group">
                                                                                <label>NGO Member Mobile No.</label>
                                                                                <input type="text" name="NGO_Member_Mobile" class="form-control numeric" value="8130595754" placeholder="NGO Member Mobile No." onkeypress="return limitcount2(this,10,event)">
                                                                            </div>
                                                                            <div class="col-md-4 form-group">
                                                                                <label>NGO Member Email ID</label>
                                                                                <input type="email" name="NGO_Member_Email" class="form-control" value="info@cphfs.in" placeholder="NGO Member Email ID">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-4 form-group">
                                                                                <label>NGO Member Designation</label>
                                                                                <input type="text" name="NGO_Member_Designation" class="form-control" value="GENERAL  SECRETARY" placeholder="NGO Member Designation" onkeypress="return onlyAlphabets(event,this);">
                                                                            </div>
                                                                            <div class="col-md-4 form-group">
                                                                                <label>NGO Member Organization </label>
                                                                                <input type="text" name="NGO_Member_Organization" class="form-control" value="CENTRE FOR PUBLIC HEALTH AND FOOD SAFETY" placeholder="NGO Member Organization" onkeypress="return Alphabets(event,this);">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </section>
                                                                <h2>Code of Ethics.</h2>
                                                                <p style="text-align: justify;">FQP membership is a testimony for a quality professional's/organisation's involvement in quality related activities in his/her/their work domain. Professional membership scheme does not imply membership to the FQP board. The certificate is only to ensure the appropriate use of FQP membership for individual/ organisational growth as well as Quality promotion activities. There shall be no misinterpretation of facts to demean FQP, or inappropriate promotion for concerned interest.</p>
                                                                <p>
                                                                </p>
                                                                <p><strong>FQP members are expected to promote the dignity of the profession and solemnly
                                                                        affirm to abide by the following Do and Don’t;</strong></p>

                                                                <h3>Do</h3>
                                                                <ul>
                                                                    <li>Use only valid FQP membership status and number for promotional purpose.
                                                                    </li>
                                                                    <li>Send only valid documents to support the membership application.
                                                                    </li>
                                                                    <li>Strive to increase the competence and prestige quality of profession.
                                                                    </li>
                                                                    <li>Maintain membership as a means for quality allegiance and professional growth and avoid the use of such membership for the sole purpose of solicitation of business or for personal financial gains.
                                                                    </li>
                                                                    <li>Continue with professional development as well as facilitate the same for others.
                                                                    </li>
                                                                    <li>Offer feedback with suggestions for improvement or involvement and contribute to the quarterly magazine.
                                                                    </li>
                                                                </ul>
                                                                <h3>Don’ts</h3>
                                                                <ul>
                                                                    <li>Use FQP/NBQP logo through any means.</li>
                                                                    <li>Do not use any phrase other than that quoted in bold in the certificate issued while quoting the membership category in any document or media.
                                                                    </li>
                                                                    <li>Send any Project report/ data to FQP unless asked for
                                                                    </li>
                                                                    <li>Involve in fraudulent, illegal criminal activities or unethical conduct as it may call for debarring of membership/ cancellation of membership.
                                                                    </li>
                                                                    <li>Criticize or use hate languages/ speech while interacting with other members.
                                                                    </li>
                                                                    <li>Engage in unethical, unprofessional practices or political dialogues with other FQP registered members.
                                                                    </li>
                                                                </ul>
                                                                <br>

                                                                <input type="checkbox" value="1" name="codeofethics" required="" aria-required="true">
                                                                <bold>I/we Accept.</bold><br>
                                                                1. The information given above by me is true to the best of my knowledge.<br>
                                                                2. I agree to abide by the code of ethics as above.<br>
                                                                3. The information submitted in the form above is true to the best of my/our knowledge.<br>
                                                                4. I/we have read and understood the ‘Terms &amp; Conditions’ of the FQP Professional Membership Scheme.<br>
                                                                5. I/We agree to abide by the ‘code of ethics’ of the FQP Professional Membership Scheme and understand that my/our membership shall be suspended/cancelled if there is a breach of 'Code of Ethics’ at any given point of time.<br>
                                                                6. I/We agree to submit the ‘Undertaking’ in the prescribed format once the membership number is issued (for Educational Institutions/NGOs) <a href="../uploads/Undertaking_Affidavit_NBQP.docx">(format enclosed)</a>
                                                                <br><br>
                                                                <a href="../uploads/2.pdf">
                                                                    <h5><b><u>Non-compliance</u></b></h5>
                                                                </a>
                                                                <br> <br>
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <button class="btn btn-success btn-sm pull-right" type="submit">Send Information</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- card-body -->
                            </div><!-- card -->
                        </div><!-- row -->
                    </div><!-- row -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection