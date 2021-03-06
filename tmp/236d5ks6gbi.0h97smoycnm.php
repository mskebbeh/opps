
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
      <li><a href="#profile" data-toggle="tab">Setup Profile</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
<div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="http://qcell.gm/images/stories/bldg.png" alt="" class="img-rounded img-responsive" height="380" width="500" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            <?php echo $profile_name; ?></h4>
                            
                        <small><cite title="Address"><?php echo $user_address; ?> <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i> <?php echo $user_email; ?>
                            <br />
                            <i class="glyphicon glyphicon-user"></i> <?php echo $user_telephone; ?>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i> <?php echo $user_DOB; ?></p>
                        
                   </div>     
                </div>
            </div>
        
    </div>
 </div>
    
      <div class="tab-pane fade" id="profile">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <legend><i class="glyphicon glyphicon-globe"></i> Update profile</legend>
            <form action="<?php echo $BASE.'/user/profile'; ?>" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="first_name" value="<?php echo $first_name; ?>" placeholder="First Name" type="text"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="last_name" value="<?php echo $last_name; ?>" placeholder="Last Name" type="text" required />
                </div>
            </div>
            <input class="form-control" name="email" value="<?php echo $user_email; ?>" placeholder="Your Email" type="email" required />
            <input class="form-control" name="address" placeholder="Address" value="<?php echo $user_address; ?>" type="text" />
            <input type="hidden" name="update_profile"  value="update_profile" />
            <label for="">
            <label for="">
                Birth Date</label>
            <div class="row">
                <div class="col-xs-4 col-md-4">
					
                    <select class="form-control" name="month">
						<option value="">Month</option>
                        <option value="01">Jan</option>
                        <option value="02">Feb</option>
                        <option value="03">Mar</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">Aug</option>
                        <option value="09">Sept</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" name="day">
                        <option value="">Day</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
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
                </div>
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" name="year" >
                        <option value="">Year</option>
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
                    </select>
                </div>
            </div>
           
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                Update</button>
            </form>
        </div>
    </div>
</div>
