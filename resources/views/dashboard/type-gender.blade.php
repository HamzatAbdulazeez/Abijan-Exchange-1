@extends('layouts.dashboard-frontend')

@section('page-content')
<!-- [ Layout container ] Start -->
<div class="layout-container">
    <!-- [ Layout navbar ( Header ) ] Start -->
    @includeIf('layouts.dashboard-navbar')
    <!-- [ Layout navbar ( Header ) ] End -->

    <!-- [ Layout content ] Start -->
    <div class="layout-content">

        <!-- [ content ] Start -->
        <!--/ menu  -->
        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">
                <!-- page title  -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h4 class="m-0">Profile Settings</h4><br>
                                        <ul class="nav nav-pills custom_bootstrap_nav">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#nairadiv" data-toggle="tab">Change Date of Birth</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="profile"> Back to my Profile</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="white_card_body tab-pane fade active show" id="nairadiv">
                                    <div class="exchange_widget">
                                        <form name="mySettform" id="mySettform" onsubmit="event.preventDefault();" class="currency_validate" autocomplete="off">




                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <div class="input-group ">
                                                    <select name="day_sett" id="day_sett" class="form-control nice_Select" style="display: none;">
                                                        <option value="">Day</option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                    <div class="nice-select form-control nice_Select" tabindex="0"><span class="current">Day</span>
                                                        <div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div>
                                                        <ul class="list">
                                                            <li data-value="" class="option selected">Day</li>
                                                            <li data-value="01" class="option">1</li>
                                                            <li data-value="02" class="option">2</li>
                                                            <li data-value="03" class="option">3</li>
                                                            <li data-value="04" class="option">4</li>
                                                            <li data-value="05" class="option">5</li>
                                                            <li data-value="06" class="option">6</li>
                                                            <li data-value="07" class="option">7</li>
                                                            <li data-value="08" class="option">8</li>
                                                            <li data-value="09" class="option">9</li>
                                                            <li data-value="10" class="option">10</li>
                                                            <li data-value="11" class="option">11</li>
                                                            <li data-value="12" class="option">12</li>
                                                            <li data-value="13" class="option">13</li>
                                                            <li data-value="14" class="option">14</li>
                                                            <li data-value="15" class="option">15</li>
                                                            <li data-value="16" class="option">16</li>
                                                            <li data-value="17" class="option">17</li>
                                                            <li data-value="18" class="option">18</li>
                                                            <li data-value="19" class="option">19</li>
                                                            <li data-value="20" class="option">20</li>
                                                            <li data-value="21" class="option">21</li>
                                                            <li data-value="22" class="option">22</li>
                                                            <li data-value="23" class="option">23</li>
                                                            <li data-value="24" class="option">24</li>
                                                            <li data-value="25" class="option">25</li>
                                                            <li data-value="26" class="option">26</li>
                                                            <li data-value="27" class="option">27</li>
                                                            <li data-value="28" class="option">28</li>
                                                            <li data-value="29" class="option">29</li>
                                                            <li data-value="30" class="option">30</li>
                                                            <li data-value="31" class="option">31</li>
                                                        </ul>
                                                    </div>
                                                    <select name="month_sett" id="month_sett" class="form-control nice_Select" style="display: none;">
                                                        <option value="">Month</option>
                                                        <option value="01">January</option>
                                                        <option value="02">February</option>
                                                        <option value="03">March</option>
                                                        <option value="04">April</option>
                                                        <option value="05">May</option>
                                                        <option value="06">June</option>
                                                        <option value="07">July</option>
                                                        <option value="08">August</option>
                                                        <option value="09">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                    <div class="nice-select form-control nice_Select" tabindex="0"><span class="current">Month</span>
                                                        <div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div>
                                                        <ul class="list">
                                                            <li data-value="" class="option selected">Month</li>
                                                            <li data-value="01" class="option">January</li>
                                                            <li data-value="02" class="option">February</li>
                                                            <li data-value="03" class="option">March</li>
                                                            <li data-value="04" class="option">April</li>
                                                            <li data-value="05" class="option">May</li>
                                                            <li data-value="06" class="option">June</li>
                                                            <li data-value="07" class="option">July</li>
                                                            <li data-value="08" class="option">August</li>
                                                            <li data-value="09" class="option">September</li>
                                                            <li data-value="10" class="option">October</li>
                                                            <li data-value="11" class="option">November</li>
                                                            <li data-value="12" class="option">December</li>
                                                        </ul>
                                                    </div>
                                                    <select name="year_sett" id="year_sett" class="form-control nice_Select" style="display: none;">
                                                        <option value="">Year</option>
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
                                                    </select>
                                                    <div class="nice-select form-control nice_Select" tabindex="0"><span class="current">Year</span>
                                                        <div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div>
                                                        <ul class="list">
                                                            <li data-value="" class="option selected">Year</li>
                                                            <li data-value="2005" class="option">2005</li>
                                                            <li data-value="2004" class="option">2004</li>
                                                            <li data-value="2003" class="option">2003</li>
                                                            <li data-value="2002" class="option">2002</li>
                                                            <li data-value="2001" class="option">2001</li>
                                                            <li data-value="2000" class="option">2000</li>
                                                            <li data-value="1999" class="option">1999</li>
                                                            <li data-value="1998" class="option">1998</li>
                                                            <li data-value="1997" class="option">1997</li>
                                                            <li data-value="1996" class="option">1996</li>
                                                            <li data-value="1995" class="option">1995</li>
                                                            <li data-value="1994" class="option">1994</li>
                                                            <li data-value="1993" class="option">1993</li>
                                                            <li data-value="1992" class="option">1992</li>
                                                            <li data-value="1991" class="option">1991</li>
                                                            <li data-value="1990" class="option">1990</li>
                                                            <li data-value="1989" class="option">1989</li>
                                                            <li data-value="1988" class="option">1988</li>
                                                            <li data-value="1987" class="option">1987</li>
                                                            <li data-value="1986" class="option">1986</li>
                                                            <li data-value="1985" class="option">1985</li>
                                                            <li data-value="1984" class="option">1984</li>
                                                            <li data-value="1983" class="option">1983</li>
                                                            <li data-value="1982" class="option">1982</li>
                                                            <li data-value="1981" class="option">1981</li>
                                                            <li data-value="1980" class="option">1980</li>
                                                            <li data-value="1979" class="option">1979</li>
                                                            <li data-value="1978" class="option">1978</li>
                                                            <li data-value="1977" class="option">1977</li>
                                                            <li data-value="1976" class="option">1976</li>
                                                            <li data-value="1975" class="option">1975</li>
                                                            <li data-value="1974" class="option">1974</li>
                                                            <li data-value="1973" class="option">1973</li>
                                                            <li data-value="1972" class="option">1972</li>
                                                            <li data-value="1971" class="option">1971</li>
                                                            <li data-value="1970" class="option">1970</li>
                                                            <li data-value="1969" class="option">1969</li>
                                                            <li data-value="1968" class="option">1968</li>
                                                            <li data-value="1967" class="option">1967</li>
                                                            <li data-value="1966" class="option">1966</li>
                                                            <li data-value="1965" class="option">1965</li>
                                                            <li data-value="1964" class="option">1964</li>
                                                            <li data-value="1963" class="option">1963</li>
                                                            <li data-value="1962" class="option">1962</li>
                                                            <li data-value="1961" class="option">1961</li>
                                                            <li data-value="1960" class="option">1960</li>
                                                            <li data-value="1959" class="option">1959</li>
                                                            <li data-value="1958" class="option">1958</li>
                                                            <li data-value="1957" class="option">1957</li>
                                                            <li data-value="1956" class="option">1956</li>
                                                            <li data-value="1955" class="option">1955</li>
                                                            <li data-value="1954" class="option">1954</li>
                                                            <li data-value="1953" class="option">1953</li>
                                                            <li data-value="1952" class="option">1952</li>
                                                            <li data-value="1951" class="option">1951</li>
                                                            <li data-value="1950" class="option">1950</li>
                                                            <li data-value="1949" class="option">1949</li>
                                                            <li data-value="1948" class="option">1948</li>
                                                            <li data-value="1947" class="option">1947</li>
                                                            <li data-value="1946" class="option">1946</li>
                                                            <li data-value="1945" class="option">1945</li>
                                                            <li data-value="1944" class="option">1944</li>
                                                            <li data-value="1943" class="option">1943</li>
                                                            <li data-value="1942" class="option">1942</li>
                                                            <li data-value="1941" class="option">1941</li>
                                                            <li data-value="1940" class="option">1940</li>
                                                            <li data-value="1939" class="option">1939</li>
                                                            <li data-value="1938" class="option">1938</li>
                                                            <li data-value="1937" class="option">1937</li>
                                                            <li data-value="1936" class="option">1936</li>
                                                            <li data-value="1935" class="option">1935</li>
                                                            <li data-value="1934" class="option">1934</li>
                                                            <li data-value="1933" class="option">1933</li>
                                                            <li data-value="1932" class="option">1932</li>
                                                            <li data-value="1931" class="option">1931</li>
                                                            <li data-value="1930" class="option">1930</li>
                                                            <li data-value="1929" class="option">1929</li>
                                                            <li data-value="1928" class="option">1928</li>
                                                            <li data-value="1927" class="option">1927</li>
                                                            <li data-value="1926" class="option">1926</li>
                                                            <li data-value="1925" class="option">1925</li>
                                                            <li data-value="1924" class="option">1924</li>
                                                            <li data-value="1923" class="option">1923</li>
                                                            <li data-value="1922" class="option">1922</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group " id="securityquesion">
                                                <div class="d-flex justify-content-between mt-3">
                                                    <p class="mb-0 questions">Secret Question:</p>
                                                    <p class="mb-0 answers"><a href="settings?type=question" alt="Set Question" title="Set Security Questions">Set your Secret Question</a></p>
                                                </div>
                                            </div>
                                            <button type="button" name="sett_submit" id="sett_submit" class="btn_1 w-100 ">Update Date of Birth <span class="loadingText fa fa-spinner fa-spin fa-2x" style="display:none;float:right;" id="loadingText_sett"></span></button><input type="hidden" id="prof" name="prof" value="dob">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Settings FAQs</h3>
                                </div>
                            </div>
                            <!-- accordian -->
                            <div class="accordion accordion_custom mb_50" id="accordion_ex">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Can I change my email address?
                                            </a>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <p>Your email address on Abijan Exchange can be changed anytime, but you need to verify the email anytime you make the change.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Can I use someone else's details on my Abijan Exchange account?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <p>No, you can't link personal information that isn't yours to your own Abijan Exchange account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Can I change my phone number after verification?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <p>Once your identity has been verified on Abijan Exchange, your main phone number can't be removed except the phone number changed on your BVN record.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordian -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ content ] End -->

        <!-- [ Layout footer ] Start -->
        @includeIf('layouts.dashboard-footer')
        <!-- [ Layout footer ] End -->
    </div>
    <!-- [ Layout content ] Start -->
</div>
<!-- [ Layout container ] End -->
@endsection
