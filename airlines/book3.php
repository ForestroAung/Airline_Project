<?php  
include("connect.php");
include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

</body>
</html>

  <section id="content">
    
      <article class="col2">
        <div class="tabs2">
          <ul class="nav">
            <li class="selected"><a href="#Flight">Flight</a></li>
          
          </ul>
          <div class="content">
            <div class="tab-content" id="Flight">
              <form id="form_5" action="#" class="form_5" method="post">
                <div>
                  <div class="radio">
                    <div class="wrapper">
                      <input type="radio" name="name1" checked>
                      <span class="left">Show prices</span>
                      <input type="radio" name="name1">
                      <span class="left">Show flights</span> </div>
                  </div>
                  <div class="pad">
                    <div class="wrapper under">
                      <div class="col1">
                        <div class="row"><span class="left">From</span>
                          <input type="text" class="input">
                          <a href="#" class="help"></a> </div>
                        <div class="row"><span class="left">To</span>
                          <input type="text" class="input">
                          <a href="#" class="help"></a> </div>
                      </div>
                      <div class="check_box">
                        <input type="checkbox">
                        <span>One way</span> <a href="#" class="help"></a> </div>
                      <div class="check_box">
                        <input type="checkbox">
                        <span>Direct flights</span> </div>
                    </div>
                    <div class="wrapper under"> <span class="left">Flights</span>
                      <div class="cols marg_right1">
                        <h6>Outbound flight</h6>
                        <div class="row">
                          <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                          <input type="text" class="input1" value="+/- 0 Days"  onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
                        </div>
                        
                        
                      </div>
                      <div class="cols">
                        <h5>Outbound flight</h5>
                        <div class="row">
                          <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                          <input type="text" class="input1" value="+/- 0 Days"  onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
                        </div>
                        


                       
                      </div>
                    </div>
                    <div class="wrapper pad_bot1"> <span class="left">Passengers</span>
                      <div class="cols marg_right1">
                        <div class="row">
                          <input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
                          <span class="left">Adults</span> <a href="#" class="help"></a> </div>
                        <div class="row">
                          <input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
                          <span class="left">Children</span> <a href="#" class="help"></a> </div>
                      </div>
                      <div class="cols">
                        <div class="select1"><span class="left">Class</span>
                          <select>
                            <option>Economy</option>
                          </select>
                          <a href="#" class="help"></a> </div>
                        <div class="select1"><span class="left">Airline</span>
                          <select>
                            <option>Airlines</option>
                          </select>
                          <a href="#" class="help"></a> </div>
                      </div>
                      <span class="right relative"><a href="#" class="button1"><strong>Search</strong></a></span> </div>
                  </div>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </article>
    </div>
  </section>
  <!--content end-->
  
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
jQuery(document).ready(function ($) {
    $('.form_5').jqTransform({
        imgPath: 'jqtransformplugin/img/'
    });
});
$(document).ready(function () {
    tabs2.init();
});
</script>
</body>
</html>

<?php 
include('footer.php')
 ?>