<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form action="{{$route}}" method="post">
        {{csrf_field()}}
        <div class="jp_header_form_wrapper">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <input type="text" name="keyword" placeholder="Keyword e.g. (Computer Repair, Fashion Designer, Office Space)">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="jp_form_location_wrapper">
                    <i class="fa fa-dot-circle-o first_icon"></i>
                    <select name="state" id="select">
                        <option value="None">Select State</option>
                        <option value="ABUJA">ABUJA FCT</option>
                        <option value="ABIA">ABIA</option>
                        <option value="ADAMAWA">ADAMAWA</option>
                        <option value="AKWA-IBOM">AKWA IBOM</option>
                        <option value="ANAMBRA">ANAMBRA</option>
                        <option value="BAUCHI">BAUCHI</option>
                        <option value="BAYELSA">BAYELSA</option>
                        <option value="BENUE">BENUE</option>
                        <option value="BORNO">BORNO</option>
                        <option value="CROSS-RIVER">CROSS RIVER</option>
                        <option value="DELTA">DELTA</option>
                        <option value="EBONYI">EBONYI</option>
                        <option value="EDO">EDO</option>
                        <option value="EKITI">EKITI</option>
                        <option value="ENUGU">ENUGU</option>
                        <option value="GOMBE">GOMBE</option>
                        <option value="IMO">IMO</option>
                        <option value="JIGAWA">JIGAWA</option>
                        <option value="KADUNA">KADUNA</option>
                        <option value="KANO">KANO</option>
                        <option value="KATSINA">KATSINA</option>
                        <option value="KEBBI">KEBBI</option>
                        <option value="KOGI">KOGI</option>
                        <option value="KWARA">KWARA</option>
                        <option value="LAGOS">LAGOS</option>
                        <option value="NASSARAWA">NASSARAWA</option>
                        <option value="NIGER">NIGER</option>
                        <option value="OGUN">OGUN</option>
                        <option value="ONDO">ONDO</option>
                        <option value="OSUN">OSUN</option>
                        <option value="OYO">OYO</option>
                        <option value="PLATEAU">PLATEAU</option>
                        <option value="RIVERS">RIVERS</option>
                        <option value="SOKOTO">SOKOTO</option>
                        <option value="TARABA">TARABA</option>
                        <option value="YOBE">YOBE</option>
                        <option value="ZAMFARA">ZAMFARA</option>
                    </select>
                    <i class="fa fa-angle-down second_icon"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="jp_form_exper_wrapper">
                    <!--    <i class="fa fa-dot-circle-o first_icon"></i><select name="">
                    <option>High Experience Level</option>
                    <option>Medium Experience Level</option>
                    <option>Low Experience Level</option>

                </select><i class="fa fa-angle-down second_icon"></i>-->

                    <input type="text" name="lga" placeholder="L.G.A">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="jp_form_btn_wrapper">
                    <ul>
                        <li><button type="submit" name="Submit" id="mybtn" class="btn btn-danger btn-lg mybtn"><i class="fa fa-search"></i> Search</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
