<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="description" content="Themeforest Template Polo, html template">
      <link rel="icon" type="image/png" href="images/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Purchase Invoice</title>
   </head>
   <body>
      <div class="body-inner">
         <?php require_once '../include/header.php'; ?>
         <section id="page-content">
            <div class="container">
               <div class="heading-text heading-line text-center">
                  <h4>Purchase Invoice</h4>
               </div>
               <div class="row justify-content-center">
                  <div class="content col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <form id="wizard1" class="wizard">
                              <h3>Purchase Invoice</h3>
                              <div class="wizard-content" >
                                 <div class="row ">
                                    <div class="col-md-6">
                                       <h5>VERVE FINANCIAL SERVICE PRIVATE LIMITED</h5>
                                       <h5>6, Dhanammal Street,</h5>
                                       <h5>Spurtank Road, Chetpet,</h5>
                                       <h5>Chennai - 600 031, </h5>
                                       <h5>Tamil Nadu, India.</h5>
                                       <h5><b>GSTIN:33AABCL3984G2ZH</b></h5>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="invoice">Invoice No <span style='color:red'>*</span></label>
                                          <input type="text" class="form-control" name="invoice" id="invoice"  required>
                                       </div>
                                       <div class="form-group">
                                          <label for="purchase_order_number">Purchase Order Number</label>
                                          <input type="text" class="form-control" name="purchase_order_number" id="purchase_order_number">
                                       </div>
                                       <div class="form-row">
                                          <div class="form-group col-md-6">
                                             <label for="invoice_date">Invoice Date <span style='color:red'>*</span></label>
                                             <input type="date" class="form-control" name="invoice_date" id="invoice_date"  required>
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label for="due_date">Due Date</label>
                                             <input type="date" class="form-control" name="due_date" id="due_date"  >
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="quotation_number">Quotation Number</label>
                                          <input type="text" class="form-control" name="quotation_number" id="quotation_number" >
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="bill">
                                    <h4>Billed By</h4>
                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                          <label for="business_name">Supplier Name <span style='color:red'>*</span></label>
                                          <input type="text" class="form-control" name="business_name" id="business_name"  required>
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="your_gstin">Your GSTIN</label>
                                          <input type="text" class="form-control" name="your_gstin" id="your_gstin"  >
                                       </div>
                                    </div>
                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                          <label for="email">Email</label>
                                          <input type="email" class="form-control" name="email" id="email" >
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="phone">Mobile Number <span style='color:red'>*</span></label>
                                          <input type="text" class="form-control required" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="mobile" id="mobile" >
                                       </div>
                                    </div>
                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                          <label for="address">Address Line 1</label>
                                          <input type="text" class="form-control" name="address" id="address" >
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="address1">Address Line 2</label>
                                          <input type="text" class="form-control" name="address1" id="address1" >
                                       </div>
                                    </div>
                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                          <label for="city">City</label>
                                          <input type="text" class="form-control" name="city" id="city" >
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label>Postal Code:</label>
                                          <input type="number" class="form-control" name="postal" id="postal" >
                                       </div>
                                    </div>
                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                          <label for="state">State</label>
                                          <div id="statehtml" style="display:none;">
                                             <select name="state" id="state" class="form-control">
                                                <option value="ANDAMAN AND NICOBAR ISLANDS">ANDAMAN AND NICOBAR ISLANDS</option>
                                                <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                                                <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                                                <option value="ASSAM">ASSAM</option>
                                                <option value="BIHAR">BIHAR</option>
                                                <option value="CHHATTISGARH">CHHATTISGARH</option>
                                                <option value="GOA">GOA</option>
                                                <option value="GUJARAT">GUJARAT</option>
                                                <option value="HARYANA">HARYANA</option>
                                                <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                                                <option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
                                                <option value="JHARKHAND">JHARKHAND</option>
                                                <option value="KARNATAKA">KARNATAKA</option>
                                                <option value="KERALA">KERALA</option>
                                                <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                                <option value="MAHARASHTRA">MAHARASHTRA</option>
                                                <option value="MANIPUR">MANIPUR</option>
                                                <option value="MEGHALAYA">MEGHALAYA</option>
                                                <option value="MIZORAM">MIZORAM</option>
                                                <option value="NAGALAND">NAGALAND</option>
                                                <option value="PUNJAB">PUNJAB</option>
                                                <option value="RAJASTHAN">RAJASTHAN</option>
                                                <option value="SIKKIM">SIKKIM</option>
                                                <option value="TAMIL NADU">TAMIL NADU</option>
                                                <option value="TRIPURA">TRIPURA</option>
                                                <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                                                <option value="UTTARAKHAND">UTTARAKHAND</option>
                                                <option value="WEST BENGAL">WEST BENGAL</option>
                                                <option value="CHANDIGARH">CHANDIGARH</option>
                                                <option value="DADRA AND NAGAR HAVELI">DADRA AND NAGAR HAVELI</option>
                                                <option value="DAMAN AND DIU">DAMAN AND DIU</option>
                                                <option value="DELHI">DELHI</option>
                                                <option value="LAKSHADWEEP">LAKSHADWEEP</option>
                                                <option value="OTHER TERRITORY">OTHER TERRITORY</option>
                                                <option value="TELANGANA">TELANGANA</option>
                                                <option value="ODISHA">ODISHA</option>
                                                <option value="INTERNATIONAL">INTERNATIONAL</option>
                                                <option value="PUDUCHERRY">PUDUCHERRY</option>
                                             </select>
                                          </div>
                                          <div id="statehtml1">
                                             <input type="text" class="form-control" name="state" id="state"  value="">
                                          </div>
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="country">Country</label>
                                          <select name="country" id="country" class="form-control">
                                             <option value=""> -Select Country- </option>
                                             <option value="AFGHANISTAN">AFGHANISTAN</option>
                                             <option value="ALBANIA">ALBANIA</option>
                                             <option value="ALGERIA">ALGERIA</option>
                                             <option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
                                             <option value="ANDORRA">ANDORRA</option>
                                             <option value="ANGOLA">ANGOLA</option>
                                             <option value="ANGUILLA">ANGUILLA</option>
                                             <option value="ANTIGUA AND BARBUDA">ANTIGUA AND BARBUDA</option>
                                             <option value="ARGENTINA">ARGENTINA</option>
                                             <option value="ARMENIA">ARMENIA</option>
                                             <option value="ARUBA">ARUBA</option>
                                             <option value="AUSTRALIA">AUSTRALIA</option>
                                             <option value="AUSTRIA">AUSTRIA</option>
                                             <option value="AZERBAIJAN">AZERBAIJAN</option>
                                             <option value="BAHAMAS">BAHAMAS</option>
                                             <option value="BAHRAIN">BAHRAIN</option>
                                             <option value="BANGLADESH">BANGLADESH</option>
                                             <option value="BARBADOS">BARBADOS</option>
                                             <option value="BELARUS">BELARUS</option>
                                             <option value="BELGIUM">BELGIUM</option>
                                             <option value="BELIZE">BELIZE</option>
                                             <option value="BENIN">BENIN</option>
                                             <option value="BERMUDA">BERMUDA</option>
                                             <option value="BHUTAN">BHUTAN</option>
                                             <option value="BOLIVIA">BOLIVIA</option>
                                             <option value="BOSNIA AND HERZEGOVINA">BOSNIA AND HERZEGOVINA</option>
                                             <option value="BOTSWANA">BOTSWANA</option>
                                             <option value="BOUVET ISLAND">BOUVET ISLAND</option>
                                             <option value="BRAZIL">BRAZIL</option>
                                             <option value="BRITISH INDIAN OCEAN TERRITORY">BRITISH INDIAN OCEAN TERRITORY</option>
                                             <option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
                                             <option value="BULGARIA">BULGARIA</option>
                                             <option value="BURKINA FASO">BURKINA FASO</option>
                                             <option value="BURUNDI">BURUNDI</option>
                                             <option value="CAMBODIA">CAMBODIA</option>
                                             <option value="CAMEROON">CAMEROON</option>
                                             <option value="CANADA">CANADA</option>
                                             <option value="CAPE VERDE">CAPE VERDE</option>
                                             <option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
                                             <option value="CENTRAL AFRICAN REPUBLIC">CENTRAL AFRICAN REPUBLIC</option>
                                             <option value="CHAD">CHAD</option>
                                             <option value="CHILE">CHILE</option>
                                             <option value="CHINA">CHINA</option>
                                             <option value="CHRISTMAS ISLAND">CHRISTMAS ISLAND</option>
                                             <option value="COCOS (KEELING) ISLANDS">COCOS (KEELING) ISLANDS</option>
                                             <option value="COLOMBIA">COLOMBIA</option>
                                             <option value="COMOROS">COMOROS</option>
                                             <option value="CONGO">CONGO</option>
                                             <option value="CONGO, THE DEMOCRATIC REPUBLIC OF THE">CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                                             <option value="COOK ISLANDS">COOK ISLANDS</option>
                                             <option value="COSTA RICA">COSTA RICA</option>
                                             <option value="COTE D'IVOIRE">COTE D'IVOIRE</option>
                                             <option value="CROATIA">CROATIA</option>
                                             <option value="CUBA">CUBA</option>
                                             <option value="CYPRUS">CYPRUS</option>
                                             <option value="CZECH REPUBLIC">CZECH REPUBLIC</option>
                                             <option value="DENMARK">DENMARK</option>
                                             <option value="DJIBOUTI">DJIBOUTI</option>
                                             <option value="DOMINICA">DOMINICA</option>
                                             <option value="DOMINICAN REPUBLIC">DOMINICAN REPUBLIC</option>
                                             <option value="ECUADOR">ECUADOR</option>
                                             <option value="EGYPT">EGYPT</option>
                                             <option value="EL SALVADOR">EL SALVADOR</option>
                                             <option value="EQUATORIAL GUINEA">EQUATORIAL GUINEA</option>
                                             <option value="ERITREA">ERITREA</option>
                                             <option value="ESTONIA">ESTONIA</option>
                                             <option value="ETHIOPIA">ETHIOPIA</option>
                                             <option value="FALKLAND ISLANDS (MALVINAS)">FALKLAND ISLANDS (MALVINAS)</option>
                                             <option value="FAROE ISLANDS">FAROE ISLANDS</option>
                                             <option value="FIJI">FIJI</option>
                                             <option value="FINLAND">FINLAND</option>
                                             <option value="FRANCE">FRANCE</option>
                                             <option value="FRENCH GUIANA">FRENCH GUIANA</option>
                                             <option value="FRENCH POLYNESIA">FRENCH POLYNESIA</option>
                                             <option value="FRENCH SOUTHERN TERRITORIES">FRENCH SOUTHERN TERRITORIES</option>
                                             <option value="GABON">GABON</option>
                                             <option value="GAMBIA">GAMBIA</option>
                                             <option value="GEORGIA">GEORGIA</option>
                                             <option value="GERMANY">GERMANY</option>
                                             <option value="GHANA">GHANA</option>
                                             <option value="GIBRALTAR">GIBRALTAR</option>
                                             <option value="GREECE">GREECE</option>
                                             <option value="GREENLAND">GREENLAND</option>
                                             <option value="GRENADA">GRENADA</option>
                                             <option value="GUADELOUPE">GUADELOUPE</option>
                                             <option value="GUAM">GUAM</option>
                                             <option value="GUATEMALA">GUATEMALA</option>
                                             <option value="GUINEA">GUINEA</option>
                                             <option value="GUINEA-BISSAU">GUINEA-BISSAU</option>
                                             <option value="GUYANA">GUYANA</option>
                                             <option value="HAITI">HAITI</option>
                                             <option value="HEARD ISLAND AND MCDONALD ISLANDS">HEARD ISLAND AND MCDONALD ISLANDS</option>
                                             <option value="HOLY SEE (VATICAN CITY STATE)">HOLY SEE (VATICAN CITY STATE)</option>
                                             <option value="HONDURAS">HONDURAS</option>
                                             <option value="HONG KONG">HONG KONG</option>
                                             <option value="HUNGARY">HUNGARY</option>
                                             <option value="ICELAND">ICELAND</option>
                                             <option value="INDIA">INDIA</option>
                                             <option value="INDONESIA">INDONESIA</option>
                                             <option value="IRAN, ISLAMIC REPUBLIC OF">IRAN, ISLAMIC REPUBLIC OF</option>
                                             <option value="IRAQ">IRAQ</option>
                                             <option value="IRELAND">IRELAND</option>
                                             <option value="ISRAEL">ISRAEL</option>
                                             <option value="ITALY">ITALY</option>
                                             <option value="JAMAICA">JAMAICA</option>
                                             <option value="JAPAN">JAPAN</option>
                                             <option value="JORDAN">JORDAN</option>
                                             <option value="KAZAKHSTAN">KAZAKHSTAN</option>
                                             <option value="KENYA">KENYA</option>
                                             <option value="KIRIBATI">KIRIBATI</option>
                                             <option value="KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF">KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
                                             <option value="KOREA, REPUBLIC OF">KOREA, REPUBLIC OF</option>
                                             <option value="KUWAIT">KUWAIT</option>
                                             <option value="KYRGYZSTAN">KYRGYZSTAN</option>
                                             <option value="LAO PEOPLE'S DEMOCRATIC REPUBLIC">LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
                                             <option value="LATVIA">LATVIA</option>
                                             <option value="LEBANON">LEBANON</option>
                                             <option value="LESOTHO">LESOTHO</option>
                                             <option value="LIBERIA">LIBERIA</option>
                                             <option value="LIBYAN ARAB JAMAHIRIYA">LIBYAN ARAB JAMAHIRIYA</option>
                                             <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                                             <option value="LITHUANIA">LITHUANIA</option>
                                             <option value="LUXEMBOURG">LUXEMBOURG</option>
                                             <option value="MACAO">MACAO</option>
                                             <option value="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF">MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                                             <option value="MADAGASCAR">MADAGASCAR</option>
                                             <option value="MALAWI">MALAWI</option>
                                             <option value="MALAYSIA">MALAYSIA</option>
                                             <option value="MALDIVES">MALDIVES</option>
                                             <option value="MALI">MALI</option>
                                             <option value="MALTA">MALTA</option>
                                             <option value="MARSHALL ISLANDS">MARSHALL ISLANDS</option>
                                             <option value="MARTINIQUE">MARTINIQUE</option>
                                             <option value="MAURITANIA">MAURITANIA</option>
                                             <option value="MAURITIUS">MAURITIUS</option>
                                             <option value="MAYOTTE">MAYOTTE</option>
                                             <option value="MEXICO">MEXICO</option>
                                             <option value="MICRONESIA, FEDERATED STATES OF">MICRONESIA, FEDERATED STATES OF</option>
                                             <option value="MOLDOVA, REPUBLIC OF">MOLDOVA, REPUBLIC OF</option>
                                             <option value="MONACO">MONACO</option>
                                             <option value="MONGOLIA">MONGOLIA</option>
                                             <option value="MONTSERRAT">MONTSERRAT</option>
                                             <option value="MOROCCO">MOROCCO</option>
                                             <option value="MOZAMBIQUE">MOZAMBIQUE</option>
                                             <option value="MYANMAR">MYANMAR</option>
                                             <option value="NAMIBIA">NAMIBIA</option>
                                             <option value="NAURU">NAURU</option>
                                             <option value="NEPAL">NEPAL</option>
                                             <option value="NETHERLANDS">NETHERLANDS</option>
                                             <option value="NETHERLANDS ANTILLES">NETHERLANDS ANTILLES</option>
                                             <option value="NEW CALEDONIA">NEW CALEDONIA</option>
                                             <option value="NEW ZEALAND">NEW ZEALAND</option>
                                             <option value="NICARAGUA">NICARAGUA</option>
                                             <option value="NIGER">NIGER</option>
                                             <option value="NIGERIA">NIGERIA</option>
                                             <option value="NIUE">NIUE</option>
                                             <option value="NORFOLK ISLAND">NORFOLK ISLAND</option>
                                             <option value="NORTHERN MARIANA ISLANDS">NORTHERN MARIANA ISLANDS</option>
                                             <option value="NORWAY">NORWAY</option>
                                             <option value="OMAN">OMAN</option>
                                             <option value="PAKISTAN">PAKISTAN</option>
                                             <option value="PALAU">PALAU</option>
                                             <option value="PALESTINIAN TERRITORY, OCCUPIED">PALESTINIAN TERRITORY, OCCUPIED</option>
                                             <option value="PANAMA">PANAMA</option>
                                             <option value="PAPUA NEW GUINEA">PAPUA NEW GUINEA</option>
                                             <option value="PARAGUAY">PARAGUAY</option>
                                             <option value="PERU">PERU</option>
                                             <option value="PHILIPPINES">PHILIPPINES</option>
                                             <option value="PITCAIRN">PITCAIRN</option>
                                             <option value="POLAND">POLAND</option>
                                             <option value="PORTUGAL">PORTUGAL</option>
                                             <option value="PUERTO RICO">PUERTO RICO</option>
                                             <option value="QATAR">QATAR</option>
                                             <option value="REUNION">REUNION</option>
                                             <option value="ROMANIA">ROMANIA</option>
                                             <option value="RUSSIAN FEDERATION">RUSSIAN FEDERATION</option>
                                             <option value="RWANDA">RWANDA</option>
                                             <option value="SAINT HELENA">SAINT HELENA</option>
                                             <option value="SAINT KITTS AND NEVIS">SAINT KITTS AND NEVIS</option>
                                             <option value="SAINT LUCIA">SAINT LUCIA</option>
                                             <option value="SAINT PIERRE AND MIQUELON">SAINT PIERRE AND MIQUELON</option>
                                             <option value="SAINT VINCENT AND THE GRENADINES">SAINT VINCENT AND THE GRENADINES</option>
                                             <option value="SAMOA">SAMOA</option>
                                             <option value="SAN MARINO">SAN MARINO</option>
                                             <option value="SAO TOME AND PRINCIPE">SAO TOME AND PRINCIPE</option>
                                             <option value="SAUDI ARABIA">SAUDI ARABIA</option>
                                             <option value="SENEGAL">SENEGAL</option>
                                             <option value="SEYCHELLES">SEYCHELLES</option>
                                             <option value="SIERRA LEONE">SIERRA LEONE</option>
                                             <option value="SINGAPORE">SINGAPORE</option>
                                             <option value="SLOVAKIA">SLOVAKIA</option>
                                             <option value="SLOVENIA">SLOVENIA</option>
                                             <option value="SOLOMON ISLANDS">SOLOMON ISLANDS</option>
                                             <option value="SOMALIA">SOMALIA</option>
                                             <option value="SOUTH AFRICA">SOUTH AFRICA</option>
                                             <option value="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                             <option value="SPAIN">SPAIN</option>
                                             <option value="SRI LANKA">SRI LANKA</option>
                                             <option value="SUDAN">SUDAN</option>
                                             <option value="SURINAME">SURINAME</option>
                                             <option value="SVALBARD AND JAN MAYEN">SVALBARD AND JAN MAYEN</option>
                                             <option value="SWAZILAND">SWAZILAND</option>
                                             <option value="SWEDEN">SWEDEN</option>
                                             <option value="SWITZERLAND">SWITZERLAND</option>
                                             <option value="SYRIAN ARAB REPUBLIC">SYRIAN ARAB REPUBLIC</option>
                                             <option value="TAIWAN, PROVINCE OF CHINA">TAIWAN, PROVINCE OF CHINA</option>
                                             <option value="TAJIKISTAN">TAJIKISTAN</option>
                                             <option value="TANZANIA, UNITED REPUBLIC OF">TANZANIA, UNITED REPUBLIC OF</option>
                                             <option value="THAILAND">THAILAND</option>
                                             <option value="TIMOR-LESTE">TIMOR-LESTE</option>
                                             <option value="TOGO">TOGO</option>
                                             <option value="TOKELAU">TOKELAU</option>
                                             <option value="TONGA">TONGA</option>
                                             <option value="TRINIDAD AND TOBAGO">TRINIDAD AND TOBAGO</option>
                                             <option value="TUNISIA">TUNISIA</option>
                                             <option value="TURKEY">TURKEY</option>
                                             <option value="TURKMENISTAN">TURKMENISTAN</option>
                                             <option value="TURKS AND CAICOS ISLANDS">TURKS AND CAICOS ISLANDS</option>
                                             <option value="TUVALU">TUVALU</option>
                                             <option value="UGANDA">UGANDA</option>
                                             <option value="UKRAINE">UKRAINE</option>
                                             <option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES</option>
                                             <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                                             <option value="UNITED STATES">UNITED STATES</option>
                                             <option value="UNITED STATES MINOR OUTLYING ISLANDS">UNITED STATES MINOR OUTLYING ISLANDS</option>
                                             <option value="URUGUAY">URUGUAY</option>
                                             <option value="UZBEKISTAN">UZBEKISTAN</option>
                                             <option value="VANUATU">VANUATU</option>
                                             <option value="VENEZUELA">VENEZUELA</option>
                                             <option value="VIET NAM">VIET NAM</option>
                                             <option value="VIRGIN ISLANDS, BRITISH">VIRGIN ISLANDS, BRITISH</option>
                                             <option value="VIRGIN ISLANDS, U.S.">VIRGIN ISLANDS, U.S.</option>
                                             <option value="WALLIS AND FUTUNA">WALLIS AND FUTUNA</option>
                                             <option value="WESTERN SAHARA">WESTERN SAHARA</option>
                                             <option value="YEMEN">YEMEN</option>
                                             <option value="ZAMBIA">ZAMBIA</option>
                                             <option value="ZIMBABWE">ZIMBABWE</option>
                                             <option value="SERBIA">SERBIA</option>
                                             <option value="ASIA PACIFIC REGION">ASIA PACIFIC REGION</option>
                                             <option value="MONTENEGRO">MONTENEGRO</option>
                                             <option value="ALAND ISLANDS">ALAND ISLANDS</option>
                                             <option value="BONAIRE, SINT EUSTATIUS AND SABA">BONAIRE, SINT EUSTATIUS AND SABA</option>
                                             <option value="CURACAO">CURACAO</option>
                                             <option value="GUERNSEY">GUERNSEY</option>
                                             <option value="ISLE OF MAN">ISLE OF MAN</option>
                                             <option value="JERSEY">JERSEY</option>
                                             <option value="KOSOVO">KOSOVO</option>
                                             <option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
                                             <option value="SAINT MARTIN">SAINT MARTIN</option>
                                             <option value="SINT MAARTEN">SINT MAARTEN</option>
                                             <option value="SOUTH SUDAN">SOUTH SUDAN</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 
                                   
                                 <hr>
                                 <table class="table table-bordered table-form">
                                    <thead class="thead-dark">
                                       <tr>
                                          <th scope="col" >S.no</th>
                                          <th scope="col"style="width:40%" >Description</th>
                                          <th scope="col" >Qty</th>
                                          <th scope="col" >Amt</th>
                                          <th scope="col" >Disc</th>
                                          <th scope="col" >Non Taxable Amt</th>
                                          <th scope="col" >Taxable Amt</th>
                                          <th scope="col" >Cess Amt</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>1.</td>
                                          <td>
                                             <input type="text" class="form-control" name="item_name" id="item_name" placeholder="Enter Item Name"  style="margin-bottom:5px;margin-top:5px;">
                                             <input type="text" class="form-control" name="item_desc" id="item_desc" placeholder="Description" style="margin-bottom:5px;margin-top:5px;">
                                             <select style="width:20%;float:left;" class="form-control " id="toc" name="toc">
                                                <option class="dropdown-item" disabled="" selected="">Type</option>
                                                <option class="dropdown-item" value="1">Goods</option>
                                                <option class="dropdown-item" value="2">Service</option>
                                             </select>
                                             <input type="text" class="form-control" id="sac" name="sac" style="width:80%;margin-left:5px;" placeholder="HSN|SAC">
                                          </td>
                                          <td><input type="text" class="form-control" name="qty" id="Qty" value="1"></td>
                                          <td><input type="text" class="form-control" name="rate" id="rate" placeholder="rate"></td>
                                          <td><input type="text" class="form-control" name="amt" id="amt" placeholder="amount"></td>
                                          <td><input type="text" class="form-control" name="ntamt" id="ntamt" ></td>
                                          <td><input type="text" class="form-control" name="tamt" id="tamt" placeholder="rate"></td>
                                          <td><input type="text" class="form-control" name="camt" id="camt" placeholder="amount"></td>
                                       </tr>
                                    </tbody>
                                 </table>
                                 <hr>
                                 <div id="ship" >
                                    <div class="row " >
                                       <div class="bill col-md-6">
                                          </h4>
                                          <div class="form-group ">
                                             <label for="rev_charge">
                                             Apply Reverse Charge?</label>
                                             <select name="rev_charge" id="rev_charge" class="form-control">
                                                <option value="0" selected="">NO</option>
                                                <option value="1">YES</option>
                                             </select>
                                          </div>
                                          <div class="form-group ">
                                             <label for="spe_supply">
                                             Specialised Supply?</label>
                                             <select name="spe_supply" id="spe_supply" class="form-control">
                                                <option value="0" selected="">Not Applicable</option>
                                                <option value="1">Import</option>
                                                <option value="2">Input Service Distribution</option>
                                                <option value="3">Composition Taxable Person</option>
                                             </select>
                                          </div>
                                          <div class="form-group ">
                                             <label for="add_charge">
                                             Additional Charges</label>
                                             <select name="add_charge" id="add_charge" class="form-control">
                                                <option value="0">None</option>
                                                <option value="Freight Charge">Freight Charge</option>
                                                <option value="Miscellaneous">Miscellaneous</option>
                                                <option value="Reimbursements">Reimbursements</option>
                                                <option value="Other Charges">Other Charges</option>
                                                <option value="Other Taxes">Other Taxes</option>
                                                <option value="Excise Duties">Excise Duties</option>
                                             </select>
                                          </div>
										  
										  <div class="form-group">
                                             <label for="sub_total">Subtotal</label>
                                             <input type="text" class="form-control" name="sub_total" value="0" id="sub_total" Readonly >
                                          </div>
                                          <div class="form-group">
                                             <label for="csgt">Central Goods and Services Tax
                                             (CGST)</label>
                                             <input type="text" class="form-control" name="cgst" id="cgst" value="0" readonly >
                                          </div>
                                          
                                       </div>
                                       <div class="bill col-md-6">
                                          
                                          <div class="form-group ">
                                             <label for="sgst">State Goods and Services Tax
                                             (SGST)</label>
                                             <input type="text" class="form-control" name="sgst" id="sgst" value="0" readonly>
                                          </div>
                                          <div class="form-group">
                                             <label for="igst">Integrated Goods and Services Tax
                                             (IGST)</label>
                                             <input type="text" class="form-control" name="igst" id="igst" value="0" readonly>
                                          </div>
                                          <div class="form-group">
                                             <label for="cess">GST Compensation Cess</label>
                                             <input type="text" class="form-control" name="cess" id="cess"  value="0" readonly>
                                          </div>
                                          <div class="form-group ">
                                             <label for="adjus">Adjustment</label>
                                             <input type="text" class="form-control" name="adjus" id="adjus" >
                                          </div>
                                          <div class="form-group">
                                             <label for="overaall_tot">Total</label>
                                             <input type="text" class="form-control" name="overaall_tot" id="overaall_tot" placeholder="total" >
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <table class="table table-bordered">
                                    <thead>
                                       <tr>
                                          <th scope="col">
                                             Input Tax Credit Eligible?
                                          </th>
                                          <th scope="col">IGST input tax credit</th>
                                          <th scope="col">CGST input tax credit</th>
                                          <th scope="col">	SGST input tax credit</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <th scope="row">
                                             <select class="form-control " id="itc" name="itc">
                                                <option value="0" selected="">No</option>
                                                <option value="1">Yes</option>
                                             </select>
                                          </th>
                                          <td><input type="text" class="form-control" name="igst_tax" id="igst_tax" value="0" readonly ></td>
                                          <td><input type="text" class="form-control" name="cgst_tax" id="cgst_tax" value="0" readonly ></td>
                                          <td><input type="text" class="form-control" name="sgst_tax" id="sgst_tax" value="0" readonly ></td>
                                       </tr>
                                    </tbody>
                                 </table>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <h5>Terms and Conditions</h5>
                                       <input type="text" class="form-control" name="termc" id="termc" >
                                    </div>
                                    <div class="col-md-6">
                                       <h5>Notes</h5>
                                       <input type="text" class="form-control" name="notes" id="notes" >
                                    </div>
                                 </div>
                                 <br>
                                 
                              </div>
                              <h3>Your Bank Details(Optional)</h3>
                              <div class="wizard-content" >
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="holder_name">A/C Holder Name</label>
                                       <input type="text" class="form-control" name="holder_name" value="" >
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="acc_no">Brank A/C No</label>
                                       <input type="text" class="form-control" name="acc_no" value="" >
                                    </div>
                                 </div>
                                 <div class="form-row">
								 
								 <div class="form-group col-md-6">
                                       <label for="account">Types of Account</label>
                                       <select name="account" class="form-control">
                                          <option>-Select Account Type- </option>
                                          <option value="">Please Select</option>
                                          <option value="1">Current Account</option>
                                          <option value="2" selected="">Savings Account</option>
                                          <option value="3">Overdraft Account</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bank_name">Bank name</label>
                                       <select name="bank_name" class="form-control">
                                          <option value="">- Select Bank -</option>
                                          <option value="ABU DHABI COMMERCIAL BANK">ABU DHABI COMMERCIAL BANK</option>
                                          <option value="ABHYUDAYA COOPERATIVE BANK LIMITED">ABHYUDAYA COOPERATIVE BANK LIMITED</option>
                                          <option value="ALLAHABAD BANK">ALLAHABAD BANK</option>
                                          <option value="ANDHRA BANK">ANDHRA BANK</option>
                                          <option value="AXIS BANK">AXIS BANK</option>
                                          <option value="BANK OF AMERICA">BANK OF AMERICA</option>
                                          <option value="BANK OF BAHARAIN AND KUWAIT BSC">BANK OF BAHARAIN AND KUWAIT BSC</option>
                                          <option value="BANK OF BARODA">BANK OF BARODA</option>
                                          <option value="BANK OF CEYLON">BANK OF CEYLON</option>
                                          <option value="BANK OF INDIA">BANK OF INDIA</option>
                                          <option value="BANK OF MAHARASHTRA">BANK OF MAHARASHTRA</option>
                                          <option value="BANK OF TOKYO MITSUBISHI LIMITED">BANK OF TOKYO MITSUBISHI LIMITED</option>
                                          <option value="BARCLAYS BANK">BARCLAYS BANK</option>
                                          <option value="BASSEIN CATHOLIC COOPERATIVE BANK LIMITED">BASSEIN CATHOLIC COOPERATIVE BANK LIMITED</option>
                                          <option value="B N P PARIBAS">B N P PARIBAS</option>
                                          <option value="CANARA BANK">CANARA BANK</option>
                                          <option value="CATHOLIC SYRIAN BANK LIMITED">CATHOLIC SYRIAN BANK LIMITED</option>
                                          <option value="CENTRAL BANK OF INDIA">CENTRAL BANK OF INDIA</option>
                                          <option value="CHINATRUST COMMERCIAL BANK LIMITED">CHINATRUST COMMERCIAL BANK LIMITED</option>
                                          <option value="CITI BANK">CITI BANK</option>
                                          <option value="CITIZEN CREDIT COOPERATIVE BANK LIMITED">CITIZEN CREDIT COOPERATIVE BANK LIMITED</option>
                                          <option value="CITY UNION BANK LIMITED">CITY UNION BANK LIMITED</option>
                                          <option value="CORPORATION BANK">CORPORATION BANK</option>
                                          <option value="CREDIT AGRICOLE CORPORATE AND INVESTMENT BANK CALYON BANK">CREDIT AGRICOLE CORPORATE AND INVESTMENT BANK CALYON BANK</option>
                                          <option value="DEVELOPMENT BANK OF SINGAPORE">DEVELOPMENT BANK OF SINGAPORE</option>
                                          <option value="DENA BANK">DENA BANK</option>
                                          <option value="DEUSTCHE BANK">DEUSTCHE BANK</option>
                                          <option value="DCB BANK LIMITED">DCB BANK LIMITED</option>
                                          <option value="DHANALAKSHMI BANK">DHANALAKSHMI BANK</option>
                                          <option value="DEPOSIT INSURANCE AND CREDIT GUARANTEE CORPORATION">DEPOSIT INSURANCE AND CREDIT GUARANTEE CORPORATION</option>
                                          <option value="DOMBIVLI NAGARI SAHAKARI BANK LIMITED">DOMBIVLI NAGARI SAHAKARI BANK LIMITED</option>
                                          <option value="FIRSTRAND BANK LIMITED">FIRSTRAND BANK LIMITED</option>
                                          <option value="HDFC BANK">HDFC BANK</option>
                                          <option value="HSBC BANK">HSBC BANK</option>
                                          <option value="ICICI BANK LIMITED">ICICI BANK LIMITED</option>
                                          <option value="IDBI BANK">IDBI BANK</option>
                                          <option value="INDIAN BANK">INDIAN BANK</option>
                                          <option value="INDIAN OVERSEAS BANK">INDIAN OVERSEAS BANK</option>
                                          <option value="INDUSIND BANK">INDUSIND BANK</option>
                                          <option value="ING VYSYA BANK">ING VYSYA BANK</option>
                                          <option value="JANAKALYAN SAHAKARI BANK LIMITED">JANAKALYAN SAHAKARI BANK LIMITED</option>
                                          <option value="JANASEVA SAHAKARI BANK LIMITED">JANASEVA SAHAKARI BANK LIMITED</option>
                                          <option value="KAPOL COOPERATIVE BANK LIMITED">KAPOL COOPERATIVE BANK LIMITED</option>
                                          <option value="KARNATAKA BANK LIMITED">KARNATAKA BANK LIMITED</option>
                                          <option value="KARUR VYSYA BANK">KARUR VYSYA BANK</option>
                                          <option value="KOTAK MAHINDRA BANK LIMITED">KOTAK MAHINDRA BANK LIMITED</option>
                                          <option value="MAHANAGAR COOPERATIVE BANK">MAHANAGAR COOPERATIVE BANK</option>
                                          <option value="MAHARASHTRA STATE COOPERATIVE BANK">MAHARASHTRA STATE COOPERATIVE BANK</option>
                                          <option value="MASHREQBANK PSC">MASHREQBANK PSC</option>
                                          <option value="MIZUHO CORPORATE BANK LIMITED">MIZUHO CORPORATE BANK LIMITED</option>
                                          <option value="NEW INDIA COOPERATIVE BANK LIMITED">NEW INDIA COOPERATIVE BANK LIMITED</option>
                                          <option value="NKGSB COOPERATIVE BANK LIMITED">NKGSB COOPERATIVE BANK LIMITED</option>
                                          <option value="NUTAN NAGARIK SAHAKARI BANK LIMITED">NUTAN NAGARIK SAHAKARI BANK LIMITED</option>
                                          <option value="OMAN INTERNATIONAL BANK SAOG">OMAN INTERNATIONAL BANK SAOG</option>
                                          <option value="ORIENTAL BANK OF COMMERCE">ORIENTAL BANK OF COMMERCE</option>
                                          <option value="G P PARSIK BANK">G P PARSIK BANK</option>
                                          <option value="PUNJAB AND MAHARSHTRA COOPERATIVE BANK">PUNJAB AND MAHARSHTRA COOPERATIVE BANK</option>
                                          <option value="PUNJAB AND SIND BANK">PUNJAB AND SIND BANK</option>
                                          <option value="PUNJAB NATIONAL BANK">PUNJAB NATIONAL BANK</option>
                                          <option value="RAJKOT NAGRIK SAHAKARI BANK LIMITED">RAJKOT NAGRIK SAHAKARI BANK LIMITED</option>
                                          <option value="RESERVE BANK OF INDIA">RESERVE BANK OF INDIA</option>
                                          <option value="SHINHAN BANK">SHINHAN BANK</option>
                                          <option value="SOCIETE GENERALE">SOCIETE GENERALE</option>
                                          <option value="SOUTH INDIAN BANK">SOUTH INDIAN BANK</option>
                                          <option value="STANDARD CHARTERED BANK">STANDARD CHARTERED BANK</option>
                                          <option value="STATE BANK OF BIKANER AND JAIPUR">STATE BANK OF BIKANER AND JAIPUR</option>
                                          <option value="STATE BANK OF HYDERABAD">STATE BANK OF HYDERABAD</option>
                                          <option value="STATE BANK OF INDIA">STATE BANK OF INDIA</option>
                                          <option value="STATE BANK OF MAURITIUS LIMITED">STATE BANK OF MAURITIUS LIMITED</option>
                                          <option value="STATE BANK OF MYSORE">STATE BANK OF MYSORE</option>
                                          <option value="STATE BANK OF PATIALA">STATE BANK OF PATIALA</option>
                                          <option value="STATE BANK OF TRAVANCORE">STATE BANK OF TRAVANCORE</option>
                                          <option value="SYNDICATE BANK">SYNDICATE BANK</option>
                                          <option value="TAMILNAD MERCANTILE BANK LIMITED">TAMILNAD MERCANTILE BANK LIMITED</option>
                                          <option value="THE BANK OF NOVA SCOTIA">THE BANK OF NOVA SCOTIA</option>
                                          <option value="AHMEDABAD MERCANTILE COOPERATIVE BANK">AHMEDABAD MERCANTILE COOPERATIVE BANK</option>
                                          <option value="BHARAT COOPERATIVE BANK MUMBAI LIMITED">BHARAT COOPERATIVE BANK MUMBAI LIMITED</option>
                                          <option value="THE COSMOS CO OPERATIVE BANK LIMITED">THE COSMOS CO OPERATIVE BANK LIMITED</option>
                                          <option value="FEDERAL BANK">FEDERAL BANK</option>
                                          <option value="THE GREATER BOMBAY COOPERATIVE BANK LIMITED">THE GREATER BOMBAY COOPERATIVE BANK LIMITED</option>
                                          <option value="JAMMU AND KASHMIR BANK LIMITED">JAMMU AND KASHMIR BANK LIMITED</option>
                                          <option value="KALUPUR COMMERCIAL COOPERATIVE BANK">KALUPUR COMMERCIAL COOPERATIVE BANK</option>
                                          <option value="THE KARANATAKA STATE COOPERATIVE APEX BANK LIMITED">THE KARANATAKA STATE COOPERATIVE APEX BANK LIMITED</option>
                                          <option value="KALYAN JANATA SAHAKARI BANK">KALYAN JANATA SAHAKARI BANK</option>
                                          <option value="LAXMI VILAS BANK">LAXMI VILAS BANK</option>
                                          <option value="THE MEHSANA URBAN COOPERATIVE BANK">THE MEHSANA URBAN COOPERATIVE BANK</option>
                                          <option value="THE NAINITAL BANK LIMITED">THE NAINITAL BANK LIMITED</option>
                                          <option value="RBL Bank Limited">RBL Bank Limited</option>
                                          <option value="THE ROYAL BANK OF SCOTLAND N V">THE ROYAL BANK OF SCOTLAND N V</option>
                                          <option value="SARASWAT COOPERATIVE BANK LIMITED">SARASWAT COOPERATIVE BANK LIMITED</option>
                                          <option value="THE SHAMRAO VITHAL COOPERATIVE BANK">THE SHAMRAO VITHAL COOPERATIVE BANK</option>
                                          <option value="THE SURATH PEOPLES COOPERATIVE BANK LIMITED">THE SURATH PEOPLES COOPERATIVE BANK LIMITED</option>
                                          <option value="THE TAMIL NADU STATE APEX COOPERATIVE BANK">THE TAMIL NADU STATE APEX COOPERATIVE BANK</option>
                                          <option value="TJSB SAHAKARI BANK LTD">TJSB SAHAKARI BANK LTD</option>
                                          <option value="THE WEST BENGAL STATE COOPERATIVE BANK">THE WEST BENGAL STATE COOPERATIVE BANK</option>
                                          <option value="UCO BANK">UCO BANK</option>
                                          <option value="UNION BANK OF INDIA">UNION BANK OF INDIA</option>
                                          <option value="UNITED BANK OF INDIA">UNITED BANK OF INDIA</option>
                                          <option value="VIJAYA BANK">VIJAYA BANK</option>
                                          <option value="YES BANK">YES BANK</option>
                                       </select>
                                    </div>
                                    
                                 </div>
                                 <div class="form-row">
								 
								 <div class="form-group col-md-6">
                                       <label for="branch_name">Branch Name</label>
                                       <input type="text" class="form-control" name="branch_name" value="" >
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                       <label>IFSC Code:</label>
                                       <input type="number" class="form-control" name="zip"  value="">
                                    </div>
                                 </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="city">City</label>
                                       <input type="text" class="form-control" name="city" value="" >
                                    </div>
                                 </div>
                              </div>
                              <h3>Upload Documents</h3>
                              <div class="wizard-content" >
                                 <div>
                                    <div id="fileUpload2" action="/file-upload" class="dropzone dz-clickable">
                                       <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                    </div>
                                    <div class="mt-3" id="formFiles2"></div>
                                    <div class="d-none" id="formTemplate2">
                                       <div class="card mb-3">
                                          <div class="p-2">
                                             <div class="row align-items-start">
                                                <div class="col-auto">
                                                   <img data-dz-thumbnail="" src="#" class="avatar border rounded">
                                                </div>
                                                <div class="col pl-0">
                                                   <a href="#" class="text-muted font-weight-bold" data-dz-name=""></a>
                                                   <p class="mb-0"><small data-dz-size=""></small>
                                                      <small class="d-block text-danger" data-dz-errormessage=""></small>
                                                   </p>
                                                </div>
                                                <div class="col-auto pt-2">
                                                   <a class="btn-lg text-danger" href="#" data-dz-remove=""><i class="icon-trash-2"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <small id="dropzoneHelp" class="form-text text-muted">Max file size is 2MB and max number of files is 5.</small>
                                 </div>
                              </div>
                              <h3>Download Acknowledgement</h3>
                              <div class="wizard-content" >
                                 <div class="h5 mb-4">Confimration</div>
                                 <p>Customize your experience by confirming your personalization settings and the
                                    data
                                    stored with your account. You can always learn more about these options,
                                    adjust
                                    them, and review your activity in your Account
                                 </p>
                                 <p>These settings apply wherever you are signed in to your new Account.</p>
                                 <div class="form-group mb-1 mt-5">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" name="reminders" id="reminders" class="custom-control-input">
                                       <label class="custom-control-label" for="reminders">Send me occasional
                                       reminders
                                       about these settings</a></label>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" name="terms_conditions" id="terms_conditions" class="custom-control-input">
                                       <label class="custom-control-label" for="terms_conditions">By checking
                                       this
                                       option, you agree to acceot with the <a href="#">Terms and
                                       Conditions</a>.</label>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <?php require_once 'otp.php'; ?>
         <?php require_once '../include/footer.php'; ?>
      </div>
      <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
      <script>
         function getFormData(){ 
                   var formdata = $("#wizard1").serializeArray();
                   var data = {};
                      $(formdata ).each(function(index, obj){  
                         data[obj.name] = obj.value;
                      });
                         $('#modalLoginAvatar').modal('toggle');
                         $("#mobileNumber").val($("#mobile").val());     
                      //Here is the output (data)
                      console.log(data);
                }
         
               var form2 = $('#fileUpload1');
               form2.dropzone({
                   url: "http://localhost/mainapage",
                   addRemoveLinks: true,
                   maxFiles: 1,
                   maxFilesize: 1,
                   acceptedFiles: "image/*",
               });
         /*
         var form2 = $('#fileUpload2');
               form2.dropzone({
                   url: "http://localhost/polo",
                   maxFilesize: 5,
                   acceptedFiles: "image/*",
                   previewsContainer: "#formFiles2",
                   previewTemplate: $("#formTemplate2").html(),
               });*/
               
               //Advanced - with validation
         /*        var wizard7 = $('#wizard1');
               wizard7.steps({
                   headerTag: "h3",
                   bodyTag: '.wizard-content',
                   autoFocus: true,
                   enableAllSteps: true,
                   titleTemplate: '<span class="number">#index#</span><span class="title">#title#</span>',
                   onStepChanging: function (event, currentIndex, newIndex) {
                       // Allways allow previous action even if the current form is not valid!
                       if (currentIndex > newIndex) {
                           return true;
                       }
                       return wizard7.valid();
                   },
                   onStepChanged: function (event, currentIndex, priorIndex) {},
                   onFinishing: function (event, currentIndex) {
                       return wizard7.valid();
         		
                   },
                   onFinished: function (event, currentIndex) {
         
         	var data4= $("#wizard1").serializeArray();
         		 var formData = new FormData(this);
                       formData.append("file", data4);
               $.ajax({
                   type:'POST',
                   url: 'otp.php',
                   data:formData,
                   cache:false,
                   contentType: false,
                   processData: false,
                   success:function(data){
                       console.log("success");
                       console.log(data4);
                   },
                   error: function(data){
                       console.log("error");
                       console.log(data);
                   }
               });
         			
                       INSPIRO.elements.notification("Submited",
                          "Thank you, your account has been registed successfully", "success");
                   }
               });
               //Validation
               wizard7.validate({
                   errorClass: 'is-invalid',
                   validClass: 'is-valid',
                   errorElement: "div",
                   rules: {
                       // Step 1 - Account information
                       username: {
                           required: true
                       },
                       
                       // Step 4 - Confirmation
                       reminders: {
                           required: true
                       },
                       terms_conditions: {
                           required: true
                       },
                   },
                   errorPlacement: function (error, element) {
                       $(element).parents(".form-group").append(error);
                   }
               });
               $('.wizard').find(".actions ul > li > a").addClass("btn");
          $('#country').on('change',function(){
               var optionText = $("#country option:selected").text();
         if(optionText == 'INDIA'){
               $("#statehtml").css({"display": "block"}); 
         $("#statehtml1").css({"display": "none"});}
         else { $("#statehtml1").css({"display": "block"}); 
         $("#statehtml").css({"display": "none"});}
           });
         $('#cli_country').on('change',function(){
               var optionText1 = $("#cli_country option:selected").text();
         
         if(optionText1 == 'INDIA'){
               $("#cli_statehtml").css({"display": "block"}); 
         $("#cli_statehtml1").css({"display": "none"});}
         else { $("#cli_statehtml1").css({"display": "block"}); 
         $("#cli_statehtml").css({"display": "none"});}
           });
         $('#shi_country').on('change',function(){
               var optionText2 = $("#shi_country option:selected").text();
         
         if(optionText2 == 'INDIA'){
               $("#shi_statehtml").css({"display": "block"}); 
         $("#shi_statehtml1").css({"display": "none"});}
         else { $("#shi_statehtml1").css({"display": "block"}); 
         $("#shi_statehtml").css({"display": "none"});}
           });
         $('#add_shipping_address').click(function() {
           if (!$(this).is(':checked')) {
             $("#ship").css({"display": "none"});
           }
         else{$("#ship").css({"display": "block"});}
         });
         
         */
           
      </script>
   </body>
</html>