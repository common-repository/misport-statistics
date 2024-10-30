<?php
class Html_helper {

    function countryOptions($selected) {
        $retval = '<option value="-">-</option><option value="united_kingdom.png">United Kingdom</option><option value="afghanistan.png">Afghanistan</option><option value="african_union.png">African Union</option><option value="albania.png">Albania</option><option value="algeria.png">Algeria</option><option value="american_samoa.png">American Samoa</option><option value="andorra.png">Andorra</option><option value="angola.png">Angola</option><option value="anguilla.png">Anguilla</option><option value="antarctica.png">Antarctica</option><option value="antigua_&amp;_barbuda.png">Antigua &amp; Barbuda</option><option value="arab_league.png">Arab League</option><option value="argentina.png">Argentina</option><option value="armenia.png">Armenia</option><option value="aruba.png">Aruba</option><option value="asean.png">Asean</option><option value="australia.png">Australia</option><option value="austria.png">Austria</option><option value="azerbaijan.png">Azerbaijan</option><option value="bahamas.png">Bahamas</option><option value="bahrain.png">Bahrain</option><option value="bangladesh.png">Bangladesh</option><option value="barbados.png">Barbados</option><option value="belarus.png">Belarus</option><option value="belgium.png">Belgium</option><option value="belize.png">Belize</option><option value="benin.png">Benin</option><option value="bermuda.png">Bermuda</option><option value="bhutan.png">Bhutan</option><option value="bolivia.png">Bolivia</option><option value="bosnia_&amp;_herzegovina.png">Bosnia &amp; Herzegovina</option><option value="botswana.png">Botswana</option><option value="brazil.png">Brazil</option><option value="brunei.png">Brunei</option><option value="bulgaria.png">Bulgaria</option><option value="burkina_faso.png">Burkina Faso</option><option value="burundi.png">Burundi</option><option value="cambodja.png">Cambodja</option><option value="cameroon.png">Cameroon</option><option value="canada.png">Canada</option><option value="cape_verde.png">Cape Verde</option><option value="caricom.png">Caricom</option><option value="cayman_islands.png">Cayman Islands</option><option value="central_african_republic.png">Central African Republic</option><option value="chad.png">Chad</option><option value="chile.png">Chile</option><option value="china.png">China</option><option value="cis.png">Cis</option><option value="colombia.png">Colombia</option><option value="commonwealth.png">Commonwealth</option><option value="comoros.png">Comoros</option><option value="congo-brazzaville.png">Congo-brazzaville</option><option value="congo-kinshasa.png">Congo-kinshasa</option><option value="cook_islands.png">Cook Islands</option><option value="costa_rica.png">Costa Rica</option><option value="cote_divoire.png">Cote Divoire</option><option value="croatia.png">Croatia</option><option value="cuba.png">Cuba</option><option value="cyprus.png">Cyprus</option><option value="czech_republic.png">Czech Republic</option><option value="denmark.png">Denmark</option><option value="djibouti.png">Djibouti</option><option value="dominica.png">Dominica</option><option value="dominican_republic.png">Dominican Republic</option><option value="ecuador.png">Ecuador</option><option value="egypt.png">Egypt</option><option value="el_salvador.png">El Salvador</option><option value="england.png">England</option><option value="equatorial_guinea.png">Equatorial Guinea</option><option value="eritrea.png">Eritrea</option><option value="estonia.png">Estonia</option><option value="ethiopia.png">Ethiopia</option><option value="european_union.png">European Union</option><option value="faroes.png">Faroes</option><option value="fiji.png">Fiji</option><option value="finland.png">Finland</option><option value="france.png">France</option><option value="gabon.png">Gabon</option><option value="gambia.png">Gambia</option><option value="georgia.png">Georgia</option><option value="germany.png">Germany</option><option value="ghana.png">Ghana</option><option value="gibraltar.png">Gibraltar</option><option value="greece.png">Greece</option><option value="greenland.png">Greenland</option><option value="grenada.png">Grenada</option><option value="guadeloupe.png">Guadeloupe</option><option value="guam.png">Guam</option><option value="guatemala.png">Guatemala</option><option value="guernsey.png">Guernsey</option><option value="guinea-bissau.png">Guinea-bissau</option><option value="guinea.png">Guinea</option><option value="guyana.png">Guyana</option><option value="haiti.png">Haiti</option><option value="honduras.png">Honduras</option><option value="hong_kong.png">Hong Kong</option><option value="hungary.png">Hungary</option><option value="iceland.png">Iceland</option><option value="india.png">India</option><option value="indonezia.png">Indonezia</option><option value="iran.png">Iran</option><option value="iraq.png">Iraq</option><option value="ireland.png">Ireland</option><option value="islamic_conference.png">Islamic Conference</option><option value="isle_of_man.png">Isle Of Man</option><option value="israel.png">Israel</option><option value="italy.png">Italy</option><option value="jamaica.png">Jamaica</option><option value="japan.png">Japan</option><option value="jersey.png">Jersey</option><option value="jordan.png">Jordan</option><option value="kazakhstan.png">Kazakhstan</option><option value="kenya.png">Kenya</option><option value="kiribati.png">Kiribati</option><option value="kosovo.png">Kosovo</option><option value="kuwait.png">Kuwait</option><option value="kyrgyzstan.png">Kyrgyzstan</option><option value="laos.png">Laos</option><option value="latvia.png">Latvia</option><option value="lebanon.png">Lebanon</option><option value="lesotho.png">Lesotho</option><option value="liberia.png">Liberia</option><option value="libya.png">Libya</option><option value="liechtenshein.png">Liechtenshein</option><option value="lithuania.png">Lithuania</option><option value="luxembourg.png">Luxembourg</option><option value="macao.png">Macao</option><option value="macedonia.png">Macedonia</option><option value="madagascar.png">Madagascar</option><option value="malawi.png">Malawi</option><option value="malaysia.png">Malaysia</option><option value="maldives.png">Maldives</option><option value="mali.png">Mali</option><option value="malta.png">Malta</option><option value="marshall_islands.png">Marshall Islands</option><option value="martinique.png">Martinique</option><option value="mauritania.png">Mauritania</option><option value="mauritius.png">Mauritius</option><option value="mexico.png">Mexico</option><option value="micronesia.png">Micronesia</option><option value="moldova.png">Moldova</option><option value="monaco.png">Monaco</option><option value="mongolia.png">Mongolia</option><option value="montenegro.png">Montenegro</option><option value="montserrat.png">Montserrat</option><option value="morocco.png">Morocco</option><option value="mozambique.png">Mozambique</option><option value="myanmar.png">Myanmar</option><option value="namibia.png">Namibia</option><option value="nato.png">Nato</option><option value="nauru.png">Nauru</option><option value="nepal.png">Nepal</option><option value="netherlands.png">Netherlands</option><option value="netherlands_antilles.png">Netherlands Antilles</option><option value="new_caledonia.png">New Caledonia</option><option value="new_zealand.png">New Zealand</option><option value="nicaragua.png">Nicaragua</option><option value="niger.png">Niger</option><option value="nigeria.png">Nigeria</option><option value="northern_cyprus.png">Northern Cyprus</option><option value="northern_ireland.png">Northern Ireland</option><option value="north_korea.png">North Korea</option><option value="norway.png">Norway</option><option value="olimpic_movement.png">Olimpic Movement</option><option value="oman.png">Oman</option><option value="opec.png">Opec</option><option value="pakistan.png">Pakistan</option><option value="palau.png">Palau</option><option value="palestine.png">Palestine</option><option value="panama.png">Panama</option><option value="papua_new_guinea.png">Papua New Guinea</option><option value="paraguay.png">Paraguay</option><option value="peru.png">Peru</option><option value="philippines.png">Philippines</option><option value="poland.png">Poland</option><option value="portugal.png">Portugal</option><option value="puerto_rico.png">Puerto Rico</option><option value="qatar.png">Qatar</option><option value="red_cross.png">Red Cross</option><option value="reunion.png">Reunion</option><option value="romania.png">Romania</option><option value="russian_federation.png">Russian Federation</option><option value="rwanda.png">Rwanda</option><option value="saint_lucia.png">Saint Lucia</option><option value="samoa.png">Samoa</option><option value="san_marino.png">San Marino</option><option value="sao_tome_&amp;_principe.png">Sao Tome &amp; Principe</option><option value="saudi_arabia.png">Saudi Arabia</option><option value="scotland.png">Scotland</option><option value="senegal.png">Senegal</option><option value="serbia.png">Serbia</option><option value="seychelles.png">Seychelles</option><option value="sierra_leone.png">Sierra Leone</option><option value="singapore.png">Singapore</option><option value="slovakia.png">Slovakia</option><option value="slovenia.png">Slovenia</option><option value="solomon_islands.png">Solomon Islands</option><option value="somalia.png">Somalia</option><option value="somaliland.png">Somaliland</option><option value="south_africa.png">South Africa</option><option value="south_korea.png">South Korea</option><option value="spain.png">Spain</option><option value="sri_lanka.png">Sri Lanka</option><option value="st_kitts_&amp;_nevis.png">St Kitts &amp; Nevis</option><option value="st_vincent_&amp;_the_grenadines.png">St Vincent &amp; The Grenadines</option><option value="sudan.png">Sudan</option><option value="suriname.png">Suriname</option><option value="swaziland.png">Swaziland</option><option value="sweden.png">Sweden</option><option value="switzerland.png">Switzerland</option><option value="syria.png">Syria</option><option value="tahiti(french_polinesia).png">Tahiti(french Polinesia)</option><option value="taiwan.png">Taiwan</option><option value="tajikistan.png">Tajikistan</option><option value="tanzania.png">Tanzania</option><option value="thailand.png">Thailand</option><option value="timor-leste.png">Timor-leste</option><option value="togo.png">Togo</option><option value="tonga.png">Tonga</option><option value="trinidad_&amp;_tobago.png">Trinidad &amp; Tobago</option><option value="tunisia.png">Tunisia</option><option value="turkey.png">Turkey</option><option value="turkmenistan.png">Turkmenistan</option><option value="turks_and_caicos_islands.png">Turks And Caicos Islands</option><option value="tuvalu.png">Tuvalu</option><option value="uganda.png">Uganda</option><option value="ukraine.png">Ukraine</option><option value="united_arab_emirates.png">United Arab Emirates</option><option value="united_nations.png">United Nations</option><option value="united_states_of_america.png">United States Of America</option><option value="uruguay.png">Uruguay</option><option value="uzbekistan.png">Uzbekistan</option><option value="vanutau.png">Vanutau</option><option value="vatican_city.png">Vatican City</option><option value="venezuela.png">Venezuela</option><option value="viet_nam.png">Viet Nam</option><option value="virgin_islands_british.png">Virgin Islands British</option><option value="virgin_islands_us.png">Virgin Islands Us</option><option value="wales.png">Wales</option><option value="western_sahara.png">Western Sahara</option><option value="yemen.png">Yemen</option><option value="zambia.png">Zambia</option><option value="zimbabwe.png">Zimbabwe</option></select>';
        if(strlen($selected)) {
            $search  = 'value="'.$selected.'"';
            $replace = 'value="'.$selected.'" selected="selected"';
            $retval = str_replace($search,$replace,$retval);
        }
        return $retval;
    }

    function field($fieldtype, $field_id, $field_value, $field_attr, $cols) {
        $retval = "";
        if($fieldtype=="input") {
            $retval = '<input type="text" class="regular-text" id="'.$field_id.'" name="'.$field_id.'" value="'.$field_value.'" '.$field_attr.'/>';
        }
        if($fieldtype=="password") {
            $retval = '<input type="password" class="regular-text" id="'.$field_id.'" name="'.$field_id.'" value="" '.$field_attr.'/>';
        }
        if($fieldtype=="textarea") {
            $retval = '<textarea class="regular-text" cols="45" rows="5" id="'.$field_id.'" name="'.$field_id.'" '.$field_attr.'>'.$field_value.'</textarea>';
        }
        if($fieldtype=="countrys") {
            $retval = '<select id="'.$field_id.'" name="'.$field_id.'" '.$field_attr.'>'.$this->countryOptions($field_value).'</select>';

        }
        if($fieldtype=="select") {
            $retval = '<select id="'.$field_id.'" name="'.$field_id.'" '.$field_attr.'>'.$field_value.'</select>';
        }
        if($fieldtype=="checkbox") {
            $field_values = $field_value;
            if(!is_array($field_value)) {
                $field_values[] = $field_values;     
            }
            if(count($field_values)==0) {
                return "";    
            }
            $col_items = ceil(count($field_values) / $cols);
            $columns = array_chunk($field_values, $col_items);
            $retval = "";
            $i = 0;
            for($c=0; $c<$cols; $c++) {
                if(!isset($columns[$c])) { continue; }
                
                $column_values = $columns[$c];
                $retval .= "<fieldset class='checkboxes'>";
                foreach($column_values as $value) {
                    list($value, $text) = explode(":",$value);
                    $retval .= '<label>
                                    <input type="checkbox" name="'.$field_id.'[]" id="'.sprintf("%s_%d",$field_id,$i).'" class="'.$field_id.'" value="'.$value.'" '.$field_attr.'/>'.$text.'
                                </label>';
                    $i++;
                }
                $retval .= "</fieldset>";
            }
        }
        return $retval;
    }

    function title($title, $icon = "") {
        $icon_div = ($icon) ? '<div class="dashicons '.$icon.'"></div>' : '';
        $retval = '<h2 class="title">'.$icon_div.$title.'</h2>';
        return $retval;        
    }
    
    /*
    $opts = [
        ["text"=>"tab1", "url"=>"this is url", "selected"=>1]
    ];
    */
    function tabs($tabs) {
        $retval = '<div id="icon-themes" class="icon32"><br></div>
        <h2 class="nav-tab-wrapper">';
        if(is_array($tabs)) {
            foreach($tabs as $tab) {
                $selected = (isset($tab['selected'])) ? 'nav-tab-active' : '';
                $retval .= '<a class="nav-tab '.$selected.'" href="'.$tab['url'].'">'.$tab['text'].'</a>';      
            }
        }
        $retval .= '</h2>';
        return $retval;    
    }
    
    function optionItems($opts) {
        $retval = "";
        $attribs = [];
        if(is_array($opts)) {
             foreach($opts as $opt) {
                 $attribs[] = $opt;
             }
            $retval = implode(" ",$attribs);
        }
        return $retval;
    }

    function formTable($rows) {
        $retval = '<table class="form-table" autocomplete="off">';
        foreach($rows as $row) {
            $retval .= '<tr>';
            $text   = $row['label'];
            $desc   = $row['desc'];
            $cols   = isset($row['cols']) ? $row['cols'] : 1;
            
            $field  = $this->field($row['input'], $row['id'], $row['value'], $this->optionItems($row['opts']), $cols);

            $retval .= '<th scope="row">';
            $retval .= '<label>'.$text.'</label>';
            $retval .= '</th>';

            $retval .= '<td>';
            $retval .= $field;
            $retval .= '<p class="description">'.$desc.'</p>';
            $retval .= '</td>';

        }
        $retval .= '</table>';
        return $retval;
    }
}  
?>
